@extends('layouts.app')
@section('content')
    <div class="auth-wrapper">
        <div class="auth-container">
            <div class="auth-headline">
                <h2>Erstelle ein Konto</h2>
                <span>Jetzt kostenlos Registrieren und direkt loslegen!</span>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="auth-content">
                    <div class="auth-userinfo">
                        <div class="auth-userinfo-left">
                            <div class="auth-input-section">
                                <label for="firstname"><img src="{{ asset('images\profile-green.svg') }}"
                                        alt="Vorname"></label>
                                <input class="auth-input" type="text" name="firstname" required placeholder="Vorname">
                            </div>
                            <div class="auth-input-section">
                                <label for="lastname"><img src="{{ asset('images\profile-green.svg') }}"
                                        alt="Nachname"></label>
                                <input class="auth-input" type="text" name="lastname" required placeholder="Nachname">
                            </div>
                            <div class="auth-input-section">
                                <label for="email"><img src="{{ asset('images\mail.svg') }}" alt="E-Mail"></label>
                                <input class="auth-input" type="email" name="email" required placeholder="E-Mail">
                            </div>
                            <div class="auth-input-section">
                                <label for="username"><img src="{{ asset('images\profile-green.svg') }}"
                                        alt="Benutzername"></label>
                                <input class="auth-input" type="text" name="username" required placeholder="Benutzername">
                            </div>
                            <div class="auth-input-section">
                                <label for="password"><img src="{{ asset('images\unlock.svg') }}" alt="Passwort"></label>
                                <input class="auth-input" type="password" name="password" minlength="8" required
                                    placeholder="Passwort">
                            </div>
                        </div>
                        <div class="auth-userinfo-right">
                            <div class="auth-input-section">
                                <label for="street"><img src="{{ asset('images\home.svg') }}" alt="Adresse"></label>
                                <div class="auth-input">
                                    <input type="text" name="street" required placeholder="Strasse">
                                    <label for="house_number"></label>
                                    <input type="number" name="house_number" required placeholder="Hausnummer">
                                </div>
                            </div>
                            <div class="auth-input-section">
                                <label for="postal_code"><img src="{{ asset('images\home.svg') }}" alt="Adresse"></label>
                                <div class="auth-input">
                                    <input type="number" name="postal_code" required placeholder="PLZ">
                                </div>
                                <div class="auth-input city">
                                    <label for="city"></label>
                                    <input type="text" name="city" required placeholder="Ort">
                                </div>
                            </div>
                            <div class="auth-input-section">
                                <label for="mobile"><img src="{{ asset('images\phone.svg') }}" alt="Rufnummer"></label>
                                <input class="auth-input" type="text" name="mobile" required placeholder="Rufnummer">
                            </div>
                            <div class="auth-input-section auth-password">
                                <label for="password_confirmation"><img src="{{ asset('images\unlock.svg') }}"
                                        alt="Passwort"></label>
                                <input class="auth-input" type="password" name="password_confirmation" minlength="8"
                                    required placeholder="Passwort bestätigen">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="auth-button">
                    <button type="submit">Jetzt registrieren!</button>
                </div>
            </form>
        </div>

    </div>
@endsection