@extends('layouts.app')
@section('content')
@section('title')
<title>Trashed Roles</title>
@endsection
<div class="content">
    @if(session()->has('success'))<div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <b> Success! </b>{{session('success')}} @endif
        <div class="card" style="border: 2px solid red;">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h2 class="card-title">Trashed Roles</h2>
                    </div>
                </div>

            </div>
            <div class="card-body">
                <div class="card card-table table-responsive mb-0">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Permission(s)</th>
                                <th>Description</th>
                                <th>Deleted at</th>
                                <th>Action</th>
                            </tr>

                        </thead>
                        <tbody>
                            @forelse ($roles as $role)
                            <tr>
                                <td><strong>{{$role->id}}</strong></td>
                                <td>{{$role->name}}</td>
                                <td>
                                    @foreach ($role->permissions as $permission)
                                    <span class='badge bg-primary'>{{$permission->name}}</span>
                                    @endforeach

                                </td>
                                <td>{{$role->description}}</td>
                                <td><span class="badge bg-danger">{{$role->deleted_at}}</span></td>
                                <td>
                                    <div class="list-icons">
                                        <a href="{{route('roles.restore', ['role' => $role->id])}}"
                                            class="list-icons-item text-primary"><i class="ph-arrow-counter-clockwise"
                                                title="Restore"></i></a>

                                        <form action="{{route('roles.force-delete', ['role' => $role->id])}}"
                                            method="POST" id="forceDeleteRoleForm{{ $role->id }}">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                        <a href="#" onclick="forceDeleteRole({{ $role->id }})"
                                            class="list-icons-item text-danger"><i class="ph-trash"
                                                title="Delete permanentally"></i></a>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="text-center">No data available.</td>
                            </tr>
                            @endforelse

                        </tbody>
                        <script>
                            function forceDeleteRole(roleId) {
                                if (confirm('Are you sure you want to delete this role permanentally?')) {
                                    document.getElementById('forceDeleteRoleForm' + roleId).submit();
                                }
                            }
                        </script>

                    </table>

                </div>
            </div>

        </div>
    </div>
    @endsection