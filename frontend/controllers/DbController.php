<?php

namespace frontend\controllers;

use Yii;
use yii\db\Query;
use yii\web\Controller;

class DbController extends Controller
{
    public function actionDao()
    {


//
//        $users = [
//            ['Ali', 25, 'Toshkent'],
//            ['Malika', 30, 'Samarqand'],
//            ['Jasur', 22, 'Buxoro'],
//            ['Dilnoza', 27, 'Fargʻona']
//        ];

        // Yii::$app->db->createCommand()->batchInsert('users', ['name', 'age', 'city'], $users)->execute();

        $users = Yii::$app->db->createCommand('select * from users')->queryAll();
        return $this->render('dao', ['users' => $users]);
    }

    public function actionUser()
    {
        $users = (new Query())->select('*')
            ->from('users')
            ->where('city = :city', ['city' => 'Toshkent'])
            ->all();
        return $this->render('user', ['users' => $users]);

    }


}