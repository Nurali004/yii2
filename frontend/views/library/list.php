<?php


use yii\widgets\ListView;

$this->title = "Book list";
$this->params['breadcrumbs'][] = $this->title;

/**
 * @var $libraries \frontend\controllers\LibraryController
 */

?>

<h3>Books list</h3>

<div class="row row-cols-1 row-cols-md-2 g-4">

<?php

 echo ListView::widget([
         'dataProvider' => $dataProvider,
     'itemView' => '_list',
     'itemOptions' => [
             'tag' => 'b',
         'class' => 'c1',
         'id'=> 'i1'


],
     'pager' => [
             'class'=>'yii\bootstrap5\LinkPager',
             'nextPageLabel' => 'Keyingi',
         'prevPageLabel' => 'Oldingi',


     ],
     'options' => [
             'tag' => null,
         'class' => 'row row-cols-1 row-cols-md-2 g-4',
         'id' => '',
     ],
         'summary' => 'Jami <b>{totalCount}</b> tadan {count} tasi ko`rsatilyapti'
 ])

?>

</div>

<!--<table class="table table-striped table-bordered table-hover">-->
<!--    <tr>-->
<!--        <th>ID</th>-->
<!--        <th>Title</th>-->
<!--        <th>Description</th>-->
<!--        <th>Created at</th>-->
<!--        <th>Actions</th>-->
<!--    </tr>-->
<!--     --><?php //foreach ($dataProvider->getModels() as $book): ?>
<!--        <tr>-->
<!--            <td>--><?php //=$book['id']?><!--</td>-->
<!--            <td>--><?php //=$book['title']?><!--</td>-->
<!--            <td>--><?php //=$book['description']?><!--</td>-->
<!--            <td>--><?php //=$book['created_at']?><!--</td>-->
<!--            <td>-->
<!--                --><?php //=
//                \yii\bootstrap5\Html::a('View', ['library/view', 'id' => $book['id']], ['class' => 'btn btn-primary'])
//                ?>
<!--                --><?php //=
//                \yii\bootstrap5\Html::a('Update', ['library/update', 'id' => $book['id']], ['class' => 'btn btn-success'])?>
<!--                --><?php //=
//                \yii\bootstrap5\Html::a('Delete', ['library/delete', 'id' => $book['id']], ['class' => 'btn btn-danger'])?>
<!--            </td>-->
<!--        </tr>-->
<!---->
<!---->
<!--     --><?php //endforeach; ?>
<!--</table>-->
<!---->
<?php
//
//echo \yii\bootstrap5\LinkPager::widget([
//    'pagination'=> $dataProvider->getPagination(),
//])
//
//
//?>
