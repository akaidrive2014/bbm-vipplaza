<?php

/**
 * Created by PhpStorm.
 * User: syarif
 * Date: 1/12/15
 * Time: 1:37 PM
 */
Class TestController extends VipplazaController
{
	
	public function actionGet(){
		$data = file_get_contents("http://mage-mage.lc/testing/index/maenandata");
		echo $data->name;;
	}
	
    public function actionGethtml(){
        header("Content-Type:text/plain");
        $myFile = "src/html_format.txt";
        $fh = fopen($myFile, 'r');
        $theData = fread($fh, filesize($myFile));
        fclose($fh);
        return $theData;
    }

    public function formatHtml(){
        return "";
    }

    public function actionCreate($name){
        $myFile = $ourFileName = "{$name}.html";
        $fh = fopen($myFile, 'w') or die("can't open file");
        $stringData = $this->renderPartial('create',array(),true);
        $create = fwrite($fh, $stringData);
        fclose($fh);
        exit;
        $ourFileHandle = fopen($ourFileName, 'w') or die("can't open file");
        fclose($ourFileHandle);
    }

    public function actionUpdate($name){
        $myFile = "{$name}.html";
        $fh = fopen($myFile, 'w') or die("can't open file");
        $stringData = $this->actionGethtml();
        fwrite($fh, $stringData);
        fclose($fh);
    }

    public function actionGetdetail($fileName)
    {
        header("Content-Type:text/plain");

        //echo "<b>TEST</b>";exit;

        $this->readHTML('http://www.vipplaza.com/amary-blue-dress-a0590-89634.html');

        $JS = '<script>
        jQuery(function(){
                jQuery(".header-info-container,#header,.banner-top,#am-ajaxlogin-container").hide();
            });
        </script>';
        $file = $this->checkFile($fileName);
        $Data = Vipplaza::getFileData($file);
        $DataProduct = array();
        if(!empty($Data)){
            foreach($Data as $index=>$data){
                if(!empty($Data[$index])){
                    $id = $Data[$index][0];
                    $url = file_get_contents($this->url_line_vipplaza."{$id}");
                    $fileName = $id;
                    $fh = fopen($fileName, 'w') or die("can't open file");
                    $stringData = $this->setHtmlProductDetail($url.$JS);
                    $create = fwrite($fh, $stringData);
                    $close = fclose($fh);
                    if($close){
                        echo $index.". Created <a target=\"_blank\" href=\"{$this->baseUrl()}/{$fileName}\">{$this->baseUrl()}/{$fileName}</a><br>";
                    }
                }
            }
            exit('Success');
        }
    }

    protected function setHtmlProductDetail($data){
        return $this->renderPartial('_setHtmlProductDetail',array('data'=>$data),true);
    }

    public function readHTML($url)
    {
        // inisialisasi CURL
        $data = curl_init();
        // setting CURL
        curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($data, CURLOPT_URL, $url);
        // menjalankan CURL untuk membaca isi file
        $result = curl_exec($data);
        curl_close($data);
        return $result;
    }

    public function actionIndex()
    {
        exit('It Works');
    }

    public function actionRead(){
        $file="src/catalog.txt";
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
        echo "<pre>";
        //$data = json_encode($array);
        foreach($array as $index=>$data){
            if(!empty($array[$index])){
                echo $index;
                echo $array[$index][0].'<br>';
            }
        }exit;
        echo $array[3][0];exit;
        print_r($array);
        echo "</pre>";
        /*$content = "src/catalog.txt";
        $data = file_get_contents($content);
        $data = nl2br($data);
        $data = explode('<br>',$data);
        echo count($data);*/
    }

    public function actionReadfile()
    {
        $content = "src/url.xml";
        $XML = simplexml_load_file($content);

        if (!empty($XML->url)) {
            foreach ($XML->url as $product) {
                $FeedData = simplexml_load_file("http://ftr.fivefilters.org/makefulltextfeed.php?url={$product->loc}");
                if (!empty($product->loc)) {
                    $FeedData = $FeedData->channel->item;
                    //echo $FeedData->description;
                    echo Vipplaza::Takechar($FeedData->description).'<hr>';
                    /*
                    $product_title = str_replace(array("http://www.vipplaza.com/",'.html'),'',$product->loc);
                    $product_title = explode("-",$product_title);
                    $product_title = implode(" ",$product_title);
                    $product_title = preg_replace("/[^a-z ]/", '',$product_title);
                    echo Vipplaza::Takechar($FeedData->description);
                    *///echo strtoupper($product_title).'<br>';
                }
            }
        }
    }

    public function actionDisplay(){
        $data = Vipplaza::getProduct();
        if(!empty($data)){
            foreach($data as $product){
                echo Vipplaza::getProductName($product->loc);
            }
        }
    }

    public function checkFile($file){
        if(empty($file))
            throw new CHttpException(404,'The requested page does not exist.');
        return $file;
    }

}