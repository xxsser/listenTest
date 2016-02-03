<?php include 'init.php'; ?>
<!DOCTYPE html>
<html class="mobile">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>据说25岁以上就听不到这些声音了，快来测试一下耳朵听力吧。 | 吉他大师</title>
    <script type="text/javascript" src="./js/f47a205ec3"></script>
    <script src="./js/nr-852.min.js"></script>
    <script async="" src="./js/analytics.js"></script>
    <script type="text/javascript">window.NREUM || (NREUM = {});
    NREUM.info = {
        "beacon": "bam.nr-data.net",
        "errorBeacon": "bam.nr-data.net",
        "licenseKey": "f47a205ec3",
        "applicationID": "12970677",
        "transactionName": "IFpYTEFeXA1VRBkSBwBdV0wcVlEMVUUZDQcCR19WVG5EBENCGRYKDEI=",
        "queueTime": 0,
        "applicationTime": 20,
        "agent": ""
    }</script>
    <script type="text/javascript">window.NREUM || (NREUM = {}), __nr_require = function (t, e, n) {
        function r(n) {
            if (!e[n]) {
                var o = e[n] = {exports: {}};
                t[n][0].call(o.exports, function (e) {
                    var o = t[n][1][e];
                    return r(o || e)
                }, o, o.exports)
            }
            return e[n].exports
        }

        if ("function" == typeof __nr_require)return __nr_require;
        for (var o = 0; o < n.length; o++)r(n[o]);
        return r
    }({
        QJf3ax: [function (t, e) {
            function n() {
            }

            function r(t) {
                function e(t) {
                    return t && t instanceof n ? t : t ? a(t, i, o) : o()
                }

                function c(n, r, o) {
                    t && t(n, r, o);
                    for (var i = e(o), a = f(n), c = a.length, u = 0; c > u; u++)a[u].apply(i, r);
                    return i
                }

                function u(t, e) {
                    p[t] = f(t).concat(e)
                }

                function f(t) {
                    return p[t] || []
                }

                function s() {
                    return r(c)
                }

                var p = {};
                return {on: u, emit: c, create: s, listeners: f, context: e, _events: p}
            }

            function o() {
                return new n
            }

            var i = "nr@context", a = t("gos");
            e.exports = r()
        }, {gos: "7eSDFh"}], ee: [function (t, e) {
            e.exports = t("QJf3ax")
        }, {}], 3: [function (t, e) {
            function n(t) {
                return function () {
                    r(t, [(new Date).getTime()].concat(i(arguments)))
                }
            }

            var r = t("handle"), o = t(1), i = t(2);
            "undefined" == typeof window.newrelic && (newrelic = window.NREUM);
            var a = ["setPageViewName", "addPageAction", "setCustomAttribute", "finished", "addToTrace", "inlineHit", "noticeError"];
            o(a, function (t, e) {
                window.NREUM[e] = n("api-" + e)
            }), e.exports = window.NREUM
        }, {1: 12, 2: 13, handle: "D5DuLP"}], gos: [function (t, e) {
            e.exports = t("7eSDFh")
        }, {}], "7eSDFh": [function (t, e) {
            function n(t, e, n) {
                if (r.call(t, e))return t[e];
                var o = n();
                if (Object.defineProperty && Object.keys)try {
                    return Object.defineProperty(t, e, {value: o, writable: !0, enumerable: !1}), o
                } catch (i) {
                }
                return t[e] = o, o
            }

            var r = Object.prototype.hasOwnProperty;
            e.exports = n
        }, {}], D5DuLP: [function (t, e) {
            function n(t, e, n) {
                return r.listeners(t).length ? r.emit(t, e, n) : void(r.q && (r.q[t] || (r.q[t] = []), r.q[t].push(e)))
            }

            var r = t("ee").create();
            e.exports = n, n.ee = r, r.q = {}
        }, {ee: "QJf3ax"}], handle: [function (t, e) {
            e.exports = t("D5DuLP")
        }, {}], XL7HBI: [function (t, e) {
            function n(t) {
                var e = typeof t;
                return !t || "object" !== e && "function" !== e ? -1 : t === window ? 0 : i(t, o, function () {
                    return r++
                })
            }

            var r = 1, o = "nr@id", i = t("gos");
            e.exports = n
        }, {gos: "7eSDFh"}], id: [function (t, e) {
            e.exports = t("XL7HBI")
        }, {}], G9z0Bl: [function (t, e) {
            function n() {
                if (!v++) {
                    var t = l.info = NREUM.info, e = f.getElementsByTagName("script")[0];
                    if (t && t.licenseKey && t.applicationID && e) {
                        c(p, function (e, n) {
                            t[e] || (t[e] = n)
                        });
                        var n = "https" === s.split(":")[0] || t.sslForHttp;
                        l.proto = n ? "https://" : "http://", a("mark", ["onload", i()]);
                        var r = f.createElement("script");
                        r.src = l.proto + t.agent, e.parentNode.insertBefore(r, e)
                    }
                }
            }

            function r() {
                "complete" === f.readyState && o()
            }

            function o() {
                a("mark", ["domContent", i()])
            }

            function i() {
                return (new Date).getTime()
            }

            var a = t("handle"), c = t(1), u = window, f = u.document;
            t(2);
            var s = ("" + location).split("?")[0], p = {
                beacon: "bam.nr-data.net",
                errorBeacon: "bam.nr-data.net",
                agent: "js-agent.newrelic.com/nr-852.min.js"
            }, d = window.XMLHttpRequest && XMLHttpRequest.prototype && XMLHttpRequest.prototype.addEventListener && !/CriOS/.test(navigator.userAgent), l = e.exports = {
                offset: i(),
                origin: s,
                features: {},
                xhrWrappable: d
            };
            f.addEventListener ? (f.addEventListener("DOMContentLoaded", o, !1), u.addEventListener("load", n, !1)) : (f.attachEvent("onreadystatechange", r), u.attachEvent("onload", n)), a("mark", ["firstbyte", i()]);
            var v = 0
        }, {1: 12, 2: 3, handle: "D5DuLP"}], loader: [function (t, e) {
            e.exports = t("G9z0Bl")
        }, {}], 12: [function (t, e) {
            function n(t, e) {
                var n = [], o = "", i = 0;
                for (o in t)r.call(t, o) && (n[i] = e(o, t[o]), i += 1);
                return n
            }

            var r = Object.prototype.hasOwnProperty;
            e.exports = n
        }, {}], 13: [function (t, e) {
            function n(t, e, n) {
                e || (e = 0), "undefined" == typeof n && (n = t ? t.length : 0);
                for (var r = -1, o = n - e || 0, i = Array(0 > o ? 0 : o); ++r < o;)i[r] = t[e + r];
                return i
            }

            e.exports = n
        }, {}]
    }, {}, ["G9z0Bl"]);</script>
    <meta content="width=device-width, minimum-scale=1, maximum-scale=1" name="viewport">
    <link rel="stylesheet" media="all"
          href="./css/application.css">
    <script src="./js/jweixin-1.1.0.js"></script>
    <script src="./js/application.js"></script>
    <script type="text/javascript">
        //<![CDATA[
        window.gon = {};
        gon.env = "production";
        gon.locale = "zh-CN";
        gon.inIOS = false;
        gon.inWechat = true;
        gon.withoutApp = true;
        gon.using_ios_comment = false;
        gon.pageId = "wechat-games-hearing_test-show";
        gon.controller = "hearing_test";
        gon.action = "show";
        gon.variant = ["phone"];
        gon.logined = true;
        gon.current_user = {"uuid": "e437f8c9af084bf3ad30affa0d652487"};
        gon.is_signed_in = true;
        gon.moment_title = "\u636e\u8bf425\u5c81\u4ee5\u4e0a\u5c31\u542c\u4e0d\u5230\u8fd9\u4e9b\u58f0\u97f3\u4e86\uff0c\u5feb\u6765\u6d4b\u8bd5\u4e00\u4e0b\u8033\u6735\u542c\u529b\u5427\u3002";
        gon.moment_uri = "https:\/\/jita.im\/wechat\/games\/hearing_test?inviter=e437f8c9af084bf3ad30affa0d652487";
        gon.moment_icon = "https:\/\/jita.im\/assets\/wechat\/games\/hearing_test\/ic_moments-bca2014996a990dc7cd1372963ff04f8aad3b5359d71cfefc95d071083709dcd.png";
        //]]>
    </script>
