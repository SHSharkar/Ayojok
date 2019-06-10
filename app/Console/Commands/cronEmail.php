<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class cronEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notify:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sending Email To Every Registered Users.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //Code for sending Email


        $data = [
            'name' => "Nirjhor",
            'email' => "nirjhor@nvisio.net",
            'contact' => "01685262326",
            'token' => "sdufihsd12487dsihd",
        ];

        /*Start - Email Sending to New Registered Users*/
        Mail::send('emails.user.email_to_new_user', $data, function ($mess) use ($data) {
            $mess->from('sazzad3029@gmail.com');
            $mess->to($data['email']);
            $mess->subject("Contact Us | Ayojok");
        });
        /*End - Email Sending to New Registered Users*/
    }
}
