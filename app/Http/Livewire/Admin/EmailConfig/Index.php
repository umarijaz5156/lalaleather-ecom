<?php

namespace App\Http\Livewire\Admin\EmailConfig;

use Livewire\Component;

use App\Models\EmailConfig;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;
use App\Enums\EmailTemplateType;

class Index extends Component
{
    use WithPagination;
    public $searchTerm, $openCreateModal = false,$confirmingDeletionModal=false,$requestId,$subject,$template_for,$template;
    
    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';
        $emailConfigs = EmailConfig::where('subject','like', $searchTerm)->orderBy('created_at', 'desc')->paginate(10);
        $templateTypes = EmailTemplateType::all();
        return view('livewire.admin.email-config.index',compact('emailConfigs','templateTypes'));
    }
     // createZone
     public function createEmailConfig(){
        $this->resetFields();
        $this->openCreateModal = true;
    }
    // storeEmailConfig
    public function storeEmailConfig(){ 
        $rules = [
            'subject' => 'required|max:250',
            'template_for' => 'required', 
            'template' => 'required|max:5000',
        ];
        // If updating, apply the unique rule
        if ($this->requestId) {
            $rules['template_for'] .= '|unique:email_configs,template_for,' . $this->requestId;
        }else{
            $rules['template_for'] .= '|unique:email_configs';
        }
        $this->validate($rules);
        // dd($this);
        EmailConfig::updateOrCreate(
            ['id' => $this->requestId],
            ['subject' => $this->subject,'template_for' => $this->template_for, 'template' => $this->template]
        ); 

        session()->flash('message', "Template " . ($this->requestId ? 'Updated' : 'Created') . " Successfully!!");
        $this->resetFields();
        $this->openCreateModal = false;

    }

    // deleteZone confirmmodal
    public function deleteEmailConfig($id){
        $this->requestId = $id;
        $this->confirmingDeletionModal = true;
    }
    // delete try catch
    public function delete(){
            $zone = EmailConfig::findOrFail($this->requestId);
            $zone->delete();
            session()->flash('message',"Template Deleted Successfully!!");
            $this->confirmingDeletionModal = false;
    }
    // editZone
    public function editEmailConfig($id){
        $this->requestId = $id;
        $emailConfig = EmailConfig::findOrFail($id);
        $this->subject = $emailConfig->subject;
        $this->template_for = $emailConfig->template_for;
        $this->template = $emailConfig->template;
        $this->dispatchBrowserEvent('updateCkEditorBody');
        $this->openCreateModal = true;
    }
    // resetFields
    public function resetFields()
    {
        $this->requestId = '';
        $this->subject = '';
        $this->template_for = '';
        $this->template = '';

    }

}
