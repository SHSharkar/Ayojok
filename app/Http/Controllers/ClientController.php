<?php

namespace App\Http\Controllers;

use App\Query;
use Illuminate\Http\Request;

use App\User;
use App\Models\address;
use App\Models\vendors;
use App\Models\products;
use App\Models\catagory;
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


    /**code for load queries*/
    $vendors = Query::where('user_id', $id)->with('catagory')->with('tag')->with('vendors')->with('package')->where('vendor_id', '!=', 0)->orderBy('updated_at','desc')->get();
    $services = Query::where('user_id', $id)->with('catagory')->with('tag')->where('product_id', '!=', 0)->with('product')->orderBy('updated_at','desc')->get();
    //return $vendors;


    /**Merging array*/
    $vendors = $vendors->merge($services);

    //return $vendors;


    return view('admin.client-single', compact('data','addresses','vendors', 'services'));
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

  public function loadCategory($type){

    $is_service = 0;
    if($type == "service"){
      $is_service =0;
    }else{
      $is_service = 1;
    }
    $categories = catagory::where('is_service',$is_service)->get();

    return view('admin.extra.select_options')->with('categories',$categories);
  }

  public function loadItem($category_id){
    $category = catagory::find($category_id);
    $items = null;
    if($category->is_service){
      $items = vendors::where('catagory_id',$category_id)->get();
    }else{
      $items = products::where('catagory_id',$category_id)->get();
    }
    //return $items;
    return view('admin.extra.select_options')->with('items',$items);
  }

  public function query_submit(Request $request){
    //return $request;

    $user_id = $request->user_id;
    $event_date = $request->event_date;
    $event_shift = $request->shift;
    $category_id = $request->category;
    $item_id = $request->item;
    $message = $request->long_description;

    $submit_id = (int)$user_id.rand(1000,100000);

    $query = new Query();

    $query->user_id = $user_id;
    $query->category_id = $category_id;
    $query->message = $message;
    $query->event_date = $event_date;
    $query->shift = $event_shift;

    if($request->service_type == "vendor"){
      $query->vendor_id = $item_id;
    }else{
      $query->product_id = $item_id;
    }

    $query->status = "Query Submitted";
    $query->submit_id = $submit_id;

    $query->save();

    return Redirect::back();

  }

}
