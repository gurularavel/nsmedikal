@extends('layouts.frontend')

@section('content')
    <div id="main" class="site-main page__top-shadow visible">

        <div id="main-content" class="main-content">

            <div id="page-title" class="page-title-block page-title-alignment-center page-title-style-1 ">


                <div class="container">
                    <div class="page-title-inner">
                        <div class="page-title-title"><h1 style="color:#ffffff;">{{ trans('translations.news') }}</h1>
                        </div>
                    </div>
                </div>

            </div>
            <div class="block-content">
                <div class="container">
                    <div class="panel row">

                        <div class="panel-center col-xs-12">
                            <article id="post-7208" class="post-7208 page type-page status-publish">

                                <div class="entry-content post-content">


                                    <div data-elementor-type="wp-page" data-elementor-id="7208"
                                         class="elementor elementor-7208">
                                        <div class="elementor-inner">
                                            <div class="elementor-section-wrap">
                                                <section
                                                    class="elementor-section elementor-top-section elementor-element elementor-element-dedc435 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="dedc435" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-thegem">
                                                        <div class="elementor-row">
                                                            <div
                                                                class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-6750317"
                                                                data-id="6750317" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div
                                                                            class="elementor-element elementor-element-b0d0a94 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-thegem-blog-grid"
                                                                            data-id="b0d0a94"
                                                                            data-element_type="widget"
                                                                            data-settings="{&quot;thegem_elementor_preset&quot;:&quot;style-1&quot;,&quot;select_blog_cat&quot;:[&quot;layiheler&quot;],&quot;items_per_page&quot;:9,&quot;order_by&quot;:&quot;default&quot;,&quot;order&quot;:&quot;default&quot;,&quot;image_icon_show&quot;:&quot;yes&quot;}"
                                                                            data-widget_type="thegem-blog-grid.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="blog-grid blog clearfix  justified-style-1  blog-style-justified  blog-style-3x    inline-row   blog-style-justified-3x "
                                                                                    data-page="1" data-paged="1"
                                                                                    data-next-page="0"
                                                                                    data-load-more-action="thegem_bloggrid_load_more">

                                                                                    @forelse($newsArticles as $newsArticle)
                                                                                        <article id="post-10005"
                                                                                                 class="col-lg-4 col-md-4 col-sm-6 col-xs-6 inline-column post-10005 post type-post status-publish format-standard has-post-thumbnail category-layiheler category-uncategorized-en"
                                                                                                 style="height: 593.677px;">

                                                                                            <div
                                                                                                class="post-content-wrapper">


                                                                                                <div class="post-image">
                                                                                                    <div
                                                                                                        class="post-featured-content">
                                                                                                        <a href="{{ route('frontend.news.show', $newsArticle) }}">
                                                                                                            <img
                                                                                                                fetchpriority="high"
                                                                                                                decoding="async"
                                                                                                                src="{{ asset('uploads/news/' . $newsArticle->image) }}"
                                                                                                                width="640"
                                                                                                                height="480"
                                                                                                                class="img-responsive"
                                                                                                                alt="{{ $newsArticle->{'title:' . app()->getLocale()} }}"/>
                                                                                                        </a></div>
                                                                                                </div>

                                                                                                <div
                                                                                                    class="caption-container">
                                                                                                    <div
                                                                                                        class="description">
                                                                                                        <div
                                                                                                            class="post-meta-conteiner">

							<span class="post-meta-author">
															</span>

                                                                                                            <div
                                                                                                                class="post-meta-right">

                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div
                                                                                                            class="post-title">
                                                                                                            <div
                                                                                                                class="entry-title title-h4">
                                                                                                                <a href="{{ route('frontend.news.show', $newsArticle) }}"
                                                                                                                   rel="bookmark"><span
                                                                                                                        class="entry-title-date"></span><span
                                                                                                                        class="light">{{ $newsArticle->{'title:' . app()->getLocale()} }}</span></a>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div
                                                                                                            class="post-text">
                                                                                                            <div
                                                                                                                class="summary">
                                                                                                                <p>{!!  $newsArticle->{'description:' . app()->getLocale()}  !!}</p>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div
                                                                                                            class="info clearfix">
                                                                                                            <div
                                                                                                                class="post-footer-sharing">

                                                                                                                <div
                                                                                                                    class="gem-button-container gem-widget-button gem-button-position-inline">
                                                                                                                    <a class="gem-button gem-button-size-tiny gem-button-style-flat gem-button-text-weight-normal gem-button-empty"
                                                                                                                       href="#"
                                                                                                                       target="_self">
                                                                                                                        <div
                                                                                                                            class="elementor-icon">
                                                                                                                            <i class="default"></i>
                                                                                                                        </div>
                                                                                                                    </a>
                                                                                                                </div>

                                                                                                                <div
                                                                                                                    class="sharing-popup">
                                                                                                                    <div
                                                                                                                        class="socials-sharing socials socials-colored-hover">

                                                                                                                        <a class="socials-item"
                                                                                                                           target="_blank"
                                                                                                                           href="https://www.facebook.com/sharer/sharer.php?u={{ route('frontend.news.show', $newsArticle) }}"
                                                                                                                           title="Facebook"><i
                                                                                                                                class="socials-item-icon facebook"></i></a>

                                                                                                                        <a class="socials-item"
                                                                                                                           target="_blank"
                                                                                                                           href="https://twitter.com/intent/tweet?text={{ $newsArticle->{'title:'.app()->getLocale()} }}&amp;url={{ route('frontend.news.show', $newsArticle) }}"
                                                                                                                           title="Twitter"><i
                                                                                                                                class="socials-item-icon twitter"></i></a>

                                                                                                                        <a class="socials-item"
                                                                                                                           target="_blank"
                                                                                                                           href="https://pinterest.com/pin/create/button/?url={{ route('frontend.news.show', $newsArticle) }}&amp;description={{ $newsArticle->{'title:'.app()->getLocale()} }}&amp;media={{ asset('uploads/news/'.$newsArticle->image) }}"
                                                                                                                           title="Pinterest"><i
                                                                                                                                class="socials-item-icon pinterest"></i></a>

                                                                                                                        <a class="socials-item"
                                                                                                                           target="_blank"
                                                                                                                           href="http://tumblr.com/widgets/share/tool?canonicalUrl={{ route('frontend.news.show', $newsArticle) }}"
                                                                                                                           title="Tumblr"><i
                                                                                                                                class="socials-item-icon tumblr"></i></a>

                                                                                                                        <a class="socials-item"
                                                                                                                           target="_blank"
                                                                                                                           href="https://www.linkedin.com/shareArticle?mini=true&amp;url={{ route('frontend.news.show', $newsArticle) }}&amp;title={{ $newsArticle->{'title:'.app()->getLocale()} }}&amp;summary={{ $newsArticle->{'description:'.app()->getLocale()} }}"
                                                                                                                           title="LinkedIn"><i
                                                                                                                                class="socials-item-icon linkedin"></i></a>

                                                                                                                        <a class="socials-item"
                                                                                                                           target="_blank"
                                                                                                                           href="https://www.reddit.com/submit?url={{ route('frontend.news.show', $newsArticle) }}&amp;title={{ $newsArticle->{'title:'.app()->getLocale()} }}"
                                                                                                                           title="Reddit"><i
                                                                                                                                class="socials-item-icon reddit"></i></a>

                                                                                                                    </div>
                                                                                                                    <svg
                                                                                                                        class="sharing-styled-arrow">
                                                                                                                        <use
                                                                                                                            xlink:href="/wp-content/themes/thegem-elementor/css/post-arrow.svg#dec-post-arrow"></use>
                                                                                                                    </svg>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="post-read-more">
                                                                                                                <div
                                                                                                                    class="gem-button-container gem-widget-button gem-button-position-inline">
                                                                                                                    <a class="gem-button gem-button-size-tiny gem-button-style-outline"
                                                                                                                       href="{{ route('frontend.news.show', $newsArticle) }}">
			<span class="gem-inner-wrapper-btn">
								<span class="gem-text-button">
					{{ trans('translations.more') }}				</span>
			</span>
                                                                                                                    </a>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>

                                                                                        </article>
                                                                                    @empty
                                                                                        <h5 style="text-align: center;">{{ trans('translations.no_data_found') }}</h5>
                                                                                    @endforelse
                                                                                </div>
                                                                                <style>
                                                                                    .elementor-element-b0d0a94 .blog-grid .post-image a:hover:after {
                                                                                        opacity: 1 !important;
                                                                                    }

                                                                                    .elementor-element-b0d0a94 .blog-grid .post-content-wrapper:hover .post-image a:after {
                                                                                        opacity: 1 !important;
                                                                                    }
                                                                                </style>
                                                                                <div class="blog-grid-pagination"
                                                                                     data-page="1" data-next-page="0">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .entry-content -->
                            </article><!-- #post-## -->
                        </div>
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
    <link rel='stylesheet' id='thegem-blog-css'
          href='{{ asset('/wp-content/themes/thegem-elementor/css/thegem-bloga78f.css?ver=5.7.1') }}' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='thegem-blog-grid-css'
          href='{{ asset('/wp-content/plugins/thegem-elements-elementor/inc/elementor/widgets/blog-grid/assets/css/thegem-blog-grid.css') }}'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='thegem-animations-css'
          href='{{ asset('/wp-content/themes/thegem-elementor/css/thegem-itemsAnimationsa78f?ver=5.7.1') }}'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='thegem-style-css' href='{{ asset('/wp-content/themes/thegem-elementor/style1e39.css?ver=6.4.3') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-7208-css' href='{{ asset('/wp-content/uploads/elementor/css/post-72088835.css') }}' type='text/css' media='all' />
@endpush
