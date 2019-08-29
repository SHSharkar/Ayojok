<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\address;
use Auth;
use Illuminate\Support\Facades\Redirect;

class PersonalInfoController extends Controller
{
    public function test_get_method()
    {
        $pattern = '/.com/';
        echo $server_name = $_SERVER['SERVER_NAME'];
        if (preg_match($pattern, $server_name)) {
            $path = base_path();
        } else {
            $path = public_path();
        }

        echo '<be> path after condition: '.$path;
    }

    public function test_post_method()
    {

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

    /**
     * @param  \App\User  $user
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($personal_info)
    {
        //$users = User::find($id);
        //$address = address::where('user_id',$id)->pluck('addressName','id');
        //$mines = address::where('id',$users->address_id)->get();
        //dd($mines);

        $user = User::whereId($personal_info)->firstOrFail();

        return view('user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->fname = request('fname');
        $user->lname = request('lname');
        $user->email = request('email');
        $user->contact = request('contact');
        $user->address = request('address');
        if (request('password') == null) {
            $user->update();
        } else {
            $user->password = bcrypt(request('password'));
            $user->update();
        }

        return Redirect::back();
    }


    public function destroy($id)
    {
        //
    }
}
