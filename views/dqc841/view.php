<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Dqc841 */

$this->title = 'Visualizar DQC 841: '.$model->parts_no;
$this->params['breadcrumbs'][] = ['label' => 'DQC 841', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="dqc841-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Alterar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Deletar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Você realmente deseja excluir esse item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [ 
                'label' => 'Fat Part No', 
                'value'  => $model->fatPartNo->fat_part_no, 
            ], 
            'parts_no',
            'unt_usg',
            'description:ntext',
            'ref_designator:ntext',
            'update_dt',
            'create_dt',
        ],
    ]) ?>

</div>
