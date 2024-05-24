<x-web-layout>
   
<div id="siteWrapper" class="site-wrapper" >
    <div class="mobile-navbar-header block lg:hidden py-5 bg-[#301200]">
        <div class="container mx-auto px-5 lg:px-0  flex items-center justify-between">
          <a href="./index.html" class="">
            <img class="mr-3" src="{{asset('images/lala-logo.png')}}" alt="">
          </a>
          <button id="burgerButton" class="text-gray-700 bg-gray-100 hover:bg-gray-200 p-2 rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
    </div>
    <!-- Hero Section -->

<section class="sm:min-h-[50vh] lg:min-h-[86vh] flex items-center justify-end bg-cover bg-top relative" style="background-image: url({{asset('images/Hero-bg.png')}});">
    <div class="absolute top-0 left-0 right-0 bottom-0" style="background: linear-gradient(270deg, #301200 0.7%, rgba(48, 18, 0, 0) 100%);">
    </div>
    <div class="px-9 h-full">
        <div class="max-w-lg ml-auto">
            <div class="my-20"  data-aos="fade-right">
                <div>
                    <h1 class="text-6xl leading-[60px] lg:text-8xl lg:leading-[115px] font-bold text-[#F8E7CF]">{{ ___('WEAR YOUR WILD
                        Well-worn basecamp layers and outerwear.') }}</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section -->


<!-- Icons Section  -->
<section class="py-20 bg-cover bg-center" style="background-image: url({{asset('images/brown-leather-icons.png')}});">
    <div class="container 2xl:max-w-screen-[1750px] mx-auto px-4">
        <div class="grid md:grid-cols-2 2xl:grid-cols-4 gap-8 sm:gap-5">
            <div class="flex justify-start items-center gap-3">
                <img class="mx-auto" src="{{asset('images/machine.png')}}" alt="">
            <div>
                    <h2 class="text-[#F8E7CF] font-bold text-xl">MANUFACTURING</h2>
                    <p class="text-[#F8E7CF] text-base mt-1">lala Leather is leather goods and apparel brand with a love</p>
            </div>
            </div>
            <div class="flex justify-start items-center gap-3">
                <img class="mx-auto" src="{{asset('images/pins.png')}}" alt="">
            <div>
                    <h2 class="text-[#F8E7CF] font-bold text-xl">CUSTOM DESIGNS</h2>
                    <p class="text-[#F8E7CF] text-base mt-1">lala Leather is leather goods and apparel brand with a love</p>
            </div>
            </div>
            <div class="flex justify-start items-center gap-3">
                <img class="mx-auto" src="{{asset('images/button.png')}}" alt="">
            <div>
                    <h2 class="text-[#F8E7CF] font-bold text-xl">PRIVATE LABELING</h2>
                    <p class="text-[#F8E7CF] text-base mt-1">lala Leather is leather goods and apparel brand with a love</p>
            </div>
            </div>
            <div class="flex justify-start items-center gap-3">
                <img class="mx-auto" src="{{asset('images/globe.png')}}" alt="">
            <div>
                    <h2 class="text-[#F8E7CF] font-bold text-xl">BUY ONLINE</h2>
                    <p class="text-[#F8E7CF] text-base mt-1">lala Leather is leather goods and apparel brand with a love</p>
            </div>
            </div>
        </div>
    </div>
</section>
<!-- Icons Section  -->


<!-- About Lala Leather -->
<section class="my-20 sm:my-40 xl:h-screen" data-aos="fade-up">
    <div class="container 2xl:max-w-screen-2xl mx-auto px-4 h-full">            
        <div class="relative">
            <img class="absolute hidden xl:block top-[-70px] right-0 w-[650px]" src="{{asset('images/about-lala-sec-3.png')}}" alt="">
            <img class="absolute hidden xl:block top-[-70px] left-0 w-[500px]" src="{{asset('images/about-lala-sec-1.png')}}" alt="">
            <img class="absolute hidden xl:block bottom-[-200px] left-0 w-[500px]" src="{{asset('images/about-lala-sec-2.png')}}" alt="">

            <div class="grid w-full max-w-4xl mx-auto sm:p-10 bg-[#752D00] relative z-10">
                <div class="flex justify-center items-center border-[6px] border-[#F8E7CF] p-10">
                    <div class="space-y-5 text-left sm:text-center" >
                        <h3 class="text-4xl lg:text-5xl lg:leading-[70px] font-medium text-[#F8E7CF] uppercase">About</h3>
                        <h2 class="text-5xl lg:text-6xl lg:leading-[70px] font-bold text-[#F8E7CF] uppercase">lala leather</h2>
                        <p class="text-sm sm:text-lg text-[#F8E7CF] font-normal leading-10">
                            lala Leather is leather goods and apparel brand with a love for adventure and a dedication to choosing a simpler way of living. We honor the lost craft of learning a new trade and hard work earned with your hands. That’s why we aim to provide men and women a brand that adds quality to your everyday experiences. lala Leather is leather goods and apparel brand with a love for adventure and a dedication to choosing a simpler way of living. lala Leather is leather goods and apparel brand with a love for adventure and a dedication to choosing a simpler way of living. We honor the lost craft of learning a new trade and hard work earned with your hands. lala Leather is leather goods and apparel brand with a love for adventure and a dedication to choosing a simpler way of living. We honor the lost craft of learning a new trade and hard work earned with your hands. That’s why we aim to provide men and women a brand that adds quality to your everyday experiences. lala Leather is leather goods and apparel brand with a love for adventure and a dedication to choosing a simpler way of living. we aim to provide men and women a brand that adds quality to your everyday experiences. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Lala Leather -->


<!-- Categories Section -->
<section class="mt-10 md:mt-64 relative bg-contain bg-right bg-no-repeat" data-aos="fade-up" style="background-image: url({{asset('images/zipper-brown.png')}}); background-size: 800px 100%;">
    <h1 class="font-extrabold text-transparent hidden sm:block text-[253px] leading-tight bg-clip-text bg-gradient-to-b from-[#ffffff0a] to-[#ffffff05] absolute left-0 top-80">
        wear <br>
        your <br>
        wild <br>
        by <br>
        lala
    </h1>
    <div class="container 2xl:max-w-screen-2xl mx-auto px-4 h-full relative">
        <!-- <img class="absolute top-0 left-0 w-64 hidden md:block" src="./images/custom-design.png" alt=""> -->
        <div class="text-center space-y-5">
            <h2 class="text-[#F8E7CF] text-4xl font-medium uppercase">Main Jacket <span class="font-bold text-5xl">Categories</span></h2>
        </div>
    </div>
    <div class="py-3 max-w-4xl sm:mx-auto w-full px-2 md:px-0 mt-10">
        <div class="relative text-gray-700 antialiased text-sm font-semibold space-y-24 sm:space-y-8"> 
            <!-- Vertical bar running through middle -->
            <div class="hidden sm:block w-[2px] bg-[#752D00] absolute  h-full left-1/2 transform -translate-x-1/2"></div> 

            <!-- Left section, set by justify-start and sm:pr-8 -->
            <div class=" sm:mt-0 sm:mb-12 aos-init aos-animate">
                <div class="flex flex-col sm:flex-row items-center">
                <div class="flex justify-start w-full mx-auto items-center">
                    <div class="w-full sm:w-1/2 sm:pr-8">
                        <div class="relative">
                            <div class="flex justify-between items-center gap-2">
                                <img class="max-w-[250px] w-full absolute right-0" src="{{asset('images/GetPaidStock 9.png')}}" alt="">
                                <div class="bg-[#752D00] p-4 relative w-[60%]">
                                    <h3 class="uppercase font-semibold text-[#F8E7CF] text-base">moto jacket</h3>
                                    <p class="font-normal text-[#F8E7CF] text-sm">lala Leather is leather goods and apparel brand with a love.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rounded-full  p-1 border border-[#752D00]  w-5 h-5 absolute left-1/2 -translate-y-4 sm:translate-y-0 transform -translate-x-1/2 hidden sm:flex items-center justify-center">
                    <div class="bg-[#752D00] rounded-full w-full h-full">
                    </div>
                </div>
                </div>
            </div>
        
            <!-- Right section, set by justify-end and sm:pl-8 -->
            <div class=" sm:mt-0 sm:mb-12 aos-init aos-animate">
                <div class="flex flex-col sm:flex-row items-center">
                    <div class="flex justify-end w-full mx-auto items-center">
                        <div class="w-full sm:w-1/2 sm:pl-8">
                            <div class="relative">
                                <div class="flex justify-between items-center gap-2">
                                    <img class="max-w-[250px] w-full absolute left-0" src="{{asset('images/GetPaidStock 9.png')}}" alt="">
                                    <div class="bg-[#752D00] p-4 relative w-[60%] ml-auto">
                                        <h3 class="uppercase font-semibold text-[#F8E7CF] text-base">bomber jacket</h3>
                                        <p class="font-normal text-[#F8E7CF] text-sm">lala Leather is leather goods and apparel brand with a love.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-full p-1 border border-[#752D00]  w-5 h-5 absolute left-1/2 -translate-y-4 sm:translate-y-0 transform -translate-x-1/2 hidden sm:flex items-center justify-center">
                        <div class="bg-[#752D00] rounded-full w-full h-full">
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- Left section, set by justify-start and sm:pr-8 -->
            <div class=" sm:mt-0 sm:mb-12 aos-init aos-animate">
                <div class="flex flex-col sm:flex-row items-center">
                <div class="flex justify-start w-full mx-auto items-center">
                    <div class="w-full sm:w-1/2 sm:pr-8">
                        <div class="relative">
                            <div class="flex justify-between items-center gap-2">
                                <img class="max-w-[250px] w-full absolute right-0" src="{{asset('images/GetPaidStock 9.png')}}" alt="">
                                <div class="bg-[#752D00] p-4 relative w-[60%]">
                                    <h3 class="uppercase font-semibold text-[#F8E7CF] text-base">moto jacket</h3>
                                    <p class="font-normal text-[#F8E7CF] text-sm">lala Leather is leather goods and apparel brand with a love.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rounded-full  p-1 border border-[#752D00]  w-5 h-5 absolute left-1/2 -translate-y-4 sm:translate-y-0 transform -translate-x-1/2 hidden sm:flex items-center justify-center">
                    <div class="bg-[#752D00] rounded-full w-full h-full">
                    </div>
                </div>
                </div>
            </div>
        
            <!-- Right section, set by justify-end and sm:pl-8 -->
            <div class=" sm:mt-0 sm:mb-12 aos-init aos-animate">
                <div class="flex flex-col sm:flex-row items-center">
                    <div class="flex justify-end w-full mx-auto items-center">
                        <div class="w-full sm:w-1/2 sm:pl-8">
                            <div class="relative">
                                <div class="flex justify-between items-center gap-2">
                                    <img class="max-w-[250px] w-full absolute left-0" src="{{asset('images/GetPaidStock 9.png')}}" alt="">
                                    <div class="bg-[#752D00] p-4 relative w-[60%] ml-auto">
                                        <h3 class="uppercase font-semibold text-[#F8E7CF] text-base">bomber jacket</h3>
                                        <p class="font-normal text-[#F8E7CF] text-sm">lala Leather is leather goods and apparel brand with a love.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-full p-1 border border-[#752D00]  w-5 h-5 absolute left-1/2 -translate-y-4 sm:translate-y-0 transform -translate-x-1/2 hidden sm:flex items-center justify-center">
                        <div class="bg-[#752D00] rounded-full w-full h-full">
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- Left section, set by justify-start and sm:pr-8 -->
            <div class=" sm:mt-0 sm:mb-12 aos-init aos-animate">
                <div class="flex flex-col sm:flex-row items-center">
                <div class="flex justify-start w-full mx-auto items-center">
                    <div class="w-full sm:w-1/2 sm:pr-8">
                        <div class="relative">
                            <div class="flex justify-between items-center gap-2">
                                <img class="max-w-[250px] w-full absolute right-0" src="{{asset('images/GetPaidStock 9.png')}}" alt="">
                                <div class="bg-[#752D00] p-4 relative w-[60%]">
                                    <h3 class="uppercase font-semibold text-[#F8E7CF] text-base">moto jacket</h3>
                                    <p class="font-normal text-[#F8E7CF] text-sm">lala Leather is leather goods and apparel brand with a love.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rounded-full  p-1 border border-[#752D00]  w-5 h-5 absolute left-1/2 -translate-y-4 sm:translate-y-0 transform -translate-x-1/2 hidden sm:flex items-center justify-center">
                    <div class="bg-[#752D00] rounded-full w-full h-full">
                    </div>
                </div>
                </div>
            </div>

            <!-- Right section, set by justify-end and sm:pl-8 -->
            <div class=" sm:mt-0 sm:mb-12 aos-init aos-animate">
                <div class="flex flex-col sm:flex-row items-center">
                    <div class="flex justify-end w-full mx-auto items-center">
                        <div class="w-full sm:w-1/2 sm:pl-8">
                            <div class="relative">
                                <div class="flex justify-between items-center gap-2">
                                    <img class="max-w-[250px] w-full absolute left-0" src="{{asset('images/GetPaidStock 9.png')}}" alt="">
                                    <div class="bg-[#752D00] p-4 relative w-[60%] ml-auto">
                                        <h3 class="uppercase font-semibold text-[#F8E7CF] text-base">bomber jacket</h3>
                                        <p class="font-normal text-[#F8E7CF] text-sm">lala Leather is leather goods and apparel brand with a love.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-full p-1 border border-[#752D00]  w-5 h-5 absolute left-1/2 -translate-y-4 sm:translate-y-0 transform -translate-x-1/2 hidden sm:flex items-center justify-center">
                        <div class="bg-[#752D00] rounded-full w-full h-full">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Left section, set by justify-start and sm:pr-8 -->
            <div class=" sm:mt-0 sm:mb-12 aos-init aos-animate">
                <div class="flex flex-col sm:flex-row items-center">
                <div class="flex justify-start w-full mx-auto items-center">
                    <div class="w-full sm:w-1/2 sm:pr-8">
                        <div class="relative">
                            <div class="flex justify-between items-center gap-2">
                                <img class="max-w-[250px] w-full absolute right-0" src="{{asset('images/GetPaidStock 9.png')}}" alt="">
                                <div class="bg-[#752D00] p-4 relative w-[60%]">
                                    <h3 class="uppercase font-semibold text-[#F8E7CF] text-base">moto jacket</h3>
                                    <p class="font-normal text-[#F8E7CF] text-sm">lala Leather is leather goods and apparel brand with a love.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rounded-full  p-1 border border-[#752D00]  w-5 h-5 absolute left-1/2 -translate-y-4 sm:translate-y-0 transform -translate-x-1/2 hidden sm:flex items-center justify-center">
                    <div class="bg-[#752D00] rounded-full w-full h-full">
                    </div>
                </div>
                </div>
            </div>

            <!-- Right section, set by justify-end and sm:pl-8 -->
            <div class=" sm:mt-0 sm:mb-12 aos-init aos-animate">
                <div class="flex flex-col sm:flex-row items-center">
                    <div class="flex justify-end w-full mx-auto items-center">
                        <div class="w-full sm:w-1/2 sm:pl-8">
                            <div class="relative">
                                <div class="flex justify-between items-center gap-2">
                                    <img class="max-w-[250px] w-full absolute left-0" src="{{asset('images/GetPaidStock 9.png')}}" alt="">
                                    <div class="bg-[#752D00] p-4 relative w-[60%] ml-auto">
                                        <h3 class="uppercase font-semibold text-[#F8E7CF] text-base">bomber jacket</h3>
                                        <p class="font-normal text-[#F8E7CF] text-sm">lala Leather is leather goods and apparel brand with a love.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-full p-1 border border-[#752D00]  w-5 h-5 absolute left-1/2 -translate-y-4 sm:translate-y-0 transform -translate-x-1/2 hidden sm:flex items-center justify-center">
                        <div class="bg-[#752D00] rounded-full w-full h-full">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Left section, set by justify-start and sm:pr-8 -->
            <div class=" sm:mt-0 sm:mb-12 aos-init aos-animate" >
                <div class="flex flex-col sm:flex-row items-center">
                <div class="flex justify-start w-full mx-auto items-center">
                    <div class="w-full sm:w-1/2 sm:pr-8">
                        <div class="relative">
                            <div class="flex justify-between items-center gap-2">
                                <img class="max-w-[250px] w-full absolute right-0" src="{{asset('images/GetPaidStock 9.png')}}" alt="">
                                <div class="bg-[#752D00] p-4 relative w-[60%]">
                                    <h3 class="uppercase font-semibold text-[#F8E7CF] text-base">moto jacket</h3>
                                    <p class="font-normal text-[#F8E7CF] text-sm">lala Leather is leather goods and apparel brand with a love.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rounded-full  p-1 border border-[#752D00]  w-5 h-5 absolute left-1/2 -translate-y-4 sm:translate-y-0 transform -translate-x-1/2 hidden sm:flex items-center justify-center">
                    <div class="bg-[#752D00] rounded-full w-full h-full">
                    </div>
                </div>
                </div>
            </div>

            <!-- Right section, set by justify-end and sm:pl-8 -->
            <div class=" sm:mt-0 sm:mb-12 aos-init aos-animate">
                <div class="flex flex-col sm:flex-row items-center">
                    <div class="flex justify-end w-full mx-auto items-center">
                        <div class="w-full sm:w-1/2 sm:pl-8">
                            <div class="relative">
                                <div class="flex justify-between items-center gap-2">
                                    <img class="max-w-[250px] w-full absolute left-0" src="{{asset('images/GetPaidStock 9.png')}}" alt="">
                                    <div class="bg-[#752D00] p-4 relative w-[60%] ml-auto">
                                        <h3 class="uppercase font-semibold text-[#F8E7CF] text-base">bomber jacket</h3>
                                        <p class="font-normal text-[#F8E7CF] text-sm">lala Leather is leather goods and apparel brand with a love.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-full p-1 border border-[#752D00]  w-5 h-5 absolute left-1/2 -translate-y-4 sm:translate-y-0 transform -translate-x-1/2 hidden sm:flex items-center justify-center">
                        <div class="bg-[#752D00] rounded-full w-full h-full">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Categories Section -->

<!-- we make it section -->
<section>
    <div class="container mt-32  2xl:max-w-[1650px] mx-auto px-4">
        <div class="text-end mb-14">
            <h2 class="text-[#F8E7CF] text-4xl font-medium uppercase">We <span class="font-bold text-5xl">Make IT</span></h2>
        </div>
        <div class="grid sm:grid-cols-2 xl:grid-cols-4 gap-10">
            <div class="sm:mt-20">
                <img class="w-full object-cover" src="{{asset('images/design.png')}}" alt="">
                <div class="bg-[#301200] border-2 border-transparent hover:border-[#752D00] rounded text-center max-w-[90%] w-full mx-auto -mt-12 relative px-4 py-6 2xl:px-6 2xl:py-10" style="box-shadow: 0px 4px 40px rgba(117, 45, 0, 0.3);">
                    <div class="space-y-2 text-center">
                        <h2 class="text-[#F8E7CF] text-xl 2xl:text-3xl font-semibold">Design</h2>
                        <img class="mx-auto" src="{{asset('images/dash-line.png')}}" alt="">
                    </div>
                    <p class="text-[#F8E7CF] text-base font-normal leading-7 mt-3">
                        lala Leather is leather goods and apparel brand with a love for adventure and a dedication.
                    </p>
                </div>
            </div>
            <div>
                <img class="w-full object-cover" src="{{asset('images/sourcing.png')}}" alt="">
                <div class="bg-[#301200] rounded text-center max-w-[90%] w-full mx-auto border-2 border-transparent hover:border-[#752D00] -mt-12 relative px-4 py-6 2xl:px-6 2xl:py-10" style="box-shadow: 0px 4px 40px rgba(117, 45, 0, 0.3);">
                    <div class="space-y-2 text-center">
                        <h2 class="text-[#F8E7CF] text-xl 2xl:text-3xl font-semibold">SOURCING</h2>
                        <img class="mx-auto" src="{{asset('images/dash-line.png')}}" alt="">
                    </div>
                    <p class="text-[#F8E7CF] text-base font-normal leading-7 mt-3">
                        lala Leather is leather goods and apparel brand with a love for adventure and a dedication.
                    </p>
                </div>
            </div>
            <div class="sm:mt-20">
                <img class="w-full object-cover" src="{{asset('images/manufacturing.png')}}" alt="">
                <div class="bg-[#301200] rounded text-center max-w-[90%] w-full mx-auto border-2 border-transparent hover:border-[#752D00] -mt-12 relative px-4 py-6 2xl:px-6 2xl:py-10" style="box-shadow: 0px 4px 40px rgba(117, 45, 0, 0.3);">
                    <div class="space-y-2 text-center">
                        <h2 class="text-[#F8E7CF] text-xl 2xl:text-3xl font-semibold">MANUFGACTURING</h2>
                        <img class="mx-auto" src="{{asset('images/dash-line.png')}}" alt="">
                    </div>
                    <p class="text-[#F8E7CF] text-base font-normal leading-7 mt-3">
                        lala Leather is leather goods and apparel brand with a love for adventure and a dedication.
                    </p>
                </div>
            </div>
            <div>
                <img class="w-full object-cover" src="{{asset('images/online.png')}}" alt="">
                <div class="bg-[#301200] rounded text-center max-w-[90%] w-full mx-auto border-2 border-transparent hover:border-[#752D00] -mt-12 relative px-4 py-6 2xl:px-6 2xl:py-10" style="box-shadow: 0px 4px 40px rgba(117, 45, 0, 0.3);">
                    <div class="space-y-2 text-center">
                        <h2 class="text-[#F8E7CF] text-xl 2xl:text-3xl font-semibold">BUY ONLINE</h2>
                        <img class="mx-auto" src="{{asset('images/dash-line.png')}}" alt="">
                    </div>
                    <p class="text-[#F8E7CF] text-base font-normal leading-7 mt-3">
                        lala Leather is leather goods and apparel brand with a love for adventure and a dedication.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- we make it section -->

<!-- what we believe -->
<section class="bg-right bg-contain bg-no-repeat" style="background-image: url({{asset('images/believe-bg.png')}}); background-size: 800px ;">
    <div class="container mt-16  2xl:max-w-[1650px] mx-auto px-4">
        <h2 class="text-[#F8E7CF] text-4xl font-medium uppercase">what We <span class="font-bold text-5xl">believe</span></h2>
        <div class="grid xl:grid-cols-2 gap-14 mt-8">
            <div class="grid sm:grid-cols-2 gap-6">
                <div class="space-y-6">
                    <div class="w-full p-4 bg-cover bg-no-repeat" style="background-image: url({{asset('images/believe-box.png')}});">
                        <div class="border-2 border-[#752D00] space-y-3 p-4 text-center">
                            <div>
                                <img class="mx-auto" src="{{asset('images/quality.png')}}" alt="">
                            </div>
                            <div class="space-y-2">
                                <h5 class="font-bold text-lg text-[#F8E7CF] uppercase">quality focus</h5>
                                <p class="text-[#F8E7CF]">lala Leather is leather goods and apparel brand with a love for adventure and a dedication.</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full p-4 bg-cover bg-no-repeat" style="background-image: url({{asset('images/believe-box.png')}});">
                        <div class="border-2 border-[#752D00] space-y-3 p-4 text-center">
                            <div>
                                <img class="mx-auto" src="{{asset('images/handshake.png')}}" alt="">
                            </div>
                            <div class="space-y-2">
                                <h5 class="font-bold text-lg text-[#F8E7CF] uppercase">quality focus</h5>
                                <p class="text-[#F8E7CF]">lala Leather is leather goods and apparel brand with a love for adventure and a dedication.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="space-y-6 sm:mt-14">
                    <div class="w-full p-4 bg-cover bg-no-repeat" style="background-image: url({{asset('images/believe-box.png')}});">
                        <div class="border-2 border-[#752D00] space-y-3 p-4 text-center">
                            <div>
                                <img class="mx-auto" src="{{asset('images/idea-icon.png')}}" alt="">
                            </div>
                            <div class="space-y-2">
                                <h5 class="font-bold text-lg text-[#F8E7CF] uppercase">quality focus</h5>
                                <p class="text-[#F8E7CF]">lala Leather is leather goods and apparel brand with a love for adventure and a dedication.</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full p-4 bg-cover bg-no-repeat" style="background-image: url({{asset('images/believe-box.png')}});">
                        <div class="border-2 border-[#752D00] space-y-3 p-4 text-center">
                            <div>
                                <img class="mx-auto" src="{{asset('images/bulb-icon.png')}}" alt="">
                            </div>
                            <div class="space-y-2">
                                <h5 class="font-bold text-lg text-[#F8E7CF] uppercase">quality focus</h5>
                                <p class="text-[#F8E7CF]">lala Leather is leather goods and apparel brand with a love for adventure and a dedication.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center ">
                <p class="text-lg font-medium text-[#F8E7CF] leading-10">lala Leather is leather goods and apparel brand with a love for adventure and a dedication to choosing a simpler way of living. We honor the lost craft of learning a new trade and hard work earned with your hands. That’s why we aim to provide men and women a brand that adds quality to your everyday experiences. lala Leather is leather goods and apparel brand with a love for adventure and a dedication to choosing a simpler way of living. lala Leather is leather goods and apparel brand with a love for adventure and a dedication to choosing a simpler way of living. We honor the lost craft of learning a new trade and hard work earned with your hands. </p>
            </div>
        </div>
    </div>
</section>
<!-- what we believe -->

<!-- certification section -->
<section>
    <div class="container mt-32  2xl:max-w-[1650px] mx-auto px-4">
        <div class="text-end">
            <h2 class="text-[#F8E7CF] text-3xl sm:text-4xl font-medium uppercase">our <span class="font-bold text-4xl sm:text-5xl">certifications</span></h2>
        </div>
    </div>
    <div class="mt-16 py-16 " style="background-color: rgba(248, 231, 207, 0.83);">
        <!-- MArquee  -->
        <div>
            <div class="w-full relative flex ">
                <div class="swiper brandlogo max-w-[90%] mx-auto overflow-hidden">
                    <div class="swiper-wrapper ">
                        <div class="swiper-slide">
                            <img class="max-w-[75px] mx-auto w-full grayscale hover:grayscale-0 transition-all duration-200 ease-linear" src="{{asset('images/certification.png')}}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="max-w-[75px] mx-auto w-full grayscale hover:grayscale-0 transition-all duration-200 ease-linear" src="{{asset('images/certification-2.png')}}" alt=""> 
                        </div>
                        <div class="swiper-slide">
                            <img class="max-w-[75px] mx-auto w-full grayscale hover:grayscale-0 transition-all duration-200 ease-linear" src="{{asset('images/certification-3.png')}}" alt=""> 
                        </div>
                        <div class="swiper-slide">
                            <img class="max-w-[75px] mx-auto w-full grayscale hover:grayscale-0 transition-all duration-200 ease-linear" src="{{asset('images/certification.png')}}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="max-w-[75px] mx-auto w-full grayscale hover:grayscale-0 transition-all duration-200 ease-linear" src="{{asset('images/certification-2.png')}}" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img class="max-w-[75px] mx-auto w-full grayscale hover:grayscale-0 transition-all duration-200 ease-linear" src="{{asset('images/certification-3.png')}}" alt=""> 
                        </div>
                        <div class="swiper-slide">
                            <img class="max-w-[75px] mx-auto w-full grayscale hover:grayscale-0 transition-all duration-200 ease-linear" src="{{asset('images/certification.png')}}" alt=""> 
                        </div>
                    </div>
                </div>
                <div class="flex justify-between items-center gap-3 absolute top-[50%] translate-y-[-50%] left-[50%] translate-x-[-50%] z-10 w-[98%] mx-auto">
                    <button class="workprev "><img src="{{asset('images/arrow-left.png')}}" alt=""></button>
                    <button class="worknext "><img src="{{asset('images/arrow-right.png')}}" alt=""></button>
                </div>
            </div>
        </div>
        <!-- MArquee  -->
    </div>
</section>
<!-- certification section -->


<!-- Our Shop-v2 -->
<section class="mt-24 bg-contain bg-left-bottom bg-no-repeat relative px-4 sm:px-0" style="background-image: url({{asset('images/ourshop-bg.png')}}); background-size: 60%;">
    <h1 class="font-extrabold text-transparent text-[123px] uppercase leading-tight bg-clip-text bg-gradient-to-b from-[#ffffff0a] to-[#ffffff05] absolute right-0 bottom-9">
        its <br> leather <br> jackets <br>
        era now
    </h1>
    <div class="mb-14 px-10 flex justify-between items-center flex-wrap gap-5">
        <h2 class="text-[#F8E7CF] text-4xl font-medium uppercase">products from <span class="font-bold text-5xl">our shop</span></h2>
        <div class="flex justify-start items-center gap-4">
            <button class="w-11 h-11 rounded-full border-[3px] shopprev border-[#752D00] text-[#752D00] flex justify-center items-center font-extrabold text-lg ">
                <i class="fa-solid fa-arrow-left"></i>
            </button>
            <button class="w-11 h-11 rounded-full border-[3px] shopnext border-[#752D00] text-[#752D00] flex justify-center items-center font-extrabold text-lg ">
                <i class="fa-solid fa-arrow-right"></i>
            </button>
        </div>
    </div>
    <div class="flex justify-between bg-no-repeat overflow-x-hidden pb-20 relative flex-col-reverse gap-6 lg:flex-row  mt-0  lg:mt-10">
        <div class="w-full lg:flex lg:w-max gap-4  flex-col gap-y-20 sm:flex-row lg:flex-col hidden">
            <div style="background-image: url('{{asset('images/shops-box-bg.png')}}');" class="pr-8 relative   w-max py-10 bg-no-repeat bg-[cover] bg-[center] ">
                <img class="max-w-[500px] max-h-[500px] xl:max-w-[700px] xl:max-h-[700px]" src="{{asset('images/man1.png')}}" alt="">
                <div class="text-center space-y-8">
                    <h4 class="text-center text-lg text-white time-roman mt-8">BROWN LEATHER TEXTURE JACKET
                    </h4>
                    <a href="#" class="text-[#301200] text-base bg-[#F8E7CF] uppercase py-3 px-5 inline-block">read more</a>
                </div>
                <div class="absolute right-5  w-4/12 bottom-[-60px]">
                    <div class="relative w-full flex items-center justify-center"> <a href=""
                            style="rotate: -70deg;"
                            class="text-3xl lg:text-xl absolute ml-[11%] bottom-[28%] xl:text-3xl 2xl:text-4xl text-white time-roman font z-[5] text-center">550$</a>
                        <img class="w-full" src="{{asset('images/price-tag.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div style="background-image: url('{{asset('images/shops-box-bg.png')}}');" class="pr-8 relative   w-max py-10 bg-no-repeat bg-[cover] bg-[center] ">
                <img class="max-w-[500px] max-h-[500px] xl:max-w-[700px] xl:max-h-[700px]" src="{{asset('images/man4.png')}}" alt="">
                <div class="text-center space-y-8">
                    <h4 class="text-center text-lg text-white time-roman mt-8">BROWN LEATHER TEXTURE JACKET
                    </h4>
                    <a href="#" class="text-[#301200] text-base bg-[#F8E7CF] uppercase py-3 px-5 inline-block">read more</a>
                </div>
                <div class="absolute right-5  w-4/12 bottom-[-60px]">
                    <div class="relative w-full flex items-center justify-center"> <a href=""
                            style="rotate: -70deg;"
                            class="text-3xl lg:text-xl absolute ml-[11%] bottom-[28%] xl:text-3xl 2xl:text-4xl text-white time-roman font z-[5] text-center">550$</a>
                        <img class="w-full" src="{{asset('images/price-tag.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider Start -->
        <div class="lg:w-8/12 mt-14 lg:pr-8">
            <div class="swiper h-fit w-full ml-auto shop-card">
                <div class="swiper-wrapper pb-20">
                    <div class="swiper-slide ">
                        <div class="relative  gap-5 grid grid-cols-1 sm:grid-cols-3 lg:mt-16">
                            <div style="background-image: url('{{asset('images/shops-box-bg.png')}}');" class="relative pr-6 pt-8 pb-5  h-fit w-full max-w-[450px] mx-auto  bg-cover bg-center  ">
                                <img class="w-full max-w-[450px] max-h-[450px]" src="{{asset('images/man6.png')}}" alt="">
                                <div class="mt-8 text-center relative">
                                    <h2 class="text-[#F8E7CF] uppercase text-base font-normal time-roman ">BROWN LEATHER TEXTURE JACKET </h2>
                                    <div class="absolute right-0  w-3/12 bottom-[-20px]">
                                        <div class="relative w-full flex items-center justify-center"> <a href=""
                                                style="rotate: -70deg;"
                                                class="text-lg absolute  bottom-[20%] text-white font z-[5] text-center">550$</a>
                                            <img class="w-full" src="{{asset('images/price-tag.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <a href="#" class="text-[#301200] text-base bg-[#F8E7CF] uppercase py-2 time-roman px-4 inline-block">Shop now</a>
                                    </div>
                                </div>
                            
                            </div>
                            <div style="background-image: url('{{asset('images/shops-box-bg.png')}}');" class="relative pr-6 pt-8 pb-5 sm:mt-12  h-fit w-full  bg-cover max-w-[450px] bg-center mx-auto ">
                                <img class="w-full max-w-[450px] max-h-[450px]" src="{{asset('images/man5.png')}}" alt="">
                                <div class="mt-8 text-center relative">
                                    <h2 class="text-[#F8E7CF] uppercase text-base font-normal time-roman ">BROWN LEATHER TEXTURE JACKET </h2>
                                    <div class="absolute right-0  w-3/12 bottom-[-20px]">
                                        <div class="relative w-full flex items-center justify-center"> <a href=""
                                                style="rotate: -70deg;"
                                                class="text-lg absolute  bottom-[20%] text-white font z-[5] text-center">550$</a>
                                            <img class="w-full" src="{{asset('images/price-tag.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <a href="#" class="text-[#301200] text-base bg-[#F8E7CF] uppercase py-2 time-roman px-4 inline-block">Shop now</a>
                                    </div>
                                </div>
                            
                            </div>
                            <div style="background-image: url('{{asset('images/shops-box-bg.png')}}');" class="relative pr-6 pt-8 pb-5 sm:mt-24 h-fit w-full  bg-cover max-w-[450px] bg-center mx-auto  ">
                                <img class="w-full max-w-[450px] max-h-[450px]" src="{{asset('images/man3.png')}}" alt="">
                                <div class="mt-8 text-center relative">
                                    <h2 class="text-[#F8E7CF] uppercase text-base font-normal time-roman ">BROWN LEATHER TEXTURE JACKET </h2>
                                    <div class="absolute right-0  w-3/12 bottom-[-20px]">
                                        <div class="relative w-full flex items-center justify-center"> <a href=""
                                                style="rotate: -70deg;"
                                                class="text-lg absolute  bottom-[20%] text-white font z-[5] text-center">550$</a>
                                            <img class="w-full" src="{{asset('images/price-tag.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <a href="#" class="text-[#301200] text-base bg-[#F8E7CF] uppercase py-2 time-roman px-4 inline-block">Shop now</a>
                                    </div>
                                </div>
                            
                            </div>
                            <div style="background-image: url('{{asset('images/shops-box-bg.png')}}');" class="relative pr-6 pt-8 pb-5  h-fit w-full  bg-cover max-w-[450px] bg-center mx-auto  ">
                                <img class="w-full max-w-[450px] max-h-[450px]" src="{{asset('images/man6.png')}}" alt="">
                                <div class="mt-8 text-center relative">
                                    <h2 class="text-[#F8E7CF] uppercase text-base font-normal time-roman ">BROWN LEATHER TEXTURE JACKET </h2>
                                    <div class="absolute right-0  w-3/12 bottom-[-20px]">
                                        <div class="relative w-full flex items-center justify-center"> <a href=""
                                                style="rotate: -70deg;"
                                                class="text-lg absolute  bottom-[20%] text-white font z-[5] text-center">550$</a>
                                            <img class="w-full" src="{{asset('images/price-tag.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <a href="#" class="text-[#301200] text-base bg-[#F8E7CF] uppercase py-2 time-roman px-4 inline-block">Shop now</a>
                                    </div>
                                </div>
                            
                            </div>
                            <div style="background-image: url('{{asset('images/shops-box-bg.png')}}');" class="relative pr-6 pt-8 pb-5  sm:mt-12 h-fit w-full  bg-cover max-w-[450px] bg-center mx-auto ">
                                <img class="w-full max-w-[450px] max-h-[450px]" src="{{asset('images/man5.png')}}" alt="">
                                <div class="mt-8 text-center relative">
                                    <h2 class="text-[#F8E7CF] uppercase text-base font-normal time-roman ">BROWN LEATHER TEXTURE JACKET </h2>
                                    <div class="absolute right-0  w-3/12 bottom-[-20px]">
                                        <div class="relative w-full flex items-center justify-center"> <a href=""
                                                style="rotate: -70deg;"
                                                class="text-lg absolute  bottom-[20%] text-white font z-[5] text-center">550$</a>
                                            <img class="w-full" src="{{asset('images/price-tag.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <a href="#" class="text-[#301200] text-base bg-[#F8E7CF] uppercase py-2 time-roman px-4 inline-block">Shop now</a>
                                    </div>
                                </div>
                            
                            </div>
                            <div style="background-image: url('{{asset('images/shops-box-bg.png')}}');" class="relative pr-6 pt-8 pb-5 sm:mt-24 h-fit w-full  bg-cover max-w-[450px] bg-center mx-auto  ">
                                <img class="w-full max-w-[450px] max-h-[450px]" src="{{asset('images/man3.png')}}" alt="">
                                <div class="mt-8 text-center relative">
                                    <h2 class="text-[#F8E7CF] uppercase text-base font-normal time-roman ">BROWN LEATHER TEXTURE JACKET </h2>
                                    <div class="absolute right-0  w-3/12 bottom-[-20px]">
                                        <div class="relative w-full flex items-center justify-center"> <a href=""
                                                style="rotate: -70deg;"
                                                class="text-lg absolute  bottom-[20%] text-white font z-[5] text-center">550$</a>
                                            <img class="w-full" src="{{asset('images/price-tag.png')}}" alt="">
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
        </div>
    </div>
</section>
<!-- Our Shop-v2 -->


<!-- Latest Blog Section -->
<section>
    <div class="container mt-32  2xl:max-w-[1650px] mx-auto px-4">
        <div class="max-w-2xl ml-auto space-y-7">
            <h2 class="text-[#F8E7CF] text-4xl font-medium uppercase">latest  <span class="font-bold text-5xl">blog posts</span></h2>
            <p class="text-[#F8E7CF] text-base font-normal ">lala Leather is leather goods and apparel brand with a love for adventure and a dedication to choosing a simpler way of living. We honor the lost craft of learning a new trade and hard work earned with your hands. That’s why we aim to provide men and women a brand that adds quality to your everyday experiences. </p>
        </div>
        <div class="grid sm:grid-cols-2 xl:grid-cols-4 gap-10 mt-16">
            <div class="">
                <img class="w-full object-cover" src="{{asset('images/blog-1.png')}}" alt="">
                <div class="bg-[#301200] border-2 border-transparent hover:border-[#752D00] rounded text-center max-w-[90%] w-full mx-auto -mt-12 relative px-4 py-6" style="box-shadow: 0px 4px 40px rgba(117, 45, 0, 0.3);">
                    <div class="space-y-2 text-center w-max mx-auto">
                        <h2 class="text-[#F8E7CF] text-base">What is a leather field jacket</h2>
                        <div class="flex justify-between items-center gap-3">
                            <p class="text-[#C65B1A] text-base">design</p>
                            <p class="text-[#C65B1A] text-base">2d ago</p>
                        </div>
                    </div>
                    <p class="text-[#F8E7CF] text-base font-normal leading-7 mt-3">
                        lala Leather is leather goods and apparel brand with a love for adventure and a dedication.
                    </p>
                    <div class="mt-4">
                        <a href="#" class="text-[#301200] text-base bg-[#F8E7CF] uppercase py-3 px-5 inline-block">read more</a>
                    </div>
                </div>
            </div>
            <div>
                <img class="w-full object-cover" src="{{asset('images/design.png')}}" alt="">
                <div class="bg-[#301200] rounded text-center max-w-[90%] w-full mx-auto border-2 border-transparent hover:border-[#752D00] -mt-12 relative px-4 py-6" style="box-shadow: 0px 4px 40px rgba(117, 45, 0, 0.3);">
                    <div class="space-y-2 text-center w-max mx-auto">
                        <h2 class="text-[#F8E7CF] text-base">What is a leather field jacket</h2>
                        <div class="flex justify-between items-center gap-3">
                            <p class="text-[#C65B1A] text-base">design</p>
                            <p class="text-[#C65B1A] text-base">2d ago</p>
                        </div>
                    </div>
                    <p class="text-[#F8E7CF] text-base font-normal leading-7 mt-3">
                        lala Leather is leather goods and apparel brand with a love for adventure and a dedication.
                    </p>
                    <div class="mt-4">
                        <a href="#" class="text-[#301200] text-base bg-[#F8E7CF] uppercase py-3 px-5 inline-block">read more</a>
                    </div>
                </div>
            </div>
            <div class="">
                <img class="w-full object-cover" src="{{asset('images/blog-2.png')}}" alt="">
                <div class="bg-[#301200] rounded text-center max-w-[90%] w-full mx-auto border-2 border-transparent hover:border-[#752D00] -mt-12 relative px-4 py-6" style="box-shadow: 0px 4px 40px rgba(117, 45, 0, 0.3);">
                    <div class="space-y-2 text-center w-max mx-auto">
                        <h2 class="text-[#F8E7CF] text-base">What is a leather field jacket</h2>
                        <div class="flex justify-between items-center gap-3">
                            <p class="text-[#C65B1A] text-base">design</p>
                            <p class="text-[#C65B1A] text-base">2d ago</p>
                        </div>
                    </div>
                    <p class="text-[#F8E7CF] text-base font-normal leading-7 mt-3">
                        lala Leather is leather goods and apparel brand with a love for adventure and a dedication.
                    </p>
                    <div class="mt-4">
                        <a href="#" class="text-[#301200] text-base bg-[#F8E7CF] uppercase py-3 px-5 inline-block">read more</a>
                    </div>
                </div>
            </div>
            <div>
                <img class="w-full object-cover" src="{{asset('images/blog-1.png')}}" alt="">
                <div class="bg-[#301200] rounded text-center max-w-[90%] w-full mx-auto border-2 border-transparent hover:border-[#752D00] -mt-12 relative px-4 py-6" style="box-shadow: 0px 4px 40px rgba(117, 45, 0, 0.3);">
                    <div class="space-y-2 text-center w-max mx-auto">
                        <h2 class="text-[#F8E7CF] text-base">What is a leather field jacket</h2>
                        <div class="flex justify-between items-center gap-3">
                            <p class="text-[#C65B1A] text-base">design</p>
                            <p class="text-[#C65B1A] text-base">2d ago</p>
                        </div>
                    </div>
                    <p class="text-[#F8E7CF] text-base font-normal leading-7 mt-3">
                        lala Leather is leather goods and apparel brand with a love for adventure and a dedication.
                    </p>
                    <div class="mt-4">
                        <a href="#" class="text-[#301200] text-base bg-[#F8E7CF] uppercase py-3 px-5 inline-block">read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Latest Blog Section -->

<!-- Blog Section -->
<section>
    <div class="container py-32  2xl:max-w-[1650px] mx-auto px-4 bg-no-repeat bg-contain bg-left" style="background-image: url({{asset('images/get-in-touch.png')}}); background-size: 70%;">
        <div class="grid lg:grid-cols-2 gap-20">
            <div class=" space-y-7">
                <h2 class="text-[#F8E7CF] text-4xl font-medium uppercase">latest  <span class="font-bold text-5xl">blog posts</span></h2>
                <p class="text-[#F8E7CF] text-base sm:text-lg font-normal leading-10 ">lala Leather is leather goods and apparel brand with a love for adventure and a dedication to choosing a simpler way of living. We honor the lost craft of learning a new trade and hard work earned with your hands. That’s why we aim to provide men and women a brand that adds quality to your everyday experiences. lala Leather is leather goods and apparel brand with a love for adventure and a dedication to choosing a simpler way of living. </p>
            </div>
            <div>
                <form action="" class="space-y-5 text-left">
                    <div class="grid pb-8 border-b border-[#f8e7cf17]">
                        <div>
                            <input type="text" id="first_name" class="bg-[#503421] border text-sm text-[#F8E7CF]  bg-opacity-30 rounded border-transparent focus:ring-[#F8E7CF] focus:border-[#F8E7CF] placeholder:text-[#F8E7CF]  block w-full px-2.5 py-4" placeholder="User Name" required="">
                        </div>
                    </div>
                    <textarea id="message" rows="8" class="bg-[#503421] border text-sm text-[#F8E7CF]  bg-opacity-30 rounded border-transparent focus:ring-[#F8E7CF] focus:border-[#F8E7CF] placeholder:text-[#F8E7CF]  block w-full px-2.5 py-4" placeholder="Start typing here...."></textarea>
                    <button type="submit" class="text-base rounded px-8 py-3 text-[#301200] bg-[#F8E7CF] font-normal uppercase">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Blog Section -->

</x-web-layout> 