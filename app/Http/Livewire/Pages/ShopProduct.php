<?php

namespace App\Http\Livewire\Pages;

use App\Jobs\EnquiryMailJob;
use App\Models\Enquiry;
use Livewire\Component;

class ShopProduct extends Component
{
    public $productEnquireModal = false;
    public array $enquiryDetails = [];

    public function showEnquireModal($productId)
    {
        $this->enquiryDetails['enquiry_for'] = $productId;
        $this->productEnquireModal = true;
    }

    public function enquireProduct()
    {
        $this->validate([
            'enquiryDetails.name' => 'required|min:3|max:255',
            'enquiryDetails.email' => 'required|email|max:255',
            'enquiryDetails.phone' => 'required|numeric|digits_between:10,12',
            'enquiryDetails.message' => 'required|max:500',
        ]);

        $data = [
            'name' => $this->enquiryDetails['name'],
            'email' => $this->enquiryDetails['email'],
            'phone' => $this->enquiryDetails['phone'],
            'message' => $this->enquiryDetails['message'],
            'enquiry_for' => $this->enquiryDetails['enquiry_for'],
            'enquiry_from' => 'Products',
        ];

        Enquiry::create($data);

        // session()->flash('message', 'Message Sent successfully:)');
        $this->reset('enquiryDetails', 'productEnquireModal');
        
        $to = optional(\App\Models\ConfigBasic::find(1))->admin_email ?? 'Admin@lalaleather.com';
        dispatch(new EnquiryMailJob($to, $data));

        $this->dispatchBrowserEvent('successToaster', ['message' => 'Message Sent successfully:']);
    }

    public function render()
    {
        return view('livewire.pages.shop-product')->layout('layouts.web');
    }
}
