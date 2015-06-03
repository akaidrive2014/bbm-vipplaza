<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link href="<?php echo $this->baseTheme();?>line-promo.css" media="all" rel="stylesheet">
    <script async="" src="//www.google-analytics.com/analytics.js"></script><script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-46447361-9', 'auto');
        ga('send', 'pageview');

    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, user-scalable=yes">
    <meta name="HandheldFriendly" content="true">
    <meta name="apple-touch-fullscreen" content="YES">
    <link rel="icon" href="<?php echo $this->baseTheme();?>image/favicon.ico" type="image/x-icon"/>
    <title>Line Vipplaza</title>
    <style>
        .product-line img{
            max-width: 135px;
            max-height: 203px;
        }
    </style>
</head>

<body>
<div class="header-line">
    <div class="logo">
        <a class="logo-vip" href="http://www.vipplaza.com/"><img src="<?php echo $this->baseTheme();?>image/logo-vip.png" alt="vip plaza"></a>
        <a class="logo-line" href="http://line.vipplaza.com/"><img src="<?php echo $this->baseTheme();?>image/logo-line.png" alt="line shopping"></a>
    </div>
</div>

<div class="promo-content ">
    <a href="http://www.vipplaza.com/all-events/02030209/ciel.html?utm_source=line_ciel&utm_medium=microsite&utm_campaign=lineshopping&utm_term=ciel">
        <img class="banner" src="<?php echo $this->baseTheme();?>image/ciel-940-240.jpg" alt="Ciel Big Sale"></a>

    <center><h3>Periode: 10 - 21 November 2014</h3></center>
    <div class="content-line clearfix">
        <?php
        if(!empty($data)) {
            foreach ($data as $index => $value) {
                $product_price='';
                if(!empty($value->product_special_price)){
                    $product_price = $value->product_price-$value->product_special_price;
                }
                ?>
                <div class="product-line clearfix">
                    <a href="<?php echo $value->product_link;?>" target="_blank">
                        <img src="<?php echo $value->product_image_thumbnail;?>" alt="ZILDA">
                    </a>
                    <h4><strong><font color ="#333333 "><?php echo $value->product_name;?></font></strong></h4>
                    <span class="old-price">IDR <?php echo number_format($value->product_price,0,'',',');?></span></br>
                    <span class="new-price">IDR <?php echo number_format($product_price,0,'',',');?></span>
                </div>
            <?php
            }
        }
        ?>
        <?php /*
				<div class="product-line clearfix">
					<a href="http://www.vipplaza.com/ciel-zilda-48047.html?utm_source=line_ciel&utm_medium=microsite&utm_campaign=lineshopping&utm_term=ciel" target="_blank">
                        <img src="<?php echo $this->baseTheme();?>image/ciel-14.jpg" alt="ZILDA">
                    </a>
					<h4><strong><font color ="#333333 ">ZILDA</font></strong></h4>
					<span class="old-price">IDR 635,000</span></br>
					<span class="new-price">IDR 190,500</span>
				</div>
				<div class="product-line clearfix">
					<a href="http://www.vipplaza.com/ciel-fleuretta-48058.html?utm_source=line_ciel&utm_medium=microsite&utm_campaign=lineshopping&utm_term=ciels" target="_blank">
                        <img src="<?php echo $this->baseTheme();?>image/ciel-16.jpg" alt="Fleuretta">
                    </a>
					<h4><strong><font color ="#333333 ">FLEURETTA</font></strong></h4>
					<span class="old-price">IDR 465,000</span></br>
					<span class="new-price">IDR 139,500</span>
				</div>
				<div class="product-line clearfix">
					<a href="http://www.vipplaza.com/ciel-borrisa-48062.html?utm_source=line_ciel&utm_medium=microsite&utm_campaign=lineshopping&utm_term=ciel" target="_blank">
                        <img src="<?php echo $this->baseTheme();?>image/ciel-17.jpg" alt="BORISSA">
                    </a>
					<h4><strong><font color ="#333333 ">BORISSA</font></strong></h4>
					<span class="old-price">IDR 785,000</span></br>
					<span class="new-price">IDR 157,000</span>
				</div>
				<div class="product-line clearfix">
					<a href="http://www.vipplaza.com/ciel-helewise-48067.html?utm_source=line_ciel&utm_medium=microsite&utm_campaign=lineshopping&utm_term=ciel" target="_blank"><img src="<?php echo $this->baseTheme();?>image/ciel-18.jpg" alt="HELEWISE"></a>
					<h4><strong><font color ="#333333 ">HELEWISE</font></strong></h4>
					<span class="old-price">IDR 998,000</span></br>
					<span class="new-price">IDR 299,400</span>
				</div>
				<div class="product-line clearfix">
					<a href="http://www.vipplaza.com/ciel-alliss-48086.html?utm_source=line_ciel&utm_medium=microsite&utm_campaign=lineshopping&utm_term=ciel" target="_blank">
                        <img src="<?php echo $this->baseTheme();?>image/ciel-19.jpg" alt="ALLISS">
                    </a>
					<h4><strong><font color ="#333333 ">ALLISS BROWN</font></strong></h4>
					<span class="old-price">IDR 715,000</span></br>
					<span class="new-price">IDR 214,500</span>
				</div>
                */ ?>
    </div>
    <a href="http://www.vipplaza.com/all-events/02030209/ciel.html?utm_source=line_ciel&utm_medium=microsite&utm_campaign=lineshopping&utm_term=ciel"><span class="button">VIEW MORE COLLECTION</span></a>
</div>
</div>
</body>
</html>