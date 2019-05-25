<?php

namespace App\Http\Controllers;

use App\Admin;
use App\ChangeLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function index()
    {
        $datas = array();

        $admins = Admin::with('changeLog')->get();
        //return $admins;

        $add =0; $delete = 0; $update= 0;
        $i = 0;
        foreach($admins as $admin){
            $add =0; $delete = 0; $update= 0;

            foreach($admin->changeLog as $adLog){

                if($adLog->action === 'add')
                {
                    $add++;
                }
                elseif($adLog->action === 'update'){
                    $update++;
                }elseif($adLog->action === 'delete'){
                    $delete++;
                }

            }


            $datas[$i] = [
                'name'      =>   $admin->name,
                'add'       =>   $add,
                'update'    =>   $update,
                'delete'    =>   $delete,
            ];

          $i++;
        }
        //return $datas[0]['name'];

        $changeLogs = ChangeLog::orderBy('id', 'desc')->get();
        //return $changeLogs;


        return view('admin.index')
            ->with('changeLogs',$changeLogs)
            ->with('datas',$datas);

        //return $datas;

        //$change_log = $admins[1]->changeLog;
        //$datas = $change_log->where('action','add')->get();

       /* return $change_log[0]->action;

        return $admins;
        return $admins[1]->changeLog;
        foreach($admins as $admin){
            if($i<3){
                echo $i;
                $i++;
                continue;
            }
            return $admin->change_log;
            $i++;
        }*/


    }

    public function Show_addNewUser(){
        //echo "show user add";
        if(Auth::user()->job_title === "admin"){
            return view('admin.add_adminUser');
        }else{
            $permission = 0;
            return view('admin.add_adminUser', compact('permission'));
        }
    }


    public function addNewUserSubmit(Request $request){
        //return $request;
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => 'required|string|min:6',

        ]);

        //return $validatedData;

       $result = Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'job_title' =>$request->role,
            'password' => Hash::make($request->password),
        ]);
        //return $result;

        /**Change Logs- Start*/

        $message = "New user ($result->name) added by-".Auth::user()->name;
        $this->saveChangeLog(null,null,"admins",null,$message,"add",null); //($vendor_service,$package_gallery,$table_name,$table_id,$message,$action,$order_action)
        /**Change Logs- End*/

        return redirect()->back()->with('success', "your added a new ".$request->role." ." );
    }


    public function show_UserList(){

        if(Auth::user()->job_title === "admin"){
            $datas = Admin::all();
            return view('admin.show_adminList', compact('datas'));
        }else{
            $permission = 0;
            return view('admin.show_adminList', compact('permission'));
        }


        //return $datas;

        //return view('admin.show_adminList');

    }

    public function adminDelete($id){

        $data = Admin::find($id);

        /**Change Logs- Start*/
        $message = "User ($data->name) Deleted by-".Auth::user()->name;
        $this->saveChangeLog(null,null,"admins",null,$message,"delete",null); //($vendor_service,$package_gallery,$table_name,$table_id,$message,$action,$order_action)
        /**Change Logs- End*/


        $data->delete();

        return Redirect::back();
    }
    public function editAdmin($id){

        $data = Admin::find($id);

        if(Auth::user()->job_title === "admin"){
            $data = Admin::find($id);
            return view('admin.edit_adminUser', compact('data'));
        }else{
            $permission = 0;
            return view('admin.edit_adminUser', compact('permission'));
        }
        return $id;
    }

    public function UpdateAdminUser(Request $request, $id){

        //echo "ok";
        //exit;

        $adminUser = Admin::find($id);

        if(isset($request->name)){
            $adminUser->name  = $request->name;
        }
        if(isset($request->role)){
            $adminUser->job_title  = $request->role;
        }
        if(isset($request->email)){
            $adminUser->email  = $request->email;
        }
        if (isset($request->password)) {
            $adminUser->password = Hash::make( $request->password);
        }

        $adminUser->save();
        //return $request;

        /**Change Logs- Start*/
        $message = "User ($adminUser->name) Info Updated by-".Auth::user()->name;
        $this->saveChangeLog(null,null,"admins",null,$message,"update",null); //($vendor_service,$package_gallery,$table_name,$table_id,$message,$action,$order_action)
        /**Change Logs- End*/

        return Redirect::back()->with('success','You successfully updated the information.');

    }


    public function saveChangeLog($vendor_service=null,$package_gallery=null,$table_name=null,$table_id=null,$message=null,$action=null,$order_action=null){

        $changeLog = new ChangeLog();

        $changeLog->admin_id = Auth::user()->id;

        $changeLog->vendor_service = $vendor_service;
        $changeLog->package_gallery = $package_gallery;
        $changeLog->table_name = $table_name;
        $changeLog->table_id = $table_id;
        $changeLog->message = $message;
        $changeLog->action = $action;
        $changeLog->order_action = $order_action;

        $changeLog->save();

    }



}
