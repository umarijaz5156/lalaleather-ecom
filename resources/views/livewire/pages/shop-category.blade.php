



<!-- Icons Section  -->
<section class="py-20 bg-cover bg-center" style="background-image: url(./images/brown-leather-icons.png);">
    <div class="container 2xl:max-w-screen-[1750px] mx-auto px-4">
        <div class="grid md:grid-cols-2 2xl:grid-cols-4 gap-8 sm:gap-5">
            <div class="flex justify-start items-center gap-3">
                <img class="mx-auto" src="./images/machine.png" alt="">
               <div>
                    <h2 class="text-[#F8E7CF] font-bold text-xl">MANUFACTURING</h2>
                    <p class="text-[#F8E7CF] text-base mt-1">lala Leather is leather goods and apparel brand with a love</p>
               </div>
            </div>
            <div class="flex justify-start items-center gap-3">
                <img class="mx-auto" src="./images/pins.png" alt="">
               <div>
                    <h2 class="text-[#F8E7CF] font-bold text-xl">CUSTOM DESIGNS</h2>
                    <p class="text-[#F8E7CF] text-base mt-1">lala Leather is leather goods and apparel brand with a love</p>
               </div>
            </div>
            <div class="flex justify-start items-center gap-3">
                <img class="mx-auto" src="./images/button.png" alt="">
               <div>
                    <h2 class="text-[#F8E7CF] font-bold text-xl">PRIVATE LABELING</h2>
                    <p class="text-[#F8E7CF] text-base mt-1">lala Leather is leather goods and apparel brand with a love</p>
               </div>
            </div>
            <div class="flex justify-start items-center gap-3">
                <img class="mx-auto" src="./images/globe.png" alt="">
               <div>
                    <h2 class="text-[#F8E7CF] font-bold text-xl">BUY ONLINE</h2>
                    <p class="text-[#F8E7CF] text-base mt-1">lala Leather is leather goods and apparel brand with a love</p>
               </div>
            </div>
        </div>
    </div>
</section>
<!-- Icons Section  -->


