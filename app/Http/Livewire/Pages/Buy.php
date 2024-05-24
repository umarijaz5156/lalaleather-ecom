<?php

namespace App\Http\Livewire\Pages;

use App\Models\UserAddress;
use App\Models\Country;
use App\Models\City;
use App\Models\State;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\ProductVariant;
use App\Models\Zone;
use App\Models\ShippingCost;
use Livewire\Component;
use Stripe\Stripe;
use Stripe\Charge;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;


class Buy extends Component
{
    public $selectedAddress = 0, $confirmingDeletionModal = false, $requestedId, $addressModal = false, $name, $email, $phone, $addressLine_1, $addressLine_2, $city, $state, $zipCode, $country, $user_id, $userAddresses, $countries, $states, $cities, $isDefault = 0, $totalShippingCost = 0, $totalProductCost = 0, $totalCost = 0;

    public $stripe_token = null;
    protected $rules = [
        'name' => 'required|min:3|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|regex:/^\+\d{10,15}$/',
        'addressLine_1' => 'required|min:5|max:255',
        'addressLine_2' => 'nullable|max:255',
        'city' => 'required|',
        'state' => 'required',
        'zipCode' => 'required|regex:/^\d{5}$/',
        'country' => 'required',
    ];
    protected $listeners = ['setStripeToken'];

    public function setStripeToken($stripeToken)
    {
        $this->stripe_token = $stripeToken;
    }
    // mount 
    public function mount()
    {
        $cartItems = session()->get('cart') ?? [];
        // count $cartItems if empty redirect to cart
        if (count($cartItems) == 0) {
            return redirect()->route('cart');
        }
        $this->selectedAddress = UserAddress::where('user_id', auth()->user()->id)->where('default', true)->value('id');
    }
    // open add addressModal
    public function openAddAddressModal()
    {
        $this->reset(['name', 'email', 'phone', 'addressLine_1', 'addressLine_2', 'city', 'state', 'zipCode', 'country', 'isDefault', 'requestedId']);
        $this->addressModal = true;
    }
    // on update contry make state and city null
    public function updatedCountry()
    {
        $this->state = null;
        $this->city = null;
    }
    // on update state make city null
    public function updatedState()
    {
        $this->city = null;
    }
    // createUpdateAddress
    public function createUpdateAddress()
    {
        $this->validate();
        $data = [
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'address_line_1' => $this->addressLine_1,
            'address_line_2' => $this->addressLine_2,
            'city' => $this->city,
            'state' => $this->state,
            'zip_code' => $this->zipCode,
            'country' => $this->country,
            'default' => $this->isDefault,
            'user_id' => auth()->user()->id,
        ];
        if ($this->isDefault) {
            $userAddresses = UserAddress::where('user_id', auth()->user()->id)->get();
            foreach ($userAddresses as $address) {
                $address->update(['default' => false]);
            }
        }
        UserAddress::updateOrCreate(['id' => $this->requestedId], $data);

        $this->addressModal = false;
        // reset model flieds
        $this->reset(['name', 'email', 'phone', 'addressLine_1', 'addressLine_2', 'city', 'state', 'zipCode', 'country', 'isDefault']);
        session()->flash('message', $this->requestedId ? 'Address Updated Successfully.' : 'Address Added Successfully.');
    }
    // editAddress
    public function editAddress($id)
    {
        $address = UserAddress::findOrFail($id);
        $this->requestedId = $id;
        $this->name = $address->name;
        $this->email = $address->email;
        $this->phone = $address->phone;
        $this->addressLine_1 = $address->address_line_1;
        $this->addressLine_2 = $address->address_line_2;
        $this->city = $address->city;
        $this->state = $address->state;
        $this->zipCode = $address->zip_code;
        $this->country = $address->country;
        $this->isDefault = $address->default;
        $this->addressModal = true;
    }
    // deleteAddress => open confirm delete modal
    public function deleteAddress($id)
    {
        $this->requestedId = $id;
        $this->confirmingDeletionModal = true;
    }
    // delete
    public function delete()
    {
        if ($this->requestedId) {
            $address = UserAddress::find($this->requestedId);

            if ($address) {
                $address->delete();
                session()->flash('message', 'Address Deleted Successfully.');
            } else {
                session()->flash('message', 'Address Not Found.');
            }
        } else {
            session()->flash('message', 'Address Not Found.');
        }

        $this->confirmingDeletionModal = false;
        $this->requestedId = null;
    }



