<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use kartik\dialog\Dialog;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Dqc84Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Exportar Dados';
$this->params['breadcrumbs'][] = $this->title;

Dialog::widget();

$this->registerJs('if(window.location.search.search("report=true") === 1){
    window.location = window.location.pathname;
}
function exportarExcell(){
    window.location = window.location.pathname;
}');


?>
<div class="dqc84-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::button('Exportar Dados', ['class'=>'btn btn-success', 'onclick'=>'window.location=window.location.href+"&report=true";']) ?>
    </p>

    <?php Pjax::begin(); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'model',
                'value' => function ($data) {
                    return $data->fatPartNo->model0->model;
                },
                'filter' => $searchModel->getModelOptions(),
                'filterInputOptions' => ['prompt' => '..:: Selecione ::..', 'class' => 'form-control', 'id' => null]
            ],
            [
                'attribute' => 'fat_part_no',
                'value' => function ($data) {
                    return $data->fatPartNo->fat_part_no;
                },
                'filter' => $searchModel->getFatPartNoOptions(),
                'filterInputOptions' => ['prompt' => '..:: Selecione ::..', 'class' => 'form-control', 'id' => null]
            ],
            [
                'attribute' => 'total_location',
                'value' => function ($data) {
                    return $data->fatPartNo->total_location;
                },
            ],
            'parts_no',
            'unt_usg',
            'description',
            // ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
