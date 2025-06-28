<div>
    @if($showPopup)
        <div class="location-popup-overlay z-index-1000" wire:click.self="$toggle('showPopup')">
            <div class="location-popup-container">
                <div class="location-popup-header">
                    <h5>{{ __('messages.locations.select') }} ({{ count($filteredLocations) }})</h5>
                    <button type="button" class="btn-close" wire:click="$toggle('showPopup')"></button>
                </div>

                <div class="location-popup-search">
                    <input type="text" class="form-control" wire:model.live="search" placeholder="Search locations...">
                </div>

                <div class="location-popup-content">
                    <div class="location-grid">
                        @if(count($filteredLocations) > 0)
                            @foreach($filteredLocations as $location)
                                <div class="location-item">
                                    <button class="btn btn-outline-dark btn-sm w-100"
                                        wire:click="selectLocation('{{ $location->City }}')">
                                        {{ $location->City }}
                                    </button>
                                </div>
                            @endforeach
                        @else
                            <div class="location-empty">
                                <p>{{ __('messages.locations.nolocationfound') }}</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>