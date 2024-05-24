<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class ShopCategory extends Component
{
    // MOUNT
    public $category;
    public $categories;
    public $category_id;
    public function mount($slug)
    {
        // $this->category = $id;
        $this->category_id = $slug;
        if($slug == 'all'){
            $this->categories = \App\Models\Category::all();
        }else{  
            $this->categories = \App\Models\Category::where('slug_store',$slug)->get();
        }

    }
    
    public function render()
    {
        return view('livewire.pages.shop-category')->layout('layouts.web');
    }
}
