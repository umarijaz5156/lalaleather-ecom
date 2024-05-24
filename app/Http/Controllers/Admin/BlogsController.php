<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\BlogPostCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class BlogsController extends Controller
{
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $validated = $request->validate([
                'title' => 'required|min:3|max:255|unique:blog_posts,title',
                'slug' => 'required|min:3|max:255|unique:blog_posts,slug',
                'image' => 'required|file|mimes:jpg,jpeg,png',
                'description' => 'required|min:10|max:900',
                'category.level1' => 'required',
                'content' => 'required'
            ], [], ['category.level1' => 'main category']);

            if (isset($request?->category, $request?->category['level1'])) {
                $image = $request->file('image');
                $imagePath = $image->storeAs('/blog/images', Carbon::now()->timestamp . '_' . $image->getClientOriginalName(), 'public');

                $data = [
                    'title' => $request->title,
                    'slug' => $request->slug,
                    'description' => $request->description,
                    'category_id' => $request->category['level1'],
                    'image' => $imagePath,
                    'content' => $request->content,
                ];

                $blogPost = BlogPost::create($data);
                if ($blogPost) {
                    foreach ($request?->category as $key => $category) {
                        if (isset($request?->category[$key])) {
                            $level = $key == 'level1' ? 1 : ($key == 'level2' ? 2 : 3);
                            $blogPost->categories()->attach($category, ['level' => $level]);
                        }
                    }
                }
            }
            DB::commit();
            return redirect()->route('admin.list-blogs')->with('success', 'Post created successfully.');
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
    
    public function update(Request $request)
    {
        try {
            $id = $request->id;

            $validatedFields = $request->validate([
                'title' => 'required|string|min:3|max:255|unique:manufacturer_products,title,' . $request->id,
                'slug' => 'required|min:3|max:255|unique:blog_posts,slug,'.$id,
                'description' => 'required|min:10|max:900',
                'image' => 'nullable|file|mimes:jpg,jpeg,png',
                'content' => 'required'
            ]);

            $blogPost = BlogPost::findOrFail($id);

            $data = [
                'title' => $request->title,
                'slug' => $request->slug,
                'description' => $request->description,
                'content' => $request->content,
            ];

            // Check if a new picture is uploaded
            if ($request->hasFile('image')) {
                // Delete previous picture if it exists
                if ($blogPost->image) {
                    Storage::delete($blogPost->image);
                }

                // Upload the new picture
                $image = $request->file('image');
                $imagePath = $image->storeAs('/blog/images', Carbon::now()->timestamp . '_' . $image->getClientOriginalName(), 'public');

                $data['image'] = $imagePath;
            }

            $blogPost->update($data);

            return redirect()->route('admin.list-blogs')->with('success', 'Post updated successfully.');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
