<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="22">
                    </span>
            <span class="logo-lg">
                        <img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="17">
                    </span>
        </a>
        <!-- Light Logo-->
        <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="22">
                    </span>
            <span class="logo-lg">
                        <img src="{{ asset('assets/images/logo-light.png') }}" alt="" height="17">
                    </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                @role('admin')
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarMaps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMaps">
                            <i class="ri-map-pin-line"></i> <span data-key="t-maps">Maps</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarMaps">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="#" class="nav-link" data-key="t-google">
                                        Google
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link" data-key="t-vector">
                                        Vector
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link" data-key="t-leaflet">
                                        Leaflet
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                @endrole

                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST"
                        onclick="event.preventDefault();
                            this.closest('form').submit();
                        "
                    >
                        @csrf
                        <button type="submit" class="nav-link menu-link">
                            <i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span data-key="t-widgets">Logout</span>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
