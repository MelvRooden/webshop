<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Webshop')</title>

</head>
<body>

@yield('title')

<ul>
    <li><a href="/">Home</a></li>
    <li><a href="/create">Register</a></li>
    <li><a href="/profile">Register</a></li>
</ul>

@yield('content')

</body>
</html>