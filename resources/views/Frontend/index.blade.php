@extends('Frontend.layouts.app')
@section('content')
    @foreach($albums as $album)
    <div class="col">
        <div class="card shadow-sm rounded">
            <img class="img-fluid" src="{{ $album->image }}" alt="{{ \Illuminate\Support\Str::limit($album->description,20) }}">
            <div class="card-body">
                <p class="card-text">{{ \Illuminate\Support\Str::limit($album->description) }}</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <a href="{{ route('album.show',$album->id) }}" class="btn btn-sm btn-outline-secondary">View</a>
                        <a href="{{ route('album.edit',$album->id) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                    </div>
                    <small class="text-body-secondary">{{ $album->created_at->format('Y-M-d | H:m:s') }}</small>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection
