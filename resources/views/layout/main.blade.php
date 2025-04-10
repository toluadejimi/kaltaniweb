<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Breno</title>
    <meta name='robots' content='max-image-preview:large' />
    <style>
        img:is([sizes="auto" i], [sizes^="auto," i]) {
            contain-intrinsic-size: 3000px 1500px
        }
    </style>
    <link rel='dns-prefetch' href='https://cdnjs.cloudflare.com/' />
    <link rel="alternate" type="application/rss+xml" title="Breno &raquo; Feed" href="feed/index.html" />
    <link rel="alternate" type="application/rss+xml" title="Breno &raquo; Comments Feed" href="comments/feed/index.html" />
    <script>
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/kits.krakenbox.net\/breno\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.7.2"
            }
        };
        /*! This file is auto-generated */
        ! function(i, n) {
            var o, s, e;

            function c(e) {
                try {
                    var t = {
                        supportTests: e,
                        timestamp: (new Date).valueOf()
                    };
                    sessionStorage.setItem(o, JSON.stringify(t))
                } catch (e) {}
            }

            function p(e, t, n) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                    r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                return t.every(function(e, t) {
                    return e === r[t]
                })
            }

            function u(e, t, n) {
                switch (t) {
                    case "flag":
                        return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e, "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");
                    case "emoji":
                        return !n(e, "\ud83d\udc26\u200d\u2b1b", "\ud83d\udc26\u200b\u2b1b")
                }
                return !1
            }

            function f(e, t, n) {
                var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300, 150) : i.createElement("canvas"),
                    a = r.getContext("2d", {
                        willReadFrequently: !0
                    }),
                    o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
                return e.forEach(function(e) {
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
            }, e = new Promise(function(e) {
                i.addEventListener("DOMContentLoaded", e, {
                    once: !0
                })
            }), new Promise(function(t) {
                var n = function() {
                    try {
                        var e = JSON.parse(sessionStorage.getItem(o));
                        if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                    } catch (e) {}
                    return null
                }();
                if (!n) {
                    if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                        var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p.toString()].join(",") + "));",
                            r = new Blob([e], {
                                type: "text/javascript"
                            }),
                            a = new Worker(URL.createObjectURL(r), {
                                name: "wpTestEmojiSupports"
                            });
                        return void(a.onmessage = function(e) {
                            c(n = e.data), a.terminate(), t(n)
                        })
                    } catch (e) {}
                    c(n = f(s, u, p))
                }
                t(n)
            }).then(function(e) {
                for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n.supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]);
                n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n.DOMReady = !1, n.readyCallback = function() {
                    n.DOMReady = !0
                }
            }).then(function() {
                return e
            }).then(function() {
                var e;
                n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
            }))
        }((window, document), window._wpemojiSettings);
    </script>
    <link rel='stylesheet' id='elementor-frontend-css' href='{{url('')}}/public/wp-content/plugins/elementor/assets/css/frontend.min.css%3Fver=3.28.1.css' media='all' />
    <link rel='stylesheet' id='elementor-post-874-css' href='{{url('')}}/public/wp-content/uploads/sites/12/elementor/css/post-874.css%3Fver=1742894777.css' media='all' />
    <link rel='stylesheet' id='elementor-post-875-css' href='{{url('')}}/public/wp-content/uploads/sites/12/elementor/css/post-875.css%3Fver=1742894777.css' media='all' />
    <style id='wp-emoji-styles-inline-css'>
        img.wp-smiley,
        img.emoji {
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
    <style id='global-styles-inline-css'>
        :root {
            --wp--preset--aspect-ratio--square: 1;
            --wp--preset--aspect-ratio--4-3: 4/3;
            --wp--preset--aspect-ratio--3-4: 3/4;
            --wp--preset--aspect-ratio--3-2: 3/2;
            --wp--preset--aspect-ratio--2-3: 2/3;
            --wp--preset--aspect-ratio--16-9: 16/9;
            --wp--preset--aspect-ratio--9-16: 9/16;
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

        :root {
            --wp--style--global--content-size: 800px;
            --wp--style--global--wide-size: 1200px;
        }

        :where(body) {
            margin: 0;
        }

        .wp-site-blocks>.alignleft {
            float: left;
            margin-right: 2em;
        }

        .wp-site-blocks>.alignright {
            float: right;
            margin-left: 2em;
        }

        .wp-site-blocks>.aligncenter {
            justify-content: center;
            margin-left: auto;
            margin-right: auto;
        }

        :where(.wp-site-blocks)>* {
            margin-block-start: 24px;
            margin-block-end: 0;
        }

        :where(.wp-site-blocks)> :first-child {
            margin-block-start: 0;
        }

        :where(.wp-site-blocks)> :last-child {
            margin-block-end: 0;
        }

        :root {
            --wp--style--block-gap: 24px;
        }

        :root :where(.is-layout-flow)> :first-child {
            margin-block-start: 0;
        }

        :root :where(.is-layout-flow)> :last-child {
            margin-block-end: 0;
        }

        :root :where(.is-layout-flow)>* {
            margin-block-start: 24px;
            margin-block-end: 0;
        }

        :root :where(.is-layout-constrained)> :first-child {
            margin-block-start: 0;
        }

        :root :where(.is-layout-constrained)> :last-child {
            margin-block-end: 0;
        }

        :root :where(.is-layout-constrained)>* {
            margin-block-start: 24px;
            margin-block-end: 0;
        }

        :root :where(.is-layout-flex) {
            gap: 24px;
        }

        :root :where(.is-layout-grid) {
            gap: 24px;
        }

        .is-layout-flow>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        .is-layout-flow>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        .is-layout-flow>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        .is-layout-constrained>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        .is-layout-constrained>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        .is-layout-constrained>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }

        .is-layout-constrained>.alignwide {
            max-width: var(--wp--style--global--wide-size);
        }

        body .is-layout-flex {
            display: flex;
        }

        .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        .is-layout-flex> :is(*, div) {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        .is-layout-grid> :is(*, div) {
            margin: 0;
        }

        body {
            padding-top: 0px;
            padding-right: 0px;
            padding-bottom: 0px;
            padding-left: 0px;
        }

        a:where(:not(.wp-element-button)) {
            text-decoration: underline;
        }

        :root :where(.wp-element-button, .wp-block-button__link) {
            background-color: #32373c;
            border-width: 0;
            color: #fff;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
            padding: calc(0.667em + 2px) calc(1.333em + 2px);
            text-decoration: none;
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

        :root :where(.wp-block-pullquote) {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel='stylesheet' id='template-kit-export-css' href='{{url('')}}/public/wp-content/plugins/template-kit-export/assets/public/template-kit-export-public.css%3Fver=1.0.23.css' media='all' />
    <link rel='stylesheet' id='rkit-offcanvas-style-css' href='{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/offcanvas.css%3Fver=1.5.6.css' media='all' />
    <link rel='stylesheet' id='rkit-navmenu-style-css' href='{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/navmenu.css%3Fver=1.5.6.css' media='all' />
    <link rel='stylesheet' id='rkit-headerinfo-style-css' href='{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/headerinfo.css%3Fver=1.5.6.css' media='all' />
    <link rel='stylesheet' id='navmenu-rkit-style-css' href='{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/rkit-navmenu.css%3Fver=1.5.6.css' media='all' />
    <link rel='stylesheet' id='rkit-search-style-css' href='{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/search.css%3Fver=1.5.6.css' media='all' />
    <link rel='stylesheet' id='rkit-sitelogo-style-css' href='{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/site_logo.css%3Fver=1.5.6.css' media='all' />
    <link rel='stylesheet' id='rkit-post-grid-style-css' href='{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/rkit-blog-post.css%3Fver=1.5.6.css' media='all' />
    <link rel='stylesheet' id='rkit-post-block-style-css' href='{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/rkit-post-block.css%3Fver=1.5.6.css' media='all' />
    <link rel='stylesheet' id='rkit-cta-style-css' href='{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/cta.css%3Fver=1.5.6.css' media='all' />
    <link rel='stylesheet' id='rkit-blockquote-css' href='{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/blockquote.css%3Fver=1.5.6.css' media='all' />
    <link rel='stylesheet' id='rkit-social-share-css' href='{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/social_share.css%3Fver=1.5.6.css' media='all' />
    <link rel='stylesheet' id='rkit-team-style-css' href='{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/rkit_team.css%3Fver=1.5.6.css' media='all' />
    <link rel='stylesheet' id='rkit-running_text-style-css' href='{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/running_text.css%3Fver=1.5.6.css' media='all' />
    <link rel='stylesheet' id='rkit-animated_heading-style-css' href='{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/animated_heading.css%3Fver=1.5.6.css' media='all' />
    <link rel='stylesheet' id='rkit-card_slider-style-css' href='{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/card_slider.css%3Fver=1.5.6.css' media='all' />
    <link rel='stylesheet' id='rkit-accordion-style-css' href='{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/accordion.css%3Fver=1.5.6.css' media='all' />
    <link rel='stylesheet' id='rkit-testimonial_carousel-style-css' href='{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/testimonial_carousel.css%3Fver=1.5.6.css' media='all' />
    <link rel='stylesheet' id='rkit-swiper-css' href='{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/swiper-bundle.min.css%3Fver=1.5.6.css' media='all' />
    <link rel='stylesheet' id='rkit-tabs-style-css' href='{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/tabs.css%3Fver=1.5.6.css' media='all' />
    <link rel='stylesheet' id='rkit-progress-style-css' href='{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/progress-bar.css%3Fver=1.5.6.css' media='all' />
    <link rel='stylesheet' id='counter-style-css' href='{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/counter.css%3Fver=1.5.6.css' media='all' />
    <link rel='stylesheet' id='countdown-style-css' href='{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/countdown.css%3Fver=1.5.6.css' media='all' />
    <link rel='stylesheet' id='rkit-pricelist-style-css' href='{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/pricelist.css%3Fver=1.5.6.css' media='all' />
    <link rel='stylesheet' id='advanced_heading-style-css' href='{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/advanced_heading.css%3Fver=1.5.6.css' media='all' />
    <link rel='stylesheet' id='image_comparison-style-css' href='{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/image_comparison.css%3Fver=1.5.6.css' media='all' />
    <link rel='stylesheet' id='postlist-style-css' href='{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/postlist.css%3Fver=1.5.6.css' media='all' />
    <link rel='stylesheet' id='pricebox-style-css' href='{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/pricingbox.css%3Fver=1.5.6.css' media='all' />
    <link rel='stylesheet' id='rkit-image_box-style-css' href='{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/image_box.css%3Fver=1.5.6.css' media='all' />
    <link rel='stylesheet' id='rkit-image_accordion-style-css' href='{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/image_accordion.css%3Fver=1.5.6.css' media='all' />
    <link rel='stylesheet' id='rkit-dual_button-style-css' href='{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/dual_button.css%3Fver=1.5.6.css' media='all' />
    <link rel='stylesheet' id='rkit-image_gallery-style-css' href='{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/image_gallery.css%3Fver=1.5.6.css' media='all' />
    <link rel='stylesheet' id='rkit-home-slider-style-css' href='{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/home_slider.css%3Fver=1.5.6.css' media='all' />
    <link rel='stylesheet' id='rkit-woo-product-grid-style-css' href='{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/woo_product_grid.css%3Fver=1.5.6.css' media='all' />
    <link rel='stylesheet' id='rkit-client_grid-style-css' href='{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/client_grid.css%3Fver=1.5.6.css' media='all' />
    <link rel='stylesheet' id='rkit-barchart-style-css' href='{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/barchart.css%3Fver=1.5.6.css' media='all' />
    <link rel='stylesheet' id='rkit-linechart-style-css' href='{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/linechart.css%3Fver=1.5.6.css' media='all' />
    <link rel='stylesheet' id='rkit-piechart-style-css' href='{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/piechart.css%3Fver=1.5.6.css' media='all' />
    <link rel='stylesheet' id='rkit-back-to-top-style-css' href='{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/css/back_to_top.css%3Fver=1.5.6.css' media='all' />
    <link rel='stylesheet' id='elementor-icons-rtmicon-css' href='{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/assets/css/rtmicons.css%3Fver=1.5.6.css' media='all' />
    <link rel='stylesheet' id='rkit-widget-style-css' href='{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/assets/css/rkit.css%3Fver=1.5.6.css' media='all' />
    <link rel='stylesheet' id='rtform-text-style-css' href='{{url('')}}/public/wp-content/plugins/romethemeform/widgets/assets/css/rtform_text.css%3Fver=1.2.1.css' media='all' />
    <link rel='stylesheet' id='rform-style-css' href='{{url('')}}/public/wp-content/plugins/romethemeform/widgets/assets/css/rform.css%3Fver=1.2.1.css' media='all' />
    <link rel='stylesheet' id='spinner-style-css' href='{{url('')}}/public/wp-content/plugins/romethemeform/widgets/assets/css/spinner-loading.css%3Fver=1.2.1.css' media='all' />
    <link rel='stylesheet' id='rform-btn-style-css' href='{{url('')}}/public/wp-content/plugins/romethemeform/widgets/assets/css/rform-button.css%3Fver=1.2.1.css' media='all' />
    <link rel='stylesheet' id='rform-select-style-css' href='{{url('')}}/public/wp-content/plugins/romethemeform/widgets/assets/css/rform-select.css%3Fver=1.2.1.css' media='all' />
    <link rel='stylesheet' id='rform-radiobutton-style-css' href='{{url('')}}/public/wp-content/plugins/romethemeform/widgets/assets/css/rform-radiobutton.css%3Fver=1.2.1.css' media='all' />
    <link rel='stylesheet' id='rform-checkbox-style-css' href='{{url('')}}/public/wp-content/plugins/romethemeform/widgets/assets/css/rform-checkbox.css%3Fver=1.2.1.css' media='all' />
    <link rel='stylesheet' id='intlTelInput-css' href='{{url('')}}/public/wp-content/plugins/romethemeform/widgets/assets/css/intlTelInput.css%3Fver=1.2.1.css' media='all' />
    <link rel='stylesheet' id='cute-alert-css' href='{{url('')}}/public/wp-content/plugins/metform/public/assets/lib/cute-alert/style.css%3Fver=3.9.7.css' media='all' />
    <link rel='stylesheet' id='text-editor-style-css' href='{{url('')}}/public/wp-content/plugins/metform/public/assets/css/text-editor.css%3Fver=3.9.7.css' media='all' />
    <link rel='stylesheet' id='hello-elementor-css' href='{{url('')}}/public/wp-content/themes/hello-elementor/style.min.css%3Fver=3.3.0.css' media='all' />
    <link rel='stylesheet' id='hello-elementor-theme-style-css' href='{{url('')}}/public/wp-content/themes/hello-elementor/theme.min.css%3Fver=3.3.0.css' media='all' />
    <link rel='stylesheet' id='hello-elementor-header-footer-css' href='{{url('')}}/public/wp-content/themes/hello-elementor/header-footer.min.css%3Fver=3.3.0.css' media='all' />
    <link rel='stylesheet' id='elementor-post-3-css' href='{{url('')}}/public/wp-content/uploads/sites/12/elementor/css/post-3.css%3Fver=1742894777.css' media='all' />
    <link rel='stylesheet' id='widget-heading-css' href='{{url('')}}/public/wp-content/plugins/elementor/assets/css/widget-heading.min.css%3Fver=3.28.1.css' media='all' />
    <link rel='stylesheet' id='e-animation-shrink-css' href='{{url('')}}/public/wp-content/plugins/elementor/assets/lib/animations/styles/e-animation-shrink.min.css%3Fver=3.28.1.css' media='all' />
    <link rel='stylesheet' id='e-animation-fadeInLeft-css' href='{{url('')}}/public/wp-content/plugins/elementor/assets/lib/animations/styles/fadeInLeft.min.css%3Fver=3.28.1.css' media='all' />
    <link rel='stylesheet' id='e-animation-fadeInRight-css' href='{{url('')}}/public/wp-content/plugins/elementor/assets/lib/animations/styles/fadeInRight.min.css%3Fver=3.28.1.css' media='all' />
    <link rel='stylesheet' id='swiper-css' href='{{url('')}}/public/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min.css%3Fver=8.4.5.css' media='all' />
    <link rel='stylesheet' id='e-swiper-css' href='{{url('')}}/public/wp-content/plugins/elementor/assets/css/conditionals/e-swiper.min.css%3Fver=3.28.1.css' media='all' />
    <link rel='stylesheet' id='e-animation-fadeInUp-css' href='{{url('')}}/public/wp-content/plugins/elementor/assets/lib/animations/styles/fadeInUp.min.css%3Fver=3.28.1.css' media='all' />
    <link rel='stylesheet' id='widget-image-css' href='{{url('')}}/public/wp-content/plugins/elementor/assets/css/widget-image.min.css%3Fver=3.28.1.css' media='all' />
    <link rel='stylesheet' id='widget-rating-css' href='{{url('')}}/public/wp-content/plugins/elementor/assets/css/widget-rating.min.css%3Fver=3.28.1.css' media='all' />
    <link rel='stylesheet' id='e-animation-slideInDown-css' href='{{url('')}}/public/wp-content/plugins/elementor/assets/lib/animations/styles/slideInDown.min.css%3Fver=3.28.1.css' media='all' />
    <link rel='stylesheet' id='e-animation-slideInRight-css' href='{{url('')}}/public/wp-content/plugins/elementor/assets/lib/animations/styles/slideInRight.min.css%3Fver=3.28.1.css' media='all' />
    <link rel='stylesheet' id='e-animation-slideInLeft-css' href='{{url('')}}/public/wp-content/plugins/elementor/assets/lib/animations/styles/slideInLeft.min.css%3Fver=3.28.1.css' media='all' />
    <link rel='stylesheet' id='e-animation-slideInUp-css' href='{{url('')}}/public/wp-content/plugins/elementor/assets/lib/animations/styles/slideInUp.min.css%3Fver=3.28.1.css' media='all' />
    <link rel='stylesheet' id='widget-counter-css' href='{{url('')}}/public/wp-content/plugins/elementor/assets/css/widget-counter.min.css%3Fver=3.28.1.css' media='all' />
    <link rel='stylesheet' id='widget-progress-css' href='{{url('')}}/public/wp-content/plugins/elementor/assets/css/widget-progress.min.css%3Fver=3.28.1.css' media='all' />
    <link rel='stylesheet' id='e-animation-fadeInDown-css' href='{{url('')}}/public/wp-content/plugins/elementor/assets/lib/animations/styles/fadeInDown.min.css%3Fver=3.28.1.css' media='all' />
    <link rel='stylesheet' id='widget-divider-css' href='{{url('')}}/public/wp-content/plugins/elementor/assets/css/widget-divider.min.css%3Fver=3.28.1.css' media='all' />
    <link rel='stylesheet' id='elementor-post-1070-css' href='{{url('')}}/public/wp-content/uploads/sites/12/elementor/css/post-1070.css%3Fver=1742899297.css' media='all' />
    <link rel='stylesheet' id='ekit-widget-styles-css' href='{{url('')}}/public/wp-content/plugins/elementskit-lite/widgets/init/assets/css/widget-styles.css%3Fver=3.4.7.css' media='all' />
    <link rel='stylesheet' id='ekit-responsive-css' href='{{url('')}}/public/wp-content/plugins/elementskit-lite/widgets/init/assets/css/responsive.css%3Fver=3.4.7.css' media='all' />
    <link rel='stylesheet' id='elementor-gf-local-poppins-css' href='{{url('')}}/public/wp-content/uploads/sites/12/elementor/google-fonts/css/poppins.css%3Fver=1742335460.css' media='all' />
    <link rel='stylesheet' id='elementor-gf-local-robotoslab-css' href='{{url('')}}/public/wp-content/uploads/sites/12/elementor/google-fonts/css/robotoslab.css%3Fver=1742335462.css' media='all' />
    <link rel='stylesheet' id='elementor-icons-ekiticons-css' href='{{url('')}}/public/wp-content/plugins/elementskit-lite/modules/elementskit-icon-pack/assets/css/ekiticons.css%3Fver=3.4.7.css' media='all' />
    <script src="{{url('')}}/public/wp-includes/js/jquery/jquery.min.js%3Fver=3.7.1" id="jquery-core-js"></script>
    <script src="{{url('')}}/public/wp-includes/js/jquery/jquery-migrate.min.js%3Fver=3.4.1" id="jquery-migrate-js"></script>
    <script src="{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/card_slider.js%3Fver=1.5.6" id="card-slider-script-js"></script>
    <script src="{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/animated_heading.js%3Fver=1.5.6" id="animated-heading-script-js"></script>
    <script src="{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/accordion.js%3Fver=1.5.6" id="accordion-script-js"></script>
    <script src="{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/bar_chart.js%3Fver=1.5.6" id="bar_chart-script-js"></script>
    <script src="{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/line_chart.js%3Fver=1.5.6" id="line_chart-script-js"></script>
    <script src="{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/pie_chart.js%3Fver=1.5.6" id="pie_chart-script-js"></script>
    <script src="{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/swiper-bundle.min.js%3Fver=1.5.6" id="swiperjs-js"></script>
    <script src="{{url('')}}/public/wp-content/plugins/romethemeform/widgets/assets/js/rtform_text.js%3Fver=1.2.1" id="rtform-text-js-js"></script>
    <script src="{{url('')}}/public/wp-content/plugins/romethemeform/widgets/assets/js/rform_select.js%3Fver=1.2.1" id="rform-select-js-js"></script>
    <script src="{{url('')}}/public/wp-content/plugins/romethemeform/widgets/assets/js/rform_tel_input.js%3Fver=1.2.1" id="rform-phone-js-js"></script>
    <script id="rform-script-js-extra">
        var romethemeform_ajax_url = {
            "ajax_url": "https:\/\/kits.krakenbox.net\/breno\/wp-admin\/admin-ajax.php",
            "nonce": "193447a67d"
        };
    </script>
    <script src="{{url('')}}/public/wp-content/plugins/romethemeform/widgets/assets/js/rform.js%3Fver=1.2.1" id="rform-script-js"></script>
    <script id="intl-tel-input-js-extra">
        var intl_tel_input_script = {
            "url": "https:\/\/kits.krakenbox.net\/breno\/wp-content\/plugins\/romethemeform\/widgets\/assets\/js\/intl_tel_input_utils.js"
        };
    </script>
    <script src="{{url('')}}/public/wp-content/plugins/romethemeform/widgets/assets/js/intl_tel_input.min.js%3Fver=1.2.1" id="intl-tel-input-js"></script>
    <script src="{{url('')}}/public/wp-content/plugins/template-kit-export/assets/public/template-kit-export-public.js%3Fver=1.0.23" id="template-kit-export-js"></script>
    <link rel="https://api.w.org/" href="{{url('')}}/public/wp-json/index.html" />
    <link rel="alternate" title="JSON" type="application/json" href="{{url('')}}/public/wp-json/wp/v2/pages/1070" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc.php%3Frsd" />
    <meta name="generator" content="WordPress 6.7.2" />
    <link rel="canonical" href="index.html" />
    <link rel='shortlink' href='index.html' />
    <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="{{url('')}}/public/wp-json/oembed/1.0/embed%3Furl=https:%252F%252Fkits.krakenbox.net%252Fbreno%252F" />
    <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="{{url('')}}/public/wp-json/oembed/1.0/embed%3Furl=https:%252F%252Fkits.krakenbox.net%252Fbreno%252F&amp;format=xml" />
    <meta name="generator" content="Elementor 3.28.1; features: e_font_icon_svg, additional_custom_breakpoints, e_local_google_fonts, e_element_cache; settings: css_print_method-external, google_font-enabled, font_display-auto">
    <style>
        .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload),
        .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload) * {
            background-image: none !important;
        }

        @media screen and (max-height: 1024px) {
            .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload),
            .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload) * {
                background-image: none !important;
            }
        }

        @media screen and (max-height: 640px) {
            .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload),
            .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload) * {
                background-image: none !important;
            }
        }
    </style>
    <link rel="icon" href="{{url('')}}/public/wp-content/uploads/sites/12/2025/03/Favicon-2-150x150.png" sizes="32x32" />
    <link rel="icon" href="{{url('')}}/public/wp-content/uploads/sites/12/2025/03/Favicon-2.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{url('')}}/public/wp-content/uploads/sites/12/2025/03/Favicon-2.png" />
    <meta name="msapplication-TileImage" content="https://kits.krakenbox.net/breno/{{url('')}}/public/wp-content/uploads/sites/12/2025/03/Favicon-2.png" />
