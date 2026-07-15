@extends('layouts.frontend')

@section('content')
    <div id="main" class="site-main page__top-shadow visible">

        <div id="main-content" class="main-content">

            <div id="page-title" class="page-title-block page-title-alignment-center page-title-style-1 ">


                <div class="container">
                    <div class="page-title-inner">
                        <div class="page-title-title"><h1
                                style="color:#ffffff;">{{ $newsArticle->{'title:' . app()->getLocale()} }}</h1></div>
                    </div>
                </div>

            </div>
            <div class="block-content">
                <div class="panel">

                    <div class="panel-center">
                        <article id="post-10005"
                                 class="post-10005 post type-post status-publish format-standard has-post-thumbnail category-layiheler category-uncategorized-en">

                            <div class="entry-content post-content">

                                <div class="container">


                                </div><!-- .container -->

                                <div class="fullwidth-content">
                                    <div class="container">
                                        {!! $newsArticle->{'content:' . app()->getLocale()} !!}
                                    </div>
                                </div>
                                <div class="container">
                                </div><!-- .container -->

                            </div><!-- .entry-content -->

                            <div class="container">


                            </div><!-- .container -->

                        </article><!-- #post-## -->

                    </div>

                </div>

            </div><!-- .block-content -->

        </div><!-- #main-content -->


    </div><!-- #main -->
    <div id="lazy-loading-point"></div>
@endsection
@push('styles')
    <style id="thegem-custom-inline-css" type="text/css">
        #page-title {
            background-color: #00A4EFFF;
            padding-top: 80px;
            padding-bottom: 80px;
        }

        #page-title h1, #page-title .title-rich-content {
            color: #ffffff;
        }

        .page-title-excerpt {
            color: #ffffff;
            margin-top: 18px;
        }

        #page-title .page-title-title {
            margin-top: 0px;
        }

        #page-title .page-title-title .styled-subtitle.light, #page-title .page-title-excerpt .styled-subtitle.light {
            font-family: var(--thegem-to-light-title-font-family);
            font-style: normal;
            font-weight: normal;
        }

        #page-title .page-title-title .title-main-menu, #page-title .page-title-excerpt .title-main-menu {
            font-family: var(--thegem-to-menu-font-family);
            font-style: var(--thegem-to-menu-font-style);
            font-weight: var(--thegem-to-menu-font-weight);
            text-transform: var(--thegem-to-menu-text-transform);
            font-size: var(--thegem-to-menu-font-size);
            line-height: var(--thegem-to-menu-line-height);
            letter-spacing: var(--thegem-to-menu-letter-spacing, 0);
        }

        #page-title .page-title-title .title-main-menu.light, #page-title .page-title-excerpt .title-main-menu.light {
            font-family: var(--thegem-to-light-title-font-family);
            font-style: normal;
            font-weight: normal;
        }

        #page-title .page-title-title .title-body, #page-title .page-title-excerpt .title-body {
            font-family: var(--thegem-to-body-font-family);
            font-style: var(--thegem-to-body-font-style);
            font-weight: var(--thegem-to-body-font-weight);
            text-transform: var(--thegem-to-body-text-transform, none);
            font-size: var(--thegem-to-body-font-size);
            line-height: var(--thegem-to-body-line-height);
            letter-spacing: var(--thegem-to-body-letter-spacing);
        }

        #page-title .page-title-title .title-body.light, #page-title .page-title-excerpt .title-body.light {
            font-family: var(--thegem-to-light-title-font-family);
            font-style: normal;
            font-weight: normal;
        }

        #page-title .page-title-title .title-tiny-body, #page-title .page-title-excerpt .title-tiny-body {
            font-family: var(--thegem-to-body-tiny-font-family);
            font-style: var(--thegem-to-body-tiny-font-style);
            font-weight: var(--thegem-to-body-tiny-font-weight);
            text-transform: var(--thegem-to-body-tiny-text-transform, none);
            font-size: var(--thegem-to-body-tiny-font-size);
            line-height: var(--thegem-to-body-tiny-line-height);
            letter-spacing: var(--thegem-to-body-tiny-letter-spacing);
        }

        #page-title .page-title-title .title-tiny-body.light, #page-title .page-title-excerpt .title-tiny-body.light {
            font-family: var(--thegem-to-light-title-font-family);
            font-style: normal;
            font-weight: normal;
        }

        .page-title-inner, body .breadcrumbs {
            padding-left: 0px;
            padding-right: 0px;
        }

        body .breadcrumbs, body .breadcrumbs a, body .bc-devider:before {
            color: #3c3950;
        }

        body .breadcrumbs .current {
            color: #00a4ef;
            border-bottom: 3px solid #00a4ef;
        }

        body .breadcrumbs a:hover {
            color: #00a4ef;
        }

        body .page-title-block .breadcrumbs-container {
            text-align: center;
        }

        .page-breadcrumbs {
            position: relative;
            display: flex;
            width: 100%;
            align-items: center;
            min-height: 70px;
            z-index: 5;
        }

        .fullwidth-content > .page-breadcrumbs {
            padding-left: 21px;
            padding-right: 21px;
        }

        .page-breadcrumbs.page-breadcrumbs--left {
            justify-content: flex-start;
            text-align: left;
        }

        .page-breadcrumbs.page-breadcrumbs--center {
            justify-content: center;
            text-align: center;
        }

        .page-breadcrumbs.page-breadcrumbs--right {
            justify-content: flex-end;
            text-align: right;
        }

        .page-breadcrumbs ul {
            display: flex;
            flex-wrap: wrap;
            padding: 0;
            margin: 0;
            list-style-type: none;
        }

        .page-breadcrumbs ul li {
            position: relative;
        }

        .page-breadcrumbs ul li:not(:last-child) {
            padding-right: 20px;
            margin-right: 5px;
        }

        .page-breadcrumbs ul li:not(:last-child):after {
            font-family: 'thegem-icons';
            content: '\e601';
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            line-height: 1;
        }

        .page-breadcrumbs ul li a, .page-breadcrumbs ul li:not(:last-child):after {
            color: #99A9B5FF;
        }

        .page-breadcrumbs ul li {
            color: #3C3950FF;
        }

        .page-breadcrumbs ul li a:hover {
            color: #3C3950FF;
        }

        .block-content {
            padding-top: 135px;
        }

        .block-content:last-of-type {
            padding-bottom: 110px;
        }

        #top-area {
            display: block;
        }

        @media (max-width: 991px) {
            #page-title {
                padding-top: 80px;
                padding-bottom: 80px;
            }

            .page-title-inner, body .breadcrumbs {
                padding-left: 0px;
                padding-right: 0px;
            }

            .page-title-excerpt {
                margin-top: 18px;
            }

            #page-title .page-title-title {
                margin-top: 0px;
            }

            .block-content {
            }

            .block-content:last-of-type {
            }

            #top-area {
                display: block;
            }
        }

        @media (max-width: 767px) {
            #page-title {
                padding-top: 80px;
                padding-bottom: 80px;
            }

            .page-title-inner, body .breadcrumbs {
                padding-left: 0px;
                padding-right: 0px;
            }

            .page-title-excerpt {
                margin-top: 18px;
            }

            #page-title .page-title-title {
                margin-top: 0px;
            }

            .block-content {
            }

            .block-content:last-of-type {
            }

            #top-area {
                display: none;
            }
        }
    </style>
@endpush
