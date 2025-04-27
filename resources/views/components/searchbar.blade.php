<form action="/listings" method="GET" class="searchbar">
    <div class="search-group">
        <img src="{{ asset('images\lupe.svg') }}" alt="Lupe">
        <input type="text" name="search" placeholder="Was suchst du?" class=" search-input search-input-left">
        <img src="{{ asset('images\location.svg') }}" alt="Location">
        <input type="text" name="location" placeholder="PLZ oder Ort" class=" search-input">
        <button type="submit" class="search-button">Suchen</button>
    </div>
</form>