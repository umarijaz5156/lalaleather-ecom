@extends('welcome')

@section('content')

<!-- Hero Section -->
<section class="sm:min-h-[50vh] lg:min-h-[86vh] flex items-center justify-end bg-cover bg-center relative" style="background-image: url(./images/single-product-hero.png);">
    <div class="absolute top-0 left-0 right-0 bottom-0" style="background: linear-gradient(270deg, #301200 0.7%, rgba(48, 18, 0, 0) 100%);">
    </div>
    <div class="px-9 h-full">
        <div class="max-w-lg ml-auto">
            <div class="my-20"  data-aos="fade-right">
                <div>
                    <h1 class="text-6xl leading-[60px] lg:text-8xl lg:leading-[115px] font-bold text-[#F8E7CF]">WEAR YOUR WILD
                        Well-worn basecamp layers and outerwear.</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section -->


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


<!-- About Lala Leather -->
<section class="my-20 sm:my-40 xl:h-screen" data-aos="fade-up">
    <div class="container 2xl:max-w-screen-2xl mx-auto px-4 h-full">
        <div class="relative">
            <img class="absolute hidden xl:block top-[-70px] right-28 w-[650px]" src="./images/about-lala-sec-3.png" alt="">
            <div class="grid w-full max-w-4xl sm:p-10 bg-[#752D00] relative z-10">
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


