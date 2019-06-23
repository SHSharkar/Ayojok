<?php

namespace App\Http\Controllers;

use App\ChangeLog;
use App\Models\catagory;
use App\Models\products;
use App\Models\vendors;
use App\Query;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

// use App\Models\catagory;
use App\Models\querycart;
use App\User;
use Illuminate\Support\Facades\Mail;
use Validator;
use App\Models\order;

use App\jobs\SendEmail;

class QueryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userid = Auth::user()->id;
        $querydatas = querycart::with('vendors')->with('catagory')->with('package')->with('product')->where('user_id', $userid)->where('status', 0)->get();
        //dd($querydatas);
        return view('user.query-cart', compact('querydatas'));
    }

    public function show()
    {
        $userid = Auth::user()->id;
        //$confirmquerys = querycart::with('vendors')->with('catagory')->with('package')->with('product')->where('user_id', $userid)->where('status',0)->where('is_confirm', 1)->get();
        $querydatas = querycart::with('vendors')->with('catagory')->with('package')->with('product')->where('user_id', $userid)->where('is_confirm', 0)->get();
        //dd($querydatas);
        return view('user.account-query-cart', compact('querydatas'));
    }

    public function confirmOne($id)
    {
        //$userid = Auth::user()->id;
        $update = querycart::find($id);
        //dd($singledata);
        //$singledata->time;
        // $singledata->is_confirm = 1;
        // $singledata->save();
        // $update = querycart::find($id);

        $order = new order;
        $order->order_date = $update->maindate;
        $order->user_id = $update->user_id;
        $order->catagory_id = $update->catagory_id;
        $order->products_id = $update->products_id;
        $order->vendors_id = $update->vendors_id;
        $order->mess = $update->mess;
        $order->advance = $update->advance;
        $order->total = $update->total;
        $order->time = $update->time;
        $order->save();
        $update->delete();
        return redirect()->back()->with("modal_message", "Added to your Booking list");
        // return response()->json([
        //   'type' => 'sucess',
        //   'data' => $singledata,
        // ])->back();
    }

    public function deleteOne($id)
    {
        $singledata = querycart::find($id);
        $singledata->delete();
        return redirect()->back();
    }

    public function deleteAll($id)
    {
        $datas = querycart::where('user_id', $id)->delete();
        return redirect()->back();
    }

    public function destroy(Request $r)
    {
        $id = $r->input('id');
        $item = querycart::find($id);
        $item->delete();
        return response()->json(['id' => $id]);
    }

    public function send()
    {
        $userid = Auth::user()->id;
        $querydatas = querycart::where('user_id', $userid)->where('status', 0)->get();
        $set = $querydatas->first()->query_set;

        if ($querydatas->isNotEmpty()) {
            foreach ($querydatas as $querydata) {
                $value = array('status' => 1);
                $sendreq = querycart::where('user_id', $userid)->where('status', 0)->update($value);
            }
            return redirect()->route('query-send');
            // dd($querydata);
        } else {
            return back();
        }
    }

    public function adminlist()
    {
        // $datas = querycart::groupBy('user_id')->where('status',0)->with('user')->where('is_confirm', 0)->get();
        $datas = Query::groupBy('user_id')->with('user')->get();
        //print_r($datas);
        //$counts = querycart::groupBy('user_id')->groupBy('query_set')->where('status',1)->get(array('query_set', DB::raw('count(*) as total')))->get();
        //dd($datas);
        return view('admin.query', compact('datas'));

        /*$data=Query::get();
        print_r($data);*/
    }

    public function adminlistdetails($user)
    {
        /*$opens = querycart::where('user_id', $user)->where('is_open', 0)->get();
        foreach ($opens as $open) {
            $open->is_open = 1;
            $open->save();
        }*/
        $emails = Query::where('user_id', $user)->get();

        $datas = User::find($user);
        $vendors = Query::where('user_id', $user)->with('catagory')->with('tag')->with('vendors')->with('package')->where('vendor_id', '!=', 0)->orderBy('submit_id')->get();
        $services = Query::where('user_id', $user)->with('catagory')->with('tag')->where('product_id', '!=', 0)->with('product')->orderby('submit_id')->get();
        //dd($datas,$vendors,$services);
        return view('admin.query-single', compact('datas', 'vendors', 'services', 'emails'));
        //return $vendors;
    }

    public function reviewStatus($sid)
    {
        //return $sid;
        $queries=Query::where('submit_id',$sid)->get();
        foreach($queries as $query)
        {
            $query->status="In Review";
            $query->save();
        }

        return redirect()->back();
    }

    public function timeout()
    {
        date_default_timezone_set("Asia/Dhaka");
        $cdt=date("Y-m-d h:i A");

        $query=Query::where('expiry_date','<=',date('Y-m-d'))->get();
        foreach($query as $q)
        {
            if(strtotime($cdt)>=strtotime($q->expiry_date.' '.$q->expiry_time) && $q->status == "Available")
            {
                $q->status="Timeout";
                $q->save();
            }
        }
        echo $cdt;
    }

    public function updateQueryDetails(Request $request)
    {
        $query=Query::find($request->query_id);
        $query->event_date=$request->event_date;
        $query->shift=$request->shift;
        $query->total=$request->total;
        $query->advance=$request->advance;
        $query->discount=$request->discount;
        $query->payment=$query->payment+$request->payment;
        $query->status=$request->status;
        $query->save();

        if($request->status=="Available")
        {
            $ssquery = Query::where('submit_id', $query->submit_id)->get();

            foreach ($ssquery as $sq)
            {
                $sq->expiry_date = $request->expiry_date;
                $sq->expiry_time = $request->expiry_time;
                $sq->save();
            }
        }

        return redirect()->back();
    }

    public function UpdateStatus(Request $request)
    {
        //return $request;

        $validator = Validator::make($request->all(), [
            'advance' => 'required',
            'total' => 'required',
            'maindate' => 'required',
            'time' => 'required'
        ]);

        $id = $request->id;

        //$user = $request->user;


        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } else {

            // $update = querycart::find($id);
            // $order = new order;
            // $order->order_date = $update->date;
            // $order->user_id = $update->user_id;
            // $order->catagory_id = $update->catagory_id;
            // $order->products_id = $update->products_id;
            // $order->vendors_id = $update->vendors_id;
            // $order->mess = $update->mess;
            // $order->advance = $request->advance;
            // $order->total = $request->total;
            // $order->save();
            // $update->delete();

            $update = querycart::find($id);
            $update->advance = $request->advance;
            $update->total = $request->total;
            $update->time = $request->time;
            $update->maindate = $request->maindate;
            $update->status = 1;
            $update->is_available = 1;


            $update->save();

        }

        /**Change Logs- Start*/
        $catagorydata = catagory::find($update->catagory_id);

        $product = "";
        $product_service = "";
        if ($update->vendors_id > 0) {
            $product = vendors::find($update->vendors_id);
            $product_service = "vendor";
        } else if ($update->products_id > 0) {
            $product = products::find($update->products_id);
            $product_service = "service";
        }

        $customer = User::find($update->user_id);

        //echo $product->title;
        $message = "Confirm-Query for Customer ($customer->email) :: $product_service ( $product->title -> $catagorydata->name  ) by " . Auth::user()->name;
        $this->saveChangeLog($product_service, null, "query_cart", $update->id, $message, null, "confirm_query"); //($vendor_service,$package_gallery,$table_name,$table_id,$message,$action,$order_action)
        //exit;
        /**Change Logs- End*/

        return redirect()->back();
    }

    public function NoStatus($id, $user)
    {
        $updates = querycart::where('id', $id)->where('user_id', $user)->where('is_available', 0)->first();
        $updates->is_available = 2;
        //return $updates;
        $updates->save();

        //return $updates;

        /*foreach ($updates as $update) {
            $update->is_available = 2;
            $update->save();
        }*/



        /**Change Logs- Start*/
        $catagorydata = catagory::find($updates->catagory_id);

        $product = "";
        $product_service = "";
        if ($updates->vendors_id > 0) {
            $product = vendors::find($updates->vendors_id);
            $product_service = "vendor";
        } else if ($updates->products_id > 0) {
            $product = products::find($updates->products_id);
            $product_service = "service";
        }

        $customer = User::find($updates->user_id);

        //echo $product->title;
        $message = "delete-query for Customer ($customer->email) :: $product_service ( $product->title -> $catagorydata->name  ) by " . Auth::user()->name;
        $this->saveChangeLog($product_service, null, "query_cart", $updates->id, $message, null, "delete_query"); //($vendor_service,$package_gallery,$table_name,$table_id,$message,$action,$order_action)
        //exit;
        /**Change Logs- End*/


        // $updates = querycart::find($id);
        // $updates->delete();
        return redirect()->back();


    }

    public function confirmList()
    {
        $datas = querycart::groupBy('user_id')->where('is_confirm', 1)->where('status', 1)->with('user')->get();
        return view('admin.confirm', compact('datas'));
    }


    public function confirmSingle($user)
    {
        // $opens = querycart::where('user_id',$user)->where('query_set',$id)->where('is_open',0)->get();
        // foreach ($opens as $open) {
        //   $open->is_open = 1;
        //   $open->save();
        // }

        $datas = User::find($user);
        $vendors = querycart::where('user_id', $user)->with('catagory')->with('vendors')->with('package')->where('vendors_id', '!=', 0)->where('is_confirm', 1)->get();
        $services = querycart::where('user_id', $user)->with('catagory')->where('products_id', '!=', 0)->with('product')->where('is_confirm', 1)->get();
        //dd($datas,$vendors,$services);
        return view('admin.confirm-single', compact('datas', 'vendors', 'services'));
    }



    public function test_rough()
    {

        $data = [
            'name' => "Nirjhor",
            'email' => "nirjhor@nvisio.net",
            'contact' => "01685262326",
            'token' => "sdufihsd12487dsihd",
        ];

        SendEmail::dispatch($data);

        //echo "ok test";

        exit;

        // $datas = querycart::groupBy('user_id')->where('status',0)->with('user')->where('is_confirm', 0)->get();
        //    $datas = querycart::groupBy('user_id')->where('status',0)->with('user')->where('is_confirm', 0)->get();
        //$counts = querycart::groupBy('user_id')->groupBy('query_set')->where('status',1)->get(array('query_set', DB::raw('count(*) as total')))->get();
        //dd($datas);
        //return view('admin.query',compact('datas'));
        /*$datas_gruopBy_user_id['29']->count()*/
        //$datas_count_user_id = querycart::all();
        //$user = User::where('id',29)->first();
        //return $user-

        $data = Query::groupBy('vendor_id')->orderBy('created_at', 'asc')->get();

        //$datas = querycart::groupBy('catagory_id')->with('user')->get();

        $datas = querycart::where('status',0)->groupBy('user_id')->select('*', DB::raw('count(*) as total'))->get();


        return $datas;


        $datas_count_user_id = querycart::where('status', 0)->groupBy('user_id')->orderBy('created_at', 'asc')->select('user_id', 'created_at', DB::raw('count(*) as total'))->get();
        //return $datas_count_user_id[0]->user_id ;
        //return $datas_count_user_id ;

        $datas_for_query_icon = array();

        for ($i = 0; $i < $datas_count_user_id->count(); $i++) {
            $user_id = $datas_count_user_id[$i]->user_id;
            $user = User::where('id', $user_id)->first();
            $datas_for_query_icon[$i] = [
                'user_id' => $user_id,
                'total_query_as_user_id' => $datas_count_user_id[$i]->total,
                'user_name' => $user->name,
                'created_at' => $datas_count_user_id[$i]->created_at,
            ];
        }
        return $datas_for_query_icon;

        //$datas = querycart::where('status',0)->groupBy('user_id')->select('*', DB::raw('count(*) as total'))->get();
        //return $datas;
        //dd($datas);
        /*foreach($datas as $data){
          //echo $data->user_id."<br>";
        }
        $datas_gruopBy_user_id = $datas->groupBy('user_id');
        return($datas_gruopBy_user_id) ;*/

    }




    public function saveChangeLog($vendor_service = null, $package_gallery = null, $table_name = null, $table_id = null, $message = null, $action = null, $order_action = null)
    {
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
