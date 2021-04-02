<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<div id="app">
    <div style="background-color: #f8f9fa;">
        <nav class="navbar navbar-expand-lg navbar-light bg-light container">
            <a href="http://teamprodev.com" target="_blank"><img src="images/note.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                    aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @php $locale = session()->get('locale'); @endphp
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            @switch($locale)
                                @case('en')
                                <img src="images/uk.png" class="rounded-sm" style="width: 15px">
                                English
                                @break
                                @case('ru')
                                <img src="images/ru.png" class="rounded-sm" style="width: 15px">
                                Russian
                                @break
                                @case('uz')
                                <img src="images/uzb.png" class="rounded-sm" style="width: 15px">
                                Uzbek
                                @break
                                @default
                                 <img src="images/uk.png" class="rounded-sm" style="width: 15px">
                               English
                            @endswitch
                            <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="lang/en"><img src="images/uk.png" class="rounded-sm" style="width: 15px"> English</a>
                            <a class="dropdown-item" href="lang/ru"><img src="images/ru.png" class="rounded-sm" style="width: 15px"> Russian</a>
                            <a class="dropdown-item" href="lang/uz"><img src="images/uzb.png" class="rounded-sm" style="width: 15px"> Uzbek</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <main class="py-4">
        @yield('content')
    </main>
</div>
<footer>
    
</footer>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>