</head>
<body id="wechat-games-hearing_test-show" style="cursor: default;">
<div class="container">
    <div class="hide"><img
            src="./image/ic_moments.png"
            alt="Ic moments"></div>
    <div class="screen"><h1 class="title">你知道吗？</h1>
        <p class="ability-reduce">听力受损是永久性无法恢复的<br>耳朵分辨高音的能力会持续下降</p><img class="chart" width="345" height="207"
                                                                          alt="听力年龄分布图"
                                                                          data-at2x="./image/chart@2x.png"
                                                                          data-at3x="./image/chart@3x.png"
                                                                          src="./image/chart.png">
        <p class="come-on">很多人在25岁后已经听不到这些声音了<br>快来测试一下吧</p>
        <p class="arrow"><i class="icon-arrow"></i></p><a class="button"
                                                          href="play.html">开始测试</a>
        <p class="participant"><span class="count">2456029</span>已参加测试</p></div>
    <script>eum.config || (eum.config = {});
    eum.config.appid = "<?php echo $jsbag['appId']?>"
    eum.config.ts = "<?php echo $jsbag['timestamp']?>"
    eum.config.nonce = "<?php echo $jsbag['nonceStr']?>"
    eum.config.signature = "<?php echo $jsbag['nonceStr']?>"</script>
    <script>jQuery(function ($) {
        if ('function' !== typeof ga) return;
        ga('send', 'event', 'Game', 'ready', 'Hearing');
    });</script>
</div>
<script>(function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
    a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

(function () {
    var user = ("undefined" != typeof gon && gon.current_user) || ("undefined" != typeof cc && cc.current_user);
    if (user && user.uuid) {
        ga('create', "UA-52576863-15", {'userId': user.uuid});
    } else {
        ga('create', "UA-52576863-15", 'auto');
    }

    ga('send', 'pageview');

    ga(function (tracker) {
        document.cookie = "_ga_cid=" + tracker.get('clientId');
    });
})();</script>
</body>
</html>