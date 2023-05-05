@extends('Admin.layouts.app')
@section('breadcrumb')
{{-- breadcrumb top title --}}
<x-breadcrumb-title>
    Dashboard
</x-breadcrumb-title>
{{-- breadcrumb items --}}
<x-breadcrumb>
    <x-breadcrumb-item>
        <x-link href="{{ route('index') }}">Home</x-link>
    </x-breadcrumb-item>
    <x-breadcrumb-item>
        <a href="{{ route('home') }}">Dashboard</a>
    </x-breadcrumb-item>
</x-breadcrumb>
@endsection
@section('content')

@endsection
