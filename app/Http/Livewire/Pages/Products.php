<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
// products
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Livewire\WithPagination;
use AmrShawky\LaravelCurrency\Facade\Currency;
use Illuminate\Support\Facades\Http;


class Products extends Component
{
    // mount
    public $products;
    public $product;
    public function mount($slug_store)
    {
        if($slug_store && $slug_store != 'all'){
            $category = Category::where('slug_store', $slug_store)->first();
            if ($category) {
                // get products where parent_cate,chile_cat,grand_child_cat == $category
                $this->products = Product::whereHas('categories', function ($query) use ($category) {
                    $query->where('category_id', $category->id);
                })
                ->where('is_active', 1)
                ->get();
            } else {
                // Category not found, handle accordingly
                $this->products = collect(); // Empty collection
            }
        }else{
            $this->products = Product::all();
        }
    }
    public function render()
    {
        // products use pagination  
        $products = Product::paginate(20);
        return view('livewire.pages.products',compact('products'))->layout('layouts.web');
    }
}
