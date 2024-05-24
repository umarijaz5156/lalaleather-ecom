<?php

namespace App\Http\Livewire\Admin\Variant;

use App\Models\VariantOption as Options;
use Livewire\Component;
use Livewire\WithPagination;

class VariantOptions extends Component
{
    use WithPagination;

    public $name,$abbreviation,$requestId,$searchTerm, $updateMode = false, $formModal = false, $editModel = false, $variantOption_id, $variant_id;
    public $editing = false;
    public $confirmingDeletionModal = false;

    public function mount($id = null)
    {
        $this->variant_id = $id;
        
    }

   
   
    public function render()
    {

        $searchTerm = '%'.$this->searchTerm.'%';
        return view('livewire.admin.variant.variant-options', [
            'variantOptions' => Options::where('name','like', $searchTerm)->where('variant_id', $this->variant_id)->paginate(10),
        ]);
       

    }

    public function saveVariantOption(){

        $this->validate([
            'name' => 'required|max:255|unique:variant_options,name,' . $this->variantOption_id,
            'abbreviation' => 'required|max:255|unique:variant_options,abbreviation,' . $this->variantOption_id,

        ]);

        $variantOption = Options::findOrNew($this->variantOption_id);

        $isNewVariantOption = !$variantOption->exists;

        $variantOption->fill([
            'name' => $this->name,
            'abbreviation' => $this->abbreviation,
            'variant_id' => $this->variant_id,
        ]);

        $variantOption->save();


        // $this->reset();
        $this->formModal = false;
        $this->editing = false;
        $this->updateMode = false;
        $this->resetCreateForm();
            session()->flash('message', $this->updateMode ? 'Action Performed Successfully.' : 'Action Performed Successfully.');
        // return redirect()->route('admin.variantOption', ['id' => $this->variant_id]);

    }


    public function editVariantOption($id)
    {
        $variant = Options::find($id); // Fetch your model instance here
        if ($variant) {
            $this->variantOption_id = $variant->id;
            $this->name = $variant->name;
            $this->abbreviation = $variant->abbreviation;
            $this->editing = true;
            $this->formModal = true;
        }
    }
   

    // deleteZone confirmmodal
    public function destroy($id){
        $this->requestId = $id;
        $this->confirmingDeletionModal = true;
    }
    // delete try catch
    public function delete(){
        try{
            $variantOPtion = Options::findOrFail($this->requestId);
            $variantOPtion->delete();
            session()->flash('message', 'Action Performed successfully:)');
            $this->confirmingDeletionModal = false;
            $this->requestId = null;
        }catch(\Exception $e){
            session()->flash('error',"Something goes wrong while deleting Variant option!!");
        }
    }

  


    public function resetCreateForm()
    {
        $this->reset('name','abbreviation','variantOption_id');
    }

    public function openFormModal()
    {
        // reset name and description
        $this->resetCreateForm();
        
        $this->formModal = true;
    }

    public function closeFormModal()
    {
        $this->formModal = false;
    }
}
