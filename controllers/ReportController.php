<?php

namespace app\controllers;

use Yii;
use app\models\Dqc84Search;
use app\models\Report;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * Dqc84Controller implements the CRUD actions for Dqc84 model.
 */
class ReportController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

/**
     * Lists all Dqc84 models.
     * @return mixed
     */
    public function actionReport()
    {
        $report = new Report();
        $dataProvider = $report->search(Yii::$app->request->queryParams);
        if(!empty(Yii::$app->request->queryParams['report'])){
            $nomeArquivo = 'REPORT_'.date("dmY-H-i-s");
            $nomeSheet = 'REPORT_'.date("dmY-H-i-s");
            $file = \Yii::createObject([
                'class' => 'codemix\excelexport\ExcelFile',
                'sheets' => [
                    $nomeSheet => [
                        'class' => 'codemix\excelexport\ActiveExcelSheet',
                        // 'query' => Dqc84::find(),
                        'query' => $dataProvider->query,
                        'attributes' => [
                            'fatPartNo.model0.model',
                            'fatPartNo.fat_part_no',
                            'fatPartNo.total_location',
                            'parts_no',
                            'unt_usg',
                            'description',
                        ]
                    ]
                ]
            ]);
            $file->send($nomeArquivo.'.xlsx');
        }

        return $this->render('index', [
            'searchModel' => $report,
            'dataProvider' => $dataProvider,
        ]);
    }
}
