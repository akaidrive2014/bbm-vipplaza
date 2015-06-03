<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link href="<?php echo $this->baseTheme(); ?>line-promo.css" media="all" rel="stylesheet">
    <script async="" src="//www.google-analytics.com/analytics.js"></script>
    <script>
        (function (i, s, o, g, r, a, m) {
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

        ga('create', 'UA-46447361-9', 'auto');
        ga('send', 'pageview');

    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, user-scalable=yes">
    <meta name="HandheldFriendly" content="true">
    <meta name="apple-touch-fullscreen" content="YES">
    <link rel="icon" href="<?php echo $this->baseUrl(); ?>/images/favicon.ico" type="image/x-icon"/>
    <title>Line Vipplaza</title>
</head>

<body>
<div class="header-line">
    <div class="logo">
        <a class="logo-vip" href="http://www.vipplaza.com/"><img
                src="<?php echo $this->baseTheme(); ?>image/logo-vip.png" alt="vip plaza"></a>
        <a class="logo-line" href="http://www.line.vipplaza.com/"><img
                src="<?php echo $this->baseTheme(); ?>image/logo-line.png" alt="line shopping"></a>
    </div>
</div>

<div class="promo-content">
    <?php echo $content;?>
</div>

</body>
</html>