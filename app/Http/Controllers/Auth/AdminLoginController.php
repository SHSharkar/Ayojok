<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
  public function __construct(){
    $this->middleware('guest:admin');
  }

  public function showLoginForm(){
    return view('auth.admin-login');
  }

  public function login(Request $request)
  {
    //validate the form
    $this->validate($request, [
      'email' => 'required|email',
      'password' => 'required|min:6'
    ]);

    //return $result;


    //Attempt to log the user in
    if ($result = Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
      //if successful, then redirect to their intended location
      return redirect()->intended(route('adminhome'));
    }else{

      //if unsucessful, then redirect back to the login with the form data
      return redirect()->back()->withInput($request->only('email','remember'))->withErrors([ "msg" => "User credentials doesn't match" ]);
    }

  }
}
