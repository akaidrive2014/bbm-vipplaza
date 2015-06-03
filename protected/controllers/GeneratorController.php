<?php
/**
 * Created by PhpStorm.
 * User: syarif
 * Date: 3/20/15
 * Time: 10:21 AM
 */
Class GeneratorController extends VipplazaController{
    public $layout = "admin_layout";


    public function filters(){
        return array(
            'accessControl', // perform access control for CRUD operations
        );
    }
    public function accessRules()
    {
        return array(
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions'=>array('putsku'),
                'users'=>array('@'),
            ),
            array('deny',  // deny all users
                'users'=>array('*'),
            ),
        );
    }

    public function actionPutsku(){
        $model = New Putsku;
        if(isset($_POST['Putsku'])){
            $model->attributes = $_POST['Putsku'];
            if($model->validate()){
               if($model->writeFile()){
                   exit(
                    //"Your File Name : <a target=\"_blank\" href=\"{$this->baseUrl()}/src/{$model->file_name}.txt\">{$this->baseUrl()}/src/{$model->file_name}.txt</a><br><br>".
                    "Please Click Link Below to Generate Catalog:<br>".
                    "<a target=\"_blank\" href=\"{$this->baseUrl()}/index.php?r=store/createcategory/fileName/{$model->file_name}&slug={$model->slug}&periode={$model->periode}\">{$this->baseUrl()}/store/createcategory/fileName/{$model->file_name}?slug={$model->slug}&periode={$model->periode}</a>".
                    "<br><br>".
                    "Please Click Link Below to Generate Product Detail:<br>".
                    "<a target=\"_blank\" href=\"{$this->baseUrl()}/index.php?r=store/createProductdetail/fileName/{$model->file_name}\">{$this->baseUrl()}/store/createProductdetail/fileName/{$model->file_name}</a>"
                   );
               }
            }
        }
        $this->render("_put_sku_form",array('model'=>$model));
    }

}