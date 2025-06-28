<footer class="footer">
    <div class="row align-items-center g-4">
        <div class="col-12 col-md-4 text-center {{ session('Nexalang') === 'ar' ? 'text-md-end' : 'text-md-start' }}">
            <div class="footer-logo mb-4 mb-md-0">
                <img src="{{ asset('assets/illustrations/white_исходники.png') }}" class="img-fluid" alt="Footer Logo">
            </div>
        </div>

        <div class="col-12 col-md-4">
            <form wire:submit="signup" class="newsletter">
                <p class="text-center">
                    {!! $newsLetterNotification ?? __('messages.footer.newsletter') !!}
                </p>
                <div class="newsletter-form">
                    <input type="email" wire:model="newsLetterEmail" class="newsletter-input"
                        placeholder="{{ __('messages.footer.newsletter-placeholder') }}">
                    <button type="submit"
                        class="newsletter-submit"><span>{{ __('messages.footer.newsletter-button') }}</span></button>
                </div>
            </form>
        </div>

        <div class="col-12 col-md-4">
            <div class="social-links">
                <a class="link-emphasis" href="https://www.instagram.com/aliirada_brand/" target="_blank"
                    aria-label="Instagram">
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
                <span> {{ __('messages.footer.copyright') }}</span>
            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="footer-conditions gap-4">
                <a wire:navigate href="{{ route('policies.sales') }}">
                    {{ __('messages.footer.footer-terms') }}
                </a>
                <a href="#">
                    {{ __('messages.footer.footer-cookies') }}
                </a>
            </div>
        </div>
    </section>
</footer>