<!-- custom leather Jacket -->
<section>
    <div class="container xl:max-w-screen-2xl mx-auto px-4 space-y-20">
        <!-- step 1 -->
        <div class="space-y-20">
             <div class="flex justify-between items-center mb-14 lg:flex-nowrap flex-wrap gap-5">
            <div class="flex justify-start items-center gap-7  order-1 lg:order-0">
                <img class="max-w-[150px]" src="./images/arrow-step.png" alt="">
                <h2 class="text-[#752d0054] font-normal text-5xl sm:text-6xl">Step <span class="font-bold">1</span></h2>
            </div>
            <h2 class="text-[#F8E7CF] text-4xl font-medium uppercase order-0 lg:order-1">
                how we make a <br>
                <span class="font-bold text-5xl">BOMBER leather jacket </span>
            </h2>
            </div>
            <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-8 md:gap-20">
                <div class="bg-[#301200] border border-[#C65B1A] shadow-[0px_4px_40px_rgba(117_45_0_0.3)] py-10 px-6 order-1 md:order-0">
                    <h2 class="text-[#F8E7CF] text-4xl font-bold uppercase">choosing</h2>
                    <p class="text-[#F8E7CF] text-lg font-medium mt-8">lala Leather is leather goods and apparel brand with a love for adventure and a dedication to choosing a simpler way of living. We honor the lost craft of learning a new trade and hard work earned with your hands. That’s why we aim to provide men and women a brand that adds quality to your everyday experiences.. </p>
                </div>
                <div class="bg-center bg-cover bg-no-repeat w-full h-[322px] md:h-auto order-0 md:order-1" style="background-image: url(./images/step-1.png);">
                </div>
            </div>
        <!-- step 1 -->
        </div>
        <!-- step 1 -->

        <!-- step 2-->
        <div class="space-y-20">
            <div class="flex justify-end items-center mb-14">
            <div class="flex justify-start items-center gap-7">
                <h2 class="text-[#752d0054] font-normal text-5xl sm:text-6xl">Step <span class="font-bold">2</span></h2>
                <img class="max-w-[150px] rotate-180" src="./images/arrow-step.png" alt="">
            </div>
            </div>
            <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-20">
                <div class="bg-center bg-cover bg-no-repeat w-full h-[322px] md:h-auto order-0 md:order-1" style="background-image: url(./images/step-2.png);">
                </div>
                <div class="bg-[#301200] border border-[#C65B1A] shadow-[0px_4px_40px_rgba(117_45_0_0.3)] py-10 px-6 order-1 md:order-0">
                    <h2 class="text-[#F8E7CF] text-4xl font-bold uppercase">pattrening</h2>
                    <p class="text-[#F8E7CF] text-lg font-medium mt-8">lala Leather is leather goods and apparel brand with a love for adventure and a dedication to choosing a simpler way of living. We honor the lost craft of learning a new trade and hard work earned with your hands. That’s why we aim to provide men and women a brand that adds quality to your everyday experiences.. </p>
                </div>
            </div>
        </div>
        <!-- step 2-->
        
        <!-- step 3-->
        <div class="space-y-20">
            <div class="flex justify-start items-center mb-14 lg:flex-nowrap flex-wrap gap-5">
                <div class="flex justify-start items-center gap-7  order-1 lg:order-0">
                    <img class="max-w-[150px]" src="./images/arrow-step.png" alt="">
                    <h2 class="text-[#752d0054] font-normal text-5xl sm:text-6xl">Step <span class="font-bold">3</span></h2>
                </div>
            </div>
            <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-8 md:gap-20">
                <div class="bg-[#301200] border border-[#C65B1A] shadow-[0px_4px_40px_rgba(117_45_0_0.3)] py-10 px-6 order-1 md:order-0">
                    <h2 class="text-[#F8E7CF] text-4xl font-bold uppercase">Stitching</h2>
                    <p class="text-[#F8E7CF] text-lg font-medium mt-8">lala Leather is leather goods and apparel brand with a love for adventure and a dedication to choosing a simpler way of living. We honor the lost craft of learning a new trade and hard work earned with your hands. That’s why we aim to provide men and women a brand that adds quality to your everyday experiences.. </p>
                </div>
                <div class="bg-center bg-cover bg-no-repeat w-full h-[322px] md:h-auto order-0 md:order-1" style="background-image: url(./images/step-3.png);">
                </div>
            </div>
        </div>
        <!-- step 3-->
       
        <!-- step 4-->
        <div class="space-y-20">
            <div class="flex justify-end items-center mb-14">
                <div class="flex justify-start items-center gap-7">
                    <h2 class="text-[#752d0054] font-normal text-5xl sm:text-6xl">Step <span class="font-bold">4</span></h2>
                    <img class="max-w-[150px] rotate-180" src="./images/arrow-step.png" alt="">
                </div>
            </div>
            <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-20">
                <div class="bg-center bg-cover bg-no-repeat w-full h-[322px] md:h-auto order-0 md:order-1" style="background-image: url(./images/step-4.png);">
                </div>
                <div class="bg-[#301200] border border-[#C65B1A] shadow-[0px_4px_40px_rgba(117_45_0_0.3)] py-10 px-6 order-1 md:order-0">
                    <h2 class="text-[#F8E7CF] text-4xl font-bold uppercase">pecing Together</h2>
                    <p class="text-[#F8E7CF] text-lg font-medium mt-8">lala Leather is leather goods and apparel brand with a love for adventure and a dedication to choosing a simpler way of living. We honor the lost craft of learning a new trade and hard work earned with your hands. That’s why we aim to provide men and women a brand that adds quality to your everyday experiences.. </p>
                </div>
            </div>
        </div>
        <!-- step 4-->

        <!-- step 5-->
        <div class="space-y-20">
            <div class="flex justify-start items-center mb-14 lg:flex-nowrap flex-wrap gap-5">
                <div class="flex justify-start items-center gap-7  order-1 lg:order-0">
                    <img class="max-w-[150px]" src="./images/arrow-step.png" alt="">
                    <h2 class="text-[#752d0054] font-normal text-5xl sm:text-6xl">Step <span class="font-bold">5</span></h2>
                </div>
            </div>
            <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-8 md:gap-20">
                <div class="bg-[#301200] border border-[#C65B1A] shadow-[0px_4px_40px_rgba(117_45_0_0.3)] py-10 px-6 order-1 md:order-0">
                    <h2 class="text-[#F8E7CF] text-4xl font-bold uppercase">fitting</h2>
                    <p class="text-[#F8E7CF] text-lg font-medium mt-8">lala Leather is leather goods and apparel brand with a love for adventure and a dedication to choosing a simpler way of living. We honor the lost craft of learning a new trade and hard work earned with your hands. That’s why we aim to provide men and women a brand that adds quality to your everyday experiences.. </p>
                </div>
                <div class="bg-center bg-cover bg-no-repeat w-full h-[322px] md:h-auto order-0 md:order-1" style="background-image: url(./images/step-5.png);">
                </div>
            </div>
        </div>
        <!-- step 5-->
       
        <!-- step 6-->
        <div class="space-y-20">
            <div class="flex justify-end items-center mb-14">
                <div class="flex justify-start items-center gap-7">
                    <h2 class="text-[#752d0054] font-normal text-5xl sm:text-6xl">Step <span class="font-bold">6</span></h2>
                    <img class="max-w-[150px] rotate-180" src="./images/arrow-step.png" alt="">
                </div>
            </div>
            <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-20">
                <div class="bg-center bg-cover bg-no-repeat w-full h-[322px] md:h-auto order-0 md:order-1" style="background-image: url(./images/step-6.png);">
                </div>
                <div class="bg-[#301200] border border-[#C65B1A] shadow-[0px_4px_40px_rgba(117_45_0_0.3)] py-10 px-6 order-1 md:order-0">
                    <h2 class="text-[#F8E7CF] text-4xl font-bold uppercase">brainstroming</h2>
                    <p class="text-[#F8E7CF] text-lg font-medium mt-8">lala Leather is leather goods and apparel brand with a love for adventure and a dedication to choosing a simpler way of living. We honor the lost craft of learning a new trade and hard work earned with your hands. That’s why we aim to provide men and women a brand that adds quality to your everyday experiences.. </p>
                </div>
            </div>
        </div>
        <!-- step 6-->

        <!-- step 7-->
        <div class="space-y-20">
            <div class="flex justify-start items-center mb-14 lg:flex-nowrap flex-wrap gap-5">
                <div class="flex justify-start items-center gap-7  order-1 lg:order-0">
                    <img class="max-w-[150px]" src="./images/arrow-step.png" alt="">
                    <h2 class="text-[#752d0054] font-normal text-5xl sm:text-6xl">Step <span class="font-bold">7</span></h2>
                </div>
            </div>
            <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-8 md:gap-20">
                <div class="bg-[#301200] border border-[#C65B1A] shadow-[0px_4px_40px_rgba(117_45_0_0.3)] py-10 px-6 order-1 md:order-0">
                    <h2 class="text-[#F8E7CF] text-4xl font-bold uppercase">deciding</h2>
                    <p class="text-[#F8E7CF] text-lg font-medium mt-8">lala Leather is leather goods and apparel brand with a love for adventure and a dedication to choosing a simpler way of living. We honor the lost craft of learning a new trade and hard work earned with your hands. That’s why we aim to provide men and women a brand that adds quality to your everyday experiences.. </p>
                </div>
                <div class="bg-center bg-cover bg-no-repeat w-full h-[322px] md:h-auto order-0 md:order-1" style="background-image: url(./images/step-7.png);">
                </div>
            </div>
        </div>
        <!-- step 7-->
       
        <!-- step 8-->
        <div class="space-y-20">
            <div class="flex justify-end items-center mb-14">
                <div class="flex justify-start items-center gap-7">
                    <h2 class="text-[#752d0054] font-normal text-5xl sm:text-6xl">Step <span class="font-bold">8</span></h2>
                    <img class="max-w-[150px] rotate-180" src="./images/arrow-step.png" alt="">
                </div>
            </div>
            <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-20">
                <div class="bg-center bg-cover bg-no-repeat w-full h-[322px] md:h-auto order-0 md:order-1" style="background-image: url(./images/step-8.png);">
                </div>
                <div class="bg-[#301200] border border-[#C65B1A] shadow-[0px_4px_40px_rgba(117_45_0_0.3)] py-10 px-6 order-1 md:order-0">
                    <h2 class="text-[#F8E7CF] text-4xl font-bold uppercase">almost there</h2>
                    <p class="text-[#F8E7CF] text-lg font-medium mt-8">lala Leather is leather goods and apparel brand with a love for adventure and a dedication to choosing a simpler way of living. We honor the lost craft of learning a new trade and hard work earned with your hands. That’s why we aim to provide men and women a brand that adds quality to your everyday experiences.. </p>
                </div>
            </div>
        </div>
        <!-- step 8-->
    </div>
