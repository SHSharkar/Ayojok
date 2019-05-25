<?php

namespace App\Http\Controllers;


use App\Tag;
use App\User;

use App\Query;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class MyQueryController extends Controller
{

    //

    public function __construct()
    {
        $this->middleware('auth');
    }




    public function go()
    {
        $datas = User::all();
        $v = array();


        $i =0;
        foreach ($datas as $data) {
            $v[$i] = [
                "name" => $data->name,
            ];
            $i++;
        }
        return $v;
    }

    public function index(){
        $user=Auth::user()->id;
        $vendors = Query::where('user_id', $user)->with('catagory')->with('vendors')->where('vendor_id', '!=', 0)->get();
        $services = Query::where('user_id', $user)->with('catagory')->with('product')->where('product_id', '!=', 0)->get();
        $vendor_arr=array();
        $service_arr=array();
        $query_arr=array();
        $query_arr1=array();
        $status="";
        $status1="";

        foreach ($vendors as $vendor)
        {
            //return $vendor->tag->title;
            if($vendor->tag_id != null){
                $tag_title = $vendor->tag->title;
                $tag_id = $vendor->tag_id;
            }else{
                $tag_title = null;
                $tag_id = null;
            }
            if(strtolower($vendor->status)=="booked")
            {
                $status="Booked";
            }
            else if($status!="Booked" && strtolower($vendor->status)=="available")
            {
                $status="available";
            }

            $q=array(
                "query_id" => $vendor->id,
                "query_tag" => $tag_title,
                "query_tag_id" => $tag_id,
                "event_date" => $vendor->event_date,
                "shift" => $vendor->shift,
                "total_payment" => $vendor->total,
                "advance_payment" => $vendor->advance,
                "discount" => $vendor->discount,
                "total_paid" => $vendor->payment,
                "status" => $vendor->status,
                "in_cart" => $vendor->in_cart
            );
            array_push($query_arr,$q);

            if($vendor->queue_id==0)
            {

                if($status=="Booked")
                {
                    $status="Booked";
                }
                else if($status=="available")
                {
                    //echo $status;
                    $status="Available";
                }
                else
                {

                    $status=$vendor->status;
                }

                $v=array(
                    "category_id" => $vendor->catagory->id,
                    "category_name" => $vendor->catagory->name,
                    "vendor_id" => $vendor->vendors->id,
                    "vendor_name" => $vendor->vendors->title,
                    "vendor_image" => $vendor->vendors->profile_img,
                    "expiry_date" => $vendor->expiry_date,
                    "expiry_time" => $vendor->expiry_time,
                    "display_status" => $status,
                    "query_details" => $query_arr
                );
                array_push($vendor_arr,$v);
                $query_arr=array();
                $status="";
            }
        }
        /*echo "<pre>";
        print_r($vendor_arr);
        exit;*/
        //return $vendor_arr;
        //return $vendor_arr[0]['query_details'];
        //print_r($vendor_arr);

        foreach ($services as $service)
        {
            if($service->tag_id != null){
                $tag_title = $service->tag->title;
                $tag_id = $service->tag_id;

            }else{
                $tag_title = null;
                $tag_id = null;

            }


            if($service->status=="Booked")
            {
                $status1="Booked";
            }
            else if($status1!="Booked" && $service->status=="Available")
            {
                $status1="Available";
            }

            $q=array(
                "query_id" => $service->id,
                "query_tag" => $tag_title,
                "query_tag_id" => $tag_id,
                "event_date" => $service->event_date,
                "shift" => $service->shift,
                "total_payment" => $service->total,
                "advance_payment" => $service->advance,
                "discount" => $service->discount,
                "total_paid" => $service->payment,
                "status" => $service->status,
                "in_cart" => $service->in_cart
            );
            array_push($query_arr1,$q);

            if($service->queue_id==0)
            {
                if($status1=="Booked")
                {
                    $status1="Booked";
                }
                else if($status1=="Available")
                {
                    $status1="Available";
                }
                else
                {
                    $status1=$service->status;
                }

                $v=array(
                    "category_id" => $service->catagory->id,
                    "category_name" => $service->catagory->name,
                    "vendor_id" => $service->product->id,
                    "vendor_name" => $service->product->title,
                    "vendor_image" => $service->product->profile_img,
                    "expiry_date" => $service->expiry_date,
                    "expiry_time" => $service->expiry_time,
                    "display_status" => $status1,
                    "query_details" => $query_arr1
                );
                array_push($service_arr,$v);
                $query_arr1=array();
            }
        }
        //print_r($service_arr);
        //return $service_arr;

        $user_id = Auth::user()->id;
        /*Event list as user specific*/
        $events = Tag::where('user_id',$user_id)->get();

        return view('user.my_query',compact('vendor_arr', 'service_arr','events'));
    }


    public function delete($query_ids){

        $query_ids = explode(',',$query_ids);
        //return $query_ids;

        foreach($query_ids as $id){
            $query = Query::find($id);
            $query->delete();
        }
        return Redirect::back();
        return "Delete SuccessFully";
    }

    public function addToCart($query_ids){
        $query_ids = explode(',',$query_ids);
        //return $query_ids;

        foreach($query_ids as $id){
            $query = Query::find($id);
            $query->in_cart = 1;
            $query->save();
        }

        $cart_query = Query::where('in_cart',1)->get();
        //return $cart_query;
    }

    public function add_new_event(Request $request,$tag_id){
        //return $request->event_name;
        //return $tag_id;

        $user_id = Auth::user()->id;
        $event_name = $request->event_name;

        $tag = new Tag();
        $tag->user_id = $user_id;
        $tag->title = $event_name;
        $tag->save();

        $events = Tag::where('user_id',$user_id)->get();


        return view('user.extra.event_list')->with('events',$events)->with('tag_id',$tag_id);
    }


    public function load_event($event_tag_id){

        //return $event_tag_id;

        $user_id = Auth::user()->id;
        $events = Tag::where('user_id',$user_id)->get();
        return view('user.extra.event_list')
            ->with('events',$events)
            ->with('tag_id',$event_tag_id);
        //return $event_tag_id;
    }

    public function addEven2Query($event_id,$query_ids){


        //return $event_id."<br>".$query_ids;

        $query_ids = explode(',',$query_ids);
        // return $query_ids;


        foreach($query_ids as $v_query_id){
            $query = Query::find($v_query_id);
            $query->tag_id = $event_id;
            $query->save();
        }

        //return $event_id."<br>".$query_ids;

        //return Redirect::to('/my-query');

    }
    public function removeEvent4mQuery($event_id,$query_ids,$tag_id){

        $user_id = Auth::user()->id;

        //return $event_id."<br>".$query_ids;

        $query_ids = explode(',',$query_ids);
        // return $query_ids;
        $queries = Query::where('tag_id',$event_id)->get();

        foreach($queries as $query){
            $query->tag_id = null;
            $query->save();
        }

        $tag = Tag::find($event_id);
        $tag->delete();

        $events = Tag::where('user_id',$user_id)->get();


        return view('user.extra.event_list')->with('events',$events)->with('events',$events)->with('tag_id',$tag_id);

        //return $event_id."<br>".$query_ids;

    }

}
