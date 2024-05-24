<div>
    {{-- @push('styles')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @endpush --}}

    <!-- Hero section -->
    <section class="bg-center bg-cover bg-no-repeat"
        style="background-image: url({{ asset('images/shop-hero-bg.png') }})">
        <div class="container lg:max-w-screen-2xl mx-auto px-4 py-24 relative">
            <div class="grid md:grid-cols-2 gap-6 relative">
                <div class="flex justify-start items-center">
                    <h1 class="text-6xl md:text-8xl font-bold text-primary">
                        The true <br />
                        Leather <br />
                        experience
                    </h1>
                </div>
                <div>
                    <img class="ml-auto" src="{{ asset('images/shop-hero.png') }}" alt="" />
                </div>
            </div>
        </div>
    </section>
    <!-- Hero section -->

    <!-- Categories section -->
    <section class="relative">
        <div class="container mt-32 2xl:max-w-screen-2xl mx-auto px-4 relative">
            <div>
                <h2 class="text-[#F8E7CF] text-4xl md:text-5xl font-medium uppercase">
                    SEE ALL <span class="font-bold text-5xl md:text-6xl">Categories</span>
                </h2>
            </div>
            <div class="mt-8 grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-5">
                @foreach (App\Models\Category::orderBy('created_at', 'desc')->get() as $category)
                    <x-category-card :category="$category" />
                @endforeach
            </div>
        </div>
    </section>
    <!-- Categories section -->

 
    <section class="md:my-20 relative md:py-20 bg-left bg-no-repeat bg-contain sm:my-30">
        <div class="container xl:max-w-screen-2xl mx-auto px-4 h-full">
            <img src="{{ asset('images/about shop.png') }}"
                class="absolute left-1/2 -translate-x-1/2 xl:block hidden w-[30%] top-1/2 -translate-y-1/2 "
                alt="" />

            <div class="relative flex justify-center md:justify-between gap-6 flex-col lg:flex-row">
                <div class="grid w-full mt-10 lg:max-w-xl sm:p-10 bg-[#752D00] relative z-10">
                    <div class="flex justify-center items-center border-4 border-[#F8E7CF] p-5 py-7">
                        <div class="space-y-0 flex-flex-col gap-4 text-left">
                            <p class="text-sm sm:text-lg text-[#F8E7CF] font-normal !leading-loose font-roboto">
                                lala Leather is leather goods and apparel brand with a love
                                for adventure and a dedication to choosing a simpler way of
                                living. We honor the lost craft of learning a new trade and
                                hard work earned with your hands. That’s why we aim to provide
                                men and women a brand that adds quality to your everyday
                                experiences. lala Leather is leather goods and apparel brand
                                with a love for adventure and a dedication to choosing a
                                simpler way of living. lala Leather is leather goods and
                                apparel brand with a love for adventure and a dedication to
                                choosing a simpler way of living. We honor the lost craft of
                                learning a new trade and hard work earned with your hands.
                                lala Leather is leather goods and apparel brand with a love
                                for adventure and a dedication to choosing a simpler way of
                                living. We honor the lost craft of learning a new trade and
                                hard work earned with your hands. That’s why we aim to provide
                                men and women a brand that adds quality to your everyday
                                experiences. lala Leather is leather goods and apparel brand
                                with a love for adventure and a dedication to choosing a
                                simpler way of living. we aim to provide men and women a brand
                                that adds quality to your everyday experiences.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="grid w-full mt-10 lg:max-w-xl sm:p-10 bg-[#752D00] relative z-10">
                    <div class="flex justify-center items-center border-4 border-[#F8E7CF] p-5 py-7">
                        <div class="space-y-0 flex-flex-col gap-4 text-left">
                            <!-- <h3 class="text-4xl lg:text-5xl lg:leading-[70px] font-medium text-[#F8E7CF] uppercase">About</h3>
                            <h2 class="text-5xl lg:text-6xl lg:leading-[70px] font-bold text-[#F8E7CF] uppercase">lala leather</h2> -->
                            <p class="text-sm sm:text-lg text-[#F8E7CF] font-normal !leading-loose font-roboto">
                                lala Leather is leather goods and apparel brand with a love
                                for adventure and a dedication to choosing a simpler way of
                                living. We honor the lost craft of learning a new trade and
                                hard work earned with your hands. That’s why we aim to provide
                                men and women a brand that adds quality to your everyday
                                experiences. lala Leather is leather goods and apparel brand
                                with a love for adventure and a dedication to choosing a
                                simpler way of living. lala Leather is leather goods and
                                apparel brand with a love for adventure and a dedication to
                                choosing a simpler way of living. We honor the lost craft of
                                learning a new trade and hard work earned with your hands.
                                lala Leather is leather goods and apparel brand with a love
                                for adventure and a dedication to choosing a simpler way of
                                living. We honor the lost craft of learning a new trade and
                                hard work earned with your hands. That’s why we aim to provide
                                men and women a brand that adds quality to your everyday
                                experiences. lala Leather is leather goods and apparel brand
                                with a love for adventure and a dedication to choosing a
                                simpler way of living. we aim to provide men and women a brand
                                that adds quality to your everyday experiences.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-right-top bg-contain bg-no-repeat py-28"
        style="background-image: url({{ asset('images/faq.png') }}); background-size: 800px ;">
        <div class="container mt-16  2xl:max-w-[1650px] mx-auto px-4">
            <h2 class="text-[#F8E7CF] text-5xl font-medium uppercase">POPULAR <span
                    class="font-bold text-6xl">QUESTIONS</span></h2>
            <div class="max-w-5xl mt-10">
                <div class="" x-data="{ selected: null }">
                    <ul class="shadow-box">
                        <li class="relative">
                            <button type="button" class="w-full px-8 py-4 text-left rounded bg-[#f8e7cf] bg-opacity-10"
                                @click="selected !== 1 ? selected = 1 : selected = null"
                                style="box-shadow: 0px 1px 2px rgba(58, 58, 68, 0.24), 0px 2px 4px rgba(90, 91, 106, 0.24);">
                                <div class="flex items-center justify-between">
                                    <span class=" text-[#F8E7CF] font-normal uppercase text-2xl">All You Need to Know
                                        About LALALeather ?</span>
                                    <i class="fa-solid fa-chevron-down transition-all duration-200 ease-linear text-primary"
                                        x-bind:class="selected == 1 ? 'rotate-180 ' : ''"></i>
                                </div>
                            </button>
                            <div class="relative overflow-auto bg-[#f8e7cf] bg-opacity-10 rounded my-4 transition-all duration-300 ease-linear"
                                x-bind:class="selected == 1 ? 'h-max animate-[show-transition_0.5s_ease-in-out]' : 'max-h-0 opacity-0'"
                                id="style-2">
                                <div class="py-6 px-8">
                                    <p class="text-base leading-7 text-[#F8E7CF] font-normal">lala Leather is leather
                                        goods and apparel brand with a love for adventure and a dedication to choosing a
                                        simpler way of living. We honor the lost craft of learning a new trade and hard
                                        work earned with your hands. That’s why we aim to provide men and women a brand
                                        that adds quality to your everyday experiences.. </p>
                                </div>
                            </div>
                        </li>
                        <li class="relative">
                            <button type="button" class="w-full px-8 py-4 text-left rounded bg-[#f8e7cf] bg-opacity-10"
                                @click="selected !== 2 ? selected = 2 : selected = null"
                                style="box-shadow: 0px 1px 2px rgba(58, 58, 68, 0.24), 0px 2px 4px rgba(90, 91, 106, 0.24);">
                                <div class="flex items-center justify-between">
                                    <span class=" text-[#F8E7CF] font-normal uppercase text-2xl">hOW DOES IT WORK
                                        ?</span>
                                    <i class="fa-solid fa-chevron-down transition-all duration-200 ease-linear text-primary"
                                        x-bind:class="selected == 2 ? 'rotate-180 ' : ''"></i>
                                </div>
                            </button>
                            <div class="relative overflow-auto bg-[#f8e7cf] bg-opacity-10 rounded my-4 transition-all duration-300 ease-linear"
                                x-bind:class="selected == 2 ? 'h-max animate-[show-transition_0.5s_ease-in-out]' : 'max-h-0 opacity-0'"
                                id="style-2">
                                <div class="py-6 px-8">
                                    <p class="text-base leading-7 text-[#F8E7CF] font-normal">lala Leather is leather
                                        goods and apparel brand with a love for adventure and a dedication to choosing a
                                        simpler way of living. We honor the lost craft of learning a new trade and hard
                                        work earned with your hands. That’s why we aim to provide men and women a brand
                                        that adds quality to your everyday experiences.. </p>
                                </div>
                            </div>
                        </li>
                        <li class="relative">
                            <button type="button" class="w-full px-8 py-4 text-left rounded bg-[#f8e7cf] bg-opacity-10"
                                @click="selected !== 3 ? selected = 3 : selected = null"
                                style="box-shadow: 0px 1px 2px rgba(58, 58, 68, 0.24), 0px 2px 4px rgba(90, 91, 106, 0.24);">
                                <div class="flex items-center justify-between">
                                    <span class=" text-[#F8E7CF] font-normal uppercase text-2xl">hOW MUCH TIME IT WILL
                                        TAKE ?</span>
                                    <i class="fa-solid fa-chevron-down transition-all duration-200 ease-linear text-primary"
                                        x-bind:class="selected == 3 ? 'rotate-180 ' : ''"></i>
                                </div>
                            </button>
                            <div class="relative overflow-auto bg-[#f8e7cf] bg-opacity-10 rounded my-4 transition-all duration-300 ease-linear"
                                x-bind:class="selected == 3 ? 'h-max animate-[show-transition_0.5s_ease-in-out]' : 'max-h-0 opacity-0'"
                                id="style-2">
                                <div class="py-6 px-8">
                                    <p class="text-base leading-7 text-[#F8E7CF] font-normal">lala Leather is leather
                                        goods and apparel brand with a love for adventure and a dedication to choosing a
                                        simpler way of living. We honor the lost craft of learning a new trade and hard
                                        work earned with your hands. That’s why we aim to provide men and women a brand
                                        that adds quality to your everyday experiences.. </p>
                                </div>
                            </div>
                        </li>
                        <li class="relative">
                            <button type="button"
                                class="w-full px-8 py-4 text-left rounded bg-[#f8e7cf] bg-opacity-10"
                                @click="selected !== 4 ? selected = 4 : selected = null"
                                style="box-shadow: 0px 1px 2px rgba(58, 58, 68, 0.24), 0px 2px 4px rgba(90, 91, 106, 0.24);">
                                <div class="flex items-center justify-between">
                                    <span class=" text-[#F8E7CF] font-normal uppercase text-2xl">hOW MUCH TIME IT WILL
                                        TAKE ?</span>
                                    <i class="fa-solid fa-chevron-down transition-all duration-200 ease-linear text-primary"
                                        x-bind:class="selected == 4 ? 'rotate-180 ' : ''"></i>
                                </div>
                            </button>
                            <div class="relative overflow-auto bg-[#f8e7cf] bg-opacity-10 rounded my-4 transition-all duration-300 ease-linear"
                                x-bind:class="selected == 4 ? 'h-max animate-[show-transition_0.5s_ease-in-out]' : 'max-h-0 opacity-0'"
                                id="style-2">
                                <div class="py-6 px-8">
                                    <p class="text-base leading-7 text-[#F8E7CF] font-normal">lala Leather is leather
                                        goods and apparel brand with a love for adventure and a dedication to choosing a
                                        simpler way of living. We honor the lost craft of learning a new trade and hard
                                        work earned with your hands. That’s why we aim to provide men and women a brand
                                        that adds quality to your everyday experiences.. </p>
                                </div>
                            </div>
                        </li>
                        <li class="relative">
                            <button type="button"
                                class="w-full px-8 py-4 text-left rounded bg-[#f8e7cf] bg-opacity-10"
                                @click="selected !== 5 ? selected = 5 : selected = null"
                                style="box-shadow: 0px 1px 2px rgba(58, 58, 68, 0.24), 0px 2px 4px rgba(90, 91, 106, 0.24);">
                                <div class="flex items-center justify-between">
                                    <span class=" text-[#F8E7CF] font-normal uppercase text-2xl">hOW DOES IT WORK
                                        ?</span>
                                    <i class="fa-solid fa-chevron-down transition-all duration-200 ease-linear text-primary"
                                        x-bind:class="selected == 5 ? 'rotate-180 ' : ''"></i>
                                </div>
                            </button>
                            <div class="relative overflow-auto bg-[#f8e7cf] bg-opacity-10 rounded my-4 transition-all duration-300 ease-linear"
                                x-bind:class="selected == 5 ? 'h-max animate-[show-transition_0.5s_ease-in-out]' : 'max-h-0 opacity-0'"
                                id="style-2">
                                <div class="py-6 px-8">
                                    <p class="text-base leading-7 text-[#F8E7CF] font-normal">lala Leather is leather
                                        goods and apparel brand with a love for adventure and a dedication to choosing a
                                        simpler way of living. We honor the lost craft of learning a new trade and hard
                                        work earned with your hands. That’s why we aim to provide men and women a brand
                                        that adds quality to your everyday experiences.. </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
 <!-- SEE ALL products-->
 <section class="relative">
    <div class="container md:mt-32 2xl:max-w-screen-2xl mx-auto px-4 relative">
      <div class="text-start mb-14">
        <h2 class="text-[#F8E7CF] text-4xl md:text-5xl font-medium uppercase">
          our top
          <span class="font-bold text-5xl md:text-6xl"> products</span>
        </h2>
      </div>
      <div class="flex justify-end items-center gap-4">
        <button
          class="align-middle select-none bg-transparent font-semibold text-center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-11 h-11 rounded-full border border-[#C65B1A] shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none flex justify-center items-center gap-3 slidePrev-btn-2"
          type="button" data-ripple-light="true" style="position: relative; overflow: hidden">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="14" viewBox="0 0 22 14" fill="none">
            <path d="M7.39 12.6692L1.44653 6.88037M1.44653 6.88037L7.23481 0.894366M1.44653 6.88037L20.5115 6.6291"
              stroke="#C65B1A" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </button>
        <button
          class="align-middle select-none bg-transparent font-semibold text-center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-11 h-11 rounded-full border border-[#C65B1A] shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none flex justify-center items-center gap-3 slideNext-btn-2"
          type="button" data-ripple-light="true" style="position: relative; overflow: hidden">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="14" viewBox="0 0 22 14" fill="none">
            <path d="M14.61 12.6692L20.5535 6.88037M20.5535 6.88037L14.7652 0.894366M20.5535 6.88037L1.48846 6.6291"
              stroke="#C65B1A" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </button>
      </div>
      <div class="swiper testimonial-slider-2 mt-10">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper pb-12">
            @foreach (App\Models\Product::orderBy('created_at', 'asc')->get() as $product)
            {{-- {{ dd($product->categories) }} --}}
                <x-product-card :product="$product" />
            @endforeach
        </div>
      </div>
    </div>
  </section>
  <!-- SEE ALL products-->
    @livewire('contact-us')

    {{-- <section class="py-5 bg-yellow-800">
        <div class="container mx-auto px-4 lg:px-5 mt-5">
            <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4 justify-center text-white">
                @forelse($products as $product)
                    <div class="mb-5">
                        <div class="card h-full">
                            <!-- Product image -->
                            <img class="card-img-top"
                                src="{{ Storage::url($product->files->first(fn($file) => $file->file_type === 'image' && $file->image_type === 'original')->file_path) }}"
                                alt="..." />
                            <!-- Product details -->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name -->
                                    <h5 class="font-bold">{{ $product->title }}</h5>
                                    <!-- Product price -->
                                    {{ currencyCalculator($product->price_original) }}
                                </div>
                            </div>
                            <!-- Product actions -->
                            <div class="card-footer p-4 pt-0 border-t-0 bg-transparent">
                                <a class="btn btn-outline-dark mt-auto"
                                    href="{{ route('product', ['slug' => $product->title]) }}">View more detail</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="mb-5 col-12">
                        <div class="relative px-6 pt-8 pb-5 h-fit w-full mx-auto bg-cover bg-center"
                            style="background-image: url({{ asset('images/shops-box-bg.png') }}); box-shadow: 0px 4px 40px rgba(117, 45, 0, 0.3);">
                            <div class="mt-8 text-center relative">
                                <h2 class="text-[#F8E7CF] uppercase text-base font-normal time-roman">New Arrivals
                                    Coming Soon</h2>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </section> --}}
</div>
