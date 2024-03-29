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

    <style>
        .css-selector {
            background: linear-gradient(138deg, #3451c7, #cbd2f3);
            background-size: 400% 400%;

            -webkit-animation: AnimationName 30s ease infinite;
            -moz-animation: AnimationName 30s ease infinite;
            animation: AnimationName 30s ease infinite;
        }

        @-webkit-keyframes AnimationName {
            0% {
                background-position: 0% 2%
            }

            50% {
                background-position: 100% 99%
            }

            100% {
                background-position: 0% 2%
            }
        }

        @-moz-keyframes AnimationName {
            0% {
                background-position: 0% 2%
            }

            50% {
                background-position: 100% 99%
            }

            100% {
                background-position: 0% 2%
            }
        }

        @keyframes AnimationName {
            0% {
                background-position: 0% 2%
            }

            50% {
                background-position: 100% 99%
            }

            100% {
                background-position: 0% 2%
            }
        }

    </style>

    <title></title>
</head>

<body>


    <div class="container-fluid ps-md-0 ">
        <div class="row g-0">
            <!-- Login  -->
            <!-- Background Image -->
            <div class="col-md-8 col-lg-7">
                <div class="py-5 login d-flex align-items-center bg-light">
                    <div class="container">
                        <div class="row">
                            <div class="mx-auto col-md-6 col-lg-7">


                                <h3 class="mb-5 login-heading fs-2 fw-bold">Register</h3>
                                <form action="{{ route('register.store') }}" method="POST">
                                    @csrf
                                    <div class="mb-3 form-floating">
                                        <input type="text" class="form-control bg-input" id="floatingInput"
                                            placeholder="Nama" name="nama">
                                        @error('username')
                                            <div class="text-danger">
                                                * {{ $message }}
                                            </div>
                                        @enderror
                                        <label for="floatingInput">Nama</label>
                                    </div>
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

                                    <div class="mb-5 form-floating ">
                                        <select class="form-select bg-input" id="floatingSelect"
                                            aria-label="Floating label select example" name="bidang">
                                            @foreach ($bidang as $b)
                                                <option value="{{ $b }}">{{ $b }}</option>
                                            @endforeach
                                        </select>
                                        <label for="floatingSelect">Bidang User</label>
                                    </div>


                                    <div class="mb-3 d-grid">
                                        <button
                                            class="mb-2 rounded btn btn-lg btn-primary btn-login text-uppercase fw-bold"
                                            type="submit">Create</button>
                                    </div>

                                    @if (session('status'))
                                    <div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                        <strong>{{ session('status') }}</strong>
                                    </div>
                                @endif


                                    <div class="mt-3 text-center ">
                                        <a href="{{ route('login') }}" class="text-decoration-none">Sign in</a>
                                    </div>



                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-none d-md-flex col-md-4 col-lg-5 bg-image css-selector" style=""></div>

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
