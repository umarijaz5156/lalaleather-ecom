@push('styles')
    <link rel="stylesheet" href="{{ asset('vendor/laraberg/css/laraberg.css') }}">
@endpush
<div>
    <form action="{{ route('admin.blog-update') }}" method="POST" enctype="multipart/form-data"
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
                <input type="text" name="title" value="{{ old('title', $blogPost->title) }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    placeholder="Enter the title">
                @error('title')
                    <x-alerts.input-error for="title" />
                @enderror
            </div>

            <div class="mb-6">
                <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 ">Slug:</label>
                <input type="text" name="slug" value="{{ old('slug', $blogPost->slug) }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    placeholder="Enter the slug">

                <x-alerts.input-error for="slug" />
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

            <div class="mb-6 col-span-2">
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 ">description:</label>
                <textarea name="description" rows="10"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    placeholder="Enter the description">{{ old('description', $blogPost->description) }}</textarea>
                <x-alerts.input-error for="description" />
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
                    <x-alerts.input-error for="parentCategory" />
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
                        <x-alerts.input-error for="childCategory" />
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
                        <x-alerts.input-error for="grandChildCategory" />
                    @endif
                </div>
            </div>



            <div class="col-span-2">
                <div wire:ignore class="">
                    <textarea id="laraberg" name="content" hidden>{{ $blogPost->content }}</textarea>
                </div>
                <x-alerts.input-error for="content" />
            </div>

            <div class="col-span-2 w-max">
                <input type="hidden" name="id" value="{{ $blogPost->id }}">
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
