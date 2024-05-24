<?php

namespace App\Http\Livewire\Manufacturing;

use Livewire\Component;
use App\Models\ManufacturerProduct;


class Product extends Component
{
    public $slug;
    // mount 
    public function mount($slug)
    {
        $this->slug = $slug;
        // ManufacturerProduct where product_slug is equal to $slug
    }
    public function render()
    {
        $product = ManufacturerProduct::where('product_slug', $this->slug)->first();

        return view('livewire.manufacturing.product', compact('product'))->layout('layouts.web');;
    }
}
