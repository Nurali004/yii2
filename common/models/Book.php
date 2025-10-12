<?php

namespace common\models;

class Book extends \yii\db\ActiveRecord
{
    public static function tableName(){
        return 'library';
    }

    public function rules(){
        return [
            [['title', 'description', 'created_at'], 'required'],
        ];
    }

}