</section>
<!-- custom leather Jacket -->

<!-- trendy Section -->
<section class="h-[70vh] bg-cover bg-center my-20" style="background-image: url(./images/trnedy-bg.png );">
    <div class="container xl:max-w-[1650px] mx-auto px-4 h-full flex justify-center items-center">
        <div class="text-center">
            <h2 class="time-roman text-[#301200] text-6xl font-normal uppercase leading-[1.1]"> 
                Nothing is cooler than a <br>
                trendy, hip,  <br>
                <span class="font-bold"> leather jacket</span>
            </h2>
        </div>
    </div>
</section>
<!-- trendy Section -->


<!-- what kind of products section -->
<section>
    <div class="mx-auto px-4 md:px-10">
        <div class="text-center">
            <h2 class="text-[#F8E7CF] text-4xl font-medium uppercase order-0 lg:order-1">
                what kind of product 
                <span class="font-bold text-5xl">we make</span>
            </h2>
        </div>
        <div>
            <div class="flex justify-center items-center mt-14">
                <div class="flex justify-start items-center gap-4">
                    <button class="w-11 h-11 rounded-full border-[3px] we-makeprev border-[#752D00] text-[#752D00] flex justify-center items-center font-extrabold text-lg ">
                        <i class="fa-solid fa-arrow-left"></i>
                    </button>
                    <button class="w-11 h-11 rounded-full border-[3px] we-makenext border-[#752D00] text-[#752D00] flex justify-center items-center font-extrabold text-lg ">
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="swiper we-make mt-6">
            <div class="swiper-wrapper pb-20">
                <div class="swiper-slide ">
                    <div class="">
                        <section class="rounded-lg bg-[#1D0C01] p-8">
                          <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                            <div class="bg-center bg-cover bg-no-repeat min-h-[350px] rounded" style="background-image: url(./images/man3.png);">
                            </div>                          
                            <blockquote class="sm:col-span-2 h-full relative">
                                <h3 class="text-[#F8E7CF] font-bold text-xl">Bomber Jacket</h3>
                                <p class="text-[#F8E7CF] text-base leading-7 mt-2">the biker jacket is probably the most iconic leather jacket option. This jacket exudes style and has a definite “cool-factor.” A biker jacket can be worn by anyone, though, and you don’t even have to have a motorcycle. This jacket comes in many colors and feature options, which allows you to customize your leather biker jacket to your own tastes.Leather is a strong and durable material. It is extremely thick and can take a beating. </p>
                      
                              <cite class="mt-8 inline-flex items-center not-italic absolute bottom-0">
                                <span class="hidden h-px w-6 bg-gray-400 sm:inline-block"></span>
                                <p class="text-sm uppercase text-gray-500 sm:ml-3">
                                  <strong>Justin Harrison</strong>, Beatle Inc.
                                </p>
                              </cite>
                            </blockquote>
                          </div>
                        </section>
                    </div>
                </div>
                <div class="swiper-slide ">
                    <div class="">
                        <section class="rounded-lg bg-[#1D0C01] p-8">
                          <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                            <div class="bg-top sm:bg-center bg-cover bg-no-repeat min-h-[350px] rounded" style="background-image: url(./images/man2.png);">
                            </div>                          
                            <blockquote class="sm:col-span-2 h-full relative ">
                                <h3 class="text-[#F8E7CF] font-bold text-xl">Bomber Jacket</h3>
                                <p class="text-[#F8E7CF] text-base leading-7 mt-2 mb-6">the biker jacket is probably the most iconic leather jacket option. This jacket exudes style and has a definite “cool-factor.” A biker jacket can be worn by anyone, though, and you don’t even have to have a motorcycle. This jacket comes in many colors and feature options, which allows you to customize your leather biker jacket to your own tastes.Leather is a strong and durable material. It is extremely thick and can take a beating. </p>
                      
                                <cite class="mt-8 inline-flex items-center not-italic absolute bottom-0">
                                    <span class="hidden h-px w-6 bg-gray-400 sm:inline-block"></span>
                                    <p class="text-sm uppercase text-gray-500 sm:ml-3">
                                      <strong>Justin Harrison</strong>, Beatle Inc.
                                    </p>
                                </cite>
                            </blockquote>
                          </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- what kind of products section -->


