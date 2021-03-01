<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DiGi Solution</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="{{url('assets/framework/bootstrap4/bootstrap.min.css')}}">
    <style>
        body {
            font-family: 'Sarabun', sans-serif;
            background-color: #e5e3e3;
        }
    </style>
    @stack('css')
    @yield('css')
</head>

<body>
    @yield('content')
    @stack('js')
    @yield('js')
</body>

</html>
