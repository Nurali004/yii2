<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;

class LogController extends Controller
{
    public function actionAdd()
    {
        $params = [
            ['User registered',       '2025-09-20 09:10:00'],
['User logged in',        '2025-09-20 09:15:00'],
['Password changed',      '2025-09-20 09:20:00'],
['Order created',         '2025-09-21 11:00:00'],
['Payment pending',       '2025-09-21 11:05:00'],
['Payment successful',    '2025-09-21 11:10:00'],
['Order shipped',         '2025-09-22 14:30:00'],
['Order delivered',       '2025-09-23 16:45:00'],
['User logged out',       '2025-09-24 18:00:00'],
['User profile updated',  '2025-09-25 19:15:00']
        ];
        $command = \Yii::$app->db->createCommand()->batchInsert('logs', ['event', 'created_at'], $params)->execute();

        return $this->render('add', ['command' => $command]);
        
    }

    public function actionMax()
    {

        $command = Yii::$app->db->createCommand('Select u.id, u.name, (Select max(o.amount) from orders o where o.user_id = u.id) as max_order from users u')->queryAll();

//        $command = Yii::$app->db->createCommand("
//        SELECT u.id, u.name,
//               (SELECT MAX(o.amount)
//                FROM orders o
//                WHERE o.user_id = u.id) AS max_order
//        FROM users u
//    ")->queryAll();

        return $this->render('max',['command' => $command]);


    }

}