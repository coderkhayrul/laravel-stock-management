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
                <span><i class="uil uil-users-alt"></i> <strong>Product Category</strong></span>
                <a href="{{ route('admin.categories') }}" class="btn btn-xs btn-success">
                    <i class="uil-book-reader"></i>
                    All Category
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
                                        <form action="{{ route('admin.category.store') }}" method="post">
                                            @csrf
                                            <div class="mb-3">
                                                <label class="form-label" for="category_name">Category Name<span class="text-danger">*</span></label>
                                                <input type="text" name="category_name" value="{{ old('category_name') }}" parsley-trigger="change" placeholder="Enter Category Name" class="form-control @error('category_name') parsley-error @enderror @if(old('category_name')) parsley-success @endif" id="category_name" data-parsley-id="1">
                                                @error('category_name')
                                                    <ul class="parsley-errors-list filled" id="parsley-id-1" aria-hidden="false">
                                                        <li class="parsley-required">{{ $message }}</li>
                                                    </ul>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="remarks">Remarks<span class="text-danger">*</span></label>
                                                <input type="text" name="remarks" value="{{ old('remarks') }}" parsley-trigger="change" placeholder="Enter Remarks" class="form-control @error('remarks') parsley-error @enderror @if(old('remarks')) parsley-success @endif" id="email" data-parsley-id="2">
                                                @error('remarks')
                                                    <ul class="parsley-errors-list filled" id="parsley-id-2" aria-hidden="false">
                                                        <li class="parsley-required">{{ $message }}</li>
                                                    </ul>
                                                @enderror
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div>
                            <!-- end col -->

                        </div>
            </div> <!-- end card body-->
            {{-- <div class="card-footer">
                <div class="btn-group">
                    <a href="#" class="btn btn-secondary">Print</a>
                    <a href="#" class="btn btn-dark">PDF</a>
                    <a href="#" class="btn btn-secondary">Excel</a>
                </div>
            </div> --}}
            <!-- end card footer -->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
@endsection
