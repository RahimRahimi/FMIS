@extends('layouts.app')
@section('content')
@section('title')
<title>Budgets</title>
@endsection

<div class="content">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h2 class="card-title">All Budgets</h2>
                </div>
                <div><a href="{{route('budgets.create')}}" class="btn btn-light"> Add new budget</a></div>
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
                            <th>Action(s)</th>
                            <th>View details</th>
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
                                corrupti similique explicabo culpa totam!.</td>
                            <td>
                                <div class="list-icons">
                                    <a href="#" class="list-icons-item text-primary"><i class="ph-note-pencil"
                                            title="Edit"></i></a>
                                    <a href="#" class="list-icons-item text-danger"><i class="ph-trash"
                                            title="Move to trash"></i></a>
                            </td>
                            <td class="text-center"><span><a href="{{route('budgets.summary',2)}}"><i
                                            class="ph-arrow-circle-right"></i></a></span>
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
                                corrupti similique explicabo culpa totam!.</td>
                            <td>
                                <div class="list-icons">
                                    <a href="#" class="list-icons-item text-primary"><i class="ph-note-pencil"
                                            title="Edit"></i></a>
                                    <a href="#" class="list-icons-item text-danger"><i class="ph-trash"
                                            title="Move to trash"></i></a>
                            </td>
                            <td class="text-center"><span><a href="{{route('budgets.summary',3)}}"><i
                                            class="ph-arrow-circle-right"></i></a></span>
                            </td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>
@endsection