<!-- Services flexes -->
<section class="my-36" >
    <!-- <h4 class="text-3xl text-[#F8E7CF] py-10 lg:text-4xl gap-10">HAVE A LOOK ON <span class="text-4xl lg:text-5xl font-bold">OUR SERVICES</span></h4> -->
    <div class="container xl:max-w-[1650px] mx-auto px-4 sm:px-10">
       <div class="text-center"> 
            <h4 class="text-3xl text-[#F8E7CF] py-10 lg:text-4xl gap-10">HAVE A LOOK ON <span class="text-4xl lg:text-5xl font-bold">OUR SERVICES</span></h4>
       </div>
        <div class="flex gap-28 md:gap-28 flex-col  bg-left bg-contain bg-no-repeat" style="background-image: url(./images/single-product-sevices.png);">
            <div class="flex xl:gap-0 md:flex-row flex-col gap-4 md:gap-10">
                <div class="flex flex-col xl:flex-row items-end">
                    <div class="w-full">
                        <img class="w-full object-cover max-h-[350px] xl:max-w-full xl:max-h-full" src="./images/services-flex-img-1.png" alt="">
                    </div>
                    <div class="w-full mb-[-70px] mt-[-130px] xl:mt-0  ml-[-100px]">   <div class="flex text-[#F8E7CF] flex-col">
                        <div style="box-shadow: 0px 4px 40px 0px #752D004D;"
                        class="flex border py-6 md:py-8 border-[#C65B1A] gap-[1rem]  px-[1rem] mx-[0.5rem] sm:mx-[1rem] lg:mx-[1.5rem] lg:px-[1rem] xl:mx-[0.9rem] 2xl:mx-[1rem] 2xl:px-[1.5rem]  bg-[#301200] flex-col">
                        <div class="flex justify-center"><img  src="./images/icon-1-flex-mid.png" alt=""></div>
                        <h2 class="text-xl md:text-lg lg:text-xl 2xl:text-2xl text-center">DESIGN</h2>
                        <div class="flex gap-[5.1px] mt-1 border-[#C65B1A] justify-center">
                            <hr class="w-14 border-[#C65B1A]  border-[1px]">
                            <hr class="w-2 border-[1px] border-[#C65B1A] ">
                        </div>
                        <p class="text-[#F8E7CF] mt-2 lg:mt-3 2xl:mt-5 text-md lg:text-md 2xl:text-lg text-center">lala Leather is leather goods and apparel brand with a love for adventure and a dedication to choosing a simpler way of living.
                            We honor the lost craft of learning a new trade and hard work earned with your hands. </p>
                    </div>
                    </div></div>
                </div>
                <div class="flex xl:mb-[70px] xl:mt-0 mt-24 flex-col xl:flex-row items-end">
                    <div class="w-full">
                        <img class="w-full object-cover max-h-[350px] xl:max-w-full xl:max-h-full" src="./images/services-flex-img-2.png" alt="">
                    </div>
                    <div class="w-full mb-[-70px] mt-[-130px] xl:mt-0  ml-[-100px]">   <div class="flex text-[#F8E7CF] flex-col">
                        <div style="box-shadow: 0px 4px 40px 0px #752D004D;"
                        class="flex border py-6 md:py-8 border-[#C65B1A] gap-[1rem]  px-[1rem] mx-[1rem] lg:mx-[1.5rem] lg:px-[1rem] xl:mx-[0.9rem] 2xl:mx-[1rem] 2xl:px-[1.5rem]  bg-[#301200] flex-col">
                        <div class="flex justify-center"><img src="./images/icon-2-flex-mid.png" alt=""></div>
                        <h2 class="text-xl md:text-lg lg:text-xl 2xl:text-2xl text-center">BLAZER JACKETS</h2>
                        <div class="flex gap-[5.1px] mt-1 border-[#C65B1A] justify-center">
                            <hr class="w-14 border-[#C65B1A]  border-[1px]">
                            <hr class="w-2 border-[1px] border-[#C65B1A] ">
                        </div>
                        <p class="text-[#F8E7CF] mt-2 lg:mt-3 2xl:mt-5 text-md lg:text-md 2xl:text-lg text-center">lala Leather is leather goods and apparel brand with a love for adventure and a dedication to choosing a simpler way of living.
                            We honor the lost craft of learning a new trade and hard work earned with your hands. </p>
                    </div>
                    </div></div>
                </div>
            </div>
            <div class="flex xl:gap-0 md:flex-row flex-col gap-4 md:gap-10">
                <div class="flex flex-col xl:flex-row items-end">
                    <div class="w-full">
                        <img class="w-full object-cover max-h-[350px] xl:max-w-full xl:max-h-full" src="./images/services-flex-img-4.png" alt="">
                    </div>
                    <div class="w-full mb-[-70px] mt-[-130px] xl:mt-0  ml-[-100px]">   <div class="flex text-[#F8E7CF] flex-col">
                        <div style="box-shadow: 0px 4px 40px 0px #752D004D;"
                        class="flex border py-6 md:py-8 border-[#C65B1A] gap-[1rem]  px-[1rem] mx-[0.5rem] sm:mx-[1rem] lg:mx-[1.5rem] lg:px-[1rem] xl:mx-[0.9rem] 2xl:mx-[1rem] 2xl:px-[1.5rem]  bg-[#301200] flex-col">
                        <div class="flex justify-center"><img src="./images/icon-4-flex-mid.png" alt=""></div>
                        <h2 class="text-xl md:text-lg lg:text-xl 2xl:text-2xl text-center">PRODUCTION</h2>
                        <div class="flex gap-[5.1px] mt-1 border-[#C65B1A] justify-center">
                            <hr class="w-14 border-[#C65B1A]  border-[1px]">
                            <hr class="w-2 border-[1px] border-[#C65B1A] ">
                        </div>
                        <p class="text-[#F8E7CF] mt-2 lg:mt-3 2xl:mt-5 text-md lg:text-md 2xl:text-lg text-center">lala Leather is leather goods and apparel brand with a love for adventure and a dedication to choosing a simpler way of living.
                            We honor the lost craft of learning a new trade and hard work earned with your hands. </p>
                    </div>
                    </div></div>
                </div>
                <div class="flex xl:mb-[70px] xl:mt-0 mt-24 flex-col xl:flex-row items-end">
                    <div class="w-full">
                        <img class="w-full object-cover max-h-[350px] xl:max-w-full xl:max-h-full" src="./images/services-flex-img-5.png" alt="">
                    </div>
                    <div class="w-full mb-[-70px] mt-[-130px] xl:mt-0  ml-[-100px]">   <div class="flex text-[#F8E7CF] flex-col">
                        <div style="box-shadow: 0px 4px 40px 0px #752D004D;"
                        class="flex border py-6 md:py-8 border-[#C65B1A] gap-[1rem]  px-[1rem] mx-[0.5rem] lg:mx-[1.5rem] lg:px-[1rem] xl:mx-[0.9rem] 2xl:mx-[1rem] 2xl:px-[1.5rem]  bg-[#301200] flex-col">
                        <div class="flex justify-center"><img src="./images/icon-5-flex-mid.png" alt=""></div>
                        <h2 class="text-xl md:text-lg lg:text-xl 2xl:text-2xl text-center">SHIPPING</h2>
                        <div class="flex gap-[5.1px] mt-1 border-[#C65B1A] justify-center">
                            <hr class="w-14 border-[#C65B1A]  border-[1px]">
                            <hr class="w-2 border-[1px] border-[#C65B1A] ">
                        </div>
                        <p class="text-[#F8E7CF] mt-2 lg:mt-3 2xl:mt-5 text-md lg:text-md 2xl:text-lg text-center">lala Leather is leather goods and apparel brand with a love for adventure and a dedication to choosing a simpler way of living.
                            We honor the lost craft of learning a new trade and hard work earned with your hands. </p>
                    </div>
                    </div></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Flexes -->



