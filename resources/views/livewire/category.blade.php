<div>
    <section class="relative">
        <div class="container mt-12 md:mt-32 xl:max-w-screen-2xl mx-auto px-4 relative">
            <div class="md:text-center">
                <h2 class="text-[#F8E7CF] text-4xl md:text-5xl font-medium uppercase">
                    SEE ALL
                    <span class="font-bold text-5xl md:text-6xl">Categories</span>
                </h2>
            </div>
            <div class="mt-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-5">
              @foreach (App\Models\Category::limit(5)->orderBy('created_at', 'desc')->get() as $relatedCategory)
              <x-category-card :category="$relatedCategory" />
          @endforeach

            </div>
        </div>
    </section>

    <section class="relative mt-16">
        <div class="container xl:max-w-screen-2xl mx-auto px-4 relative">
            <div class="grid lg:grid-cols-12 gap-10">
                <div class="lg:col-span-4 xl:col-span-3 relative border border-[#C65B1A] rounded-md">
                    <div class="py-9 px-6 sticky top-0">
                        <div class="mb-12">
                            <button
                                class="w-full border border-[#752D00] rounded-lg hover:bg-[#9dc3ff3d] text-center h-[48px] bg-no-repeat bg-[left_0.5rem_top_0.5rem] text-primary text-2xl font-bold relative">
                                <svg class="absolute top-1/2 -translate-y-1/2 left-5" xmlns="http://www.w3.org/2000/svg"
                                    width="18" height="12" viewBox="0 0 18 12" fill="none">
                                    <path d="M3 7H15V5H3V7ZM0 0V2H18V0H0ZM7 12H11V10H7V12Z" fill="#F8E7CF" />
                                </svg>
                                Apply Filters
                            </button>
                        </div>
                        <div class="" x-data="{ selected: 1 }">
                            <ul class="shadow-box">
                                <li class="relative">
                                    <button type="button" class="w-full px-3 py-[10px] text-left rounded"
                                        @click="selected !== 1 ? selected = 1 : selected = null">
                                        <div class="flex items-center justify-between">
                                            <span class="text-lg text-primary">Select Gender</span>
                                            <span
                                                class="transition-all duration-200 ease-linear bg-[#752d004d] rounded-full w-8 h-8 flex justify-center items-center"
                                                x-bind:class="selected == 1 ? 'rotate-180 ' : ''">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="8"
                                                    viewBox="0 0 13 8" fill="none">
                                                    <path
                                                        d="M1.80941 0.399902L6.39941 4.9899L10.9894 0.399902L12.3994 1.8199L6.39941 7.8199L0.399414 1.8199L1.80941 0.399902Z"
                                                        fill="#752D00" />
                                                </svg>
                                            </span>
                                        </div>
                                    </button>
                                    <div class="relative overflow-auto bg-[#752d0070] rounded my-4 transition-all duration-300 ease-in custom-scroll"
                                        x-bind:class="selected == 1 ? 'max-h-[150px] animate-[show-transition_0.5s_ease-in-out]' :
                                            'max-h-0 opacity-0'"
                                        id="style-2">
                                        <div class="px-4 py-3 space-y-3">
                                            <div class="flex items-center">
                                                <input id="Male" wire:model="genders" type="checkbox" value="Male"
                                                    class="w-5 h-5 text-[#C65B1A] bg-transparent rounded border-2 border-primary focus:ring-primary checked:bg-[#C65B1A] focus:ring-2" />
                                                <label for="Male"
                                                    class="ml-3 text-base font-medium text-primary font-roboto">Male
                                                </label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="Female"  wire:model="genders" type="checkbox" value="Female"
                                                    class="w-5 h-5 text-[#C65B1A] bg-transparent rounded border-2 border-primary focus:ring-primary checked:bg-[#C65B1A] focus:ring-2" />
                                                <label for="Female"
                                                    class="ml-3 text-base font-medium text-primary font-roboto">Female</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="other"  wire:model="genders" type="checkbox" value="Other"
                                                    class="w-5 h-5 text-[#C65B1A] bg-transparent rounded border-2 border-primary focus:ring-primary checked:bg-[#C65B1A] focus:ring-2" />
                                                <label for="other"
                                                    class="ml-3 text-base font-medium text-primary font-roboto">Other</label>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="relative">
                                    <button type="button" class="w-full px-3 py-[10px] text-left rounded"
                                        @click="selected !== 3 ? selected = 3 : selected = null">
                                        <div class="flex items-center justify-between">
                                            <span class="text-lg text-primary">Select Price Range</span>
                                            <span
                                                class="transition-all duration-200 ease-linear bg-[#752d004d] rounded-full w-8 h-8 flex justify-center items-center"
                                                x-bind:class="selected == 3 ? 'rotate-180 ' : ''">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="8"
                                                    viewBox="0 0 13 8" fill="none">
                                                    <path
                                                        d="M1.80941 0.399902L6.39941 4.9899L10.9894 0.399902L12.3994 1.8199L6.39941 7.8199L0.399414 1.8199L1.80941 0.399902Z"
                                                        fill="#752D00" />
                                                </svg>
                                            </span>
                                        </div>
                                    </button>
                                    <div class="relative overflow-auto rounded my-4 transition-all duration-300 ease-in custom-scroll"
                                        x-bind:class="selected == 3 ? 'max-h-[150px] animate-[show-transition_0.5s_ease-in-out]' :
                                            'max-h-0 opacity-0'"
                                        id="style-2">
                                        <div class="px-4 py-3 space-y-3">
                                            <div x-data="range()" x-init="mintrigger();
                                            maxtrigger()"
                                                class="relative max-w-xl w-full">
                                                <div>
                                                    <input type="range" step="100" x-bind:min="min"
                                                        x-bind:max="max" x-on:input="mintrigger"
                                                        x-model="minprice"
                                                        wire:model.debounce="minPrice"
                                                        class="absolute pointer-events-none appearance-none z-20 h-2 w-full opacity-0 cursor-pointer" />

                                                    <input type="range" step="100" x-bind:min="min"
                                                        x-bind:max="max" x-on:input="maxtrigger"
                                                        x-model="maxprice"
                                                        wire:model.debounce="maxPrice"
                                                        class="absolute pointer-events-none appearance-none z-20 h-2 w-full opacity-0 cursor-pointer" />

                                                    <div class="relative z-10 h-1">
                                                        <div
                                                            class="absolute z-10 left-0 right-0 bottom-0 top-0 rounded-md bg-[#C65B1A]">
                                                        </div>

                                                        <div class="absolute z-20 top-0 bottom-0 rounded-md bg-[#752D00]"
                                                            x-bind:style="'right:' + maxthumb + '%; left:' + minthumb + '%'">
                                                        </div>

                                                        <div class="absolute z-30 w-4 h-4 top-0 left-0 bg-[#752D00] rounded-full -mt-1.5"
                                                            x-bind:style="'left: ' + minthumb + '%'"></div>

                                                        <div class="absolute z-30 w-4 h-4 top-0 right-0 bg-[#752D00] rounded-full -mt-1.5"
                                                            x-bind:style="'right: ' + maxthumb + '%'"></div>
                                                    </div>
                                                </div>

                                                <div
                                                    class="flex items-center justify-between pt-5 space-x-4 text-sm text-gray-700">
                                                    <div>
                                                        <input type="text" maxlength="5"
                                                            x-on:input.debounce="mintrigger" x-model="minprice"
                                                            wire:model.debounce.1500="minPrice"
                                                            class="w-24 px-3 py-2 text-center border border-[#C65B1A] text-primary rounded-lg bg-[#752d004d] focus:border-yellow-400 focus:outline-none" />
                                                    </div>
                                                    <div>
                                                        <input type="text" maxlength="5"
                                                            x-on:input.debounce.1500="maxtrigger" x-model="maxprice"
                                                            wire:model.debounce="maxPrice"
                                                            class="w-24 px-3 py-2 text-center border border-[#C65B1A] text-primary rounded-lg bg-[#752d004d] focus:border-yellow-400 focus:outline-none" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                    
                                @foreach ($variants as $variant)
                                <li class="relative">
                                    <button type="button" class="w-full px-3 py-[10px] text-left rounded"
                                        @click="selected !== '{{ $variant->name }}' ? selected = '{{ $variant->name }}' : selected = null">
                                        <div class="flex items-center justify-between">
                                            <span class="text-lg text-primary">{{ __($variant->name) }}</span>
                                            <span
                                                class="transition-all duration-200 ease-linear bg-[#752d004d] rounded-full w-8 h-8 flex justify-center items-center"
                                                x-bind:class="selected == 5 ? 'rotate-180 ' : ''">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="8"
                                                    viewBox="0 0 13 8" fill="none">
                                                    <path
                                                        d="M1.80941 0.399902L6.39941 4.9899L10.9894 0.399902L12.3994 1.8199L6.39941 7.8199L0.399414 1.8199L1.80941 0.399902Z"
                                                        fill="#752D00" />
                                                </svg>
                                            </span>
                                        </div>
                                    </button>
                                    <div class="relative overflow-auto bg-[#752d0070] rounded my-4 transition-all duration-300 ease-in custom-scroll"
                                        x-bind:class="selected == '{{ $variant->name }}' ? 'max-h-[150px] animate-[show-transition_0.5s_ease-in-out]' :
                                            'max-h-0 opacity-0'"
                                        id="style-2">
                                        <div class="px-4 py-3 space-y-3">
                                            @foreach ($variant->options as $option)
                                            <div class="flex items-center">
                                                <input id="Black" wire:model="variantsOptions" type="checkbox" value="{{ $option->id }}"
                                                    class="w-5 h-5 text-[#C65B1A] bg-transparent rounded border-2 border-primary focus:ring-primary checked:bg-[#C65B1A] focus:ring-2" />
                                                <label for="Black"
                                                    class="ml-3 text-base font-medium text-primary font-roboto">{{ ___($option->name) }}
                                                </label>
                                            </div>
                                            @endforeach
                                           
                                           
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-8 xl:col-span-9">
                    <div class="flex justify-between md:items-center gap-6 flex-col md:flex-row">
                        <h1 class="text-primary text-5xl font-bold uppercase">
                            Search Results
                        </h1>
                        @if($filter)
                            <p wire:click="clearFilter" class="flex justify-start items-center text-3xl font-bold text-primary gap-3 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                    viewBox="0 0 15 15" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M14.7157 1.65582C14.8057 1.56587 14.8772 1.45905 14.926 1.34147C14.9748 1.22389 14.9999 1.09785 15 0.970555C15.0001 0.843257 14.9751 0.717189 14.9264 0.599551C14.8778 0.481912 14.8065 0.375006 14.7165 0.284937C14.6265 0.194868 14.5197 0.1234 14.4022 0.0746123C14.2846 0.0258249 14.1585 0.000674075 14.0312 0.000595834C13.904 0.000517593 13.7779 0.0255134 13.6602 0.0741562C13.5426 0.122799 13.4357 0.194136 13.3456 0.284094L7.49988 6.12995L1.6558 0.284094C1.4739 0.102192 1.22719 -1.91666e-09 0.969943 0C0.712698 1.91666e-09 0.465989 0.102192 0.28409 0.284094C0.10219 0.465997 1.91663e-09 0.71271 0 0.969959C-1.91662e-09 1.22721 0.10219 1.47392 0.28409 1.65582L6.12985 7.5L0.28409 13.3442C0.194022 13.4342 0.122577 13.5412 0.0738324 13.6589C0.0250882 13.7765 0 13.9027 0 14.03C0 14.1574 0.0250882 14.2835 0.0738324 14.4012C0.122577 14.5189 0.194022 14.6258 0.28409 14.7159C0.465989 14.8978 0.712698 15 0.969943 15C1.09732 15 1.22345 14.9749 1.34112 14.9262C1.4588 14.8774 1.56573 14.806 1.6558 14.7159L7.49988 8.87004L13.3456 14.7159C13.5275 14.8976 13.7742 14.9996 14.0312 14.9994C14.2883 14.9992 14.5348 14.897 14.7165 14.7151C14.8982 14.5332 15.0002 14.2865 15 14.0294C14.9998 13.7724 14.8976 13.5259 14.7157 13.3442L8.8699 7.5L14.7157 1.65582Z"
                                        fill="#F8E7CF" />
                                </svg>
                                Clear Filters
                            </p>
                        @endif
                    </div>
                    <div class="mt-8 grid md:grid-cols-2 xl:grid-cols-3 gap-5">
                        @forelse ($products as $product)
                        <x-product-card :product="$product" />
                        @empty
                        <div class="text-center">
                            <h1 class="text-3xl font-bold text-primary">No Products Found</h1>
                        </div>
                        @endforelse
                        
                    </div>
                </div>
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