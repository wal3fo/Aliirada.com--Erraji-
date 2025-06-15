<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    dir="{{ str_replace('_', '-', app()->getLocale()) === 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ Config::get('app.name') }}</title>

    <link rel="icon" href="{{ asset('assets/favicon.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/favicon.ico') }}" type="image/x-icon">

    <!-- Critical CSS -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/styles/custom.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/styles/fonts.css') }}">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap/bootstrap.min.css') }}">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/bootstrap/bootstrap-icons.min.css') }}">

    <!-- Trix Editor -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/trix/trix.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/tom-select/tom-select.min.css') }}">

    @livewireStyles
</head>

<body>
    <livewire:layouts.header />

    <div class="wrapper">
        {{ $slot }}
    </div>

    <livewire:layouts.footer />

    <livewire:layouts.finalize-orders />

    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendor/trix/trix.umd.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendor/tom-select/tom-select.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendor/bootstrap/bootstrap.bundle.min.js') }}"></script>

    @livewireScripts

    <script type="text/javascript">
        $(document).ready(function () {
            $('[data-bs-toggle="tooltip"]').tooltip();

            const initComponents = function () {
                $('select').each(function () {
                    if (!this.tomselect) {
                        new TomSelect(this, {
                            searchField: false,
                            create: false,
                            allowEmptyOption: true
                        });
                    }
                });
            };

            $(document).on('livewire:navigated', function () {
                setTimeout(initComponents, 5);
            });

            $(document).on('initComponents', function () {
                setTimeout(initComponents, 5);
            });

            initComponents();
        });
    </script>
</body>

</html>