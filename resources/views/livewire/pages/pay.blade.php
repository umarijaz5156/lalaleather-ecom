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
            .
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

        .ElementsApp input {
            color: #fff !important;
        }

        /* Placeholder color */
        .ElementsApp::placeholder {
            color: #999;
            /* Replace with your desired color */
        }

        /* Border styles */
        .InputElement {
            border: 1px solid #ccc;
            /* Replace with your desired border color */
            border-radius: 5px;
            /* Optional: Add border-radius for rounded corners */
        }

        /* Focus styles */
        .InputElement:focus {
            border: 1px solid #007bff;
            /* Replace with your desired focus border color */
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
            /* Optional: Add box-shadow for focus effect */
        }

        .ElementsApp,
        .ElementsApp .InputElement {
            color: #fff !important;
            border: solid 1px #8b3605 !important;
        }
    </style>
    {{-- <div class="col-md-6  mx-auto card-details  mt-2">

        <div class="product-add-to-cart mt-2  text-center"> --}}
    @if ($order->status == 1 || $order->status == 'paid')
        <div class="back-to text-center text-xl px-4 py-5">
            Thanks for your purchase, You can view your  
            <a href="{{ route('order.history') }}" class="text-3xl" >order details</a>

        </div>
        <br>
    @else
    <div class="container py-5 px-4">

        <h1 class="text-lg mb-5">Payment</h1>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
            
            <!-- Left -->
            <div class="lg:col-span-2" wire:ignore>
                <div class="accordion" id="accordionPayment">
                    <!-- Credit card -->
                    <div class="col-span-2 ">
                        <div x-data="{ open: true }" class="mb-3 accordion-item">
                            <!-- Credit card -->
                            <div class="h-12 flex justify-between items-center px-4 py-3 cursor-pointer"
                                @click="open = !open">
                                <label class="flex items-center">
                                    <input type="radio" name="payment" class="form-radio mr-2" x-model="open">
                                    <span class="text-xl">Stripe Payment</span>
                                </label>
                            </div>
                            <div x-show="open" class=" px-4 py-2">
                                <div id="collapseCC" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionPayment" style="">
                                <div class="accordion-body">
                                    <form id="payment-form" class="payment-form postage-section"
                                        style="width: 100% ; min-width :0 ;">
    
    
                                        <div id="card-element"><!--Stripe.js injects the Card Element--></div>
                                        <button id="submit" class="stripe-btn my-5" style="width: 100%">
                                            <div class="spinner hidden" id="spinner"></div>
                                            <span class="btn btn-primary w-full block py-2" onclick="processPayPal()" id="button-text">Pay
                                                now</span>
    
    
                                        </button>
                                        <p id = "striptext">
                                            <Strong> All payments processed safely by stripe</Strong>
                                        </p>
                                        <p id="card-error" role="alert"></p>
                                        <p class="result-message hidden">
                                            Thanks for your purhcase, You can view your order details
                                            <a href="{{ route('order.history') }}" class="text-3xl" >order details</a>
                                        </p>
                                        <div class="back-to text-center">
    
                                            <div class="col-md-6  mx-auto card-details  mt-2">
                                            </div>
                                    </form>
                                </div>
                            </div>
                            </div>
                        </div>
                        <!-- PayPal -->
                        <div x-data="{ open: false }" class="mb-3 accordion-item">
                            <div class="h-12  flex justify-between items-center px-4 py-3 cursor-pointer"
                                @click="open = !open">
                                <label class="flex items-center">
                                    <input type="radio" name="payment" class="form-radio mr-2" x-model="open">
                                    <span class="text-xl">PayPal</span>
                                </label>
                            </div>
                            <div x-show="open" class=" px-4 py-2">
                                <form method="post" action="{!! route('paypal', ['order' => $order]) !!}">
                                    @csrf
                                    <button class="btn btn-primary w-full py-2 my-2" id="paypalButton"> Pay With PAYPAL </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Right -->
        <div class="lg:col-span-1">
            <div class="card sticky top-0">
                <div class="p-3 bg-opacity-10">
                    <h6 class="text-sm mb-3">Order Summary</h6>
                    <div class="flex justify-between mb-1 text-sm">
                        <span>Subtotal</span>
                        <span>{{ currencyCalculator(session()->get('totalProductCost')) }}</span>
                    </div>
                    <div class="flex justify-between mb-1 text-sm">
                        <span>Shipping</span>
                        <span>{{ currencyCalculator(session()->get('totalShippingCost')) }}</span>
                    </div>
                    <hr class="my-1">
                    <div class="flex justify-between mb-1 text-sm">
                        <span></span>
                        <span>{{ currencyCalculator(session()->get('totalProductCost') + session()->get('totalShippingCost')) }}</span>
                    </div>
                    {{-- <div class="flex justify-between mb-1 text-sm">
                        <span>Coupon (Code: NEWYEAR)</span> <span class="text-danger">-$10.00</span>
                    </div> --}}
                    {{-- <div class="flex justify-between mb-4 text-sm">
                        <span>TOTAL</span> <strong class="text-dark">$224.50</strong>
                    </div>
                    <div class="form-check mb-1 text-sm">
                        <input class="form-check-input" type="checkbox" value="" id="tnc">
                        <label class="form-check-label" for="tnc">
                            I agree to the <a href="#">terms and conditions</a>
                        </label>
                    </div>
                    <div class="form-check mb-3 text-sm">
                        <input class="form-check-input" type="checkbox" value="" id="subscribe">
                        <label class="form-check-label" for="subscribe">
                            Get emails about product updates and events. If you change your mind, you can
                            unsubscribe at any time. <a href="#">Privacy Policy</a>
                        </label>
                    </div>
                    <button type="button" wire:click="charge()" class="btn btn-primary w-full mt-2">Place order</button> --}}
                </div>
            </div>
        </div>
    </div>
    @endif

    {{-- @isset($order_id)
                <form method="post" action ="{{route('stripe.checkout',['order' => $order_id])}}">
                    @csrf
    
                    <button type="submit"> Checkout</button>
                </form>
    
                @endif --}}
    {{-- </div>


    </div> --}}
