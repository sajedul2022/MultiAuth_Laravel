<nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
    <div class="sidebar-inner px-2 pt-3">
        <div
            class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
            <div class="d-flex align-items-center">
                <div class="avatar-lg me-4">
                    <img src="/assets/img/team/user.png" class="card-img-top rounded-circle border-white"
                        alt="Bonnie Green">
                </div>
                <div class="d-block">
                    <h2 class="h5 mb-3">Hi, {{ auth()->user()->email ? auth()->user()->email : auth()->user()->name }}</h2>
                    <a href="{{ route('logout') }}" class="btn btn-secondary btn-sm d-inline-flex align-items-center"
                        onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                        <svg class="icon icon-xxs me-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                            </path>
                        </svg>
                        Sign Out
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                </div>
            </div>
            <div class="collapse-close d-md-none">
                <a href="#sidebarMenu" data-bs-toggle="collapse" data-bs-target="#sidebarMenu"
                    aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation">
                    <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>

        <ul class="nav flex-column pt-3 pt-md-0">
            <li class="nav-item">
                <a href="{{ url('/') }}" class="nav-link d-flex align-items-center">
                    <span class="sidebar-icon me-3">
                        <img src="/assets/img/brand/bike2.png" height="20" width="20" alt="Volt Logo">
                    </span>
                    <span class="mt-1 ms-1 sidebar-text">
                        Rex Zone
                    </span>
                </a>
            </li>
            <hr>
            <li class="nav-item {{ Request::segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ route('home') }}" class="nav-link">
                    <span class="sidebar-icon"> <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                            <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                        </svg></span></span>
                    <span class="sidebar-text">Dashboard</span>
                </a>
            </li>


            <li class="nav-item">

                {{-- <span class="nav-link collapsed d-flex justify-content-between align-items-center"
                    data-bs-toggle="collapse" data-bs-target="#submenu-users"> --}}

                <span
                    class="nav-link {{ Request::segment(1) !== 'users' || Request::segment(1) !== 'roles' ? 'collapsed' : '' }} d-flex justify-content-between align-items-center"
                    data-bs-toggle="collapse" data-bs-target="#submenu-users">
                    <span>
                        <span class="sidebar-icon">
                            <i class="fas fa-user-alt me-2"></i>
                        </span>
                        <span class="sidebar-text"> User Management </span>
                    </span>
                    <span class="link-arrow"><svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg></span>
                </span>
                <div class="multi-level collapse {{ Request::segment(1) == 'users' || Request::segment(1) == 'roles' ? 'show' : '' }}"
                    role="list" id="submenu-users" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item {{ Request::segment(1) == 'users' ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('users.index') }}">
                                <span class="sidebar-text">
                                    <i class='far fa-arrow-alt-circle-right me-2 'style='color:#0069fd'></i>
                                    Manage Users
                                </span>
                            </a>
                        </li>

                        <li class="nav-item {{ Request::segment(1) == 'roles' ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('roles.index') }}">
                                <i class='far fa-arrow-alt-circle-right me-2 'style='color:#0069fd'></i> <span
                                    class="sidebar-text">Manage Role</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>




            <li class="nav-item">
                <span class="nav-link collapsed d-flex justify-content-between align-items-center"
                    data-bs-toggle="collapse" data-bs-target="#submenu-sales">
                    <span>
                        <span class="sidebar-icon"><svg class="icon icon-xs me-2" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z"
                                    clip-rule="evenodd"></path>
                                <path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z"></path>
                            </svg></span>
                        <span class="sidebar-text">Sales</span>
                    </span>
                    <span class="link-arrow"><svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg></span>
                </span>
                <div class="multi-level collapse {{ Request::segment(1) == 'buttons' || Request::segment(1) == 'notifications' || Request::segment(1) == 'forms' || Request::segment(1) == 'modals' || Request::segment(1) == 'typography' ? 'show' : '' }}"
                    role="list" id="submenu-sales" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item {{ Request::segment(1) == 'buttons' ? 'active' : '' }}">
                            <a class="nav-link" href="/buttons">
                                <i class='far fa-arrow-alt-circle-right me-2 'style='color:#0069fd'></i> <span
                                    class="sidebar-text"> New Sales </span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::segment(1) == 'notifications' ? 'active' : '' }}">
                            <a class="nav-link" href="/notifications">
                                <i class='far fa-arrow-alt-circle-right me-2 'style='color:#0069fd'></i> <span
                                    class="sidebar-text"> Sales Invoice </span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::segment(1) == 'forms' ? 'active' : '' }}">
                            <a class="nav-link" href="/forms">
                                <i class='far fa-arrow-alt-circle-right me-2 'style='color:#0069fd'></i> <span
                                    class="sidebar-text"> Sales Return</span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::segment(1) == 'modals' ? 'active' : '' }}">
                            <a class="nav-link" href="/modals">
                                <i class='far fa-arrow-alt-circle-right me-2 'style='color:#0069fd'></i> <span
                                    class="sidebar-text"> Sales Return list </span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::segment(1) == 'typography' ? 'active' : '' }}">
                            <a class="nav-link" href="/typography">
                                <i class='far fa-arrow-alt-circle-right me-2 'style='color:#0069fd'></i> <span
                                    class="sidebar-text"> Sales Report</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>


            <li class="nav-item">
                <span class="nav-link collapsed d-flex justify-content-between align-items-center"
                    data-bs-toggle="collapse" data-bs-target="#submenu-purchase">
                    <span>
                        <span class="sidebar-icon"><svg class="icon icon-xs me-2" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z"></path>
                                <path fill-rule="evenodd"
                                    d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z"
                                    clip-rule="evenodd"></path>
                            </svg></span>
                        <span class="sidebar-text">Purchase</span>
                    </span>
                    <span class="link-arrow"><svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg></span>
                </span>
                <div class="multi-level collapse {{ Request::segment(1) == 'buttons' || Request::segment(1) == 'notifications' || Request::segment(1) == 'forms' || Request::segment(1) == 'modals' || Request::segment(1) == 'typography' ? 'show' : '' }}"
                    role="list" id="submenu-purchase" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item {{ Request::segment(1) == 'buttons' ? 'active' : '' }}">
                            <a class="nav-link" href="/buttons">
                                <i class='far fa-arrow-alt-circle-right me-2 'style='color:#0069fd'></i> <span
                                    class="sidebar-text"> New Purchase </span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::segment(1) == 'notifications' ? 'active' : '' }}">
                            <a class="nav-link" href="/notifications">
                                <i class='far fa-arrow-alt-circle-right me-2 'style='color:#0069fd'></i> <span
                                    class="sidebar-text"> Purchase Invoice </span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::segment(1) == 'forms' ? 'active' : '' }}">
                            <a class="nav-link" href="/forms">
                                <i class='far fa-arrow-alt-circle-right me-2 'style='color:#0069fd'></i> <span
                                    class="sidebar-text">Purchase Return</span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::segment(1) == 'modals' ? 'active' : '' }}">
                            <a class="nav-link" href="/modals">
                                <i class='far fa-arrow-alt-circle-right me-2 'style='color:#0069fd'></i> <span
                                    class="sidebar-text"> Return List </span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::segment(1) == 'typography' ? 'active' : '' }}">
                            <a class="nav-link" href="/typography">
                                <i class='far fa-arrow-alt-circle-right me-2 'style='color:#0069fd'></i> <span
                                    class="sidebar-text"> Purchase Report</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <span class="nav-link collapsed d-flex justify-content-between align-items-center"
                    data-bs-toggle="collapse" data-bs-target="#submenu-products">
                    <span>
                        <span class="sidebar-icon"><svg class="icon icon-xs me-2" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z"></path>
                                <path fill-rule="evenodd"
                                    d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z"
                                    clip-rule="evenodd"></path>
                            </svg></span>
                        <span class="sidebar-text">Product</span>
                    </span>
                    <span class="link-arrow"><svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg></span>
                </span>
                <div class="multi-level collapse {{ Request::segment(1) == 'category' || Request::segment(1) == 'products' || Request::segment(1) == 'products2' || Request::segment(1) == 'products3' || Request::segment(1) == 'products4' ? 'show' : '' }}"
                    role="list" id="submenu-products" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item {{ Request::segment(1) == 'category' ? 'active' : '' }}">
                            <a class="nav-link" href="/category">
                                <i class='far fa-arrow-alt-circle-right me-2 'style='color:#0069fd'></i> <span
                                    class="sidebar-text"> Category </span>
                            </a>
                        </li>

                        <li class="nav-item {{ Request::segment(1) == 'products' ? 'active' : '' }}">
                            <a class="nav-link" href="/products">
                                <i class='far fa-arrow-alt-circle-right me-2 'style='color:#0069fd'></i> <span
                                    class="sidebar-text">
                                    New Product </span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::segment(1) == 'products2' ? 'active' : '' }}">
                            <a class="nav-link" href="/products2">
                                <i class='far fa-arrow-alt-circle-right me-2 'style='color:#0069fd'></i> <span
                                    class="sidebar-text"> Manage Product </span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::segment(1) == 'products3' ? 'active' : '' }}">
                            <a class="nav-link" href="/products3">
                                <i class='far fa-arrow-alt-circle-right me-2 'style='color:#0069fd'></i> <span
                                    class="sidebar-text">Brand</span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::segment(1) == 'products4' ? 'active' : '' }}">
                            <a class="nav-link" href="/products4">
                                <i class='far fa-arrow-alt-circle-right me-2 'style='color:#0069fd'></i> <span
                                    class="sidebar-text"> Stock Report </span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::segment(1) == 'products5' ? 'active' : '' }}">
                            <a class="nav-link" href="/products5">
                                <i class='far fa-arrow-alt-circle-right me-2 'style='color:#0069fd'></i> <span
                                    class="sidebar-text">
                                    Low Stock Report</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <span class="nav-link collapsed d-flex justify-content-between align-items-center"
                    data-bs-toggle="collapse" data-bs-target="#submenu-customers">
                    <span>
                        <span class="sidebar-icon"><i class="fas fa-user-alt me-2"></i></span>
                        <span class="sidebar-text">Customer</span>
                    </span>
                    <span class="link-arrow"><svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg></span>
                </span>
                <div class="multi-level collapse {{ Request::segment(1) == 'customers' || Request::segment(1) == 'products' || Request::segment(1) == 'products2' || Request::segment(1) == 'products3' || Request::segment(1) == 'products4' ? 'show' : '' }}"
                    role="list" id="submenu-customers" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item {{ Request::segment(1) == 'customers' ? 'active' : '' }}">
                            <a class="nav-link" href="/customers">
                                <i class='far fa-arrow-alt-circle-right me-2 'style='color:#0069fd'></i> <span
                                    class="sidebar-text"> New Customer </span>
                            </a>
                        </li>

                        <li class="nav-item {{ Request::segment(1) == 'products' ? 'active' : '' }}">
                            <a class="nav-link" href="/products">
                                <i class='far fa-arrow-alt-circle-right me-2 'style='color:#0069fd'></i> <span
                                    class="sidebar-text">
                                    Manage Customer </span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::segment(1) == 'products2' ? 'active' : '' }}">
                            <a class="nav-link" href="/products2">
                                <i class='far fa-arrow-alt-circle-right me-2 'style='color:#0069fd'></i> <span
                                    class="sidebar-text"> Customer Due Report
                                </span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <span class="nav-link collapsed d-flex justify-content-between align-items-center"
                    data-bs-toggle="collapse" data-bs-target="#submenu-supplier">
                    <span>
                        <span class="sidebar-icon"><i class="fas fa-user-alt me-2"></i></span>
                        <span class="sidebar-text">Supplier</span>
                    </span>
                    <span class="link-arrow"><svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg></span>
                </span>
                <div class="multi-level collapse {{ Request::segment(1) == 'customers' || Request::segment(1) == 'products' || Request::segment(1) == 'products2' || Request::segment(1) == 'products3' || Request::segment(1) == 'products4' ? 'show' : '' }}"
                    role="list" id="submenu-supplier" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item {{ Request::segment(1) == 'customers' ? 'active' : '' }}">
                            <a class="nav-link" href="/customers">
                                <i class='far fa-arrow-alt-circle-right me-2 'style='color:#0069fd'></i> <span
                                    class="sidebar-text"> New Supplier </span>
                            </a>
                        </li>

                        <li class="nav-item {{ Request::segment(1) == 'products' ? 'active' : '' }}">
                            <a class="nav-link" href="/products">
                                <i class='far fa-arrow-alt-circle-right me-2 'style='color:#0069fd'></i> <span
                                    class="sidebar-text">
                                    Manage Supplier </span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::segment(1) == 'products2' ? 'active' : '' }}">
                            <a class="nav-link" href="/products2">
                                <i class='far fa-arrow-alt-circle-right me-2 'style='color:#0069fd'></i> <span
                                    class="sidebar-text"> Supplier Due Report
                                </span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <span class="nav-link collapsed d-flex justify-content-between align-items-center"
                    data-bs-toggle="collapse" data-bs-target="#submenu-report">
                    <span>
                        <span class="sidebar-icon"><svg class="icon icon-xs me-2" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z"></path>
                                <path fill-rule="evenodd"
                                    d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z"
                                    clip-rule="evenodd"></path>
                            </svg></span>
                        <span class="sidebar-text">Report</span>
                    </span>
                    <span class="link-arrow"><svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg></span>
                </span>
                <div class="multi-level collapse {{ Request::segment(1) == 'category' || Request::segment(1) == 'products' || Request::segment(1) == 'products2' || Request::segment(1) == 'products3' || Request::segment(1) == 'products4' ? 'show' : '' }}"
                    role="list" id="submenu-report" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item {{ Request::segment(1) == 'category' ? 'active' : '' }}">
                            <a class="nav-link" href="/category">
                                <i class='far fa-arrow-alt-circle-right me-2 'style='color:#0069fd'></i> <span
                                    class="sidebar-text"> Purchase Report </span>
                            </a>
                        </li>

                        <li class="nav-item {{ Request::segment(1) == 'products' ? 'active' : '' }}">
                            <a class="nav-link" href="/products">
                                <i class='far fa-arrow-alt-circle-right me-2 'style='color:#0069fd'></i> <span
                                    class="sidebar-text">
                                    Sales Report </span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::segment(1) == 'products2' ? 'active' : '' }}">
                            <a class="nav-link" href="/products2">
                                <i class='far fa-arrow-alt-circle-right me-2 'style='color:#0069fd'></i> <span
                                    class="sidebar-text"> Stock Report </span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::segment(1) == 'products3' ? 'active' : '' }}">
                            <a class="nav-link" href="/products3">
                                <i class='far fa-arrow-alt-circle-right me-2 'style='color:#0069fd'></i> <span
                                    class="sidebar-text">Low Stock Report</span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::segment(1) == 'products4' ? 'active' : '' }}">
                            <a class="nav-link" href="/products4">
                                <i class='far fa-arrow-alt-circle-right me-2 'style='color:#0069fd'></i> <span
                                    class="sidebar-text"> Profit & Loss </span>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::segment(1) == 'products5' ? 'active' : '' }}">
                            <a class="nav-link" href="/products5">
                                <i class='far fa-arrow-alt-circle-right me-2 'style='color:#0069fd'></i> <span
                                    class="sidebar-text">
                                    Supplier Due</span>
                            </a>
                        </li>

                        <li class="nav-item {{ Request::segment(1) == 'products5' ? 'active' : '' }}">
                            <a class="nav-link" href="/products5">
                                <i class='far fa-arrow-alt-circle-right me-2 'style='color:#0069fd'></i> <span
                                    class="sidebar-text">
                                    Customer Due </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <span class="nav-link collapsed d-flex justify-content-between align-items-center"
                    data-bs-toggle="collapse" data-bs-target="#submenu-profile">
                    <span>
                        <span class="sidebar-icon"><i class="fas fa-user-alt me-2"></i></span>
                        <span class="sidebar-text">Profile</span>
                    </span>
                    <span class="link-arrow"><svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"></path>
                        </svg></span>
                </span>
                <div class="multi-level collapse {{ Request::segment(1) == 'profile-manage' || Request::segment(1) == 'products' || Request::segment(1) == 'products2' || Request::segment(1) == 'products3' || Request::segment(1) == 'products4' ? 'show' : '' }}"
                    role="list" id="submenu-profile" aria-expanded="false">
                    <ul class="flex-column nav">
                        <li class="nav-item {{ Request::segment(1) == 'profile-manage' ? 'active' : '' }}">
                            <a class="nav-link" href="/profile-manage">
                                <i class='far fa-arrow-alt-circle-right me-2 'style='color:#0069fd'></i> <span
                                    class="sidebar-text"> Profile Manage </span>
                            </a>
                        </li>

                        <li class="nav-item {{ Request::segment(1) == 'change-password' ? 'active' : '' }}">
                            <a class="nav-link" href="/change-password">
                                <i class='far fa-arrow-alt-circle-right me-2 'style='color:#0069fd'></i> <span
                                    class="sidebar-text">
                                    Re-Set Password </span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>




            {{-- <li class="nav-item {{ Request::segment(1) == 'transactions' ? 'active' : '' }}">
                <a href="/transactions" class="nav-link">
                    <span class="sidebar-icon"><svg class="icon icon-xs me-2" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"></path>
                            <path fill-rule="evenodd"
                                d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z"
                                clip-rule="evenodd"></path>
                        </svg></span>
                    <span class="sidebar-text">Report</span>
                </a>
            </li> --}}

            <li role="separator" class="dropdown-divider mt-4 mb-3 border-gray-700"></li>

            <li class="nav-item {{ Request::segment(1) == 'logout' ? 'active' : '' }}">
                <a href="{{ route('logout') }}" class="nav-link"
                    onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    <span class="sidebar-icon">
                        <i class='fas fa-power-off'></i>
                    </span>
                    <span class="sidebar-text">Logout</span>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>



        </ul>
    </div>
</nav>
