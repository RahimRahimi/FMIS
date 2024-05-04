@extends('layouts.app')
@section('content')
@section('title')
<title>Roles</title>
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
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h2 class="card-title">Roles</h2>
                </div>
                <div><a href="{{route('roles.create')}}" class="btn btn-light"> Add New Role</a></div>
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
                            <td>
                                <div class="list-icons">
                                    <a href="{{route('roles.edit', ['role' => $role->id])}}"
                                        class="list-icons-item text-primary"><i class="ph-note-pencil"
                                            title="Edit Role"></i></a>

                                    <form action="{{route('roles.destroy', ['role' => $role->id])}}" method="POST"
                                        id="deleteRoleForm{{ $role->id }}">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                    <a href="#" onclick="deleteRole({{ $role->id }})"
                                        class="list-icons-item text-danger"><i class="ph-trash"
                                            title="Move to trash"></i></a>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4">No data available.</td>
                        </tr>
                        @endforelse

                        <script>
                            function deleteRole(roleId) {
                                if (confirm('Are you sure you want to delete this user?')) {
                                    document.getElementById('deleteRoleForm' + roleId).submit();
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
                    <h2 class="card-title">All permissions</h2>
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
                            <th>Description</th>
                        </tr>

                    </thead>
                    <tbody>
                        @forelse ($permissions as $permission)
                        <tr>
                            <td><strong>{{$permission->id}}</strong></td>
                            <td>{{$permission->name}}</td>
                            <td>{{$permission->description}}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4">No data available.</td>
                        </tr>
                        @endforelse
                    </tbody>

                </table>

            </div>
        </div>

    </div>
</div>
@endsection