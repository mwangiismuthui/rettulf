<?php

namespace App\Jobs;

use App\Mail\SendEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Mail;

class BulkEmailSender implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $data, $recipient_emails;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($recipient_emails, $data)
    {


        $this->recipient_emails = $recipient_emails;
        $this->data = $data;
        // dd($this->recipient_emails);

    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $subject = $this->data['subject'];
        $identifier = $this->data['identifier'];
        $from_email = $this->data['from_email'];
        $company_name = $this->data['company_name'];
        $message = $this->data['message'];

        if ($identifier=="PAYMENT-SENT") {
            $email = $this->recipient_emails;
            // dd($email);
            Mail::send('bulkEmail.paymentSent', $this->data, function ($message) use ($company_name, $from_email, $email) {
                $message->from($from_email, $company_name);

                $message->to($email)->subject($this->data['subject']);;
            });
        }
        elseif($identifier=="WITHDRAW-REQUEST"){
            $email = $this->recipient_emails;
            Mail::send('bulkEmail.withdraw', $this->data, function ($message) use ($company_name, $from_email, $email) {
                $message->from($from_email, $company_name);

                $message->to($email)->subject($this->data['subject']);;
            });
        }
        elseif($identifier=="MUSIC-DOWNLOADED"){
            $email = $this->recipient_emails;
            Mail::send('bulkEmail.succesfullDownload
            ', $this->data, function ($message) use  ($company_name, $from_email, $email) {
                $message->from($from_email, $company_name);

                $message->to($email)->subject($this->data['subject']);;
            });
        }
        elseif($identifier=="WELCOME-MESSAGE"){
            $email = $this->recipient_emails;
            Mail::send('bulkEmail.welcome', $this->data, function ($message) use ($company_name, $from_email, $email) {
                $message->from($from_email, $company_name);

                $message->to($email)->subject($this->data['subject']);;
            });
        }
        else{
        foreach ($this->recipient_emails as $email) {
                    Mail::send('bulkEmail.email', $this->data, function ($message) use ($from_email, $company_name, $email) {
                        $message->from($from_email, $company_name);

                        $message->to($email)->subject($this->data['subject']);;
                    });
                }
        }



    }
}
