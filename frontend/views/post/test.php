<?php

use yii\bootstrap5\ActiveForm;
use yii\helpers\Html;
use yii\bootstrap5;

$form = ActiveForm::begin();


?>

<?= $form->field($test, 'yosh_tasdiq')->checkbox(['label' => 'Men 18 yoshdan kattaman']) ?>

<?= $form->field($test, 'jins')->radioList([
    'erkak' => 'Erkak',
    'ayol' => 'Ayol',
]) ?>

<?= Html::submitButton('Yuborish', ['class' => 'btn btn-primary']) ?>

<?php ActiveForm::end(); ?>

