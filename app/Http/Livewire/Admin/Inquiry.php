<?php

namespace App\Http\Livewire\Admin;

use App\Models\Contact;
use App\Models\Enquiry;
use Livewire\Component;

class Inquiry extends Component
{
    public $viewd=false,$inquiry,$searchTerm, $confirmingDeletionModal=false, $deletingId;
    public function mount($id = null)
    {
        if (!is_null($id)) {
            $this->view($id);
        }
    }
    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';
        return view('livewire.admin.inquiry', [
            'inquiries' => Enquiry::where('email','like', $searchTerm)->paginate(10),
        ]);
    }
    public function view($id)
    {
        
        $this->inquiry=Enquiry::findOrFail($id);
        $this->viewd = true;
    }
    public function destroy($id)
    {
        $this->deletingId = $id;
        $this->confirmingDeletionModal = true;
       
        

    }

    public function delete()
    {
        $inq=Enquiry::findOrFail($this->deletingId);
        $inq->delete();

        $this->reset('deletingId', 'confirmingDeletionModal');
        session()->flash('message', 'Inquiry Removed');
    }

}
