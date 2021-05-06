<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Dqc84 */

$this->title = 'Alterar DQC 84: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'DQC 84', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => 'ID: '.$model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Alterar';
?>
<div class="dqc84-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
