<div>
    {{-- The Master doesn't talk, he acts. --}}
    <form wire:submit.prevent='store' class="w-full px-6 py-6 mx-auto" id="myForm">
        <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
            <h6 class="font-bold">
                {{ $this->updateMode == true ? 'Update' : 'Create' }} Promotion
            </h6>
        </div>
        <div
            class="relative z-0  min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border grid grid-cols-1 md:grid-cols-2 gap-8  px-6 py-6 mx-auto">
            <div class="mb-6">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 ">Title:</label>
                <input type="text" wire:model.debounce.200ms='title'
                    class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                    placeholder="Enter the Title">
                @error('title')
                    <x-alerts.input-error for="title" />
                @enderror
            </div>
            {{-- discount --}}
            <div class="mb-6 relative">
                <label for="discount" class="block mb-2 text-sm font-medium text-gray-900 ">Discount (%):</label>
                <div class="relative">
                    <input type="text" wire:model.debounce.200ms='discount'
                        class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                        placeholder="Enter the Discount" pattern="^(100|\d{1,2})$"
                        title="Please enter a number between 0 and 100">
                    <span class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-500">%</span>
                </div>
                @error('discount')
                    <x-alerts.input-error for="discount" />
                @enderror
            </div>


            {{-- startDate --}}
            <div class="mb-6">
                <label for="startDate" class="block mb-2 text-sm font-medium text-gray-900 ">Start
                    Date:</label>
                <x-form.date-picker wire:model.debounce.200ms="startDate" id="start-Date-date-picker' }}"
                    autocomplete="off"
                    class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" />

                @error('startDate')
                    <x-alerts.input-error for="startDate" />
                @enderror
            </div>
            {{-- endDate --}}
            <div class="mb-6">
                <label for="endDate" class="block mb-2 text-sm font-medium text-gray-900 ">End
                    Date:</label>
                <x-form.date-picker wire:model.debounce.200ms="endDate" id="end-Date-date-picker' }}" autocomplete="off"
                    class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" />

                @error('endDate')
                    <x-alerts.input-error for="endDate" />
                @enderror
            </div>
            <div class="grid grid-flow-row-dense grid-cols-3 ">
                <div class="col-span-2"><span class="ms-3  text-lg font-medium text-gray-900 ">Active</span>
                </div>
                <div>
                    <label class="relative inline-flex items-center mb-5 cursor-pointer">
                        <input type="checkbox" name="active" wire:model="active" value="1" class="sr-only peer"
                            checked>
                        <div
                            class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-fuchsia-300  rounded-full peer  peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all  peer-checked:bg-fuchsia-600">
                        </div>
                    </label>
                </div>
                @error('active')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="grid grid-flow-row-dense grid-cols-3 ">
                <div class="col-span-2"><span class="ms-3  text-lg font-medium text-gray-900 ">Storewide</span>
                </div>
                <div>
                    <label class="relative inline-flex items-center mb-5 cursor-pointer">
                        <input type="checkbox" name="storewide" wire:model="storewide" value="1"
                            class="sr-only peer">
                        <div
                            class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-fuchsia-300  rounded-full peer  peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all  peer-checked:bg-fuchsia-600">
                        </div>
                    </label>
                </div>
                @error('storewide')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>



            {{-- description --}}
            <div class="mb-6 ">
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 ">Description:</label>
                <textarea wire:model.debounce.200ms='description'
                    class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow h-70"
                    placeholder="Enter the Description" rows="3"></textarea>

                @error('description')
                    <x-alerts.input-error for="description" />
                @enderror
            </div>
            {{-- banner --}}
            <div class="mb-6">
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 ">
                     Banner : <span class=" text-xs text-gray-500"> 
                        Upload images with 950-990px width and 220-260px height</span>
                </label>
                    <x-form.upload-files class="form-control" wire:model="banner" :previous="json_decode($this->banner)?->file_path ?? null" :fileData="$this->banner ?? null"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    </x-form.upload-files>
                    @error('banner')
                        <x-alerts.input-error for="banner" />
                    @enderror
            </div>

            <div class="text-right col-span-2">
                <a type="button" href="{{ route('admin.promotion') }}"
                    class="px-6 py-3 mt-6 mb-2 font-bold text-white uppercase transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-blue-800 from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Cancel</a>
                <button type="submit"
                    class="px-6 py-3 mt-6 mb-2 font-bold text-white uppercase transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Submit</button>
            </div>

        </div>
    </form>
</div>


</div>
