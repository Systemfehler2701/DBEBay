@extends('layouts.app')
@section('title', 'DBEBay-Artikel anzeigen')
@section('content')
    <div class="listing-content">
        <div class="listing-container">

            {{-- Linke Seite: Bilder --}}
            <div class="thumbnails">
                @foreach($listing->images as $image)
                    <div class="thumbnail-img">
                        <img src="{{ asset('storage/listing_images/' . $image->image_path) }}"
                            onclick="document.getElementById('main-image').src='{{ asset('storage/listing_images/' . $image->image_path) }}'"
                            alt="Thumbnail">
                    </div>
                @endforeach
            </div>

            <div class="main-image">
                @if($listing->images->first())
                    <img id="main-image"
                        src="{{ asset('storage/listing_images/' . $listing->images->where('position', 0)->first()->image_path ?? $listing->images->first()->image_path) }}"
                        alt="Hauptbild">
                @else
                    <img id="main-image" src="{{ asset('images/placeholder.jpg') }}" alt="Kein Bild verfügbar">
                @endif
            </div>

            {{-- Rechte Seite: Verkäuferinfo --}}
            <div class="listing-container-right">
                <div class="seller">
                    <div class="seller-name">
                        <div class="seller-info">
                            <div class="seller-icon">
                                <img src="{{ asset('images\profile.svg') }}" alt="Profil">
                            </div>
                            <h3>Angeboten von:</h3>
                        </div>
                        <p>{{ $listing->customer->name }}</p>

                    </div>
                    <div class="seller-address">
                        <div class="seller-info">
                            <div class="seller-icon">
                                <img src="{{ asset('images\city.svg') }}" alt="City">
                            </div>
                            <h3>Adresse:</h3>
                        </div>
                        <p>{{ $listing->customer->address->street }} {{ $listing->customer->address->house_number }}</p>
                        <p>{{ $listing->customer->address->postal_code }} {{ $listing->customer->address->city }}</p>
                    </div>

                    <p>{{ $listing->customer->email }}</p>
                    <div class="selling-price">
                        <div class="seller-info">
                            <div class="seller-icon">
                                <img src="{{ asset('images\euro.svg') }}" alt="Euro">
                            </div>
                            <h3>Preis:</h3>
                        </div>
                        <p class="price">
                            {{ number_format($listing->price, 2) }} €
                        </p>
                    </div>
                </div>
                <form action="{{ route('favorites.store', $listing->id) }}" method="POST" class="inline-form">
                    @csrf
                    <button type="submit" class="favorite-btn">
                        <img src="{{ asset('images/heart-red.svg') }}" alt="Favoriten">
                        <p>Zu Favoriten hinzufügen</p>
                    </button>
                </form>

            </div>
        </div>

        {{-- Untere Infos --}}
        <div class="listing-details">
            <span>{{ $listing->name }}</span>

            <div class="meta-info">
                <div class="meta-info-text">
                    <img src="{{ asset('images\calender.svg') }}" alt="Euro">
                    <p>{{ $listing->created_at->format('d.m.Y') }}</p>
                </div>
                <div class="meta-info-text">
                    <img src="{{ asset('images\people.svg') }}" alt="Euro">
                    <p>{{ rand(1, 10) }} Person/en interessiert</p>
                </div>
                {{-- Demo Zahl --}}
            </div>

            <p class="description">
                {{ $listing->description }}
            </p>
        </div>
    </div>
@endsection