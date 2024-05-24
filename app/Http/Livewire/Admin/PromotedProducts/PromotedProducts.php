<?php

namespace App\Http\Livewire\Admin\PromotedProducts;

use App\Models\Product;
use App\Models\VariantOption;
use Livewire\Component;

class PromotedProducts extends Component
{
   
    public $searchTerm,$formModal = false, $products = [],$requestId,$twoStepConfirmationModal = false;
    public $selectedProducts = [];

    public function render()
    {
       
        $searchTerm = '%'.$this->searchTerm.'%';
        return view('livewire.admin.promoted-products.promoted-products', [
            'DePromotedProducts' => Product::where('is_promoted',0)->get(),
            'promotedProducts' => Product::where('title','like', $searchTerm)->where('is_promoted',1)->paginate(10),
        ]);
       

    }


    public function savePromotedProducts(){
        $this->validate([
            'products' => 'required',
        ],
        [
            'products.required' => 'Select minimum one product.',
        ]);

        foreach($this->products as $pro){
            $product = Product::find($pro);
            $product->is_promoted = 1;
            $product->save();
        }

        session()->flash('message', 'Action Performed successfully:)');
        return redirect()->route('admin.promoted-products');

    }

    public function dePromoted($id){
        $this->requestId = $id;
        $this->twoStepConfirmationModal = true;
    }

    public function depromoteSelected(){

        $this->twoStepConfirmationModal = true;
       
    }

    public function confirm(){

        if($this->selectedProducts){
            foreach($this->selectedProducts as $pro){
                $product = Product::find($pro);
                $product->is_promoted = 0;
                $product->save();
            }
            session()->flash('message', 'Action Performed successfully:)');
            return redirect()->route('admin.promoted-products');
        }

        $product = Product::find($this->requestId);
        $product->is_promoted = 0;
        $product->save();
        session()->flash('message', 'Action Performed successfully:)');
        return redirect()->route('admin.promoted-products');
    }

    public function openFormModal()
    {
        $this->formModal = true;
    }

    public function closeFormModal()
    {
        
        $this->reset();

        $this->formModal = false;
    }

}
