<?php
use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;

$form = ActiveForm::begin();
?>

<?= $form->field($login, 'login')->textInput(['placeholder' => 'Login']) ?>
<?= $form->field($login, 'parol')->passwordInput(['placeholder' => 'Parol']) ?>
<?= $form->field($login, 'parol_takror')->passwordInput(['placeholder' => 'Parolni takrorlang']) ?>

<?= Html::submitButton('Yuborish', ['class' => 'btn btn-primary']) ?>

<?php ActiveForm::end(); ?>
