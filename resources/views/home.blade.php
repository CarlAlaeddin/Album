@extends('Frontend.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 p-5 my-4">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    {{--alert component--}}
                    <x-alert />

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                {{-- form component --}}
                                <x-form action="{{ route('album.store') }}" method="post" enctype="multipart/form-data">
                                    <div class="my-2">
                                        {{-- label component --}}
                                        <x-label for="title">Title</x-label>
                                        {{-- input component --}}
                                        <x-input 
                                            type="text"
                                            name="title"
                                            id="title"
                                            value="{{ old('title') }}"
                                            placeholder="Title ..."
                                        />
                                    </div>
                                    <div class="my-2">
                                        {{-- label component --}}
                                        <x-label for="description">Description</x-label>
                                        {{-- textarea component --}}
                                        <x-textarea 
                                            name="description"
                                            id="description"
                                            cols="10"
                                            rows="10">
                                            {{ old('description') }}
                                        </x-textarea>
                                    </div>
                                    <div class="my-2">
                                        {{-- label component --}}
                                        <x-label for="image">Image</x-label>
                                        {{-- input component --}}
                                        <x-input 
                                            type="file"
                                            name="image"
                                            id="image"
                                            value="{{ old('image') }}"
                                            placeholder="select your image" 
                                        />

                                    </div>
                                    <div class="my-3">
                                        {{-- label component --}}
                                        <x-label for="is_status">
                                            Is Status
                                        </x-label>
                                        {{-- select box component --}}
                                        <x-select name="is_status" id="is_status">
                                            <option value="0">DeActive</option>
                                            <option value="1">Active</option>
                                        </x-select>
                                    </div>
                                    <div class="my-3">
                                        {{-- button component --}}
                                        <x-button class="btn-outline-primary" type="submit">
                                            submit
                                        </x-button>
                                    </div>
                                </x-form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection