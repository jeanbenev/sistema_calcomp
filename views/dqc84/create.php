<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Dqc84 */

$this->title = 'Criar DQC 84';
$this->params['breadcrumbs'][] = ['label' => 'DQC 84', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dqc84-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
