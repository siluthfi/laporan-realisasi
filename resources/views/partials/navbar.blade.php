<!-- Page content wrapper-->

<!-- Nav Start -->
<nav class="p-0 mb-3 navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <div class="container-fluid">
        <button class="my-2 navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link py-4 px-3  {{ $title === 'Dashboard' ? 'active text-primary' : '' }}"
                        aria-current="page" href="{{ route('dashboard') }}">DASHBOARD</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link py-4 px-3 {{ $title === 'Laporan' ? 'active text-primary' : '' }}"
                        aria-current="page" href="{{ route('index') }}">LAPORAN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link py-4 px-3 {{ $title === 'Dokumen' ? 'active text-primary' : '' }}"
                        aria-current="page" href="{{ route('dokumen') }}">DOKUMEN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link py-4 px-3 {{ $title === 'Rekap' ? 'active text-primary' : '' }}"
                        aria-current="page" href="{{ route('rekap') }}">REKAP</a>
                </li>
                @if (Auth()->user()->bidang === 'Admin')
                    <li class="nav-item">
                        <a class="nav-link py-4 px-3 {{ $title === 'User' ? 'active text-primary' : '' }}"
                            aria-current="page" href="{{ route('user') }}">PENGGUNA</a>
                    </li>

                @endif
            </ul>
        </div>
        <div class="flex-shrink-0 px-1 py-3 dropdown d-flex justify-content-end">
            <a href="#" class="d-block link-light text-decoration-none " id="dropdownUser2"
                data-bs-toggle="dropdown" aria-expanded="false">
                <span class="text-secondary pe-2">{{ Auth()->user()->nama }} </span>
                <i class='fa fa-angle-down text-secondary me-1'></i>
                <img src="{{ asset('images') }}/{{ Auth()->user()->user_profile }}" alt="{{  Auth()->user()->nama }}" width="30" height="30"
                class="bg-white border rounded-circle" style="width: 30px; height: 30px;" >

            </a>
            <ul class="shadow dropdown-menu" aria-labelledby="dropdownUser2" style="margin-left: -6.5rem">
                <li><a class="dropdown-item" href="{{ route('user.profile', Auth()->user()->nama) }}"><i
                    class="fas fa-user-cog"></i>
                Rincian Profil</a></li>
        </li>
        <hr class="dropdown-divider">
        <li><a class="dropdown-item text-danger" href="{{ route('logout') }}"><i
                    class="fas fa-sign-out-alt"></i> Sign
                out</a>
        </li>


            </ul>
        </div>

        {{-- <div class="mb-1 div ms-auto">
            <div class="flex-shrink-0 px-1 dropdown">
                <a href="#" class="d-block link-light text-decoration-none " id="dropdownUser2"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class='fa fa-angle-down text-secondary me-1'></i>
                    <img src="{{ asset('images/') }}/{{ Auth()->user()->user_profile }}" alt="{{  Auth()->user()->nama }}" width="30" height="30"
                        class="bg-white border rounded-circle">
                </a>
                    <li><a class="dropdown-item" href="{{ route('user.profile', Auth()->user()->nama) }}"><i
                                class="fas fa-user-cog"></i>
                            Detail Profile</a></li>
                    </li>
                    <hr class="dropdown-divider">
                    <li><a class="dropdown-item text-danger" href="{{ route('logout') }}"><i
                                class="fas fa-sign-out-alt"></i> Sign
                            out</a>
                    </li>

                </ul>
            </div>
        </div> --}}

</nav>
<!-- Nav end -->
