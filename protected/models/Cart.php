<?php
/**
 * Created by PhpStorm.
 * User: syarif
 * Date: 1/14/15
 * Time: 1:46 PM
 */
Class Cart extends CFormModel{
    public $product_id;
    public $product_type;
    public $attribute_id;
    public $attribute_value;
    public $qty;


    public function rules(){
        return array(
            array('product_id,qty,product_type','required'),
            array('attribute_id,attribute_value','safe'),
            array('attribute_value','checkAttribute'),
        );
    }

    public function checkAttribute(){
        if(isset($this->attribute_id)){
            if(empty($this->attribute_value)){
                $this->addError('attribute_id','Error');
            }
        }
    }

}