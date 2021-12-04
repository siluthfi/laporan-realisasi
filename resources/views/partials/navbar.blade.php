<div class="d-flex" id="wrapper">
    <!-- Sidebar Start-->
    <div class="bg-white border-end" id="sidebar-wrapper">
        <div class="sidebar-heading fw-bold fs-4 border-bottom" style="padding-bottom: 14px"> <img src="" alt=""
                class="img img-responsive" width="35" height="35">
            Laporan</div>
        <div class="list-group list-group-flush">
            <a class="p-3 border-0 list-group-item list-group-item-action list-group-item-light"
                href=""> <i class='fa fa-icon '></i> Buku</a>
        </div>
    </div>
    <!-- Sicebar End -->

    <!-- Page content wrapper-->
    <div id="page-content-wrapper">
        <!-- Nav Start -->
        </nav>
        <header class="py-3 mb-3 bg-light border-bottom">
            <div class="container-fluid align-items-center" style="grid-template-columns: 1fr 2fr;">
                <div class="d-flex align-items-center justify-content-between">
                    <button class="btn" id="sidebarToggle"><i class="fas fa-bars"></i></button>
                    <div class="flex-shrink-0 px-1 dropdown">
                        <a href="#" class="d-block link-dark text-decoration-none " id="dropdownUser2"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class='fa fa-angle-down'></i>
                            <img src="{{ asset('images/user.png') }}" alt="Username"
                                width="30" height="30" class="border rounded-circle">
                        </a>
                        <ul class="mt-4 shadow dropdown-menu me-0" aria-labelledby="dropdownUser2">
                            <li><a class="dropdown-item" href=""><i
                                        class="fas fa-user-cog"></i>
                                    Detail Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item text-danger" href=""><i
                                        class="fas fa-sign-out-alt"></i> Sign
                                    out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- Nav end -->
