<div class="px-6">
    <div class="my-2">
        @if (session('success'))
            <x-alerts.success :success="session('success')" />
        @endif
    </div>

    <div class="mx-3">
        <div wire:ignore.self id="accordion-collapse" data-accordion="collapse">
            <h2 id="accordion-collapse-heading-1">
                <button type="button"
                    class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-700 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800"
                    data-accordion-target="#accordion-collapse-config-basic" aria-expanded="false"
                    aria-controls="accordion-collapse-config-basic">
                    <span>Config Basic</span>
                    <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </h2>
            <div wire:ignore.self id="accordion-collapse-config-basic" class="hidden"
                aria-labelledby="accordion-collapse-heading-1">
                <div class="p-5 font-light border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                    <form wire:submit.prevent="saveSettings">
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <x-admin.form.label>Site Title</x-admin.form.label>
                                <x-admin.form.input wire:model="siteTitle" placeholder="Enter Site Title"
                                    name="title" />
                                @error('site_title')
                                    <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
                                @enderror
                            </div>{{-- dynamic-notice --}}
                            <div>
                                <x-admin.form.label>Dynamic Notice</x-admin.form.label>
                                <x-admin.form.input wire:model="dynamicNotice" placeholder="Enter Dynamic Notice"
                                    name="dynamic-notice" />
                                @error('dynamic_notice')
                                    <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <x-admin.form.label>Upload Logo</x-admin.form.label>
                                @if ($logoPrev)
                                    <x-form.upload-files wire:model="logo" fileName="logo"
                                        previous="{{ $logoPrev != null ? $logoPrev : null }}" perview />
                                @else
                                    <x-form.upload-files wire:model="logo" fileName="logo" perview />
                                @endif
                                {{-- <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG,
                                    JPG or GIF (MAX. 800x400px).
                                </p> --}}
                            </div>
                            <div>
                                <x-admin.form.label>Upload Fav Icon</x-admin.form.label>

                                @if ($favIconPrev)
                                    <x-form.upload-files wire:model="favIcon" fileName="favIcon"
                                        previous="{{ $favIconPrev ?? null }}" perview />
                                @else
                                    <x-form.upload-files wire:model="favIcon" fileName="favIcon" perview />
                                @endif
                                {{-- <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG,
                                    JPG or GIF (MAX. 800x400px).
                                </p> --}}
                            </div>
                        </div>
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <x-admin.form.label>Meta Title</x-admin.form.label>
                                <x-admin.form.input wire:model="metaTitle" placeholder="Enter meta title" />
                                @error('metaTitle')
                                    <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
                                @enderror
                            </div>

                            <div>
                                <x-admin.form.label>Meta Description</x-admin.form.label>
                                <x-admin.form.textarea wire:model="metaDescription"
                                    placeholder="Enter meta description"></x-admin.form.textarea>
                                @error('metaDescription')
                                    <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <x-admin.button type="submit">Save</x-admin.button>
                    </form>
                </div>
            </div>

            {{-- Admin Email Configs --}}
            <livewire:admin.manage.admin-email-config />

            {{-- Homepage Configs --}}
            <livewire:admin.manage.homepage-config />

            {{-- SMTP Configs --}}
            <livewire:admin.manage.smtp-config />
        </div>
    </div>
</div>
