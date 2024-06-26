<div>

    {{-- <div class="flex flex-wrap -mx-3"> --}}
    <div class="flex-none w-full max-w-full p-5">
        <div>
            @if (session()->has('message'))
                <x-alerts.success :success="session('message')" />
            @endif
        </div>

        
       
        <div
            class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">

          

            <div
                class="frelative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all shadow-none duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start">
     
                <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">

                
            <a href="#"
            wire:click="openFormModal"
            class="px-4 py-3 hover:text-fuchsia-500 mb-2 ml-2 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg cursor-pointer xl-max:cursor-not-allowed xl-max:opacity-65 xl-max:pointer-events-none xl-max:bg-gradient-to-tl xl-max:from-purple-700 xl-max:to-pink-500 xl-max:text-white xl-max:border-0 hover:scale-102 hover:shadow-soft-xs active:opacity-85 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 border-fuchsia-500 bg-none text-fuchsia-500 hover:border-fuchsia-500"
            type="button">
            Add New Variant Option
        </a>
                </div>
               

            {{-- model create and edit --}}

                <x-jet-dialog-modal wire:model="formModal">
                    <x-slot name="title">
                        Variant Option
                    </x-slot>
                    <x-slot name="content">
                       
                            <input type="hidden" wire:model="variantOption_id">
                                <div class="mb-4">
                                    <label maxlength="100" for="name" class="block text-sm font-medium text-gray-700">Name:</label>
                                    <input maxlength="255" type="text" wire:model="name" id="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                                    @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                                </div>
                            
                                <div class="mb-4">
                                    <label for="abbreviation" class="block text-sm font-medium text-gray-700">Abbreviation:</label>
                                    <input maxlength="255" type="text" wire:model="abbreviation" id="abbreviation" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                                    @error('abbreviation') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                                </div>
                              
                        
                    </x-slot>
                    <x-slot name="footer">
                        <x-jet-secondary-button wire:click="$toggle('formModal')" wire:loading.attr="disabled">
                            {{ __('Cancel') }}
                        </x-jet-secondary-button>
                        <x-jet-button class="ml-2 btn-primary" wire:click="saveVariantOption" wire:loading.attr="disabled">
                            {{ __('Save') }}
                        </x-jet-button>
                    </x-slot>
                </x-jet-dialog-modal>
            
          

                
                <div class="items-center justify-end mt-2 mr-2 mb-6">
                    <label for="default-search"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only ">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 " fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                        <input type="search" id="default-search"
                            class="block w-full p-2 pl-8 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 "
                            placeholder="Search variantOption charts..." wire:model="searchTerm" required>
                    </div>
                </div>


            </div>



            <div class="flex-auto px-0 pt-0 pb-2">
                <div class="p-5 overflow-x-auto">
                    
                    <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                        <thead class="align-bottom">

                            <tr>
                                <th
                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    #</th>
                                <th
                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    Name</th>
                                <th
                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    Abbreviation</th>
                                <th
                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($variantOptions) > 0)
                                @foreach ($variantOptions as $key => $variantOption)
                                    <tr>
                                        <td
                                            class="text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">

                                            <div>
                                                {{ ++$key }}
                                            </div>
                                        </td>
                                        <td
                                            class="text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <h6 class="mb-0 leading-normal text-sm">{{ Str::limit($variantOption->name, 35) }}</h6>
                                        </td>
                                        <td
                                        class="text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <h6 class="mb-0 leading-normal text-sm">{{ Str::limit($variantOption->abbreviation, 35) }}</h6>
                                    </td>
                                        
                                        <td class="text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent ml-2">
                                         
                                            <div class="flex justify-center text-center">
                                                <button type="button" wire:click="destroy({{ $variantOption->id }})" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Delete</button>
                                                <button type="button" wire:click.prevent="editVariantOption({{ $variantOption->id }})" type="button" class="text-white bg-gradient-to-r from-blue-400 via-blue-500 to-blue-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Edit</button>                                                                      
                                            </div>
                                            
                                        
                                        

                                        
                                        
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="12" class="p-2" align="center">
                                        Variant Option No  Found.
                                    </td>
                                </tr>

                            @endif
                        </tbody>
                    </table>
                    <div class="pt-4">
                        {{ $variantOptions->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-modals.delete-alert wire:model="confirmingDeletionModal" message="Are you sure you want to delete this Variant option?" />
</div>
