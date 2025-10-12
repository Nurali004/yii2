<?php

namespace frontend\models;

use yii\base\Model;

class TasdiqForm extends Model
{
    public $yosh_tasdiq;
    public $jins;
    public function rules(){
        return [
            [['yosh_tasdiq'], 'required', 'message' => "Siz 18 yoshdan katta ekanligingizni tasdiqlang"],

            [['jins'], 'required', 'message' => "Jinsni tanlang"],

            ['jins', 'in', 'range' => ['erkak', 'ayol']],
        ];
    }

}