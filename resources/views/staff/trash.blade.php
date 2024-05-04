@extends('layouts.app')
@section('content')
@section('title')
<title>Trashed Staff</title>
@endsection

{{-- <script src="{{asset('js/plugins/forms/selects/select2.min.js')}}"></script>
<script src="{{asset('js/demo_pages/form_layouts.js')}}"></script> --}}
{{-- <style>
    /*****************************************************************/
    /* Custom CSS for online status badge */
    .profile-container {
        position: relative;
        display: inline-block;
    }

    .online-badge {
        position: absolute;
        bottom: 0;
        right: 0;
        width: 14px;
        height: 14px;
        background-color: #28a745;
        border-radius: 50%;
        border: 2px solid #fff;
    }
</style> --}}

<div class="content">
    <div class="card" style="border: 2px solid red;">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h2 class="card-title">Trashed Staff</h2>
                </div>
                {{-- <div><button class="btn btn-light"> Add new employee</button></div> --}}
            </div>


        </div>
        <div class="card-body">
            <div class="card card-table table-responsive mb-0">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Last name/ Nick name</th>
                            <th>Father name</th>
                            <th>Mobile no.</th>
                            <th>Province</th>
                            <th>District</th>
                            <th>Administration</th>
                            <th>Direction</th>
                            <th>Deleted at</th>
                            <th>Action(s)</th>
                        </tr>

                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>134</strong></td>
                            <td>Rahimullah</td>
                            <td>Rahimi</td>
                            <td>Qamar Khan</td>
                            <td>+93799887766</td>
                            <td>Paktia</td>
                            <td>Zurmat</td>
                            <td>Software</td>
                            <td>System and Database Designing and Development</td>
                            <td><span class="badge bg-danger">1402-02-12 12:00</span></td>
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
                            <td><strong>353</strong></td>
                            <td>Obaidullah</td>
                            <td>Karrimi</td>
                            <td>Abdul Salam</td>

                            <td>+93712345678</td>
                            <td>Wardak</td>
                            <td>Chak</td>
                            <td>Software</td>
                            <td>System and Database Designing and Development</td>
                            <td><span class="badge bg-danger">1402-02-22 12:00</span></td>
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