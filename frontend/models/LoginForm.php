<?php

namespace frontend\models;

use yii\base\Model;

class LoginForm extends Model
{
    public $login;
    public $parol;
    public $parol_takror;

    public function rules(){
        return [
            [['login', 'parol', 'parol_takror'], 'required'],
            ['parol_takror', 'compare', 'compareAttribute' => 'parol', 'message'=> "Parollar mos emas"]
        ];
    }


}