<header>
    <a href="{{ route('listings.index') }}"><img class="logo-img" src="{{ asset('images\logo.svg') }}" alt="Logo"></a>
    @include('components.searchbar')
    <nav class="nav-img">
        <a href="{{ route('listings.create') }}"><img src="{{ asset('images\profile.svg') }}" alt="Profil"></a>
        <a href="{{ route('listings.create') }}"><img src="{{ asset('images\create_listing.svg') }}"
                alt="Angebot erstellen"></a>
        <a href="{{ route('listings.create') }}"><img src="{{ asset('images\heart.svg') }}" alt="Favoriten"></a>
    </nav>
</header>