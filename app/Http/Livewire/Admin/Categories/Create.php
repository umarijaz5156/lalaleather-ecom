<?php

namespace App\Http\Livewire\Admin\Categories;

use App\Models\Category;
use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $categories, $title, $image, $parent_id, $updateMode = false, $category_id,$previousImage,$parentCat;

    public function mount($id = null)
    {
        if (!is_null($id)) {
            $this->edit($id);
        }
    }
    public function render()
    {
        if($this->updateMode){
        $this->categories = Category::where('parent_id', null)->where('id', '!=', $this->category_id)->orderby('title', 'asc')->get();
    }else
    {
        $this->categories = Category::where('parent_id', null)->orderby('title', 'asc')->get();

    }
        return view('livewire.admin.categories.create');
    }

    public function store()
    {
        $this->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,svg,jpg,gif|max:1024',

        ]);
        $slug = SlugService::createSlug(Category::class, 'slug', $this->title);

        $currentDate = Carbon::now()->toDateString();
        $imageName = $slug . '-' . $currentDate . '-' . uniqid() . '.' . $this->image->getClientOriginalExtension();
        // $imageName = time() . '_' . $this->image->getClientOriginalName();

        // $this->image->storeAs('categories', $cover_name, 'public');
        if (!Storage::disk('public')->exists('post')) {
            Storage::disk('public')->makeDirectory('post');
        }

        $postImage = Image::make($this->image)->resize(1600, 1066)->save();
        Storage::disk('public')->put('post/' . $imageName, $postImage);

        Category::create([
            'title' => $this->title,
            'image' => $imageName,
            'parent_id' => $this->parent_id,
            'slug' => $slug,
        ]);

        $this->resetCreateForm();

        session()->flash('message', 'Category created successfully:)');
        return redirect(route('category'));
    }
    public function resetCreateForm()
    {
        $this->reset();
        // $this->title = '';
        // $this->image = null;
        // $this->parent_id = '';
    }
    public function edit($id)
    {
        $this->previousImage = Category::where('id', $id)->first()->image;
        $category = Category::findOrFail($id);
        $this->title = $category->title;
        $this->category_id = $category->id;
        $this->parent_id = $category->parent_id;
        $this->image = $category->image;
        $this->updateMode = true;
    }
    public function update()
    {
        $this;
        // Validate request
        $this->validate([
            'title' => 'required',

        ]);
        try {
            // Update category
            $car_img=Category::where('id', $this->category_id)->first()->image;
            $slug = SlugService::createSlug(Category::class, 'slug', $this->title);
            if (isset($this->image)) {
                //            make unipue name for image
                $currentDate = Carbon::now()->toDateString();
                $imageName = $slug . '-' . $currentDate . '-' . uniqid() . '.' . $this->image->getClientOriginalExtension();

                if (!Storage::disk('public')->exists('post')) {
                    Storage::disk('public')->makeDirectory('post');
                }
                //            delete old post image
                if(Storage::disk('public')->exists('post/'.$car_img))
                {
                    Storage::disk('public')->delete('post/'.$car_img);
                }
              
                $postImage = Image::make($this->image)->resize(1600, 1066)->save();
                Storage::disk('public')->put('post/' . $imageName, $postImage);

            } else {
                $imageName = $this->image;
            }

            Category::find($this->category_id)->fill([
                'title' => $this->title,
                'parent_id' => $this->parent_id,
                'image' => $imageName,
            ])->save();
            session()->flash('message', 'Category Updated Successfully!!');
            return redirect(route('category'));

        } catch (\Exception$e) {
            session()->flash('error', 'Something goes wrong while updating category!!');

        }
    }
}
