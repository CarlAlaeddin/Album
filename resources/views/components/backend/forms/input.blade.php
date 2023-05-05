@props([
    'type',
    'name',
    'id',
    'value' => null,
    'placeholder' => null
])

<input
    type="{{ $type }}"
    name="{{ $name }}"
    id="{{ $id }}"
    value="{{ $value }}"
    placeholder="{{ $placeholder }}"
    {{ $attributes->merge(['class' => 'form-control']) }}
>