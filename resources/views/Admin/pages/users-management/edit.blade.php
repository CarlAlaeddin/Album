@extends('Admin.layouts.app')
@section('breadcrumb')
{{-- breadcrumb top title --}}
<x-breadcrumb-title>
    User - Edit
</x-breadcrumb-title>
{{-- breadcrumb items --}}
<x-breadcrumb>
    <x-breadcrumb-item>
        <x-link href="{{ route('index') }}">Dashboard</x-link>
    </x-breadcrumb-item>
    <x-breadcrumb-item>
        <a href="{{ route('admin.user.index') }}">User edit</a>
    </x-breadcrumb-item>
</x-breadcrumb>
@endsection
@section('content')
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <!-- Row -->
    <div class="row">
        <!-- Column -->
        <div class="col-lg-4 col-xlg-3 col-md-5">
            <div class="card">
                <div class="card-body">
                    <center class="m-t-30"> <img src="{{ asset('/Panel/assets/images/users/5.jpg')}}"
                            class="rounded-circle" width="150">
                        <h4 class="card-title m-t-10">{{ $user->name }}</h4>
                        @switch($user->role)
                        @case(1)
                        @php $role = 'Admin' @endphp
                        @break
                        @case(2)
                        @php $role = 'Writer' @endphp
                        @break
                        @case(3)
                        @php $role = 'Client' @endphp
                        @break
                        @endswitch
                        <h6 class="card-subtitle">{{ $role }}</h6>
                        <div class="row text-center justify-content-md-center">
                            <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-people"></i>
                                    <font class="font-medium">254</font>
                                </a></div>
                            <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i>
                                    <font class="font-medium">54</font>
                                </a></div>
                        </div>
                    </center>
                </div>
                <div>
                    <hr>
                </div>
                <div class="card-body"> <small class="text-muted">Email address </small>
                    <h6>{{ $user->email }}</h6> <small class="text-muted p-t-30 db">Phone</small>
                    <h6>+91 654 784 547</h6> <small class="text-muted p-t-30 db">Address</small>
                    <h6>71 Pilgrim Avenue Chevy Chase, MD 20815</h6>
                    <small class="text-muted p-t-30 db">Social Profile</small>
                    <br>
                    <div class="my-1 d-flex justify-content-center">
                        <button class="btn btn-circle btn-secondary mx-2"><i class="fab fa-facebook-f"></i></button>
                        <button class="btn btn-circle btn-secondary mx-2"><i class="fab fa-twitter"></i></button>
                        <button class="btn btn-circle btn-secondary mx-2"><i class="fab fa-youtube"></i></button>
                    </div>
                    <div class="my-2 d-flex justify-content-center">
                        <x-form method="post" action="{{ route('admin.user.destroy',$user->id) }}">
                            <x-button type="submit" class="btn-outline-danger">
                                Delete Account
                            </x-button>
                        </x-form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-8 col-xlg-9 col-md-7">
            <div class="card">
                <div class="card-body">
                    <x-form method="POST" action="{{ route('admin.user.update',$user->id) }}" enctype="">
                        <div class="my-2">
                            <x-label for="name">Name</x-label>
                            <x-input
                                type="text"
                                name="name"
                                id="name"
                                value="{{ $user->name }}"
                                placeholder="Enter User Name"
                                class="@error('name') is-invalid @enderror"
                            />
                            @error('name')
                                <x-error>
                                    {{ $message }}
                                </x-error>
                            @enderror
                        </div>
                        <div class="my-2">
                            <x-label for="email">Email</x-label>
                            <x-input
                                type="email"
                                name="email"
                                id="email"
                                value="{{ $user->email }}"
                                placeholder="Enter User Email"
                                class="@error('email') is-invalid @enderror"
                            />
                            @error('email')
                                <x-error>
                                    {{ $message }}
                                </x-error>
                            @enderror
                        </div>
                        <div class="my-2">
                            <x-label for="role">Role</x-label>
                            <x-select name="role" id="role" class="@error('role') is-invalid @enderror">
                                <option selected disabled>Select role user</option>
                                <option value="1" @if($user->role === 1) {{ __('selected') }} @endif>is admin</option>
                                <option value="2" @if($user->role === 2) {{ __('selected') }} @endif>is writer</option>
                                <option value="3" @if($user->role === 3) {{ __('selected') }} @endif>is client</option>
                            </x-select>
                            @error('role')
                                <x-error>
                                    {{ $message }}
                                </x-error>
                            @enderror
                        </div>
                        <div class="my-3">
                            <x-button type="submit" class="btn-primary">Edit User</x-button>
                        </div>
                    </x-form>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
    <!-- Row -->
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
</div>
@endsection