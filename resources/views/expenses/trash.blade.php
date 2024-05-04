@extends('layouts.app')
@section('content')
@section('title')
<title>Trashed Expenses</title>
@endsection

<div class="content">
    <div class="card" style="border: 2px solid red">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h2 class="card-title">Trashed Expenses</h2>
                </div>
                {{-- <div><a href="{{route('expenses.create')}}" class="btn btn-light"> Add New Expense</a></div> --}}
            </div>
        </div>
        <div class="card-body">
            <div class="card card-table table-responsive mb-0">
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Budget Code</th>
                            <th>Payee</th>
                            <th>Type</th>
                            <th>Discription</th>
                            <th>Amount</th>
                            <th>Deputy</th>
                            <th>Administration</th>
                            <th>Recipient</th>
                            <th>Payer</th>
                            <th>Date</th>
                            <th>Reference</th>
                            <th>Deleted at</th>
                            <th>Action(s)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>22</strong></td>
                            <td>S023</td>
                            <td>Rahimullah Rahimi</td>
                            <td>Miscellaneous</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                            <td>15000 &#1547;</td>
                            <td>
                                <span class="badge bg-primary">Professional</span>
                                <span class="badge bg-primary">Supportive</span>
                            </td>
                            <td>
                                <span class="badge bg-primary">IC6</span>
                                <span class="badge bg-primary">IC3</span>
                                <span class="badge bg-primary">Logistic</span>
                            </td>
                            <td>Obaidullah Karimi</td>
                            <td>Faridullah</td>
                            <td>1402/02/23</td>
                            <td>Eng. Raza Khan</td>
                            <td><span class="badge bg-danger">1402/09/23</span></td>
                            <td>
                                <div class="list-icons">
                                    <a href="#" class="list-icons-item text-primary"><i
                                            class="ph-arrow-counter-clockwise" title="Restore"></i></a>
                                    <a href="#" class="list-icons-item text-danger"><i class="ph-trash"
                                            title="Delete permanentally"></i></a>
                                </div>
                            </td>
                        </tr>
                        <tr>

                            <td><strong>24</strong></td>
                            <td>S026</td>
                            <td>Noorullah Rahimi</td>
                            <td>Other</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                            <td>30000 &#1547;</td>
                            <td>
                                <span class="badge bg-primary">Professional</span>
                            </td>
                            <td>
                                <span class="badge bg-primary">IC6</span>
                                <span class="badge bg-primary">IC3</span>
                                <span class="badge bg-primary">IC4</span>
                            </td>
                            <td>Ahmad Nasir</td>
                            <td>Faridullah</td>
                            <td>1402/02/30</td>
                            <td>Eng. Raza Khan</td>
                            <td><span class="badge bg-danger">1402/09/23</span></td>
                            <td>
                                <div class="list-icons">
                                    <a href="#" class="list-icons-item text-primary"><i
                                            class="ph-arrow-counter-clockwise" title="Restore"></i></a>
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
@endsection