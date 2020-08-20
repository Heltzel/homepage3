<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="{{ asset('img/FavIcon.svg') }}" type="image/x-icon">
  <title>Marc Heltzel | @yield('title')</title>
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="{{ asset('js/calcAge.js') }}" defer></script>

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/cv.css') }}" rel="stylesheet">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600" rel="stylesheet">
</head>

<body>
  {{-- Display page on full load svg in combination with inline svg --}}


  <div id="page">
    @include('components.TheNavbar')
    <section>
      @yield('content')
    </section>
    @include('components.TheFooter')
  </div>

</body>

</html>