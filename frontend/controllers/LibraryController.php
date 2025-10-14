<?php

namespace frontend\controllers;

use PharIo\Manifest\Library;
use Yii;
use yii\data\ActiveDataProvider;
use yii\data\ArrayDataProvider;
use yii\data\Pagination;
use yii\web\Controller;
use common\models\Book;

class LibraryController extends Controller
{
    public function actionList()
    {
        $query = Book::find();
        $dataProvider = new ArrayDataProvider([
            'allModels' => $query->all(),
            'pagination' => [
                'pageSize' => 5,

            ],
            'sort' => [

            ]
        ]);

        return $this->render('list', ['dataProvider' => $dataProvider]);

    }

    public function actionView($id)
    {
        $model = Book::find()->where(['id' => $id])->one();

        return $this->render('view', ['model' => $model]);


    }

    public function actionUpdate($id)
    {
       $books = Book::findOne($id);
       if (Yii::$app->request->isPost){
           $books->load(Yii::$app->request->post());
           if ($books->update()){
              return $this->redirect(['/library/list']);
           }
       }
       return $this->render('update', ['books' => $books]);


    }

    public function actionDelete($id){
        $model = Book::findOne($id);
        $model->delete();
        return $this->redirect(['/library/list']);

    }

    public function actionAdd()
    {
       $book = new Book();
       if (Yii::$app->request->isPost) {
           $book->load(Yii::$app->request->post());
           if ($book->save()){
               Yii::$app->session->setFlash('success', "Book added successfully");
               return $this->redirect(['/library/view', 'id'=> $book->id]);
           }
       }
       return $this->render('add', ['book' => $book]);


    }

    public function actionIndex()
    {
        $query = Book::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        return $this->render('index', ['dataProvider' => $dataProvider]);

    }

}