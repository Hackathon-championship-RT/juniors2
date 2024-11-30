<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>AUTOMAHJONG</title>

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
    <link rel="icon" href="{{ asset('favicon1.ico') }}" type="image/x-icon">

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
    <div class="wrapper">
        <div id="app">
            <nav class="navbar navbar-expand-md">
                <div class="container">
                    <a class="logo navbar-brand d-flex nav-link text-black" href="{{ url('/') }}">
                        <h1 style="font-family: 'Montserrat'; font-weight: 600; margin: auto;">{{ __('AUTOMAHJONG') }}</h1>
                    </a>
                    @guest
                    @else
                    <button class="header_name navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Меню навигации" style="border-radius: 0">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    @endguest
                    <div class="collapse navbar-collapse navbar-expand-xl d-flex" id="navbarSupportedContent">
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
                                            <a href="{{ route('leaderboard') }}" id="leader" class='nav-link a-header'
                                               style="display: flex; align-items: center;">
                                                <li class="nav-item nav-link" style="display: flex; align-items: center;">
                                                    <img id="leader_img" src="{{ asset('img/leaderboard.png') }}" alt="" width="24" height="24">
                                                    <h6 class="m-1">{{ __('Лидеры') }}</h6>
                                                </li>
                                            </a>
                                            <a href="{{ route('levels') }}" id="level"  class='nav-link a-header'
                                               style="display: flex; align-items: center;">
                                                <li class="nav-item nav-link" style="display: flex; align-items: center;">
                                                    <img id="level_img" src="{{ asset('img/play.png') }}" alt="" width="24" height="24">
                                                    <h6 class="m-1">{{ __('Уровни') }}</h6>
                                                </li>
                                            </a>
                                            <a href="{{ route('game_story') }}" id="story" class='nav-link a-header'
                                               style="display: flex; align-items: center;">
                                                <li class="nav-item nav-link" style="display: flex; align-items: center;">
                                                    <img id="story_img" src="{{ asset('img/story.png') }}" alt="" width="24" height="24">
                                                    <h6 class="m-1" style="margin-left: 2px">{{ __('История') }}</h6>
                                                </li>
                                            </a>

                                        </div>
                                        <a
                                            href="{{ route('profile') }}" class='lk_button'>
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


            <main class="content py-4 pb-0" style="min-height: 100vh">
                @yield('content')
            </main>
        </div>

        <footer>
            <h2>О НАС</h2>
            <div class="container">
                <h6 class="text-center mt-5 mb-5">Наша команда, которая никак  не связана с американскими бургерами, представялет свой проект: игровая платформа AUTOMAHJONG</h6>
                <p>Наша команда:</p>
                <p><b>Кузнецов Тимофей</b> - TeamLeader, инициатор, секретерша</p>
                <p><b>Габдуллин Артем</b> - FullStack, создатель шедевральной игры</p>
                <p><b>Шиахметов Шамиль</b> - FullStack, также создатель шедевральной игры</p>
                <p><b>Макаров Сергей</b> - FullStack, создатель приложения на Telegram</p>
                <p><b>Юсупов Тимур</b> - FullStack, верстальщик, создатель этого чудесного веб-сайта</p>
                <p>FullStack-разработчиков много не бывает, тут так просто получилось)</p>
            </div>
        </footer>
    </div>
</body>
</html>

<script>
    const imageBlock = document.getElementById('leader');
    const image = document.getElementById('leader_img');

    imageBlock.addEventListener('mouseover', function() {
        image.src = '{{ asset('img/hover_leaderboard.png') }}'; // Измените на путь к новому изображению
    });

    imageBlock.addEventListener('mouseout', function() {
        image.src = '{{ asset('img/leaderboard.png') }}'; // Измените на путь к исходному изображению
    });

    const imageBlock_1 = document.getElementById('level');
    const image_1 = document.getElementById('level_img');

    imageBlock_1.addEventListener('mouseover', function() {
        image_1.src = '{{ asset('img/hover_play.png') }}'; // Измените на путь к новому изображению
    });

    imageBlock_1.addEventListener('mouseout', function() {
        image_1.src = '{{ asset('img/play.png') }}'; // Измените на путь к исходному изображению
    });

    const imageBlock_2 = document.getElementById('story');
    const image_2 = document.getElementById('story_img');

    imageBlock_2.addEventListener('mouseover', function() {
        image_2.src = '{{ asset('img/hover_story.png') }}'; // Измените на путь к новому изображению
    });

    imageBlock_2.addEventListener('mouseout', function() {
        image_2.src = '{{ asset('img/story.png') }}'; // Измените на путь к исходному изображению
    });
</script>
