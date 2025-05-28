<aside class="navbar navbar-vertical navbar-expand-lg">
    <div class="container-fluid">
        <button class="navbar-toggler collapsed me-auto" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu"
            aria-controls="sidebar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="material-icons menuOpen">apps</span>
            <span class="material-icons menuClose">menu_open</span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark">
            <a wire:navigate href="{{ url('.') }}" class="text-decoration-none fw-bolder">
                <h1 class="tracking-wide fw-bolder m-0">
                    <span class="text-nexa">NEXA</span>
                    <span>.CRM</span>
                </h1>
                <small class="d-flex align-items-center gap-1 fs-6 text-decoration-underline">
                    <span class="tracking-wide">@lang('messages.id'):</span>
                    <span class="tracking-wide fw-bold">{{ $UserDashboard }}</span>
                </small>
            </a>
        </h1>
        <div class="collapse navbar-collapse mt-2" id="sidebar-menu">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ App\Models\Functions::routeGetter('dashboard') }}" wire:navigate
                        href="{{ url('.') }}">
                        <span class="nav-link-icon material-icons">apps</span>
                        <span class="nav-link-title">
                            @lang('messages.categories.dashboard')
                        </span>
                    </a>
                </li>

                <div class="nav-header-text">
                    <span>Billing & Finance</span>
                </div>
                @if (App\Models\Functions::accessValidator('Invoices'))
                <li class="nav-item">
                    <a class="nav-link {{ App\Models\Functions::routeGetter('authority.invoices') }}" wire:navigate
                        href="{{ url('authority/invoices') }}">
                        <span class="nav-link-icon material-icons">payments</span>
                        <span class="nav-link-title">
                            @lang('messages.categories.invoices')
                        </span>
                    </a>
                </li>
                @endif

                @if (App\Models\Functions::accessValidator('Subscriptions'))
                <li class="nav-item">
                    <a class="nav-link {{ App\Models\Functions::routeGetter('authority.subscriptions') }}" wire:navigate
                        href="{{ url('authority/subscriptions') }}">
                        <span class="nav-link-icon material-icons">card_membership</span>
                        <span class="nav-link-title">
                            @lang('messages.categories.subscriptions')
                        </span>
                    </a>
                </li>
                @endif

                <div class="nav-header-text">
                    Business Entities
                </div>
                @if (App\Models\Functions::accessValidator('Contacts'))
                <li class="nav-item">
                    <a class="nav-link {{ App\Models\Functions::routeGetter('authority.contacts') }}" wire:navigate
                        href="{{ url('authority/contacts') }}">
                        <span class="nav-link-icon material-icons">contacts</span>
                        <span class="nav-link-title">
                            @lang('messages.categories.contacts')
                        </span>
                    </a>
                </li>
                @endif

                @if (App\Models\Functions::accessValidator('Companies'))
                <li class="nav-item">
                    <a class="nav-link {{ App\Models\Functions::routeGetter('authority.companies') }}" wire:navigate
                        href="{{ url('authority/companies') }}">
                        <span class="nav-link-icon material-icons">apartment</span>
                        <span class="nav-link-title">
                            @lang('messages.categories.companies')
                        </span>
                    </a>
                </li>
                @endif

                <div class="nav-header-text">
                    Sales & Marketing
                </div>
                @if (App\Models\Functions::accessValidator('Campaigns'))
                <li class="nav-item">
                    <a class="nav-link {{ App\Models\Functions::routeGetter('authority.campaigns') }}" wire:navigate
                        href="{{ url('authority/campaigns') }}">
                        <span class="nav-link-icon material-icons">campaign</span>
                        <span class="nav-link-title">
                            @lang('messages.categories.campaigns')
                        </span>
                    </a>
                </li>
                @endif

                @if (App\Models\Functions::accessValidator('Stocks'))
                <li class="nav-item d-none">
                    <a class="nav-link {{ App\Models\Functions::routeGetter('authority.finance') }}" wire:navigate
                        href="{{ url('#') }}">
                        <span class="nav-link-icon material-icons">inventory</span>

                        <span class="nav-link-title">
                            @lang('messages.categories.stocks')
                        </span>
                    </a>
                </li>
                @endif

                <div class="nav-header-text">
                    Project Management
                </div>
                @if (App\Models\Functions::accessValidator('Users'))
                <li class="nav-item">
                    <a class="nav-link {{ App\Models\Functions::routeGetter('authority.users') }}" wire:navigate
                        href="{{ url('authority/users') }}">
                        <span class="nav-link-icon material-icons">diversity_3</span>
                        <span class="nav-link-title">
                            @lang('messages.categories.teamwork')
                        </span>
                    </a>
                </li>
                @endif

                @if (App\Models\Functions::accessValidator('Kanban'))
                <li class="nav-item">
                    <a class="nav-link {{ App\Models\Functions::routeGetter('authority.kanbanboard') }}" wire:navigate
                        href="{{ url('authority/kanbanboard') }}">
                        <span class="nav-link-icon material-icons">view_kanban</span>
                        <span class="nav-link-title">
                            @lang('messages.categories.kanban')
                        </span>
                    </a>
                </li>
                @endif

                @if (App\Models\Functions::accessValidator('NexaSettings'))
                <li class="nav-item">
                    <a class="nav-link {{ App\Models\Functions::routeGetter('authority.settings') }}" wire:navigate
                        href="{{ url('authority/system/settings') }}">
                        <span class="nav-link-icon material-icons">storage</span>
                        <span class="nav-link-title">
                            @lang('messages.categories.systemsettings')
                        </span>
                    </a>
                </li>
                @endif

                <li class="nav-item mt-auto align-items-center">
                    @if($UserConnected->permissions->Name === 'Director' && $UserConnected->NexaJob !== 1)
                    <div class="border-white p-2">
                        <div class="d-flex flex-column align-items-center text-center mb-2">
                            <span class="material-icons material-alerticon text-warning mb-2">workspace_premium</span>
                            <h5 class="fw-normal text-white m-0">Unlock premium features and enhance your experience</h5>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a wire:navigate href="{{ url('authority/upgrade') }}" class="btn btn-warning d-flex align-items-center gap-1">
                                <span class="material-icons">bolt</span>
                                <span class="tracking-wide">UPGRADE</span>
                            </a>
                        </div>
                    </div>
                    @endif
                </li>


                <li class="nav-item mt-auto">
                    <div class="nav-link d-flex align-items-center justify-content-between border-0">
                        <div class="d-flex align-items-center gap-2">
                            <span
                                class="avatar avatar-sm">{{ App\Models\Functions::getInitials($UserConnected->Name) }}</span>
                            <div class="d-flex flex-column gap-0">
                                <a wire:navigate href="{{ url('authority/settings') }}" class="tracking-wide fw-bold text-truncate cursor-default">{{ $UserConnected->Name }}</a>
                                <small class="cursor-default">
                                    <span class="badge bg-{{ $UserConnected->permissions->Color }}"></span>
                                    {{ $UserConnected->permissions->Name }}
                                </small>
                            </div>
                        </div>
                        <button wire:click=" destroySession" class="btn btn-icon border-0">
                            <span class="material-icons fw-bold">power_settings_new</span>
                        </button>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</aside>