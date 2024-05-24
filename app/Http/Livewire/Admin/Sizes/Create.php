<?php

namespace App\Http\Livewire\Admin\Sizes;

use App\Models\Size;
use App\Models\SizeImage;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;

class Create extends Component
{

    use WithFileUploads;
    public $images = [];

    public $sizes, $name, $description, $updateMode = false, $size_id, $previousImage = [];

    protected $rules = [
        'name' => 'required|max:150',
        'description' => 'required',
        'images' => 'required|array|min:1|max:5',
        'images.*' => 'image|mimes:jpeg,png,jpg,webp|max:2048',
    ];
    protected $messages = [
        'images.required' => 'The image field is required.',
    ];

    public function mount($id = null)
    {
        if (!is_null($id)) {
            $this->edit($id);
        }
    }
    public function render()
    {

        if ($this->updateMode) {
            $this->sizes = Size::where('id', '!=', $this->size_id)->orderby('name', 'asc')->get();
        } else {
            $this->sizes = Size::orderby('name', 'asc')->get();

        }

        return view('livewire.admin.sizes.create');
    }

    public function store()
    {
        $this->validate();
        $size = Size::findOrNew($this->size_id);

        $isNewSize = !$size->exists;


        $size->fill([
            'name' => $this->name,
            'description' => $this->description ?? '',
        ]);
        $size->save();


        if ($isNewSize) {

            $newSizeId = $size->id;

            $currentDate = Carbon::now()->toDateString();

            foreach ($this->images as $image) {

                $random = rand(100000, 999999);
                $imageName = $random . '-' . $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
                $path = 'sizeChart/' . $imageName;

                if (!Storage::disk('public')->exists('sizeChart')) {
                    Storage::disk('public')->makeDirectory('sizeChart');
                }

                $postImage = Image::make($image)->resize(1600, 1066)->save();
                Storage::disk('public')->put('sizeChart/' . $imageName, $postImage);

                SizeImage::create([
                    'size_id' => $newSizeId,
                    'file_path' => $path,
                ]);

            }
        } else {

            // for old
            $existingImagePaths = $size->images()->pluck('file_path')->toArray();

            foreach ($existingImagePaths as $existingImagePath) {
                // Check if the image exists in the request and if not, delete it from DB and disk
                if (!in_array($existingImagePath, $this->images)) {
                    $imageToDelete = SizeImage::where('file_path', $existingImagePath)->first();
                    if ($imageToDelete) {
                        Storage::disk('public')->delete($existingImagePath);
                        $imageToDelete->delete();
                    }
                }
            }

            $currentDate = Carbon::now()->toDateString();

            foreach ($this->images as $image) {

                $random = rand(100000, 999999);
                $imageName = $random . '-' . $currentDate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
                $path = 'sizeChart/' . $imageName;

                if (!Storage::disk('public')->exists('sizeChart')) {
                    Storage::disk('public')->makeDirectory('sizeChart');
                }

                $postImage = Image::make($image)->resize(1600, 1066)->save();
                Storage::disk('public')->put('sizeChart/' . $imageName, $postImage);

                SizeImage::create([
                    'size_id' => $size->id,
                    'file_path' => $path,
                ]);

            }
        }

        $this->reset();

        session()->flash('message', $this->updateMode ? 'Action Performed Successfully.' : 'Action Performed Successfully.');
        return redirect()->route('admin.size');
    }


    public function edit($id)
    {
        $images = SizeImage::where('size_id', $id)->get('file_path');
        
        $this->previousImage = json_encode($images);

        $size = Size::findOrFail($id);
        $this->name = $size->name;
        $this->description = $size->description;
        $this->size_id = $id;
        $this->updateMode = true;

    }

    public function resetCreateForm()
    {
        $this->reset();
    }
}
