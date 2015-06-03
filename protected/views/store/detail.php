<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <script type="text/javascript">(window.NREUM || (NREUM = {})).loader_config = {xpid: "UwEFVV9QGwAIUFRXBgU="};
    window.NREUM || (NREUM = {}), __nr_require = function (t, e, n) {
        function r(n) {
            if (!e[n]) {
                var o = e[n] = {exports: {}};
                t[n][0].call(o.exports, function (e) {
                    var o = t[n][1][e];
                    return r(o ? o : e)
                }, o, o.exports)
            }
            return e[n].exports
        }

        if ("function" == typeof __nr_require)return __nr_require;
        for (var o = 0; o < n.length; o++)r(n[o]);
        return r
    }({
        QJf3ax: [function (t, e) {
            function n(t) {
                function e(e, n, a) {
                    t && t(e, n, a), a || (a = {});
                    for (var c = s(e), f = c.length, u = i(a, o, r), d = 0; f > d; d++)c[d].apply(u, n);
                    return u
                }

                function a(t, e) {
                    f[t] = s(t).concat(e)
                }

                function s(t) {
                    return f[t] || []
                }

                function c() {
                    return n(e)
                }

                var f = {};
                return {on: a, emit: e, create: c, listeners: s, _events: f}
            }

            function r() {
                return {}
            }

            var o = "nr@context", i = t("gos");
            e.exports = n()
        }, {gos: "7eSDFh"}], ee: [function (t, e) {
            e.exports = t("QJf3ax")
        }, {}], 3: [function (t) {
            function e(t, e, n, i, s) {
                try {
                    c ? c -= 1 : r("err", [s || new UncaughtException(t, e, n)])
                } catch (f) {
                    try {
                        r("ierr", [f, (new Date).getTime(), !0])
                    } catch (u) {
                    }
                }
                return "function" == typeof a ? a.apply(this, o(arguments)) : !1
            }

            function UncaughtException(t, e, n) {
                this.message = t || "Uncaught error with no additional information", this.sourceURL = e, this.line = n
            }

            function n(t) {
                r("err", [t, (new Date).getTime()])
            }

            var r = t("handle"), o = t(5), i = t("ee"), a = window.onerror, s = !1, c = 0;
            t("loader").features.err = !0, window.onerror = e, NREUM.noticeError = n;
            try {
                throw new Error
            } catch (f) {
                "stack"in f && (t(1), t(4), "addEventListener"in window && t(2), window.XMLHttpRequest && XMLHttpRequest.prototype && XMLHttpRequest.prototype.addEventListener && t(3), s = !0)
            }
            i.on("fn-start", function () {
                s && (c += 1)
            }), i.on("fn-err", function (t, e, r) {
                s && (this.thrown = !0, n(r))
            }), i.on("fn-end", function () {
                s && !this.thrown && c > 0 && (c -= 1)
            }), i.on("internal-error", function (t) {
                r("ierr", [t, (new Date).getTime(), !0])
            })
        }, {1: 8, 2: 5, 3: 9, 4: 7, 5: 20, ee: "QJf3ax", handle: "D5DuLP", loader: "G9z0Bl"}], 4: [function (t) {
            function e() {
            }

            if (window.performance && window.performance.timing && window.performance.getEntriesByType) {
                var n = t("ee"), r = t("handle"), o = t(2);
                t("loader").features.stn = !0, t(1), n.on("fn-start", function (t) {
                    var e = t[0];
                    e instanceof Event && (this.bstStart = Date.now())
                }), n.on("fn-end", function (t, e) {
                    var n = t[0];
                    n instanceof Event && r("bst", [n, e, this.bstStart, Date.now()])
                }), o.on("fn-start", function (t, e, n) {
                    this.bstStart = Date.now(), this.bstType = n
                }), o.on("fn-end", function (t, e) {
                    r("bstTimer", [e, this.bstStart, Date.now(), this.bstType])
                }), n.on("pushState-start", function () {
                    this.time = Date.now(), this.startPath = location.pathname + location.hash
                }), n.on("pushState-end", function () {
                    r("bstHist", [location.pathname + location.hash, this.startPath, this.time])
                }), "addEventListener"in window.performance && (window.performance.addEventListener("webkitresourcetimingbufferfull", function () {
                    r("bstResource", [window.performance.getEntriesByType("resource")]), window.performance.webkitClearResourceTimings()
                }, !1), window.performance.addEventListener("resourcetimingbufferfull", function () {
                    r("bstResource", [window.performance.getEntriesByType("resource")]), window.performance.clearResourceTimings()
                }, !1)), document.addEventListener("scroll", e, !1), document.addEventListener("keypress", e, !1), document.addEventListener("click", e, !1)
            }
        }, {1: 6, 2: 8, ee: "QJf3ax", handle: "D5DuLP", loader: "G9z0Bl"}], 5: [function (t, e) {
            function n(t) {
                i.inPlace(t, ["addEventListener", "removeEventListener"], "-", r)
            }

            function r(t) {
                return t[1]
            }

            var o = (t(1), t("ee").create()), i = t(2)(o), a = t("gos");
            if (e.exports = o, n(window), "getPrototypeOf"in Object) {
                for (var s = document; s && !s.hasOwnProperty("addEventListener");)s = Object.getPrototypeOf(s);
                s && n(s);
                for (var c = XMLHttpRequest.prototype; c && !c.hasOwnProperty("addEventListener");)c = Object.getPrototypeOf(c);
                c && n(c)
            } else XMLHttpRequest.prototype.hasOwnProperty("addEventListener") && n(XMLHttpRequest.prototype);
            o.on("addEventListener-start", function (t) {
                if (t[1]) {
                    var e = t[1];
                    "function" == typeof e ? this.wrapped = t[1] = a(e, "nr@wrapped", function () {
                        return i(e, "fn-", null, e.name || "anonymous")
                    }) : "function" == typeof e.handleEvent && i.inPlace(e, ["handleEvent"], "fn-")
                }
            }), o.on("removeEventListener-start", function (t) {
                var e = this.wrapped;
                e && (t[1] = e)
            })
        }, {1: 20, 2: 21, ee: "QJf3ax", gos: "7eSDFh"}], 6: [function (t, e) {
            var n = (t(2), t("ee").create()), r = t(1)(n);
            e.exports = n, r.inPlace(window.history, ["pushState"], "-")
        }, {1: 21, 2: 20, ee: "QJf3ax"}], 7: [function (t, e) {
            var n = (t(2), t("ee").create()), r = t(1)(n);
            e.exports = n, r.inPlace(window, ["requestAnimationFrame", "mozRequestAnimationFrame", "webkitRequestAnimationFrame", "msRequestAnimationFrame"], "raf-"), n.on("raf-start", function (t) {
                t[0] = r(t[0], "fn-")
            })
        }, {1: 21, 2: 20, ee: "QJf3ax"}], 8: [function (t, e) {
            function n(t, e, n) {
                var r = t[0];
                "string" == typeof r && (r = new Function(r)), t[0] = o(r, "fn-", null, n)
            }

            var r = (t(2), t("ee").create()), o = t(1)(r);
            e.exports = r, o.inPlace(window, ["setTimeout", "setInterval", "setImmediate"], "setTimer-"), r.on("setTimer-start", n)
        }, {1: 21, 2: 20, ee: "QJf3ax"}], 9: [function (t, e) {
            function n() {
                c.inPlace(this, d, "fn-")
            }

            function r(t, e) {
                c.inPlace(e, ["onreadystatechange"], "fn-")
            }

            function o(t, e) {
                return e
            }

            var i = t("ee").create(), a = t(1), s = t(2), c = s(i), f = s(a), u = window.XMLHttpRequest, d = ["onload", "onerror", "onabort", "onloadstart", "onloadend", "onprogress", "ontimeout"];
            e.exports = i, window.XMLHttpRequest = function (t) {
                var e = new u(t);
                try {
                    i.emit("new-xhr", [], e), f.inPlace(e, ["addEventListener", "removeEventListener"], "-", function (t, e) {
                        return e
                    }), e.addEventListener("readystatechange", n, !1)
                } catch (r) {
                    try {
                        i.emit("internal-error", [r])
                    } catch (o) {
                    }
                }
                return e
            }, window.XMLHttpRequest.prototype = u.prototype, c.inPlace(XMLHttpRequest.prototype, ["open", "send"], "-xhr-", o), i.on("send-xhr-start", r), i.on("open-xhr-start", r)
        }, {1: 5, 2: 21, ee: "QJf3ax"}], 10: [function (t) {
            function e(t) {
                if ("string" == typeof t && t.length)return t.length;
                if ("object" != typeof t)return void 0;
                if ("undefined" != typeof ArrayBuffer && t instanceof ArrayBuffer && t.byteLength)return t.byteLength;
                if ("undefined" != typeof Blob && t instanceof Blob && t.size)return t.size;
                if ("undefined" != typeof FormData && t instanceof FormData)return void 0;
                try {
                    return JSON.stringify(t).length
                } catch (e) {
                    return void 0
                }
            }

            function n(t) {
                var n = this.params, r = this.metrics;
                if (!this.ended) {
                    this.ended = !0;
                    for (var i = 0; c > i; i++)t.removeEventListener(s[i], this.listener, !1);
                    if (!n.aborted) {
                        if (r.duration = (new Date).getTime() - this.startTime, 4 === t.readyState) {
                            n.status = t.status;
                            var a = t.responseType, f = "arraybuffer" === a || "blob" === a || "json" === a ? t.response : t.responseText, u = e(f);
                            if (u && (r.rxSize = u), this.sameOrigin) {
                                var d = t.getResponseHeader("X-NewRelic-App-Data");
                                d && (n.cat = d.split(", ").pop())
                            }
                        } else n.status = 0;
                        r.cbTime = this.cbTime, o("xhr", [n, r, this.startTime])
                    }
                }
            }

            function r(t, e) {
                var n = i(e), r = t.params;
                r.host = n.hostname + ":" + n.port, r.pathname = n.pathname, t.sameOrigin = n.sameOrigin
            }

            if (window.XMLHttpRequest && XMLHttpRequest.prototype && XMLHttpRequest.prototype.addEventListener && !/CriOS/.test(navigator.userAgent)) {
                t("loader").features.xhr = !0;
                var o = t("handle"), i = t(2), a = t("ee"), s = ["load", "error", "abort", "timeout"], c = s.length, f = t(1);
                t(4), t(3), a.on("new-xhr", function () {
                    this.totalCbs = 0, this.called = 0, this.cbTime = 0, this.end = n, this.ended = !1, this.xhrGuids = {}
                }), a.on("open-xhr-start", function (t) {
                    this.params = {method: t[0]}, r(this, t[1]), this.metrics = {}
                }), a.on("open-xhr-end", function (t, e) {
                    "loader_config"in NREUM && "xpid"in NREUM.loader_config && this.sameOrigin && e.setRequestHeader("X-NewRelic-ID", NREUM.loader_config.xpid)
                }), a.on("send-xhr-start", function (t, n) {
                    var r = this.metrics, o = t[0], i = this;
                    if (r && o) {
                        var f = e(o);
                        f && (r.txSize = f)
                    }
                    this.startTime = (new Date).getTime(), this.listener = function (t) {
                        try {
                            "abort" === t.type && (i.params.aborted = !0), ("load" !== t.type || i.called === i.totalCbs && (i.onloadCalled || "function" != typeof n.onload)) && i.end(n)
                        } catch (e) {
                            try {
                                a.emit("internal-error", [e])
                            } catch (r) {
                            }
                        }
                    };
                    for (var u = 0; c > u; u++)n.addEventListener(s[u], this.listener, !1)
                }), a.on("xhr-cb-time", function (t, e, n) {
                    this.cbTime += t, e ? this.onloadCalled = !0 : this.called += 1, this.called !== this.totalCbs || !this.onloadCalled && "function" == typeof n.onload || this.end(n)
                }), a.on("xhr-load-added", function (t, e) {
                    var n = "" + f(t) + !!e;
                    this.xhrGuids && !this.xhrGuids[n] && (this.xhrGuids[n] = !0, this.totalCbs += 1)
                }), a.on("xhr-load-removed", function (t, e) {
                    var n = "" + f(t) + !!e;
                    this.xhrGuids && this.xhrGuids[n] && (delete this.xhrGuids[n], this.totalCbs -= 1)
                }), a.on("addEventListener-end", function (t, e) {
                    e instanceof XMLHttpRequest && "load" === t[0] && a.emit("xhr-load-added", [t[1], t[2]], e)
                }), a.on("removeEventListener-end", function (t, e) {
                    e instanceof XMLHttpRequest && "load" === t[0] && a.emit("xhr-load-removed", [t[1], t[2]], e)
                }), a.on("fn-start", function (t, e, n) {
                    e instanceof XMLHttpRequest && ("onload" === n && (this.onload = !0), ("load" === (t[0] && t[0].type) || this.onload) && (this.xhrCbStart = (new Date).getTime()))
                }), a.on("fn-end", function (t, e) {
                    this.xhrCbStart && a.emit("xhr-cb-time", [(new Date).getTime() - this.xhrCbStart, this.onload, e], e)
                })
            }
        }, {1: "XL7HBI", 2: 11, 3: 9, 4: 5, ee: "QJf3ax", handle: "D5DuLP", loader: "G9z0Bl"}], 11: [function (t, e) {
            e.exports = function (t) {
                var e = document.createElement("a"), n = window.location, r = {};
                e.href = t, r.port = e.port;
                var o = e.href.split("://");
                return !r.port && o[1] && (r.port = o[1].split("/")[0].split(":")[1]), r.port && "0" !== r.port || (r.port = "https" === o[0] ? "443" : "80"), r.hostname = e.hostname || n.hostname, r.pathname = e.pathname, "/" !== r.pathname.charAt(0) && (r.pathname = "/" + r.pathname), r.sameOrigin = !e.hostname || e.hostname === document.domain && e.port === n.port && e.protocol === n.protocol, r
            }
        }, {}], gos: [function (t, e) {
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
                return r.listeners(t).length ? r.emit(t, e, n) : (o[t] || (o[t] = []), void o[t].push(e))
            }

            var r = t("ee").create(), o = {};
            e.exports = n, n.ee = r, r.q = o
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
        }, {}], loader: [function (t, e) {
            e.exports = t("G9z0Bl")
        }, {}], G9z0Bl: [function (t, e) {
            function n() {
                var t = p.info = NREUM.info;
                if (t && t.agent && t.licenseKey && t.applicationID && c && c.body) {
                    p.proto = "https" === d.split(":")[0] || t.sslForHttp ? "https://" : "http://", a("mark", ["onload", i()]);
                    var e = c.createElement("script");
                    e.src = p.proto + t.agent, c.body.appendChild(e)
                }
            }

            function r() {
                "complete" === c.readyState && o()
            }

            function o() {
                a("mark", ["domContent", i()])
            }

            function i() {
                return (new Date).getTime()
            }

            var a = t("handle"), s = window, c = s.document, f = "addEventListener", u = "attachEvent", d = ("" + location).split("?")[0], p = e.exports = {
                offset: i(),
                origin: d,
                features: {}
            };
            c[f] ? (c[f]("DOMContentLoaded", o, !1), s[f]("load", n, !1)) : (c[u]("onreadystatechange", r), s[u]("onload", n)), a("mark", ["firstbyte", i()])
        }, {handle: "D5DuLP"}], 20: [function (t, e) {
            function n(t, e, n) {
                e || (e = 0), "undefined" == typeof n && (n = t ? t.length : 0);
                for (var r = -1, o = n - e || 0, i = Array(0 > o ? 0 : o); ++r < o;)i[r] = t[e + r];
                return i
            }

            e.exports = n
        }, {}], 21: [function (t, e) {
            function n(t) {
                return !(t && "function" == typeof t && t.apply && !t[i])
            }

            var r = t("ee"), o = t(1), i = "nr@wrapper", a = Object.prototype.hasOwnProperty;
            e.exports = function (t) {
                function e(t, e, r, a) {
                    function nrWrapper() {
                        var n, i, s, f;
                        try {
                            i = this, n = o(arguments), s = r && r(n, i) || {}
                        } catch (d) {
                            u([d, "", [n, i, a], s])
                        }
                        c(e + "start", [n, i, a], s);
                        try {
                            return f = t.apply(i, n)
                        } catch (p) {
                            throw c(e + "err", [n, i, p], s), p
                        } finally {
                            c(e + "end", [n, i, f], s)
                        }
                    }

                    return n(t) ? t : (e || (e = ""), nrWrapper[i] = !0, f(t, nrWrapper), nrWrapper)
                }

                function s(t, r, o, i) {
                    o || (o = "");
                    var a, s, c, f = "-" === o.charAt(0);
                    for (c = 0; c < r.length; c++)s = r[c], a = t[s], n(a) || (t[s] = e(a, f ? s + o : o, i, s, t))
                }

                function c(e, n, r) {
                    try {
                        t.emit(e, n, r)
                    } catch (o) {
                        u([o, e, n, r])
                    }
                }

                function f(t, e) {
                    if (Object.defineProperty && Object.keys)try {
                        var n = Object.keys(t);
                        return n.forEach(function (n) {
                            Object.defineProperty(e, n, {
                                get: function () {
                                    return t[n]
                                }, set: function (e) {
                                    return t[n] = e, e
                                }
                            })
                        }), e
                    } catch (r) {
                        u([r])
                    }
                    for (var o in t)a.call(t, o) && (e[o] = t[o]);
                    return e
                }

                function u(e) {
                    try {
                        t.emit("internal-error", e)
                    } catch (n) {
                    }
                }

                return t || (t = r), e.inPlace = s, e.flag = i, e
            }
        }, {1: 20, ee: "QJf3ax"}]
    }, {}, ["G9z0Bl", 3, 10, 4]);</script>
    <title><?php echo $data->meta_title;?> - VIP Plaza</title>
    <meta name="description"
          content="<?php echo $data->meta_description;?> "/>
    <meta name="keywords" content=""/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <meta name="author" content=""/>

    <link rel="icon" href="http://www.vipplaza.com/skin/frontend/default/mobile/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="http://www.vipplaza.com/skin/frontend/default/mobile/favicon.ico"
          type="image/x-icon"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <!--google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700'
          rel='stylesheet' type='text/css'>

    <script type="text/javascript">var BLANK_URL = 'http://www.vipplaza.com/js/blank.html';
    var BLANK_IMG = 'http://www.vipplaza.com/js/spacer.gif';</script>

    <link rel="stylesheet" type="text/css"
          href="http://s.squixa.net/www.vipplaza.com/635487540162570000/js/calendar/A.calendar-win2k-1.css.pagespeed.cf.j5-d1K-5-p.css"/>
    <link rel="stylesheet" type="text/css"
          href="http://s.squixa.net/www.vipplaza.com/635487540162570000/skin/frontend/A.default,,_mobile,,_css,,_iphone.css+default,,_default,,_aw_autorelated,,_css,,_category.css+default,,_default,,_popup,,_css,,_style.css+base,,_default,,_css,,_amasty,,_amfpc,,_styles.css,Mcc.1g8G3NCB9O.css.pagespeed.cf.zFykfpUCLK.css"
          media="all"/>


    <style media="all">.welcome-msg img {
        margin-left: 5px
    }

    .magento-regul-login {
        padding: 14px 0;
        text-align: center
    }

    .magento-regul-login .fblogin {
        text-decoration: none;
        display: inline-block;
        padding: 4px;
        padding-left: 2px;
        background-color: #3c5a99;
        background-image: -moz-linear-gradient(top, #5e7dbc, #3c5a99);
        background-image: -ms-linear-gradient(top, #5e7dbc, #3c5a99);
        background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#5e7dbc), to(#3c5a99));
        background-image: -webkit-linear-gradient(top, #5e7dbc, #3c5a99);
        background-image: -o-linear-gradient(top, #5e7dbc, #3c5a99);
        background-image: linear-gradient(top, #5e7dbc, #3c5a99);
        background-repeat: repeat-x;
        border-radius: 3px;
        -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.3), 0 2px 2px rgba(0, 0, 0, 0.2);
        box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.3), 0 2px 2px rgba(0, 0, 0, 0.2);
        border: 1px solid;
        border-color: #3b5998;
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#5e7dbc', endColorstr='#3c5a99')
    }

    .magento-regul-login .fblogin span {
        height: 24px;
        text-shadow: 0 1px 1px #2c416c;
        display: block;
        margin: 0;
        padding: 0;
        padding-left: 23px;
        background: url(http://s.squixa.net/www.vipplaza.com/635487540162570000/skin/frontend/default/mobile/images/plumrocket/privatesales/xfblogin.png.pagespeed.ic.VDPHE3EmeE.png) no-repeat 0 0;
        -webkit-background-size: 23px 12px;
        -moz-background-size: 23px 12px;
        -o-background-size: 23px 12px;
        background-size: 23px 32px;
        line-height: 24px
    }

    .magento-regul-login .fblogin b {
        color: #fff;
        font-size: .75em;
        vertical-align: middle;
        padding-left: 5px
    }

    .magento-regul-login .fblogin em {
        font-style: normal;
        color: #fff;
        text-shadow: 0 1px 1px #385975;
        font-size: .6em;
        vertical-align: middle
    }</style>
    <link rel="stylesheet" type="text/css"
          href="http://s.squixa.net/www.vipplaza.com/635487540162570000/skin/frontend/default/mobile/js/plumrocket/privatesales/calendar/css/smoothness/A.calendar-ui.css.pagespeed.cf.yIEYAQRZj2.css"
          media="all"/>
    <link rel="stylesheet" type="text/css"
          href="http://s.squixa.net/www.vipplaza.com/635487540162570000/skin/frontend/default/mobile/css/A.privatesales.css.pagespeed.cf.PATHMXImEP.css"
          media="all"/>
    <link rel="stylesheet" type="text/css"
          href="http://s.squixa.net/www.vipplaza.com/635487540162570000/skin/frontend/default/mobile/css/A.custom.css.pagespeed.cf.0_2D0JhU1D.css"
          media="all"/>
    <link rel="stylesheet" type="text/css"
          href="http://s.squixa.net/www.vipplaza.com/635487540162570000/skin/frontend/default/A.vipplaza,,_css,,_jqzoom.css+default,,_aw_autorelated,,_css,,_product.css,Mcc.8MFyBuvOZ6.css.pagespeed.cf.EaPvrbQpeF.css"
          media="all"/>
    <link href="http://line.vipplaza.lc/themes/front/line.vipplaza/line-promo.css" media="all" rel="stylesheet">
    <style media="all">.shop-close, .shop-close span {
        text-align: center !important
    }

    .shop-close span {
        display: inline-block
    }

    .productDesc h4 {
        text-transform: uppercase
    }

    .shopnowButton, .ccfailed-index-error button.button {
        background-color: #6a060e !important;
        background-image: -moz-linear-gradient(top, #a62126, #861115) !important;
        background-image: -ms-linear-gradient(top, #a62126, #861115) !important;
        background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#a62126), to(#861115)) !important;
        background-image: -webkit-linear-gradient(top, #a62126, #861115) !important;
        background-image: -o-linear-gradient(top, #a62126, #861115) !important;
        background-image: linear-gradient(top, #a62126, #861115) !important;
        background-repeat: repeat-x;
        border-radius: 3px;
        -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.3), 0 2px 2px rgba(0, 0, 0, 0.2) !important;
        box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.3), 0 2px 2px rgba(0, 0, 0, 0.2) !important;
        border: none;
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#5E91BD', endColorstr='#4D7CA6') !important;
        border-color: none !important
    }

    .product-shop .price-box h5, .priceHolder1 .price-box h5, .price-box .alone span.lineover, .priceHolder1 .price-box .alone span.lineover, .product-shop .price-box .regular-price .price, .priceHolder1 .price-box .regular-price .price, .product-shop .price-box .price-to, .product-shop .price-box .price-from, .full-product-price .price, .priceHolder1 .price-box .price-from .price, .priceHolder1 .price-box .price-to .price {
        color: #ff9e1b
    }

    .product-view .lefts {
        color: #d00000;
        font-style: italic
    }</style>
    <script type="text/javascript"
            src="http://s.squixa.net/www.vipplaza.com/635487540162570000/js/prototype/prototype.js.pagespeed.jm.ix8Kb1Gh8H.js"></script>
    <script type="text/javascript"
            src="http://s.squixa.net/www.vipplaza.com/635487540162570000/js/lib/ccard.js.pagespeed.jm.46Y_fMzWWn.js"></script>
    <script type="text/javascript"
            src="http://s.squixa.net/www.vipplaza.com/635487540162570000/js/prototype/validation.js.pagespeed.jm.SA8nf3sBET.js"></script>
    <script type="text/javascript"
            src="http://s.squixa.net/www.vipplaza.com/635487540162570000/js/scriptaculous/builder.js.pagespeed.jm.wPs5WKCrTa.js"></script>
    <script type="text/javascript"
            src="http://s.squixa.net/www.vipplaza.com/635487540162570000/js/scriptaculous/effects.js.pagespeed.jm.2gOWX1ohLv.js"></script>
    <script type="text/javascript"
            src="http://s.squixa.net/www.vipplaza.com/635487540162570000/js/scriptaculous/dragdrop.js.pagespeed.jm.NdQNdCP4RN.js"></script>
    <script type="text/javascript"
            src="http://s.squixa.net/www.vipplaza.com/635487540162570000/js/scriptaculous/controls.js.pagespeed.jm.MSQlZHbBOp.js"></script>
    <script type="text/javascript"
            src="http://s.squixa.net/www.vipplaza.com/635487540162570000/js/scriptaculous/slider.js.pagespeed.jm.g37FxI5JWD.js"></script>
    <script type="text/javascript"
            src="http://s.squixa.net/www.vipplaza.com/635487540162570000/js/varien/js.js.pagespeed.jm.a1ob59fvhV.js"></script>
    <script type="text/javascript"
            src="http://s.squixa.net/www.vipplaza.com/635487540162570000/js/varien/form.js.pagespeed.jm.yOUIA-cY_3.js"></script>
    <script type="text/javascript"
            src="http://s.squixa.net/www.vipplaza.com/635487540162570000/js/mage/translate.js.pagespeed.jm.T7x0xnKtPV.js"></script>
    <script type="text/javascript"
            src="http://s.squixa.net/www.vipplaza.com/635487540162570000/js/mage/cookies.js.pagespeed.jm.kAOWcvc3yY.js"></script>
    <script type="text/javascript"
            src="http://s.squixa.net/www.vipplaza.com/635487540162570000/js/prototype/effects.js.pagespeed.jm.6K4lpdqgvD.js"></script>
    <script type="text/javascript"
            src="http://s.squixa.net/www.vipplaza.com/635487540162570000/js/prototype/window.js.pagespeed.jm.zIgKuz8t7B.js"></script>
    <script type="text/javascript"
            src="http://s.squixa.net/www.vipplaza.com/635487540162570000/js/popup/popup.js.pagespeed.jm.qcdCK4cLYG.js"></script>
    <script type="text/javascript"
            src="http://s.squixa.net/www.vipplaza.com/635487540162570000/js/calendar/calendar.js.pagespeed.jm.vXTVW2_uN4.js"></script>
    <script type="text/javascript"
            src="http://s.squixa.net/www.vipplaza.com/635487540162570000/js/varien/product.js.pagespeed.jm.DyIlLoQjN7.js"></script>
    <script type="text/javascript"
            src="http://s.squixa.net/www.vipplaza.com/635487540162570000/js/varien/configurable.js.pagespeed.jm.6mCN0rIvSZ.js"></script>
    <script type="text/javascript"
            src="http://s.squixa.net/www.vipplaza.com/635487540162570000/js/calendar/calendar-setup.js.pagespeed.jm.asApHyw8xX.js"></script>

    <script type="text/javascript"
            src="http://s.squixa.net/www.vipplaza.com/635487540162570000/js/ebizmarts/autoresponders/visitedproducts.js.pagespeed.jm.LSZLGWOhsF.js"></script>

    <script type="text/javascript"
            src="http://s.squixa.net/www.vipplaza.com/635487540162570000/js/varien/weee.js.pagespeed.jm._7x0dSPOX4.js"></script>
    <script type="text/javascript"
            src="http://s.squixa.net/www.vipplaza.com/635487540162570000/skin/frontend/default/mobile/js/plumrocket/privatesales/jquery-1.9.1.min.js.pagespeed.jm.PRK0HGxPgM.js"></script>
    <script type="text/javascript"
            src="http://s.squixa.net/www.vipplaza.com/635487540162570000/skin/frontend/default/mobile/js/plumrocket/privatesales/jquery.form.js.pagespeed.jm.lRznXy1gS-.js"></script>
    <script type="text/javascript"
            src="http://s.squixa.net/www.vipplaza.com/635487540162570000/skin/frontend/default/mobile/js/plumrocket/privatesales/all-pages.js.pagespeed.jm.ySmlDD059T.js"></script>
    <script src="http://s.squixa.net/www.vipplaza.com/635487540162570000/skin/frontend/default/mobile/js/plumrocket/privatesales/scroll-to.js+jquery.touchslider.min.js.pagespeed.jc.AqTl4M4T2e.js"></script>
    <script>eval(mod_pagespeed_oLkEntvB7L);</script>
    <script>eval(mod_pagespeed_qdiorT6Tc_);</script>
    <script type="text/javascript"
            src="http://s.squixa.net/www.vipplaza.com/635487540162570000/skin/frontend/default/mobile/js/plumrocket/privatesales/catalog_product.js.pagespeed.jm.4MBrUxJI0e.js"></script>
    <script type="text/javascript"
            src="http://s.squixa.net/www.vipplaza.com/635487540162570000/skin/frontend/default/mobile/js/plumrocket/privatesales/jquery.scrollfollow.js.pagespeed.jm.Hvghw0nBj7.js"></script>
    <script type="text/javascript"
            src="http://s.squixa.net/www.vipplaza.com/635487540162570000/skin/frontend/default/mobile/js/plumrocket/privatesales/countdown/jquery.countdown.js.pagespeed.jm.LD6KDv8DCg.js"></script>
    <script type="text/javascript"
            src="http://s.squixa.net/www.vipplaza.com/635487540162570000/skin/frontend/base/default/js/plumrocket/specialsettings/main.js.pagespeed.jm.ZMz9_rx-Vo.js"></script>
    <link rel="canonical" href="http://www.vipplaza.com/hope-amanda-orange-75842.html"/>
    <link rel="canonical" href="http://www.vipplaza.com/all-events/02030209/hope.html"/>

    <script type="text/javascript">optionalZipCountries = ["ID"];</script>


    <script type="text/javascript">enUS = {
        "m": {
            "wide": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
            "abbr": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
        }
    };
    Calendar._DN = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
    Calendar._SDN = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
    Calendar._FD = 1;
    Calendar._MN = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    Calendar._SMN = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
    Calendar._am = "AM";
    Calendar._pm = "PM";
    Calendar._TT = {};
    Calendar._TT["INFO"] = "About the calendar";
    Calendar._TT["ABOUT"] = "DHTML Date/Time Selector\n" + "(c) dynarch.com 2002-2005 / Author: Mihai Bazon\n" + "For latest version visit: http://www.dynarch.com/projects/calendar/\n" + "Distributed under GNU LGPL. See http://gnu.org/licenses/lgpl.html for details." + "\n\n" + "Date selection:\n" + "- Use the \xab, \xbb buttons to select year\n" + "- Use the " + String.fromCharCode(0x2039) + ", " + String.fromCharCode(0x203a) + " buttons to select month\n" + "- Hold mouse button on any of the above buttons for faster selection.";
    Calendar._TT["ABOUT_TIME"] = "\n\n" + "Time selection:\n" + "- Click on any of the time parts to increase it\n" + "- or Shift-click to decrease it\n" + "- or click and drag for faster selection.";
    Calendar._TT["PREV_YEAR"] = "Prev. year (hold for menu)";
    Calendar._TT["PREV_MONTH"] = "Prev. month (hold for menu)";
    Calendar._TT["GO_TODAY"] = "Go Today";
    Calendar._TT["NEXT_MONTH"] = "Next month (hold for menu)";
    Calendar._TT["NEXT_YEAR"] = "Next year (hold for menu)";
    Calendar._TT["SEL_DATE"] = "Select date";
    Calendar._TT["DRAG_TO_MOVE"] = "Drag to move";
    Calendar._TT["PART_TODAY"] = ' (' + "Today" + ')';
    Calendar._TT["DAY_FIRST"] = "Display %s first";
    Calendar._TT["WEEKEND"] = "0,6";
    Calendar._TT["CLOSE"] = "Close";
    Calendar._TT["TODAY"] = "Today";
    Calendar._TT["TIME_PART"] = "(Shift-)Click or drag to change value";
    Calendar._TT["DEF_DATE_FORMAT"] = "%b %e, %Y";
    Calendar._TT["TT_DATE_FORMAT"] = "%B %e, %Y";
    Calendar._TT["WK"] = "Week";
    Calendar._TT["TIME"] = "Time:";</script>

    <script type="text/javascript">var Translator = new Translate([]);</script>
    <meta name="p:domain_verify" content="e9d89d2135bde5ffef92f58c35201cc4"/>

    <meta name="google-site-verification" content="v87ydFySquQcUi3t563-W4-V2b-0W8Mpt-ROe2iGGvA"/>

    <meta property="og:title" content="VIP Plaza"/>
    <meta property="og:image" content="http://www.vipplaza.com/media/banners/banner-vip.jpg"/>
    <meta property="og:site_name" content="VIP Plaza"/>
    <meta property="og:description"
          content="VIP Plaza: Toko online fashion baju, pakaian, sepatu, tas dan aksesoris wanita dari brand ternama dengan diskon s/d 80% setiap hari!"/>

    <script>var _prum = [['id', '543b7e40abe53d7469e81679'], ['mark', 'firstbyte', (new Date()).getTime()]];
    (function () {
        var s = document.getElementsByTagName('script')[0], p = document.createElement('script');
        p.async = 'async';
        p.src = '//rum-static.pingdom.net/prum.min.js';
        s.parentNode.insertBefore(p, s);
    })();</script>
    <script>(function (d, s) {
        var js = d.createElement(s), sc = d.getElementsByTagName(s)[0];
        js.src = "//s.squixa.net/7/sqrum.js";
        sc.parentNode.insertBefore(js, sc);
    }(document, "script"));</script>
    <script>var sq_abcookiename = 'sqtest.';</script>
    <script>var sq_farmname = 'au4008';</script>
</head>
<body home="index.php" class="mage-iphone" onload="setTimeout(scrollTo, 0, 0, 1)">
<!-- Google Analytics -->
<script>(function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function () {
        (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date();
    a = s.createElement(o), m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
ga('create', 'UA-46447361-1', 'auto');
ga('require', 'displayfeatures');
ga('send', 'pageview', '/hope-amanda-orange-75842.html');</script>
<!-- End Google Analytics -->
<script type="text/javascript">privateSaleTimeZoneOffet = 0;
homepage_timer_labels_few = "years,months,weeks,days,hours,minutes,seconds";
homepage_timer_labels_one = "year,month,week,day,hour,minute,second";
homepage_timer_label = "Sale ends in <em>%s</em>";
__t_HIDE_BIO = "HIDE BIO";
__t_SALE_ENDS_IN = "SALE ENDS IN";</script>
<?php /*
<div class="popup_gallery"
     style="display: none; position: absolute; background-color: black; top: 0px; left: 0px; z-index: 2000; padding-top: 10px;"
     data-wh="0" data-ww="0">
    <div class="touchslider">
        <div class="touchslider-viewport" style="margin:0 auto; overflow: hidden; position: relative;">
            <div class="touchslider-item">
                <img border="0"
                     src="http://www.vipplaza.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/1/_/1_9_1_7249_1_23_1_27_1_23_1_15_6_30_4_11417_1_3065.jpgx"
                     alt="" title=""/></div>
            <div class="touchslider-item">
                <img border="0"
                     src="http://www.vipplaza.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/2/_/2_9_1_6914_1_23_1_27_1_23_1_15_6_30_4_11075_1_2968.jpg"
                     alt="" title=""/></div>
            <div class="touchslider-item">
                <img border="0"
                     src="http://www.vipplaza.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/3/_/3_8_1_6667_1_23_1_27_1_23_1_15_6_30_4_886_1_3523_1_6959_1_2074.jpg"
                     alt="" title=""/></div>
            <div class="touchslider-item">
                <img border="0"
                     src="http://www.vipplaza.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/4/_/4_24_1_6202_1_23_1_27_1_23_1_15_6_30_4_879_1_3351_1_6602_1_2014.jpg"
                     alt="" title=""/></div>
        </div>

        <div class="swiper-nav" style="width: 150px; margin: 0 auto;">
            <div data-role="controlgroup" data-type="horizontal" data-mini="true">
                <a href="#" style="float:left;" title="next" class="touchslider-prev" data-role="button"
                   data-icon="arrow-l"><span class="touchslider-prev-in">prev.</span></a>
                <a href="#" style="float:right;" title="next" class="touchslider-next" data-role="button"
                   data-icon="arrow-r" data-iconpos="right"><span class="touchslider-next-in">next</span></a>

                <a href="#" style="float:right;" class="touchslider-close" data-role="button"><span
                        class="touchslider-close-in">Close</span></a>
            </div>
        </div>
    </div>
</div>
*/ ?>
<?php /*
<div id="expired-popup" class="first-access" style="display: none;">
    <div class="clearfix" style="width:650px; background-color:#FFF; margin:70px auto; padding:25px;">
        <div class="clearfix">
            <h1 style="padding-bottom:20px;">
            </h1>
        </div>
        <div class="clearfix" style="padding-top:25px; padding-bottom:15px;">
            <a href="http://www.vipplaza.com/" class="close-div"
               onclick="window.location='http://www.vipplaza.com/';"><span>Back to Shops</span></a>
        </div>
    </div>
</div>
<div id="wrapper">
<div id="left_widget">
    <div class="menu-widget" style="min-height:600px">
        <ul class="menu-container nav nav-tabs nav-stacked">
            <li class="enterOut">
				<span>
                    <a class="btn" href="http://www.vipplaza.com/customer/account/logout/" title="">Log Out</a>
                </span>
            </li>
            <li class="language-select">
            </li>
            <li class="heavy">
                <p>Hello, <em>Burakku Henshin</em>!</p>
            </li>
            <li class="dashboardLink">
                <a href="http://www.vipplaza.com/customer/account/" title=""><b>Overview</b></a>
            </li>
            <li class="light account_edit">
                <a href="http://www.vipplaza.com/customer/account/edit/" title="">Account Information</a>
            </li>
            <li class="light address_book">
                <a href="http://www.vipplaza.com/customer/address/" title="">Address Book</a>
            </li>
            <li class="new-section light orders">
                <a href="http://www.vipplaza.com/sales/order/history/" title="">My Orders</a>
            </li>
            <li class="light newsletter">
                <a href="http://www.vipplaza.com/newsletter/manage/" title="">Email alerts</a>
            </li>


        </ul>
    </div>
</div>
*/ ?>
<div id="mainContent">
<div class="holderWrapper">

<noscript>
    <div class="noscript">
        <div class="noscript-inner">
            <p><strong>JavaScript seem to be disabled in your browser.</strong></p>

            <p>You must have JavaScript enabled in your browser to utilize the functionality of this website.</p>
        </div>
    </div>
</noscript>

<!--header-->
<div class="header-line">
    <div class="logo">
        <a class="logo-vip" href="http://www.vipplaza.com/"><img
                src="http://line.vipplaza.lc/themes/front/line.vipplaza/image/logo-vip.png" alt="vip plaza"></a>
        <a class="logo-line" href="http://www.line.vipplaza.com/"><img
                src="http://line.vipplaza.lc/themes/front/line.vipplaza/image/logo-line.png" alt="line shopping"></a>
    </div>
</div>
<!--/header-->
<!--
<div class="category-back-block">
    <a href="javascript: history.go(-1);" class="backtosale back_link" title=""><span>Go back</span></a>
</div>-->
<div class="middle-container main-container">
<div class="middle col-1-layout">
<div class="clear"></div>
<div id="main" class="col-main">

    <div class="cf shop-details">
        <div id="description">
            <div class="cf">
            </div>
        </div>
        <?php /*
        <div class="timer-holder">
            <div class="shop-close">
                <span class="closes">BOUTIQUE CLOSES IN</span>
                <span class="cntdown-pr date"></span>
                <span class="cntdown-source" style="display: none;">837908</span>
            </div>
        </div>
        */ ?>
    </div>
    <div id="aw_popup_wraper" style="display: none;"></div>
    <div id="aw_popup_window" style="display: none;">
        <div id="aw_popup_header">
            <span id="aw_popup_title"></span>
            <img id="aw_popup_close_btn" onclick="Popup.hideWindow();return false;"
                 src="http://www.vipplaza.com/skin/frontend/default/default/popup/images/close_label.gif.pagespeed.ce.ktWWHscc-l.gif">
        </div>
        <div id="aw_popup_content">
        </div>
    </div>

    <script type="text/javascript">document.observe('dom:loaded', function () {
        var ajaxUrl = 'http://www.vipplaza.com/popup/index/ajax/page/product/';
        if (window.location.href.match('https://') && !ajaxUrl.match('https://')) {
            ajaxUrl = ajaxUrl.replace('http://', 'https://');
        }
        Popup.init(ajaxUrl + 'rand/' + Math.round(Math.random() * 1000000));
    });</script>

    <script type="text/javascript">var optionsPrice = new Product.OptionsPrice({
        "productId": "<?php echo $data->entity_id;?>",
        "priceFormat": {
            "pattern": "Rp %s",
            "precision": 2,
            "requiredPrecision": 0,
            "decimalSymbol": ".",
            "groupSymbol": ",",
            "groupLength": 3,
            "integerRequired": 1
        },
        "includeTax": "false",
        "showIncludeTax": false,
        "showBothPrices": false,
        "productPrice": <?php echo $data->price;?>,
        "productOldPrice": <?php echo $data->special_price;?>,
        "priceInclTax": <?php echo $data->price;?>,
        "priceExclTax": <?php echo $data->price;?>,
        "skipCalculate": 1,
        "defaultTax": 0,
        "currentTax": 0,
        "idSuffix": "_clone",
        "oldPlusDisposition": 0,
        "plusDisposition": 0,
        "plusDispositionTax": 0,
        "oldMinusDisposition": 0,
        "minusDisposition": 0,
        "tierPrices": [],
        "tierPricesInclTax": []
    });</script>
    <div id="messages_product_view"></div>
    <div class="product-view type-product-configurable">
        <div class="product-essential">
        <!--http://www.vipplaza.com/checkout/cart/add/uenc/aHR0cDovL3d3dy52aXBwbGF6YS5jb20vaG9wZS1hbWFuZGEtb3JhbmdlLTc1ODQyLmh0bWw,/product/75794/form_key/UvFSERd1tJDkl4Ok/-->
        <form action=""
                  method="post" id="product_addtocart_form">
                <div class="no-display">
                    <input type="hidden" id="product_id" name="product" value="<?php echo $data->entity_id;?>"/>
                    <input type="hidden" name="related_product" id="related-products-field" value=""/>
                </div>
                <div class="product-name">
                    <h1><?php echo $data->name;?></h1>
                </div>
                <div class="priceHolder1"></div>
                <div class="descHolder cf">

                    <!-- Image zoomer -->

                    <div class="imageHolder">
                        <a href="" title="Click to zoom in" class="imgLink">
                            <img border="0" id="productImgDefault"
                                 src="<?php echo $data->image;?>"
                                 alt="<?php echo $data->name;?>" title="<?php echo $data->name;?>"/> </a>
                        <?php /*
                            <a href="#" title="Click to zoom in" class="button-grey"><span>Click to zoom in</span></a>
                        */ ?>
                    </div>

                    <!-- // Image zoomer -->

                    <div class="product-holder">
                        <div class="product-name-2">
                            <h1><?php echo $data->name;?></h1>
                        </div>

                        <div class="cf">
                            <!-- Product details -->
                            <div class="product-shop">
                                <div class="priceHolder2">

                                    <div class="price-box cf">

                                        <h5>
                                            <span class="price-label">MEMBER PRICE</span>
				                            <span id="product-price-75794">
					                            Rp <?php echo number_format($data->special_price,0,'',',');?>
                                            </span>
                                        </h5>
                                        <p class="price-margin">
                                            <strong>RETAIL PRICE</strong>
                                            <span class="lineover" id="oldprc old-price-75794" style="text-decoration: line-through !important;">
                                                Rp <?php echo number_format($data->price,0,'',',');?>
                                            </span>
                                        </p>
                                        <?php /*
                                        <p class="price-margin saving">
                                            <strong>MEMBER SAVINGS</strong>
                                            <span>30% OFF</span>
                                        </p>
                                        */ ?>


                                    </div>

                                </div>

                                <?php /*
                                <div class="fave_block">
                                    <p class="email-friend"><a
                                            href="http://www.vipplaza.com/sendfriend/product/send/id/75794/cat_id/52/">Email
                                        to a Friend</a></p>
                                </div>*/ ?>

                                <?php if($data->product_type=="configurable"){?>
                                <div class="product-options" id="product-options-wrapper">

                                    <div class="hld-opt last">
                                        <div class="input-box">
                                            <select name="super_attribute[<?php echo $data->attribute_id;?>]" id="attribute<?php echo $data->attribute_id;?>" class="required-entry super-attribute-select">

                                            </select>
                                            <div id="errorInfo"></div>
                                        </div>
                                    </div>

                                    <script type="text/javascript">jQuery(document).ready(function () {
                                        setInterval(function () {
                                            var e = jQuery('#product-options-wrapper #attribute151');
                                            e.find('option').each(function () {
                                                var html = jQuery(this).html();
                                                var tmpArr = html.split(' ');
                                                jQuery(this).html(tmpArr[0]);
                                            });
                                            e.find('option:first').html('Size');
                                        }, 1000);
                                        jQuery('#product-options-wrapper #attribute<?php echo $data->attribute_id;?>').find('option:first').html('Size');
                                    });</script>

                                    <script type="text/javascript">var confData = {
                                        "attributes": {
                                            "<?php echo $data->attribute_id;?>": {
                                                "id": "<?php echo $data->attribute_id;?>",
                                                "code": "size_clothes",
                                                "label": "Size",
                                                "options": [
                                                    <?php foreach($data->arr_size as $size){?>
                                                    {
                                                        "id": "<?php echo $size->value_index;?>",
                                                        "label": "<?php echo $size->store_label;?>",
                                                        "price": "0",
                                                        "oldPrice": "0",
                                                        "products": ["<?php echo $data->entity_id;?>"]
                                                    },
                                                    <?php } ?>
                                                ]
                                            }
                                        },
                                        "template": "Rp #{price}",
                                        "basePrice": "0",
                                        "oldPrice": "0",
                                        "productId": "0",
                                        "chooseText": "Choose an Option...",
                                        "taxConfig": {
                                            "includeTax": false,
                                            "showIncludeTax": false,
                                            "showBothPrices": false,
                                            "defaultTax": 0,
                                            "currentTax": 0,
                                            "inclTaxTitle": "Incl. Tax"
                                        }
                                    };
                                    confData['chooseText'] = '';
                                    var spConfig = new Product.Config(confData);</script>


                                    <script type="text/javascript">var DateOption = Class.create({
                                        getDaysInMonth: function (month, year) {
                                            var curDate = new Date();
                                            if (!month) {
                                                month = curDate.getMonth();
                                            }
                                            if (2 == month && !year) {
                                                return 29;
                                            }
                                            if (!year) {
                                                year = curDate.getFullYear();
                                            }
                                            return 32 - new Date(year, month - 1, 32).getDate();
                                        }, reloadMonth: function (event) {
                                            var selectEl = event.findElement();
                                            var idParts = selectEl.id.split("_");
                                            if (idParts.length != 3) {
                                                return false;
                                            }
                                            var optionIdPrefix = idParts[0] + "_" + idParts[1];
                                            var month = parseInt($(optionIdPrefix + "_month").value);
                                            var year = parseInt($(optionIdPrefix + "_year").value);
                                            var dayEl = $(optionIdPrefix + "_day");
                                            var days = this.getDaysInMonth(month, year);
                                            for (var i = dayEl.options.length - 1; i >= 0; i--) {
                                                if (dayEl.options[i].value > days) {
                                                    dayEl.remove(dayEl.options[i].index);
                                                }
                                            }
                                            var lastDay = parseInt(dayEl.options[dayEl.options.length - 1].value);
                                            for (i = lastDay + 1; i <= days; i++) {
                                                this.addOption(dayEl, i, i);
                                            }
                                        }, addOption: function (select, text, value) {
                                            var option = document.createElement('OPTION');
                                            option.value = value;
                                            option.text = text;
                                            if (select.options.add) {
                                                select.options.add(option);
                                            } else {
                                                select.appendChild(option);
                                            }
                                        }
                                    });
                                    dateOption = new DateOption();</script>


                                    <script type="text/javascript">enUS = {
                                        "m": {
                                            "wide": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                                            "abbr": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
                                        }
                                    };
                                    Calendar._DN = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
                                    Calendar._SDN = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
                                    Calendar._FD = 1;
                                    Calendar._MN = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
                                    Calendar._SMN = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
                                    Calendar._am = "AM";
                                    Calendar._pm = "PM";
                                    Calendar._TT = {};
                                    Calendar._TT["INFO"] = "About the calendar";
                                    Calendar._TT["ABOUT"] = "DHTML Date/Time Selector\n" + "(c) dynarch.com 2002-2005 / Author: Mihai Bazon\n" + "For latest version visit: http://www.dynarch.com/projects/calendar/\n" + "Distributed under GNU LGPL. See http://gnu.org/licenses/lgpl.html for details." + "\n\n" + "Date selection:\n" + "- Use the \xab, \xbb buttons to select year\n" + "- Use the " + String.fromCharCode(0x2039) + ", " + String.fromCharCode(0x203a) + " buttons to select month\n" + "- Hold mouse button on any of the above buttons for faster selection.";
                                    Calendar._TT["ABOUT_TIME"] = "\n\n" + "Time selection:\n" + "- Click on any of the time parts to increase it\n" + "- or Shift-click to decrease it\n" + "- or click and drag for faster selection.";
                                    Calendar._TT["PREV_YEAR"] = "Prev. year (hold for menu)";
                                    Calendar._TT["PREV_MONTH"] = "Prev. month (hold for menu)";
                                    Calendar._TT["GO_TODAY"] = "Go Today";
                                    Calendar._TT["NEXT_MONTH"] = "Next month (hold for menu)";
                                    Calendar._TT["NEXT_YEAR"] = "Next year (hold for menu)";
                                    Calendar._TT["SEL_DATE"] = "Select date";
                                    Calendar._TT["DRAG_TO_MOVE"] = "Drag to move";
                                    Calendar._TT["PART_TODAY"] = ' (' + "Today" + ')';
                                    Calendar._TT["DAY_FIRST"] = "Display %s first";
                                    Calendar._TT["WEEKEND"] = "0,6";
                                    Calendar._TT["CLOSE"] = "Close";
                                    Calendar._TT["TODAY"] = "Today";
                                    Calendar._TT["TIME_PART"] = "(Shift-)Click or drag to change value";
                                    Calendar._TT["DEF_DATE_FORMAT"] = "%b %e, %Y";
                                    Calendar._TT["TT_DATE_FORMAT"] = "%B %e, %Y";
                                    Calendar._TT["WK"] = "Week";
                                    Calendar._TT["TIME"] = "Time:";</script>
                                </div>
                                <?php } ?>
                                <script type="text/javascript">decorateGeneric($$('#product-options-wrapper dl'), ['last']);</script>


                                <!-- Product price -->
                                <div class="product-price-block">
                                </div>
                                <div class="qtyHolder-1">
                                    <div class="qtyHolder" id="acsyQty">
                                        <p>
                                            <label>Quantity</label>
                                        <div class="limitPO"><span>Limit </span>2 per order</div>
                                        <div style=" width: 25%; ">
                                            <select class="qty" name="qty" style="width: 50px;">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                            </select>
                                        </div>
                                        </p>
                                    </div>
                                </div>
                                <!-- // Product price -->
                                <div class="short-description" id="short-description">
                                    <h2>Quick Overview</h2>
                                    <div class="std">
                                        <?php echo $data->short_description;?>
                                    </div>
                                </div>
                            </div>
                            <?php if($data->is_in_stock){?>
                            <div class="add-to-box">
                                <a class="shopnowButton"
                                   style="cursor:pointer;">
                                    <span>Add to Cart</span>
                                </a>
                            </div>
                            <?php } ?>
                            <!-- // Product details -->
                        </div>
                        <!-- clearfix -->
                        <!-- tabs -->


                        <!-- // tabs -->
                    </div>


            </form>

            <script type="text/javascript">var productAddToCartForm = new VarienForm('product_addtocart_form');
            productAddToCartForm.submit = function (button, url) {
                if (this.validator.validate()) {
                    var form = this.form;
                    var oldUrl = form.action;
                    if (url) {
                        form.action = url;
                    }
                    var e = null;
                    try {
                        this.form.submit();
                    } catch (e) {
                    }
                    this.form.action = oldUrl;
                    if (e) {
                        throw e;
                    }
                    if (button && button != 'undefined') {
                        button.disabled = true;
                    }
                }
            }.bind(productAddToCartForm);
            productAddToCartForm.submitLight = function (button, url) {
                if (this.validator) {
                    var nv = Validation.methods;
                    delete Validation.methods['required-entry'];
                    delete Validation.methods['validate-one-required'];
                    delete Validation.methods['validate-one-required-by-name'];
                    if (this.validator.validate()) {
                        if (url) {
                            this.form.action = url;
                        }
                        this.form.submit();
                    }
                    Object.extend(Validation.methods, nv);
                }
            }.bind(productAddToCartForm);</script>
        </div>
    </div>
</div>
<div class="productDesc cf">
    <div class="productDetails">
        <h4>Details</h4>
        <?php echo $data->description;?>
    </div>
    <div class="productReturns">
        <h4>Payment & Delivery</h4>

        <p><strong>PENGIRIMAN:</strong></p>

        <p>Nikmati pengiriman GRATIS ke seluruh wilayah Indonesia untuk waktu terbatas!</p>

        <p><strong>Estimasi Pengiriman:</strong></p>

        <p>- Wilayah Jabodetabek : 2 - 3 hari kerja</p>

        <p>- Wilayah Lainnya : 3 - 7 hari kerja</p>

        <p>&nbsp;</p>

        <p><strong>PEMBAYARAN:</strong></p>

        <p>Pembayaran mudah melalui:</p>

        <p>- Bank Transfer (BCA &amp; Mandiri)</p>

        <p>- Bayar di Tempat</p>

        <p>- Kartu Kredit Visa dan MasterCard</p></div>

</div>
<script type="text/javascript">jQuery(document).ready(function () {
    var values = getHashUrlVars();
    if (values['colors'] !== undefined) {
        jQuery('.color-swatch-156-' + values['colors'] + ' img').click();
    }
    else
        jQuery('.color-swatch-wrapper li:visible img:first').click();
    function getHashUrlVars() {
        var vars = [], hash;
        var hashes = window.location.href.slice(window.location.href.indexOf('#') + 1).split('&');
        for (var i = 0; i < hashes.length; i++) {
            hash = hashes[i].split('=');
            vars.push(hash[0]);
            vars[hash[0]] = hash[1];
        }
        return vars;
    }

    setTimeout(function () {
        var x = jQuery('.product-img-box').outerHeight() - jQuery('.product-holder').outerHeight();
        if (x > 0) {
            x += parseInt(jQuery('#tabs > div:first').css('min-height')) - 8;
            jQuery('#tabs > div').css('min-height', x);
        }
    }, 800);
    jQuery(window).resize(function () {
        var holder = (jQuery(window).width() > 400) ? '.priceHolder2' : '.priceHolder1';
        $groupedBox = jQuery('#grouped-product-items-box');
        if ($groupedBox.length > 0) {
            $groupedBox.appendTo(holder);
        } else {
            jQuery('.price-box').appendTo(holder);
        }
    }).resize();
})</script>

<script type="text/javascript">var lifetime = 3600;
var expireAt = Mage.Cookies.expires;
if (lifetime > 0) {
    expireAt = new Date();
    expireAt.setTime(expireAt.getTime() + lifetime * 1000);
}
Mage.Cookies.set('external_no_cache', 1, expireAt);</script>
</div>
</div>
</div>
</div>

<!--footer-->
<!--/footer-->

</div>
</div>
<a href="#top" id="top-link">Go to Top</a>


<script type="text/javascript">window.NREUM || (NREUM = {});
NREUM.info = {
    "beacon": "beacon-6.newrelic.com",
    "licenseKey": "0561f50619",
    "applicationID": "3845514",
    "transactionName": "b1xaZEsCW0dXBkFfWVYWeVNNClpaGQZUQldUVl8fSRFaUEMGQRlAUVxP",
    "queueTime": 0,
    "applicationTime": 864,
    "ttGuid": "",
    "agentToken": "",
    "atts": "QxtZEgMYSEk=",
    "errorBeacon": "bam.nr-data.net",
    "agent": "js-agent.newrelic.com\/nr-476.min.js"
}</script>
<script type="text/javascript">var GoSquared = {};
GoSquared.acct = "GSN-421564-J";
(function (w) {
    function gs() {
        w._gstc_lt = +new Date;
        var d = document, g = d.createElement("script");
        g.type = "text/javascript";
        g.src = "//d1l6p2sc9645hc.cloudfront.net/tracker.js";
        var s = d.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(g, s);
    }

    w.addEventListener ? w.addEventListener("load", gs, false) : w.attachEvent("onload", gs);
})(window);</script>
<script type="text/javascript">(function (w, d) {
    var a = function () {
        var a = d.createElement('script');
        a.type = 'text/javascript';
        a.async = 'async';
        a.src = '//' + ((w.location.protocol === 'https:') ? 's3.amazonaws.com/cdx-radar/' : 'radar.cedexis.com/') + '01-11108-radar10.min.js';
        d.body.appendChild(a);
    };
    if (w.addEventListener) {
        w.addEventListener('load', a, false);
    }
    else if (w.attachEvent) {
        w.attachEvent('onload', a);
    }
}(window, document));</script>

<script type="<?php echo $this->baseTheme();?>js/jquery-1.11.2.min.js"></script>
<script type="text/javascript">
    var $jQ = jQuery.noConflict();
    $jQ(document).ready(function() {
       $jQ(".shopnowButton").click(function(){
           var product_id = $jQ("#product_id").val();
           var attribute_id = '<?php echo $data->attribute_id;?>';
           var attribute = $jQ("#attribute<?php echo $data->attribute_id;?>").val();
           var data = $jQ("#product_addtocart_form").serialize()+'&attribute_id='+attribute_id;
           //alert(attribute.length);
           if((attribute.length)<1){
               $jQ("#errorInfo").html('<div style="" id="advice-required-entry-attribute151" class="validation-advice">This is a required field.</div>');
           }else{
               $jQ("#errorInfo").empty();
               console.log(data);
               $jQ.post('<?php echo $this->baseUrl();?>/product-add-to-cart',data,function(response){

               },'json');
           }
           return false;
       });
    });
    //
</script>

</body>


</html>
