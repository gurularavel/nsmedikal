@extends('layouts.frontend')

@section('content')
    <div id="main" class="site-main page__top-shadow visible">
        <div id="main-content" class="main-content">

            <div class="preloader slideshow-preloader">
                <div class="preloader-spin"></div>
            </div>
            <div class="gem-slideshow gem-slideshow-with-preloader gem-slideshow-rs">
                <!-- START Medical Slider Animated REVOLUTION SLIDER 6.5.25 --><p class="rs-p-wp-fix"></p>
                <rs-module-wrap id="rev_slider_16_1_wrapper" data-source="gallery"
                                style="visibility:hidden;background:transparent;padding:0;">
                    <rs-module id="rev_slider_16_1" style="" data-version="6.5.25">
                        <rs-slides>
                            @foreach($sliders as $slider)
                                <rs-slide style="position: absolute;" data-key="rs-48" data-title="Slide"
                                          data-anim="ms:2000;" data-filter="e:late;b:6;"
                                          data-in="o:0;sx:1.05;sy:1.05;e:power1.in;" data-out="a:false;">
                                    <img src="{{ asset('uploads/sliders/' . $slider->image) }}"
                                         alt="{{ $slider->{'title:' . app()->getLocale()} }}"
                                         title="v3"
                                         width="2560" height="985" class="rev-slidebg tp-rs-img rs-lazyload"
                                         data-lazyload="/wp-content/uploads/2022/11/v3-scaled.jpg"
                                         data-parallax="8" data-panzoom="d:12000;e:power2.inOut;ss:110;se:100;"
                                         data-no-retina>
                                    <!--
                                -->
                                    <rs-layer
                                        id="slider-16-slide-48-layer-1"
                                        class="rs-pxl-2"
                                        data-type="text"
                                        data-color="#fff"
                                        data-tsh="c:rgba(26,35,119,0.21);v:2px;b:3px;"
                                        data-rsp_ch="on"
                                        data-xy="xo:24px,24px,23px,24px;yo:231px,231px,200px,240px;"
                                        data-text="s:60,60,60,37;l:64,64,64,44;ls:-2px,-2px,-1px,0px;fw:500;"
                                        data-dim="minh:0px,none,none,none;"
                                        data-frame_0="y:-50,-50,-30,-18;"
                                        data-frame_1="st:960;sp:1000;sR:960;"
                                        data-frame_999="o:0;e:nothing;st:w;sR:7040;"
                                        style="z-index:8;font-family:'Montserrat';"
                                    >{!! $slider->{'title:' . app()->getLocale()} !!}

                                    </rs-layer><!--

							--><a
                                        id="slider-16-slide-48-layer-4"
                                        class="rs-layer rev-btn rs-pxl-4"
                                        href="{{ $slider->{'button_url:' . app()->getLocale()} }}" target="_self"
                                        data-type="button"
                                        data-color="rgba(255, 255, 255, 1)"
                                        data-xy="xo:24px;yo:470px,470px,424px,400px;"
                                        data-text="l:17;ls:1px;fw:600;a:center;"
                                        data-rsp_bd="off"
                                        data-padding="t:20;r:32;b:20;l:32;"
                                        data-border="bor:5px,5px,5px,5px;"
                                        data-frame_0="y:-50;"
                                        data-frame_1="st:1690;sp:1000;sR:1690;"
                                        data-frame_999="o:0;e:nothing;st:w;sR:6310;"
                                        data-frame_hover="bgc:linear-gradient(140deg, rgba(26,214,253,1) 0%, rgba(98,145,239,1) 100%);boc:#000;bor:5px,5px,5px,5px;bos:solid;oX:50;oY:50;sp:250ms;e:default;bri:110%;"
                                        style="z-index:9;background:linear-gradient(140deg, rgba(26,214,253,1) 0%, rgba(98,145,239,1) 100%);font-family:'Montserrat';cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;"
                                    >{{ $slider->{'button_text:' . app()->getLocale()} }}
                                    </a><!--

							-->
                                    <rs-layer
                                        id="slider-16-slide-48-layer-5"
                                        class="rs-pxl-4"
                                        data-type="text"
                                        data-color="rgba(255, 255, 255, 1)"
                                        data-rsp_ch="on"
                                        data-xy="x:c;xo:0,0,0,466px;y:b;yo:74px,74px,138px,141px;"
                                        data-text="l:22;a:inherit;"
                                        data-basealign="slide"
                                        data-frame_0="rZ:359;"
                                        data-frame_1="rZ:359;st:6180;sp:630;sR:6180;"
                                        data-frame_999="o:0;st:w;sR:2190;"
                                        style="z-index:10;font-family:'Open Sans';"
                                    ><a class="mouse-scroll scroll-to-anchor" href="#details">mouse</a>
                                    </rs-layer><!--