<!-- our Services -->
<section>
    <div class="container mt-32  xl:max-w-[1650px] mx-auto px-4">
        <div class="text-end mb-14">
            <h2 class="text-[#F8E7CF] text-4xl font-medium uppercase">What we   <span class="font-bold text-5xl">believe</span></h2>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="w-full p-4 bg-cover bg-no-repeat" style="background-image: url(./images/believe-box.png);">
                <div class="border-2 border-[#752D00] space-y-3 p-4 text-center">
                    <div>
                        <img class="mx-auto" src="./images/quality.png" alt="">
                    </div>
                    <div class="space-y-2">
                        <h5 class="font-bold text-lg text-[#F8E7CF] uppercase">design</h5>
                        <p class="text-[#F8E7CF]">lala Leather is leather goods and apparel brand with a love for adventure and a dedication.</p>
                    </div>
                </div>
            </div>
            <div class="w-full p-4 bg-cover bg-no-repeat" style="background-image: url(./images/believe-box.png);">
                <div class="border-2 border-[#752D00] space-y-3 p-4 text-center">
                    <div>
                        <img class="mx-auto" src="./images/handshake.png" alt="">
                    </div>
                    <div class="space-y-2">
                        <h5 class="font-bold text-lg text-[#F8E7CF] uppercase">production</h5>
                        <p class="text-[#F8E7CF]">lala Leather is leather goods and apparel brand with a love for adventure and a dedication.</p>
                    </div>
                </div>
            </div>
            <div class="w-full p-4 bg-cover bg-no-repeat" style="background-image: url(./images/believe-box.png);">
                <div class="border-2 border-[#752D00] space-y-3 p-4 text-center">
                    <div>
                        <img class="mx-auto" src="./images/idea-icon.png" alt="">
                    </div>
                    <div class="space-y-2">
                        <h5 class="font-bold text-lg text-[#F8E7CF] uppercase">sampling</h5>
                        <p class="text-[#F8E7CF]">lala Leather is leather goods and apparel brand with a love for adventure and a dedication.</p>
                    </div>
                </div>
            </div>
            <div class="w-full p-4 bg-cover bg-no-repeat" style="background-image: url(./images/believe-box.png);">
                <div class="border-2 border-[#752D00] space-y-3 p-4 text-center">
                    <div>
                        <img class="mx-auto" src="./images/bulb-icon.png" alt="">
                    </div>
                    <div class="space-y-2">
                        <h5 class="font-bold text-lg text-[#F8E7CF] uppercase">shipping</h5>
                        <p class="text-[#F8E7CF]">lala Leather is leather goods and apparel brand with a love for adventure and a dedication.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- our Services -->