</div>
</div>

<script src="https://js.stripe.com/v3/"></script>

<script>
    // Sign in to see examples pre-filled with your key.
    var stripe = Stripe(
        "{{ config('stripe.publishable') }}"
        // "pk_test_51JZupMCiBnqSjeqOgWQmDappn6wnFABhZbC5WEGz0oWuZmjVp7vjIO0dFmKjxU43vaItimyQbILonTYlnDGkIr4A003HlKXxb3"
    );
    // The items the customer wants to buy
    var purchase = {
        items: [{
            id: "xl-tshirt"
        }]
    };
    console.log("{{ route('paymentintent.fetch', ['order' => $order]) }}", $('meta[name="csrf-token"]').attr(
        'content'));
    // Disable the button until we have Stripe set up on the page
    document.querySelector("button").disabled = true;
    fetch("{{ route('paymentintent.fetch', ['order' => $order]) }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            body: JSON.stringify(purchase)
        })
        .then(function(result) {
            return result.json();
        })
        .then(function(data) {
            var elements = stripe.elements();
            var style = {
                base: {
                    color: "#fff",
                    fontFamily: 'Arial, sans-serif',
                    fontSmoothing: "antialiased",
                    fontSize: "16px",
                    "::placeholder": {
                        color: "#fff"
                    }
                },
                invalid: {
                    fontFamily: 'Arial, sans-serif',
                    color: "#fa755a",
                    iconColor: "#fa755a"
                }
            };
            var card = elements.create("card", {
                style: style,

            });



            // Stripe injects an iframe into the DOM
            card.mount("#card-element");
            card.on("change", function(event) {

                // Disable the Pay button if there are no card details in the Element
                document.querySelector("button").disabled = event.empty;
                document.querySelector("#card-error").textContent = event.error ? event.error.message : "";
            });
            var form = document.getElementById("payment-form");
            form.addEventListener("submit", function(event) {
                event.preventDefault();
                // Complete payment when the submit button is clicked
                payWithCard(stripe, card, data.clientSecret);
            });
        });
    // Calls stripe.confirmCardPayment
    // If the card requires authentication Stripe shows a pop-up modal to
    // prompt the user to enter authentication details without leaving your page.
    var payWithCard = function(stripe, card, clientSecret) {
        loading(true);
        stripe
            .confirmCardPayment(clientSecret, {
                payment_method: {
                    card: card
                }
            })
            .then(function(result) {
                if (result.error) {
                    // Show error to your customer

                    showError(result.error.message);
                } else {
                    // The payment succeeded!

                    orderComplete(result.paymentIntent.id);
                }
            });
    };
    /* ------- UI helpers ------- */
    // Shows a success message when the payment is complete
    var orderComplete = function(paymentIntentId) {
        loading(false);



        fetch("{{ route('order.success', ['order' => $order]) }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },

        });


        document.querySelector(".result-message").classList.remove("hidden");
        document.querySelector("button").disabled = true;

        // document.getElementById('card-element').style.visibility = 'hidden';
        document.getElementById('submit').style.display = 'none';
        document.getElementById('card-element').style.display = 'none';
        document.getElementById("striptext").style.display = 'none';
    };
    // Show the customer the error from Stripe if their card fails to charge

    var showError = function(errorMsgText) {
        loading(false);
        var errorMsg = document.querySelector("#card-error");
        errorMsg.textContent = errorMsgText;
        setTimeout(function() {
            errorMsg.textContent = "";
        }, 4000);
    };
    // Show a spinner on payment submission
    var loading = function(isLoading) {
        if (isLoading) {
            // Disable the button and show a spinner
            document.querySelector("button").disabled = true;
            document.querySelector("#spinner").classList.remove("hidden");
            document.querySelector("#button-text").classList.add("hidden");
        } else {
            document.querySelector("button").disabled = false;
            document.querySelector("#spinner").classList.add("hidden");
            document.querySelector("#button-text").classList.remove("hidden");
        }
    };
    function processPayPal() {
        // Your logic to handle PayPal payment

        // After successful Stripe payment, disable the PayPal button
        disablePayPalButton();
    }

    function disablePayPalButton() {
        var paypalButton = document.getElementById('paypalButton');
        if (paypalButton) {
            paypalButton.disabled = true;
        }
    }
</script>

{{-- @endsection --}}
</div>
