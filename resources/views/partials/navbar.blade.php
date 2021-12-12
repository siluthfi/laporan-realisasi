<!-- Page content wrapper-->
<div id="page-content-wrapper">
    <!-- Nav Start -->
    <nav class="mb-3 navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link py-3 px-3  {{ $title === 'Dashboard' ? 'active text-primary' : '' }}"
                            aria-current="page" href="{{ route('dashboard') }}">DASHBOARD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-3 px-3 {{ $title === 'Laporan' ? 'active text-primary' : '' }}"
                            aria-current="page" href="{{ route('index') }}">LAPORAN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-3 px-3 {{ $title === 'Rekap' ? 'active text-primary' : '' }}"
                            aria-current="page" href="{{ route('rekap') }}">REKAP</a>
                    </li>
                    @if (Auth()->user()->bidang === 'Admin')
                        <li class="nav-item">
                            <a class="nav-link py-3 px-3 {{ $title === 'User' ? 'active text-primary' : '' }}"
                                aria-current="page" href="{{ route('user') }}">USERS</a>
                        </li>
                @endif
                </ul>
            </div>
            <div class="flex-shrink-0 px-1 dropdown">
                <a href="#" class="d-block link-light text-decoration-none " id="dropdownUser2"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class='fa fa-angle-down text-secondary'></i>
                    <img src="{{ asset('images/user.png') }}" alt="Username" width="30" height="30"
                        class="bg-white border rounded-circle">
                </a>
                <ul class="mt-4 shadow dropdown-menu" style="margin-left: -100px" aria-labelledby="dropdownUser2">
                    <li><a class="dropdown-item" href="{{ route('user.profile', Auth()->user()->nama) }}"><i class="fas fa-user-cog"></i>
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
    <!-- Nav end -->