<!-- Faq Section -->
<section class="bg-right-top bg-contain bg-no-repeat py-28" style="background-image: url(./images/faq.png); background-size: 800px ;">
    <div class="container mt-16  2xl:max-w-[1650px] mx-auto px-4">
        <h2 class="text-[#F8E7CF] text-4xl font-medium uppercase">Frequently Asked  <span class="font-bold text-5xl">questions</span></h2>
        <div class="max-w-5xl mt-10">
            <div class="" x-data="{selected:1}">
                <ul class="shadow-box">
                    <li class="relative">
                        <button type="button" class="w-full px-8 py-4 text-left rounded bg-[#f8e7cf] bg-opacity-10" @click="selected !== 1 ? selected = 1 : selected = null" style="box-shadow: 0px 1px 2px rgba(58, 58, 68, 0.24), 0px 2px 4px rgba(90, 91, 106, 0.24);">
                            <div class="flex items-center justify-between">
                              <span class="text-base text-[#F8E7CF] font-normal">All You Need to Know About LalaLeather and its production</span>
                              <i class="fa-solid fa-chevron-down transition-all duration-200 ease-linear text-[#301200]" x-bind:class="selected == 1 ? 'rotate-180 ' : ''" ></i>
                          </div>
                        </button>
                        <div class="relative overflow-auto bg-[#f8e7cf] bg-opacity-10 rounded my-4 transition-all duration-300 ease-in   " x-bind:class="selected == 1 ? 'h-max animate-[show-transition_0.5s_ease-in-out]' : 'max-h-0 opacity-0'" id="style-2">
                            <div class="py-6 px-8">
                                <p class="text-base leading-7 text-[#F8E7CF] font-normal">lala Leather is leather goods and apparel brand with a love for adventure and a dedication to choosing a simpler way of living. We honor the lost craft of learning a new trade and hard work earned with your hands. That’s why we aim to provide men and women a brand that adds quality to your everyday experiences.. </p>
                            </div>
                        </div>
                    </li>
                    <li class="relative">
                        <button type="button" class="w-full px-8 py-4 text-left rounded bg-[#f8e7cf] bg-opacity-10" @click="selected !== 2 ? selected = 2 : selected = null" style="box-shadow: 0px 1px 2px rgba(58, 58, 68, 0.24), 0px 2px 4px rgba(90, 91, 106, 0.24);">
                            <div class="flex items-center justify-between">
                              <span class="text-base text-[#F8E7CF] font-normal">All You Need to Know About LalaLeather and its production</span>
                              <i class="fa-solid fa-chevron-down transition-all duration-200 ease-linear text-[#301200]" x-bind:class="selected == 2 ? 'rotate-180 ' : ''" ></i>
                          </div>
                        </button>
                        <div class="relative overflow-auto bg-[#f8e7cf] bg-opacity-10 rounded my-4 transition-all duration-300 ease-in   " x-bind:class="selected == 2 ? 'h-max animate-[show-transition_0.5s_ease-in-out]' : 'max-h-0 opacity-0'" id="style-2">
                            <div class="py-6 px-8">
                                <p class="text-base leading-7 text-[#F8E7CF] font-normal">lala Leather is leather goods and apparel brand with a love for adventure and a dedication to choosing a simpler way of living. We honor the lost craft of learning a new trade and hard work earned with your hands. That’s why we aim to provide men and women a brand that adds quality to your everyday experiences.. </p>
                            </div>
                        </div>
                    </li>
                    <li class="relative">
                        <button type="button" class="w-full px-8 py-4 text-left rounded bg-[#f8e7cf] bg-opacity-10" @click="selected !== 3 ? selected = 3 : selected = null" style="box-shadow: 0px 1px 2px rgba(58, 58, 68, 0.24), 0px 2px 4px rgba(90, 91, 106, 0.24);">
                            <div class="flex items-center justify-between">
                              <span class="text-base text-[#F8E7CF] font-normal">All You Need to Know About LalaLeather and its production</span>
                              <i class="fa-solid fa-chevron-down transition-all duration-200 ease-linear text-[#301200]" x-bind:class="selected == 3 ? 'rotate-180 ' : ''" ></i>
                          </div>
                        </button>
                        <div class="relative overflow-auto bg-[#f8e7cf] bg-opacity-10 rounded my-4 transition-all duration-300 ease-in   " x-bind:class="selected == 3 ? 'h-max animate-[show-transition_0.5s_ease-in-out]' : 'max-h-0 opacity-0'" id="style-2">
                            <div class="py-6 px-8">
                                <p class="text-base leading-7 text-[#F8E7CF] font-normal">lala Leather is leather goods and apparel brand with a love for adventure and a dedication to choosing a simpler way of living. We honor the lost craft of learning a new trade and hard work earned with your hands. That’s why we aim to provide men and women a brand that adds quality to your everyday experiences.. </p>
                            </div>
                        </div>
                    </li>
                    <li class="relative">
                        <button type="button" class="w-full px-8 py-4 text-left rounded bg-[#f8e7cf] bg-opacity-10" @click="selected !== 4 ? selected = 4 : selected = null" style="box-shadow: 0px 1px 2px rgba(58, 58, 68, 0.24), 0px 2px 4px rgba(90, 91, 106, 0.24);">
                            <div class="flex items-center justify-between">
                              <span class="text-base text-[#F8E7CF] font-normal">All You Need to Know About LalaLeather and its production</span>
                              <i class="fa-solid fa-chevron-down transition-all duration-200 ease-linear text-[#301200]" x-bind:class="selected == 4 ? 'rotate-180 ' : ''" ></i>
                          </div>
                        </button>
                        <div class="relative overflow-auto bg-[#f8e7cf] bg-opacity-10 rounded my-4 transition-all duration-300 ease-in   " x-bind:class="selected == 4 ? 'h-max animate-[show-transition_0.5s_ease-in-out]' : 'max-h-0 opacity-0'" id="style-2">
                            <div class="py-6 px-8">
                                <p class="text-base leading-7 text-[#F8E7CF] font-normal">lala Leather is leather goods and apparel brand with a love for adventure and a dedication to choosing a simpler way of living. We honor the lost craft of learning a new trade and hard work earned with your hands. That’s why we aim to provide men and women a brand that adds quality to your everyday experiences.. </p>
                            </div>
                        </div>
                    </li>
                    <li class="relative">
                        <button type="button" class="w-full px-8 py-4 text-left rounded bg-[#f8e7cf] bg-opacity-10" @click="selected !== 5 ? selected = 5 : selected = null" style="box-shadow: 0px 1px 2px rgba(58, 58, 68, 0.24), 0px 2px 4px rgba(90, 91, 106, 0.24);">
                            <div class="flex items-center justify-between">
                              <span class="text-base text-[#F8E7CF] font-normal">All You Need to Know About LalaLeather and its production</span>
                              <i class="fa-solid fa-chevron-down transition-all duration-200 ease-linear text-[#301200]" x-bind:class="selected == 5 ? 'rotate-180 ' : ''" ></i>
                          </div>
                        </button>
                        <div class="relative overflow-auto bg-[#f8e7cf] bg-opacity-10 rounded my-4 transition-all duration-300 ease-in   " x-bind:class="selected == 5 ? 'h-max animate-[show-transition_0.5s_ease-in-out]' : 'max-h-0 opacity-0'" id="style-2">
                            <div class="py-6 px-8">
                                <p class="text-base leading-7 text-[#F8E7CF] font-normal">lala Leather is leather goods and apparel brand with a love for adventure and a dedication to choosing a simpler way of living. We honor the lost craft of learning a new trade and hard work earned with your hands. That’s why we aim to provide men and women a brand that adds quality to your everyday experiences.. </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Faq Section -->


