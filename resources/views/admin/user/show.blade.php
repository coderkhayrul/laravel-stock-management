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
                <span><i class="uil uil-users-alt"></i> <strong>View User Information</strong></span>
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
                                        {{-- @if (Session::has('message'))
                                            <div class="alert alert-success fade show" role="alert">
                                                {{ Session::get('message') }}
                                            </div>
                                        @endif --}}

                                            <div class="row">
                                                <div class="cal-md-2"></div>
                                                <div class="cal-md-8">
                                                    <table class="table table-striped table-bordered table-hover custrom-view-table">
                                                        <tr>
                                                            <td>Name</td>
                                                            <td class="text-center">:</td>
                                                            <td>{{ $user->name }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Phone</td>
                                                            <td class="text-center">:</td>
                                                            <td>01835061968</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Email</td>
                                                            <td class="text-center">:</td>
                                                            <td>{{ $user->email }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>User Role</td>
                                                            <td class="text-center">:</td>
                                                            <td>Super Admin</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Registation Time</td>
                                                            <td class="text-center">:</td>
                                                            <td>{{ $user->created_at->format('Y-m-d | h:i') }}</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <div class="cal-md-2"></div>

                                            </div>

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
