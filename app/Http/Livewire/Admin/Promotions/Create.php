<?php

namespace App\Http\Livewire\Admin\Promotions;

use Livewire\Component;

use App\Models\Promotion;
use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Livewire\WithFileUploads;


class Create extends Component
{
    use WithFileUploads;
    public $title, $description, $banner, $startDate, $endDate, $active = 1, $storewide = 0, $discount, $updateMode = false, $promotion_id, $previousImage;


    protected $rules = [
        'title' => 'required|max:150',
        'description' => 'required|max:250',
        'banner' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048|dimensions:min_width=940,min_height=220,max_width=990,max_height=260',
        'startDate' => 'required|date',
        'endDate' => 'required|date|after:startDate',
        'active' => 'required',
        'storewide' => 'required',
        'discount' => 'required|numeric|between:0,100',
    ];

    protected $messages = [
        'description.required' => 'The description field is required.',
        'description.max' => 'The description must not be greater than 250 characters.',
        'banner.required' => 'The banner field is required.',
        'banner.image' => 'The banner must be a file of type: jpeg, png, jpg, gif.',
        'banner.mimes' => 'The banner must be a file of type: jpeg, png, jpg, gif.',
        'banner.max' => 'The banner must not be greater than 2048 kilobytes.',
        'banner.dimensions' => 'The banner dimensions must be width=950-990px,height=220-260px.',
        'endDate.after' => 'The end date must be a date after the start date.',
    ];
    public function mount($id = null)
    {
        if (!is_null($id)) {
            $this->edit($id);
        }
    }
    public function render()
    {
        return view('livewire.admin.promotions.create');
    }
    //store
    public function store()
    {
        $this->validate();
        $promotion = Promotion::findOrNew($this->promotion_id);
        $fileData = [];
        if ($this->banner && str_replace('promotions/',"",json_decode($promotion->banner)->file_path ?? null) != $this->banner->getClientOriginalName()) {
            $uploadedFile = $this->banner;
            // Store the original image
            $name = $uploadedFile->storeAs('/promotions', mt_rand(1000000000, 9999999999) . '_' . $uploadedFile->getClientOriginalName(), 'public');
            // Resize the image to 970x240 pixels
            $resizedImage = Image::make($uploadedFile)->resize(970, 240, function ($constraint) {
                // $constraint->aspectRatio();
            });
            // Store the resized image on disk.
            Storage::disk('public')->put($name, $resizedImage->encode());
            $fileData['file_original_name'] = $uploadedFile->getClientOriginalName();
            $fileData['file_path'] = $name;
            $fileData['file_ext'] = $uploadedFile->getClientOriginalExtension();
        }else{
            $fileData = json_decode($promotion->banner);
        }
        $this->banner = json_encode($fileData);
        $promotion->fill([
            'title' => $this->title,
            'description' => $this->description,
            'banner' => $this->banner,
            'start_date' => Carbon::parse($this->startDate)->format('Y-m-d H:i:s'),
            'end_date' => Carbon::parse($this->endDate)->format('Y-m-d H:i:s'),
            'active' => $this->active,
            'storewide' => $this->storewide,
            'discount_percentage' => $this->discount,
        ]);
        $promotion->save();
        // reaet only fields
        $this->reset(['title', 'description', 'banner', 'startDate', 'endDate', 'active', 'storewide', 'discount']);
        session()->flash('message', $this->updateMode ? 'Promotion Updated Successfully.' : 'Promotion Created Successfully.');
        // redirtect to route promotion
        return redirect()->route('admin.promotion');
    }
    //  edit
    public function edit($id)
    {
        $promotion = Promotion::findOrFail($id);
        $this->promotion_id = $id;
        $this->title = $promotion->title;
        $this->description = $promotion->description;
        $this->banner = $promotion->banner;
        $this->startDate = Carbon::parse($promotion->start_date)->format('D M d Y');
        $this->endDate = Carbon::parse($promotion->end_date)->format('D M d Y');
        $this->active = $promotion->active;
        $this->storewide = $promotion->storewide;
        $this->discount = $promotion->discount_percentage;
        $this->updateMode = true;
    }
}
