<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Dqc841 */

$this->title = 'Criar DQC 841';
$this->params['breadcrumbs'][] = ['label' => 'DQC 841', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dqc841-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
