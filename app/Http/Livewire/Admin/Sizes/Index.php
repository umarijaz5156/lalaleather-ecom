<?php

namespace App\Http\Livewire\Admin\Sizes;

use App\Models\Size;
use App\Models\SizeImage;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $isModalOpen = 0, $searchTerm, $showModal = false, $requestId, $confirmingDeletionModal = false;

    public function render()
    {
        $searchTerm = '%' . $this->searchTerm . '%';
        return view('livewire.admin.sizes.index', [
            'sizes' => Size::with('images')->where('name', 'like', $searchTerm)->paginate(10),
        ]);
    }


    public function destroy($id)
    {

        $this->requestId = $id;
        $this->confirmingDeletionModal = true;

    }
    // delete try catch
    public function delete()
    {
        try {

            $size = Size::find($this->requestId);

            $existingImagePaths = $size->images()->pluck('file_path')->toArray();

            foreach ($existingImagePaths as $existingImagePath) {

                $imageToDelete = SizeImage::where('file_path', $existingImagePath)->first();
                if ($imageToDelete) {
                    Storage::disk('public')->delete($existingImagePath);
                    $imageToDelete->delete();
                }
            }

            $size->delete();
            $this->confirmingDeletionModal = false;

            session()->flash('message', 'Action Performed successfully:)');
            return redirect(route('size'));

        } catch (\Exception $e) {
            session()->flash('error', "Something goes wrong while deleting Variant option!!");
        }
    }
}
