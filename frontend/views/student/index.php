<h2>Student List</h2>
<?php  echo \yii\helpers\Html::a('View',['student/view'],['class'=>'btn btn-primary']); ?>
<table class="table">
    <tr>
        <th>Name</th>
        <th>Age</th>
    </tr>

    <?php foreach ($students as $student): ?>
         <tr>
             <td><?= $student['name'] ?></td>
             <td><?= $student['age'] ?></td>
         </tr>
    <?php endforeach; ?>
</table>
