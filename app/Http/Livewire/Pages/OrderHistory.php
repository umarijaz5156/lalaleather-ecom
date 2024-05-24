<?php

namespace App\Http\Livewire\Pages;

use App\Http\Livewire;
use Livewire\Component;
use App\Models\Order;
use Livewire\WithPagination;

class OrderHistory extends Component
{
    use WithPagination;
    public $viewOrderDetailsModal =false,$viewOrderDetails = [];
    public function render()
    {
        $orders = Order::orderBy('id', 'DESC')
        ->where('buyer_id',auth()->user()->id)
        ->paginate(10);
        return view('livewire.pages.order-history',compact('orders'))->layout('layouts.web');;
    }
    // createZone
    public function viewOrderDetails($orderId){
        $this->viewOrderDetails  = Order::where('id',$orderId)->first();
       $this->viewOrderDetailsModal = true;
   }
}
