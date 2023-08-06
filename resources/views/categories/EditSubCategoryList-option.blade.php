<?php $dash .= '-- '; ?>
@foreach ($subcategories as $subcategory)
    <option value="{{ $subcategory->id }}"
        {{ $subcategory->id === $product->category_id ? 'selected' : '' }}

        >{{ $dash }}{{ $subcategory->name }}</option>
    @if (count($subcategory->subcategory))
        @include('categories/subCategoryList-option', ['subcategories' => $subcategory->subcategory])
    @endif
@endforeach



