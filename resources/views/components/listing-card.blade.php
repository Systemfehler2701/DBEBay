<div class="card">
    <a href="{{ route('listings.show', $listing->id) }}">
        <div class="card-head">
            <img src="{{ asset('storage/listing_images/' . $listing->cover_image_path) }}" alt="Artikelbild"
                class="card-img">
        </div>
        <div class="card-body">
            <h2 class="card-title">{{ $listing->name }}</h2>
            <div class="card-info">
                <div class="card-location">
                    <img class="location-icon" src="{{ asset('images\location.svg') }}" alt="Location">
                    <span>{{ optional($listing->customer->address)->city ?? 'Unbekannt' }}</span>
                </div>
                <div class="card-price">
                    <p>Preis: {{ number_format($listing->price, 2) }} €</p>
                </div>
            </div>

        </div>
    </a>
</div>