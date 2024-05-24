<?php $dash.='-- '; ?>
@foreach($subcategories as $subcategory)
    <option value="{{$subcategory->id}}">{{$dash}}{{$subcategory->title}}</option>
    @if(count($subcategory->subcategory))
        @include('livewire.admin.categories.subCategoryList-option',['subcategories' => $subcategory->subcategory])
    @endif
@endforeach