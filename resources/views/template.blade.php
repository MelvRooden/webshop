<!DOCTYPE html>
<html>
<head>

    <title>@yield('title', 'Webshop')</title>

</head>
<body>

    <nav>
        <ul>
            <?php
                foreach($categories as $category) {
                    echo '<li><a href=' . '/' . $category . '>' . $category->name . '<a></li>';
                }
            ?>
        </ul>
    </nav>

    @yield('headTitle', 'Webshop')

    @yield('content')

</body>
</html>
