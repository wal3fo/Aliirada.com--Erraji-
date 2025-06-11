<footer class="footer">
    <div class="row align-items-center g-4">
        <div class="col-12 col-md-4 text-center text-md-start">
            <div class="footer-logo mb-4 mb-md-0">
                <img src="{{ asset('assets/illustrations/white_исходники.png') }}" class="img-fluid" alt="Footer Logo">
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="newsletter">
                <p class="text-center">Join our newsletter and unlock special deals, one-of-a-kind collabs, and
                    exclusive invites.</p>
                <div class="newsletter-form">
                    <input type="email" class="newsletter-input" placeholder="Your email address">
                    <button type="submit" class="newsletter-submit"><span>SIGN UP</span></button>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="social-links d-flex flex-wrap justify-content-center justify-content-md-start gap-3">
                <a class="link-emphasis d-flex align-items-center" href="#" aria-label="Instagram">
                    <span class="me-2">Instagram</span>
                    <img src="{{ asset('assets/illustrations/svg/instagram.svg') }}" alt="Instagram">
                </a>
                <a class="link-emphasis d-flex align-items-center" href="#" aria-label="Facebook">
                    <span class="me-2">Facebook</span>
                    <img src="{{ asset('assets/illustrations/svg/facebook.svg') }}" alt="Facebook">
                </a>
                <a class="link-emphasis d-flex align-items-center" href="#" aria-label="Whatsapp">
                    <span class="me-2">Whatsapp</span>
                    <img src="{{ asset('assets/illustrations/svg/whatsapp.svg') }}" alt="Whatsapp">
                </a>
                <a class="link-emphasis d-flex align-items-center" href="#" aria-label="Tiktok">
                    <span class="me-2">Tiktok</span>
                    <img src="{{ asset('assets/illustrations/svg/tiktok.svg') }}" alt="Tiktok">
                </a>
            </div>
        </div>
    </div>

    <div class="footer-copyright align-items-center justify-content-between">
        <div class="col-12 col-md-6">
            <span class="text-center text-md-start">© 2025 Company, Inc. All rights reserved.</span>
        </div>

        <div class="col-12 col-md-6">
            <div class="footer-conditions justify-content-end gap-4">
                <a wire:navigate href="{{ route('policies.sales') }}" class="footer-link-titulo">Terms &amp;
                    Conditions</a>
                <a class="footer-link-titulo" href="#">Cookies Policy</a>
            </div>
        </div>
    </div>
</footer>