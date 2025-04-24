<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'DBEBay')</title>
</head>

<body>
    @include('layouts.header')
    <header>
        <nav>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>
    @include('layouts.footer')
    <footer>
    </footer>
</body>

</html>