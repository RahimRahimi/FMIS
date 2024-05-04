@extends('layouts.app')
@section('content')
@section('title')
<title>Trashed Procurements</title>
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
    <div class="card" style="border: 2px solid red;">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h2 class="card-title">Trashed Procurements</h2>
                </div>
                {{-- <div><a href="{{route('procurements.create')}}" class="btn btn-light"> Add New Procurement</a></div> --}}
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
                                    <th>Deleted at</th>
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
                                    <td>1402/02/02</td>
                                    <td>
                                        <div class="list-icons">
                                            <a href="#" class="list-icons-item text-primary"><i class="ph-arrow-counter-clockwise"
                                                    title="Restore"></i></a>
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