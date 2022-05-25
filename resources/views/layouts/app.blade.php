<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Yokhone Club Dashboard - {{$title ?? "" }}</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('logo/logo2.png') }}">
</head>

@include('layouts.includes.style')
@include('layouts.includes.alert')

<body>

    <div class="main-wrapper">

        @include('layouts.includes.nav')

        @include('layouts.includes.sidebar')

        <div class="page-wrapper">
            @yield('content')
        </div>
    </div>
    @include('layouts.includes.notification')

    <!-- Right Side Of Navbar -->
    <ul class="navbar-nav ml-auto">
        @if(count(config('app.languages')) > 1)
            <li class="nav-item dropdown d-md-down-none">
                <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    {{ strtoupper(app()->getLocale()) }}
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    @foreach(config('app.languages') as $langLocale => $langName)
                        <a class="dropdown-item" href="{{ url()->current() }}?change_language={{ $langLocale }}">{{ strtoupper($langLocale) }} ({{ $langName }})</a>
                    @endforeach
                </div>
            </li>
        @endif
    </div>
    

</body>
@include('layouts.includes.script')

</html>