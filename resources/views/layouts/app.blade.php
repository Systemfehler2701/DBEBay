<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'DBEBay')</title>
    @vite(['resources/css/app.css'])
    @vite(['resources/css/header.css'])
    @vite(['resources/css/footer.css'])
    @vite(['resources/css/searchbar.css'])
</head>

<body>
    @include('layouts.header')
    <main>
        @yield('content')
    </main>
    @include('layouts.footer')
</body>

</html>