<?php

/**
 * @var $sort
 */

?>

<h2>News list</h2>

<form style="text-align: center" method="get" action="/post/index">
    <input type="text" name="search" placeholder="Search...">
    <button style="border-radius: 100%" type="submit">🔍</button>
</form>


<table class="table">
    <tr>
        <th><?= $dataProvider->sort->link('id') ?></th>
        <th><?= $dataProvider->sort->link('author_id') ?></th>
        <th><?= $dataProvider->sort->link('category_id') ?></th>
        <th><?= $dataProvider->sort->link('title') ?></th>
        <th><?= $dataProvider->sort->link('content') ?></th>
        <th><?=  $dataProvider->sort->link('created_at') ?></th>
        <th>Actions</th>
    </tr>

    <?php use yii\bootstrap5\LinkPager;

    foreach ($dataProvider->getModels() as $post): ?>
        <tr>
            <td><?= $post->id ?></td>
            <td><?= $post->author->username ?></td>
            <td><?= $post->category->title ?></td>
            <td><?= $post->title ?></td>
            <td><?= $post->content ?></td>
            <td><?= date('d.m.Y', strtotime($post->created_at)) ?></td>
            <td>
                <?= yii\bootstrap5\Html::a('Update', ['post/update', 'id' => $post->id], ['class' => 'btn btn-primary']) ?>
                <?= yii\bootstrap5\Html::a('View', ['post/view', 'id' => $post->id], ['class' => 'btn btn-success']) ?>
                <?= yii\bootstrap5\Html::a('Delete', ['post/delete', 'id' => $post->id], ['class' => 'btn btn-danger']) ?>
            </td>

        </tr>

    <?php endforeach; ?>
</table>

<?php

echo LinkPager::widget([
        'nextPageLabel' => 'keyingi',
        'prevPageLabel' => 'oldingi',
        'pagination' => $dataProvider->getPagination(),
        'linkOptions' => ['class' => 'page-link'],


]);

?>
