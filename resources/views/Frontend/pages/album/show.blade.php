@extends('Frontend.layouts.app')
@section('content')
    <div class="album py-5 bg-body-tertiary">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('/images/album/').'/'.$album->image }}" alt="" width="400" height="400">
                </div>
                <div class="col-md-8">
                    <p>{{ $album->description }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
