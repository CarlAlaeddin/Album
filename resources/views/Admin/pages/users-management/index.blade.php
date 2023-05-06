@extends('Admin.layouts.app')
@section('breadcrumb')
{{-- breadcrumb top title --}}
<x-breadcrumb-title>
    Users
</x-breadcrumb-title>
{{-- breadcrumb items --}}
<x-breadcrumb>
    <x-breadcrumb-item>
        <x-link href="{{ route('index') }}">Dashboard</x-link>
    </x-breadcrumb-item>
    <x-breadcrumb-item>
        <a href="{{ route('admin.user.index') }}">Users</a>
    </x-breadcrumb-item>
</x-breadcrumb>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row el-element-overlay">
        @foreach ($users as $user)
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="el-card-item">
                    <div class="el-card-avatar el-overlay-1"> <img
                            src="{{ asset('/Panel/assets/images/users/1-old.jpg') }}" alt="user">
                        <div class="el-overlay">
                            <ul class="list-style-none el-info">
                                <li class="el-item">
                                    <a class="btn default btn-outline image-popup-vertical-fit el-link" href="{{ asset('/Panel/assets/images/users/1-old.jpg') }}">
                                        <i class="icon-magnifier"></i>
                                    </a>
                                </li>
                                <li class="el-item">
                                    <a class="btn default btn-outline el-link" href="{{ route('admin.user.edit',$user->id) }}">
                                        <i class="icon-pencil"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="el-card-content">
                        <h4 class="m-b-0">{{ $user->name }}</h4>
                        <span class="text-muted">{{ $user->email }}</span>
                        @switch($user->role)
                            @case(1)
                                @php $role = 'is admin' @endphp
                                @break
                            @case(2)
                                @php $role = 'is writer' @endphp
                                @break
                            @case(3)
                                @php $role = 'is client' @endphp
                                @break
                            @default
                                
                        @endswitch
                        <p class="text-muted">{{ $role }}</p>
                        
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <div class="col-md-12 d-flex justify-content-center">
            {{ $users->links('vendor/pagination/bootstrap-5') }}
        </div>
    </div>
</div>
@endsection