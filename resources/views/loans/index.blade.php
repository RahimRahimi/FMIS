@extends('layouts.app')
@section('content')
@section('title')
<title>Loans</title>
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
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h2 class="card-title">All Loan</h2>
                </div>
                <div><a href="{{route('loans.create')}}" class="btn btn-light"> Add New Loan</a></div>
            </div>
        </div>
        <div class="card-body">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-sm table-bordered table-responsive" id="loans_table">
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
                                                        <i class="ph-note-pencil me-2" title="Edit"></i>
                                                        <span>Edit</span>
                                                    </a>
                                                    <a href="#" class="dropdown-item">
                                                        <i class="ph-trash me-2" title="Move to trash"></i>
                                                        <span>Move to trash</span>
                                                    </a>
                                                    <a href="#" class="dropdown-item">
                                                        <i class="ph-file-doc me-2"></i>
                                                        <span>Pay loan</span>
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
    <script>
        $.extend( $.fn.dataTable.defaults, {
            autoWidth: false,
            dom: '<"datatable-header justify-content-start"f<"ms-sm-auto"l><"ms-sm-3"B>><"datatable-scroll-wrap"t><"datatable-footer"ip>',
            language: {
                search: '<span class="me-3">Filter:</span> <div class="form-control-feedback form-control-feedback-end flex-fill">_INPUT_<div class="form-control-feedback-icon"><i class="ph-magnifying-glass opacity-50"></i></div></div>',
                searchPlaceholder: 'Type to filter...',
                lengthMenu: '<span class="me-3">Show:</span> _MENU_',
                paginate: { 'first': 'First', 'last': 'Last', 'next': document.dir == "rtl" ? '&larr;' : '&rarr;', 'previous': document.dir == "rtl" ? '&rarr;' : '&larr;' }
            }
        });
        var table = $('#loans_table').DataTable({
            buttons: [
                {
                extend: 'colvis',
                className: 'btn btn-light dropdown-toggle'
            },
            {
                extend: 'excelHtml5',
                className: 'btn btn-light'
            },
            ],
            
        });
    </script>
      <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h2 class="card-title">Transactions</h2>
                </div>
                <div><a href="{{route('transactions.create')}}" class="btn btn-light"> Add New Transaction</a></div>
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
                                    <th>Loan No.</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                    <th>Discription</th>
                                    <th>Action(s)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>2</strong></td>
                                    <td><strong>34</strong></td>
                                    <td>10000 &#1547;</td>
                                    <td>1402/02/22</td>
                                    <td>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    </td>
                                    <td>
                                        <div class="list-icons">
                                            <a href="#" class="list-icons-item text-primary"><i class="ph-note-pencil"
                                                    title="Edit"></i></a>
                                            <a href="#" class="list-icons-item text-danger"><i class="ph-trash"
                                                    title="Delete permanentally"></i></a>
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
