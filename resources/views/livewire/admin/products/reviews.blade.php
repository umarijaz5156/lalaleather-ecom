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

                    <a href="#" wire:click.prevent="addReview"
                        class="px-4 py-3 hover:text-fuchsia-500 mb-2 ml-2 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg cursor-pointer xl-max:cursor-not-allowed xl-max:opacity-65 xl-max:pointer-events-none xl-max:bg-gradient-to-tl xl-max:from-purple-700 xl-max:to-pink-500 xl-max:text-white xl-max:border-0 hover:scale-102 hover:shadow-soft-xs active:opacity-85 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 border-fuchsia-500 bg-none text-fuchsia-500 hover:border-fuchsia-500"
                        type="button">
                        Add New Review
                    </a>
                </div>
                {{-- <div class="items-center justify-end mt-2 mr-2 mb-6">
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
                            placeholder="Search Template..." wire:model="searchTerm" required>
                    </div>
                </div> --}}


            </div>

            <div class="flex-auto px-0 pt-0 pb-2">
                <div class="p-0 overflow-x-auto">
                    <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                        <thead class="align-bottom">

                            <tr>
                                {{-- $tableHeaders --}}

                                <th
                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    Review By
                                </th>
                                <th
                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    Product Title
                                </th>
                                <th
                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    Review Comment
                                </th>


                                <th
                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    Review Rating
                                </th>
                                <th
                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    Review Status
                                </th>

                                <th
                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    Review Date
                                </th>
                                <th
                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($reviews) > 0)
                                @foreach ($reviews as $review)
                                    <tr wire:key="template]_{{ $review->id }}">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ $review->user->name }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ ucfirst($review->product->title) }}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ ucfirst($review->comment) }}
                                        </td>

                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ ucfirst($review->rating) }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            @if ($review->status == 1)
                                                <a type="button" wire:click="changeStatusConfirm({{ $review->id }})">
                                                    <span
                                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                        Active
                                                    </span>
                                                </a>
                                            @else
                                                <a type="button" wire:click="changeStatusConfirm({{ $review->id }})">
                                                    <span
                                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                                        Inactive
                                                    </span>
                                                </a>
                                            @endif
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ $review->created_at }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="ml-auto text-right">
                                                <button type="button" wire:click="deleteReview({{ $review->id }})"
                                                    class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Delete</button>
                                                <button type="button" wire:click="editReview({{ $review->id }})"
                                                    type="button"
                                                    class="text-white bg-gradient-to-r from-blue-400 via-blue-500 to-blue-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Edit</button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="7" class="p-5" align="center">
                                        No Review Found.
                                    </td>
                                </tr>

                            @endif
                        </tbody>
                    </table>
                    {{ $reviews->links() }}
                </div>
            </div>
        </div>
    </div>

    <x-modals.modal wire:model="reviewModal" maxWidth="2xl">
        @slot('headerTitle')
            {{ ___('Write a Review') }}
        @endslot

        @slot('content')
            <div class="mt-4">
                {{-- session existingReview --}}
                @if (session()->has('existingReview'))
                    <div class="alert alert-danger">
                        {{ session('existingReview') }}
                    </div>
                @endif
                <div class="mb-6">
                <x-jet-label for="user"  class="text-white mb-2 " value="{{ ___('User') }}" />
                <select id="user" wire:model="user" class="form-multiselect block mt-1 w-full">
                    <option value="">Select User</option>
                    {{-- show all users from users table --}}
                    @foreach (\App\Models\User::get() as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
                @error('user')
                <span class="text-red-600">{{ $message }}</span>
                @enderror
                </div>
                {{-- date --}}
                <div class="mb-6">
                    <label for="createdAt" class="block mb-2 text-sm font-medium text-white">Review Date</label>
                    <x-form.date-picker wire:model.debounce.200ms="createdAt" id="created-ar-date-picker' }}"
                        autocomplete="off"
                        class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" />
    
                    @error('createdAt')
                        <x-alerts.input-error for="createdAt" />
                    @enderror
                </div>

                {{-- rating --}}
                {{-- @php $rating @endphp --}}
                <x-jet-label for="rating" class="text-white" value="{{ ___('Rating') }}" />
                <div class="flex items-center mt-2">
                    @for ($i = 1; $i <= 5; $i++)
                        <input type="radio" id="star{{ $i }}" name="rating" wire:model="rating"
                            value="{{ $i }}" class="hidden" />
                        <label for="star{{ $i }}" class="text-3xl cursor-pointer"
                            title="{{ $i }} stars">
                            @if ($rating >= $i)
                                &#9733; {{-- Filled star --}}
                            @else
                                &#9734; {{-- Unfilled star --}}
                            @endif
                        </label>
                    @endfor
                </div>
                @error('rating')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
                {{-- review --}}
                <x-jet-label for="review" class="text-white" value="{{ ___('Review') }}" />
                <textarea id="review" class="block mt-1 w-full" wire:model="review" autocomplete="review" maxlength="250" required></textarea>

                @error('review')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
                {{-- file --}}
                <x-jet-label for="images" class="text-white" value="{{ ___('Picture/Video (optional):') }}" />

                <x-form.upload-files style="width: 100%" wire:model="images" fileName="images" perview multiple
                    allowFileTypes="['image/png','image/jpeg','image/jpg','image/gif',]" />
                @error('images')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror




            </div>

        @endslot

        @slot('footer')
            <x-jet-secondary-button class="btn-cancel" wire:click="$toggle('reviewModal')" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button>

            <x-jet-button class="ml-2 btn-primary" wire:click="storeReview" wire:loading.attr="disabled">
                {{ __('Save') }}
            </x-jet-button>
        @endslot
    </x-modals.modal>

    {{-- confirmingDeletionModal --}}
    <x-modals.delete-alert wire:model="confirmingDeletionModal" message="Are you sure you want to delete this Review?" />
    {{-- confirmingStatusModal --}}
    <x-modals.two-step model="confirmingStatusModal" message="Are you sure you want to change this Review Status?" confirm="changeStatus()"/>
    {{-- editReviewModal --}}
</div>
