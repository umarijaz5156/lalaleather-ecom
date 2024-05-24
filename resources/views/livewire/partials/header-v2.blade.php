<div
    class="hidden lg:block main-navbar bg-theme-black h-screen lg:h-auto text-gray-100 py-6 lg:py-4 fixed lg:static w-full left-0 top-0  bg-[#301200]">
    <style>
        .activeee {
            font-weight: 600;
            color: #752D00;
        }
        #languageDropdown, #currencyDropdown {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background-color: #301200;
    width: 120px;
}



    </style>
    <div class="w-full px-5">
        <div class="select-none flex flex-col lg:flex-row justify-between lg:items-center">
            <div class="select-none logo font-black text-2xl cursor-pointer text-center lg:text-left relative">
                <span id="closeButton"
                    class="inline-block lg:hidden select-none rotate-45 absolute left-5 -top-3 font-thin text-6xl">+</span>
                <a href="/" class="hidden lg:block">
                    <img class="mr-3" src="{{ asset('images/lala-logo.png') }}" alt="">
                </a>
            </div>
            <div class="navbar ">
                <ul
                    class="flex flex-col lg:flex-row space-y-6 lg:space-y-0 mt-20 lg:mt-0 lg:items-center lg:space-x-7 xl:space-x-16 pl-5 lg:pl-0">
                    <li>
                        <a href="{{ route('home') }}"
                            class="font-normal text-[#F8E7CF] rounded-md transition-all duration-200 flex lg:inline-block items-center space-x-4 lg:space-x-0 {{ Request::is('/*') ? 'active' : '' }}">
                            <span class="block lg:hidden">
                                <i class="fa-solid fa-house text-lg "></i>
                            </span>
                            <span>Home</span>
                        </a>
                    </li>
                    <li><a href="{{ route('about-us') }}"
                            class="font-normal text-[#F8E7CF] rounded-md transition-all duration-200 flex lg:inline-block items-center space-x-4 lg:space-x-0 {{ Request::is('about-us*') ? 'active' : '' }}">
                            <span class="block lg:hidden">
                                <i class="fa-solid fa-people-group text-lg "></i>
                            </span>
                            <span>About us</span>
                        </a></li>
                    <li><a href="{{ route('products', ['slug_store' => 'all']) }}"
                            class="font-normal text-[#F8E7CF] rounded-md transition-all duration-200 flex lg:inline-block items-center space-x-4 lg:space-x-0 {{ Request::is('shop-product*') ? 'active' : '' }}">
                            <span class="block lg:hidden">
                                <i class="fa-solid fa-box text-lg "></i>
                            </span>
                            <span>Products</span>
                        </a></li>
                    <li><a href="{{ route('blogs.index') }}"
                            class="font-normal text-[#F8E7CF] rounded-md transition-all duration-200 flex lg:inline-block items-center space-x-4 lg:space-x-0 {{ Request::is('blog*') ? 'active' : '' }}">
                            <span class="block lg:hidden">
                                <i class="fa-sharp fa-solid fa-hand-holding-seedling text-lg "></i>
                            </span>
                            <span>Blog</span>
                        </a></li>
                    <li><a href="{{ route('manufacturer-catergory-page', ['slug' => 'all']) }}"
                            class="font-normal text-[#F8E7CF] rounded-md transition-all duration-200 flex lg:inline-block items-center space-x-4 lg:space-x-0 {{ Request::is('blog*') ? 'active' : '' }}">
                            <span class="block lg:hidden">
                                <i class="fa-sharp fa-solid fa-hand-holding-seedling text-lg "></i>
                            </span>
                            <span>Manufacturer Products</span>
                        </a></li>
                    <li><a href="{{ route('contact-us') }}"
                            class="font-normal text-[#F8E7CF] rounded-md transition-all duration-200 flex lg:inline-block items-center space-x-4 lg:space-x-0 {{ Request::is('contact*') ? 'active' : '' }}">
                            <span class="block lg:hidden">
                                <i class="fa-solid fa-address-book text-lg "></i>
                            </span>
                            <span>Contact us </span>
                        </a></li>
                </ul>
            </div>

            @if (Auth::check())
                <div
                    class="flex md:hidden lg:flex items-center space-x-3 cursor-pointer group order-0 md:order-1 mt-8 md:mt-0">
                    <div class="div justify-center items-center space-x-5 hidden md:flex">
                        <button
                            onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();"
                            class="w-[133px] h-[41px] bg-[#511F00] text-white hover:bg-white hover:text-[#511F00] border border-[#511F00]">Logout</button>
                    </div>
                </div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @else
                <div
                    class="flex md:hidden lg:flex items-center space-x-3 cursor-pointer group order-0 md:order-1 mt-8 md:mt-0">
                    <div class="div justify-center items-center space-x-5 hidden md:flex">
                        <button onclick="window.location='{{ url('login') }}'"
                            class="w-[133px] h-[41px] bg-[#511F00] text-white hover:bg-white hover:text-[#511F00] border border-[#511F00]">Sign
                            in</button>
                        <button onclick="window.location='{{ url('register') }}'"
                            class="w-[133px] h-[41px] bg-transparent text-white hover:bg-[#511F00] hover:text-white border border-white">Sign
                            up</button>
                    </div>
                </div>
            @endif
            {{-- getAllLangs() --}}
            <div class="flex justify-center items-center space-x-3 cursor-pointer group order-0 md:order-1 mt-8 md:mt-0">
                {{-- <div class="row"> --}}
                <div class=" div justify-center items-center space-x-5 hidden md:flex">
                    <form id="languageForm">

                        <select  id="languageDropdown">
                            @foreach (getAllLangs() as $abbr => $lang)
                                <option value="{{ $abbr }}" {{ getLang() == $abbr ? 'selected' : '' }}>
                                    {{ $lang }}</option>
                            @endforeach
                        </select>
                    </form>
                </div>
                <div class="div justify-center items-center space-x-5 hidden md:flex">
                    <form id="currencyForm">
                        {{-- {{ dd(getAllCurrencies()) }} --}}
                        <select  id="currencyDropdown">
                            @foreach (getAllCurrencies() as $currency)
                            {{-- {{ dd($currency->exchangeRate) }} --}}
                                @unless(empty($currency->exchangeRate))
                                    <option value="{{ $currency->exchangeRate->currency_code }}" {{ getUserCurrency() == $currency->exchangeRate->currency_code ? 'selected' : '' }}>
                                        {{ $currency->name }}
                                    </option>
                                @endunless
                            @endforeach
                        </select>
                    </form>
                </div>                
            {{-- </div> --}}
            </div>
        </div>
    </div>
</div>

{{-- <script>
    document.getElementById('languageDropdown').addEventListener('change', function() {
        document.getElementById('languageForm').submit();
    });
    document.getElementById('currencyDropdown').addEventListener('change', function() {
        document.getElementById('currencyForm').submit();
    });

    
</script> --}}
<script>
    $(document).ready(function() {
        // Language form submission
        $('#languageDropdown').on('change', function() {
            var selectedLocale = $(this).val();
            $('#languageForm').attr('action', '{{ url("set-default-lang") }}/' + selectedLocale).submit();
        });

        // Currency form submission
        $('#currencyDropdown').on('change', function() {
            var selectedCurrency = $(this).val();
            $('#currencyForm').attr('action', '{{ url("set-user-currency") }}/' + selectedCurrency).submit();
        });
    });
</script>

