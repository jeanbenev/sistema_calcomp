<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Dqcmodel */

$this->title = 'Alterar DQC Model: ' . $model->model;
$this->params['breadcrumbs'][] = ['label' => 'Gerenciar DQC Model', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->model, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dqcmodel-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
