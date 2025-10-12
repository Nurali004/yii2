<?php

namespace frontend\controllers;

use common\models\Category;
use yii\web\Controller;

class CategoryController extends Controller
{
    public function actionAdd(){

        $category = new Category();
        $category->title = 'Category 2';
        $category->save();



    }



}