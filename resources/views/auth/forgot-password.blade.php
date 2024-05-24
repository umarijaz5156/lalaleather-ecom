<x-web-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 bg-center bg-cover bg-no-repeat " style="background: linear-gradient(45deg, #000000 , #662a06);">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4  overflow-hidden sm:rounded-lg shadow-lg backdrop-blur-xl shadow-[#E5BB88]" style="background-color: #301200">
           
        <div class="mb-4 text-sm text-primary">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" class="text-primary" value="{{ __('Email') }}" />
                <input id="email" class="bg-[#f8e7cf1a] border border-[#f8e7cf1a] rounded-md focus:ring-primary focus:border-primary block w-full pl-3.5 p-2.5 placeholder:text-primary text-primary" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <button class="align-middle select-none bg-primary text-darkBrown font-semibold text-center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none py-1 px-4 rounded-lg shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none flex justify-center items-center gap96">
                    {{ __('Email Password Reset Link') }}
                </button>
            </div>
        </form>
    </div>
</div>
</x-web-layout>
