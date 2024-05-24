<?php

namespace App\Http\Livewire\Admin\Products;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;
use App\Models\Review;

use Livewire\WithFileUploads;


class Reviews extends Component
{
    use WithPagination;
    use WithFileUploads;
    public $product, $rating = 4, $review = '', $user, $images = [], $confirmingStatusModal,$createdAt, $reviewId, $confirmingDeletionModal = false, $reviewModal = false, $requestId;
    public function mount(Product $product)
    {
        $this->product = $product;
    }

    public function render()
    {
        $reviews = $this->product->reviews()
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        return view('livewire.admin.products.reviews', compact('reviews'));
    }
    // open changeStatusConfirm modal
    public function changeStatusConfirm($reviewId)
    {
        $this->reviewId = $reviewId;
        $this->confirmingStatusModal = true;
    } 
    // changeStatus
    public function changeStatus()
    {

        $review = Review::find($this->reviewId);
        $review->status = !$review->status;
        $review->save();
        // reset values
        $this->confirmingStatusModal = false;
        $this->reviewId = null;
        // session 
        session()->flash('message', 'Review status changed successfully');
    }
    // deleteReview open confirm model
    public function deleteReview($reviewId)
    {
        $this->confirmingDeletionModal = true;
        $this->reviewId = $reviewId;
    }
    // delete
    public function delete()
    {
        $review = Review::find($this->reviewId);
        $review->delete();
        // session 
        session()->flash('message', 'Review deleted successfully');
        $this->confirmingDeletionModal = false;
    }
    // addReview open modal
    public function addReview()
    {
        $this->reviewModal = true;
    }

    public function storeReview()
    {
        // Apply validation
        $rules = [
            'user' => 'required|unique:reviews,user_id,'. $this->requestId.',id,product_id,' . $this->product->id,
            'review' => 'required',
            'createdAt' => 'required',
            'rating' => 'required|numeric|min:1|max:5',
            'images.*' => 'image|max:1024', // 1MB Max
        ];
        
        $messages = [
            'user.unique' => 'User have already added a review for this product. User can only add one review per product.',
        ];
        
        // Apply validation
        $this->validate($rules, $messages);
        
        
        // Check if the product exists
        $this->product = Product::find($this->product->id);

        if (!$this->product) {
            session()->flash('error', 'Product not found.');
            return;
        }

        // Determine if it's a create or update operation
        $action = $this->requestId ? 'update' : 'create';

        // Create or update the review
        $review = $this->{$action . 'Review'}();

        // Store review images
        foreach ($this->images as $image) {
            $review->images()->create([
                'path' => $image->store('reviews','public'),
            ]);
        }

        // Reset Livewire component properties
        $this->reset(['reviewModal', 'review', 'rating', 'images', 'user', 'createdAt','requestId']);

        // Emit pondReset
        $this->emit('pondReset');

        // Session flash
        session()->flash('message', 'Review ' . ucfirst($action) . 'd successfully.');
    }

    // Create a new review
    private function createReview()
    {
        return $this->product->reviews()->create([
            'product_id' => $this->product->id,
            'comment' => $this->review,
            'rating' => $this->rating,
            'user_id' => $this->user,
            'status' => 1,
            'created_at' => $this->createdAt,
        ]);
    }

    // Update an existing review
    private function updateReview()
    {
        $review = Review::findOrFail($this->requestId);
        $review->update([
            'comment' => $this->review,
            'rating' => $this->rating,
            'user_id' => $this->user,
            'created_at' => $this->createdAt,
        ]);

        return $review;
    }


    // Edit Review
    public function editReview($id)
    {
        $this->requestId = $id;
        $review = Review::findOrFail($id);

        $this->review = $review->comment;
        $this->rating = $review->rating;
        $this->user = $review->user_id;
        $this->createdAt = $review->created_at;
        $this->reviewModal = true;
    }
}
