<?php
/**
 * @var $command array
 */
?>
<table class="table table-bordered table-striped table-hover table-condensed">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Max Order</th>
    </tr>

    <?php foreach ($command as $row): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['max_order'] ?? '-' ?></td>
        </tr>
    <?php endforeach; ?>
</table>

