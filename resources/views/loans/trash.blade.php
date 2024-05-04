@extends('layouts.app')
@section('content')
@section('title')
<title>Trashed Loans</title>
@endsection
@push('js')
<script src="{{asset('js\DataTables\datatables.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js\DataTables\Buttons-2.4.2\js\buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('js\DataTables\Buttons-2.4.2\js\buttons.colVis.min.js')}}"></script>
<script src="{{asset('js\DataTables\Buttons-2.4.2\js\buttons.html5.min.js')}}"></script>
@endpush
@push('css')
<link rel="stylesheet" href="{{asset('js/DataTables\datatables.min.css')}}">
<link rel="stylesheet" href="{{asset('js\DataTables\Buttons-2.4.2\css\buttons.bootstrap.min.css')}}">
@endpush
<div class="content">
    <div class="card" style="border:2px solid red;">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h2 class="card-title">Trashed Loan</h2>
                </div>
                {{-- <div><a href="{{route('loans.create')}}" class="btn btn-light"> Add New Loan</a></div> --}}
            </div>
        </div>
        <div class="card-body">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-sm table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Borrower</th>
                                    <th>Amount</th>
                                    <th>Paid amount</th>
                                    <th>Remaining amount</th>
                                    <th>Loan term</th>
                                    <th>Date</th>
                                    <th>Discription</th>
                                    <th>Status</th>
                                    <th>Action(s)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>34</strong></td>
                                    <td>Rahimullah Rahimi</td>
                                    <td>10000 &#1547;</td>
                                    <td>5000 &#1547;</td>
                                    <td>5000 &#1547;</td>
                                    <td>2 months</td>
                                    <td>1402/02/22</td>
                                    <td>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </td>
                                    <td><span class="badge bg-danger">Not paid</span></td>
                                    <td class="text-center">
                                        <div class="d-inline-flex">
                                            <div class="dropdown">
                                                <a href="#" class="text-body" data-bs-toggle="dropdown">
                                                    <i class="ph-list"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a href="#" class="dropdown-item">
                                                        <i class="ph-arrow-counter-clockwise me-2" title="Edit"></i>
                                                        <span>Restore</span>
                                                    </a>
                                                    <a href="#" class="dropdown-item">
                                                        <i class="ph-trash me-2" title="Move to trash"></i>
                                                        <span>Delete permanentally</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
