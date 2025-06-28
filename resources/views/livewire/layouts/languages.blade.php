<div class="wire-languages">
    <button class="btn bg-transparent fw-medium btn-sm {{ session('Nexalang') === 'ar' ? 'border-right' : 'border-left' }}"
        wire:click="toggleLanguages">
        @if(session('Nexalang') == 'en')
            {{ __('messages.header.lang.en') }}
        @elseif(session('Nexalang') == 'fr')
            {{ __('messages.header.lang.fr') }}
        @elseif(session('Nexalang') == 'ar')
            {{ __('messages.header.lang.ar') }}
        @else
            {{ __('messages.header.lang.en') }}
        @endif
    </button>

    <div class="dropdown-menu {{ $showLanguages ? 'd-block' : 'd-none' }} {{ session('Nexalang') === 'ar' ? 'text-start left-0' : 'text-end right-0' }}">
        <a href="#" class="dropdown-item" wire:click="changeLanguage('en')">
            {{ __('messages.header.lang.english') }}</a>
        <a href="#" class="dropdown-item" wire:click="changeLanguage('fr')"> {{ __('messages.header.lang.french') }}</a>
        <a href="#" class="dropdown-item" wire:click="changeLanguage('ar')"> {{ __('messages.header.lang.arabic') }}</a>
    </div>
</div>