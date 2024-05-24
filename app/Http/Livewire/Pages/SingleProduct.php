<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
// product
use App\Models\Product;
//ProductVariant
use App\Models\ProductVariant;
//pagination
use Livewire\WithPagination;
// email config
use App\Models\EmailConfig;
// email
use App\Mail\Email;
// mail
use Illuminate\Support\Facades\Mail;

use Livewire\WithFileUploads;

class SingleProduct extends Component
{
    use WithFileUploads;
    use WithPagination;

    // mount product
    public $product,$ratingsData=[],$activeVariantOption, $quantity = 1, $reviewModal = false, $rating = 5, $review = '', $images = [], $productRating = [], $tab = 'reviews',$commentModal = false,$comment,$commentId;
    public $product_id, $productVariantCost = 0;
    public function mount($slug = null)
    {
        // Fetch product and reviews in a single query
        $this->product = Product::with('reviews')->where('product_slug', urldecode($slug))->firstOrFail();
    
        // Abort if product is not found
        if (!$this->product) {
            abort(404);
        }
    
        // Set product ID
        $this->product_id = $this->product->id;
    
        // Set quantity
        $this->quantity = $this->product->moq ?? 1;
    
        // Calculate product rating
        $reviews = $this->product->reviews;
        $this->productRating = $reviews->count() > 0 ? $reviews->avg('rating') : 0;
    
        // Group reviews by rating and calculate count and percentage
        $this->ratingsData = $reviews->where('status', '1')->groupBy('rating')->map(function ($reviewsForRating) use ($reviews) {
            $ratingCount = $reviewsForRating->count();
            $ratingPercentage = ($ratingCount / $reviews->where('status', '1')->count()) * 100;
    
            return [
                'count' => $ratingCount,
                'percentage' => $ratingPercentage,
            ];
        });
    }
    
    public function render()
    {
        // Eager load product reviews and comments
        $this->product->load([
            'reviews' => function ($query) {
                $query->where('status', '1')->orderBy('created_at', 'desc')->paginate(5);
            },
            'comments' => function ($query) {
                $query->where('parent_id', null)->where('status', 1)->paginate(5);
            },
        ]);

        // Get the paginated reviews and comments from the product
        $productReviews = $this->product->reviews;
        $productComments = $this->product->comments;

        return view('livewire.pages.single-product', compact('productReviews', 'productComments'))
            ->layout('layouts.web');
    }

