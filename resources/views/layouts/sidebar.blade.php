<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">core</div>
                            <a class="nav-link collapsed" href="/dashboard" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <!-- <a class="nav-link" href="/dashboard"> -->
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Dashboard
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                <!-- </a>     -->
                            </a>
                            <x-sidebar.submenu/>
                            @if (auth()->user()->role_id=="1")  
                                <a class="nav-link" href="/olahuser">
                                    <div class="sb-nav-link-icon"><i class="fa fa-user"></i></div>
                                    Manajemen User
                                </a>
                                <a class="nav-link" href="/olahrole">
                                    <div class="sb-nav-link-icon"><i class="fa fa-user"></i></div>
                                    Manajemen Role
                                </a>
                                <a class="nav-link" href="/olahiframe">
                                <div class="sb-nav-link-icon"><i class="fa fa-th-large"></i></div>
                                    Manajemen Iframe
                                </a>
                            @endif
                    </div>
                </nav>
            </div>