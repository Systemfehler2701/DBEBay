@extends('layouts.app')
@section('title', 'DBEBay-Artikel bearbeiten')
@section('content')
    <h1>Artikel bearbeiten</h1>
    <form action="{{ route('listings.update', $listing->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Name:</label>
        <input type="text" name="name" value="{{ $listing->name }}" required>
        <label>Beschreibung:</label>
        <textarea name="description" required>{{ $listing->description }}</textarea>
        <label>Preis:</label>
        <input type="number" step="0.01" name="price" value="{{ $listing->price }}" required>
        <button type="submit">Speichern</button>
    </form>
    <a href="{{ route('listings.index') }}">Zurück</a>
@endsection