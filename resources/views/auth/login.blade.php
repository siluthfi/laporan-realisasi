<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel=" stylesheet">

    <!-- Javascript -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

    <!-- Datatables -->
    <link rel="stylesheet" href="{{ asset('css/datatable.min.css') }}">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable({
                "scrollX": true,
                "responsive": true
            });
        });
    </script>

    <title></title>
</head>

<body>


    <div class="container-fluid ps-md-0 ">
        <div class="row g-0 justify-content-center">
            <!-- Login  -->
            <!-- Background Image -->
            <div class="col-md-8 col-lg-6">
                <div class="py-5 login d-flex align-items-center">
                    <div class="container ">
                        <div class="row justify-content-center">
                            <div class="col-md-6 col-lg-8 bg-light border rounded p-5 ">
                                <h3 class="mb-5 login-heading fs-2 fw-bold">Nama Website</h3>
                                <form action="{{ route('login.store') }}" method="POST">
                                    @csrf
                                    <div class="mb-3 form-floating">
                                        <input type="text" class="form-control bg-input" id="floatingInput"
                                            placeholder="Username" name="username">
                                        @error('username')
                                            <div class="text-danger">
                                                * {{ $message }}
                                            </div>
                                        @enderror
                                        <label for="floatingInput">Username</label>
                                    </div>
                                    <div class="mb-3 form-floating">

                                        <input type="password" class="form-control bg-input" id="floatingPassword"
                                            placeholder="Password" name="password">
                                        @error('password')
                                            <div class="text-danger">
                                                * {{ $message }}
                                            </div>
                                        @enderror
                                        <label for="floatingPassword">Password</label>
                                    </div>
                                    {{-- <div class="mb-3 fs-6 ">
                                        <p>Sign in as :
                                            <a class="text-decoration-none ms-2" href="#"
                                                onClick="autoFillAdmin(); return true;"> Admin </a>
                                            <a class="text-decoration-none ms-2" href="#"
                                                onClick="autoFillUser(); return true;"> Siswa </a>
                                        </p>
                                    </div> --}}

                                    <div class="mb-3 form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="remember"
                                            name="remember">
                                        <label class="form-check-label" for="remember">
                                            Remember me
                                        </label>
                                    </div>



                                    <div class="mb-5 mt-3 d-grid">
                                        <button class="mb-2 btn btn-lg btn-primary btn-login text-uppercase fw-bold"
                                            type="submit">Login</button>
                                    </div>

                                    @if (session('status'))
                                        <div class="p-4 mb-6 text-center text-white bg-red-500 rounded-lg">
                                            {{ session('status') }}
                                        </div>
                                    @endif

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

{{-- <script type="text/javascript">
    function autoFillAdmin() {
        document.getElementById('floatingInput').value = "admin";
        document.getElementById('floatingPassword').value = "admin";
    }
    function autoFillUser() {
        document.getElementById('floatingInput').value = "siswa";
        document.getElementById('floatingPassword').value = "siswa";
    }
</script> --}}

</html>
