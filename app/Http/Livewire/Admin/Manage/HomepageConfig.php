<?php

namespace App\Http\Livewire\Admin\Manage;

use App\Models\Category;
use App\Models\ConfigHomepage;
use Livewire\Component;

class HomepageConfig extends Component
{
    public array $homepageSettings = [];

    public function mount()
    {
        $settings = ConfigHomepage::find(1);
        if ($settings) {
            $this->homepageSettings = $settings->configs;
        }
    }

    public function updateHomepageSettings()
    {
        ConfigHomepage::updateOrCreate(['id' => 1], ['configs' => $this->homepageSettings]);

        return redirect()->route('admin.settings')->with('success', 'Homepage settings saved successfully.');
    }

    public function render()
    {
        $categories = Category::select('id', 'title')->whereNull('parent_id')->get();
        return view('livewire.admin.manage.homepage-config', ['categories' => $categories]);
    }
}
