<?php

namespace App\Http\Livewire\Pages\Manufacturing;

use App\Models\Category;
use Livewire\Component;

class ManufacturerCategory extends Component
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
        }else{  
            $manufacturerCategories = Category::where('slug_manufacturer', $this->slug)->whereHas('manufacturerProducts')->get();            
        }
        return view('livewire.pages.manufacturing.manufacturer-category', ['manufacturerCategories' => $manufacturerCategories])->layout('layouts.web');
    }
}
