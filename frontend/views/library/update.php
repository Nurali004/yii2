


<?php

use yii\bootstrap5\ActiveForm;

$form = \yii\bootstrap5\ActiveForm::begin([
    'id'=>'update-form',
    'method'=>'post',
    'options'=>['enctype'=>'multipart/form-data']
]);


?>

<?= $form->field($books, 'title')->textarea(['rows' => 1]) ?>
<?= $form->field($books, 'description')->textarea(['rows' => 1]) ?>
<?= $form->field($books, 'created_at')->textInput() ?>
<?= \yii\bootstrap5\Html::submitButton('Saqlash', ['class' => 'btn btn-primary']) ?>

<?php
ActiveForm::end();

?>