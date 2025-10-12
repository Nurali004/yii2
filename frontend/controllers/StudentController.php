<?php

namespace frontend\controllers;

use yii\web\Controller;

class StudentController extends Controller
{
    public function actionIndex(){
        $data = [
            [
                'name'=> 'Jack', 'age'=> 23
            ],
            [
                'name'=> 'Jack', 'age'=> 25
            ],
            [
                'name'=> 'Jack', 'age'=> 24
            ]
        ];
        return $this->render('index', ['students'=>$data]);
    }

    public function actionView(){
        $datas = [
            'name' => 'Jack',
            'age' => 24
        ];
        return $this->render('view', ['students'=>$datas]);
    }

}