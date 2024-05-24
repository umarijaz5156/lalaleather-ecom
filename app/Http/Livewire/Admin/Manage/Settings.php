<?php

namespace App\Http\Livewire\Admin\Manage;

use App\Models\ConfigBasic;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Settings extends Component
{
    use WithFileUploads;

    public $siteTitle, $logo, $favIcon, $metaTitle, $metaDescription, $logoPrev, $favIconPrev, $dynamicNotice;

    public function mount()
    {
        $settings = ConfigBasic::find(1);
        if($settings) {
            $this->siteTitle = $settings->site_title;
            $this->logo = $settings->logo;
            $this->metaTitle = $settings->meta_title;
            $this->metaDescription = $settings->meta_description;
            $this->logoPrev = $settings?->logo_image ?? null;
            $this->favIconPrev = $settings?->fav_icon ?? null;
            $this->dynamicNotice = $settings?->dynamic_notice ?? null;
        }
    }

    public function saveSettings()
{
    $this->validate([
        'dynamicNotice' => 'nullable|string|min:3|max:255',
        'siteTitle' => 'nullable|string|min:3|max:255',
        'logo' => 'nullable|image|mimes:jpg,jpeg,png',
        'favIcon' => 'nullable|image|mimes:jpg,jpeg,png',
        'metaTitle' => 'nullable|string|min:3|max:255',
        'metaDescription' => 'nullable|string|min:3|max:300',
    ]);

    $configs = ConfigBasic::find(1);

    if (!$configs) {
        $configs = new ConfigBasic(['id' => 1]);
    }

    $data = [
        'site_title' => $this->siteTitle,
        'meta_title' => $this->metaTitle,
        'meta_description' => $this->metaDescription,
        'dynamic_notice' => $this->dynamicNotice,
    ];

    if ($this->logo) {
        $logoPath = $this->uploadImage($this->logo, 'images');
        $this->deleteImage($configs->logo_image);
        $data['logo_image'] = $logoPath;
    } else {
        $this->deleteImage($configs->logo_image);
        $configs->logo_image = null;
    }

    if ($this->favIcon) {
        $favIconPath = $this->uploadImage($this->favIcon, 'images');
        $this->deleteImage($configs->fav_icon);
        $data['fav_icon'] = $favIconPath;
    } else {
        $this->deleteImage($configs->fav_icon);
        $configs->fav_icon = null;
    }

    $configs->fill($data)->save();
    $this->setEnvironmentValue([
        'APP_NAME' => $this->siteTitle
    ]);

    return redirect()->route('admin.settings')->with('success', 'Settings updated successfully.');
}

    
    private function uploadImage($image, $directory)
    {
        $imagePath = $image->storeAs($directory, Carbon::now()->timestamp . '-' . $image->getClientOriginalName(), 'public');
        return $imagePath ? $imagePath : null;
    }
    
    private function deleteImage($path)
    {
        if ($path && Storage::disk('public')->exists($path)) {
            Storage::disk('public')->delete($path);
        }
    }

    public function render()
    {
        return view('livewire.admin.manage.settings');
    }
    public static function setEnvironmentValue($values)
    {
        $envFile = app()->environmentFilePath();
        $str = file_get_contents($envFile);
    
        // Loop through the key-value pairs
        foreach ($values as $key => $value) {
            // Create the regex pattern to match the key
            $pattern = "/^{$key}=.*/m";
    
            // Replace the old value with the new one
            $newValue = "{$key}={$value}";
            $str = preg_replace($pattern, $newValue, $str);
        }
    
        if (!file_put_contents($envFile, $str)) {
            return false;
        }
        return true;
    }
    

}
