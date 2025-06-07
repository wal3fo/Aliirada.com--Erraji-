<footer class="footer">
    <div class="row align-items-center">
        <div class="col-12 col-md-4">
            <div class="footer-logo">
                <img src="{{ asset('assets/illustrations/white_исходники.png') }}">
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="newsletter">
                <p class="text-center">Join our newsletter and unlock special deals, one-of-a-kind collabs, and
                    exclusive
                    invites.</p>
                <div class="newsletter-form">
                    <input type="email" class="newsletter-input" placeholder="Your email address">
                    <button type="submit" class="newsletter-submit"><span>SIGN UP</span></button>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="social-links">
                <a class="link-emphasis" href="#" aria-label="Instagram">
                    <span>Instagram</span>
                    <img src="{{ asset('assets/illustrations/instagram.svg') }}">
                </a>
                <a class="link-emphasis" href="#" aria-label="Whatsapp">
                    <span>Whatsapp</span>
                    <img src="{{ asset('assets/illustrations/whatsapp.svg') }}">
                </a>
                <a class="link-emphasis" href="#" aria-label="Facebook">
                    <span>Facebook</span>
                    <img src="{{ asset('assets/illustrations/facebook.svg') }}">
                </a>
                <a class="link-emphasis" href="#" aria-label="Tiktok">
                    <span>Tiktok</span>
                    <img src="{{ asset('assets/illustrations/tiktok.svg') }}">
                </a>
            </div>
        </div>
    </div>

    <div class="footer-copyright">
        <span>© 2025 Company, Inc. All rights reserved.</span>

        <div class="footer-conditions">
            <a wire:navigate href="{{ route('policies.sales') }}" class="footer-link-titulo">Terms &amp; Conditions</a>
            <a class="footer-link-titulo" href="#">Cookies Policy</a>
        </div>
    </div>
</footer>