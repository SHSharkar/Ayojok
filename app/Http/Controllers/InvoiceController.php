<?php

namespace App\Http\Controllers;

use App\Query;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvoiceController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($q_id)
    {
        $query_ids = explode(',',$q_id);

        //return $query_ids;
        //$queries = Query::where('id')
        $user_id =  Auth::user()->id;

        //return $user_id;

        $details = Query::whereIn('id',$query_ids)->where('user_id',$user_id)->where('status',"Booked")->with('user')->with('catagory')->with('vendors')->with('product')->with('invoices')->get();

        $user_info = $details[0]['user'];
        $category = $details[0]['catagory'];

        $product = "";
        if($details[0]['product'] != null){
            $product = $details[0]['product'];
        }else{
            $product = $details[0]['vendors'];
        }
        $category = $details[0]['catagory'];

        //return $details;



        return view('user.extra.invoice')
            ->with('user_info',$user_info)
            ->with('details',$details)
            ->with('product',$product)
            ->with('category',$category);



    }

    public function invoiceFromAdmin($u_id,$sub_id)
    {
        //$query_ids = explode(',',$q_id);

        //return $query_ids;
        //$queries = Query::where('id')
        $user_id =  $u_id;

        //return $user_id;

        $details = Query::where('submit_id',$sub_id)->where('user_id',$user_id)->where('status',"Booked")->with('user')->with('catagory')->with('vendors')->with('product')->with('invoices')->get();

        $user_info = $details[0]['user'];
        $category = $details[0]['catagory'];

        $product = "";
        if($details[0]['product'] != null){
            $product = $details[0]['product'];
        }else{
            $product = $details[0]['vendors'];
        }
        $category = $details[0]['catagory'];

        //return $details;



        return view('user.extra.invoice')
            ->with('user_info',$user_info)
            ->with('details',$details)
            ->with('product',$product)
            ->with('category',$category);



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
