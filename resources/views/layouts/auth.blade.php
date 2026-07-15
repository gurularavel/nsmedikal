<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    @include('backend.includes.meta')
    @include('backend.includes.styles')
    @stack('styles')
</head>
<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    <div class="d-flex flex-column flex-root">
        @yield('content')
    </div>
    @include('backend.includes.scripts')
    @include('backend.includes.alert')
    @stack('scripts')
</body>
</html>
