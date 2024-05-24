<x-web-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 bg-center bg-cover bg-no-repeat "
        style="background: linear-gradient(45deg, #000000 , #662a06);">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4  overflow-hidden sm:rounded-lg shadow-lg backdrop-blur-xl shadow-[#E5BB88]"
            style="background-color: #301200">

            <div class="mb-4 text-sm text-primary">
                {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
            </div>

            <x-jet-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

                <div>
                    <x-jet-label for="password" class="text-primary" value="{{ __('Password') }}" />
                    <input id="password" class="bg-[#f8e7cf1a] border border-[#f8e7cf1a] rounded-md focus:ring-primary focus:border-primary block w-full pl-3.5 p-2.5 placeholder:text-primary text-primary" type="password" name="password" required
                        autocomplete="current-password" autofocus />
                </div>

                <div class="flex justify-end mt-4">
                    <button
                        class="ml-4 align-middle select-none bg-primary text-darkBrown font-semibold text-center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none py-1 px-4 rounded-lg shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none flex justify-center items-center gap96">
                        {{ __('Confirm') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
    </x-guest-layout>