<!-- shop products and filtring -->
<section class="my-20">
    <div class="container 2xl:max-w-[1650px] mx-auto px-4">
        <div class="grid lg:grid-cols-12 gap-10">
            <div class="lg:col-span-4 xl:col-span-3 relative hidden md:block"> 
               <div class="sticky top-44">
                    <ol class="relative grid sm:grid-cols-2 lg:grid-cols-1 lg:border-l border-[#752D00] dark:border-gray-700 " x-data="{ selectbtn : 1}"> 
                        @foreach($categories as $category)
                        <li class="mb-10 ml-6">            
                            <span class="hidden  absolute lg:flex items-center justify-center w-5 h-5 p-[4px] border rounded-full -left-[10px] -top-[8px] dark:ring-gray-900 dark:bg-blue-900" x-bind:class="selectbtn == 1 ? 'border-[#C65B1A]' : 'border-[#752D00]'">
                                <div class="bg-[#752D00] w-full h-full rounded-full" x-bind:class="selectbtn == 1 ? 'bg-[#C65B1A]' : 'bg-[#752D00]'"></div>
                            </span>
                            <div class="">
                                <a class="flex justify-start items-center py-3 px-5 gap-3 max-w-[210px] w-full border border-[#752D00]" style="box-shadow: 0px 4px 40px rgba(117, 45, 0, 0.3);" @click="selectbtn !== 1 ? selectbtn = 1 : selectbtn = null" x-bind:class="selectbtn == 1 ? 'text-[#C65B1A] animate-[press_0.3s_ease-in-out]' : 'text-[#752D00]'" href="#scrollspy_{{ $category->id }}"><img class="" x-bind:class="selectbtn == 1 ? 'opacity-100' : 'opacity-50'" src="./images/jacket-btn-img.png" alt=""> {{ $category->title }}</a>
                            </div>
                        </li>
                        @endforeach
                        <li class="mb-10 ml-6">            
                            <span class="hidden  absolute lg:flex items-center justify-center w-5 h-5 p-[4px] border rounded-full -left-[10px] dark:ring-gray-900 dark:bg-blue-900" x-bind:class="selectbtn == 2 ? 'border-[#C65B1A]' : 'border-[#752D00]'">
                                <div class="bg-[#752D00] w-full h-full rounded-full" x-bind:class="selectbtn == 2 ? 'bg-[#C65B1A]' : 'bg-[#752D00]'"></div>
                            </span>
                            <div class="">
                                <button class="flex justify-start items-center py-3 px-5 gap-3  max-w-[210px] w-full border border-[#752D00]" style="box-shadow: 0px 4px 40px rgba(117, 45, 0, 0.3);" @click="selectbtn !== 2 ? selectbtn = 2 : selectbtn = null" x-bind:class="selectbtn == 2 ? 'text-[#C65B1A] animate-[press_0.3s_ease-in-out]' : 'text-[#752D00]'"><img class="" x-bind:class="selectbtn == 2 ? 'opacity-100' : 'opacity-50'" src="./images/jacket-btn-img.png" alt=""> Moto Jackets</button>
                            </div>
                        </li>
                        <li class="mb-10 ml-6">            
                            <span class="hidden  absolute lg:flex items-center justify-center w-5 h-5 p-[4px] border rounded-full -left-[10px] dark:ring-gray-900 dark:bg-blue-900" x-bind:class="selectbtn == 3 ? 'border-[#C65B1A]' : 'border-[#752D00]'">
                                <div class="bg-[#752D00] w-full h-full rounded-full" x-bind:class="selectbtn == 3 ? 'bg-[#C65B1A]' : 'bg-[#752D00]'"></div>
                            </span>
                            <div class="">
                                <button class="flex justify-start items-center py-3 px-5 gap-3  max-w-[210px] w-full border border-[#752D00]" style="box-shadow: 0px 4px 40px rgba(117, 45, 0, 0.3);" @click="selectbtn !== 3 ? selectbtn = 3 : selectbtn = null" x-bind:class="selectbtn == 3 ? 'text-[#C65B1A] animate-[press_0.3s_ease-in-out]' : 'text-[#752D00]'"><img class="" x-bind:class="selectbtn == 3 ? 'opacity-100' : 'opacity-50'" src="./images/jacket-btn-img.png" alt=""> Blazer Jackets</button>
                            </div>
                        </li>
                        <li class="mb-10 ml-6">            
                            <span class="hidden  absolute lg:flex items-center justify-center w-5 h-5 p-[4px] border rounded-full -left-[10px] dark:ring-gray-900 dark:bg-blue-900" x-bind:class="selectbtn == 4 ? 'border-[#C65B1A]' : 'border-[#752D00]'">
                                <div class="bg-[#752D00] w-full h-full rounded-full" x-bind:class="selectbtn == 4 ? 'bg-[#C65B1A]' : 'bg-[#752D00]'"></div>
                            </span>
                            <div class="">
                                <button class="flex justify-start items-center py-3 px-5 gap-3  max-w-[210px] w-full border border-[#752D00]" style="box-shadow: 0px 4px 40px rgba(117, 45, 0, 0.3);" @click="selectbtn !== 4 ? selectbtn = 4 : selectbtn = null" x-bind:class="selectbtn == 4 ? 'text-[#C65B1A] animate-[press_0.3s_ease-in-out]' : 'text-[#752D00]'"><img class="" x-bind:class="selectbtn == 4 ? 'opacity-100' : 'opacity-50'" src="./images/jacket-btn-img.png" alt=""> Racer Jackets</button>
                            </div>
                        </li>
                        <li class="mb-10 ml-6">            
                            <span class="hidden  absolute lg:flex items-center justify-center w-5 h-5 p-[4px] border rounded-full -left-[10px] dark:ring-gray-900 dark:bg-blue-900" x-bind:class="selectbtn == 5 ? 'border-[#C65B1A]' : 'border-[#752D00]'">
                                <div class="bg-[#752D00] w-full h-full rounded-full" x-bind:class="selectbtn == 5 ? 'bg-[#C65B1A]' : 'bg-[#752D00]'"></div>
                            </span>
                            <div class="">
                                <button class="flex justify-start items-center py-3 px-5 gap-3  max-w-[210px] w-full border border-[#752D00]" style="box-shadow: 0px 4px 40px rgba(117, 45, 0, 0.3);" @click="selectbtn !== 5 ? selectbtn = 5 : selectbtn = null" x-bind:class="selectbtn == 5 ? 'text-[#C65B1A] animate-[press_0.3s_ease-in-out]' : 'text-[#752D00]'"><img class="" x-bind:class="selectbtn == 5 ? 'opacity-100' : 'opacity-50'" src="./images/jacket-btn-img.png" alt=""> Punk Jackets</button>
                            </div>
                        </li>
                        <li class="mb-10 ml-6">            
                            <span class="hidden  absolute lg:flex items-center justify-center w-5 h-5 p-[4px] border rounded-full -left-[10px] dark:ring-gray-900 dark:bg-blue-900" x-bind:class="selectbtn == 6 ? 'border-[#C65B1A]' : 'border-[#752D00]'">
                                <div class="bg-[#752D00] w-full h-full rounded-full" x-bind:class="selectbtn == 6 ? 'bg-[#C65B1A]' : 'bg-[#752D00]'"></div>
                            </span>
                            <div class="">
                                <button class="flex justify-start items-center py-3 px-5 gap-3  max-w-[210px] w-full border border-[#752D00]" style="box-shadow: 0px 4px 40px rgba(117, 45, 0, 0.3);" @click="selectbtn !== 6 ? selectbtn = 6 : selectbtn = null" x-bind:class="selectbtn == 6 ? 'text-[#C65B1A] animate-[press_0.3s_ease-in-out]' : 'text-[#752D00]'"><img class="" x-bind:class="selectbtn == 6 ? 'opacity-100' : 'opacity-50'" src="./images/jacket-btn-img.png" alt=""> Trucker Jackets</button>
                            </div>
                        </li>
                        <li class="mb-10 ml-6">            
                            <span class="hidden  absolute lg:flex items-center justify-center w-5 h-5 p-[4px] border rounded-full -left-[10px] dark:ring-gray-900 dark:bg-blue-900" x-bind:class="selectbtn == 7 ? 'border-[#C65B1A]' : 'border-[#752D00]'">
                                <div class="bg-[#752D00] w-full h-full rounded-full" x-bind:class="selectbtn == 7 ? 'bg-[#C65B1A]' : 'bg-[#752D00]'"></div>
                            </span>
                            <div class="">
                                <button class="flex justify-start items-center py-3 px-5 gap-3  max-w-[210px] w-full border border-[#752D00]" style="box-shadow: 0px 4px 40px rgba(117, 45, 0, 0.3);" @click="selectbtn !== 7 ? selectbtn = 7 : selectbtn = null" x-bind:class="selectbtn == 7 ? 'text-[#C65B1A] animate-[press_0.3s_ease-in-out]' : 'text-[#752D00]'"><img class="" x-bind:class="selectbtn == 7 ? 'opacity-100' : 'opacity-50'" src="./images/jacket-btn-img.png" alt=""> Varsity Jackets</button>
                            </div>
                        </li>
                        <li class="ml-6">            
                            <span class="hidden  absolute lg:flex items-center justify-center w-5 h-5 p-[4px] border rounded-full -left-[10px] dark:ring-gray-900 dark:bg-blue-900" x-bind:class="selectbtn == 8 ? 'border-[#C65B1A]' : 'border-[#752D00]'">
                                <div class="bg-[#752D00] w-full h-full rounded-full" x-bind:class="selectbtn == 8 ? 'bg-[#C65B1A]' : 'bg-[#752D00]'"></div>
                            </span>
                            <div class="">
                                <button class="flex justify-start items-center py-3 px-5 gap-3  max-w-[210px] w-full border border-[#752D00]" style="box-shadow: 0px 4px 40px rgba(117, 45, 0, 0.3);" @click="selectbtn !== 8 ? selectbtn = 8 : selectbtn = null" x-bind:class="selectbtn == 8 ? 'text-[#C65B1A] animate-[press_0.3s_ease-in-out]' : 'text-[#752D00]'"><img class="" x-bind:class="selectbtn == 8 ? 'opacity-100' : 'opacity-50'" src="./images/jacket-btn-img.png" alt=""> View All</button>
                            </div>
                        </li>
                    </ol>
               </div>
            </div>
            <div class="lg:col-span-8 xl:col-span-9">
                {{-- <div class="">
                    <div class="w-full md:w-max ml-auto grid grid-cols-2 md:flex md:justify-start md:items-center gap-4 flex-wrap md:flex-nowrap">
                        <div class="col-span-2">
                            <p class="text-[#C65B1A] ">Select:</p>
                        </div>
                        <div class="custom-dropdown">
                            <select id="countries" class="border bg-transparent border-[#C65B1A] text-[#C65B1A] text-sm rounded-lg focus:ring-[#C65B1A] focus:border-[#C65B1A] block w-full md:w-[160px] p-2.5 ">
                                <option selected disabled>Color</option>
                                <option value="US">United States</option>
                                <option value="CA">Canada</option>
                                <option value="FR">France</option>
                                <option value="DE">Germany</option>
                            </select>
                        </div>
                        <div class="custom-dropdown">
                            <select id="countries" class="border bg-transparent border-[#C65B1A] text-[#C65B1A] text-sm rounded-lg focus:ring-[#C65B1A] focus:border-[#C65B1A] block w-full md:w-[160px] p-2.5 ">
                                <option selected disabled>Gendar</option>
                                <option value="US">United States</option>
                                <option value="CA">Canada</option>
                                <option value="FR">France</option>
                                <option value="DE">Germany</option>
                            </select>
                        </div>
                        <div class="custom-dropdown">
                            <select id="countries" class="border bg-transparent border-[#C65B1A] text-[#C65B1A] text-sm rounded-lg focus:ring-[#C65B1A] focus:border-[#C65B1A] block w-full md:w-[160px] p-2.5 ">
                                <option selected disabled>Size</option>
                                <option value="US">United States</option>
                                <option value="CA">Canada</option>
                                <option value="FR">France</option>
                                <option value="DE">Germany</option>
                            </select>
                        </div>
                        <div class="custom-dropdown md:hidden">
                            <select id="countries" class="border bg-transparent border-[#C65B1A] text-[#C65B1A] text-sm rounded-lg focus:ring-[#C65B1A] focus:border-[#C65B1A] block w-full md:w-[160px] p-2.5 ">
                                <option selected disabled>Type</option>
                                <option value="US">United States</option>
                                <option value="CA">Canada</option>
                                <option value="FR">France</option>
                                <option value="DE">Germany</option>
                            </select>
                        </div>
                    </div>
                </div> --}}
                <div class="grid sm:grid-cols-2 xl:grid-cols-3 gap-10 mt-10 scrollspy-example" data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" tabindex="0">
                    @forelse ($categories as $category)
                    <div id="scrollspy_{{ $category->id }}"  class="relative px-6 pt-8 pb-5  h-fit w-full max-w-[450px] mx-auto bg-cover bg-center group" style="background-image: url('./images/shops-box-bg.png'); box-shadow: 0px 4px 40px rgb(117 45 0 / 30%);">
                        <div class="relative overflow-hidden">
                            <div class="absolute bg-[#301200] bg-opacity-90 top-0 left-0 bottom-0 right-0 opacity-0 transition-all duration-500 ease-in-out group-hover:opacity-100">
                            </div>
                            <div class="absolute text-center px-4 w-full top-[80%] left-[50%] translate-x-[-50%] translate-y-[-80%] opacity-0 group-hover:opacity-100 transition-all duration-300 ease-in-out group-hover:top-[50%] group-hover:translate-y-[-50%]">
                                <a href="{{ route('products', ['slug_store' => $category->slug_store]) }}" class="text-[#301200] text-base bg-[#F8E7CF] uppercase py-2 time-roman px-4 inline-block">View
                                    </a>
                            </div>
                            <img class="w-full max-h-[450px] h-full" src="{{ asset('storage/' . $category->banner_path) }}" alt="">
                        </div>
                        <div class="mt-8 text-center relative">
                            <h2 class="text-[#F8E7CF] uppercase text-base font-normal time-roman ">{{ $category->short_description}}
                                 </h2>
                        </div>
                    </div>
                    @empty
                    <div class="relative px-6 pt-8 pb-5  h-fit w-full max-w-[450px] mx-auto bg-cover bg-center" style="background-image: url('./images/shops-box-bg.png'); box-shadow: 0px 4px 40px rgb(117 45 0 / 30%);">
                        <div class="mt-8 text-center relative">
                            <h2 class="text-[#F8E7CF] uppercase text-base font-normal time-roman ">No Category Found</h2>
                        </div>
                    </div>
                    @endforelse
                   
                </div>
            </div>
        </div>
    </div>
