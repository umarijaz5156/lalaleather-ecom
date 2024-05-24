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

        .modal-main-dev{
            background-color: #301200 !important;
        }
        .modal-title{
            color: #fff !important;
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
    </style>
    <div class="container">
        {{-- success message --}}
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

    {{-- <div class="flex flex-wrap -mx-3"> --}}
    <div class="flex-none w-full max-w-full px-4">
        <div>
            @if (session()->has('message'))
                <x-alerts.success :success="session('message')" />
            @endif
        </div>
        <div
            class="relative flex flex-col min-w-0 mb-6 break-words  border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
            <div
                class="frelative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all shadow-none duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start">


                <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">

                    {{-- <a href="#" wire:click.prevent="createEmailConfig"
                        class="px-4 py-3 hover:text-fuchsia-500 mb-2 ml-2 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg cursor-pointer xl-max:cursor-not-allowed xl-max:opacity-65 xl-max:pointer-events-none xl-max:bg-gradient-to-tl xl-max:from-purple-700 xl-max:to-pink-500 xl-max:text-white xl-max:border-0 hover:scale-102 hover:shadow-soft-xs active:opacity-85 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 border-fuchsia-500 bg-none text-fuchsia-500 hover:border-fuchsia-500"
                        type="button">
                        Add New Template
                    </a> --}}
                </div>
                <div class="items-center justify-end mt-2 mr-2 mb-6">
                    {{-- <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only ">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 " fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                        <input type="search" id="default-search"
                            class="block w-full p-2 pl-8 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 "
                            placeholder="Search Template..." wire:model="searchTerm" required>
                    </div> --}}
                </div>


            </div>

            <div class="flex-auto px-0 pt-0 pb-2">
                <div class="p-0 overflow-x-auto">
                    <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                        <thead class="align-bottom">

                            <tr>
                                {{-- $tableHeaders --}}

                                <th
                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    Order #
                                </th>
                                <th
                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    Total Cost
                                </th>
                                <th
                                class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                Payment Status
                            </th>
                        <th
                            class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                            Created At
                        </th>

                        <th
                            class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                            Action
                        </th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($orders) > 0)
                                @foreach ($orders as $order)
                                    {{-- {{ dd($order) }} --}}
                                    <tr wire:key="template]_{{ $order->id }}">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            LLW-076-0{{ $order->id }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ currencyCalculator($order->total_cost) }}
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                {{ $order->status }}
                                            </td>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ $order->created_at }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="ml-auto text-right">
                                                @if($order->status == 'pending')
                                                <a type="button"
                                                    href="{{ route('order.pay', $order->id) }}" 
                                                    class="text-white btn btn-primary bg-gradient-to-r from-green-400 via--500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Pay Now</a>
                                                @endif
                                                    <button type="button"
                                                    wire:click="viewOrderDetails({{ $order->id }})" type="button"
                                                    class="text-white bg-gradient-to-r from-blue-400 via-blue-500 to-blue-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">view Order Details</button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="4" class="p-5" align="center">
                                        No Template Found.
                                    </td>
                                </tr>

                            @endif
                        </tbody>
                    </table>
                    {{ $orders->links() }}
                </div>
            </div>
        </div>
    </div>

    <x-modals.modal wire:model="viewOrderDetailsModal" maxWidth="3xl">
        @slot('headerTitle')
            {{ ___('Order Details') }}
        @endslot

        @slot('content')
        <h3>Order Items Details:</h3>
        <table style="border-collapse: collapse; width: 100%; margin-top: 15px; margin-bottom: 15px; border: 1px solid #dddddd;">
            <thead>
                <tr>
                    {{-- <th style="border: 1px solid #dddddd; padding: 10px; text-align: left;">ID</th> --}}
                    <th style="border: 1px solid #dddddd; padding: 10px; text-align: left;">Product</th>
                    <th style="border: 1px solid #dddddd; padding: 10px; text-align: left;">Quantity</th>
                    <th style="border: 1px solid #dddddd; padding: 10px; text-align: left;">Cost</th>
                </tr>
            </thead>
            <tbody>
                @if ($viewOrderDetails)
                    
                @foreach ($viewOrderDetails->orderItems as $orderItem)
                <tr>
                    {{-- <td style="border: 1px solid #dddddd; padding: 10px;">{{$orderItem->id}}</td> --}}
                    <td style="border: 1px solid #dddddd; padding: 10px;">{{$orderItem->product->title}}<br>
                        @if($orderItem->product_variant_option_ids != null && $orderItem->product_variant_option_ids != '[]')
                            @foreach (\App\Models\VariantOption::whereIn('id', json_decode($orderItem->product_variant_option_ids,true))->get() as $option)
                            <p class="mb-0  mt-1"><strong>{{ $option->variant->name }}:</strong> <span class="font-medium">{{ $option->name }}</span></p>  
                            @endforeach
                        @endif</td>
                    <td style="border: 1px solid #dddddd; padding: 10px;">{{$orderItem->product_quantity}}</td>
                    <td style="border: 1px solid #dddddd; padding: 10px;">{{ currencyCalculator(($orderItem->product_cost + $orderItem->product_variant_cost))}}</td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table> 
        @if($viewOrderDetails)
            <div style="margin-top: 15px; margin-bottom: 15px;">
                <div style="border: 1px solid #ddd; padding: 10px;">
                    <h3>Order Details:</h3>
                    <ul style="list-style-type: none; padding: 0;">
                            <li><strong>Order Shipping Cost:</strong>  {{ currencyCalculator($viewOrderDetails->shipping_total)}}</li>
                            <li><strong>Order Total:</strong>  {{ currencyCalculator($viewOrderDetails->total_cost)}}</li>
                            <li><strong>Order Payment Status:</strong> {{$viewOrderDetails->status}}</li>
                            <li><strong>Payment Methode:</strong> {{$viewOrderDetails->method}}</li>
                        
                    </ul>
                </div>

                <div style="border: 1px solid #ddd; padding: 10px; margin-bottom: 15px;">
                    <h3>Shipping Details:</h3>
                    <ul style="list-style-type: none; padding: 0;">
                            <li><strong>Buyer Name:</strong> {{$viewOrderDetails->buyer->name}}</li>
                            <li><strong>Buyer Email:</strong> {{$viewOrderDetails->buyer->email}}</li>
                            <li><strong>Shipping Address:</strong>
                                <ul style="list-style-type: none; padding: 0;">
                                    <li><strong>Name:</strong> {{$viewOrderDetails->address->name}}</li>
                                    <li><strong>Phone:</strong> {{$viewOrderDetails->address->phone}}</li>
                                    <li><strong>Email:</strong> {{$viewOrderDetails->address->email}}</li>
                                    <li><strong>Address Line 1:</strong> {{$viewOrderDetails->address->address_line_1}}</li>
                                    <li><strong>Address Line 2:</strong> {{$viewOrderDetails->address->address_line_2}}</li>
                                </ul>
                            </li>
                    </ul>
                </div>
            
            </div>
        @endif
        
        

        @endslot

        @slot('footer')
            <x-jet-secondary-button wire:click="$toggle('viewOrderDetailsModal')" wire:loading.attr="disabled">
                {{ __('Close') }}
            </x-jet-secondary-button>
        @endslot
    </x-modals.modal>
</div>
   
</div>
