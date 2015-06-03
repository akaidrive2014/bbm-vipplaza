<?php
/**
 * Created by PhpStorm.
 * User: syarif
 * Date: 3/20/15
 * Time: 10:27 AM
 */
Class Putsku extends CFormModel{
    public $file_name;
    public $sku_list;
    public $slug;
    public $periode;
    public $file;

    public function __construct(){
        $this->file = New Files;
    }

    public function rules(){
        return array(
            array('file_name,sku_list,slug,periode','required'),
            array('file_name','checkFile'),
            array('slug','setSlug'),
        );
    }

    public function setSlug(){
        return $this->slug = Vipplaza::url_title($this->slug);
    }

    public function checkFile(){
        if(in_array($this->file_name.'.txt',$this->file->Checkfiles())){
            $this->addError('file_name','File name <b>"'.$this->file_name.'"</b> already taken.');
        }
    }

    public function writeFile(){
        $myFile = $this->file_name.'.txt';
        $fh = fopen($this->file->targetPath.'/'.$myFile, 'w') or die("can't open file");
        $stringData = $this->sku_list;
        $skuArray = Vipplaza::getSku($this->sku_list);
        $productIDS = null;
        $productSkus = array();
        if(!empty($skuArray)) {
            foreach ($skuArray as $index => $product_sku) {
                $productSkus[]= trim($product_sku);
            }
        }
        $productSkuList = ((implode(',',$productSkus)));
        $getProductIdsBySku = file_get_contents(Controller::$url_line_vip."vipline/index/get_product_id/sku/{$productSkuList}");
        //exit((Controller::$url_line_vip."vipline/index/get_product_id/sku/{$productSkuList}"));
        $product_ids = json_decode($getProductIdsBySku);
        if(!empty($product_ids)){
            foreach($product_ids as $product_id){
                $productIDS .= $product_id."\n";
            }
        }
        $create = fwrite($fh, $productIDS);
        fclose($fh);
        if($create){
            return true;
        }else{
            return false;
        }
    }
}