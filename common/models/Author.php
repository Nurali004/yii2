<?php

namespace common\models;

use yii\web\Controller;

class Author extends User
{
    public function getPosts(){

        return $this->hasMany(Post::class, ['author_id' => 'id']);
    }


}