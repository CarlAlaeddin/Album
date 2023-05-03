@extends('Backend.layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 p-3 my-5 border shadow rounded">
                <h4 class="text-uppercase">Edit Your Album</h4>
                <form action="{{ route('album.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="my-3">
                        <label for="title">title</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
                    </div>
                    <div class="my-3">
                        <label for="description">description</label>
                        <textarea name="description" id="description" cols="30" rows="5" class="form-control">{{ old('description') }}</textarea>
                    </div>
                    <div class="my-3">
                        <label for="image">image</label>
                        <input type="file" name="image" id="image" class="form-control">
                    </div>
                    <div class="my-3">
                        <label for="status">is status</label>
                        <select name="status" id="status" class="form-control form-selete">
                            <option value="0">DeActive</option>
                            <option value="1">Active</option>
                        </select>
                    </div>
                    @endif
                    <button class="btn btn-md btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection
