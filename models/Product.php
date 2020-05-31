<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 03.04.2016
 * Time: 11:35
 */

namespace app\models;

use yii\db\ActiveRecord;

class Product extends ActiveRecord{

    public static function tableName(){
        return 'product';
    }

    public function getCategory(){
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

}