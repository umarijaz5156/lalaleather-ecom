@props(['product' => 0])
<div class="swiper-slide">
    <div class="">
        <div class="bg-[#752D00] rounded-md py-6 px-4">
            <div class="relative">
                <div class="absolute top-3 right-3">
                </div>
                    @if ($product->image)
                        <img class="h-[400px] min-h-400 w-full object-cover rounded-md" src="{{ asset('storage/'.$product->image) }}" alt="Product Image">
                    @else
                    <img class="h-[400px] min-h-400 w-full object-cover rounded-md" src="{{ asset('images/description-2-bg.png') }}" alt="Product Image">
                        <span class="text-primary">No icon image found</span>
                    @endif
                <div class="mt-4 space-y-2">
                    <h1 class="line-clamp-1 text-primary font-semibold font-poppins">
                        {{ ___($product->title) }}
                    </h1>
                    <p class="line-clamp-2 text-sm text-primary font-poppins">
                    </p>
                </div>
                <div class="mt-6 flex justify-between items-center gap-4 flex-wrap">
                    <a type='button' href="{{ route('manufacturer.product', ['slug' => $product->product_slug]) }}"
                        class="align-middle select-none bg-[#EABE8B] text-darkBrown font-semibold text-center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none py-3 px-4 rounded-lg shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none flex justify-center items-center gap-3 uppercase"
                        type="button" data-ripple-dark="true" style="position: relative; overflow: hidden">
                        {{ ___('BUY now') }}
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11"
                            fill="none">
                            <path
                                d="M4.4718 5.1748L0.2914 0.870111C0.198711 0.775477 0.148968 0.661105 0.142169 0.526998C0.135371 0.39289 0.188072 0.271279 0.30027 0.162166C0.408413 0.0569964 0.527145 0.00531324 0.656466 0.00711606C0.785787 0.00891889 0.903032 0.0638917 1.0082 0.172035L5.33459 4.62177C5.42071 4.70965 5.4808 4.7995 5.51486 4.89131C5.54892 4.98246 5.5652 5.08203 5.5637 5.19002C5.56219 5.29801 5.54314 5.39709 5.50655 5.48726C5.46994 5.57809 5.40738 5.66622 5.31884 5.75166L0.87009 10.0791C0.775465 10.1711 0.661099 10.2205 0.526991 10.2273C0.392883 10.2341 0.271272 10.1814 0.162159 10.0692C0.0569895 9.96106 0.00530626 9.84233 0.00710908 9.71301C0.00891191 9.58369 0.0638849 9.46644 0.172028 9.36127L4.4718 5.1748ZM10.4712 5.25844L6.29082 0.953747C6.19813 0.859113 6.14838 0.744741 6.14159 0.610634C6.13479 0.476526 6.18749 0.354915 6.29969 0.245802C6.40783 0.140633 6.52656 0.0889494 6.65588 0.0907522C6.7852 0.092555 6.90245 0.147528 7.00762 0.255671L11.334 4.70541C11.4201 4.79329 11.4802 4.88313 11.5143 4.97495C11.5483 5.0661 11.5646 5.16567 11.5631 5.27366C11.5616 5.38165 11.5426 5.48073 11.506 5.57089C11.4694 5.66172 11.4068 5.74986 11.3183 5.8353L6.86951 10.1627C6.77488 10.2547 6.66018 10.3041 6.52541 10.3109C6.39063 10.3177 6.26936 10.265 6.16158 10.1528C6.05641 10.0447 6.00472 9.92597 6.00653 9.79664C6.00833 9.66732 6.0633 9.55008 6.17144 9.44491L10.4712 5.25844Z"
                                fill="#301200" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="flex justify-end items-center">
            <div class="relative">
                <div class="absolute left-1/2 -translate-x-1/2 bottom-8">
                    <h1 class="text-primary font-bold text-lg rotate-[-67deg]">
                        {{ currencyCalculator($product->price) }}
                    </h1>
                </div>
                <img src="{{ asset('images/price-tag 1.png') }}" alt="" />
            </div>
        </div>
    </div>
</div>
