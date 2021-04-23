<!-- Sidebar -->
<ul class="navbar-nav bg-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ URL('/') }}">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('images/logoAsmat_1.png') }}" alt="" style="width: auto; height: 50px">
        </div>
        <div class="sidebar-brand-text mx-3">Asmat Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ URL('/') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('product.index') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Produk</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('story.index') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Cerita</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('customer.index') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Pelanggan</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('address.index') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Alamat Pelanggan</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('order.index') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Pesanan</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->