@extends('Frontend.layouts.app')
@section('content')
    <section class="py-4 text-center container">
        <div class="row py-lg-1">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">My Album</h1>
                <p class="lead text-body-secondary">This album is a collection of memories and events that happened to me in the day.</p>
            </div>
        </div>
    </section>
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
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

            </div>
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center my-3">
                    {{ $albums->links('vendor/pagination/bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>
@endsection
