<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
// product
use App\Models\Product;
use Illuminate\Http\Request;
class Cart extends Component
{
    public $cardItems = array(),$confirmingDeletionModal=false,$requestedId,$cartErrors = [],$redirectProductId;
    
    //mount
    public function mount(){
        // get session data
        $this->cardItems = session()->get('cart') ?? array();
        // dd($this->cardItems);
    }
    public function render()
    {

        return view('livewire.pages.cart')->layout('layouts.web');
    }
    // confirmRemoveCartItem
    public function confirmingRemoveCartItem($productId,$key)
    {
        $this->confirmingDeletionModal = true;
        $this->redirectProductId = $productId;
        $this->requestedId = $key;

    }
    // removeCartItem
    public function removeCartItem()
    {
        // get session data
        $cart = session()->get('cart');
        // remove item from cart
        unset($cart[ $this->redirectProductId][$this->requestedId]);
        //  if $cart[ $this->redirectProductId] empty unset it as well
        if(empty($cart[ $this->redirectProductId])){
            unset($cart[ $this->redirectProductId]);
        }
        // update session data
        session()->put('cart', $cart);
        // update cart items
        $this->cardItems = $cart;
        // reset
        $this->confirmingDeletionModal = false;
        $this->requestedId = null;
        $this->redirectProductId = null;
        // flash message
        session()->flash('message', 'Product removed successfully.');
    }
    // updateQuantity(type,key)
    public function updateQuantity($type, $productId, $key)
    {
        // get session data
        $cart = session()->get('cart');
        // update quantity
        if ($type === 'increment') {
            $cart[$productId][$key]['quantity']++;
        } else {
            if($cart[$productId][$key]['quantity'] > 1){
                $cart[$productId][$key]['quantity']--;
            }
        }
        // update session data
        session()->put('cart', $cart);
        // update cart items
        $this->cardItems = $cart;
    }
    // proceed()
    public function proceed()
    {
        // get cart data from session and validate moq quantity, etc
        $cart = session()->get('cart');
    
        // check if cart is empty
        if (empty($cart)) {
            session()->flash('error', 'Cart is empty.');
            return redirect()->route('cart');
        }
    
        $this->validateCart($cart);
    
        if (!empty($this->cartErrors)) {
            session()->flash('error', 'Please check your cart.');
        } else {
            return redirect()->route('buy');
        }
    }
    
    private function validateCart($cart)
    {
        foreach ($cart as $key => $item) {
            $this->validateCartItem($key, $item);
        }
    }
    
    private function validateCartItem($key, $item)
    {
        // get product
        $product = Product::find($key);
    
        // check if order quantity is greater than product quantity
        if ($item['quantity'] > $product->quantity && !$product->is_custom) {
            $this->cartErrors[$key] = 'Order quantity is greater than product quantity.';
        }
    
        // check if order quantity is less than product moq
        if ($item['quantity'] < $product->moq) {
            $this->cartErrors[$key] = 'Order quantity is less than product moq.';
        }
    }


}