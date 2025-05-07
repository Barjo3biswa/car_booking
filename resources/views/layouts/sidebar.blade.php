<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="index.html" class="logo">
                {{-- <img src="{{ asset('assets') }}/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand"
                    height="20" /> --}}
                    <h4 style="color: lemonchiffon;">Car-Booking 

                    @if(Auth::User()->user_type=='admin')
                        (Admin)
                    @else
                        (Vehicle Owner)
                    @endif
                    </h6>
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item active">
                    <a data-bs-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                        <span class="caret"></span>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Components</h4>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#products">
                        <i class="fas fa-layer-group"></i>
                        <p>Product</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="products">
                        <ul class="nav nav-collapse">
                            @if (Auth::user()->user_type == 'admin')
                            <li>
                                <a href="{{ route('showcatagory') }}">
                                    <span class="sub-item">Vehicle Catagory</span>
                                </a>
                            </li>
                            @endif

                            @if (Auth::user()->user_type == 'admin')
                            <li>
                                <a href="{{ route('show') }}">
                                    <span class="sub-item">Vehicle Master</span>
                                </a>
                            </li>
                            @endif
                            <li>
                                <a href="{{ route('product-availability-show') }}">
                                    <span class="sub-item">Add Vehicle For Booking</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('product-availability-list') }}">
                                    <span class="sub-item">Products Availability</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#orders">
                        <i class="fas fa-layer-group"></i>
                        <p>Orders</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="orders">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('admin-side-order',['status'=>'new']) }}">
                                    <span class="sub-item">New Order</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin-side-order',['status'=>'confirmed']) }}">
                                    <span class="sub-item">Confirmed Order</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin-side-order',['status'=>'Delevered']) }}">
                                    <span class="sub-item">Delivered</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin-side-order',['status'=>'all']) }}">
                                    <span class="sub-item">All</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                @if (Auth::user()->user_type == 'admin')
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#users">
                        <i class="fas fa-layer-group"></i>
                        <p>Users</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="users">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="#">
                                    <span class="sub-item">Seller</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">Customer</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                @endif
            </ul>
        </div>
    </div>
</div>
