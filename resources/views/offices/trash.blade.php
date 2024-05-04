@extends('layouts.app')
@section('content')
@section('title')
<title>Trashed Offices</title>
@endsection

<div class="content">
    <div class="card" style="border: 2px solid red;">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h2 class="card-title">Trashed Directorate Duputies</h2>
                </div>
                {{-- <div><a href="#" data-bs-toggle="modal" data-bs-target="#directorate_deputy_form"
                        class="btn btn-light">Add new directorate deputy</a></div> --}}
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
                            <th>Deleted at</th>
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
                            <td><span class="badge bg-danger">{{$deputy->deleted_at}}</span></td>
                            <td>
                                <div class="list-icons">
                                    <a href="{{route('deputies.restore', ['deputy' => $deputy->id])}}"
                                        class="list-icons-item text-primary"><i class="ph-arrow-counter-clockwise"
                                            title="Restore"></i></a>

                                    <form action="{{route('deputies.force-delete', ['deputy' => $deputy->id])}}"
                                        method="POST" id="forceDeleteDeputyForm{{ $deputy->id }}">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                    <a href="#" onclick="forceDeleteDeputy({{ $deputy->id }})"
                                        class="list-icons-item text-danger"><i class="ph-trash"
                                            title="Delete permanentally"></i></a>
                                </div>

                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center">No available data.</td>
                        </tr>
                        @endforelse
                        <script>
                            function forceDeleteDeputy(deputyId) {
                                if (confirm('Are you sure you want to delete this administration permanentally?')) {
                                    document.getElementById('forceDeleteDeputyForm' + deputyId).submit();
                                }
                            }
                        </script>
                    </tbody>

                </table>

            </div>
        </div>

    </div>
    <div class="card" style="border: 2px solid red;">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h2 class="card-title">Trashed Administrations</h2>
                </div>
                {{-- <div><a class="btn btn-light" data-bs-toggle="modal" data-bs-target="#administration_form"> Add new
                        administration</a></div> --}}
            </div>


        </div>
        <div class="card-body">
            <div class="card card-table table-responsive mb-0">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            {{-- <th>Deputy</th> --}}
                            <th>Description</th>
                            <th>Deleted at</th>
                            <th>Action(s)</th>
                        </tr>

                    </thead>
                    <tbody>
                        @forelse ($administrations as $administration)
                        <tr>
                            <td><strong>{{$administration->id}}</strong></td>
                            <td>{{$administration->name}}</td>
                            {{-- <td>
                                @forelse ($administration->deputy as $deputy)
                                <span class="badge bg-primary">{{$deputy->name}}</span>
                                @empty
                                <span class="badge bg-primary">Nothing</span>
                                @endforelse
                            </td> --}}

                            <td>{{$administration->description}}</td>
                            <td><span class="badge bg-danger">{{$administration->deleted_at}}</span></td>
                            <td>
                                <div class="list-icons">
                                    <a href="{{route('administrations.restore', ['administration' => $administration->id])}}"
                                        class="list-icons-item text-primary"><i class="ph-arrow-counter-clockwise"
                                            title="Restore"></i></a>

                                    <form
                                        action="{{route('administrations.force-delete', ['administration' => $administration->id])}}"
                                        method="POST" id="forceDeleteAdministrationForm{{ $administration->id }}">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                    <a href="#" onclick="forceDeleteAdministration({{ $administration->id }})"
                                        class="list-icons-item text-danger"><i class="ph-trash"
                                            title="Delete permanentally"></i></a>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center">No data available.</td>
                        </tr>
                        @endforelse
                        <script>
                            function forceDeleteAdministration(administrationId) {
                                if (confirm('Are you sure you want to delete this administration permanentally?')) {
                                    document.getElementById('forceDeleteAdministrationForm' + administrationId).submit();
                                }
                            }
                        </script>
                    </tbody>

                </table>

            </div>
        </div>
    </div>
</div>


@endsection