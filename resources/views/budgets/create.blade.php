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
<title>Create Budget</title>
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
                                <i class="icon-coins icon-2x"></i>
                            </div>
                            <h5 class="mb-0">Create Budget</h5>
                            <span class="d-block text-muted">Some fields are required</span>
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label">Code <span class="text-danger"> *</span></label>
                                    <div class="form-control-feedback form-control-feedback-start">
                                        <input type="text" class="form-control" placeholder="S230" required>
                                        <div class="form-control-feedback-icon">
                                            <i class="ph-hash text-muted"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label">Amount</label>
                                    <div class="form-control-feedback form-control-feedback-start">
                                        <input type="number" class="form-control" value="0" disabled>
                                        <div class="form-control-feedback-icon">
                                            <i class="ph-hash text-muted"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label">Type <span class="text-danger"> *</span></label>
                                    <div class="form-control-feedback form-control-feedback-start">
                                        <input type="text" class="form-control" placeholder="Salaries"
                                            list="budget_types" required>
                                        <datalist id="budget_types">
                                            <option value="Salaries">
                                            <option value="Operative">
                                        </datalist>
                                        <div class="form-control-feedback-icon">
                                            <i class="ph-question text-muted"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label">Date<span class="text-danger"> *</span></label>
                                    <div class="form-control-feedback form-control-feedback-start">
                                        <input type="date" class="form-control" required>
                                        <div class="form-control-feedback-icon">
                                            <i class="ph-calendar-blank text-muted"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label">Start date<span class="text-danger"> *</span></label>
                                    <div class="form-control-feedback form-control-feedback-start">
                                        <input type="date" class="form-control" required>
                                        <div class="form-control-feedback-icon">
                                            <i class="ph-calendar-blank text-muted"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label">End date<span class="text-danger"> *</span></label>
                                    <div class="form-control-feedback form-control-feedback-start">
                                        <input type="date" class="form-control" required>
                                        <div class="form-control-feedback-icon">
                                            <i class="ph-calendar-blank text-muted"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Discription</label>
                                    <div class="form-control-feedback form-control-feedback-start">
                                        <textarea class="form-control" placeholder="Budget description goes here.."
                                            rows="1"></textarea>
                                        <div class="form-control-feedback-icon">
                                            <i class="ph-info text-muted"></i>
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
                            Create
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>
@endsection