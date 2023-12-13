<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin.index')}}">
        <div class="sidebar-brand-icon">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Poliwangi</div>
    </a>
    
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    
    <!-- Nav Item - Dashboard -->
    <li class="{{'dashboard' == request()->path() ? 'nav-item active' : 'nav-item'}}">
        <a class="nav-link" href="{{route('admin.index')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    
    <!-- Nav Item - Collapse Menu -->
    <li class="{{'perencanaan/view' == request()->path() ? 'nav-item active' : 'nav-item'}}">
        <a class="nav-link" href="{{route('perencanaan.view')}}">
            <i class="fas fa-solid fa-folder"></i>
            <span>Perencanaan</span></a>
    </li>

    <li class="{{'pelaksanaan/view' == request()->path() ? 'nav-item active' : 'nav-item'}}">
        <a class="nav-link" href="{{route('pelaksanaan.view')}}">
            <i class="fas fa-solid fa-folder-open"></i>
            <span>Pelaksanaan</span></a>
    </li>

    <li class="{{'report/view' == request()->path() ? 'nav-item active' : 'nav-item'}}">
        <a class="nav-link" href="{{route('report.view')}}">
            <i class="fas fa-solid fa-file"></i>
            <span>Laporan</span></a>
    </li>
    
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
    
    </ul>
    <!-- End of Sidebar -->
