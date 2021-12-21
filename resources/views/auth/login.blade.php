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
            <div class="d-none d-md-flex col-md-4 col-lg-7 bg-image css-selector" style=""></div>
            <div class="col-md-8 col-lg-5">
                <div class="py-5 login d-flex align-items-center bg-light">
                    <div class="container">
                        <div class="row">
                            <div class="mx-auto col-md-6 col-lg-8">

                                <h3 class="mb-5 login-heading fs-2 fw-bold">Login</h3>
                                <form action="{{ route('login.store') }}" method="POST">
                                    @csrf
                                    <div class="mb-3 form-floating"> <input type="text"
                                            class="form-control bg-input                                             @if (session('status'))
                                        border-danger
                                        @endif"
                                            id=" floatingInput" placeholder="Username" name="username">
                                        @if (session('status'))
                                            <div class="text-danger">
                                                * {{ session('status') }}
                                            </div>
                                        @endif
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


                                    <div class="mb-3 form-floating ">
                                        <select class="form-select bg-input" id="floatingSelect"
                                            aria-label="Floating label select example" name="tahun">
                                            <option value="{{ date('Y') }}">{{ date('Y') }}</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                            <option value="2026">2026</option>
                                            <option value="2027">2027</option>
                                            <option value="2028">2028</option>
                                            <option value="2029">2029</option>
                                            <option value="2030">2030</option>
                                            <option value="2031">2031</option>
                                            <option value="2032">2032</option>
                                            <option value="2033">2033</option>
                                            <option value="2034">2034</option>
                                            <option value="2035">2035</option>
                                            <option value="2036">2036</option>
                                            <option value="2037">2037</option>
                                            <option value="2038">2038</option>
                                            <option value="2039">2039</option>
                                            <option value="2040">2040</option>
                                            <option value="2041">2041</option>
                                            <option value="2042">2042</option>
                                            <option value="2043">2043</option>
                                            <option value="2044">2044</option>
                                            <option value="2045">2045</option>
                                            <option value="2046">2046</option>
                                            <option value="2047">2047</option>
                                            <option value="2048">2048</option>
                                            <option value="2049">2049</option>
                                            <option value="2050">2050</option>
                                            <option value="2051">2051</option>
                                            <option value="2052">2052</option>
                                            <option value="2053">2053</option>
                                            <option value="2054">2054</option>
                                            <option value="2055">2055</option>
                                            <option value="2056">2056</option>
                                            <option value="2057">2057</option>
                                            <option value="2058">2058</option>
                                            <option value="2059">2059</option>
                                            <option value="2060">2060</option>
                                            <option value="2061">2061</option>
                                            <option value="2062">2062</option>
                                            <option value="2063">2063</option>
                                            <option value="2064">2064</option>
                                            <option value="2065">2065</option>
                                            <option value="2066">2066</option>
                                            <option value="2067">2067</option>
                                            <option value="2068">2068</option>
                                            <option value="2069">2069</option>
                                            <option value="2070">2070</option>
                                            <option value="2071">2071</option>
                                            <option value="2072">2072</option>
                                            <option value="2073">2073</option>
                                            <option value="2074">2074</option>
                                            <option value="2075">2075</option>
                                            <option value="2076">2076</option>
                                            <option value="2077">2077</option>
                                            <option value="2078">2078</option>
                                            <option value="2079">2079</option>
                                            <option value="2080">2080</option>
                                            <option value="2081">2081</option>
                                            <option value="2082">2082</option>
                                            <option value="2083">2083</option>
                                            <option value="2084">2084</option>
                                            <option value="2085">2085</option>
                                            <option value="2086">2086</option>
                                            <option value="2087">2087</option>
                                            <option value="2088">2088</option>
                                            <option value="2089">2089</option>
                                            <option value="2090">2090</option>
                                            <option value="2091">2091</option>
                                            <option value="2092">2092</option>
                                            <option value="2093">2093</option>
                                            <option value="2094">2094</option>
                                            <option value="2095">2095</option>
                                            <option value="2096">2096</option>
                                            <option value="2097">2097</option>
                                            <option value="2098">2098</option>
                                            <option value="2099">2099</option>
                                            <option value="2100">2100</option>
                                        </select>
                                        <label for="floatingSelect">Pilih Tahun</label>
                                    </div>


                                    <div class="mb-3 form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="remember"
                                            name="remember">
                                        <label class="form-check-label" for="remember">
                                            Remember me
                                        </label>
                                    </div>


                                    <div class="d-grid">
                                        <button
                                            class="mb-2 rounded btn btn-lg btn-primary btn-login text-uppercase fw-bold "
                                            type=" submit">Login</button>
                                    </div>


                                    <div class="mt-3 text-center">
                                        <a href="{{ route('register') }}" class="text-decoration-none">Create
                                            Account</a>
                                    </div>



                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>
