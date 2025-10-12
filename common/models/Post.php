<?php

namespace common\models;

use yii\db\ActiveRecord;

class Post extends ActiveRecord
{
    public static function tableName(){
        return '{{%news}}';


    }

    public function rules()
    {
        return [
            [['content', 'title', 'category_id'], 'required'],
        ];

    }

    public function getCategory()
    {
        return $this->hasOne(Category::class, ['id' => 'category_id']);


    }

    public function getAuthor(){
        return $this->hasOne(User::class, ['id' => 'author_id']);
    }


}