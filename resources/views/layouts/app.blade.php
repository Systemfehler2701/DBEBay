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
    @vite(['resources/css/login.css'])
    @vite(['resources/css/register.css'])
    @vite(['resources/css/listing-card.css'])
    @vite(['resources/css/flash-messages.css'])
    @vite(['resources/css/listing-details.css'])
</head>

<body>
    <x-flash-message></x-flash-message>
    @include('layouts.header')
    <main>
        @yield('content')
    </main>
    @include('layouts.footer')
</body>

</html>