@extends('layouts.app')
@section('content')
@push('css')
<script src="{{asset('js/icons/icomoon/styles.min.css')}}"></script>
@endpush
@section('title')
<title>Create Deputy</title>
@endsection
<div class="content d-flex justify-content-center align-items-center">
    <form action="{{route('deputies.store')}}" method="POST" class="flex-fill">
        @csrf
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                @if(session()->has('success'))<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    <b> Success! </b>
                    {{session('success')}}
                </div> @endif
                <div class="card mb-0">
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <div class="d-inline-flex align-items-center justify-content-center mb-2 mt-2">
                                {{-- <img src="{{asset('logo_icon.svg')}}" class="h-48px" alt=""> --}}
                                <i class="icon-plus3 icon-2x"></i>
                            </div>
                            <h5 class="mb-0">Create Deputy</h5>
                            <span class="d-block text-muted">All fields are required</span>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label class="form-label">Name<span class="text-danger"> *</span></label>
                                    <div class="form-control-feedback form-control-feedback-start">
                                        <input type="text" name="name" class="form-control" placeholder="Supportive..."
                                            autofocus>
                                        <div class="form-control-feedback-icon">
                                            <i class="ph-tree-structure text-muted"></i>
                                        </div>
                                    </div>
                                    @error('name')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea name="description" id="" cols="30" rows="2" class="form-control"
                                        placeholder="Description goes here...."></textarea>
                                    @error('description')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
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
                            Create deputy
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection