<?php

namespace frontend\controllers;

use Yii;
use yii\db\Query;
use yii\web\Controller;

class ProductController extends Controller
{
    public function actionTest(){
        $product = Yii::$app->db->createCommand()->update('products', ['stock' => 'stock-1'], 'id = :id', [':id' => 1])->execute();



        return $this->render('test', ['product' => $product]);
    }

    public function actionView(){

        $product = Yii::$app->db->createCommand("SELECT * FROM products where id = 1")->queryOne();
        return $this->render('view', ['product' => $product]);
    }

    public function actionPhone()
    {
        $products =  (new Query())->select('*')
            ->from('products')
            ->where(['like', 'name', 'phone'])
            ->all();
        return $this->render('phone', ['products' => $products]);
        
    }

}