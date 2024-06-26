<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BlogCard extends Component
{
    public $blogPost;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($blogPost)
    {
        $this->blogPost = $blogPost; 
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.blog-card');
    }
}
