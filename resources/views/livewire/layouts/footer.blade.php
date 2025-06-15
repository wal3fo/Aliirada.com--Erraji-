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
            <div class="social-links">
                <a class="link-emphasis" href="https://www.instagram.com/aliirada_brand/" target="_blank" aria-label="Instagram">
                    <span>Instagram</span>
                    <img src="{{ asset('assets/illustrations/svg/instagram.svg') }}" alt="Instagram">
                </a>    
                <a class="link-emphasis" href="https://wa.me/6281234567890" target="_blank" aria-label="Whatsapp">
                    <span>Whatsapp</span>
                    <img src="{{ asset('assets/illustrations/svg/whatsapp.svg') }}" alt="Whatsapp">
                </a>
                <a class="link-emphasis" href="https://www.tiktok.com/@chup.reda" target="_blank" aria-label="Tiktok">
                    <span>Tiktok</span>
                    <img src="{{ asset('assets/illustrations/svg/tiktok.svg') }}" alt="Tiktok">
                </a>
            </div>
        </div>
    </div>

    <section class="copyright">
        <div class="col-12 col-md-6">
            <div class="footer-copyright">
                <span>© 2025 Company, Inc. All rights reserved.</span>
            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="footer-conditions gap-4">
                <a wire:navigate href="{{ route('policies.sales') }}" class="footer-link-titulo">Terms &amp;
                    Conditions</a>
                <a class="footer-link-titulo" href="#">Cookies Policy</a>
            </div>
        </div>
    </section>
</footer>