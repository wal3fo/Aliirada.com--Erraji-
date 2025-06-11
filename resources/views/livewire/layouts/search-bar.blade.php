<div class="wire-categories">
    <div class="nav-link" wire:navigate wire:click="toggleSearch" wire:click.away="hideSearch">Search</div>

    <div class="dropdown-menu rounded-top-0 shadow-none overflow-hidden d-{{ $showSearch ? 'block' : 'none' }} position-absolute">
        <input type="text" class="form-control" placeholder="Search">
    </div>
</div>