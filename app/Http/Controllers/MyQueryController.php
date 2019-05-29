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


        $i = 0;
        foreach ($datas as $data) {
            $v[$i] = [
                "name" => $data->name,
            ];
            $i++;
        }
        return $v;
    }

    public function index()
    {
        $user = Auth::user()->id;
        $vendors = Query::where('user_id', $user)->with('catagory')->with('vendors')->where('vendor_id', '!=', 0)->get();
        $services = Query::where('user_id', $user)->with('catagory')->with('product')->where('product_id', '!=', 0)->get();
        $vendor_arr = array();
        $service_arr = array();
        $query_arr = array();
        $query_arr1 = array();
        $status = "";
        $status1 = "";

        foreach ($vendors as $vendor) {
            //return $vendor->tag->title;
            if ($vendor->tag_id != null) {
                $tag_title = $vendor->tag->title;
                $tag_id = $vendor->tag_id;
            } else {
                $tag_title = null;
                $tag_id = null;
            }
            if (strtolower($vendor->status) == "booked") {
                $status = "Booked";
            } else if ($status != "Booked" && strtolower($vendor->status) == "available") {
                $status = "available";
            }

            $q = array(
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
            array_push($query_arr, $q);

            if ($vendor->queue_id == 0) {

                if ($status == "Booked") {
                    $status = "Booked";
                } else if ($status == "available") {
                    //echo $status;
                    $status = "Available";
                } else {

                    $status = $vendor->status;
                }

                $v = array(
                    "category_id" => $vendor->catagory->id,
                    "category_name" => $vendor->catagory->name,
                    "vendor_id" => $vendor->vendors->id,
                    "vendor_name" => $vendor->vendors->title,
                    "vendor_image" => $vendor->vendors->profile_img,
                    "expiry_date" => $vendor->expiry_date,
                    "expiry_time" => $vendor->expiry_time,
                    "display_status" => $status,
                    "query_details" => $query_arr,
                    "query_tag" => $tag_title,
                );
                array_push($vendor_arr, $v);
                $query_arr = array();
                $status = "";
            }
        }
        /*echo "<pre>";
        print_r($vendor_arr);
        exit;*/
        //return $vendor_arr;
        //return $vendor_arr[0]['query_details'];
        //print_r($vendor_arr);

        foreach ($services as $service) {
            if ($service->tag_id != null) {
                $tag_title = $service->tag->title;
                $tag_id = $service->tag_id;

            } else {
                $tag_title = null;
                $tag_id = null;

            }


            if ($service->status == "Booked") {
                $status1 = "Booked";
            } else if ($status1 != "Booked" && $service->status == "Available") {
                $status1 = "Available";
            }

            $q = array(
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
            array_push($query_arr1, $q);

            if ($service->queue_id == 0) {
                if ($status1 == "Booked") {
                    $status1 = "Booked";
                } else if ($status1 == "Available") {
                    $status1 = "Available";
                } else {
                    $status1 = $service->status;
                }

                $v = array(
                    "category_id" => $service->catagory->id,
                    "category_name" => $service->catagory->name,
                    "vendor_id" => $service->product->id,
                    "vendor_name" => $service->product->title,
                    "vendor_image" => $service->product->profile_img,
                    "expiry_date" => $service->expiry_date,
                    "expiry_time" => $service->expiry_time,
                    "display_status" => $status1,
                    "query_details" => $query_arr1,
                    "query_tag" => $tag_title,

                );
                array_push($service_arr, $v);
                $query_arr1 = array();
            }
        }
        //print_r($service_arr);
        //return $service_arr;

        $user_id = Auth::user()->id;
        /*Event list as user specific*/
        $events = Tag::where('user_id', $user_id)->get();

        return view('user.my_query', compact('vendor_arr', 'service_arr', 'events'));
    }


    public function delete($query_ids)
    {

        $query_ids = explode(',', $query_ids);
        //return $query_ids;

        foreach ($query_ids as $id) {
            $query = Query::find($id);
            $query->delete();
        }
        return Redirect::back();
        return "Delete SuccessFully";
    }

    public function addToCart($query_ids)
    {
        $query_ids = explode(',', $query_ids);
        //return $query_ids;

        foreach ($query_ids as $id) {
            $query = Query::find($id);
            $query->in_cart = 1;
            $query->save();
        }

        /*$vendors = Query::where('user_id', $user_id)->where('in_cart',1)->with('catagory')->with('vendors')->where('vendor_id', '!=', 0)->orderBy('submit_id')->get();
        $services = Query::where('user_id', $user_id)->where('in_cart',1)->with('catagory')->with('product')->where('product_id', '!=', 0)->orderBy('submit_id')->get();
        $vendor_arr=array();
        $service_arr=array();
        $query_arr=array();
        $query_arr1=array();

        foreach ($vendors as $vendor)
        {
            $q=array(
                "query_id" => $vendor->id,
                "event_date" => $vendor->event_date,
                "total_payment" => $vendor->total,
                "advance_payment" => $vendor->advance,
                "discount" => $vendor->discount,
                "total_paid" => $vendor->payment,
            );
            array_push($query_arr,$q);

            if($vendor->queue_id==0)
            {
                $v=array(
                    "category_name" => $vendor->catagory->name,
                    "vendor_name" => $vendor->vendors->title,
                    "query_details" => $query_arr
                );
                array_push($vendor_arr,$v);
                $query_arr=array();
            }
        }

        foreach ($services as $service)
        {
            $q=array(
                "query_id" => $service->id,
                "event_date" => $service->event_date,
                "total_payment" => $service->total,
                "advance_payment" => $service->advance,
                "discount" => $service->discount,
                "total_paid" => $service->payment,
            );
            array_push($query_arr1,$q);

            if($service->queue_id==0)
            {
                $v=array(
                    "category_name" => $service->catagory->name,
                    "vendor_name" => $service->product->title,
                    "query_details" => $query_arr1
                );
                array_push($service_arr,$v);
                $query_arr1=array();
            }
        }
        //print_r($service_arr);
        //return $service_arr;

        return view('user.extra.cart',compact('vendor_arr','service_arr'));*/

        return $this->loadCart();

    }

    public function removeFromCart($id)
    {
        $query = Query::find($id);
        $query->in_cart = 0;
        $query->save();

        return $this->loadCart();
    }

    public function loadCart()
    {
        $user_id = Auth::user()->id;
        $vendors = Query::where('user_id', $user_id)->where('in_cart', 1)->with('catagory')->with('vendors')->where('vendor_id', '!=', 0)->orderBy('submit_id')->get();
        $services = Query::where('user_id', $user_id)->where('in_cart', 1)->with('catagory')->with('product')->where('product_id', '!=', 0)->orderBy('submit_id')->get();
        $vendor_arr = array();

        foreach ($vendors as $vendor) {

            $ed = $vendor->event_date;
            $event_date = date("M d", strtotime($ed));

            $due=($vendor->total)-($vendor->discount)-($vendor->payment);
            $amount=0;$min=0;$max=0;

            if(strtolower($vendor->status)=="booked" && $due!=0)
            {
                $amount=$due;
                $min=$due;
                $max=$due;
            }
            else
            {
                $amount=$vendor->advance;
                $min=$vendor->advance;
                $max=$due;
            }

            $v = array(
                "query_id" => $vendor->id,
                "event_date" => $event_date,
                "category_name" => $vendor->catagory->name,
                "vendor_name" => $vendor->vendors->title,
                "total_payment" => $vendor->total,
                "advance_payment" => $vendor->advance,
                "discount" => $vendor->discount,
                "total_paid" => $vendor->payment,
                "amount" => $amount,
                "min" => $min,
                "max" => $max
            );
            array_push($vendor_arr, $v);
        }

        foreach ($services as $service) {

            $ed = $service->event_date;
            $event_date = date("M d", strtotime($ed));

            $due=($service->total)-($service->discount)-($service->payment);
            $amount=0;$min=0;$max=0;

            if(strtolower($service->status)=="booked" && $due!=0)
            {
                $amount=$due;
                $min=$due;
                $max=$due;
            }
            else
            {
                $amount=$service->advance;
                $min=$service->advance;
                $max=$due;
            }

            $s = array(
                "query_id" => $service->id,
                "event_date" => $event_date,
                "category_name" => $service->catagory->name,
                "vendor_name" => $service->product->title,
                "total_payment" => $service->total,
                "advance_payment" => $service->advance,
                "discount" => $service->discount,
                "total_paid" => $service->payment,
                "amount" => $amount,
                "min" => $min,
                "max" => $max
            );
            array_push($vendor_arr, $s);
        }
        return view('user.extra.cart', compact('vendor_arr'));
    }

    public function add_new_event(Request $request, $tag_id)
    {
        //return $request->event_name;
        //return $tag_id;

        $user_id = Auth::user()->id;
        $event_name = $request->event_name;

        $tag = new Tag();
        $tag->user_id = $user_id;
        $tag->title = $event_name;
        $tag->save();

        $events = Tag::where('user_id', $user_id)->get();


        return view('user.extra.event_list')->with('events', $events)->with('tag_id', $tag_id);
    }


    public function load_event($event_tag_id)
    {

        //return $event_tag_id;

        $user_id = Auth::user()->id;
        $events = Tag::where('user_id', $user_id)->get();
        return view('user.extra.event_list')
            ->with('events', $events)
            ->with('tag_id', $event_tag_id);
        //return $event_tag_id;
    }

    public function addEven2Query($event_id, $query_ids)
    {


        // return $event_id."<br>".$query_ids;

        $query_ids = explode(',', $query_ids);
        // return $query_ids;

        if ($event_id == 0) {
            foreach ($query_ids as $v_query_id) {
                $query = Query::find($v_query_id);
                $query->tag_id = null;
                $query->save();
            }

        } else {
            foreach ($query_ids as $v_query_id) {
                $query = Query::find($v_query_id);
                $query->tag_id = $event_id;
                $query->save();
            }

        }


        //return $event_id."<br>".$query_ids;

        //return Redirect::to('/my-query');

    }

    public function removeEvent4mQuery($event_id, $query_ids, $tag_id)
    {

        $user_id = Auth::user()->id;

        //return $event_id."<br>".$query_ids;

        $query_ids = explode(',', $query_ids);
        // return $query_ids;
        $queries = Query::where('tag_id', $event_id)->get();

        foreach ($queries as $query) {
            $query->tag_id = null;
            $query->save();
        }

        $tag = Tag::find($event_id);
        $tag->delete();

        $events = Tag::where('user_id', $user_id)->get();


        return view('user.extra.event_list')->with('events', $events)->with('events', $events)->with('tag_id', $tag_id);

        //return $event_id."<br>".$query_ids;

    }


    /*Load query details in a modal- Ajax*/
    public function loadQueryDetails($query_ids)
    {
        //return $query_ids;
        $query_ids = explode(',', $query_ids);
        $queries = Query::whereIn('id', $query_ids)->with('catagory')->with('vendors')->with('product')->get();

        //return $queries;

        $details = array();
        $requested_dates = array();
        $available_dates = array();

        // return $queries;

        $title = "";
        $image = "";
        $category = "";

        $total = 0;
        $advance = 0;
        $due = 0;
        $total_paid = 0;

        $i = 0;
        $counter_for_availabe = 0;
        foreach ($queries as $query) {


            if ($query->vendors != null) {
                $title = $query->vendors->title;
                $image = $query->vendors->profile_img;
            } else if ($query->product != null) {
                $title = $query->product->title;
                $image = $query->product->image;
            }
            $category = $query->catagory->name;

            if( $query->status == 'Available'){
                $available_dates[$counter_for_availabe] = [
                  'event_date' => $query->event_date,
                  'shift' => $query->shift,
                  'total' => $query->total,
                  'advance' => $query->advance,
                  'discount' => $query->discount,
                  'payment' => $query->payment,
                ];

                /*Calculate price details for available dates*/
                $total += $query->total;
                $advance += $query->advance;
                $total_paid += $query->payment;

                $counter_for_availabe++;
            }

            $requested_dates[$i] = [
                'event_date' => $query->event_date,
                'shift' => $query->shift,
                'total' => $query->total,
                'advance' => $query->advance,
                'discount' => $query->discount,
                'payment' => $query->payment,
            ];
            $i++;
        }

        $due = $total - $total_paid;



        $details = [
            'title' => $title,
            'category' => $category,
            'image_url' => $image,
            'requested_dates' => $requested_dates,
            'available_dates' => $available_dates,
            'total' => $total,
            'advance' => $advance,
            'total_paid' => $total_paid,
            'due' => $due,

        ];

        //return $details;
        return view('user.extra.query_details')->with('details',$details);
    }

    /*Load query details in a modal- Ajax*/
    public function loadQueryDetailsAdmin($query_ids)
    {
        $query = Query::where('id',$query_ids)->with('catagory')->with('vendors')->with('product')->get();
        //print_r($query);
        foreach($query as $q)
        {
            //print_r($q->category);
            if($q->product_id==null)
            {
                $details = [
                    'id' => $q->id,
                    'title' => $q->vendors->title,
                    'category' => $q->catagory->name,
                    'image_url' => $q->vendors->profile_img,
                    'event_date' => $q->event_date,
                    'shift' => $q->shift,
                    'total' => $q->total,
                    'advance' => $q->advance,
                    'discount' => $q->discount,
                    'payment' => $q->payment,
                    'expiry_date' => $q->expiry_date,
                    'expiry_time' => $q->expiry_time,
                    'status' => $q->status,
                ];
            }

            else if($q->vendor_id==null)
            {
                $details = [
                    'id' => $q->id,
                    'title' => $q->product->title,
                    'category' => $q->catagory->name,
                    'image_url' => $q->product->image,
                    'event_date' => $q->event_date,
                    'shift' => $q->shift,
                    'total' => $q->total,
                    'advance' => $q->advance,
                    'discount' => $q->discount,
                    'payment' => $q->payment,
                    'expiry_date' => $q->expiry_date,
                    'expiry_time' => $q->expiry_time,
                    'status' => $q->status,
                ];
            }
        }
        return view('user.extra.query_details_admin')->with('details',$details);
    }
}
