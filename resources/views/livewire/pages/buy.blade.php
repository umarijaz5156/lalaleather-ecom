<div>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css"
        integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js"></script>
    <style>
        body {
            background-color: #301200;
            color: #fff;
        }

        .default-box-shadow {
            box-shadow: 10px 4px 40px rgba(160, 85, 30, 0.5);
        }

        .card {
            box-shadow: 0 20px 27px 0 rgb(0 0 0 / 5%);
        }

        .accordion-item {
            background-color: #301200;
            box-shadow: 10px 4px 40px rgba(160, 85, 30, 0.5);
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #301200;
            background-clip: border-box;
            border: 0 solid rgba(0, 0, 0, .125);
            border-radius: 1rem;
            box-shadow: 10px 4px 40px rgba(160, 85, 30, 0.5);

        }

        .card-body {
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 1.5rem 1.5rem;
        }

        .collapse {
            visibility: visible;
        }

        .btn-primary {
            color: #fff;
            background-color: #301200;
            box-shadow: inset 10px 4px 40px rgba(160, 85, 30, 0.5);
            border-color: #8b3605;
        }

        .btn-primary:hover {
            color: #301200;
            background-color: #fff;
            border-color: #fff;
        }

        .btn-primary:focus,
        .btn-primary.focus {
            color: #fff;
            background-color: #301200;
            border-color: #fff;
            box-shadow: 0 0 0 0.25rem #8b3605;
        }

        .btn-primary.disabled,
        .btn-primary:disabled {
            color: #fff;
            background-color: #301200;
            border-color: #8b3605;
        }

        /* btn-cancel */
        .btn-cancel {
            color: #301200;
            background-color: #fff;
            border-color: #fff;
        }

        .btn-cancel:hover {
            color: #fff;
            background-color: #301200;
            border-color: #fff;
        }

        .btn-cancel:focus,
        .btn-cancel.focus {
            color: #fff;
            background-color: #301200;
            border-color: #fff;
            box-shadow: 0 0 0 0.25rem #fff;
        }

        .form-control {
            display: block;
            width: 100%;
            height: calc(1.5em + .75rem + 2px);
            padding: .375rem .75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            background-color: #301200;
            background-clip: padding-box;
            border: 1px solid #8b3605;
            border-radius: .25rem;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            color: #fff;
        }

        .form-control:focus {
            color: #fff;
            background-color: #301200;
            border-color: #8b3605;
            outline: 0;
            box-shadow: 0 0 0 0.25rem rgba(255, 255, 255, 0.25);
        }

        /* form-control placeholder color */
        .form-control::placeholder {
            color: #fff;
            opacity: .7;
        }

        /* radio checked color */
        .form-check-input:checked {
            background-color: #301200;
            border-color: #fff;
        }

        [type=checkbox],
        [type=radio] {
            box-sizing: border-box;
            padding: 0;
            color: #301200;
        }

        [type=checkbox]:focus,
        [type=radio]:focus {
            outline: 2px solid transparent;
            outline-offset: 2px;
            --tw-ring-inset: var(--tw-empty, );
            --tw-ring-offset-width: 2px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: #8b3605;
            --tw-ring-offset-shadow: 0 0 #0000;
        }

        .btn-check:focus+.btn-primary,
        .btn-primary:focus {
            box-shadow: inset 10px 4px 40px rgba(160, 85, 30, 0.5);
            border-color: #8b3605;
            background-color: #301200;
        }

        .btn-check:active+.btn-primary:focus,
        .btn-check:checked+.btn-primary:focus,
        .btn-primary.active:focus,
        .btn-primary:active:focus,
        .show>.btn-primary.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.25rem #8b3605;
        }

        .form-check-input:focus {
            border-color: #8b3605;

        }

        [type=checkbox]:focus,
        [type=radio]:focus {
            outline: 2px solid #8b3605;
        }


        .card-radio {
            background-color: #301200;
            border: 2px solid #301200;
            border-radius: .75rem;
            padding: .5rem;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            display: block
        }

        .card-radio:hover {
            cursor: pointer
        }

        .card-radio-label {
            display: block
        }


        .card-radio-input {
            display: none
        }

        .card-radio-input:checked+.card-radio {
            border-color: #fff !important
        }


        .font-size-16 {
            font-size: 16px !important;
        }

        .text-truncate {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        a {
            text-decoration: none !important;
        }


        .edit-btn {
            float: right;
            color: #fff;
        }

        .edit-btn a {
            color: #fff;
        }

        .ribbon {
            position: absolute;
            right: -26px;
            top: 20px;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            color: #fff;
            font-size: 13px;
            font-weight: 500;
            padding: 1px 22px;
            font-size: 13px;
            font-weight: 500
        }

        .highlight {
            color: #fff;
            background-color: #301200;
            box-shadow: inset 10px 4px 40px rgba(160, 85, 30, 0.5);
        }

        .bg-shadow {

            color: #fff;
            background-color: #301200;
            box-shadow: 10px 4px 40px rgba(160, 85, 30, 0.5);
        }

        .modal-main-dev {
            background-color: #301200 !important;
            box-shadow: 10px 4px 40px rgba(160, 85, 30, 0.5) !important;
            color: #fff !important;
        }

        .modal-title {
            color: #fff !important;
        }

        [type=text],
        [type=email],
        [type=url],
        [type=password],
        [type=number],
        [type=date],
        [type=datetime-local],
        [type=month],
        [type=search],
        [type=tel],
        [type=time],
        [type=week],
        [multiple],
        textarea,
        select {
            background-color: #301200;
            border: 1px solid #8b3605;
            border-radius: .25rem;
            color: #fff;
        }

        .mdi {
            font-size: 1.5rem;
            color: #fff;
        }

        table tbody tr td {
            color: #fff;
        }
    </style>
    
    <div class="feed-item-list">

    </div>
    <div class="container py-5 px-4">
        <div>
            {{-- <div class="edit-btn rounded">
                <a href="#" wire:click="openAddAddressModal()" data-bs-toggle="tooltip" data-placement="top"
                    title="" data-bs-original-title="Edit">
                    <i class="fa fa-plus text-base"></i>
                </a>
            </div> --}}
            {{-- <h5 class="text-base mb-1">Shipping Addresses</h5> --}}
            {{-- <p class="text-muted truncate mb-4">Neque porro quisquam est</p> --}}
            <div class="grid grid-cols-4 mb-5">
                <h5 class="text-base col-span-2 py-1">Shipping Addresses</h5>
                        <div class="py-2 text-end">
                            <a href="#" wire:click="openAddAddressModal()" data-bs-toggle="tooltip" data-placement="top" class="align-middle select-none bg-[#EABE8B] text-darkBrown font-semibold text-center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none py-2 px-4 rounded-lg shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none  justify-center items-center gap-3 uppercase" data-ripple-dark="true" style="position: relative; overflow: hidden;" title="Add Address" data-bs-original-title="Edit">
                                <!-- Removed max-width:5px from inline style -->
                                <i class="fa fa-plus text-base"></i>
                            </a>
                        </div>
                    </div> <div class="grid grid-cols-4">
                
                <div class="mb-3 col-span-3">
                    <div class="grid grid-cols-2">
                        @error('selectedAddress')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        @forelse ($userAddresses as $userAddress)
                            <div class="my-3 mx-3 card">
                                <div data-bs-toggle="collapse">
                                    <label class="card-radio-label mb-0 shadow-lg">
                                        <input type="radio" name="address" wire:model="selectedAddress"
                                            value="{{ $userAddress->id }}" id="info-address1"
                                            data-id="{{ $userAddress->id }}" class="card-radio-input">
                                        <div class="card-radio truncate p-3">
                                            <div class="edit-btn rounded">
                                                <a href="#" wire:click='editAddress({{ $userAddress->id }})'
                                                    data-bs-toggle="tooltip" data-placement="top" title=""
                                                    data-bs-original-title="Edit">
                                                    <i class="fa fa-pencil text-base"></i>
                                                </a>
                                                <a href="#" wire:click='deleteAddress({{ $userAddress->id }})'
                                                    data-bs-toggle="tooltip" data-placement="top"
                                                    title="Delete Adddress" class="ms-2"
                                                    data-bs-original-title="Delete Adddress">
                                                    <i class="fa fa-trash text-base"></i>
                                                </a>
                                            </div>
                                            <span class="text-sm mb-4 block">Address {{ $loop->index + 1 }}</span>
                                            <span class="text-sm mb-2 block">{{ $userAddress->name }}</span>
                                            <span class="text-sm mb-2 block">Email. {{ $userAddress->email }}</span>
                                            <span class="text-sm mb-2 block">Phone. {{ $userAddress->phone }}</span>
                                            <span
                                                class="text-muted normal-wrap mb-1 block">{{ $userAddress->address_line_1 }}</span>
                                            <span
                                                class="text-muted normal-wrap mb-1 block">{{ $userAddress->address_line_2 }}</span>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        @empty
                        @endforelse
                    </div>
                    <div class="grid grid-cols-1">
                        @php
                            $i = 0;
                        @endphp
                        @foreach ($cartItems as $key => $products)
                            
                        @foreach ($products as $key2 => $product)
                        @if ($product['shipping_cost'] == 'no_address_selected' || $product['shipping_cost'] == 'not_available')
                        @php
                                    $notAvailableProducts = true;
                                @endphp
                                @if (++$i == 1)
                                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                                    <strong class="font-bold">Alert!</strong>
                                    <span class="block sm:inline">{{ $product['shipping_cost'] == 'no_address_selected' ? 'The Address field is required. You can add address by clicking on plus icon "+"' : 'The products listed below cannot be delivered to the selected address. Please update your address or review your cart.' }}.</span>
                                    {{-- <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                      <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                                    </span> --}}
                                  </div>
                                @endif
                                <div class="card border mt-2 ">
                                    <div class="card-body">
                                        <div class="flex items-start border-b pb-3">
                                            <div class="me-4">
                                                <img height="100" width="100"
                                                    src="{{ Storage::url($product['image']) }}" alt=""
                                                    class="rounded-lg">
                                            </div>
                                            <div class="flex-grow self-center overflow-hidden px-4">
                                                <div>
                                                    <h5 class="truncate text-base"><a href="#"
                                                            class="text-light">{{ $product['title'] }} </a></h5>
                                                    <p class="text-muted mb-0">
                                                        <i class="bx bxs-star text-warning"></i>
                                                        <i class="bx bxs-star text-warning"></i>
                                                        <i class="bx bxs-star text-warning"></i>
                                                        <i class="bx bxs-star text-warning"></i>
                                                    </p>
                                                    @foreach (\App\Models\VariantOption::whereIn('id', $product['activeVariantOption'])->get() as $option)
                                                        <p class="mb-0 mt-1">{{ $option->variant->name }}: <span class="font-medium">{{ $option->name }}</span></p>
                                                    @endforeach
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="grid grid-cols-1 md:grid-cols-3">
                                                <div class="mt-3">
                                                    <p class="mb-2">Price <span class="text-muted">/ <small>Per Item
                                                            </small>
                                                        </span></p>
                                                    <h5 class="mb-0 mt-2">${{ $product['price'] }}</h5>
                                                </div>
                                                <div class="mt-3">
                                                    <p class="mb-2">Quantity</p>
                                                    <div class="inline-flex">
                                                        <p>{{ $product['quantity'] }}</p>
                                                    </div>
                                                </div>
                                                <div class="mt-3">
                                                    <p class="mb-2">Total</p>
                                                    <h5>${{ $product['price'] * $product['quantity'] }}/-</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        @endforeach
                    </div>
                </div>
                <div class="grid-cols-1">

            <div class="col-md-4">
                <div class="mt-5 mt-lg-0">
                    <div class="card border shadow-none">
                        <div class="card-header bg-transparent border-bottom py-3 px-4">
                            <h5 class="text-base mb-0">Order Summary <span class="float-end">#MN0124</span>
                            </h5>
                        </div>
                        <div class="card-body p-4 pt-2">
                            <div class="table-responsive">
                                <table class="table mb-0 w-full">
                                    <tbody>
                                        <tr>
                                            <td>Sub Total :</td>
                                            <td class="text-end">{{ currencyCalculator($this->totalProductCost) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Discount : </td>
                                            <td class="text-end">---</td>
                                        </tr>
                                        <tr>
                                            <td>Shipping Charge :</td>
                                            <td class="text-end">{{ currencyCalculator($this->totalShippingCost) }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Estimated Tax : </td>
                                            <td class="text-end">---</td>
                                        </tr>
                                        <tr class="highlight">
                                            <th>Total :</th>
                                            <td class="text-end">
                                                <span class="font-bold">
                                                    {{ currencyCalculator($this->totalCost) }}
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- end table-responsive -->
                        </div>
                    </div>
                </div>
            </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <!-- Products Grid -->
            </div>

        </div>
        <div class="grid grid-cols-4 my-4 sm:grid-cols-4">
            <div class="mt-2 sm:mt-0 col-span-2 ">
                <a href="{{  route('products',['slug_store' => 'all']) }}" class="btn text-light">
                    <i class="mdi mdi-arrow-left me-1"></i> Continue Shopping </a>
            </div>
            <div class="mt-2 sm:mt-0 text-sm-end" >
                @if (isset($notAvailableProducts))
                    <a  type="button"  href="{{ route('cart') }}" class="align-middle select-none bg-[#EABE8B] text-darkBrown font-semibold text-center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none py-2 px-4 rounded-lg shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none flex justify-center items-center gap-3 uppercase"">
                        <i class="mdi mdi-pencil" style="color: #301200"></i> Edit Cart </a>
                @else
                    <button type="button"  wire:click="proceedToPay" class="align-middle select-none bg-[#EABE8B] text-darkBrown font-semibold text-center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none py-2 px-4 rounded-lg shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none flex justify-center items-center gap-3 uppercase">
                        <i class="mdi mdi-cash-multiple" style="color:#301200"></i> Proceed To Pay  </button>
                @endif
            </div>
        </div>
    </div>

    {{-- @if ($addressModal)
        {{ dd($addressModal) }}
    @endif --}}
    <x-modals.modal wire:model="addressModal" maxWidth="2xl">
        @slot('headerTitle')
            {{ __(($requestedId != '' ? 'Update' : 'Add') . ' Address') }}
        @endslot

        @slot('content')
            <div class="mt-4">
                {{-- name --}}
                <x-jet-label for="name" class="text-white" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full " type="text" wire:model="name"
                    autocomplete="name" max="150" min="3" required />
                @error('name')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
                {{-- email --}}
                <x-jet-label for="email" class="text-white" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full " type="email" wire:model="email"
                    autocomplete="email" max="255" required />
                @error('email')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
                {{-- phone --}}
                <x-jet-label for="phone" class="text-white" value="{{ __('Phone') }}" />
                <x-jet-input id="phone" class="block mt-1 w-full " type="text" wire:model="phone"
                    autocomplete="phone" max="150" pattern="\d{10}" required />
                @error('phone')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
                {{-- addressLine_1 --}}
                <x-jet-label for="address" class="text-white" value="{{ __('Address Line 1') }}" />
                <x-jet-input id="address" class="block mt-1 w-full " type="text" wire:model="addressLine_1"
                    autocomplete="address" max="255" min="3" required />
                @error('address')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
                {{-- addressLine_2 --}}
                <x-jet-label for="address" class="text-white" value="{{ __('Address Line 2') }}" />
                <x-jet-input id="address" class="block mt-1 w-full " type="text" wire:model="addressLine_2"
                    autocomplete="address" max="255" min="3" />
                @error('address')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
                {{-- country  dropdown --}}
                <x-jet-label for="country" class="text-white" value="{{ __('Country') }}" />
                <select name="country" id="country" wire:model="country" class="form-control" required>
                    <option value="">Select Country</option>
                    @foreach ($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                    @endforeach
                </select>
                @error('country')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
                {{-- state  dropdown --}}
                <x-jet-label for="state" class="text-white" value="{{ __('State') }}" />
                <select name="state" id="state" wire:model="state" class="form-control" required>
                    <option value="">Select State</option>
                    @foreach ($states as $state)
                        <option value="{{ $state->id }}">{{ $state->name }}</option>
                    @endforeach
                </select>
                @error('state')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
                {{-- city  dropdown --}}
                <x-jet-label for="city" class="text-white" value="{{ __('City') }}" />
                <select name="city" id="city" wire:model="city" class="form-control" required>
                    <option value="">Select City</option>
                    @foreach ($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
                </select>
                @error('city')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
                {{-- zipCode  max-7 --}}
                <x-jet-label for="zipCode" class="text-white" value="{{ __('Zip Code') }}" />
                <x-jet-input id="zipCode" class="block mt-1 w-full " type="text" wire:model="zipCode"
                    autocomplete="zipCode" max="7" min="3" required />
                @error('zipCode')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
                {{-- isDefault address  checkbox --}}
                <x-jet-label for="isDefault" class="text-white" value="{{ __('Is Default') }}" />
                <input type="checkbox" name="isDefault" id="isDefault" wire:model="isDefault" class="form-check-input">
                @error('isDefault')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror




            </div>

        @endslot

        @slot('footer')
            <x-jet-secondary-button class="btn-cancel" wire:click="$toggle('addressModal')" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button>

            <x-jet-button class="ml-2 btn-primary" wire:click="createUpdateAddress" wire:loading.attr="disabled">
                {{ __('Save') }}
            </x-jet-button>
        @endslot
    </x-modals.modal>

    {{-- confirmingDeletionModal --}}
    <x-modals.delete-alert wire:model="confirmingDeletionModal"
        message="Are you sure you want to delete this Address?" />
</div>
