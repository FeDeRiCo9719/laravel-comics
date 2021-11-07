<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>@yield('title') | Official Website</title>
</head>
<body>

    <!-- HEADER include -->
    @include('partials.header')
    
    <!-- MAIN yeld -->
    <main>
    @yield('content')
    </main>

    <!-- FOOTER include -->
    @include('partials.footer')
    
</body>
</html>