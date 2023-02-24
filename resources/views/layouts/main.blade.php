<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zetoo | {{ $hal }}</title>
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}"> 
    <link rel="stylesheet" href="{{ asset('/css/custo.css') }}"> 
</head>
<body>
    @include('partials.navbar')
    <div class="container margin-atas bag-isi">
        @yield('isi')
    </div> 
    @include('partials.footer')
    <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>