@extends('Frontend.layouts.app')
@section('content')
    <div class="card">
        <h5 class="card-header">ID Photo {{ $album->id }}</h5>
        <div class="card-header">
            <img src="{{ $album->image }}" alt="">
        </div>
        <div class="card-body">
            {{ $album->description }}
        </div>
    </div>
@endsection
