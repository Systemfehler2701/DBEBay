@extends('layouts.app')
@section('title', 'DBEBay-Artikel anzeigen')
@section('content')
    <h1>{{ $listing->name }}</h1>
    <p>{{ $listing->description }}</p>
    <p>Preis: {{ number_format($listing->price, 2) }} €</p>
    <a href="{{ route('listings.index') }}">Zurück zur Übersicht</a>
@endsection