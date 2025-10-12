<?php
/**
 * @var $orders array
 */
?>

<table class="table table-bordered table-striped">
    <tr>
        <th>Order ID</th>
        <th>Foydalanuvchi</th>
        <th>Summasi</th>
    </tr>

    <?php foreach ($orders as $order): ?>
        <tr>
            <td><?= $order['id'] ?></td>
            <td><?= $order['name'] ?></td>
            <td><?= $order['amount'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>

