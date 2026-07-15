<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    @include('backend.includes.meta')
    @include('backend.includes.styles')
    @stack('styles')
</head>
<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    @include('backend.includes.mobile')
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-row flex-column-fluid page">
            @include('backend.includes.sidebar')
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                @include('backend.includes.header')
                @yield('content')
                @include('backend.includes.footer')
            </div>
        </div>
    </div>
    @include('backend.includes.user')
    @include('backend.includes.scripts')
    @include('backend.includes.alert')
    @stack('scripts')
</body>
</html>
