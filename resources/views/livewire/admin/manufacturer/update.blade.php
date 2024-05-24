@push('styles')
    <link rel="stylesheet" href="{{ asset('vendor/laraberg/css/laraberg.css') }}">
@endpush
<div>
    <form action="{{ route('admin.manufacturer-update') }}" method="POST" enctype="multipart/form-data"
        class="w-full px-6 py-6 mx-auto" id="myForm">
        @csrf

        <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
            <h6 class="font-bold">
                Create Manufacturer Product
            </h6>
        </div>
        <div
            class="relative z-0  min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border grid grid-cols-1 md:grid-cols-2 gap-8  px-6 py-6 mx-auto">
            <div class="mb-6">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 ">Title:</label>
                <input type="text" name="title" value="{{ old('title', $manufacturerProduct->title) }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    placeholder="Enter the title">
                @error('title')
                    <x-alerts.input-error for="title" />
                @enderror
            </div>

            {{-- image --}}
            <div class="mb-6">
                <x-form-group label="banner" class="block mb-2 text-sm font-medium text-gray-900 ">
                    <input type="file" name="image" class="form-control"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " />
                    @error('image')
                        <x-alerts.input-error for="banner" />
                    @enderror
                </x-form-group>
            </div>

            {{-- categories --}}
            <div class="mb-6 col-span-2 grid grid-cols-3 gap-4">
                <!-- Dropdown 1 -->
                <div>
                    <label for="parentCategory" class="block mb-2 text-sm font-medium text-gray-900">Main
                        Category:</label>
                    <select wire:model="parentCategory" disabled
                        class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow">
                        <option value="">Please Select</option>
                        @foreach ($allCategories as $category)
                            @if ($category->level() == 1)
                                <option value="{{ $category->id }}">
                                    {{ Illuminate\Support\Str::limit($category->title, 35) }}</option>
                            @endif
                            {{-- @php
                                if ($category->level() == 2 ) {
                                    $childCategory = true;
                                }
                            @endphp --}}
                        @endforeach
                    </select>
                    @error('parentCategory')
                        <x-alerts.input-error for="parentCategory" />
                    @enderror
                </div>

                <!-- Dropdown 2 -->
                <div>
                    {{-- {{ dd($childCategory) }} --}}
                    @if ($childCategory)
                        <label for="childCategory" class="block mb-2 text-sm font-medium text-gray-900">Sub
                            Category:</label>
                        <select wire:model="childCategory" disabled
                            class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow">
                            <option value="">Please Select</option>
                            @foreach ($allCategories as $category)
                                @if ($category->level() == 2)
                                    <option value="{{ $category->id }}">
                                        {{ Illuminate\Support\Str::limit($category->title, 35) }}</option>
                                @endif
                                {{-- @php
                                    if ($category->level() == 3) {
                                        $grandChildCategory = true;
                                    }
                                @endphp --}}
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
                        <label for="grandChildCategory" class="block mb-2 text-sm font-medium text-gray-900">Sub
                            Category:</label>
                        <select wire:model="grandChildCategory" disabled
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

            {{-- <div class="mb-6 relative">
                <label for="category" class="block mb-2 text-sm font-medium text-gray-900 ">Category</label>

                <select name="category" disabled
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                    @foreach ($categories as $category)
                        <option value="">Select category</option>
                        <option value="{{ $category->id }}" {{ $manufacturerProduct->manufacturerProductCategory->category_id == $category->id ?  'selected' : '' }}>{{ $category->title }}</option>
                        @if (count($category->childCategories) > 0)
                            @foreach ($category->childCategories as $child)
                                <option value="{{ $child->id }}" {{ $manufacturerProduct->manufacturerProductCategory->category_id == $child->id ?  'selected' : '' }}>{{ $child->title }}</option>
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
                    value="{{ old('shopProductURL', $manufacturerProduct->shop_product_url) }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    placeholder="Enter the product URL">

                @error('shopProductURL')
                    <x-alerts.input-error for="shopProductURL" />
                @enderror
            </div>
            {{-- productSlug --}}
            <div class="mb-6">
                <label for="productSlug" class="block mb-2 text-sm font-medium text-gray-900 ">Product
                    Slug:</label>
                <input type="text" name='productSlug' value="{{ old('productSlug', $manufacturerProduct->product_slug) }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    placeholder="Enter the product slug">
                @error('productSlug')
                    <x-alerts.input-error for="productSlug" />
                @enderror
            </div>

            <div class="mb-6">
                <label for="moq"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">MOQ</label>
                <input type="number" name='moq' value="{{ old('moq', $manufacturerProduct->min_order_quantity) }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    placeholder="Minimum order quantity">
                @error('moq')
                    <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-6">
                <label for="price"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Price</label>
                <input type="number" name='price' value="{{ old('price', $manufacturerProduct->price) }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    placeholder="Enter price">
                @error('price')
                    <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-6">
                <label for="enabled"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Enabled</label>
                <select name="enabled"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                    <option value="1" {{ $manufacturerProduct->enabled ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ !$manufacturerProduct->enabled ? 'selected' : '' }}>No</option>
                </select>
                @error('enabled')
                    <span class="text-xs text-red-500 mt-1">{{ $message }}</span>
                @enderror
            </div>

            <div wire:ignore class="col-span-2">
                <textarea id="laraberg" {{ old('content') }} name="content" hidden>{{ $manufacturerProduct->content }}</textarea>
            </div>

            <div class="col-span-2 w-max">
                <input type="hidden" name="id" value="{{ $manufacturerProduct->id }}">
                <button type="submit"
                    class="inline-block w-full px-4 py-3 mb-2 ml-2 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg cursor-pointer xl-max:cursor-not-allowed xl-max:opacity-65 xl-max:pointer-events-none xl-max:bg-gradient-to-tl xl-max:from-purple-700 xl-max:to-pink-500 xl-max:text-white xl-max:border-0 hover:scale-102 hover:shadow-soft-xs active:opacity-85 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 border-fuchsia-500 bg-none text-fuchsia-500 hover:border-fuchsia-500">Update</button>
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
