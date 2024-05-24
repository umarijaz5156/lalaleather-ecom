<x-web-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 bg-center bg-cover bg-no-repeat "
        style="background: linear-gradient(45deg, #000000 , #662a06);">

        <div class="w-full sm:max-w-md mt-6 px-6 py-4  overflow-hidden sm:rounded-lg shadow-lg backdrop-blur-xl shadow-[#E5BB88]"
            style="background-color: #301200">

            <x-jet-validation-errors class="mb-4" />

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div>
                    <x-jet-label class="text-primary" for="email" value="{{ __('Email') }}" />
                    <input id="email"
                        class="bg-[#f8e7cf1a] border border-[#f8e7cf1a] rounded-md focus:ring-primary focus:border-primary block w-full pl-3.5 p-2.5 placeholder:text-primary text-primary"
                        type="email" name="email" :value="old('email')" required autofocus />
                </div>

                <div class="mt-4">
                    <x-jet-label class="text-primary" for="password" value="{{ __('Password') }}" />
                    <input id="password"
                        class="bg-[#f8e7cf1a] border border-[#f8e7cf1a] rounded-md focus:ring-primary focus:border-primary block w-full pl-3.5 p-2.5 placeholder:text-primary text-primary"
                        type="password" name="password" required autocomplete="current-password" />
                </div>

                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-primary">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-primary hover:text-gray-600"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <button
                        class="ml-4 align-middle select-none bg-primary text-darkBrown font-semibold text-center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none py-1 px-4 rounded-lg shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none flex justify-center items-center gap96">
                        {{ __('Log in') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-web-layout>