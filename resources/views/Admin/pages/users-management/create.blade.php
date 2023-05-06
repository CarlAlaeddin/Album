@extends('Admin.layouts.app')
@section('breadcrumb')
{{-- breadcrumb top title --}}
<x-breadcrumb-title>
    User - Create
</x-breadcrumb-title>
{{-- breadcrumb items --}}
<x-breadcrumb>
    <x-breadcrumb-item>
        <x-link href="{{ route('index') }}">Dashboard</x-link>
    </x-breadcrumb-item>
    <x-breadcrumb-item>
        <x-link href="{{ route('admin.user.index') }}">Users</x-link>
    </x-breadcrumb-item>
    <x-breadcrumb-item>
        <a href="{{ route('admin.user.create') }}">User Create</a>
    </x-breadcrumb-item>
</x-breadcrumb>
@endsection
@section('content')
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <!-- Row -->
    <div class="row d-flex justify-content-center">
        <!-- Column -->
        <div class="col-lg-8 col-xlg-9 col-md-7 border p-4 shadow bg-light rounded">
            <x-form method="POST" action="{{ route('admin.user.store') }}" enctype="">
                <div class="my-2">
                    <x-label for="name">Name</x-label>
                    <x-input
                        type="text"
                        name="name"
                        id="name"
                        value="{{ old('name') }}"
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
                        value="{{ old('email') }}"
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
                    <x-label for="password">Password</x-label>
                    <x-input
                        type="password"
                        name="password"
                        id="password"
                        value="{{ old('password') }}"
                        placeholder="Enter User Password"
                        class="@error('password') is-invalid @enderror"
                    />
                    @error('password')
                        <x-error>
                            {{ $message }}
                        </x-error>
                    @enderror
                </div>
                <div class="my-2">
                    <x-label for="passwordConfirm">Password Confirm</x-label>
                    <x-input
                        type="password"
                        name="password_confirmation"
                        id="passwordConfirm"
                        placeholder="Enter User Password Confirm"
                    />
                </div>
                <div class="my-2">
                    <x-label for="role">Role</x-label>
                    <x-select name="role" id="role" class="@error('role') is-invalid @enderror">
                        <option selected disabled>Select role user</option>
                        <option value="1">is admin</option>
                        <option value="2">is writer</option>
                        <option value="3">is client</option>
                    </x-select>
                    @error('role')
                        <x-error>
                            {{ $message }}
                        </x-error>
                    @enderror
                </div>
                <div class="my-3">
                    <x-button type="submit" class="btn-primary">Create new user</x-button>
                </div>
            </x-form>
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