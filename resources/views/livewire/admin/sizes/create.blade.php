<div>

    <div
        class="relative z-0 flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
        {{-- heading --}}
        <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
            <h6 class="font-bold">
                @if ($updateMode)
                    Edit Size
                @else
                    Create Size
                @endif
            </h6>
        </div>

        <form wire:submit.prevent='store' class="w-full px-6 py-6 mx-auto" id="myForm">
            <div class="mb-6">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 ">Name:</label>
                <input type="text" maxlength="100" wire:model.debounce.200ms="name"
                    class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow"
                    placeholder="Enter the Name">
                @error('name')
                    <span class="text-red-700">{{ $message }}</span>
                @enderror
            </div>

            <div wire:ignore class="mb-6">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 ">Description:</label>
                <textarea class="editor" id="editor" wire:model="description"></textarea>

            </div>
            @error('description')
                <span class="text-red-700">{{ $message }}</span>
            @enderror



            <div class="mb-6">
                <x-form-group label="Images" class="block mb-2 text-sm font-medium text-gray-900 ">
                    @if ($previousImage)
                        <!-- Edit Form -->
                        <x-form.upload-files multiple wire:model="images" fileName="file_path" :fileData="$previousImage" perview allowFileTypes="['image/png', 'image/jpg', 'image/jpeg']" />
                    @else
                        <!-- Create Form -->
                        <x-form.upload-files multiple wire:model="images" allowFileTypes="['image/png', 'image/jpg', 'image/jpeg','image/webp']" />
                    @endif


                    @error('images.*')
                        <span class="text-red-700">{{ $message }}</span>
                    @enderror
                    @error('images')
                        <span class="text-red-700">{{ $message }}</span>
                    @enderror


                </x-form-group>
            </div>


            <div class="text-end">
                <button type="submit"
                    class="px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Submit</button>
               
                </div>
        </form>
    </div>


</div>

@push('scripts')
    <script>
        const editor = CKEDITOR.replace('editor', {});
        editor.on('change', function(event) {
            @this.set('description', event.editor.getData());
        });
    </script>
@endpush