-->                        </rs-slide>
                            @endforeach
                        </rs-slides>
                    </rs-module>
                    <script>
                        setREVStartSize({
                            c: 'rev_slider_16_1',
                            rl: [1240, 1024, 778, 480],
                            el: [868, 768, 960, 720],
                            gw: [1280, 1280, 778, 480],
                            gh: [868, 768, 960, 720],
                            type: 'standard',
                            justify: '',
                            layout: 'fullscreen',
                            offsetContainer: '#top-area, #site-header',
                            offset: '',
                            mh: "0"
                        });
                        if (window.RS_MODULES !== undefined && window.RS_MODULES.modules !== undefined && window.RS_MODULES.modules["revslider161"] !== undefined) {
                            window.RS_MODULES.modules["revslider161"].once = false;
                            window.revapi16 = undefined;
                            if (window.RS_MODULES.checkMinimal !== undefined) window.RS_MODULES.checkMinimal()
                        }
                    </script>
                </rs-module-wrap>
                <!-- END REVOLUTION SLIDER -->
            </div>
            <script type="text/javascript">
                var thegemSlideshowPreloader = document.querySelector('.slideshow-preloader');
                var thegemSlideshow = document.querySelector('.gem-slideshow');
                if (thegemSlideshow.hasChildNodes()) {
                    thegemSlideshow.parentNode.insertBefore(thegemSlideshow, thegemSlideshowPreloader);
                    thegemSlideshowPreloader.style.height = thegemSlideshow.clientHeight + 'px';
                    thegemSlideshow.parentNode.insertBefore(thegemSlideshowPreloader, thegemSlideshow);
                } else {
                    thegemSlideshowPreloader.remove();
                    thegemSlideshow.remove();
                }
            </script>

            <div class="block-content no-bottom-margin no-top-margin">
                <div class="panel">

                    <div class="panel-center">
                        <article id="post-477" class="post-477 page type-page status-publish">

                            <div class="entry-content post-content">

                                <div class="container">


                                </div><!-- .container -->

                                <div class="fullwidth-content">
                                    <div data-elementor-type="wp-page" data-elementor-id="477"
                                         class="elementor elementor-477">
                                        <div class="elementor-inner">
                                            <div class="elementor-section-wrap">
                                                @if($partners->isNotEmpty())
                                                    <section
                                                        class="elementor-section elementor-top-section elementor-element elementor-element-efd7942 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                        data-id="efd7942" data-element_type="section">
                                                        <div class="elementor-container elementor-column-gap-thegem">
                                                            <div class="elementor-row">
                                                                <div
                                                                    class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-aa10013"
                                                                    data-id="aa10013" data-element_type="column">
                                                                    <div
                                                                        class="elementor-column-wrap elementor-element-populated">
                                                                        <div class="elementor-widget-wrap">
                                                                            <div
                                                                                class="elementor-element elementor-element-6642891 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-heading"
                                                                                data-id="6642891"
                                                                                data-element_type="widget"
                                                                                data-widget_type="heading.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <style>/*! elementor - v3.7.7 - 20-09-2022 */
                                                                                        .elementor-heading-title {
                                                                                            padding: 0;
                                                                                            margin: 0;
                                                                                            line-height: 1
                                                                                        }

                                                                                        .elementor-widget-heading .elementor-heading-title[class*=elementor-size-] > a {
                                                                                            color: inherit;
                                                                                            font-size: inherit;
                                                                                            line-height: inherit
                                                                                        }

                                                                                        .elementor-widget-heading .elementor-heading-title.elementor-size-small {
                                                                                            font-size: 15px
                                                                                        }

                                                                                        .elementor-widget-heading .elementor-heading-title.elementor-size-medium {
                                                                                            font-size: 19px
                                                                                        }

                                                                                        .elementor-widget-heading .elementor-heading-title.elementor-size-large {
                                                                                            font-size: 29px
                                                                                        }

                                                                                        .elementor-widget-heading .elementor-heading-title.elementor-size-xl {
                                                                                            font-size: 39px
                                                                                        }

                                                                                        .elementor-widget-heading .elementor-heading-title.elementor-size-xxl {
                                                                                            font-size: 59px
                                                                                        }</style>
                                                                                    <h2 class="elementor-heading-title elementor-size-default">{{ trans('translations.partners') }}</h2>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="elementor-element elementor-element-39aed94 elementor-arrows-position-outside elementor-pagination-position-outside flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-image-carousel"
                                                                                data-id="39aed94"
                                                                                data-element_type="widget"
                                                                                data-settings="{&quot;slides_to_show&quot;:&quot;4&quot;,&quot;autoplay_speed&quot;:2000,&quot;navigation&quot;:&quot;both&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;infinite&quot;:&quot;yes&quot;,&quot;speed&quot;:500}"
                                                                                data-widget_type="image-carousel.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <style>/*! elementor - v3.7.7 - 20-09-2022 */
                                                                                        .elementor-widget-image-carousel .swiper-container {
                                                                                            position: static
                                                                                        }

                                                                                        .elementor-widget-image-carousel .swiper-container .swiper-slide figure {
                                                                                            line-height: inherit
                                                                                        }

                                                                                        .elementor-widget-image-carousel .swiper-slide {
                                                                                            text-align: center
                                                                                        }

                                                                                        .elementor-image-carousel-wrapper:not(.swiper-container-initialized) .swiper-slide {
                                                                                            max-width: calc(100% / var(--e-image-carousel-slides-to-show, 3))
                                                                                        }</style>
                                                                                    <div
                                                                                        class="elementor-image-carousel-wrapper swiper-container"
                                                                                        dir="ltr">
                                                                                        <div
                                                                                            class="elementor-image-carousel swiper-wrapper">
                                                                                            @foreach($partners as $partner)
                                                                                                <div
                                                                                                    class="swiper-slide">
                                                                                                    <figure>
                                                                                                        <img
                                                                                                            class="swiper-slide-image"
                                                                                                            src="{{ asset("uploads/partners/$partner->image") }}"
                                                                                                            alt="urotech"/>
                                                                                                    </figure>
                                                                                                </div>
                                                                                            @endforeach
                                                                                        </div>
                                                                                        <div
                                                                                            class="swiper-pagination"></div>
                                                                                        <div
                                                                                            class="elementor-swiper-button elementor-swiper-button-prev"
                                                                                            tabindex="0" role="button"
                                                                                            aria-label="Previous slide">
                                                                                            <i aria-hidden="true"
                                                                                               class="eicon-chevron-left"></i>
                                                                                            <span
                                                                                                class="elementor-screen-only">Previous</span>
                                                                                        </div>
                                                                                        <div
                                                                                            class="elementor-swiper-button elementor-swiper-button-next"
                                                                                            tabindex="0" role="button"
                                                                                            aria-label="Next slide">
                                                                                            <i aria-hidden="true"
                                                                                               class="eicon-chevron-right"></i>
                                                                                            <span
                                                                                                class="elementor-screen-only">Next</span>
                                                                                        </div>
                                                                                        <span
                                                                                            class="swiper-notification"
                                                                                            aria-live="assertive"
                                                                                            aria-atomic="true"></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                @endif
                                                @if($counters->isNotEmpty())
                                                    <section
                                                        class="elementor-section elementor-top-section elementor-element elementor-element-029a385 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                        data-id="029a385" data-element_type="section"
                                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                        <div class="elementor-container elementor-column-gap-thegem">
                                                            <div class="elementor-row">
                                                                @foreach($counters as $counter)
                                                                    <div
                                                                        class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-ffc01ef"
                                                                        data-id="ffc01ef" data-element_type="column">
                                                                        <div
                                                                            class="elementor-column-wrap elementor-element-populated">
                                                                            <div class="elementor-widget-wrap">
                                                                                <div
                                                                                    class="elementor-element elementor-element-e17642e flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-thegem-counter"
                                                                                    data-id="e17642e"
                                                                                    data-element_type="widget"
                                                                                    data-settings="{&quot;thegem_elementor_preset&quot;:&quot;counter-preset1&quot;,&quot;counter_animation_enabled&quot;:&quot;yes&quot;}"
                                                                                    data-widget_type="thegem-counter.default">
                                                                                    <div
                                                                                        class="elementor-widget-container">

                                                                                        <div class="counter-preset1">
                                                                                            <div
                                                                                                class="gem-counter-container">

                                                                                                <div class="preloader">
                                                                                                    <div
                                                                                                        class="preloader-spin"></div>
                                                                                                </div>


                                                                                                <div
                                                                                                    data-number-format="(ddd).ddd"
                                                                                                    class="gem-counter-box">
                                                                                                    <div
                                                                                                        class="gem-counter">
                                                                                                        <div
                                                                                                            class="gem-counter-inner">
                                                                                                            <div
                                                                                                                class="gem-counter-number">
                                                                                                                <div
                                                                                                                    class="gem-counter-odometer odometer odometer-auto-theme"
                                                                                                                    data-to="{{ $counter->amount }}">
                                                                                                                    0
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="gem-counter-suffix ">
                                                                                                                    +
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="gem-counter-text styled-subtitle">
                                                                                                                {{ $counter->{'name:' . app()->getLocale()} }}
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </section>
                                                @endif
                                                <section
                                                    class="elementor-section elementor-top-section elementor-element elementor-element-61e2b13 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="61e2b13" data-element_type="section"
                                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                    <div class="elementor-container elementor-column-gap-thegem">
                                                        <div class="elementor-row">
                                                            <div
                                                                class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a881213"
                                                                data-id="a881213" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div
                                                                            class="elementor-element elementor-element-ceb18b8 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-heading"
                                                                            data-id="ceb18b8"
                                                                            data-element_type="widget"
                                                                            data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <h2 class="elementor-heading-title elementor-size-default">{{ trans('translations.medical_equipments') }}</h2>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="elementor-element elementor-element-f0aa7fd flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-thegem-quickfinders"
                                                                            data-id="f0aa7fd"
                                                                            data-element_type="widget"
                                                                            data-settings="{&quot;thegem_elementor_preset&quot;:&quot;iconed&quot;}"
                                                                            data-widget_type="thegem-quickfinders.default">
                                                                            <div class="elementor-widget-container">

                                                                                <div
                                                                                    class="quickfinder row inline-row quickfinder-style-iconed">
                                                                                    @foreach($productCategories as $productCategory)
                                                                                        <div
                                                                                            class="lazy-loading  quickfinder-item inline-column col-md-4 col-sm-6 col-xs-12">
                                                                                            <div
                                                                                                class="quickfinder-item-box">
                                                                                                <div
                                                                                                    class="quickfinder-item-inner bordered-box icon-top icon-wrapping-none centered-box button-bottom lazy-loading-item"
                                                                                                    data-ll-effect="fading"
                                                                                                    data-ll-item-delay="200">
                                                                                                    <div
                                                                                                        class="quickfinder-icon-container">
                                                                                                        <div
                                                                                                            class="connector-container">
                                                                                                            <span></span>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="gem-qf-icon-image-wrapper lazy-loading-item"
                                                                                                            data-ll-effect="clip">
                                                                                                            <div
                                                                                                                class="gem-icon gem-icon-pack-fontawesome gem-icon-size-small  gem-icon-shape-circle bordered-box">
                                                                                                                <div
                                                                                                                    class="icon-hover-bg fade"></div>
                                                                                                                <div class="gem-icon-inner">
                                                                                                                    <div class="padding-box-inner">
                                                                                                                        {!! $productCategory->icon !!}

                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="connector-container">
                                                                                                            <span></span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="quickfinder-item-info-wrapper">
                                                                                                        <div
                                                                                                            class="quickfinder-item-info lazy-loading-item"
                                                                                                            data-ll-effect="fading"
                                                                                                            data-ll-item-delay="200">
                                                                                                            <h5 class="quickfinder-title title-h5 bold">{{ $productCategory->{'name:' . app()->getLocale()} }}</h5>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                  
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    @endforeach
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <main
                                                    class="elementor-section elementor-top-section elementor-element elementor-element-5e5be35 elementor-reverse-tablet elementor-reverse-mobile elementor-hidden-desktop elementor-hidden-tablet elementor-hidden-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="5e5be35" data-element_type="section" id="details">
                                                    <div class="elementor-container elementor-column-gap-thegem">
                                                        <div class="elementor-row">
                                                            <div
                                                                class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-446d37c"
                                                                data-id="446d37c" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div
                                                                            class="elementor-element elementor-element-552fa8a elementor-hidden-tablet elementor-hidden-mobile flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-image"
                                                                            data-id="552fa8a"
                                                                            data-element_type="widget"
                                                                            data-widget_type="image.default">
                                                                            <div class="elementor-widget-container">
                                                                                <style>/*! elementor - v3.7.7 - 20-09-2022 */
                                                                                    .elementor-widget-image {
                                                                                        text-align: center
                                                                                    }

                                                                                    .elementor-widget-image a {
                                                                                        display: inline-block
                                                                                    }

                                                                                    .elementor-widget-image a img[src$=".svg"] {
                                                                                        width: 48px
                                                                                    }

                                                                                    .elementor-widget-image img {
                                                                                        vertical-align: middle;
                                                                                        display: inline-block
                                                                                    }</style>
                                                                                <div class="elementor-image">
                                                                                    <img fetchpriority="high"
                                                                                         decoding="async" width="714"
                                                                                         height="1000"
                                                                                         data-tgpli-src="https://nsmedikal.az/wp-content/uploads/2018/12/2-1-1.jpg"
                                                                                         class="attachment-full size-full"
                                                                                         alt=""
                                                                                         data-tgpli-srcset="https://nsmedikal.az/wp-content/uploads/2018/12/2-1-1.jpg 714w, https://nsmedikal.az/wp-content/uploads/2018/12/2-1-1-600x840.jpg 600w, https://nsmedikal.az/wp-content/uploads/2018/12/2-1-1-214x300.jpg 214w"
                                                                                         sizes="(max-width: 714px) 100vw, 714px"
                                                                                         data-tgpli-inited
                                                                                         data-tgpli-image-inited
                                                                                         id="tgpli-65aa5f22b58cd"/>
                                                                                    <script>window.tgpQueue.add('tgpli-65aa5f22b58cd')</script>
                                                                                    <noscript><img fetchpriority="high"
                                                                                                   decoding="async"
                                                                                                   width="714"
                                                                                                   height="1000"
                                                                                                   src="wp-content/uploads/2018/12/2-1-1.jpg"
                                                                                                   class="attachment-full size-full"
                                                                                                   alt=""
                                                                                                   srcset="https://nsmedikal.az/wp-content/uploads/2018/12/2-1-1.jpg 714w, https://nsmedikal.az/wp-content/uploads/2018/12/2-1-1-600x840.jpg 600w, https://nsmedikal.az/wp-content/uploads/2018/12/2-1-1-214x300.jpg 214w"
                                                                                                   sizes="(max-width: 714px) 100vw, 714px"/>
                                                                                    </noscript>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-43644cb"
                                                                data-id="43644cb" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div
                                                                            class="elementor-element elementor-element-dd0d827 elementor-widget__width-initial flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-heading"
                                                                            data-id="dd0d827"
                                                                            data-element_type="widget"
                                                                            data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="title-h4 elementor-heading-title elementor-size-default">
                                                                                    tibb avadanlıqları şirkəti
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="elementor-element elementor-element-cd2000d flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-heading"
                                                                            data-id="cd2000d"
                                                                            data-element_type="widget"
                                                                            data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="title-h1 elementor-heading-title elementor-size-default">
                                                                                    ns medikal
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="elementor-element elementor-element-77b1b1e flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-text-editor"
                                                                            data-id="77b1b1e"
                                                                            data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <style>/*! elementor - v3.7.7 - 20-09-2022 */
                                                                                    .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {
                                                                                        background-color: #818a91;
                                                                                        color: #fff
                                                                                    }

                                                                                    .elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap {
                                                                                        color: #818a91;
                                                                                        border: 3px solid;
                                                                                        background-color: transparent
                                                                                    }

                                                                                    .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap {
                                                                                        margin-top: 8px
                                                                                    }

                                                                                    .elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter {
                                                                                        width: 1em;
                                                                                        height: 1em
                                                                                    }

                                                                                    .elementor-widget-text-editor .elementor-drop-cap {
                                                                                        float: left;
                                                                                        text-align: center;
                                                                                        line-height: 1;
                                                                                        font-size: 50px
                                                                                    }

                                                                                    .elementor-widget-text-editor .elementor-drop-cap-letter {
                                                                                        display: inline-block
                                                                                    }</style>
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>NS Medikal şirkəti dünyanın bir
                                                                                        çox məşhur tibbi avadanlıq satan
                                                                                        şirkətləri ilə əməkdaşlıq edir. 
                                                                                        Əsas tibbi avadanlıqlarımız
                                                                                        Kardiologiya, diaqnostika,
                                                                                        fizoterapiya, urologiya,
                                                                                        neonatologiya, sport sahələri
                                                                                        ilə bağlıdır. Satdığımız bütün
                                                                                        avadanlıqların quraşdırılması və
                                                                                        zəmanəti qiymətə daxildir.</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="elementor-element elementor-element-e481b15 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-heading"
                                                                            data-id="e481b15"
                                                                            data-element_type="widget"
                                                                            data-widget_type="heading.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="title-h4 elementor-heading-title elementor-size-default">
                                                                                    Missiyamız
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="elementor-element elementor-element-9ca6081 elementor-drop-cap-yes elementor-widget__width-initial elementor-drop-cap-view-stacked flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-invisible elementor-widget elementor-widget-text-editor"
                                                                            data-id="9ca6081"
                                                                            data-element_type="widget"
                                                                            data-settings="{&quot;drop_cap&quot;:&quot;yes&quot;,&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>1 Lorem ipsum dolor sit amet,
                                                                                        consectetur adipisicing elit,
                                                                                        sed do eiusmod tempor incididunt
                                                                                        ut labore et dolore magna
                                                                                        aliqua. </p></div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="elementor-element elementor-element-9c8a603 elementor-drop-cap-yes elementor-widget__width-initial elementor-drop-cap-view-stacked flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-invisible elementor-widget elementor-widget-text-editor"
                                                                            data-id="9c8a603"
                                                                            data-element_type="widget"
                                                                            data-settings="{&quot;drop_cap&quot;:&quot;yes&quot;,&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>2 Lorem ipsum dolor sit amet,
                                                                                        consectetur adipisicing elit,
                                                                                        sed do eiusmod tempor incididunt
                                                                                        ut labore et dolore magna
                                                                                        aliqua. </p></div>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="elementor-element elementor-element-4092929 elementor-drop-cap-yes elementor-widget__width-initial elementor-drop-cap-view-stacked flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-invisible elementor-widget elementor-widget-text-editor"
                                                                            data-id="4092929"
                                                                            data-element_type="widget"
                                                                            data-settings="{&quot;drop_cap&quot;:&quot;yes&quot;,&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <p>3 Lorem ipsum dolor sit amet,
                                                                                        consectetur adipisicing elit,
                                                                                        sed do eiusmod tempor incididunt
                                                                                        ut labore et dolore magna
                                                                                        aliqua. </p></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </main>
                                                <section
                                                    class="elementor-section elementor-top-section elementor-element elementor-element-544d494 elementor-section-full_width elementor-hidden-desktop elementor-hidden-tablet elementor-hidden-mobile elementor-section-height-default elementor-section-height-default"
                                                    data-id="544d494" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-no">
                                                        <div class="elementor-row">
                                                            <div
                                                                class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-c5122b9"
                                                                data-id="c5122b9" data-element_type="column"
                                                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div
                                                                            class="elementor-element elementor-element-e0fddef flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-spacer"
                                                                            data-id="e0fddef"
                                                                            data-element_type="widget"
                                                                            data-widget_type="spacer.default">
                                                                            <div class="elementor-widget-container">
                                                                                <style>/*! elementor - v3.7.7 - 20-09-2022 */
                                                                                    .elementor-column .elementor-spacer-inner {
                                                                                        height: var(--spacer-size)
                                                                                    }

                                                                                    .e-container {
                                                                                        --container-widget-width: 100%
                                                                                    }

                                                                                    .e-container > .elementor-widget-spacer {
                                                                                        width: var(--container-widget-width, var(--spacer-size));
                                                                                        -ms-flex-item-align: stretch;
                                                                                        align-self: stretch;
                                                                                        -ms-flex-negative: 0;
                                                                                        flex-shrink: 0
                                                                                    }

                                                                                    .e-container > .elementor-widget-spacer > .elementor-widget-container, .e-container > .elementor-widget-spacer > .elementor-widget-container > .elementor-spacer {
                                                                                        height: 100%
                                                                                    }

                                                                                    .e-container > .elementor-widget-spacer > .elementor-widget-container > .elementor-spacer > .elementor-spacer-inner {
                                                                                        height: var(--container-widget-height, var(--spacer-size))
                                                                                    }</style>
                                                                                <div class="elementor-spacer">
                                                                                    <div
                                                                                        class="elementor-spacer-inner"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4ea6f7b"
                                                                data-id="4ea6f7b" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <section
                                                                            class="elementor-section elementor-inner-section elementor-element elementor-element-5375b2e elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                                                            data-id="5375b2e"
                                                                            data-element_type="section">
                                                                            <div
                                                                                class="elementor-container elementor-column-gap-no">
                                                                                <div class="elementor-row">
                                                                                    <div
                                                                                        class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-e7fc963"
                                                                                        data-id="e7fc963"
                                                                                        data-element_type="column">
                                                                                        <div
                                                                                            class="elementor-column-wrap elementor-element-populated">
                                                                                            <div
                                                                                                class="elementor-widget-wrap">
                                                                                                <div
                                                                                                    class="elementor-element elementor-element-a1bc3dd flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-invisible elementor-widget elementor-widget-thegem-styled-textbox"
                                                                                                    data-id="a1bc3dd"
                                                                                                    data-element_type="widget"
                                                                                                    data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;thegem_elementor_preset&quot;:&quot;basic&quot;}"
                                                                                                    data-widget_type="thegem-styled-textbox.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">

                                                                                                        <div
                                                                                                            class="gem-textbox styled-textbox-basic">


                                                                                                            <div
                                                                                                                class="gem-textbox-top gem-textbox-top-none default-fill">
                                                                                                            </div>

                                                                                                            <div
                                                                                                                class="gem-textbox-inner">

                                                                                                                <div
                                                                                                                    class="gem-textbox-content default-background icon-top gem-textbox-icon-image-wrapping-none">

                                                                                                                    <div
                                                                                                                        class="gem-texbox-icon-image-wrapper">

                                                                                                                        <div
                                                                                                                            class="icon-top ">
                                                                                                                            <div
                                                                                                                                class="gem-textbox-icon">
                                                                                                                                <div
                                                                                                                                    class="elementor-icon">
                                                                                                                                    <i aria-hidden="true"
                                                                                                                                       class="gem-mdi mdi-clock"></i>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>


                                                                                                                    </div>

                                                                                                                    <div
                                                                                                                        class="gem-texbox-text-wrapper">


                                                                                                                        <h5 class="gem-textbox-title title-h5 bold">
                                                                                                                            CALL
                                                                                                                            CENTER
                                                                                                                            24/7 </h5>


                                                                                                                        <div
                                                                                                                            class="gem-textbox-description gem-text-output">
                                                                                                                            <p>
                                                                                                                                Bizə
                                                                                                                                24/7
                                                                                                                                sual
                                                                                                                                verərək
                                                                                                                                suallarınıza
                                                                                                                                cavab
                                                                                                                                ala
                                                                                                                                bilərsiniz.</p>
                                                                                                                        </div>


                                                                                                                    </div>

                                                                                                                </div>

                                                                                                            </div>


                                                                                                            <div
                                                                                                                class="gem-textbox-bottom gem-textbox-bottom-none default-fill">
                                                                                                            </div>

                                                                                                            <a href="#"
                                                                                                               target="_blank"
                                                                                                               rel="nofollow"
                                                                                                               class="gem-styled-textbox-link"></a>


                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-267c657"
                                                                                        data-id="267c657"
                                                                                        data-element_type="column">
                                                                                        <div
                                                                                            class="elementor-column-wrap elementor-element-populated">
                                                                                            <div
                                                                                                class="elementor-widget-wrap">
                                                                                                <div
                                                                                                    class="elementor-element elementor-element-f800404 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-invisible elementor-widget elementor-widget-thegem-styled-textbox"
                                                                                                    data-id="f800404"
                                                                                                    data-element_type="widget"
                                                                                                    data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:200,&quot;thegem_elementor_preset&quot;:&quot;basic&quot;}"
                                                                                                    data-widget_type="thegem-styled-textbox.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">

                                                                                                        <div
                                                                                                            class="gem-textbox styled-textbox-basic">


                                                                                                            <div
                                                                                                                class="gem-textbox-top gem-textbox-top-none default-fill">
                                                                                                            </div>

                                                                                                            <div
                                                                                                                class="gem-textbox-inner">

                                                                                                                <div
                                                                                                                    class="gem-textbox-content default-background icon-top gem-textbox-icon-image-wrapping-none">

                                                                                                                    <div
                                                                                                                        class="gem-texbox-icon-image-wrapper">

                                                                                                                        <div
                                                                                                                            class="icon-top ">
                                                                                                                            <div
                                                                                                                                class="gem-textbox-icon">
                                                                                                                                <div
                                                                                                                                    class="elementor-icon">
                                                                                                                                    <i aria-hidden="true"
                                                                                                                                       class="gem-mdi mdi-account-outline"></i>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>


                                                                                                                    </div>

                                                                                                                    <div
                                                                                                                        class="gem-texbox-text-wrapper">


                                                                                                                        <h5 class="gem-textbox-title title-h5 bold">
                                                                                                                            Peşəkar
                                                                                                                            komanda </h5>


                                                                                                                        <div
                                                                                                                            class="gem-textbox-description gem-text-output">
                                                                                                                            <p>
                                                                                                                                Bizim
                                                                                                                                komandada
                                                                                                                                peşəkar
                                                                                                                                xaricdə
                                                                                                                                təhsil
                                                                                                                                almış
                                                                                                                                mütəxəssislər
                                                                                                                                çalışır.</p>
                                                                                                                        </div>


                                                                                                                    </div>

                                                                                                                </div>

                                                                                                            </div>


                                                                                                            <div
                                                                                                                class="gem-textbox-bottom gem-textbox-bottom-none default-fill">
                                                                                                            </div>

                                                                                                            <a href="#"
                                                                                                               target="_blank"
                                                                                                               rel="nofollow"
                                                                                                               class="gem-styled-textbox-link"></a>


                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </section>
                                                                        <section
                                                                            class="elementor-section elementor-inner-section elementor-element elementor-element-fc2e8bd elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                                                                            data-id="fc2e8bd"
                                                                            data-element_type="section">
                                                                            <div
                                                                                class="elementor-container elementor-column-gap-no">
                                                                                <div class="elementor-row">
                                                                                    <div
                                                                                        class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-0def24b"
                                                                                        data-id="0def24b"
                                                                                        data-element_type="column">
                                                                                        <div
                                                                                            class="elementor-column-wrap elementor-element-populated">
                                                                                            <div
                                                                                                class="elementor-widget-wrap">
                                                                                                <div
                                                                                                    class="elementor-element elementor-element-b8b6b69 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-invisible elementor-widget elementor-widget-thegem-styled-textbox"
                                                                                                    data-id="b8b6b69"
                                                                                                    data-element_type="widget"
                                                                                                    data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;thegem_elementor_preset&quot;:&quot;basic&quot;}"
                                                                                                    data-widget_type="thegem-styled-textbox.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">

                                                                                                        <div
                                                                                                            class="gem-textbox styled-textbox-basic">


                                                                                                            <div
                                                                                                                class="gem-textbox-top gem-textbox-top-none default-fill">
                                                                                                            </div>

                                                                                                            <div
                                                                                                                class="gem-textbox-inner">

                                                                                                                <div
                                                                                                                    class="gem-textbox-content default-background icon-top gem-textbox-icon-image-wrapping-none">

                                                                                                                    <div
                                                                                                                        class="gem-texbox-icon-image-wrapper">

                                                                                                                        <div
                                                                                                                            class="icon-top ">
                                                                                                                            <div
                                                                                                                                class="gem-textbox-icon">
                                                                                                                                <div
                                                                                                                                    class="elementor-icon">
                                                                                                                                    <i aria-hidden="true"
                                                                                                                                       class="gem-mdi mdi-trophy"></i>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>


                                                                                                                    </div>

                                                                                                                    <div
                                                                                                                        class="gem-texbox-text-wrapper">


                                                                                                                        <h5 class="gem-textbox-title title-h5 bold">
                                                                                                                            MÜASİR
                                                                                                                            AVADANLIQ </h5>


                                                                                                                        <div
                                                                                                                            class="gem-textbox-description gem-text-output">
                                                                                                                            <p>
                                                                                                                                Bizim
                                                                                                                                şirkətdən
                                                                                                                                ən
                                                                                                                                müasir
                                                                                                                                avadanlıqları
                                                                                                                                əldə
                                                                                                                                edə
                                                                                                                                bilərsiniz.</p>
                                                                                                                        </div>


                                                                                                                    </div>

                                                                                                                </div>

                                                                                                            </div>


                                                                                                            <div
                                                                                                                class="gem-textbox-bottom gem-textbox-bottom-none default-fill">
                                                                                                            </div>

                                                                                                            <a href="#"
                                                                                                               target="_blank"
                                                                                                               rel="nofollow"
                                                                                                               class="gem-styled-textbox-link"></a>


                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-b960ec1"
                                                                                        data-id="b960ec1"
                                                                                        data-element_type="column">
                                                                                        <div
                                                                                            class="elementor-column-wrap elementor-element-populated">
                                                                                            <div
                                                                                                class="elementor-widget-wrap">
                                                                                                <div
                                                                                                    class="elementor-element elementor-element-c851119 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-invisible elementor-widget elementor-widget-thegem-styled-textbox"
                                                                                                    data-id="c851119"
                                                                                                    data-element_type="widget"
                                                                                                    data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:200,&quot;thegem_elementor_preset&quot;:&quot;basic&quot;}"
                                                                                                    data-widget_type="thegem-styled-textbox.default">
                                                                                                    <div
                                                                                                        class="elementor-widget-container">

                                                                                                        <div
                                                                                                            class="gem-textbox styled-textbox-basic">


                                                                                                            <div
                                                                                                                class="gem-textbox-top gem-textbox-top-none default-fill">
                                                                                                            </div>

                                                                                                            <div
                                                                                                                class="gem-textbox-inner">

                                                                                                                <div
                                                                                                                    class="gem-textbox-content default-background icon-top gem-textbox-icon-image-wrapping-none">

                                                                                                                    <div
                                                                                                                        class="gem-texbox-icon-image-wrapper">

                                                                                                                        <div
                                                                                                                            class="icon-top ">
                                                                                                                            <div
                                                                                                                                class="gem-textbox-icon">
                                                                                                                                <div
                                                                                                                                    class="elementor-icon">
                                                                                                                                    <i aria-hidden="true"
                                                                                                                                       class="gem-mdi mdi-content-paste"></i>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>


                                                                                                                    </div>

                                                                                                                    <div
                                                                                                                        class="gem-texbox-text-wrapper">


                                                                                                                        <h5 class="gem-textbox-title title-h5 bold">
                                                                                                                            KONSULTASİYA </h5>


                                                                                                                        <div
                                                                                                                            class="gem-textbox-description gem-text-output">
                                                                                                                            <p>
                                                                                                                                Avadanlıq
                                                                                                                                seçməkdə
                                                                                                                                çətinlik
                                                                                                                                çəkirsinizsə
                                                                                                                                bizə
                                                                                                                                zəng
                                                                                                                                etməklə
                                                                                                                                məlumat
                                                                                                                                ala
                                                                                                                                bilərsiniz.</p>
                                                                                                                        </div>


                                                                                                                    </div>

                                                                                                                </div>

                                                                                                            </div>


                                                                                                            <div
                                                                                                                class="gem-textbox-bottom gem-textbox-bottom-none default-fill">
                                                                                                            </div>

                                                                                                            <a href="#"
                                                                                                               target="_blank"
                                                                                                               rel="nofollow"
                                                                                                               class="gem-styled-textbox-link"></a>


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
                                                        </div>
                                                    </div>
                                                </section>
                                                @if($historyItems->isNotEmpty())
                                                    <section
                                                        class="elementor-section elementor-top-section elementor-element elementor-element-1fb5141 elementor-hidden-tablet elementor-hidden-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                        data-id="1fb5141" data-element_type="section"
                                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                        <div class="elementor-container elementor-column-gap-thegem">
                                                            <div class="elementor-row">
                                                                <div
                                                                    class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8ceccb2"
                                                                    data-id="8ceccb2" data-element_type="column">
                                                                    <div
                                                                        class="elementor-column-wrap elementor-element-populated">
                                                                        <div class="elementor-widget-wrap">
                                                                            <div
                                                                                class="elementor-element elementor-element-26ed1d3 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-heading"
                                                                                data-id="26ed1d3"
                                                                                data-element_type="widget"
                                                                                data-widget_type="heading.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <h2 class="elementor-heading-title elementor-size-default">{{ trans('translations.history_block_title_home_page') }}</h2>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="elementor-element elementor-element-89ae331 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-thegem-quickfinders"
                                                                                data-id="89ae331"
                                                                                data-element_type="widget"
                                                                                data-settings="{&quot;thegem_elementor_preset&quot;:&quot;vertical-1&quot;}"
                                                                                data-widget_type="thegem-quickfinders.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <div
                                                                                        class="quickfinder quickfinder-style-vertical bubbles quickfinder-style-vertical-1">
                                                                                        @foreach($historyItems as $historyItem)
                                                                                            @if($loop->odd)
                                                                                                <div
                                                                                                    class="quickfinder-item odd lazy-loading">
                                                                                                    <div
                                                                                                        class="quickfinder-item-info-wrapper">
                                                                                                        <svg
                                                                                                            class="qf-svg-arrow-right lazy-loading-item"
                                                                                                            viewBox="0 0 50 100"
                                                                                                            data-ll-effect="fading"
                                                                                                            data-ll-item-delay="200">
                                                                                                            <use
                                                                                                                xlink:href="wp-content/themes/thegem-elementor/css/post-arrow.svg#dec-post-arrow"></use>
                                                                                                        </svg>
                                                                                                        <div
                                                                                                            class="quickfinder-item-info lazy-loading-item align-center"
                                                                                                            data-ll-effect="fading"
                                                                                                            data-ll-item-delay="200">
                                                                                                            <h4 class="quickfinder-title title-h4 light">{{ $historyItem->year }}</h4>
                                                                                                            <div
                                                                                                                class="quickfinder-description gem-text-output">
                                                                                                                <p>{{ $historyItem->{'description:'.app()->getLocale()} }}</p>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <a href="#"
                                                                                                       target="_blank"
                                                                                                       rel="nofollow"
                                                                                                       class="quickfinder-item-link"></a>
                                                                                                    <div
                                                                                                        class="quickfinder-icon-container">
                                                                                                        <div
                                                                                                            class="connector-container">
                                                                                                            <span></span>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="gem-qf-icon-image-wrapper lazy-loading-item"
                                                                                                            data-ll-effect="clip">
                                                                                                            <div
                                                                                                                class="gem-icon gem-icon-pack-fontawesome gem-icon-size-medium  gem-icon-shape-circle">
                                                                                                                <div
                                                                                                                    class="icon-hover-bg fade"></div>
                                                                                                                <div
                                                                                                                    class="gem-icon-inner">
                                                                                                                    <div
                                                                                                                        class="padding-box-inner">
                                                                <span class="gem-icon-half-1">
                                                                    <span class="back-angle"><i aria-hidden="true"
                                                                                                class="icon icon-one"></i></span>
                                                                </span>
                                                                                                                        <span
                                                                                                                            class="gem-icon-half-2">
                                                                    <span class="back-angle"><i aria-hidden="true"
                                                                                                class="icon icon-one"></i></span>
                                                                </span>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="connector-container">
                                                                                                            <span></span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            @else
                                                                                                <div
                                                                                                    class="quickfinder-item even lazy-loading">
                                                                                                    <div
                                                                                                        class="quickfinder-icon-container">
                                                                                                        <div
                                                                                                            class="connector-container">
                                                                                                            <span></span>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="gem-qf-icon-image-wrapper lazy-loading-item"
                                                                                                            data-ll-effect="clip">
                                                                                                            <div
                                                                                                                class="gem-icon gem-icon-pack-fontawesome gem-icon-size-medium  gem-icon-shape-circle">
                                                                                                                <div
                                                                                                                    class="icon-hover-bg fade"></div>
                                                                                                                <div
                                                                                                                    class="gem-icon-inner">
                                                                                                                    <div
                                                                                                                        class="padding-box-inner">
                                                                <span class="gem-icon-half-1">
                                                                    <span class="back-angle"><i aria-hidden="true"
                                                                                                class="icon icon-one"></i></span>
                                                                </span>
                                                                                                                        <span
                                                                                                                            class="gem-icon-half-2">
                                                                    <span class="back-angle"><i aria-hidden="true"
                                                                                                class="icon icon-one"></i></span>
                                                                </span>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="connector-container">
                                                                                                            <span></span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="quickfinder-item-info-wrapper">
                                                                                                        <svg
                                                                                                            class="qf-svg-arrow-left lazy-loading-item"
                                                                                                            viewBox="0 0 50 100"
                                                                                                            data-ll-effect="fading"
                                                                                                            data-ll-item-delay="">
                                                                                                            <use
                                                                                                                xlink:href="wp-content/themes/thegem-elementor/css/post-arrow.svg#dec-post-arrow"></use>
                                                                                                        </svg>
                                                                                                        <div
                                                                                                            class="quickfinder-item-info lazy-loading-item align-center"
                                                                                                            data-ll-effect="fading"
                                                                                                            data-ll-item-delay="200">
                                                                                                            <h4 class="quickfinder-title title-h4 light">{{ $historyItem->year }}</h4>
                                                                                                            <div
                                                                                                                class="quickfinder-description gem-text-output">
                                                                                                                <p>{{ $historyItem->{'description:'.app()->getLocale()} }}</p>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <a href="#"
                                                                                                       target="_blank"
                                                                                                       rel="nofollow"
                                                                                                       class="quickfinder-item-link"></a>
                                                                                                </div>
                                                                                            @endif
                                                                                        @endforeach
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                    <section
                                                        class="elementor-section elementor-top-section elementor-element elementor-element-561b6d2 elementor-hidden-desktop elementor-hidden-tablet elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                        data-id="561b6d2" data-element_type="section"
                                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                        <div class="elementor-container elementor-column-gap-thegem">
                                                            <div class="elementor-row">
                                                                <div
                                                                    class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-93f8873"
                                                                    data-id="93f8873" data-element_type="column">
                                                                    <div
                                                                        class="elementor-column-wrap elementor-element-populated">
                                                                        <div class="elementor-widget-wrap">
                                                                            <div
                                                                                class="elementor-element elementor-element-f9a2ce7 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-text-editor"
                                                                                data-id="f9a2ce7"
                                                                                data-element_type="widget"
                                                                                data-widget_type="text-editor.default">
                                                                                <div class="elementor-widget-container">
                                                                                    <div
                                                                                        class="elementor-text-editor elementor-clearfix">
                                                                                        <div class="title-h2"><span
                                                                                                style="color: #00a4ef;">bizim şirkətin <span
                                                                                                    style="color: #ffffff;">tarixi</span></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="elementor-element elementor-element-a4dfe5b elementor-hidden-desktop flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-thegem-quickfinders"
                                                                                data-id="a4dfe5b"
                                                                                data-element_type="widget"
                                                                                data-settings="{&quot;thegem_elementor_preset&quot;:&quot;grid-box-solid&quot;}"
                                                                                data-widget_type="thegem-quickfinders.default">
                                                                                <div class="elementor-widget-container">

                                                                                    <div
                                                                                        class="quickfinder row inline-row quickfinder-style-grid-box-solid">
                                                                                        @foreach($historyItems as $historyItem)
                                                                                            <div
                                                                                                class="lazy-loading  quickfinder-item inline-column col-md-3 col-sm-6 col-xs-12">

                                                                                                <div
                                                                                                    class="quickfinder-item-inner default-background icon-top icon-wrapping-none centered-box button-bottom lazy-loading-item"
                                                                                                    data-ll-effect="fading"
                                                                                                    data-ll-item-delay="200">
                                                                                                    <div
                                                                                                        class="quickfinder-item-info-wrapper">
                                                                                                        <div
                                                                                                            class="quickfinder-item-info lazy-loading-item"
                                                                                                            data-ll-effect="fading"
                                                                                                            data-ll-item-delay="200">

                                                                                                            <h4 class="quickfinder-title title-h4 light">{{ $historyItem->year }}</h4>
                                                                                                            <div
                                                                                                                class="quickfinder-description gem-text-output">
                                                                                                                <p>{{ $historyItem->{'description:'.app()->getLocale()} }}</p>
                                                                                                            </div>

                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <a href="#"
                                                                                                       target="_blank"
                                                                                                       rel="nofollow"
                                                                                                       class="quickfinder-item-link"></a>

                                                                                                </div>
                                                                                            </div>
                                                                                        @endforeach
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                @endif

                                                <section
                                                    class="elementor-section elementor-top-section elementor-element elementor-element-eb723ba elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="eb723ba" data-element_type="section"
                                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                    <div class="elementor-container elementor-column-gap-thegem">
                                                        <div class="elementor-row">
                                                            <div
                                                                class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5fc599f"
                                                                data-id="5fc599f" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div
                                                                            class="elementor-element elementor-element-08fff7d flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-text-editor"
                                                                            data-id="08fff7d"
                                                                            data-element_type="widget"
                                                                            data-widget_type="text-editor.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="elementor-text-editor elementor-clearfix">
                                                                                    <div><span
                                                                                            style="color: #ffffff; font-size: 28px;"><span
                                                                                                style="color: #00a4ef;">{!! trans('translations.how_can_we_useful') !!}</span></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-3341baa"
                                                                data-id="3341baa" data-element_type="column">
                                                                <div
                                                                    class="elementor-column-wrap elementor-element-populated">
                                                                    <div class="elementor-widget-wrap">
                                                                        <div
                                                                            class="elementor-element elementor-element-8dd7d10 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-thegem-styledbutton"
                                                                            data-id="8dd7d10"
                                                                            data-element_type="widget"
                                                                            data-settings="{&quot;thegem_button_skin&quot;:&quot;outline&quot;,&quot;stretch_full_width&quot;:&quot;yes&quot;,&quot;add_icon&quot;:&quot;yes&quot;}"
                                                                            data-widget_type="thegem-styledbutton.default">
                                                                            <div class="elementor-widget-container">
                                                                                <div
                                                                                    class="gem-button-container gem-widget-button gem-button-position-fullwidth">
                                                                                    <a class="gem-button gem-button-size-medium gem-button-text-weight-bold gem-button-style-outline gem-button-border-3"
                                                                                       href="{{ setting('whatsapp_contact_link') }}"
                                                                                       target="_blank">
		<span class="gem-inner-wrapper-btn">
							<span class="gem-button-icon">
					<i aria-hidden="true" class="fab fa-whatsapp"></i>				</span>
						<span class="gem-text-button">{{ trans('translations.ask_question') }}</span>
		</span>
                                                                                    </a>
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
@endsection
