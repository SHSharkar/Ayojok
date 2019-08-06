<?php

namespace App\Http\Controllers;

use App\EventCoordinator;
use App\Jobs\SendEmail;
use App\Mail\NewUserWelcome;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Session;
use App\Models\order;
use App\Models\querycart;
use App\Models\contactus;
use View;

class MailController extends Controller
{

    /*Email working for contact us*/
    public function postContactUs(Request $request)
    {


        $this->validate($request, [
            'email' => 'required|email',
            'message' => 'min:5',
            'phone' => 'min:10',
        ]);

        $email = $request->email;
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'bodyMessage' => $request->mess,
        ];


        /* if(Mail::send('emails.contact', $data, function ($mess) use ($data) {
             $mess->from('sazzad3029@gmail.com');
             $mess->to('mailatsajal@gmail.com');
             $mess->subject("Contact Us | Ayojok");
         })){
             echo "send";
         }else{
             echo "not";
         }*/

        /*Sennd Email by Queueing system*/
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'bodyMessage' => $request->mess,
            'mail_template' => "emails.contact",
        ];
        $data['token'] = str_random(32);


        /*Mail Sending In queue*/
        SendEmail::dispatch($data);

        $contact = new contactus;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->messbody = $request->mess;
        $contact->save();

        return Redirect::back()->with('success', "Email Send Successfully.");
    }

    // contact mail from event coordinator page
    public function postContact(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'message' => 'min:0',
            'phone' => 'min:10',
        ]);

        $contact = new EventCoordinator();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->messbody = $request->mess;
        $contact->save();
    }

    public function sendEmail()
    {

        echo Auth::user()->email;
        //exit;

        Mail::to(Auth::user()->email)->send(new NewUserWelcome());
    }


    public function mailVerification($email, $token)
    {
        //echo $email."<br>".$token;

        //echo "<br>".date('Y-m-d h:i:s');

        $date = date('Y-m-d h:i:s');

        $user = User::where('email', $email)->first();

        if (isset($user)) {
            if ($user->token === $token) {
                $user->email_verified_at = $date;
                $user->save();
                //echo "email Verified successfully.";

                /*Not use yet*/
                if (isset(Auth::user()->email)) {
                    //return view('pages.email_verification')->with('user',$user);
                } else {
                    //$pass = $user->password;
                    //$this->login($email,$pass);
                }


                return view('pages.email_verification')->with('user', $user);

            } else {
                // echo "<span style='color: red'>email not Verified. !!!!</span>";
                return view('pages.email_verification');
            }
        } else {
            //echo "<span style='color: red'>email not Verified. !!!!</span>";
            return view('pages.email_verification');
        }


    }

    /*Not use yet*/
    public function login($email, $pass)
    {
        $user_array = [];
        $user_array['email'] = $email;
        $user_array['password'] = $pass;

        //echo $pass;
        //exit;

        if (Auth::attempt($user_array)) {
            return Redirect::to('/');
        } else {
            echo "not login";
            //return Redirect::to('/')->with("reg_msg","1");
        }
    }

    // mail for order placement
    public function orderMail()
    {
        $setId = session('set');
        $user = Auth::user()->id;
        $datas = order::where("order_set", $setId)
            ->where("user_id", $user)
            ->with('product')
            ->with('senderaddress')
            ->with('receiveraddress')
            ->get();
        //$orders= array($datas);
        //  dd($user);
        //dd($datas);
        // $data = array(
        //   'name' => $request->name,
        //   'email' => $request->email,
        //   'phone' => $request->phone,
        //   'bodyMessage' => $request->message
        // );


        Mail::send('emails.order', ['orders' => $datas], function ($mess) use ($datas) {
            $mess->from('booking@ayojok.com', 'Ayojok.com');
            //$mess->bcc(Auth::user()->email);
            $mess->to(Auth::user()->email, Auth::user()->name);
            $mess->subject("Ayojok | Order");
        });

        //Session::flush();
        //dd($datas);
        $payment = $datas->first()->payment_type;

        return View::make('checkout.check4', ['payment' => $payment]);
    }

    public function queryMail(Request $r)
    {
        $user = $r->id;
        $vendor = $r->item;
        $datas = querycart::where("user_id", "=", $user)
            ->where("vendors_id", "=", $vendor)
            ->where("is_available", "=", 0)
            ->with('product')
            ->with('vendors')
            ->with('package')
            ->with('catagory')
            ->with('user')
            ->get();
        $querys = [$datas];
        //dd($querys);

        // Active when on live server
        Mail::send('emails.query', ['querys' => $datas], function ($mess) use ($datas) {
            $mess->from('booking@ayojok.com', 'Ayojok.com');
            $mess->to(Auth::user()->email, Auth::user()->name);
            $mess->subject("Ayojok | Query");
        });

        return back();
    }

    public function Notify(Request $r)
    {
        $user = Auth::user();
        //$query_set = $r->query_set;
        $datas = querycart::where("user_id", "=", $user->id)
            ->where("status", "=", 1)
            ->where("is_available", "=", 1)
            ->with('product')
            ->with('vendors')
            ->with('package')
            ->with('catagory')
            ->with('user')
            ->get();
        $querys = [$datas];

        // Active when on live server
        Mail::send('emails.query', ['querys' => $datas], function ($mess) use ($datas) {
            $mess->from('booking@ayojok.com', 'Ayojok.com');
            $mess->to(Auth::user()->email, Auth::user()->name);
            $mess->subject("Ayojok | Query Update");
        });

        return redirect()->back();
    }


}
