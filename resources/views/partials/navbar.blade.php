<div id="page-content-wrapper">
    <!-- Nav Start -->
    <nav class="mb-3 bg-white navbar navbar-expand-lg navbar-light position-relative">
        <div class="px-5 py-1 container-fluid">
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link py-3 {{ $title === 'Dashboard' ? 'active ' : '' }}" aria-current="page"
                            href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-3 {{ $title === 'Laporan' ? 'active ' : '' }}" aria-current="page"
                            href="{{ route('index') }}">Laporan</a>
                    </li>
                    <li class="nav-item">
                        <a class="py-3 nav-link">Dokumen</a>
                    </li>
                </ul>
            </div>


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>



            <div class="flex-shrink-0 px-1 py-3 dropdown d-flex justify-content-end">
                <a href="#" class="d-block link-light text-decoration-none " id="dropdownUser2"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class='fa fa-angle-down text-secondary me-1'></i>
                    <img src="{{ asset('images/user.png') }}" alt="Username" width="30" height="30"
                        class="bg-white border rounded-circle">
                </a>
                <ul class="shadow dropdown-menu" aria-labelledby="dropdownUser2" style="margin-left: -6.5rem">
                    <li><a class="dropdown-item" href=""><i class="fas fa-user-cog"></i>
                            &nbsp;Detail Profile</a></li>
                    <li>
                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#tahunModal">
                            <span href=""><i class="fas fa-calendar"></i>
                                &nbsp;&nbsp;&nbsp;Tahun</span>
                        </button>
                    </li>
                    <hr class="dropdown-divider">
                    <li><a class="dropdown-item text-danger" href="{{ route('logout') }}"><i
                                class="fas fa-sign-out-alt"></i> Sign
                            out</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    {{-- Modal Start --}}
    <div class="modal fade" id="tahunModal" tabindex="-1" aria-labelledby="tahunModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tahunModalLabel">Konfirmasi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST">
                        <select id='date-dropdown' name="year">
                        </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="px-3 py-1 btn btn-outline-outline-secondary"
                        data-bs-dismiss="modal">No</button>
                    <button type="submit" class="px-3 py-1 btn btn-outline-danger">Yes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- Modal End --}}

    <script>
        let dateDropdown = document.getElementById('date-dropdown'); 
             
        let currentYear = new Date().getFullYear();    
        let earliestYear = 2000;     
        while (currentYear >= earliestYear) {      
          let dateOption = document.createElement('option');          
          dateOption.text = currentYear;      
          dateOption.value = currentYear;        
          dateDropdown.add(dateOption);      
          currentYear -= 1;    
        }
      </script>
    </header>