</head>

<body class="home page-template page-template-elementor_header_footer page page-id-1070 wp-custom-logo wp-embed-responsive theme-default elementor-default elementor-template-full-width elementor-kit-3 elementor-page elementor-page-1070">
<div class="ekit-template-content-markup ekit-template-content-header ekit-template-content-theme-support">
    <div data-elementor-type="wp-post" data-elementor-id="874" class="elementor elementor-874">
        <div class="elementor-element elementor-element-87cda5a e-flex e-con-boxed e-con e-parent" data-id="87cda5a" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="e-con-inner">
                <div class="elementor-element elementor-element-6e754dc e-con-full e-flex e-con e-child" data-id="6e754dc" data-element_type="container">
                    <div class="elementor-element elementor-element-c158845 elementor-icon-list--layout-inline elementor-widget__width-initial elementor-mobile-align-center elementor-widget-mobile__width-inherit elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                         data-id="c158845" data-element_type="widget" data-widget_type="icon-list.default">
                        <div class="elementor-widget-container">
                            <ul class="elementor-icon-list-items elementor-inline-items">
                                <li class="elementor-icon-list-item elementor-inline-item">
                                        <span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-envelope" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"></path></svg>						</span>
                                   <a href="mailto:info@kaltani.com"><span style="color: #020202" class="elementor-icon-list-text">info@kaltani.com</span></a>
                                </li>
                                <li class="elementor-icon-list-item elementor-inline-item">
                                        <span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fas-map-marker-alt" viewBox="0 0 384 512" xmlns="http://www.w3.org/2000/svg"><path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path></svg>						</span>
                                   <a href="https://www.google.com/maps/dir//14+Aliu+Animashaun+Ave,+Lekki+Phase+1,+Lagos+106104,+Lagos/@6.4335009,3.3779702,12z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x103bf52e943fdedb:0x9eaeed65c337f44!2m2!1d3.4603721!2d6.4335075?entry=ttu&g_ep=EgoyMDI1MDQwOC4wIKXMDSoASAFQAw%3D%3D"> <span class="elementor-icon-list-text">14 Aliu Animashaun Ave, Lekki Phase 1, Lagos 106104, Lagos</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-6cb99a9 elementor-icon-list--layout-inline elementor-align-right elementor-widget__width-initial elementor-hidden-tablet elementor-hidden-mobile elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                         data-id="6cb99a9" data-element_type="widget" data-widget_type="icon-list.default">
                        <div class="elementor-widget-container">
                            <ul class="elementor-icon-list-items elementor-inline-items">
                                <li class="elementor-icon-list-item elementor-inline-item">
                                        <span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fab-facebook" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"></path></svg>						</span>
                                    <span class="elementor-icon-list-text">Facebook</span>
                                </li>
                                <li class="elementor-icon-list-item elementor-inline-item">
                                        <span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fab-x-twitter" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"></path></svg>						</span>
                                    <span class="elementor-icon-list-text">X Twitter</span>
                                </li>
                                <li class="elementor-icon-list-item elementor-inline-item">
                                        <span class="elementor-icon-list-icon">
							<svg aria-hidden="true" class="e-font-icon-svg e-fab-linkedin" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"></path></svg>						</span>
                                    <span class="elementor-icon-list-text">LinkedIn</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-a2d6906 e-grid-align-tablet-right e-grid-align-mobile-center elementor-widget-tablet__width-initial elementor-widget-mobile__width-inherit elementor-hidden-desktop elementor-shape-rounded elementor-grid-0 e-grid-align-center elementor-widget elementor-widget-social-icons"
                         data-id="a2d6906" data-element_type="widget" data-widget_type="social-icons.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-social-icons-wrapper elementor-grid">
                                    <span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-facebook elementor-repeater-item-a41649b" target="_blank">
						<span class="elementor-screen-only">Facebook</span>
                                    <svg class="e-font-icon-svg e-fab-facebook" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"></path></svg>                                    </a>
                                    </span>
                                <span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-08bf961" target="_blank">
						<span class="elementor-screen-only">Twitter</span>
                                    <svg class="e-font-icon-svg e-fab-twitter" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg>                                    </a>
                                    </span>
                                <span class="elementor-grid-item">
					<a class="elementor-icon elementor-social-icon elementor-social-icon-linkedin elementor-repeater-item-64d86b9" target="_blank">
						<span class="elementor-screen-only">Linkedin</span>
                                    <svg class="e-font-icon-svg e-fab-linkedin" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"></path></svg>                                    </a>
                                    </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-83cda47 e-flex e-con-boxed e-con e-parent" data-id="83cda47" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="e-con-inner">
                <div class="elementor-element elementor-element-4fcffd5 e-con-full e-flex e-con e-child" data-id="4fcffd5" data-element_type="container">
                    <div class="elementor-element elementor-element-31b7a8e elementor-widget elementor-widget-image" data-id="31b7a8e" data-element_type="widget" data-widget_type="image.default">
                        <div class="elementor-widget-container">
                            <img fetchpriority="high" width="800" height="266" src="{{url('')}}/public/wp-content/uploads/sites/12/2025/03/Breno-Logo-1024x341.png" class="attachment-large size-large wp-image-919" alt="" srcset="{{url('')}}/public/wp-content/uploads/sites/12/2025/03/Breno-Logo-1024x341.png 1024w, {{url('')}}/public/wp-content/uploads/sites/12/2025/03/Breno-Logo-300x100.png 300w, {{url('')}}/public/wp-content/uploads/sites/12/2025/03/Breno-Logo-768x256.png 768w, {{url('')}}/public/wp-content/uploads/sites/12/2025/03/Breno-Logo-1536x511.png 1536w, {{url('')}}/public/wp-content/uploads/sites/12/2025/03/Breno-Logo-2048x682.png 2048w, {{url('')}}/public/wp-content/uploads/sites/12/2025/03/Breno-Logo-800x266.png 800w"
                                 sizes="(max-width: 800px) 100vw, 800px" /> </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-e7e9ce6 e-con-full e-flex e-con e-child" data-id="e7e9ce6" data-element_type="container">
                    <div class="elementor-element elementor-element-c554523 elementor-widget elementor-widget-ekit-nav-menu" data-id="c554523" data-element_type="widget" data-widget_type="ekit-nav-menu.default">
                        <div class="elementor-widget-container">
                            <nav class="ekit-wid-con ekit_menu_responsive_tablet" data-hamburger-icon="" data-hamburger-icon-type="icon" data-responsive-breakpoint="1024">
                                <button class="elementskit-menu-hamburger elementskit-menu-toggler" type="button" aria-label="hamburger-icon">
                                    <span class="elementskit-menu-hamburger-icon"></span><span class="elementskit-menu-hamburger-icon"></span><span class="elementskit-menu-hamburger-icon"></span>
                                </button>
                                <div id="ekit-megamenu-breno-menus" class="elementskit-menu-container elementskit-menu-offcanvas-elements elementskit-navbar-nav-default ekit-nav-menu-one-page-no ekit-nav-dropdown-hover">
                                    <ul id="menu-breno-menus" class="elementskit-navbar-nav elementskit-menu-po-right submenu-click-on-icon">
                                        <li id="menu-item-1174" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1070 current_page_item menu-item-1174 nav-item elementskit-mobile-builder-content active"
                                            data-vertical-menu=750px><a href="index.html" class="ekit-menu-nav-link active">Home</a></li>
                                        <li id="menu-item-902" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-902 nav-item elementskit-dropdown-has relative_position elementskit-dropdown-menu-default_width elementskit-mobile-builder-content"
                                            data-vertical-menu=750px><a href="index.html#" class="ekit-menu-nav-link ekit-menu-dropdown-toggle">About us<i aria-hidden="true" class="icon icon-down-arrow1 elementskit-submenu-indicator"></i></a>
                                            <ul class="elementskit-dropdown elementskit-submenu-panel">
                                                <li id="menu-item-911" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-911 nav-item elementskit-mobile-builder-content"
                                                    data-vertical-menu=750px><a href="/who-we-are" class=" dropdown-item">Who We Are</a>
                                                <li id="menu-item-903" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-903 nav-item elementskit-mobile-builder-content"
                                                    data-vertical-menu=750px><a href="/our-story" class=" dropdown-item">Our Story</a>
                                                <li id="menu-item-904" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-904 nav-item elementskit-mobile-builder-content"
                                                    data-vertical-menu=750px><a href="/team" class=" dropdown-item">Leadership Team</a>
                                                <li id="menu-item-910" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-910 nav-item elementskit-mobile-builder-content"
                                                    data-vertical-menu=750px><a href="/certification" class=" dropdown-item">Certification & Compliance</a>
                                         </ul>
                                        </li>
                                        <li id="menu-item-900" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-900 nav-item elementskit-mobile-builder-content" data-vertical-menu=750px><a href="/careers" class="ekit-menu-nav-link">Careers</a></li>

                                        <li id="menu-item-909" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-909 nav-item elementskit-mobile-builder-content" data-vertical-menu=750px><a href="/media-room" class="ekit-menu-nav-link">Media Room</a></li>
                                        <li id="menu-item-909" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-909 nav-item elementskit-mobile-builder-content" data-vertical-menu=750px><a href="http://trashbash.ng" class="ekit-menu-nav-link">Trash Bash</a></li>
                                    </ul>
                                    <div class="elementskit-nav-identity-panel">
                                        <a class="elementskit-nav-logo" href="#" target="" rel=""><img src="{{url('')}}/public/wp-content/uploads/sites/12/2025/03/Breno-Logo.png" title="Breno-Logo" alt="Breno-Logo" decoding="async" /></a><button class="elementskit-menu-close elementskit-menu-toggler" type="button">X</button></div>
                                </div>
                                <div class="elementskit-menu-overlay elementskit-menu-offcanvas-elements elementskit-menu-toggler ekit-nav-menu--overlay"></div>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-fbbda0a e-con-full elementor-hidden-tablet elementor-hidden-mobile e-flex e-con e-child" data-id="fbbda0a" data-element_type="container">
                    <div class="elementor-element elementor-element-801ad35 elementor-align-right elementor-widget elementor-widget-button" data-id="801ad35" data-element_type="widget" data-widget_type="button.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                                <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-shrink" href="contact-us">
                                        <span class="elementor-button-content-wrapper">
						<span class="elementor-button-icon">
				<svg aria-hidden="true" class="e-font-icon-svg e-fas-arrow-circle-right" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zm-28.9 143.6l75.5 72.4H120c-13.3 0-24 10.7-24 24v16c0 13.3 10.7 24 24 24h182.6l-75.5 72.4c-9.7 9.3-9.9 24.8-.4 34.3l11 10.9c9.4 9.4 24.6 9.4 33.9 0L404.3 273c9.4-9.4 9.4-24.6 0-33.9L271.6 106.3c-9.4-9.4-24.6-9.4-33.9 0l-11 10.9c-9.5 9.6-9.3 25.1.4 34.4z"></path></svg>			</span>
                                        <span class="elementor-button-text">Contact Us</span>
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

