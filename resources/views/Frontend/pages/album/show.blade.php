@extends('Frontend.layouts.app')
@section('content')
    <div class="album py-5 bg-body-tertiary">
        <div class="container">
            @if(session()->has('message'))
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-success" role="alert">
                            {{ session()->get('message') }}
                        </div>
                    </div>
                </div>
            @endif
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('/images/album/').'/'.$album->image }}" alt="" width="400" height="400">
                </div>
                <div class="col-md-8">
                    <p>{{ $album->description }}</p>
                    <div>
                        <form action="{{ route('album.destroy',$album->slug) }}" method="POST">
                            @csrf
                            <button class="btn btn-md btn-danger" onclick="return confirm('Warning: If this post is deleted, it will not be returned')">Delete This Post</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
