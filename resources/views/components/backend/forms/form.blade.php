@props([
    'action',
    'method',
    'enctype' => null
])
<form action="{{ $action }}" method="{{ $method }}" {{ $attributes->merge(['enctype' => '']) }}>
    @csrf
    {{ $slot }}
</form>