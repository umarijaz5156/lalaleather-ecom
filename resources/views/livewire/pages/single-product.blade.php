<div>

    <section>
        <div class="container xl:max-w-screen-2xl mx-auto px-4 py-20 md:py-32 relative">
            <div class="flex justify-start items-start gap-12 flex-col lg:flex-row relative">
                <img src="{{ asset('images/zipper.png') }}" class="absolute bottom-0 right-0" alt="" />
                <div class="lg:max-w-[500px] [@media(min-width:1280px)]:max-w-[700px] w-full relative" wire:ignore>
                    <div class="swiper mySwiper2">
                        <div class="swiper-wrapper">
                            @foreach ($product->files->where('image_type', 'original')->map(fn($file) => Storage::url($file->file_path)) as $bannerImage)
                                <div class="swiper-slide">
                                    <img class="w-full sm:h-[700px] h-[300px] xl:max-w-[800px] object-cover rounded-[10px]"
                                        src="{{ $bannerImage }}" />
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="px-4 relative">
                        <div class="swiper-button-next !right-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="15" viewBox="0 0 8 15"
                                fill="none">
                                <path d="M1 13.7036L7 7.70361L0.999999 1.70361" stroke="#727B9D" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="swiper-button-prev !left-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="15" viewBox="0 0 8 15"
                                fill="none">
                                <path d="M7 1.70361L0.999999 7.70361L7 13.7036" stroke="#727B9D" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div thumbsSlider="" class="swiper mySwiper mt-6"
                            style="--swiper-navigation-color: #fff;--swiper-pagination-color: #fff;">
                            <div class="swiper-wrapper">
                                @foreach ($product->files->where('image_type', 'icon')->map(fn($file) => Storage::url($file->file_path)) as $iconImage)
                                    <div class="swiper-slide">
                                        <img class="w-full h-[140px] object-cover rounded-[10px]"
                                            src="{{ $iconImage }}" />
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-1 relative h-full">
                    <div class="space-y-6 relative">
                        <h1 class="text-primary font-roboto text-xl font-bold">
                            {{ ___('SKU') }}: {{ $product->sku }}
                        </h1>
                        <h1 class="text-primary text-4xl md:text-5xl font-bold">
                            {{ ___($product->title) }}
                        </h1>
                        <div class="flex justify-start items-center gap-7">
                            <h1 class="text-primary font-roboto text-xl font-bold">
                                {{ ___('PRICE') }}:
                            </h1>
                            <div
                                class="text-darkBrown bg-primary w-[153px] h-12 rounded-md flex justify-center items-center">
                                <p class="text-xl">{{ currencyCalculator($this->productFinalPrice()) }}</p>
                            </div>
                        </div>
                        <div class="flex justify-start items-center gap-7">
                            <h1 class="text-primary font-roboto text-xl font-bold">
                                {{ ___('Rating') }}:
                            </h1>
                            <x-rating :rating="$productRating" />
                            <p class="text-primary text-xl font-bold">
                                ({{ $product->reviews->where('status', '1')->count() }})</p>
                        </div>
                        {{-- message  you can select vaitants of products   --}}
                        <div class="d-flex font-normal text-primary ">
                            <p>{{ ___('You can select variants of this product') }}</p>
                        </div>
                        {{-- {{ dd($activeVariantOption) }} --}}
                        @foreach ($product->variants->groupBy('variant_id') as $variantId => $variants)
                            @php
                                $variant = $variants->first();
                            @endphp
                            <div class="flex justify-start items-center gap-7">
                                <h1 class="text-primary font-roboto text-xl font-bold">
                                    {{ ___($variant->variant->name) }}
                                </h1>
                                @foreach ($variants as $variant)
                                    @php
                                        $isActive = in_array($variant->variantOption->id, $activeVariantOption ?? []);
                                        $buttonClass = $isActive ? 'bg-[#EABE8B] text-darkBrown' : 'text-white';
                                    @endphp
                                    <div>
                                        <button type="button"
                                            class="align-middle select-none text-center transition-all py-2 max-w-md font-bold uppercase px-6 rounded-lg shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none flex justify-center items-center gap-3 {{ $buttonClass }}"
                                            wire:click="{{ $isActive ? 'clearVariantOption' : 'variantOption' }}({{ $variant->variant_id }},{{ $variant->variantOption->id }})"
                                            @if ($isActive) wire:click="clearVariantOption({{ $variant->variant_id }},{{ $variant->variantOption->id }})"
                                                    @else
                                                        wire:click="variantOption({{ $variant->variant_id }},{{ $variant->variantOption->id }})" @endif>
                                            {{ $variant->variantOption->name }}
                                        </button>
                                    </div>
                                @endforeach

                            </div>
                        @endforeach


                        <div
                            class="border border-[#C65B1A] rounded-md px-5 xl:px-12 py-2 xl:w-max flex justify-start items-center gap-4 md:gap-7 flex-col md:flex-row">
                            <p class="text-primary uppercase text-xl">
                                {{ ___('Get 10% off coupon code') }}:
                            </p>
                            <p class="text-primary uppercase flex justify-start items-center gap-2 text-xl">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                    viewBox="0 0 17 17" fill="none">
                                    <path
                                        d="M6.62652 4.81473C6.62652 5.29537 6.43559 5.75634 6.09572 6.09621C5.75585 6.43608 5.29489 6.62701 4.81424 6.62701C4.33359 6.62701 3.87263 6.43608 3.53276 6.09621C3.19289 5.75634 3.00195 5.29537 3.00195 4.81473C3.00195 4.33408 3.19289 3.87312 3.53276 3.53325C3.87263 3.19338 4.33359 3.00244 4.81424 3.00244C5.29489 3.00244 5.75585 3.19338 6.09572 3.53325C6.43559 3.87312 6.62652 4.33408 6.62652 4.81473ZM5.41833 4.81473C5.41833 4.65451 5.35469 4.50086 5.2414 4.38757C5.12811 4.27428 4.97445 4.21063 4.81424 4.21063C4.65402 4.21063 4.50037 4.27428 4.38708 4.38757C4.27379 4.50086 4.21014 4.65451 4.21014 4.81473C4.21014 4.97494 4.27379 5.1286 4.38708 5.24189C4.50037 5.35518 4.65402 5.41882 4.81424 5.41882C4.97445 5.41882 5.12811 5.35518 5.2414 5.24189C5.35469 5.1286 5.41833 4.97494 5.41833 4.81473Z"
                                        fill="#F8E7CF" />
                                    <path
                                        d="M1.79413 0.585938H7.33489C7.65529 0.586006 7.96255 0.713342 8.18908 0.939937L16.6464 9.39727C16.8729 9.62384 17.0002 9.93109 17.0002 10.2515C17.0002 10.5718 16.8729 10.8791 16.6464 11.1056L11.1056 16.6464C10.8791 16.8729 10.5718 17.0002 10.2515 17.0002C9.93109 17.0002 9.62384 16.8729 9.39727 16.6464L0.939937 8.18908C0.713342 7.96255 0.586006 7.65529 0.585938 7.33489V1.79413C0.585937 1.4737 0.713229 1.16639 0.939808 0.939808C1.16639 0.713229 1.4737 0.585938 1.79413 0.585938ZM1.79413 7.33489L10.2515 15.7922L15.7922 10.2515L7.33489 1.79413H1.79413V7.33489Z"
                                        fill="#F8E7CF" />
                                </svg>
                                {{ ___('Apply') }}
                            </p>
                        </div>
                        <div class="flex justify-start items-center gap-7">
                            <h1 class="text-primary font-roboto text-xl font-bold">
                                {{ ___('QUANTITY') }}:
                            </h1>
                            <button wire:click="decrement"
                                class="align-middle select-none bg-transparent border border-[#C65B1A] text-xl text-primary font-semibold text-center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none h-9 w-9 rounded-lg shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none flex justify-center items-center gap-3"
                                type="button" data-ripple-light="true">
                                -
                            </button>
                            <p class="text-primary text-xl">{{ $quantity }}</p>
                            <input type="hidden" class="form-control text-center me-3" wire:model='quantity'
                                min='{{ $product->moq }}' max="{{ $product->quantity }}" id="inputQuantity"
                                type="num" />
                            <button wire:click="increment"
                                class="align-middle select-none bg-transparent border border-[#C65B1A] text-xl text-primary font-semibold text-center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none h-9 w-9 rounded-lg shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none flex justify-center items-center gap-3"
                                type="button" data-ripple-light="true">
                                +
                            </button>

                        </div>
                        @error('quantity')
                            <div class="font-normal text-red-600">{{ ___($message) }}</div>
                        @enderror
                        @if (!$product->is_custom)
                            <div class="d-flex font-normal text-primary">
                                <p>{{ ___('This product would be manufactured when an order is placed') }}</p>
                            </div>
                        @endif
                        {{-- isUserCountryValidForShipping($this->product) --}}
                        @if (isUserCountryValidForShipping($product))
                            <div class="d-flex font-normal text-primary ">
                                <p>{{ ___('This proudct can be shipped to ' . (ip_info()['country'] ?? 'your country')) }}
                                </p>
                            </div>
                        @else
                            <div class="d-flex font-normal text-primary ">
                                <p>{{ ___('This proudct can not be shipped to ' . (ip_info()['country'] ?? 'your country')) }}
                                </p>
                            </div>
                        @endif


                        <button wire:click.prevent="addToCart({{ $product->id }})"
                            class="align-middle select-none bg-[#EABE8B] text-darkBrown text-center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none py-4 max-w-md w-full text-xl font-bold uppercase px-6 rounded-lg shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none flex justify-center items-center gap-3"
                            type="button" data-ripple-dark="true">
                            Add to cart
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11"
                                fill="none">
                                <path
                                    d="M4.47217 5.1748L0.291766 0.870111C0.199077 0.775477 0.149334 0.661105 0.142535 0.526998C0.135737 0.39289 0.188438 0.271279 0.300636 0.162166C0.408779 0.0569964 0.527511 0.00531324 0.656832 0.00711606C0.786153 0.00891889 0.903398 0.0638917 1.00857 0.172035L5.33496 4.62177C5.42108 4.70965 5.48116 4.7995 5.51522 4.89131C5.54929 4.98246 5.56557 5.08203 5.56406 5.19002C5.56256 5.29801 5.54351 5.39709 5.50691 5.48726C5.47031 5.57809 5.40774 5.66622 5.31921 5.75166L0.870456 10.0791C0.775831 10.1711 0.661465 10.2205 0.527357 10.2273C0.39325 10.2341 0.271638 10.1814 0.162525 10.0692C0.0573557 9.96106 0.00567247 9.84233 0.00747529 9.71301C0.00927812 9.58369 0.0642511 9.46644 0.172394 9.36127L4.47217 5.1748ZM10.4716 5.25844L6.29118 0.953747C6.19849 0.859113 6.14875 0.744741 6.14195 0.610634C6.13515 0.476526 6.18785 0.354915 6.30005 0.245802C6.4082 0.140633 6.52693 0.0889494 6.65625 0.0907522C6.78557 0.092555 6.90282 0.147528 7.00798 0.255671L11.3344 4.70541C11.4205 4.79329 11.4806 4.88313 11.5146 4.97495C11.5487 5.0661 11.565 5.16567 11.5635 5.27366C11.562 5.38165 11.5429 5.48073 11.5063 5.57089C11.4697 5.66172 11.4072 5.74986 11.3186 5.8353L6.86987 10.1627C6.77525 10.2547 6.66055 10.3041 6.52577 10.3109C6.391 10.3177 6.26972 10.265 6.16194 10.1528C6.05677 10.0447 6.00509 9.92597 6.00689 9.79664C6.0087 9.66732 6.06367 9.55008 6.17181 9.44491L10.4716 5.25844Z"
                                    fill="#301200" />
                            </svg>
                        </button>
                        {{-- <div class="custom_select">
                            <select
                                class="peer h-full w-full rounded-[7px] border border-[#C65B1A] bg-[#301200] p-3 font-normal text-[#C65B1A] outline outline-0 transition-all focus:border-[#C65B1A] focus:ring-[#C65B1A] placeholder-shown:border placeholder-shown:border-[#C65B1A] placeholder-shown:border-t-priborder-[#C65B1A] empty:!bg-gray-900 focus:border-2 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50 text-xl">
                                <option value="$">Review the order details</option>
                                <option value="$">$</option>
                                <option value="$">$</option>
                                <option value="$">$</option>
                            </select>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- reviews section --}}


    <div x-data="{ openTab: 4 }" class=" border-gray-200 dark:border-gray-700 px-4 my-78 mx-78.5 "
        style="margin: 78px 78.5px;">
        <nav class="-mb-px flex">
            <button @click="openTab = 4"
                :class="{ 'bg-[#EABE8B] text-darkBrown': openTab === 4, 'text-white': openTab !== 4 }"
                class="align-middle select-none text-center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none py-4 max-w-md font-bold uppercase px-6 rounded-lg shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none flex justify-center items-center gap-3">
                PRODUCT FEATURE
            </button>
            <button @click="openTab = 1"
                :class="{ 'bg-[#EABE8B] text-darkBrown': openTab === 1, 'text-white': openTab !== 1 }"
                class="align-middle select-none text-center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none py-4 max-w-md  font-bold uppercase px-6 rounded-lg shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none flex justify-center items-center gap-3">
                REVIEWS
            </button>

            <button @click="openTab = 3"
                :class="{ 'bg-[#EABE8B] text-darkBrown': openTab === 3, 'text-white': openTab !== 3 }"
                class="align-middle select-none  text-center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none py-4 max-w-md font-bold uppercase px-6 rounded-lg shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none flex justify-center items-center gap-3">
                SIZE & FIT
            </button><button @click="openTab = 2"
                :class="{ 'bg-[#EABE8B] text-darkBrown': openTab === 2, 'text-white': openTab !== 2 }"
                class="align-middle select-none text-center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none py-4 max-w-md font-bold uppercase px-6 rounded-lg shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none flex justify-center items-center gap-3">
                Faqs
            </button>

        </nav>
        <!-- Content divs should be inside the parent div -->
        <div x-show="openTab === 1" class="mt-4 px-4 ">
            <!-- Profile content goes here -->
            <div id="reviews" class="review-section px-10 py-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="col-span-1">
                        <h6 class="text-primary font-roboto text-xs font-bold">
                            {{ $product->reviews->where('status', '1')->count() }} Reviews </h6>
                        @for ($i = 5; $i >= 1; $i--)
                            <div class="flex items-center mt-4">
                                <a href="#"
                                    class="text-lg font-medium text-white dark:text-white hover:underline">{{ $i }}
                                    Stars</a>
                                <div class="w-3/4 h-2 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                                    <div class=" h-2 bg-yellow-300 rounded"
                                        style="width:  {{ $this->ratingsData[$i]['percentage'] ?? 0 }}%;"></div>
                                </div>
                                <span
                                    class="text-lg font-medium text-white dark:text-white">({{ $this->ratingsData[$i]['count'] ?? 0 }})</span>
                            </div>
                        @endfor
                    </div>
                    <div class="col-span-1">
                        <div class="ranking">
                            <h6 class="text-primary font-roboto text-xl font-bold">Rating Breakdown</h6>
                            <ul class="mt-4 text-primary">
                                <li class="flex justify-between">
                                    <span>Seller communication level</span>
                                    <span>
                                        5
                                        <span class="review-star rate-10 show-one"></span>
                                    </span>
                                </li>
                                <li class="flex justify-between">
                                    <span>Recommend to a friend</span>
                                    <span>
                                        5
                                        <span class="review-star rate-10 show-one"></span>
                                    </span>
                                </li>
                                <li class="flex justify-between">
                                    <span>Service as described</span>
                                    <span>
                                        4.9
                                        <span class="review-star rate-10 show-one"></span>
                                    </span>
                                </li>
                            </ul>
                        </div>

                        <div class="flex justify-end mt-4 text-primary">
                            <button type="button" wire:click="openReviewModal"
                                class="mx-4 align-middle select-none bg-[#EABE8B] text-darkBrown text-center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none py-4 max-w-md w-full font-bold uppercase px-6 rounded-lg shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none flex justify-center items-center gap-3">
                                <i class="bi-cart-fill me-1 text-primary"></i>
                                Write a Review
                            </button>
                            <button type="button" wire:click="openCommentModal"
                                class="mx-4 align-middle select-none bg-[#EABE8B] text-darkBrown text-center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none py-4 max-w-md w-full font-bold uppercase px-6 rounded-lg shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none flex justify-center items-center gap-3">
                                <i class="bi-cart-fill me-1 text-primary"></i>
                                Add a Comment
                            </button>
                        </div>
                    </div>
                </div>
                <div class="mt-8" x-data="{ reviewTab: 1 }">
                    <nav class="-mb-px flex">
                        <button @click="reviewTab = 1"
                            :class="{ 'bg-[#EABE8B] text-darkBrown': reviewTab === 1, 'text-white': reviewTab !== 1 }"
                            class="align-middle select-none text-center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none py-4 max-w-md w-full font-bold uppercase px-6 rounded-lg shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none flex justify-center items-center gap-3">
                            Reviews
                        </button>
                        <button @click="reviewTab = 2"
                            :class="{ 'bg-[#EABE8B] text-darkBrown': reviewTab === 2, 'text-white': reviewTab !== 2 }"
                            class="align-middle select-none text-center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none py-4 max-w-md w-full font-bold uppercase px-6 rounded-lg shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none flex justify-center items-center gap-3">
                            Comments
                        </button>
                    </nav>
                    <div x-show="reviewTab === 1" class="mt-4 px-4 ">
                        <div class="mt-6 pb-5 border-b border-[#f8e7cf2b]">
                            <div class="flex justify-end items-center gap-4">
                                <button
                                    class="align-middle select-none bg-transparent font-semibold text-center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-11 h-11 rounded-full border border-[#C65B1A] shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none flex justify-center items-center gap-3 review-slider-prev"
                                    type="button" data-ripple-light="true"
                                    style="position: relative; overflow: hidden">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="14"
                                        viewBox="0 0 22 14" fill="none">
                                        <path
                                            d="M7.39 12.6692L1.44653 6.88037M1.44653 6.88037L7.23481 0.894366M1.44653 6.88037L20.5115 6.6291"
                                            stroke="#C65B1A" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                                <button
                                    class="align-middle select-none bg-transparent font-semibold text-center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-11 h-11 rounded-full border border-[#C65B1A] shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none flex justify-center items-center gap-3 review-slider-next"
                                    type="button" data-ripple-light="true"
                                    style="position: relative; overflow: hidden">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="14"
                                        viewBox="0 0 22 14" fill="none">
                                        <path
                                            d="M14.61 12.6692L20.5535 6.88037M20.5535 6.88037L14.7652 0.894366M20.5535 6.88037L1.48846 6.6291"
                                            stroke="#C65B1A" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>
                            <div class="swiper reviews-slider">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper pb-12">
                                    @forelse ($productReviews as $review)
                                        <div class="swiper-slide">
                                            <div class="flex justify-start items-start gap-3 flex-col md:flex-row">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="58" height="58"
                                                    viewBox="0 0 58 58" fill="none">
                                                    <circle cx="29" cy="29" r="29" fill="#752D00" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M29.0004 32.4119C31.4133 32.4119 33.7275 31.4534 35.4337 29.7471C37.1399 28.0409 38.0984 25.7268 38.0984 23.3139C38.0984 20.9009 37.1399 18.5868 35.4337 16.8806C33.7275 15.1744 31.4133 14.2158 29.0004 14.2158C26.5874 14.2158 24.2733 15.1744 22.5671 16.8806C20.8609 18.5868 19.9023 20.9009 19.9023 23.3139C19.9023 25.7268 20.8609 28.0409 22.5671 29.7471C24.2733 31.4534 26.5874 32.4119 29.0004 32.4119ZM29.0004 30.1374C29.8965 30.1374 30.7838 29.9609 31.6116 29.618C32.4395 29.2751 33.1917 28.7724 33.8253 28.1388C34.459 27.5052 34.9616 26.753 35.3045 25.9251C35.6474 25.0972 35.8239 24.2099 35.8239 23.3139C35.8239 22.4178 35.6474 21.5305 35.3045 20.7026C34.9616 19.8747 34.459 19.1225 33.8253 18.4889C33.1917 17.8553 32.4395 17.3527 31.6116 17.0097C30.7838 16.6668 29.8965 16.4903 29.0004 16.4903C27.1907 16.4903 25.4551 17.2092 24.1754 18.4889C22.8958 19.7686 22.1769 21.5041 22.1769 23.3139C22.1769 25.1236 22.8958 26.8592 24.1754 28.1388C25.4551 29.4185 27.1907 30.1374 29.0004 30.1374Z"
                                                        fill="#F8E7CF" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M51.7451 29C51.7451 41.5621 41.5621 51.7451 29 51.7451C16.4379 51.7451 6.25488 41.5621 6.25488 29C6.25488 16.4379 16.4379 6.25488 29 6.25488C41.5621 6.25488 51.7451 16.4379 51.7451 29ZM39.9517 46.2976C36.6775 48.3761 32.8782 49.4768 29 49.4706C25.0292 49.4767 21.1432 48.3225 17.8196 46.1498C17.5467 45.8086 17.2692 45.4561 16.9894 45.0921C16.6644 44.6658 16.4889 44.1442 16.4902 43.608C16.4902 42.3832 17.3704 41.3563 18.5475 41.1845C26.332 40.0473 31.6919 40.1451 39.4866 41.2243C40.0511 41.3062 40.5669 41.5895 40.9388 42.022C41.3107 42.4545 41.5135 43.0069 41.5098 43.5773C41.5098 44.1232 41.3221 44.6532 40.9832 45.0671C40.6341 45.4925 40.2895 45.903 39.9517 46.2976ZM43.7672 43.177C43.5853 41.0481 41.9692 39.2717 39.7982 38.9714C31.8192 37.8672 26.2421 37.7614 18.2188 38.9339C16.0353 39.2523 14.4261 41.0446 14.235 43.1793C10.5677 39.3707 8.52217 34.2872 8.52939 29C8.52939 17.6945 17.6945 8.52939 29 8.52939C40.3054 8.52939 49.4706 17.6945 49.4706 29C49.4778 34.2861 47.4331 39.3686 43.7672 43.177Z"
                                                        fill="#F8E7CF" />
                                                </svg>
                                                <div class="flex-1">
                                                    <div>
                                                        <div class="flex justify-start items-center gap-2">
                                                            <h1 class="text-xl text-primary font-bold">
                                                                {{ $review->user->name }}
                                                            </h1>
                                                            <x-rating :rating="$review->rating" />
                                                            <p class="text-xl text-primary font-bold">
                                                                {{ $review->rating }}
                                                            </p>
                                                        </div>
                                                        <p class="text-primary text-sm opacity-30 italic">
                                                            {{ $review->created_at->diffForHumans() }}
                                                        </p>
                                                    </div>
                                                    <div>
                                                        <p class="text-primary font-roboto text-lg leading-loose">
                                                            {{ $review->comment }}
                                                        </p>
                                                    </div>
                                                    <div class="flex justify-start items-center mt-8 gap-5 flex-wrap">
                                                        @forelse ($review->images  as $image)
                                                            <div class="bg-cover bg-center bg-no-repeat p-3"
                                                                style="
                                        background-image: url(./images/product-review-bg.png);
                                        box-shadow: 0px 4px 40px 0px rgba(117, 45, 0, 0.5);
                                      ">
                                                                <img class="w-28 h-36 object-cover"
                                                                    src="{{ Storage::url($image->path) }}"
                                                                    alt="" />
                                                            </div>
                                                        @empty
                                                        @endforelse
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        <div class="flex justify-center items-center w-full">
                                            <p class="text-primary font-bold text-center">
                                                No reviews available.
                                            </p>
                                        </div>

                                    @endforelse


                                </div>
                            </div>
                        </div>
                    </div>
                    <div x-show="reviewTab === 2" class="mt-4 px-4 ">
                        <div class="mt-6 pb-5 border-b border-[#f8e7cf2b]">
                            <div class="flex justify-end items-center gap-4">
                                <button
                                    class="align-middle select-none bg-transparent font-semibold text-center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-11 h-11 rounded-full border border-[#C65B1A] shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none flex justify-center items-center gap-3 comment-slider-prev"
                                    type="button" data-ripple-light="true"
                                    style="position: relative; overflow: hidden">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="14"
                                        viewBox="0 0 22 14" fill="none">
                                        <path
                                            d="M7.39 12.6692L1.44653 6.88037M1.44653 6.88037L7.23481 0.894366M1.44653 6.88037L20.5115 6.6291"
                                            stroke="#C65B1A" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                                <button
                                    class="align-middle select-none bg-transparent font-semibold text-center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-11 h-11 rounded-full border border-[#C65B1A] shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none flex justify-center items-center gap-3 comment-slider-next"
                                    type="button" data-ripple-light="true"
                                    style="position: relative; overflow: hidden">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="14"
                                        viewBox="0 0 22 14" fill="none">
                                        <path
                                            d="M14.61 12.6692L20.5535 6.88037M20.5535 6.88037L14.7652 0.894366M20.5535 6.88037L1.48846 6.6291"
                                            stroke="#C65B1A" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>
                            <div class="swiper comment-slider">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper pb-12">
                                    @forelse ($productComments as $comment)
                                        <div class="swiper-slide">
                                            <div class="flex justify-start items-start gap-3 flex-col md:flex-row">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="58" height="58"
                                                    viewBox="0 0 58 58" fill="none">
                                                    <circle cx="29" cy="29" r="29" fill="#752D00" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M29.0004 32.4119C31.4133 32.4119 33.7275 31.4534 35.4337 29.7471C37.1399 28.0409 38.0984 25.7268 38.0984 23.3139C38.0984 20.9009 37.1399 18.5868 35.4337 16.8806C33.7275 15.1744 31.4133 14.2158 29.0004 14.2158C26.5874 14.2158 24.2733 15.1744 22.5671 16.8806C20.8609 18.5868 19.9023 20.9009 19.9023 23.3139C19.9023 25.7268 20.8609 28.0409 22.5671 29.7471C24.2733 31.4534 26.5874 32.4119 29.0004 32.4119ZM29.0004 30.1374C29.8965 30.1374 30.7838 29.9609 31.6116 29.618C32.4395 29.2751 33.1917 28.7724 33.8253 28.1388C34.459 27.5052 34.9616 26.753 35.3045 25.9251C35.6474 25.0972 35.8239 24.2099 35.8239 23.3139C35.8239 22.4178 35.6474 21.5305 35.3045 20.7026C34.9616 19.8747 34.459 19.1225 33.8253 18.4889C33.1917 17.8553 32.4395 17.3527 31.6116 17.0097C30.7838 16.6668 29.8965 16.4903 29.0004 16.4903C27.1907 16.4903 25.4551 17.2092 24.1754 18.4889C22.8958 19.7686 22.1769 21.5041 22.1769 23.3139C22.1769 25.1236 22.8958 26.8592 24.1754 28.1388C25.4551 29.4185 27.1907 30.1374 29.0004 30.1374Z"
                                                        fill="#F8E7CF" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M51.7451 29C51.7451 41.5621 41.5621 51.7451 29 51.7451C16.4379 51.7451 6.25488 41.5621 6.25488 29C6.25488 16.4379 16.4379 6.25488 29 6.25488C41.5621 6.25488 51.7451 16.4379 51.7451 29ZM39.9517 46.2976C36.6775 48.3761 32.8782 49.4768 29 49.4706C25.0292 49.4767 21.1432 48.3225 17.8196 46.1498C17.5467 45.8086 17.2692 45.4561 16.9894 45.0921C16.6644 44.6658 16.4889 44.1442 16.4902 43.608C16.4902 42.3832 17.3704 41.3563 18.5475 41.1845C26.332 40.0473 31.6919 40.1451 39.4866 41.2243C40.0511 41.3062 40.5669 41.5895 40.9388 42.022C41.3107 42.4545 41.5135 43.0069 41.5098 43.5773C41.5098 44.1232 41.3221 44.6532 40.9832 45.0671C40.6341 45.4925 40.2895 45.903 39.9517 46.2976ZM43.7672 43.177C43.5853 41.0481 41.9692 39.2717 39.7982 38.9714C31.8192 37.8672 26.2421 37.7614 18.2188 38.9339C16.0353 39.2523 14.4261 41.0446 14.235 43.1793C10.5677 39.3707 8.52217 34.2872 8.52939 29C8.52939 17.6945 17.6945 8.52939 29 8.52939C40.3054 8.52939 49.4706 17.6945 49.4706 29C49.4778 34.2861 47.4331 39.3686 43.7672 43.177Z"
                                                        fill="#F8E7CF" />
                                                </svg>
                                                <div class="flex-1">
                                                    <div>
                                                        <div class="flex justify-start items-center gap-2">
                                                            <h1 class="text-xl text-primary font-bold">
                                                                {{ $comment->user->name }}
                                                            </h1>
                                                        </div>

                                                        <p class="text-primary text-sm opacity-30 italic">
                                                            {{ $comment->created_at->diffForHumans() }}
                                                        </p>
                                                    </div>
                                                    <div>
                                                        <p class="text-primary font-roboto text-lg leading-loose">
                                                            {{ $comment->comment }}
                                                        </p>
                                                    </div>
                                                    <!-- Reply button -->
                                                    <div class="helpful-thumbs">
                                                        <div class="helpful-thumb text-body-2 pt-3 ps-3">
                                                            <a href="#"
                                                                wire:click="openCommentModal({{ $comment->id }})"
                                                                style="color: #fff !important; text-decoration: none !important;">
                                                                <span class="thumb-title">Reply</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!-- Display replies -->
                                                    <!-- Display replies -->
                                                    @foreach ($comment->replies as $reply)
                                                        @if ($reply->status != 1)
                                                            @continue
                                                        @endif
                                                        <div class="response-item mt-4 d-flex">
                                                            <!-- Display reply information -->
                                                            <div
                                                                class="flex justify-start items-start gap-3 flex-col md:flex-row">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="58"
                                                                    height="58" viewBox="0 0 58 58"
                                                                    fill="none">
                                                                    <circle cx="29" cy="29" r="29"
                                                                        fill="#752D00" />
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M29.0004 32.4119C31.4133 32.4119 33.7275 31.4534 35.4337 29.7471C37.1399 28.0409 38.0984 25.7268 38.0984 23.3139C38.0984 20.9009 37.1399 18.5868 35.4337 16.8806C33.7275 15.1744 31.4133 14.2158 29.0004 14.2158C26.5874 14.2158 24.2733 15.1744 22.5671 16.8806C20.8609 18.5868 19.9023 20.9009 19.9023 23.3139C19.9023 25.7268 20.8609 28.0409 22.5671 29.7471C24.2733 31.4534 26.5874 32.4119 29.0004 32.4119ZM29.0004 30.1374C29.8965 30.1374 30.7838 29.9609 31.6116 29.618C32.4395 29.2751 33.1917 28.7724 33.8253 28.1388C34.459 27.5052 34.9616 26.753 35.3045 25.9251C35.6474 25.0972 35.8239 24.2099 35.8239 23.3139C35.8239 22.4178 35.6474 21.5305 35.3045 20.7026C34.9616 19.8747 34.459 19.1225 33.8253 18.4889C33.1917 17.8553 32.4395 17.3527 31.6116 17.0097C30.7838 16.6668 29.8965 16.4903 29.0004 16.4903C27.1907 16.4903 25.4551 17.2092 24.1754 18.4889C22.8958 19.7686 22.1769 21.5041 22.1769 23.3139C22.1769 25.1236 22.8958 26.8592 24.1754 28.1388C25.4551 29.4185 27.1907 30.1374 29.0004 30.1374Z"
                                                                        fill="#F8E7CF" />
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M51.7451 29C51.7451 41.5621 41.5621 51.7451 29 51.7451C16.4379 51.7451 6.25488 41.5621 6.25488 29C6.25488 16.4379 16.4379 6.25488 29 6.25488C41.5621 6.25488 51.7451 16.4379 51.7451 29ZM39.9517 46.2976C36.6775 48.3761 32.8782 49.4768 29 49.4706C25.0292 49.4767 21.1432 48.3225 17.8196 46.1498C17.5467 45.8086 17.2692 45.4561 16.9894 45.0921C16.6644 44.6658 16.4889 44.1442 16.4902 43.608C16.4902 42.3832 17.3704 41.3563 18.5475 41.1845C26.332 40.0473 31.6919 40.1451 39.4866 41.2243C40.0511 41.3062 40.5669 41.5895 40.9388 42.022C41.3107 42.4545 41.5135 43.0069 41.5098 43.5773C41.5098 44.1232 41.3221 44.6532 40.9832 45.0671C40.6341 45.4925 40.2895 45.903 39.9517 46.2976ZM43.7672 43.177C43.5853 41.0481 41.9692 39.2717 39.7982 38.9714C31.8192 37.8672 26.2421 37.7614 18.2188 38.9339C16.0353 39.2523 14.4261 41.0446 14.235 43.1793C10.5677 39.3707 8.52217 34.2872 8.52939 29C8.52939 17.6945 17.6945 8.52939 29 8.52939C40.3054 8.52939 49.4706 17.6945 49.4706 29C49.4778 34.2861 47.4331 39.3686 43.7672 43.177Z"
                                                                        fill="#F8E7CF" />
                                                                </svg>
                                                                <div class="right">
                                                                    <div class="flex-1">
                                                                        <div>
                                                                            <div
                                                                                class="flex justify-start items-center gap-2">
                                                                                <h1
                                                                                    class="text-xl text-primary font-bold">
                                                                                    {{ $reply->user->name }}
                                                                                </h1>
                                                                            </div>

                                                                            <p
                                                                                class="text-primary text-sm opacity-30 italic">
                                                                                {{ $reply->created_at->diffForHumans() }}
                                                                            </p>
                                                                        </div>
                                                                        <div>
                                                                            <p
                                                                                class="text-primary font-roboto text-lg leading-loose">
                                                                                {{ $reply->comment }}
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    @endforeach


                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                    <div class="flex justify-center items-center w-full">
                                        <p class="text-primary font-bold text-center">
                                            No comments available.
                                        </p>
                                    </div>
                                    @endforelse


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div x-show="openTab === 2" class="mt-4 px-4 ">
            <!-- Dashboard content goes here -->
            <div class="py-4" x-data="{ selected: null }">
                <ul class="shadow-box">
                    @forelse ($product->faqs as $faq)
                        <li class="relative">
                            <button type="button"
                                class="w-full px-8 py-4 text-left rounded bg-[#f8e7cf] bg-opacity-10"
                                @click="selected !== {{ $loop->index }} ? selected = {{ $loop->index }} : selected = null"
                                style="
                            box-shadow: 0px 1px 2px rgba(58, 58, 68, 0.24),
                                0px 2px 4px rgba(90, 91, 106, 0.24);
                            ">
                                <div class="flex items-center justify-between">
                                    <span
                                        class="text-[#F8E7CF] font-normal uppercase text-2xl">{{ $faq->question }}</span>
                                    <i class="fa-solid fa-chevron-down transition-all duration-200 ease-linear text-primary"
                                        x-bind:class="selected == {{ $loop->index }} ? 'rotate-180 ' : ''"></i>
                                </div>
                            </button>
                            <div class="relative overflow-auto bg-[#f8e7cf] bg-opacity-10 rounded my-4 transition-all duration-300 ease-linear"
                                x-bind:class="selected == {{ $loop->index }} ? 'h-max animate-[show-transition_0.5s_ease-in-out]' :
                                    'max-h-0 opacity-0'"
                                id="style-2">
                                <div class="py-6 px-8">
                                    <p class="text-base leading-7 text-[#F8E7CF] font-normal">
                                        {{ $faq->answer }}
                                    </p>
                                </div>
                            </div>
                        </li>
                    @empty
                        <li class="text-center py-4 text-primary">No FAQ found</li>
                    @endforelse

                </ul>
            </div>

        </div>
        <div x-show="openTab === 3" class="mt-4 px-4 ">
            {{-- {{ dd($product->sizeChart) }} --}}
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class="rte py-md px-sm">

                    <div class=" mx-auto px-4 py-4 text-primary">
                        <h1 class="text-3xl font-bold mb-4 text-primary">{{ $product->sizeChart->name }}</h1>
                        @if ($product->sizeChart->images->isNotEmpty())
                            <div class="flex justify-center">
                                <img src="{{ asset('storage/' . $product->sizeChart->images->first()->file_path) }}"
                                    class="object-cover  border border-gray-300" alt="Size Charts" />
                            </div>
                        @endif
                        <style>
                            .prose :where(h2):not(:where([class~="not-prose"] *)),
                            .prose :where(strong):not(:where([class~="not-prose"] *)),
                            .prose :where(h3):not(:where([class~="not-prose"] *)),
                            .prose :where(a):not(:where([class~="not-prose"] *)) {
                                color: #ffffff;
                            }
                        </style>
                        <div class="prose max-w-none  py-8 mb-8 text-primary">
                            {!! $product->sizeChart->description !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div x-show="openTab === 4" class="mt-4 px-4 ">
            <div class="tab-pane fade py-4 {{ $this->tab == 'features' ? 'show active' : '' }}" id="pills-home"
                role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="container">
                    <div id="reviews" class="review-section px-1">
                        <div class="grid grid-cols-1 md:grid-cols-1 gap-4">
                            {{-- <div class="flex items-center justify-center md:justify-start">
                                <!-- Half for image -->
                                @if (isset($product->files))
                                    <img src="{{ Storage::url($product->files->first(fn($file) => $file->file_type === 'image' && $file->image_type === 'original')->file_path) }}"
                                        class="img-fluid rounded" alt="Product Image" width="100%">
                                @endif
                            </div> --}}
                            <div>
                                <!-- Half for text -->
                                <div class="product-features text-primary">
                                    <div class="flex items-center justify-between mb-4">
                                        <h3 class="m-0 text-3xl">Features</h3>
                                    </div>
                                    <ul class="list-none mb-0">
                                        @foreach ($product->features as $feature)
                                            <li class="flex items-center py-1">
                                                <i class="fa fa-check text-success-m2 text-110 mr-2 mt-1"></i>
                                                <span class="text-xl">{{ $feature->feature }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    @if ($product->additional_detail)
        <div class=" container py-2 2xl:max-w-[1650px] mx-auto px-4 bg-no-repeat bg-cover bg-center">
            <div class="prose max-w-none mb-8 text-primary">
                {!! $product->additional_detail !!}
            </div>
        </div>
    @endif




    @php
        $relatedProducts = App\Models\Product::whereHas('categories', function ($query) use ($product) {
            $query->whereIn('id', $product->categories->pluck('id'));
        })
            ->where('id', '!=', $product->id)
            ->limit(10)
            ->get();
    @endphp
    @if ($relatedProducts->count() > 0)

        <section class="relative">
            <div class="container mt-32 2xl:max-w-screen-2xl mx-auto px-4 relative">
                <div class="text-start mb-14">
                    <h2 class="text-[#F8E7CF] text-5xl font-medium uppercase">
                        Related <span class="font-bold text-6xl">Products</span>
                    </h2>
                </div>
                <div class="flex justify-end items-center gap-4">
                    <button
                        class="align-middle select-none bg-transparent font-semibold text-center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-11 h-11 rounded-full border border-[#C65B1A] shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none flex justify-center items-center gap-3 slidePrev-btn-2"
                        type="button" data-ripple-light="true" style="position: relative; overflow: hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="14" viewBox="0 0 22 14"
                            fill="none">
                            <path
                                d="M7.39 12.6692L1.44653 6.88037M1.44653 6.88037L7.23481 0.894366M1.44653 6.88037L20.5115 6.6291"
                                stroke="#C65B1A" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <button
                        class="align-middle select-none bg-transparent font-semibold text-center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-11 h-11 rounded-full border border-[#C65B1A] shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none flex justify-center items-center gap-3 slideNext-btn-2"
                        type="button" data-ripple-light="true" style="position: relative; overflow: hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="14" viewBox="0 0 22 14"
                            fill="none">
                            <path
                                d="M14.61 12.6692L20.5535 6.88037M20.5535 6.88037L14.7652 0.894366M20.5535 6.88037L1.48846 6.6291"
                                stroke="#C65B1A" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>

                <div class="swiper testimonial-slider-2 mt-10">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper pb-12">
                        @foreach ($relatedProducts as $relatedProduct)
                            <x-product-card :product="$relatedProduct" />
                        @endforeach

                    </div>
                </div>

            </div>
        </section>
    @endif

    @livewire('send-quote')
    <x-modals.modal wire:model="reviewModal" maxWidth="2xl">
        @slot('headerTitle')
            {{ ___('Write a Review') }}
        @endslot

        @slot('content')
            <div class="mt-4">
                {{-- session existingReview --}}
                @if (session()->has('existingReview'))
                    <div class="alert alert-danger">
                        {{ session('existingReview') }}
                    </div>
                @endif

                {{-- rating --}}
                {{-- @php $rating @endphp --}}
                <x-jet-label for="rating" class="text-white" value="{{ ___('Rating') }}" />
                <div class="flex items-center mt-2">
                    @for ($i = 1; $i <= 5; $i++)
                        <input type="radio" id="star{{ $i }}" name="rating" wire:model="rating"
                            value="{{ $i }}" class="hidden" />
                        <label for="star{{ $i }}" class="text-3xl cursor-pointer"
                            title="{{ $i }} stars">
                            @if ($rating >= $i)
                                &#9733; {{-- Filled star --}}
                            @else
                                &#9734; {{-- Unfilled star --}}
                            @endif
                        </label>
                    @endfor
                </div>
                @error('rating')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
                {{-- review --}}
                <x-jet-label for="review" class="text-white" value="{{ ___('Review') }}" />
                <textarea id="review" class="block mt-1 w-full" wire:model="review" autocomplete="review" maxlength="250"
                    required></textarea>

                @error('review')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
                {{-- file --}}
                <x-jet-label for="images" class="text-white" value="{{ ___('Picture/Video (optional):') }}" />

                <x-form.upload-files style="width: 100%" wire:model="images" fileName="images" perview multiple
                    allowFileTypes="['image/png','image/jpeg','image/jpg','image/gif',]" />
                @error('images')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror



            </div>

        @endslot

        @slot('footer')
            <x-jet-secondary-button class="btn-cancel" wire:click="$toggle('reviewModal')" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button>

            <x-jet-button class="ml-2 btn-primary" wire:click="storeReview" wire:loading.attr="disabled">
                {{ __('Save') }}
            </x-jet-button>
        @endslot
    </x-modals.modal>
    <x-modals.modal wire:model="commentModal" maxWidth="2xl">
        @slot('headerTitle')
            {{ ___('Add Comment') }}
        @endslot

        @slot('content')
            <div class="mt-4">


                {{-- review --}}
                <x-jet-label for="comment" class="text-white" value="{{ ___('Comment') }}" />
                <textarea id="comment" class="block mt-1 w-full" wire:model="comment" autocomplete="comment" maxlength="250"
                    required></textarea>

                @error('comment')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>

        @endslot

        @slot('footer')
            <x-jet-secondary-button class="btn-cancel" wire:click="$toggle('commentModal')" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button>

            <x-jet-button class="ml-2 btn-primary" wire:click="storeComment" wire:loading.attr="disabled">
                {{ __('Save') }}
            </x-jet-button>
        @endslot
    </x-modals.modal>


</div>
