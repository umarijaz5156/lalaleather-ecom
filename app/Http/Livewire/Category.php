<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category as ProductCategory;
use App\Models\Variant ;



class Category extends Component
{
    public $slug_store, $minPrice,$variants=[], $variantsOptions=[],$maxPrice, $search, $sort = 'default', $genders = [],$filter = false;

    public function mount($slug_store)
    {
        $this->slug_store = $slug_store;
        // get all variants with options
        $this->variants = Variant::with('options')->get() ?? [];
    }
    public function render()
    {
        // Get the category with the specified slug_store
        $category = ProductCategory::where('slug_store', $this->slug_store)->first();

        // If the category exists, retrieve products within the price range
        if ($category) {
            $query = $category->products();

            // Apply minimum price filter if set
            if ($this->minPrice !== null) {
                $query->where('price_original', '>=', $this->minPrice);
                $this->filter = true;
            }

            // Apply maximum price filter if set
            if ($this->maxPrice !== null) {
                $query->where('price_original', '<=', $this->maxPrice);
                $this->filter = true;
            }
            // Apply genders filter if set
            if (!empty($this->genders)) {
                $query->whereIn('gender', $this->genders);
                $this->filter = true;
            }
            // $variantsOptions
            if (!empty($this->variantsOptions)) {
                // dd($this->variantsOptions);
                $query->whereHas('variants', function ($query) {
                    $query->whereIn('variant_option_id', $this->variantsOptions);
                });
                $this->filter = true;
            }
            // apply is_Active
            $query->where('is_active', 1);
            // Get the products based on the applied filters
            $products = $query->get();
        } else {
            $products = [];
        }
        return view('livewire.category', compact('products'))->layout('layouts.web');
    }
    // clearFilter
    public function clearFilter()
    {
        $this->minPrice = null;
        $this->maxPrice = null;
        $this->genders = [];
        $this->variantsOptions = [];
        $this->filter = false;
    }
}
