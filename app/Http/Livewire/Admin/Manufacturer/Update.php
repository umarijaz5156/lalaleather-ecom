<?php

namespace App\Http\Livewire\Admin\Manufacturer;

use App\Models\Category;
use App\Models\ManufacturerCategory;
use App\Models\ManufacturerProduct;
use Livewire\Component;

class Update extends Component
{
    public $manufacturerProduct, $parentCategory, $childCategory, $grandChildCategory;


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

    public function mount($id)
    {
        $this->manufacturerProduct = ManufacturerProduct::findOrFail($id);
        $categories = $this->manufacturerProduct->categories;

        foreach ($categories as $key => $category) {
            if ($category->pivot->level == 1) {
                $this->parentCategory = $category->id;
            } else if ($category->pivot->level == 2) {
                $this->childCategory = $category->id;
            } elseif ($category->pivot->level == 3) {
                $this->grandChildCategory = $category->id;
            }
        }
    }

    public function render()
    {

        $allCategories = Category::where('parent_id', null)
            ->OrWhere('parent_id', $this->parentCategory)
            ->OrWhere('parent_id', $this->childCategory)
            ->get();

        return view('livewire.admin.manufacturer.update', ['allCategories' => $allCategories]);
    }
}
