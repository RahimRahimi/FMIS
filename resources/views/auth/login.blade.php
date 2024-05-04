<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ __('Login') }}</title>

    <!-- Style Sheets -->
    <link rel="stylesheet" href="{{asset('css/ltr/all.min.css')}}">

    <!-- Icons -->
    <link rel="stylesheet" href="{{asset('icons/fontawesome/styles.min.css')}}">
    <link rel="stylesheet" href="{{asset('icons/icomoon/styles.min.css')}}">
    <link rel="stylesheet" href="{{asset('icons/material/styles.min.css')}}">
    <link rel="stylesheet" href="{{asset('icons/phosphor/styles.min.css')}}">
    <!-- Scripts -->
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>

</head>

<body>
    @include('layouts.partials.navbar')

    <!-- Page content -->
    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Inner content -->
            <div class="content-inner">

                <!-- Content area -->
                <div class="content d-flex justify-content-center align-items-center">

                    <!-- Login form -->
                    <form class="login-form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="card mb-0">
                            <div class="card-body">
                                <div class="text-center mb-3">
                                    <div class="d-inline-flex align-items-center justify-content-center mb-4 mt-2">
                                        <img src="{{asset('images/logo_icon.svg')}}" class="h-48px" alt="">
                                    </div>
                                    <h5 class="mb-0">Login to your account</h5>
                                    <span class="d-block text-muted">Enter your credentials below</span>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <div class="form-control-feedback form-control-feedback-start">
                                        <input type="email" name="email" id="email"
                                            class="form-control @error('email') is-invalid @enderror"
                                            placeholder="john@doe.com" value="{{ old('email') }}" required
                                            autocomplete="email" autofocus>
                                        <div class="form-control-feedback-icon">
                                            <i class="ph-user-circle text-muted"></i>
                                        </div>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <div class="form-control-feedback form-control-feedback-start">
                                        <div class="input-group mb-3" id="password">
                                            <input type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="current-password"
                                                placeholder="●●●●●●●●">
                                            <span class="input-group-text"><a href=""><i class="ph-eye-slash"
                                                        aria-hidden="true"></i></a></span>
                                        </div>
                                        <div class="form-control-feedback-icon">
                                            <i class="ph-lock text-muted"></i>
                                        </div>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{
                                            old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary w-100">Sign in</button>
                                </div>

                                <div class="text-center">
                                    {{-- <a href="login_password_recover.html">Forgot password?</a> --}}
                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    @endif
                                </div>

                            </div>
                        </div>
                    </form>
                    <!-- /login form -->

                </div>
                <!-- /content area -->


                {{--
                <!-- Footer -->
                <div class="navbar navbar-sm navbar-footer border-top">
                    <div class="container-fluid">
                        <span>&copy; 2022 <a
                                href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328">Limitless
                                Web App Kit</a></span>

                        <ul class="nav">
                            <li class="nav-item">
                                <a href="https://kopyov.ticksy.com/"
                                    class="navbar-nav-link navbar-nav-link-icon rounded" target="_blank">
                                    <div class="d-flex align-items-center mx-md-1">
                                        <i class="ph-lifebuoy"></i>
                                        <span class="d-none d-md-inline-block ms-2">Support</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item ms-md-1">
                                <a href="https://demo.interface.club/limitless/demo/Documentation/index.html"
                                    class="navbar-nav-link navbar-nav-link-icon rounded" target="_blank">
                                    <div class="d-flex align-items-center mx-md-1">
                                        <i class="ph-file-text"></i>
                                        <span class="d-none d-md-inline-block ms-2">Docs</span>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item ms-md-1">
                                <a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov"
                                    class="navbar-nav-link navbar-nav-link-icon text-primary bg-primary bg-opacity-10 fw-semibold rounded"
                                    target="_blank">
                                    <div class="d-flex align-items-center mx-md-1">
                                        <i class="ph-shopping-cart"></i>
                                        <span class="d-none d-md-inline-block ms-2">Purchase</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /footer --> --}}

            </div>
            <!-- /inner content -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->
    <script type="text/javascript">
        $("#password a").on("click", function (event) {
            event.preventDefault();
            if ($("#password input").attr("type") == "text") {
                $("#password input").attr("type", "password");
                $("#password i").addClass("ph-eye-slash");
                $("#password i").removeClass("ph-eye");
            } else if (
                $("#password input").attr("type") == "password"
            ) {
                $("#password input").attr("type", "text");
                $("#password i").removeClass("ph-eye-slash");
                $("#password i").addClass("ph-eye");
            }
        });
    </script>
</body>

</html>