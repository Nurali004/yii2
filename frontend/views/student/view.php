<div class="container">
    <div class="row">
        <h2>Student view sahifasi</h2>

        <table class ="table table-striped table-bordered table-hover">
            <tr>
                <th>Name</th>
                <th>Age</th>
            </tr>
            <?php foreach ($students as $key => $value): ?>
                <tr>
                    <td style="text-transform: uppercase"><?= $key ?></td>
                    <td><?= $value ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>
