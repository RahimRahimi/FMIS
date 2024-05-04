@extends('layouts.app')
@section('content')
@section('title')
<title>Users</title>
@endsection
<div class="content">
    @if(session()->has('success'))<div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <b> Success! </b>
        {{session('success')}}
    </div> @endif
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h2 class="card-title">Users</h2>
                </div>
                <div><a href="{{route('users.create')}}" class="btn btn-light"> Add new user</a></div>
            </div>
        </div>
        <div class="card-body">
            <div class="card card-table table-responsive mb-0">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role(s)</th>
                            <th>Last login at</th>
                            <th>Joined</th>
                            <th>Action</th>
                        </tr>

                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                        <tr>
                            <td><strong>{{$user->id}}</strong></td>
                            <td>
                                <img src="{{asset('images/UserImages').'/'.$user->image}}" class="img-fluid"
                                    alt="Image not found!" width="35" height="35">

                            </td>
                            <td>{{$user->name}}i</td>
                            <td>{{$user->email}}</td>
                            <td>
                                @foreach ($user->roles as $role)
                                <span class='badge bg-primary'>{{$role->name}}</span>
                                @endforeach
                            </td>
                            <td>{{$user->last_login_at}}</td>
                            <td>{{$user->created_at}}</td>
                            <td>
                                <div class="list-icons">
                                    <a href="{{route('users.edit', ['user' => $user->id])}}"
                                        class="list-icons-item text-primary"><i class="ph-gear" title="Manage user"></i>
                                    </a>

                                    <form action="{{route('users.destroy', ['user' => $user->id])}}" method="POST"
                                        id="deleteForm{{ $user->id }}">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                    <a href="#" onclick="deleteUser({{ $user->id }})"
                                        class="list-icons-item text-danger"><i class="ph-trash"
                                            title="Move to trash"></i>
                                    </a>

                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8">No data available.</td>
                        </tr>
                        @endforelse
                        <script>
                            function deleteUser(userId) {
                                if (confirm('Are you sure you want to delete this user?')) {
                                    document.getElementById('deleteForm' + userId).submit();
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