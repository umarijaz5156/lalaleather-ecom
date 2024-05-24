<header>
    <div class="w-full h-9 bg-center bg-cover bg-no-repeat flex justify-center lg:justify-start px-4 xl:justify-center items-center gap-5 relative bg-black"
        {{-- style="background-color:black;"> --}}
        style="
          background-image: url({{ asset('images/original-brown-leather-texture-background\ 3.png') }});
        ">
        <div class="flex justify-start items-center gap-2">
            {{-- <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
                <g clip-path="url(#clip0_930_9)">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M0 6.5C0 4.77609 0.684819 3.12279 1.90381 1.90381C3.12279 0.684819 4.77609 0 6.5 0C8.22391 0 9.87721 0.684819 11.0962 1.90381C12.3152 3.12279 13 4.77609 13 6.5C13 8.22391 12.3152 9.87721 11.0962 11.0962C9.87721 12.3152 8.22391 13 6.5 13C4.77609 13 3.12279 12.3152 1.90381 11.0962C0.684819 9.87721 0 8.22391 0 6.5H0ZM6.12907 9.282L9.87133 4.60373L9.19533 4.06293L6.00427 8.05047L3.744 6.1672L3.18933 6.8328L6.12907 9.28287V9.282Z"
                        fill="#F9F1E6" />
                </g>
                <defs>
                    <clipPath id="clip0_930_9">
                        <rect width="13" height="13" fill="white" />
                    </clipPath>
                </defs>
            </svg> --}}
            <h1 class="text-primary hal-font">{!! \App\Models\ConfigBasic::where('id', '1')->first()?->dynamic_notice  ?? ''!!}</h1>
        </div>
        {{-- <svg xmlns="http://www.w3.org/2000/svg" width="33" height="2" viewBox="0 0 33 2" fill="none"
            class="hidden md:block">
            <path d="M0 1L33 1" stroke="#F8E7CF" stroke-width="2" />
        </svg> --}}
        {{-- <div class="justify-start items-center gap-2 hidden sm:flex">
            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
                <g clip-path="url(#clip0_930_9)">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M0 6.5C0 4.77609 0.684819 3.12279 1.90381 1.90381C3.12279 0.684819 4.77609 0 6.5 0C8.22391 0 9.87721 0.684819 11.0962 1.90381C12.3152 3.12279 13 4.77609 13 6.5C13 8.22391 12.3152 9.87721 11.0962 11.0962C9.87721 12.3152 8.22391 13 6.5 13C4.77609 13 3.12279 12.3152 1.90381 11.0962C0.684819 9.87721 0 8.22391 0 6.5H0ZM6.12907 9.282L9.87133 4.60373L9.19533 4.06293L6.00427 8.05047L3.744 6.1672L3.18933 6.8328L6.12907 9.28287V9.282Z"
                        fill="#F9F1E6" />
                </g>
                <defs>
                    <clipPath id="clip0_930_9">
                        <rect width="13" height="13" fill="white" />
                    </clipPath>
                </defs>
            </svg>
            <h1 class="text-primary hal-font">FOR MORE INFO CALL ON 123456789</h1>
        </div> --}}
        <div class="absolute top-1/2 -translate-y-1/2 right-5 justify-start items-center gap-3 hidden lg:flex">
            <p class="text-primary">Select:</p>
            <div class="custom_select">
                <form id="languageForm">
                    <select id="languageDropdown"
                        class="peer h-full w-full rounded-[7px] border border-primary bg-[#301200] px-3 py-1.5 text-sm font-normal text-primary outline outline-0 transition-all focus:border-primary focus:ring-primary placeholder-shown:border placeholder-shown:border-primary placeholder-shown:border-t-priborder-primary empty:!bg-gray-900 focus:border-2 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50">
                        @foreach (getAllLangs() as $abbr => $lang)
                            <option value="{{ $abbr }}" {{ getLang() == $abbr ? 'selected' : '' }}>
                                {{ $lang }}</option>
                        @endforeach
                    </select>
                </form>
            </div>
        </div>
    </div>
    <nav class="bg-[#301200] py-2 container max-w-screen-2xl px-4 mx-auto hidden lg:block">
        <div class="flex justify-between items-start gap-4">
            <form class="items-center w-full hidden md:flex max-w-sm xl:max-w-md 2xl:max-w-lg">
                <label for="simple-search" class="sr-only">Search</label>
                <div class="relative w-full">
                    <div class="absolute top-1/2 rounded-md -translate-y-1/2 right-1.5">
                        <button
                            class="align-middle select-none font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs flex justify-center items-center rounded-lg bg-primary w-9 h-9 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                            type="button" data-ripple-dark="true">
                            <svg class="w-[18px] h-[18px]" xmlns="http://www.w3.org/2000/svg" width="17"
                                height="17" viewBox="0 0 17 17" fill="none">
                                <path
                                    d="M12.5714 12.0818L15.7551 15.2655M1.42856 7.30631C1.42856 8.99504 2.0994 10.6146 3.29351 11.8087C4.48762 13.0028 6.10718 13.6737 7.79591 13.6737C9.48463 13.6737 11.1042 13.0028 12.2983 11.8087C13.4924 10.6146 14.1633 8.99504 14.1633 7.30631C14.1633 5.61759 13.4924 3.99803 12.2983 2.80392C11.1042 1.60981 9.48463 0.938965 7.79591 0.938965C6.10718 0.938965 4.48762 1.60981 3.29351 2.80392C2.0994 3.99803 1.42856 5.61759 1.42856 7.30631Z"
                                    stroke="#301200" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                    <input type="text" id="simple-search"
                        class="bg-[#f8e7cf1a] border border-[#f8e7cf1a] rounded-md focus:ring-primary focus:border-primary block w-full pl-3.5 p-2.5 placeholder:text-primary text-primary"
                        placeholder="Search" required="" />
                </div>
            </form>
            <div>
                <a href="{{ route('home') }}">
                    <img class="max-w-[120px]" src="{{ asset(isset(\App\Models\ConfigBasic::where('id', 1)->first()->logo_image) ? 'storage/' . \App\Models\ConfigBasic::where('id', 1)->first()->logo_image : 'images/lala-logo.png') }}" alt="">

                </a>
            </div>
            <div class="flex justify-end items-center gap-3">
                @if (Auth::check())
                <button onclick="window.location='{{  route('order.history')  }}'"
                class="align-middle select-none bg-darkBrown text-primary font-semibold text-center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none py-3 px-6 rounded-lg shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none flex justify-center items-center gap-3"
                type="button" data-ripple-light="true">
                Order Logs 
                <svg fill="#ffff" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" xml:space="preserve"><g><g><path d="m12.608 9.936 -0.576 -0.272a0.267 0.267 0 0 0 -0.272 0L8.32 11.296a0.707 0.707 0 0 1 -0.624 0L4.24 9.664a0.267 0.267 0 0 0 -0.272 0l-0.576 0.272a0.324 0.324 0 0 0 0 0.592L7.68 12.56a0.707 0.707 0 0 0 0.624 0l4.288 -2.032c0.272 -0.128 0.272 -0.48 0.016 -0.592"/></g><g><path d="m12.608 7.696 -0.592 -0.272a0.267 0.267 0 0 0 -0.272 0L8.32 9.056a0.707 0.707 0 0 1 -0.624 0l-3.44 -1.632a0.267 0.267 0 0 0 -0.272 0l-0.592 0.272a0.324 0.324 0 0 0 0 0.592L7.68 10.336a0.707 0.707 0 0 0 0.624 0l4.288 -2.032c0.272 -0.128 0.272 -0.48 0.016 -0.608"/></g><g><path d="M3.392 6.048 7.68 8.08a0.707 0.707 0 0 0 0.624 0l4.288 -2.032a0.324 0.324 0 0 0 0 -0.592L8.304 3.424a0.707 0.707 0 0 0 -0.624 0L3.392 5.472a0.312 0.312 0 0 0 0 0.576"/></g></g></svg>
                  
            </button> 
                <button
                        class="align-middle select-none bg-darkBrown text-primary font-semibold text-center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none py-3 px-6 rounded-lg shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none flex justify-center items-center gap-3"
                        type="button" data-ripple-light="true"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Logout
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                            fill="none">
                            <path
                                d="M15 8.05354C15.0023 9.44325 14.5889 10.8019 13.8131 11.9549C13.1733 12.9092 12.3081 13.6911 11.2943 14.2316C10.2804 14.772 9.14893 15.0543 7.99999 15.0535C6.85105 15.0543 5.71961 14.772 4.70572 14.2316C3.69183 13.6911 2.82672 12.9092 2.18689 11.9549C1.57768 11.0467 1.1897 10.0085 1.05406 8.92344C0.918419 7.83835 1.03889 6.73657 1.4058 5.70643C1.77272 4.67629 2.37588 3.74644 3.16694 2.99143C3.95799 2.23641 4.91494 1.67723 5.96105 1.3587C7.00717 1.04018 8.11336 0.971183 9.19095 1.15723C10.2685 1.34329 11.2876 1.77922 12.1663 2.43008C13.0451 3.08094 13.7591 3.92862 14.2512 4.90518C14.7433 5.88174 14.9997 6.96001 15 8.05354Z"
                                stroke="#F8E7CF" />
                            <path
                                d="M9.16668 5.72032C9.16668 6.02974 9.04376 6.32648 8.82497 6.54528C8.60618 6.76407 8.30943 6.88698 8.00001 6.88698V7.66476C8.25536 7.66476 8.50821 7.61447 8.74412 7.51675C8.98003 7.41903 9.19438 7.27581 9.37494 7.09525C9.5555 6.91469 9.69872 6.70034 9.79644 6.46443C9.89416 6.22852 9.94445 5.97567 9.94445 5.72032H9.16668ZM8.00001 6.88698C7.69059 6.88698 7.39385 6.76407 7.17505 6.54528C6.95626 6.32648 6.83335 6.02974 6.83335 5.72032H6.05557C6.05557 5.97567 6.10586 6.22852 6.20358 6.46443C6.3013 6.70034 6.44453 6.91469 6.62508 7.09525C6.98974 7.4599 7.48431 7.66476 8.00001 7.66476V6.88698ZM6.83335 5.72032C6.83335 5.4109 6.95626 5.11416 7.17505 4.89536C7.39385 4.67657 7.69059 4.55366 8.00001 4.55366V3.77588C7.48431 3.77588 6.98974 3.98074 6.62508 4.34539C6.26043 4.71005 6.05557 5.20462 6.05557 5.72032H6.83335ZM8.00001 4.55366C8.30943 4.55366 8.60618 4.67657 8.82497 4.89536C9.04376 5.11416 9.16668 5.4109 9.16668 5.72032H9.94445C9.94445 5.20462 9.73959 4.71005 9.37494 4.34539C9.01028 3.98074 8.51571 3.77588 8.00001 3.77588V4.55366ZM2.68469 12.6083L2.31135 12.4979L2.25146 12.7009L2.38913 12.8619L2.68469 12.6083ZM13.3153 12.6083L13.6109 12.8619L13.7486 12.7009L13.6879 12.4979L13.3153 12.6083ZM5.66668 10.7759H10.3333V9.99809H5.66668V10.7759ZM5.66668 9.99809C4.91297 9.99823 4.17941 10.2416 3.57505 10.6919C2.97068 11.1423 2.52699 11.7757 2.31135 12.4979L3.05724 12.7195C3.22513 12.1579 3.56973 11.6654 4.03984 11.3152C4.50995 10.9651 5.08049 10.7759 5.66668 10.7759V9.99809ZM8.00001 14.6647C7.04589 14.6658 6.1029 14.4598 5.23613 14.061C4.36935 13.6621 3.59942 13.08 2.97946 12.3548L2.38913 12.8619C3.08217 13.6721 3.94269 14.3224 4.91136 14.768C5.88003 15.2135 6.9338 15.4436 8.00001 15.4425V14.6647ZM10.3333 10.7759C10.9196 10.776 11.4902 10.9652 11.9604 11.3156C12.4305 11.6659 12.775 12.1585 12.9428 12.7203L13.6879 12.4979C13.4723 11.7757 13.0293 11.1423 12.425 10.6919C11.8206 10.2416 11.0871 9.99823 10.3333 9.99809V10.7759ZM13.0206 12.3548C12.4006 13.08 11.6307 13.6621 10.7639 14.061C9.89712 14.4598 8.95413 14.6658 8.00001 14.6647V15.4425C9.06622 15.4436 10.12 15.2135 11.0887 14.768C12.0573 14.3224 12.9179 13.6721 13.6109 12.8619L13.0206 12.3548Z"
                                fill="#F8E7CF" />
                        </svg>
                    </button>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @else
                    <button onclick="window.location='{{ url('login') }}'"
                        class="align-middle select-none bg-darkBrown text-primary font-semibold text-center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none py-3 px-6 rounded-lg shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none flex justify-center items-center gap-3"
                        type="button" data-ripple-light="true">
                        Login
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                            fill="none">
                            <path
                                d="M15 8.05354C15.0023 9.44325 14.5889 10.8019 13.8131 11.9549C13.1733 12.9092 12.3081 13.6911 11.2943 14.2316C10.2804 14.772 9.14893 15.0543 7.99999 15.0535C6.85105 15.0543 5.71961 14.772 4.70572 14.2316C3.69183 13.6911 2.82672 12.9092 2.18689 11.9549C1.57768 11.0467 1.1897 10.0085 1.05406 8.92344C0.918419 7.83835 1.03889 6.73657 1.4058 5.70643C1.77272 4.67629 2.37588 3.74644 3.16694 2.99143C3.95799 2.23641 4.91494 1.67723 5.96105 1.3587C7.00717 1.04018 8.11336 0.971183 9.19095 1.15723C10.2685 1.34329 11.2876 1.77922 12.1663 2.43008C13.0451 3.08094 13.7591 3.92862 14.2512 4.90518C14.7433 5.88174 14.9997 6.96001 15 8.05354Z"
                                stroke="#F8E7CF" />
                            <path
                                d="M9.16668 5.72032C9.16668 6.02974 9.04376 6.32648 8.82497 6.54528C8.60618 6.76407 8.30943 6.88698 8.00001 6.88698V7.66476C8.25536 7.66476 8.50821 7.61447 8.74412 7.51675C8.98003 7.41903 9.19438 7.27581 9.37494 7.09525C9.5555 6.91469 9.69872 6.70034 9.79644 6.46443C9.89416 6.22852 9.94445 5.97567 9.94445 5.72032H9.16668ZM8.00001 6.88698C7.69059 6.88698 7.39385 6.76407 7.17505 6.54528C6.95626 6.32648 6.83335 6.02974 6.83335 5.72032H6.05557C6.05557 5.97567 6.10586 6.22852 6.20358 6.46443C6.3013 6.70034 6.44453 6.91469 6.62508 7.09525C6.98974 7.4599 7.48431 7.66476 8.00001 7.66476V6.88698ZM6.83335 5.72032C6.83335 5.4109 6.95626 5.11416 7.17505 4.89536C7.39385 4.67657 7.69059 4.55366 8.00001 4.55366V3.77588C7.48431 3.77588 6.98974 3.98074 6.62508 4.34539C6.26043 4.71005 6.05557 5.20462 6.05557 5.72032H6.83335ZM8.00001 4.55366C8.30943 4.55366 8.60618 4.67657 8.82497 4.89536C9.04376 5.11416 9.16668 5.4109 9.16668 5.72032H9.94445C9.94445 5.20462 9.73959 4.71005 9.37494 4.34539C9.01028 3.98074 8.51571 3.77588 8.00001 3.77588V4.55366ZM2.68469 12.6083L2.31135 12.4979L2.25146 12.7009L2.38913 12.8619L2.68469 12.6083ZM13.3153 12.6083L13.6109 12.8619L13.7486 12.7009L13.6879 12.4979L13.3153 12.6083ZM5.66668 10.7759H10.3333V9.99809H5.66668V10.7759ZM5.66668 9.99809C4.91297 9.99823 4.17941 10.2416 3.57505 10.6919C2.97068 11.1423 2.52699 11.7757 2.31135 12.4979L3.05724 12.7195C3.22513 12.1579 3.56973 11.6654 4.03984 11.3152C4.50995 10.9651 5.08049 10.7759 5.66668 10.7759V9.99809ZM8.00001 14.6647C7.04589 14.6658 6.1029 14.4598 5.23613 14.061C4.36935 13.6621 3.59942 13.08 2.97946 12.3548L2.38913 12.8619C3.08217 13.6721 3.94269 14.3224 4.91136 14.768C5.88003 15.2135 6.9338 15.4436 8.00001 15.4425V14.6647ZM10.3333 10.7759C10.9196 10.776 11.4902 10.9652 11.9604 11.3156C12.4305 11.6659 12.775 12.1585 12.9428 12.7203L13.6879 12.4979C13.4723 11.7757 13.0293 11.1423 12.425 10.6919C11.8206 10.2416 11.0871 9.99823 10.3333 9.99809V10.7759ZM13.0206 12.3548C12.4006 13.08 11.6307 13.6621 10.7639 14.061C9.89712 14.4598 8.95413 14.6658 8.00001 14.6647V15.4425C9.06622 15.4436 10.12 15.2135 11.0887 14.768C12.0573 14.3224 12.9179 13.6721 13.6109 12.8619L13.0206 12.3548Z"
                                fill="#F8E7CF" />
                        </svg>
                    </button>
                    <button onclick="window.location='{{ url('register') }}'"
                        class="align-middle select-none bg-darkBrown text-primary font-semibold text-center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none py-3 px-6 rounded-lg shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none flex justify-center items-center gap-3"
                        type="button" data-ripple-light="true">
                        Register
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                            fill="none">
                            <path
                                d="M15 8.05354C15.0023 9.44325 14.5889 10.8019 13.8131 11.9549C13.1733 12.9092 12.3081 13.6911 11.2943 14.2316C10.2804 14.772 9.14893 15.0543 7.99999 15.0535C6.85105 15.0543 5.71961 14.772 4.70572 14.2316C3.69183 13.6911 2.82672 12.9092 2.18689 11.9549C1.57768 11.0467 1.1897 10.0085 1.05406 8.92344C0.918419 7.83835 1.03889 6.73657 1.4058 5.70643C1.77272 4.67629 2.37588 3.74644 3.16694 2.99143C3.95799 2.23641 4.91494 1.67723 5.96105 1.3587C7.00717 1.04018 8.11336 0.971183 9.19095 1.15723C10.2685 1.34329 11.2876 1.77922 12.1663 2.43008C13.0451 3.08094 13.7591 3.92862 14.2512 4.90518C14.7433 5.88174 14.9997 6.96001 15 8.05354Z"
                                stroke="#F8E7CF" />
                            <path
                                d="M9.16668 5.72032C9.16668 6.02974 9.04376 6.32648 8.82497 6.54528C8.60618 6.76407 8.30943 6.88698 8.00001 6.88698V7.66476C8.25536 7.66476 8.50821 7.61447 8.74412 7.51675C8.98003 7.41903 9.19438 7.27581 9.37494 7.09525C9.5555 6.91469 9.69872 6.70034 9.79644 6.46443C9.89416 6.22852 9.94445 5.97567 9.94445 5.72032H9.16668ZM8.00001 6.88698C7.69059 6.88698 7.39385 6.76407 7.17505 6.54528C6.95626 6.32648 6.83335 6.02974 6.83335 5.72032H6.05557C6.05557 5.97567 6.10586 6.22852 6.20358 6.46443C6.3013 6.70034 6.44453 6.91469 6.62508 7.09525C6.98974 7.4599 7.48431 7.66476 8.00001 7.66476V6.88698ZM6.83335 5.72032C6.83335 5.4109 6.95626 5.11416 7.17505 4.89536C7.39385 4.67657 7.69059 4.55366 8.00001 4.55366V3.77588C7.48431 3.77588 6.98974 3.98074 6.62508 4.34539C6.26043 4.71005 6.05557 5.20462 6.05557 5.72032H6.83335ZM8.00001 4.55366C8.30943 4.55366 8.60618 4.67657 8.82497 4.89536C9.04376 5.11416 9.16668 5.4109 9.16668 5.72032H9.94445C9.94445 5.20462 9.73959 4.71005 9.37494 4.34539C9.01028 3.98074 8.51571 3.77588 8.00001 3.77588V4.55366ZM2.68469 12.6083L2.31135 12.4979L2.25146 12.7009L2.38913 12.8619L2.68469 12.6083ZM13.3153 12.6083L13.6109 12.8619L13.7486 12.7009L13.6879 12.4979L13.3153 12.6083ZM5.66668 10.7759H10.3333V9.99809H5.66668V10.7759ZM5.66668 9.99809C4.91297 9.99823 4.17941 10.2416 3.57505 10.6919C2.97068 11.1423 2.52699 11.7757 2.31135 12.4979L3.05724 12.7195C3.22513 12.1579 3.56973 11.6654 4.03984 11.3152C4.50995 10.9651 5.08049 10.7759 5.66668 10.7759V9.99809ZM8.00001 14.6647C7.04589 14.6658 6.1029 14.4598 5.23613 14.061C4.36935 13.6621 3.59942 13.08 2.97946 12.3548L2.38913 12.8619C3.08217 13.6721 3.94269 14.3224 4.91136 14.768C5.88003 15.2135 6.9338 15.4436 8.00001 15.4425V14.6647ZM10.3333 10.7759C10.9196 10.776 11.4902 10.9652 11.9604 11.3156C12.4305 11.6659 12.775 12.1585 12.9428 12.7203L13.6879 12.4979C13.4723 11.7757 13.0293 11.1423 12.425 10.6919C11.8206 10.2416 11.0871 9.99823 10.3333 9.99809V10.7759ZM13.0206 12.3548C12.4006 13.08 11.6307 13.6621 10.7639 14.061C9.89712 14.4598 8.95413 14.6658 8.00001 14.6647V15.4425C9.06622 15.4436 10.12 15.2135 11.0887 14.768C12.0573 14.3224 12.9179 13.6721 13.6109 12.8619L13.0206 12.3548Z"
                                fill="#F8E7CF" />
                        </svg>
                    </button>
                @endif
                <button onclick="window.location='{{ url('cart') }}'"
                    class="align-middle select-none bg-primary text-darkBrown font-semibold text-center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none py-3 px-6 rounded-lg shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none flex justify-center items-center gap-3"
                    type="button" data-ripple-dark="true">
                    Cart
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15"
                        fill="none">
                        <path
                            d="M5.45557 14.4142C6.04888 14.4142 6.52985 13.9332 6.52985 13.3399C6.52985 12.7466 6.04888 12.2656 5.45557 12.2656C4.86226 12.2656 4.38129 12.7466 4.38129 13.3399C4.38129 13.9332 4.86226 14.4142 5.45557 14.4142Z"
                            fill="#301200" />
                        <path
                            d="M11.9824 14.4142C12.5757 14.4142 13.0567 13.9332 13.0567 13.3399C13.0567 12.7466 12.5757 12.2656 11.9824 12.2656C11.3891 12.2656 10.9081 12.7466 10.9081 13.3399C10.9081 13.9332 11.3891 14.4142 11.9824 14.4142Z"
                            fill="#301200" />
                        <path
                            d="M14.8854 1.69989C14.8409 1.64512 14.7849 1.60087 14.7213 1.57032C14.6578 1.53978 14.5882 1.52369 14.5177 1.52323H4.57702L4.88737 2.47814H13.8922L12.6174 8.20765H5.45554L3.27356 1.29882C3.24996 1.22551 3.20897 1.159 3.1541 1.10496C3.09923 1.05092 3.0321 1.01095 2.95844 0.988473L1.00086 0.386876C0.940665 0.368379 0.877418 0.361919 0.814729 0.367865C0.75204 0.373811 0.691135 0.392047 0.635494 0.42153C0.52312 0.481075 0.439003 0.582821 0.401647 0.704386C0.364291 0.82595 0.376757 0.957376 0.436301 1.06975C0.495846 1.18212 0.597592 1.26624 0.719157 1.3036L2.43323 1.8288L4.62477 8.75195L3.84174 9.39174L3.77967 9.45381C3.58598 9.67702 3.47619 9.96078 3.46922 10.2562C3.46225 10.5517 3.55853 10.8403 3.74147 11.0724C3.8716 11.2307 4.03697 11.3563 4.22434 11.4392C4.41171 11.5221 4.61588 11.56 4.82053 11.5499H12.7893C12.9159 11.5499 13.0374 11.4996 13.1269 11.41C13.2165 11.3205 13.2668 11.199 13.2668 11.0724C13.2668 10.9458 13.2165 10.8243 13.1269 10.7348C13.0374 10.6452 12.9159 10.5949 12.7893 10.5949H4.74413C4.68915 10.5931 4.63558 10.577 4.5886 10.5484C4.54162 10.5198 4.50282 10.4795 4.47594 10.4315C4.44906 10.3835 4.43501 10.3294 4.43516 10.2744C4.4353 10.2194 4.44963 10.1653 4.47676 10.1175L5.62743 9.16256H12.9994C13.1098 9.16526 13.2177 9.12963 13.3047 9.06172C13.3918 8.99382 13.4526 8.89785 13.4768 8.79014L14.9904 2.10573C15.0049 2.03455 15.003 1.96099 14.9848 1.89066C14.9666 1.82033 14.9326 1.75508 14.8854 1.69989Z"
                            fill="#301200" />
                    </svg>
                </button>
                <div class="custom_select">
                    <form id="currencyForm">
                        {{-- {{ dd(getAllCurrencies()) }} --}}
                        <select id="currencyDropdown"
                            class="peer h-full w-full rounded-[7px] border border-primary bg-[#301200]  p-3 text-sm font-normal text-primary outline outline-0 transition-all focus:border-primary focus:ring-primary placeholder-shown:border placeholder-shown:border-primary placeholder-shown:border-t-priborder-primary empty:!bg-gray-900 focus:border-2 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50">
                            @foreach (getAllCurrencies() as $currency)
                                {{-- {{ dd($currency->exchangeRate) }} --}}
                                @unless (empty($currency->exchangeRate))
                                    <option value="{{ $currency->exchangeRate->currency_code }}"
                                        {{ getUserCurrency() == $currency->exchangeRate->currency_code ? 'selected' : '' }}>
                                        {{ $currency->name }}
                                    </option>
                                @endunless
                            @endforeach
                        </select>
                    </form>
                </div>
            </div>
        </div>
        <div class="flex justify-center items-center gap-20 mt-3">
            <a href="{{ route('home') }}"

                class="{{ request()->is('/') ? 'opacity-70' : '' }} text-primary font-medium hover:opacity-70 transition-all duration-300 ease-in-out text-lg">
                Home
            </a>
            <a href="{{ route('about-us') }}"
                class="{{ request()->is('about-us') ? 'opacity-70' : '' }} text-primary font-medium hover:opacity-70 transition-all duration-300 ease-in-out text-lg">
                About us
            </a>
            <a href="{{ route('products', ['slug_store' => 'all']) }}"
                class="{{ Illuminate\Support\Str::startsWith(request()->path(), 'products/') ? 'opacity-70' : '' }} text-primary font-medium hover:opacity-70 transition-all duration-300 ease-in-out text-lg">
                Shop
            </a>
            <a href="{{ route('blogs.index') }}"
                class=" {{ Illuminate\Support\Str::startsWith(request()->path(), 'blog') ? 'opacity-70' : '' }} text-primary font-medium hover:opacity-70 transition-all duration-300 ease-in-out text-lg">
                Blogs
            </a>
            <a href="{{ route('manufacturer', ['slug' => 'all']) }}"
                class=" {{ Illuminate\Support\Str::startsWith(request()->path(), 'manufacturer/all') ? 'opacity-70' : '' }} text-primary font-medium hover:opacity-70 transition-all duration-300 ease-in-out text-lg">
                Manufacturers
            </a>
            {{-- <a href="{{ route('manufacturer-catergory-page', ['slug' => 'all']) }}"
                class=" {{ Illuminate\Support\Str::startsWith(request()->path(), 'manufacturer/category/') ? 'opacity-70' : '' }} text-primary font-medium hover:opacity-70 transition-all duration-300 ease-in-out text-lg">
                Manufacturer Products
            </a> --}}
            <a href="{{ route('contact-us') }}"
                class=" {{ Illuminate\Support\Str::startsWith(request()->path(), 'contact') ? 'opacity-70' : '' }} text-primary font-medium hover:opacity-70 transition-all duration-300 ease-in-out text-lg">
                Contact us
            </a>
        </div>
    </nav>

    <nav class="lg:hidden">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="./index.html">
                <img class="max-w-[80px]" src="{{ asset('images/lala-logo.png') }}" alt="" />
            </a>
            <div class="flex lg:order-2 gap-3 items-center">
                <button
                    class="align-middle select-none bg-primary text-darkBrown font-semibold text-center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none py-3 px-6 rounded-lg shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none flex justify-center items-center gap-3"
                    type="button" data-ripple-dark="true">
                    Cart
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15"
                        fill="none">
                        <path
                            d="M5.45557 14.4142C6.04888 14.4142 6.52985 13.9332 6.52985 13.3399C6.52985 12.7466 6.04888 12.2656 5.45557 12.2656C4.86226 12.2656 4.38129 12.7466 4.38129 13.3399C4.38129 13.9332 4.86226 14.4142 5.45557 14.4142Z"
                            fill="#301200"></path>
                        <path
                            d="M11.9824 14.4142C12.5757 14.4142 13.0567 13.9332 13.0567 13.3399C13.0567 12.7466 12.5757 12.2656 11.9824 12.2656C11.3891 12.2656 10.9081 12.7466 10.9081 13.3399C10.9081 13.9332 11.3891 14.4142 11.9824 14.4142Z"
                            fill="#301200"></path>
                        <path
                            d="M14.8854 1.69989C14.8409 1.64512 14.7849 1.60087 14.7213 1.57032C14.6578 1.53978 14.5882 1.52369 14.5177 1.52323H4.57702L4.88737 2.47814H13.8922L12.6174 8.20765H5.45554L3.27356 1.29882C3.24996 1.22551 3.20897 1.159 3.1541 1.10496C3.09923 1.05092 3.0321 1.01095 2.95844 0.988473L1.00086 0.386876C0.940665 0.368379 0.877418 0.361919 0.814729 0.367865C0.75204 0.373811 0.691135 0.392047 0.635494 0.42153C0.52312 0.481075 0.439003 0.582821 0.401647 0.704386C0.364291 0.82595 0.376757 0.957376 0.436301 1.06975C0.495846 1.18212 0.597592 1.26624 0.719157 1.3036L2.43323 1.8288L4.62477 8.75195L3.84174 9.39174L3.77967 9.45381C3.58598 9.67702 3.47619 9.96078 3.46922 10.2562C3.46225 10.5517 3.55853 10.8403 3.74147 11.0724C3.8716 11.2307 4.03697 11.3563 4.22434 11.4392C4.41171 11.5221 4.61588 11.56 4.82053 11.5499H12.7893C12.9159 11.5499 13.0374 11.4996 13.1269 11.41C13.2165 11.3205 13.2668 11.199 13.2668 11.0724C13.2668 10.9458 13.2165 10.8243 13.1269 10.7348C13.0374 10.6452 12.9159 10.5949 12.7893 10.5949H4.74413C4.68915 10.5931 4.63558 10.577 4.5886 10.5484C4.54162 10.5198 4.50282 10.4795 4.47594 10.4315C4.44906 10.3835 4.43501 10.3294 4.43516 10.2744C4.4353 10.2194 4.44963 10.1653 4.47676 10.1175L5.62743 9.16256H12.9994C13.1098 9.16526 13.2177 9.12963 13.3047 9.06172C13.3918 8.99382 13.4526 8.89785 13.4768 8.79014L14.9904 2.10573C15.0049 2.03455 15.003 1.96099 14.9848 1.89066C14.9666 1.82033 14.9326 1.75508 14.8854 1.69989Z"
                            fill="#301200"></path>
                    </svg>
                </button>
                <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search"
                    aria-expanded="false"
                    class="lg:hidden text-primary hover:bg-[#f8e7cf1a] focus:outline-none rounded-lg text-sm p-2.5 me-1">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                    <span class="sr-only">Search</span>
                </button>
                <div class="relative hidden lg:block">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                        <span class="sr-only">Search icon</span>
                    </div>
                    <input type="text" id="search-navbar"
                        class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search..." />
                </div>

                <button data-collapse-toggle="navbar-search" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-primary rounded-lg lg:hidden hover:bg-[#f8e7cf1a] focus:outline-none"
                    aria-controls="navbar-search" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1" id="navbar-search">
                <div class="relative mt-3 lg:hidden">
                    <form class="items-center w-full">
                        <label for="simple-search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div class="absolute top-1/2 rounded-md -translate-y-1/2 right-1.5">
                                <button
                                    class="align-middle select-none font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs flex justify-center items-center rounded-lg bg-primary w-9 h-9 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                                    type="button" data-ripple-dark="true">
                                    <svg class="w-[18px] h-[18px]" xmlns="http://www.w3.org/2000/svg" width="17"
                                        height="17" viewBox="0 0 17 17" fill="none">
                                        <path
                                            d="M12.5714 12.0818L15.7551 15.2655M1.42856 7.30631C1.42856 8.99504 2.0994 10.6146 3.29351 11.8087C4.48762 13.0028 6.10718 13.6737 7.79591 13.6737C9.48463 13.6737 11.1042 13.0028 12.2983 11.8087C13.4924 10.6146 14.1633 8.99504 14.1633 7.30631C14.1633 5.61759 13.4924 3.99803 12.2983 2.80392C11.1042 1.60981 9.48463 0.938965 7.79591 0.938965C6.10718 0.938965 4.48762 1.60981 3.29351 2.80392C2.0994 3.99803 1.42856 5.61759 1.42856 7.30631Z"
                                            stroke="#301200" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>
                            <input type="text" id="simple-search"
                                class="bg-[#f8e7cf1a] border border-[#f8e7cf1a] rounded-md focus:ring-primary focus:border-primary block w-full pl-3.5 p-2.5 placeholder:text-primary text-primary"
                                placeholder="Search" required="" />
                        </div>
                    </form>
                    <div class="custom_select mt-4">
                        <form id="currencyForm">
                            {{-- {{ dd(getAllCurrencies()) }} --}}
                            <select id="currencyDropdown"
                                class="peer h-full w-full rounded-[7px] border border-primary bg-[#f8e7cf1a] p-3 text-sm font-normal text-primary outline outline-0 transition-all focus:border-primary focus:ring-primary placeholder-shown:border placeholder-shown:border-primary placeholder-shown:border-t-priborder-primary empty:!bg-gray-900 focus:border-2 focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50">
                                @foreach (getAllCurrencies() as $currency)
                                    {{-- {{ dd($currency->exchangeRate) }} --}}
                                    @unless (empty($currency->exchangeRate))
                                        <option value="{{ $currency->exchangeRate->currency_code }}"
                                            {{ getUserCurrency() == $currency->exchangeRate->currency_code ? 'selected' : '' }}>
                                            {{ $currency->name }}
                                        </option>
                                    @endunless
                                @endforeach
                            </select>
                        </form>
                    </div>
                </div>
                <ul
                    class="flex flex-col p-4 lg:p-0 mt-4 font-medium border border-[#f8e7cf1a] bg-[#f8e7cf1a] rounded-lg lg:space-x-8 rtl:space-x-reverse lg:flex-row lg:mt-0 lg:border-0 lg:bg-white dark:bg-gray-800 lg:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="{{ route('home') }}"
                            class="block py-2 px-3 text-white bg-darkBrown bg-opacity-70 rounded-md"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('about-us') }}" class="block py-2 px-3 text-primary rounded-md">About
                            us</a>
                    </li>
                    <li>
                        <a href="{{ route('products', ['slug_store' => 'all']) }}"
                            class="block py-2 px-3 text-primary rounded-md">Products</a>
                    </li>
                    <li>
                        <a href="{{ route('blogs.index') }}"
                            class="block py-2 px-3 text-primary rounded-md">Blogs</a>
                    </li>
                    {{-- <li>
                        <a href="{{ route('manufacturer-catergory-page', ['slug' => 'all']) }}"
                            class="block py-2 px-3 text-primary rounded-md">Manufacturer Products</a>
                    </li> --}}
                    <li>
                        <a href="{{ route('contact-us') }}" class="block py-2 px-3 text-primary rounded-md">Contact
                            Us</a>
                    </li>
                    @if (Auth::check())
                        <li>
                            <a href="{{ route('order.history') }}" class="block py-2 px-3 text-primary rounded-md">Order Logs</a>
                        </li>
                        <li>
                            <a href="" class="block py-2 px-3 text-primary rounded-md"
                                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Logout</a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                            style="display: none;">
                            @csrf
                        </form>
                    @else
                        <li>
                            <a href="{{ url('login') }}" class="block py-2 px-3 text-primary rounded-md">Login</a>
                        </li>
                        <li>
                            <a href="{{ url('register') }}"
                                class="block py-2 px-3 text-primary rounded-md">Register</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Language form submission
            document.getElementById('languageDropdown').addEventListener('change', function() {
                var selectedLocale = this.value;
                document.getElementById('languageForm').action = '/set-default-lang/' + selectedLocale;
                document.getElementById('languageForm').submit();
            });

            // Currency form submission
            document.getElementById('currencyDropdown').addEventListener('change', function() {
                var selectedCurrency = this.value;
                document.getElementById('currencyForm').action = '/set-user-currency/' + selectedCurrency;
                document.getElementById('currencyForm').submit();
            });
        });
    </script>
</header>
