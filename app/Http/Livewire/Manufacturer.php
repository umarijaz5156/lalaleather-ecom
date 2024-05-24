<?php

namespace App\Http\Livewire;
// namespace App\Http\Livewire\Pages\Manufacturing;

use App\Models\Category;
use App\Models\ManufacturerProduct;
use Livewire\Component;

class Manufacturer extends Component
{
    public $slug;

    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function render()
    {
        if($this->slug == 'all'){
            $manufacturerCategories = Category::whereHas('manufacturerProducts')->get();
            return view('livewire.manufacturer', ['manufacturerCategories' => $manufacturerCategories])->layout('layouts.web');
        }else{  
            $manufacturerCategories = Category::where('slug_manufacturer', $this->slug)->whereHas('manufacturerProducts')->first();

            // Get 5 related categories
            $relatedCategories = Category::whereHas('manufacturerProducts')->take(5)->get();

            $manufacturerProducts = ManufacturerProduct::where('enabled', 1)->when($manufacturerCategories, function ($query) use ($manufacturerCategories) {
                $query->whereHas('categories', function ($query) use ($manufacturerCategories) {
                    $query->where('categories.id', $manufacturerCategories->id);
                });
            })->paginate(12);

            return view('livewire.pages.manufacturing.manufacturer-category-products', compact('relatedCategories', 'manufacturerProducts'))->layout('layouts.web');

        }
    }
}
