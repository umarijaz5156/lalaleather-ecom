<?php

namespace App\Http\Livewire\Admin\Manufacturer;

use App\Models\ManufacturerProduct;
use Livewire\Component;

class Index extends Component
{
    public $confirmingDeletionModal;
    public $deletingId;

    public function deleteProduct($id)
    {
        $this->deletingId = $id;
        $this->confirmingDeletionModal = true;
    }

    public function delete()
    {
        $product = ManufacturerProduct::findOrFail($this->deletingId);
        $product->delete();

        $this->reset('deletingId', 'confirmingDeletionModal');
        session()->flash('success', 'Product has been deleted successfully!');
    }

    public function render()
    {
        $products = ManufacturerProduct::orderBy('id', 'desc')->get();
        return view('livewire.admin.manufacturer.index', ['products' => $products]);
    }
}
