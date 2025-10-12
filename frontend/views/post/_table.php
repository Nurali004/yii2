


<table class="table">
    <tr>
        <th>Name</th>
        <th>Age</th>
    </tr>
    <?php foreach ($posts as $post): ?>
        <tr>
            <td><?= $post['name'] ?></td>
            <td><?= $post['age'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>

