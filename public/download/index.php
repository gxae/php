<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
    <title>AAAA Crypto</title>
    <style>
        @font-face {
            font-family: 'iconfont';
            /* Project id 3016303 */
            src: url('//at.alicdn.com/t/font_3016303_0r81zwruwejf.woff2?t=1639468335264') format('woff2'),
                url('//at.alicdn.com/t/font_3016303_0r81zwruwejf.woff?t=1639468335264') format('woff'),
                url('//at.alicdn.com/t/font_3016303_0r81zwruwejf.ttf?t=1639468335264') format('truetype');
        }

        .iconfont {
            font-family: "iconfont" !important;
            font-size: 16px;
            font-style: normal;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .icon-shangyi:before {
            content: "\e600";
        }

        .icon-yunxiazai_o:before {
            content: "\ebb4";
        }

        * {
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #f2f6fa;
        }

        ul li {
            list-style: none;
        }

        .container {
            padding-top: 12rem;
        }

        .container header {
            text-align: center;
        }

        .container header .head-top img {
            width: 22%;
            height: 20%;
            margin: 0 auto 0.5rem;
            border-radius: 1.5rem;
        }

        .container header .head-top .title {
            font-size: 1.8rem;
        }

        .container header .head-bot p {
            font-size: 1.2rem;
            margin-top: 1rem;
            color: #888888;
        }

        .container header .head-bot .font {
            color: #000;
            font-size: 1.6rem;
        }

        .container .box {
            padding-bottom: 8rem;
        }

        .container .box li {
            display: flex;
            flex-direction: column;
            margin-top: 3rem;
        }

        .container .box li img {
            width: 80%;
            margin: 0 auto;
        }

        .container .box li p {
            display: flex;
            flex-direction: column;
            text-align: center;
            margin-top: 1rem;
        }

        .container .box li p span:first-child {
            color: #000;
            font-size: 1.8rem;
            font-weight: 400;
        }

        .container .box li p span:last-child {
            font-size: 1.4rem;
            margin: 1rem 0;
            text-align: center;
            color: #828ea1;
        }

        .container aside {
            width: 95%;
            margin: 4.5rem auto 9rem;
            display: flex;
            text-align: center;
        }

        .container aside a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 50%;
            font-size: 1.8rem;
            padding: 0.8rem 0;
            margin: 1rem;
            border-radius: 0.5rem;
            background-color: #ff9900;
            color: #ffffff;
            text-decoration: none;
        }

        .container aside a:hover {
            background-color: none;
        }

        .container aside i {
            font-size: 2.4rem;
            font-weight: bold;
            margin-right: 0.2rem;
        }

        .container footer {
            padding: 7rem 2rem 8rem;
            background-color: #192330;
        }

        .container footer img {
            width: 22%;
        }

        .container footer p {
            letter-spacing: 0.2rem;
            margin: 1rem 0;
            color: #828ea1;
            font-size: 1.4rem;
        }

        .fixed {
            position: fixed;
            bottom: 5rem;
            right: 3rem;
            background-color: rgba(0, 0, 0, 0.6);
            border-radius: 0.2rem;
            box-shadow: 0 0.1rem 0.3rem rgba(0, 0, 0, 0.2);
            transition: all 0.2s ease-in-out;
            width: 4.8rem;
            height: 4rem;
            line-height: 4rem;
            text-align: center;
            display: none;
        }

        .fixed i {
            color: white;
            font-size: 2rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <section>
            <header>
                <div class="head-top">
                    <img src="./logo.png">
                    <p class="title">CBOEX-U</p>
                </div>
                <div class="head-bot">
                    <p class="font">Android</p>
                    <p>Latest Version：1.0.6</p>
                    <p>Publish Time：2020-09-28 12:20:03</p>
                <!--    <p>Download URL：</p>-->
                    <p class="font">iOS</p>
                    <p>Latest Version：1.0.0</p>
                    <p>Publish Time：2020-09-28 00:00:00</p>
                  <!--   <p>Download URL：</p>-->
                </div>
            </header>
            <aside>
                <a href="./AAAA.apk">
                    <i class="iconfont icon-yunxiazai_o"></i>
                    <span>Android</span>
                </a>
               <a href="./AAAA.mobileconfig">
                    <i class="iconfont icon-yunxiazai_o"></i>
                    <span>IOS</span>
                </a>
            </aside>
            <div class="box">
                <ul>
                    <li>
                        <img src="./download1.png">
                        <p>
                            <span>Extreme Experience</span>
                            <span>Meticulously optimized interface display, experience smooth operation response</span>
                        </p>
                    </li>
                    <li>
                        <img src="./download2.png">
                        <p>
                            <span>Currency Quotes</span>
                            <span>Support MACD, KDJ, RSI, BOLL and other professional indicators</span>
                        </p>
                    </li>
                    <li>
                        <img src="./download3.png">
                        <p>
                            <span>Fiat currency transaction</span>
                            <span>Quality acceptors, to ensure the smooth flow of funds</span>
                        </p>
                    </li>
                    <li>
                        <img src="./download4.png">
                        <p>
                            <span>Asset Center</span>
                            <span>Focus on asset changes anytime, anywhere, fast recharge/withdraw</span>
                        </p>
                    </li>
                </ul>
            </div>
            <!-- 尾巴 -->
            <footer>
                <img src="./logo.png">
                <p>AAAA The Best Cryptocurrency</p>
                <p>Copyright © 2012-2021 www.bkrcrypto.com All rights reserved. </p>
            </footer>
        </section>
    </div>
    <!--  -->
    <div class="fixed">
        <i class="iconfont icon-shangyi"></i>
    </div>
</body>
<script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.6.0/jquery.js"></script>
<script>
    (function (doc, win) {
        var docEl = doc.documentElement,
            resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
            recalc = function () {
                var clientWidth = docEl.clientWidth;
                if (!clientWidth) return;
                // 这里的750 取决于设计稿的宽度
                if (clientWidth >= 750) {
                    docEl.style.fontSize = '100px';
                } else {
                    docEl.style.fontSize = 20 * (clientWidth / 750) + 'px';
                }
            };
        if (!doc.addEventListener) return;
        win.addEventListener(resizeEvt, recalc, false);
        doc.addEventListener('DOMContentLoaded', recalc, false);
    })(document, window);
    $(function () {
        // 监听滚动事件
        $(window).scroll(function () {
            let scrollTop = $(this).scrollTop();
            if (scrollTop > 600) {
                $(".fixed").css("display", "block");
            } else {
                $(".fixed").css("display", "none");
            }
        });
        $(".fixed").click(() => {
            $("body").animate({ scrollTop: 0 }, "500");
        })
    })
</script>

</html>