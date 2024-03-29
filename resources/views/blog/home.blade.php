<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Websis - Blog</title>
    
    <link rel="shortcut icon" href="favicon.ico">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/blog.min.css') }}" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>
    @include('blog.menu')

    @yield('content')

    <hr>

    @include('blog.footer')

    <script src="{{ asset('js/modernizr.js') }} "></script>
    <script src="{{ asset('js/bootstrap.min.js') }} "></script>
    <script src="{{ asset('js/blog.min.js') }} "></script>

</body>

</html>
