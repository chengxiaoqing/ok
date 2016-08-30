<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/30 0030
 * Time: 下午 6:50
 */
namespace app\models;

class Test extends \yii\db\ActiveRecord(){
    public static function tableName(){
        return 'test';
    }

    public function scenarios(){
        [],
        []
    }
}