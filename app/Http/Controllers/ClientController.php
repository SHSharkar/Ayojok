<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Models\address;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Session;

class ClientController extends Controller
{
  public function show(Request $request)
  {
    $datas = user::all();
    return view('admin.client', compact('datas'));
    //dd($datas);
  }
  public function showsingle($id)
  {
    $data = user::where('id',$id)->firstOrFail();
    $addresses = address::where('user_id',$id)->get();
    return view('admin.client-single', compact('data','addresses'));
    //dd($data,$addresses);
  }

  public function newClient(){
    return view('admin.add_client');
  }
  public function newClientSubmit(Request $request){
    //return $request;

    $validatedData = $request->validate([
        'first_name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'contact_number' => 'required|string',
        'password' => 'required|string|min:6',
    ]);

    $client = new User();

    $client->name = $request->first_name." ".$request->last_name;
    $client->email = $request->email;
    $client->fname = $request->first_name;
    $client->lname = $request->last_name;
    $client->contact = $request->contact_number;
    $client->address = $request->address;
    $client->mybudget = 0;

    $client->password =  Hash::make($request->password );

    $client->save();

    //return $client;

    return Redirect::back()->with('success',"New User .$client->name. added successfully.");

  }
}
