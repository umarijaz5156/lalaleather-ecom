<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class Blog extends Component
{
    public function render()
    {
        return view('livewire.pages.blog')->layout('layouts.web');
    }
}
