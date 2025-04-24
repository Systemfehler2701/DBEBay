<footer>
    <div class="footer-content">
        <img class="logo-img" src="{{ asset('images\logo.svg') }}" alt="Logo">
        <div class="unternehmen">
            <h2>Unternehmen</h2>
            <nav>
                <a href="#">Über uns</a>
                <a href="#">Karriere</a>
                <a href="#">Newsletter</a>
                <a href="#">Hilfebereich</a>
            </nav>
        </div>
        <div class="rechtliches">
            <h2>Rechtliches</h2>
            <nav>
                <a href="#">Impressum</a>
                <a href="#">Datenschutz</a>
                <a href="#">AGBs</a>
            </nav>
        </div>

        <div class="social-media">
            <h2>Social Media</h2>
            <nav class="nav-img">
                <a href="#"><img src="{{ asset('images\instagram.svg') }}" alt="Instagram"></a>
                <a href="#"><img src="{{ asset('images\facebook.svg') }}" alt="Facebook"></a>
                <a href="#"><img src="{{ asset('images\youtube.svg') }}" alt="YouTube"></a>
                <a href="#"><img src="{{ asset('images\tiktok.svg') }}" alt="TikTok"></a>
            </nav>
            <p>&copy; {{ date('Y') }} DBEbay. Alle Rechte vorbehalten.</p>
        </div>
    </div>
</footer>