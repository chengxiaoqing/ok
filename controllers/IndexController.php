<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/30 0030
 * Time: 下午 6:48
 */
namespace app\controllers;
use yii\web\Controller;
use app\models\Test;

class IndexControleer extends  Controller{
    public  function  actionIndex(){
        $test = new Test();
        $testData=[
            'data'=>['id'=>3,'title'=>'hello']
        ];
        $test->load($testData,'data');
        echo  $test->id;//属性的方式访问值

    }
}