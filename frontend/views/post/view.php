<?php

/**
 * @var $model
 */


?>

<h3>News view</h3>

<?= yii\bootstrap5\Html::a('Update', ['post/update', 'id' => $model->id], ['class' => 'btn btn-primary', 'style' => 'margin-right: 7px']) ?>
<?= yii\bootstrap5\Html::a('Delete', ['post/delete', 'id' => $model->id], ['class' => 'btn btn-danger']) ?>


<table style="margin-top: 20px" class="table table-bordered table-striped table-hover table-condensed">
    <tr>
        <th>author Id</th>
        <th>category Id</th>
        <th>title</th>
        <th>content</th>
        <th>created at</th>
    </tr>


        <tr>
            <td><?= $model->author->username ?></td>
            <td><?= $model->category->title ?></td>
            <td><?= $model->title ?></td>
            <td><?= $model->content ?></td>
            <td><?= $model->created_at ?></td>
        </tr>


</table>
