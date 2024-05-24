<?php

namespace App\Jobs;

use App\Mail\EnquiryMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Models\EmailConfig;
use App\Mail\Email; 

class EnquiryMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    protected $mailTo, $data;

    public function __construct($to, $enquiry)
    {
        $this->mailTo = $to;
        $this->data = $enquiry;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $email = EmailConfig::where('template_for','enquiry')->first();
        $find = ["{{user}}", "{{email}}", "{{phone}}","{{message}}","{{sending}}"];
		$replace = $this->data;
        if($email){
		    $email->template = str_replace($find, $replace, $email->template);
    		$email_template = new Email($email->template, $email->subject);
        }else{
            // dd($this->data);
            $temp = ' Contact Us Enquiry
            <p><strong>Name:</strong>'. $this->data['name'] .'</p>
            <p><strong>Email:</strong>'.$this->data['email'] .'</p>
            <p><strong>Phone:</strong>'.$this->data['phone'] .'</p>
            <p><strong>Message:</strong> '. $this->data['message'] .'</p>';
            // dd($temp);
    		$subject = 'You have received a Enquiry';
            $email_template =  new Email($temp, $subject);
        }
		try {
			Mail::to($this->mailTo)->send($email_template);
		} catch (\Exception $e) {
			\Log::error('Error sending email: ' . $e->getMessage());
			throw $e;
		}
    }
}