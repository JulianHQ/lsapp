<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <title>{{ config('app.name', '404 Default Not Found') }}</title>
</head>
<body>
  @include('inc.navbar')

  <div class="container">
    @include('inc.messages')

    @yield('content')
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
