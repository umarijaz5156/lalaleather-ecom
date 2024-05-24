<?php

namespace App\Http\Livewire\Admin\Products;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Image;



class Files extends Component
{
    use WithFileUploads;

    public $product,$currentStep = 2,$imageInputsCount = 0,$imageInputs = [0],$images=[],$videos=[],$previousImages=[],$previousVideos=[],$product_id,$previousStep = false;
    protected $listeners = ['updateImageInputs'];
    
    // mount
    public function mount($product,$allData = []){
        $this->product = $product;
        if($this->product){
            // $images => $this->product->files
            $this->previousImages =$this->previousImages = $this->product->files
            ->where('image_type', 'original')
            ->values() // Reset keys to 0, 1, 2, ...
            ->mapWithKeys(function ($file, $index) {
                return [$index => [
                    'file_path' => $file->file_path,
                    'file_name' => $file->file_name,
                ]];
            })
            ->toArray();
            $this->previousVideos = $this->product->files
            ->where('file_type', 'video')
            ->values() // Reset keys to 0, 1, 2, ...
            ->mapWithKeys(function ($file, $index) {
                return [$index => [
                    'file_path' => $file->file_path,
                    'file_name' => $file->file_name,
                ]];
            })
            ->toArray();
            $this->imageInputsCount = count($this->previousImages);
            $this->imageInputs = array_keys($this->previousImages);
        }elseif($allData){
            
            $this->imageInputsCount = $allData['imageInputsCount'] ?? 0;
            $this->imageInputs = $allData['imageInputs'] ?? [0];
            $this->images = $allData['images'] ?? [];
            $this->videos = $allData['videos'] ?? [];
            $this->previousImages = $allData['previousImages'] ?? [];
            $this->previousVideos = $allData['previousVideos'] ?? [];
        }
    }

    public function render()
    {
        return view('livewire.admin.products.files');
    }
    public function resizeImage($originalPath)
    {
        $icon = [];
        $slider = [];
        // Open the original image
        $imageIcon = Image::make(storage_path('app/public/' . $originalPath));

        // Resize the image to the 250*250 dimension (adjust these dimensions as needed)
        $imageIcon->resize(160, 140, function ($constraint) {
            // $constraint->aspectRatio();
        });
        $resizedIcon = '/public/products/icons/icon_' . basename($originalPath);
        Storage::put($resizedIcon, $imageIcon->stream());
        // $resizedImage250 => file_name,file_path,file_original_name,image_type
        $icon['file_name'] = basename($resizedIcon);
        $icon['file_path'] = 'products/icons/icon_' . basename($originalPath);
        $icon['file_original_name'] = basename($originalPath);
        $icon['image_type'] = 'icon';

        // Open the original image
        $imageSlider = Image::make(storage_path('app/public/' . $originalPath));
        // Resize the image to the (500*500) dimension (adjust these dimensions as needed)
        $imageSlider->resize(259, 400, function ($constraint) {
            // $constraint->aspectRatio();
        });
        $resizedSlider = '/public/products/slider/slider_' . basename($originalPath);
        Storage::put($resizedSlider, $imageSlider->stream());
        // $resizedImage500 => file_name,file_path,file_original_name,image_type
        $slider['file_name'] = basename($resizedSlider);
        $slider['file_path'] = 'products/slider/slider_' . basename($originalPath);;
        $slider['file_original_name'] = basename($originalPath);
        $slider['image_type'] = 'slider';

        // Open the original image
        $imageOriginal = Image::make(storage_path('app/public/' . $originalPath));

        // Resize the image to the 800*800 dimension (adjust these dimensions as needed)
        $imageOriginal->resize(700, 700, function ($constraint) {
            // $constraint->aspectRatio();
        });
        // replace to original image
        Storage::put('/public/'.$originalPath, $imageOriginal->stream());

        // Return the paths to the resized images
        return  [
            'icon' => $icon,
            'slider' => $slider,
        ];
    }

    public function submit()
    {
        // $this->images aplly validation and store and resizeit
        $this->validate([
            'images.0' => 'required',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'videos.*' => 'nullable|mimes:mp4|max:20000',
        ],
        [
            'images.0.required' => 'The image field is required.',
            'images.*.image' => 'The image must be a file of type: jpeg, png, jpg, gif, svg.',
            'images.*.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif, svg.',
            'images.*.max' => 'The image must not be greater than 2048 kilobytes.',
            'videos.*.mimes' => 'The video must be a file of type: mp4.',
            'videos.*.max' => 'The video must not be greater than 20000 kilobytes.',
        ]
    );
        $fileData = [];
        $allFiles = [];
        if(isset($this->product->files)){
            $this->deleteFiles($this->product->files);
        }
        if ($this->images && count($this->images) > 0) {
            foreach ($this->images as $key => $file) {
                if(!$file){
                    continue;
                }
                $originalImage = [];
                $file_name = $file->storeAs('/products', mt_rand(1000000000, 9999999999) . '_' . $file->getClientOriginalName(), 'public');
                 // Original image details
                $originalImage['file_name'] = basename($file_name);
                $originalImage['file_path'] = $file_name;
                $originalImage['file_original_name'] = basename($file->getClientOriginalName());
                $originalImage['image_type'] = 'original';
                $fileData['image'][$key]['originalImage'] = $originalImage;
                // Resize the image
                $resizeData = $this->resizeImage($file_name);
                $fileData['image'][$key]['icon'] = $resizeData['icon'];
                $fileData['image'][$key]['slider'] = $resizeData['slider'];
            }
        }
        // videos
        if ($this->videos && count($this->videos) > 0) {
            foreach ($this->videos as $key => $file) {
                if(!$file){
                    continue;
                }
                $file_name = $file->storeAs('/products/videos', mt_rand(1000000000, 9999999999) . '_' . $file->getClientOriginalName(), 'public');
                $video['file_name'] = basename($file_name);
                $video['file_path'] = $file_name;
                $video['file_original_name'] = basename($file->getClientOriginalName());
                $video['image_type'] = 'video';
                $fileData['video'][$key]['originalVideo'] = $video;
            }
        }
        // submit
        $this->emit('submitStep', $fileData);
    }
    public function previous()
    {
        $this->previousStep =true;
        $this->emit('previousStep',$this->all());
    }
    // addImage
    public function addImage()
    {
        $this->imageInputsCount++;
        array_push($this->imageInputs, $this->imageInputsCount);
        $this->images[] = null;
    }
    // removeImage($index)
    public function removeImage($index)
    {
        $this->emit('removeImage',$index);
    }
    // resetImageInputs
    public function updateImageInputs($index)
    {
        $this->imageInputsCount--;
        unset($this->imageInputs[$index]);
        unset($this->images[$index]);
        unset($this->previousImages[$index]);
        $this->imageInputs = array_values($this->imageInputs);
        $this->images = array_values($this->images);
        $this->previousImages = array_values($this->previousImages);
    }
    private function deleteFiles($files)
    {
        $disk = 'public'; // Change this to the appropriate disk name
        foreach ($files as $file) {
            // Delete the file from storage
            Storage::disk($disk)->delete($file->file_path);

            // Delete the record from the database
            $file->delete();
        }

    }
}
