@extends('layouts.app')
@section('content')
@push('js')
<script src="{{asset('js/Select2/form_select2.js')}}"></script>
<script src="{{asset('js/Select2/select2.min.js')}}"></script>
@endpush
@push('css')
<script src="{{asset('js/icons/icomoon/styles.min.css')}}"></script>
@endpush
@section('title')
<title>Create User</title>
@endsection
<!-- Content area -->
<div class="content d-flex justify-content-center align-items-center">
    <!-- Registration form -->
    <form action="{{route('users.store')}}" method="POST" class="flex-fill" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                @if(session()->has('success'))<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <b> Success! </b>
                    {{session('success')}} </div> @endif

                <div class="card mb-0">
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <div class="d-inline-flex align-items-center justify-content-center mb-2 mt-2">
                                {{-- <img src="{{asset('logo_icon.svg')}}" class="h-48px" alt=""> --}}
                                <i class="icon-user-plus icon-2x"></i>
                            </div>
                            <h5 class="mb-0">Create account</h5>
                            <span class="d-block text-muted">All fields are required</span>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Username <span class="text-danger"> *</span></label>
                                    <div class="form-control-feedback form-control-feedback-start">
                                        <input type="text" name="name" class="form-control" placeholder="JohnDoe"
                                            required autocomplete="name" value="{{old('name')}}" autofocus>
                                        <div class="form-control-feedback-icon">
                                            <i class="ph-user-circle text-muted"></i>
                                        </div>
                                        @error('name')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-1">
                                    <label class="form-label">Email<span class="text-danger"> *</span></label>
                                    <div class="form-control-feedback form-control-feedback-start">
                                        <input type="email" name="email" class="form-control" placeholder="john@doe.com"
                                            required autocomplete="email" value="{{old('email')}}">
                                        <div class="form-control-feedback-icon">
                                            <i class="ph-at text-muted"></i>
                                        </div>
                                        @error('email')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group mb-1">
                                    <label class="form-label">Roles<span class="text-danger"> *</span></label>
                                    <select multiple="multiple" class="form-control" name="roles[]"
                                        data-placehoder="Select Roles" id="roles">
                                        <option disabled>Select Roles</option>
                                        @foreach ($roles as $role)
                                        <option value="{{$role->id}}">{{$role->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('roles')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <script>
                                    $(document).ready(function(){
                                        $('#roles').select2();
                                    });
                                </script>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Create password<span class="text-danger"> *</span></label>
                                    <div class="form-control-feedback form-control-feedback-start form-group mb-1">
                                        <div class="input-group mb-3" id="password">
                                            <input type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                placeholder="•••••••••••" name="password" required
                                                autocomplete="new-password" value="{{old('password')}}">
                                            <span class="input-group-text"><a href=""><i class="ph-eye-slash"
                                                        aria-hidden="true"></i></a></span>
                                        </div>
                                        <div class="form-control-feedback-icon">
                                            <i class="ph-lock text-muted"></i>
                                        </div>
                                        @error('password')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Repeat password<span class="text-danger"> *</span></label>
                                    <div class="form-control-feedback form-control-feedback-start">
                                        <div class="input-group mb-3" id="confirm_password">
                                            <input type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                placeholder="•••••••••••" name="password_confirmation" required
                                                autocomplete="new-password" value="{{old('password_confirmation')}}">
                                            <span class="input-group-text"><a href=""><i class="ph-eye-slash"
                                                        aria-hidden="true"></i></a></span>
                                        </div>
                                        <div class="form-control-feedback-icon">
                                            <i class="ph-lock text-muted"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label class="form-label">Image</label>
                                    <input type="file" name="image" class="form-control" value="{{old('image')}}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body text-end border-top">
                        <button type="reset" class="btn btn-danger">
                            <i class="ph-eraser me-2"></i>
                            Reset
                        </button>
                        <button type="submit" class="btn btn-primary">
                            <i class="ph-plus me-2"></i>
                            Create account
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- /registration form -->
    <script type="text/javascript">
        $("#password a").on("click", function (event) {
            event.preventDefault();
            if ($("#password input").attr("type") == "text") {
                $("#password input").attr("type", "password");
                $("#password i").addClass("ph-eye-slash");
                $("#password i").removeClass("ph-eye");
            } else if ( $("#password input").attr("type") == "password") {
                $("#password input").attr("type", "text");
                $("#password i").removeClass("ph-eye-slash");
                $("#password i").addClass("ph-eye");
            }
        });
        $("#confirm_password a").on("click", function (event) {
            event.preventDefault();
            if ($("#confirm_password input").attr("type") == "text") {
                $("#confirm_password input").attr("type", "password");
                $("#confirm_password i").addClass("ph-eye-slash");
                $("#confirm_password i").removeClass("ph-eye");
            } else if ( $("#confirm_password input").attr("type") == "password") {
                $("#confirm_password input").attr("type", "text");
                $("#confirm_password i").removeClass("ph-eye-slash");
                $("#confirm_password i").addClass("ph-eye");
            }
        });
    </script>
</div>
@endsection