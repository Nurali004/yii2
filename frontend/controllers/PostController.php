<?php

namespace frontend\controllers;

use common\models\Post;
use frontend\models\LanguageForm;
use frontend\models\LoginForm;
use frontend\models\MyModel;
use frontend\models\TasdiqForm;
use Yii;
use yii\data\ActiveDataProvider;
use yii\data\Pagination;
use yii\data\Sort;
use yii\db\Query;
use yii\web\Controller;


class PostController extends Controller
{

    public function actionAdd()
    {
        $model = new Post();
        if (Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());
            if ($model->save()) {
                return $this->redirect(['post/view', 'id' => $model->id]);
            }
        }


        return $this->render('add', ['model' => $model]);

    }

    public function actionList()
    {

        $query = Post::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10,
            ],
            'sort' => [
                'defaultOrder' => ['category_id' => SORT_DESC],
            ]

        ]);


        return $this->render('list', ['dataProvider' => $dataProvider]);

    }

    public function actionView($id)
    {

        $model = Post::findOne($id);

        return $this->render('view', ['model' => $model]);

    }

    public function actionUpdate($id)
    {
        $model = Post::findOne($id);
        if (Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());
            if ($model->update()) {
                return $this->redirect(['/post/list']);
            }
        }
        return $this->render('update', ['model' => $model]);

    }

    public function actionDelete($id)
    {
        $model = Post::findOne($id);
        $model->delete();
        return $this->redirect(['/post/list']);
    }

    public function actionIndex()
    {
        if (Yii::$app->request->isGet) {
            $search = Yii::$app->request->get('search');
            $model = Post::find()->where(['like', 'title', $search])
                ->orWhere(['like', 'content', $search])
                ->all();

        }

        return $this->render('index', ['model' => $model, 'search' => $search]);


    }

    public function actionFormat()
    {
        // echo Yii::$app->formatter->asDate('now', 'php:Y-m-d');
        //  echo Yii::$app->formatter->asPercent('0.125', '2');
        // echo Yii::$app->formatter->asCurrency('100');
        //
        // echo Yii::$app->formatter->asBoolean(false);
        //  echo Yii::$app->formatter->asDate('now', 'php:d.m.Y');
        // echo Yii::$app->formatter->asTime(date('Y-m-d H:i:s'));
        //   echo Yii::$app->formatter->asDatetime(date('Y-m-d H:i:s'));
        // echo Yii::$app->formatter->asTimestamp(date('Y-m-d H:i:s'));
        // echo Yii::$app->formatter->asRelativeTime('2025-10-08, 18:11');
        echo Yii::$app->formatter->asDate(date('d.m.Y'), 'full');


    }

}