<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;

class SendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $data;

    //protected $message_test; //this is for testing parameters

    /**
     * Create a new job instance.
     *
     * return void
     */
    public function __construct($data)
    {
        //
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //

        $data = $this->data;
        /*Start - Email Sending to New Registered Users*/
        Mail::send($data['mail_template'], $data, function ($mess) use ($data) {
            $mess->from('sazzad3029@gmail.com');
            $mess->to($data['email']);
            $mess->subject("Contact Us | Ayojok");
        });

        //echo "Test : $this->message_test <br>";
    }
}
