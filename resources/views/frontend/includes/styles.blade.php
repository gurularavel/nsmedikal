<style>.tgpli-background-inited {
        background-image: none !important;
    }

    img[data-tgpli-image-inited] {
        display: none !important;
        visibility: hidden !important;
    }</style>
<script type="text/javascript">
    window.tgpLazyItemsOptions = {
        visibilityOffset: 600,
        desktopEnable: true,
        mobileEnable: true
    };
    window.tgpQueue = {
        nodes: [],
        add: function (id, data) {
            data = data || {};
            if (window.tgpLazyItems !== undefined) {
                if (this.nodes.length > 0) {
                    window.tgpLazyItems.addNodes(this.flushNodes());
                }
                window.tgpLazyItems.addNode({
                    node: document.getElementById(id),
                    data: data
                });
            } else {
                this.nodes.push({
                    node: document.getElementById(id),
                    data: data
                });
            }
        },
        flushNodes: function () {
            return this.nodes.splice(0, this.nodes.length);
        }
    };
</script>
<script type="text/javascript" async
        src="/wp-content/themes/thegem-elementor/js/thegem-pagespeed-lazy-items.js"></script>
<link rel="alternate" href="index.html" hreflang="az"/>
<link rel="alternate" href="indexc957.html?page_id=9538&amp;lang=ru" hreflang="ru"/>
<link rel="alternate" href="index355b.html?page_id=9540&amp;lang=en" hreflang="en"/>
<link rel='dns-prefetch' href='http://fonts.googleapis.com/'/>
<link rel="alternate" type="application/rss+xml" title="Ns Medikal &raquo; Qidalandırıcısı"
      href="indexd784.html?feed=rss2"/>
<link rel="alternate" type="application/rss+xml" title="Ns Medikal &raquo; Şərh Qidalandırıcısı"
      href="indexa6da.html?feed=comments-rss2"/>
<script type="text/javascript">
    /* <![CDATA[ */
    window._wpemojiSettings = {
        "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
        "ext": ".png",
        "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
        "svgExt": ".svg",
        "source": {"concatemoji": "{{config('app.url')}}\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.4.2"}
    };
    /*! This file is auto-generated */
    !function (i, n) {
        var o, s, e;

        function c(e) {
            try {
                var t = {supportTests: e, timestamp: (new Date).valueOf()};
                sessionStorage.setItem(o, JSON.stringify(t))
            } catch (e) {
            }
        }

        function p(e, t, n) {
            e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
            var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data));
            return t.every(function (e, t) {
                return e === r[t]
            })
        }

        function u(e, t, n) {
            switch (t) {
                case"flag":
                    return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e, "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");
                case"emoji":
                    return !n(e, "\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff", "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")
            }
            return !1
        }

        function f(e, t, n) {
            var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300, 150) : i.createElement("canvas"),
                a = r.getContext("2d", {willReadFrequently: !0}),
                o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
            return e.forEach(function (e) {
                o[e] = t(a, e, n)
            }), o
        }

        function t(e) {
            var t = i.createElement("script");
            t.src = e, t.defer = !0, i.head.appendChild(t)
        }

        "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
            everything: !0,
            everythingExceptFlag: !0
        }, e = new Promise(function (e) {
            i.addEventListener("DOMContentLoaded", e, {once: !0})
        }), new Promise(function (t) {
            var n = function () {
                try {
                    var e = JSON.parse(sessionStorage.getItem(o));
                    if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                } catch (e) {
                }
                return null
            }();
            if (!n) {
                if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                    var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p.toString()].join(",") + "));",
                        r = new Blob([e], {type: "text/javascript"}),
                        a = new Worker(URL.createObjectURL(r), {name: "wpTestEmojiSupports"});
                    return void (a.onmessage = function (e) {
                        c(n = e.data), a.terminate(), t(n)
                    })
                } catch (e) {
                }
                c(n = f(s, u, p))
            }
            t(n)
        }).then(function (e) {
            for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n.supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]);
            n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n.DOMReady = !1, n.readyCallback = function () {
                n.DOMReady = !0
            }
        }).then(function () {
            return e
        }).then(function () {
            var e;
            n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
        }))
    }((window, document), window._wpemojiSettings);
    /* ]]> */
</script>
<link rel='stylesheet' id='layerslider-css'
      href='/wp-content/plugins/LayerSlider/assets/static/layerslider/css/layerslider6915.css?ver=7.2.5'
      type='text/css' media='all'/>
<link rel='stylesheet' id='thegem-preloader-css'
      href='/wp-content/themes/thegem-elementor/css/thegem-preloadera78f.css?ver=5.7.1' type='text/css' media='all'/>
