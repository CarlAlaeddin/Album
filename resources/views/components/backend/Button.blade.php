@props([
    'type'
])
<button {{ $attributes->merge(['class' => 'btn btn-md']) }} type="{{ $type }}">
    {{ $slot }}
</button>