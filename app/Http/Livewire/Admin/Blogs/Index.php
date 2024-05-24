<?php

namespace App\Http\Livewire\Admin\Blogs;

use App\Models\BlogPost;
use Livewire\Component;

class Index extends Component
{
    public $confirmingDeletionModal;
    public $deletingId;

    public function deletePost($id)
    {
        $this->deletingId = $id;
        $this->confirmingDeletionModal = true;
    }

    public function delete()
    {
        $post = BlogPost::findOrFail($this->deletingId);
        $post->delete();

        $this->reset('deletingId', 'confirmingDeletionModal');
        session()->flash('success', 'Post has been deleted successfully!');
    }

    public function render()
    {
        $blogPosts = BlogPost::orderBy('id', 'desc')->get();
        return view('livewire.admin.blogs.index', ['blogPosts' => $blogPosts]);
    }
}
