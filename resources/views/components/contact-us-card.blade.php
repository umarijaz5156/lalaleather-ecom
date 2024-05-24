<section>
    <div class="container py-32 2xl:max-w-[1650px] mx-auto px-4 bg-no-repeat bg-contain bg-left"
        style="
      background-image: url(../images/get-in-touch.png);
      background-size: 70%;
    ">
        <div class="grid lg:grid-cols-2 place-items-center gap-20">
            <div class="space-y-7">
                <h2 class="text-white text-4xl font-medium uppercase">
                    {{ ___('get in touch') }} <span class="font-bold text-6xl">{{ ___('with us') }}</span>
                </h2>
                <p class="text-[#F8E7CF] text-base sm:text-lg font-normal leading-10 font-roboto">
                    {{___("lala Leather is leather goods and apparel brand with a love for
                    adventure and a dedication to choosing a simpler way of living. We
                    honor the lost craft of learning a new trade and hard work earned
                    with your hands. That’s why we aim to provide men and women a
                    brand that adds quality to your everyday experiences. lala Leather
                    is leather goods and apparel brand with a love for adventure and a
                    dedication to choosing a simpler way of living.")}}
                </p>
            </div>
            <div class="w-full">
                <form wire:submit.prevent="sendForm" class="space-y-5 text-left w-full">
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
        </div>
    </div>
</section>