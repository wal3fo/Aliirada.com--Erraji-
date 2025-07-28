<div class="wire-languages">
    <button
        class="btn bg-transparent fw-medium btn-sm {{ session('Nexalang') === 'ar' ? 'border-right' : 'border-left' }}"
        wire:click="toggleLanguages" wire:click.away="closeLanguages">
        @if(session('Nexalang') == 'en')
            <img src="https://hatscripts.github.io/circle-flags/flags/us.svg" width="24">
        @elseif(session('Nexalang') == 'fr')
            <img src="https://hatscripts.github.io/circle-flags/flags/fr.svg" width="24">
        @elseif(session('Nexalang') == 'ar')
            <img src="https://hatscripts.github.io/circle-flags/flags/eg.svg" width="24">
        @else
            <img src="https://hatscripts.github.io/circle-flags/flags/us.svg" width="24">
        @endif
    </button>

    <div
        class="dropdown-menu {{ $showLanguages ? 'd-block' : 'd-none' }} {{ session('Nexalang') === 'ar' ? 'text-start left-0' : 'text-end right-0' }}">
        <a href="#" class="dropdown-item" wire:click="changeLanguage('en')">
            <img src="https://hatscripts.github.io/circle-flags/flags/us.svg" width="24">
            {{ __('messages.header.lang.english') }}</a>
        <a href="#" class="dropdown-item" wire:click="changeLanguage('fr')">
            <img src="https://hatscripts.github.io/circle-flags/flags/fr.svg" width="24">
            {{ __('messages.header.lang.french') }}</a>
        <a href="#" class="dropdown-item" wire:click="changeLanguage('ar')">
            <img src="https://hatscripts.github.io/circle-flags/flags/eg.svg" width="24">
            {{ __('messages.header.lang.arabic') }}</a>
    </div>
</div>