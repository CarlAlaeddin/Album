@props([
    'href'
])
<a href="{{ $href }}" {{ $attributes->merge(['class'=>'text-dark']) }}>{{ $slot }}</a>