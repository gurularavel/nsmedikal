@extends('layouts.frontend')

@section('content')
    <div id="main" class="site-main page__top-shadow visible">

        <div id="main-content" class="main-content">

            <div id="page-title" class="page-title-block page-title-alignment-center page-title-style-1 ">


                <div class="container">
                    <div class="page-title-inner">
                        <div class="page-title-title"><h1
                                style="color:#ffffff;">{{ $companyCategory->{'name:' . app()->getLocale()} }}</h1></div>
                    </div>
                </div>

            </div>
            <div class="block-content">
                <div class="panel">

                    <div class="panel-center">
                        <article id="post-8763" class="post-8763 page type-page status-publish">

                            <div class="entry-content post-content">

                                <div class="container">


                                </div><!-- .container -->

                                <div class="fullwidth-content">
                                    <div data-elementor-type="wp-page" data-elementor-id="8763"
                                         class="elementor elementor-8763">
                                        <div class="elementor-inner">
                                            <div class="elementor-section-wrap">
                                                @forelse($companyCategory->companies as $company)

                                                    <section
                                                        class="elementor-section elementor-top-section elementor-element elementor-element-f858d0d elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                        data-id="f858d0d" data-element_type="section">
                                                        <div class="elementor-container elementor-column-gap-thegem">
                                                            <div class="elementor-row">
                                                                <div
                                                                    class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3a55667"
                                                                    data-id="3a55667" data-element_type="column">
                                                                    <div
                                                                        class="elementor-column-wrap elementor-element-populated">
                                                                        <div class="elementor-widget-wrap">
                                                                            <div
                                                                                class="elementor-element elementor-element-f69c085 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-image"
                                                                                data-id="f69c085"
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
                                                                                        <img decoding="async"
                                                                                             width="135"
                                                                                             height="70"
                                                                                             src="{{ asset('uploads/companies/'.$company->image) }}"
                                                                                             class="attachment-large size-large"
                                                                                             alt="{{ $company->name }}"/>
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
                                                        class="elementor-section elementor-top-section elementor-element elementor-element-2c01af1 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                        data-id="2c01af1" data-element_type="section">
                                                        <div class="elementor-container elementor-column-gap-thegem">
                                                            <div class="elementor-row">
                                                                <div
                                                                    class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-cf4723b"
                                                                    data-id="cf4723b" data-element_type="column">
                                                                    <div
                                                                        class="elementor-column-wrap elementor-element-populated">
                                                                        <div class="elementor-widget-wrap">
                                                                            <div
                                                                                class="elementor-element elementor-element-05fdb41 flex-horizontal-align-default flex-horizontal-align-tablet-default flex-horizontal-align-mobile-default flex-vertical-align-default flex-vertical-align-tablet-default flex-vertical-align-mobile-default elementor-widget elementor-widget-text-editor"
                                                                                data-id="05fdb41"
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
                                                                                        <p><strong>{{ $company->name }}:</strong>&nbsp;{!! $company->{'description:' . app()->getLocale()} !!}</p>
                                                                                        <p><strong>{{ trans('translations.products') }}:</strong>&nbsp;{{ $company->{'products:' . app()->getLocale()} }}</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                @empty
                                                    <h5 style="text-align: center">{{ trans('translations.no_data_found') }}</h5>
                                                @endforelse
                                                <section
                                                    class="elementor-section elementor-top-section elementor-element elementor-element-71bf78d elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                                    data-id="71bf78d" data-element_type="section">
                                                    <div class="elementor-container elementor-column-gap-thegem">
                                                        <div class="elementor-row">
                                                            <div
                                                                class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ea1d2fa"
                                                                data-id="ea1d2fa" data-element_type="column">
                                                                <div class="elementor-column-wrap">
                                                                    <div class="elementor-widget-wrap">
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
@push('styles')
    <style id='thegem-custom-inline-css' type='text/css'>
        #page-title {background-color: #00A4EFFF;padding-top: 80px;padding-bottom: 80px;}#page-title h1,#page-title .title-rich-content {color: #ffffff;}.page-title-excerpt {color: #ffffff;margin-top: 18px;}#page-title .page-title-title {margin-top: 0px;}#page-title .page-title-title .styled-subtitle.light,#page-title .page-title-excerpt .styled-subtitle.light{ font-family: var(--thegem-to-light-title-font-family); font-style: normal; font-weight: normal;}#page-title .page-title-title .title-main-menu,#page-title .page-title-excerpt .title-main-menu{ font-family: var(--thegem-to-menu-font-family); font-style: var(--thegem-to-menu-font-style); font-weight: var(--thegem-to-menu-font-weight); text-transform: var(--thegem-to-menu-text-transform); font-size: var(--thegem-to-menu-font-size); line-height: var(--thegem-to-menu-line-height); letter-spacing: var(--thegem-to-menu-letter-spacing, 0);}#page-title .page-title-title .title-main-menu.light,#page-title .page-title-excerpt .title-main-menu.light{ font-family: var(--thegem-to-light-title-font-family); font-style: normal; font-weight: normal;}#page-title .page-title-title .title-body,#page-title .page-title-excerpt .title-body{ font-family: var(--thegem-to-body-font-family); font-style: var(--thegem-to-body-font-style); font-weight: var(--thegem-to-body-font-weight); text-transform: var(--thegem-to-body-text-transform, none); font-size: var(--thegem-to-body-font-size); line-height: var(--thegem-to-body-line-height); letter-spacing: var(--thegem-to-body-letter-spacing);}#page-title .page-title-title .title-body.light,#page-title .page-title-excerpt .title-body.light{ font-family: var(--thegem-to-light-title-font-family); font-style: normal; font-weight: normal;}#page-title .page-title-title .title-tiny-body,#page-title .page-title-excerpt .title-tiny-body{ font-family: var(--thegem-to-body-tiny-font-family); font-style: var(--thegem-to-body-tiny-font-style); font-weight: var(--thegem-to-body-tiny-font-weight); text-transform: var(--thegem-to-body-tiny-text-transform, none); font-size: var(--thegem-to-body-tiny-font-size); line-height: var(--thegem-to-body-tiny-line-height); letter-spacing: var(--thegem-to-body-tiny-letter-spacing);}#page-title .page-title-title .title-tiny-body.light,#page-title .page-title-excerpt .title-tiny-body.light{ font-family: var(--thegem-to-light-title-font-family); font-style: normal; font-weight: normal;}.page-title-inner,body .breadcrumbs{padding-left: 0px;padding-right: 0px;}body .breadcrumbs,body .breadcrumbs a,body .bc-devider:before {color: #3c3950;}body .breadcrumbs .current {	color: #00a4ef;	border-bottom: 3px solid #00a4ef;}body .breadcrumbs a:hover {	color: #00a4ef;}body .page-title-block .breadcrumbs-container{	text-align: center;}.page-breadcrumbs{	position: relative;	display: flex;	width: 100%;	align-items: center;	min-height: 70px;	z-index: 5;}.fullwidth-content > .page-breadcrumbs {	padding-left: 21px;	padding-right: 21px;}.page-breadcrumbs.page-breadcrumbs--left{	justify-content: flex-start;	text-align: left;}.page-breadcrumbs.page-breadcrumbs--center{	justify-content: center;	text-align: center;}.page-breadcrumbs.page-breadcrumbs--right{	justify-content: flex-end;	text-align: right;}.page-breadcrumbs ul{	display: flex;	flex-wrap: wrap;	padding: 0;	margin: 0;	list-style-type: none;}.page-breadcrumbs ul li{	position: relative;}.page-breadcrumbs ul li:not(:last-child){	padding-right: 20px;	margin-right: 5px;}.page-breadcrumbs ul li:not(:last-child):after{	font-family: 'thegem-icons';	content: '\e601';	position: absolute;	right: 0;	top: 50%;	transform: translateY(-50%);	line-height: 1;}.page-breadcrumbs ul li a,.page-breadcrumbs ul li:not(:last-child):after{	color: #99A9B5FF;}.page-breadcrumbs ul li{	color: #3C3950FF;}.page-breadcrumbs ul li a:hover{	color: #3C3950FF;}.block-content {padding-top: 135px;}.block-content:last-of-type {padding-bottom: 110px;}#top-area {	display: block;}@media (max-width: 991px) {#page-title {padding-top: 80px;padding-bottom: 80px;}.page-title-inner, body .breadcrumbs{padding-left: 0px;padding-right: 0px;}.page-title-excerpt {margin-top: 18px;}#page-title .page-title-title {margin-top: 0px;}.block-content {}.block-content:last-of-type {}#top-area {	display: block;}}@media (max-width: 767px) {#page-title {padding-top: 80px;padding-bottom: 80px;}.page-title-inner,body .breadcrumbs{padding-left: 0px;padding-right: 0px;}.page-title-excerpt {margin-top: 18px;}#page-title .page-title-title {margin-top: 0px;}.block-content {}.block-content:last-of-type {}#top-area {	display: none;}}
    </style>
@endpush
