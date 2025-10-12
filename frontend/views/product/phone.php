<?php
/**
 * @var $products array
 */
?>

<table class="table table-bordered table-striped">
    <tr>
        <th>ID</th>
        <th>Nomi</th>
        <th>Narxi</th>
    </tr>

    <?php foreach ($products as $product): ?>
        <tr>
            <td><?= $product['id'] ?></td>
            <td><?= $product['name'] ?></td>
            <td><?= $product['stock'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>

