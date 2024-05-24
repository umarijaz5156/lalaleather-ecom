<?php

namespace App\Http\Livewire\Admin\Manage;

use App\Models\ConfigBasic;
use Livewire\Component;

class AdminEmailConfig extends Component
{
    public $email;

    public function mount()
    {
        $settings = ConfigBasic::find(1);

        if($settings) {
            $this->email = $settings->admin_email;
        }
    }

    public function updateAdminEmailConfig()
    {
        $this->validate([
            'email' => 'required|email|max:255'
        ]);

        ConfigBasic::updateOrCreate(['id' => 1], ['admin_email' => $this->email]);
        
        return redirect()->route('admin.settings')->with('success', 'Admin email updated successfully.');

    }

    public function render()
    {
        return view('livewire.admin.manage.admin-email-config');
    }
}