@yield('content')

<script>
    const lazyloadRunObserver = () => {
        const lazyloadBackgrounds = document.querySelectorAll(`.e-con.e-parent:not(.e-lazyloaded)`);
        const lazyloadBackgroundObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    let lazyloadBackground = entry.target;
                    if (lazyloadBackground) {
                        lazyloadBackground.classList.add('e-lazyloaded');
                    }
                    lazyloadBackgroundObserver.unobserve(entry.target);
                }
            });
        }, {
            rootMargin: '200px 0px 200px 0px'
        });
        lazyloadBackgrounds.forEach((lazyloadBackground) => {
            lazyloadBackgroundObserver.observe(lazyloadBackground);
        });
    };
    const events = [
        'DOMContentLoaded',
        'elementor/lazyload/observe',
    ];
    events.forEach((event) => {
        document.addEventListener(event, lazyloadRunObserver);
    });
</script>
<link rel='stylesheet' id='widget-icon-list-css' href='{{url('')}}/public/wp-content/plugins/elementor/assets/css/widget-icon-list.min.css%3Fver=3.28.1.css' media='all' />
<link rel='stylesheet' id='widget-social-icons-css' href='{{url('')}}/public/wp-content/plugins/elementor/assets/css/widget-social-icons.min.css%3Fver=3.28.1.css' media='all' />
<link rel='stylesheet' id='e-apple-webkit-css' href='{{url('')}}/public/wp-content/plugins/elementor/assets/css/conditionals/apple-webkit.min.css%3Fver=3.28.1.css' media='all' />
<link rel='stylesheet' id='font-awesome-5-all-css' href='{{url('')}}/public/wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min.css%3Fver=3.28.1.css' media='all' />
<link rel='stylesheet' id='font-awesome-4-shim-css' href='{{url('')}}/public/wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.min.css%3Fver=3.28.1.css' media='all' />
<link rel='stylesheet' id='elementor-post-1866-css' href='{{url('')}}/public/wp-content/uploads/sites/12/elementor/css/post-1866.css%3Fver=1742899284.css' media='all' />
<link rel='stylesheet' id='elementor-post-1919-css' href='{{url('')}}/public/wp-content/uploads/sites/12/elementor/css/post-1919.css%3Fver=1742898393.css' media='all' />
<script src="{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/offcanvas.js%3Fver=1.5.6" id="rkit-offcanvas-script-js"></script>
<script src="{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/navmenu.js%3Fver=1.5.6" id="rkit-navmenu-script-js"></script>
<script src="{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/rkit-navmenu.js%3Fver=1.5.6" id="navmenu-rkit-script-js"></script>
<script src="{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/social_share.js%3Fver=1.5.6" id="social-share-script-js"></script>
<script src="{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/running_text.js%3Fver=1.5.6" id="running-text-script-js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js?ver=1.5.6" id="chartjs-js"></script>
<script src="{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/testimonial_carousel.js%3Fver=1.5.6" id="rkit-testimonial_carousel-js"></script>
<script src="{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/tabs.js%3Fver=1.5.6" id="rkit-tabs-script-js"></script>
<script src="{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/progress.js%3Fver=1.5.6" id="progress-script-js"></script>
<script src="{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/counter.js%3Fver=1.5.6" id="rkit-counter-script-js"></script>
<script src="{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/countdown.js%3Fver=1.5.6" id="rkit-countdown-script-js"></script>
<script src="{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/image_comparison.js%3Fver=1.5.6" id="rkit-image-comparison-script-js"></script>
<script src="{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/image_comparison.js%3Fver=1.5.6" id="rkit-image_comparison-script-js"></script>
<script src="{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/image_accordion.js%3Fver=1.5.6" id="rkit-image_accordion-script-js"></script>
<script src="{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/image_gallery.js%3Fver=1.5.6" id="rkit-image_gallery-script-js"></script>
<script src="{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/masonry.pkgd.min.js%3Fver=1.5.6" id="rkit-image_gallery_mansonry-script-js"></script>
<script src="{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/imagesloaded.pkgd.min.js%3Fver=1.5.6" id="rkit-image_gallery_mansonry_loaded-script-js"></script>
<script src="{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/home_slider.js%3Fver=1.5.6" id="rkit-home-slider-script-js"></script>
<script src="{{url('')}}/public/wp-content/plugins/rometheme-for-elementor/widgets/assets/js/back_to_top.js%3Fver=1.5.6" id="rkit-back-to-top-script-js"></script>
<script src="{{url('')}}/public/wp-content/plugins/metform/public/assets/lib/cute-alert/cute-alert.js%3Fver=3.9.7" id="cute-alert-js"></script>
<script src="{{url('')}}/public/wp-content/themes/hello-elementor/assets/js/hello-frontend.min.js%3Fver=3.3.0" id="hello-theme-frontend-js"></script>
<script src="{{url('')}}/public/wp-content/plugins/elementskit-lite/libs/framework/assets/js/frontend-script.js%3Fver=3.4.7" id="elementskit-framework-js-frontend-js"></script>
<script id="elementskit-framework-js-frontend-js-after">
    var elementskit = {
        resturl: 'https://kits.krakenbox.net/breno/{{url('')}}/public/wp-json/elementskit/v1/',
    }
