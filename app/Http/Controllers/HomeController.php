<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function post(Request $request, $slug)
    {
        $post = BlogPost::whereSlug($slug)->firstOrFail();
        return view('post', compact('post'));
    }
}
