<div class="d-flex" id="wrapper">
    <!-- Sidebar Start-->
    <div class="text-white bg-green" id="sidebar-wrapper">
        <div class="sidebar-heading border-bottom fw-bold fs-4 " style="padding-bottom: 14px"> <img src="" alt=""
                class="img img-responsive" width="35" height="35">
            Laporan</div>
        <div class=" list-group">
            <a class="p-3 border-0 list-group-item bg-green list-group-item-action list-group-item-light" href=""
                style="color:white"> <i class='fa fa-icon '></i> Buku</a>
        </div>
    </div>
    <!-- Sicebar End -->

    <!-- Page content wrapper-->
    <div id="page-content-wrapper">
        <!-- Nav Start -->
        </nav>
        <header class="mb-3 bg-light border-bottom bg-green" style="background-color:#23717D">
            <div class="py-3 text-white container-fluid align-items-center bg-green"
                style="grid-template-columns: 1fr 2fr;">
                <div class="d-flex align-items-center justify-content-between">
                    <button class="text-white btn" id="sidebarToggle"><i class="fas fa-bars"></i></button>
                    <div class="flex-shrink-0 px-1 dropdown">
                        <a href="#" class="d-block link-light text-decoration-none " id="dropdownUser2"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class='fa fa-angle-down'></i>
                            <img src="{{ asset('images/user.png') }}" alt="Username" width="30" height="30"
                                class="bg-white border rounded-circle">
                        </a>
                        <ul class="mt-4 shadow dropdown-menu me-0" aria-labelledby="dropdownUser2">
                            <li><a class="dropdown-item" href=""><i class="fas fa-user-cog"></i>
                                    Detail Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item text-danger" href="{{ route('logout') }}"><i
                                        class="fas fa-sign-out-alt"></i> Sign
                                    out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- Nav end -->
