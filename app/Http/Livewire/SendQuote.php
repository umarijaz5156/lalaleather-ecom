<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Jobs\EnquiryMailJob;
use App\Mail\EnquiryMail;
use App\Models\Enquiry;
use Illuminate\Support\Facades\Mail;
class SendQuote extends Component
{
    public $quote;
    public $name, $email, $message, $phone;
    public $sending = false;

    public function sendQuote()
    {
        $this->validate([
            'name' => 'required|min:3|max:255',
            'phone' => 'required|numeric|digits_between:10,50',
            'email' => 'required|email|max:255',
            'message' => 'required|max:1000',

        ]);

        $this->sending = true;
        $data = [
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'message' => $this->message,
            'enquiry_from' => 'Contact Us'
        ];
        Enquiry::create($data);

        session()->flash('message', 'Message Sent successfully:)');
        $this->reset('name', 'email', 'phone', 'message', 'sending');
        
        $to = optional(\App\Models\ConfigBasic::find(1))->admin_email ?? 'Admin@lalaleather.com';
        dispatch(new EnquiryMailJob($to, $data));


        // return redirect(route('contact-us'));
    }

    public function render()
    {
        return view('livewire.send-quote');
    }
}
