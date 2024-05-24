<?php

namespace App\Http\Livewire\Admin\Zones;

use Livewire\Component;

use App\Models\Zone;
use App\Models\CountryZone;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;

class Index extends Component
{
    use WithPagination;
    public $openCreateModal = 0,$searchTerm,$zone_name,$status,$zone_id,$country_id,$countries = [],$confirmingDeletionModal = 0,$requestId,$openEditModal = 0;
    protected $listeners = [
        'updateCountries' => 'updateCountries',
    ];

    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';
        $zones = Zone::where('zone_name','like', $searchTerm)
        ->orderBy('zone_name', 'asc')->paginate(10);
        return view('livewire.admin.zones.index',compact('zones'));
    }
    // createZone
    public function createZone(){
        $this->resetFields();
        $this->emit('countriesUpdated', $this->countries);
        $this->openCreateModal = true;
    }
    // storeZone
    public function storeZone()
    {
        $this->validate([
            'zone_name' => 'required|unique:zones,zone_name,'.$this->requestId,
            'status' => 'required',
            'countries' => 'required',
        ],
        [
            'zone_name.required' => 'The zone name is required.',
            'status.required' => 'The status is required.',
            'countries.required' => 'The countries is required.',
        ]);
    
        try {
            Zone::updateOrCreate(
                ['id' => $this->requestId], // If $this->requestId is set, it will try to update the existing record
                [
                    'zone_name' => $this->zone_name,
                    'status' => $this->status,
                ]
            )->countries()->sync($this->countries);
            session()->flash('message', "Zone " . ($this->requestId ? 'Updated' : 'Created') . " Successfully!!");
            // reset flieds
            $this->resetFields();
            $this->openCreateModal = false;
        } catch (\Exception $e) {
            session()->flash('error', 'Something went wrong while ' . ($this->requestId ? 'updating' : 'creating') . ' the zone.');
        }
    }
    
    // deleteZone confirmmodal
    public function deleteZone($id){
        $this->requestId = $id;
        $this->confirmingDeletionModal = true;
    }
    // delete try catch
    public function delete(){
        try{
            $zone = Zone::findOrFail($this->requestId);
            $zone->delete();
            session()->flash('message',"Zone Deleted Successfully!!");
            $this->confirmingDeletionModal = false;
        }catch(\Exception $e){
            // some products has this zone so its not deleted
            session()->flash('error',"This Action Cant be performed!!,Some products has this zone.");
            $this->confirmingDeletionModal = false;
        }
    }
    // editZone
    public function editZone($id){
        $this->requestId = $id;
        $zone = Zone::findOrFail($id);
        $this->countries = $zone->countries->pluck('id')->toArray();
        $this->zone_id = $zone->id;
        $this->zone_name = $zone->zone_name;
        $this->status = $zone->status;
        $this->openCreateModal = true;
        $this->emit('countriesUpdated', $this->countries);
    }
    // resetFlieds
    public function resetFields()
    {
        $this->zone_name = '';
        $this->status = '';
        $this->countries = [];
        $this->requestId = '';

    }

}
