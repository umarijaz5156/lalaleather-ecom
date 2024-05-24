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
                Add Products to Promote
            </a>
            @if(count($selectedProducts) > 0)
           
            <a href="#"
            wire:click="depromoteSelected"
                class="px-4 py-3 hover:text-rose-500 mb-2 ml-2 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg cursor-pointer xl-max:cursor-not-allowed xl-max:opacity-65 xl-max:pointer-events-none xl-max:bg-gradient-to-tl xl-max:from-purple-700 xl-max:to-pink-500 xl-max:text-white xl-max:border-0 hover:scale-102 hover:shadow-soft-xs active:opacity-85 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 border-rose-500 bg-none text-rose-500 hover:border-rose-500"
                type="button">
                Demote Selected Product{{ count($selectedProducts) > 1 ? 's' : ''  }}
            </a>
        @endif
                </div>
               

            {{-- model create and edit --}}

                <x-jet-dialog-modal wire:model="formModal">
                    <x-slot name="title">
                        Add Products to Promote
                    </x-slot>
                    <x-slot name="content">
                       
                        <x-jet-label class="mt-4" for="zone_name" value="{{ __('Products') }}" />
                        <div class="relative flex w-full" wire:ignore>
                            <select id="products" wire:model="products" name="products[]" multiple
                                placeholder="Select products..." autocomplete="off"
                                class="multiSelectInput block w-full rounded-sm cursor-pointer focus:outline-none" multiple>
                                @foreach ($DePromotedProducts as $product)

                                    <option value="{{ $product->id }}" @if (in_array($product->id, $products)) selected @endif>
                                        {{ $product->title }}
                                    </option>
                                @endforeach
                               
                            </select>
                        </div>
            
                        @error('products')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                               
                        
                    </x-slot>
                    <x-slot name="footer">
                        <x-jet-secondary-button wire:click="closeFormModal" wire:loading.attr="disabled">
                            {{ __('Cancel') }}
                        </x-jet-secondary-button>
                        <x-jet-button class="ml-2" wire:click="savePromotedProducts" wire:loading.attr="disabled">
                            {{ __('Save') }}
                        </x-jet-button>
                    </x-slot>
                </x-jet-dialog-modal>
            
          
                
                <div class="items-center justify-end mt-2 mr-2 mb-6">
                    <label for="default-search"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only "
                        >Search</label>
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
                            placeholder="Search promoted products..." wire:model="searchTerm" required>
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
                                    </th>
                                <th
                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    #</th>
                                <th
                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    Title</th>
                                <th
                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    Description</th>
                                <th
                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($promotedProducts) > 0)
                                @foreach ($promotedProducts as $key => $promotedProduct)
                                    <tr>
                                        <td
                                            class="text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">

                                            <div>
                                                <input
                                                type="checkbox"
                                                wire:model="selectedProducts"
                                                value="{{ $promotedProduct->id }}"
                                                id="product_{{ $promotedProduct->id }}"
                                                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 h-4 w-4"
                                            >
                                            </td>
                                        <td
                                            class="text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">

                                            <div>
                                               
                                                {{ ++$key }}
                                            </div>
                                        </td>
                                        <td
                                            class="text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <h6 class="mb-0 leading-normal text-sm">{{ Str::limit($promotedProduct->title, 35) }}</h6>
                                        </td>
                                        <td
                                        class="text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <h6 class="mb-0 leading-normal text-sm">{{ Str::limit($promotedProduct->description, 35) }}</h6>
                                    </td>
                                        
                                        <td class="text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent ml-2">
                                         
                                            <div class="flex justify-center text-center">
                                                <button type="button" wire:click="dePromoted({{ $promotedProduct->id }})" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mt-2 mr-2 mb-2">Demote</button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="5" class="p-2" align="center">
                                        Promoted Products No Found.
                                    </td>
                                </tr>

                            @endif
                        </tbody>
                    </table>
                    <div class="pt-4">
                        {{ $promotedProducts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <x-modals.two-step wire:model="twoStepConfirmationModal" message="Are you sure you want to remove it from promoted products?" />
    

</div>
@push('scripts')
<script>
    new TomSelect('.multiSelectInput', {
        plugins: {
            remove_button: {
                title: 'Remove this item',
            },
        },
    });
</script>
@endpush