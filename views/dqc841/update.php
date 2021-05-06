<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Dqc841 */

$this->title = 'Alterar DQC 841: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'DQC 841', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => 'ID: '.$model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Alterar';
?>
<div class="dqc841-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
