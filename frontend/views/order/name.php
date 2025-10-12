<?php
/**
 * @var $orders array
 */
?>
<table class="table table-bordered table-striped table-hover table-condensed">
    <tr>
        <th>Ism</th>
        <th>Max summa</th>
    </tr>

    <?php foreach ($orders as $row): ?>
        <tr>
            <td><?= ($row['name']) ?></td>
            <td><?= ($row['max_order']) ?></td>
        </tr>
    <?php endforeach; ?>
</table>

