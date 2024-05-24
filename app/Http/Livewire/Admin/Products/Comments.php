<?php

namespace App\Http\Livewire\Admin\Products;



use Livewire\WithPagination;
use App\Models\Product;
use App\Models\Comment;
use Livewire\Component;

class Comments extends Component
{
    use WithPagination;
    public $product,$rating=4,$showHideLevel2,$parentId, $comment = '',$user, $images = [],$createdAt,$commentId,$confirmingDeletionModal = false,$commentModal=false,$requestId;
    public function mount(Product $product){
        $this->product = $product;
    }

    public function render()
    {
        $comments = $this->product->comments()
            ->where('parent_id',null)
            ->orderBy('created_at', 'desc')
            ->paginate(10); 
        return view('livewire.admin.products.comments',compact('comments'));
    }
    // changeStatus
    public function changeStatus($commentId){
        $comment = Comment::find($commentId);
        $comment->status = !$comment->status;
        $comment->save();
        // session 
        session()->flash('message','Comment status changed successfully');
        
    }
    // deleteComment open confirm model
    public function deleteComment($commentId){
        $this->confirmingDeletionModal = true;
        $this->commentId = $commentId;
    }
    // delete
    public function delete(){
        $comment = Comment::find($this->commentId);
        $comment->delete();
        // session 
        session()->flash('message','Comment deleted successfully');
        $this->confirmingDeletionModal = false;
    }
      // addReply
      public function addReply($parentId){
        $this->parentId = $parentId;
        $this->commentModal = true;
    }
    // addComment open modal
    public function addComment(){
        $this->commentModal = true;
    }

    public function storeComment()
    {
        // Apply validation
        $rules = [
            'user' => 'required',
            'comment' => 'required',
            'createdAt' => 'required',
        ];
    
        
        $this->validate($rules);
    
        // Check if the product exists
        $this->product = Product::find($this->product->id);
    
        if (!$this->product) {
            session()->flash('error', 'Product not found.');
            return;
        }
    
        // Determine if it's a create or update operation
        $action = $this->requestId ? 'update' : 'create';
    
        // Create or update the comment
        $comment = $this->{$action.'Comment'}();
    
    
        // Reset Livewire component properties
        $this->reset(['commentModal', 'comment', 'user', 'createdAt']);
    
        // Session flash
        session()->flash('message', 'Comment ' . ucfirst($action) . 'd successfully.');
    }
    
    // Create a new comment
    private function createcomment()
    {
        return $this->product->comments()->create([
            'product_id' => $this->product->id,
            'comment' => $this->comment,
            'user_id' => $this->user,
            'status' => 1,
            'parent_id' => $this->parentId ?? null,
            'created_at' => $this->createdAt,
        ]);
    }
    
    // Update an existing comment
    private function updateComment()
    {
        $comment = Comment::findOrFail($this->requestId);
        $comment->update([
            'comment' => $this->comment,
            'user_id' => $this->user,
            'created_at' => $this->createdAt,
        ]);
    
        return $comment;
    }
    

// Edit comment
public function editComment($id)
{
    $this->requestId = $id;
    $comment = Comment::findOrFail($id);

    $this->comment = $comment->comment;
    $this->user = $comment->user_id;
    $this->createdAt = $comment->created_at;
    $this->commentModal = true;
}
// show hide child accordion
public function collapseSubChild($id, $parent1 = -1)
{
    if ($id == $parent1) {
        $this->showHideLevel2 = NULL;
    } else {
        $this->showHideLevel2 = $id;
    }
}
   
}
