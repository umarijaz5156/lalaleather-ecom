<div>

    <!-- Hero Section -->
    <section class="mb-20">
        <div class="container lg:max-w-screen-2xl mx-auto px-2">
            <div>
                @if (session()->has('message'))
                    <x-alerts.success :success="session('message')" />
                @endif
            </div>
            <div class="grid w-full">
                <div
                    class="relative h-[750px] before:absolute before:content-[' '] before:top-0 before:left-0 before:right-0 before:bottom-0 before:bg-black before:bg-opacity-50 before:rounded-2xl">
                    <div class="w-full rounded-2xl h-full bg-no-repeat bg-cover bg-center"
                        style="background-image: url(./images/get-in-touch.png);"></div>
                    <div
                        class="absolute top-[5%] lg:top-[50%] translate-x-[-50%] left-[50%] lg:translate-y-[-50%] text-center w-[80%] lg:w-[60%]">
                        <div class="text-center">
                            <h2 class="text-[#F8E7CF] my-8 text-4xl font-medium uppercase">get in touch<span
                                    class="font-bold ml-3 text-5xl">with us</span></h2>
                            <!-- <p class="text-sm sm:text-lg text-white my-8">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia <br class="sm:block hidden"> consequat duis enim velit mollit.</p> -->
                        </div>
                        <div>
                            <form class="space-y-5 text-left">
                                <div class="grid sm:grid-cols-2 gap-5 sm:gap-10">
                                    <div>
                                        <input type="text" id="name" wire:model="name" maxlength="255"
                                            class="bg-white border border-[#D9D9D9] text-sm text-white bg-opacity-30 rounded-lg border-transparent focus:ring-white focus:border-white placeholder:text-white  block w-full px-2.5 py-3"
                                            placeholder="Your Name" required>
                                        @error('name')
                                            <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div>
                                        <input type="text" id="number" wire:model="phone"
                                            class="bg-white border border-[#D9D9D9] text-sm text-white bg-opacity-30 rounded-lg border-transparent focus:ring-white focus:border-white placeholder:text-white  block w-full px-2.5 py-3"
                                            placeholder="Your Phone Number" required>
                                        @error('phone')
                                            <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div>
                                        <input type="email" id="email" wire:model="email"
                                            class="bg-white border border-[#D9D9D9] text-sm text-white bg-opacity-30 rounded-lg border-transparent focus:ring-white focus:border-white placeholder:text-white  block w-full px-2.5 py-3"
                                            placeholder="Your Email" required>
                                        @error('email')
                                            <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div>
                                    <textarea id="message" wire:model="message" rows="12"
                                        class="block p-2.5 w-full text-sm text-white bg-white bg-opacity-30 rounded-lg border border-transparent focus:ring-white focus:border-white placeholder:text-white"
                                        placeholder="Start typing here...."></textarea>
                                    @error('message')
                                        <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
                                    @enderror
                                </div>
                                <button wire:click.prevent="store()" type="button" wire:loading.attr="disabled"
                                    class="text-base rounded-lg px-8 py-3 font-semibold text-white bg-[#301200]">{{ $sending ? 'Sending...' : 'Submit' }}</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section -->

</div>
