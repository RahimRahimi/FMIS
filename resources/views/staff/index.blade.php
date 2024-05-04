@extends('layouts.app')
@section('content')
@section('title')
<title>Staff</title>
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
                    <h2 class="card-title">All Staff</h2>
                </div>
                <div><button class="btn btn-light"> Add new employee</button></div>
            </div>
        </div>
        <div class="card-body">
            <div class="card mb-0">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover" id="staff_table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Full name</th>
                                    <th>Father name</th>
                                    <th>Mobile no.</th>
                                    <th>Province</th>
                                    <th>District</th>
                                    <th>Deputy</th>
                                    <th>Administration</th>
                                    <th>Action(s)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>134</strong></td>
                                    <td><a href="#">Rahimullah Rahimi</a></td>
                                    <td>Qamar Khan</td>
                                    <td>+93799887766</td>
                                    <td>Paktia</td>
                                    <td>Zurmat</td>
                                    <td>Professtional</td>
                                    <td>Software</td>
                                    <td>
                                        <div class="list-icons">
                                            <a href="#" class="list-icons-item text-primary"><i class="ph-note-pencil"
                                                    title="Edit"></i></a>
                                            <a href="#" class="list-icons-item text-danger"><i class="ph-trash"
                                                    title="Move to trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>353</strong></td>
                                    <td><a href="#">Obaidullah Karrimi</a></td>

                                    <td>Abdul Salam</td>

                                    <td>+93712345678</td>
                                    <td>Wardak</td>
                                    <td>Chak</td>
                                    <td>Software</td>
                                    <td>System and Database Designing and Development</td>
                                    <td>
                                        <div class="list-icons">
                                            <a href="#" class="list-icons-item text-primary"><i class="ph-note-pencil"
                                                    title="Manage user"></i></a>
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
        <script>
            $(document).ready(function() {  
                $.extend( $.fn.dataTable.defaults, {
                    autoWidth: false,
                    colReorder:true,
                    dom: '<"datatable-header justify-content-start"f<"ms-sm-auto"l><"ms-sm-3"B>><"datatable-scroll-wrap"t><"datatable-footer"ip>',
                    language: {
                        search: '<span class="me-3">Filter:</span> <div class="form-control-feedback form-control-feedback-end flex-fill">_INPUT_<div class="form-control-feedback-icon"><i class="ph-magnifying-glass opacity-50"></i></div></div>',
                        searchPlaceholder: 'Type to filter...',
                        lengthMenu: '<span class="me-3">Show:</span> _MENU_',
                        paginate: { 'first': 'First', 'last': 'Last', 'next': document.dir == "rtl" ? '&larr;' : '&rarr;', 'previous': document.dir == "rtl" ? '&rarr;' : '&larr;' }
                    }
                });
                var table = $('#staff_table').DataTable({
                    buttons: [
                        {extend: 'colvis',className: 'btn btn-light dropdown-toggle'},
                        {extend: 'excelHtml5',className: 'btn btn-light'},
                        ],
                });
            });
        </script>
    </div>
</div>
@endsection