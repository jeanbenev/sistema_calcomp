<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Dqcmodel */

$this->title = 'Criar Dqcmodel';
$this->params['breadcrumbs'][] = ['label' => 'Dqcmodels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dqcmodel-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
