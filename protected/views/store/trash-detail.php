<div class="col-main" id="main">

    <div class="cf shop-details">
        <div id="description">
            <div class="cf">
            </div>
        </div>
        <div class="timer-holder">
            <div class="shop-close">
                <?php /*<span class="closes"><?php echo $data->product_name;?></span>*/ ?>
                <span class="cntdown-pr date hasCountdown">9 days, 20:26:28</span>
                <span style="display: none;" class="cntdown-source">851470</span>
            </div>
        </div>
    </div><div style="display: none;" id="aw_popup_wraper"></div>
    <div style="display: none;" id="aw_popup_window">
        <div id="aw_popup_header">
            <span id="aw_popup_title"></span>
            <img src="http://www.vipplaza.com/skin/frontend/default/default/popup/images/close_label.gif.pagespeed.ce.ktWWHscc-l.gif" onclick="Popup.hideWindow();return false;" id="aw_popup_close_btn">
        </div>
        <div id="aw_popup_content">
        </div>
    </div>
    <div id="messages_product_view"></div>
    <div class="product-view type-product-configurable">
        <div class="product-essential">
            <form id="product_addtocart_form" method="post" action="http://www.vipplaza.com/checkout/cart/add/uenc/aHR0cDovL3d3dy52aXBwbGF6YS5jb20vaG9wZS1kYWxpYS1ibHVlLXNwbGFzaC03NTgxNi5odG1s/product/75802/form_key/UvFSERd1tJDkl4Ok/">
                <div class="no-display">
                    <input type="hidden" value="75802" name="product">
                    <input type="hidden" value="" id="related-products-field" name="related_product">
                </div>
                <div class="product-name">
                    <h1><?php echo $data->product_name;?></h1>
                </div>
                <div class="priceHolder1"></div>
                <div class="descHolder cf">
                    <!-- Image zoomer -->
                    <div class="imageHolder">
                        <a class="imgLink" title="Click to zoom in" href="">
                            <img border="0" title="HOPE - DALIA - BLUE SPLASH" alt="HOPE - DALIA - BLUE SPLASH" src="http://www.vipplaza.com/media/catalog/product/cache/1/image/319x478/9df78eab33525d08d6e5fb8d27136e95/1/_/1_9_1_7249_1_23_1_27_1_23_1_15_6_30_4_11417_1_3068.jpg" id="productImgDefault">	</a>

                        <a class="button-grey" title="Click to zoom in" href="#"><span>Click to zoom in</span></a>
                    </div>
                    <!-- // Image zoomer -->

                    <div class="product-holder">
                        <div class="product-name-2">
                            <h1>HOPE - DALIA - BLUE SPLASH</h1>
                        </div>

                        <div class="cf">
                            <!-- Product details -->
                            <div class="product-shop">
                                <div class="priceHolder2">



                                    <div class="price-box cf">

                                        <h5>
                                            <span class="price-label">MEMBER PRICE</span>
				<span id="product-price-75802">
					Rp <?php echo $data->product_price;?>				</span>
                                        </h5>
                                        <p class="price-margin">
                                            <strong>RETAIL PRICE</strong>
				<span style="text-decoration: line-through !important;" id="oldprc old-price-75802" class="lineover">
					Rp 279,000				</span>
                                        </p>
                                        <p class="price-margin saving">
                                            <strong>MEMBER SAVINGS</strong>
                                            <span>30% OFF</span>
                                        </p>
                                    </div></div>

                                <div class="fave_block">
                                    <p class="email-friend"><a href="http://www.vipplaza.com/sendfriend/product/send/id/75802/cat_id/52/">Email to a Friend</a></p>
                                </div>


                                <div id="product-options-wrapper" class="product-options">

                                    <div class="hld-opt last">
                                        <div class="input-box">
                                            <select class="required-entry super-attribute-select" id="attribute151" name="super_attribute[151]">

                                                <option value="">Size</option><option value="19" price="0">L</option></select>
                                        </div>
                                    </div>

                                    <script type="text/javascript">jQuery(document).ready(function(){setInterval(function(){var e=jQuery('#product-options-wrapper #attribute151');e.find('option').each(function(){var html=jQuery(this).html();var tmpArr=html.split(' ');jQuery(this).html(tmpArr[0]);});e.find('option:first').html('Size');},1000);jQuery('#product-options-wrapper #attribute151').find('option:first').html('Size');});</script>

                                    <script type="text/javascript">var confData={"attributes":{"151":{"id":"151","code":"size_clothes","label":"Size","options":[{"id":"19","label":"L","price":"0","oldPrice":"0","products":["75801"]}]}},"template":"Rp #{price}","basePrice":"195300","oldPrice":"279000","productId":"75802","chooseText":"Choose an Option...","taxConfig":{"includeTax":false,"showIncludeTax":false,"showBothPrices":false,"defaultTax":0,"currentTax":0,"inclTaxTitle":"Incl. Tax"}};confData['chooseText']='';var spConfig=new Product.Config(confData);</script>
                                    <script type="text/javascript">var DateOption=Class.create({getDaysInMonth:function(month,year)
                                        {var curDate=new Date();if(!month){month=curDate.getMonth();}
                                            if(2==month&amp;&amp;!year){return 29;}
                                            if(!year){year=curDate.getFullYear();}
                                            return 32-new Date(year,month-1,32).getDate();},reloadMonth:function(event)
                                        {var selectEl=event.findElement();var idParts=selectEl.id.split("_");if(idParts.length!=3){return false;}
                                            var optionIdPrefix=idParts[0]+"_"+idParts[1];var month=parseInt($(optionIdPrefix+"_month").value);var year=parseInt($(optionIdPrefix+"_year").value);var dayEl=$(optionIdPrefix+"_day");var days=this.getDaysInMonth(month,year);for(var i=dayEl.options.length-1;i&gt;=0;i--){if(dayEl.options[i].value&gt;days){dayEl.remove(dayEl.options[i].index);}}
                                            var lastDay=parseInt(dayEl.options[dayEl.options.length-1].value);for(i=lastDay+1;i&lt;=days;i++){this.addOption(dayEl,i,i);}},addOption:function(select,text,value)
                                        {var option=document.createElement('OPTION');option.value=value;option.text=text;if(select.options.add){select.options.add(option);}else{select.appendChild(option);}}});dateOption=new DateOption();</script>


                                    <script type="text/javascript">enUS={"m":{"wide":["January","February","March","April","May","June","July","August","September","October","November","December"],"abbr":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"]}};Calendar._DN=["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];Calendar._SDN=["Sun","Mon","Tue","Wed","Thu","Fri","Sat"];Calendar._FD=1;Calendar._MN=["January","February","March","April","May","June","July","August","September","October","November","December"];Calendar._SMN=["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"];Calendar._am="AM";Calendar._pm="PM";Calendar._TT={};Calendar._TT["INFO"]="About the calendar";Calendar._TT["ABOUT"]="DHTML Date/Time Selector\n"+"(c) dynarch.com 2002-2005 / Author: Mihai Bazon\n"+"For latest version visit: http://www.dynarch.com/projects/calendar/\n"+"Distributed under GNU LGPL. See http://gnu.org/licenses/lgpl.html for details."+"\n\n"+"Date selection:\n"+"- Use the \xab, \xbb buttons to select year\n"+"- Use the "+String.fromCharCode(0x2039)+", "+String.fromCharCode(0x203a)+" buttons to select month\n"+"- Hold mouse button on any of the above buttons for faster selection.";Calendar._TT["ABOUT_TIME"]="\n\n"+"Time selection:\n"+"- Click on any of the time parts to increase it\n"+"- or Shift-click to decrease it\n"+"- or click and drag for faster selection.";Calendar._TT["PREV_YEAR"]="Prev. year (hold for menu)";Calendar._TT["PREV_MONTH"]="Prev. month (hold for menu)";Calendar._TT["GO_TODAY"]="Go Today";Calendar._TT["NEXT_MONTH"]="Next month (hold for menu)";Calendar._TT["NEXT_YEAR"]="Next year (hold for menu)";Calendar._TT["SEL_DATE"]="Select date";Calendar._TT["DRAG_TO_MOVE"]="Drag to move";Calendar._TT["PART_TODAY"]=' ('+"Today"+')';Calendar._TT["DAY_FIRST"]="Display %s first";Calendar._TT["WEEKEND"]="0,6";Calendar._TT["CLOSE"]="Close";Calendar._TT["TODAY"]="Today";Calendar._TT["TIME_PART"]="(Shift-)Click or drag to change value";Calendar._TT["DEF_DATE_FORMAT"]="%b %e, %Y";Calendar._TT["TT_DATE_FORMAT"]="%B %e, %Y";Calendar._TT["WK"]="Week";Calendar._TT["TIME"]="Time:";</script>
                                </div>
                                <script type="text/javascript">decorateGeneric($$('#product-options-wrapper dl'),['last']);</script>



                                <!-- Product price -->
                                <div class="product-price-block">


                                </div>
                                <div class="qtyHolder-1">
                                    <div id="acsyQty" class="qtyHolder">
                                        <p>
                                            <label>Quantity</label>
                                        </p><div class="limitPO"><span>Limit </span>2 per order</div>
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
                                    <div class="std">Sempurnakan tampilan anda dengan Dalia blouse dari Hope. Blouse berwarna blue splash ini cocok menemani anda hangout bersama teman-teman.</div>
                                </div>
                            </div>
                            <div class="add-to-box">
                                <a style="cursor:pointer;" class="shopnowButton" onclick="productAddToCartForm.submit(this)">
                                    <span>Add to Cart</span>
                                </a>
                            </div>
                        </div> <!-- clearfix -->
                    </div>
                </div></form>
        </div>
    </div>
    <div class="productDesc cf">
        <div class="productDetails">
            <h4>Details</h4>
            <p>• Blouse<br>
                • Warna blue splash<br>
                • Material spandex rayon<br>
                • Sleeveless<br>
                • Kerah bulat<br>
                • Potongan asimetris<br>
                • Size L bust 80 cm length 116 cm<br>
                • Mungkin ada sedikit perbedaan warna antara gambar dengan warna asli, tergantung pada resolusi monitor anda. Begitu juga terdapat perbedaan ukuran sekitar 1-2 cm</p>	</div>
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
            <p>- Kartu Kredit Visa dan MasterCard</p>	</div>

    </div>

</div>