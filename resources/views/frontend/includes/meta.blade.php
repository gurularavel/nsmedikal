<!-- Basic metas
    ======================================== -->
<meta name="description" content="@yield('description')">
<meta name="keywords" content="@yield('keywords')">
<meta name="author" content="{{ config('company.name', 'Kvadrat MMC') }}">
<meta name='robots' content='max-image-preview:large'/>

<!-- Mobile specific metas
    ======================================== -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta charset="utf-8">

<!--  CSRF token meta
    ======================================== -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Favicon metas
    ======================================== -->
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

<!-- Social share metas
    ======================================== -->
<meta property="og:image" content="@yield('og-image', asset('logo.png'))"/>
<meta property="og:title" content="@yield('title', isset($title) ? $title . ' | '. config('app.name', 'Laravel') : '')"/>
<meta property="og:description" content="@yield('description', config('meta.description'))"/>
<meta property="og:locale" content="az_AZ" />
<meta property="og:locale:alternate" content="ru_RU" />
<meta property="og:locale:alternate" content="en_GB" />
