@extends('layouts.app')
@section('content')
@push('js')
<script src="{{asset('js/form_select2.js')}}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/select2.min.js')}}"></script>
@endpush
@push('css')
<script src="{{asset('js/icons/icomoon/styles.min.css')}}"></script>
@endpush
@section('title')
<title>Create Employee</title>
@endsection
<!-- Content area -->
<div class="content d-flex justify-content-center align-items-center">
    <!-- Registration form -->
    <form action="#" method="POST" class="flex-fill">
        @csrf
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="card mb-0">
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <div class="d-inline-flex align-items-center justify-content-center mb-2 mt-2">
                                {{-- <img src="{{asset('logo_icon.svg')}}" class="h-48px" alt=""> --}}
                                <i class="icon-user-plus icon-2x"></i>
                            </div>
                            <h5 class="mb-0">Create Employee</h5>
                            <span class="d-block text-muted">All fields are required</span>
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label">Name <span class="text-danger"> *</span></label>
                                    <div class="form-control-feedback form-control-feedback-start">
                                        <input type="text" class="form-control" placeholder="JohnDoe">
                                        <div class="form-control-feedback-icon">
                                            <i class="ph-user-circle text-muted"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label">Last Name <span class="text-danger"> *</span></label>
                                    <div class="form-control-feedback form-control-feedback-start">
                                        <input type="text" class="form-control" placeholder="JohnDoe">
                                        <div class="form-control-feedback-icon">
                                            <i class="ph-user-circle text-muted"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label">Father Name<span class="text-danger"> *</span></label>
                                    <div class="form-control-feedback form-control-feedback-start">
                                        <input type="text" class="form-control" placeholder="john@doe.com">
                                        <div class="form-control-feedback-icon">
                                            <i class="ph-user-circle text-muted"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label">Mobile No.</label>
                                    <div class="form-control-feedback form-control-feedback-start">
                                        <input type="text" class="form-control" placeholder="0788888888">
                                        <div class="form-control-feedback-icon">
                                            <i class="ph-phone text-muted"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        {{-- <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label class="form-label">Roles<span class="text-danger"> *</span></label>
                                    <select multiple="multiple" class="form-control select">
                                        <option disabled>Select Roles</option>
                                        <option value="AZ">Administrator</option>
                                        <option value="CO">Reporter</option>
                                        <option value="ID">Entry Officer</option>
                                    </select>
                                </div>
                                @error('roles')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                        </div> --}}

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label">Deputy<span class="text-danger"> *</span></label>
                                    <div class="form-control-feedback form-control-feedback-start">
                                        <select class="form-control @error('password') is-invalid @enderror">
                                            <option>Professtional</option>
                                            <option>Supportive</option>
                                        </select>
                                        <div class="form-control-feedback-icon">
                                            <i class="ph-tree-structure text-muted"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label">Administration<span class="text-danger">
                                            *</span></label>
                                    <div class="form-control-feedback form-control-feedback-start">
                                        <select class="form-control @error('password') is-invalid @enderror">
                                            <option>IC5</option>
                                            <option>IC6</option>
                                        </select>
                                        <div class="form-control-feedback-icon">
                                            <i class="ph-tree-structure text-muted"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label">Direction<span class="text-danger">
                                            *</span></label>
                                    <div class="form-control-feedback form-control-feedback-start">
                                        <select class="form-control @error('password') is-invalid @enderror">
                                            <option>Software and Database Development</option>

                                        </select>
                                        <div class="form-control-feedback-icon">
                                            <i class="ph-tree-structure text-muted"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label">Rank<span class="text-danger">
                                            *</span></label>
                                    <div class="form-control-feedback form-control-feedback-start">
                                        <select class="form-control @error('password') is-invalid @enderror">
                                            <option>Major</option>
                                            <option>General</option>

                                        </select>
                                        <div class="form-control-feedback-icon">
                                            <i class="ph-caret-double-up text-muted"></i>
                                        </div>
                                    </div>
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

</div>
@endsection