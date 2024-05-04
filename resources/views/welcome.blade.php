<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Finance MIS</title>


    <!-- Fonts -->

    <link rel="stylesheet" href="{{asset('icons/icomoon/styles.min.css')}}">
    <link rel="stylesheet" href="{{asset('icons/phosphor/styles.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/ltr/all.min.css')}}">
    <style>
        body {
            background-image: url('finance-vector-image.jpg');
            /* Replace with your vector image */
            background-size: cover;
            background-position: center;
            height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .welcome-container {
            background-color: rgba(255, 255, 255, 0.8);
            /* Semi-transparent white background */
            padding: 20px;
            border-radius: 10px;
        }

        .logo {
            width: 100px;
            /* Adjust the size as needed */
            margin-bottom: 20px;
        }

        .login-btn {
            margin-top: 20px;
        }

        .language-btn {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container welcome-container">
        <img src="{{asset('images/logo_icon.svg')}}" alt="Finance Logo" class="logo" height="48px">
        <h1 class="display-4">Welcome to FMIS(Finance Management Information System)</h1>
        <p class="lead">Your Financial Management Information System</p>

        <select class="btn btn-light btn-sm text-start">
            <option value="" selected disabled>Select your language</option>
            <option value="">English</option>
            <option value="">Pashto</option>
            <option value="">Dari</option>
        </select>
        @if (Route::has('login'))
        @auth
        <a class="btn btn-light btn-sm" href="{{ route('dashboard') }}"><span class="ph-house"></span>&nbsp;
            Home</a>
        @else
        <a class="btn btn-light btn-sm" href="{{ route('login') }}"><span class="ph-sign-in"></span>&nbsp; Login</a>
        {{-- @if (Route::has('register'))
        <a class="btn btn-light btn-sm" href="{{ route('register') }}"><span class="icon-enter"></span>&nbsp;
            Register</a>
        @endif --}}
        @endauth
        @endif
    </div>

    <!-- Bootstrap JS and dependencies (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>


</html>