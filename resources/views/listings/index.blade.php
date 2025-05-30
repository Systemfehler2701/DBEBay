@extends('layouts.app')
@section('title', 'DBEBay-Artikelliste')
@section('content')
    <div class="listings-wrapper">
        <h2>Alle Angbote</h2>
        <div class="listings-container">
            @forelse ($listings as $listing)
                <x-listing-card :listing="$listing" />
            @empty
                <p> Es gibt leider keine Anzeigen.</p>
            @endforelse
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        </div>
    </div>
@endsection