
<h3>Update Post</h3>

<?php

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

/**
 * @var $model \common\models\Post
 */

$form = ActiveForm::begin([
    'id' => 'post-form',
    'method' => 'post',
    'options' => ['enctype' => 'multipart/form-data'],
]);

?>


<?= $form->field($model, 'title')->textInput() ?>
<?= $form->field($model, 'author_id')->textInput() ?>
<?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>
<?= $form->field($model, 'category_id')->textInput() ?>
<?= Html::submitButton('Saqlash', ['class' => 'btn btn-primary']) ?>

<?php ActiveForm::end();  ?>