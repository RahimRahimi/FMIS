@extends('layouts.app')
@section('content')
@section('title')
<title>Trashed Budgets</title>
@endsection

<div class="content">
    <div class="card" style="border: 2px solid red;">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h2 class="card-title">Trashed Budgets</h2>
                </div>
                {{-- <div><a href="{{route('budgets.create')}}" class="btn btn-light"> Add new budget</a></div> --}}
            </div>
        </div>
        <div class="card-body">
            <div class="card card-table table-responsive mb-0">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Code</th>
                            <th>Type</th>
                            <th>Amount</th>
                            <th>Remaining amount</th>
                            <th>Start date</th>
                            <th>End date</th>
                            <th>Date</th>
                            <th>Discription</th>
                            <th>Deleted at</th>
                            <th>Action(s)</th>
                        </tr>

                    </thead>
                    <tbody>
                        <tr>

                            <td><strong>S022</strong></td>
                            <td>Salaries</td>
                            <td>10000 &#1547;</td>
                            <td>5000 &#1547;</td>
                            <td>1402/02/22 12:21:12</td>
                            <td>1402/02/22 12:21:12</td>
                            <td>1402/02/22 12:21:12</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe eveniet libero, nam
                                corrupti similique explicabo culpa totam!.
                            </td>
                            <td><span class="badge bg-danger">1402/03/04</span></td>
                            <td>
                                <div class="list-icons">
                                    <a href="#" class="list-icons-item text-primary"><i class="ph-arrow-counter-clockwise"
                                            title="Restore"></i></a>
                                    <a href="#" class="list-icons-item text-danger"><i class="ph-trash"
                                            title="Delete permanentally"></i></a>
                            </td>

                        </tr>
                        <tr>

                            <td><strong>S023</strong></td>
                            <td>Operative</td>
                            <td>20000 &#1547;</td>
                            <td>5000 &#1547;</td>
                            <td>1402/02/22 12:21:12</td>
                            <td>1402/02/22 12:21:12</td>
                            <td>1402/02/22 12:21:12</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe eveniet libero, nam
                                corrupti similique explicabo culpa totam!.
                            </td>
                            <td><span class="badge bg-danger">1402/03/04</span></td>
                            <td>
                                <div class="list-icons">
                                    <a href="#" class="list-icons-item text-primary"><i class="ph-arrow-counter-clockwise"
                                            title="Edit"></i></a>
                                    <a href="#" class="list-icons-item text-danger"><i class="ph-trash"
                                            title="Move to trash"></i></a>
                            </td>

                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>
@endsection