<?php

$this->title = "Book view";
$this->params['breadcrumbs'][] = ['label' => 'Books', 'url' => ['list']];
$this->params['breadcrumbs'][] = $this->title;



?>


<h3>View Page</h3>
<!---->
<!--<div class="alert alert-success" role="alert">-->
<!--    --><?php //= Yii::$app->session->getFlash('success') ?>
<!--</div>-->

<div>
  <p>
      <?=

      \yii\helpers\Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary'])


      ?>
      <?= \yii\bootstrap5\Html::a('Delete', ['delete', 'id' => $model->id],['class' => 'btn btn-danger']) ?>

  </p>
</div>


<table class="table table-bordered table-striped table-hover">
    <tr>
        <th>ID</th>
        <th>TITLE</th>
        <th>DESCRIPTION</th>
        <th>CREATED AT</th>
    </tr>


    <tr>
        <td><?= $model->id ?></td>
        <td><?= $model->title ?></td>
        <td><?= $model->description ?></td>
        <td><?= $model->created_at ?></td>
    </tr>


</table>





