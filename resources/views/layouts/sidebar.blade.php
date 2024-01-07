<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
    <a href="{{ route('home') }}" class="logo logo-dark">
    <span class="logo-sm">
        <img src="{{ URL::asset('build/images/logodark.png') }}" alt="" height="26">
    </span>
    <span class="logo-lg">
        <img src="{{ URL::asset('build/images/logodark.png') }}" alt="" height="28" size="180%">
    </span>
</a>

<a href="{{ route('home') }}" class="logo logo-light">
    <span class="logo-lg">
        <img src="{{ URL::asset('build/images/logolight.png') }}" alt="" height="30" size="180%">
    </span>
    <span class="logo-sm">
        <img src="{{ URL::asset('build/images/logolight.png') }}" alt="" height="26">
    </span>
</a>

    </div>

    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn">
        <i class="bx bx-menu align-middle"></i>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">

                <li class="menu-title" data-key="t-applications">Applications</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-store icon nav-icon"></i>
                        <span class="menu-item" data-key="t-ecommerce">Ecommerce</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('category.index') }}" data-key="t-category">Category</a></li>
                        <li><a href="{{ route('products.index') }}" data-key="t-products">Products</a></li>
                        <li><a href="{{ route('order.index') }}" data-key="t-orders">Orders</a></li>
                        
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="bx bx-user-circle icon nav-icon"></i>
                        <span class="menu-item" data-key="t-teams">User
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('staff.index') }}" data-key="t-staff-list">Staff List</a></li>
                        <li><a href="{{ route('user.index') }}" data-key="t-user-list">User List</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->