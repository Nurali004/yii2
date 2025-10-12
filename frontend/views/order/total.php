<?php

/**
 * @var $command array
 */

?>

<table class="table table-bordered table-striped table-hover table-condensed">
    <tr>
        <th>User ID</th>
        <th>Total Orders</th>
        <th>Total Amount</th>
    </tr>

    <?php foreach ($command as $row): ?>
        <tr>
            <td><?= $row['user_id'] ?></td>
            <td><?= $row['total_count'] ?></td>
            <td><?= $row['total_amount'] ?></td>
        </tr>
    <?php endforeach; ?>

</table>
