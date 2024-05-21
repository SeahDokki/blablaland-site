Filters = {};
var createCanvas = function(t, a) {
    var e = document.createElement("canvas");
    return e.width = t,
        e.height = a,
        e.style.display = "none",
        document.body.appendChild(e),
        document.body.removeChild(e),
        e
};
Filters._premultiply = function(t) {
    for (var a = t.length, e = 0; e < a; e += 4) {
        var r = .003921569 * t[e + 3];
        t[e] = Math.round(t[e] * r),
            t[e + 1] = Math.round(t[e + 1] * r),
            t[e + 2] = Math.round(t[e + 2] * r)
    }
}
    ,
    Filters._unpremultiply = function(t) {
        for (var a = t.length, e = 0; e < a; e += 4) {
            var r, i, n = t[e + 3];
            0 != n && 255 != n && (i = 255 / n,
            255 < (r = t[e] * i) && (r = 255),
            255 < (n = t[e + 1] * i) && (n = 255),
            255 < (i = t[e + 2] * i) && (i = 255),
                t[e] = r,
                t[e + 1] = n,
                t[e + 2] = i)
        }
    }
    ,
    Filters._boxBlurHorizontal = function(t, a, e, r, i, n) {
        for (var o = 0, s = [], d = 0; d < r; d++) {
            for (var l = 0, h = 0, c = 0, g = 0, u = 0, m = 4 * -i; m < 4 * e; m += 4) {
                var v = m - 4 * i - 4;
                0 <= v && (0 == n || 1 == n && 0 < a[o + v + 3] || 2 == n && a[o + v + 3] < 255) && (u -= t[o + v + 3],
                    h -= t[o + v],
                    c -= t[o + v + 1],
                    g -= t[o + v + 2],
                    l--);
                v = m + 4 * i;
                v < 4 * e && (0 == n || 1 == n && 0 < a[o + v + 3] || 2 == n && a[o + v + 3] < 255) && (u += t[o + v + 3],
                    h += t[o + v],
                    c += t[o + v + 1],
                    g += t[o + v + 2],
                    l++),
                0 <= m && (!(0 == n || 1 == n && 0 < a[o + m + 3] || 2 == n && a[o + m + 3] < 255) || 0 == l ? (s[m] = 0,
                    s[m + 1] = 0,
                    s[m + 2] = 0,
                    s[m + 3] = 0) : (s[m] = Math.round(h / l),
                    s[m + 1] = Math.round(c / l),
                    s[m + 2] = Math.round(g / l),
                    s[m + 3] = Math.round(u / l)))
            }
            for (var f = 0; f < 4 * e; f += 4)
                t[o + f] = s[f],
                    t[o + f + 1] = s[f + 1],
                    t[o + f + 2] = s[f + 2],
                    t[o + f + 3] = s[f + 3];
            o += 4 * e
        }
    }
    ,
    Filters._boxBlurVertical = function(t, a, e, r, i, n) {
        for (var o = [], s = -(i + 1) * e * 4, d = i * e * 4, l = 0; l < 4 * e; l += 4) {
            for (var h = 0, c = 0, g = 0, u = 0, m = 0, v = -i * e * 4 + l, f = -i; f < r; f++)
                0 <= f - i - 1 && (0 == n || 1 == n && 0 < a[v + s + 3] || 2 == n && a[v + s + 3] < 255) && (m -= t[v + s + 3],
                    c -= t[v + s],
                    g -= t[v + s + 1],
                    u -= t[v + s + 2],
                    h--),
                f + i < r && (0 == n || 1 == n && 0 < a[v + d + 3] || 2 == n && a[v + d + 3] < 255) && (m += t[v + d + 3],
                    c += t[v + d],
                    g += t[v + d + 1],
                    u += t[v + d + 2],
                    h++),
                0 <= f && (!(0 == n || 1 == n && 0 < a[f * e * 4 + l + 3] || 2 == n && a[f * e * 4 + l + 3] < 255) || 0 == h ? (o[4 * f] = 0,
                    o[4 * f + 1] = 0,
                    o[4 * f + 2] = 0,
                    o[4 * f + 3] = 0) : (o[4 * f] = Math.round(c / h),
                    o[4 * f + 1] = Math.round(g / h),
                    o[4 * f + 2] = Math.round(u / h),
                    o[4 * f + 3] = Math.round(m / h))),
                    v += 4 * e;
            for (f = 0; f < r; f++)
                t[f * e * 4 + l] = o[4 * f],
                    t[f * e * 4 + l + 1] = o[4 * f + 1],
                    t[f * e * 4 + l + 2] = o[4 * f + 2],
                    t[f * e * 4 + l + 3] = o[4 * f + 3]
        }
    }
    ,
    Filters.blur = function(t, a, e, r, i, n, o) {
        var s = a.getImageData(0, 0, t.width, t.height)
            , d = s.data;
        Filters._premultiply(d);
        for (var l = 0; l < i; l++)
            Filters._boxBlurHorizontal(d, n, t.width, t.height, Math.floor(e / 2), o),
                Filters._boxBlurVertical(d, n, t.width, t.height, Math.floor(r / 2), o);
        Filters._unpremultiply(d);
        var h = t.width
            , a = t.height
            , a = createCanvas(h, a);
        return a.getContext("2d").putImageData(s, 0, 0),
            a
    }
    ,
    Filters._moveRGB = function(t, a, e, r, i, n) {
        var o = createCanvas(t, a)
            , s = o.getContext("2d");
        Filters._setRGB(s, 0, 0, t, a, e);
        e = createCanvas(t, a);
        e.width = t,
            e.heigth = a;
        e = e.getContext("2d");
        return e.fillStyle = n,
            e.globalCompositeOperation = "copy",
            e.fillRect(0, 0, t, a),
            e.drawImage(o, r, i),
            e.getImageData(0, 0, t, a).data
    }
    ,
    Filters.FULL = 1,
    Filters.INNER = 2,
    Filters.OUTER = 3,
    Filters._setRGB = function(t, a, e, r, i, n) {
        for (var o = t.createImageData(r, i), s = 0; s < n.length; s++)
            o.data[s] = n[s];
        t.putImageData(o, a, e)
    }
    ,
    Filters.gradientGlow = function(t, a, e, r, i, n, o, s, d, l, h, c) {
        for (var g = canvas.width, u = canvas.height, m = createCanvas(g, u), v = m.getContext("2d"), f = createCanvas(256, 1), _ = f.getContext("2d"), M = ctx.createLinearGradient(0, 0, 255, 0), x = 0; x < o.length; x++) {
            var p = "rgba(" + o[x][0] + "," + o[x][1] + "," + o[x][2] + "," + o[x][3] + ")";
            M.addColorStop(s[x], p)
        }
        _.fillStyle = M,
            _.fillRect(0, 0, 256, 1);
        for (var b = _.getImageData(0, 0, f.width, f.height).data, f = i / 180 * Math.PI, i = n * Math.cos(f), f = n * Math.sin(f), C = a.getImageData(0, 0, g, u).data, w = [], I = 0; I < C.length; I += 4) {
            var B = C[I + 3];
            w[I] = 0,
                w[I + 1] = 0,
                w[I + 2] = 0,
                w[I + 3] = Math.round(B * h)
        }
        w = Filters._moveRGB(g, u, w, i, f, "rgba(0,0,0,0)");
        Filters._setRGB(v, 0, 0, g, u, w);
        var F = 0;
        if (d == Filters.INNER && (F = 1),
        d == Filters.OUTER && (F = 2),
            w = (v = (m = Filters.blur(m, m.getContext("2d"), e, r, l, C, F)).getContext("2d")).getImageData(0, 0, g, u).data,
        0 != F)
            for (I = 0; I < C.length; I += 4)
                (1 == F && 0 == C[I + 3] || 2 == F && 255 == C[I + 3]) && (w[I] = 0,
                    w[I + 1] = 0,
                    w[I + 2] = 0,
                    w[I + 3] = 0);
        for (I = 0; I < w.length; I += 4) {
            var y = w[I + 3];
            w[I] = b[4 * y],
                w[I + 1] = b[4 * y + 1],
                w[I + 2] = b[4 * y + 2],
                w[I + 3] = b[4 * y + 3]
        }
        return Filters._setRGB(v, 0, 0, g, u, w),
        c || (v.globalCompositeOperation = "destination-over",
            v.drawImage(t, 0, 0)),
            m
    }
    ,
    Filters.dropShadow = function(t, a, e, r, i, n, o, s, d, l, h) {
        for (var c = t.width, g = t.height, u = a.getImageData(0, 0, c, g).data, m = [], v = 0; v < u.length; v += 4) {
            var f = u[v + 3];
            s && (f = 255 - f),
                m[v] = o[0],
                m[v + 1] = o[1],
                m[v + 2] = o[2];
            f = o[3] * f * l;
            255 < f && (f = 255),
                m[v + 3] = Math.round(f)
        }
        var _ = i / 180 * Math.PI
            , i = n * Math.cos(_)
            , _ = n * Math.sin(_)
            , m = Filters._moveRGB(c, g, m, i, _, s ? "#000000" : "rgba(0,0,0,0)")
            , _ = createCanvas(t.width, t.height);
        Filters._setRGB(_.getContext("2d"), 0, 0, c, g, m),
        (0 < e || 0 < r) && (_ = Filters.blur(_, _.getContext("2d"), e, r, d, null, 0)),
            m = _.getContext("2d").getImageData(0, 0, c, g).data;
        for (u = a.getImageData(0, 0, c, g).data,
                 v = 0; v < m.length; v += 4) {
            var M = u[v + 3];
            s || (M = 255 - M),
                m[v + 3] = M * m[v + 3] / 255
        }
        return Filters._setRGB(_.getContext("2d"), 0, 0, c, g, m),
        h || ((h = _.getContext("2d")).globalCompositeOperation = "destination-over",
            h.drawImage(t, 0, 0)),
            _
    }
    ,
    Filters._cut = function(t, a, e) {
        return e < t && (t = e),
        t < a && (t = a),
            t
    }
    ,
    Filters.gradientBevel = function(t, a, e, r, i, n, o, s, d, l, h, c) {
        for (var g = t.width, u = t.height, m = createCanvas(g, u), v = a.getImageData(0, 0, g, u).data, f = createCanvas(512, 1), _ = f.getContext("2d"), M = ctx.createLinearGradient(0, 0, 511, 0), x = 0; x < e.length; x++) {
            var p = "rgba(" + e[x][0] + "," + e[x][1] + "," + e[x][2] + "," + e[x][3] + ")";
            M.addColorStop(r[x], p)
        }
        _.fillStyle = M,
            _.globalCompositeOperation = "copy",
            _.fillRect(0, 0, f.width, f.height);
        var b, C, w, I, B, F, y, D, R, T = _.getImageData(0, 0, f.width, f.height).data;
        switch (s != Filters.OUTER && (F = Filters.dropShadow(t, a, 0, 0, d, l, [255, 0, 0, 1], !0, c, o, !0),
            y = Filters.dropShadow(t, a, 0, 0, d + 180, l, [0, 0, 255, 1], !0, c, o, !0),
            E = createCanvas(g, u),
            w = createCanvas(g, u),
            D = E.getContext("2d"),
            R = w.getContext("2d"),
            D.drawImage(F, 0, 0),
            D.globalCompositeOperation = "destination-out",
            D.drawImage(y, 0, 0),
            R.drawImage(y, 0, 0),
            R.globalCompositeOperation = "destination-out",
            R.drawImage(F, 0, 0),
            b = w,
            C = E),
        s != Filters.INNER && (F = Filters.dropShadow(t, a, 0, 0, d + 180, l, [255, 0, 0, 1], !1, c, o, !0),
            y = Filters.dropShadow(t, a, 0, 0, d, l, [0, 0, 255, 1], !1, c, o, !0),
            E = createCanvas(g, u),
            w = createCanvas(g, u),
            D = E.getContext("2d"),
            R = w.getContext("2d"),
            D.drawImage(F, 0, 0),
            D.globalCompositeOperation = "destination-out",
            D.drawImage(y, 0, 0),
            R.drawImage(y, 0, 0),
            R.globalCompositeOperation = "destination-out",
            R.drawImage(F, 0, 0),
            I = w,
            B = E),
            s) {
            case Filters.OUTER:
                F = B,
                    y = I;
                break;
            case Filters.INNER:
                F = C,
                    y = b;
                break;
            case Filters.FULL:
                y = b,
                    (D = (F = C).getContext("2d")).globalCompositeOperation = "source-over",
                    D.drawImage(B, 0, 0),
                    (R = y.getContext("2d")).globalCompositeOperation = "source-over",
                    R.drawImage(I, 0, 0)
        }
        var E = 0;
        s == Filters.INNER && (E = 1),
        s == Filters.OUTER && (E = 2);
        s = m.getContext("2d");
        s.fillStyle = "#000000",
            s.fillRect(0, 0, g, u),
            s.drawImage(y, 0, 0),
            s.drawImage(F, 0, 0);
        for (var L = (m = Filters.blur(m, m.getContext("2d"), i, n, c, v, E)).getContext("2d").getImageData(0, 0, g, u).data, O = 0; O < v.length; O += 4) {
            var k = L[O] * o
                , N = L[O + 2] * o
                , N = Filters._cut(k - N, -255, 255);
            L[O] = T[4 * (255 + N)],
                L[O + 1] = T[4 * (255 + N) + 1],
                L[O + 2] = T[4 * (255 + N) + 2],
                L[O + 3] = T[4 * (255 + N) + 3]
        }
        return Filters._setRGB(m.getContext("2d"), 0, 0, g, u, L),
        h || ((h = m.getContext("2d")).globalCompositeOperation = "destination-over",
            h.drawImage(t, 0, 0)),
            m
    }
    ,
    Filters.bevel = function(t, a, e, r, i, n, o, s, d, l, h, c) {
        return Filters.gradientBevel(t, a, [s, [s[0], s[1], s[2], 0], [o[0], o[1], o[2], 0], o], [0, 127 / 255, 128 / 255, 1], e, r, i, n, d, l, h, c)
    }
    ,
    Filters.convolution = function(t, a, e, r) {
        for (var i = a.getImageData(0, 0, t.width, t.height), n = Math.round(Math.sqrt(e.length)), o = Math.floor(n / 2), s = i.data, d = i.width, l = i.height, h = d, c = l, a = createCanvas(h, c), t = a.getContext("2d"), i = t.getImageData(0, 0, h, c), g = i.data, u = r ? 1 : 0, m = 0; m < c; m++)
            for (var v = 0; v < h; v++) {
                for (var f = m, _ = v, M = 4 * (m * h + v), x = 0, p = 0, b = 0, C = 0, w = 0; w < n; w++)
                    for (var I = 0; I < n; I++) {
                        var B = f + w - o
                            , F = _ + I - o;
                        0 <= B && B < l && 0 <= F && F < d && (B = 4 * (B * d + F),
                            F = e[w * n + I],
                            x += s[B] * F,
                            p += s[1 + B] * F,
                            b += s[2 + B] * F,
                            C += s[3 + B] * F)
                    }
                g[M] = x,
                    g[1 + M] = p,
                    g[2 + M] = b,
                    g[3 + M] = C + u * (255 - C)
            }
        return t.putImageData(i, 0, 0),
            a
    }
    ,
    Filters.colorMatrix = function(t, a, e) {
        for (var a = a.getImageData(0, 0, t.width, t.height), r = a.data, i = 0; i < r.length; i += 4) {
            var n = i + 1
                , o = i + 2
                , s = i + 3
                , d = r[i]
                , l = r[n]
                , h = r[o]
                , c = r[s];
            r[i] = e[0] * d + e[1] * l + e[2] * h + e[3] * c + e[4],
                r[n] = e[5] * d + e[6] * l + e[7] * h + e[8] * c + e[9],
                r[o] = e[10] * d + e[11] * l + e[12] * h + e[13] * c + e[14],
                r[s] = e[15] * d + e[16] * l + e[17] * h + e[18] * c + e[19]
        }
        t = createCanvas(t.width, t.height);
        return t.getContext("2d").putImageData(a, 0, 0),
            t
    }
    ,
    Filters.glow = function(t, a, e, r, i, n, o, s, d) {
        return Filters.dropShadow(t, a, e, r, 45, 0, n, o, d, i, s)
    }
