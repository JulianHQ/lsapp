<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('inc.navbar')

        <main class="py-4">
          <div class="container">
            @include('inc.messages')

            @yield('content')
          </div>
        </main>
    </div>

    {{-- Default way (initiate by name or id) : --}}
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
      CKEDITOR.replace( 'article-ckeditor' );
    </script>


    {{-- Or if you want to initiate by jQuery selector : --}}
    {{-- <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
    <script>
      $('textarea').ckeditor();
      // $('.textarea').ckeditor(); // if class is prefered.
    </script> --}}
</body>
</html>
