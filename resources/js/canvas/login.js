(function() {
        if (true) {
            function concatMatrix(d, a) {
                var b = [1, 0, 0, 1, 0, 0];
                return b[0] = a[0] * d[0] + a[2] * d[1],
                    b[1] = a[1] * d[0] + a[3] * d[1],
                    b[2] = a[0] * d[2] + a[2] * d[3],
                    b[3] = a[1] * d[2] + a[3] * d[3],
                    b[4] = a[0] * d[4] + a[2] * d[5] + a[4],
                    b[5] = a[1] * d[4] + a[3] * d[5] + a[5],
                    b
            }
            function initDragWidth(b) {
                dragWidth = !0,
                    dragHeight = !1,
                    initDrag(b)
            }
            function initDragHeight(b) {
                dragWidth = !1,
                    dragHeight = !0,
                    initDrag(b)
            }
            function initDragBoth(b) {
                dragWidth = !0,
                    dragHeight = !0,
                    initDrag(b)
            }
            function initDrag(b) {
                startX = b.clientX,
                    startY = b.clientY,
                    startWidth = canvas.width,
                    startHeight = canvas.height,
                    document.documentElement.addEventListener("mousemove", doDrag, !1),
                    document.documentElement.addEventListener("mouseup", stopDrag, !1)
            }
            function doDrag(b) {
                dragWidth ? (canvas.width = startWidth + b.clientX - startX,
                    canvas.height = canvas.width * originalHeight / originalWidth) : dragHeight && (canvas.height = startHeight + b.clientY - startY,
                    canvas.width = canvas.height * originalWidth / originalHeight),
                    drawFrame()
            }
            function stopDrag() {
                document.documentElement.removeEventListener("mousemove", doDrag, !1),
                    document.documentElement.removeEventListener("mouseup", stopDrag, !1)
            }
            function drawMorphPath(i, a, b, c, d) {
                var e = a.split(" ")
                    , f = e.length;
                if (c) {
                    for (var g = 0; g < f; g++)
                        switch (e[g]) {
                            case "":
                                break;
                            case "L":
                            case "M":
                            case "Q":
                                break;
                            default:
                                var k = i.applyTransformToPoint({
                                    x: e[g],
                                    y: e[g + 2]
                                });
                                e[g] = k.x,
                                    e[g + 2] = k.y,
                                    k = i.applyTransformToPoint({
                                        x: e[g + 1],
                                        y: e[g + 3]
                                    }),
                                    e[g + 1] = k.x,
                                    e[g + 3] = k.y,
                                    g += 3;
                        }
                    switch (d) {
                        case "NONE":
                            break;
                        case "NORMAL":
                            i.lineWidth *= 20 * Math.max(i._matrix[0], i._matrix[3]);
                            break;
                        case "VERTICAL":
                            i.lineWidth *= 20 * i._matrix[3];
                            break;
                        case "HORIZONTAL":
                            i.lineWidth *= 20 * i._matrix[0];
                    }
                    i.save(),
                        i.setTransform(1, 0, 0, 1, 0, 0)
                }
                i.beginPath();
                for (var m = "", g = 0; g < f; g++)
                    switch (e[g]) {
                        case "L":
                        case "M":
                        case "Q":
                            m = e[g];
                            break;
                        default:
                            "L" === m ? (i.lineTo(useRatio(e[g], e[g + 1], b), useRatio(e[g + 2], e[g + 3], b)),
                                g += 3) : "M" === m ? (i.moveTo(useRatio(e[g], e[g + 1], b), useRatio(e[g + 2], e[g + 3], b)),
                                g += 3) : "Q" === m ? (i.quadraticCurveTo(useRatio(e[g], e[g + 1], b), useRatio(e[g + 2], e[g + 3], b), useRatio(e[g + 4], e[g + 5], b), useRatio(e[g + 6], e[g + 7], b)),
                                g += 7) : void 0;
                    }
                c && (i.stroke(),
                    i.restore())
            }
            function useRatio(d, a, b) {
                return 1 * d + (a - d) * b / 65535
            }
            function drawPath(i, a, b, c) {
                var d = a.split(" ")
                    , e = d.length;
                if (b) {
                    for (var f = 0; f < e; f++)
                        switch (d[f]) {
                            case "L":
                            case "M":
                            case "Q":
                            case "Z":
                                break;
                            default:
                                var k = i.applyTransformToPoint({
                                    x: d[f],
                                    y: d[f + 1]
                                });
                                d[f] = k.x,
                                    d[f + 1] = k.y,
                                    f++;
                        }
                    switch (c) {
                        case "NONE":
                            break;
                        case "NORMAL":
                            i.lineWidth *= 20 * Math.max(i._matrix[0], i._matrix[3]);
                            break;
                        case "VERTICAL":
                            i.lineWidth *= 20 * i._matrix[3];
                            break;
                        case "HORIZONTAL":
                            i.lineWidth *= 20 * i._matrix[0];
                    }
                    i.save(),
                        i.setTransform(1, 0, 0, 1, 0, 0)
                }
                i.beginPath();
                for (var h = "", f = 0; f < e; f++)
                    switch (d[f]) {
                        case "L":
                        case "M":
                        case "Q":
                            h = d[f];
                            break;
                        case "Z":
                            i.closePath();
                            break;
                        default:
                            "L" === h ? (i.lineTo(d[f], d[f + 1]),
                                f++) : "M" === h ? (i.moveTo(d[f], d[f + 1]),
                                f++) : "Q" === h ? (i.quadraticCurveTo(d[f], d[f + 1], d[f + 2], d[f + 3]),
                                f += 3) : void 0;
                    }
                b && (i.stroke(),
                    i.restore())
            }
            function image1(e, a) {
                drawPath(e, "M 0 0 L 0 4280 2780 4280 2780 0 0 0", !1),
                    e.save(),
                    e.clip(),
                    e.transform(20, 0, 0, 20, 0, 0),
                    e.transform(1.0071942446043165, 0, 0, 1.0046728971962617, -.5, -.5);
                var b = a.applyToImage(imageObj1)
                    , c = e.createPattern(b, "repeat");
                e.fillStyle = c,
                    e.fillRect(-16384, -16384, 32768, 32768),
                    e.restore()
            }
            function shape2(e, a) {
                drawPath(e, "M 2780 0 L 2780 4280 0 4280 0 0 2780 0", !1),
                    e.save(),
                    e.clip(),
                    e.transform(20, 0, 0, 20, 0, 0),
                    e.transform(1.0071942446043165, 0, 0, 1.0046728971962617, -.5, -.5);
                var b = a.applyToImage(imageObj1)
                    , c = e.createPattern(b, "repeat");
                e.fillStyle = c,
                    e.fillRect(-16384, -16384, 32768, 32768),
                    e.restore()
            }
            function sprite3(f, a, b, g, d) {
                b %= 1,
                    0 === b ? place("shape2", canvas, f, [1, 0, 0, 1, 0, 0], a, 1, 0, 0, d) : void 0
            }
            function shape4(e, a) {
                var b = "M 752 308 Q 740 239 669 223 L 598 218 Q 511 228 486 288 474 319 480 346 L 498 476 767 420 752 308 M 898 82 Q 946 137 951 196 L 980 403 1009 410 1166 462 1214 489 Q 1262 527 1271 578 L 1336 1079 Q 1343 1113 1329 1155 1303 1239 1208 1274 1082 1319 881 1380 660 1443 536 1470 L 459 1478 Q 402 1479 346 1447 290 1417 209 1362 L 139 1314 Q 125 1308 109 1284 77 1241 63 1168 L 23 905 1 729 Q -6 692 17 650 60 565 203 540 L 272 526 241 298 Q 225 169 355 88 442 32 578 8 799 -26 898 82";
                e.fillStyle = tocolor(a.apply([88, 61, 48, 1])),
                    drawPath(e, b, !1),
                    e.fill("evenodd");
                var b = "M 870 586 L 1164 538 Q 972 535 668 614 513 654 358 703 297 721 202 689 L 124 671 80 664 236 723 Q 283 744 289 805 L 363 1255 Q 370 1308 401 1351 429 1390 453 1396 425 1381 407 1319 L 330 819 Q 320 753 382 724 598 642 870 586 M 771 448 Q 766 468 788 496 819 538 889 531 984 516 984 437 1068 455 1152 486 1200 503 1226 547 L 1240 588 1304 1078 Q 1313 1131 1289 1173 1266 1214 1219 1234 1071 1294 816 1363 L 513 1437 Q 453 1446 413 1437 400 1436 368 1420 L 276 1369 Q 193 1318 158 1289 126 1263 108 1209 L 96 1163 31 715 Q 20 633 115 592 160 571 209 566 L 276 552 276 554 298 595 Q 334 636 411 625 512 605 502 508 L 501 504 771 448"
                    , f = e.createLinearGradient(596, 978.75, 1088, 505.25);
                f.addColorStop(.0392156862745098, tocolor(a.apply([255, 171, 0, 1]))),
                    f.addColorStop(.5607843137254902, tocolor(a.apply([255, 235, 0, 1]))),
                    f.addColorStop(1, tocolor(a.apply([255, 69, 0, 1]))),
                    e.fillStyle = f,
                    drawPath(e, b, !1),
                    e.fill("evenodd");
                var b = "M 868 86 Q 911 128 920 176 L 955 411 Q 962 445 944 472 927 502 888 509 832 517 808 481 L 796 443 777 312 Q 769 249 720 221 675 196 610 205 498 221 464 286 449 319 455 349 L 477 521 Q 481 547 464 571 445 600 408 605 345 612 317 579 L 301 543 271 348 Q 250 197 360 113 448 45 606 24 780 0 868 86";
                e.fillStyle = tocolor(a.apply([199, 201, 196, 1])),
                    drawPath(e, b, !1),
                    e.fill("evenodd");
                var b = "M 832 241 L 858 393 Q 872 481 885 510 832 515 809 479 L 796 443 777 312 Q 769 249 720 221 675 196 610 205 475 224 457 313 451 274 467 238 493 169 578 151 806 105 832 241"
                    , f = e.createLinearGradient(867.75, 349.75, 588.25, 260.25);
                f.addColorStop(0, tocolor(a.apply([255, 255, 255, 1]))),
                    f.addColorStop(.4392156862745098, tocolor(a.apply([156, 158, 179, 1]))),
                    f.addColorStop(1, tocolor(a.apply([102, 84, 105, 1]))),
                    e.fillStyle = f,
                    drawPath(e, b, !1),
                    e.fill("evenodd");
                var b = "M 534 35 Q 332 103 348 261 373 519 397 606 340 609 315 577 L 301 543 271 348 Q 238 104 534 35"
                    , f = e.createLinearGradient(408, 406, 400, 112);
                f.addColorStop(0, tocolor(a.apply([255, 255, 255, 1]))),
                    f.addColorStop(.4392156862745098, tocolor(a.apply([156, 158, 179, 1]))),
                    f.addColorStop(1, tocolor(a.apply([79, 77, 77, 1]))),
                    e.fillStyle = f,
                    drawPath(e, b, !1),
                    e.fill("evenodd")
            }
            function shape5(c, a) {
                c.fillStyle = tocolor(a.apply([105, 110, 120, 1])),
                    drawPath(c, "M 135 0 Q 17 22 14 112 8 258 15 309 L 4 307 Q -2 264 3 113 5 32 106 4 L 135 0", !1),
                    c.fill("evenodd")
            }
            function sprite6(f, a, b, g, d) {
                b %= 1,
                    0 === b ? place("shape5", canvas, f, [1, 0, 0, 1, 0, 0], a, 1, 0, 0, d) : void 0
            }
            function shape7(e, a) {
                var b = "M 759 169 Q 733 155 666 152 516 154 471 228 498 169 578 151 806 105 832 241 L 858 393 Q 872 481 885 510 L 864 509 Q 846 459 821 277 810 196 759 169";
                e.fillStyle = tocolor(a.apply([138, 138, 156, 1])),
                    drawPath(e, b, !1),
                    e.fill("evenodd");
                var b = "M 863 206 Q 844 106 713 99 L 583 113 Q 771 51 846 123 871 148 892 233 905 288 928 459 930 476 922 483 914 490 907 479 902 466 891 392 880 292 863 206";
                e.fillStyle = tocolor(a.apply([255, 255, 255, 1])),
                    drawPath(e, b, !1),
                    e.fill("evenodd");
                var b = "M 394 310 Q 382 235 432 185 467 148 509 141 409 197 424 301 L 449 516 Q 454 520 451 530 L 442 540 Q 435 541 430 530 L 427 519 394 310";
                e.fillStyle = tocolor(a.apply([255, 255, 255, 1])),
                    drawPath(e, b, !1),
                    e.fill("evenodd");
                var b = "M 236 723 Q 283 744 289 805 L 363 1255 Q 369 1299 393 1338 412 1370 437 1388 488 1429 577 1422 L 513 1437 Q 453 1446 413 1437 400 1436 368 1420 L 276 1369 Q 193 1318 158 1289 126 1263 108 1209 L 96 1163 31 715 Q 26 677 49 644 53 655 80 664 L 236 723"
                    , f = e.createLinearGradient(314.5, 1152.5, 257.5, 781.5);
                f.addColorStop(.0392156862745098, tocolor(a.apply([255, 156, 0, 1]))),
                    f.addColorStop(1, tocolor(a.apply([255, 105, 0, 1]))),
                    e.fillStyle = f,
                    drawPath(e, b, !1),
                    e.fill("evenodd");
                var b = "M 1164 538 L 1107 538 1148 484 1152 486 Q 1200 503 1226 547 L 1240 588 1304 1078 Q 1313 1131 1289 1173 1266 1214 1219 1234 1013 1320 646 1405 1046 1284 1179 1235 1268 1195 1286 1138 1291 1121 1286 1050 L 1231 608 Q 1223 554 1148 540 L 1164 538";
                e.fillStyle = tocolor(a.apply([255, 255, 255, 1])),
                    drawPath(e, b, !1),
                    e.fill("evenodd");
                var b = "M 236 723 Q 283 744 289 805 L 363 1255 Q 369 1299 393 1338 412 1370 437 1388 488 1429 577 1422 L 534 1432 Q 410 1431 361 1319 343 1283 330 1188 299 960 272 835 256 769 191 728 160 709 98 689 69 682 47 644 L 49 644 Q 53 655 80 664 L 236 723";
                e.fillStyle = tocolor(a.apply([255, 255, 255, 1])),
                    drawPath(e, b, !1),
                    e.fill("evenodd");
                var b = "M 1152 486 Q 1200 503 1226 547 L 1240 588 Q 1227 541 1150 540 L 1164 538 Q 972 535 668 614 513 654 358 703 297 721 202 689 L 124 671 80 664 Q 53 655 49 644 77 602 145 581 181 569 209 566 L 276 552 276 554 298 595 Q 334 636 411 625 512 605 502 508 L 501 504 771 448 Q 766 468 788 496 819 538 889 531 984 516 984 437 1068 455 1152 486"
                    , f = e.createLinearGradient(704, 568.25, 1232, 481.75);
                f.addColorStop(.0392156862745098, tocolor(a.apply([255, 171, 0, 1]))),
                    f.addColorStop(1, tocolor(a.apply([255, 105, 0, 1]))),
                    e.fillStyle = f,
                    drawPath(e, b, !1),
                    e.fill("evenodd");
                var b = "M 633 478 L 771 448 Q 766 468 788 496 819 538 889 531 L 851 534 Q 801 532 737 503 685 481 633 478"
                    , f = e.createLinearGradient(659.75, 469, 852.25, 499);
                f.addColorStop(.0392156862745098, tocolor(a.apply([255, 171, 0, 1]))),
                    f.addColorStop(1, tocolor(a.apply([133, 69, 0, 1]))),
                    e.fillStyle = f,
                    drawPath(e, b, !1),
                    e.fill("evenodd");
                var b = "M 276 554 L 298 595 Q 334 636 411 625 336 647 265 609 211 581 172 573 L 209 566 276 552 276 554"
                    , f = e.createLinearGradient(238.75, 560, 295.25, 602);
                f.addColorStop(.0392156862745098, tocolor(a.apply([255, 171, 0, 1]))),
                    f.addColorStop(1, tocolor(a.apply([133, 69, 0, 1]))),
                    e.fillStyle = f,
                    drawPath(e, b, !1),
                    e.fill("evenodd");
                var b = "M 414 1338 Q 593 1175 692 911 745 761 764 610 L 933 575 888 718 749 996 476 1358 428 1369 Q 420 1358 414 1338";
                e.fillStyle = tocolor(a.apply([255, 138, 0, 1])),
                    drawPath(e, b, !1),
                    e.fill("evenodd");
                var b = "M 822 597 Q 971 565 1071 552 1019 720 921 892 730 1223 453 1396 428 1382 414 1340 522 1256 618 1115 764 894 822 597";
                e.fillStyle = tocolor(a.apply([255, 255, 255, 1])),
                    drawPath(e, b, !1),
                    e.fill("evenodd");
                var b = "M 953 876 Q 958 929 928 971 896 1013 847 1017 797 1022 759 988 719 954 713 901 709 848 739 807 769 765 819 760 868 755 909 789 947 822 953 876";
                e.fillStyle = tocolor(a.apply([255, 255, 255, 1])),
                    drawPath(e, b, !1),
                    e.fill("evenodd");
                var b = "M 908 989 L 932 1113 Q 947 1174 880 1181 867 1138 854 1054 L 845 976 908 989";
                e.fillStyle = tocolor(a.apply([255, 255, 255, 1])),
                    drawPath(e, b, !1),
                    e.fill("evenodd");
                var b = "M 798 766 Q 847 758 889 789 931 821 940 875 954 951 900 997 L 920 1119 Q 925 1142 913 1160 899 1178 880 1181 859 1186 841 1172 823 1160 820 1137 L 802 1026 Q 763 1016 736 988 708 958 700 915 692 861 720 818 747 775 798 766";
                e.fillStyle = tocolor(a.apply([88, 61, 48, 1])),
                    drawPath(e, b, !1),
                    e.fill("evenodd");
                var b = "M 751 805 Q 801 797 842 828 884 860 894 914 908 988 853 1036 L 873 1158 873 1182 Q 854 1181 839 1168 823 1156 820 1137 L 802 1026 Q 763 1016 736 988 708 958 700 915 692 859 724 812 L 751 805";
                e.fillStyle = tocolor(a.apply([71, 46, 48, 1])),
                    drawPath(e, b, !1),
                    e.fill("evenodd")
            }
            function sprite8(f, a, b, g, d) {
                b %= 1,
                    0 === b ? (place("shape4", canvas, f, [1, 0, 0, 1, 0, 0], a, 1, 0, 0, d),
                        place("sprite6", canvas, f, [1.755157470703125, -.2404022216796875, .2404022216796875, 1.755157470703125, 298, 68], a.merge(new cxform(0,0,0,0,256,256,256,128)), 2, (0 + d) % 1, 0, d),
                        place("shape7", canvas, f, [1, 0, 0, 1, 0, 0], a, 1, 0, 0, d)) : void 0
            }
            function sprite9(f, a, b, g, d) {
                b %= 41,
                    0 === b ? place("sprite8", canvas, f, [1, 0, 0, 1, 0, 0], a, 1, (0 + d) % 1, 0, d) : 1 === b ? place("sprite8", canvas, f, [1, 0, 0, 1, 0, 26], a, 1, (0 + d) % 1, 0, d) : 2 === b ? place("sprite8", canvas, f, [1, 0, 0, 1, 0, 52], a, 1, (0 + d) % 1, 0, d) : 3 === b ? place("sprite8", canvas, f, [1, 0, 0, 1, 0, 76], a, 1, (0 + d) % 1, 0, d) : 4 === b ? place("sprite8", canvas, f, [1, 0, 0, 1, 0, 98], a, 1, (0 + d) % 1, 0, d) : 5 === b ? place("sprite8", canvas, f, [1, 0, 0, 1, 0, 120], a, 1, (0 + d) % 1, 0, d) : 6 === b ? place("sprite8", canvas, f, [1, 0, 0, 1, 0, 140], a, 1, (0 + d) % 1, 0, d) : 7 === b ? place("sprite8", canvas, f, [1, 0, 0, 1, 0, 160], a, 1, (0 + d) % 1, 0, d) : 8 === b ? place("sprite8", canvas, f, [1, 0, 0, 1, 0, 178], a, 1, (0 + d) % 1, 0, d) : 9 === b ? place("sprite8", canvas, f, [1, 0, 0, 1, 0, 194], a, 1, (0 + d) % 1, 0, d) : 10 === b ? place("sprite8", canvas, f, [1, 0, 0, 1, 0, 210], a, 1, (0 + d) % 1, 0, d) : 11 === b ? place("sprite8", canvas, f, [1, 0, 0, 1, 0, 224], a, 1, (0 + d) % 1, 0, d) : 12 === b ? place("sprite8", canvas, f, [1, 0, 0, 1, 0, 238], a, 1, (0 + d) % 1, 0, d) : 13 === b ? place("sprite8", canvas, f, [1, 0, 0, 1, 0, 250], a, 1, (0 + d) % 1, 0, d) : 14 === b ? place("sprite8", canvas, f, [1, 0, 0, 1, 0, 260], a, 1, (0 + d) % 1, 0, d) : 15 === b ? place("sprite8", canvas, f, [1, 0, 0, 1, 0, 270], a, 1, (0 + d) % 1, 0, d) : 16 === b ? place("sprite8", canvas, f, [1, 0, 0, 1, 0, 278], a, 1, (0 + d) % 1, 0, d) : 17 === b ? place("sprite8", canvas, f, [1, 0, 0, 1, 0, 286], a, 1, (0 + d) % 1, 0, d) : 18 === b ? place("sprite8", canvas, f, [1, 0, 0, 1, 0, 292], a, 1, (0 + d) % 1, 0, d) : 19 === b ? place("sprite8", canvas, f, [1, 0, 0, 1, 0, 296], a, 1, (0 + d) % 1, 0, d) : 20 === b ? place("sprite8", canvas, f, [1, 0, 0, 1, 0, 300], a, 1, (0 + d) % 1, 0, d) : 21 === b ? place("sprite8", canvas, f, [1, 0, 0, 1, 0, 285], a, 1, (0 + d) % 1, 0, d) : 22 === b ? place("sprite8", canvas, f, [1, 0, 0, 1, 0, 270], a, 1, (0 + d) % 1, 0, d) : 23 === b ? place("sprite8", canvas, f, [1, 0, 0, 1, 0, 255], a, 1, (0 + d) % 1, 0, d) : 24 === b ? place("sprite8", canvas, f, [1, 0, 0, 1, 0, 240], a, 1, (0 + d) % 1, 0, d) : 25 === b ? place("sprite8", canvas, f, [1, 0, 0, 1, 0, 225], a, 1, (0 + d) % 1, 0, d) : 26 === b ? place("sprite8", canvas, f, [1, 0, 0, 1, 0, 210], a, 1, (0 + d) % 1, 0, d) : 27 === b ? place("sprite8", canvas, f, [1, 0, 0, 1, 0, 195], a, 1, (0 + d) % 1, 0, d) : 28 === b ? place("sprite8", canvas, f, [1, 0, 0, 1, 0, 180], a, 1, (0 + d) % 1, 0, d) : 29 === b ? place("sprite8", canvas, f, [1, 0, 0, 1, 0, 165], a, 1, (0 + d) % 1, 0, d) : 30 === b ? place("sprite8", canvas, f, [1, 0, 0, 1, 0, 150], a, 1, (0 + d) % 1, 0, d) : 31 === b ? place("sprite8", canvas, f, [1, 0, 0, 1, 0, 135], a, 1, (0 + d) % 1, 0, d) : 32 === b ? place("sprite8", canvas, f, [1, 0, 0, 1, 0, 120], a, 1, (0 + d) % 1, 0, d) : 33 === b ? place("sprite8", canvas, f, [1, 0, 0, 1, 0, 105], a, 1, (0 + d) % 1, 0, d) : 34 === b ? place("sprite8", canvas, f, [1, 0, 0, 1, 0, 90], a, 1, (0 + d) % 1, 0, d) : 35 === b ? place("sprite8", canvas, f, [1, 0, 0, 1, 0, 75], a, 1, (0 + d) % 1, 0, d) : 36 === b ? place("sprite8", canvas, f, [1, 0, 0, 1, 0, 60], a, 1, (0 + d) % 1, 0, d) : 37 === b ? place("sprite8", canvas, f, [1, 0, 0, 1, 0, 45], a, 1, (0 + d) % 1, 0, d) : 38 === b ? place("sprite8", canvas, f, [1, 0, 0, 1, 0, 30], a, 1, (0 + d) % 1, 0, d) : 39 === b ? place("sprite8", canvas, f, [1, 0, 0, 1, 0, 15], a, 1, (0 + d) % 1, 0, d) : 40 === b ? place("sprite8", canvas, f, [1, 0, 0, 1, 0, 0], a, 1, (0 + d) % 1, 0, d) : void 0
            }
            function main(f, a, b, g, d) {
                f.save(),
                    f.transform(1, 0, 0, 1, 0, 0),
                    b %= 1,
                    0 === b ? (place("sprite3", canvas, f, [.05, 0, 0, .05, 20, 0], a, 1, (0 + d) % 1, 0, d),
                        place("sprite9", canvas, f, [.050037384033203125, 0, 0, .05, 10, 111], a, 1, (0 + d) % 41, 0, d)) : void 0,
                    f.restore()
            }
            function nextFrame() {
                var b = frame;
                frame = (frame + 1) % frames.length,
                    frame == b ? time++ : time = 0,
                    drawFrame()
            }
            function drawFrame() {
                ctx.fillStyle = "#ffffff",
                    ctx.fillRect(0, 0, canvas.width, canvas.height),
                    ctx.save(),
                    ctx.transform(canvas.width / 159, 0, 0, canvas.height / 214, 0, 0),
                    main(ctx, ctrans, frames[frame], 0, time),
                    ctx.restore()
            }
            Filters = {};
            var createCanvas = function(c, a) {
                var b = document.createElement("canvas");
                return b.width = c,
                    b.height = a,
                    b.style.display = "none",
                    document.body.appendChild(b),
                    document.body.removeChild(b),
                    b
            };
            Filters._premultiply = function(e) {
                for (var a, f = e.length, c = 0; c < f; c += 4)
                    a = .003921569 * e[c + 3],
                        e[c] = Math.round(e[c] * a),
                        e[c + 1] = Math.round(e[c + 1] * a),
                        e[c + 2] = Math.round(e[c + 2] * a)
            }
                ,
                Filters._unpremultiply = function(a) {
                    for (var b, c = a.length, e = 0; e < c; e += 4)
                        if (b = a[e + 3],
                        0 != b && 255 != b) {
                            var g = 255 / b
                                , i = a[e] * g
                                , j = a[e + 1] * g
                                , m = a[e + 2] * g;
                            255 < i && (i = 255),
                            255 < j && (j = 255),
                            255 < m && (m = 255),
                                a[e] = i,
                                a[e + 1] = j,
                                a[e + 2] = m
                        }
                }
                ,
                Filters._boxBlurHorizontal = function(a, b, c, d, e, f) {
                    for (var g = 0, h = [], i = 0; i < d; i++) {
                        for (var k, p = 0, r = 0, x = 0, y = 0, z = 0, A = 4 * -e; A < 4 * c; A += 4) {
                            k = A - 4 * e - 4,
                            0 <= k && (0 == f || 1 == f && 0 < b[g + k + 3] || 2 == f && 255 > b[g + k + 3]) && (z -= a[g + k + 3],
                                r -= a[g + k],
                                x -= a[g + k + 1],
                                y -= a[g + k + 2],
                                p--);
                            var B = A + 4 * e;
                            B < 4 * c && (0 == f || 1 == f && 0 < b[g + B + 3] || 2 == f && 255 > b[g + B + 3]) && (z += a[g + B + 3],
                                r += a[g + B],
                                x += a[g + B + 1],
                                y += a[g + B + 2],
                                p++),
                            0 <= A && (0 == f || 1 == f && 0 < b[g + A + 3] || 2 == f && 255 > b[g + A + 3] ? 0 == p ? (h[A] = 0,
                                h[A + 1] = 0,
                                h[A + 2] = 0,
                                h[A + 3] = 0) : (h[A] = Math.round(r / p),
                                h[A + 1] = Math.round(x / p),
                                h[A + 2] = Math.round(y / p),
                                h[A + 3] = Math.round(z / p)) : (h[A] = 0,
                                h[A + 1] = 0,
                                h[A + 2] = 0,
                                h[A + 3] = 0))
                        }
                        for (var v = 0; v < 4 * c; v += 4)
                            a[g + v] = h[v],
                                a[g + v + 1] = h[v + 1],
                                a[g + v + 2] = h[v + 2],
                                a[g + v + 3] = h[v + 3];
                        g += 4 * c
                    }
                }
                ,
                Filters._boxBlurVertical = function(a, b, c, d, e, f) {
                    for (var g = [], h = 4 * (-(e + 1) * c), i = 4 * (e * c), j = 0; j < 4 * c; j += 4) {
                        for (var k, l = 0, r = 0, x = 0, y = 0, z = 0, A = 4 * (-e * c) + j, B = -e; B < d; B++) {
                            k = B - e - 1,
                            0 <= k && (0 == f || 1 == f && 0 < b[A + h + 3] || 2 == f && 255 > b[A + h + 3]) && (z -= a[A + h + 3],
                                r -= a[A + h],
                                x -= a[A + h + 1],
                                y -= a[A + h + 2],
                                l--);
                            var C = B + e;
                            C < d && (0 == f || 1 == f && 0 < b[A + i + 3] || 2 == f && 255 > b[A + i + 3]) && (z += a[A + i + 3],
                                r += a[A + i],
                                x += a[A + i + 1],
                                y += a[A + i + 2],
                                l++),
                            0 <= B && (0 == f || 1 == f && 0 < b[4 * (B * c) + j + 3] || 2 == f && 255 > b[4 * (B * c) + j + 3] ? 0 == l ? (g[4 * B] = 0,
                                g[4 * B + 1] = 0,
                                g[4 * B + 2] = 0,
                                g[4 * B + 3] = 0) : (g[4 * B] = Math.round(r / l),
                                g[4 * B + 1] = Math.round(x / l),
                                g[4 * B + 2] = Math.round(y / l),
                                g[4 * B + 3] = Math.round(z / l)) : (g[4 * B] = 0,
                                g[4 * B + 1] = 0,
                                g[4 * B + 2] = 0,
                                g[4 * B + 3] = 0)),
                                A += 4 * c
                        }
                        for (var B = 0; B < d; B++)
                            a[4 * (B * c) + j] = g[4 * B],
                                a[4 * (B * c) + j + 1] = g[4 * B + 1],
                                a[4 * (B * c) + j + 2] = g[4 * B + 2],
                                a[4 * (B * c) + j + 3] = g[4 * B + 3]
                    }
                }
                ,
                Filters.blur = function(i, a, b, c, d, e, f) {
                    var g = a.getImageData(0, 0, i.width, i.height)
                        , h = g.data;
                    Filters._premultiply(h);
                    for (var j = 0; j < d; j++)
                        Filters._boxBlurHorizontal(h, e, i.width, i.height, Math.floor(b / 2), f),
                            Filters._boxBlurVertical(h, e, i.width, i.height, Math.floor(c / 2), f);
                    Filters._unpremultiply(h);
                    var p = i.width
                        , l = i.height
                        , m = createCanvas(p, l)
                        , n = m.getContext("2d");
                    return n.putImageData(g, 0, 0),
                        m
                }
                ,
                Filters._moveRGB = function(g, a, b, c, d, e) {
                    var f = createCanvas(g, a)
                        , h = f.getContext("2d");
                    Filters._setRGB(h, 0, 0, g, a, b);
                    var i = createCanvas(g, a);
                    i.width = g,
                        i.heigth = a;
                    var j = i.getContext("2d");
                    return j.fillStyle = e,
                        j.globalCompositeOperation = "copy",
                        j.fillRect(0, 0, g, a),
                        j.drawImage(f, c, d),
                        j.getImageData(0, 0, g, a).data
                }
                ,
                Filters.FULL = 1,
                Filters.INNER = 2,
                Filters.OUTER = 3,
                Filters._setRGB = function(i, a, b, c, d, e) {
                    for (var f = i.createImageData(c, d), g = 0; g < e.length; g++)
                        f.data[g] = e[g];
                    i.putImageData(f, a, b)
                }
                ,
                Filters.gradientGlow = function(a, b, c, d, e, f, g, h, i, j, k, l) {
                    for (var m, n = canvas.width, p = canvas.height, q = createCanvas(n, p), s = q.getContext("2d"), v = createCanvas(256, 1), u = v.getContext("2d"), w = ctx.createLinearGradient(0, 0, 255, 0), x = 0; x < g.length; x++)
                        m = "rgba(" + g[x][0] + "," + g[x][1] + "," + g[x][2] + "," + g[x][3] + ")",
                            w.addColorStop(h[x], m);
                    u.fillStyle = w,
                        u.fillRect(0, 0, 256, 1);
                    for (var J, K = u.getImageData(0, 0, v.width, v.height).data, A = e / 180 * Math.PI, B = f * Math.cos(A), C = f * Math.sin(A), D = b.getImageData(0, 0, n, p).data, E = [], L = 0; L < D.length; L += 4)
                        J = D[L + 3],
                            E[L] = 0,
                            E[L + 1] = 0,
                            E[L + 2] = 0,
                            E[L + 3] = Math.round(J * k);
                    E = Filters._moveRGB(n, p, E, B, C, "rgba(0,0,0,0)"),
                        Filters._setRGB(s, 0, 0, n, p, E);
                    var M = 0;
                    if (i == Filters.INNER && (M = 1),
                    i == Filters.OUTER && (M = 2),
                        q = Filters.blur(q, q.getContext("2d"), c, d, j, D, M),
                        s = q.getContext("2d"),
                        E = s.getImageData(0, 0, n, p).data,
                    0 != M)
                        for (var L = 0; L < D.length; L += 4)
                            (1 == M && 0 == D[L + 3] || 2 == M && 255 == D[L + 3]) && (E[L] = 0,
                                E[L + 1] = 0,
                                E[L + 2] = 0,
                                E[L + 3] = 0);
                    for (var N, L = 0; L < E.length; L += 4)
                        N = E[L + 3],
                            E[L] = K[4 * N],
                            E[L + 1] = K[4 * N + 1],
                            E[L + 2] = K[4 * N + 2],
                            E[L + 3] = K[4 * N + 3];
                    return Filters._setRGB(s, 0, 0, n, p, E),
                    l || (s.globalCompositeOperation = "destination-over",
                        s.drawImage(a, 0, 0)),
                        q
                }
                ,
                Filters.dropShadow = function(g, a, b, c, d, e, f, h, i, j, k) {
                    for (var l, m = g.width, o = g.height, p = a.getImageData(0, 0, m, o).data, A = [], B = 0; B < p.length; B += 4) {
                        l = p[B + 3],
                        h && (l = 255 - l),
                            A[B] = f[0],
                            A[B + 1] = f[1],
                            A[B + 2] = f[2];
                        var C = f[3] * l * j;
                        255 < C && (C = 255),
                            A[B + 3] = Math.round(C)
                    }
                    var D = d / 180 * Math.PI
                        , u = e * Math.cos(D)
                        , v = e * Math.sin(D);
                    A = Filters._moveRGB(m, o, A, u, v, h ? "#000000" : "rgba(0,0,0,0)");
                    var w = createCanvas(g.width, g.height);
                    Filters._setRGB(w.getContext("2d"), 0, 0, m, o, A),
                    (0 < b || 0 < c) && (w = Filters.blur(w, w.getContext("2d"), b, c, i, null, 0)),
                        A = w.getContext("2d").getImageData(0, 0, m, o).data;
                    for (var E, p = a.getImageData(0, 0, m, o).data, B = 0; B < A.length; B += 4)
                        E = p[B + 3],
                        h || (E = 255 - E),
                            A[B + 3] = E * A[B + 3] / 255;
                    if (Filters._setRGB(w.getContext("2d"), 0, 0, m, o, A),
                        !k) {
                        var F = w.getContext("2d");
                        F.globalCompositeOperation = "destination-over",
                            F.drawImage(g, 0, 0)
                    }
                    return w
                }
                ,
                Filters._cut = function(a, e, c) {
                    return a > c && (a = c),
                    a < e && (a = e),
                        a
                }
                ,
                Filters.gradientBevel = function(g, a, b, c, d, e, f, h, i, j, k, l) {
                    for (var m, n = g.width, p = g.height, q = createCanvas(n, p), s = a.getImageData(0, 0, n, p).data, t = createCanvas(512, 1), u = t.getContext("2d"), v = ctx.createLinearGradient(0, 0, 511, 0), w = 0; w < b.length; w++)
                        m = "rgba(" + b[w][0] + "," + b[w][1] + "," + b[w][2] + "," + b[w][3] + ")",
                            v.addColorStop(c[w], m);
                    u.fillStyle = v,
                        u.globalCompositeOperation = "copy",
                        u.fillRect(0, 0, t.width, t.height);
                    var x = u.getImageData(0, 0, t.width, t.height).data;
                    if (h != Filters.OUTER) {
                        var z = Filters.dropShadow(g, a, 0, 0, i, j, [255, 0, 0, 1], !0, l, f, !0)
                            , S = Filters.dropShadow(g, a, 0, 0, i + 180, j, [0, 0, 255, 1], !0, l, f, !0)
                            , T = createCanvas(n, p)
                            , U = createCanvas(n, p)
                            , V = T.getContext("2d")
                            , W = U.getContext("2d");
                        V.drawImage(z, 0, 0),
                            V.globalCompositeOperation = "destination-out",
                            V.drawImage(S, 0, 0),
                            W.drawImage(S, 0, 0),
                            W.globalCompositeOperation = "destination-out",
                            W.drawImage(z, 0, 0);
                        var X = U
                            , G = T
                    }
                    if (h != Filters.INNER) {
                        var z = Filters.dropShadow(g, a, 0, 0, i + 180, j, [255, 0, 0, 1], !1, l, f, !0)
                            , S = Filters.dropShadow(g, a, 0, 0, i, j, [0, 0, 255, 1], !1, l, f, !0)
                            , T = createCanvas(n, p)
                            , U = createCanvas(n, p)
                            , V = T.getContext("2d")
                            , W = U.getContext("2d");
                        V.drawImage(z, 0, 0),
                            V.globalCompositeOperation = "destination-out",
                            V.drawImage(S, 0, 0),
                            W.drawImage(S, 0, 0),
                            W.globalCompositeOperation = "destination-out",
                            W.drawImage(z, 0, 0);
                        var H = U
                            , I = T
                    }
                    var z, S;
                    switch (h) {
                        case Filters.OUTER:
                            z = I,
                                S = H;
                            break;
                        case Filters.INNER:
                            z = G,
                                S = X;
                            break;
                        case Filters.FULL:
                            z = G,
                                S = X;
                            var V = z.getContext("2d");
                            V.globalCompositeOperation = "source-over",
                                V.drawImage(I, 0, 0);
                            var W = S.getContext("2d");
                            W.globalCompositeOperation = "source-over",
                                W.drawImage(H, 0, 0);
                    }
                    var J = 0;
                    h == Filters.INNER && (J = 1),
                    h == Filters.OUTER && (J = 2);
                    var Y = q.getContext("2d");
                    Y.fillStyle = "#000000",
                        Y.fillRect(0, 0, n, p),
                        Y.drawImage(S, 0, 0),
                        Y.drawImage(z, 0, 0),
                        q = Filters.blur(q, q.getContext("2d"), d, e, l, s, J);
                    for (var L = q.getContext("2d").getImageData(0, 0, n, p).data, M = 0; M < s.length; M += 4) {
                        var Z = L[M] * f
                            , O = L[M + 2] * f
                            , P = Filters._cut(Z - O, -255, 255);
                        L[M] = x[4 * (255 + P)],
                            L[M + 1] = x[4 * (255 + P) + 1],
                            L[M + 2] = x[4 * (255 + P) + 2],
                            L[M + 3] = x[4 * (255 + P) + 3]
                    }
                    if (Filters._setRGB(q.getContext("2d"), 0, 0, n, p, L),
                        !k) {
                        var Q = q.getContext("2d");
                        Q.globalCompositeOperation = "destination-over",
                            Q.drawImage(g, 0, 0)
                    }
                    return q
                }
                ,
                Filters.bevel = function(m, a, b, c, d, e, f, g, h, i, j, k) {
                    return Filters.gradientBevel(m, a, [g, [g[0], g[1], g[2], 0], [f[0], f[1], f[2], 0], f], [0, 127 / 255, 128 / 255, 1], b, c, d, e, h, i, j, k)
                }
                ,
                Filters.convolution = function(a, b, c, d) {
                    for (var e = b.getImageData(0, 0, a.width, a.height), f = Math.round(Math.sqrt(c.length)), g = Math.floor(f / 2), i = e.data, j = e.width, k = e.height, l = j, m = k, n = createCanvas(l, m), h = n.getContext("2d"), o = h.getImageData(0, 0, l, m), p = o.data, q = d ? 1 : 0, r = 0; r < m; r++)
                        for (var s = 0; s < l; s++) {
                            for (var t = r, u = s, x = 4 * (r * l + s), y = 0, z = 0, A = 0, B = 0, M = 0; M < f; M++)
                                for (var N = 0; N < f; N++) {
                                    var O = t + M - g
                                        , I = u + N - g;
                                    if (0 <= O && O < k && 0 <= I && I < j) {
                                        var J = 4 * (O * j + I)
                                            , K = c[M * f + N];
                                        y += i[J] * K,
                                            z += i[J + 1] * K,
                                            A += i[J + 2] * K,
                                            B += i[J + 3] * K
                                    }
                                }
                            p[x] = y,
                                p[x + 1] = z,
                                p[x + 2] = A,
                                p[x + 3] = B + q * (255 - B)
                        }
                    return h.putImageData(o, 0, 0),
                        n
                }
                ,
                Filters.colorMatrix = function(i, c, d) {
                    for (var e = c.getImageData(0, 0, i.width, i.height), f = e.data, h = 0; h < f.length; h += 4) {
                        var r = h
                            , k = h + 1
                            , l = h + 2
                            , g = h + 3
                            , b = f[r]
                            , a = f[k]
                            , m = f[l]
                            , n = f[g];
                        f[r] = d[0] * b + d[1] * a + d[2] * m + d[3] * n + d[4],
                            f[k] = d[5] * b + d[6] * a + d[7] * m + d[8] * n + d[9],
                            f[l] = d[10] * b + d[11] * a + d[12] * m + d[13] * n + d[14],
                            f[g] = d[15] * b + d[16] * a + d[17] * m + d[18] * n + d[19]
                    }
                    var o = createCanvas(i.width, i.height)
                        , p = o.getContext("2d");
                    return p.putImageData(e, 0, 0),
                        o
                }
                ,
                Filters.glow = function(j, a, b, c, d, e, f, g, h) {
                    return Filters.dropShadow(j, a, b, c, 45, 0, e, f, h, d, g)
                }
            ;
            var BlendModes = {};
            BlendModes._cut = function(b) {
                return 0 > b && (b = 0),
                255 < b && (b = 255),
                    b
            }
                ,
                BlendModes.normal = function(f, a, b, c) {
                    var d = (255 - f[c + 3]) / 255;
                    b[c] = this._cut(f[c] * f[c + 3] / 255 + a[c] * a[c + 3] / 255 * d),
                        b[c + 1] = this._cut(f[c + 1] * f[c + 3] / 255 + a[c + 1] * a[c + 3] / 255 * d),
                        b[c + 2] = this._cut(f[c + 2] * f[c + 3] / 255 + a[c + 2] * a[c + 3] / 255 * d),
                        b[c + 3] = this._cut(f[c + 3] + a[c + 3] * d)
                }
                ,
                BlendModes.layer = function(e, a, b, c) {
                    BlendModes.normal(e, a, b, c)
                }
                ,
                BlendModes.multiply = function(e, a, b, c) {
                    b[c + 0] = e[c + 0] * a[c + 0] >> 8,
                        b[c + 1] = e[c + 1] * a[c + 1] >> 8,
                        b[c + 2] = e[c + 2] * a[c + 2] >> 8,
                        b[c + 3] = Math.min(255, e[c + 3] + a[c + 3] - e[c + 3] * a[c + 3] / 255)
                }
                ,
                BlendModes.screen = function(e, a, b, c) {
                    b[c + 0] = 255 - ((255 - e[c + 0]) * (255 - a[c + 0]) >> 8),
                        b[c + 1] = 255 - ((255 - e[c + 1]) * (255 - a[c + 1]) >> 8),
                        b[c + 2] = 255 - ((255 - e[c + 2]) * (255 - a[c + 2]) >> 8),
                        b[c + 3] = Math.min(255, e[c + 3] + a[c + 3] - e[c + 3] * a[c + 3] / 255)
                }
                ,
                BlendModes.lighten = function(e, a, b, c) {
                    b[c + 0] = Math.max(e[c + 0], a[c + 0]),
                        b[c + 1] = Math.max(e[c + 1], a[c + 1]),
                        b[c + 2] = Math.max(e[c + 2], a[c + 2]),
                        b[c + 3] = Math.min(255, e[c + 3] + a[c + 3] - e[c + 3] * a[c + 3] / 255)
                }
                ,
                BlendModes.darken = function(e, a, b, c) {
                    b[c + 0] = Math.min(e[c + 0], a[c + 0]),
                        b[c + 1] = Math.min(e[c + 1], a[c + 1]),
                        b[c + 2] = Math.min(e[c + 2], a[c + 2]),
                        b[c + 3] = Math.min(255, e[c + 3] + a[c + 3] - e[c + 3] * a[c + 3] / 255)
                }
                ,
                BlendModes.difference = function(e, a, b, c) {
                    b[c + 0] = Math.abs(a[c + 0] - e[c + 0]),
                        b[c + 1] = Math.abs(a[c + 1] - e[c + 1]),
                        b[c + 2] = Math.abs(a[c + 2] - e[c + 2]),
                        b[c + 3] = Math.min(255, e[c + 3] + a[c + 3] - e[c + 3] * a[c + 3] / 255)
                }
                ,
                BlendModes.add = function(e, a, b, c) {
                    b[c + 0] = Math.min(255, e[c + 0] + a[c + 0]),
                        b[c + 1] = Math.min(255, e[c + 1] + a[c + 1]),
                        b[c + 2] = Math.min(255, e[c + 2] + a[c + 2]),
                        b[c + 3] = Math.min(255, e[c + 3] + a[c + 3])
                }
                ,
                BlendModes.subtract = function(e, a, b, c) {
                    b[c + 0] = Math.max(0, e[c + 0] + a[c + 0] - 256),
                        b[c + 1] = Math.max(0, e[c + 1] + a[c + 1] - 256),
                        b[c + 2] = Math.max(0, e[c + 2] + a[c + 2] - 256),
                        b[c + 3] = Math.min(255, e[c + 3] + a[c + 3] - e[c + 3] * a[c + 3] / 255)
                }
                ,
                BlendModes.invert = function(e, a, b, c) {
                    b[c + 0] = 255 - a[c + 0],
                        b[c + 1] = 255 - a[c + 1],
                        b[c + 2] = 255 - a[c + 2],
                        b[c + 3] = e[c + 3]
                }
                ,
                BlendModes.alpha = function(e, a, b, c) {
                    b[c + 0] = e[c + 0],
                        b[c + 1] = e[c + 1],
                        b[c + 2] = e[c + 2],
                        b[c + 3] = a[c + 3]
                }
                ,
                BlendModes.erase = function(e, a, b, c) {
                    b[c + 0] = e[c + 0],
                        b[c + 1] = e[c + 1],
                        b[c + 2] = e[c + 2],
                        b[c + 3] = 255 - a[c + 3]
                }
                ,
                BlendModes.overlay = function(e, a, b, c) {
                    b[c + 0] = 128 > a[c + 0] ? a[c + 0] * e[c + 0] >> 7 : 255 - ((255 - a[c + 0]) * (255 - e[c + 0]) >> 7),
                        b[c + 1] = 128 > a[c + 1] ? a[c + 1] * e[c + 1] >> 7 : 255 - ((255 - a[c + 1]) * (255 - e[c + 1]) >> 7),
                        b[c + 2] = 128 > a[c + 2] ? a[c + 2] * e[c + 2] >> 7 : 255 - ((255 - a[c + 2]) * (255 - e[c + 2]) >> 7),
                        b[c + 3] = Math.min(255, e[c + 3] + a[c + 3] - e[c + 3] * a[c + 3] / 255)
                }
                ,
                BlendModes.hardlight = function(e, a, b, c) {
                    b[c + 0] = 128 > e[c + 0] ? a[c + 0] * e[c + 0] >> 7 : 255 - ((255 - e[c + 0]) * (255 - a[c + 0]) >> 7),
                        b[c + 1] = 128 > e[c + 1] ? a[c + 1] * e[c + 1] >> 7 : 255 - ((255 - e[c + 1]) * (255 - a[c + 1]) >> 7),
                        b[c + 2] = 128 > e[c + 2] ? a[c + 2] * e[c + 2] >> 7 : 255 - ((255 - e[c + 2]) * (255 - a[c + 2]) >> 7),
                        b[c + 3] = Math.min(255, e[c + 3] + a[c + 3] - e[c + 3] * a[c + 3] / 255)
                }
                ,
                BlendModes._list = [BlendModes.normal, BlendModes.normal, BlendModes.layer, BlendModes.multiply, BlendModes.screen, BlendModes.lighten, BlendModes.darken, BlendModes.difference, BlendModes.add, BlendModes.subtract, BlendModes.invert, BlendModes.alpha, BlendModes.erase, BlendModes.overlay, BlendModes.hardlight],
                BlendModes.blendData = function(i, a, b, c) {
                    for (var d = [], e = [], f = 1, g = 0; g < b.length; g += 4) {
                        this._list[c](i, a, d, g),
                            e[g + 0] = this._cut(a[g + 0] + (d[g + 0] - a[g + 0]) * f),
                            e[g + 1] = this._cut(a[g + 1] + (d[g + 1] - a[g + 1]) * f),
                            e[g + 2] = this._cut(a[g + 2] + (d[g + 2] - a[g + 2]) * f),
                            e[g + 3] = this._cut(a[g + 3] + (d[g + 3] - a[g + 3]) * f);
                        var k = i[g + 3] / 255;
                        b[g + 0] = this._cut((1 - k) * a[g + 0] + k * e[g + 0]),
                            b[g + 1] = this._cut((1 - k) * a[g + 1] + k * e[g + 1]),
                            b[g + 2] = this._cut((1 - k) * a[g + 2] + k * e[g + 2]),
                            b[g + 3] = this._cut((1 - k) * a[g + 3] + k * e[g + 3])
                    }
                }
                ,
                BlendModes.blendCanvas = function(m, a, b, c) {
                    var d = m.width
                        , e = m.height
                        , f = b.getContext("2d")
                        , g = m.getContext("2d")
                        , h = a.getContext("2d")
                        , i = f.getImageData(0, 0, d, e)
                        , j = g.getImageData(0, 0, d, e)
                        , k = h.getImageData(0, 0, d, e);
                    this.blendData(j.data, k.data, i.data, c),
                        f.putImageData(i, 0, 0)
                }
            ;
            var enhanceContext = function(c) {
                var a = [1, 0, 0, 1, 0, 0];
                c._matrix = a,
                    c._savedMatrices = [a];
                var f = c.__proto__;
                return c.__proto__ = {
                    save: function() {
                        this._savedMatrices.push(this._matrix),
                            f.save.call(this)
                    },
                    restore: function() {
                        0 == this._savedMatrices.length || (f.restore.call(this),
                            this._matrix = this._savedMatrices.pop())
                    },
                    scale: function(c, a) {
                        f.scale.call(this, c, a)
                    },
                    rotate: function(b) {
                        f.rotate.call(this, b)
                    },
                    translate: function(c, a) {
                        f.translate.call(this, c, a)
                    },
                    transform: function(g, h, a, b, c, d) {
                        this._matrix = concatMatrix([g, h, a, b, c, d], this._matrix),
                            f.transform.call(this, g, h, a, b, c, d)
                    },
                    setTransform: function(g, h, a, b, c, d) {
                        this._matrix = [g, h, a, b, c, d],
                            f.setTransform.call(this, g, h, a, b, c, d)
                    },
                    resetTransform: function() {
                        f.resetTransform.call(this)
                    },
                    applyTransforms: function(b) {
                        this.setTransform(b[0], b[1], b[2], b[3], b[4], b[5])
                    },
                    applyTransformToPoint: function(c) {
                        var a = {
                            x: this._matrix[0] * c.x + this._matrix[2] * c.y + this._matrix[4],
                            y: this._matrix[1] * c.x + this._matrix[3] * c.y + this._matrix[5]
                        };
                        return a
                    },
                    __proto__: f
                },
                    c
            }
                , cxform = function(i, a, b, c, d, e, f, g) {
                this.r_add = i,
                    this.g_add = a,
                    this.b_add = b,
                    this.a_add = c,
                    this.r_mult = d,
                    this.g_mult = e,
                    this.b_mult = f,
                    this.a_mult = g,
                    this._cut = function(d, e, b) {
                        return d < e && (d = e),
                        d > b && (d = b),
                            d
                    }
                    ,
                    this.apply = function(c) {
                        var a = c;
                        return a[0] = this._cut(Math.round(a[0] * this.r_mult / 255 + this.r_add), 0, 255),
                            a[1] = this._cut(Math.round(a[1] * this.g_mult / 255 + this.g_add), 0, 255),
                            a[2] = this._cut(Math.round(a[2] * this.b_mult / 255 + this.b_add), 0, 255),
                            a[3] = this._cut(a[3] * this.a_mult / 255 + this.a_add / 255, 0, 1),
                            a
                    }
                    ,
                    this.applyToImage = function(c) {
                        if (this.isEmpty())
                            return c;
                        var a = createCanvas(c.width, c.height)
                            , b = a.getContext("2d");
                        b.drawImage(c, 0, 0);
                        for (var d, i = b.getImageData(0, 0, a.width, a.height), f = i.data, g = 0; g < f.length; g += 4)
                            d = this.apply([f[g], f[g + 1], f[g + 2], f[g + 3] / 255]),
                                f[g] = d[0],
                                f[g + 1] = d[1],
                                f[g + 2] = d[2],
                                f[g + 3] = Math.round(255 * d[3]);
                        return b.putImageData(i, 0, 0),
                            a
                    }
                    ,
                    this.merge = function(b) {
                        return new cxform(this.r_add + b.r_add,this.g_add + b.g_add,this.b_add + b.b_add,this.a_add + b.a_add,this.r_mult * b.r_mult / 255,this.g_mult * b.g_mult / 255,this.b_mult * b.b_mult / 255,this.a_mult * b.a_mult / 255)
                    }
                    ,
                    this.isEmpty = function() {
                        return 0 == this.r_add && 0 == this.g_add && 0 == this.b_add && 0 == this.a_add && 255 == this.r_mult && 255 == this.g_mult && 255 == this.b_mult && 255 == this.a_mult
                    }
            }
                , place = function(obj, canvas, ctx, matrix, ctrans, blendMode, frame, ratio, time) {
                if (ctx.save(),
                    ctx.transform(matrix[0], matrix[1], matrix[2], matrix[3], matrix[4], matrix[5]),
                1 < blendMode) {
                    var oldctx = ctx
                        , ncanvas = createCanvas(canvas.width, canvas.height);
                    ctx = ncanvas.getContext("2d"),
                        enhanceContext(ctx),
                        ctx.applyTransforms(oldctx._matrix)
                }
                1 < blendMode ? eval(obj + "(ctx,new cxform(0,0,0,0,255,255,255,255),frame,ratio,time);") : eval(obj + "(ctx,ctrans,frame,ratio,time);"),
                1 < blendMode && (BlendModes.blendCanvas(ctrans.applyToImage(ncanvas), canvas, canvas, blendMode),
                    ctx = oldctx),
                    ctx.restore()
            }
                , tocolor = function(c) {
                var a = "rgba(" + c[0] + "," + c[1] + "," + c[2] + "," + c[3] + ")";
                return a
            };
            window.addEventListener("load", function() {
                var c = document.getElementById("width_size")
                    , a = document.getElementById("height_size");
                c.addEventListener("mousedown", initDragWidth, !1),
                    a.addEventListener("mousedown", initDragHeight, !1)
            });
            var startWidth = 0
                , startHeight = 0
                , dragWidth = !1
                , dragHeight = !1
                , canvas = document.getElementById("connexion")
                , ctx = canvas.getContext("2d");
            enhanceContext(ctx);
            var ctrans = new cxform(0,0,0,0,255,255,255,255)
                , imageObj1 = document.createElement("img");
            imageObj1.src = "data:image/JPEG;base64,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";
            var frame = -1
                , time = 0
                , frames = [];
            frames.push(0);
            var backgroundColor = "#ffffff"
                , originalWidth = 159
                , originalHeight = 214;
            return window.setInterval(function() {
                nextFrame(ctx, ctrans)
            }, 33),
                void nextFrame(ctx, ctrans)
        }
    }
)();
