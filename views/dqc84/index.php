<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\Dqc84Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Gerenciar DQC 84';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dqc84-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Criar DQC 84', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            [
                'label' => 'Model',
                'attribute' => 'model',
                'value' => function ($data) {
                    return $data->getModelText();
                },
                'filter' => $searchModel->getModelOptions(),
                'filterInputOptions' => ['prompt' => '..:: Selecione o Model ::..', 'class' => 'form-control', 'id' => null]
            ],
            'fat_part_no',
            'total_location',
            'update_dt',
            'create_dt',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
