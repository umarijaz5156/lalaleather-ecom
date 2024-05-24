<div>
    {{-- images --}}
    <div class="mt-12">
        <div class="flex justify-between items-center flex-wrap">
            <h1 class="text-[30px] font-light">Add Product Images</h1>
        </div>
        <div class="mt-7">
            <div class="showcase bg-white mb-4 w-full p-9 sm:px-[60px] sm:py-[50px] rounded-3xl border border-gray-200 drk:bg-gray-700 drk:border-gray-600"
                style="box-shadow: rgba(43, 75, 200, 0.2) 0px 7px 29px 0px;">
                <p class="text-[18px] font-medium">Images <span class="float-right"><button wire:click.prevent="addImage()"
                            class="cursor-pointer text-base border border-[#3959D6] px-6 py-3 rounded-full mr-3 bg-white text-[#2646C4]">
                            <i class="fa-regular fa-plus text-base mr-2"></i> Add More
                        </button></span></p>
                <p class="font-small text-gray-400">Recommened Dimension for an image are 800*800</p>
                <div class="img-container grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 mt-7 gap-x-4">
                    @foreach ($imageInputs as $imageCount => $imageInput)
                        <div
                            class=" {{ $imageCount }} mb-5 mt-5 md:mb-0 border-dashed border-[1px] border-[#2646C4] rounded-2xl pt-2">
                            <div class="flex items-center justify-between px-2">
                                <p class="font-small text-center text-gray-400">Image @if ($loop->index == 0)
                                        <span style="color:#ff0000">*</span>
                                    @endif
                                </p>
                                <span>
                                    @if ($loop->index != 0)
                                        <button wire:click.prevent="removeImage({{ $imageCount }})" type="button"
                                            class="text-white bg-red-500 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2 text-center inline-flex items-center mr-2 drk:bg-blue-600 drk:hover:bg-blue-700 drk:focus:ring-blue-800">
                                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="sr-only">Remove</span>
                                        </button>
                                    @endif
                                </span>

                            </div>
                            <x-form.upload-files style="width: 100%" wire:model="images.{{ $imageInput }}"
                                fileName="images[{{ $imageInput }}]" perview
                                allowFileTypes="['image/png','image/jpeg','image/jpg','image/gif','image/webp']"
                                :previous="$previousImages[$imageInput]['file_path'] ?? null
                                    ? $previousImages[$imageInput]['file_path']
                                    : null" />
                            {{-- error --}}
                            @error('images.' . $imageInput)
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    {{-- videos --}}
    <div class="mt-12">
        <div class="flex justify-between items-center flex-wrap">
            <h1 class="text-[30px] font-light">Add Product Videos</h1>
        </div>
        <div class="mt-7">
            <div class="showcase bg-white mb-4 w-full p-9 sm:px-[60px] sm:py-[50px] rounded-3xl border border-gray-200 drk:bg-gray-700 drk:border-gray-600"
                style="box-shadow: rgba(43, 75, 200, 0.2) 0px 7px 29px 0px;">
                <p class="text-[18px] font-medium">Videos (up to 5)</p>
                <p class="font-small text-gray-400">You can upload videos that are less than 200Mb.</p>

                <div class="img-container grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 mt-7 gap-x-4">


                    <div class="mb-5  md:mb-0 border-dashed border-[1px] border-[#2646C4] rounded-2xl pt-2">
                        <p class="font-small text-center text-gray-400"></p>
                        <x-form.upload-files wire:model="videos" perview allowFileTypes="['video/mp4',]"
                            type='portfolio' fileName="videos[]" :previous="$previousVideos[0]['file_path'] ?? null ? $previousVideos[0]['file_path'] : null" />
                        {{-- error --}}
                        @error('videos.0')
                            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                        @enderror

                    </div>
                    <div class="mb-5  md:mb-0 border-dashed border-[1px] border-[#2646C4] rounded-2xl pt-2">
                        <p class="font-small text-center text-gray-400"></p>
                        <x-form.upload-files wire:model="videos" type='portfolio' perview
                            allowFileTypes="['video/mp4',]" fileName="videos[]" :previous="$previousVideos[1]['file_path'] ?? null ? $previousVideos[1]['file_path'] : null" />
                        {{-- error --}}
                        @error('videos.1')
                            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="hidden lg:block border-dashed border-[1px] border-[#2646C4] rounded-2xl pt-2">
                        <p class="font-small text-center text-gray-400"></p>
                        <x-form.upload-files wire:model="videos" type='portfolio' perview
                            allowFileTypes="['video/mp4',]" fileName="videos[]" :previous="$previousVideos[2]['file_path'] ?? null ? $previousVideos[2]['file_path'] : null" />
                        {{-- error --}}
                        @error('videos.2')
                            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="hidden  lg:block border-dashed border-[1px] border-[#2646C4] rounded-2xl pt-2">
                        <p class="font-small text-center text-gray-400"></p>
                        <x-form.upload-files wire:model="videos" type='portfolio' perview
                            allowFileTypes="['video/mp4',]" fileName="videos[]" :previous="$previousVideos[3]['file_path'] ?? null ? $previousVideos[3]['file_path'] : null" />
                        {{-- error --}}
                        @error('videos.3')
                            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="hidden  lg:block border-dashed border-[1px] border-[#2646C4] rounded-2xl pt-2">
                        <p class="font-small text-center text-gray-400"></p>
                        <x-form.upload-files wire:model="videos" type='portfolio' perview
                            allowFileTypes="['video/mp4',]" fileName="videos[]" :previous="$previousVideos[4]['file_path'] ?? null ? $previousVideos[4]['file_path'] : null" />
                        {{-- error --}}
                        @error('videos.4')
                            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

    </div>
    {{-- Buttons  --}}
    <div class="text-right col-span-2">
        <a type="button" wire:click="previous"
            class="px-6 py-3 mt-6 mb-2 font-bold uppercase transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-blue-800 from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Previous</a>
        <button type="button" wire:click="submit()"
            class="px-6 py-3 mt-6 mb-2 font-bold text-white uppercase transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Submit</button>
    </div>
</div>
