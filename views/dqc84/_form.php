<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Dqc84 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dqc84-form">

    <?php $form = ActiveForm::begin(); ?>

    <? //$form->field($model, 'model')->textInput() ?>

    <?= $form->field($model, 'fat_part_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total_location')->textInput() ?>

    <?= $form->field($model, 'update_dt')->textInput() ?>

    <?= $form->field($model, 'create_dt')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>