;
var BlendModes = {};
function concatMatrix(t, a) {
    var e = [1, 0, 0, 1, 0, 0];
    return e[0] = a[0] * t[0] + a[2] * t[1],
        e[1] = a[1] * t[0] + a[3] * t[1],
        e[2] = a[0] * t[2] + a[2] * t[3],
        e[3] = a[1] * t[2] + a[3] * t[3],
        e[4] = a[0] * t[4] + a[2] * t[5] + a[4],
        e[5] = a[1] * t[4] + a[3] * t[5] + a[5],
        e
}
BlendModes._cut = function(t) {
    return t < 0 && (t = 0),
    255 < t && (t = 255),
        t
}
    ,
    BlendModes.normal = function(t, a, e, r) {
        var i = (255 - t[r + 3]) / 255;
        e[r] = this._cut(t[r] * t[r + 3] / 255 + a[r] * a[r + 3] / 255 * i),
            e[r + 1] = this._cut(t[r + 1] * t[r + 3] / 255 + a[r + 1] * a[r + 3] / 255 * i),
            e[r + 2] = this._cut(t[r + 2] * t[r + 3] / 255 + a[r + 2] * a[r + 3] / 255 * i),
            e[r + 3] = this._cut(t[r + 3] + a[r + 3] * i)
    }
    ,
    BlendModes.layer = function(t, a, e, r) {
        BlendModes.normal(t, a, e, r)
    }
    ,
    BlendModes.multiply = function(t, a, e, r) {
        e[r + 0] = t[r + 0] * a[r + 0] >> 8,
            e[r + 1] = t[r + 1] * a[r + 1] >> 8,
            e[r + 2] = t[r + 2] * a[r + 2] >> 8,
            e[r + 3] = Math.min(255, t[r + 3] + a[r + 3] - t[r + 3] * a[r + 3] / 255)
    }
    ,
    BlendModes.screen = function(t, a, e, r) {
        e[r + 0] = 255 - ((255 - t[r + 0]) * (255 - a[r + 0]) >> 8),
            e[r + 1] = 255 - ((255 - t[r + 1]) * (255 - a[r + 1]) >> 8),
            e[r + 2] = 255 - ((255 - t[r + 2]) * (255 - a[r + 2]) >> 8),
            e[r + 3] = Math.min(255, t[r + 3] + a[r + 3] - t[r + 3] * a[r + 3] / 255)
    }
    ,
    BlendModes.lighten = function(t, a, e, r) {
        e[r + 0] = Math.max(t[r + 0], a[r + 0]),
            e[r + 1] = Math.max(t[r + 1], a[r + 1]),
            e[r + 2] = Math.max(t[r + 2], a[r + 2]),
            e[r + 3] = Math.min(255, t[r + 3] + a[r + 3] - t[r + 3] * a[r + 3] / 255)
    }
    ,
    BlendModes.darken = function(t, a, e, r) {
        e[r + 0] = Math.min(t[r + 0], a[r + 0]),
            e[r + 1] = Math.min(t[r + 1], a[r + 1]),
            e[r + 2] = Math.min(t[r + 2], a[r + 2]),
            e[r + 3] = Math.min(255, t[r + 3] + a[r + 3] - t[r + 3] * a[r + 3] / 255)
    }
    ,
    BlendModes.difference = function(t, a, e, r) {
        e[r + 0] = Math.abs(a[r + 0] - t[r + 0]),
            e[r + 1] = Math.abs(a[r + 1] - t[r + 1]),
            e[r + 2] = Math.abs(a[r + 2] - t[r + 2]),
            e[r + 3] = Math.min(255, t[r + 3] + a[r + 3] - t[r + 3] * a[r + 3] / 255)
    }
    ,
    BlendModes.add = function(t, a, e, r) {
        e[r + 0] = Math.min(255, t[r + 0] + a[r + 0]),
            e[r + 1] = Math.min(255, t[r + 1] + a[r + 1]),
            e[r + 2] = Math.min(255, t[r + 2] + a[r + 2]),
            e[r + 3] = Math.min(255, t[r + 3] + a[r + 3])
    }
    ,
    BlendModes.subtract = function(t, a, e, r) {
        e[r + 0] = Math.max(0, t[r + 0] + a[r + 0] - 256),
            e[r + 1] = Math.max(0, t[r + 1] + a[r + 1] - 256),
            e[r + 2] = Math.max(0, t[r + 2] + a[r + 2] - 256),
            e[r + 3] = Math.min(255, t[r + 3] + a[r + 3] - t[r + 3] * a[r + 3] / 255)
    }
    ,
    BlendModes.invert = function(t, a, e, r) {
        e[r + 0] = 255 - a[r + 0],
            e[r + 1] = 255 - a[r + 1],
            e[r + 2] = 255 - a[r + 2],
            e[r + 3] = t[r + 3]
    }
    ,
    BlendModes.alpha = function(t, a, e, r) {
        e[r + 0] = t[r + 0],
            e[r + 1] = t[r + 1],
            e[r + 2] = t[r + 2],
            e[r + 3] = a[r + 3]
    }
    ,
    BlendModes.erase = function(t, a, e, r) {
        e[r + 0] = t[r + 0],
            e[r + 1] = t[r + 1],
            e[r + 2] = t[r + 2],
            e[r + 3] = 255 - a[r + 3]
    }
    ,
    BlendModes.overlay = function(t, a, e, r) {
        e[r + 0] = a[r + 0] < 128 ? a[r + 0] * t[r + 0] >> 7 : 255 - ((255 - a[r + 0]) * (255 - t[r + 0]) >> 7),
            e[r + 1] = a[r + 1] < 128 ? a[r + 1] * t[r + 1] >> 7 : 255 - ((255 - a[r + 1]) * (255 - t[r + 1]) >> 7),
            e[r + 2] = a[r + 2] < 128 ? a[r + 2] * t[r + 2] >> 7 : 255 - ((255 - a[r + 2]) * (255 - t[r + 2]) >> 7),
            e[r + 3] = Math.min(255, t[r + 3] + a[r + 3] - t[r + 3] * a[r + 3] / 255)
    }
    ,
    BlendModes.hardlight = function(t, a, e, r) {
        e[r + 0] = t[r + 0] < 128 ? a[r + 0] * t[r + 0] >> 7 : 255 - ((255 - t[r + 0]) * (255 - a[r + 0]) >> 7),
            e[r + 1] = t[r + 1] < 128 ? a[r + 1] * t[r + 1] >> 7 : 255 - ((255 - t[r + 1]) * (255 - a[r + 1]) >> 7),
            e[r + 2] = t[r + 2] < 128 ? a[r + 2] * t[r + 2] >> 7 : 255 - ((255 - t[r + 2]) * (255 - a[r + 2]) >> 7),
            e[r + 3] = Math.min(255, t[r + 3] + a[r + 3] - t[r + 3] * a[r + 3] / 255)
    }
    ,
    BlendModes._list = [BlendModes.normal, BlendModes.normal, BlendModes.layer, BlendModes.multiply, BlendModes.screen, BlendModes.lighten, BlendModes.darken, BlendModes.difference, BlendModes.add, BlendModes.subtract, BlendModes.invert, BlendModes.alpha, BlendModes.erase, BlendModes.overlay, BlendModes.hardlight],
    BlendModes.blendData = function(t, a, e, r) {
        for (var i = [], n = [], o = 0; o < e.length; o += 4) {
            this._list[r](t, a, i, o),
                n[o + 0] = this._cut(a[o + 0] + (i[o + 0] - a[o + 0])),
                n[o + 1] = this._cut(a[o + 1] + (i[o + 1] - a[o + 1])),
                n[o + 2] = this._cut(a[o + 2] + (i[o + 2] - a[o + 2])),
                n[o + 3] = this._cut(a[o + 3] + (i[o + 3] - a[o + 3]));
            var s = t[o + 3] / 255;
            e[o + 0] = this._cut((1 - s) * a[o + 0] + s * n[o + 0]),
                e[o + 1] = this._cut((1 - s) * a[o + 1] + s * n[o + 1]),
                e[o + 2] = this._cut((1 - s) * a[o + 2] + s * n[o + 2]),
                e[o + 3] = this._cut((1 - s) * a[o + 3] + s * n[o + 3])
        }
    }
    ,
    BlendModes.blendCanvas = function(t, a, e, r) {
        var i = t.width
            , n = t.height
            , o = e.getContext("2d")
            , e = t.getContext("2d")
            , t = a.getContext("2d")
            , a = o.getImageData(0, 0, i, n)
            , e = e.getImageData(0, 0, i, n)
            , n = t.getImageData(0, 0, i, n);
        this.blendData(e.data, n.data, a.data, r),
            o.putImageData(a, 0, 0)
    }
