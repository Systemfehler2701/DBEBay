<form action="/listings" method="GET" class="searchbar">
    <div class="search-group">
        <img src="{{ asset('images\lupe.svg') }}" alt="Lupe"></a>
        <input type="text" name="search" placeholder="Was suchst du?" class="search-input">
        <img src="{{ asset('images\location.svg') }}" alt="Location"></a>
        <input type="text" name="location" placeholder="PLZ oder Ort" class="search-input">
        <button type="submit" class="search-button">Suchen</button>
    </div>
</form>