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

                  <a href="#"
                        wire:click.prevent="createEmailConfig" 
                        class="px-4 py-3 hover:text-fuchsia-500 mb-2 ml-2 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg cursor-pointer xl-max:cursor-not-allowed xl-max:opacity-65 xl-max:pointer-events-none xl-max:bg-gradient-to-tl xl-max:from-purple-700 xl-max:to-pink-500 xl-max:text-white xl-max:border-0 hover:scale-102 hover:shadow-soft-xs active:opacity-85 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 border-fuchsia-500 bg-none text-fuchsia-500 hover:border-fuchsia-500"
                        type="button">
                        Add New Template
                    </a>
                </div>
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
                            placeholder="Search Template..." wire:model="searchTerm" required>
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
                                    Subject
                                </th>
                                <th
                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    Template For
                                </th>
                                <th
                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    Date
                                </th>


                                <th
                                    class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($emailConfigs) > 0)
                                @foreach ($emailConfigs as $emailConfig)
                                    <tr wire:key="template]_{{ $emailConfig->id }}">
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ $emailConfig->subject }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ ucfirst($emailConfig->template_for) }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ $emailConfig->created_at }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="ml-auto text-right">
                                                <button type="button"
                                                    wire:click="deleteEmailConfig({{ $emailConfig->id }})"
                                                    class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Delete</button>
                                                <button type="button"
                                                    wire:click="editEmailConfig({{ $emailConfig->id }})" type="button"
                                                    class="text-white bg-gradient-to-r from-blue-400 via-blue-500 to-blue-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">View/Edit</button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="4" class="p-5" align="center">
                                        No Template Found.
                                    </td>
                                </tr>

                            @endif
                        </tbody>
                    </table>
                    {{ $emailConfigs->links() }}
                </div>
            </div>
        </div>
    </div>

    <x-modals.modal wire:model="openCreateModal" maxWidth="3xl">
        @slot('headerTitle')
            {{ __(($requestId != '' ? 'Update' : 'Create') . ' Template') }}
        @endslot

        @slot('content')
            <div class="mt-4">
                <x-jet-label for="subject" value="{{ __('Subject') }}" />
                <x-jet-input id="subject" class="block mt-1 w-full" type="text" wire:model="subject"
                    autocomplete="subject" max="150" />
                @error('subject')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>
            <div class="mt-4">
                <x-jet-label for="template_for" value="{{ __('Template For') }}" />
                <select id="template_for" wire:model="template_for" class="form-multiselect block mt-1 w-full">
                    <option value="">Select Template For</option>
                    @foreach ($templateTypes as $type)
                        <option value="{{ $type }}">{{ ucfirst($type) }}</option>
                    @endforeach
                </select>
                @error('template_for')
                    <span class="text-red-600">{{ $message }}</span>
                @enderror
            </div>
            <x-jet-label class="mt-4" for="template" value="{{ __('Template') }}" />
            <div wire:ignore class="mb-6">
                <textarea class="ckeditor" id="template" wire:model="template" required></textarea>
                <span>
                    <strong>Use these replacement variables (double curly braces are necessary):</strong><br>
                    @if($template_for == 'enquiry')
                        @{{user}}, @{{email}}, @{{phone}}, @{{message}}, @{{sending}}
                    @else
                        @{{ user }}, @{{ order }}, @{{ order_amount }}, @{{ order_id }},
                        @{{ order_status }}
                    @endif
                    
                </span>

                @error('template')
                    <span class="text-red-700">{{ $message }}</span>
                @enderror
            </div>
            @error('template')
                <span class="text-red-600">{{ $message }}</span>
            @enderror
        @endslot

        @slot('footer')
            <x-jet-secondary-button wire:click="$toggle('openCreateModal')" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button>

            <x-jet-button class="ml-2" wire:click="storeEmailConfig" wire:loading.attr="disabled">
                {{ __('Save') }}
            </x-jet-button>
        @endslot
    </x-modals.modal>

    {{-- confirmingDeletionModal --}}
    <x-modals.delete-alert wire:model="confirmingDeletionModal"
        message="Are you sure you want to delete this Template?" />


    @push('scripts')
        <script>
            let editorOptions = {
                height: '500px',
                uiColor: '#BEFEF7',
                tabSpaces: 4,
                removePlugins: 'forms,smiley,iframe,link,div,save'
            }

            const editor1 = CKEDITOR.replace('template', editorOptions);

            editor1.on('change', function(event) {
                @this.set('template', event.editor.getData());
            })
            window.addEventListener('updateCkEditorBody', event => {
                let changedVal = @this.get('template');
                editor1.setData(changedVal)
            })
        </script>
    @endpush
</div>
