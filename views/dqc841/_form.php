<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Dqc841 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dqc841-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fat_part_no')->dropDownList($model->getFatPartNoOptions(), ['prompt'=>'..:: Selecione o FatPartNo ::..']); ?>

    <?= $form->field($model, 'parts_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'unt_usg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ref_designator')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'update_dt')->textInput() ?>

    <?= $form->field($model, 'create_dt')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
