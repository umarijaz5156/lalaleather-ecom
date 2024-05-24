<?php

namespace App\Http\Livewire\Admin\Categories;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;

use Symfony\Component\HttpFoundation\Request;

class Index extends Component
{
    use WithPagination;
    public $isModalOpen = 0,$searchTerm;
    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';
        return view('livewire.admin.categories.index', [
            'categories' => Category::where('title','like', $searchTerm)->paginate(10),
        ]);
    }
    public function destroy($id){
        $category = Category::findOrFail($id);
        $car_img=Category::where('id', $id)->first()->image;
        try{
            
            if(count($category->subcategory))
    {
        $subcategories = $category->subcategory;
        foreach($subcategories as $cat)
        {
            $cat = Category::findOrFail($cat->id);
            $cat->show_in_menu = null;
            $cat->save();
        }
    }
        if (Storage::disk('public')->exists('post/'.$car_img))
        {
            Storage::disk('public')->delete('post/'.$car_img);
        }
        $category->delete();
            session()->flash('message',"Category Deleted Successfully!!");
        }catch(\Exception $e){
            session()->flash('error',"Something goes wrong while deleting category!!");
        }
    }
   
  
   
}