<style id='thegem-preloader-inline-css' type='text/css'>

    body:not(.compose-mode) .gem-icon-style-gradient span,
    body:not(.compose-mode) .gem-icon .gem-icon-half-1,
    body:not(.compose-mode) .gem-icon .gem-icon-half-2 {
        opacity: 0 !important;
    }
</style>
<link rel='stylesheet' id='thegem-reset-css'
      href='/wp-content/themes/thegem-elementor/css/thegem-reseta78f.css?ver=5.7.1' type='text/css' media='all'/>
<link rel='stylesheet' id='thegem-grid-css'
      href='/wp-content/themes/thegem-elementor/css/thegem-grida78f.css?ver=5.7.1' type='text/css' media='all'/>
<link rel='stylesheet' id='thegem-header-css'
      href='/wp-content/themes/thegem-elementor/css/thegem-headera78f.css?ver=5.7.1' type='text/css' media='all'/>
<link rel='stylesheet' id='thegem-style-css' href='/wp-content/themes/thegem-elementor/style1e39.css?ver=6.4.2'
      type='text/css' media='all'/>
<link rel='stylesheet' id='thegem-widgets-css'
      href='/wp-content/themes/thegem-elementor/css/thegem-widgetsa78f.css?ver=5.7.1' type='text/css' media='all'/>
<link rel='stylesheet' id='thegem-new-css-css'
      href='/wp-content/themes/thegem-elementor/css/thegem-new-cssa78f.css?ver=5.7.1' type='text/css' media='all'/>
<link rel='stylesheet' id='perevazka-css-css-css'
      href='/wp-content/themes/thegem-elementor/css/thegem-perevazka-cssa78f.css?ver=5.7.1' type='text/css'
      media='all'/>
<link rel='stylesheet' id='thegem-google-fonts-css'
      href='http://fonts.googleapis.com/css?family=Montserrat%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2C400italic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic%7CSource+Sans+Pro%3A200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C600%2C600italic%2C700%2C700italic%2C900%2C900italic&amp;subset=latin%2Clatin-ext%2Ccyrillic%2Ccyrillic-ext%2Cvietnamese%2Cgreek%2Cgreek-ext&amp;ver=6.4.2'
      type='text/css' media='all'/>
<link rel='stylesheet' id='thegem-custom-css'
      href='/wp-content/themes/thegem-elementor/css/custom-Vq76qBAha78f.css?ver=5.7.1' type='text/css' media='all'/>
