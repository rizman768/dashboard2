<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="/dashboard">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
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