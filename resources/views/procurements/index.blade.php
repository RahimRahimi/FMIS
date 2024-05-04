@extends('layouts.app')
@section('content')
@section('title')
<title>Procurements</title>
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
                    <h2 class="card-title">All Procurements</h2>
                </div>
                <div><a href="{{route('procurements.create')}}" class="btn btn-light"> Add New Procurement</a></div>
            </div>
        </div>
        <div class="card-body">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-sm" id="procurements_table">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Budget Code</th>
                                    <th>Payee</th>
                                    <th>item</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Total Price</th>
                                    <th>Currency</th>
                                    <th>Location</th>
                                    <th>Deputy</th>
                                    <th>Administration</th>
                                    <th>Recipient</th>
                                    <th>Payer</th>
                                    <th>Date</th>
                                    <th>Reference</th>
                                    <th>Discription</th>
                                    <th>Action(s)</th>
                                </tr>

                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>22</strong></td>
                                    <td>S023</td>
                                    <td>Rahimullah Rahimi</td>
                                    <td>Desktop Optiplex 2322</td>
                                    <td>15</td>
                                    <td>15000</td>
                                    <td>1500000</td>
                                    <td>AFN</td>
                                    <td>China</td>
                                    <td>Software</td>
                                    <td>IC6</td>
                                    <td>Rahimullah Rahimi</td>
                                    <td>Faridullah Khaksar</td>
                                    <td>1402/02/23</td>
                                    <td>Eng. Raza Khan</td>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                                    <td>
                                        <div class="list-icons">
                                            <a href="#" class="list-icons-item text-primary"><i class="ph-note-pencil"
                                                title="Edit"></i></a>
                                                <a href="#" class="list-icons-item text-danger"><i class="ph-trash"
                                                    title="Move to trash"></i></a>
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
        var table = $('#procurements_table').DataTable({
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
</div>
@endsection