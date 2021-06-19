<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="{{ route('user.dashboard') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Interface</div>
                <a class="nav-link" href="{{ route('user.profile.view') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                    Profile
                </a>
                <a class="nav-link" href="{{ route('company.info.view') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-link"></i></div>
                    Manage Company Info
                </a>
                <a class="nav-link" href="{{ route('retake.business.type') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-pen"></i></div>
                    Retake Survey
                </a>

            </div>
        </div>
    </nav>
</div>