;
var enhanceContext = function(t) {
    var a = [1, 0, 0, 1, 0, 0];
    t._matrix = a,
        t._savedMatrices = [a];
    var o = t.__proto__;
    return t.__proto__ = {
        save: function() {
            this._savedMatrices.push(this._matrix),
                o.save.call(this)
        },
        restore: function() {
            0 != this._savedMatrices.length && (o.restore.call(this),
                this._matrix = this._savedMatrices.pop())
        },
        scale: function(t, a) {
            o.scale.call(this, t, a)
        },
        rotate: function(t) {
            o.rotate.call(this, t)
        },
        translate: function(t, a) {
            o.translate.call(this, t, a)
        },
        transform: function(t, a, e, r, i, n) {
            this._matrix = concatMatrix([t, a, e, r, i, n], this._matrix),
                o.transform.call(this, t, a, e, r, i, n)
        },
        setTransform: function(t, a, e, r, i, n) {
            this._matrix = [t, a, e, r, i, n],
                o.setTransform.call(this, t, a, e, r, i, n)
        },
        resetTransform: function() {
            o.resetTransform.call(this)
        },
        applyTransforms: function(t) {
            this.setTransform(t[0], t[1], t[2], t[3], t[4], t[5])
        },
        applyTransformToPoint: function(t) {
            var a = {};
            return a.x = this._matrix[0] * t.x + this._matrix[2] * t.y + this._matrix[4],
                a.y = this._matrix[1] * t.x + this._matrix[3] * t.y + this._matrix[5],
                a
        },
        __proto__: o
    },
        t
}
    , cxform = function(t, a, e, r, i, n, o, s) {
    this.r_add = t,
        this.g_add = a,
        this.b_add = e,
        this.a_add = r,
        this.r_mult = i,
        this.g_mult = n,
        this.b_mult = o,
        this.a_mult = s,
        this._cut = function(t, a, e) {
            return t < a && (t = a),
            e < t && (t = e),
                t
        }
        ,
        this.apply = function(t) {
            return t[0] = this._cut(Math.round(t[0] * this.r_mult / 255 + this.r_add), 0, 255),
                t[1] = this._cut(Math.round(t[1] * this.g_mult / 255 + this.g_add), 0, 255),
                t[2] = this._cut(Math.round(t[2] * this.b_mult / 255 + this.b_add), 0, 255),
                t[3] = this._cut(t[3] * this.a_mult / 255 + this.a_add / 255, 0, 1),
                t
        }
        ,
        this.applyToImage = function(t) {
            if (this.isEmpty())
                return t;
            var a = createCanvas(t.width, t.height)
                , e = a.getContext("2d");
            e.drawImage(t, 0, 0);
            for (var t = e.getImageData(0, 0, a.width, a.height), r = t.data, i = 0; i < r.length; i += 4) {
                var n = this.apply([r[i], r[i + 1], r[i + 2], r[i + 3] / 255]);
                r[i] = n[0],
                    r[i + 1] = n[1],
                    r[i + 2] = n[2],
                    r[i + 3] = Math.round(255 * n[3])
            }
            return e.putImageData(t, 0, 0),
                a
        }
        ,
        this.merge = function(t) {
            return new cxform(this.r_add + t.r_add,this.g_add + t.g_add,this.b_add + t.b_add,this.a_add + t.a_add,this.r_mult * t.r_mult / 255,this.g_mult * t.g_mult / 255,this.b_mult * t.b_mult / 255,this.a_mult * t.a_mult / 255)
        }
        ,
        this.isEmpty = function() {
            return 0 == this.r_add && 0 == this.g_add && 0 == this.b_add && 0 == this.a_add && 255 == this.r_mult && 255 == this.g_mult && 255 == this.b_mult && 255 == this.a_mult
        }
}
    , place = function(obj, canvas, ctx, matrix, ctrans, blendMode, frame, ratio, time) {
    var oldctx, ncanvas;
    ctx.save(),
        ctx.transform(matrix[0], matrix[1], matrix[2], matrix[3], matrix[4], matrix[5]),
    1 < blendMode && (oldctx = ctx,
        ncanvas = createCanvas(canvas.width, canvas.height),
        ctx = ncanvas.getContext("2d"),
        enhanceContext(ctx),
        ctx.applyTransforms(oldctx._matrix)),
        1 < blendMode ? eval(obj + "(ctx,new cxform(0,0,0,0,255,255,255,255),frame,ratio,time);") : eval(obj + "(ctx,ctrans,frame,ratio,time);"),
    1 < blendMode && (BlendModes.blendCanvas(ctrans.applyToImage(ncanvas), canvas, canvas, blendMode),
        ctx = oldctx),
        ctx.restore()
}
    , tocolor = function(t) {
    return "rgba(" + t[0] + "," + t[1] + "," + t[2] + "," + t[3] + ")"
};
var startWidth = 0
    , startHeight = 0
    , dragWidth = !1
    , dragHeight = !1;
