<h2 style="text-align: center">Book add page</h2>

<?php

/**
 * @var $book
 */

$form = \yii\bootstrap5\ActiveForm::begin([
    'id' => 'add',
    'method' => 'post',
    'options' => ['enctype' => 'multipart/form-data'],
]);

?>



<?= $form->field($book, 'title')->textInput() ?>
<?= $form->field($book, 'description')->textInput() ?>
<?= $form->field($book, 'created_at')->textInput() ?>
<?= \yii\bootstrap5\Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>




<?php

\yii\bootstrap5\ActiveForm::end();

?>
