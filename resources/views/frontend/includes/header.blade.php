<div class="top-area-background top-area-scroll-hide">
    <div id="top-area" class="top-area top-area-style-default top-area-alignment-center">
        <div class="container">
            <div class="top-area-items inline-inside">
                <div class="top-area-block top-area-contacts">
                    <div class="gem-contacts inline-inside">
                        <div class="gem-contacts-item gem-contacts-address">{{ trans('translations.address_short') }}</div>
                        <div class="gem-contacts-item gem-contacts-phone"><a
                                href="tel: {{ setting('mobile_phone') }}">{{ setting('mobile_phone') }}</a></div>
                    </div>
                </div>
                <div class="top-area-block top-area-socials socials-colored-hover">
                    <div class="socials inline-inside">
                        @include('frontend.includes.socials')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="site-header-wrapper">
    <header id="site-header" class="site-header animated-header mobile-menu-layout-slide-horizontal" role="banner">

        <div class="header-background">
            <div class="container">
                <div class="header-main logo-position-left header-layout-default header-style-3">
                    <div class="site-title">
                        <div class="site-logo" style="width:233px;">
                            <a href="/" rel="home">
                                <span class="logo">
                                    <img class="tgp-exclude default" alt="{{ config('app.name') }}"
                                         src="{{ asset('uploads/settings/'. setting('logo')) }}"/>
                                    <img class="tgp-exclude small" alt="{{ config('app.name') }}"
                                         src="{{ asset('uploads/settings/'. setting('logo')) }}"/>
                                </span>
                            </a>
                        </div>
                    </div>
                    <nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
                        <button class="menu-toggle dl-trigger">Primary Menu<span class="menu-line-1"></span><span
                                class="menu-line-2"></span><span class="menu-line-3"></span></button>
                        <div class="mobile-menu-slide-wrapper left">
                            <button class="mobile-menu-slide-close"></button>
                            <ul id="primary-menu" class="nav-menu styled no-responsive">
                                <li id="menu-item-7266"
                                    class="menu-item menu-item-type-post_type menu-item-object-page @if(active_page('frontend.products')) current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor @endif menu-item-has-children menu-item-parent menu-item-7266 megamenu-first-element menu-item-current">
                                    <a href="#">{{ trans('translations.products') }}</a><span
                                        class="menu-item-parent-toggle"></span>
                                    <ul class="sub-menu styled ">
                                        <li id="menu-item-9944"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home @if(active_page('frontend.products')) current_page_item current-menu-item @endif page_item page-item-477 menu-item-9944 megamenu-first-element menu-item-active">
                                            <a href="{{ route('frontend.products.index') }}">{{ config('app.name') }}</a></li>
                                        @foreach($companyCategories as $companyCategory)
                                            <li id="menu-item-{{ $companyCategory->id }}"
                                                @if($companyCategory->children->isEmpty())
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-{{ $companyCategory->id }} megamenu-first-element"
                                                @else
                                                    class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-has-children menu-item-parent menu-item-{{ $companyCategory->id }} megamenu-first-element"
                                                @endif
                                            >
                                                <a href="{{ $companyCategory->companies->isNotEmpty() ? route('frontend.company_categories.show', $companyCategory) : 'javascript:void(0)'}}">{{ $companyCategory->{'name:' . app()->getLocale()} }}</a>
                                                @if($companyCategory->children->isNotEmpty())
                                                    <span
                                                        class="menu-item-parent-toggle"></span>
                                                @endif
                                                @if($companyCategory->children->isNotEmpty())
                                                    <ul class="sub-menu styled ">
                                                        @foreach($companyCategory->children as $companyCategoryChild)
                                                            <li id="menu-item-{{ $companyCategoryChild->id }}"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-{{ $companyCategoryChild->id }} megamenu-first-element">
                                                                <a href="{{ route('frontend.company_categories.show', $companyCategoryChild) }}">{{ $companyCategoryChild->{'name:' . app()->getLocale()} }}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li id="menu-item-7091"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7091 megamenu-first-element @if(active_page('frontend.about.show')) current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor @endif">
                                    <a href="{{ route('frontend.about.show') }}">{{ trans('translations.about') }}</a>
                                </li>
{{--                                <li id="menu-item-7190"--}}
{{--                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-7190 megamenu-first-element">--}}
{{--                                    <a target="_blank"--}}
{{--                                       href="{{ asset('uploads/settings/'. setting('catalogue')) }}">{{ trans('translations.upload_catalogue') }}</a>--}}
{{--                                </li>--}}
                                <li id="menu-item-9940"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9940 megamenu-template-enable megamenu-first-element"
                                    data-template=""><a
                                        href="{{ route('frontend.news.index') }}">{{ trans('translations.news') }}</a>
                                </li>
                                <li id="menu-item-9946"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9946 megamenu-template-enable megamenu-first-element"
                                    data-template=""><a
                                        href="{{ route('frontend.contact.show') }}">{{ trans('translations.contact') }}</a>
                                </li>
                                @include('frontend.includes.language_switcher')
                                <li class="menu-item menu-item-widgets mobile-only">
                                    <div class="menu-item-socials">
                                        <div class="socials inline-inside">
                                            @include('frontend.includes.socials')
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header><!-- #site-header -->
</div><!-- #site-header-wrapper -->
