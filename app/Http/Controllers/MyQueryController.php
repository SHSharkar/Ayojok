<?php

namespace App\Http\Controllers;


use App\Tag;
use App\User;

use App\Query;
use App\ExpireQuery;

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
        $qs=array();$ir=array();$av=array();$na=array();
        $b=array();$cr=array();$to=array();
        $not_qs=0;$not_ir=0;$not_av=0;$not_na=0;$not_b=0;$not_cr=0;$not_to=0;$not_total=0;

        foreach ($vendors as $vendor) {
            //return $vendor->tag->title;
            if ($vendor->tag_id != null) {
                $tag_title = $vendor->tag->title;
                $tag_id = $vendor->tag_id;
            } else {
                $tag_title = null;
                $tag_id = null;
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

            switch($vendor->status)
            {
                case 'Query Submitted':
                {
                    array_push($qs,$q);

                    if($vendor->is_open==0)
                    {
                        $not_qs=$not_qs+1;
                    }

                    break;
                }
                case 'In Review':
                {
                    array_push($ir,$q);

                    if($vendor->is_open==0)
                    {
                        $not_ir=$not_ir+1;
                    }

                    break;
                }
                case 'Available':
                {
                    array_push($av,$q);

                    if($vendor->is_open==0)
                    {
                        $not_av=$not_av+1;
                    }

                    break;
                }
                case 'Not Available':
                {
                    array_push($na,$q);

                    if($vendor->is_open==0)
                    {
                        $not_na=$not_na+1;
                    }

                    break;
                }
                case 'Booked':
                {
                    array_push($b,$q);

                    if($vendor->is_open==0)
                    {
                        $not_b=$not_b+1;
                    }

                    break;
                }
                case 'Cash Requested':
                {
                    array_push($cr,$q);

                    if($vendor->is_open==0)
                    {
                        $not_cr=$not_cr+1;
                    }

                    break;
                }
                case 'Timeout':
                {
                    array_push($to,$q);

                    if($vendor->is_open==0)
                    {
                        $not_to=$not_to+1;
                    }

                    break;
                }
            }

            if ($vendor->queue_id == 0)
            {
                if(!empty($qs))
                {
                    array_push($query_arr,array(
                        "display_status" => "Query Submitted",
                        "query_details" => $qs));

                }
                if(!empty($ir))
                {
                    array_push($query_arr,array(
                        "display_status" => "In Review",
                        "query_details" => $ir));
                }
                if(!empty($av))
                {
                    array_push($query_arr,array(
                        "display_status" => "Available",
                        "query_details" => $av));
                }
                if(!empty($na))
                {
                    array_push($query_arr,array(
                        "display_status" => "Not Available",
                        "query_details" => $na));
                }
                if(!empty($b))
                {
                    array_push($query_arr,array(
                        "display_status" => "Booked",
                        "query_details" => $b));
                }
                if(!empty($cr))
                {
                    array_push($query_arr,array(
                        "display_status" => "Cash Requested",
                        "query_details" => $cr));
                }
                if(!empty($to))
                {
                    array_push($query_arr1,array(
                        "display_status" => "Timeout",
                        "query_details" => $to));
                }

                $v = array(
                    "category_id" => $vendor->catagory->id,
                    "category_name" => $vendor->catagory->name,
                    "vendor_id" => $vendor->vendors->id,
                    "vendor_name" => $vendor->vendors->title,
                    "vendor_image" => $vendor->vendors->profile_img,
                    "submit_id" => $vendor->submit_id,
                    "expiry_date" => $vendor->expiry_date,
                    "expiry_time" => $vendor->expiry_time,
                    "query_list" => $query_arr,
                    "query_tag" => $tag_title,
                );
                array_push($vendor_arr, $v);
                $query_arr = array();$qs=array();$ir=array();$av=array();$na=array();
                $b=array();$cr=array();$to=array();
            }
        }
        /*echo "<pre>";
        print_r($vendor_arr);
        exit;*/
        //return $vendor_arr;
        foreach ($services as $service) {
            if ($service->tag_id != null) {
                $tag_title = $service->tag->title;
                $tag_id = $service->tag_id;

            } else {
                $tag_title = null;
                $tag_id = null;

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

            switch($service->status)
            {
                case 'Query Submitted':
                {
                    array_push($qs,$q);

                    if($vendor->is_open==0)
                    {
                        $not_qs=$not_qs+1;
                    }

                    break;
                }
                case 'In Review':
                {
                    array_push($ir,$q);

                    if($vendor->is_open==0)
                    {
                        $not_ir=$not_ir+1;
                    }

                    break;
                }
                case 'Available':
                {
                    array_push($av,$q);

                    if($vendor->is_open==0)
                    {
                        $not_av=$not_av+1;
                    }

                    break;
                }
                case 'Not Available':
                {
                    array_push($na,$q);

                    if($vendor->is_open==0)
                    {
                        $not_na=$not_na+1;
                    }

                    break;
                }
                case 'Booked':
                {
                    array_push($b,$q);

                    if($vendor->is_open==0)
                    {
                        $not_b=$not_b+1;
                    }

                    break;
                }
                case 'Cash Requested':
                {
                    array_push($cr,$q);

                    if($vendor->is_open==0)
                    {
                        $not_cr=$not_cr+1;
                    }

                    break;
                }
                case 'Timeout':
                {
                    array_push($to,$q);

                    if($vendor->is_open==0)
                    {
                        $not_to=$not_to+1;
                    }

                    break;
                }
            }

            if ($service->queue_id == 0) {

                if(!empty($qs))
                {
                    array_push($query_arr1,array(
                        "display_status" => "Query Submitted",
                        "query_details" => $qs));
                }
                if(!empty($ir))
                {
                    array_push($query_arr1,array(
                        "display_status" => "In Review",
                        "query_details" => $ir));
                }
                if(!empty($av))
                {
                    array_push($query_arr1,array(
                        "display_status" => "Available",
                        "query_details" => $av));
                }
                if(!empty($na))
                {
                    array_push($query_arr1,array(
                        "display_status" => "Not Available",
                        "query_details" => $na));
                }
                if(!empty($b))
                {
                    array_push($query_arr1,array(
                        "display_status" => "Booked",
                        "query_details" => $b));
                }
                if(!empty($cr))
                {
                    array_push($query_arr1,array(
                        "display_status" => "Cash Requested",
                        "query_details" => $cr));
                }
                if(!empty($to))
                {
                    array_push($query_arr1,array(
                        "display_status" => "Timeout",
                        "query_details" => $to));
                }

                $v = array(
                    "category_id" => $service->catagory->id,
                    "category_name" => $service->catagory->name,
                    "vendor_id" => $service->product->id,
                    "vendor_name" => $service->product->title,
                    "vendor_image" => $service->product->profile_img,
                    "submit_id" => $service->submit_id,
                    "expiry_date" => $service->expiry_date,
                    "expiry_time" => $service->expiry_time,
                    "query_list" => $query_arr1,
                    "query_tag" => $tag_title,

                );
                array_push($service_arr, $v);
                $query_arr1 = array();$qs=array();$ir=array();$av=array();$na=array();
                $b=array();$cr=array();$to=array();
            }
        }
        //print_r($service_arr);
        //return $service_arr;

        $user_id = Auth::user()->id;
        /*Event list as user specific*/
        $events = Tag::where('user_id', $user_id)->get();
        $expire = 0;
        $not_total=$not_qs+$not_ir+$not_av+$not_na+$not_b+$not_cr+$not_to;

        $not_arr=array(
            "Query Submitted" => $not_qs,
            "In Review" => $not_ir,
            "Available" => $not_av,
            "Not Available" => $not_na,
            "Booked" => $not_b,
            "Cash Requested" => $not_cr,
            "Timeout" => $not_to,
            "Total" => $not_total
        );

        //return $not_arr;
        return view('user.my_query', compact('vendor_arr', 'service_arr', 'events','expire','not_arr'));
    }
    public function expired_query()
    {
        $user = Auth::user()->id;

        $vendors = ExpireQuery::where('user_id', $user)->with('catagory')->with('vendors')->where('vendor_id', '!=', 0)->get();
        $services = ExpireQuery::where('user_id', $user)->with('catagory')->with('product')->where('product_id', '!=', 0)->get();


        $vendor_arr = array();
        $service_arr = array();
        $query_arr = array();
        $query_arr1 = array();
        $qs=array();$ir=array();$av=array();$na=array();
        $b=array();$cr=array();$to=array();

        foreach ($vendors as $vendor) {
            //return $vendor->tag->title;
            if ($vendor->tag_id != null) {
                $tag_title = $vendor->tag->title;
                $tag_id = $vendor->tag_id;
            } else {
                $tag_title = null;
                $tag_id = null;
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

            switch($vendor->status)
            {
                case 'Query Submitted':
                {
                    array_push($qs,$q);
                    break;
                }
                case 'In Review':
                {
                    array_push($ir,$q);
                    break;
                }
                case 'Available':
                {
                    array_push($av,$q);
                    break;
                }
                case 'Not Available':
                {
                    array_push($na,$q);
                    break;
                }
                case 'Booked':
                {
                    array_push($b,$q);
                    break;
                }
                case 'Cash Requested':
                {
                    array_push($cr,$q);
                    break;
                }
                case 'Timeout':
                {
                    array_push($to,$q);
                    break;
                }
            }

            if ($vendor->queue_id == 0)
            {
                if(!empty($qs))
                {
                    array_push($query_arr,array(
                        "display_status" => "Query Submitted",
                        "query_details" => $qs));

                }
                if(!empty($ir))
                {
                    array_push($query_arr,array(
                        "display_status" => "In Review",
                        "query_details" => $ir));
                }
                if(!empty($av))
                {
                    array_push($query_arr,array(
                        "display_status" => "Available",
                        "query_details" => $av));
                }
                if(!empty($na))
                {
                    array_push($query_arr,array(
                        "display_status" => "Not Available",
                        "query_details" => $na));
                }
                if(!empty($b))
                {
                    array_push($query_arr,array(
                        "display_status" => "Booked",
                        "query_details" => $b));
                }
                if(!empty($cr))
                {
                    array_push($query_arr,array(
                        "display_status" => "Cash Requested",
                        "query_details" => $cr));
                }
                if(!empty($to))
                {
                    array_push($query_arr1,array(
                        "display_status" => "Timeout",
                        "query_details" => $to));
                }

                $v = array(
                    "category_id" => $vendor->catagory->id,
                    "category_name" => $vendor->catagory->name,
                    "vendor_id" => $vendor->vendors->id,
                    "vendor_name" => $vendor->vendors->title,
                    "vendor_image" => $vendor->vendors->profile_img,
                    "submit_id" => $vendor->submit_id,
                    "expiry_date" => $vendor->expiry_date,
                    "expiry_time" => $vendor->expiry_time,
                    "query_list" => $query_arr,
                    "query_tag" => $tag_title,
                );
                array_push($vendor_arr, $v);
                $query_arr = array();$qs=array();$ir=array();$av=array();$na=array();
                $b=array();$cr=array();$to=array();
            }
        }
        /*echo "<pre>";
        print_r($vendor_arr);
        exit;*/
        //return $vendor_arr;
        foreach ($services as $service) {
            if ($service->tag_id != null) {
                $tag_title = $service->tag->title;
                $tag_id = $service->tag_id;

            } else {
                $tag_title = null;
                $tag_id = null;

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

            switch($service->status)
            {
                case 'Query Submitted':
                {
                    array_push($qs,$q);
                    break;
                }
                case 'In Review':
                {
                    array_push($ir,$q);
                    break;
                }
                case 'Available':
                {
                    array_push($av,$q);
                    break;
                }
                case 'Not Available':
                {
                    array_push($na,$q);
                    break;
                }
                case 'Booked':
                {
                    array_push($b,$q);
                    break;
                }
                case 'Cash Requested':
                {
                    array_push($cr,$q);
                    break;
                }
                case 'Timeout':
                {
                    array_push($to,$q);
                    break;
                }
            }

            if ($service->queue_id == 0) {

                if(!empty($qs))
                {
                    array_push($query_arr1,array(
                        "display_status" => "Query Submitted",
                        "query_details" => $qs));
                }
                if(!empty($ir))
                {
                    array_push($query_arr1,array(
                        "display_status" => "In Review",
                        "query_details" => $ir));
                }
                if(!empty($av))
                {
                    array_push($query_arr1,array(
                        "display_status" => "Available",
                        "query_details" => $av));
                }
                if(!empty($na))
                {
                    array_push($query_arr1,array(
                        "display_status" => "Not Available",
                        "query_details" => $na));
                }
                if(!empty($b))
                {
                    array_push($query_arr1,array(
                        "display_status" => "Booked",
                        "query_details" => $b));
                }
                if(!empty($cr))
                {
                    array_push($query_arr1,array(
                        "display_status" => "Cash Requested",
                        "query_details" => $cr));
                }
                if(!empty($to))
                {
                    array_push($query_arr1,array(
                        "display_status" => "Timeout",
                        "query_details" => $to));
                }

                $v = array(
                    "category_id" => $service->catagory->id,
                    "category_name" => $service->catagory->name,
                    "vendor_id" => $service->product->id,
                    "vendor_name" => $service->product->title,
                    "vendor_image" => $service->product->profile_img,
                    "submit_id" => $service->submit_id,
                    "expiry_date" => $service->expiry_date,
                    "expiry_time" => $service->expiry_time,
                    "query_list" => $query_arr1,
                    "query_tag" => $tag_title,

                );
                array_push($service_arr, $v);
                $query_arr1 = array();$qs=array();$ir=array();$av=array();$na=array();
                $b=array();$cr=array();$to=array();
            }
        }
        //print_r($service_arr);
        // return $service_arr;

        $user_id = Auth::user()->id;
        /*Event list as user specific*/
        $events = Tag::where('user_id', $user_id)->get();
        $expire = 1;

        return view('user.my_query', compact('vendor_arr', 'service_arr', 'events','expire'));

    }


    public function reRequest($query_ids)
    {

        //return $query_ids;

        $query_ids = explode(',', $query_ids);
        //return $query_ids;

        foreach ($query_ids as $id) {
            $query = Query::find($id);

            $query->status = "Query Submitted";

            $query->save();
        }
        return Redirect::back();
        //return "Delete SuccessFully";
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
        //return "Delete SuccessFully";
    }
    public function softDelete($query_ids)
    {

        $query_ids = explode(',', $query_ids);
        //return $query_ids;

        foreach ($query_ids as $id) {
            $query = Query::find($id);
            
            /*New Code for replicating*/
            $expired_query = new ExpireQuery();

            $expired_query->user_id = $query->user_id;
            $expired_query->category_id = $query->category_id;
            $expired_query->vendor_id = $query->vendor_id;
            $expired_query->product_id = $query->product_id;
            $expired_query->tag_id = $query->tag_id;
            $expired_query->unit = $query->unit;
            $expired_query->quantity = $query->quantity;
            $expired_query->message = $query->message;
            $expired_query->event_date = $query->event_date;
            $expired_query->shift = $query->shift;
            $expired_query->total = $query->total;
            $expired_query->advance = $query->advance;
            $expired_query->discount = $query->discount;
            $expired_query->payment = $query->payment;
            $expired_query->expiry_date = $query->expiry_date;
            $expired_query->expiry_time = $query->expiry_time;
            $expired_query->status = $query->status;
            $expired_query->is_available = $query->is_available;
            $expired_query->is_open = $query->is_open;

            $expired_query->in_cart = $query->in_cart;
            $expired_query->submit_id = $query->submit_id;
            $expired_query->queue_id = $query->queue_id;

            $expired_query->save();
            /*End of -> New Code for replicating*/
            
            $query->delete();
        }
        return Redirect::back();
        //return "Delete SuccessFully";
    }



    public function cashPayments($cart_query_ids,$cart_query_amounts){
        $cart_query_ids = explode(',', $cart_query_ids);
        $cart_query_amounts = explode(',', $cart_query_amounts);

        return $cart_query_amounts;

        foreach ($cart_query_ids as $id) {
            $query = Query::find($id);

            $query->status = "Cash Requested";
            $query->in_cart = 0;
            $query->save();
        }

        return Redirect::back();
    }


    public function showDates($query_ids,$status){
        //return $query_ids;
        $query_ids = explode(',', $query_ids);

        $user_id = Auth::user()->id;

        /*$queries =  Query::whereIn("id",$query_ids)
            ->where('status',$status)
            ->get();*/

        $queries =  Query::whereIn("id",$query_ids)->with('catagory')->with('vendors')->with('product')->get();

        $vendor_title = "";
        if(isset($queries[0]['product'])){
            $vendor_title = $queries[0]['product']['title'];
        }else{
            $vendor_title = $queries[0]['vendors']['title'];
        }

        //return $vendor_title;

        $same_details = [
            'category' =>  $queries[0]['catagory']['name'],
            'vendor_name' =>  $vendor_title,
        ];

        return  view('user.extra.dates')
            ->with('queries',$queries)
            ->with('same_details',$same_details);

    }

    public function addToCart($query_ids)
    {
        $query_ids = explode(',', $query_ids);
        //return $query_ids;

        foreach ($query_ids as $id) {
            $query = Query::find($id);

            if($query->total > ($query->discount+$query->payment))
            {
                $query->in_cart = 1;
                $query->save();
            }

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

    public function changeTimeOutStatus($qid)
    {
        //echo $qid;
        $querys=Query::where('submit_id',$qid)->get();
        foreach($querys as $query)
        {
            if($query->status=="Available")
            {
                $query->status="Timeout";
                $query->in_cart=0;
                $query->save();
            }
        }
        //return $query;
        return redirect()->back();
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

        //Tag Delete not needed cause expire queries need that tag still
        $tag = Tag::find($event_id);
        //return $tag->name;
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

       // return $queries;

        $details = array();
        $requested_dates = array();
        $available_dates = array();
        $booked_dates = array();

        // return $queries;

        $title = "";
        $image = "";
        $category = "";

        $total_available = 0;
        $advance_available = 0;
        $total_paid_available = 0;
        $discount_available = 0;
        $due_available = 0;

        $total_booked = 0;
        $advance_booked = 0;
        $total_paid_booked = 0;
        $discount_booked = 0;
        $due_booked = 0;


        $status = "";

        $i = 0;
        $counter_for_availabe = 0;
        $counter_for_booked = 0;
        foreach ($queries as $query) {


//            $status = $query->status;
            /*Select Status*/
            if (strtolower($query->status) == "booked") {
                $status = "Booked";
            } else if (strtolower($status) != "booked" && strtolower($query->status) == "available") {
                $status = "Available";
            }
            else if(strtolower($status) != "booked" && strtolower($status) != "available"){
                $status = $query->status;
            }


            if ($query->vendors != null) {
                $title = $query->vendors->title;
                $image = $query->vendors->profile_img;
            } else if ($query->product != null) {
                $title = $query->product->title;
                $image = $query->product->image;
            }
            $category = $query->catagory->name;

            if( strtolower($query->status) == 'available'){
                $available_dates[$counter_for_availabe] = [
                  'event_date' => $query->event_date,
                  'shift' => $query->shift,
                  'total' => $query->total,
                  'advance' => $query->advance,
                  'discount' => $query->discount,
                  'payment' => $query->payment,
                ];

                /*Calculate price details for available dates*/
                $total_available += $query->total;
                $advance_available += $query->advance;
                $total_paid_available += $query->payment;
                $discount_available += $query->discount;
                $counter_for_availabe++;
            }
            if(  strtolower($query->status) == 'booked'){
                $booked_dates[$counter_for_booked] = [
                    'event_date' => $query->event_date,
                    'shift' => $query->shift,
                    'total' => $query->total,
                    'advance' => $query->advance,
                    'discount' => $query->discount,
                    'payment' => $query->payment,
                ];

                /*Calculate price details for available dates*/
                $total_booked += $query->total;
                $advance_booked += $query->advance;
                $total_paid_booked += $query->payment;
                $discount_booked += $query->discount;

                $counter_for_booked++;
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

        $due_available = $total_available - ($total_paid_available + $discount_available);
        $due_booked = $total_booked - ($total_paid_booked + $discount_booked);



        $details = [
            'title' => $title,
            'category' => $category,
            'image_url' => $image,
            'requested_dates' => $requested_dates,
            'available_dates' => $available_dates,
            'booked_dates' => $booked_dates,

            'total_av' => $total_available,
            'advance_av' => $advance_available,
            'total_paid_av' => $total_paid_available,
            'discount_av' => $discount_available,
            'due_av' => $due_available,

            'total_booked' => $total_booked,
            'advance_booked' => $advance_booked,
            'total_paid_booked' => $total_paid_booked,
            'discount_booked' => $discount_booked,
            'due_booked' => $due_booked,

            'status' => $status,
            'query_message' => $query->message,
            'query_admin_reply' => $query->admin_reply,


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
                    'admin_message' => $q->admin_message,
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
                    'admin_message' => $q->admin_message,
                    'status' => $q->status,
                ];
            }
        }
        return view('user.extra.query_details_admin')->with('details',$details);
    }
}
