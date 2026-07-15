<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" lang="{{ config('app.locale') }}" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://ogp.me/ns/fb#">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" lang="{{ config('app.locale') }}" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://ogp.me/ns/fb#">
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html lang="{{ config('app.locale') }}" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://ogp.me/ns/fb#">
<!--<![endif]-->
<head>
    @include('frontend.includes.meta')
    @include('frontend.includes.styles')
    @stack('styles')
</head>
<body>
<div id="page" class="layout-fullwidth header-style-3">
    <div id="lazy-loading-point"></div>
    @include('frontend.includes.header')
    @yield('content')
    @include('frontend.includes.footer')
</div>
@include('frontend.includes.scripts')
@stack('scripts')
</body>
</html>
