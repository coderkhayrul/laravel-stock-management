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
                <a href="{{ route('admin.category.create') }}" class="btn btn-xs btn-success">
                    <i class="uil-plus-circle"></i>
                    Add Category
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
                            <td>{{ $category->category_name }}</td>
                            <td>{{ $category->remarks }}</td>
                            <td>Product Name</td>
                            <td class="text-center">
                                <div class="dropdown align-self-center">
                                    <a href="#" class="dropdown-toggle arrow-none text-muted" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="uil uil-ellipsis-h"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <!-- item-->
                                        <a href="{{ route('admin.category.show',$category->slug) }}"
                                            class="dropdown-item">
                                            <i class="uil uil- uil-eye me-2"></i>View
                                        </a>
                                        <!-- item-->
                                        <a href="{{  route('admin.category.edit',$category->slug) }}"
                                            class="dropdown-item">
                                            <i class="uil uil-edit-alt me-2"></i>Edit
                                        </a>
                                        <!-- item-->
                                        <a href="{{ route('admin.category.softdelete',$category->slug) }}" class="dropdown-item show_soft_confirm">
                                            <i class="uil uil-exit me-2"></i>Move to Trush
                                        </a>
                                        <form id="softdelele_form"
                                            action="{{ route('admin.category.softdelete',$category->slug) }}"
                                            class="d-none" method="post">
                                            @csrf
                                        </form>

                                        <div class="dropdown-divider"></div>
                                        <!-- item-->
                                        <a href="{{ route('admin.category.destroy',$category->slug) }}"
                                            class="dropdown-item text-danger show_confirm">
                                            <i class="uil uil-trash me-2"></i>Delete
                                        </a>
                                        <form id="delele-form"
                                            action="{{ route('admin.category.destroy',$category->slug) }}"
                                            class="d-none" method="post">
                                            @method('DELETE')
                                            @csrf
                                        </form>

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
            </div>
            <!-- end card footer -->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>

<!-- Modal Soft Delete-->

<script type="text/javascript">
    $('.show_confirm').click(function (event) {
        var form = $(this).closest("form");
        var name = $(this).data("name");
        event.preventDefault();
        swal({
                title: `Are you sure you want to delete this record?`,
                text: "If you delete this, it will be gone forever.",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $('#delele-form').submit();
                }
            });
    });

    $('.show_soft_confirm').click(function (event) {
        var form = $(this).closest("form");
        var name = $(this).data("name");
        event.preventDefault();
        swal({
                title: `Are you sure you want to delete this record?`,
                text: "If you delete this, it will be gone forever.",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $('#softdelele_form').submit();
                }
            });
    });

</script>
@endsection
