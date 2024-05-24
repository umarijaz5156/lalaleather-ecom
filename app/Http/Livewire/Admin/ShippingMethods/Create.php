<?php

namespace App\Http\Livewire\Admin\ShippingMethods;

use App\Models\ShippingMethod;
use Livewire\Component;

class Create extends Component
{
    public $createShippingMethodModal = false, $confirmingDeletionModal = false;
    public $zones = [], $name, $symbol, $deletingId, $requestId, $shippingMethod_id;

    public function resetFields()
    {
        $this->reset('name', 'symbol', 'zones', 'createShippingMethodModal', 'requestId', 'shippingMethod_id');
    }

    public function openCreateModal()
    {
        $this->resetErrorBag();
        $this->resetFields();
        $this->emit('zonesUpdated', $this->zones);
        $this->createShippingMethodModal = true;

    }

    public function createShippingMethod()
    {
        $unique = $this->requestId ? ','.$this->requestId : '';
        $this->validate([
            'name' => 'required|min:2|unique:shipping_methods,name'.$unique,
            'symbol' => 'required|string|min:2',
            'zones' => 'required|array',
            'zones.*' => 'exists:zones,id'
        ]);

        $name = $this->name;
        $symbol = $this->symbol;
        $zones = $this->zones;

        $shippingMethod = ShippingMethod::updateOrCreate(['id' => $this->requestId], ['name' => $name, 'symbol' => $symbol])->zones()->sync($zones);

        $message = "Shipping method ".($this->requestId ? 'updated' : 'created'). " successfully.";
        
        $this->resetFields();

        session()->flash('success', $message);
    }

    public function editShippingMethod($id)
    {
        $this->resetErrorBag();
        $this->requestId = $id;

        $shippingMethod = ShippingMethod::findOrFail($id);
        $this->zones = $shippingMethod->zones->pluck('id')->toArray();
        $this->shippingMethod_id = $shippingMethod->id;
        $this->name = $shippingMethod->name;
        $this->symbol = $shippingMethod->symbol;
        $this->createShippingMethodModal = true;
        $this->emit('zonesUpdated', $this->zones);
    }

    public function destroy($id)
    {
        $this->deletingId = $id;
        $this->confirmingDeletionModal = true;
    }

    public function delete()
    {
        $shippingMethod = ShippingMethod::findOrFail($this->deletingId);
        $shippingMethod->delete();
        $this->reset('deletingId', 'confirmingDeletionModal');
        session()->flash('success', 'Shipping method deleted successfully.');
    }

    public function render()
    {
        $shippingMethods = ShippingMethod::latest()->get();
        return view('livewire.admin.shipping-methods.create', ['shippingMethods' => $shippingMethods]);
    }
}
