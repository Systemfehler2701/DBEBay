@extends('layouts.app')
@section('title', 'DBEBay-Artikelliste')
@section('content')
    <h1>Artikelliste</h1>
    <a href="{{ route('listings.create') }}">Neue Anzeige erstellen</a>
    @foreach ($listings as $listing)
        <div>
            <h2><a href="{{ route('listings.show', $listing->id) }}">{{ $listing->name }}</a></h2>
            <p>{{ $listing->description }}</p>
            <p>Preis: {{ number_format($listing->price, 2) }} €</p>
            <a href="{{ route('listings.edit', $listing->id) }}">Bearbeiten</a>
            <form action="{{ route('listings.destroy', $listing->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Löschen</button>
            </form>
        </div>
    @endforeach
@endsection