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
                <span><i class="uil uil-users-alt"></i> <strong>All Category Information</strong></span>
                <a href="{{ route('admin.user.create') }}" class="btn btn-xs btn-success">
                    <i class="uil-plus-circle"></i>
                    Add User
                </a>
            </div><!-- end card header -->
            <div class="card-body">
                @if (Session::has('message'))
                    <div class="alert alert-success fade show" role="alert">
                        {{ Session::get('message') }}
                    </div>
                @endif
                <table id="basic-datatable" class="table table-bordered table-hover table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>Category Name</th>
                            <th>Remarks</th>
                            <th>Products</th>
                            <th>Manage</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                        <tr>
                            <td>{{ $caegory->category_name }}</td>
                            <td>{{ $caegory->remarks }}</td>
                            <td>Email</td>
                            <td class="text-center">
                                <div class="dropdown align-self-center">
                                    <a href="#" class="dropdown-toggle arrow-none text-muted" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="uil uil-ellipsis-h"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <!-- item-->
                                        <a href="#" class="dropdown-item">
                                            <i class="uil uil- uil-eye me-2"></i>View
                                        </a>
                                        <!-- item-->
                                        <a href="#" class="dropdown-item">
                                            <i class="uil uil-edit-alt me-2"></i>Edit
                                        </a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="uil uil-exit me-2"></i>Remove from Team
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item text-danger">
                                            <i class="uil uil-trash me-2"></i>Delete
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

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
