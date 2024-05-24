@props(['fileName' => 'image', 'required' => false, 'allowFileTypes', 'fileData' => ''])

@php

$id = $id ?? md5($attributes->wire('model'));
$fileData = json_decode($fileData);
    $allowFileTypes = $allowFileTypes ?? '[]';
    // $allowFileTypes = json_decode($allowFileTypes);

@endphp

<div  wire:ignore x-data="{pond:null}" x-init="FilePond.setOptions({
        credits: false,
    });
    pond = FilePond.create($refs.input{{ $id }});
    pond.setOptions({

        allowMultiple: {{ isset($attributes['multiple']) ? 'true' : 'false' }},

        allowImageValidateSize: false,
        dropOnElement: true,
        dropOnPage: false,
        {{-- imageValidateSizeMinHeight: 370,
        imageValidateSizeMinWidth: 550, --}}
        allowImagePreview: {{ isset($attributes['perview']) ? 'true' : 'false' }},
        imagePreviewHeight: 200,
        acceptedFileTypes: {{ $allowFileTypes }},
        server: {
            process: (fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
                @this.upload('{{ $attributes['wire:model'] }}', file, load, error, progress)
            },
            revert: (filename, load) => {
                @this.removeUpload('{{ $attributes['wire:model'] }}', filename, load)
            }
        },
        @if(isset($attributes['previous']))
        files: [{
            source: '{{ asset('/storage/' . $attributes['previous']) }}',
        }]
        @endif
        @if(is_array($fileData) && count($fileData) > 0)
        files: [
            @foreach($fileData as $file)
            {
                source: '{{ asset('/storage/' . $file->file_path) }}',
            },
            @endforeach
        ]
        @endif

    });
   
    this.addEventListener('pondReset', e => {
        console.log(e);
        pond.removeFiles();
    });

    pond.on('addfile', (error, file) => {
        if (file.fileSize === 0) {
          pond.removeFile(file.id);
        }
      });
      
    ">

    <input type="file" x-ref="input{{ $id }}" name="{{ $fileName }}" id="{{ $id }}">
    
 <script>
        document.addEventListener('pondReset', (e) => {
            console.log(e);
            pond.removeFile();
            //add image listener in component
        });
        let livewireEventListenerAdded = false;
        if (!livewireEventListenerAdded) {
            document.addEventListener('livewire:load', function () {
                Livewire.on('removeImage', function (index) {
                    console.log(index);
                    

                    // Remove the corresponding div by index
                     document.querySelector('.img-container').children[index].remove();
                     Livewire.emit('updateImageInputs', index);
                });

                livewireEventListenerAdded = true;
            });
        }

        // document.addEventListener('FilePond:removefile', (e) => {
        //     Livewire.emitTo('gigs.description', 'fileRemoved', e.detail);
        //     //add image listener in component
        // });

        // document.addEventListener('FilePond:addfilestart', (e) => {
        //     Livewire.emitTo('gigs.description', 'disableSubmit', e.detail);
        //     // add image listener in component
        // })

        // document.addEventListener('FilePond:preparefile', (e) => {
        //     Livewire.emitTo('gigs.description', 'enableSubmit', e.detail);
        //     // add image listener in component
        // })
    </script>
</div>