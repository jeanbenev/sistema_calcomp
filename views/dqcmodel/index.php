<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use kartik\dialog\Dialog;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DqcmodelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Gerenciar DQC Model';
$this->params['breadcrumbs'][] = $this->title;

Dialog::widget();

$this->registerJs('if(window.location.search.search("contem=true") === 1){
    krajeeDialog.alert("Esse registro não pode ser excluído pois está associado a algum projeto.", function (result) {
        if (result) {
            window.location = window.location.pathname;
        }
    });
}');

?>
<div class="dqcmodel-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Criar DQC Model', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'model',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