</script>
<script src="{{url('')}}/public/wp-content/plugins/elementskit-lite/widgets/init/assets/js/widget-scripts.js%3Fver=3.4.7" id="ekit-widget-scripts-js"></script>
<script src="{{url('')}}/public/wp-content/plugins/elementor/assets/lib/swiper/v8/swiper.min.js%3Fver=8.4.5" id="swiper-js"></script>
<script src="{{url('')}}/public/wp-content/plugins/elementor/assets/lib/jquery-numerator/jquery-numerator.min.js%3Fver=0.2.1" id="jquery-numerator-js"></script>
<script src="{{url('')}}/public/wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.min.js%3Fver=3.28.1" id="font-awesome-4-shim-js"></script>
<script src="{{url('')}}/public/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js%3Fver=3.28.1" id="elementor-webpack-runtime-js"></script>
<script src="{{url('')}}/public/wp-content/plugins/elementor/assets/js/frontend-modules.min.js%3Fver=3.28.1" id="elementor-frontend-modules-js"></script>
<script src="{{url('')}}/public/wp-includes/js/jquery/ui/core.min.js%3Fver=1.13.3" id="jquery-ui-core-js"></script>
<script id="elementor-frontend-js-before">
    var elementorFrontendConfig = {
        "environmentMode": {
            "edit": false,
            "wpPreview": false,
            "isScriptDebug": false
        },
        "i18n": {
            "shareOnFacebook": "Share on Facebook",
            "shareOnTwitter": "Share on Twitter",
            "pinIt": "Pin it",
            "download": "Download",
            "downloadImage": "Download image",
            "fullscreen": "Fullscreen",
            "zoom": "Zoom",
            "share": "Share",
            "playVideo": "Play Video",
            "previous": "Previous",
            "next": "Next",
            "close": "Close",
            "a11yCarouselPrevSlideMessage": "Previous slide",
            "a11yCarouselNextSlideMessage": "Next slide",
            "a11yCarouselFirstSlideMessage": "This is the first slide",
            "a11yCarouselLastSlideMessage": "This is the last slide",
            "a11yCarouselPaginationBulletMessage": "Go to slide"
        },
        "is_rtl": false,
        "breakpoints": {
            "xs": 0,
            "sm": 480,
            "md": 768,
            "lg": 1025,
            "xl": 1440,
            "xxl": 1600
        },
        "responsive": {
            "breakpoints": {
                "mobile": {
                    "label": "Mobile Portrait",
                    "value": 767,
                    "default_value": 767,
                    "direction": "max",
                    "is_enabled": true
                },
                "mobile_extra": {
                    "label": "Mobile Landscape",
                    "value": 880,
                    "default_value": 880,
                    "direction": "max",
                    "is_enabled": false
                },
                "tablet": {
                    "label": "Tablet Portrait",
                    "value": 1024,
                    "default_value": 1024,
                    "direction": "max",
                    "is_enabled": true
                },
                "tablet_extra": {
                    "label": "Tablet Landscape",
                    "value": 1200,
                    "default_value": 1200,
                    "direction": "max",
                    "is_enabled": false
                },
                "laptop": {
                    "label": "Laptop",
                    "value": 1366,
                    "default_value": 1366,
                    "direction": "max",
                    "is_enabled": false
                },
                "widescreen": {
                    "label": "Widescreen",
                    "value": 2400,
                    "default_value": 2400,
                    "direction": "min",
                    "is_enabled": false
                }
            },
            "hasCustomBreakpoints": false
        },
        "version": "3.28.1",
        "is_static": false,
        "experimentalFeatures": {
            "e_font_icon_svg": true,
            "additional_custom_breakpoints": true,
            "container": true,
            "e_local_google_fonts": true,
            "hello-theme-header-footer": true,
            "nested-elements": true,
            "editor_v2": true,
            "e_element_cache": true,
            "home_screen": true,
            "launchpad-checklist": true
        },
        "urls": {
            "assets": "https:\/\/kits.krakenbox.net\/breno\/wp-content\/plugins\/elementor\/assets\/",
            "ajaxurl": "https:\/\/kits.krakenbox.net\/breno\/wp-admin\/admin-ajax.php",
            "uploadUrl": "https:\/\/kits.krakenbox.net\/breno\/wp-content\/uploads\/sites\/12"
        },
        "nonces": {
            "floatingButtonsClickTracking": "2456009c55"
        },
        "swiperClass": "swiper",
        "settings": {
            "page": [],
            "editorPreferences": []
        },
        "kit": {
            "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
            "global_image_lightbox": "yes",
            "lightbox_enable_counter": "yes",
            "lightbox_enable_fullscreen": "yes",
            "lightbox_enable_zoom": "yes",
            "lightbox_enable_share": "yes",
            "lightbox_title_src": "title",
            "lightbox_description_src": "description",
            "hello_header_logo_type": "logo",
            "hello_header_menu_layout": "horizontal",
            "hello_footer_logo_type": "logo"
        },
        "post": {
            "id": 1070,
            "title": "Breno",
            "excerpt": "",
            "featuredImage": false
        }
    };
</script>
<script src="{{url('')}}/public/wp-content/plugins/elementor/assets/js/frontend.min.js%3Fver=3.28.1" id="elementor-frontend-js"></script>
<script src="{{url('')}}/public/wp-content/plugins/elementskit-lite/widgets/init/assets/js/animate-circle.min.js%3Fver=3.4.7" id="animate-circle-js"></script>
<script id="elementskit-elementor-js-extra">
    var ekit_config = {
        "ajaxurl": "https:\/\/kits.krakenbox.net\/breno\/wp-admin\/admin-ajax.php",
        "nonce": "ad307e8956"
    };
</script>
<script src="{{url('')}}/public/wp-content/plugins/elementskit-lite/widgets/init/assets/js/elementor.js%3Fver=3.4.7" id="elementskit-elementor-js"></script>




</body>

</html>
