<?php $dash.='-- '; ?>
@foreach($subcategories as $subcategory)
    @if($category_id != $subcategory->id && $category_id != $subcategory->parent_id)
        <option value="{{$subcategory->id}}">
        	{{$dash}}{{$subcategory->title}}
        </option>
    @endif
    @if(count($subcategory->subcategory))
        @include('livewire.admin.categories.sub-category-list-option-for-update',['subcategories' => $subcategory->subcategory])
    @endif
@endforeach