@extends('layouts.app')
@section('content')
    <div class="login-wrapper">
        <div class="login-container">
            <div class="login-headline">
                <h2>Anmelden</h2>
                <span>Finde dein nächstes Lieblingsprodunkt oder verkaufe einfach & schnell!</span>
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="login-content">
                    <div class="login-input-section">
                        <label for="email"><img src="{{ asset('images\mail.svg') }}" alt="E-Mail"></label>
                        <input class="login-input" type="email" name="email" required placeholder="E-Mail">
                    </div>
                    <div class="login-input-section">
                        <label for="password"><img src="{{ asset('images\unlock.svg') }}" alt="Passwort"></label>
                        <input class="login-input" type="password" name="password" minlength="8" required
                            placeholder="Passwort">
                    </div>
                </div>
                <div class="login-button">
                    <button type="submit">Anmelden</button>
                </div>
            </form>
            <span class="login-footer">Noch kein Konto?<a href="#">Jetzt Registrieren</a></span>
        </div>
    </div>
@endsection