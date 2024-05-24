@extends('welcome')

@section('content')
 
 <!-- Hero Section -->
 <section class="sm:min-h-[50vh] lg:min-h-[86vh] flex items-center justify-end bg-cover bg-center relative" style="background-image: url(./images/labeling-bg.png);">
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
<!-- Icons Section -->


<!-- About Lala Leather -->
<section class="my-20 sm:my-40 " data-aos="fade-up">
    <div class="container 2xl:max-w-screen-2xl mx-auto px-4 h-full">
        <div class="relative">
            <img class="absolute hidden xl:block top-[-40px] right-28 w-[650px]" src="./images/labeling-about-bg.png" alt="">
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


<!-- Custom Products -->
<section class="mt-0">
    <h1 class="text-center  text-4xl lg:text-5xl pb-16 text-[#F8E7CF]" style="text-transform: uppercase;font-family: poppins !important;">our <span class="text-5xl lg:text-6xl font-semibold">Custom products</span></h1>
    <div class="container xl:max-w-screen-2xl mx-auto ">
        <div class="grid px-7 sm:px-10 lg:px-16 gap-20  grid-cols-1 sm:grid-cols-2 xl:grid-cols-3">
            <div class="flex justify-center  grid-check-1 gap-[5rem] md:gap-[10rem] 2xl:gap-[17.875rem] flex-col">
                <div class="flex text-[#F8E7CF] flex-col">
                    <div>
                        <img class="w-full" src="./images/private-labeling-products.png" alt="">
                    </div>
                    <div style="box-shadow: 0px 4px 40px 0px #752D004D;" class="flex border py-8 md:py-14 border-[#C65B1A] gap-[1rem] lg:mt-[-6rem] 2xl:mt-[-7.5rem] mt-[-4.2rem] px-[1rem] mx-[1rem] lg:mx-[1.5rem] lg:px-[1.5rem] xl:mx-[0.9rem] 2xl:mx-[1.3rem] 2xl:px-[2rem]  bg-[#301200] flex-col">
                        <h2 class="text-2xl md:text-xl lg:text-2xl 2xl:text-3xl text-center">BLAZER JACKETS</h2>
                        <div class="flex gap-[5.1px] mt-6 border-[#C65B1A] justify-center">
                            <hr class="w-14 border-[#C65B1A]  border-[1px]">
                            <hr class="w-2 border-[1px] border-[#C65B1A] ">
                        </div>
                        <p class="text-[#F8E7CF] mt-6 lg:mt-8 2xl:mt-14 text-md lg:text-lg 2xl:text-xl text-center">lala Leather is leather goods and apparel brand with a
                            love
                            for adventure and a dedication.</p>
                    </div>
                </div>
                <div class="flex text-[#F8E7CF] flex-col">
                    <div><img class="w-full" src="./images/private-labeling-products.png" alt=""></div>
                    <div style="box-shadow: 0px 4px 40px 0px #752D004D;"
                        class="flex border py-8 md:py-14 border-[#C65B1A] gap-[1rem] lg:mt-[-6rem] 2xl:mt-[-7.5rem] mt-[-4.2rem] px-[1rem] mx-[1rem] lg:mx-[1.5rem] lg:px-[1.5rem] xl:mx-[0.9rem] 2xl:mx-[1.3rem] 2xl:px-[2rem]  bg-[#301200] flex-col">
                        <h2 class="text-2xl md:text-xl lg:text-2xl 2xl:text-3xl text-center">BLAZER JACKETS</h2>
                        <div class="flex gap-[5.1px] mt-6 border-[#C65B1A] justify-center">
                            <hr class="w-14 border-[#C65B1A]  border-[1px]">
                            <hr class="w-2 border-[1px] border-[#C65B1A] ">
                        </div>
                        <p class="text-[#F8E7CF] mt-6 lg:mt-8 2xl:mt-14 text-md lg:text-lg 2xl:text-xl text-center">lala Leather is leather goods and apparel brand with a
                            love
                            for adventure and a dedication.</p>
                    </div>
                </div>
            </div>
            <div class="grid gap-[5rem] md:gap-[3.3125rem] grid-check-2 grid-cols-1 xl:grid-cols-1">
                    <div class="flex text-[#F8E7CF] flex-col">
                        <div><img class="w-full" src="./images/private-labeling-products.png" alt=""></div>
                        <div style="box-shadow: 0px 4px 40px 0px #752D004D;"
                            class="flex border py-8 md:py-14 border-[#C65B1A] gap-[1rem] lg:mt-[-6rem] 2xl:mt-[-7.5rem] mt-[-4.2rem] px-[1rem] mx-[1rem] lg:mx-[1.5rem] lg:px-[1.5rem] xl:mx-[0.9rem] 2xl:mx-[1.3rem] 2xl:px-[2rem]  bg-[#301200] flex-col">
                            <h2 class="text-2xl md:text-xl lg:text-2xl 2xl:text-3xl text-center">BLAZER JACKETS</h2>
                            <div class="flex gap-[5.1px] mt-6 border-[#C65B1A] justify-center">
                                <hr class="w-14 border-[#C65B1A]  border-[1px]">
                                <hr class="w-2 border-[1px] border-[#C65B1A] ">
                            </div>
                            <p class="text-[#F8E7CF] mt-6 lg:mt-8 2xl:mt-14 text-md lg:text-lg 2xl:text-xl text-center">lala Leather is leather goods and apparel brand with a
                                love
                                for adventure and a dedication.</p>
                        </div>
                    </div>
                    <div class="flex text-[#F8E7CF] flex-col">
                        <div><img class="w-full" src="./images/private-labeling-products.png" alt=""></div>
                        <div style="box-shadow: 0px 4px 40px 0px #752D004D;"
                            class="flex border py-8 md:py-14 border-[#C65B1A] gap-[1rem] lg:mt-[-6rem] 2xl:mt-[-7.5rem] mt-[-4.2rem] px-[1rem] mx-[1rem] lg:mx-[1.5rem] lg:px-[1.5rem] xl:mx-[0.9rem] 2xl:mx-[1.3rem] 2xl:px-[2rem]  bg-[#301200] flex-col">
                            <h2 class="text-2xl md:text-xl lg:text-2xl 2xl:text-3xl text-center">BLAZER JACKETS</h2>
                            <div class="flex gap-[5.1px] mt-6 border-[#C65B1A] justify-center">
                                <hr class="w-14 border-[#C65B1A]  border-[1px]">
                                <hr class="w-2 border-[1px] border-[#C65B1A] ">
                            </div>
                            <p class="text-[#F8E7CF] mt-6 lg:mt-8 2xl:mt-14 text-md lg:text-lg 2xl:text-xl text-center">lala Leather is leather goods and apparel brand with a
                                love
                                for adventure and a dedication.</p>
                        </div>
                    </div>
                    <div class="flex text-[#F8E7CF] flex-col">
                        <div><img class="w-full" src="./images/private-labeling-products.png" alt=""></div>
                        <div style="box-shadow: 0px 4px 40px 0px #752D004D;"
                            class="flex border py-8 md:py-14 border-[#C65B1A] gap-[1rem] lg:mt-[-6rem] 2xl:mt-[-7.5rem] mt-[-4.2rem] px-[1rem] mx-[1rem] lg:mx-[1.5rem] lg:px-[1.5rem] xl:mx-[0.9rem] 2xl:mx-[1.3rem] 2xl:px-[2rem]  bg-[#301200] flex-col">
                            <h2 class="text-2xl md:text-xl lg:text-2xl 2xl:text-3xl text-center">BLAZER JACKETS</h2>
                            <div class="flex gap-[5.1px] mt-6 border-[#C65B1A] justify-center">
                                <hr class="w-14 border-[#C65B1A]  border-[1px]">
                                <hr class="w-2 border-[1px] border-[#C65B1A] ">
                            </div>
                            <p class="text-[#F8E7CF] mt-6 lg:mt-8 2xl:mt-14 text-md lg:text-lg 2xl:text-xl text-center">lala Leather is leather goods and apparel brand with a
                                love
                                for adventure and a dedication.</p>
                        </div>
                    </div>
            </div>
            <div class="flex justify-center grid-check-3 gap-[5rem] 2xl:gap-[17.875rem] flex-col sm:flex-row xl:flex-col">
                    <div class="flex text-[#F8E7CF] mt-0 sm:mt-[-14rem] xl:mt-0 flex-col">
                            <div><img class="w-full" src="./images/private-labeling-products.png" alt=""></div>
                            <div style="box-shadow: 0px 4px 40px 0px #752D004D;"
                                class="flex border py-8 md:py-14 border-[#C65B1A] gap-[1rem] lg:mt-[-6rem] 2xl:mt-[-7.5rem] mt-[-4.2rem] px-[1rem] mx-[1rem] lg:mx-[1.5rem] lg:px-[1.5rem] xl:mx-[0.9rem] 2xl:mx-[1.3rem] 2xl:px-[2rem]  bg-[#301200] flex-col">
                                <h2 class="text-2xl md:text-xl lg:text-2xl 2xl:text-3xl text-center">BLAZER JACKETS</h2>
                                <div class="flex gap-[5.1px] mt-6 border-[#C65B1A] justify-center">
                                    <hr class="w-14 border-[#C65B1A]  border-[1px]">
                                    <hr class="w-2 border-[1px] border-[#C65B1A] ">
                                </div>
                                <p class="text-[#F8E7CF] mt-6 lg:mt-8 2xl:mt-14 text-md lg:text-lg 2xl:text-xl text-center">lala Leather is leather goods and apparel brand with a
                                    love
                                    for adventure and a dedication.</p>
                            </div>
                    </div>
                    <div class="flex text-[#F8E7CF] flex-col">
                        <div><img class="w-full" src="./images/private-labeling-products.png" alt=""></div>
                        <div style="box-shadow: 0px 4px 40px 0px #752D004D;"
                            class="flex border py-8 md:py-14 border-[#C65B1A] gap-[1rem] lg:mt-[-6rem] 2xl:mt-[-7.5rem] mt-[-4.2rem] px-[1rem] mx-[1rem] lg:mx-[1.5rem] lg:px-[1.5rem] xl:mx-[0.9rem] 2xl:mx-[1.3rem] 2xl:px-[2rem]  bg-[#301200] flex-col">
                            <h2 class="text-2xl md:text-xl lg:text-2xl 2xl:text-3xl text-center">BLAZER JACKETS</h2>
                            <div class="flex gap-[5.1px] mt-6 border-[#C65B1A] justify-center">
                                <hr class="w-14 border-[#C65B1A]  border-[1px]">
                                <hr class="w-2 border-[1px] border-[#C65B1A] ">
                            </div>
                            <p class="text-[#F8E7CF] mt-6 lg:mt-8 2xl:mt-14 text-md lg:text-lg 2xl:text-xl text-center">lala Leather is leather goods and apparel brand with a
                                love
                                for adventure and a dedication.</p>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>
