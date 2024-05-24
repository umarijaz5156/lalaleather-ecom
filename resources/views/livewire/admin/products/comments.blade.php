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

                    <a href="#" wire:click.prevent="addComment"
                        class="px-4 py-3 hover:text-fuchsia-500 mb-2 ml-2 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg cursor-pointer xl-max:cursor-not-allowed xl-max:opacity-65 xl-max:pointer-events-none xl-max:bg-gradient-to-tl xl-max:from-purple-700 xl-max:to-pink-500 xl-max:text-white xl-max:border-0 hover:scale-102 hover:shadow-soft-xs active:opacity-85 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 border-fuchsia-500 bg-none text-fuchsia-500 hover:border-fuchsia-500"
                        type="button">
                        Add New Comment
                    </a>
                </div>


            </div>
            <div class="flex-auto px-0 pt-0 pb-2">
                <div class="p-0 overflow-x-auto">
                    <x-admin.table>
                        <x-admin.table.thead>
                            <tr>
                                <th
                                    class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    COMMENT BY</th>
                                <th
                                    class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    PRODUCT TITLE</th>
                                <th
                                    class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    COMMENT</th>
                                <th
                                    class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    COMMENT STATUS</th>
                                <th
                                    class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    COMMENT DATE</th>
                                    <th
                                    class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    Action</th>

                                <th
                                    class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    View Replies
                                </th>
                            </tr>
                        </x-admin.table.thead>
                        <tbody>
                            {{-- Parent Foreach --}} 
                            @forelse ($comments as $comment)
                                <tr>
                                    <x-admin.table.cell>
                                        <div class="flex px-2 py-1">

                                            <div class="flex flex-col justify-center">
                                                <h6 class="mb-0 leading-normal text-sm">{{ $comment->user->name }}</h6>
                                            </div>
                                        </div>
                                    </x-admin.table.cell>
                                    <x-admin.table.cell>
                                        <p class="mb-0 overflow-hidden w-[180px] font-semibold leading-tight text-xs">
                                            {{ $comment->product->title }}
                                        </p>
                                    </x-admin.table.cell>
                                    <x-admin.table.cell>
                                        <p class="mb-0 overflow-hidden w-[180px] font-semibold leading-tight text-xs">
                                          {{$comment->comment}}
                                        </p>
                                    </x-admin.table.cell>
                                    <x-admin.table.cell>
                                        <p class="mb-0 overflow-hidden w-[180px] font-semibold leading-tight text-xs">
                                            @if ($comment->status == 1)
                                            <a type="button" wire:click="changeStatus({{ $comment->id }})">
                                                <span
                                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                    Active
                                                </span>
                                            </a>
                                        @else
                                            <a type="button" wire:click="changeStatus({{ $comment->id }})">
                                                <span
                                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                                    Inactive
                                                </span>
                                            </a>
                                        @endif
                                        </p>
                                    </x-admin.table.cell>

                                    <x-admin.table.cell>
                                        <p class="mb-0 overflow-hidden w-[180px] font-semibold leading-tight text-xs">
                                          {{$comment->created_at}}
                                        </p>
                                    </x-admin.table.cell>
                                    <x-admin.table.cell>
                                        <div class="ml-auto text-right">
                                            <button type="button" wire:click="addReply({{ $comment->id }})"
                                                class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Reply</button>
                                           
                                           
                                            <button type="button" wire:click="deleteComment({{ $comment->id }})"
                                                class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Delete</button>
                                            <button type="button" wire:click="editComment({{ $comment->id }})"
                                                type="button"
                                                class="text-white bg-gradient-to-r from-blue-400 via-blue-500 to-blue-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Edit</button>
                                        </div>
                                    </x-admin.table.cell>
                                    <x-admin.table.cell>
                                        <button
                                            wire:click="collapseSubChild({{ $comment->id }}, {{ $showHideLevel2 }})"
                                            type="button"
                                            class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800">

                                            <svg data-accordion-icon
                                                class="w-6 h-6 {{ $showHideLevel2 == $comment->id ? 'rotate-180' : '' }}  shrink-0"
                                                fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </x-admin.table.cell>
                                </tr>
                                <tr class="{{ $showHideLevel2 == $comment->id ? '' : 'hidden' }}">
                                    <x-admin.table.cell class="bg-gray-300" colspan="6">
                                        <x-admin.table>
                        <tbody>
                            {{-- Child Foreach --}}
                            {{-- @if($comment->id == 2)
                            {{dd($comment->replies)}}
                            @endif --}}
                            @forelse ($comment->replies as $reply)
                                <tr>
                                    <x-admin.table.cell>
                                        <div class="flex px-2 py-1">
                                            <div class="flex flex-col justify-center">
                                                <h6 class="mb-0 leading-normal text-sm">
                                                    {{ $reply->user->name }}
                                                </h6>
                                            </div>
                                        </div>
                                    </x-admin.table.cell>
                                    <x-admin.table.cell>
                                        <p class="overflow-hidden w-[180px] mb-0 font-semibold leading-tight text-xs">
                                            {{ $reply->product->title }}
                                        </p>
                                    </x-admin.table.cell>
                                    <x-admin.table.cell>
                                        <p class="mb-0 overflow-hidden w-[180px] font-semibold leading-tight text-xs">
                                          {{$reply->comment}}
                                        </p>
                                    </x-admin.table.cell>
                                    <x-admin.table.cell>
                                        <p class="mb-0 overflow-hidden w-[180px] font-semibold leading-tight text-xs">
                                            @if ($reply->status == 1)
                                            <a type="button" wire:click="changeStatus({{ $reply->id }})">
                                                <span
                                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                    Active
                                                </span>
                                            </a>
                                        @else
                                            <a type="button" wire:click="changeStatus({{ $reply->id }})">
                                                <span
                                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                                    Inactive
                                                </span>
                                            </a>
                                        @endif
                                        </p>
                                    </x-admin.table.cell>

                                    <x-admin.table.cell>
                                        <p class="mb-0 overflow-hidden w-[180px] font-semibold leading-tight text-xs">
                                          {{$reply->created_at}}
                                        </p>
                                    </x-admin.table.cell>
                                    <x-admin.table.cell>
                                        <div class="ml-auto text-right">
                                           <button type="button" wire:click="deleteComment({{ $reply->id }})"
                                                class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Delete</button>
                                            <button type="button" wire:click="editComment({{ $reply->id }})"
                                                type="button"
                                                class="text-white bg-gradient-to-r from-blue-400 via-blue-500 to-blue-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Edit</button>
                                        </div>
                                    </x-admin.table.cell>
                                </tr>
                                
                @empty
                    <tr>
                        <td class="py-4 px-6 text-center" colspan="7">
                            No Record Found
                        </td>
                    </tr>
                    @endforelse
                    </tbody>
                    </x-admin.table>
                    </x-admin.table.cell>
                    </tr>
                @empty
                    <tr>
                        <td class="py-4 px-6 text-center" colspan="7">
                            No Record Found
                        </td>
                    </tr>
                    @endforelse
                    </tbody>
                    </x-admin.table>
                    {{ $comments->links() }}
                </div>
            </div>
        </div>
    </div>

    <x-modals.modal wire:model="commentModal" maxWidth="2xl">
        @slot('headerTitle')
            {{ ___('Write a omment') }}
        @endslot

        @slot('content')
            <div class="mt-4">
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
                    <label for="createdAt" class="block mb-2 text-sm font-medium text-white">Comment Date</label>
                    <x-form.date-picker wire:model.debounce.200ms="createdAt" id="created-ar-date-picker' }}"
                        autocomplete="off"
                        class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" />
    
                    @error('createdAt')
                        <x-alerts.input-error for="createdAt" />
                    @enderror
                </div>

                {{-- Comment --}}
                <x-jet-label for="comment" class="text-white" value="{{ ___('Comment') }}" />
                <textarea id="comment" class="block mt-1 w-full" wire:model="comment" autocomplete="comment" maxlength="250"
                    required></textarea>

                @error('comment')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror

            </div>

        @endslot

        @slot('footer')
            <x-jet-secondary-button class="btn-cancel" wire:click="$toggle('commentModal')" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button>

            <x-jet-button class="ml-2 btn-primary" wire:click="storeComment" wire:loading.attr="disabled">
                {{ __('Save') }}
            </x-jet-button>
        @endslot
    </x-modals.modal>

    {{-- confirmingDeletionModal --}}
    <x-modals.delete-alert wire:model="confirmingDeletionModal" message="Are you sure you want to delete this Comment?" />

</div>
