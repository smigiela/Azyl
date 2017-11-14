<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
<!-- navigation - view on all pages -->
    @include('_inc.nav.main')

<!-- slider - only on main page -->
    @if(Request::is('/'))
      @include('_inc.home.slider')
    @endif

<!-- about - only on main page -->
    @if(Request::is('/'))
      @include('_inc.home.about')
    @endif

<!-- adoption - only on main page -->
    @if(Request::is('/'))
      @include('_inc.home.adoption')
    @endif

<!-- dynamic content -->
    <div id="app">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