<!-- Related products Slider -->
<section>
    <div class="container mt-16 2xl:max-w-[1650px] mx-auto px-4">
        <div class="text-center">
            <h2 class="text-[#F8E7CF] text-4xl font-medium uppercase">related products from  <span class="font-bold text-5xl">our shop</span></h2>
        </div>
        <!-- sliderv-1 -->
        <div>
            <div class="flex justify-end items-center mt-14">
                <div class="flex justify-start items-center gap-4 sm:mr-10">
                    <button class="w-11 h-11 rounded-full border-[3px] ourshopprev border-[#752D00] text-[#752D00] flex justify-center items-center font-extrabold text-lg ">
                        <i class="fa-solid fa-arrow-left"></i>
                    </button>
                    <button class="w-11 h-11 rounded-full border-[3px] ourshopnext border-[#752D00] text-[#752D00] flex justify-center items-center font-extrabold text-lg ">
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </div>
            <div class="swiper our-shop mt-6">
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
        <!-- sliderv-1 -->

        <!-- sliderv-2 -->
        <div>
            <div class="flex justify-start items-center mt-14">
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
</section>
<!-- Related products Slider -->


<!-- Blog Section -->
<section>
    <div class="container py-32  2xl:max-w-[1650px] mx-auto px-4 bg-no-repeat bg-contain bg-left" style="background-image: url(./images/get-in-touch.png); background-size: 70%;">
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


@endsection
