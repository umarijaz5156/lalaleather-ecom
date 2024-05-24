<div>
    <section>
        <div class="container py-32 2xl:max-w-[1650px] mx-auto px-4 bg-no-repeat bg-cover bg-center"
            style="
              background-image: url(./images/get-in-touch.png);
              background-size: 70%;
            ">
            <div class="grid xl:grid-cols-2 place-items-start gap-20">
                <div class="space-y-7 w-full">
                    <h2 class="text-primary text-4xl font-medium uppercase">
                        gET A <span class="font-bold text-6xl">QUOTE</span>
                    </h2>
                    <form wire:submit.prevent="sendQuote" class="space-y-5 text-left w-full">
                        <div>
                            <input type="text" id="first_name" wire:model="name"
                                class="bg-[#503421] border text-sm text-[#F8E7CF] bg-opacity-30 rounded border-[#C65B1A] focus:ring-[#F8E7CF] focus:border-[#F8E7CF] placeholder:text-[#F8E7CF] block w-full px-2.5 py-4 font-roboto"
                                placeholder="User Name" required="" />
                            @error('name')
                                <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <input type="email" id="first_name" wire:model="email"
                                class="bg-[#503421] border text-sm text-[#F8E7CF] bg-opacity-30 rounded border-[#C65B1A] focus:ring-[#F8E7CF] focus:border-[#F8E7CF] placeholder:text-[#F8E7CF] block w-full px-2.5 py-4 font-roboto"
                                placeholder="Email" required="" />
                            @error('email')
                                <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <input type="tel" id="first_name" wire:model="phone"
                                class="bg-[#503421] border text-sm text-[#F8E7CF] bg-opacity-30 rounded border-[#C65B1A] focus:ring-[#F8E7CF] focus:border-[#F8E7CF] placeholder:text-[#F8E7CF] block w-full px-2.5 py-4 font-roboto"
                                placeholder="Contact Number" required="" />
                            @error('phone')
                                <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <textarea id="message" rows="8" wire:model="message"
                                class="bg-[#503421] border text-sm text-[#F8E7CF] bg-opacity-30 rounded border-[#C65B1A] focus:ring-[#F8E7CF] focus:border-[#F8E7CF] placeholder:text-[#F8E7CF] block w-full px-2.5 py-4 font-roboto"
                                placeholder="Start typing here...."></textarea>
                            @error('message')
                                <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit"
                            class="text-base rounded px-8 py-3 text-primary bg-transparent hover:bg-[#C65B1A] font-normal uppercase border border-[#C65B1A]">
                            Submit
                        </button>
                    </form>
                </div>
                <div class="w-full space-y-7">
                    <h2 class="text-primary text-4xl font-medium uppercase">
                        POPULAR <span class="font-bold text-6xl">QUESTIONS</span>
                    </h2>
                    <div class="" x-data="{ selected: null }">
                        <ul class="shadow-box">
                            <li class="relative">
                                <button type="button"
                                    class="w-full px-8 py-4 text-left rounded bg-[#f8e7cf] bg-opacity-10"
                                    @click="selected !== 1 ? selected = 1 : selected = null"
                                    style="
                          box-shadow: 0px 1px 2px rgba(58, 58, 68, 0.24),
                            0px 2px 4px rgba(90, 91, 106, 0.24);
                        ">
                                    <div class="flex items-center justify-between">
                                        <span class="text-[#F8E7CF] font-normal uppercase text-2xl">All You Need to Know
                                            About LALALeather
                                            ?</span>
                                        <i class="fa-solid fa-chevron-down transition-all duration-200 ease-linear text-primary"
                                            x-bind:class="selected == 1 ? 'rotate-180 ' : ''"></i>
                                    </div>
                                </button>
                                <div class="relative overflow-auto bg-[#f8e7cf] bg-opacity-10 rounded my-4 transition-all duration-300 ease-linear"
                                    x-bind:class="selected == 1 ? 'h-max animate-[show-transition_0.5s_ease-in-out]' :
                                        'max-h-0 opacity-0'"
                                    id="style-2">
                                    <div class="py-6 px-8">
                                        <p class="text-base leading-7 text-[#F8E7CF] font-normal">
                                            lala Leather is leather goods and apparel brand with a
                                            love for adventure and a dedication to choosing a
                                            simpler way of living. We honor the lost craft of
                                            learning a new trade and hard work earned with your
                                            hands. That’s why we aim to provide men and women a
                                            brand that adds quality to your everyday experiences..
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="relative">
                                <button type="button"
                                    class="w-full px-8 py-4 text-left rounded bg-[#f8e7cf] bg-opacity-10"
                                    @click="selected !== 2 ? selected = 2 : selected = null"
                                    style="
                          box-shadow: 0px 1px 2px rgba(58, 58, 68, 0.24),
                            0px 2px 4px rgba(90, 91, 106, 0.24);
                        ">
                                    <div class="flex items-center justify-between">
                                        <span class="text-[#F8E7CF] font-normal uppercase text-2xl">hOW DOES IT WORK
                                            ?</span>
                                        <i class="fa-solid fa-chevron-down transition-all duration-200 ease-linear text-primary"
                                            x-bind:class="selected == 2 ? 'rotate-180 ' : ''"></i>
                                    </div>
                                </button>
                                <div class="relative overflow-auto bg-[#f8e7cf] bg-opacity-10 rounded my-4 transition-all duration-300 ease-linear"
                                    x-bind:class="selected == 2 ? 'h-max animate-[show-transition_0.5s_ease-in-out]' :
                                        'max-h-0 opacity-0'"
                                    id="style-2">
                                    <div class="py-6 px-8">
                                        <p class="text-base leading-7 text-[#F8E7CF] font-normal">
                                            lala Leather is leather goods and apparel brand with a
                                            love for adventure and a dedication to choosing a
                                            simpler way of living. We honor the lost craft of
                                            learning a new trade and hard work earned with your
                                            hands. That’s why we aim to provide men and women a
                                            brand that adds quality to your everyday experiences..
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="relative">
                                <button type="button"
                                    class="w-full px-8 py-4 text-left rounded bg-[#f8e7cf] bg-opacity-10"
                                    @click="selected !== 3 ? selected = 3 : selected = null"
                                    style="
                          box-shadow: 0px 1px 2px rgba(58, 58, 68, 0.24),
                            0px 2px 4px rgba(90, 91, 106, 0.24);
                        ">
                                    <div class="flex items-center justify-between">
                                        <span class="text-[#F8E7CF] font-normal uppercase text-2xl">hOW MUCH TIME IT
                                            WILL TAKE ?</span>
                                        <i class="fa-solid fa-chevron-down transition-all duration-200 ease-linear text-primary"
                                            x-bind:class="selected == 3 ? 'rotate-180 ' : ''"></i>
                                    </div>
                                </button>
                                <div class="relative overflow-auto bg-[#f8e7cf] bg-opacity-10 rounded my-4 transition-all duration-300 ease-linear"
                                    x-bind:class="selected == 3 ? 'h-max animate-[show-transition_0.5s_ease-in-out]' :
                                        'max-h-0 opacity-0'"
                                    id="style-2">
                                    <div class="py-6 px-8">
                                        <p class="text-base leading-7 text-[#F8E7CF] font-normal">
                                            lala Leather is leather goods and apparel brand with a
                                            love for adventure and a dedication to choosing a
                                            simpler way of living. We honor the lost craft of
                                            learning a new trade and hard work earned with your
                                            hands. That’s why we aim to provide men and women a
                                            brand that adds quality to your everyday experiences..
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="relative">
                                <button type="button"
                                    class="w-full px-8 py-4 text-left rounded bg-[#f8e7cf] bg-opacity-10"
                                    @click="selected !== 4 ? selected = 4 : selected = null"
                                    style="
                          box-shadow: 0px 1px 2px rgba(58, 58, 68, 0.24),
                            0px 2px 4px rgba(90, 91, 106, 0.24);
                        ">
                                    <div class="flex items-center justify-between">
                                        <span class="text-[#F8E7CF] font-normal uppercase text-2xl">hOW MUCH TIME IT
                                            WILL TAKE ?</span>
                                        <i class="fa-solid fa-chevron-down transition-all duration-200 ease-linear text-primary"
                                            x-bind:class="selected == 4 ? 'rotate-180 ' : ''"></i>
                                    </div>
                                </button>
                                <div class="relative overflow-auto bg-[#f8e7cf] bg-opacity-10 rounded my-4 transition-all duration-300 ease-linear"
                                    x-bind:class="selected == 4 ? 'h-max animate-[show-transition_0.5s_ease-in-out]' :
                                        'max-h-0 opacity-0'"
                                    id="style-2">
                                    <div class="py-6 px-8">
                                        <p class="text-base leading-7 text-[#F8E7CF] font-normal">
                                            lala Leather is leather goods and apparel brand with a
                                            love for adventure and a dedication to choosing a
                                            simpler way of living. We honor the lost craft of
                                            learning a new trade and hard work earned with your
                                            hands. That’s why we aim to provide men and women a
                                            brand that adds quality to your everyday experiences..
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="relative">
                                <button type="button"
                                    class="w-full px-8 py-4 text-left rounded bg-[#f8e7cf] bg-opacity-10"
                                    @click="selected !== 5 ? selected = 5 : selected = null"
                                    style="
                          box-shadow: 0px 1px 2px rgba(58, 58, 68, 0.24),
                            0px 2px 4px rgba(90, 91, 106, 0.24);
                        ">
                                    <div class="flex items-center justify-between">
                                        <span class="text-[#F8E7CF] font-normal uppercase text-2xl">hOW DOES IT WORK
                                            ?</span>
                                        <i class="fa-solid fa-chevron-down transition-all duration-200 ease-linear text-primary"
                                            x-bind:class="selected == 5 ? 'rotate-180 ' : ''"></i>
                                    </div>
                                </button>
                                <div class="relative overflow-auto bg-[#f8e7cf] bg-opacity-10 rounded my-4 transition-all duration-300 ease-linear"
                                    x-bind:class="selected == 5 ? 'h-max animate-[show-transition_0.5s_ease-in-out]' :
                                        'max-h-0 opacity-0'"
                                    id="style-2">
                                    <div class="py-6 px-8">
                                        <p class="text-base leading-7 text-[#F8E7CF] font-normal">
                                            lala Leather is leather goods and apparel brand with a
                                            love for adventure and a dedication to choosing a
                                            simpler way of living. We honor the lost craft of
                                            learning a new trade and hard work earned with your
                                            hands. That’s why we aim to provide men and women a
                                            brand that adds quality to your everyday experiences..
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</div>
