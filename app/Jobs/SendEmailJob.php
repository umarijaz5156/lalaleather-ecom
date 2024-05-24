<?php
// app/Jobs/SendAdminEmailJob.php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $to;
    protected $emailTemplate;

    public function __construct($to, $emailTemplate)
    {
        $this->to = $to;
        $this->emailTemplate = $emailTemplate;
    }

    public function handle()
    {
        Mail::to($this->to)->send($this->emailTemplate);
    }
}
