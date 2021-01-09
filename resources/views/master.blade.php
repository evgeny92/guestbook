<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GuestBook with laravel8 and vue</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-findcond">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ route('home') }}">GuestBook</a>
                <a href="{{ route('sign') }}">Sign the GuestBook</a>
            </div>
            {{--<div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active">

                    </li>
                </ul>
            </div>--}}
        </div>
    </nav>
    @yield('content')
</div>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>