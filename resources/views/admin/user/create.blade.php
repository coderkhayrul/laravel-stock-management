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
                    <a href="{{ route('admin.user') }}" class="btn btn-xs btn-dark">
                        <i class="uil-book-reader"></i>
                        All User
                    </a>
                </div><!-- end card header -->
                <form action="{{ route('admin.user.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row d-flex justify-content-between">
                            <div class="col-6 mb-3">
                                <label class="form-label" for="userName">User Name<span
                                        class="text-danger">*</span></label>
                                <input type="text" name="name" value="{{ old('name') }}" parsley-trigger="change"
                                    placeholder="Enter user name" class="form-control" id="name" data-parsley-id="1">
                                @error('name')
                                    <ul class="parsley-errors-list filled" id="parsley-id-1" aria-hidden="false">
                                        <li class="parsley-required">{{ $message }}</li>
                                    </ul>
                                @enderror
                            </div>
                            <div class="col-6 mb-3">
                                <label class="form-label" for="userName">Phone Number<span
                                        class="text-danger">*</span></label>
                                <input type="text" name="phone" value="{{ old('phone') }}" parsley-trigger="change"
                                    placeholder="Enter Phone Number" class="form-control" id="phone" data-parsley-id="1">

                            </div>
                            <div class="col-6 mb-3">
                                <label class="form-label" for="userName">Email Address<span
                                        class="text-danger">*</span></label>
                                <input type="email" name="email" value="{{ old('email') }}" parsley-trigger="change"
                                    placeholder="Enter Email Address" class="form-control" id="email" data-parsley-id="2">

                            </div>
                            @php
                                $roles = App\Models\Role::where('role_status', 1)
                                    ->orderBy('role_id', 'DESC')
                                    ->get();
                            @endphp
                            <div class="col-6 mb-3">
                                <label class="form-label" for="userName">Role<span
                                        class="text-danger">*</span></label>
                                <select name="role_id" class="form-select mb-2" value="{{ old('role_id') }}">
                                    <option selected="" disabled>Select Role Option</option>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role->role_id }}">{{ $role->role_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-6 mb-3">
                                <label class="form-label" for="userName">Password<span
                                        class="text-danger">*</span></label>
                                <input type="password" name="password" value="{{ old('password') }}"
                                    placeholder="Enter Password" class="form-control" id="password" data-parsley-id="3">

                            </div>

                            <div class="col-6 mb-3">
                                <label class="form-label" for="exampleInputPassword1">Confirm
                                    Password</label>
                                <input type="password" name="password_confirmation" class="form-control"
                                    id="password_confirmation" placeholder="Confim Password">
                            </div>

                            <div class="row mb-3">
                                <label class="form-label" for="userName">User Image<span
                                        class="text-danger">*</span></label>
                                <div class="col-6">
                                    <input type="file" id="example-fileinput" name="image"
                                        class="form-control @error('image') is-invalid @enderror">
                                    @error('image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-3 text-center">
                                    <img id="preview-image" src="{{ asset('uploads/no_image.jpg') }}" alt="image"
                                        class="img-fluid rounded" width="100" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-center">
                        <button type="submit" class="btn btn-success">User Register</button>
                    </div>
                </form>

            </div> <!-- end card -->
        </div><!-- end col-->
    </div>

    {{-- LIVE IMAGE SHOW SCRIPT --}}
    <script type="text/javascript">
        $('#example-fileinput').change(function() {
            let reader = new FileReader();
            reader.onload = (e) => {
                $('#preview-image').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        });
    </script>
@endsection
