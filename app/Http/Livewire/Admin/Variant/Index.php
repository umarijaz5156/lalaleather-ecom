<?php

namespace App\Http\Livewire\Admin\Variant;

use App\Models\Variant;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
  
    use WithPagination;
    public $isModalOpen = 0,$searchTerm, $showModal = false, $confirmingDeletionModal = false, $requestId;

    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';
        return view('livewire.admin.variant.index', [
            'variants' => Variant::where('name','like', $searchTerm)->paginate(10),
        ]);
    }


  

        // deleteZone confirmmodal
        public function destroy($id){
            $this->requestId = $id;
            $this->confirmingDeletionModal = true;
        }
        // delete try catch
        public function delete(){
            try{

                $variant = Variant::find($this->requestId);
     
                $variant->delete();

                session()->flash('message', 'Action Performed successfully:)');

                $this->confirmingDeletionModal = false;
                return redirect(route('variant')); 
            }catch(\Exception $e){
                session()->flash('error',"Something goes wrong while deleting Variant option!!");
            }
        }
    
}
