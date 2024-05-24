<?php

namespace App\Http\Livewire\Admin\Blogs;

use App\Models\Category;
use Livewire\Component;

class Create extends Component
{
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
        $allCategories = Category::where('parent_id', null)
            ->OrWhere('parent_id', $this->parentCategory)
            ->OrWhere('parent_id', $this->childCategory)
            ->get();
        return view('livewire.admin.blogs.create', ['allCategories' => $allCategories]);
    }
}
