<?php

/**
 * Created by PhpStorm.
 * User: syarif
 * Date: 1/12/15
 * Time: 10:48 AM
 */
Class VipplazaController extends Controller
{

    public $layout = 'linevipplaza';
    public $file;

    public function init(){

        /*if(Yii::app()->user->isGuest){
            if(Yii::app()->request->url!="/site/login"){
                $this->redirect(array('site/login'));
            }
        }

        if(!Yii::app()->user->isGuest){
            $this->renderPartial('/generator/menu');
        }*/


        $this->file = New Files;
        //for menu

    }



}