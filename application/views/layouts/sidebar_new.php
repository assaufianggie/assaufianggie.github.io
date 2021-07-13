<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="http://localhost/SILOKERNF/index.php">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-people-carry"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SILOKERNF</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading Administrator -->
    <div class="sidebar-heading">
        Dashboard
    </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="http://localhost/SILOKERNF/index.php/lowongan">
            <i class="fas fa-fw fa-bell"></i>
            <span>Lowongan</span></a>
    </li>

    <!-- Divider -->
    <!-- <hr class="sidebar-divider"> -->

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="http://localhost/SILOKERNF/index.php/mitra">
            <i class="far fa-fw fa-handshake"></i>
            <span>Mitra</span></a>
    </li>

    <!-- Divider -->
    <!-- <hr class="sidebar-divider"> -->

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="http://localhost/SILOKERNF/index.php/peminat">
            <i class="fas fa-fw fa-user-check"></i>
            <span>Peminat</span></a>
    </li>

    <!-- Divider -->
    <!-- <hr class="sidebar-divider"> -->

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="http://localhost/SILOKERNF/index.php/prodi">
            <i class="fas fa-fw fa-graduation-cap"></i>
            <span>Prodi</span></a>
    </li>

    <!-- Divider -->
    <!-- <hr class="sidebar-divider"> -->

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="http://localhost/SILOKERNF/index.php/keahlian">
            <i class="fas fa-fw fa-clipboard-check"></i>
            <span>Keahlian</span></a>
    </li>

    <!-- Divider -->
    <!-- <hr class="sidebar-divider"> -->

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="http://localhost/SILOKERNF/index.php/sektor">
            <i class="fas fa-fw fa-map-marker-alt"></i>
            <span>Sektor Usaha</span></a>
    </li>

    <!-- Divider -->
    <!-- <hr class="sidebar-divider"> -->

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="http://localhost/SILOKERNF/index.php/bidang">
            <i class="fas fa-fw fa-store"></i>
            <span>Bidang Usaha</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading Administrator -->
    <!-- <div class="sidebar-heading">
        User
    </div> -->

    <!-- Heading Administrator -->
    <div class="sidebar-heading">
        User
    </div>

    <!-- Nav Item - Dashboard -->

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Menu</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Menu user: </h6>
                <a class="collapse-item" href="buttons.html">Lowongan baru</a>
                <a class="collapse-item" href="cards.html">Isi loker</a>
                <a class="collapse-item" href="buttons.html">Daftar mitra</a>
                <a class="collapse-item" href="cards.html">Berita</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading Administrator -->
    <div class="sidebar-heading">
        Developer
    </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="http://localhost/SILOKERNF/index.php/team">
            <i class="fas fa-fw fa-users"></i>
            <span>Our Team</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->