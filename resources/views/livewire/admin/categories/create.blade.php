<div>
    {{-- <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border"> --}}
    @if ($updateMode)
        <div
            class="relative z-0 flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
            <form wire:submit.prevent='update' class="w-full px-6 py-6 mx-auto">

                <div class="mb-6">
                    <label for="title"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title:</label>
                    <input type="text" wire:model.debounce.200ms='title'
                        class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                        placeholder="Enter the Title" required>
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-6">
                    <x-form-group label="image" class="block mb-4 text-sm font-medium text-gray-900 dark:text-white">

                        <x-form-image wire:model="image" fileName="image" :previous="$previousImage" />

                        {{-- <x-file-pond class="form-control" wire:model="image" 
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required>
            
            </x-file-pond> --}}
                        {{-- <div class="left-area">
                    <a class="avatar" href="#"><img src="{{ asset('storage/post/'.$this->image) }}" alt="Profile Image"></a>
                </div> --}}
                        @error('image')
                            <div class="flex p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-gray-800 dark:text-red-400"
                                role="alert">
                                <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Info</span>
                                <div>
                                    <span class="font-medium">Danger alert!</span> {{ $message }}
                                </div>
                            </div>
                        @enderror
                    </x-form-group>
                </div>
                <div class="">
                    <div class="flex items-center h-5">
                        <label for="countries"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Parent
                            Category</label>
                        <select id="countries" wire:model="parent_id"
                            class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                            <option value="">None</option>
                            @if ($categories)
                                @foreach ($categories as $item)
                                    <?php $dash = ''; ?>
                                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                                    {{-- <option value="{{$item->id}}" >{{$title}}</option> --}}
                                    @if (count($item->subcategory))
                                        @include(
                                            'livewire.admin.categories.sub-category-list-option-for-update',
                                            ['subcategories' => $item->subcategory]
                                        )
                                    @endif
                                @endforeach
                            @endif

                        </select>
                    </div>
                </div>
                <button type="submit"
                    class="px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Update</button>
                <button type="button" wire:click="resetCreateForm"
                    class="px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-blue-800 from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Cancel</button>

            </form>
        </div>
    @else
        <div
            class="relative z-0 flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
            <form wire:submit.prevent='store' class="w-full px-6 py-6 mx-auto" id="myForm">
                <div class="mb-6">
                    <label for="title"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title:</label>
                    <input type="text" wire:model.debounce.200ms='title'
                        class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                        placeholder="Enter the Title" required>
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-6">
                    <x-form-group label="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">

                        <x-file-pond class="form-control" wire:model="image"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            required></x-file-pond>
                        @error('image')
                            <div class="flex p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-gray-800 dark:text-red-400"
                                role="alert">
                                <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Info</span>
                                <div>
                                    <span class="font-medium">Danger alert!</span> {{ $message }}
                                </div>
                            </div>
                        @enderror
                    </x-form-group>
                </div>
                <div class="">
                    <div class="flex items-center h-5">
                        <label for="countries"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Parent
                            Category</label>
                        <select id="countries" wire:model="parent_id"
                            class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                            <option value="">None</option>
                            @if ($categories)
                                @foreach ($categories as $category)
                                    <?php $dash = ''; ?>
                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                    @if (count($category->subcategory))
                                        @include('livewire.admin.categories.subCategoryList-option', [
                                            'subcategories' => $category->subcategory,
                                        ])
                                    @endif
                                @endforeach
                            @endif

                        </select>
                    </div>
                </div>
                <button type="submit"
                    class="px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Submit</button>
                <button type="button" wire:click="resetCreateForm"
                    class="px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-blue-800 from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Cancel</button>
            </form>
        </div>
    @endif

</div>
