@push('styles')
    <link rel="stylesheet" href="{{ asset('vendor/laraberg/css/laraberg.css') }}">
@endpush
<div>
    <style>
        /* Progressbar */
        .progressbar {
            position: relative;
            display: flex;
            justify-content: space-between;
            counter-reset: step;
            margin: 2rem 0 4rem;
        }

        .progressbar::before,
        .progress {
            content: "";
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            height: 4px;
            width: 100%;
            background-color: #dcdcdc;
            z-index: -1;
        }

        .progress {
            background-color: #2949c7d0;
            width: 0%;
            transition: 0.3s;
        }

        .progress-step::before {
            counter-increment: step;
            content: counter(step);
        }

        .progress-step::after {
            content: attr(data-title);
            position: absolute;
            top: calc(100% + 0.5rem);
            font-size: 0.85rem;
            color: #707070;
        }

        .progress-step-active {
            background-color: rgb(11, 78, 179);
            color: #f3f3f3;
        }

        /* Form */

        .form-step {
            display: none;
            transform-origin: top;
            animation: animate 0.5s;
        }

        .form-step-active {
            display: block;
        }


        @keyframes animate {
            from {
                transform: scale(1, 0);
                opacity: 0;
            }

            to {
                transform: scale(1, 1);
                opacity: 1;
            }
        }

        .circular-progress {
            position: relative;
            height: 86px;
            width: 86px;
            border-radius: 50%;
            display: grid;
            place-items: center;

        }

        .circular-progress:before {
            content: "";
            position: absolute;
            height: 80%;
            width: 80%;
            background-color: #ffffff;
            border-radius: 50%;
            z-index: 2;

        }

        .circular-progress::after {
            content: "";
            position: absolute;
            height: 90%;
            width: 90%;
            background-color: #f6f3f3;
            border-radius: 50%;
            z-index: 1;
        }

        .value-container {
            position: relative;
            font-weight: 700;
            font-size: 17px;
            color: #3050CD;
            z-index: 3;
        }
    </style>

    <div class="container lg:w-[85%] xl:max-w-[1450px] w-full mx-auto px-4">
        @if (session('message'))
            @if (session('message.type') == 'success')
                <div class="bg-green-100 border border-green-400 mb-5 text-green-700 px-4 py-3 rounded relative"
                    role="alert">
                    <strong class="font-bold">Success!</strong>
                    <span class="block sm:inline">Service saved successfully.</span>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                        <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20">
                            <title>Close</title>
                            <path
                                d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                        </svg>
                    </span>
                </div>
            @else
                <div class="bg-red-100 border border-red-400 mb-5 text-red-700 px-4 py-3 rounded relative"
                    role="alert">
                    <strong class="font-bold">Warning!</strong>
                    <span class="block sm:inline">{{ session('message.message') }}.</span>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                        <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20">
                            <title>Close</title>
                            <path
                                d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                        </svg>
                    </span>
                </div>
            @endif
        @endif
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 mb-5 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Errors!</strong>
                <span class="block sm:inline">Check the form for more details.</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <title>Close</title>
                        <path
                            d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                    </svg>
                </span>
            </div>
        @endif
        <!-- Progress bar -->
        <div class="max-w-[400px] mx-auto w-[75%] sm:w-[95%]">
            <div class="progressbar">
                <div class="progress" id="progress"></div>
                <div class="progress-step  {{ $currentStep > 0 ? 'progress-step-active ' : '' }} w-12 h-12 bg-white border border-[#DFE2EC] rounded-full flex justify-center items-center"
                    data-title="General" style="box-shadow: rgba(43, 75, 200, 0.2) 0px 7px 29px 0px;"></div>
                <div class="progress-step {{ $currentStep > 1 ? 'progress-step-active ' : '' }} w-12 h-12 bg-white border border-[#DFE2EC] rounded-full flex justify-center items-center"
                    data-title="others" style="box-shadow: rgba(43, 75, 200, 0.2) 0px 7px 29px 0px;"></div>
                <div class="progress-step {{ $currentStep > 2 ? 'progress-step-active ' : '' }}  w-12 h-12 bg-white border border-[#DFE2EC] rounded-full flex justify-center items-center"
                    data-title="Files" style="box-shadow: rgba(43, 75, 200, 0.2) 0px 7px 29px 0px;"></div>
            </div>
        </div>
        <form wire:submit.prevent="submit()">
            <div class="form-step {{ $currentStep == 1 ? 'form-step-active' : '' }}">

                <div
                    class="relative z-0  min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border grid grid-cols-1 md:grid-cols-2 gap-8  px-6 py-6 mx-auto">
                    {{-- title --}}
                    <div class="mb-6">
                        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 ">Title:</label>
                        <input type="text" wire:model.debounce.200ms='title' maxlength="100"
                            class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                            placeholder="Enter the Title">
                        @error('title')
                            <x-alerts.input-error for="title" />
                        @enderror
                    </div>
                    {{-- slug --}}
                    <div class="mb-6">
                        <label for="productSlug" class="block mb-2 text-sm font-medium text-gray-900 ">Product Slug:</label>
                        <input type="text" wire:model.debounce.200ms='productSlug'
                            class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                            placeholder="Enter the Product Slug">
                        @error('productSlug')
                            <x-alerts.input-error for="productSlug" />
                        @enderror
                    </div>
                    {{-- sku --}}
                    <div class="mb-6">
                        <label for="sku" class="block mb-2 text-sm font-medium text-gray-900 ">SKU:</label>
                        <input type="text" wire:model.debounce.200ms='sku'
                            class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                            placeholder="Enter the SKU">
                        @error('sku')
                            <x-alerts.input-error for="sku" />
                        @enderror
                    </div>

                    {{-- price --}}
                    <div class="mb-6 relative">
                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900">Price <span
                                class="text-gray-500 sm:text-sm">($)</span>:</label>
                        <div class="relative rounded-md shadow-sm">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <span class="text-gray-500 sm:text-sm">$</span>
                            </div>
                            <input type="text" wire:model.debounce.200ms='price'
                                pattern="[0-9]*" 
                                oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                                class="focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding pl-8 py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                                placeholder="Enter the Price">
                        </div>
                        @error('price')
                            <x-alerts.input-error for="price" />
                        @enderror
                    </div>

                    {{-- price --}}
                    <div class="mb-6 relative">
                        <label for="is_custom" class="block mb-2 text-sm font-medium text-gray-900">Custom Product:</label>

                        <select wire:model='is_custom' id="is_custom"
                            class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow">
                            <option value="0">No</option>
                            <option value="1">Yes</option>
                        </select>

                        <x-alerts.input-error for="is_custom" />
                    </div>

                    {{-- quantity --}}
                    <div class="mb-6">
                        <label class="block mb-2 text-sm font-medium text-gray-900">Gender:</label>
                        <div class="flex items-center space-x-4">
                            <label for="male" class="inline-flex items-center">
                                <input type="radio" id="male" value="Male" wire:model="gender"
                                    class="form-radio text-blue-500 focus:shadow-soft-primary-outline">
                                <span class="ml-2">Male</span>
                            </label>
                            <label for="female" class="inline-flex items-center">
                                <input type="radio" id="female" value="Female" wire:model="gender"
                                    class="form-radio text-pink-500 focus:shadow-soft-primary-outline">
                                <span class="ml-2">Female</span>
                            </label>
                            <label for="other" class="inline-flex items-center">
                                <input type="radio" id="other" value="Other" wire:model="gender"
                                    class="form-radio text-purple-500 focus:shadow-soft-primary-outline">
                                <span class="ml-2">Other</span>
                            </label>
                        </div>
                        @error('gender')
                            <x-alerts.input-error for="gender" />
                        @enderror
                    </div>
                    {{-- categories --}}
                    <div class="mb-6 col-span-2 grid grid-cols-3 gap-4">
                        <!-- Dropdown 1 -->
                        <div>
                            <label for="parentCategory" class="block mb-2 text-sm font-medium text-gray-900">Main
                                Category:</label>
                            <select wire:model="parentCategory"
                                class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow">
                                <option value="">Please Select</option>
                                @foreach ($allCategories as $category)
                                    @if ($category->level() == 1)
                                        <option value="{{ $category->id }}">
                                            {{ Illuminate\Support\Str::limit($category->title, 35) }}</option>
                                    @endif
                                    @php
                                        if ($category->level() == 2) {
                                            $childCategory = true;
                                        }
                                    @endphp
                                @endforeach
                            </select>
                            @error('parentCategory')
                                <x-alerts.input-error for="parentCategory" />
                            @enderror
                        </div>

                        <!-- Dropdown 2 -->
                        <div>
                            @if ($childCategory)
                                <label for="childCategory" class="block mb-2 text-sm font-medium text-gray-900">Sub
                                    Category:</label>
                                <select wire:model="childCategory"
                                    class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow">
                                    <option value="">Please Select</option>
                                    @foreach ($allCategories as $category)
                                        @if ($category->level() == 2)
                                            <option value="{{ $category->id }}">
                                                {{ Illuminate\Support\Str::limit($category->title, 35) }}</option>
                                        @endif
                                        @php
                                            if ($category->level() == 3) {
                                                $grandChildCategory = true;
                                            }
                                        @endphp
                                    @endforeach
                                </select>
                                @error('childCategory')
                                    <x-alerts.input-error for="childCategory" />
                                @enderror
                            @endif
                        </div>

                        <!-- Dropdown 3 -->
                        <div>
                            @if ($grandChildCategory)
                                <label for="grandChildCategory"
                                    class="block mb-2 text-sm font-medium text-gray-900">Sub Category:</label>
                                <select wire:model="grandChildCategory"
                                    class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow">
                                    <option value="">Please Select</option>
                                    @foreach ($allCategories as $category)
                                        @if ($category->level() == 3)
                                            <option value="{{ $category->id }}">
                                                {{ Illuminate\Support\Str::limit($category->title, 35) }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('grandChildCategory')
                                    <x-alerts.input-error for="grandChildCategory" />
                                @enderror
                            @endif
                        </div>
                    </div>

                    {{-- description --}}
                    <div class="mb-6 col-span-2">
                        <label for="description"
                            class="block mb-2 text-sm font-medium text-gray-900 ">Description:</label>
                        <textarea wire:model.debounce.200ms='description'
                            class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow h-70"
                            placeholder="Enter the Description" rows="3"></textarea>

                        @error('description')
                            <x-alerts.input-error for="description" />
                        @enderror
                    </div>

                    {{-- description --}}
                    <div class="mb-6 col-span-2">
                        <div class="" wire:ignore>
                            <label for="laraberg" class="block mb-2 text-sm font-medium text-gray-900">Addition
                                Detail:</label>
                            <textarea id="laraberg" name="additionalDetail" hidden>{{ $isEdit ? $additional_detail : '' }}</textarea>
                        </div>

                        @error('additionalDetail')
                            <x-alerts.input-error for="additionalDetail" />
                        @enderror
                    </div>

                    <div class="text-right col-span-2">
                        <a type="button" href="{{ route('admin.product') }}"
                            class="px-6 py-3 mt-6 mb-2 font-bold uppercase transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-blue-800 from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Cancel</a>
                        <button type="button" wire:click.prevent="next()"
                            class="px-6 py-3 mt-6 mb-2 font-bold text-white uppercase transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Next</button>
                    </div>

                </div>
            </div>
            {{-- pricing section --}}
            @if ($currentStep == 2)
                <div class="form-step {{ $currentStep == 2 ? 'form-step-active' : '' }}">
                    <livewire:admin.products.others :product="$product" :allData="$allData" :isCustom="$is_custom" />
                </div>
            @endif

            {{-- descritpion section --}}
            @if ($currentStep == 3)
                <div class="form-step {{ $currentStep == 3 ? 'form-step-active' : '' }}">
                    <livewire:admin.products.files :product="$product" :allData="$allData" />
                </div>
            @endif
        </form>
    </div>

    {{-- The Master doesn't talk, he acts. --}}
    {{-- <form wire:submit.prevent='store' class="w-full px-6 py-6 mx-auto" id="myForm">
      
    </form> --}}


</div>
@push('scripts')
    <script src="https://unpkg.com/react@17.0.2/umd/react.production.min.js"></script>
    <script src="https://unpkg.com/react-dom@17.0.2/umd/react-dom.production.min.js"></script>
    <script src="https://unpkg.com/moment@2.24.0/min/moment.min.js"></script>
    <script src="{{ asset('vendor/laraberg/js/laraberg.js') }}"></script>
    <script>
        Laraberg.init('laraberg', {
            laravelFilemanager: true
        })
    </script>

    <script>
        // Get the input element with the name "content"
        const contentInput = document.querySelector('textarea[name="additionalDetail"]');

        // Add an event listener for the "change" event
        contentInput.addEventListener('change', function() {
            // Get the updated value when the input changes
            let updatedContentValue = contentInput.value;
            if (updatedContentValue == "<!-- wp:paragraph --><p></p><!-- /wp:paragraph -->") {
                updatedContentValue = null;
            }
            @this.set('additional_detail', updatedContentValue);
        });
    </script>

    <script>
        const prevBtns = document.querySelectorAll(".btn-prev");
        const nextBtns = document.querySelectorAll(".btn-next");
        const progress = document.getElementById("progress");
        const formSteps = document.querySelectorAll(".form-step");
        const progressSteps = document.querySelectorAll(".progress-step");

        let formStepsNum = 0;

        nextBtns.forEach((btn) => {
            btn.addEventListener("click", () => {
                // if(document.getElementById(".gigForm").valid()){
                formStepsNum++;
                updateFormSteps();
                updateProgressbar();
                // }
            });
        });

        prevBtns.forEach((btn) => {
            btn.addEventListener("click", () => {

                formStepsNum--;
                updateFormSteps();
                updateProgressbar();


            });
        });

        function updateFormSteps() {
            formSteps.forEach((formStep) => {
                formStep.classList.contains("form-step-active") &&
                    formStep.classList.remove("form-step-active");
            });

            formSteps[formStepsNum].classList.add("form-step-active");
        }

        function updateProgressbar() {
            progressSteps.forEach((progressStep, idx) => {
                if (idx < formStepsNum + 1) {
                    progressStep.classList.add("progress-step-active");
                } else {
                    progressStep.classList.remove("progress-step-active");
                }
            });

            const progressActive = document.querySelectorAll(".progress-step-active");

            progress.style.width =
                ((progressActive.length - 1) / (progressSteps.length - 1)) * 100 + "%";
        }
    </script>
@endpush
