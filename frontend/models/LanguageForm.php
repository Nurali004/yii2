<?php

namespace frontend\models;

use yii\base\Model;

class LanguageForm extends Model
{
    public $til;
    public function rules(){
        return [
            [['til'], 'required'],
            [['til'], 'in', 'range' => ['uzbek', 'enlish', 'russian']],
        ];
    }


}