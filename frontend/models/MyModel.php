<?php

namespace frontend\models;

use yii\base\Model;

class MyModel extends Model
{
    public $name;
    public $surname;
    public $email;
    public $uzbek;
    public $english;
    public $russian;


    public function rules(){

        return [
            [['name', 'surname', 'email'], 'required'],
            ['name', 'string', 'min'=>2, 'max'=> 30],
            ['email', 'email'],
            ['surname', 'string', 'min'=>2, 'max'=> 30],



        ];
    }




}