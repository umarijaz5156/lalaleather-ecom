<x-web-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 bg-center bg-cover bg-no-repeat " style="background: linear-gradient(45deg, #000000 , #662a06);">
        
        <div class="w-full sm:max-w-md mt-6 px-6 py-4  overflow-hidden sm:rounded-lg shadow-lg backdrop-blur-xl shadow-[#E5BB88]" style="background-color: #301200">
            <x-jet-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div>
                    <x-jet-label for="name" class="text-primary" value="{{ __('Name') }}" />
                    <input id="name" class="bg-[#f8e7cf1a] border border-[#f8e7cf1a] rounded-md focus:ring-primary focus:border-primary block w-full pl-3.5 p-2.5 placeholder:text-primary text-primary" type="text" name="name"
                        :value="old('name')" required autofocus autocomplete="name" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="email" class="text-primary" value="{{ __('Email') }}" />
                    <input id="email" class="bg-[#f8e7cf1a] border border-[#f8e7cf1a] rounded-md focus:ring-primary focus:border-primary block w-full pl-3.5 p-2.5 placeholder:text-primary text-primary" type="email" name="email"
                        :value="old('email')" required />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password" class="text-primary" value="{{ __('Password') }}" />
                    <input id="password" class="bg-[#f8e7cf1a] border border-[#f8e7cf1a] rounded-md focus:ring-primary focus:border-primary block w-full pl-3.5 p-2.5 placeholder:text-primary text-primary" type="password" name="password" required
                        autocomplete="new-password" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password_confirmation" class="text-primary" value="{{ __('Confirm Password') }}" />
                    <input id="password_confirmation" class="bg-[#f8e7cf1a] border border-[#f8e7cf1a] rounded-md focus:ring-primary focus:border-primary block w-full pl-3.5 p-2.5 placeholder:text-primary text-primary" type="password"
                        name="password_confirmation" required autocomplete="new-password" />
                </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <x-jet-label for="terms">
                            <div class="flex items-center">
                                <x-jet-checkbox name="terms" id="terms" required />

                                <div class="ml-2">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' =>
                                            '<a target="_blank" href="' .
                                            route('terms.show') .
                                            '" class="underline text-sm text-gray-600 hover:text-gray-900">' .
                                            __('Terms of Service') .
                                            '</a>',
                                        'privacy_policy' =>
                                            '<a target="_blank" href="' .
                                            route('policy.show') .
                                            '" class="underline text-sm text-gray-600 hover:text-gray-900">' .
                                            __('Privacy Policy') .
                                            '</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </x-jet-label>
                    </div>
                @endif

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-primary text-sm  hover:text-gray-600" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <button class="ml-4 align-middle select-none bg-primary text-darkBrown font-semibold text-center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none py-1 px-4 rounded-lg shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none flex justify-center items-center gap96">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-web-layout>
