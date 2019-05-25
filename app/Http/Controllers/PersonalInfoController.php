<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\address;
use Auth;
use Illuminate\Support\Facades\Redirect;

class PersonalInfoController extends Controller
{



    public function test_get_method(){

        $pattern ="/.com/";
        echo $server_name = $_SERVER['SERVER_NAME'];
        if(preg_match($pattern,$server_name)){
            $path = base_path();
        }else{
            $path = public_path();
        }

        echo "<be> path after condition: ".$path;

    }
    public function test_post_method(){

    }

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $users = User::find($id);
        //$address = address::where('user_id',$id)->pluck('addressName','id');
      //$mines = address::where('id',$users->address_id)->get();
        //dd($mines);
        return view('user.edit',compact('users'));
    }


    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user -> fname = request('fname');
        $user -> lname = request('lname');
        $user -> email = request('email');
        $user -> contact = request('contact');
        $user -> address = request('address');
        if (is_null(request('password'))) {
          $user->update();
        }else{
        $user -> password = bcrypt(request('password'));
        $user->update();
        }
        return Redirect::back();
    }


    public function destroy($id)
    {
        //
    }
}
