@extends('layouts.app')
@section('content')
@section('title')
<title>Offices</title>
@endsection
@push('js')
<script src="{{asset('js\select2.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js\form_select2.js')}}" type="text/javascript"></script>
@endpush

<div class="content">
    <div class="row">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center">Directorate of Strategic Researches <a href="#"><i class="icon-pencil7 icon-1x"
                            title="Edit" data-bs-toggle="modal" data-bs-target="#directorate_form"></i></a></h1>
            </div>
        </div>
        <!-- Directorate form -->
        <div id="directorate_form" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Directorate</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <form action="#" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-2">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label class="form-label">Name<span class="text-danger"> *</span></label>
                                        <input type="text" placeholder="Eugene"
                                            value="Directorate of Strategic Researches" class="form-control">
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /directorate form -->

        <div class="row">
            <div class="col-sm-6 col-xl-4">
                <div class="card card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-fill">
                            <h4 class="mb-0">{{App\Models\Deputy::count();}}</h4>
                            total deputies
                        </div>

                        <i class="ph-tree-structure ph-2x opacity-75 ms-3 text-warning"></i>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-4">
                <div class="card card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-fill">
                            <h4 class="mb-0">{{App\Models\Administration::count();}}</h4>
                            total administrations
                        </div>

                        <i class="ph-buildings ph-2x opacity-75 ms-3 text-primary"></i>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-4">
                <div class="card card-body">
                    <div class="d-flex align-items-center">

                        <div class="flex-fill">
                            <h4 class="mb-0">{{App\Models\Person::count();}}</h4>
                            total staff
                        </div>
                        <i class="ph-users-three ph-2x opacity-75 ms-3 text-success"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h2 class="card-title">All Directorate Duputies</h2>
                </div>
                <div><a href="{{route('deputies.create')}}" class="btn btn-light">Add new directorate deputy</a></div>
            </div>


        </div>
        <div class="card-body">
            <div class="card card-table table-responsive mb-0">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Administrations</th>
                            <th>Description</th>
                            <th>Action(s)</th>
                        </tr>

                    </thead>
                    <tbody>
                        @forelse ($deputies as $deputy)
                        <tr>
                            <td><strong>{{$deputy->id}}</strong></td>
                            <td>{{$deputy->name}}</td>
                            <td>
                                @forelse ($deputy->administrations as $administration)
                                <span class="badge bg-primary">{{$administration->name}}</span>
                                @empty
                                No administrations.
                                @endforelse
                            </td>
                            <td>{{$deputy->description}}</td>
                            <td>
                                <div class="list-icons">
                                    <a href="{{route('deputies.edit', ['deputy' => $deputy->id])}}"
                                        class="list-icons-item text-primary"><i class="ph-note-pencil"
                                            title="Edit"></i></a>

                                    <form action="{{route('deputies.destroy', ['deputy' => $deputy->id])}}"
                                        method="POST" id="deleteDeputyForm{{ $deputy->id }}">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                    <a href="#" onclick="deleteDeputy({{ $deputy->id }})"
                                        class="list-icons-item text-danger"><i class="ph-trash"
                                            title="Move to trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center"></td>
                        </tr>
                        @endforelse
                        <script>
                            function deleteDeputy(deputyId) {
                                if (confirm('Are you sure you want to delete this directorate deputy?')) {
                                    document.getElementById('deleteDeputyForm' + deputyId).submit();
                                }
                            }
                        </script>
                    </tbody>

                </table>

            </div>
        </div>

    </div>
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h2 class="card-title">All Administrations</h2>
                </div>
                <div><a href="{{route('administrations.create')}}" class="btn btn-light"> Add new administration</a>
                </div>
            </div>


        </div>
        <div class="card-body">
            <div class="card card-table table-responsive mb-0">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Deputy</th>
                            <th>Description</th>
                            <th>Action(s)</th>
                        </tr>

                    </thead>
                    <tbody>
                        @forelse ($administrations as $administration)

                        <tr>
                            <td><strong>{{$administration->id}}</strong></td>
                            <td>{{$administration->name}}</td>
                            <td>
                                <span class="badge bg-primary">{{$administration->deputy['name'] ?? ""}}</span>
                            </td>
                            <td>{{$administration->description}}</td>
                            <td>
                                <div class="list-icons">
                                    <a href="{{route('administrations.edit', ['administration' => $administration->id])}}"
                                        class="list-icons-item text-primary"><i class="ph-note-pencil"
                                            title="Edit"></i></a>

                                    <form
                                        action="{{route('administrations.destroy', ['administration' => $administration->id])}}"
                                        method="POST" id="deleteAdministrationForm{{ $administration->id }}">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                    <a href="#" onclick="deleteAdministration({{ $administration->id }})"
                                        class="list-icons-item text-danger"><i class="ph-trash"
                                            title="Move to trash"></i>
                                    </a>
                                </div>

                            </td>
                        </tr>
                        @empty

                        @endforelse
                        <script>
                            function deleteAdministration(administrationId) {
                                if (confirm('Are you sure you want to delete this administration?')) {
                                    document.getElementById('deleteAdministrationForm' + administrationId).submit();
                                }
                            }
                        </script>
                    </tbody>

                </table>

            </div>
        </div>
        <!-- Administration form -->
        <div id="administration_form" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Administration</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <form action="#" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-0">
                                <div class="row mb-1">
                                    <div class="col-sm-6">
                                        <label class="form-label">Name<span class="text-danger"> *</span></label>
                                        <input type="text" placeholder="Supportive" class="form-control">
                                    </div>

                                    <div class="col-sm-6">
                                        <label class="form-label">Select directorate deputy<span class="text-danger">
                                                *</span></label>
                                        <select data-placeholder="Select a directorate deputy..."
                                            class="form-control select">
                                            <option></option>
                                            <optgroup label="Mountain Time Zone">
                                                <option value="AZ">Arizona</option>
                                                <option value="CO">Colorado</option>
                                                <option value="ID">Idaho</option>
                                                <option value="WY">Wyoming</option>
                                            </optgroup>
                                            <optgroup label="Central Time Zone">
                                                <option value="AL">Alabama</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-sm-12">
                                        <label class="form-label">Description</label>
                                        <textarea type="text" placeholder="Administration description goes here..."
                                            class="form-control" rows="2"></textarea>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="reset" class="btn btn-danger">Reset</button>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /administration form -->
    </div>
    {{-- <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h2 class="card-title">All Directions</h2>
                </div>
                <div><button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#direction_form"> Add new
                        direction</button></div>
            </div>
        </div>
        <div class="card-body">
            <div class="card card-table table-responsive mb-0">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Director</th>
                            <th>Description</th>
                            <th>Action(s)</th>
                        </tr>

                    </thead>
                    <tbody>
                        <tr>
                            <td>AI</td>
                            <td>Rahimullah</td>
                            <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure laudantium nesciunt at
                                cupiditate non quam ducimus architecto, veritatis voluptatibus ea, repellat voluptas
                                quidem! Molestias reiciendis vitae ullam dolorem distinctio vel.</td>
                            <td>
                                <div class="list-icons">
                                    <a href="#" class="list-icons-item text-primary"><i class="ph-note-pencil"
                                            title="Edit"></i></a>
                                    <a href="#" class="list-icons-item text-danger"><i class="ph-trash"
                                            title="Move to trash"></i></a>
                            </td>
                        </tr>
                        <tr>

                            <td>Hacking</td>
                            <td>Rahimullah</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente sed aspernatur minus
                                officia pariatur similique delectus consequuntur, non impedit ea aliquam quam eum iure,
                                placeat maiores. Odit, officia. Perspiciatis, est.</td>
                            <td>
                                <div class="list-icons">
                                    <a href="#" class="list-icons-item text-primary"><i class="ph-note-pencil"
                                            title="Manage user"></i></a>
                                    <a href="#" class="list-icons-item text-danger"><i class="ph-trash"
                                            title="Move to trash"></i></a>
                            </td>
                        </tr>
                    </tbody>

                </table>

            </div>
        </div>
        <!-- Direction form -->
        <div id="direction_form" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Direction</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <form action="#" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-0">
                                <div class="row mb-1">
                                    <div class="col-sm-6">
                                        <label class="form-label">Name<span class="text-danger"> *</span></label>
                                        <input type="text" placeholder="Supportive" class="form-control">
                                    </div>

                                    <div class="col-sm-6">
                                        <label class="form-label">Select administration<span class="text-danger">
                                                *</span></label>
                                        <select data-placeholder="Select administration..." class="form-control select">
                                            <option></option>
                                            <optgroup label="Mountain Time Zone">
                                                <option value="AZ">Arizona</option>
                                                <option value="CO">Colorado</option>
                                                <option value="ID">Idaho</option>
                                                <option value="WY">Wyoming</option>
                                            </optgroup>
                                            <optgroup label="Central Time Zone">
                                                <option value="AL">Alabama</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col-sm-5">
                                        <label class="form-label">Director</label>
                                        <select data-placeholder="Select director..." class="form-control select">
                                            <option></option>
                                            <optgroup label="Mountain Time Zone">
                                                <option value="AZ">Arizona</option>
                                                <option value="CO">Colorado</option>
                                                <option value="ID">Idaho</option>
                                                <option value="WY">Wyoming</option>
                                            </optgroup>
                                            <optgroup label="Central Time Zone">
                                                <option value="AL">Alabama</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                            </optgroup>
                                        </select>

                                    </div>
                                    <div class="col-sm-7">
                                        <label class="form-label">Description</label>
                                        <textarea type="text" placeholder="Direction description goes here..."
                                            class="form-control" rows="1"></textarea>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="reset" class="btn btn-danger">Reset</button>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /direction form -->
    </div> --}}
</div>


@endsection