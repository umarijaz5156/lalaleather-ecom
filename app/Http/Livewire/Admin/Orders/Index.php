<?php

namespace App\Http\Livewire\Admin\Orders;

use Livewire\Component;
use App\Models\Order;
// pagination
use Livewire\WithPagination;


class Index extends Component
{
    // pagination
    use WithPagination;
    public $viewOrderDetailsModal =false,$viewOrderDetails;

    // mount
    public function mount()
    {
        // get all orders
    }
    public function render()
    {
        $orders = Order::orderBy('id', 'DESC')->paginate(10);

        return view('livewire.admin.orders.index',compact('orders'));
    }
     // createZone
     public function viewOrderDetails($orderId){
         $this->viewOrderDetails  = Order::where('id',$orderId)->first();
        //  dd($this->order);
        $this->viewOrderDetailsModal = true;
    }
}
