<?php
/**
 * @var $model
 */


?>

<table class="table table-bordered table-striped table-hover table-condensed">
    <tr>
        <th>ID</th>
        <th>Title</th>
         <th>Content</th>
        <th>Category</th>
        <th>Author</th>
        <th>Created at</th>

    </tr>

    <?php foreach ($model as $author): ?>
         <?php foreach ($author->posts as $post): ?>
            <tr>
                <td><?= $post->id ?></td>
                <td><?= $post->title ?></td>
                <td><?= $post->content ?></td>
                <td><?= $post->category->title ?></td>
                <td><?= $post->author->username ?></td>
                <td><?= $post->created_at ?></td>

            </tr>
         <?php endforeach ?>


    <?php endforeach; ?>
</table>
