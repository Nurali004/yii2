<?php

/**
 * @var $users \frontend\controllers\DbController
 */

?>

<table class="table table-bordered table-striped table-hover table-condensed">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Age</th>
        <th>City</th>
    </tr>

    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['name'] ?></td>
            <td><?= $user['age'] ?></td>
            <td><?= $user['city'] ?></td>
        </tr>
    <?php endforeach; ?>

</table>
