<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\Dqc841Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Gerenciar DQC 841';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dqc841-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Criar DQC 841', ['create'], ['class' => 'btn btn-success']) ?>
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
                'label' => 'Fat Part No',
                'attribute' => 'fat_part_no',
                'value' => function ($data) {
                    return $data->getFatPartNoText();
                },
                'filter' => $searchModel->getFatPartNoOptions(),
                'filterInputOptions' => ['prompt' => '..:: Selecione o Fat Parts No ::..', 'class' => 'form-control', 'id' => null]
            ],
            'parts_no',
            'unt_usg',
            'description:ntext',
            //'ref_designator:ntext',
            'update_dt',
            'create_dt',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
