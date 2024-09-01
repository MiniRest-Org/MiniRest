<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
<header>
    @yield('header')
</header>
<main>
    @yield('content')
</main>
@yield('js')
<footer>
    @yield('footer')
</footer>
</body>
</html>