</section>
<!-- shop products and filtring -->




<!-- Related products Slider -->
{{-- <section>
    <div class="container mt-16 2xl:max-w-[1650px] mx-auto px-4">
        <div class="text-center">
            <h2 class="text-[#F8E7CF] text-4xl font-medium uppercase">our <span class="font-bold text-5xl">best selling products</span></h2>
        </div>
        <!-- sliderv-2 -->
        <div>
            <div class="flex justify-center items-center mt-14">
                <div class="flex justify-start items-center gap-4 sm:ml-10">
                    <button class="w-11 h-11 rounded-full border-[3px] ourshopprev-v2 border-[#752D00] text-[#752D00] flex justify-center items-center font-extrabold text-lg ">
                        <i class="fa-solid fa-arrow-left"></i>
                    </button>
                    <button class="w-11 h-11 rounded-full border-[3px] ourshopnext-v2 border-[#752D00] text-[#752D00] flex justify-center items-center font-extrabold text-lg ">
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>
            <div class="swiper our-shop-v2 mt-6">
                <div class="swiper-wrapper pb-20">
                    <div class="swiper-slide ">
                        <div style="background-image: url('./images/shops-box-bg.png'); box-shadow: 0px 4px 40px rgb(117 45 0 / 30%);" class="relative px-6 pt-8 pb-5  h-fit w-full max-w-[450px] mx-auto  bg-cover bg-center  ">
                            <img class="w-full max-h-[450px] h-full" src="./images/man6.png" alt="">
                            <div class="mt-8 text-center relative">
                                <h2 class="text-[#F8E7CF] uppercase text-base font-normal time-roman ">BROWN LEATHER TEXTURE JACKET </h2>
                                <div class="absolute right-0  w-3/12 bottom-[-20px]">
                                    <div class="relative w-full flex items-center justify-center"> <a href=""
                                            style="rotate: -70deg;"
                                            class="text-lg absolute  bottom-[20%] text-white font z-[5] text-center">550$</a>
                                        <img class="w-full" src="./images/price-tag.png" alt="">
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <a href="#" class="text-[#301200] text-base bg-[#F8E7CF] uppercase py-2 time-roman px-4 inline-block">Shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div style="background-image: url('./images/shops-box-bg.png'); box-shadow: 0px 4px 40px rgb(117 45 0 / 30%);" class="relative px-6 pt-8 pb-5  h-fit w-full max-w-[450px] mx-auto  bg-cover bg-center" >
                            <img class="w-full max-h-[450px] h-full" src="./images/man6.png" alt="">
                            <div class="mt-8 text-center relative">
                                <h2 class="text-[#F8E7CF] uppercase text-base font-normal time-roman ">BROWN LEATHER TEXTURE JACKET </h2>
                                <div class="absolute right-0  w-3/12 bottom-[-20px]">
                                    <div class="relative w-full flex items-center justify-center"> <a href=""
                                            style="rotate: -70deg;"
                                            class="text-lg absolute  bottom-[20%] text-white font z-[5] text-center">550$</a>
                                        <img class="w-full" src="./images/price-tag.png" alt="">
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <a href="#" class="text-[#301200] text-base bg-[#F8E7CF] uppercase py-2 time-roman px-4 inline-block">Shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div style="background-image: url('./images/shops-box-bg.png'); box-shadow: 0px 4px 40px rgb(117 45 0 / 30%);" class="relative px-6 pt-8 pb-5  h-fit w-full max-w-[450px] mx-auto  bg-cover bg-center  ">
                            <img class="w-full max-h-[450px] h-full" src="./images/man6.png" alt="">
                            <div class="mt-8 text-center relative">
                                <h2 class="text-[#F8E7CF] uppercase text-base font-normal time-roman ">BROWN LEATHER TEXTURE JACKET </h2>
                                <div class="absolute right-0  w-3/12 bottom-[-20px]">
                                    <div class="relative w-full flex items-center justify-center"> <a href=""
                                            style="rotate: -70deg;"
                                            class="text-lg absolute  bottom-[20%] text-white font z-[5] text-center">550$</a>
                                        <img class="w-full" src="./images/price-tag.png" alt="">
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <a href="#" class="text-[#301200] text-base bg-[#F8E7CF] uppercase py-2 time-roman px-4 inline-block">Shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div style="background-image: url('./images/shops-box-bg.png'); box-shadow: 0px 4px 40px rgb(117 45 0 / 30%);" class="relative px-6 pt-8 pb-5  h-fit w-full max-w-[450px] mx-auto  bg-cover bg-center  ">
                            <img class="w-full max-h-[450px] h-full" src="./images/man6.png" alt="">
                            <div class="mt-8 text-center relative">
                                <h2 class="text-[#F8E7CF] uppercase text-base font-normal time-roman ">BROWN LEATHER TEXTURE JACKET </h2>
                                <div class="absolute right-0  w-3/12 bottom-[-20px]">
                                    <div class="relative w-full flex items-center justify-center"> <a href=""
                                            style="rotate: -70deg;"
                                            class="text-lg absolute  bottom-[20%] text-white font z-[5] text-center">550$</a>
                                        <img class="w-full" src="./images/price-tag.png" alt="">
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <a href="#" class="text-[#301200] text-base bg-[#F8E7CF] uppercase py-2 time-roman px-4 inline-block">Shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- sliderv-2 -->
    </div>
</section> --}}
<!-- Related products Slider -->


