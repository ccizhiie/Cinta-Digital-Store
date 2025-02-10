<nav class="sidebar-nav scroll-sidebar" data-simplebar>
    <ul id="sidebarnav">
        <!-- ============================= -->
        <!-- Home -->
        <!-- ============================= -->
        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Home</span>
        </li>
        <!-- =================== -->
        <!-- Dashboard -->
        <!-- =================== -->
        <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('admin.dashboard') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-aperture"></i>
                </span>
                <span class="hide-menu">Beranda</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link {{ request()->routeIs('category.index') ? 'active' : '' }}"
                href="{{ route('category.index') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-shopping-cart"></i>
                </span>
                <span class="hide-menu">Kategori</span>
            </a>
        </li>

        <li class="sidebar-item">
            <a class="sidebar-link {{ request()->routeIs('supplier.index') ? 'active' : '' }}"
                href="{{ route('supplier.index') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-shopping-cart"></i>
                </span>
                <span class="hide-menu">Supplier</span>
            </a>
        </li>

        <li class="sidebar-item">
            <a class="sidebar-link" href="index3.html" aria-expanded="false">
                <span>
                    <i class="ti ti-currency-dollar"></i>
                </span>
                <span class="hide-menu">NFT</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="index4.html" aria-expanded="false">
                <span>
                    <i class="ti ti-cpu"></i>
                </span>
                <span class="hide-menu">Crypto</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="index5.html" aria-expanded="false">
                <span>
                    <i class="ti ti-activity-heartbeat"></i>
                </span>
                <span class="hide-menu">General</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="index6.html" aria-expanded="false">
                <span>
                    <i class="ti ti-playlist"></i>
                </span>
                <span class="hide-menu">Music</span>
            </a>
        </li>
</nav>