<!-- Custom Products -->


<!-- Advabntages and disadvantages -->
<section class="bg-right-top bg-contain bg-no-repeat py-28 space-y-20" style="background-image: url(./images/faq.png); background-size: 800px ;">
    <div class="container mt-16  2xl:max-w-[1650px] mx-auto px-4">
        <div class="text-center">
            <h2 class="text-[#F8E7CF] text-4xl font-medium uppercase"> <span class="font-bold text-5xl">ADVANTAGES OF PRIVATE LABELING </span></h2>
            <p class="text-[#F8E7CF] text-base font-normal leading-8 mt-6">There are both advantages and disadvantages of private labeling for products that are <br class="sm:block hidden"> developed and sold by the company that produces them. Advantages of private labeling may <br class="sm:block hidden"> include the following:</p>
        </div>
        <div class="bg-[ #301200] border border-[#C65B1A] shadow-[0px_4px_40px_#752d004d] mt-10" x-data="{active:1}">
            <ul class="shadow-box text-[#F8E7CF]">
                <li class="relative">
                    <button type="button" class="w-full px-8 py-6 text-left" @click="active !== 1 ? active = 1 : active = null">
                        <div class="grid lg:grid-cols-3 gap-8 place-content-start">
                            <div>
                                <div class="flex justify-between items-center gap-6">
                                    <h2 class="text-[#F8E7CF] text-xl font-medium uppercase">LOYALTY</h2>
                                    <img class="lg:block hidden" src="./images/advantages-arrow.png" alt="">
                                    <div class="lg:hidden">
                                        <i class="fa-solid fa-chevron-down transition-all duration-200 ease-linear text-[#C65B1A] " x-bind:class="active == 1 ? 'rotate-180 ' : ''"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="relative lg:col-span-2 overflow-hidden transition-all max-h-0 lg:max-h-[50px] duration-700 " style="" x-ref="container1" x-bind:style="active == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                                <div class="lg:px-8 pb-6 relative">
                                    <i class="fa-solid fa-chevron-down transition-all duration-200 ease-linear text-[#C65B1A] absolute top-1 right-3 hidden lg:block " x-bind:class="active == 1 ? 'rotate-180 ' : ''"></i>
                                    <p>Private labeling allows brands to outsource product sourcing and manufacturing to a third party.  With private labeling, you apply the brand to the packaging only when it is time to sell the product. Although many consumers are unaware of the prevalence of this practice, it is common in today’s shopping environment. For instance, if you’ve been to Costco, you may be familiar with the Kirkland brand, which includes items ranging from clothes to food. Kirkland Signature generates about one-quarter of Costco Wholesale’s sales and is known as a private-label brand. Amazon also has private-label brands you might never have realized existed. Private labeling can also describe the practice of taking an ingredient or component supplied and produced by a secondary company and using it to benefit another brand’s product, often without explicit attribution, said Rob Terenzi, co-founder of Vega Coffee. </p>
                                </div>
                            </div>
                        </div>
                    </button>
                </li>
                <li class="relative">
                    <button type="button" class="w-full px-8 py-6 text-left" @click="active !== 2 ? active = 2 : active = null">
                        <div class="grid lg:grid-cols-3 gap-8 place-content-start">
                            <div>
                                <div class="flex justify-between items-center gap-6">
                                    <h2 class="text-[#F8E7CF] text-xl font-medium uppercase">HIGH MARGINS</h2>
                                    <img class="lg:block hidden" src="./images/advantages-arrow.png" alt="">
                                    <div class="lg:hidden">
                                        <i class="fa-solid fa-chevron-down transition-all duration-200 ease-linear text-[#C65B1A] " x-bind:class="active == 2 ? 'rotate-180 ' : ''"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="relative lg:col-span-2 overflow-hidden transition-all max-h-0 lg:max-h-[50px] duration-700 " style="" x-ref="container1" x-bind:style="active == 2 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                                <div class="lg:px-8 pb-6 relative">
                                    <i class="fa-solid fa-chevron-down transition-all duration-200 ease-linear text-[#C65B1A] absolute top-1 right-3 hidden lg:block " x-bind:class="active == 2 ? 'rotate-180 ' : ''"></i>
                                    <p>Private labeling allows brands to outsource product sourcing and manufacturing to a third party.  With private labeling, you apply the brand to the packaging only when it is time to sell the product. Although many consumers are unaware of the prevalence of this practice, it is common in today’s shopping environment. For instance, if you’ve been to Costco, you may be familiar with the Kirkland brand, which includes items ranging from clothes to food. Kirkland Signature generates about one-quarter of Costco Wholesale’s sales and is known as a private-label brand. Amazon also has private-label brands you might never have realized existed. Private labeling can also describe the practice of taking an ingredient or component supplied and produced by a secondary company and using it to benefit another brand’s product, often without explicit attribution, said Rob Terenzi, co-founder of Vega Coffee. </p>
                                </div>
                            </div>
                        </div>
                    </button>
                </li>
                <li class="relative">
                    <button type="button" class="w-full px-8 py-6 text-left" @click="active !== 3 ? active = 3 : active = null">
                        <div class="grid lg:grid-cols-3 gap-8 place-content-start">
                            <div>
                                <div class="flex justify-between items-center gap-6">
                                    <h2 class="text-[#F8E7CF] text-xl font-medium uppercase">WHOLESALE INCOME</h2>
                                    <img class="lg:block hidden" src="./images/advantages-arrow.png" alt="">
                                    <div class="lg:hidden">
                                        <i class="fa-solid fa-chevron-down transition-all duration-200 ease-linear text-[#C65B1A] " x-bind:class="active == 3 ? 'rotate-180 ' : ''"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="relative lg:col-span-2 overflow-hidden transition-all max-h-0 lg:max-h-[50px] duration-700 " style="" x-ref="container1" x-bind:style="active == 3 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                                <div class="lg:px-8 pb-6 relative">
                                    <i class="fa-solid fa-chevron-down transition-all duration-200 ease-linear text-[#C65B1A] absolute top-1 right-3 hidden lg:block " x-bind:class="active == 3 ? 'rotate-180 ' : ''"></i>
                                    <p>Private labeling allows brands to outsource product sourcing and manufacturing to a third party.  With private labeling, you apply the brand to the packaging only when it is time to sell the product. Although many consumers are unaware of the prevalence of this practice, it is common in today’s shopping environment. For instance, if you’ve been to Costco, you may be familiar with the Kirkland brand, which includes items ranging from clothes to food. Kirkland Signature generates about one-quarter of Costco Wholesale’s sales and is known as a private-label brand. Amazon also has private-label brands you might never have realized existed. Private labeling can also describe the practice of taking an ingredient or component supplied and produced by a secondary company and using it to benefit another brand’s product, often without explicit attribution, said Rob Terenzi, co-founder of Vega Coffee. </p>
                                </div>
                            </div>
                        </div>
                    </button>
                </li>
                <li class="relative">
                    <button type="button" class="w-full px-8 py-6 text-left" @click="active !== 4 ? active = 4 : active = null">
                        <div class="grid lg:grid-cols-3 gap-8 place-content-start">
                            <div>
                                <div class="flex justify-between items-center gap-6">
                                    <h2 class="text-[#F8E7CF] text-xl font-medium uppercase">LOYALTY</h2>
                                    <img class="lg:block hidden" src="./images/advantages-arrow.png" alt="">
                                    <div class="lg:hidden">
                                        <i class="fa-solid fa-chevron-down transition-all duration-200 ease-linear text-[#C65B1A] " x-bind:class="active == 4 ? 'rotate-180 ' : ''"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="relative lg:col-span-2 overflow-hidden transition-all max-h-0 lg:max-h-[50px] duration-700 " style="" x-ref="container1" x-bind:style="active == 4 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                                <div class="lg:px-8 pb-6 relative">
                                    <i class="fa-solid fa-chevron-down transition-all duration-200 ease-linear text-[#C65B1A] absolute top-1 right-3 hidden lg:block " x-bind:class="active == 4 ? 'rotate-180 ' : ''"></i>
                                    <p>Private labeling allows brands to outsource product sourcing and manufacturing to a third party.  With private labeling, you apply the brand to the packaging only when it is time to sell the product. Although many consumers are unaware of the prevalence of this practice, it is common in today’s shopping environment. For instance, if you’ve been to Costco, you may be familiar with the Kirkland brand, which includes items ranging from clothes to food. Kirkland Signature generates about one-quarter of Costco Wholesale’s sales and is known as a private-label brand. Amazon also has private-label brands you might never have realized existed. Private labeling can also describe the practice of taking an ingredient or component supplied and produced by a secondary company and using it to benefit another brand’s product, often without explicit attribution, said Rob Terenzi, co-founder of Vega Coffee. </p>
                                </div>
                            </div>
                        </div>
                    </button>
                </li>
            </ul>
        </div>
    </div>
    <div class="container mt-16  2xl:max-w-[1650px] mx-auto px-4">
        <div class="text-center">
            <h2 class="text-[#F8E7CF] text-4xl font-medium uppercase"> <span class="font-bold text-5xl">DISADVANTAGES OF PRIVATE LABELING </span></h2>
            <p class="text-[#F8E7CF] text-base font-normal leading-8 mt-6">There are some disadvantages of private labeling, but by planning ahead, you can usually avoid <br class="sm:block hidden"> them. Advantages of private labeling may include the following:</p>
        </div>
        <div class="bg-[ #301200] border border-[#C65B1A] shadow-[0px_4px_40px_#752d004d] mt-10" x-data="{active:1}">
            <ul class="shadow-box text-[#F8E7CF]">
                <li class="relative">
                    <button type="button" class="w-full px-8 py-6 text-left" @click="active !== 1 ? active = 1 : active = null">
                        <div class="grid lg:grid-cols-3 gap-8 place-content-start">
                            <div>
                                <div class="flex justify-between items-center gap-6">
                                    <h2 class="text-[#F8E7CF] text-xl font-medium uppercase">minimum orders</h2>
                                    <img class="lg:block hidden" src="./images/advantages-arrow.png" alt="">
                                    <div class="lg:hidden">
                                        <i class="fa-solid fa-chevron-down transition-all duration-200 ease-linear text-[#C65B1A] " x-bind:class="active == 1 ? 'rotate-180 ' : ''"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="relative lg:col-span-2 overflow-hidden transition-all max-h-0 lg:max-h-[50px] duration-700 " style="" x-ref="container1" x-bind:style="active == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                                <div class="lg:px-8 pb-6 relative">
                                    <i class="fa-solid fa-chevron-down transition-all duration-200 ease-linear text-[#C65B1A] absolute top-1 right-3 hidden lg:block " x-bind:class="active == 1 ? 'rotate-180 ' : ''"></i>
                                    <p>Private labeling allows brands to outsource product sourcing and manufacturing to a third party.  With private labeling, you apply the brand to the packaging only when it is time to sell the product. Although many consumers are unaware of the prevalence of this practice, it is common in today’s shopping environment. For instance, if you’ve been to Costco, you may be familiar with the Kirkland brand, which includes items ranging from clothes to food. Kirkland Signature generates about one-quarter of Costco Wholesale’s sales and is known as a private-label brand. Amazon also has private-label brands you might never have realized existed. Private labeling can also describe the practice of taking an ingredient or component supplied and produced by a secondary company and using it to benefit another brand’s product, often without explicit attribution, said Rob Terenzi, co-founder of Vega Coffee. </p>
                                </div>
                            </div>
                        </div>
                    </button>
                </li>
                <li class="relative">
                    <button type="button" class="w-full px-8 py-6 text-left" @click="active !== 2 ? active = 2 : active = null">
                        <div class="grid lg:grid-cols-3 gap-8 place-content-start">
                            <div>
                                <div class="flex justify-between items-center gap-6">
                                    <h2 class="text-[#F8E7CF] text-xl font-medium uppercase">Dead inventory</h2>
                                    <img class="lg:block hidden" src="./images/advantages-arrow.png" alt="">
                                    <div class="lg:hidden">
                                        <i class="fa-solid fa-chevron-down transition-all duration-200 ease-linear text-[#C65B1A] " x-bind:class="active == 2 ? 'rotate-180 ' : ''"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="relative lg:col-span-2 overflow-hidden transition-all max-h-0 lg:max-h-[50px] duration-700 " style="" x-ref="container1" x-bind:style="active == 2 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                                <div class="lg:px-8 pb-6 relative">
                                    <i class="fa-solid fa-chevron-down transition-all duration-200 ease-linear text-[#C65B1A] absolute top-1 right-3 hidden lg:block " x-bind:class="active == 2 ? 'rotate-180 ' : ''"></i>
                                    <p>Private labeling allows brands to outsource product sourcing and manufacturing to a third party.  With private labeling, you apply the brand to the packaging only when it is time to sell the product. Although many consumers are unaware of the prevalence of this practice, it is common in today’s shopping environment. For instance, if you’ve been to Costco, you may be familiar with the Kirkland brand, which includes items ranging from clothes to food. Kirkland Signature generates about one-quarter of Costco Wholesale’s sales and is known as a private-label brand. Amazon also has private-label brands you might never have realized existed. Private labeling can also describe the practice of taking an ingredient or component supplied and produced by a secondary company and using it to benefit another brand’s product, often without explicit attribution, said Rob Terenzi, co-founder of Vega Coffee. </p>
                                </div>
                            </div>
                        </div>
                    </button>
                </li>
                <li class="relative">
                    <button type="button" class="w-full px-8 py-6 text-left" @click="active !== 3 ? active = 3 : active = null">
                        <div class="grid lg:grid-cols-3 gap-8 place-content-start">
                            <div>
                                <div class="flex justify-between items-center gap-6">
                                    <h2 class="text-[#F8E7CF] text-xl font-medium uppercase">Customer perception</h2>
                                    <img class="lg:block hidden" src="./images/advantages-arrow.png" alt="">
                                    <div class="lg:hidden">
                                        <i class="fa-solid fa-chevron-down transition-all duration-200 ease-linear text-[#C65B1A] " x-bind:class="active == 3 ? 'rotate-180 ' : ''"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="relative lg:col-span-2 overflow-hidden transition-all max-h-0 lg:max-h-[50px] duration-700 " style="" x-ref="container1" x-bind:style="active == 3 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                                <div class="lg:px-8 pb-6 relative">
                                    <i class="fa-solid fa-chevron-down transition-all duration-200 ease-linear text-[#C65B1A] absolute top-1 right-3 hidden lg:block " x-bind:class="active == 3 ? 'rotate-180 ' : ''"></i>
                                    <p>Private labeling allows brands to outsource product sourcing and manufacturing to a third party.  With private labeling, you apply the brand to the packaging only when it is time to sell the product. Although many consumers are unaware of the prevalence of this practice, it is common in today’s shopping environment. For instance, if you’ve been to Costco, you may be familiar with the Kirkland brand, which includes items ranging from clothes to food. Kirkland Signature generates about one-quarter of Costco Wholesale’s sales and is known as a private-label brand. Amazon also has private-label brands you might never have realized existed. Private labeling can also describe the practice of taking an ingredient or component supplied and produced by a secondary company and using it to benefit another brand’s product, often without explicit attribution, said Rob Terenzi, co-founder of Vega Coffee. </p>
                                </div>
                            </div>
                        </div>
                    </button>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- Advabntages and disadvantages -->


<!-- Services flexes -->
<section class="my-36" >
    <!-- <h4 class="text-3xl text-[#F8E7CF] py-10 lg:text-4xl gap-10">HAVE A LOOK ON <span class="text-4xl lg:text-5xl font-bold">OUR SERVICES</span></h4> -->
    <div class="container xl:max-w-[1650px] mx-auto px-4 sm:px-10">
       <div class="text-start mb-8"> 
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
<!-- Blog Section -->
@endsection