<style id='thegem-custom-inline-css' type='text/css'>
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
        text-align: left;
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
        padding-top: 0px;
    }

    .block-content:last-of-type {
        padding-bottom: 0px;
    }

    #top-area {
        display: block;
    }

    @media (max-width: 991px) {
        #page-title {
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
<link rel='stylesheet' id='jquery-fancybox-css'
      href='/wp-content/themes/thegem-elementor/js/fancyBox/jquery.fancybox.mina78f.css?ver=5.7.1' type='text/css'
      media='all'/>
<style id='wp-emoji-styles-inline-css' type='text/css'>

    img.wp-smiley, img.emoji {
        display: inline !important;
        border: none !important;
        box-shadow: none !important;
        height: 1em !important;
        width: 1em !important;
        margin: 0 0.07em !important;
        vertical-align: -0.1em !important;
        background: none !important;
        padding: 0 !important;
    }
</style>
<link rel='stylesheet' id='wp-block-library-css'
      href='/wp-includes/css/dist/block-library/style.min1e39.css?ver=6.4.2' type='text/css' media='all'/>
<style id='classic-theme-styles-inline-css' type='text/css'>
    /*! This file is auto-generated */
    .wp-block-button__link {
        color: #fff;
        background-color: #32373c;
        border-radius: 9999px;
        box-shadow: none;
        text-decoration: none;
        padding: calc(.667em + 2px) calc(1.333em + 2px);
        font-size: 1.125em
    }

    .wp-block-file__button {
        background: #32373c;
        color: #fff;
        text-decoration: none
    }
</style>
<style id='global-styles-inline-css' type='text/css'>
    body {
        --wp--preset--color--black: #000000;
        --wp--preset--color--cyan-bluish-gray: #abb8c3;
        --wp--preset--color--white: #ffffff;
        --wp--preset--color--pale-pink: #f78da7;
        --wp--preset--color--vivid-red: #cf2e2e;
        --wp--preset--color--luminous-vivid-orange: #ff6900;
        --wp--preset--color--luminous-vivid-amber: #fcb900;
        --wp--preset--color--light-green-cyan: #7bdcb5;
        --wp--preset--color--vivid-green-cyan: #00d084;
        --wp--preset--color--pale-cyan-blue: #8ed1fc;
        --wp--preset--color--vivid-cyan-blue: #0693e3;
        --wp--preset--color--vivid-purple: #9b51e0;
        --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
        --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
        --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
        --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
        --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
        --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
        --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
        --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
        --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
        --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
        --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
        --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
        --wp--preset--font-size--small: 13px;
        --wp--preset--font-size--medium: 20px;
        --wp--preset--font-size--large: 36px;
        --wp--preset--font-size--x-large: 42px;
        --wp--preset--spacing--20: 0.44rem;
        --wp--preset--spacing--30: 0.67rem;
        --wp--preset--spacing--40: 1rem;
        --wp--preset--spacing--50: 1.5rem;
        --wp--preset--spacing--60: 2.25rem;
        --wp--preset--spacing--70: 3.38rem;
        --wp--preset--spacing--80: 5.06rem;
        --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
        --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
        --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
        --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
        --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
    }

    :where(.is-layout-flex) {
        gap: 0.5em;
    }

    :where(.is-layout-grid) {
        gap: 0.5em;
    }

    body .is-layout-flow > .alignleft {
        float: left;
        margin-inline-start: 0;
        margin-inline-end: 2em;
    }

    body .is-layout-flow > .alignright {
        float: right;
        margin-inline-start: 2em;
        margin-inline-end: 0;
    }

    body .is-layout-flow > .aligncenter {
        margin-left: auto !important;
        margin-right: auto !important;
    }

    body .is-layout-constrained > .alignleft {
        float: left;
        margin-inline-start: 0;
        margin-inline-end: 2em;
    }

    body .is-layout-constrained > .alignright {
        float: right;
        margin-inline-start: 2em;
        margin-inline-end: 0;
    }

    body .is-layout-constrained > .aligncenter {
        margin-left: auto !important;
        margin-right: auto !important;
    }

    body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
        max-width: var(--wp--style--global--content-size);
        margin-left: auto !important;
        margin-right: auto !important;
    }

    body .is-layout-constrained > .alignwide {
        max-width: var(--wp--style--global--wide-size);
    }

    body .is-layout-flex {
        display: flex;
    }

    body .is-layout-flex {
        flex-wrap: wrap;
        align-items: center;
    }

    body .is-layout-flex > * {
        margin: 0;
    }

    body .is-layout-grid {
        display: grid;
    }

    body .is-layout-grid > * {
        margin: 0;
    }

    :where(.wp-block-columns.is-layout-flex) {
        gap: 2em;
    }

    :where(.wp-block-columns.is-layout-grid) {
        gap: 2em;
    }

    :where(.wp-block-post-template.is-layout-flex) {
        gap: 1.25em;
    }

    :where(.wp-block-post-template.is-layout-grid) {
        gap: 1.25em;
    }

    .has-black-color {
        color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-color {
        color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-color {
        color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-color {
        color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-color {
        color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-color {
        color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-color {
        color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-color {
        color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-color {
        color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-color {
        color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-color {
        color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-color {
        color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-background-color {
        background-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-background-color {
        background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-background-color {
        background-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-background-color {
        background-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-background-color {
        background-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-background-color {
        background-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-background-color {
        background-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-background-color {
        background-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-background-color {
        background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-background-color {
        background-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-border-color {
        border-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-border-color {
        border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-border-color {
        border-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-border-color {
        border-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-border-color {
        border-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-border-color {
        border-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-border-color {
        border-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-border-color {
        border-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-border-color {
        border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-border-color {
        border-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
        background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
    }

    .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
        background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
    }

    .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-orange-to-vivid-red-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
    }

    .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
        background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
    }

    .has-cool-to-warm-spectrum-gradient-background {
        background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
    }

    .has-blush-light-purple-gradient-background {
        background: var(--wp--preset--gradient--blush-light-purple) !important;
    }

    .has-blush-bordeaux-gradient-background {
        background: var(--wp--preset--gradient--blush-bordeaux) !important;
    }

    .has-luminous-dusk-gradient-background {
        background: var(--wp--preset--gradient--luminous-dusk) !important;
    }

    .has-pale-ocean-gradient-background {
        background: var(--wp--preset--gradient--pale-ocean) !important;
    }

    .has-electric-grass-gradient-background {
        background: var(--wp--preset--gradient--electric-grass) !important;
    }

    .has-midnight-gradient-background {
        background: var(--wp--preset--gradient--midnight) !important;
    }

    .has-small-font-size {
        font-size: var(--wp--preset--font-size--small) !important;
    }

    .has-medium-font-size {
        font-size: var(--wp--preset--font-size--medium) !important;
    }

    .has-large-font-size {
        font-size: var(--wp--preset--font-size--large) !important;
    }

    .has-x-large-font-size {
        font-size: var(--wp--preset--font-size--x-large) !important;
    }

    .wp-block-navigation a:where(:not(.wp-element-button)) {
        color: inherit;
    }

    :where(.wp-block-post-template.is-layout-flex) {
        gap: 1.25em;
    }

    :where(.wp-block-post-template.is-layout-grid) {
        gap: 1.25em;
    }

    :where(.wp-block-columns.is-layout-flex) {
        gap: 2em;
    }

    :where(.wp-block-columns.is-layout-grid) {
        gap: 2em;
    }

    .wp-block-pullquote {
        font-size: 1.5em;
        line-height: 1.6;
    }
</style>
<link rel='stylesheet' id='chaty-front-css-css'
      href='/wp-content/plugins/chaty/css/chaty-front.min4fce.css?ver=1676836226' type='text/css' media='all'/>
<link rel='stylesheet' id='contact-form-7-css'
      href='/wp-content/plugins/contact-form-7/includes/css/styles42f0.css?ver=5.6.3' type='text/css' media='all'/>
<link rel='stylesheet' id='elementor-icons-ekiticons-css'
      href='/wp-content/plugins/elementskit-lite/modules/elementskit-icon-pack/assets/css/ekiticonsde39.css?ver=2.7.3'
      type='text/css' media='all'/>
<link rel='stylesheet' id='elementor-icons-css'
      href='/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min91ce.css?ver=5.16.0'
      type='text/css' media='all'/>
<link rel='stylesheet' id='elementor-frontend-legacy-css'
      href='/wp-content/plugins/elementor/assets/css/frontend-legacy.minac9e.css?ver=3.7.7' type='text/css'
      media='all'/>
<link rel='stylesheet' id='elementor-frontend-css'
      href='/wp-content/plugins/elementor/assets/css/frontend-lite.minac9e.css?ver=3.7.7' type='text/css'
      media='all'/>
<link rel='stylesheet' id='elementor-post-40-css'
      href='/wp-content/uploads/elementor/css/post-40319d.css?ver=1704703113' type='text/css' media='all'/>
<link rel='stylesheet' id='font-awesome-5-all-css'
      href='/wp-content/plugins/elementor/assets/lib/font-awesome/css/all.mina4ab.css?ver=4.9.39' type='text/css'
      media='all'/>
<link rel='stylesheet' id='font-awesome-4-shim-css'
      href='/wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.minac9e.css?ver=3.7.7' type='text/css'
      media='all'/>
<link rel='stylesheet' id='elementor-post-477-css'
      href='/wp-content/uploads/elementor/css/post-4770f38.css?ver=1704703547' type='text/css' media='all'/>
<link rel='stylesheet' id='ekit-widget-styles-css'
      href='/wp-content/plugins/elementskit-lite/widgets/init/assets/css/widget-stylesde39.css?ver=2.7.3'
      type='text/css' media='all'/>
<link rel='stylesheet' id='ekit-responsive-css'
      href='/wp-content/plugins/elementskit-lite/widgets/init/assets/css/responsivede39.css?ver=2.7.3'
      type='text/css' media='all'/>
<link rel='stylesheet' id='eael-general-css'
      href='/wp-content/plugins/essential-addons-for-elementor-lite/assets/front-end/css/view/general.min03e2.css?ver=5.4.6'
      type='text/css' media='all'/>
<link rel='stylesheet' id='google-fonts-1-css'
      href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMontserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=6.4.2'
      type='text/css' media='all'/>


<link rel='stylesheet' id='elementor-icons-shared-0-css'
      href='/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min52d5.css?ver=5.15.3'
      type='text/css' media='all'/>
<link rel='stylesheet' id='elementor-icons-fa-solid-css'
      href='/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min52d5.css?ver=5.15.3' type='text/css'
      media='all'/>
<link rel='stylesheet' id='elementor-icons-fa-brands-css'
      href='/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min52d5.css?ver=5.15.3' type='text/css'
      media='all'/>
<script type="text/javascript">function fullHeightRow() {
        var fullHeight,
            offsetTop,
            element = document.getElementsByClassName('vc_row-o-full-height')[0];
        if (element) {
            fullHeight = window.innerHeight;
            offsetTop = window.pageYOffset + element.getBoundingClientRect().top;
            if (offsetTop < fullHeight) {
                fullHeight = 100 - offsetTop / (fullHeight / 100);
                element.style.minHeight = fullHeight + 'vh'
            }
        }
    }

    fullHeightRow();</script>
<!--[if lt IE 9]>
<script type="text/javascript" src="/wp-content/themes/thegem-elementor/js/html5.js?ver=5.7.1"
        id="html5-js"></script>
<![endif]-->
<script type="text/javascript" src="/wp-includes/js/jquery/jquery.minf43b.js?ver=3.7.1" id="jquery-core-js"></script>
<script type="text/javascript" src="/wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1"
        id="jquery-migrate-js"></script>
<script type="text/javascript" id="chaty-front-end-js-extra">
    /* <![CDATA[ */
    var chaty_settings = {
        "ajax_url": "{{config('app.url')}}\/wp-admin\/admin-ajax.php", "analytics": "0", "chaty_widgets": [{
            "id": 0,
            "identifier": 0,
            "settings": {
                "show_close_button": 1,
                "position": "right",
                "custom_position": 1,
                "bottom_spacing": "25",
                "side_spacing": "25",
                "icon_view": "vertical",
                "default_state": "click",
                "cta_text": "",
                "cta_text_color": "rgb(0, 0, 0)",
                "cta_bg_color": "#ffffff",
                "show_cta": "first_click",
                "is_pending_mesg_enabled": "off",
                "pending_mesg_count": "1",
                "pending_mesg_count_color": "#ffffff",
                "pending_mesg_count_bgcolor": "#dd0000",
                "widget_icon": "chat-bubble",
                "widget_icon_url": "",
                "font_family": "-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Oxygen-Sans,Ubuntu,Cantarell,Helvetica Neue,sans-serif",
                "widget_size": "54",
                "custom_widget_size": "54",
                "is_google_analytics_enabled": 0,
                "close_text": "Gizl\u0259t",
                "widget_color": "#86CD91",
                "widget_rgb_color": "134,205,145",
                "has_custom_css": 0,
                "custom_css": "",
                "widget_token": "02e6803721",
                "widget_index": "",
                "attention_effect": ""
            },
            "triggers": {
                "has_time_delay": 1,
                "time_delay": "0",
                "exit_intent": 0,
                "has_display_after_page_scroll": 0,
                "display_after_page_scroll": "0",
                "auto_hide_widget": 0,
                "hide_after": 0,
                "show_on_pages_rules": [],
                "time_diff": 0,
                "has_date_scheduling_rules": 0,
                "date_scheduling_rules": {"start_date_time": "", "end_date_time": ""},
                "date_scheduling_rules_timezone": 0,
                "day_hours_scheduling_rules_timezone": 0,
                "has_day_hours_scheduling_rules": [],
                "day_hours_scheduling_rules": [],
                "day_time_diff": 0,
                "show_on_direct_visit": 0,
                "show_on_referrer_social_network": 0,
                "show_on_referrer_search_engines": 0,
                "show_on_referrer_google_ads": 0,
                "show_on_referrer_urls": [],
                "has_show_on_specific_referrer_urls": 0,
                "has_traffic_source": 0,
                "has_countries": 0,
                "countries": [],
                "has_target_rules": 0
            },
            "channels": [{
                "channel": "Whatsapp",
                "value": "994514567187",
                "hover_text": "WhatsApp",
                "svg_icon": "<svg aria-hidden=\"true\" class=\"ico_d \" width=\"39\" height=\"39\" viewBox=\"0 0 39 39\" fill=\"none\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\" style=\"transform: rotate(0deg);\"><circle class=\"color-element\" cx=\"19.4395\" cy=\"19.4395\" r=\"19.4395\" fill=\"#49E670\"\/><path d=\"M12.9821 10.1115C12.7029 10.7767 11.5862 11.442 10.7486 11.575C10.1902 11.7081 9.35269 11.8411 6.84003 10.7767C3.48981 9.44628 1.39593 6.25317 1.25634 6.12012C1.11674 5.85403 2.13001e-06 4.39053 2.13001e-06 2.92702C2.13001e-06 1.46351 0.83755 0.665231 1.11673 0.399139C1.39592 0.133046 1.8147 1.01506e-06 2.23348 1.01506e-06C2.37307 1.01506e-06 2.51267 1.01506e-06 2.65226 1.01506e-06C2.93144 1.01506e-06 3.21063 -2.02219e-06 3.35022 0.532183C3.62941 1.19741 4.32736 2.66092 4.32736 2.79397C4.46696 2.92702 4.46696 3.19311 4.32736 3.32616C4.18777 3.59225 4.18777 3.59224 3.90858 3.85834C3.76899 3.99138 3.6294 4.12443 3.48981 4.39052C3.35022 4.52357 3.21063 4.78966 3.35022 5.05576C3.48981 5.32185 4.18777 6.38622 5.16491 7.18449C6.42125 8.24886 7.39839 8.51496 7.81717 8.78105C8.09636 8.91409 8.37554 8.9141 8.65472 8.648C8.93391 8.38191 9.21309 7.98277 9.49228 7.58363C9.77146 7.31754 10.0507 7.1845 10.3298 7.31754C10.609 7.45059 12.2841 8.11582 12.5633 8.38191C12.8425 8.51496 13.1217 8.648 13.1217 8.78105C13.1217 8.78105 13.1217 9.44628 12.9821 10.1115Z\" transform=\"translate(12.9597 12.9597)\" fill=\"#FAFAFA\"\/><path d=\"M0.196998 23.295L0.131434 23.4862L0.323216 23.4223L5.52771 21.6875C7.4273 22.8471 9.47325 23.4274 11.6637 23.4274C18.134 23.4274 23.4274 18.134 23.4274 11.6637C23.4274 5.19344 18.134 -0.1 11.6637 -0.1C5.19344 -0.1 -0.1 5.19344 -0.1 11.6637C-0.1 13.9996 0.624492 16.3352 1.93021 18.2398L0.196998 23.295ZM5.87658 19.8847L5.84025 19.8665L5.80154 19.8788L2.78138 20.8398L3.73978 17.9646L3.75932 17.906L3.71562 17.8623L3.43104 17.5777C2.27704 15.8437 1.55796 13.8245 1.55796 11.6637C1.55796 6.03288 6.03288 1.55796 11.6637 1.55796C17.2945 1.55796 21.7695 6.03288 21.7695 11.6637C21.7695 17.2945 17.2945 21.7695 11.6637 21.7695C9.64222 21.7695 7.76778 21.1921 6.18227 20.039L6.17557 20.0342L6.16817 20.0305L5.87658 19.8847Z\" transform=\"translate(7.7758 7.77582)\" fill=\"white\" stroke=\"white\" stroke-width=\"0.2\"\/><\/svg>",
                "is_desktop": 1,
                "is_mobile": 1,
                "icon_color": "#49E670",
                "icon_rgb_color": "73,230,112",
                "channel_type": "Whatsapp",
                "custom_image_url": "",
                "order": "",
                "pre_set_message": "",
                "is_use_web_version": "1",
                "is_open_new_tab": "1",
                "is_default_open": "0",
                "has_welcome_message": "0",
                "chat_welcome_message": "<p>How can I help you? :)<\/p>",
                "qr_code_image_url": "",
                "mail_subject": "",
                "channel_account_type": "personal",
                "contact_form_settings": [],
                "contact_fields": [],
                "url": "https:\/\/web.whatsapp.com\/send?phone=994514567187",
                "mobile_target": "",
                "desktop_target": "_blank",
                "target": "_blank",
                "is_agent": 0,
                "agent_data": [],
                "header_text": "",
                "header_sub_text": "",
                "header_bg_color": "",
                "header_text_color": "",
                "widget_token": "02e6803721",
                "widget_index": "",
                "click_event": ""
            }]
        }], "data_analytics_settings": "off"
    };
    /* ]]> */
</script>
<script type="text/javascript" src="/wp-content/plugins/chaty/js/cht-front-script.min4fce.js?ver=1676836226"
        id="chaty-front-end-js"></script>
<script type="text/javascript" id="zilla-likes-js-extra">
    /* <![CDATA[ */
    var zilla_likes = {"ajaxurl": "https:\/\/nsmedikal.az\/wp-admin\/admin-ajax.php"};
    /* ]]> */
</script>
<script type="text/javascript" src="/wp-content/plugins/zilla-likes/scripts/zilla-likes1e39.js?ver=6.4.2"
        id="zilla-likes-js"></script>
<script type="text/javascript"
        src="/wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.minac9e.js?ver=3.7.7"
        id="font-awesome-4-shim-js"></script>
<meta name="generator"
      content="Powered by LayerSlider 7.2.5 - Multi-Purpose, Responsive, Parallax, Mobile-Friendly Slider Plugin for WordPress."/>
<!-- LayerSlider updates and docs at: https://layerslider.com -->
<link rel="https://api.w.org/" href="index52f0.json?rest_route=/"/>
<link rel="alternate" type="application/json" href="index7f5d.json?rest_route=/wp/v2/pages/477"/>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.html?rsd"/>
<meta name="generator" content="WordPress 6.4.2"/>
<link rel="canonical" href="index.html"/>
<link rel='shortlink' href='index.html'/>
<link rel="alternate" type="application/json+oembed"
      href="index81fd.json?rest_route=%2Foembed%2F1.0%2Fembed&amp;url=https%3A%2F%2Fnsmedikal.az%2F"/>
<link rel="alternate" type="text/xml+oembed"
      href="index8cdc.php?rest_route=%2Foembed%2F1.0%2Fembed&amp;url=https%3A%2F%2Fnsmedikal.az%2F&amp;format=xml"/>
<meta name="generator"
      content="Powered by Slider Revolution 6.5.25 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface."/>
<link rel="icon" href="/wp-content/uploads/2022/09/favicon.png" sizes="32x32"/>
<link rel="icon" href="/wp-content/uploads/2022/09/favicon.png" sizes="192x192"/>
<link rel="apple-touch-icon" href="/wp-content/uploads/2022/09/favicon.png"/>
<meta name="msapplication-TileImage" content="/wp-content/uploads/2022/09/favicon.png"/>
<script>function setREVStartSize(e) {
        //window.requestAnimationFrame(function() {
        window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
        window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
        try {
            var pw = document.getElementById(e.c).parentNode.offsetWidth,
                newh;
            pw = pw === 0 || isNaN(pw) || (e.l == "fullwidth" || e.layout == "fullwidth") ? window.RSIW : pw;
            e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
            e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
            e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
            e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
            e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
            e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
            e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
            if (e.layout === "fullscreen" || e.l === "fullscreen")
                newh = Math.max(e.mh, window.RSIH);
            else {
                e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                for (var i in e.rl) if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
                e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
                e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                for (var i in e.rl) if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];

                var nl = new Array(e.rl.length),
                    ix = 0,
                    sl;
                e.tabw = e.tabhide >= pw ? 0 : e.tabw;
                e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
                e.tabh = e.tabhide >= pw ? 0 : e.tabh;
                e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
                for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
                sl = nl[0];
                for (var i in nl) if (sl > nl[i] && nl[i] > 0) {
                    sl = nl[i];
                    ix = i;
                }
                var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
                newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
            }
            var el = document.getElementById(e.c);
            if (el !== null && el) el.style.height = newh + "px";
            el = document.getElementById(e.c + "_wrapper");
            if (el !== null && el) {
                el.style.height = newh + "px";
                el.style.display = "block";
            }
        } catch (e) {
            console.log("Failure at Presize of Slider:" + e)
        }
        //});
    };</script>
<style type="text/css" id="wp-custom-css">
    .elementor-widget-tabs.elementor-tabs-view-vertical .elementor-tab-desktop-title.elementor-active {
        border-right-style: none;
        color: #CC0019;

    }        </style>


</head>


<body data-rsssl=1
      class="home page-template page-template-page-fullwidth page-template-page-fullwidth-php page page-id-477 elementor-default elementor-kit-40 elementor-page elementor-page-477">

<script type="text/javascript">
    var gemSettings = {
        "isTouch": "",
        "forcedLasyDisabled": "",
        "tabletPortrait": "1",
        "tabletLandscape": "1",
        "topAreaMobileDisable": "",
        "parallaxDisabled": "",
        "fillTopArea": "",
        "themePath": "{{config('app.url')}}\/wp-content\/themes\/thegem-elementor",
        "rootUrl": "{{config('app.url')}}",
        "mobileEffectsEnabled": "",
        "isRTL": ""
    };
    (function () {
        function isTouchDevice() {
            return (('ontouchstart' in window) ||
                (navigator.MaxTouchPoints > 0) ||
                (navigator.msMaxTouchPoints > 0));
        }

        window.gemSettings.isTouch = isTouchDevice();

        function userAgentDetection() {
            var ua = navigator.userAgent.toLowerCase(),
                platform = navigator.platform.toLowerCase(),
                UA = ua.match(/(opera|ie|firefox|chrome|version)[\s\/:]([\w\d\.]+)?.*?(safari|version[\s\/:]([\w\d\.]+)|$)/) || [null, 'unknown', 0],
                mode = UA[1] == 'ie' && document.documentMode;

            window.gemBrowser = {
                name: (UA[1] == 'version') ? UA[3] : UA[1],
                version: UA[2],
                platform: {
                    name: ua.match(/ip(?:ad|od|hone)/) ? 'ios' : (ua.match(/(?:webos|android)/) || platform.match(/mac|win|linux/) || ['other'])[0]
                }
            };
        }

        window.updateGemClientSize = function () {
            if (window.gemOptions == null || window.gemOptions == undefined) {
                window.gemOptions = {
                    first: false,
                    clientWidth: 0,
                    clientHeight: 0,
                    innerWidth: -1
                };
            }

            window.gemOptions.clientWidth = window.innerWidth || document.documentElement.clientWidth;
            if (document.body != null && !window.gemOptions.clientWidth) {
                window.gemOptions.clientWidth = document.body.clientWidth;
            }

            window.gemOptions.clientHeight = window.innerHeight || document.documentElement.clientHeight;
            if (document.body != null && !window.gemOptions.clientHeight) {
                window.gemOptions.clientHeight = document.body.clientHeight;
            }
        };

        window.updateGemInnerSize = function (width) {
            window.gemOptions.innerWidth = width != undefined ? width : (document.body != null ? document.body.clientWidth : 0);
        };

        userAgentDetection();
        window.updateGemClientSize(true);

        window.gemSettings.lasyDisabled = window.gemSettings.forcedLasyDisabled || (!window.gemSettings.mobileEffectsEnabled && (window.gemSettings.isTouch || window.gemOptions.clientWidth <= 800));
    })();
    (function () {
        if (window.gemBrowser.name == 'safari') {
            try {
                var safariVersion = parseInt(window.gemBrowser.version);
            } catch (e) {
                var safariVersion = 0;
            }
            if (safariVersion >= 9) {
                window.gemSettings.parallaxDisabled = true;
                window.gemSettings.fillTopArea = true;
            }
        }
    })();
    (function () {
        var fullwithData = {
            page: null,
            pageWidth: 0,
            pageOffset: {},
            fixVcRow: true,
            pagePaddingLeft: 0
        };

        function updateFullwidthData() {
            fullwithData.pageOffset = fullwithData.page.getBoundingClientRect();
            fullwithData.pageWidth = parseFloat(fullwithData.pageOffset.width);
            fullwithData.pagePaddingLeft = 0;

            if (fullwithData.page.className.indexOf('vertical-header') != -1) {
                fullwithData.pagePaddingLeft = 45;
                if (fullwithData.pageWidth >= 1600) {
                    fullwithData.pagePaddingLeft = 360;
                }
                if (fullwithData.pageWidth < 980) {
                    fullwithData.pagePaddingLeft = 0;
                }
            }
        }

        function gem_fix_fullwidth_position(element) {
            if (element == null) {
                return false;
            }

            if (fullwithData.page == null) {
                fullwithData.page = document.getElementById('page');
                updateFullwidthData();
            }

            /*if (fullwithData.pageWidth < 1170) {
            return false;
        }*/

            if (!fullwithData.fixVcRow) {
                return false;
            }

            if (element.previousElementSibling != null && element.previousElementSibling != undefined && element.previousElementSibling.className.indexOf('fullwidth-block') == -1) {
                var elementParentViewportOffset = element.previousElementSibling.getBoundingClientRect();
            } else {
                var elementParentViewportOffset = element.parentNode.getBoundingClientRect();
            }

            /*if (elementParentViewportOffset.top > window.gemOptions.clientHeight) {
            fullwithData.fixVcRow = false;
            return false;
        }*/

            if (element.className.indexOf('vc_row') != -1) {
                var elementMarginLeft = -21;
                var elementMarginRight = -21;
            } else {
                var elementMarginLeft = 0;
                var elementMarginRight = 0;
            }

            var offset = parseInt(fullwithData.pageOffset.left + 0.5) - parseInt((elementParentViewportOffset.left < 0 ? 0 : elementParentViewportOffset.left) + 0.5) - elementMarginLeft + fullwithData.pagePaddingLeft;
            var offsetKey = window.gemSettings.isRTL ? 'right' : 'left';

            element.style.position = 'relative';
            element.style[offsetKey] = offset + 'px';
            element.style.width = fullwithData.pageWidth - fullwithData.pagePaddingLeft + 'px';

            if (element.className.indexOf('vc_row') == -1) {
                element.setAttribute('data-fullwidth-updated', 1);
            }

            if (element.className.indexOf('vc_row') != -1 && !element.hasAttribute('data-vc-stretch-content')) {
                var el_full = element.parentNode.querySelector('.vc_row-full-width-before');
                var padding = -1 * offset;
                0 > padding && (padding = 0);
                var paddingRight = fullwithData.pageWidth - padding - el_full.offsetWidth + elementMarginLeft + elementMarginRight;
                0 > paddingRight && (paddingRight = 0);
                element.style.paddingLeft = padding + 'px';
                element.style.paddingRight = paddingRight + 'px';
            }
        }

        window.gem_fix_fullwidth_position = gem_fix_fullwidth_position;

        document.addEventListener('DOMContentLoaded', function () {
            var classes = [];

            if (window.gemSettings.isTouch) {
                document.body.classList.add('thegem-touch');
            }

            if (window.gemSettings.lasyDisabled && !window.gemSettings.forcedLasyDisabled) {
                document.body.classList.add('thegem-effects-disabled');
            }
        });

        if (window.gemSettings.parallaxDisabled) {
            var head = document.getElementsByTagName('head')[0],
                link = document.createElement('style');
            link.rel = 'stylesheet';
            link.type = 'text/css';
            link.innerHTML = ".fullwidth-block.fullwidth-block-parallax-fixed .fullwidth-block-background { background-attachment: scroll !important; }";
            head.appendChild(link);
        }
    })();

    (function () {
        setTimeout(function () {
            var preloader = document.getElementById('page-preloader');
            if (preloader != null && preloader != undefined) {
                preloader.className += ' preloader-loaded';
            }
        }, window.pagePreloaderHideTime || 1000);
    })();
</script>
