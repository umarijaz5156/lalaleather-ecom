@push('styles')
    <link rel="stylesheet" href="{{ asset('vendor/laraberg/css/laraberg.css') }}">
@endpush
<div>
    {{-- <div class="">
        @php
            $content = App\Models\ManufacturerProduct::find(2)->content;
        @endphp

        {!! $content !!}
    </div> --}}
    <form action="{{ route('admin.manufacturer-store') }}" method="POST" enctype="multipart/form-data"
        class="w-full px-6 py-6 mx-auto" id="myForm">
        @csrf

        <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
            <h6 class="font-bold">
                Create Manufacturer Product
            </h6>
            <div
                class="relative z-0  min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border grid grid-cols-1 md:grid-cols-2 gap-8  px-6 py-6 mx-auto">
                <div class="mb-6">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 ">Title:</label>
                    <input type="text" name="title"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="Enter the title">

                    <x-alerts.input-error for="title" />
                </div>

                {{-- image --}}
                <div class="mb-6">
                    <x-form-group label="Upload Single Image" class="block mb-2 text-sm font-medium text-gray-900 ">
                        <input type="file" name="image" class="form-control"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " />

                        <x-alerts.input-error for="image" />
                    </x-form-group>
                </div>

                {{-- categories --}}
                <div class="mb-6 col-span-2 grid grid-cols-3 gap-4">
                    <!-- Dropdown 1 -->
                    <div>
                        <label for="parentCategory" class="block mb-2 text-sm font-medium text-gray-900">Main
                            Category:</label>
                        <select wire:model="parentCategory" name="category[level1]"
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

                        <x-alerts.input-error for="parentCategory" />
                    </div>

                    <!-- Dropdown 2 -->
                    <div>
                        @if ($childCategory)
                            <label for="childCategory" class="block mb-2 text-sm font-medium text-gray-900">Sub
                                Category:</label>
                            <select wire:model="childCategory" name="category[level2]"
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

                            <x-alerts.input-error for="childCategory" />
                        @endif
                    </div>

                    <!-- Dropdown 3 -->
                    <div>
                        @if ($grandChildCategory)
                            <label for="grandChildCategory" class="block mb-2 text-sm font-medium text-gray-900">Sub
                                Category:</label>
                            <select wire:model="grandChildCategory" name="category[level3]"
                                class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow">
                                <option value="">Please Select</option>
                                @foreach ($allCategories as $category)
                                    @if ($category->level() == 3)
                                        <option value="{{ $category->id }}">
                                            {{ Illuminate\Support\Str::limit($category->title, 35) }}</option>
                                    @endif
                                @endforeach
                            </select>

                            <x-alerts.input-error for="grandChildCategory" />
                        @endif
                    </div>
                </div>
                {{-- <div class="mb-6 relative">
                <label for="category" class="block mb-2 text-sm font-medium text-gray-900 ">Category</label>

                <select name="category"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                    @foreach ($categories as $category)
                        <option value="">Select category</option>
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                        @if (count($category->childCategories) > 0)
                            @foreach ($category->childCategories as $child)
                                <option value="{{ $child->id }}">{{ $child->title }}</option>
                            @endforeach
                        @endif
                    @endforeach
                </select>

                @error('category')
                    <x-alerts.input-error for="category" />
                @enderror
            </div> --}}


                {{-- startDate --}}
                <div class="mb-6">
                    <label for="shopProductURL" class="block mb-2 text-sm font-medium text-gray-900 ">Shop Product
                        URL:</label>
                    <input type="text" name='shopProductURL'
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="Enter the product URL">

                    <x-alerts.input-error for="shopProductURL" />
                </div>
                <div class="mb-6">
                    <label for="productSlug" class="block mb-2 text-sm font-medium text-gray-900 ">Product Slug:</label>
                    <input type="text" name='productSlug'
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="Enter the product Slug">
                    <x-alerts.input-error for="productSlug" />
                </div>

                <div class="mb-6">
                    <label for="moq"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">MOQ</label>
                    <input type="number" name='moq'
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="Minimum order quantity">

                    <x-alerts.input-error for="moq" />
                </div>

                <div class="mb-6">
                    <label for="price"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Price</label>
                    <input type="number" name='price'
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="Enter price">

                    <x-alerts.input-error for="price" />
                </div>

                <div class="mb-6">
                    <label for="enabled"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Enabled</label>
                    <select name="enabled"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>

                    <x-alerts.input-error for="enabled" />
                </div>




                <div class="col-span-2">
                    <div class="" wire:ignore>
                        <textarea id="laraberg" name="content" hidden></textarea>
                    </div>

                    <x-alerts.input-error for="content" />
                </div>

                <div class="col-span-2 w-max">
                    <button type="submit"
                        class="inline-block w-full px-4 py-3 mb-2 ml-2 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg cursor-pointer xl-max:cursor-not-allowed xl-max:opacity-65 xl-max:pointer-events-none xl-max:bg-gradient-to-tl xl-max:from-purple-700 xl-max:to-pink-500 xl-max:text-white xl-max:border-0 hover:scale-102 hover:shadow-soft-xs active:opacity-85 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 border-fuchsia-500 bg-none text-fuchsia-500 hover:border-fuchsia-500">Submit</button>
                </div>

            </div>
        </div>
    </form>

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
    @endpush

</div>
