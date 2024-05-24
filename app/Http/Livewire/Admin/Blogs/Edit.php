<?php

namespace App\Http\Livewire\Admin\Blogs;

use App\Models\BlogPost;
use App\Models\Category;
use Livewire\Component;

class Edit extends Component
{
    public $blogPost, $parentCategory, $childCategory, $grandChildCategory;


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

    public function mount($slug)
    {
        $this->blogPost = BlogPost::whereSlug($slug)->firstOrFail();
        $categories = $this->blogPost->categories;

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
        return view('livewire.admin.blogs.edit', ['allCategories' => $allCategories]);
    }
}
