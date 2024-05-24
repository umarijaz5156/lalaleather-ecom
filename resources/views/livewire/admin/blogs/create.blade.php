@push('styles')
    <link rel="stylesheet" href="{{ asset('vendor/laraberg/css/laraberg.css') }}">
@endpush
<div>
    {{-- <div class="">
        @php
            $content = App\Models\BlogPost::find(1)->content;
        @endphp

        {!! $content !!}
    </div> --}}

    <form action="{{ route('admin.blog-store') }}" method="POST" enctype="multipart/form-data"
        class="w-full px-6 py-6 mx-auto" id="myForm">
        @csrf

        <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
            <h6 class="font-bold">
                Create A New Blog
            </h6>

            <div
                class="relative z-0  min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border grid grid-cols-1 md:grid-cols-2 gap-8  px-6 py-6 mx-auto">
                <div class="mb-6">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 ">Title:</label>
                    <input type="text" name="title" value="{{ old('title') }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="Enter the title">

                    <x-alerts.input-error for="title" />
                </div>

                <div class="mb-6">
                    <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 ">Slug:</label>
                    <input type="text" name="slug" value="{{ old('slug') }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="Enter the slug">

                    <x-alerts.input-error for="slug" />
                </div>

                {{-- image --}}
                <div class="mb-6">
                    <x-form-group label="Upload Single Image" class="block mb-2 text-sm font-medium text-gray-900 ">
                        <input type="file" name="image"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " />

                        <x-alerts.input-error for="image" />
                    </x-form-group>
                </div>

                {{-- image --}}
                <div class="mb-6 col-span-2">
                    <x-form-group label="description" class="block mb-2 text-sm font-medium text-gray-900 ">
                        <textarea name="description" rows="8" placeholder="Enter description"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">{{ old('description') }}</textarea>
                        <x-alerts.input-error for="description" />
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

                        <x-alerts.input-error for="category.level1" />
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

                        @endif
                    </div>
                </div>

                <div class="col-span-2">
                    <div class="" wire:ignore>
                        <label for="laraberg" class="block mb-2 text-sm font-medium text-gray-900">Blog Post:</label>
                        <textarea id="laraberg" name="content" hidden>{{ old('content') }}</textarea>
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
