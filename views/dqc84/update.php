<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Dqc84 */

$this->title = 'Alterar DQC 84: ' . $model->fat_part_no;
$this->params['breadcrumbs'][] = ['label' => 'Gerenciar DQC 84', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->fat_part_no, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dqc84-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