    // add-to-card
    public function addToCart($product_id)
    {
        // get product
        $product = Product::find($product_id);
        
        //  apply validation rules min quantity 1 and max quantity $Product->quantity
        $this->validate(
            [
                'quantity' => [
                    'required',
                    'numeric',
                    'min:' . $this->product->moq,
                    ($product->is_custom ? '' : 'max:' . $product->quantity),
                ],
            ],
            [
                'quantity.max' => 'Maximum Order Limit For ' . $product->title . ' Is ' . $product->quantity . '.', 
            ]
        );
        
        // check if product exist in cart
        $cart = session()->get('cart');
        // if cart is empty then this the first product
        // dd( md5(serialize($this->activeVariantOption))); 
        $activeVariantOptionKey = md5(serialize($this->activeVariantOption));
        if (!$cart) {
            $cart = [
                $product_id => [
                    $activeVariantOptionKey => [
                    "title" => $product->title,
                    "image" => $product->files->first(fn ($file) => $file->file_type === 'image' && $file->image_type === 'icon')->file_path,
                    "quantity" => $this->quantity,
                    "price" => $this->productFinalPrice(),
                    'is_custom' => $product->is_custom,
                    "activeVariantOption" => $this->activeVariantOption ?? [],
                    "productVariantCost" => $this->productVariantCost,
                    "productRating" => $this->productRating,
                ]
                ]
            ];
            session()->put('cart', $cart);
        } elseif (isset($cart[$product_id][$activeVariantOptionKey]) ) {
            $cart[$product_id][$activeVariantOptionKey]['quantity'] += $this->quantity;
            session()->put('cart', $cart);
        } else {
            // if item not exist in cart then add to cart with quantity = 1
            $cart[$product_id][$activeVariantOptionKey] = [
                "title" => $product->title,
                "image" => $product->files->first(fn ($file) => $file->file_type === 'image' && $file->image_type === 'icon')->file_path,
                "quantity" => $this->quantity,
                "price" => $this->productFinalPrice(),
                'is_custom' => $product->is_custom,
                "activeVariantOption" => $this->activeVariantOption ?? [],
                "productVariantCost" => $this->productVariantCost,
                "productRating" => $this->productRating,

            ];
        }
        session()->put('cart', $cart);
        // redirect to cart
        return redirect()->route('cart');
    }
    // openReviewModal
    public function openReviewModal()
    {
        // check if user is logged in
        if (!auth()->check()) {
            // redirect to login
            return redirect()->route('login');
        } else {
            $this->reviewModal = true;
            $this->tab = 'reviews';
        }
    }
    // store review
    public function storeReview()
    {
        // apply validation
        $this->validate([
            'review' => 'required',
            'rating' => 'required|numeric|min:1|max:5',
            'images.*' => 'image|max:1024', // 1MB Max
        ], [
            'review.required' => 'The review field is required.',
            'rating.required' => 'The rating field is required.',
            'rating.numeric' => 'The rating must be a number.',
            'rating.min' => 'The rating must be at least 1.',
            'rating.max' => 'The rating must not be greater than 5.',
            'images.*.image' => 'Invalid image format.',
            'images.*.max' => 'The image must not be larger than 1MB.',
        ]);
        // one user can reviews a product
        $existingReview = auth()->user()->reviews()->where('product_id', $this->product_id)->first();
        if ($existingReview) {
            session()->flash('existingReview', 'You have already reviewed this product.');
            return;
        }

        // check for existing product
        $this->product = Product::find($this->product_id);

        if (!$this->product) {
            session()->flash('error', 'Product not found.');
            return;
        }

        // store review
        $review = auth()->user()->reviews()->create([
            'product_id' => $this->product_id,
            'comment' => $this->review,
            'rating' => $this->rating,
        ]);

        // store review images
        foreach ($this->images as $image) {
            $review->images()->create([
                'path' => $image->store('public/reviews'),
            ]);
        }
        $this->tab = 'reviews';
      // Send mail to admin
    $productTitle = $this->product->title;

    $email = EmailConfig::where('template_for', 'product review added')->first();

    $find = ["{{user}}", "{{productTitle}}", "{{productUrl}}"];
    $replace = [auth()->user()->username, $productTitle, '<a href="' . route('product', ['slug' => $productTitle]) . '">View Product</a>'];

    $email->template = str_replace($find, $replace, $email->template);

    $email_template = new Email($email->template, $email->subject);
        $to = optional(\App\Models\ConfigBasic::find(1))->admin_email ?? '  lalaleather.com';
    try {
        Mail::to($to)->send($email_template);
    } catch (\Exception $e) {
        \Log::error('Error sending email: ' . $e->getMessage());
        throw $e;
    }


        // success message thans for review, you review should updateed shortly
        session()->flash('messageReview', 'Thanks for your review! It will be published shortly.');
        // reset Livewire component properties
        $this->reset(['reviewModal', 'review', 'rating', 'images']);
    }
    // openCommentModal
    public function openCommentModal($commentId = null)
    {
        // check if user is logged in
        if (!auth()->check()) {
            // redirect to login
            return redirect()->route('login');
        } else {
            $this->commentId = $commentId;
            $this->commentModal = true;
            $this->tab = 'comments';
        }
    }
    // storeComment
    public function storeComment()
    {
        // apply validation
        $this->validate([
            'comment' => 'required',
        ]);

        // check for existing product
        $this->product = Product::find($this->product_id);

        if (!$this->product) {
            session()->flash('error', 'Product not found.');
            return;
        }

        // store review
        // dd($this->commentId);
        $comment = auth()->user()->comments()->create([
            'product_id' => $this->product_id,
            'comment' => $this->comment,
            'parent_id' => $this->commentId,
        ]);

        $this->tab = 'comments';

        // reset Livewire component properties
        $this->reset(['commentModal', 'comment', 'images','commentId']);
    }
    // add 1 to quantity
    public function increment()
    {
        $this->quantity++;
    }
    // minus 1 to quantity
    public function decrement()
    {
        if ($this->quantity > 1) {
            $this->quantity--;
        }
    }
    // variantOptions
    public function variantOption($variantId,$variantOptionId)
    {
        $productVariant = ProductVariant::where('product_id', $this->product_id)
            ->where('variant_option_id', $variantOptionId)
            ->first();
        if ($productVariant) {
            $this->activeVariantOption[$variantId] = $variantOptionId;
            $this->productVariantCost = $this->productVariantCostProperty();
            // dd($this->activeVariantOption);
            // $this->emit('variantOptionChanged', $this->activeVariantOption);                                 
        }else{
            $this->activeVariantOption = null;
        }
    }
    // clearVariantOption($variantId, $variantOptionId) and minus variantOption cost from $this->productVariantCost
    public function clearVariantOption($variantId, $variantOptionId)
    {
        $productVariant = ProductVariant::where('product_id', $this->product_id)
            ->where('variant_option_id', $variantOptionId)
            ->first();
        if ($productVariant) {
            unset($this->activeVariantOption[$variantId]);                                
            $this->productVariantCost = $this->productVariantCostProperty();
        }
    }
    // get productVariantCost
    public function productVariantCostProperty()
    {
        return ProductVariant::where('product_id', $this->product_id)
            ->whereIn('variant_option_id', $this->activeVariantOption)
            ->get()->sum('cost');
    }


    // productFinalPrice
    public function productFinalPrice()
    {
        return $this->product->price_original + $this->productVariantCost;
    }
    
}
