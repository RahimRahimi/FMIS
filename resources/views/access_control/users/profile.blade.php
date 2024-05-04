@extends('layouts.app')
@section('content')
@section('title')
<title>Users</title>
@endsection
<div class="content">
    <div class="d-lg-flex align-items-lg-start">

        <!-- Left sidebar component -->
        <div class="sidebar sidebar-component sidebar-expand-lg bg-transparent shadow-none me-lg-3">

            <!-- Sidebar content -->
            <div class="sidebar-content">

                <!-- Navigation -->
                <div class="card">
                    <div class="sidebar-section-body text-center">
                        <div class="card-img-actions d-inline-block mb-3">
                            <img class="img-fluid rounded-circle" src="../../../assets/images/demo/users/face11.jpg"
                                width="150" height="150" alt="">
                            <div class="card-img-actions-overlay card-img rounded-circle">
                                <a href="#" class="btn btn-outline-white btn-icon rounded-pill">
                                    <i class="ph-pencil"></i>
                                </a>
                            </div>
                        </div>

                        <h6 class="mb-0">{{Auth::user()->name}}</h6>
                        <span class="text-muted">Administrator</span>
                    </div>

                    <ul class="nav nav-sidebar" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="#account_settings" class="nav-link" data-bs-toggle="tab" aria-selected="true"
                                role="tab">
                                <i class="ph-user me-2"></i>
                                Account Settings
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#role_management" class="nav-link" data-bs-toggle="tab" aria-selected="true"
                                role="tab">
                                <i class="ph-user me-2"></i>
                                Manage Roles
                            </a>


                        </li>

                        <li class="nav-item-divider"></li>
                        <li class="nav-item" role="presentation">
                            <a href="{{ route('logout') }}" class="nav-link" data-bs-toggle="tab" aria-selected="false"
                                tabindex="-1" role="tab" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="ph-sign-out me-2"></i>
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
                <!-- /navigation -->

            </div>
            <!-- /sidebar content -->

        </div>
        <!-- /left sidebar component -->


        <!-- Right content -->
        <div class="tab-content flex-fill">
            <div class="tab-pane fade active show" id="account_settings">

                <!-- Account settings -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Account settings</h5>
                    </div>

                    <div class="card-body">
                        <form action='{{route("users.update", [ "user"=> Auth::user()->id])}}' method="POST">
                            @method("PUT")
                            @csrf
                            <div class="row">

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Username</label>
                                        <input type="text" value="{{Auth::user()->name}}" name="name"
                                            class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" value="{{Auth::user()->email}}" name="email"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label class="form-label">Current password</label>
                                        <input type="password" placeholder="Enter current password"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label class="form-label">New password</label>
                                        <input type="password" placeholder="Enter new password" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label class="form-label">Repeat password</label>
                                        <input type="password" placeholder="Repeat new password" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="text-end">
                                <button type="submit" class="btn btn-light">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /account settings -->

            </div>

            <div class="tab-pane fade" id="role_management">

                <!-- Role Management -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Roles Management</h5>
                    </div>

                    <div class="card-body">
                        <form action='{{route("users.update", [ "user"=> Auth::user()->id])}}' method="POST">
                            @method("PUT")
                            @csrf
                            <div class="row">

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Username</label>
                                        <input type="text" value="{{Auth::user()->name}}" name="name"
                                            class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" value="{{Auth::user()->email}}" name="email"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label class="form-label">Current password</label>
                                        <input type="password" placeholder="Enter current password"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label class="form-label">New password</label>
                                        <input type="password" placeholder="Enter new password" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label class="form-label">Repeat password</label>
                                        <input type="password" placeholder="Repeat new password" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-light">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /Role Management -->

            </div>
        </div>
        <!-- /right content -->

    </div>
</div>
@endsection