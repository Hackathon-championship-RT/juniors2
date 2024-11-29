<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Мой любимый Маджонг</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.js"
            integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

    <script src="{{ asset('js/main.js') }}"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

{{--    @vite(['resources/css/app.css', 'resources/js/app.js'])--}}
</head>
<body style="">
    <style>
        @font-face {
            font-family: "Montserrat";

            src: url({{ asset("fonts/Montserrat/Montserrat-VariableFont_wght.ttf") }}) format("truetype");
            font-size: 16px;
            font-style: normal;
            font-weight: 500;
            line-height: normal;
        }
    </style>
    <div id="app">
        <nav class="navbar navbar-expand-md" style="z-index: 10;">
            <div class="container mt-2">
                <a class="navbar-brand d-flex nav-link text-black" href="{{ url('/') }}">
                    <h1 style="font-family: 'Montserrat'; font-weight: 600;">{{ __('МАДЖОНГ') }}</h1>
                </a>
                @guest
                @else
                    <button class="navbar-toggler " type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                @endguest
                <div class="collapse navbar-expand-xl d-flex">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            <div class="d-flex text-center">
                                @if (Route::has('login'))
                                    <li class="nav-item nav-link">
                                        <a class="lk_button nav-link" href="{{ route('login') }}">
                                            <p class="m-3 mt-0 mb-0">{{ __('Войти') }}</p>
                                        </a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item nav-link">
                                        <a class="lk_button nav-link"
                                           href="{{ route('register') }}">
                                            <p class="m-3 mt-0 mb-0">{{ __('Зарегистрироваться') }}</p>
                                        </a>
                                    </li>
                                @endif
                            </div>
                        @else
                            <div class="collapse navbar-collapse" style="justify-content: center"
                                 id="navbarSupportedContent">
                                <div class="navbar navbar-expand-xl">
                                    <div class="d-flex justify-center">
                                        <a href="{{ route('levels') }}" class='nav-link'
                                           style="display: flex; align-items: center;">
                                            <li class="nav-item nav-link" style="display: flex; align-items: center;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M18.2295 2.47967L5.82976 2.43536C5.43202 2.43417 5.05009 2.591 4.76796 2.87137C4.48583 3.15173 4.3266 3.53267 4.32529 3.93041L4.27635 20.0177C4.2758 20.2148 4.31409 20.41 4.38904 20.5923C4.46398 20.7745 4.57411 20.9403 4.71312 21.0799C4.85214 21.2196 5.01731 21.3306 5.19921 21.4064C5.38112 21.4822 5.57618 21.5214 5.77325 21.5218L18.173 21.5662C18.3702 21.5668 18.5655 21.5286 18.7479 21.4537C18.9303 21.3788 19.0961 21.2687 19.2359 21.1297C19.3757 20.9906 19.4867 20.8254 19.5626 20.6434C19.6385 20.4614 19.6777 20.2663 19.6781 20.0691L19.727 3.98182C19.7276 3.58405 19.5702 3.20235 19.2893 2.92065C19.0085 2.63896 18.6273 2.48034 18.2295 2.47967ZM18.1763 20.0662L5.77556 20.022L5.82451 3.93473L18.2243 3.97905L18.1763 20.0662ZM7.31718 6.19028C7.31806 5.99144 7.39786 5.8011 7.53903 5.66108C7.6802 5.52106 7.8712 5.44284 8.07004 5.44359L15.9715 5.47124C16.1593 5.47166 16.34 5.54247 16.4781 5.6697C16.6162 5.79692 16.7015 5.9713 16.7172 6.15839C16.733 6.34547 16.6779 6.53166 16.5631 6.68016C16.4482 6.82865 16.2818 6.92866 16.0968 6.96043C16.0534 6.96786 16.0095 6.97163 15.9655 6.9717L8.06386 6.94313C7.86503 6.94225 7.67468 6.86246 7.53467 6.72128C7.39465 6.58011 7.31642 6.38911 7.31718 6.19028ZM7.30885 9.19056C7.30916 9.09204 7.32888 8.99455 7.36688 8.90366C7.40488 8.81277 7.46042 8.73025 7.53032 8.66082C7.60022 8.5914 7.68311 8.53642 7.77426 8.49904C7.86541 8.46166 7.96303 8.4426 8.06154 8.44295L15.9632 8.47153C16.152 8.47049 16.3343 8.54071 16.4736 8.66816C16.6129 8.79562 16.699 8.97093 16.7147 9.15909C16.7304 9.34725 16.6746 9.53442 16.5583 9.68322C16.4421 9.83202 16.274 9.9315 16.0877 9.9618C16.044 9.96944 15.9997 9.97296 15.9553 9.97231L8.05384 9.94466C7.85509 9.94334 7.66499 9.86317 7.5253 9.72178C7.38561 9.58038 7.30776 9.38932 7.30885 9.19056ZM7.29943 12.1901C7.30104 11.9916 7.38123 11.8019 7.52243 11.6625C7.66363 11.5231 7.85433 11.4453 8.05277 11.4462L12.0011 11.4571C12.1888 11.4575 12.3695 11.5283 12.5075 11.6554C12.6456 11.7825 12.7309 11.9568 12.7468 12.1438C12.7626 12.3308 12.7078 12.5169 12.5931 12.6654C12.4784 12.814 12.3122 12.9141 12.1273 12.9461C12.0839 12.9536 12.04 12.9574 11.996 12.9574L8.04519 12.9431C7.84649 12.942 7.65636 12.862 7.51654 12.7209C7.37671 12.5797 7.29863 12.3888 7.29943 12.1901Z"
                                                        fill="#6E6E9B"/>
                                                </svg>
                                                <h6 class="m-1">{{ __('Уровни') }}</h6>
                                            </li>
                                        </a>

                                    </div>
                                    <a
                                        href="{{ route('profile') }}" class='lk_button'
                                        style=" ">
                                        <h6 class="m-1">
                                            Профиль
                                        </h6>
                                    </a>
                                </div>
                            </div>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


        <main class="content py-4">
            @yield('content')
        </main>
    </div>

</body>
</html>
