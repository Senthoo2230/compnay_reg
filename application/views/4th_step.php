<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <script>
        var gform;
        gform || (document.addEventListener("gform_main_scripts_loaded", function() {
            gform.scriptsLoaded = !0
        }), window.addEventListener("DOMContentLoaded", function() {
            gform.domLoaded = !0
        }), gform = {
            domLoaded: !1,
            scriptsLoaded: !1,
            initializeOnLoaded: function(o) {
                gform.domLoaded && gform.scriptsLoaded ? o() : !gform.domLoaded && gform.scriptsLoaded ? window.addEventListener("DOMContentLoaded", o) : document.addEventListener("gform_main_scripts_loaded", o)
            },
            hooks: {
                action: {},
                filter: {}
            },
            addAction: function(o, n, r, t) {
                gform.addHook("action", o, n, r, t)
            },
            addFilter: function(o, n, r, t) {
                gform.addHook("filter", o, n, r, t)
            },
            doAction: function(o) {
                gform.doHook("action", o, arguments)
            },
            applyFilters: function(o) {
                return gform.doHook("filter", o, arguments)
            },
            removeAction: function(o, n) {
                gform.removeHook("action", o, n)
            },
            removeFilter: function(o, n, r) {
                gform.removeHook("filter", o, n, r)
            },
            addHook: function(o, n, r, t, i) {
                null == gform.hooks[o][n] && (gform.hooks[o][n] = []);
                var e = gform.hooks[o][n];
                null == i && (i = n + "_" + e.length), gform.hooks[o][n].push({
                    tag: i,
                    callable: r,
                    priority: t = null == t ? 10 : t
                })
            },
            doHook: function(n, o, r) {
                var t;
                if (r = Array.prototype.slice.call(r, 1), null != gform.hooks[n][o] && ((o = gform.hooks[n][o]).sort(function(o, n) {
                        return o.priority - n.priority
                    }), o.forEach(function(o) {
                        "function" != typeof(t = o.callable) && (t = window[t]), "action" == n ? t.apply(null, r) : r[0] = t.apply(null, r)
                    })), "filter" == n) return r[0]
            },
            removeHook: function(o, n, t, i) {
                var r;
                null != gform.hooks[o][n] && (r = (r = gform.hooks[o][n]).filter(function(o, n, r) {
                    return !!(null != i && i != o.tag || null != t && t != o.priority)
                }), gform.hooks[o][n] = r)
            }
        });
    </script>

    <title>3 Third Step &#8211; #360 Consultations</title>
    <meta name='robots' content='max-image-preview:large' />
    <link rel="alternate" type="application/rss+xml" title="#360 Consultations &raquo; Feed" href="https://yuk.liz.mybluehost.me/Check/feed/" />
    <link rel="alternate" type="application/rss+xml" title="#360 Consultations &raquo; Comments Feed" href="https://yuk.liz.mybluehost.me/Check/comments/feed/" />
    <script>
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/yuk.liz.mybluehost.me\/Check\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.1.1"
            }
        };
        /*! This file is auto-generated */
        ! function(e, a, t) {
            var n, r, o, i = a.createElement("canvas"),
                p = i.getContext && i.getContext("2d");

            function s(e, t) {
                var a = String.fromCharCode,
                    e = (p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0), i.toDataURL());
                return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
            }

            function c(e) {
                var t = a.createElement("script");
                t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
            }
            for (o = Array("flag", "emoji"), t.supports = {
                    everything: !0,
                    everythingExceptFlag: !0
                }, r = 0; r < o.length; r++) t.supports[o[r]] = function(e) {
                if (p && p.fillText) switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
                    case "flag":
                        return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]);
                    case "emoji":
                        return !s([129777, 127995, 8205, 129778, 127999], [129777, 127995, 8203, 129778, 127999])
                }
                return !1
            }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
            t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function() {
                t.DOMReady = !0
            }, t.supports.everything || (n = function() {
                t.readyCallback()
            }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function() {
                "complete" === a.readyState && t.readyCallback()
            })), (e = t.source || {}).concatemoji ? c(e.concatemoji) : e.wpemoji && e.twemoji && (c(e.twemoji), c(e.wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>
    <style>
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
    <link rel='stylesheet' id='jkit-elements-main-css' href='https://yuk.liz.mybluehost.me/Check/wp-content/plugins/jeg-elementor-kit/assets/css/elements/main.css?ver=2.5.12' media='all' />
    <link rel='stylesheet' id='wp-block-library-css' href='https://yuk.liz.mybluehost.me/Check/wp-includes/css/dist/block-library/style.min.css?ver=6.1.1' media='all' />
    <link rel='stylesheet' id='classic-theme-styles-css' href='https://yuk.liz.mybluehost.me/Check/wp-includes/css/classic-themes.min.css?ver=1' media='all' />
    <style id='global-styles-inline-css'>
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
            --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
            --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
            --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
            --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
            --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
            --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
            --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
            --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
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
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        body .is-layout-flow>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-flow>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-flow>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-constrained>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-constrained>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignwide {
            max-width: var(--wp--style--global--wide-size);
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex>* {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
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

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel='stylesheet' id='wpda_wpdp_public-css' href='https://yuk.liz.mybluehost.me/Check/wp-content/plugins/wp-data-access/public/../assets/css/wpda_public.css?ver=5.2.11' media='all' />
    <link rel='stylesheet' id='hfe-style-css' href='https://yuk.liz.mybluehost.me/Check/wp-content/plugins/header-footer-elementor/assets/css/header-footer-elementor.css?ver=1.6.13' media='all' />
    <link rel='stylesheet' id='elementor-icons-css' href='https://yuk.liz.mybluehost.me/Check/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.16.0' media='all' />
    <link rel='stylesheet' id='elementor-frontend-css' href='https://yuk.liz.mybluehost.me/Check/wp-content/plugins/elementor/assets/css/frontend-lite.min.css?ver=3.9.2' media='all' />
    <link rel='stylesheet' id='elementor-post-35-css' href='https://yuk.liz.mybluehost.me/Check/wp-content/uploads/elementor/css/post-35.css?ver=1672293980' media='all' />
    <link rel='stylesheet' id='elementor-post-875-css' href='https://yuk.liz.mybluehost.me/Check/wp-content/uploads/elementor/css/post-875.css?ver=1672745820' media='all' />
    <link rel='stylesheet' id='fluentform-elementor-widget-css' href='https://yuk.liz.mybluehost.me/Check/wp-content/plugins/fluentform/public/css/fluent-forms-elementor-widget.css?ver=4.3.22' media='all' />
    <link rel='stylesheet' id='hfe-widgets-style-css' href='https://yuk.liz.mybluehost.me/Check/wp-content/plugins/header-footer-elementor/inc/widgets-css/frontend.css?ver=1.6.13' media='all' />
    <link rel='stylesheet' id='hello-elementor-css' href='https://yuk.liz.mybluehost.me/Check/wp-content/themes/hello-elementor/style.min.css?ver=2.6.1' media='all' />
    <link rel='stylesheet' id='hello-elementor-theme-style-css' href='https://yuk.liz.mybluehost.me/Check/wp-content/themes/hello-elementor/theme.min.css?ver=2.6.1' media='all' />
    <link rel='stylesheet' id='gform_basic-css' href='https://yuk.liz.mybluehost.me/Check/wp-content/plugins/gravityforms/assets/css/dist/basic.min.css?ver=2.6.9' media='all' />
    <link rel='stylesheet' id='gform_theme_components-css' href='https://yuk.liz.mybluehost.me/Check/wp-content/plugins/gravityforms/assets/css/dist/theme-components.min.css?ver=2.6.9' media='all' />
    <link rel='stylesheet' id='gform_theme_ie11-css' href='https://yuk.liz.mybluehost.me/Check/wp-content/plugins/gravityforms/assets/css/dist/theme-ie11.min.css?ver=2.6.9' media='all' />
    <link rel='stylesheet' id='gform_theme-css' href='https://yuk.liz.mybluehost.me/Check/wp-content/plugins/gravityforms/assets/css/dist/theme.min.css?ver=2.6.9' media='all' />
    <link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Inter%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CHeebo%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CNunito+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPontano+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=swap&#038;ver=6.1.1' media='all' />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script src='https://yuk.liz.mybluehost.me/Check/wp-includes/js/jquery/jquery.min.js?ver=3.6.1' id='jquery-core-js'></script>
    <script src='https://yuk.liz.mybluehost.me/Check/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2' id='jquery-migrate-js'></script>
    <script src='https://yuk.liz.mybluehost.me/Check/wp-includes/js/underscore.min.js?ver=1.13.4' id='underscore-js'></script>
    <script src='https://yuk.liz.mybluehost.me/Check/wp-includes/js/backbone.min.js?ver=1.4.1' id='backbone-js'></script>
    <script id='wp-api-request-js-extra'>
        var wpApiSettings = {
            "root": "https:\/\/yuk.liz.mybluehost.me\/Check\/wp-json\/",
            "nonce": "e2a94df0f6",
            "versionString": "wp\/v2\/"
        };
    </script>
    <script src='https://yuk.liz.mybluehost.me/Check/wp-includes/js/api-request.min.js?ver=6.1.1' id='wp-api-request-js'></script>
    <script src='https://yuk.liz.mybluehost.me/Check/wp-includes/js/wp-api.min.js?ver=6.1.1' id='wp-api-js'></script>
    <script src='https://yuk.liz.mybluehost.me/Check/wp-content/plugins/wp-data-access/public/../assets/js/wpda_rest_api.js?ver=5.2.11' id='wpda_rest_api-js'></script>
    <script defer='defer' src='https://yuk.liz.mybluehost.me/Check/wp-content/plugins/gravityforms/js/jquery.json.min.js?ver=2.6.9' id='gform_json-js'></script>
    <script id='gform_gravityforms-js-extra'>
        var gf_global = {
            "gf_currency_config": {
                "name": "U.S. Dollar",
                "symbol_left": "$",
                "symbol_right": "",
                "symbol_padding": "",
                "thousand_separator": ",",
                "decimal_separator": ".",
                "decimals": 2,
                "code": "USD"
            },
            "base_url": "https:\/\/yuk.liz.mybluehost.me\/Check\/wp-content\/plugins\/gravityforms",
            "number_formats": [],
            "spinnerUrl": "https:\/\/yuk.liz.mybluehost.me\/Check\/wp-content\/plugins\/gravityforms\/images\/spinner.svg",
            "strings": {
                "newRowAdded": "New row added.",
                "rowRemoved": "Row removed",
                "formSaved": "The form has been saved.  The content contains the link to return and complete the form."
            }
        };
        var gform_i18n = {
            "datepicker": {
                "days": {
                    "monday": "Mon",
                    "tuesday": "Tue",
                    "wednesday": "Wed",
                    "thursday": "Thu",
                    "friday": "Fri",
                    "saturday": "Sat",
                    "sunday": "Sun"
                },
                "months": {
                    "january": "January",
                    "february": "February",
                    "march": "March",
                    "april": "April",
                    "may": "May",
                    "june": "June",
                    "july": "July",
                    "august": "August",
                    "september": "September",
                    "october": "October",
                    "november": "November",
                    "december": "December"
                },
                "firstDay": 1,
                "iconText": "Select date"
            }
        };
        var gf_legacy_multi = {
            "5": ""
        };
        var gform_gravityforms = {
            "strings": {
                "invalid_file_extension": "This type of file is not allowed. Must be one of the following:",
                "delete_file": "Delete this file",
                "in_progress": "in progress",
                "file_exceeds_limit": "File exceeds size limit",
                "illegal_extension": "This type of file is not allowed.",
                "max_reached": "Maximum number of files reached",
                "unknown_error": "There was a problem while saving the file on the server",
                "currently_uploading": "Please wait for the uploading to complete",
                "cancel": "Cancel",
                "cancel_upload": "Cancel this upload",
                "cancelled": "Cancelled"
            },
            "vars": {
                "images_url": "https:\/\/yuk.liz.mybluehost.me\/Check\/wp-content\/plugins\/gravityforms\/images"
            }
        };
    </script>
    <script id='gform_gravityforms-js-before'>

    </script>
    <script defer='defer' src='https://yuk.liz.mybluehost.me/Check/wp-content/plugins/gravityforms/js/gravityforms.min.js?ver=2.6.9' id='gform_gravityforms-js'></script>
    <script src='https://yuk.liz.mybluehost.me/Check/wp-content/plugins/gp-easy-passthrough/js/vendor/js.cookie.js?ver=1.9.16' id='gpep_vendor_cookie-js'></script>
    <link rel="https://api.w.org/" href="https://yuk.liz.mybluehost.me/Check/wp-json/" />
    <link rel="alternate" type="application/json" href="https://yuk.liz.mybluehost.me/Check/wp-json/wp/v2/pages/875" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://yuk.liz.mybluehost.me/Check/xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://yuk.liz.mybluehost.me/Check/wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 6.1.1" />
    <link rel="canonical" href="https://yuk.liz.mybluehost.me/Check/company-details/" />
    <link rel='shortlink' href='https://yuk.liz.mybluehost.me/Check/?p=875' />
    <link rel="alternate" type="application/json+oembed" href="https://yuk.liz.mybluehost.me/Check/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fyuk.liz.mybluehost.me%2FCheck%2Fcompany-details%2F" />
    <link rel="alternate" type="text/xml+oembed" href="https://yuk.liz.mybluehost.me/Check/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fyuk.liz.mybluehost.me%2FCheck%2Fcompany-details%2F&#038;format=xml" />
    <meta name="cdp-version" content="1.3.7" />
    <style id="wp-custom-css">
        .ff-chained-select-field-wrapper {
            height: 250px !important;
        }

        .ff-el-section-break {
            margin-bottom: 60px !important;
        }


        .height {
            height: 250px !important;
        }

        button {
            color: #007bff !important;
            border: solid 2px #007bff !important;
        }


        button:hover {
            color: white !important;
            border: solid 2px #007bff !important;
        }


        .fluentform .ff-el-group.ff_list_buttons .ff-el-form-check {
            margin-right: 80px;
        }

        .alignitemscenter .ff-el-input--content {
            margin-left: 22%;
        }

        .chain .ff-t-container {
            display: flex;
            flex-wrap: wrap;
            width: 100%;
            gap: 0px;
        }

        .step-nav {
            margin-top: 200px;
        }

        .ff_submit_btn_wrapper {
            margin-top: 200px;
        }

        .chain .ff-t-container {
            display: flex;
            flex-wrap: wrap;
            width: 100%;
            gap: 0px;
        }



        .gform_title {
            display: none;
        }

        input {
            box-shadow: rgb(0 0 0 / 4%) 0px 3px 5px 0px;

        }

        .gform_wrapper.gravity-theme .gfield_label {
            font-size: 16px;
            font-weight: 400;
            color: #434b65;
            margin-bottom: 0px;
        }


        .gform_page_footer {
            margin-top: 50px !important;
        }

        .side-text h2 {
            font-size: 18px;
            font-weight: 700;
            color: #cfd5de;
        }


        .side-texts h2 {
            font-size: 18px;
            font-weight: 700;
            color: #005eff;
        }

        .gform_next_button {
            float: right;
            background-image: linear-gradient(90deg, #F7E359 0%, #F7E359 100%) !important;
        }

        .gform_next_button:hover {
            Color: #F7E359 !important;
            background-image: linear-gradient(90deg, #ffffff 0%, #ffffff 100%) !important;
        }


        .pc_image_choice .gfield_radio .gchoice {
            width: 250px;
            height: 250px;
        }

        .pc_image_choice .gfield_radio .gchoice label img {
            max-height: 200px;
        }

        .gfield_radio {
            justify-content: center;
            align-items: center;
        }


        .gform_wrapper.gravity-theme select {
            border: 0px;
            box-shadow: rgb(0 0 0 / 4%) 0px 3px 5px 0px;
        }



        .side-menu .elementor-widget:not(:last-child) {
            margin-bottom: 50px;
        }


        /** the First steps **/

        .first-step .gform_wrapper.gravity-theme input[type=text] {
            padding-top: 20px;
            padding-bottom: 20px;
            padding-left: 20px;
            font-size: 18px;
        }


        .first-step .gform_button {
            background-image: linear-gradient(90deg, #F7E359 0%, #F7E359 100%) !important;
            border-radius: 5px !important;
            padding-top: 20px !important;
            padding-bottom: 20px !important;
        }

        .first-step .gform_button {
            color: black !important;
            border-color: red !important;
        }

        .first-step .gform_button:focus {
            color: black !important;
            border-color: red !important;
        }




        /** Secound Step **/


        .gfield_html_formatted {
            padding-bottom: 60px;
        }



        .steps .gform_button {
            background-image: linear-gradient(90deg, #F7E359 0%, #F7E359 100%) !important;
            border-radius: 5px !important;
            float !important;
        }

        .gform_button {
            float: right !important;
        }

        .steps .gform_footer {
            float: right !important;
        }


        #label_1_8_1,
        #label_6_27_0,
        #label_6_27_1,
        #label_6_27_2,
        #label_1_8_0 {
            border-radius: 15px !important;
        }

        #gform_submit_button_2:hover {
            border-color: #F7E359 !important;
        }


        .gpnf-nested-entries {
            border-radius: 15px !important;
            border: none !important;

        }

        .gpnf-nested-entries th {
            border-top: none !important;
            border-bottom: none !important;
            background-color: #f6f8fa !important;
            border-left: none !important;
            border-right: none !important;
        }

        table tbody+tbody {
            border-top: none !important;
            border-bottom: none !important;
            border-left: none !important;
            border-right: none !important;
            background-color: #f6f8fa !important;

        }


        .gpnf-row-actions .edit-button {
            background-image: linear-gradient(90deg, #0c26ae 0%, #0c26ae 100%) !important;
            padding-top: 5px;
            padding-bottom: 5px;
            padding-left: 10px;
            padding-right: 10px;
            border-radius: 6px;
            border: 0px !important;
            color: white !important;
            text-decoration: none;
        }

        .gpnf-row-actions .delete-button {
            background-image: linear-gradient(90deg, #da0c0c 0%, #da0c0c 100%) !important;
            padding-top: 5px;
            padding-bottom: 5px;
            padding-left: 10px;
            padding-right: 10px;
            border-radius: 6px;
            border: 0px !important;
            color: white !important;
            text-decoration: none;
        }

        .gpnf-add-entry {
            border: 1px solid !important;
        }


        .gpnf-nested-entries td {
            border-top: none !important;
            border-bottom: none !important;
            border-left: none !important;
            border-right: none !important;
        }


        .gpnf-modal .gpnf-modal-header {
            background-color: #007bff !important;
        }


        .footer-link a:hover {
            color: white;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
</head>

<body class="page-template page-template-elementor_canvas page page-id-875 ehf-header ehf-template-hello-elementor ehf-stylesheet-hello-elementor jkit-color-scheme elementor-default elementor-template-canvas elementor-kit-35 elementor-page elementor-page-875">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-dark-grayscale">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 0.49803921568627" />
                    <feFuncG type="table" tableValues="0 0.49803921568627" />
                    <feFuncB type="table" tableValues="0 0.49803921568627" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-grayscale">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 1" />
                    <feFuncG type="table" tableValues="0 1" />
                    <feFuncB type="table" tableValues="0 1" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-purple-yellow">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" />
                    <feFuncG type="table" tableValues="0 1" />
                    <feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-blue-red">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 1" />
                    <feFuncG type="table" tableValues="0 0.27843137254902" />
                    <feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-midnight">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 0" />
                    <feFuncG type="table" tableValues="0 0.64705882352941" />
                    <feFuncB type="table" tableValues="0 1" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-magenta-yellow">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.78039215686275 1" />
                    <feFuncG type="table" tableValues="0 0.94901960784314" />
                    <feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-purple-green">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" />
                    <feFuncG type="table" tableValues="0 1" />
                    <feFuncB type="table" tableValues="0.44705882352941 0.4" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-blue-orange">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.098039215686275 1" />
                    <feFuncG type="table" tableValues="0 0.66274509803922" />
                    <feFuncB type="table" tableValues="0.84705882352941 0.41960784313725" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg>
    <div data-elementor-type="wp-page" data-elementor-id="875" class="elementor elementor-875">
        <section class="elementor-section elementor-top-section elementor-element elementor-element-90da3ab elementor-section-full_width elementor-section-height-full elementor-section-items-stretch elementor-section-height-default" data-id="90da3ab" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-95ddfe1 side-menu" data-id="95ddfe1" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-d1b01f5 side-text elementor-widget elementor-widget-heading" data-id="d1b01f5" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <style>
                                    /*! elementor - v3.9.2 - 21-12-2022 */
                                    .elementor-heading-title {
                                        padding: 0;
                                        margin: 0;
                                        line-height: 1
                                    }

                                    .elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a {
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
                                    }
                                </style>
                                <h2 class="elementor-heading-title elementor-size-default">1. Company Type
                                    <span style="color:#00d084;">
                                        <i class="fa-solid fa-check"></i>
                                    </span>
                                </h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-eb8d7c0 side-texts elementor-widget elementor-widget-heading" data-id="eb8d7c0" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">2. Company Details</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-130d7e1 side-text elementor-widget elementor-widget-heading" data-id="130d7e1" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">3. Owners</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-9858a75 side-text elementor-widget elementor-widget-heading" data-id="9858a75" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">4. ShareHolder Details</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-db8bae7 steps" data-id="db8bae7" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-5351a97 elementor-widget elementor-widget-shortcode" data-id="5351a97" data-element_type="widget" data-widget_type="shortcode.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-shortcode">
                                    <div class='gf_browser_chrome gform_wrapper gravity-theme' id='gform_wrapper_5'>
                                        <div id='gf_5' class='gform_anchor' tabindex='-1'></div>
                                        <div class='gform_heading'>
                                            <h2 class="gform_title">3 Company Details</h2>
                                            <span class='gform_description'></span>
                                        </div>
                                        <form method='post' enctype='multipart/form-data' id='gform_5' action='<?php echo base_url(); ?>home/fourth_step'>
                                            <div class='gform_body gform-body'>
                                                
                                                <div id='gform_page_5_2' class='gform_page'>
                                                    <div class='gform_page_fields'>
                                                        <div id='gform_fields_5_2' class='gform_fields top_label form_sublabel_below description_below'>
                                                            <div id="field_5_69" class="gfield gfield--width-full gfield_html gfield_html_formatted gfield_no_follows_desc field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_5_69">
                                                                <h2>Where is your Company?</h2>
                                                            </div>
                                                            <div id="field_5_16" class="gfield gfield--width-half field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_5_16"><label class='gfield_label screen-reader-text' for='input_5_16'>Address Line 1</label>
                                                                <div class='ginput_container ginput_container_text'><input name='line1' id='input_5_16' type='text' value='' class='large' placeholder='Address Line 1' aria-invalid="false" /> 
                                                                <div style="margin-top: 5px; font-size:14px; color:var(--wp--preset--color--vivid-red);">
                                                                    <?php echo form_error('line1'); ?>
                                                                </div>
                                                            </div>
                                                            </div>
                                                            <div id="field_5_18" class="gfield gfield--width-half field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_5_18"><label class='gfield_label screen-reader-text' for='input_5_18'>Address Line 2</label>
                                                                <div class='ginput_container ginput_container_text'><input name='line2' id='input_5_18' type='text' value='' class='large' placeholder='Address Line 2' aria-invalid="false" /> </div>
                                                            </div>
                                                            <div id="field_5_19" class="gfield gfield--width-third field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_5_19"><label class='gfield_label screen-reader-text' for='input_5_19'>District</label>
                                                                <div class='ginput_container ginput_container_select'><select name='district' id='input_5_19' class='large gfield_select' aria-invalid="false">
                                                                        <option value='' selected='selected' class='gf_placeholder'>District</option>
                                                                        <option value='Jaffna'>Jaffna</option>
                                                                        <option value='Mannar'>Mannar</option>
                                                                        <option value='Vavnuniya'>Vavnuniya</option>
                                                                        <option value='Mulaitheevu'>Mulaitheevu</option>
                                                                        <option value='Kilinichi'>Kilinichi</option>
                                                                    </select>
                                                                    <div style="margin-top: 5px; font-size:14px; color:var(--wp--preset--color--vivid-red);">
                                                                    <?php echo form_error('district'); ?>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            <div id="field_5_20" class="gfield gfield--width-third field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_5_20"><label class='gfield_label screen-reader-text' for='input_5_20'>City</label>
                                                                <div class='ginput_container ginput_container_select'><select name='city' id='input_5_20' class='large gfield_select' aria-invalid="false">
                                                                        <option value='' selected='selected' class='gf_placeholder'>City</option>
                                                                        <option value='Jaffna'>Jaffna</option>
                                                                        <option value='Mannar'>Mannar</option>
                                                                        <option value='Vavnuniya'>Vavnuniya</option>
                                                                        <option value='Mulaitheevu'>Mulaitheevu</option>
                                                                        <option value='Kilinichi'>Kilinichi</option>
                                                                    </select><div style="margin-top: 5px; font-size:14px; color:var(--wp--preset--color--vivid-red);">
                                                                    <?php echo form_error('city'); ?>
                                                                </div></div>
                                                            </div>
                                                            <div id="field_5_21" class="gfield gfield--width-third field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_5_21"><label class='gfield_label screen-reader-text' for='input_5_21'>Postal Code</label>
                                                                <div class='ginput_container ginput_container_select'><select name='postal' id='input_5_21' class='large gfield_select' aria-invalid="false">
                                                                        <option value='' selected='selected' class='gf_placeholder'>Postal Code</option>
                                                                        <option value='Jaffna'>Jaffna</option>
                                                                        <option value='Mannar'>Mannar</option>
                                                                        <option value='Vavnuniya'>Vavnuniya</option>
                                                                        <option value='Mulaitheevu'>Mulaitheevu</option>
                                                                        <option value='Kilinichi'>Kilinichi</option>
                                                                    </select><div style="margin-top: 5px; font-size:14px; color:var(--wp--preset--color--vivid-red);">
                                                                    <?php echo form_error('postal'); ?>
                                                                </div></div>
                                                            </div>
                                                            <div id="field_5_22" class="gfield gfield--width-half field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_5_22"><label class='gfield_label screen-reader-text' for='input_5_22'>DS Division</label>
                                                                <div class='ginput_container ginput_container_select'><select name='ds' id='input_5_22' class='large gfield_select' aria-invalid="false">
                                                                        <option value='' selected='selected' class='gf_placeholder'>DS Division</option>
                                                                        <option value='Jaffna'>Jaffna</option>
                                                                        <option value='Mannar'>Mannar</option>
                                                                        <option value='Vavnuniya'>Vavnuniya</option>
                                                                        <option value='Mulaitheevu'>Mulaitheevu</option>
                                                                        <option value='Kilinichi'>Kilinichi</option>
                                                                    </select><div style="margin-top: 5px; font-size:14px; color:var(--wp--preset--color--vivid-red);">
                                                                    <?php echo form_error('ds'); ?>
                                                                </div></div>
                                                            </div>
                                                            <div id="field_5_23" class="gfield gfield--width-half field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_5_23"><label class='gfield_label screen-reader-text' for='input_5_23'>GN Division</label>
                                                                <div class='ginput_container ginput_container_select'><select name='gs' id='input_5_23' class='large gfield_select' aria-invalid="false">
                                                                        <option value='' selected='selected' class='gf_placeholder'>GN Division</option>
                                                                        <option value='Jaffna'>Jaffna</option>
                                                                        <option value='Mannar'>Mannar</option>
                                                                        <option value='Vavnuniya'>Vavnuniya</option>
                                                                        <option value='Mulaitheevu'>Mulaitheevu</option>
                                                                        <option value='Kilinichi'>Kilinichi</option>
                                                                    </select><div style="margin-top: 5px; font-size:14px; color:var(--wp--preset--color--vivid-red);">
                                                                    <?php echo form_error('gs'); ?>
                                                                </div></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class='gform_page_footer top_label'> <input type='submit' id='gform_submit_button_5' class='gform_button button' value='Next'/>
                                                        

                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script type="text/javascript">
        jQuery(function() {
            if (window.Cookies) {
                Cookies.set("gp_easy_passthrough_session", "66ec6fb822549b5d3269467fbe785741||1673686050||1673685690", {
                    "expires": new Date(new Date().getTime() + 1800000),
                    "path": "/Check/",
                    "domain": "",
                    "SameSite": "Lax",
                    "secure": false
                });
            }
        });
    </script>
    <link rel='stylesheet' id='jeg-dynamic-style-css' href='https://yuk.liz.mybluehost.me/Check/wp-content/plugins/jeg-elementor-kit/lib/jeg-framework/assets/css/jeg-dynamic-styles.css?ver=1.2.9' media='all' />
    <script src='https://yuk.liz.mybluehost.me/Check/wp-content/themes/hello-elementor/assets/js/hello-frontend.min.js?ver=1.0.0' id='hello-theme-frontend-js'></script>
    <script src='https://yuk.liz.mybluehost.me/Check/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.9' id='regenerator-runtime-js'></script>
    <script src='https://yuk.liz.mybluehost.me/Check/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0' id='wp-polyfill-js'></script>
    <script src='https://yuk.liz.mybluehost.me/Check/wp-includes/js/dist/dom-ready.min.js?ver=392bdd43726760d1f3ca' id='wp-dom-ready-js'></script>
    <script src='https://yuk.liz.mybluehost.me/Check/wp-includes/js/dist/hooks.min.js?ver=4169d3cf8e8d95a3d6d5' id='wp-hooks-js'></script>
    <script src='https://yuk.liz.mybluehost.me/Check/wp-includes/js/dist/i18n.min.js?ver=9e794f35a71bb98672ae' id='wp-i18n-js'></script>
    <script id='wp-i18n-js-after'>
        wp.i18n.setLocaleData({
            'text direction\u0004ltr': ['ltr']
        });
    </script>
    <script src='https://yuk.liz.mybluehost.me/Check/wp-includes/js/dist/a11y.min.js?ver=ecce20f002eda4c19664' id='wp-a11y-js'></script>
    <script defer='defer' src='https://yuk.liz.mybluehost.me/Check/wp-content/plugins/gravityforms/js/placeholders.jquery.min.js?ver=2.6.9' id='gform_placeholder-js'></script>
    <script src='https://yuk.liz.mybluehost.me/Check/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.9.2' id='elementor-webpack-runtime-js'></script>
    <script src='https://yuk.liz.mybluehost.me/Check/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.9.2' id='elementor-frontend-modules-js'></script>
    <script src='https://yuk.liz.mybluehost.me/Check/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2' id='elementor-waypoints-js'></script>
    <script src='https://yuk.liz.mybluehost.me/Check/wp-includes/js/jquery/ui/core.min.js?ver=1.13.2' id='jquery-ui-core-js'></script>
    <script id='elementor-frontend-js-before'>
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
                "close": "Close"
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
                        "label": "Mobile",
                        "value": 767,
                        "default_value": 767,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "mobile_extra": {
                        "label": "Mobile Extra",
                        "value": 880,
                        "default_value": 880,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "tablet": {
                        "label": "Tablet",
                        "value": 1024,
                        "default_value": 1024,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "tablet_extra": {
                        "label": "Tablet Extra",
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
                }
            },
            "version": "3.9.2",
            "is_static": false,
            "experimentalFeatures": {
                "e_dom_optimization": true,
                "e_optimized_assets_loading": true,
                "e_optimized_css_loading": true,
                "a11y_improvements": true,
                "additional_custom_breakpoints": true,
                "e_import_export": true,
                "e_hidden_wordpress_widgets": true,
                "hello-theme-header-footer": true,
                "landing-pages": true,
                "elements-color-picker": true,
                "favorite-widgets": true,
                "admin-top-bar": true,
                "kit-elements-defaults": true
            },
            "urls": {
                "assets": "https:\/\/yuk.liz.mybluehost.me\/Check\/wp-content\/plugins\/elementor\/assets\/"
            },
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
                "hello_header_logo_type": "title",
                "hello_header_menu_layout": "horizontal",
                "hello_footer_logo_type": "logo"
            },
            "post": {
                "id": 875,
                "title": "3%20Third%20Step%20%E2%80%93%20%23360%20Consultations",
                "excerpt": "",
                "featuredImage": false
            }
        };
    </script>
    <script src='https://yuk.liz.mybluehost.me/Check/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.9.2' id='elementor-frontend-js'></script>
    <script id='elementor-frontend-js-after'>
        var jkit_ajax_url = "https://yuk.liz.mybluehost.me/Check/?jkit-ajax-request=jkit_elements",
            jkit_nonce = "3faa18e24c";
    </script>
    <script src='https://yuk.liz.mybluehost.me/Check/wp-content/plugins/jeg-elementor-kit/assets/js/elements/sticky-element.js?ver=2.5.12' id='jkit-sticky-element-js'></script>
    <script>
        gform.initializeOnLoaded(function() {
            jQuery(document).on('gform_post_render', function(event, formId, currentPage) {
                if (formId == 5) {
                    if (typeof Placeholders != 'undefined') {
                        Placeholders.enable();
                    }
                }
            });
            jQuery(document).bind('gform_post_conditional_logic', function(event, formId, fields, isInit) {})
        });
    </script>
    <script>
        gform.initializeOnLoaded(function() {
            jQuery(document).trigger('gform_post_render', [5, 1])
        });
    </script>
</body>

</html>