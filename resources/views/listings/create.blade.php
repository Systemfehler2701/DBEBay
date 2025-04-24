@extends('layouts.app')
@section('title', 'DBEBay-Neue Anzeige erstellen')
@section('content')
    <h1>Neue Anzeige erstellen</h1>
    <form action="{{ route('listings.store') }}" method="POST">
        <input type="hidden" name="customer_id" value="1">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" required>
        <label>Beschreibung:</label>
        <textarea name="description" required></textarea>
        <label>Preis:</label>
        <input type="number" step="0.01" name="price" required>
        <button type="submit">Erstellen</button>
    </form>
    <a href="{{ route('listings.index') }}">Zurück</a>
@endsection