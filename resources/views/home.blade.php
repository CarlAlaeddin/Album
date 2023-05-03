@extends('Frontend.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 p-5 my-4">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{ route('album.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="my-2">
                                        <label for="title">title</label>
                                        <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
                                    </div>
                                    <div class="my-2">
                                        <label for="description">description</label>
                                        <textarea name="description" id="description" cols="30" rows="5" class="form-control">{{ old('description') }}</textarea>
                                    </div>
                                    <div class="my-2">
                                        <label for="image">image</label>
                                        <input type="file" name="image" id="image" class="form-control">
                                    </div>
                                    @if(auth()->check() && auth()->user()->role == 1)
                                        <div class="my-3">
                                            <label for="is_status">is status</label>
                                            <select name="is_status" id="is_status" class="form-control form-selete">
                                                <option value="0">DeActive</option>
                                                <option value="1">Active</option>
                                            </select>
                                        </div>
                                    @endif
                                    <div class="my-3">
                                        <button class="btn btn-md btn-outline-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
