<!doctype html>
<html {!! Theme::htmlAttributes() !!}>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {!! Theme::partial('css-variable-declare') !!}

    {!! Theme::header() !!}
</head>

<body {!! Theme::bodyAttributes() !!} >
    
    <a href="https://wa.me/994559281010?text=Salam%2C%20məlumat%20almaq%20istəyirəm"
   target="_blank"
   style="
      position: fixed;
      bottom: 20px;
      right: 20px;
      width: 60px;
      height: 60px;
      background: #25D366;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 4px 12px rgba(0,0,0,0.25);
      z-index: 9999;
      text-decoration: none;
   ">
   <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" viewBox="0 0 24 24">
      <path d="M20.52 3.48A11.86 11.86 0 0 0 12.06 0C5.45 0 .06 5.39.06 12c0 2.11.55 4.17 1.59 6L0 24l6.19-1.62A11.94 11.94 0 0 0 12.06 24c6.61 0 12-5.39 12-12 0-3.2-1.25-6.21-3.54-8.52zM12.06 21.82c-1.79 0-3.54-.48-5.08-1.38l-.36-.21-3.67.96.98-3.58-.23-.37A9.77 9.77 0 0 1 2.24 12c0-5.41 4.41-9.82 9.82-9.82 2.62 0 5.08 1.02 6.93 2.89A9.73 9.73 0 0 1 21.88 12c0 5.41-4.41 9.82-9.82 9.82zm5.39-7.36c-.29-.14-1.74-.86-2.01-.96-.27-.1-.47-.14-.67.14-.19.29-.77.96-.94 1.15-.17.19-.34.22-.63.07-.29-.14-1.22-.45-2.32-1.43-.86-.76-1.43-1.69-1.6-1.98-.17-.29-.02-.45.13-.59.13-.13.29-.34.43-.5.14-.17.19-.29.29-.48.1-.19.05-.36-.02-.5-.07-.14-.67-1.62-.92-2.22-.24-.58-.48-.5-.67-.51h-.57c-.19 0-.5.07-.77.36-.27.29-1.03 1.01-1.03 2.46s1.05 2.86 1.2 3.05c.14.19 2.05 3.13 4.96 4.39.69.29 1.23.46 1.65.59.69.22 1.31.19 1.8.12.55-.08 1.74-.71 1.98-1.39.24-.67.24-1.25.17-1.39-.07-.12-.27-.19-.57-.34z"/>
   </svg>
</a>

<a href="#" title="{{ __('Back to top') }}" class="scroll__top scroll-to-target" data-target="html">
    <x-core::icon name="ti ti-chevron-up"/>
</a>

{!! apply_filters(THEME_FRONT_BODY, null) !!}

{!! Theme::partial('header') !!}

<main class="fix">
    @yield('content')
</main>

<script>
    'use strict';

    window.siteConfig = {};
</script>

{!! Theme::partial('footer') !!}

{!! Theme::footer() !!}
</body>
</html>

