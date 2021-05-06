<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Dqcmodel */

$this->title = 'Criar DQC Model';
$this->params['breadcrumbs'][] = ['label' => 'Gerenciar DQC Model', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dqcmodel-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
