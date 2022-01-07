@extends('layouts.app')

@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <h4 class="page-title">Dashboard</h4>
        </div>
    </div>
</div>
<!-- end page title -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="d-flex card-header bg-secondary text-light justify-content-between">
                <span><i class="uil uil-users-alt"></i> <strong>User Registation</strong></span>
                <a href="{{ route('admin.users') }}" class="btn btn-xs btn-success">
                    <i class="uil-book-reader"></i>
                    All User
                </a>
            </div><!-- end card header -->
            <div class="card-body">
                <div class="row d-flex justify-content-center">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        @if (Session::has('message'))
                                            <div class="alert alert-success fade show" role="alert">
                                                {{ Session::get('message') }}
                                            </div>
                                        @endif
                                        <form action="{{ route('admin.user.store') }}" method="post">
                                            @csrf
                                            <div class="mb-3">
                                                <label class="form-label" for="userName">User Name<span class="text-danger">*</span></label>
                                                <input type="text" name="userName" value="{{ old('userName') }}" parsley-trigger="change" placeholder="Enter user name" class="form-control @error('userName') parsley-error @enderror @if(old('userName')) parsley-success @endif" id="userName" data-parsley-id="1">
                                                @error('userName')
                                                    <ul class="parsley-errors-list filled" id="parsley-id-1" aria-hidden="false">
                                                        <li class="parsley-required">{{ $message }}</li>
                                                    </ul>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="userName">Email Address<span class="text-danger">*</span></label>
                                                <input type="email" name="email" value="{{ old('email') }}" parsley-trigger="change" placeholder="Enter Email Address" class="form-control @error('email') parsley-error @enderror @if(old('email')) parsley-success @endif" id="email" data-parsley-id="2">
                                                @error('email')
                                                    <ul class="parsley-errors-list filled" id="parsley-id-2" aria-hidden="false">
                                                        <li class="parsley-required">{{ $message }}</li>
                                                    </ul>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="userName">Password<span class="text-danger">*</span></label>
                                                <input type="password" name="password" value="{{ old('password') }}" parsley-trigger="change" placeholder="Enter Password" class="form-control @error('password') parsley-error @enderror" id="password" data-parsley-id="3">
                                                @error('password')
                                                    <ul class="parsley-errors-list filled" id="parsley-id-3" aria-hidden="false">
                                                        <li class="parsley-required">{{ $message }}</li>
                                                    </ul>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="exampleInputPassword1">Confirm Password</label>
                                                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confim Password">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Register</button>
                                        </form>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div>
                            <!-- end col -->

                        </div>
            </div> <!-- end card body-->
            <div class="card-footer">
                <div class="btn-group">
                    <a href="#" class="btn btn-secondary">Print</a>
                    <a href="#" class="btn btn-dark">PDF</a>
                    <a href="#" class="btn btn-secondary">Excel</a>
                </div>
            </div><!-- end card footer -->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
@endsection
