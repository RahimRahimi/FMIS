<!-- Main sidebar -->
{{-- <div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg">

    <!-- Sidebar header -->
    <div class="sidebar-section bg-black bg-opacity-10 border-bottom border-bottom-white border-opacity-10">
        <div class="sidebar-logo d-flex justify-content-center align-items-center">
            <a href="index.html" class="d-inline-flex align-items-center py-2">
                <img src="{{asset('images/logo_icon.svg')}}" class="sidebar-logo-icon" alt="">
                <img src="{{asset('images/logo_text_light.svg')}}" class="sidebar-resize-hide ms-3" height="14" alt="">
            </a>

            <div class="sidebar-resize-hide ms-auto">
                <button type="button"
                    class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
                    <i class="ph-arrows-left-right"></i>
                </button>

                <button type="button"
                    class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-mobile-main-toggle d-lg-none">
                    <i class="ph-x"></i>
                </button>
            </div>
        </div>
    </div>
    <!-- /sidebar header -->

    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- Customers -->
        <div class="sidebar-section sidebar-resize-hide dropdown mx-2">
            <a href="#" class="btn btn-link text-body text-start lh-1 dropdown-toggle p-2 my-1 w-100"
                data-bs-toggle="dropdown" data-color-theme="dark">
                <div class="hstack gap-2 flex-grow-1 my-1">
                    <img src="{{ asset('images/rahimullah.jpeg') }}" class="w-32px h-32px rounded-pill" alt="">
                    <div class="me-auto">
                        <div class="fs-sm text-white opacity-75 mb-1">Administrator</div>
                        <div class="fw-semibold">Rahimullah Rahimi</div>
                    </div>
                </div>
            </a>

            <div class="dropdown-menu w-100">
                <a href="#" class="dropdown-item hstack gap-2 py-2">
                    <img src="../../../assets/images/brands/tesla.svg" class="w-32px h-32px" alt="">
                    <div>
                        <div class="fw-semibold">Tesla Motors Inc</div>
                        <div class="fs-sm text-muted">42 users</div>
                    </div>
                </a>
                <a href="#" class="dropdown-item hstack gap-2 py-2">
                    <img src="../../../assets/images/brands/debijenkorf.svg" class="w-32px h-32px" alt="">
                    <div>
                        <div class="fw-semibold">De Bijenkorf</div>
                        <div class="fs-sm text-muted">49 users</div>
                    </div>
                </a>
                <a href="#" class="dropdown-item hstack gap-2 py-2">
                    <img src="../../../assets/images/brands/klm.svg" class="w-32px h-32px" alt="">
                    <div>
                        <div class="fw-semibold">Royal Dutch Airlines</div>
                        <div class="fs-sm text-muted">18 users</div>
                    </div>
                </a>
                <a href="#" class="dropdown-item hstack gap-2 active py-2">
                    <img src="../../../assets/images/brands/shell.svg" class="w-32px h-32px" alt="">
                    <div>
                        <div class="fw-semibold">Royal Dutch Shell</div>
                        <div class="fs-sm text-muted">54 users</div>
                    </div>
                </a>
                <a href="#" class="dropdown-item hstack gap-2 py-2">
                    <img src="../../../assets/images/brands/bp.svg" class="w-32px h-32px" alt="">
                    <div>
                        <div class="fw-semibold">BP plc</div>
                        <div class="fs-sm text-muted">23 users</div>
                    </div>
                </a>
            </div>
        </div>
        <!-- /customers -->


        <!-- Main navigation -->
        <div class="sidebar-section">
            <ul class="nav nav-sidebar" data-nav-type="accordion">

                <!-- Main -->
                <li class="nav-item-header">
                    <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">User Management</div>
                    <i class="ph-dots-three sidebar-resize-show"></i>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="ph-house"></i>
                        <span>
                            Users
                            <span class="d-block fw-normal opacity-50">No pending orders</span>
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="ph-house"></i>
                        <span>
                            Roles
                            <span class="d-block fw-normal opacity-50">No pending orders</span>
                        </span>
                    </a>
                </li>
                <li class="nav-item-header">
                    <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Staff</div>
                    <i class="ph-dots-three sidebar-resize-show"></i>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="ph-layout"></i><span>Layouts</span></a>
                    <ul class="nav-group-sub collapse">
                        <li class="nav-item"><a href="../../layout_1/full/index.html" class="nav-link">Default
                                layout</a></li>
                    </ul>
                </li>



            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->

</div> --}}
<!-- /main sidebar -->


