<?php

namespace backend\controllers;

use Yii;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\data\SqlDataProvider;
/**
 * Site controller
 */
class KosekaController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index', 'kec', 'desa', 'sls', 'createpass'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => \yii\web\ErrorAction::class,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $kabkot = Yii::$app->user->identity->kabkot;

        if ($kabkot == 7100) {
            $sql = 'SELECT `id_kab`,`nama_kab`, SUM(`j_keluarga`) AS target_prelist, SUM(`koseka_approved`) AS koseka_approved, ROUND(SUM(koseka_approved)*100.0/SUM(j_keluarga),2) AS persentase_approved, SUM(`koseka_unapproved`) AS koseka_unapproved, ROUND(SUM(koseka_unapproved)*100.0/SUM(j_keluarga),2) AS persentase_unapproved FROM `master_wilayah` GROUP BY id_kab';
        }

        else{
            $sql = 'SELECT `id_kab`,`nama_kab`, SUM(`j_keluarga`) AS target_prelist, SUM(`koseka_approved`) AS koseka_approved, ROUND(SUM(koseka_approved)*100.0/SUM(j_keluarga),2) AS persentase_approved, SUM(`koseka_unapproved`) AS koseka_unapproved, ROUND(SUM(koseka_unapproved)*100.0/SUM(j_keluarga),2) AS persentase_unapproved FROM `master_wilayah` WHERE id_kab ='.$kabkot.' GROUP BY id_kab';
        }
       

        $sqlProvider = new SqlDataProvider([
            'sql' => $sql
        ]);

        $connection = Yii::$app->db;
        $command = $connection->createCommand($sql);
        $result = $command->queryAll();


        return $this->render('index', [
            'data' => $result,
            'sqlProvider' => $sqlProvider,
        ]);
    }

    public function actionKec($id)
    {

        $sql = 'SELECT `id_kab`, `nama_kab`, `id_kec`,`nama_kec`, SUM(`j_keluarga`) AS target_prelist, SUM(`koseka_approved`) AS koseka_approved, ROUND(SUM(koseka_approved)*100.0/SUM(j_keluarga),2) AS persentase_approved, SUM(`koseka_unapproved`) AS koseka_unapproved, ROUND(SUM(koseka_unapproved)*100.0/SUM(j_keluarga),2) AS persentase_unapproved FROM `master_wilayah` WHERE `id_kab` ='.$id.' GROUP BY id_kec';

        $sqlProvider = new SqlDataProvider([
            'sql' => $sql
        ]);

        $connection = Yii::$app->db;
        $command = $connection->createCommand($sql);
        $result = $command->queryAll();


        return $this->render('kec', [
            'data' => $result,
            'sqlProvider' => $sqlProvider,
        ]);
    }

    public function actionDesa($id)
    {

        $sql = 'SELECT `id_kec`,`nama_kec`, `id_desa`,`nama_desa`, SUM(`j_keluarga`) AS target_prelist, SUM(`koseka_approved`) AS koseka_approved, ROUND(SUM(koseka_approved)*100.0/SUM(j_keluarga),2) AS persentase_approved, SUM(`koseka_unapproved`) AS koseka_unapproved, ROUND(SUM(koseka_unapproved)*100.0/SUM(j_keluarga),2) AS persentase_unapproved FROM `master_wilayah` WHERE `id_kec` ='.$id.' GROUP BY id_desa';

        $sqlProvider = new SqlDataProvider([
            'sql' => $sql
        ]);

        $connection = Yii::$app->db;
        $command = $connection->createCommand($sql);
        $result = $command->queryAll();


        return $this->render('desa', [
            'data' => $result,
            'sqlProvider' => $sqlProvider,
        ]);
    }

    public function actionSls($id)
    {

        $sql = 'SELECT `id_desa`,`nama_desa`, `id_sls`,`nama_sls`, CAST(`j_keluarga` AS UNSIGNED ) AS target_prelist, `koseka_approved`, ROUND(koseka_approved*100.0/j_keluarga,2) AS persentase_approved, `koseka_unapproved`, ROUND(koseka_unapproved*100.0/j_keluarga,2) AS persentase_unapproved FROM `master_wilayah` WHERE `id_desa` ='.$id;

        $sqlProvider = new SqlDataProvider([
            'sql' => $sql
        ]);

        $connection = Yii::$app->db;
        $command = $connection->createCommand($sql);
        $result = $command->queryAll();


        return $this->render('sls', [
            'data' => $result,
            'sqlProvider' => $sqlProvider,
        ]);
    }

}
