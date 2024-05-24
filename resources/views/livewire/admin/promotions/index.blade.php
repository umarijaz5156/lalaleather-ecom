<div>
    {{-- <div class="flex flex-wrap -mx-3"> --}}
    <div class="flex-none w-full max-w-full px-3">
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

                     <a href="{{ route('admin.create-promotion') }}"
                        class="px-4 py-3 mb-2 ml-2 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg cursor-pointer xl-max:cursor-not-allowed xl-max:opacity-65 xl-max:pointer-events-none xl-max:bg-gradient-to-tl xl-max:from-purple-700 xl-max:to-pink-500 xl-max:text-white xl-max:border-0 hover:scale-102 hover:shadow-soft-xs active:opacity-85 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 border-fuchsia-500 bg-none text-fuchsia-500 hover:border-fuchsia-500"
                        type="button">
                        Add New Promotion
                    </a>
                </div>
                <div class="items-center justify-end mt-2 mr-2 mb-6">
                    <label for="default-search"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only ">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                        <input type="search" id="default-search"
                            class="block w-full p-2 pl-8 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Search Promotion..." wire:model="searchTerm" required>
                    </div>
                </div>


            </div>



            <div class="flex-auto px-0 pt-0 pb-2">
                <div class="p-0 overflow-x-auto">
                    <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                        <thead class="align-bottom">

                            <tr>
                                {{-- $tableHeaders --}}
                                @foreach ($tableHeaders as $key => $value)
                                    <th
                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        {{ $value }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($promotions) > 0)
                                @foreach ($promotions as $promotion)
                                    <tr wire:key="promotion_{{ $promotion->id }}">
                                        @foreach ($tableHeaders as $key => $value)
                                            {{-- if  $key = baner --}}
                                            @if ($key == 'banner')
                                            {{-- {{ dd(json_decode($promotion[$key])?->file_path ) }} --}}
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <img src="{{ asset('storage/' . json_decode($promotion[$key])?->file_path ?? null) }}" alt="{{ json_decode($promotion[$key])?->file_original_name ?? 'Banner' }}"
                                                        class="w-20 h-20 rounded-full border border-gray-200 shadow-sm">
                                                </td>
                                            @elseif($key == 'description')
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    {{ Str::limit($promotion[$key], 20) }}
                                                </td>
                                            @elseif($key == 'date')
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    {{ \Carbon\Carbon::parse($promotion['start_date'])->format('D M d Y') }}
                                                    -
                                                    {{ \Carbon\Carbon::parse($promotion['end_date'])->format('D M d Y') }}
                                                </td>
                                            @elseif($key == 'active')
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    {{-- show swicth button to active and decactive  --}}
                                                    <label
                                                        wire:click="{{ $promotion[$key] == 1 ? 'disablePromotionProperty(' . $promotion->id . ', \'active\')' : 'enablePromotionProperty(' . $promotion->id . ', \'active\')' }}"
                                                        class="relative inline-flex items-center  cursor-pointer">
                                                        <input type="checkbox" class="sr-only peer"
                                                            {{ $promotion[$key] == 1 ? 'checked' : '' }}>

                                                        <div
                                                            class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-fuchsia-300  rounded-full peer  peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all  peer-checked:bg-fuchsia-600">
                                                        </div>
                                                    </label>
                                                </td>
                                            @elseif($key == 'storewide')
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    {{-- show swicth button to active and decactive  --}}
                                                    <label
                                                    wire:click="{{ $promotion[$key] == 1 ? 'disablePromotionProperty(' . $promotion->id . ', \'storewide\')' : 'enablePromotionProperty(' . $promotion->id . ', \'storewide\')' }}"
                                                    class="relative inline-flex items-center  cursor-pointer">
                                                        <input type="checkbox" class="sr-only peer"
                                                            {{ $promotion[$key] == 1 ? 'checked' : '' }}>

                                                        <div
                                                            class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-fuchsia-300  rounded-full peer  peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all  peer-checked:bg-fuchsia-600">
                                                        </div>
                                                    </label>

                                                </td>
                                            @elseif($key == 'actions')
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="ml-auto text-right">
                                                        <button type="button"
                                                            wire:click="deletePromotion({{ $promotion->id }})"
                                                            class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Delete</button>

                                                        <a href="{{ route('admin.edit-promotion', $promotion->id) }}"
                                                            type="button"
                                                            class="text-white bg-gradient-to-r from-blue-400 via-blue-500 to-blue-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Edit</a>


                                                    </div>
                                                </td>
                                            @else
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    {{ $promotion[$key] }}
                                                </td>
                                            @endif
                                        @endforeach
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="{{ count($tableHeaders) }}" class="p-5" align="center">
                                        No Promotion Found.
                                    </td>
                                </tr>

                            @endif
                        </tbody>
                    </table>
                    {{ $promotions->links() }}
                </div>
            </div>
        </div>
    </div>
    <x-modals.delete-alert message="Are you sure you want to delete this promotion ? " model="confirmingDeletionModal"
        delete="delete()" />
    {{-- </div> --}}
</div>
