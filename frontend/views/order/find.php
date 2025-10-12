<table class="table table-bordered">
    <tr>
        <th>User ID</th>
        <th>Buyurtmalar soni</th>
        <th>Umumiy summa</th>
    </tr>
    <?php foreach ($orders as $row): ?>
        <tr>
            <td><?= $row['user_id'] ?></td>
            <td><?= $row['count'] ?></td>
            <td><?= $row['total'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>

