<?php

$form = \yii\bootstrap5\ActiveForm::begin(); ?>
<?= $form->field($lang, 'til')->dropDownList(
    ['uzbek'=>'Uzbek', 'enlish'=>'English', 'russian'=>'Russian'], ['prompt'=>'Tilni tanlang']
) ?>
<?= \yii\helpers\Html::submitButton('Yuborish', ['class' => 'btn btn-primary']) ?>
<?php \yii\bootstrap5\ActiveForm::end(); ?>


