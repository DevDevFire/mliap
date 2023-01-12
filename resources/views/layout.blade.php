<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <!-- <link rel="stylesheet" href="/css/app.css"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/my.css') }}" rel="stylesheet">
    <script src="/js/app.js" defer></script>
    <!-- fontawesome kit -->
    <script src="https://kit.fontawesome.com/e9724ee049.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
      @include('header')
    </header>
    <div class="container body-container">
      @yield('content')
    </div>
    <footer class="footer bg-dark  fixed-bottom">
      @include('footer')
    </footer>
</body>
</html>