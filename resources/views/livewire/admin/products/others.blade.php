<div>


    <div
        class="relative z-0  min-w-0 break-words bg-white border-0  rounded-2xl bg-clip-border grid grid-cols-1 md:grid-cols-2 gap-8  px-6 py-6 mx-auto">
        {{-- qantity --}}
        <div class="mb-6">
            <label for="quantity" class="block mb-2 text-sm font-medium text-gray-900 ">Stock:</label>
            <span class="text-xs text-muted" >How many items are available in stock.</span>
            <input type="text" wire:model.debounce.200ms='quantity'
                pattern="[0-9]*" 
                oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                placeholder="Enter the Quantity">

            <x-alerts.input-error for="quantity" />
        </div>
        {{-- MOQ --}}
        <div class="mb-6">
            <label for="moq" class="block mb-2 text-sm font-medium text-gray-900 ">MOQ :</label>
            <span class="text-xs text-muted" >Minimum number of products to be ordered by one customer.</span>
            <input type="text" wire:model.debounce.200ms='moq'
                pattern="[0-9]*" 
                oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                placeholder="Enter the MOQ">
            @error('moq')
                <x-alerts.input-error for="moq" />
            @enderror
        </div>

        {{-- sizeChart  --}}
        <div class="mb-6">
            <label for="sizeChart" class="block mb-2 text-sm font-medium text-gray-900 ">Size Chart:</label>
            {{-- muted Select size charts from the drop down, you can add more size charts from this link : {{domain}}/admin/sizes/list --}}
            <span class="text-xs text-muted" > Select size charts from the drop down, you can add more size charts. <a href="{{ route('admin.size') }}">click here </a> </span>
            {{-- dropdoen sizesData --}}
            {{-- dropdoen sizesData --}}
            <select wire:model.debounce.200ms="sizeChart"
                class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow">
                <option value="">Please Select</option>
                @foreach ($sizesData as $size)
                    <option value="{{ $size->id }}">{{ $size->name }}</option>
                @endforeach
            </select>
            @error('sizeChart')
                <x-alerts.input-error for="sizeChart" />
            @enderror
        </div>
    </div>
    {{-- shipping zone and cost --}}
    <div class="mt-12">
        <div class="flex justify-between items-center flex-wrap">
            <h1 class="text-3xl font-light">Shipping Cost</h1>
            @error('shippingZones')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <button wire:click.prevent="addShippingZone({{ $y }})"
                class="cursor-pointer text-base border border-[#3959D6] px-6 py-3 rounded-full mr-3 bg-white text-[#2646C4]">
                <i class="fa-regular fa-plus text-base mr-2"></i> Add More
            </button>
        </div>
        @foreach ($szInputs ?? [] as $key => $value)
            <div class="mt-7">
                <div class="bg-white p-4 sm:px-[60px] ">

                    <div class="flex justify-between items-center">
                        <div class="flex-1 mr-2">
                            <select wire:model="shippingZones.{{ $value }}.zone"
                                class="w-full border-0 border-b-2 border-[#DFE3EC] focus:outline-none px-1 focus:ring-0 focus:border-b-[rgba(38,70,196,1)] leading-10">
                                {{-- zones where active = 1 --}}
                                <option value="">Please Select</option>
                                @foreach ($zones as $zone)
                                    <option value="{{ $zone->id }}">
                                        {{ $zone->zone_name }}</option>
                                @endforeach
                            </select>
                            @error('shippingZones.' . $value . '.zone')
                            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                        @enderror
                        </div>

                        {{-- error --}}
                        {{-- @error('shippingZones.' . $value . '.zone') --}}
                        
                        {{-- shipping methodes --}}
                        <div class="flex-1 mx-2">
                            <select wire:model="shippingZones.{{ $value }}.shipping_method"
                                class="w-full border-0 border-b-2 border-[#DFE3EC] focus:outline-none px-1 focus:ring-0 focus:border-b-[rgba(38,70,196,1)] leading-10">
                                {{-- zones where active = 1 --}}
                                <option value="" selected>Select Shipping Method </option>
                                @forelse($shippingMethods[$value] ?? [] as $shippingMethod)
                                    <option value="{{ $shippingMethod->id ?? $shippingMethod['id']   }}" >
                                        {{ $shippingMethod->name ?? $shippingMethod['name'] }}</option>
                                @endforeach
                            </select>
                            {{-- error --}}
                            @error('shippingZones.' . $value . '.shipping_method')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex-1 mx-2">
                            <div class="relative rounded-md shadow-sm">
                                <div class="absolute inset-y-0 left-0 pl-1 flex items-center pointer-events-none">
                                    <span class="text-gray-500 sm:text-sm">Days</span>
                                </div>
                                <input wire:model="shippingZones.{{ $value }}.delivery_time" type="number" min="0"
                                    step="0.01" name="shippingZones[{{ $value }}][delivery_time]"
                                    class="ml-2 pl-8 w-full border-0 border-b-2 border-[#DFE3EC] focus:outline-none px-1 focus:ring-0 focus:border-b-[rgba(38,70,196,1)]"
                                    placeholder="Delivery Time">
                            </div>

                            {{-- error --}}
                            @error('shippingZones.' . $value . '.delivery_time')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex-1 mx-2">
                            <div class="relative rounded-md shadow-sm">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <span class="text-gray-500 sm:text-sm">$</span>
                                </div>
                                <input wire:model="shippingZones.{{ $value }}.cost" type="number" min="0"
                                    pattern="[0-9]*" 
                                    oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                                    step="0.01" name="shippingZones[{{ $value }}][cost]"
                                    class="pl-8 w-full border-0 border-b-2 border-[#DFE3EC] focus:outline-none px-1 focus:ring-0 focus:border-b-[rgba(38,70,196,1)]"
                                    placeholder="Enter Shipping Cost">
                            </div>

                            {{-- error --}}
                            @error('shippingZones.' . $value . '.cost')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- @if($key != 0) --}}
                        <div>
                            <button wire:click.prevent="removeShippingZone({{ $key }})" type="button"
                            class="text-white bg-red-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-sm p-2.5 drk:bg-blue-600 drk:focus:ring-blue-800">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Remove</span>
                            </button>
                        </div>
                    {{-- @endif --}}
                    </div>
                    {{-- show zone->countries() in muted comma spreated  --}}
                    @if (isset($shippingZones[$value]['zone']) && $shippingZones[$value]['zone'] != null)
                        {{-- {{ dd($shippingZones) }} --}}
                        <div class="mt-4">
                            <span class="text-xs text-gray-400">Zone's Countries: </span>
                            {{ $zones->firstWhere('id', $shippingZones[$value]['zone'])?->countryNames }}
                        </div>
                    @endif
                </div>
        @endforeach
    </div>
    {{-- variants and price --}}
    <div class="mt-12" >
        <div class="flex justify-between items-center flex-wrap">
            <h1 class="text-3xl font-light">Variants</h1>
            <button wire:click.prevent="addVariant({{ $z }})"
                class="cursor-pointer text-base border border-[#3959D6] px-6 py-3 rounded-full mr-3 bg-white text-[#2646C4]">
                <i class="fa-regular fa-plus text-base mr-2"></i> Add More
            </button>
        </div>
        <span class="text-xs text-muted">Original price + variant cost. For instance, if the product price is $400 USD and selecting black adds $20, the total would be $420. If the price is set to 0, there's no change.</span>
        @foreach ($variantInputs as $key => $value)
            <div class="mt-7">
                <div class="bg-white p-4 sm:px-[60px]">

                    <div class="flex justify-between items-center">
                        <div class="flex-1 mr-2">
                            {{-- variants --}}
                            <select wire:model="variants.{{ $value }}.variant_id"
                                class="w-full border-0 border-b-2 border-[#DFE3EC] focus:outline-none px-1 focus:ring-0 focus:border-b-[rgba(38,70,196,1)] leading-10">
                                {{-- zones where active = 1 --}}
                                <option value="">Select Variant</option>
                                @foreach ($variantsData as $variant)
                                    <option value="{{ $variant->id }}">
                                        {{ $variant->name }}</option>
                                @endforeach
                            </select>
                            {{-- error --}}
                            @error('variants.' . $value . '.variant_id')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- {{ dd($variants) }} --}}
                        {{-- variantsOptions --}}
                        <div class="flex-1 mx-2"  >
                            {{-- {{ dd($variantsOptionsData) }} --}}
                            <select wire:model="variants.{{ $value }}.variant_option_id"
                                class=" w-full border-0 border-b-2 border-[#DFE3EC] focus:outline-none px-1 focus:ring-0 focus:border-b-[rgba(38,70,196,1)] leading-10">
                                {{-- zones where active = 1 --}}
                                <option value="">Select Variant Value </option>
                                @if(isset($variantsOptionsData[$value]))
                                    @foreach ($variantsOptionsData[$value] as $variantOption)
                                        <option value="{{ $variantOption->id ?? $variantOption['id'] }}"
                                            {{ array_search($variantOption->id ?? $variantOption['id'], array_column($variants, 'variant_option_id')) !== false ? 'disabled' : '' }}
                                             >
                                            {{ $variantOption->name ?? $variantOption['name'] }}</option>
                                    @endforeach
                                @endif
                            </select>
                            {{-- error --}}
                            @error('variants.' . $value . '.variant_option_id')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex-1 mx-2">
                            <div class="relative rounded-md shadow-sm">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <span class="text-gray-500 sm:text-sm">$</span>
                            </div>
                            <input wire:model="variants.{{ $value }}.cost" type="number" min="0"
                                pattern="[0-9]*" 
                                oninput="this.value = this.value.replace(/[^0-9]/g, '')"                
                                step="0.01" name="variants[{{ $value }}][cost]"
                                class="pl-6 w-full border-0 border-b-2 border-[#DFE3EC] focus:outline-none px-1 focus:ring-0 focus:border-b-[rgba(38,70,196,1)]"
                                placeholder="Enter Variant Cost">
                                {{-- small message => left value zero fr same as original price --}}
                              

                            {{-- error --}}
                            @error('variants.' . $value . '.cost')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                        <div>
                            <button wire:click.prevent="removeVariant({{ $key }})" type="button"
                                class="text-white bg-red-500 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-sm p-2.5 drk:bg-blue-600 drk:hover:bg-blue-700 drk:focus:ring-blue-800">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Remove</span>
                            </button>
                        </div>
                    </div>
                    {{-- <small class="text-gray-400 text-right float-right text-xs pt-5 pr-4.3rem">Left zero for same as original price.</small> --}}

                </div>
            </div>
        @endforeach
    </div>


    {{-- features --}}
    <div class="mt-12">
        <div class="flex justify-between items-center flex-wrap">
            <h1 class="text-[30px] font-light">Features</h1>
            <button wire:click.prevent="addFt({{ $x }})"
                class="cursor-pointer text-[16px] border border-[#3959D6] px-6 py-3 rounded-full mr-3 bg-white text-[#2646C4]">
                <i class=" fa-regular fa-plus text-[16px] mr-2"></i> Add More
            </button>
        </div>
        @error('features.*')
            <span
                class="flex items-center font-medium tracking-wide text-red-500 text-s mt-1 ml-1">{{ $message }}</span>
        @enderror

        @foreach ($ftInputs as $key => $value)
            <div class="mt-7">
                <div class="bg-white mb-4 w-full p-2 sm:px-[60px]  ">

                    <div class="">
                        <div class="flex justify-end items-center">
                            <input wire:model="features.{{ $value }}" maxlength="150" type="text"
                                name="features[{{ $value }}]" id="features[{{ $value }}]"
                                class="w-full border-0 border-b-2 border-[#DFE3EC] focus:outline-none px-1 focus:ring-0 focus:border-b-[rgba(38,70,196,1)]"
                                placeholder="Request necessary details." maxlength="150" />

                            <div>
                                <button wire:click.prevent="removeFt({{ $key }})" type="button"
                                    class="text-white bg-red-500 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center ml-2 drk:bg-blue-600 drk:hover:bg-blue-700 drk:focus:ring-blue-800">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="sr-only">Remove</span>
                                </button>
                            </div>
                        </div>
                        {{-- error --}}
                        @error('features.' . $value)
                            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                </div>
            </div>
        @endforeach
    </div>

    {{-- faq --}}
    <div class="mt-12">

        <div class=" flex justify-between items-center flex-wrap">
            <h1 class="text-[30px] font-light">Frequently Asked Questions</h1>
            <button wire:click.prevent="add({{ $i }})"
                class="cursor-pointer text-[16px] border border-[#3959D6] px-6 py-3 rounded-full mr-3 bg-white text-[#2646C4]">
                <i class=" fa-regular fa-plus text-[16px] mr-2"></i> Add FAQ
            </button>
        </div>
        <span class="text-xs text-center"> Add question and answer for your buyer → Some Questions that people might ask prior to buying.</span>
        @foreach ($inputs as $key => $value)
            <div class="mt-7">


                <div class=" bg-white mb-4 w-full p-9 sm:px-[60px] sm:py-[40px] rounded-3xl border border-gray-200 drk:bg-gray-700 drk:border-gray-600"
                    style="box-shadow: rgba(43, 75, 200, 0.2) 0px 7px 29px 0px;">

                    <div class="flex justify-between items-center pb-4 border-b drk:border-gray-600">
                        <div class="flex flex-wrap items-center divide-gray-200 sm:divide-x drk:divide-gray-600">
                            <p class="text-[18px] font-medium">Add Questions & Answers for Your Buyers.</p>
                        </div>
                        <div>
                            <button wire:click.prevent="remove({{ $key }})" type="button"
                                class=" text-white bg-red-500 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 drk:bg-blue-600 drk:hover:bg-blue-700 drk:focus:ring-blue-800">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Remove</span>
                            </button>
                        </div>
                    </div>
                    <div class="py-2 rounded-b-lg drk:bg-gray-800">
                        <label for="question" class="sr-only">Question</label>
                        <textarea maxlength="150" name="faqs[{{ $value }}][question]" wire:model="faqs.{{ $value }}.question"
                            rows="1"
                            class="block px-0 w-full text-[18px] text-gray-800 bg-white border-0 drk:bg-gray-800 focus:ring-0 drk:text-white drk:placeholder-gray-400"
                            placeholder="Enter your question here"></textarea>
                        {{-- error --}}
                        @error('faqs.' . $value . '.question')
                            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                        @enderror

                    </div>
                    <div class="py-2 mt-4 bg-white rounded-b-lg drk:bg-gray-800">
                        <label for="answer" class="sr-only">Answer</label>
                        <textarea maxlength="250" name="faqs[{{ $value }}][answer] " wire:model="faqs.{{ $value }}.answer"
                            rows="2"
                            class="block px-0 w-full text-[18px] text-gray-800 bg-white border-0 drk:bg-gray-800 focus:ring-0 drk:text-white drk:placeholder-gray-400"
                            placeholder="Enter your answer here"></textarea>
                        {{-- error --}}
                        @error('faqs.' . $value . '.answer')
                            <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

            </div>
        @endforeach



    </div>
    <div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-8 ">

        {{-- active --}}
        <div class="grid grid-flow-row-dense grid-cols-3 ">
            <div class="col-span-2"><span class="ms-3  text-lg font-medium text-gray-900 ">Active</span>
            </div>
            <div>
                <label class="relative inline-flex items-center mb-5 cursor-pointer">
                    <input type="checkbox" name="active" wire:model="is_active" value="1"
                        class="sr-only peer" checked>
                    <div
                        class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-fuchsia-300  rounded-full peer  peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all  peer-checked:bg-fuchsia-600">
                    </div>
                </label>
            </div>
            @error('active')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        {{-- promoted --}}
        <div class="grid grid-flow-row-dense grid-cols-3 ">
            <div class="col-span-2"><span class="ms-3  text-lg font-medium text-gray-900 ">Promoted</span>
            </div>
            <div>
                <label class="relative inline-flex items-center mb-5 cursor-pointer">
                    <input type="checkbox" name="promoted" wire:model="is_promoted" value="1"
                        class="sr-only peer">
                    <div
                        class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-fuchsia-300  rounded-full peer  peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all  peer-checked:bg-fuchsia-600">
                    </div>
                </label>
            </div>
            @error('promoted')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="text-right col-span-2">
        <a type="button" wire:click="previous"
            class="px-6 py-3 mt-6 mb-2 font-bold uppercase transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-blue-800 from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Previous</a>
        <button type="button" wire:click="next()"
            class="px-6 py-3 mt-6 mb-2 font-bold text-white uppercase transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Next</button>
    </div>
</div>
