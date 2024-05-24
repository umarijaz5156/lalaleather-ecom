<div>
    {{-- <div class="flex flex-wrap -mx-3"> --}}
    <div class="flex-none w-full max-w-full px-3">
        <div>
            @if (session()->has('message'))
                <x-alerts.success :success="session('message')" />
            @endif
            {{-- error --}}
            @if (session()->has('error'))
                <x-alerts.error :error="session('error')" />
            @endif
        </div>
        <div
            class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">




            <div
                class="frelative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all shadow-none duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start">


                <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">

                    <button href="#" wire:click.prevent="createZone" type="button"
                    <button href="#" wire:click.prevent="createZone" type="button"
                        class="px-4 py-3 mb-2 ml-2 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg cursor-pointer xl-max:cursor-not-allowed xl-max:opacity-65 xl-max:pointer-events-none xl-max:bg-gradient-to-tl xl-max:from-purple-700 xl-max:to-pink-500 xl-max:text-white xl-max:border-0 hover:scale-102 hover:shadow-soft-xs active:opacity-85 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 border-fuchsia-500 bg-none text-fuchsia-500 hover:border-fuchsia-500"
                        type="button">
                        Add New Zone
                    </button>
                </div>
                <div class="items-center justify-end mt-2 mr-2 mb-6">
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only ">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 " fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                        <input type="search" id="default-search"
                            class="block w-full p-2 pl-8 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 "
                            placeholder="Search Zone..." wire:model="searchTerm" required>
                    </div>
                </div>


            </div>



            <div class="flex-auto px-0 pt-0 pb-2">
                <div class="p-0 overflow-x-auto">
                    <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                        <thead class="align-bottom">

                            <tr>
                                {{-- $tableHeaders --}}

                                <th
                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    Zone Name
                                </th>
                                <th colspan="3"
                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    Countries
                                </th>
                                <th
                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    Status
                                </th>


                                <th
                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($zones) > 0)
                                @foreach ($zones as $zone)
                                    <tr wire:key="zone_{{ $zone->id }}">
                                        <td class="px-6  py-4 whitespace-nowrap text-center">
                                            {{ $zone->zone_name }}
                                        </td>
                                        <td colspan="3" class="px-6 py-4 whitespace-nowrap text-center">
                                            @foreach ($zone->countries as $index => $country)
                                                {{ $country->name }}@if (!$loop->last)
                                                    ,
                                                @endif
                                                @if (($index + 1) % 4 == 0)
                                                    <br>
                                                @endif
                                            @endforeach
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center">
                                            @if ($zone->status == 1)
                                                <span
                                                    class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                                    Active
                                                </span>
                                            @else
                                                <span
                                                    class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:bg-red-700 dark:text-red-100">
                                                    Inactive
                                                </span>
                                            @endif

                                        <td class="px-6 py-4 whitespace-nowrap text-center">
                                            <div class="ml-auto text-right">
                                                <button type="button" wire:click="deleteZone({{ $zone->id }})"
                                                    class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Delete</button>

                                                <button type="button" wire:click="editZone({{ $zone->id }})"
                                                    type="button"
                                                    class="text-white bg-gradient-to-r from-blue-400 via-blue-500 to-blue-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Edit</button>


                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="4" class="p-5" align="center">
                                        No Promotion Found.
                                    </td>
                                </tr>

                            @endif
                        </tbody>
                    </table>
                    {{ $zones->links() }}
                </div>
            </div>
        </div>
    </div>

    <x-modals.modal wire:model="openCreateModal">
        <x-slot name="headerTitle">
            {{ __(($requestId != '' ? 'Update' : 'Create') . ' Zone') }}
        </x-slot>

        <x-slot name="content">
            <div class="mt-4">
                <x-jet-label for="zone_name" value="{{ __('Zone Name') }}" />
                <x-jet-input id="zone_name" class="block mt-1 w-full" type="text" wire:model="zone_name"
                    autocomplete="zone_name" max="150" />
                @error('zone_name')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>
            <x-jet-label class="mt-4" for="zone_name" value="{{ __('Countries') }}" />
            <div class="relative flex w-full" wire:ignore>
                <select id="countries" wire:model="countries" 
                    placeholder="Select countries..." autocomplete="off"
                    class="multiSelectInput block w-full rounded-sm cursor-pointer focus:outline-none" multiple>
                    @foreach (\App\Models\Country::get() as $country)
                        <option value="{{ $country->id }}" @if (in_array($country->id, $countries)) selected @endif>
                            {{ $country->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            @error('countries')
                <span class="text-red-600">{{ $message }}</span>
            @enderror

            <div class="mt-4">
                <x-jet-label for="status" value="{{ __('Status') }}" />
                <select id="status" wire:model="status" class="form-multiselect block mt-1 w-full">
                    <option value="">Select Status</option>
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
                @error('status')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>
        </x-slot>

        <x-slot name="footer">
            <div class="!my-4 w-24 float-right">
                <button type="button" wire:click="storeZone" wire:loading.attr="disabled"
                    class="inline-block w-full px-4 py-3 mb-2 ml-2 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg cursor-pointer xl-max:cursor-not-allowed xl-max:opacity-65 xl-max:pointer-events-none xl-max:bg-gradient-to-tl xl-max:from-purple-700 xl-max:to-pink-500 xl-max:text-white xl-max:border-0 hover:scale-102 hover:shadow-soft-xs active:opacity-85 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 border-fuchsia-500 bg-none text-fuchsia-500 hover:border-fuchsia-500">{{ __('Save') }}</button>
            </div>
        </x-slot>
    </x-modals.modal>
    {{-- confirmingDeletionModal --}}
    <x-modals.delete-alert wire:model="confirmingDeletionModal" message="Are you sure you want to delete this Zone?" />



    @push('scripts')
        <script>
            Livewire.on('countriesUpdated', function(values) {
                // Get the TomSelect instance
                var multiSelect = document.querySelector('.multiSelectInput').tomselect;
                // Clear existing selections
                multiSelect.clear();
                // Add new selections
                values.forEach(function(value) {
                    multiSelect.addItem(value);
                });
            });

            // Initialize TomSelect
            var multiSelect = new TomSelect('.multiSelectInput', {
                plugins: {
                    remove_button: {
                        title: 'Remove this item',
                    },
                },
                onItemAdd: function(value, $item) {
                // Clear the search text from the input without clearing selected options
                this.setTextboxValue('');
            },
            });
        </script>
    @endpush
</div>
