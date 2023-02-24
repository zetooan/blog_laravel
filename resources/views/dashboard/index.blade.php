<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>{{ $hal }} | {{ auth()->user()->username }}</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/dashboard/">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}"> 
    <link rel="stylesheet" href="{{ asset('/css/dashboard.css') }}"> 
  </head>
  <body>
  
    @include('dashboard.header')
    @include('dashboard.sidebar')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      @yield('ini_isi')
    </main>




<script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('/js/dashboard.js') }}"></script>

  </body>
</html>
