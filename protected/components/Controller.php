<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
    //public $url_line_vipplaza = "http://dev.testingdulu.com/";
    public $url_line_vipplaza = "http://www.vipplaza.co.id/";
    public static $url_line_vip = "http://www.vipplaza.co.id/";//"http://vipplaza2.lc/";
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();
    public function baseTheme(){
        return Yii::app()->getBaseUrl(TRUE).'/themes/front/bbm/';
    }

    public function baseUrl(){
        return Yii::app()->getBaseUrl(TRUE);
    }

    /*public function __construct(){
        $pathImage = Yii::getPathOfAlias('webroot').'/images/products/thumbnails/';
        copy("http://www.vipplaza.co.id/media/catalog/product/cache/1/small_image/250x/040ec09b1e35df139433887a97daa66f/1/_/1_1187.jpg",
        $pathImage."1_1187.jpg");
        exit('copied');
    }*/

}