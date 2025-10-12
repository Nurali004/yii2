<?php

namespace frontend\controllers;

use common\models\Author;
use common\models\User;
use yii\web\Controller;

class AuthorController extends Controller
{
    public function actionList(){
        $model = Author::find()->all();
        return $this->render('list', ['model' => $model]);
    }

}