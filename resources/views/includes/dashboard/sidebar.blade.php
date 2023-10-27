<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin</div>
    </a>

    
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    
    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ $title === 'dashboard' ? 'active' : '' }}">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
       About OKI
   </div>

   <!-- Nav Item - Charts -->
   <li class="nav-item {{ $title === 'about_oki' ? 'active' : '' }}">
       <a class="nav-link disabled" href="/dashboard/about-oki" >
           <i class="fas fa-fw fa-chart-area"></i>
           <span>OKI</span></a>
   </li>

   <!-- Divider -->
   <hr class="sidebar-divider d-none d-md-block">

    <!-- Heading -->
    <div class="sidebar-heading">
        OKI
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item {{ $title === 'detail_lt' ? 'active' : '' }}">
        <a class="nav-link collapsed active" href="#" data-toggle="collapse" data-target="#lt"
            aria-expanded="true" aria-controls="lt">
            <i class="fas fa-fw fa-cog"></i>
            <span>L T</span>
        </a>
        <div id="lt" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Consist of:</h6>
                <a class="collapse-item" href="/dashboard/detailOki/dpm">DPM</a>
                <a class="collapse-item" href="/dashboard/detailOki/bem">BEM</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item {{ $title === 'detail_hmj' ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#hmj"
            aria-expanded="true" aria-controls="hmj">
            <i class="fas fa-fw fa-wrench"></i>
            <span>H M J</span>
        </a>
        <div id="hmj" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Consist of:</h6>
                <a class="collapse-item" href="/dashboard/detailOki/hmm">HMM</a>
                <a class="collapse-item" href="/dashboard/detailOki/hma">HMA</a>
                <a class="collapse-item" href="/dashboard/detailOki/hme">HME</a>
                <a class="collapse-item" href="/dashboard/detailOki/hmti">HMTI</a>
                <a class="collapse-item" href="/dashboard/detailOki/himania">HIMANIA</a>
                <a class="collapse-item" href="/dashboard/detailOki/hms">HMS</a>
                <a class="collapse-item" href="/dashboard/detailOki/hmtk">HMTK</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item {{ $title === 'detail_ukm' ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#ukm"
            aria-expanded="true" aria-controls="ukm">
            <i class="fas fa-fw fa-wrench"></i>
            <span>U K M</span>
        </a>
        <div id="ukm" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Consist of:</h6>
                <a class="collapse-item" href="/dashboard/detailOki/PP">PP</a>
                <a class="collapse-item" href="/dashboard/detailOki/st_yohanes">KMK St. Yohanes</a>
                <a class="collapse-item" href="/dashboard/detailOki/talitakum">KK Talita Kum</a>
                <a class="collapse-item" href="/dashboard/detailOki/rispol">Rispol</a>
                <a class="collapse-item" href="/dashboard/detailOki/opa">OPA Ganendra Giri</a>
                <a class="collapse-item" href="/dashboard/detailOki/plfm">PL FM</a>
                <a class="collapse-item" href="/dashboard/detailOki/lpm_kompen">LPM Kompen</a>
                <a class="collapse-item" href="/dashboard/detailOki/satmenwa">SATMENWA</a>
                <a class="collapse-item" href="/dashboard/detailOki/olahraga">Olah Raga</a>
                <a class="collapse-item" href="/dashboard/detailOki/pasti">PASTI</a>
                <a class="collapse-item" href="/dashboard/detailOki/bkm">BKM</a>
                <a class="collapse-item" href="/dashboard/detailOki/usma">USMA</a>
                <a class="collapse-item" href="/dashboard/detailOki/seni">Seni Theatrisic</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Another
    </div>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="/dashboard/faq">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>FAQ</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
<!-- End of Sidebar -->