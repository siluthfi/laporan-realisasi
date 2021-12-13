<div id="page-content-wrapper">
    <!-- Nav Start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white position-relative mb-3">
        <div class="container-fluid py-1 px-5">
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link py-3 {{ $title === 'Dashboard' ? 'active ' : '' }}" aria-current="page" href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-3 {{ $title === 'Laporan' ? 'active ' : '' }}"  aria-current="page" href="{{ route('index') }}">Laporan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-3">Dokumen</a>
                    </li>
                </ul>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="flex-shrink-0 px-1 dropdown d-flex justify-content-end py-3">
                <a href="#" class="d-block link-light text-decoration-none " id="dropdownUser2"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class='fa fa-angle-down text-secondary me-1'></i>
                    <img src="{{ asset('images/user.png') }}" alt="Username" width="30" height="30"
                        class="bg-white border rounded-circle">
                </a>
                <ul class=" shadow dropdown-menu" aria-labelledby="dropdownUser2" style="margin-left: -6.5rem">
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
    </nav>

    </header>
