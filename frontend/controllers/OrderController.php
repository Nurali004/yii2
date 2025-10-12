<?php

namespace frontend\controllers;

use Yii;
use yii\db\Query;
use yii\web\Controller;

class OrderController extends Controller
{
    public function actionTotal(){

       $command = Yii::$app->db->createCommand('select user_id, count(*) as total_count, sum(amount) as total_amount from orders group by user_id')
       ->queryAll();


        return $this->render('total', ['command' => $command]);
    }

    public function actionCommon()
    {

        $orders = (new Query())->select('o.amount, o.id, u.name')
            ->from('orders o')
            ->innerJoin('users u', 'u.id = o.user_id')
            ->all();
//        $orders = (new Query())
//            ->select(['orders.id', 'orders.amount', 'u.name'])
//                ->from('orders')
//                ->innerJoin('users u', 'u.id = orders.user_id')
//                ->all();
        return $this->render('common', ['orders' => $orders]);
        
    }

    public function actionFind()
    {

        $orders = (new Query())->select('count(*) as count, user_id, sum(amount) as total')
            ->from('orders')
            ->groupBy('user_id')
            ->all();



//        $orders = (new Query())
//            ->select(['user_id', 'COUNT(*) as count', 'SUM(amount) as total'])
//            ->from('orders')
//            ->groupBy('user_id')
//            ->all();

        return $this->render('find', ['orders' => $orders]);

    }

    public function actionName()
    {

        $subquery = (new Query())->select(['max(amount)'])
            ->from('orders')
            ->where("orders.user_id = users.id");

        $orders = (new Query())->select(['name', 'max_order'=> $subquery])
            ->from('users')
            ->all();



        return $this->render('name', ['orders' => $orders]);

    }

}