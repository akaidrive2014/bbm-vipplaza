<div class="col-main" id="main">

    <div class="cf shop-details">
        <div id="description">
            <div class="cf">
            </div>
        </div>
        <div class="timer-holder">
            <div class="shop-close">
                <?php /*<span class="closes"><?php echo $data->product_name;?></span>*/ ?>
                <?php /*<span class="cntdown-pr date hasCountdown">9 days, 20:26:28</span>*/ ?>
                <?php /*<span style="display: none;" class="cntdown-source">851470</span>*/ ?>
            </div>
        </div>
    </div>
    <div style="display: none;" id="aw_popup_wraper"></div>
    <div style="display: none;" id="aw_popup_window">
        <div id="aw_popup_header">
            <span id="aw_popup_title"></span>
            <img
                src="http://www.vipplaza.com/skin/frontend/default/default/popup/images/close_label.gif.pagespeed.ce.ktWWHscc-l.gif"
                onclick="Popup.hideWindow();return false;" id="aw_popup_close_btn">
        </div>
        <div id="aw_popup_content">
        </div>
    </div>
    <div id="messages_product_view"></div>
    <div class="product-view type-product-configurable">
        <div class="product-essential">
            <form id="product_addtocart_form" method="post"
                  action="http://www.vipplaza.com/checkout/cart/add/uenc/aHR0cDovL3d3dy52aXBwbGF6YS5jb20vaG9wZS1kYWxpYS1ibHVlLXNwbGFzaC03NTgxNi5odG1s/product/75802/form_key/UvFSERd1tJDkl4Ok/">
                <div class="no-display">
                    <input type="hidden" value="75802" name="product">
                    <input type="hidden" value="" id="related-products-field" name="related_product">
                </div>
                <div class="product-name">
                    <h1><?php echo $data->name; ?></h1>
                </div>
                <div class="priceHolder1"></div>
                <div class="descHolder cf">
                    <!-- Image zoomer -->
                    <div class="imageHolder">
                        <a class="imgLink" title="Click to zoom in" href="">
                            <img border="0" title="HOPE - DALIA - BLUE SPLASH" alt="HOPE - DALIA - BLUE SPLASH"
                                 src="<?php echo $data->image; ?>" id="productImgDefault"> </a>
                        <?php /*
                    <a class="button-grey" title="Click to zoom in" href="#"><span>Click to zoom in</span></a>
                    */
                        ?>
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
				                                <span id="product-price-75802">
					                                Rp <?php echo number_format($data->special_price,0,'',','); ?>
                                                </span>
                                        </h5>

                                        <p class="price-margin">
                                            <strong>RETAIL PRICE</strong>
				                                <span style="text-decoration: line-through !important;" id="oldprc old-price-75802" class="lineover">
					                                Rp <?php echo number_format($data->price,0,'',','); ?>
                                                </span>
                                        </p>
                                        <?php /*
                                        <p class="price-margin saving">
                                            <strong>MEMBER SAVINGS</strong>
                                            <span>30% OFF</span>
                                        </p>*/ ?>
                                    </div>
                                </div>
                                <?php /*
                                <div class="fave_block">
                                    <p class="email-friend">
                                        <a href="http://www.vipplaza.com/sendfriend/product/send/id/75802/cat_id/52/">Email to a Friend</a>
                                    </p>
                                </div>*/ ?>

                                <div id="product-options-wrapper" class="product-options">

                                    <div class="hld-opt last">
                                        <div class="input-box">
                                            <select class="required-entry super-attribute-select" id="attribute151"
                                                    name="super_attribute[151]">

                                                <option value="">Size</option>
                                                <option value="19" price="0">L</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>



                                <!-- Product price -->
                                <div class="product-price-block">


                                </div>
                                <div class="qtyHolder-1">
                                    <div id="acsyQty" class="qtyHolder">
                                        <p>
                                            <label>Quantity</label>
                                        </p>

                                        <div class="limitPO"><span>Limit </span>2 per order</div>
                                        <div style=" width: 25%; ">
                                            <select style="width: 50px;" name="qty" class="qty">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                            </select>
                                        </div>
                                        <p></p>
                                    </div>
                                </div>
                                <!-- // Product price -->


                                <div id="short-description" class="short-description">
                                    <h2>Quick Overview</h2>

                                    <div class="std">
                                        <?php echo $data->short_description;?>
                                    </div>
                                </div>
                            </div>
                            <div class="add-to-box">
                                <a style="cursor:pointer;" class="shopnowButton" href="<?php echo $this->baseUrl();?>/product-add-to-cart/<?php echo $data->entity_id;?>">
                                    <span style="color: #0066cc;">Add to Cart</span>
                                </a>
                            </div>
                        </div>
                        <!-- clearfix -->
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="productDesc cf">
        <div class="productDetails">
            <h4>Details</h4>
            <p><?php echo $data->description;?></p>
        </div>
        <div class="productReturns">
            <h4>Payment &amp; Delivery</h4>

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

</div>