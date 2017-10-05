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
    <div id="app">
        <nav class="level">
          <p class="level-item has-text-centered">
            <a class="link is-info">Home</a>
          </p>
          <p class="level-item has-text-centered">
            <a class="link is-info">Menu</a>
          </p>
          <p class="level-item has-text-centered">
            <img src="http://bulma.io/images/bulma-type.png" alt="" style="height: 30px;">
          </p>
          <p class="level-item has-text-centered">
            <a class="link is-info">Reservations</a>
          </p>
          <p class="level-item has-text-centered">
            <a class="link is-info">Contact</a>
          </p>
        </nav>
    </div>
   <!-- no entiendo por que en la vista esto aparece dentro me confunde integre bulma desde npm pero igual no se como integrarlo :v -->
 @yield('content')

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
