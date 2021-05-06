<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Dqc841Search */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dqc841-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'fat_part_no') ?>

    <?= $form->field($model, 'parts_no') ?>

    <?= $form->field($model, 'unt_usg') ?>

    <?= $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'ref_designator') ?>

    <?php // echo $form->field($model, 'update_dt') ?>

    <?php // echo $form->field($model, 'create_dt') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