<!-- Main sidebar -->
<div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg">

    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- User -->
        <div class="sidebar-section  sidebar-resize-hide d-flex justify-content-center mx-2">
            <a href="#" class="btn btn-link text-body text-start lh-1 dropdown-toggle p-2 my-1 w-100"
                data-bs-toggle="dropdown" data-color-theme="dark">
                <div class="hstack gap-2 flex-grow-1 my-1">
                    <img src="{{asset('images/rahimullah.jpeg')}}" class="w-32px h-32px rounded-pill" alt="">
                    <div class="me-auto">
                        <div class="fs-sm text-white opacity-75 mb-1">Administrator</div>
                        <div class="fw-semibold">{{Auth::user()->name}}</div>
                    </div>
                </div>
            </a>

            {{-- <div class="dropdown-menu w-100">
                <a href="#" class="dropdown-item hstack gap-2 py-2">
                    <img src="../../../assets/images/brands/tesla.svg" class="w-32px h-32px" alt="">
                    <div>
                        <div class="fw-semibold">Tesla Motors Inc</div>
                        <div class="fs-sm text-muted">42 users</div>
                    </div>
                </a>
                <a href="#" class="dropdown-item hstack gap-2 py-2">
                    <img src="../../../assets/images/brands/debijenkorf.svg" class="w-32px h-32px" alt="">
                    <div>
                        <div class="fw-semibold">De Bijenkorf</div>
                        <div class="fs-sm text-muted">49 users</div>
                    </div>
                </a>
                <a href="#" class="dropdown-item hstack gap-2 py-2">
                    <img src="../../../assets/images/brands/klm.svg" class="w-32px h-32px" alt="">
                    <div>
                        <div class="fw-semibold">Royal Dutch Airlines</div>
                        <div class="fs-sm text-muted">18 users</div>
                    </div>
                </a>
                <a href="#" class="dropdown-item hstack gap-2 active py-2">
                    <img src="../../../assets/images/brands/shell.svg" class="w-32px h-32px" alt="">
                    <div>
                        <div class="fw-semibold">Royal Dutch Shell</div>
                        <div class="fs-sm text-muted">54 users</div>
                    </div>
                </a>
                <a href="#" class="dropdown-item hstack gap-2 py-2">
                    <img src="../../../assets/images/brands/bp.svg" class="w-32px h-32px" alt="">
                    <div>
                        <div class="fw-semibold">BP plc</div>
                        <div class="fs-sm text-muted">23 users</div>
                    </div>
                </a>
            </div> --}}

            <div class="my-3">
                <button type="button"
                    class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
                    <i class="ph-arrows-left-right"></i>
                </button>

                <button type="button"
                    class="btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-mobile-main-toggle d-lg-none">
                    <i class="ph-x"></i>
                </button>
            </div>
        </div>
        <!-- /user -->

        <!-- Main navigation -->
        <div class="sidebar-section">
            <ul class="nav nav-sidebar" data-nav-type="accordion">

                <!-- Main -->
                <li class="nav-item-header pt-2 pb-0">
                    <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Main</div>
                    <i class="ph-dots-three sidebar-resize-show"></i>
                </li>
                <li class="nav-item">
                    <a href="{{route('dashboard')}}" class="nav-link active">
                        <i class="ph-house"></i>
                        <span>
                            Dashboard
                            {{-- <span class="d-block fw-normal opacity-50">No pending orders</span> --}}
                        </span>
                    </a>
                </li>
                <!-- /main -->

                <!-- User Management -->
                <li class="nav-item-header pt-2 pb-0">
                    <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">User ans Roles Management
                    </div>
                    <i class="ph-dots-three sidebar-resize-show"></i>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link">
                        <i class="ph-users"></i>
                        <span>Users</span>
                    </a>
                    <ul class="nav-group-sub collapse">
                        <li class="nav-item"><a href="{{route('users.index')}}" class="nav-link active"><i
                                    class="ph-users"></i><span>All
                                    Users</span></a>
                        </li>
                        <li class="nav-item"><a href="{{route('users.create')}}" class="nav-link"><i
                                    class="ph-plus"></i><span>Add New User
                                </span></a></li>
                        <li class="nav-item"><a href="{{route('users.trash')}}" class="nav-link"><i
                                    class="ph-trash"></i><span>Trashed
                                    Users</span></a>
                            {{-- <span class="badge align-self-center ms-auto">Coming soon</span> --}}
                        </li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link">
                        <i class="ph-key"></i>
                        <span>Roles</span>
                    </a>
                    <ul class="nav-group-sub collapse">
                        <li class="nav-item"><a href="{{route('roles.index')}}" class="nav-link active">
                                <i class="ph-list-bullets"></i><span>All
                                    Roles</span></a></li>
                        <li class="nav-item"><a href="{{route('roles.create')}}" class="nav-link">
                                <i class="ph-plus"></i><span>Add New Role</span></a></li>
                        <li class="nav-item"><a href="{{route('roles.trash')}}" class="nav-link">
                                <i class="ph-trash"></i><span>Trashed Roles</span></a>
                            {{-- <span class="badge align-self-center ms-auto">Coming soon</span> --}}
                        </li>
                    </ul>
                </li>
                <!-- /user management -->

                <!-- Staff and Offices-->
                <li class="nav-item-header pt-2 pb-0">
                    <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Staff and Offices</div>
                    <i class="ph-dots-three sidebar-resize-show"></i>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link">
                        <i class="ph-tree-structure"></i>
                        <span>Offices</span>
                    </a>
                    <ul class="nav-group-sub collapse">
                        <li class="nav-item"><a href="{{route('offices.index')}}" class="nav-link active"><i
                                    class="ph-list-bullets"></i><span>All Offices</span></a></li>
                        <li class="nav-item"><a href="{{route('offices.trash')}}" class="nav-link"><i
                                    class="ph-trash"></i><span>Trashed
                                    Offices</span></a>
                            {{-- <span class="badge align-self-center ms-auto">Coming soon</span> --}}
                        </li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link">
                        <i class="ph-users-four"></i>
                        <span>Staff</span>
                    </a>
                    <ul class="nav-group-sub collapse">
                        <li class="nav-item"><a href="{{route('staff.index')}}" class="nav-link active"><i
                                    class="ph-users-four"></i><span>All
                                    Staff</span></a></li>
                        <li class="nav-item"><a href="{{route('staff.create')}}" class="nav-link"><i
                                    class="ph-plus"></i><span>Add New
                                    Employee</span></a></li>
                        <li class="nav-item"><a href="{{route('staff.trash')}}" class="nav-link"><i
                                    class="ph-trash"></i><span>Trashed
                                    Employees</span></a>
                            {{-- <span class="badge align-self-center ms-auto">Coming soon</span> --}}
                        </li>
                    </ul>
                </li>
                <!-- /staff and offices-->
                <!-- Budgets -->
                <li class="nav-item-header pt-2 pb-0">
                    <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Budgets</div>
                    <i class="ph-dots-three sidebar-resize-show"></i>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link">
                        <i class="icon-coins"></i>
                        <span>Budgets</span>
                    </a>
                    <ul class="nav-group-sub collapse">
                        <li class="nav-item"><a href="{{route('budgets.index')}}" class="nav-link active"><i
                                    class="ph-list-bullets"></i><span>All Budgets</span></a>
                        </li>
                        <li class="nav-item"><a href="{{route('budgets.create')}}" class="nav-link"><i
                                    class="ph-plus"></i><span>Add New Budget</span></a>
                        </li>
                        <li class="nav-item"><a href="{{route('budgets.trash')}}" class="nav-link"><i
                                    class="ph-trash"></i><span>Trashed Budgets</span></a>
                        </li>

                    </ul>
                </li>

                <!-- /budgets-->

                <!-- Expenses and Procurements -->
                <li class="nav-item-header pt-2 pb-0">
                    <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Expenses and Procurements
                    </div>
                    <i class="ph-dots-three sidebar-resize-show"></i>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link">
                        <i class="ph-export"></i>
                        <span>Expenses</span>
                    </a>
                    <ul class="nav-group-sub collapse">
                        <li class="nav-item"><a href="{{route('expenses.index')}}" class="nav-link active"><i
                                    class="ph-list-bullets"></i><span>All Expenses</span></a></li>
                        <li class="nav-item"><a href="{{route('expenses.create')}}" class="nav-link"><i
                                    class="ph-plus"></i><span>Add New
                                    Expense</span></a></li>
                        <li class="nav-item"><a href="{{route('expenses.trash')}}" class="nav-link"><i
                                    class="ph-trash"></i><span>Trashed
                                    Expenses</span></a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link">
                        <i class="ph-shopping-bag-open"></i>
                        <span>Procurements</span>
                    </a>
                    <ul class="nav-group-sub collapse">
                        <li class="nav-item"><a href="{{route('procurements.index')}}" class="nav-link active"><i
                                    class="ph-list-bullets"></i><span>All Procurements</span></a></li>
                        <li class="nav-item"><a href="{{route('procurements.create')}}" class="nav-link"><i
                                    class="ph-plus"></i><span>Add New
                                    Procurement</span></a></li>
                        <li class="nav-item"><a href="{{route('procurements.trash')}}" class="nav-link"><i
                                    class="ph-trash"></i><span>Trashed
                                    Procurements</span></a>
                            {{-- <span class="badge align-self-center ms-auto">Coming soon</span> --}}
                        </li>
                    </ul>
                </li>
                <!-- /expenses and procurements -->

                <!-- Loans -->
                <li class="nav-item-header pt-2 pb-0">
                    <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Loans
                    </div>
                    <i class="ph-dots-three sidebar-resize-show"></i>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link">
                        <i class="ph-money"></i>
                        {{-- <span><img src="{{asset('icons/images/loan.png')}}"
                                width="20px"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; --}}
                        <span>Loans</span>
                    </a>
                    <ul class="nav-group-sub collapse">
                        <li class="nav-item"><a href="{{route('loans.index')}}" class="nav-link active"><i
                                    class="ph-list-bullets"></i><span>All Loans</span></a></li>
                        <li class="nav-item"><a href="{{route('loans.create')}}" class="nav-link"><i
                                    class="ph-plus"></i><span>Add New
                                    Loan</span></a></li>
                        <li class="nav-item"><a href="{{route('loans.trash')}}" class="nav-link"><i
                                    class="ph-trash"></i><span>Trashed
                                    Loans</span></a>
                            {{-- <span class="badge align-self-center ms-auto">Coming soon</span> --}}
                        </li>
                    </ul>
                </li>
                <!-- /loans -->

                <!-- Reports -->
                <li class="nav-item-header pt-2 pb-0">
                    <div class="text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide">Reports
                    </div>
                    <i class="ph-dots-three sidebar-resize-show"></i>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link">
                        <i class="ph-microsoft-excel-logo"></i>
                        <span>Reports</span>
                    </a>
                    <ul class="nav-group-sub collapse">
                        <li class="nav-item"><a href="#" class="nav-link active"><i
                                    class="ph-chart-pie"></i><span>General</span></a></li>
                        <li class="nav-item"><a href="#" class="nav-link"><i class="ph-user"></i><span>Indivintual
                                    Person</span></a></li>
                        <li class="nav-item"><a href="#" class="nav-link"><i
                                    class="ph-buildings"></i><span>Deputy</span></a></li>
                        <li class="nav-item"><a href="#" class="nav-link"><i
                                    class="ph-buildings"></i><span>Administration</span></a></li>
                    </ul>
                </li>
                <!-- /reports -->
            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->

</div>
<!-- /main sidebar -->