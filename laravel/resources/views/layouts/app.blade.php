<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Мой любимый Маджонг</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}"/>

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

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
</head>
<body>
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
<div class="img" style="position: absolute;
                            fill: #82FFD2;
                            top: 0;
                            left: 0;
                            width: 100%;
                            height: 100%;
                            z-index: -1;">
    <svg xmlns="http://www.w3.org/2000/svg" width="40vw" height="481" viewBox="0 0 441 481" fill="none">
        <g opacity="0.3" filter="url(#filter0_f_424_239)">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M298.209 155.001C287.173 189.669 261.914 216.19 239.037 244.462C219.326 268.821 198.32 290.535 173.292 309.373C145.414 330.356 119.122 359.558 84.2732 360.946C49.3115 362.339 19.9507 336.407 -8.93254 316.634C-36.0889 298.044 -55.4251 272.427 -78.8344 249.286C-110.874 217.612 -166.167 199.642 -172.434 155.001C-178.493 111.845 -134.511 78.3497 -107.647 44.0607C-83.8376 13.6712 -57.2616 -13.2453 -24.5625 -33.7378C9.01462 -54.7805 45.0816 -81.9806 84.2732 -76.2154C123.401 -70.4596 140.038 -20.5008 176.088 -4.2213C218.116 14.7576 280.755 -11.4202 308.836 25.1917C335.703 60.222 311.604 112.919 298.209 155.001Z"
                  fill="#82F7FF"/>
        </g>
        <defs>
            <filter id="filter0_f_424_239" x="-293" y="-197" width="734" height="678" filterUnits="userSpaceOnUse"
                    color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                <feGaussianBlur stdDeviation="60" result="effect1_foregroundBlur_424_239"/>
            </filter>
        </defs>
    </svg>
</div>
<div class="img" style="position: absolute;
                        fill: #82FFD2;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        z-index: -1;">
    <svg xmlns="http://www.w3.org/2000/svg" width="50vw" height="396" viewBox="0 0 688 396" fill="none">
        <g opacity="0.3" filter="url(#filter0_f_424_240)">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M545.209 70.0007C534.173 104.669 508.914 131.19 486.037 159.462C466.326 183.821 445.32 205.535 420.292 224.373C392.414 245.356 366.122 274.558 331.273 275.946C296.311 277.339 266.951 251.407 238.067 231.634C210.911 213.044 191.575 187.427 168.166 164.286C136.126 132.612 80.8334 114.642 74.5661 70.0007C68.5073 26.8452 112.489 -6.65035 139.353 -40.9393C163.162 -71.3288 189.738 -98.2453 222.438 -118.738C256.015 -139.781 292.082 -166.981 331.273 -161.215C370.401 -155.46 387.038 -105.501 423.088 -89.2213C465.116 -70.2424 527.755 -96.4202 555.836 -59.8083C582.703 -24.778 558.604 27.919 545.209 70.0007Z"
                  fill="#82FFD2"/>
        </g>
        <defs>
            <filter id="filter0_f_424_240" x="-46" y="-282" width="734" height="678" filterUnits="userSpaceOnUse"
                    color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                <feGaussianBlur stdDeviation="60" result="effect1_foregroundBlur_424_240"/>
            </filter>
        </defs>
    </svg>
</div>
<style>
    .navbar-brand {
        font-weight: bold; /* Для выделения логотипа жирным */
    }

    .nav-item {
        margin: 0 10px; /* Добавляем немного маргина между пунктами навигации */
    }

    .navbar-nav {
        flex-direction: row; /* Указываем элементам навигации располагаться в ряд */
    }

    .nav-link {
        color: #555; /* Задаем цвет ссылок */
    }

    .nav-link:hover {
        color: #000; /* Цвет ссылок при наведении */
    }

    .navbar-collapse {
        justify-content: center; /* Центрируем элементы навигации */
    }

    .navbar-toggler {
        float: right; /* Кнопка мобильного меню будет справа */
    }
