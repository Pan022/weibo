<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', 'Weibo App') - Laravel 入门教程</title>
<<<<<<< HEAD
    <link rel="stylesheet" href="/css/app.css">
=======
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
>>>>>>> filling-layout-style
  </head>

  <body>
<<<<<<< HEAD

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="/">Weibo App</a>
        <ul class="navbar-nav justify-content-end">
          <li class="nav-item"><a class="nav-link" href="/help">帮助</a></li>
          <li class="nav-item" ><a class="nav-link" href="#">登录</a></li>
        </ul>
      </div>
    </nav>

    <div class="container">
      @yield('content')
=======
    @include('layouts._header')

    <div class="container">
      <div class="offset-md-1 col-md-10">
        @yield('content')
        @include('layouts._footer')
      </div>
>>>>>>> filling-layout-style
    </div>
  </body>
</html>

