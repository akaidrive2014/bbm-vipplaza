<!DOCTYPE html>
<head>
    <link href="<?php echo $this -> baseTheme(); ?>line-promo-2.css" media="all" rel="stylesheet">
    <script async="" src="//www.google-analytics.com/analytics.js"></script>
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] ||
            function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o), m = s.getElementsByTagName(o)[0];
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
</head>

<body>
<div class="header-line">
    <div class="logo">
        <a class="logo-vip" href="http://www.vipplaza.co.id/"><img src="<?php echo $this -> baseTheme(); ?>image/logo-vip.png" alt="vip plaza"></a>
        <a class="logo-line" href="http://line.vipplaza.com/"><img src="<?php echo $this -> baseTheme(); ?>image/logo-line.png" alt="line shopping"></a>
    </div>
</div>

<div class="promo-content ">
    <a href="http://www.vipplaza.com/fcuk.html?utm_source=line_fcuk&utm_medium=microsite&utm_campaign=lineshopping&utm_term=fcuk">
        <img class="banner" src="<?php echo $this->baseTheme();?>image/ciel-940-240.jpg" alt="">
    </a>

    <div width="50px" align="center" style="margin-bottom:20px">
        <a href="http://line.me/ti/p/%40qbb5309i">
            <img height="36" border="0" alt="Friends Added" src="http://biz.line.naver.jp/line_business/img/btn/addfriends_en.png">
        </a>
    </div>
    <center>
        <h3>Periode: <?php echo $periode;?></h3>
    </center>
    <div class="content-line clearfix">
        <?php
        if(!empty($data)) {
            foreach ($data as $val) {
                $value = json_decode($val);
                $product_price='';
                if(!empty($value->special_price)){
                    //$product_price = $value->product_price-$value->product_special_price;
                }
                ?>
                <div class="product-line clearfix">
                    <?php $url_promo = "?utm_source=line&utm_medium=banner&utm_campaign=lineshopping";?>
                    <a href="<?php echo $this->baseUrl().'/product-html/'.$value->entity_id.'-'.Vipplaza::url_title($value->name);?>.html<?php echo $url_promo;?>" target="_blank">
                        <img src="<?php echo $value->gallery[0];?>" alt="<?php echo $value->name;?>" width="135" height="203">
                    </a>
                    <h4>
                        <strong>
                            <font color ="#333333 ">
                                <?php
                                $full_name = $value->name;

                                if(strlen($full_name)>30){
                                    $full_name = substr($value->name,0,25)."...";
                                }
                                echo $full_name;
                                ?>
                            </font></strong></h4>
                    <span class="old-price">IDR <?php echo number_format($value->price,0,'',',');?></span></br>
                    <span class="new-price">IDR <?php echo number_format($value->special_price,0,'',',');?></span>
                </div>
            <?php
            }
        }
        ?>
    </div>
    <a href="http://www.vipplaza.com/fcuk.html?utm_source=line_fcuk&utm_medium=microsite&utm_campaign=lineshopping&utm_term=fcuk"><span class="button">VIEW MORE COLLECTIONS</span></a>
</div>
</div>
<!-- Google Code for [Man] RM Tag 90 Days -->
<!-- Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. For instructions on adding this tag and more information on the above requirements, read the setup guide: google.com/ads/remarketingsetup -->
<script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 976024649;
    var google_conversion_label = "AKHkCO-k8hwQyeiz0QM";
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/976024649/?value=1.000000&amp;label=AKHkCO-k8hwQyeiz0QM&amp;guid=ON&amp;script=0"/>
    </div>
</noscript>

<!-- Google Code for All visitor(90days) -->
<!-- Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. For instructions on adding this tag and more information on the above requirements, read the setup guide: google.com/ads/remarketingsetup -->
<script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 976024649;
    var google_conversion_label = "cJLFCI_x4RsQyeiz0QM";
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/976024649/?value=1.00&amp;currency_code=USD&amp;label=cJLFCI_x4RsQyeiz0QM&amp;guid=ON&amp;script=0"/>
    </div>
</noscript>

<script>
    (function() {
        var _fbq = window._fbq || (window._fbq = []);
        if (!_fbq.loaded) {
            var fbds = document.createElement('script');
            fbds.async = true;
            fbds.src = '//connect.facebook.net/en_US/fbds.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(fbds, s);
            _fbq.loaded = true;
        }
        _fbq.push(['addPixelId', '264403483731848']);
    })();
    window._fbq = window._fbq || [];
    window._fbq.push(['track', 'PixelInitialized', {}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=264403483731848&amp;ev=NoScript" />
</noscript>

</body>
</html>