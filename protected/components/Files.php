<?php

Class Files
{

    public $targetPath;
    public $domainName;
    public $targetDir;
    public $rootDir;

    public function __construct()
    {
        $this->rootDir = Yii::getPathOfAlias('webroot');
        $this->targetPath = Yii::getPathOfAlias('webroot') . '/src';
        $this->targetDir = Yii::getPathOfAlias('webroot') . '/product-html';
        //set val to $domainName
        $this->domainName = Yii::app()->getBaseUrl(TRUE);
    }

    public function checkFiles()
    {
        $dir = $this->targetPath;
        return $files = scandir($dir);
    }

    public function copyImage($imageUrl){
        $pathImage = $this->rootDir.'/images/products/thumbnails/';
        $pathImageLarge = $this->rootDir.'/images/products/';
        $imageName = explode("/",$imageUrl);
        $imgName = $imageName[count($imageName)-1];
        copy($imageUrl,$pathImage.$imgName);//thumbnails
        copy($imageUrl,$pathImageLarge.$imgName);//large
        return Yii::app()->getBaseUrl(TRUE).'/images/products/thumbnails/'.$imgName;
    }

}