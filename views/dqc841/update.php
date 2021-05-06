<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Dqc841 */

$this->title = 'Alterar DQC 841: ' . $model->parts_no;
$this->params['breadcrumbs'][] = ['label' => 'Gerenciar DQC 841', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->parts_no, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dqc841-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
