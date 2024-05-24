<?php

namespace App\Http\Livewire\Pages\Blogs;

use App\Models\Category;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $blogPostCategories = Category::whereHas('blogs')->get();
        return view('livewire.pages.blogs.index', ['blogPostCategories' => $blogPostCategories])->layout('layouts.web');
    }
}
