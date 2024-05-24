<?php

namespace App\Http\Livewire\Pages;

use App\Jobs\EnquiryMailJob;
use App\Mail\EnquiryMail;
use App\Models\Enquiry;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactUs extends Component
{
    public $name, $email, $message, $phone;
    public $sending = false;

    public function render()
    {
        return view('livewire.pages.contact-us')->layout('layouts.web');
    }


    public function sendForm()
    {
        $this->validate([
            'name' => 'required|min:3|max:255',
            'phone' => 'required|regex:/^\+\d{10,15}$/',
            'email' => 'required|email|max:255',
            'message' => 'required|max:500',

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

    // public function resetCreateForm()
    // {
    //     $this->reset('name', 'email', 'phone', 'message');
    // }
}
