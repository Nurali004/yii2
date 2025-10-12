<?php
/**
 * @var $product array
 */
?>

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Stock</th>
    </tr>
    <tr>
        <td><?= $product['id'] ?></td>
        <td><?= $product['name'] ?></td>
        <td><?= $product['stock'] ?></td>
    </tr>
</table>

