<?php
/**
 * Created by PhpStorm.
 * User: syarif
 * Date: 1/12/15
 * Time: 11:01 AM
 */
Class Vipplaza{

    public static function getFileData($fileName){
        $file="src/{$fileName}.txt";
        $fopen = fopen($file, 'r');
        $fread = fread($fopen,filesize($file));
        fclose($fopen);
        $remove = "\n";
        $split = explode($remove, $fread);

        $array[] = null;
        $tab = "\t";

        foreach ($split as $string)
        {
            $row = explode($tab, $string);
            array_push($array,$row);
        }
        return empty($array) ? null : $array;
    }

    //
    public static function getSku($sku_list){
        $remove = "\n";
        $split = explode($remove, $sku_list);
        $array = $split;
        return empty($array) ? null : $array;
    }

    public static function url_title($str, $separator = '-', $lowercase = TRUE) {
        if ($separator == 'dash') {
            $separator = '-';
        } else if ($separator == 'underscore') {
            $separator = '_';
        }
        $q_separator = preg_quote($separator);
        $trans = array('&.+?;' => '', '[^a-z0-9 _-]' => '', '\s+' => $separator, '(' . $q_separator . ')+' => $separator);
        $str = strip_tags($str);
        foreach ($trans as $key => $val) {
            $str = preg_replace("#" . $key . "#i", $val, $str);
        }
        if ($lowercase === TRUE) {
            $str = strtolower($str);
        }
        return trim($str, $separator);
    }

    //testing
    public static function sampleDetailData(){
        return array(
            'product_name'=>'T90 SHOOT IV IC',
            'product_price'=>300000,
            'product_special_price'=>100000,
            'product_image_thumbnail'=>'http://www.vipplaza.com/media/catalog/product/cache/1/image/319x478/9df78eab33525d08d6e5fb8d27136e95/1/_/1_9_1_7249_1_23_1_27_1_23_1_15_6_30_4_11417_1_3065.jpg',
            //'product_image_list'=>'http://www.vipplaza.com/media/catalog/product/cache/1/image/319x478/9df78eab33525d08d6e5fb8d27136e95/1/_/1_9_1_7249_1_23_1_27_1_23_1_15_6_30_4_11417_1_3068.jpg',
            'size'=>'S,M,X,L',
        );
    }

    //sample data line.event by category
    public static function sampleEventByCategory(){
        return array(
            'nike'=>array(
                array(
                    'product_name'=>'this is product name',
                    'product_price'=>'123000',
                    'product_special_price'=>'23000',
                    'product_link'=>'http://www.vipplaza.com/nike-ts-core-polo-apparel-black-white-68995.html',
                    'product_image_thumbnail'=>'http://line.vipplaza.com/image/nike-gabindo-01.jpg',
                ),
                array(
                    'product_name'=>'T90 SHOOT IV IC',
                    'product_price'=>'143000',
                    'product_special_price'=>'24000',
                    'product_link'=>'http://www.vipplaza.com/nike-t90yshootyivyic-footwear-brght-mng-blk-ttl-crmsn-white-68129.html?utm_source=line_nike&utm_medium=microsite&utm_campaign=lineshopping&utm_term=nike',
                    'product_image_thumbnail'=>'http://line.vipplaza.com/image/nike-gabindo-02.jpg',
                ),
                array(
                    'product_name'=>'this is product name',
                    'product_price'=>'123000',
                    'product_special_price'=>'23000',
                    'product_link'=>'http://www.vipplaza.com/nike-ts-core-polo-apparel-black-white-68995.html',
                    'product_image_thumbnail'=>'http://line.vipplaza.com/image/nike-gabindo-01.jpg',
                ),
                array(
                    'product_name'=>'T90 SHOOT IV IC',
                    'product_price'=>'143000',
                    'product_special_price'=>'24000',
                    'product_link'=>'http://www.vipplaza.com/nike-t90yshootyivyic-footwear-brght-mng-blk-ttl-crmsn-white-68129.html?utm_source=line_nike&utm_medium=microsite&utm_campaign=lineshopping&utm_term=nike',
                    'product_image_thumbnail'=>'http://line.vipplaza.com/image/nike-gabindo-02.jpg',
                ),
                array(
                    'product_name'=>'this is product name',
                    'product_price'=>'123000',
                    'product_special_price'=>'23000',
                    'product_link'=>'http://www.vipplaza.com/nike-ts-core-polo-apparel-black-white-68995.html',
                    'product_image_thumbnail'=>'http://line.vipplaza.com/image/nike-gabindo-01.jpg',
                ),
            ),
            'bags'=>array(
                array(
                    'product_name'=>'KRISTA MESENGGER BAG BLACK',
                    'product_price'=>'425000',
                    'product_special_price'=>'23000',
                    'product_link'=>'http://www.vipplaza.com/bagtitude-krista-mesengger-bag-black.html?utm_source=line_bagtitute&utm_medium=microsite&utm_campaign=lineshopping&utm_term=bagtitute',
                    'product_image_thumbnail'=>'http://line.vipplaza.com/image/bags2-01.jpg',
                ),
                array(
                    'product_name'=>'KRISTA MESENGGER BAG LIGHT ',
                    'product_price'=>'543000',
                    'product_special_price'=>'34000',
                    'product_link'=>'http://www.vipplaza.com/bagtitude-krista-mesengger-bag-light-brown.html?utm_source=line_bagtitute&utm_medium=microsite&utm_campaign=lineshopping&utm_term=bagtitute',
                    'product_image_thumbnail'=>'http://line.vipplaza.com/image/bags2-02.jpg',
                ),
                array(
                    'product_name'=>'KRISAN HOBO BAG SQUARE LOCK GREY',
                    'product_price'=>'420000',
                    'product_special_price'=>'13000',
                    'product_link'=>'http://www.vipplaza.com/bagtitude-krisan-hobo-bag-square-lock-grey.html?utm_source=line_bagtitute&utm_medium=microsite&utm_campaign=lineshopping&utm_term=bagtitute',
                    'product_image_thumbnail'=>'http://line.vipplaza.com/image/bags2-03.jpg',
                ),
                array(
                    'product_name'=>'KRISTA MESENGGER BAG LIGHT ',
                    'product_price'=>'543000',
                    'product_special_price'=>'34000',
                    'product_link'=>'http://www.vipplaza.com/bagtitude-krista-mesengger-bag-light-brown.html?utm_source=line_bagtitute&utm_medium=microsite&utm_campaign=lineshopping&utm_term=bagtitute',
                    'product_image_thumbnail'=>'http://line.vipplaza.com/image/bags2-02.jpg',
                ),
                array(
                    'product_name'=>'KRISTA MESENGGER BAG BLACK',
                    'product_price'=>'425000',
                    'product_special_price'=>'23000',
                    'product_link'=>'http://www.vipplaza.com/bagtitude-krista-mesengger-bag-black.html?utm_source=line_bagtitute&utm_medium=microsite&utm_campaign=lineshopping&utm_term=bagtitute',
                    'product_image_thumbnail'=>'http://line.vipplaza.com/image/bags2-01.jpg',
                ),
            ),

        );
    }

    //sample data line.index
    public static function sampleIndexData(){
        return array(
            array(
                'event_name'=>'Sport',
                'event_brand'=>'Nike',
                'event_link'=>'http://line.vipplaza.com/nike.html?utm_source=line&utm_medium=banner&utm_campaign=lineshopping',
                'event_banner_image'=>'http://line.vipplaza.com/image/nike-gabindo-940-420.jpg'
            ),
            array(
                'event_name'=>'Bags Collection',
                'event_brand'=>'Bellezza',
                'event_link'=>'http://line.vipplaza.com/bags-collection.html?utm_source=line&utm_medium=banner&utm_campaign=lineshopping',
                'event_banner_image'=>'http://line.vipplaza.com/image/bags2-940-420.jpg'
            ),
            array(
                'event_name'=>'Sandal',
                'event_brand'=>'Cortica',
                'event_link'=>'http://line.vipplaza.com/cortica.html',
                'event_banner_image'=>'http://line.vipplaza.com/image/cortica-940-420.jpg'
            ),
            array(
                'event_name'=>'Dress',
                'event_brand'=>'Eprise',
                'event_link'=>'#',
                'event_banner_image'=>'http://line.vipplaza.com/image/eprise-940-420.jpg'
            ),
            array(
                'event_name'=>'Dress',
                'event_brand'=>'Accent',
                'event_link'=>'#',
                'event_banner_image'=>'http://line.vipplaza.com/image/eprise-940-420.jpg'
            ),
            array(
                'event_name'=>'Shoes',
                'event_brand'=>'Dr. Kevin',
                'event_link'=>'#',
                'event_banner_image'=>'http://line.vipplaza.com/image/dr-kevin-940-420.jpg'
            ),
            array(
                'event_name'=>'Arloji',
                'event_brand'=>'Casio',
                'event_link'=>'#',
                'event_banner_image'=>'http://line.vipplaza.com/image/casio-940-420.jpg'
            ),

        );
    }

    //testing doank
    public static function curl_file_get_contents($url)
    {
        $curl = curl_init();
        $userAgent = 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322)';

        curl_setopt($curl,CURLOPT_URL,$url);	//The URL to fetch. This can also be set when initializing a session with curl_init().
        curl_setopt($curl,CURLOPT_RETURNTRANSFER,TRUE);	//TRUE to return the transfer as a string of the return value of curl_exec() instead of outputting it out directly.
        curl_setopt($curl,CURLOPT_CONNECTTIMEOUT,5);	//The number of seconds to wait while trying to connect.

        curl_setopt($curl, CURLOPT_USERAGENT, $userAgent);	//The contents of the "User-Agent: " header to be used in a HTTP request.
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, TRUE);	//To follow any "Location: " header that the server sends as part of the HTTP header.
        curl_setopt($curl, CURLOPT_AUTOREFERER, TRUE);	//To automatically set the Referer: field in requests where it follows a Location: redirect.
        curl_setopt($curl, CURLOPT_TIMEOUT, 10);	//The maximum number of seconds to allow cURL functions to execute.
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);	//To stop cURL from verifying the peer's certificate.
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);

        $contents = curl_exec($curl);
        curl_close($curl);
        return $contents;
    }

    public static function getProduct()
    {
        $content = "src/url.xml";
        $XML = simplexml_load_file($content);
        return $XML->url;
        /*
        if (!empty($XML->url)) {
            foreach ($XML->url as $product) {
                $FeedData = simplexml_load_file("http://ftr.fivefilters.org/makefulltextfeed.php?url={$product->loc}");
                if (!empty($product->loc)) {
                    $FeedData = $FeedData->channel->item;
                    //echo $FeedData->description;
                    //echo Vipplaza::Takechar($FeedData->description).'<hr>';

                    $product_title = str_replace(array("http://www.vipplaza.com/",'.html'),'',$product->loc);
                    $product_title = explode("-",$product_title);
                    $product_title = implode(" ",$product_title);
                    $product_title = preg_replace("/[^a-z ]/", '',$product_title);
                    echo Vipplaza::Takechar($FeedData->description);
                    echo strtoupper($product_title);
                }
            }
        }*/
    }

    public static function getProductName($product_title){
        $product_title = str_replace(array("http://www.vipplaza.com/",'.html'),'',$product_title);
        $product_title = explode("-",$product_title);
        $product_title = implode(" ",$product_title);
        $product_title = preg_replace("/[^a-z ]/", '',$product_title);

        return strtoupper($product_title);
    }

    public static function Takechar($val='') {

    // keywords are between *
    $str = $val;
    //$str = '<img src="http://cdn03.animenewsnetwork.com/thumbnails/max550x700/cms/news/68122/byevxexcuaadrdg.jpg-large.jpeg"><img src="http://cdn03.animenewsnetwork.com/thumbnails/max550x700/cms/news/68122/byevxexcuaadrdg.jpg-larg.jpeg">';
    //(preg_match_all('/\<a href="(.*?)\"/', $str, $match))
    if (preg_match_all('/\<a href="(.*png)\"/', $str, $match)) {
        $img= ($match[1][0]);
    }elseif (preg_match_all('/\<a href="(.*jpg)\"/', $str, $match)) {
        $img= ($match[1][0]);
    }
    //" <img src="www.com.com/image/image.jpg"> ";
    return  empty($img) ? NULL : str_replace('">','',strip_tags($img));
}




}