<?php

namespace App\Http\Livewire\Admin\Promotions;

use Livewire\Component;
use App\Models\Promotion;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;



class Index extends Component
{
    use WithPagination;

    public $deleteRequestId=null,$searchTerm, $confirmingDeletionModal = false, $search = '', $sortField = 'created_at', $sortAsc = false;

    

    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';
        $promotions = Promotion::where('title','like', $searchTerm)->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                        ->paginate(10);
        $tableHeaders = [
            'title' => 'Title',
            'description' => 'Description',
            'banner' => 'Banner',
            'date' => 'Date Range',
            'discount_percentage' => 'Discount (%)',
            'active' => 'Active',
            'storewide' => 'Storewide',
            'actions' => 'Action'
        ];
        return view('livewire.admin.promotions.index', compact('promotions','tableHeaders'));
    }
    //   deletePromotion open confirm popup
    public function deletePromotion($id)
    {
        $this->deleteRequestId = $id;
        $this->confirmingDeletionModal = true;
    }
    // delete
    public function delete()
    {
        $promotion = Promotion::findOrFail($this->deleteRequestId);
        $promotion->delete();
        // delete banner
        $existingImagePath = json_decode($promotion->banner)->file_path;
        if ($existingImagePath) {
            Storage::disk('public')->delete($existingImagePath);
        }
        $this->confirmingDeletionModal = false;
        session()->flash('message', 'Promotion deleted successfully.');
    }
    // enablePromotionProperty
    public function enablePromotionProperty($id, $propertyName)
    {
        $promotion = Promotion::findOrFail($id);
        
        // Ensure the property exists in the model
        if (!in_array($propertyName, $promotion->getFillable())) {
            abort(500, "Invalid property name: $propertyName");
        }

        // $status =  $promotion->{$propertyName} == 1 ? 0 : 1;
        $promotion->{$propertyName} = 1;

        $promotion->save();
        session()->flash('message', 'Promotion updated successfully.');
    }
    // disablePromotionProperty
    public function disablePromotionProperty($id, $propertyName)
    {
        $promotion = Promotion::findOrFail($id);
        
        // Ensure the property exists in the model
        if (!in_array($propertyName, $promotion->getFillable())) {
            abort(500, "Invalid property name: $propertyName");
        }

        // $status =  $promotion->{$propertyName} == 1 ? 0 : 1;
        $promotion->{$propertyName} = 0;

        $promotion->save();
        session()->flash('message', 'Promotion updated successfully.');
    }


}
