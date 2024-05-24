<div>
    <style>
        /* Custom CSS for nested optgroup indentation */
        .nested-optgroup {
            margin-left: 20px; /* Adjust indentation as needed */
        }
    </style>
    <h2 id="accordion-collapse-heading-3">
        <button type="button"
            class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800"
            data-accordion-target="#accordion-collapse-manage-content" aria-expanded="false"
            aria-controls="accordion-collapse-manage-content">
            <span>Config Homepage</span>
            <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>
    </h2>
    <div wire:ignore.self id="accordion-collapse-manage-content" class="hidden"
        aria-labelledby="accordion-collapse-heading-3">
        <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">

            <form wire:submit.prevent="updateHomepageSettings" enctype="multipart/form-data">
                {{-- Criteria Section for grid 1 --}}
                <div class="">
                    <div class="flex justify-between">
                        <h1 class="mb-6">Criteria For Grid (1)</h1>

                        <div x-data="{ rcmndGigStatus: {{ isset($homepageSettings['grid1']['isEnabled']) && $homepageSettings['grid1']['isEnabled'] == 1 ? 'true' : 'false' }} }" class="">
                            <label for="checked-toggle1" class="inline-flex relative items-center cursor-pointer">
                                <input x-model="rcmndGigStatus" wire:model="homepageSettings.grid1.isEnabled" type="checkbox"
                                    value="" id="checked-toggle1" class="sr-only peer">
                                <div
                                    class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                                </div>
                                <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Enable
                                    Setting</span>
                            </label>
                        </div>
                    </div>

                    <div class="grid gap-3 mb-6 md:grid-cols-2 lg:grid-cols-3">
                        <div class="">
                            <x-admin.form.label>Title</x-admin.form.label>

                            <x-admin.form.input wire:model.defer="homepageSettings.grid1.title" />

                            @error('homepageSettings.grid1.title')
                                <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="">
                            <x-admin.form.label>Description</x-admin.form.label>

                            <x-admin.form.textarea wire:model.defer="homepageSettings.grid1.description"
                                placeholder="Enter description"></x-admin.form.textarea>

                            @error('homepageSettings.grid1.description')
                                <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="">
                            <x-admin.form.label>Category</x-admin.form.label>

                            <x-admin.form.select wire:model.defer="homepageSettings.grid1.categoryId">
                                <option value="">Select Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                    @foreach ($category->children as $child)
                                        <option value="{{ $child->id }}" class="ml-4">- {{ $child->title }}</option>
                                        @foreach ($child->children as $subchild)
                                            <option value="{{ $subchild->id }}" class="ml-8">-- {{ $subchild->title }}</option>
                                        @endforeach
                                    @endforeach
                                @endforeach

                            </x-admin.form.select>
                            @error('homepageSettings.grid1.categoryId')
                                <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                {{-- Criteria Section for grid 2 --}}
                <div class="">
                    <div class="flex justify-between">
                        <h1 class="mb-6">Criteria For Grid (2)</h1>

                        <div x-data="{ rcmndGigStatus: {{ isset($homepageSettings['grid2']['isEnabled']) && $homepageSettings['grid2']['isEnabled'] ? 'true' : 'false' }} }" class="">
                            <label for="checked-toggle2" class="inline-flex relative items-center cursor-pointer">
                                <input x-model="rcmndGigStatus" wire:model="homepageSettings.grid2.isEnabled" type="checkbox"
                                    value="" id="checked-toggle2" class="sr-only peer">
                                <div
                                    class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                                </div>
                                <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Enable
                                    Setting</span>
                            </label>
                        </div>
                    </div>

                    <div class="grid gap-3 mb-6 md:grid-cols-2 lg:grid-cols-3">
                        <div class="">
                            <x-admin.form.label>Title</x-admin.form.label>

                            <x-admin.form.input wire:model.defer="homepageSettings.grid2.title" />

                            @error('homepageSettings.grid2.title')
                                <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="">
                            <x-admin.form.label>Description</x-admin.form.label>

                            <x-admin.form.textarea wire:model.defer="homepageSettings.grid2.description"
                                placeholder="Enter description"></x-admin.form.textarea>

                            @error('homepageSettings.grid2.description')
                                <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="">
                            <x-admin.form.label>Category</x-admin.form.label>

                            <x-admin.form.select wire:model.defer="homepageSettings.grid2.categoryId">
                                <option value="">Select Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach

                            </x-admin.form.select>
                            @error('')
                                <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                {{-- Criteria Section for grid 3 --}}
                <div class="">
                    <div class="flex justify-between">
                        <h1 class="mb-6">Criteria For Grid (3)</h1>

                        <div x-data="{ rcmndGigStatus: {{ isset($homepageSettings['grid3']['isEnabled']) && $homepageSettings['grid3']['isEnabled'] == 1 ? 'true' : 'false' }} }" class="">
                            <label for="checked-toggle3" class="inline-flex relative items-center cursor-pointer">
                                <input x-model="rcmndGigStatus" wire:model="homepageSettings.grid3.isEnabled" type="checkbox"
                                    value="" id="checked-toggle3" class="sr-only peer">
                                <div
                                    class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                                </div>
                                <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Enable
                                    Setting</span>
                            </label>
                        </div>
                    </div>

                    <div class="grid gap-3 mb-6 md:grid-cols-2 lg:grid-cols-3">
                        <div class="">
                            <x-admin.form.label>Title</x-admin.form.label>

                            <x-admin.form.input wire:model.defer="homepageSettings.grid3.title" />

                            @error('')
                                <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="">
                            <x-admin.form.label>Description</x-admin.form.label>

                            <x-admin.form.textarea wire:model.defer="homepageSettings.grid3.description"
                                placeholder="Enter description"></x-admin.form.textarea>

                            @error('')
                                <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="">
                            <x-admin.form.label>Category</x-admin.form.label>

                            <x-admin.form.select wire:model="homepageSettings.grid3.categoryId">
                                <option value="">Select Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach

                            </x-admin.form.select>
                            @error('')
                                <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                {{-- Criteria Section for grid 4 --}}
                <div class="">
                    <div class="flex justify-between">
                        <h1 class="mb-6">Criteria For Grid (4)</h1>

                        <div x-data="{ rcmndGigStatus: {{ isset($homepageSettings['grid4']['isEnabled']) && $homepageSettings['grid4']['isEnabled'] ? 'true' : 'false' }} }" class="">
                            <label for="checked-toggle4" class="inline-flex relative items-center cursor-pointer">
                                <input x-model="rcmndGigStatus" wire:model="homepageSettings.grid4.isEnabled" type="checkbox"
                                    value="" id="checked-toggle4" class="sr-only peer">
                                <div
                                    class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                                </div>
                                <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Enable
                                    Setting</span>
                            </label>
                        </div>
                    </div>

                    <div class="grid gap-3 mb-6 md:grid-cols-2 lg:grid-cols-3">
                        <div class="">
                            <x-admin.form.label>Title</x-admin.form.label>

                            <x-admin.form.input wire:model.defer="homepageSettings.grid4.title" />

                            @error('homepageSettings.grid4.title')
                                <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="">
                            <x-admin.form.label>Description</x-admin.form.label>

                            <x-admin.form.textarea wire:model.defer="homepageSettings.grid4.description"
                                placeholder="Enter description"></x-admin.form.textarea>

                            @error('homepageSettings.grid4.description')
                                <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="">
                            <x-admin.form.label>Category</x-admin.form.label>

                            <x-admin.form.select wire:model="homepageSettings.grid4.categoryId">
                                <option value="">Select Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach

                            </x-admin.form.select>
                            @error('homepageSettings.grid4.categoryId')
                                <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                {{-- Criteria Section for grid 5 --}}
                <div class="">
                    <div class="flex justify-between">
                        <h1 class="mb-6">Criteria For Grid (5)</h1>

                        <div x-data="{ rcmndGigStatus: {{ isset($homepageSettings['grid5']['isEnabled']) && $homepageSettings['grid5']['isEnabled'] == 1 ? 'true' : 'false' }} }" class="">
                            <label for="checked-toggle5" class="inline-flex relative items-center cursor-pointer">
                                <input x-model="rcmndGigStatus" wire:model="homepageSettings.grid5.isEnabled" type="checkbox"
                                    value="" id="checked-toggle5" class="sr-only peer">
                                <div
                                    class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                                </div>
                                <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Enable
                                    Setting</span>
                            </label>
                        </div>
                    </div>

                    <div class="grid gap-3 mb-6 md:grid-cols-2 lg:grid-cols-3">
                        <div class="">
                            <x-admin.form.label>Title</x-admin.form.label>

                            <x-admin.form.input wire:model.defer="homepageSettings.grid5.title" />

                            @error('homepageSettings.grid5.title')
                                <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="">
                            <x-admin.form.label>Description</x-admin.form.label>

                            <x-admin.form.textarea wire:model.defer="homepageSettings.grid5.description"
                                placeholder="Enter description"></x-admin.form.textarea>

                            @error('homepageSettings.grid5.description')
                                <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="">
                            <x-admin.form.label>Category</x-admin.form.label>

                            <x-admin.form.select wire:model.defer="homepageSettings.grid5.categoryId">
                                <option value="">Select Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach

                            </x-admin.form.select>
                            @error('homepageSettings.grid5.categoryId')
                                <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <x-admin.button type="submit">Save</x-admin.button>
            </form>
        </div>
    </div>
</div>