function initDragWidth(t) {
    dragHeight = !(dragWidth = !0),
        initDrag(t)
}
function initDragHeight(t) {
    dragHeight = !(dragWidth = !1),
        initDrag(t)
}
function initDragBoth(t) {
    dragHeight = dragWidth = !0,
        initDrag(t)
}
function initDrag(t) {
    startX = t.clientX,
        startY = t.clientY,
        startWidth = canvas.width,
        startHeight = canvas.height,
        document.documentElement.addEventListener("mousemove", doDrag, !1),
        document.documentElement.addEventListener("mouseup", stopDrag, !1)
}
function doDrag(t) {
    dragWidth ? (canvas.width = startWidth + t.clientX - startX,
        canvas.height = canvas.width * originalHeight / originalWidth) : dragHeight && (canvas.height = startHeight + t.clientY - startY,
        canvas.width = canvas.height * originalWidth / originalHeight),
        drawFrame()
}
function stopDrag(t) {
    document.documentElement.removeEventListener("mousemove", doDrag, !1),
        document.documentElement.removeEventListener("mouseup", stopDrag, !1)
}
function drawMorphPath(t, a, e, r, i) {
    var n = a.split(" ")
        , o = n.length;
    if (r) {
        for (var s = 0; s < o; s++)
            switch (n[s]) {
                case "":
                    break;
                case "L":
                case "M":
                case "Q":
                    break;
                default:
                    var d = t.applyTransformToPoint({
                        x: n[s],
                        y: n[s + 2]
                    });
                    n[s] = d.x,
                        n[s + 2] = d.y,
                        d = t.applyTransformToPoint({
                            x: n[s + 1],
                            y: n[s + 3]
                        }),
                        n[s + 1] = d.x,
                        n[s + 3] = d.y,
                        s += 3
            }
        switch (i) {
            case "NONE":
                break;
            case "NORMAL":
                t.lineWidth *= 20 * Math.max(t._matrix[0], t._matrix[3]);
                break;
            case "VERTICAL":
                t.lineWidth *= 20 * t._matrix[3];
                break;
            case "HORIZONTAL":
                t.lineWidth *= 20 * t._matrix[0]
        }
        t.save(),
            t.setTransform(1, 0, 0, 1, 0, 0)
    }
    t.beginPath();
    for (var l = "", s = 0; s < o; s++)
        switch (n[s]) {
            case "L":
            case "M":
            case "Q":
                l = n[s];
                break;
            default:
                switch (l) {
                    case "L":
                        t.lineTo(useRatio(n[s], n[s + 1], e), useRatio(n[s + 2], n[s + 3], e)),
                            s += 3;
                        break;
                    case "M":
                        t.moveTo(useRatio(n[s], n[s + 1], e), useRatio(n[s + 2], n[s + 3], e)),
                            s += 3;
                        break;
                    case "Q":
                        t.quadraticCurveTo(useRatio(n[s], n[s + 1], e), useRatio(n[s + 2], n[s + 3], e), useRatio(n[s + 4], n[s + 5], e), useRatio(n[s + 6], n[s + 7], e)),
                            s += 7
                }
        }
    r && (t.stroke(),
        t.restore())
}
function useRatio(t, a, e) {
    return +t + (a - t) * e / 65535
}
function drawPath(t, a, e, r) {
    var i = a.split(" ")
        , n = i.length;
    if (e) {
        for (var o = 0; o < n; o++)
            switch (i[o]) {
                case "L":
                case "M":
                case "Q":
                case "Z":
                    break;
                default:
                    var s = t.applyTransformToPoint({
                        x: i[o],
                        y: i[o + 1]
                    });
                    i[o] = s.x,
                        i[o + 1] = s.y,
                        o++
            }
        switch (r) {
            case "NONE":
                break;
            case "NORMAL":
                t.lineWidth *= 20 * Math.max(t._matrix[0], t._matrix[3]);
                break;
            case "VERTICAL":
                t.lineWidth *= 20 * t._matrix[3];
                break;
            case "HORIZONTAL":
                t.lineWidth *= 20 * t._matrix[0]
        }
        t.save(),
            t.setTransform(1, 0, 0, 1, 0, 0)
    }
    t.beginPath();
    for (var d = "", o = 0; o < n; o++)
        switch (i[o]) {
            case "L":
            case "M":
            case "Q":
                d = i[o];
                break;
            case "Z":
                t.closePath();
                break;
            default:
                switch (d) {
                    case "L":
                        t.lineTo(i[o], i[o + 1]),
                            o++;
                        break;
                    case "M":
                        t.moveTo(i[o], i[o + 1]),
                            o++;
                        break;
                    case "Q":
                        t.quadraticCurveTo(i[o], i[o + 1], i[o + 2], i[o + 3]),
                            o += 3
                }
        }
    e && (t.stroke(),
        t.restore())
}
var canvas = document.getElementById("faq_gandalf")
    , ctx = canvas.getContext("2d");
enhanceContext(ctx);
var ctrans = new cxform(0,0,0,0,255,255,255,255)
    , imageObj1 = document.createElement("img");
