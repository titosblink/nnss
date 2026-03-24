<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="{{ asset('assets/img/logo.png') }}" type="image/x-icon" />
    <title>NNSS Ogbomoso</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/lineicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/materialdesignicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/fullcalendar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
</head>

<body>
    <center>
        <br />
        <div class="text-center mb-3">
            <img src="assets/img/logo.png" class="mb-3" style="width:90px;">
        </div>
        <div class="col-lg-4">
            <div class="form-wrapper p-4 shadow-lg rounded-4 bg-white">

                <h5 class="mb-1">Welcome Back 👋</h5>
                <p class="text-muted mb-3">Sign in to continue</p>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="input-group">
                                <input type="email" placeholder="Email" class="form-control" name="email" />
                            </div>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- end col -->
                        <div style="height: 10px;"></div>
                        <div class="col-12">
                            <div class="input-group">
                                <input type="password" class="form-control" id="password" name="password">
                                <button type="button" onclick="togglePassword()" class="btn btn-outline-secondary">
                                    👁️
                                </button>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- end col -->
                        <!-- end col -->
                        <div class="col-xxl-6 col-lg-12 col-md-6">
                            <div class="text-start text-md-end text-lg-start text-xxl-end mb-30"></div>
                        </div>
                        <!-- end col -->
                        <div class="col-12">
                            <div class="button-group d-flex justify-content-center flex-wrap">
                                <button class="main-btn primary-btn btn-hover w-100 text-center">
                                    Sign In
                                </button>
                            </div>
                        </div>

                        <!-- end row -->
                </form>
            </div>
        </div>
        </div>
        <p class="text-center mt-3 small text-blue-950">
            © 2026 NNSS Ogbomoso
        </p>
    </center>

    <!-- ========= All Javascript files linkup ======== -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/js/dynamic-pie-chart.js') }}"></script>
    <script src="{{ asset('assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/fullcalendar.js') }}"></script>
    <script src="{{ asset('assets/js/jvectormap.min.js') }}"></script>
    <script src="{{ asset('assets/js/world-merc.js') }}"></script>
    <script src="{{ asset('assets/js/polyfill.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        function togglePassword() {
            const input = document.getElementById("password");
            input.type = input.type === "password" ? "text" : "password";
        }
    </script>
</body>

</html>
