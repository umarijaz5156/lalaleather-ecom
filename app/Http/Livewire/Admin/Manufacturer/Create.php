<?php

namespace App\Http\Livewire\Admin\Manufacturer;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $parentCategory, $childCategory, $grandChildCategory;

    public function updatedParentCategory($value)
    {
        $this->childCategory = null;
        $this->grandChildCategory = null;
    }
    // onupdate $childCategory
    public function updatedChildCategory($value)
    {
        $this->grandChildCategory = null;
    }

    public function render()
    {
        // $categories = Category::where('parent_id', null)->orderby('title', 'asc')->get();
        $allCategories = Category::where('parent_id', null)
            ->OrWhere('parent_id', $this->parentCategory)
            ->OrWhere('parent_id', $this->childCategory)
            ->get();
        return view('livewire.admin.manufacturer.create', ['allCategories' => $allCategories]);
    }
}
