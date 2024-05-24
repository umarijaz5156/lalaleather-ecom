<?php

namespace App\Http\Livewire\Admin\Products;

use Livewire\Component;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Livewire\WithPagination;
use App\Models\Category;



class Index extends Component
{
    use WithPagination;

    public $confirmingDeletionModal = false, $deleteRequestId = null, $filter = [];
    public function render()
    {
        $fileCategories = $this->filter['categories'] ?? [];
        // Use a ternary operator to check if categories are selected
        $products = empty(array_filter($fileCategories))
            // If no categories are selected, fetch all products
            ? Product::orderBy('created_at', 'desc')->paginate(10)
            // If categories are selected, filter products based on selected categories
            : Product::whereHas('categories', fn ($query) => $query->whereIn('category_id', array_keys($fileCategories)))
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        // categories fromCategory
        $categories = Category::select('id', 'title')->where('enabled', 1)->get();
        return view('livewire.admin.products.index', compact('products', 'categories'));
    }
    // deletePromotion => open confirm popup
    public function deleteProduct($id)
    {
        $this->deleteRequestId = $id;
        $this->confirmingDeletionModal = true;
    }
    // delete
    public function delete()
    {
        // Find the product by ID
        $product = Product::find($this->deleteRequestId);

        if ($product) {
            // Delete related data using Eloquent relationships
            $this->deleteFiles($product->files);
            $product->shippingCosts()->delete();
            $product->variants()->delete();
            $product->features()->delete();
            $product->faqs()->delete();
            $product->categories()->delete();

            // Delete the product itself
            $product->delete();

            // Optionally, you can add a redirect or other logic here
        }
        $this->confirmingDeletionModal = false;
        session()->flash('message', 'Product deleted successfully.');
    }
    private function deleteFiles($files)
    {
        $disk = 'public'; // Change this to the appropriate disk name
        foreach ($files as $file) {
            // Delete the file from storage
            Storage::disk($disk)->delete($file->file_path);

            // Delete the record from the database
            $file->delete();
        }
    }
}
