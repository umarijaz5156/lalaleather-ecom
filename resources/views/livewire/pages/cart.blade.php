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

        .avatar-lg {
            height: 5rem;
            width: 5rem;
        }

        .font-size-18 {
            font-size: 18px !important;
        }

        .text-truncate {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        a {
            text-decoration: none !important;
        }

        .w-xl {
            min-width: 160px;
        }

        .card {
            margin-bottom: 24px;
            box-shadow: 10px 4px 40px rgba(160, 85, 30, 0.5);

        }

        .card {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #301200;
            background-clip: border-box;
            border: 1px solid #1b0b00;
            border-radius: 1rem;
            box-shadow: 10px 4px 40px rgba(160, 85, 30, 0.5);
            color: #fff;

        }

        .mdi {
            font-size: 1.5rem;
            color: #fff;
        }

        table tbody tr td {
            color: #fff;
        }

        .highlight {
            color: #fff;
            background-color: #301200;
            box-shadow: inset 10px 4px 40px rgba(160, 85, 30, 0.5);
        }

        .modal-main-dev {
            background-color: #301200 !important;
        }

        .modal-title {
            color: #fff !important;
        }
    </style>
    <div class="container">
        {{--  flash message --}}
        @if (session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> {{ session('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @elseif(session()->has('error'))
            <div class="alert alert-danger highlight alert-dismissible fade show" role="alert">
                <strong>Error!</strong> {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="grid grid-cols-{{ count($cardItems) > 0 ? '3' : '1' }} gap-4 px-5 mb-5">
        <div class="mt-5 md:mt-0 col-span-{{ count($cardItems) > 0 ? '2' : '1' }}">
             @php
                $subTotal = 0;
            @endphp
            @forelse ($cardItems as $productId => $products )
                
            @forelse ($products as $key => $product)
                @php
                    // Sub Total
                    $subTotal += $product['price'] * $product['quantity'];
                @endphp
                <div class="border rounded-lg shadow-md mb-4">
                    <div class="p-4">
                        <div class="flex items-start border-b pb-3">
                            <div class="mr-4">
                                <img src="{{ Storage::url($product['image']) }}" alt="" class="w-24 h-24 rounded">
                            </div>
                            <div class="flex-grow overflow-hidden">
                                <div>
                                    <h5 class="truncate text-lg text-primary"><a href="#" class="text-primary">{{ $product['title'] }}</a></h5>
                                    @if($product['productRating'] ?? false)
                                    <x-rating :rating="$product['productRating']" />
                                    @endif
                                    {{-- get varient option where in activeVariantOption --}}
                                    @foreach (\App\Models\VariantOption::whereIn('id', $product['activeVariantOption'])->get() as $option)
                                        <p class="mb-0 mt-1">{{ $option->variant->name }}: <span class="font-medium">{{ $option->name }}</span></p>
                                        
                                    @endforeach
                                </div>
                                @if ($product['is_custom'] ?? false)
                                    <p class="pt-3  text-gray-600">This product would be manufactured when an order is placed</p>
                                @endif
                                @if (isUserCountryValidForShipping(\App\Models\Product::where('title',$product['title'])->get()->first()))
                                    <p class="pt-3  text-[#C65B1A]">This proudct can be shipped to {{ (ip_info()['country'] ?? 'your country') }}</p>
                                @else
                                    <p class="pt-3  text-[#C65B1A]">This proudct can not be shipped to {{ (ip_info()['country'] ?? 'your country') }}</p>
                                @endif
                            </div>
                            <div class="flex-shrink-0 ml-2">
                                <ul class="flex items-center">
                                    <li>
                                        <a href="#" wire:click="confirmingRemoveCartItem('{{ $productId }}','{{ $key }}')" class="text-gray-600 px-1">
                                            <i class="mdi mdi-trash-can-outline"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-gray-600 px-1">
                                            <i class="mdi mdi-heart-outline"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="mt-4 grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div>
                                <p class="mb-2">Price <span class="text-gray-500">/ <small>Per Item</small></span></p>
                                <h5 class="mt-2">{{ currencyCalculator($product['price']) }}</h5>
                            </div>
                            <div>
                                <p class="mb-2">Quantity</p>
                                <div class="flex items-center">
                                    <button @if ($product['quantity'] <= 1) wire:click="confirmingRemoveCartItem('{{ $productId }}','{{ $key }}')" @else wire:click="updateQuantity('minus', '{{ $productId }}','{{ $key }}')" @endif class="text-gray-600 p-1 border border-gray-300 rounded-full" type="button">
                                        <i class="mdi mdi-minus"></i>
                                    </button>
                                    <input readonly type="text" class="bg-[#f8e7cf1a] border border-[#f8e7cf1a] rounded-md focus:ring-primary focus:border-primary block w-20 p-2.5 placeholder:text-primary text-primary" value="{{ $product['quantity'] }}" placeholder="1" aria-label="Quantity">
                                    <button wire:click="updateQuantity('increment','{{ $productId }}','{{ $key }}')" class="text-gray-600 p-1 border border-gray-300 rounded-full" type="button">
                                        <i class="mdi mdi-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <div>
                                <p class="mb-2">Total</p>
                                <h5>{{ currencyCalculator($product['price'] * $product['quantity']) }}/-
                                </h5>
                            </div>
                        </div>
                        @if (isset($cartErrors[$key]))
                            <div class="alert alert-danger highlight alert-dismissible fade show mt-2" role="alert">
                                <strong>Error!</strong> {{ $cartErrors[$key] }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                    </div>
                </div>
            @empty
              
            @endforelse
            @empty
            <div class="card border rounded-md shadow-md mb-4">
                <div class=" p-4 text-center">
                    <h2 class="text-2xl">Cart is Empty</h2>
                </div>
            </div>
            @endforelse

            <div class="flex flex-col md:flex-row justify-between items-center my-4">
                <div class="mb-2 md:mb-0">
                    <a href="{{ route('products',['slug_store' => 'all']) }}" class="btn btn-link text-light">
                        <i class="mdi mdi-arrow-left me-1"></i> Continue Shopping
                    </a>
                </div>
            
                @if(count($cardItems) > 0)
                <div>
                    <div class="text-sm-end">
                        <a type="button" href="{{ route('buy') }}" class="align-middle select-none bg-[#EABE8B] text-darkBrown font-semibold text-center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none py-2 px-4 rounded-lg shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none flex justify-center items-center gap-3 uppercase" data-ripple-dark="true" style="position: relative; overflow: hidden">
                             Proceed
                             <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                <path d="M5.45557 14.4142C6.04888 14.4142 6.52985 13.9332 6.52985 13.3399C6.52985 12.7466 6.04888 12.2656 5.45557 12.2656C4.86226 12.2656 4.38129 12.7466 4.38129 13.3399C4.38129 13.9332 4.86226 14.4142 5.45557 14.4142Z" fill="#301200"></path>
                                <path d="M11.9824 14.4142C12.5757 14.4142 13.0567 13.9332 13.0567 13.3399C13.0567 12.7466 12.5757 12.2656 11.9824 12.2656C11.3891 12.2656 10.9081 12.7466 10.9081 13.3399C10.9081 13.9332 11.3891 14.4142 11.9824 14.4142Z" fill="#301200"></path>
                                <path d="M14.8854 1.69989C14.8409 1.64512 14.7849 1.60087 14.7213 1.57032C14.6578 1.53978 14.5882 1.52369 14.5177 1.52323H4.57702L4.88737 2.47814H13.8922L12.6174 8.20765H5.45554L3.27356 1.29882C3.24996 1.22551 3.20897 1.159 3.1541 1.10496C3.09923 1.05092 3.0321 1.01095 2.95844 0.988473L1.00086 0.386876C0.940665 0.368379 0.877418 0.361919 0.814729 0.367865C0.75204 0.373811 0.691135 0.392047 0.635494 0.42153C0.52312 0.481075 0.439003 0.582821 0.401647 0.704386C0.364291 0.82595 0.376757 0.957376 0.436301 1.06975C0.495846 1.18212 0.597592 1.26624 0.719157 1.3036L2.43323 1.8288L4.62477 8.75195L3.84174 9.39174L3.77967 9.45381C3.58598 9.67702 3.47619 9.96078 3.46922 10.2562C3.46225 10.5517 3.55853 10.8403 3.74147 11.0724C3.8716 11.2307 4.03697 11.3563 4.22434 11.4392C4.41171 11.5221 4.61588 11.56 4.82053 11.5499H12.7893C12.9159 11.5499 13.0374 11.4996 13.1269 11.41C13.2165 11.3205 13.2668 11.199 13.2668 11.0724C13.2668 10.9458 13.2165 10.8243 13.1269 10.7348C13.0374 10.6452 12.9159 10.5949 12.7893 10.5949H4.74413C4.68915 10.5931 4.63558 10.577 4.5886 10.5484C4.54162 10.5198 4.50282 10.4795 4.47594 10.4315C4.44906 10.3835 4.43501 10.3294 4.43516 10.2744C4.4353 10.2194 4.44963 10.1653 4.47676 10.1175L5.62743 9.16256H12.9994C13.1098 9.16526 13.2177 9.12963 13.3047 9.06172C13.3918 8.99382 13.4526 8.89785 13.4768 8.79014L14.9904 2.10573C15.0049 2.03455 15.003 1.96099 14.9848 1.89066C14.9666 1.82033 14.9326 1.75508 14.8854 1.69989Z" fill="#301200"></path>
                            </svg>
                            </a>
                    </div>
                </div>
                @endif
            </div>
            
        </div>
        @if (count($cardItems) > 0)
            <div class="col-span-3 md:col-span-1 ">
                <div class="mt-5 md:mt-0">
                    <div class="border rounded-lg shadow-md">
                        <div class="bg-transparent border-b py-3 px-4">
                            <h5 class="text-lg font-semibold mb-0">Order Summary <span class="float-right">#MN0124</span></h5>
                        </div>
                        <div class="p-4 pt-2">
                            <div class="overflow-x-auto">
                                <table class="w-full table-auto">
                                    <tbody>
                                        <tr>
                                            <td class="py-2">Sub Total :</td>
                                            <td class="text-right py-2">{{ currencyCalculator($subTotal) ?? '---' }}</td>
                                        </tr>
                                        <tr>
                                            <td class="py-2">Discount :</td>
                                            <td class="text-right py-2">---</td>
                                        </tr>
                                        <tr>
                                            <td class="py-2">Estimated Tax :</td>
                                            <td class="text-right py-2">---</td>
                                        </tr>
                                        <tr class="highlight">
                                            <th class="py-2 text-left px-3">Total :</th>
                                            <td class="text-right py-2 px-3 font-semibold">
                                                <span class="font-bold ">{{ currencyCalculator($subTotal) ?? '---' }}</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <small class="text-gray-500 block text-right mt-2">Shipping cost not included</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
        <!-- end row -->

    </div>
    {{-- confirmingDeletionModal --}}
    <x-modals.delete-alert wire:model="confirmingDeletionModal" message="Are you sure to remove this Item from Cart?"
        delete='removeCartItem()' />


</div>
