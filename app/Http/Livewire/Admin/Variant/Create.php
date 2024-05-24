<?php

namespace App\Http\Livewire\Admin\Variant;

use App\Models\Variant;
use Livewire\Component;

class Create extends Component
{

    public $variants, $name,$description, $updateMode = false, $variant_id;
   

    public function mount($id = null)
    {
        if (!is_null($id)) {
            $this->edit($id);
        }
    }
    public function render()
    {

        
        if($this->updateMode){
            $this->variants = Variant::where('id', '!=', $this->variant_id)->orderby('name', 'asc')->get();
        }else
        {
            $this->variants = Variant::orderby('name', 'asc')->get();
    
        }

        return view('livewire.admin.variant.create');
    }

    public function store()
    {
        $this->validate([
            'name' => 'required|max:100|unique:variants,name,' . $this->variant_id,
            'description' => 'required|max:500',

        ]);
        $variant = Variant::findOrNew($this->variant_id);

        $isNewSize = !$variant->exists;


        $variant->fill([
            'name' => $this->name,
            'description' => $this->description ?? '',
        ]);
        $variant->save();

 
        $this->reset();

        session()->flash('message', $this->updateMode ? 'Action Performed Successfully.' : 'Action Performed Successfully.');
        return redirect()->route('admin.variant');
    }

    public function edit($id)
    {
        $variant = Variant::findOrFail($id);
        $this->variant_id = $id;
        $this->name = $variant->name;
        $this->description = $variant->description;
        $this->updateMode = true;
    }


    public function resetCreateForm()
    {
        $this->reset();
    }

    
   
}
