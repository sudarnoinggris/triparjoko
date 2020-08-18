<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('') ?>">
        <div class="sidebar-brand-icon rotate-n-0">
            <img src="" alt="">
        </div>
       
        <div class="sidebar-brand-text mx-3">Kosong</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?php if ($title == 'Dashboard') echo 'active'; ?>">
        <a class="nav-link" href="<?= base_url('dashboard') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        SYSTEM
    </div>
    <li class="nav-item <?php if ($title == 'User') echo 'active'; ?>">
        <a class="nav-link" href="<?= base_url('users') ?>">
            <i class="fas fa-user"></i>
            <span>Users</span></a>
    </li>

   
    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('tables') ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        MASTER
    </div>
    <li class="nav-item <?php if ($title == 'Data') echo 'active'; ?>">
        <a class="nav-link" href="<?= base_url('users') ?>">
            <i class="fas fa-user"></i>
            <span>Data</span></a>
    </li>
    <li class="nav-item <?php if ($title == 'Form') echo 'active'; ?>">
        <a class="nav-link" href="<?= base_url('form') ?>">
            <i class="fas fa-user"></i>
            <span>Form</span></a>
    </li>
    <li class="nav-item <?php if ($title == 'Blank') echo 'active'; ?>">
        <a class="nav-link" href="<?= base_url('blank') ?>">
            <i class="fas fa-user"></i>
            <span>Blank</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->