<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    {{-- <style>
        /* WebKit-based browsers */
::-webkit-scrollbar {
  width: 10px; /* Width of the scrollbar */
}

::-webkit-scrollbar-thumb {
  background: linear-gradient(to top left, #8B008B, #FF69B4); /* Gradient background */
  border-radius: 10px; /* Rounded corners */
}

    /* Firefox */
    scrollbar-color: linear-gradient(to top left, #8B008B, #FF69B4); /* Gradient background */
    scrollbar-width: thin; /* Width of the scrollbar */

    </style> --}}
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="/soft-ui/assets/img/apple-icon.png" />
    <link rel="icon"  href="{{ asset(isset(\App\Models\ConfigBasic::where('id', 1)->first()->logo_image) ? 'storage/' . \App\Models\ConfigBasic::where('id', 1)->first()->fav_icon : 'images/favicon-logo.png') }}" />
    <title>{{ config('app.name', 'Lala Leather') }}</title>
    <meta name="title" content="{{\App\Models\ConfigBasic::where('id', 1)->first()->meta_title ?? 'Lalaleather'  }}">
    <meta name="description" content="{{\App\Models\ConfigBasic::where('id', 1)->first()->meta_description ?? 'Lalaleather'  }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <link href="https://cdn.jsdelivr.net/gh/duyplus/fontawesome-pro/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/gh/duyplus/fontawesome-pro/css/all.min.css" rel="stylesheet" type="text/css" />
    {{-- <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script> --}}

    <link href="https://cdn.jsdelivr.net/npm/tom-select/dist/css/tom-select.css" rel="stylesheet" />

    <!-- Nucleo Icons -->
    <link href="{!! asset('/soft-ui/assets/css/nucleo-icons.css') !!}" rel="stylesheet" />
    <link href="{!! asset('/soft-ui/assets/css/nucleo-svg.css') !!}" rel="stylesheet" />

    <!-- /* Font Awsome Cdn */ -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/css/uikit.min.css" />

    <!-- Popper -->
    {{-- <script src="https://unpkg.com/@popperjs/core@2"></script> --}}
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    {{-- <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script> --}}
    {{-- CKEditor CDN --}}
    <script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
    <!-- Main Styling -->
    <link href="{!! asset('/soft-ui/assets/css/soft-ui-dashboard-tailwind.css?v=1.0.4') !!}" rel="stylesheet" />
    <link href="{!! asset('/soft-ui/assets/css/tooltips.css') !!}" rel="stylesheet" />
    <link href="{!! asset('/soft-ui/assets/css/perfect-scrollbar.css') !!}" rel="stylesheet" />
    <!-- PikaDay -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">

    @livewireStyles

    @stack('styles')
</head>

<body class="m-0 font-sans antialiased font-normal text-base leading-default bg-gray-50 text-slate-500">
    <!-- sidenav  -->
    <aside
        class="max-w-70.5 ease-nav-brand z-900 fixed inset-y-0 my-4 ml-4 block w-full -translate-x-full flex-wrap items-center justify-between overflow-y-auto rounded-2xl border-0 bg-white p-0 antialiased shadow-none transition-transform duration-200 xl:left-0 xl:translate-x-0 xl:bg-transparent">
        <div class="h-19.5">
            <i class="absolute top-0 right-0 hidden p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden"
                sidenav-close></i>
            <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap text-slate-700" href="javascript:;" target="_blank">
               
                <img src=" {{ asset(isset(\App\Models\ConfigBasic::where('id', 1)->first()->logo_image) ? 'storage/' . \App\Models\ConfigBasic::where('id', 1)->first()->logo_image : 'images/lala-logo.png') }}"
                    class="inline h-full max-w-full transition-all duration-200 ease-nav-brand max-h-8"
                    alt="main_logo" />
                {{-- <img class="max-w-[120px]" src="{{ }}" alt="" /> --}}
                <span class="ml-1 font-semibold transition-all duration-200 ease-nav-brand">Admin Dashboard</span>
            </a>
        </div>

        <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />

        <div class="items-center block w-auto max-h-screen overflow-auto grow basis-full"> {{-- removed custom class
            (h-sidenav) --}}
            <ul class="flex flex-col pl-0 mb-0">
                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg  px-4  transition-colors {{ Request::is('admin/dashboard*') ? 'shadow-soft-xl  rounded-lg bg-white  font-semibold text-slate-700' : '' }}"
                        href="{{ route('admin.dashboard') }}">
                        <div
                            class="{{ Request::is('admin/dashboard*') ? 'bg-gradient-to-tl from-purple-700 to-pink-500' : '' }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                            <svg fill="#000000" width="12px" height="12px" viewBox="0 0 0.54 0.54" version="1.1"
                                preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>dashboard-line</title>
                                <path class="clr-i-outline clr-i-outline-path-1"
                                    d="m0.378 0.185 -0.089 0.087a0.045 0.045 0 1 0 0.021 0.021l0.089 -0.087Z" />
                                <path class="clr-i-outline clr-i-outline-path-2"
                                    d="M0.27 0.064A0.247 0.247 0 0 0 0.081 0.471l0.004 0.005h0.369l0.004 -0.005A0.247 0.247 0 0 0 0.27 0.064m0.17 0.383H0.1a0.216 0.216 0 0 1 -0.047 -0.118H0.105v-0.03H0.053A0.216 0.216 0 0 1 0.105 0.169l0.037 0.037 0.021 -0.021 -0.036 -0.037A0.216 0.216 0 0 1 0.255 0.094v0.052h0.03V0.095a0.217 0.217 0 0 1 0.201 0.204h-0.052v0.03h0.053a0.216 0.216 0 0 1 -0.047 0.118" />
                                <path x="0" y="0" width="36" height="36" fill-opacity="0"
                                    d="M0 0H0.54V0.54H0V0z" />
                            </svg>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Dashboard</span>
                    </a>
                </li>
                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors {{ Request::is('admin/products*') ? 'active' : '' }}"
                        href="{{ route('admin.product') }}">
                        <div
                            class="{{ Request::is('admin/products*') ? 'bg-gradient-to-tl from-purple-700 to-pink-500' : '' }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current stroke-0 text-center xl:p-2.5">
                            <svg width="12px" height="12px" viewBox="0 0 24 24" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

                                <title />

                                <g fill="none" fill-rule="evenodd" id="页面-1" stroke="none" stroke-width="1">

                                    <g id="导航图标" transform="translate(-325.000000, -80.000000)">

                                        <g id="编组" transform="translate(325.000000, 80.000000)">

                                            <polygon fill="#FFFFFF" fill-opacity="0.01" fill-rule="nonzero"
                                                id="路径" points="24 0 0 0 0 24 24 24" />

                                            <polygon id="路径" points="22 7 12 2 2 7 2 17 12 22 22 17"
                                                stroke="#212121" stroke-linejoin="round" stroke-width="1.5" />

                                            <line id="路径" stroke="#212121" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="1.5" x1="2"
                                                x2="12" y1="7" y2="12" />

                                            <line id="路径" stroke="#212121" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="1.5" x1="12"
                                                x2="12" y1="22" y2="12" />

                                            <line id="路径" stroke="#212121" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="1.5" x1="22"
                                                x2="12" y1="7" y2="12" />

                                            <line id="路径" stroke="#212121" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="1.5" x1="17"
                                                x2="7" y1="4.5" y2="9.5" />

                                        </g>

                                    </g>

                                </g>

                            </svg>
                            {{-- <svg fill="#000000" width="12px" height="12px" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><path d="m74 42a2 2 0 0 1 2 1.85v28.15a6 6 0 0 1 -5.78 6h-40.22a6 6 0 0 1 -6-5.78v-28.22a2 2 0 0 1 1.85-2zm-15.5 8.34-.12.1-11.45 12.41-5.2-5a1.51 1.51 0 0 0 -2-.1l-.11.1-2.14 1.92a1.2 1.2 0 0 0 -.1 1.81l.1.11 7.33 6.94a3.07 3.07 0 0 0 2.14.89 2.81 2.81 0 0 0 2.13-.89l5.92-6.29.43-.44.42-.45.55-.58.21-.22.42-.44 5.62-5.93a1.54 1.54 0 0 0 .08-1.82l-.08-.1-2.14-1.92a1.51 1.51 0 0 0 -2.01-.1zm15.5-28.34a6 6 0 0 1 6 6v6a2 2 0 0 1 -2 2h-56a2 2 0 0 1 -2-2v-6a6 6 0 0 1 6-6z"/></svg> --}}
                            {{-- <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>Product</title> <!-- Updated title -->
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF"
                                    fill-rule="nonzero">
                                    <g transform="translate(1716.000000, 291.000000)">
                                        <g transform="translate(453.000000, 454.000000)">
                                            <path class="fill-slate-800 opacity-60"
                                                d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z">
                                            </path>
                                            <path class="fill-slate-800"
                                                d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                            </path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg> --}}
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Products</span>
                    </a>
                </li>
                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors {{ Request::is('admin/manufacturer*') ? 'active' : '' }}"
                        href="{{ route('admin.manufacturer-products-list') }}">
                        <div
                            class="{{ Request::is('admin/manufacturer*') ? 'bg-gradient-to-tl from-purple-700 to-pink-500' : '' }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current stroke-0 text-center xl:p-2.5">
                            <svg width="12px" height="12px" viewBox="0 -0.045 2.385 2.385" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1.069 0.928c0.074 -0.055 0.136 -0.103 0.199 -0.15 0.093 -0.069 0.187 -0.137 0.281 -0.206A0.21 0.21 0 0 1 1.575 0.556c0.051 -0.027 0.09 -0.003 0.092 0.054 0.002 0.094 0.006 0.188 0.009 0.29 0.017 -0.01 0.028 -0.015 0.039 -0.022a1020.96 1020.96 0 0 0 0.496 -0.34 0.3 0.3 0 0 1 0.066 -0.036c0.051 -0.018 0.082 0.002 0.088 0.056q0.002 0.025 0.002 0.05l-0.002 1.375c0 0.069 0.002 0.138 0.004 0.207 0.001 0.042 -0.017 0.063 -0.06 0.062 -0.042 0 -0.084 -0.005 -0.126 -0.005 -0.286 0 -0.573 0.001 -0.859 0.003 -0.182 0.002 -0.364 0.006 -0.546 0.011 -0.157 0.004 -0.313 0.013 -0.47 0.018 -0.061 0.002 -0.121 0.001 -0.182 -0.004 -0.064 -0.005 -0.097 -0.043 -0.098 -0.106 -0.003 -0.241 -0.006 -0.482 -0.006 -0.722 0 -0.271 0.003 -0.542 0.006 -0.814 0.001 -0.06 0.006 -0.121 0.01 -0.181 0.002 -0.034 0.02 -0.055 0.057 -0.061 0.102 -0.014 0.203 -0.027 0.306 -0.035 0.06 -0.005 0.079 0.013 0.087 0.073 0.011 0.083 0.018 0.167 0.026 0.251 0.008 0.082 0.014 0.164 0.022 0.254 0.015 -0.01 0.027 -0.018 0.038 -0.026C0.671 0.832 0.767 0.754 0.864 0.679a0.63 0.63 0 0 1 0.098 -0.062c0.05 -0.026 0.085 -0.007 0.095 0.049 0.003 0.023 0.004 0.047 0.004 0.07 0.003 0.06 0.005 0.121 0.008 0.193m1.185 1.218c-0.028 -0.507 -0.005 -1.009 0.017 -1.516a0.195 0.195 0 0 0 -0.025 0.012 305.55 305.55 0 0 0 -0.58 0.395c-0.043 0.03 -0.088 0.015 -0.099 -0.037a0.205 0.205 0 0 1 -0.001 -0.05c0.002 -0.035 0.005 -0.071 0.006 -0.106 0.001 -0.049 0 -0.099 0 -0.159 -0.066 0.049 -0.124 0.091 -0.181 0.134 -0.098 0.075 -0.195 0.15 -0.292 0.225 -0.03 0.023 -0.06 0.025 -0.094 0.009 -0.035 -0.017 -0.049 -0.044 -0.048 -0.081 0.001 -0.052 0.004 -0.104 0.006 -0.156 0.001 -0.029 0 -0.058 0 -0.092 -0.013 0.009 -0.021 0.013 -0.027 0.018 -0.085 0.074 -0.171 0.147 -0.256 0.221 -0.047 0.041 -0.091 0.085 -0.137 0.128 -0.024 0.022 -0.051 0.032 -0.083 0.021 -0.031 -0.011 -0.042 -0.038 -0.046 -0.067a0.255 0.255 0 0 1 -0.002 -0.045q0.003 -0.248 0.006 -0.495c0 -0.018 0 -0.035 0 -0.058L0.11 0.509c0 0.047 0 0.091 0 0.134 0.001 0.221 0.002 0.441 0.002 0.662 0 0.268 -0.015 0.535 0.006 0.803 0.002 0.025 0.007 0.049 0.011 0.077 0.356 -0.013 0.707 -0.031 1.059 -0.037 0.354 -0.006 0.707 -0.001 1.065 -0.001"
                                    fill="#000000" />
                                <path
                                    d="M0.502 0.032c0.043 0.013 0.086 0.024 0.128 0.039 0.047 0.017 0.093 0.039 0.14 0.058 0.053 0.021 0.1 0.012 0.146 -0.023a0.915 0.915 0 0 1 0.12 -0.073c0.055 -0.029 0.112 -0.026 0.171 -0.008 0.066 0.02 0.134 0.032 0.2 0.048 0.021 0.005 0.046 0.003 0.048 0.033a0.049 0.049 0 0 1 -0.049 0.049c-0.043 0.003 -0.087 0.001 -0.13 -0.003a0.152 0.152 0 0 1 -0.067 -0.022c-0.059 -0.039 -0.111 -0.023 -0.163 0.013 -0.022 0.015 -0.045 0.029 -0.066 0.046 -0.066 0.053 -0.141 0.064 -0.219 0.041a1.44 1.44 0 0 1 -0.173 -0.068C0.513 0.128 0.418 0.14 0.36 0.198a0.268 0.268 0 0 0 -0.047 0.076c-0.01 0.021 -0.02 0.04 -0.045 0.04 -0.022 0 -0.046 -0.023 -0.045 -0.052 0.001 -0.031 0.009 -0.062 0.025 -0.09 0.057 -0.092 0.147 -0.129 0.255 -0.14"
                                    fill="#000000" />
                                <path
                                    d="M0.522 1.315c0.062 0 0.124 -0.001 0.187 0 0.072 0.002 0.071 0.003 0.096 0.073 0.015 0.041 0.014 0.089 0.014 0.134 0 0.037 -0.021 0.053 -0.064 0.056 -0.07 0.006 -0.141 0.011 -0.211 0.015 -0.067 0.004 -0.134 0.01 -0.201 0.011 -0.068 0.001 -0.09 -0.022 -0.095 -0.089 -0.002 -0.032 -0.008 -0.063 -0.009 -0.095 -0.002 -0.051 0.017 -0.098 0.088 -0.095 0.065 0.003 0.131 0.001 0.196 0.001zm-0.186 0.206 0.377 -0.029 0.006 -0.088H0.302l0.034 0.117z"
                                    fill="#000000" />
                                <path
                                    d="M1.837 1.547c-0.067 -0.004 -0.134 -0.007 -0.201 -0.013 -0.041 -0.004 -0.057 -0.019 -0.06 -0.061a0.9 0.9 0 0 1 -0.001 -0.121c0.002 -0.041 0.017 -0.057 0.057 -0.064a0.885 0.885 0 0 1 0.1 -0.011c0.099 -0.005 0.198 -0.01 0.297 -0.012 0.069 -0.002 0.083 0.014 0.086 0.081 0.001 0.025 0.003 0.05 0.004 0.076 0.002 0.084 -0.031 0.108 -0.119 0.122 -0.026 0.004 -0.054 0 -0.081 0s-0.054 0 -0.081 0zm0.181 -0.197a1.478 1.478 0 0 0 -0.369 -0.002c-0.004 0.04 -0.007 0.074 -0.011 0.114l0.38 -0.013z"
                                    fill="#000000" />
                                <path
                                    d="M1.207 1.551c-0.067 -0.004 -0.134 -0.004 -0.201 -0.012 -0.076 -0.009 -0.09 -0.03 -0.085 -0.107 0.008 -0.099 0.008 -0.1 0.105 -0.108 0.114 -0.01 0.228 -0.018 0.341 -0.026 0.049 -0.004 0.069 0.011 0.077 0.059 0.006 0.038 0.01 0.076 0.01 0.115 0.001 0.05 -0.018 0.068 -0.071 0.07 -0.059 0.002 -0.118 0 -0.176 0zm0.156 -0.102 -0.006 -0.071c-0.123 0.005 -0.241 0.007 -0.358 0.027v0.063c0.121 0.006 0.243 0 0.364 -0.018z"
                                    fill="#000000" />
                            </svg>
                            {{-- <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>credit-card</title>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF"
                                    fill-rule="nonzero">
                                    <g transform="translate(1716.000000, 291.000000)">
                                        <g transform="translate(453.000000, 454.000000)">
                                            <path class="fill-slate-800 opacity-60"
                                                d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z">
                                            </path>
                                            <path class="fill-slate-800"
                                                d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                            </path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg> --}}
                        </div>
                        <span
                            class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft overflow-x-hidden">Manufacturer
                            Products</span>
                    </a>
                </li>
                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors {{ Request::is('admin/blogs/*') ? 'active' : '' }}"
                        href="{{ route('admin.list-blogs') }}">
                        <div
                            class="{{ Request::is('admin/blogs/*') ? 'bg-gradient-to-tl from-purple-700 to-pink-500' : '' }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current stroke-0 text-center xl:p-2.5">
                            <svg width="12px" height="12px" viewBox="0 0 0.36 0.36" fill="#000000"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m0.33 0.115 0.015 -0.015V0.27h-0.105v0.071L0.169 0.27H0.015V0.03h0.251l-0.015 0.015H0.03v0.21h0.145L0.225 0.305V0.255h0.105zm0.025 -0.078a0.014 0.014 0 0 1 0 0.021l-0.14 0.14 -0.061 0.026a0.006 0.006 0 0 1 -0.007 -0.007l0.026 -0.061 0.14 -0.14a0.015 0.015 0 0 1 0.021 0zm-0.151 0.149 -0.019 -0.019 -0.014 0.034zm0.109 -0.107 -0.021 -0.021 -0.097 0.097 0.021 0.021zm0.028 -0.037 -0.012 -0.013a0.006 0.006 0 0 0 -0.009 0l-0.018 0.018 0.021 0.021 0.017 -0.017a0.006 0.006 0 0 0 0 -0.009" />
                                <path fill="none" d="M0 0h0.36v0.36H0z" />
                            </svg>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Blogs</span>
                    </a>
                </li>
                {{-- orders --}}
                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors {{ Request::is('orders/list*') ? 'active' : '' }}"
                        href="{{ route('admin.order') }}">
                        <div
                            class="{{ Request::is('admin/orders/*') ? 'bg-gradient-to-tl from-purple-700 to-pink-500' : '' }}  shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current stroke-0 text-center xl:p-2.5">
                            <svg fill="#000000" width="12px" height="12px" viewBox="0 0 56 56"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M 20.0079 39.6485 L 47.3596 39.6485 C 48.2735 39.6485 49.0703 38.8985 49.0703 37.8907 C 49.0703 36.8829 48.2735 36.1328 47.3596 36.1328 L 20.4063 36.1328 C 19.0704 36.1328 18.2501 35.1953 18.0391 33.7656 L 17.6641 31.3047 L 47.4062 31.3047 C 50.8281 31.3047 52.5859 29.1953 53.0783 25.8438 L 54.9532 13.4453 C 55.0003 13.1407 55.0468 12.7656 55.0468 12.5547 C 55.0468 11.4297 54.2030 10.6563 52.9142 10.6563 L 14.6407 10.6563 L 14.1954 7.6797 C 13.9610 5.8750 13.3048 4.9609 10.9141 4.9609 L 2.6876 4.9609 C 1.7501 4.9609 .9532 5.7813 .9532 6.7188 C .9532 7.6797 1.7501 8.5000 2.6876 8.5000 L 10.6094 8.5000 L 14.3594 34.2344 C 14.8516 37.5625 16.6094 39.6485 20.0079 39.6485 Z M 51.0623 14.1953 L 49.3987 25.4219 C 49.2110 26.8750 48.4377 27.7656 47.0548 27.7656 L 17.1485 27.7891 L 15.1563 14.1953 Z M 21.8594 51.0391 C 23.9688 51.0391 25.6563 49.375 25.6563 47.2422 C 25.6563 45.1328 23.9688 43.4453 21.8594 43.4453 C 19.7266 43.4453 18.0391 45.1328 18.0391 47.2422 C 18.0391 49.375 19.7266 51.0391 21.8594 51.0391 Z M 43.7735 51.0391 C 45.9062 51.0391 47.5939 49.375 47.5939 47.2422 C 47.5939 45.1328 45.9062 43.4453 43.7735 43.4453 C 41.6641 43.4453 39.9532 45.1328 39.9532 47.2422 C 39.9532 49.375 41.6641 51.0391 43.7735 51.0391 Z" />
                            </svg>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Orders</span>
                    </a>
                </li>
                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors {{ Request::is('admin/promotions*') ? 'shadow-soft-xl  rounded-lg bg-white  font-semibold text-slate-700' : '' }}"
                        href="{{ route('admin.promotion') }}">
                        <div
                            class="{{ Request::is('admin/promotions*') ? 'bg-gradient-to-tl from-purple-700 to-pink-500' : '' }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 292.518 292.518" style="enable-background:new 0 0 292.518 292.518;"
                                xml:space="preserve">
                                <g>
                                    <path d="M292.518,125.66c0-17.848-13.592-32.578-30.965-34.381V18.455c0-2.476-1.222-4.791-3.265-6.189
                               c-2.041-1.397-4.644-1.697-6.951-0.802L108.39,66.988H30.225c-1.989,0-3.897,0.791-5.305,2.197
                               c-0.573,0.574-14.118,14.282-20.992,34.914c-6.502,19.513-8.138,48.891,20.993,78.031c1.406,1.407,3.314,2.197,5.304,2.197h1.736
                               l59.188,93.738c1.374,2.177,3.769,3.496,6.342,3.496h61.382c0.008,0.001,0.016,0.001,0.02,0c4.143,0,7.5-3.357,7.5-7.5
                               c0-1.655-0.536-3.186-1.445-4.427l-52.984-83.917l139.37,54.226c0.88,0.343,1.802,0.511,2.719,0.511c1.491,0,2.97-0.444,4.235-1.31
                               c2.044-1.397,3.266-3.714,3.266-6.19v-72.92C278.927,158.233,292.518,143.506,292.518,125.66z M33.516,81.988h68.78v87.34H33.401
                               C-3.445,130.018,25.215,91.55,33.516,81.988z M101.627,266.562l-51.913-82.215h43.643l51.911,82.215H101.627z M117.297,79.621
                               l129.257-50.207v192.575l-129.257-50.291V79.621z M261.554,144.877v-38.44c9.071,1.694,15.965,9.662,15.965,19.223
                               C277.518,135.219,270.625,143.183,261.554,144.877z" />
                                    <path d="M229.991,133.205h1c4.143,0,7.5-3.357,7.5-7.5c0-4.143-3.357-7.5-7.5-7.5h-1c-4.143,0-7.5,3.357-7.5,7.5
                               C222.491,129.848,225.848,133.205,229.991,133.205z" />
                                    <path d="M200.991,133.205h1c4.143,0,7.5-3.357,7.5-7.5c0-4.143-3.357-7.5-7.5-7.5h-1c-4.143,0-7.5,3.357-7.5,7.5
                               C193.491,129.848,196.848,133.205,200.991,133.205z" />
                                    <path d="M171.991,133.205h1c4.143,0,7.5-3.357,7.5-7.5c0-4.143-3.357-7.5-7.5-7.5h-1c-4.143,0-7.5,3.357-7.5,7.5
                               C164.491,129.848,167.848,133.205,171.991,133.205z" />
                                    <path d="M142.991,133.205h1c4.143,0,7.5-3.357,7.5-7.5c0-4.143-3.357-7.5-7.5-7.5h-1c-4.143,0-7.5,3.357-7.5,7.5
                               C135.491,129.848,138.848,133.205,142.991,133.205z" />
                                </g>
                            </svg>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Promotions</span>
                    </a>
                </li>
                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors {{ Request::is('admin/promoted-products*') ? 'shadow-soft-xl  rounded-lg bg-white  font-semibold text-slate-700' : '' }}"
                        href="{{ route('admin.promoted-products') }}">
                        <div
                            class="{{ Request::is('admin/promoted-products*') ? 'bg-gradient-to-tl from-purple-700 to-pink-500' : '' }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                            <svg fill="#000000" width="12px" height="12px" viewBox="0 0 32 32"
                                style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"
                                version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                xmlns:serif="http://www.serif.com/" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g transform="translate(-96 -48)">
                                    <g transform="translate(-16.304 -7.783)scale(1.13043)">
                                        <path cx="113.5" cy="63.5" r="11.5"
                                            style="fill:rgba(255, 255, 255, 0);"
                                            d="M125 63.5a11.5 11.5 0 0 1 -11.5 11.5A11.5 11.5 0 0 1 102 63.5a11.5 11.5 0 0 1 23 0" />
                                    </g>
                                    <path
                                        d="M112 50a14.007 14.007 0 0 0 0 28 14.007 14.007 0 0 0 0 -28m0 2c6.62 0 12 5.38 12 12s-5.38 12 -12 12 -12 -5.38 -12 -12 5.38 -12 12 -12m4.353 14.033a2 2 0 0 1 -0.713 3.933 2 2 0 0 1 0.713 -3.933m-0.06 -7.74 -10 10a1 1 0 0 0 1.413 1.413l10 -10a1 1 0 0 0 -1.413 -1.413m-7.94 -0.26a2 2 0 0 1 -0.713 3.933 2 2 0 0 1 0.713 -3.933"
                                        style="fill:#000000" />
                                </g>
                            </svg>
                        </div>
                        <span
                            class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft overflow-x-hidden">Promoted
                            Products</span>
                    </a>
                </li>
                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors {{ Request::is('admin/inquiries*') ? 'shadow-soft-xl  rounded-lg bg-white  font-semibold text-slate-700' : '' }}"
                        href="{{ route('admin.inquiry') }}">
                        <div
                            class="{{ Request::is('admin/inquiries*') ? 'bg-gradient-to-tl from-purple-700 to-pink-500' : '' }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current stroke-0 text-center xl:p-2.5">
                            <svg width="12px" height="12px" viewBox="0 0 512 512" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>inquiry</title>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                    fill-rule="evenodd">
                                    <g id="Path" fill="#000000" transform="translate(64.000000, 85.333333)">
                                        <path
                                            d="M384,1.42108547e-14 L384,298.666667 L277.333333,298.666667 L277.333333,384 L147.2,298.666667 L1.42108547e-14,298.666667 L1.42108547e-14,1.42108547e-14 L384,1.42108547e-14 Z M341.333333,42.6666667 L42.6666667,42.6666667 L42.6666667,256 L159.941531,256 L234.666667,305.002667 L234.666667,256 L341.333333,256 L341.333333,42.6666667 Z M192.935,201.066667 C199.768368,201.066667 205.414144,203.316644 209.8725,207.816667 C214.330856,212.316689 216.56,217.983299 216.56,224.816667 C216.56,231.5667 214.330856,237.191644 209.8725,241.691667 C205.414144,246.191689 199.768368,248.441667 192.935,248.441667 C185.934965,248.441667 180.226689,246.191689 175.81,241.691667 C171.393311,237.191644 169.185,231.441702 169.185,224.441667 C169.185,217.774967 171.434978,212.212522 175.935,207.754167 C180.435023,203.295811 186.101632,201.066667 192.935,201.066667 Z M202.185,65.0666667 C221.185095,65.0666667 235.643284,69.5666217 245.56,78.5666667 C254.310044,86.6500404 258.685,97.1499354 258.685,110.066667 C258.685,118.81671 256.560021,126.295802 252.31,132.504167 C248.591231,137.936485 242.320454,143.767492 233.497515,149.997322 L229.56,152.691667 C221.226667,158.275028 216.101676,162.545819 214.185,165.504167 C212.268324,168.462515 211.31,173.733295 211.31,181.316667 L211.31,186.441667 L174.435,186.441667 L174.435,175.441667 C174.435,164.85828 175.518323,157.483354 177.685,153.316667 C178.935006,150.899988 180.601656,148.754176 182.685,146.879167 L185.011529,144.940391 C185.967309,144.18359 187.103359,143.316246 188.419684,142.338357 L201.829549,132.738531 C207.493614,128.58228 211.34124,125.316679 213.3725,122.941667 C216.080847,119.774984 217.435,116.066688 217.435,111.816667 C217.435,106.483307 215.539186,102.254182 211.7475,99.1291667 C207.955814,96.004151 202.810033,94.4416667 196.31,94.4416667 C185.64328,94.4416667 172.768409,98.7332904 157.685,107.316667 L146.56,79.5666667 C165.060093,69.8999517 183.601574,65.0666667 202.185,65.0666667 Z">

                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Inquiries</span>
                    </a>
                </li>
                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors {{ Request::is('admin/categories*') ? 'shadow-soft-xl  rounded-lg bg-white  font-semibold text-slate-700' : '' }}"
                        href="{{ route('admin.categories') }}">
                        <div
                            class="{{ Request::is('admin/categories*') ? 'bg-gradient-to-tl from-purple-700 to-pink-500' : '' }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                            <svg width="12px" height="12px" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3 6C3 4.34315 4.34315 3 6 3H7C8.65685 3 10 4.34315 10 6V7C10 8.65685 8.65685 10 7 10H6C4.34315 10 3 8.65685 3 7V6Z"
                                    stroke="#000000" stroke-width="2" />
                                <path
                                    d="M14 6C14 4.34315 15.3431 3 17 3H18C19.6569 3 21 4.34315 21 6V7C21 8.65685 19.6569 10 18 10H17C15.3431 10 14 8.65685 14 7V6Z"
                                    stroke="#000000" stroke-width="2" />
                                <path
                                    d="M14 17C14 15.3431 15.3431 14 17 14H18C19.6569 14 21 15.3431 21 17V18C21 19.6569 19.6569 21 18 21H17C15.3431 21 14 19.6569 14 18V17Z"
                                    stroke="#000000" stroke-width="2" />
                                <path
                                    d="M3 17C3 15.3431 4.34315 14 6 14H7C8.65685 14 10 15.3431 10 17V18C10 19.6569 8.65685 21 7 21H6C4.34315 21 3 19.6569 3 18V17Z"
                                    stroke="#000000" stroke-width="2" />
                            </svg>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Categories</span>
                    </a>
                </li>
                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors {{ Request::is('admin/sizes*') ? 'shadow-soft-xl  rounded-lg bg-white  font-semibold text-slate-700' : '' }}"
                        href="{{ route('admin.size') }}">
                        <div
                            class="{{ Request::is('admin/sizes*') ? 'bg-gradient-to-tl from-purple-700 to-pink-500' : '' }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 450.78 450.78"
                                style="enable-background:new 0 0 450.78 450.78;" xml:space="preserve">
                                <path d="M449.962,173.343L373.338,56.434c-0.521-0.796-1.26-1.427-2.128-1.817c0,0-108.317-49.534-113.373-47.804l-0.604,0.205
 c-20.534,6.962-43.152,6.962-63.698-0.004l-0.593-0.201c-5.054-1.73-113.374,47.804-113.374,47.804
 c-0.868,0.391-1.606,1.021-2.128,1.817L0.818,173.343c-1.286,1.962-1.035,4.553,0.602,6.231c1.3,1.334,32.496,32.807,89.373,45.624
 c2.037,0.453,4.146-0.397,5.287-2.146l14.618-22.415l1.472,226.004c0.015,2.312,1.612,4.312,3.863,4.837
 c35.771,8.355,72.564,12.533,109.357,12.533c36.793,0,73.586-4.178,109.357-12.533c2.25-0.525,3.848-2.525,3.863-4.837
 l1.472-226.004l14.618,22.415c1.141,1.748,3.251,2.605,5.287,2.146c56.877-12.817,88.073-44.29,89.373-45.624
 C450.997,177.896,451.247,175.305,449.962,173.343z M372.299,73.091l57.714,88.058c-14.914,10.884-41.974,28.08-77.646,40.02
 l-11.193-17.162C358.297,156.778,368.417,99.246,372.299,73.091z M174.936,24.448c4.307,13.438,16.556,29.459,50.454,29.459
 c33.897,0,46.147-16.021,50.454-29.459c0.174-0.542,0.307-1.09,0.414-1.639l5.578,2.513c-0.086,0.318-0.176,0.636-0.278,0.951
 c-9.386,29.258-39.216,33.627-56.163,33.627c-16.951,0-46.788-4.368-56.174-33.63c-0.101-0.314-0.191-0.63-0.277-0.947l5.578-2.513
 C174.629,23.357,174.762,23.905,174.936,24.448z M185.488,17.226c0.419-0.411,1.404-1.193,2.826-1.193
 c0.426,0,0.891,0.07,1.392,0.241l0.63,0.215c22.605,7.663,47.503,7.663,70.098,0.004l0.642-0.219
 c2.171-0.741,3.672,0.417,4.217,0.952c0.541,0.53,1.725,1.999,1.029,4.169c-4.787,14.938-18.559,22.512-40.931,22.512
 c-22.373,0-36.145-7.574-40.932-22.512C183.763,19.225,184.947,17.756,185.488,17.226z M109.606,184.006l-11.193,17.162
 c-35.672-11.94-62.732-29.136-77.646-40.02l57.714-88.058C82.363,99.246,92.483,156.778,109.606,184.006z M89.62,214.652
 c-42.411-10.338-69.562-31.8-78.124-39.356l3.781-5.77c17.296,12.609,43.516,28.592,77.499,40.286L89.62,214.652z M328.636,422.619
 c-67.635,15.191-138.855,15.191-206.492,0l-1.554-238.667c-0.002-0.315-0.086-0.698-0.201-1.08
 c-0.285-0.938-0.748-1.804-1.299-2.616c-19.039-28.074-29.739-100.95-32.032-118.045l72.689-32.746
 c4.906,15.168,19.949,40.434,65.649,40.434c45.692,0,60.733-25.268,65.638-40.434l72.689,32.746
 c-2.294,17.095-12.994,89.971-32.032,118.045c-0.55,0.811-1.014,1.677-1.299,2.616c-0.116,0.382-0.199,0.765-0.201,1.08
 L328.636,422.619z M361.16,214.652l-3.157-4.84c33.984-11.693,60.204-27.676,77.5-40.286l3.781,5.769
 C430.717,182.855,403.568,204.315,361.16,214.652z" />
                            </svg>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Size Charts</span>
                    </a>
                </li>


                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors {{ Request::is('admin/variants*') ? 'shadow-soft-xl  rounded-lg bg-white  font-semibold text-slate-700' : '' }}"
                        href="{{ route('admin.variant') }}">
                        <div
                            class="{{ Request::is('admin/variants*') ? 'bg-gradient-to-tl from-purple-700 to-pink-500' : '' }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">

                            <svg width="12px" height="12px" viewBox="0 0 0.36 0.36"
                                id="meteor-icon-kit__regular-variants" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0.12 0.309a0.015 0.015 0 0 1 0.023 -0.019 0.105 0.105 0 1 0 0.148 -0.148 0.015 0.015 0 0 1 0.019 -0.023 0.135 0.135 0 1 1 -0.19 0.19M0.135 0.27A0.135 0.135 0 1 1 0.135 0a0.135 0.135 0 0 1 0 0.27m0 -0.03A0.105 0.105 0 1 0 0.135 0.03a0.105 0.105 0 0 0 0 0.21m-0.013 -0.033a0.015 0.015 0 0 1 -0.03 -0.005 0.135 0.135 0 0 1 0.11 -0.11 0.015 0.015 0 0 1 0.005 0.03 0.105 0.105 0 0 0 -0.086 0.086"
                                    fill="#000000" />
                            </svg>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Variants</span>
                    </a>
                </li>
                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors {{ Request::is('admin/zones*') ? 'shadow-soft-xl  rounded-lg bg-white  font-semibold text-slate-700' : '' }}"
                        href="{{ route('admin.zone') }}">
                        <div
                            class="{{ Request::is('admin/zones*') ? 'bg-gradient-to-tl from-purple-700 to-pink-500' : '' }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                            <svg width="12px" height="12px" viewBox="-0.45 0 2.43 2.43" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0.414 1.813c-0.099 0.02 -0.225 0.055 -0.326 0.152 -0.05 0.048 -0.075 0.106 -0.07 0.163 0.005 0.054 0.037 0.105 0.091 0.141a0.655 0.655 0 0 0 0.189 0.088 1.675 1.675 0 0 0 0.448 0.062 1.65 1.65 0 0 0 0.337 -0.035c0.107 -0.022 0.232 -0.056 0.338 -0.137 0.052 -0.039 0.082 -0.087 0.088 -0.139 0.006 -0.052 -0.013 -0.106 -0.055 -0.157 -0.059 -0.07 -0.137 -0.118 -0.238 -0.147 -0.038 -0.011 -0.077 -0.018 -0.115 -0.025 -0.012 -0.002 -0.025 -0.005 -0.037 -0.007a10.845 10.845 0 0 1 0.046 -0.071c0.039 -0.06 0.079 -0.122 0.117 -0.185 0.111 -0.187 0.242 -0.439 0.268 -0.727 0.027 -0.304 -0.069 -0.521 -0.293 -0.665 -0.156 -0.1 -0.329 -0.133 -0.516 -0.1C0.403 0.075 0.218 0.24 0.137 0.514c-0.049 0.164 -0.031 0.33 -0.01 0.456 0.034 0.207 0.112 0.414 0.252 0.671 0.022 0.04 0.045 0.078 0.069 0.119q0.013 0.021 0.026 0.043l-0.011 0.002a1.215 1.215 0 0 0 -0.049 0.008m0.363 0.101 -0.02 0.025c-0.131 -0.112 -0.215 -0.255 -0.287 -0.394 -0.092 -0.178 -0.19 -0.392 -0.221 -0.632 -0.027 -0.205 -0.007 -0.356 0.065 -0.49 0.09 -0.167 0.268 -0.272 0.477 -0.282q0.015 -0.001 0.031 -0.001c0.192 0 0.362 0.085 0.459 0.231 0.062 0.093 0.089 0.201 0.086 0.341 -0.004 0.155 -0.046 0.315 -0.135 0.504 -0.1 0.213 -0.231 0.418 -0.399 0.626a3.75 3.75 0 0 0 -0.056 0.071m-0.256 -0.024a0.045 0.045 0 0 1 0.028 0.012 0.621 0.621 0 0 0 0.216 0.159c0.036 0.016 0.068 0.006 0.096 -0.029l0.019 -0.024c0.025 -0.033 0.051 -0.066 0.078 -0.098A0.05 0.05 0 0 1 0.99 1.891c0.093 0.008 0.191 0.022 0.275 0.074a0.414 0.414 0 0 1 0.095 0.084 0.061 0.061 0 0 1 0.018 0.045 0.064 0.064 0 0 1 -0.027 0.042 0.487 0.487 0 0 1 -0.105 0.064c-0.141 0.063 -0.303 0.094 -0.511 0.098 -0.151 -0.006 -0.298 -0.014 -0.437 -0.061a0.537 0.537 0 0 1 -0.129 -0.062c-0.028 -0.019 -0.043 -0.041 -0.045 -0.064 -0.001 -0.022 0.01 -0.043 0.034 -0.063a0.673 0.673 0 0 1 0.166 -0.105c0.048 -0.021 0.102 -0.033 0.154 -0.044q0.019 -0.004 0.038 -0.008 0.002 0 0.004 0"
                                    fill="#000000" />
                                <path
                                    d="M1.075 0.662c0 -0.003 0 -0.005 0 -0.008q0.001 -0.018 0 -0.035a0.271 0.271 0 0 0 -0.142 -0.218 0.258 0.258 0 0 0 -0.252 0.006c-0.09 0.051 -0.146 0.136 -0.163 0.247 -0.022 0.144 0.081 0.285 0.229 0.315 0.02 0.004 0.04 0.006 0.06 0.006 0.124 0 0.226 -0.079 0.257 -0.208q0.007 -0.032 0.011 -0.065c0.001 -0.01 0.003 -0.02 0.004 -0.03a0.01 0.01 0 0 0 -0.002 -0.008 0.01 0.01 0 0 0 -0.002 -0.002m-0.112 0.012 0 0.004c0 0.004 0 0.01 -0.001 0.016 -0.005 0.063 -0.028 0.111 -0.066 0.141 -0.034 0.026 -0.078 0.036 -0.128 0.027a0.198 0.198 0 0 1 -0.128 -0.089 0.168 0.168 0 0 1 -0.018 -0.14c0.019 -0.064 0.047 -0.127 0.122 -0.146a0.23 0.23 0 0 1 0.056 -0.007c0.036 -0.001 0.071 0.01 0.099 0.032 0.042 0.034 0.065 0.091 0.064 0.161z"
                                    fill="#000000" />
                            </svg>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Zones</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors {{ Request::is('admin/shipping-methods*') ? 'active' : '' }}"
                        href="{{ route('admin.shipping-methods.create') }}">
                        <div
                            class="{{ Request::is('admin/shipping-methods/*') ? 'bg-gradient-to-tl from-purple-700 to-pink-500' : '' }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current stroke-0 text-center xl:p-2.5">
                            <svg fill="#000000" width="12px" height="12px" viewBox="0 0 0.36 0.36"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0.297 0.081A0.015 0.015 0 0 0 0.285 0.075h-0.06V0.06a0.03 0.03 0 0 0 -0.03 -0.03H0.045a0.03 0.03 0 0 0 -0.03 0.03v0.195a0.015 0.015 0 0 0 0.015 0.015h0.015a0.06 0.06 0 0 0 0.12 0h0.03a0.06 0.06 0 0 0 0.12 0 0.03 0.03 0 0 0 0.03 -0.03v-0.09a0.015 0.015 0 0 0 -0.003 -0.009ZM0.105 0.3a0.03 0.03 0 1 1 0.03 -0.03 0.03 0.03 0 0 1 -0.03 0.03m0.09 -0.06h-0.038a0.059 0.059 0 0 0 -0.103 0H0.045v-0.09h0.15Zm0 -0.15v0.03H0.045V0.06h0.15Zm0.06 0.21a0.03 0.03 0 1 1 0.03 -0.03 0.03 0.03 0 0 1 -0.03 0.03m0.06 -0.06h-0.008A0.059 0.059 0 0 0 0.225 0.218V0.105h0.052l0.037 0.05Z" />
                            </svg>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Shipping
                            Methods</span>
                    </a>
                </li>
                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors {{ Request::is('admin/email-config*') ? 'shadow-soft-xl  rounded-lg bg-white  font-semibold text-slate-700' : '' }}"
                        href="{{ route('admin.email-config') }}">
                        <div
                            class="{{ Request::is('admin/email-config*') ? 'bg-gradient-to-tl from-purple-700 to-pink-500' : '' }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current stroke-0 text-center xl:p-2.5">
                            <svg fill="#000000" width="12px" height="12px" viewBox="0 0 36 36" version="1.1"
                                preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>email-line</title>
                                <path class="clr-i-outline clr-i-outline-path-1"
                                    d="M32,6H4A2,2,0,0,0,2,8V28a2,2,0,0,0,2,2H32a2,2,0,0,0,2-2V8A2,2,0,0,0,32,6ZM30.46,28H5.66l7-7.24-1.44-1.39L4,26.84V9.52L16.43,21.89a2,2,0,0,0,2.82,0L32,9.21v17.5l-7.36-7.36-1.41,1.41ZM5.31,8H30.38L17.84,20.47Z">
                                </path>
                                <rect x="0" y="0" width="36" height="36" fill-opacity="0" />
                            </svg>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Email Configs</span>
                    </a>
                </li>







                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors {{ Request::is('admin/settings*') ? 'shadow-soft-xl  rounded-lg bg-white  font-semibold text-slate-700' : '' }}"
                        href="{{ route('admin.settings') }}">
                        <div
                            class="{{ Request::is('admin/settings*') ? 'bg-gradient-to-tl from-purple-700 to-pink-500' : '' }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center fill-current stroke-0 text-center xl:p-2.5">
                            <svg width="12px" height="12px" viewBox="0 0 15.36 15.36" class="icon"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill="#000000"
                                    d="M9.011 0.96a0.48 0.48 0 0 1 0.457 0.333l0.528 1.641c0.222 0.108 0.434 0.23 0.636 0.368l1.686 -0.363a0.48 0.48 0 0 1 0.516 0.23L14.165 5.472a0.48 0.48 0 0 1 -0.06 0.563l-1.157 1.277a5.355 5.355 0 0 1 0 0.735l1.157 1.279a0.48 0.48 0 0 1 0.06 0.563l-1.331 2.304a0.48 0.48 0 0 1 -0.516 0.229L10.632 12.059c-0.202 0.136 -0.415 0.259 -0.636 0.368l-0.529 1.641A0.48 0.48 0 0 1 9.011 14.4H6.349a0.48 0.48 0 0 1 -0.457 -0.333L5.365 12.427a5.28 5.28 0 0 1 -0.638 -0.37l-1.685 0.364a0.48 0.48 0 0 1 -0.516 -0.23L1.195 9.888a0.48 0.48 0 0 1 0.06 -0.563l1.157 -1.279a5.355 5.355 0 0 1 0 -0.733l-1.157 -1.279A0.48 0.48 0 0 1 1.195 5.472l1.331 -2.304a0.48 0.48 0 0 1 0.516 -0.229l1.685 0.364c0.204 -0.137 0.417 -0.261 0.638 -0.37l0.528 -1.64A0.48 0.48 0 0 1 6.348 0.96H9.01zm-0.351 0.96H6.701l-0.545 1.696 -0.368 0.18a4.41 4.41 0 0 0 -0.522 0.301l-0.34 0.23 -1.743 -0.376 -0.979 1.697 1.195 1.323 -0.029 0.407a4.395 4.395 0 0 0 0 0.603l0.029 0.407 -1.197 1.323 0.98 1.697 1.743 -0.375 0.34 0.229a4.41 4.41 0 0 0 0.522 0.301l0.368 0.18L6.701 13.44h1.96l0.547 -1.697 0.367 -0.179a4.32 4.32 0 0 0 0.521 -0.301l0.339 -0.229 1.744 0.375 0.979 -1.697 -1.196 -1.323 0.029 -0.407a4.395 4.395 0 0 0 0 -0.604l-0.029 -0.407 1.197 -1.322 -0.98 -1.697 -1.744 0.374 -0.339 -0.228a4.32 4.32 0 0 0 -0.521 -0.301l-0.367 -0.179L8.66 1.92zM7.68 4.8a2.88 2.88 0 1 1 0 5.76 2.88 2.88 0 0 1 0 -5.76m0 0.96a1.92 1.92 0 1 0 0 3.84 1.92 1.92 0 0 0 0 -3.84" />
                            </svg>
                        </div>
                        <span
                            class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">{{ __('Settings') }}</span>
                    </a>
                </li>


            </ul>
        </div>


    </aside>
    <!-- end sidenav -->

    <main
        class="ease-soft-in-out xl:ml-76.5 relative h-full max-h-screen min-h-screen rounded-xl transition-all duration-200">
        <x-admin.navbar />
        {{ $slot }}
    </main>
</body>

@stack('modals')
<livewire:scripts>
    {{-- jquery cdn --}}
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

    {{-- select2 jquery plugin --}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/js/uikit-icons.min.js"></script>


    <!-- plugin for charts  -->
    <script src="{!! asset('/soft-ui/assets/js/plugins/chartjs.min.js') !!}"></script>
    <!-- plugin for scrollbar  -->
    <script src="{!! asset('/soft-ui/assets/js/plugins/perfect-scrollbar.min.js') !!}"></script>
    <!-- github button -->
    <script defer src="https://buttons.github.io/buttons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tom-select/dist/js/tom-select.complete.min.js"></script>

    <!-- main script file  -->
    <script src="{!! asset('/soft-ui/assets/js/perfect-scrollbar.js') !!}"></script>
    <script src="{!! asset('/soft-ui/assets/js/nav-pills.js') !!}"></script>
    <script src="{!! asset('/soft-ui/assets/js/navbar-collapse.js') !!}"></script>
    <script src="{!! asset('/soft-ui/assets/js/navbar-sticky.js') !!}"></script>
    <script src="{!! asset('/soft-ui/assets/js/dropdown.js') !!}"></script>
    <script src="{!! asset('/soft-ui/assets/js/fixed-plugin.js') !!}"></script>
    <script src="{!! asset('/soft-ui/assets/js/sidenav-burger.js') !!}"></script>

    {{-- <script src="{!! asset('/soft-ui/assets/js/soft-ui-dashboard-tailwind.js?v=1.0.4') !!}" async></script> --}}
    <script>
        window.addEventListener('refresh', event => {
            setTimeout(() => {
                // $("#closeSubmitFormModal").click();
                location.reload();
            }, 300);
        })
    </script>
</livewire:scripts>
@stack('scripts')


</html>
