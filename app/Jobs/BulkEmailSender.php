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
        // dd($this->data);
        // dd( $this->data);
        foreach ($this->recipient_emails as $email) {
          
            Mail::send('bulkEmail.email', $this->data, function ($message) use ($email) {
                $message->from('me@gmail.com', 'Music App');
            
                $message->to($email)->subject($this->data['subject']);;
            });
        }
       
    }
}
