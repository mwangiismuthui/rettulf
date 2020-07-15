<?php

namespace App\Jobs;

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

        if ($subject=="Payment Sent") {
            $email = $this->recipient_emails;
            // dd($email);
            Mail::send('bulkEmail.paymentSent', $this->data, function ($message) use ($email) {
                $message->from('noreply@justerudite.com', 'Music App');
            
                $message->to($email)->subject($this->data['subject']);;
            });
        }
        elseif($subject=="Withdrawal Request Recieved"){
            $email = $this->recipient_emails;
            Mail::send('bulkEmail.withdraw', $this->data, function ($message) use ($email) {
                $message->from('noreply@justerudite.com', 'Music App');
            
                $message->to($email)->subject($this->data['subject']);;
            });
        }
        elseif($subject=="Your Music Has been Downloaded"){
            $email = $this->recipient_emails;
            Mail::send('bulkEmail.succesfullDownload
            ', $this->data, function ($message) use ($email) {
                $message->from('noreply@justerudite.com', 'Music App');
            
                $message->to($email)->subject($this->data['subject']);;
            });
        }
        elseif($subject=="Welcome to our Music Application"){
            $email = $this->recipient_emails;
            Mail::send('bulkEmail.welcome', $this->data, function ($message) use ($email) {
                $message->from('noreply@justerudite.com', 'Music App');
            
                $message->to($email)->subject($this->data['subject']);;
            });
        }
        else{
        foreach ($this->recipient_emails as $email) {
                
                    Mail::send('bulkEmail.email', $this->data, function ($message) use ($email) {
                        $message->from('noreply@justerudite.com', 'Music App');
                    
                        $message->to($email)->subject($this->data['subject']);;
                    });
                }
        }

        
       
    }
}
