<div>
    <style>
       p.leading-5 {
            color: #fff;
        }
    </style>
    @if($relatedCategories->isNotEmpty())
    <section class="relative">
        <div class="container mt-12 md:mt-32 xl:max-w-screen-2xl mx-auto px-4 relative">
            <div class="md:text-center">
                <h2 class="text-[#F8E7CF] text-4xl md:text-5xl font-medium uppercase">
                    SEE Related
                    <span class="font-bold text-5xl md:text-6xl">Categories</span>
                </h2>
            </div>
            <div class="mt-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-5">
                @foreach ($relatedCategories as $relatedCategory)
                    <x-category-card :category="$relatedCategory" :manufacturer="true" />
                @endforeach

            </div>
        </div>
    </section>
    @endif

    <section class="relative mt-16">
        <div class="container xl:max-w-screen-2xl mx-auto px-4 relative">
            <div class="grid lg:grid-cols-1 gap-10">
                <div class="lg:col-span-1 xl:col-span-1">
                    <div class="flex justify-between md:items-center gap-6 flex-col md:flex-row">
                        <h1 class="text-primary text-5xl font-bold uppercase">
                            Search Results
                        </h1>
                    </div>
                    <div class="mt-8 grid md:grid-cols-2 xl:grid-cols-4 gap-5">
                        @forelse ($manufacturerProducts as $product)
                            <x-manufacturer-product-card :product="$product" />
                        @empty
                            <div class="text-center">
                                <h1 class="text-3xl font-bold text-primary">No Products Found</h1>
                            </div>
                        @endforelse
                        
                   
                    </div>
                </div>
                   
            </div>
              {{-- $manufacturerProducts pagination link --}}
            <div class="mt-10 flex justify-end md:items-center gap-6 flex-col md:flex-row">
                {{ $manufacturerProducts->links() }}
            </div>
        </div>
    </section>

    <section class="my-10 md:my-40 bg-cover bg-center bg-no-repeat"
        style="background-image: url({{ asset('images/Group\ 6306.png') }})">
        <div class="container xl:max-w-screen-2xl mx-auto px-4">
            <div class="py-40 md:text-center">
                <h1 class="text-5xl md:text-7xl font-bold uppercase">
                    want to buy in bulk? <br />
                    grab the offer now and enjoy with lala leather!
                </h1>
                <button
                    class="align-middle select-none bg-[#F8E7CF] text-darkBrown text-center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none py-4 w-max md:max-w-sm md:mx-auto md:w-full font-bold uppercase px-6 rounded-lg shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none flex justify-center items-center gap-3 mt-8 text-xl md:text-3xl"
                    type="button" data-ripple-dark="true">
                    oRDER NOW
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="11" viewBox="0 0 12 11"
                        fill="none">
                        <path
                            d="M4.47217 5.1748L0.291766 0.870111C0.199077 0.775477 0.149334 0.661105 0.142535 0.526998C0.135737 0.39289 0.188438 0.271279 0.300636 0.162166C0.408779 0.0569964 0.527511 0.00531324 0.656832 0.00711606C0.786153 0.00891889 0.903398 0.0638917 1.00857 0.172035L5.33496 4.62177C5.42108 4.70965 5.48116 4.7995 5.51522 4.89131C5.54929 4.98246 5.56557 5.08203 5.56406 5.19002C5.56256 5.29801 5.54351 5.39709 5.50691 5.48726C5.47031 5.57809 5.40774 5.66622 5.31921 5.75166L0.870456 10.0791C0.775831 10.1711 0.661465 10.2205 0.527357 10.2273C0.39325 10.2341 0.271638 10.1814 0.162525 10.0692C0.0573557 9.96106 0.00567247 9.84233 0.00747529 9.71301C0.00927812 9.58369 0.0642511 9.46644 0.172394 9.36127L4.47217 5.1748ZM10.4716 5.25844L6.29118 0.953747C6.19849 0.859113 6.14875 0.744741 6.14195 0.610634C6.13515 0.476526 6.18785 0.354915 6.30005 0.245802C6.4082 0.140633 6.52693 0.0889494 6.65625 0.0907522C6.78557 0.092555 6.90282 0.147528 7.00798 0.255671L11.3344 4.70541C11.4205 4.79329 11.4806 4.88313 11.5146 4.97495C11.5487 5.0661 11.565 5.16567 11.5635 5.27366C11.562 5.38165 11.5429 5.48073 11.5063 5.57089C11.4697 5.66172 11.4072 5.74986 11.3186 5.8353L6.86987 10.1627C6.77525 10.2547 6.66055 10.3041 6.52577 10.3109C6.391 10.3177 6.26972 10.265 6.16194 10.1528C6.05677 10.0447 6.00509 9.92597 6.00689 9.79664C6.0087 9.66732 6.06367 9.55008 6.17181 9.44491L10.4716 5.25844Z"
                            fill="#301200"></path>
                    </svg>
                </button>
            </div>
        </div>
    </section>

    @livewire('send-quote')
    <script>
        function range() {
            return {
                minprice: 0,
                maxprice: 10000,
                min: 0,
                max: 10000,
                minthumb: 0,
                maxthumb: 0,
                mintrigger() {
                    this.validation();
                    this.minprice = Math.min(this.minprice, this.maxprice - 500);
                    this.minthumb =
                        ((this.minprice - this.min) / (this.max - this.min)) * 100;
                },
                maxtrigger() {
                    this.validation();
                    this.maxprice = Math.max(this.maxprice, this.minprice);
                    this.maxthumb =
                        100 - ((this.maxprice - this.min) / (this.max - this.min)) * 100;
                },
                validation() {
                    if (/^\d*$/.test(this.minprice)) {
                        if (this.minprice > this.max) {
                            this.minprice = 9500;
                        }
                        if (this.minprice < this.min) {
                            this.minprice = this.min;
                        }
                    } else {
                        this.minprice = 0;
                    }
                    if (/^\d*$/.test(this.maxprice)) {
                        if (this.maxprice > this.max) {
                            this.maxprice = this.max;
                        }
                        if (this.maxprice < this.min) {
                            this.maxprice = 200;
                        }
                    } else {
                        this.maxprice = 10000;
                    }
                },
            };
        }
    </script>
</div>