function image1(a, e, l, c, r) {
    drawPath(a, "M 0 0 L 0 1140 2620 1140 2620 0 0 0", !1),
        a.save(),
        a.clip(),
        a.transform(20, 0, 0, 20, 0, 0),
        a.transform(1.0076335877862594, 0, 0, 1.0175438596491229, -.5, -.5);
    e = e.applyToImage(imageObj1),
        e = a.createPattern(e, "repeat");
    a.fillStyle = e,
        a.fillRect(-16384, -16384, 32768, 32768),
        a.restore()
}
function shape2(a, e, l, c, r) {
    drawPath(a, "M 2620 1140 L 0 1140 0 0 2620 0 2620 1140", !1),
        a.save(),
        a.clip(),
        a.transform(20, 0, 0, 20, 0, 0),
        a.transform(1.0076335877862594, 0, 0, 1.0175438596491229, -.5, -.5);
    e = e.applyToImage(imageObj1),
        e = a.createPattern(e, "repeat");
    a.fillStyle = e,
        a.fillRect(-16384, -16384, 32768, 32768),
        a.restore()
}
function sprite3(a, e, l, c, r) {
    0 === (l %= 1) && place("shape2", canvas, a, [1, 0, 0, 1, 0, 0], e, 1, 0, 0, r)
}
function shape4(a, e, l, c, r) {
    a.fillStyle = tocolor(e.apply([101, 91, 0, 1])),
        drawPath(a, "M 493 9 Q 556 23 594 49 751 155 747 300 745 379 701 443 702 454 696 458 L 676 461 Q 654 462 626 488 640 496 641 513 680 552 687 609 692 652 680 693 L 686 700 488 862 482 854 Q 427 859 384 817 353 787 348 763 334 770 321 758 309 745 312 726 286 726 269 743 256 756 253 769 L 246 780 229 779 Q 212 770 202 755 33 674 5 493 -6 423 8 347 19 282 45 232 151 34 347 5 L 493 9", !1),
        a.fill("evenodd");
    a.fillStyle = tocolor(e.apply([164, 169, 215, 1])),
        drawPath(a, "M 193 705 Q 173 688 159 656 142 620 177 632 203 626 243 632 294 641 332 668 L 319 701 Q 300 688 265 686 224 684 193 705", !1),
        a.fill("evenodd");
    a.fillStyle = tocolor(e.apply([227, 224, 244, 1])),
        drawPath(a, "M 249 458 Q 239 437 240 406 242 370 261 355 279 340 301 341 321 343 335 359 L 383 420 Q 422 477 439 535 398 564 368 605 338 516 249 458", !1),
        a.fill("evenodd");
    a.fillStyle = tocolor(e.apply([227, 224, 244, 1])),
        drawPath(a, "M 234 478 L 244 488 253 493 Q 270 500 300 524 345 559 368 605 347 633 332 668 305 644 262 625 211 601 174 602 151 573 160 517 167 486 188 472 212 454 234 478", !1),
        a.fill("evenodd");
    a.fillStyle = tocolor(e.apply([164, 169, 215, 1])),
        drawPath(a, "M 319 702 L 315 715 280 720 Q 250 731 232 759 L 216 740 Q 209 727 213 712 L 256 699 319 702", !1),
        a.fill("evenodd");
    a.fillStyle = tocolor(e.apply([255, 255, 255, 1])),
        drawPath(a, "M 347 337 Q 352 304 376 276 404 243 441 244 470 247 488 261 507 275 505 298 499 334 501 385 502 453 520 489 515 424 518 384 520 333 536 287 548 259 567 248 L 601 246 Q 621 254 633 270 647 290 635 313 614 352 602 389 583 444 589 475 593 443 605 406 619 363 638 338 647 328 658 326 669 324 675 331 L 687 352 Q 690 371 675 381 652 397 630 421 601 452 598 474 623 433 653 413 L 671 409 678 419 Q 680 426 674 436 L 658 451 Q 646 456 635 464 L 613 484 597 483 535 493 Q 484 506 440 535 433 490 420 457 396 396 347 337", !1),
        a.fill("evenodd");
    a.fillStyle = tocolor(e.apply([255, 86, 0, 1])),
        drawPath(a, "M 487 45 Q 534 52 583 82 635 116 670 164 710 218 719 281 729 352 699 426 694 404 678 396 693 388 700 370 709 346 690 318 680 303 669 299 L 654 297 Q 657 273 652 252 644 219 614 206 592 199 564 217 534 236 515 279 508 253 493 238 471 213 435 218 403 222 374 246 334 279 330 334 273 296 235 338 220 359 218 391 215 428 234 456 208 438 199 438 178 434 156 459 137 484 138 529 141 572 164 609 L 137 608 Q 125 614 127 630 130 651 145 674 165 701 199 719 191 734 200 752 139 722 95 662 19 559 28 406 32 355 58 295 88 222 139 167 272 19 487 45", !1),
        a.fill("evenodd");
    a.fillStyle = tocolor(e.apply([227, 224, 244, 1])),
        drawPath(a, "M 490 522 Q 531 505 575 500 L 620 500 Q 633 505 631 514 L 619 526 Q 476 525 398 632 360 685 350 739 L 333 738 Q 326 726 329 709 366 572 490 522", !1),
        a.fill("evenodd");
    a.fillStyle = tocolor(e.apply([227, 224, 244, 1])),
        drawPath(a, "M 629 534 Q 650 561 663 593 684 643 677 693 L 483 852 Q 449 844 421 826 373 796 362 749 365 730 377 701 394 661 420 628 499 531 629 534", !1),
        a.fill("evenodd");
    a.fillStyle = tocolor(e.apply([217, 83, 0, 1])),
        drawPath(a, "M 182 243 Q 187 312 221 372 215 394 218 414 221 438 234 456 208 438 199 438 178 434 156 459 137 484 138 529 141 572 164 609 L 137 608 Q 125 614 127 630 130 651 145 674 165 701 199 719 191 734 200 752 139 722 95 662 19 559 28 406 34 339 74 263 122 168 202 111 177 175 182 243", !1),
        a.fill("evenodd");
    a.fillStyle = tocolor(e.apply([149, 83, 0, 1])),
        drawPath(a, "M 241 226 Q 243 243 235 260 226 277 213 286 L 189 288 Q 178 283 175 268 173 251 182 234 190 217 204 208 L 228 205 Q 239 211 241 226", !1),
        a.fill("evenodd");
    a.fillStyle = tocolor(e.apply([226, 222, 241, 1])),
        drawPath(a, "M 223 251 L 211 266 198 267 Q 192 265 192 255 L 195 237 207 222 220 220 227 232 223 251", !1),
        a.fill("evenodd");
    a.fillStyle = tocolor(e.apply([149, 83, 0, 1])),
        drawPath(a, "M 447 80 Q 483 91 489 116 495 142 468 167 442 192 399 202 355 213 321 201 286 191 280 165 274 139 300 114 326 89 370 79 413 69 447 80", !1),
        a.fill("evenodd");
    a.fillStyle = tocolor(e.apply([226, 222, 241, 1])),
        drawPath(a, "M 470 121 Q 476 143 454 166 432 188 397 197 L 332 195 Q 303 184 298 161 293 137 314 116 335 94 371 85 L 435 87 Q 465 98 470 121", !1),
        a.fill("evenodd");
    a.fillStyle = tocolor(e.apply([149, 83, 0, 1])),
        drawPath(a, "M 528 104 Q 541 104 549 120 559 137 558 160 558 183 547 198 537 214 525 213 511 213 503 197 493 181 494 158 495 135 505 119 515 104 528 104", !1),
        a.fill("evenodd");
    a.fillStyle = tocolor(e.apply([226, 222, 241, 1])),
        drawPath(a, "M 544 166 L 537 191 Q 531 203 522 203 L 508 191 504 164 510 138 Q 517 127 524 127 533 127 539 138 L 544 166", !1),
        a.fill("evenodd");
    a.fillStyle = tocolor(e.apply([255, 255, 255, 1])),
        drawPath(a, "M 524 127 Q 533 127 539 138 L 544 166 538 186 529 200 532 184 527 157 Q 522 147 513 146 L 506 148 514 133 Q 519 127 524 127", !1),
        a.fill("evenodd");
    a.fillStyle = tocolor(e.apply([255, 179, 159, 1])),
        drawPath(a, "M 66 278 Q 106 193 171 135 40 291 50 439 58 540 126 627 L 127 630 Q 130 651 145 674 165 701 199 719 191 734 200 752 139 722 95 662 19 559 28 406 33 347 66 278", !1),
        a.fill("evenodd");
    a.fillStyle = tocolor(e.apply([226, 222, 241, 1])),
        drawPath(a, "M 69 271 Q 92 224 123 186 159 240 159 285 158 319 134 357 105 395 75 385 55 378 38 353 49 312 69 271", !1),
        a.fill("evenodd");
    a.fillStyle = tocolor(e.apply([226, 222, 241, 1])),
        drawPath(a, "M 27 431 Q 73 464 94 505 130 574 82 644 25 555 27 431", !1),
        a.fill("evenodd");
    a.fillStyle = tocolor(e.apply([255, 255, 255, 1])),
        drawPath(a, "M 591 147 Q 571 117 567 73 603 92 633 121 665 153 687 189 622 195 591 147", !1),
        a.fill("evenodd");
    a.fillStyle = tocolor(e.apply([149, 83, 0, 1])),
        drawPath(a, "M 577 79 Q 575 116 592 143 619 188 687 190 L 687 191 657 194 Q 633 192 613 182 557 153 553 66 L 577 79", !1),
        a.fill("evenodd");
    a.fillStyle = tocolor(e.apply([255, 255, 255, 1])),
        drawPath(a, "M 721 296 Q 694 278 692 253 691 235 701 218 718 257 721 296", !1),
        a.fill("evenodd");
    a.fillStyle = tocolor(e.apply([149, 83, 0, 1])),
        drawPath(a, "M 722 301 Q 697 292 687 274 669 247 698 210 L 705 228 Q 698 242 698 255 698 276 721 291 L 722 301", !1),
        a.fill("evenodd");
    a.fillStyle = tocolor(e.apply([164, 169, 215, 1])),
        drawPath(a, "M 234 478 L 244 488 253 493 Q 267 498 294 520 335 550 358 589 L 367 606 366 607 Q 336 563 291 538 258 519 225 513 186 493 174 534 167 558 172 598 151 569 160 517 167 486 188 472 212 454 234 478", !1),
        a.fill("evenodd");
    a.fillStyle = tocolor(e.apply([164, 169, 215, 1])),
        drawPath(a, "M 318 383 Q 283 372 263 402 250 420 246 453 238 429 241 402 244 369 261 355 279 340 301 341 321 343 335 359 L 383 419 Q 421 476 439 534 421 488 377 437 340 394 318 383", !1),
        a.fill("evenodd");
    a.fillStyle = tocolor(e.apply([255, 255, 255, 1])),
        drawPath(a, "M 312 696 Q 289 686 258 686 220 686 193 705 178 692 162 663 145 632 161 629 162 641 169 653 179 672 200 689 224 678 250 678 286 677 312 696", !1),
        a.fill("evenodd");
    a.fillStyle = tocolor(e.apply([255, 255, 255, 1])),
        drawPath(a, "M 216 740 Q 209 727 213 712 L 221 728 233 742 Q 252 722 278 717 L 313 714 277 721 Q 250 732 232 759 L 216 740", !1),
        a.fill("evenodd");
    a.fillStyle = tocolor(e.apply([227, 224, 244, 1])),
        drawPath(a, "M 475 293 Q 471 276 459 275 416 270 383 299 363 316 351 342 L 347 337 Q 352 304 376 276 404 243 441 244 470 247 488 261 507 275 505 298 499 334 501 385 502 453 520 489 L 519 478 525 495 521 496 Q 486 464 474 400 465 352 472 326 L 475 293", !1),
        a.fill("evenodd");
    a.fillStyle = tocolor(e.apply([215, 199, 244, 1])),
        drawPath(a, "M 602 386 Q 584 438 588 470 L 589 484 588 483 Q 576 463 573 436 567 389 589 341 603 307 595 279 586 250 555 257 565 246 578 244 L 601 246 Q 621 254 633 270 647 290 635 313 615 350 602 386", !1),
        a.fill("evenodd");
    a.fillStyle = tocolor(e.apply([215, 199, 244, 1])),
        drawPath(a, "M 644 445 Q 661 438 667 427 673 417 668 408 677 409 678 419 680 426 674 436 L 658 451 Q 646 456 635 464 L 613 484 597 483 594 483 610 466 644 445", !1),
        a.fill("evenodd");
    a.fillStyle = tocolor(e.apply([255, 255, 255, 1])),
        drawPath(a, "M 500 518 Q 539 504 579 500 609 497 620 500 L 625 503 Q 629 514 610 527 550 528 501 549 511 531 500 518", !1),
        a.fill("evenodd");
    a.fillStyle = tocolor(e.apply([164, 169, 215, 1])),
        drawPath(a, "M 361 632 Q 359 669 378 665 364 690 356 717 339 722 334 691 345 657 361 632", !1),
        a.fill("evenodd");
    a.fillStyle = tocolor(e.apply([164, 169, 215, 1])),
        drawPath(a, "M 400 657 Q 426 617 460 589 470 667 516 718 546 751 585 768 L 510 830 Q 458 822 415 780 388 754 370 721 381 687 400 657", !1),
        a.fill("evenodd");
    a.fillStyle = tocolor(e.apply([255, 255, 255, 1])),
        drawPath(a, "M 370 721 Q 388 754 415 780 458 822 510 830 L 483 852 Q 449 844 421 826 373 796 362 749 L 370 721", !1),
        a.fill("evenodd");
    a.fillStyle = tocolor(e.apply([255, 255, 255, 1])),
        drawPath(a, "M 644 720 L 629 732 Q 637 665 602 612 578 573 536 547 L 590 536 Q 641 585 650 644 656 683 644 720", !1),
        a.fill("evenodd");
    a.fillStyle = tocolor(e.apply([169, 158, 172, 1])),
        drawPath(a, "M 629 534 L 641 550 Q 577 551 518 585 421 642 373 777 L 362 749 Q 365 730 377 701 394 661 420 628 499 531 629 534", !1),
        a.fill("evenodd");
    a.fillStyle = tocolor(e.apply([183, 174, 178, 1])),
        drawPath(a, "M 536 547 L 561 540 562 540 590 536 606 553 561 565 536 547", !1),
        a.fill("evenodd");
    a.fillStyle = tocolor(e.apply([183, 174, 178, 1])),
        drawPath(a, "M 362 749 L 362 745 363 745 370 721 385 745 373 777 369 771 369 770 366 763 362 749", !1),
        a.fill("evenodd");
    a.fillStyle = tocolor(e.apply([137, 131, 158, 1])),
        drawPath(a, "M 460 589 L 467 624 Q 417 672 385 745 L 370 721 378 699 386 683 386 682 Q 415 626 460 589", !1),
        a.fill("evenodd");
    a.fillStyle = tocolor(e.apply([255, 255, 255, 1])),
        drawPath(a, "M 27 456 Q 37 508 61 554 L 98 615 82 644 Q 32 565 27 456", !1),
        a.fill("evenodd");
    a.fillStyle = tocolor(e.apply([149, 83, 0, 1])),
        drawPath(a, "M 27 421 Q 77 456 101 500 141 575 90 656 L 79 638 Q 103 605 103 565 102 500 27 443 L 27 421", !1),
        a.fill("evenodd");
    a.fillStyle = tocolor(e.apply([255, 255, 255, 1])),
        drawPath(a, "M 69 271 Q 92 224 123 186 L 128 194 Q 92 250 72 310 60 345 57 374 L 38 353 Q 49 312 69 271", !1),
        a.fill("evenodd");
    a.fillStyle = tocolor(e.apply([149, 83, 0, 1])),
        drawPath(a, "M 118 191 L 129 178 Q 155 215 163 255 177 319 133 367 70 431 35 365 L 41 343 Q 58 366 77 375 106 389 129 358 153 325 153 282 152 232 118 191", !1),
        a.fill("evenodd");
    a.fillStyle = tocolor(e.apply([255, 255, 255, 1])),
        drawPath(a, "M 440 90 Q 465 100 470 121 476 143 454 166 432 188 397 197 L 339 196 Q 313 189 302 171 L 357 173 Q 388 167 408 150 428 132 424 113 L 411 94 Q 400 86 383 83 416 78 440 90", !1),
        a.fill("evenodd")
}
function sprite5(a, e, l, c, r) {
    0 === (l %= 1) && place("shape4", canvas, a, [1, 0, 0, 1, 0, 0], e, 1, 0, 0, r)
}
imageObj1.src = "data:image/JPEG;base64,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";
var imageObj6 = document.createElement("img");
function image6(a, e, l, c, r) {
    drawPath(a, "M 0 0 L 0 760 920 760 920 0 0 0", !1),
        a.save(),
        a.clip(),
        a.transform(20, 0, 0, 20, 0, 0),
        a.transform(1.0217391304347827, 0, 0, 1.0263157894736843, -.5, -.5);
    e = e.applyToImage(imageObj6),
        e = a.createPattern(e, "repeat");
    a.fillStyle = e,
        a.fillRect(-16384, -16384, 32768, 32768),
        a.restore()
}
function shape7(a, e, l, c, r) {
    drawPath(a, "M 920 760 L 0 760 0 0 920 0 920 760", !1),
        a.save(),
        a.clip(),
        a.transform(20, 0, 0, 20, 0, 0),
        a.transform(1.0217391304347827, 0, 0, 1.0263157894736843, -.5, -.5);
    e = e.applyToImage(imageObj6),
        e = a.createPattern(e, "repeat");
    a.fillStyle = e,
        a.fillRect(-16384, -16384, 32768, 32768),
        a.restore()
}
function sprite8(a, e, l, c, r) {
    0 === (l %= 1) && place("shape7", canvas, a, [1, 0, 0, 1, 0, 0], e, 1, 0, 0, r)
}
imageObj6.src = "data:image/PNG;base64,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";
var imageObj9 = document.createElement("img");
function image9(a, e, l, c, r) {
    drawPath(a, "M 0 0 L 0 2840 2080 2840 2080 0 0 0", !1),
        a.save(),
        a.clip(),
        a.transform(20, 0, 0, 20, 0, 0),
        a.transform(1.0096153846153846, 0, 0, 1.0070422535211268, -.5, -.5);
    e = e.applyToImage(imageObj9),
        e = a.createPattern(e, "repeat");
    a.fillStyle = e,
        a.fillRect(-16384, -16384, 32768, 32768),
        a.restore()
}
function shape10(a, e, l, c, r) {
    drawPath(a, "M 0 0 L 2080 0 2080 2840 0 2840 0 0", !1),
        a.save(),
        a.clip(),
        a.transform(20, 0, 0, 20, 0, 0),
        a.transform(1.0096153846153846, 0, 0, 1.0070422535211268, -.5, -.5);
    e = e.applyToImage(imageObj9),
        e = a.createPattern(e, "repeat");
    a.fillStyle = e,
        a.fillRect(-16384, -16384, 32768, 32768),
        a.restore()
}
function sprite11(a, e, l, c, r) {
    0 === (l %= 1) && place("shape10", canvas, a, [1, 0, 0, 1, 0, 0], e, 1, 0, 0, r)
}
function sprite12(a, e, l, c, r) {
    switch (l %= 50) {
        case 0:
            place("sprite11", canvas, a, [1, 0, 0, 1, 0, 0], e, 1, (0 + r) % 1, 0, r);
            break;
        case 1:
            place("sprite11", canvas, a, [1, 0, 0, 1, 0, -7], e, 1, (0 + r) % 1, 0, r);
            break;
        case 2:
            place("sprite11", canvas, a, [1, 0, 0, 1, 0, -13], e, 1, (0 + r) % 1, 0, r);
            break;
        case 3:
            place("sprite11", canvas, a, [1, 0, 0, 1, 0, -19], e, 1, (0 + r) % 1, 0, r);
            break;
        case 4:
            place("sprite11", canvas, a, [1, 0, 0, 1, 0, -24], e, 1, (0 + r) % 1, 0, r);
            break;
        case 5:
            place("sprite11", canvas, a, [1, 0, 0, 1, 0, -30], e, 1, (0 + r) % 1, 0, r);
            break;
        case 6:
            place("sprite11", canvas, a, [1, 0, 0, 1, 0, -35], e, 1, (0 + r) % 1, 0, r);
            break;
        case 7:
            place("sprite11", canvas, a, [1, 0, 0, 1, 0, -40], e, 1, (0 + r) % 1, 0, r);
            break;
        case 8:
            place("sprite11", canvas, a, [1, 0, 0, 1, 0, -44], e, 1, (0 + r) % 1, 0, r);
            break;
        case 9:
            place("sprite11", canvas, a, [1, 0, 0, 1, 0, -49], e, 1, (0 + r) % 1, 0, r);
            break;
        case 10:
            place("sprite11", canvas, a, [1, 0, 0, 1, 0, -53], e, 1, (0 + r) % 1, 0, r);
            break;
        case 11:
            place("sprite11", canvas, a, [1, 0, 0, 1, 0, -57], e, 1, (0 + r) % 1, 0, r);
            break;
        case 12:
            place("sprite11", canvas, a, [1, 0, 0, 1, 0, -60], e, 1, (0 + r) % 1, 0, r);
            break;
        case 13:
            place("sprite11", canvas, a, [1, 0, 0, 1, 0, -63], e, 1, (0 + r) % 1, 0, r);
            break;
        case 14:
            place("sprite11", canvas, a, [1, 0, 0, 1, 0, -66], e, 1, (0 + r) % 1, 0, r);
            break;
        case 15:
            place("sprite11", canvas, a, [1, 0, 0, 1, 0, -69], e, 1, (0 + r) % 1, 0, r);
            break;
        case 16:
            place("sprite11", canvas, a, [1, 0, 0, 1, 0, -71], e, 1, (0 + r) % 1, 0, r);
            break;
        case 17:
            place("sprite11", canvas, a, [1, 0, 0, 1, 0, -73], e, 1, (0 + r) % 1, 0, r);
            break;
        case 18:
            place("sprite11", canvas, a, [1, 0, 0, 1, 0, -75], e, 1, (0 + r) % 1, 0, r);
            break;
        case 19:
            place("sprite11", canvas, a, [1, 0, 0, 1, 0, -77], e, 1, (0 + r) % 1, 0, r);
            break;
        case 20:
            place("sprite11", canvas, a, [1, 0, 0, 1, 0, -78], e, 1, (0 + r) % 1, 0, r);
            break;
        case 21:
        case 22:
            place("sprite11", canvas, a, [1, 0, 0, 1, 0, -79], e, 1, (0 + r) % 1, 0, r);
            break;
        case 23:
        case 24:
            place("sprite11", canvas, a, [1, 0, 0, 1, 0, -80], e, 1, (0 + r) % 1, 0, r);
            break;
        case 25:
            place("sprite11", canvas, a, [1, 0, 0, 1, 0, -74], e, 1, (0 + r) % 1, 0, r);
            break;
        case 26:
            place("sprite11", canvas, a, [1, 0, 0, 1, 0, -68], e, 1, (0 + r) % 1, 0, r);
            break;
        case 27:
            place("sprite11", canvas, a, [1, 0, 0, 1, 0, -62], e, 1, (0 + r) % 1, 0, r);
            break;
        case 28:
            place("sprite11", canvas, a, [1, 0, 0, 1, 0, -56], e, 1, (0 + r) % 1, 0, r);
            break;
        case 29:
            place("sprite11", canvas, a, [1, 0, 0, 1, 0, -51], e, 1, (0 + r) % 1, 0, r);
            break;
        case 30:
            place("sprite11", canvas, a, [1, 0, 0, 1, 0, -46], e, 1, (0 + r) % 1, 0, r);
            break;
        case 31:
            place("sprite11", canvas, a, [1, 0, 0, 1, 0, -41], e, 1, (0 + r) % 1, 0, r);
            break;
        case 32:
            place("sprite11", canvas, a, [1, 0, 0, 1, 0, -37], e, 1, (0 + r) % 1, 0, r);
            break;
        case 33:
            place("sprite11", canvas, a, [1, 0, 0, 1, 0, -33], e, 1, (0 + r) % 1, 0, r);
            break;
        case 34:
            place("sprite11", canvas, a, [1, 0, 0, 1, 0, -29], e, 1, (0 + r) % 1, 0, r);
            break;
        case 35:
            place("sprite11", canvas, a, [1, 0, 0, 1, 0, -25], e, 1, (0 + r) % 1, 0, r);
            break;
        case 36:
            place("sprite11", canvas, a, [1, 0, 0, 1, 0, -22], e, 1, (0 + r) % 1, 0, r);
            break;
        case 37:
            place("sprite11", canvas, a, [1, 0, 0, 1, 0, -18], e, 1, (0 + r) % 1, 0, r);
            break;
        case 38:
            place("sprite11", canvas, a, [1, 0, 0, 1, 0, -15], e, 1, (0 + r) % 1, 0, r);
            break;
        case 39:
            place("sprite11", canvas, a, [1, 0, 0, 1, 0, -13], e, 1, (0 + r) % 1, 0, r);
            break;
        case 40:
            place("sprite11", canvas, a, [1, 0, 0, 1, 0, -10], e, 1, (0 + r) % 1, 0, r);
            break;
        case 41:
            place("sprite11", canvas, a, [1, 0, 0, 1, 0, -8], e, 1, (0 + r) % 1, 0, r);
            break;
        case 42:
            place("sprite11", canvas, a, [1, 0, 0, 1, 0, -6], e, 1, (0 + r) % 1, 0, r);
            break;
        case 43:
            place("sprite11", canvas, a, [1, 0, 0, 1, 0, -5], e, 1, (0 + r) % 1, 0, r);
            break;
        case 44:
            place("sprite11", canvas, a, [1, 0, 0, 1, 0, -3], e, 1, (0 + r) % 1, 0, r);
            break;
        case 45:
            place("sprite11", canvas, a, [1, 0, 0, 1, 0, -2], e, 1, (0 + r) % 1, 0, r);
            break;
        case 46:
        case 47:
            place("sprite11", canvas, a, [1, 0, 0, 1, 0, -1], e, 1, (0 + r) % 1, 0, r);
            break;
        case 48:
        case 49:
            place("sprite11", canvas, a, [1, 0, 0, 1, 0, 0], e, 1, (0 + r) % 1, 0, r)
    }
}
function shape13(a, e, l, c, r) {
    a.fillStyle = tocolor(e.apply([104, 63, 51, 1])),
        drawPath(a, "M 511 19 L 613 22 Q 638 34 659 59 679 84 688 115 669 183 587 261 552 267 482 261 475 314 419 362 435 407 430 473 423 577 367 705 357 733 346 775 404 825 448 922 520 1083 514 1317 L 559 1411 Q 595 1491 616 1575 678 1832 610 2185 L 582 2298 Q 602 2445 607 2562 612 2685 635 2781 666 2907 720 2963 752 2987 735 3011 L 670 3109 645 3136 Q 629 3143 603 3124 L 556 3087 Q 537 3068 533 3043 523 2978 494 2887 448 2739 379 2627 322 2533 345 2432 398 2205 406 2106 429 1794 311 1544 290 1504 286 1484 279 1449 295 1396 185 1252 132 1046 117 988 120 946 49 811 24 731 14 696 14 684 13 657 27 624 L 51 570 Q 78 501 95 423 L 14 194 Q 2 150 1 129 -1 93 15 77 L 90 31 Q 146 0 198 0 198 28 208 61 220 99 239 116 L 308 62 Q 342 39 357 35 L 511 19", !1),
        a.fill("evenodd");
    a.fillStyle = tocolor(e.apply([215, 189, 169, 1])),
        drawPath(a, "M 583 238 Q 550 197 546 159 544 130 559 90 579 50 602 51 655 96 644 126 610 214 583 238", !1),
        a.fill("evenodd");
    a.fillStyle = tocolor(e.apply([144, 109, 91, 1])),
        drawPath(a, "M 567 43 Q 526 68 517 96 511 113 517 147 529 192 548 215 560 229 582 239 L 580 241 520 245 337 230 Q 287 251 268 266 225 299 214 357 231 316 264 286 311 247 373 250 361 282 326 306 269 348 254 411 276 374 297 352 L 353 308 422 255 444 258 Q 439 299 367 370 L 292 449 Q 259 493 247 542 279 468 382 391 398 457 372 581 357 656 314 793 289 875 309 991 319 1048 334 1090 310 952 336 821 419 930 461 1110 487 1221 493 1335 596 1552 607 1802 616 1992 572 2190 537 2346 517 2515 507 2596 504 2649 508 2599 560 2390 572 2455 579 2610 588 2770 649 2901 679 2967 707 3001 690 3018 663 3065 646 3099 619 3089 L 569 3054 Q 560 2966 477 2765 L 383 2549 Q 373 2521 383 2446 L 408 2305 Q 457 2020 411 1758 384 1601 338 1505 315 1458 322 1430 L 370 1484 412 1528 Q 333 1433 259 1283 198 1157 173 1070 155 1004 156 953 157 916 171 851 195 753 204 659 L 208 594 Q 204 635 173 742 L 130 891 126 908 Q 66 792 63 703 61 664 80 590 135 424 130 267 L 114 143 Q 123 263 102 384 74 339 59 242 48 167 49 115 52 117 64 107 L 95 78 Q 109 62 130 53 L 167 43 Q 167 90 218 137 198 158 189 173 167 217 152 300 L 144 381 140 453 Q 164 317 190 242 205 202 247 156 292 107 347 74 462 43 567 43", !1),
        a.fill("evenodd");
    a.fillStyle = tocolor(e.apply([129, 88, 78, 1])),
        drawPath(a, "M 208 600 L 208 604 Q 239 727 236 793 233 864 253 945 279 1052 329 1075 L 334 1090 333 1076 334 1078 Q 385 1187 410 1365 422 1448 448 1507 464 1545 496 1592 526 1789 529 1899 538 2190 463 2508 469 2594 517 2742 566 2897 617 2977 629 3003 637 3036 L 647 3087 609 3084 569 3054 Q 560 2966 477 2765 L 383 2549 Q 373 2521 383 2446 L 408 2305 Q 457 2020 411 1758 384 1601 338 1505 315 1458 322 1430 L 370 1484 412 1528 Q 333 1433 259 1283 198 1157 173 1070 155 1004 156 953 157 916 171 851 205 714 208 600 M 567 43 Q 517 74 514 110 356 118 279 173 223 231 202 321 176 436 207 597 201 656 130 891 L 126 908 Q 66 792 63 703 61 664 80 590 135 424 130 267 L 114 143 Q 123 263 102 384 74 339 59 242 48 167 49 115 52 117 64 107 L 95 78 Q 109 62 130 53 L 167 43 Q 167 90 218 137 198 158 189 173 167 217 152 300 L 144 381 140 453 Q 164 317 190 242 205 202 247 156 292 107 347 74 462 43 567 43", !1),
        a.fill("evenodd");
    a.fillStyle = tocolor(e.apply([189, 159, 134, 1])),
        drawPath(a, "M 203 826 Q 186 911 207 1025 243 1232 390 1498 L 379 1484 Q 310 1389 248 1257 195 1147 173 1070 155 1004 156 953 157 916 171 851 199 737 206 631 214 774 203 826", !1),
        a.fill("evenodd");
    a.fillStyle = tocolor(e.apply([189, 159, 134, 1])),
        drawPath(a, "M 322 1430 L 333 1442 Q 344 1475 379 1536 436 1632 460 1858 489 2136 425 2389 410 2478 410 2502 410 2542 432 2608 L 508 2797 Q 562 2940 563 3020 545 2925 468 2742 L 383 2549 Q 373 2521 383 2446 L 408 2305 Q 457 2020 411 1758 384 1601 338 1505 315 1458 322 1430", !1),
        a.fill("evenodd");
    a.fillStyle = tocolor(e.apply([189, 159, 134, 1])),
        drawPath(a, "M 117 558 Q 96 627 99 689 103 771 151 821 L 126 908 Q 66 792 63 703 61 664 80 590 133 431 130 281 145 457 117 558", !1),
        a.fill("evenodd");
    a.fillStyle = tocolor(e.apply([189, 159, 134, 1])),
        drawPath(a, "M 102 384 Q 74 339 59 242 48 167 49 115 L 63 186 Q 82 266 112 311 L 102 384", !1),
        a.fill("evenodd");
    a.fillStyle = tocolor(e.apply([189, 159, 134, 1])),
        drawPath(a, "M 567 43 L 548 57 Q 464 59 355 83 309 99 260 155 194 230 164 340 L 190 242 Q 205 202 247 156 292 107 347 74 462 43 567 43", !1),
        a.fill("evenodd");
    a.fillStyle = tocolor(e.apply([189, 159, 134, 1])),
        drawPath(a, "M 422 255 L 444 258 415 296 Q 386 327 354 342 312 364 277 405 240 448 226 498 242 435 257 404 L 254 411 Q 276 374 297 352 L 353 308 422 255", !1),
        a.fill("evenodd");
    a.fillStyle = tocolor(e.apply([215, 189, 169, 1])),
        drawPath(a, "M 320 443 L 382 391 Q 398 457 372 581 357 656 314 793 294 859 303 948 309 1007 326 1066 288 1001 283 914 278 833 301 748 342 606 320 443", !1),
        a.fill("evenodd");
    a.fillStyle = tocolor(e.apply([215, 189, 169, 1])),
        drawPath(a, "M 407 1076 Q 371 988 324 913 326 867 336 821 419 930 461 1110 487 1221 493 1335 596 1552 607 1802 616 1992 572 2190 L 554 2274 Q 597 1859 547 1592 528 1491 466 1343 463 1217 407 1076", !1),
        a.fill("evenodd");
    a.fillStyle = tocolor(e.apply([215, 189, 169, 1])),
        drawPath(a, "M 579 2610 Q 588 2770 649 2901 679 2967 707 3001 L 684 3031 Q 685 3008 666 2976 L 617 2896 Q 572 2826 547 2692 532 2611 527 2527 L 560 2390 Q 572 2455 579 2610", !1),
        a.fill("evenodd")
}
function sprite14(a, e, l, c, r) {
    0 === (l %= 1) && place("shape13", canvas, a, [1, 0, 0, 1, 0, 0], e, 1, 0, 0, r)
}
function sprite15(a, e, l, c, r) {
    switch (l %= 30) {
        case 0:
            place("sprite14", canvas, a, [.9988861083984375, -.04376220703125, .04376220703125, .9988861083984375, -144, 34], e, 1, (0 + r) % 1, 0, r);
            break;
        case 1:
            place("sprite14", canvas, a, [.9992828369140625, -.0306549072265625, .0306549072265625, .9992828369140625, -101, 24], e, 1, (0 + r) % 1, 0, r);
            break;
        case 2:
            place("sprite14", canvas, a, [.999603271484375, -.017913818359375, .017913818359375, .999603271484375, -59, 15], e, 1, (0 + r) % 1, 0, r);
            break;
        case 3:
            place("sprite14", canvas, a, [.9998016357421875, -.0053863525390625, .0053863525390625, .9998016357421875, -17, 5], e, 1, (0 + r) % 1, 0, r);
            break;
        case 4:
            place("sprite14", canvas, a, [.9998321533203125, .0003814697265625, -.0003814697265625, .9998321533203125, 1, 2], e, 1, (0 + r) % 1, 0, r);
            break;
        case 5:
            place("sprite14", canvas, a, [.9997711181640625, .0091552734375, -.0091552734375, .9997711181640625, 31, -5], e, 1, (0 + r) % 1, 0, r);
            break;
        case 6:
            place("sprite14", canvas, a, [.999603271484375, .0177154541015625, -.0177154541015625, .999603271484375, 59, -10], e, 1, (0 + r) % 1, 0, r);
            break;
        case 7:
            place("sprite14", canvas, a, [.99951171875, .02276611328125, -.02276611328125, .99951171875, 76, -13], e, 1, (0 + r) % 1, 0, r);
            break;
        case 8:
            place("sprite14", canvas, a, [.9992523193359375, .03082275390625, -.03082275390625, .9992523193359375, 102, -18], e, 1, (0 + r) % 1, 0, r);
            break;
        case 9:
            place("sprite14", canvas, a, [.9990692138671875, .035400390625, -.035400390625, .9990692138671875, 117, -19], e, 1, (0 + r) % 1, 0, r);
            break;
        case 10:
            place("sprite14", canvas, a, [.9988861083984375, .039703369140625, -.039703369140625, .9988861083984375, 134, -23], e, 1, (0 + r) % 1, 0, r);
            break;
        case 11:
            place("sprite14", canvas, a, [.9987030029296875, .0438385009765625, -.0438385009765625, .9987030029296875, 148, -25], e, 1, (0 + r) % 1, 0, r);
            break;
        case 12:
            place("sprite14", canvas, a, [.998687744140625, .0444183349609375, -.0444183349609375, .998687744140625, 150, -25], e, 1, (0 + r) % 1, 0, r);
            break;
        case 13:
            place("sprite14", canvas, a, [.998504638671875, .04803466796875, -.04803466796875, .998504638671875, 162, -27], e, 1, (0 + r) % 1, 0, r);
            break;
        case 14:
            place("sprite14", canvas, a, [.9986419677734375, .0487213134765625, -.0487213134765625, .9986419677734375, 163, -29], e, 1, (0 + r) % 1, 0, r);
            break;
        case 15:
            place("sprite14", canvas, a, [.99908447265625, .0353546142578125, -.0353546142578125, .99908447265625, 119, -21], e, 1, (0 + r) % 1, 0, r);
            break;
        case 16:
            place("sprite14", canvas, a, [.9994964599609375, .022796630859375, -.022796630859375, .9994964599609375, 76, -13], e, 1, (0 + r) % 1, 0, r);
            break;
        case 17:
            place("sprite14", canvas, a, [.9997100830078125, .0136566162109375, -.0136566162109375, .9997100830078125, 46, -9], e, 1, (0 + r) % 1, 0, r);
            break;
        case 18:
            place("sprite14", canvas, a, [.9998016357421875, .0047607421875, -.0047607421875, .9998016357421875, 17, -2], e, 1, (0 + r) % 1, 0, r);
            break;
        case 19:
            place("sprite14", canvas, a, [.9998321533203125, -.0006866455078125, .0006866455078125, .9998321533203125, -1, 2], e, 1, (0 + r) % 1, 0, r);
            break;
        case 20:
            place("sprite14", canvas, a, [.9997711181640625, -.0091552734375, .0091552734375, .9997711181640625, -30, 8], e, 1, (0 + r) % 1, 0, r);
            break;
        case 21:
            place("sprite14", canvas, a, [.9996185302734375, -.0174560546875, .0174560546875, .9996185302734375, -57, 14], e, 1, (0 + r) % 1, 0, r);
            break;
        case 22:
            place("sprite14", canvas, a, [.999542236328125, -.0222625732421875, .0222625732421875, .999542236328125, -73, 16], e, 1, (0 + r) % 1, 0, r);
            break;
        case 23:
            place("sprite14", canvas, a, [.9993896484375, -.0268707275390625, .0268707275390625, .9993896484375, -88, 21], e, 1, (0 + r) % 1, 0, r);
            break;
        case 24:
            place("sprite14", canvas, a, [.9992523193359375, -.031280517578125, .031280517578125, .9992523193359375, -103, 24], e, 1, (0 + r) % 1, 0, r);
            break;
        case 25:
            place("sprite14", canvas, a, [.999114990234375, -.035491943359375, .035491943359375, .999114990234375, -116, 26], e, 1, (0 + r) % 1, 0, r);
            break;
        case 26:
            place("sprite14", canvas, a, [.998931884765625, -.039459228515625, .039459228515625, .998931884765625, -130, 31], e, 1, (0 + r) % 1, 0, r);
            break;
        case 27:
            place("sprite14", canvas, a, [.9989166259765625, -.03997802734375, .03997802734375, .9989166259765625, -132, 31], e, 1, (0 + r) % 1, 0, r);
            break;
        case 28:
            place("sprite14", canvas, a, [.9989013671875, -.040283203125, .040283203125, .9989013671875, -133, 31], e, 1, (0 + r) % 1, 0, r);
            break;
        case 29:
            place("sprite14", canvas, a, [.9988861083984375, -.04376220703125, .04376220703125, .9988861083984375, -144, 34], e, 1, (0 + r) % 1, 0, r)
    }
}
function main(a, e, l, c, r) {
    a.save(),
        a.transform(1, 0, 0, 1, 0, 0);
    0 === (l %= 1) && (place("sprite3", canvas, a, [.05, 0, 0, .04999542236328125, 12.5, 133.5], e, 1, (0 + r) % 1, 0, r),
        place("sprite5", canvas, a, [.05, 0, 0, .05, 4.7, 114.7], e, 1, (0 + r) % 1, 0, r),
        place("sprite8", canvas, a, [.05, 0, 0, .050038909912109374, 66.2, 129.15], e, 1, (0 + r) % 1, 0, r),
        place("sprite12", canvas, a, [.05, 0, 0, .050074005126953126, 35, 6], e, 1, (0 + r) % 50, 0, r),
        place("sprite15", canvas, a, [.050052642822265625, 0, 0, .050038909912109374, 16, 9.5], e, 1, (0 + r) % 30, 0, r)),
        a.restore()
}
imageObj9.src = "data:image/PNG;base64,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";
var frame = -1
    , time = 0
    , frames = [];
frames.push(0);
var backgroundColor = "#ffffff"
    , originalWidth = 150
    , originalHeight = 190;
function nextFrame(a, e) {
    var l = frame;
    (frame = (frame + 1) % frames.length) == l ? time++ : time = 0,
        drawFrame()
}
function drawFrame() {
    ctx.fillStyle = backgroundColor,
        ctx.fillRect(0, 0, canvas.width, canvas.height),
        ctx.save(),
        ctx.transform(canvas.width / originalWidth, 0, 0, canvas.height / originalHeight, 0, 0),
        main(ctx, ctrans, frames[frame], 0, time),
        ctx.restore()
}
window.setInterval(function() {
    nextFrame(ctx, ctrans)
}, 33),
    nextFrame(ctx, ctrans);
