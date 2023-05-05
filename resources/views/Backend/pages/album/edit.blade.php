@extends('Backend.layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 p-3 my-5 border shadow rounded">
                <h4 class="text-uppercase">Edit Your Album</h4>
                <x-form action="{{ route('album.update',$album->slug) }}" method="POST" enctype="multipart/form-data">
                    @method('POST')
                    <div class="my-3">
                        <x-label for="title">Title</x-label>
                        <x-input type="text" name="title" id="title" class="form-control" value="{{ $album->title }}" placeholder="Enter title .."/>
                    </div>
                    <div class="my-3">
                        <x-label for="description">Description</x-label>
                        <x-textarea name="description" id="description" cols="30" rows="5" class="form-control">
                            {{ $album->description }}
                        </x-textarea>
                    </div>
                    <div class="my-3">
                        <x-label for="image">Image</x-label>
                        <x-input type="file" name="image" id="image" class="form-control"/>
                    </div>
                        <div class="my-3">
                            <x-label for="is_status">Is Status</x-label>
                            <x-select name="is_status" id="is_status" class="form-control form-selete">
                                <option selected disabled>Selete Status</option>
                                <option value="0">DeActive</option>
                                <option value="1">Active</option>
                            </x-select>
                        </div>
                    <x-button class="btn-outline-primary" type="submit">Edit</x-button>
                </x-form>
            </div>
        </div>
    </div>
@endsection
