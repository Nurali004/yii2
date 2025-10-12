<?php
/**
 * @var $model \common\models\Post
 */

?>

<h2>Search list</h2>




<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Content</th>
        <th>Created at</th>
    </tr>


    <?php foreach ($model as $post): ?>
        <tr>
            <td><?= $post->id ?></td>
            <td><?= $post->title ?></td>
            <td><?= $post->content ?></td>
            <td><?= $post->created_at ?></td>
            <td>
                <?= yii\bootstrap5\Html::a('Update', ['post/update', 'id' => $post->id], ['class' => 'btn btn-primary']) ?>
                <?= yii\bootstrap5\Html::a('View', ['post/view', 'id' => $post->id], ['class' => 'btn btn-success']) ?>
                <?= yii\bootstrap5\Html::a('Delete', ['post/delete', 'id' => $post->id], ['class' => 'btn btn-danger']) ?>

            </td>
        </tr>
    <?php endforeach; ?>
</table>










