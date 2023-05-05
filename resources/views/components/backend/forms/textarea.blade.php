@props([
    'name',
    'id',
    'cols',
    'rows'
])
<textarea 
    name="{{ $name }}"
    id="{{ $id }}"
    cols="{{ $cols }}"
    rows="{{ $rows }}"
    {{ $attributes->merge(['class'=>'form-control']) }}>{{ $slot }}</textarea>