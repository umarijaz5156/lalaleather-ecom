<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
// order
use App\Models\Order;

class Pay extends Component
{
    public $order;
    // mount 
    public function mount(Order $order){
        $this->order = $order;
    }
    public function render()
    {
        return view('livewire.pages.pay')->layout('layouts.web');
    }
}
