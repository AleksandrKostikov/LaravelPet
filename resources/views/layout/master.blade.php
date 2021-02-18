<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel - @yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">
    <style>
        .completed {
            text-decoration: line-through;
        }
        a {
            text-decoration: none;
        }
    </style>
</head>
<body>

    @include('layout.nav')

    <main class="container">
        <div class="row">

            @yield('content')

            @include('layout.sidebar')

        </div><!-- /.row -->
    </main><!-- /.container -->

    @include('layout.footer')

</body>
</html>