    public function render()
    {
        // get cart product and 
        // countries
        $this->countries = Country::all();
        // states where country_id = $this->country
        $this->states = DB::table('states')->where('country_id', $this->country)->get();

        // cities where state_id = $this->state
        $this->cities = DB::table('cities')->where('state_id', $this->state)->get();

        $this->userAddresses = UserAddress::where('user_id', auth()->user()->id)->get();
        // dd($this->userAddresses);
        // set default address
        // Get session data
        $cartItems = session()->get('cart') ?? [];
        //  forget cart .shipping cost and cart.shipping_cost

        // unset all session cart data
        // count $cartItems if empty redirect to cart

        // Get zone ID from the selected address
        // dd($this->selectedAddress);

        $this->totalProductCost = 0;
        $this->totalShippingCost = 0;
        $this->totalCost = 0;
        if ($this->selectedAddress !== null) {
            $userAddress = UserAddress::findOrFail($this->selectedAddress);
            $zoneId = $userAddress->getZoneIdAttribute();
        } else {
            $zoneId = null;
        }
        foreach ($cartItems as $productId => $products) {
            foreach ($products as $key => $item) {
                // Find shipping cost based on zone and product ID
                $shippingCost = ShippingCost::where('zone_id', $zoneId)
                    ->where('product_id', $productId)
                    ->value('cost');

                if (!$shippingCost || $shippingCost == null) {
                    // update $cartItems and add shipping not available
                    // dd($cartItems[$productId][$key]['shipping_cost']);
                    $cartItems[$productId][$key]['shipping_cost'] = ($this->selectedAddress == null) ? 'no_address_selected' : 'not_available';
                } else {
                    $cartItems[$productId][$key]['shipping_cost'] = $shippingCost;
                }
                $this->totalShippingCost += ($shippingCost * $item['quantity']);
                // get product cost
                $totalProductCost = Product::where('id', $productId)
                    ->value('price_original');
                // get product variants cost
                $productVariantsCost = ProductVariant::where('product_id', $productId)
                    ->whereIn('variant_option_id', $item['activeVariantOption'] ?? [])
                    ->get()->sum('cost');
                // get total product variants cost
                $totalProductVariantsCost = $productVariantsCost * $item['quantity'];
                $this->totalProductCost += ($totalProductCost * $item['quantity']) + $totalProductVariantsCost;
                // update session data
                session()->put('totalShippingCost', $this->totalShippingCost);
                session()->put('totalProductCost', $this->totalProductCost);
                $cartItems[$productId][$key]['productVariantsCost'] = $totalProductVariantsCost;
                session()->put('cart', $cartItems);
            }
        }
        //  total cost
        $this->totalCost = $this->totalShippingCost + $this->totalProductCost;

        return view('livewire.pages.buy', compact('cartItems'))->layout('layouts.web');
    }

    // proceedToPay
    public function proceedToPay()
    {
        // $This->selectedAddress required
        $this->validate(
            [
                'selectedAddress' => 'required|exists:user_addresses,id',
            ],
            [
                'selectedAddress.required' => 'The Address field is required. You can add address by clicking on plus icon "+"',
                'selectedAddress.exists' => 'The Address is not valid.',
            ]
        );


        $orderItemsData = [];
        $cartItems = session()->get('cart') ?? [];
        // dd($cartItems);

        $orderData = [
            'buyer_id' => auth()->user()->id,
            'address_id' => $this->selectedAddress,
            'tax' => 00,
            'status' => 'pending',
            'shipping_total' => $this->totalShippingCost,
            'total_cost' =>  $this->totalCost,
            'method' => 'pending',

        ];
        $order = Order::create($orderData);
        foreach ($cartItems as $id => $products) {
            foreach ($products as  $item) {
                // get product base on $id
                $product = Product::findOrFail($id);
                OrderItem::create([
                    'product_id' => $id,
                    'order_id' => $order->id,
                    'buyer_id' => auth()->user()->id,
                    'product_quantity' => $item['quantity'],
                    'product_cost' => $product->price_original * $item['quantity'],
                    'product_shipping' => $item['shipping_cost'],
                    'status' => 'pending',
                    'discount' => 0,
                    'product_variant_cost' => $item['productVariantsCost'] ?? 0,
                    'product_variant_option_ids' => json_encode($item['activeVariantOption'] ?? []),
                ]);
            }
        }
        // redirect to pay rout
        return redirect()->route('order.pay', $order->id);
    }
}
