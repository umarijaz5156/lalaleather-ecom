<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Email extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $details;
    public $subject;
    public $fileAbsolutePath;
    public function __construct($details,$subject,$fileAbsolutePath = null)
    {
        $this->details = $details;
        $this->subject = $subject;
        $this->fileAbsolutePath = $fileAbsolutePath;

        // ddd($this->details);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if($this->fileAbsolutePath){
            return $this->subject( $this->subject)->view('email-template')->attach($this->fileAbsolutePath);
        }else{
            return $this->subject( $this->subject)->view('email-template');
        }
    }
}
