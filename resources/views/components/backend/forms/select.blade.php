@props([
    'name',
    'id',
])

<select name="{{ $name }}" id="{{  $id }}" {{ $attributes->merge(['class' => 'form-control form-selete']) }}>
    {{ $slot }}
</select>