</style>
<div id="app">
    <nav class="navbar navbar-expand-md">
        <div class="container">
            <a class="navbar-brand d-flex nav-link" href="{{ url('/') }}">
                {{ __('Спортивные мероприятия') }}
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
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Войти') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item nav-link">
                                    <a class="nav-link"
                                       href="{{ route('register') }}">{{ __('Зарегистрироваться') }}</a>
                                </li>
                            @endif
                        </div>
                    @else
                        <div class="collapse navbar-collapse" style="justify-content: center"
                             id="navbarSupportedContent">
                            <div class="navbar navbar-expand-xl">
                                <div class="d-flex justify-center">
                                    <a href="{{ route('search') }}" class='nav-link'
                                       style="display: flex; align-items: center;">
                                        <li class="nav-item nav-link" style="display: flex; align-items: center;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M18.2295 2.47967L5.82976 2.43536C5.43202 2.43417 5.05009 2.591 4.76796 2.87137C4.48583 3.15173 4.3266 3.53267 4.32529 3.93041L4.27635 20.0177C4.2758 20.2148 4.31409 20.41 4.38904 20.5923C4.46398 20.7745 4.57411 20.9403 4.71312 21.0799C4.85214 21.2196 5.01731 21.3306 5.19921 21.4064C5.38112 21.4822 5.57618 21.5214 5.77325 21.5218L18.173 21.5662C18.3702 21.5668 18.5655 21.5286 18.7479 21.4537C18.9303 21.3788 19.0961 21.2687 19.2359 21.1297C19.3757 20.9906 19.4867 20.8254 19.5626 20.6434C19.6385 20.4614 19.6777 20.2663 19.6781 20.0691L19.727 3.98182C19.7276 3.58405 19.5702 3.20235 19.2893 2.92065C19.0085 2.63896 18.6273 2.48034 18.2295 2.47967ZM18.1763 20.0662L5.77556 20.022L5.82451 3.93473L18.2243 3.97905L18.1763 20.0662ZM7.31718 6.19028C7.31806 5.99144 7.39786 5.8011 7.53903 5.66108C7.6802 5.52106 7.8712 5.44284 8.07004 5.44359L15.9715 5.47124C16.1593 5.47166 16.34 5.54247 16.4781 5.6697C16.6162 5.79692 16.7015 5.9713 16.7172 6.15839C16.733 6.34547 16.6779 6.53166 16.5631 6.68016C16.4482 6.82865 16.2818 6.92866 16.0968 6.96043C16.0534 6.96786 16.0095 6.97163 15.9655 6.9717L8.06386 6.94313C7.86503 6.94225 7.67468 6.86246 7.53467 6.72128C7.39465 6.58011 7.31642 6.38911 7.31718 6.19028ZM7.30885 9.19056C7.30916 9.09204 7.32888 8.99455 7.36688 8.90366C7.40488 8.81277 7.46042 8.73025 7.53032 8.66082C7.60022 8.5914 7.68311 8.53642 7.77426 8.49904C7.86541 8.46166 7.96303 8.4426 8.06154 8.44295L15.9632 8.47153C16.152 8.47049 16.3343 8.54071 16.4736 8.66816C16.6129 8.79562 16.699 8.97093 16.7147 9.15909C16.7304 9.34725 16.6746 9.53442 16.5583 9.68322C16.4421 9.83202 16.274 9.9315 16.0877 9.9618C16.044 9.96944 15.9997 9.97296 15.9553 9.97231L8.05384 9.94466C7.85509 9.94334 7.66499 9.86317 7.5253 9.72178C7.38561 9.58038 7.30776 9.38932 7.30885 9.19056ZM7.29943 12.1901C7.30104 11.9916 7.38123 11.8019 7.52243 11.6625C7.66363 11.5231 7.85433 11.4453 8.05277 11.4462L12.0011 11.4571C12.1888 11.4575 12.3695 11.5283 12.5075 11.6554C12.6456 11.7825 12.7309 11.9568 12.7468 12.1438C12.7626 12.3308 12.7078 12.5169 12.5931 12.6654C12.4784 12.814 12.3122 12.9141 12.1273 12.9461C12.0839 12.9536 12.04 12.9574 11.996 12.9574L8.04519 12.9431C7.84649 12.942 7.65636 12.862 7.51654 12.7209C7.37671 12.5797 7.29863 12.3888 7.29943 12.1901Z"
                                                    fill="#6E6E9B"/>
                                            </svg>
                                            <h6 class="m-1">{{ __('Поиск') }}</h6>
                                        </li>
                                    </a>
                                    <a href="{{ route('favourites') }}" class='nav-link'
                                       style="display: flex; align-items: center;">
                                        <li class="nav-item nav-link" style="display: flex; align-items: center;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M18.2295 2.47967L5.82976 2.43536C5.43202 2.43417 5.05009 2.591 4.76796 2.87137C4.48583 3.15173 4.3266 3.53267 4.32529 3.93041L4.27635 20.0177C4.2758 20.2148 4.31409 20.41 4.38904 20.5923C4.46398 20.7745 4.57411 20.9403 4.71312 21.0799C4.85214 21.2196 5.01731 21.3306 5.19921 21.4064C5.38112 21.4822 5.57618 21.5214 5.77325 21.5218L18.173 21.5662C18.3702 21.5668 18.5655 21.5286 18.7479 21.4537C18.9303 21.3788 19.0961 21.2687 19.2359 21.1297C19.3757 20.9906 19.4867 20.8254 19.5626 20.6434C19.6385 20.4614 19.6777 20.2663 19.6781 20.0691L19.727 3.98182C19.7276 3.58405 19.5702 3.20235 19.2893 2.92065C19.0085 2.63896 18.6273 2.48034 18.2295 2.47967ZM18.1763 20.0662L5.77556 20.022L5.82451 3.93473L18.2243 3.97905L18.1763 20.0662ZM7.31718 6.19028C7.31806 5.99144 7.39786 5.8011 7.53903 5.66108C7.6802 5.52106 7.8712 5.44284 8.07004 5.44359L15.9715 5.47124C16.1593 5.47166 16.34 5.54247 16.4781 5.6697C16.6162 5.79692 16.7015 5.9713 16.7172 6.15839C16.733 6.34547 16.6779 6.53166 16.5631 6.68016C16.4482 6.82865 16.2818 6.92866 16.0968 6.96043C16.0534 6.96786 16.0095 6.97163 15.9655 6.9717L8.06386 6.94313C7.86503 6.94225 7.67468 6.86246 7.53467 6.72128C7.39465 6.58011 7.31642 6.38911 7.31718 6.19028ZM7.30885 9.19056C7.30916 9.09204 7.32888 8.99455 7.36688 8.90366C7.40488 8.81277 7.46042 8.73025 7.53032 8.66082C7.60022 8.5914 7.68311 8.53642 7.77426 8.49904C7.86541 8.46166 7.96303 8.4426 8.06154 8.44295L15.9632 8.47153C16.152 8.47049 16.3343 8.54071 16.4736 8.66816C16.6129 8.79562 16.699 8.97093 16.7147 9.15909C16.7304 9.34725 16.6746 9.53442 16.5583 9.68322C16.4421 9.83202 16.274 9.9315 16.0877 9.9618C16.044 9.96944 15.9997 9.97296 15.9553 9.97231L8.05384 9.94466C7.85509 9.94334 7.66499 9.86317 7.5253 9.72178C7.38561 9.58038 7.30776 9.38932 7.30885 9.19056ZM7.29943 12.1901C7.30104 11.9916 7.38123 11.8019 7.52243 11.6625C7.66363 11.5231 7.85433 11.4453 8.05277 11.4462L12.0011 11.4571C12.1888 11.4575 12.3695 11.5283 12.5075 11.6554C12.6456 11.7825 12.7309 11.9568 12.7468 12.1438C12.7626 12.3308 12.7078 12.5169 12.5931 12.6654C12.4784 12.814 12.3122 12.9141 12.1273 12.9461C12.0839 12.9536 12.04 12.9574 11.996 12.9574L8.04519 12.9431C7.84649 12.942 7.65636 12.862 7.51654 12.7209C7.37671 12.5797 7.29863 12.3888 7.29943 12.1901Z"
                                                    fill="#6E6E9B"/>
                                            </svg>
                                            <h6 class="m-1 text-nowrap">{{ __('Участвую') }}</h6>
                                        </li>
                                    </a>
                                    <a href="{{ route('notifications') }}" class='nav-link'
                                       style="display: flex; align-items: center;">
                                        <li class="nav-item nav-link" style="display: flex; align-items: center;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M18.2295 2.47967L5.82976 2.43536C5.43202 2.43417 5.05009 2.591 4.76796 2.87137C4.48583 3.15173 4.3266 3.53267 4.32529 3.93041L4.27635 20.0177C4.2758 20.2148 4.31409 20.41 4.38904 20.5923C4.46398 20.7745 4.57411 20.9403 4.71312 21.0799C4.85214 21.2196 5.01731 21.3306 5.19921 21.4064C5.38112 21.4822 5.57618 21.5214 5.77325 21.5218L18.173 21.5662C18.3702 21.5668 18.5655 21.5286 18.7479 21.4537C18.9303 21.3788 19.0961 21.2687 19.2359 21.1297C19.3757 20.9906 19.4867 20.8254 19.5626 20.6434C19.6385 20.4614 19.6777 20.2663 19.6781 20.0691L19.727 3.98182C19.7276 3.58405 19.5702 3.20235 19.2893 2.92065C19.0085 2.63896 18.6273 2.48034 18.2295 2.47967ZM18.1763 20.0662L5.77556 20.022L5.82451 3.93473L18.2243 3.97905L18.1763 20.0662ZM7.31718 6.19028C7.31806 5.99144 7.39786 5.8011 7.53903 5.66108C7.6802 5.52106 7.8712 5.44284 8.07004 5.44359L15.9715 5.47124C16.1593 5.47166 16.34 5.54247 16.4781 5.6697C16.6162 5.79692 16.7015 5.9713 16.7172 6.15839C16.733 6.34547 16.6779 6.53166 16.5631 6.68016C16.4482 6.82865 16.2818 6.92866 16.0968 6.96043C16.0534 6.96786 16.0095 6.97163 15.9655 6.9717L8.06386 6.94313C7.86503 6.94225 7.67468 6.86246 7.53467 6.72128C7.39465 6.58011 7.31642 6.38911 7.31718 6.19028ZM7.30885 9.19056C7.30916 9.09204 7.32888 8.99455 7.36688 8.90366C7.40488 8.81277 7.46042 8.73025 7.53032 8.66082C7.60022 8.5914 7.68311 8.53642 7.77426 8.49904C7.86541 8.46166 7.96303 8.4426 8.06154 8.44295L15.9632 8.47153C16.152 8.47049 16.3343 8.54071 16.4736 8.66816C16.6129 8.79562 16.699 8.97093 16.7147 9.15909C16.7304 9.34725 16.6746 9.53442 16.5583 9.68322C16.4421 9.83202 16.274 9.9315 16.0877 9.9618C16.044 9.96944 15.9997 9.97296 15.9553 9.97231L8.05384 9.94466C7.85509 9.94334 7.66499 9.86317 7.5253 9.72178C7.38561 9.58038 7.30776 9.38932 7.30885 9.19056ZM7.29943 12.1901C7.30104 11.9916 7.38123 11.8019 7.52243 11.6625C7.66363 11.5231 7.85433 11.4453 8.05277 11.4462L12.0011 11.4571C12.1888 11.4575 12.3695 11.5283 12.5075 11.6554C12.6456 11.7825 12.7309 11.9568 12.7468 12.1438C12.7626 12.3308 12.7078 12.5169 12.5931 12.6654C12.4784 12.814 12.3122 12.9141 12.1273 12.9461C12.0839 12.9536 12.04 12.9574 11.996 12.9574L8.04519 12.9431C7.84649 12.942 7.65636 12.862 7.51654 12.7209C7.37671 12.5797 7.29863 12.3888 7.29943 12.1901Z"
                                                    fill="#6E6E9B"/>
                                            </svg>
                                            <h6 class="m-1 text-nowrap">{{ __('Уведомления') }}</h6>
                                        </li>
                                    </a>
                                </div>
                                <a href="{{ route('profile') }}" class='nav-link'
                                   style="display: flex; align-items: center;">
                                    <li class="nav-item nav-link" style="display: flex; align-items: center;">
                                        <img class="m-1 mt-0 mb-0"
                                             src="{{ asset('img/' . $user['avatar']) }}"
                                             alt="{{ $user['name'] }}"
                                             style="width: 42px; height: 42px; border-radius: 50%; object-fit: cover">
                                        <button style="
                                            margin:  0 0 0 5px;
                                            border-radius: 12px;
                                            border: none;
                                            background: #D1FAE5;
                                            display: inline-flex;
                                            height: 44px;
                                            padding: 10px 24px;
                                            justify-content: center;
                                            align-items: center;
                                            gap: 10px;
                                            flex-shrink: 0;
                                            color: #118060;">
                                            <h6 class="m-1">
                                                Личный кабинет
                                            </h6>
                                        </button>
                                    </li>
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
