<div>
    <h2 id="accordion-collapse-heading-3">
        <button type="button"
            class="flex items-center justify-between w-full p-5 font-medium text-left text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800"
            data-accordion-target="#accordion-collapse-revenue-configs" aria-expanded="false"
            aria-controls="accordion-collapse-revenue-configs">
            <span>Config SMTP</span>
            <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>
    </h2>
    <div wire:ignore.self id="accordion-collapse-revenue-configs" class="hidden"
        aria-labelledby="accordion-collapse-heading-3">
        <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">

            <form wire:submit.prevent="updateSmtpSettings">
                <div class="grid gap-3 mb-6 md:grid-cols-2 lg:grid-cols-3">
                    <div class="">
                        <x-admin.form.label>SMTP/IMAP/POP</x-admin.form.label>

                        <x-admin.form.input wire:model.defer="mail_driver" />

                        @error('mail_driver')
                            <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="">
                        <x-admin.form.label>Outgoing Server</x-admin.form.label>

                        <x-admin.form.input wire:model.defer="mail_host" />

                        @error('mail_host')
                            <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="">
                        <x-admin.form.label>Outgoing Port</x-admin.form.label>

                        <x-admin.form.input wire:model.defer="mail_port" />

                        @error('mail_port')
                            <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="">
                        <x-admin.form.label>Username</x-admin.form.label>

                        <x-admin.form.input wire:model.defer="mail_username" />

                        @error('mail_username')
                            <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="">
                        <x-admin.form.label>Password</x-admin.form.label>

                        <x-admin.form.input wire:model.defer="mail_password" />

                        @error('mail_password')
                            <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="">
                        <x-admin.form.label>Encryption Type</x-admin.form.label>

                        <x-admin.form.input wire:model.defer="mail_encryption" />

                        @error('mail_encryption')
                            <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="">
                        <x-admin.form.label>From Mail Title</x-admin.form.label>

                        <x-admin.form.input wire:model.defer="mail_from_address" />

                        @error('mail_from_address')
                            <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="">
                        <x-admin.form.label>Mailing Address</x-admin.form.label>

                        <x-admin.form.input wire:model.defer="mail_from_name" />

                        @error('mail_from_name')
                            <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                </div>

                <x-admin.button type="submit">Save</x-admin.button>
            </form>
        </div>
    </div>
</div>
