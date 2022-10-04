<?php

namespace backend\controllers;

use common\models\FormLogin;
use common\models\User;
use Yii;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\data\SqlDataProvider;
/**
 * Site controller
 */
class SiteController extends Controller
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
                        'actions' => ['logout', 'index', 'kec', 'desa', 'sls', 'createpass', 'eror', 'clean', 'approved', 'unapproved'],
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
            $sql = 'SELECT `id_kab`,`nama_kab`, SUM(`j_keluarga`) AS target_prelist, SUM(`realisasi_clean`) AS realisasi_clean, ROUND(SUM(realisasi_clean)*100.0/SUM(j_keluarga),2) AS persentase_clean, SUM(`realisasi_error`) AS realisasi_error, ROUND(SUM(realisasi_error)*100.0/SUM(j_keluarga),2) AS persentase_error FROM `master_wilayah` GROUP BY id_kab';
        }

        else{
            $sql = 'SELECT `id_kab`,`nama_kab`, SUM(`j_keluarga`) AS target_prelist, SUM(`realisasi_clean`) AS realisasi_clean, ROUND(SUM(realisasi_clean)*100.0/SUM(j_keluarga),2) AS persentase_clean, SUM(`realisasi_error`) AS realisasi_error, ROUND(SUM(realisasi_error)*100.0/SUM(j_keluarga),2) AS persentase_error FROM `master_wilayah` WHERE id_kab ='.$kabkot.' GROUP BY id_kab';
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
    
    public function actionEror()
    {
        $updateRecord = Yii::$app->db->createCommand()->update('master_wilayah', ['realisasi_error' => 0])->execute();
        
        $sql = 'SELECT id_sls, count(*) as jumlah_error
         FROM `k_rt`
         WHERE `flag_error`= 1 and `flag_simpan` = 2 
         GROUP BY `id_sls`';
         
        $connection = Yii::$app->db;
        $command = $connection->createCommand($sql);
        $result = $command->queryAll();

        $connection = Yii::$app->db2;
        $command = $connection->createCommand($sql);
        $result = array_merge($result, $command->queryAll());
        
        $connection = Yii::$app->db3;
        $command = $connection->createCommand($sql);
        $result = array_merge($result, $command->queryAll());
        
        $connection = Yii::$app->db4;
        $command = $connection->createCommand($sql);
        $result = array_merge($result, $command->queryAll());
        
        $connection = Yii::$app->db5;
        $command = $connection->createCommand($sql);
        $result = array_merge($result, $command->queryAll());
        
        $connection = Yii::$app->db6;
        $command = $connection->createCommand($sql);
        $result = array_merge($result, $command->queryAll());
        
        $connection = Yii::$app->db7;
        $command = $connection->createCommand($sql);
        $result = array_merge($result, $command->queryAll());
        
        $connection = Yii::$app->db8;
        $command = $connection->createCommand($sql);
        $result = array_merge($result, $command->queryAll());
        
        $connection = Yii::$app->db9;
        $command = $connection->createCommand($sql);
        $result = array_merge($result, $command->queryAll());
        
        $connection = Yii::$app->db10;
        $command = $connection->createCommand($sql);
        $result = array_merge($result, $command->queryAll());
        
        $connection = Yii::$app->db11;
        $command = $connection->createCommand($sql);
        $result = array_merge($result, $command->queryAll());
        
        $connection = Yii::$app->db12;
        $command = $connection->createCommand($sql);
        $result = array_merge($result, $command->queryAll());
        
        $connection = Yii::$app->db13;
        $command = $connection->createCommand($sql);
        $result = array_merge($result, $command->queryAll());
        
        $connection = Yii::$app->db14;
        $command = $connection->createCommand($sql);
        $result = array_merge($result, $command->queryAll());
        
        $connection = Yii::$app->db15;
        $command = $connection->createCommand($sql);
        $result = array_merge($result, $command->queryAll());
        
        
        foreach($result as $key => $val) {
            $updateRecord = Yii::$app->db->createCommand()->update('master_wilayah', ['realisasi_error' => $val['jumlah_error']], ['id' => $val['id_sls']])->execute();
        }
        // var_dump ($result);

    }
    
    public function actionClean()
    {
        $updateRecord = Yii::$app->db->createCommand()->update('master_wilayah', ['realisasi_clean' => 0])->execute();
        $sql = 'SELECT id_sls, count(*) as jumlah_clean
         FROM `k_rt`
         WHERE `flag_error`= 2 and `flag_simpan` = 2 
         GROUP BY `id_sls`';
         
        $connection = Yii::$app->db;
        $command = $connection->createCommand($sql);
        $result = $command->queryAll();

        $connection = Yii::$app->db2;
        $command = $connection->createCommand($sql);
        $result = array_merge($result, $command->queryAll());
        
        $connection = Yii::$app->db3;
        $command = $connection->createCommand($sql);
        $result = array_merge($result, $command->queryAll());
        
        $connection = Yii::$app->db4;
        $command = $connection->createCommand($sql);
        $result = array_merge($result, $command->queryAll());
        
        $connection = Yii::$app->db5;
        $command = $connection->createCommand($sql);
        $result = array_merge($result, $command->queryAll());
        
        $connection = Yii::$app->db6;
        $command = $connection->createCommand($sql);
        $result = array_merge($result, $command->queryAll());
        
        $connection = Yii::$app->db7;
        $command = $connection->createCommand($sql);
        $result = array_merge($result, $command->queryAll());
        
        $connection = Yii::$app->db8;
        $command = $connection->createCommand($sql);
        $result = array_merge($result, $command->queryAll());
        
        $connection = Yii::$app->db9;
        $command = $connection->createCommand($sql);
        $result = array_merge($result, $command->queryAll());
        
        $connection = Yii::$app->db10;
        $command = $connection->createCommand($sql);
        $result = array_merge($result, $command->queryAll());
        
        $connection = Yii::$app->db11;
        $command = $connection->createCommand($sql);
        $result = array_merge($result, $command->queryAll());
        
        $connection = Yii::$app->db12;
        $command = $connection->createCommand($sql);
        $result = array_merge($result, $command->queryAll());
        
        $connection = Yii::$app->db13;
        $command = $connection->createCommand($sql);
        $result = array_merge($result, $command->queryAll());
        
        $connection = Yii::$app->db14;
        $command = $connection->createCommand($sql);
        $result = array_merge($result, $command->queryAll());
        
        $connection = Yii::$app->db15;
        $command = $connection->createCommand($sql);
        $result = array_merge($result, $command->queryAll());
        
        
        foreach($result as $key => $val) {
            $updateRecord = Yii::$app->db->createCommand()->update('master_wilayah', ['realisasi_clean' => $val['jumlah_clean']], ['id' => $val['id_sls']])->execute();
        }
        // var_dump ($result);

    }
    
    public function actionApproved()
    {
        $updateRecord = Yii::$app->db->createCommand()->update('master_wilayah', ['koseka_approved' => 0])->execute();
        
        $sql = 'SELECT id_sls, count(*) as approved
         FROM `k_rt`
         WHERE `status_koseka`= 2 and `flag_simpan` = 2 and `flag_error` = 2
         GROUP BY `id_sls`';
         
        $connection = Yii::$app->db;
        $command = $connection->createCommand($sql);
        $result = $command->queryAll();

        $connection = Yii::$app->db2;
        $command = $connection->createCommand($sql);
        $result = array_merge($result, $command->queryAll());
        
        $connection = Yii::$app->db3;
        $command = $connection->createCommand($sql);
        $result = array_merge($result, $command->queryAll());
        
        $connection = Yii::$app->db4;
        $command = $connection->createCommand($sql);
        $result = array_merge($result, $command->queryAll());
        
        $connection = Yii::$app->db5;
        $command = $connection->createCommand($sql);
        $result = array_merge($result, $command->queryAll());
        
        $connection = Yii::$app->db6;
        $command = $connection->createCommand($sql);
        $result = array_merge($result, $command->queryAll());
        
        $connection = Yii::$app->db7;
        $command = $connection->createCommand($sql);
        $result = array_merge($result, $command->queryAll());
        
        $connection = Yii::$app->db8;
        $command = $connection->createCommand($sql);
        $result = array_merge($result, $command->queryAll());
        
        $connection = Yii::$app->db9;
        $command = $connection->createCommand($sql);
        $result = array_merge($result, $command->queryAll());
        
        $connection = Yii::$app->db10;
        $command = $connection->createCommand($sql);
        $result = array_merge($result, $command->queryAll());
        
        $connection = Yii::$app->db11;
        $command = $connection->createCommand($sql);
        $result = array_merge($result, $command->queryAll());
        
        $connection = Yii::$app->db12;
        $command = $connection->createCommand($sql);
        $result = array_merge($result, $command->queryAll());
        
        $connection = Yii::$app->db13;
        $command = $connection->createCommand($sql);
        $result = array_merge($result, $command->queryAll());
        
        $connection = Yii::$app->db14;
        $command = $connection->createCommand($sql);
        $result = array_merge($result, $command->queryAll());
        
        $connection = Yii::$app->db15;
        $command = $connection->createCommand($sql);
        $result = array_merge($result, $command->queryAll());
        
        
        foreach($result as $key => $val) {
            $updateRecord = Yii::$app->db->createCommand()->update('master_wilayah', ['koseka_approved' => $val['approved']], ['id' => $val['id_sls']])->execute();
        }
        // var_dump ($result);

    }
    
    public function actionUnapproved()
    {
        $updateRecord = Yii::$app->db->createCommand()->update('master_wilayah', ['koseka_unapproved' =>0])->execute();
        
        $sql = 'SELECT id_sls, count(*) as unapproved
         FROM `k_rt`
         WHERE (`status_koseka`= 1 OR `status_koseka`= 3) and `flag_simpan` = 2 and `flag_error` = 2
         GROUP BY `id_sls`';
         
        $connection = Yii::$app->db;
        $command = $connection->createCommand($sql);
        $result = $command->queryAll();

        $connection = Yii::$app->db2;
        $command = $connection->createCommand($sql);
        $result = array_merge($result, $command->queryAll());
        
        $connection = Yii::$app->db3;
        $command = $connection->createCommand($sql);
        $result = array_merge($result, $command->queryAll());
        
        $connection = Yii::$app->db4;
        $command = $connection->createCommand($sql);
        $result = array_merge($result, $command->queryAll());
        
        $connection = Yii::$app->db5;
        $command = $connection->createCommand($sql);
        $result = array_merge($result, $command->queryAll());
        
        $connection = Yii::$app->db6;
        $command = $connection->createCommand($sql);
        $result = array_merge($result, $command->queryAll());
        
        $connection = Yii::$app->db7;
        $command = $connection->createCommand($sql);
        $result = array_merge($result, $command->queryAll());
        
        $connection = Yii::$app->db8;
        $command = $connection->createCommand($sql);
        $result = array_merge($result, $command->queryAll());
        
        $connection = Yii::$app->db9;
        $command = $connection->createCommand($sql);
        $result = array_merge($result, $command->queryAll());
        
        $connection = Yii::$app->db10;
        $command = $connection->createCommand($sql);
        $result = array_merge($result, $command->queryAll());
        
        $connection = Yii::$app->db11;
        $command = $connection->createCommand($sql);
        $result = array_merge($result, $command->queryAll());
        
        $connection = Yii::$app->db12;
        $command = $connection->createCommand($sql);
        $result = array_merge($result, $command->queryAll());
        
        $connection = Yii::$app->db13;
        $command = $connection->createCommand($sql);
        $result = array_merge($result, $command->queryAll());
        
        $connection = Yii::$app->db14;
        $command = $connection->createCommand($sql);
        $result = array_merge($result, $command->queryAll());
        
        $connection = Yii::$app->db15;
        $command = $connection->createCommand($sql);
        $result = array_merge($result, $command->queryAll());
        
        
        foreach($result as $key => $val) {
            $updateRecord = Yii::$app->db->createCommand()->update('master_wilayah', ['koseka_unapproved' => $val['unapproved']], ['id' => $val['id_sls']])->execute();
        }
        // var_dump ($result);

    }
    

    public function actionKec($id)
    {

        $sql = 'SELECT `id_kab`, `nama_kab`, `id_kec`,`nama_kec`, SUM(`j_keluarga`) AS target_prelist, SUM(`realisasi_clean`) AS realisasi_clean, ROUND(SUM(realisasi_clean)*100.0/SUM(j_keluarga),2) AS persentase_clean, SUM(`realisasi_error`) AS realisasi_error, ROUND(SUM(realisasi_error)*100.0/SUM(j_keluarga),2) AS persentase_error FROM `master_wilayah` WHERE `id_kab` ='.$id.' GROUP BY id_kec';

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

        $sql = 'SELECT `id_kec`,`nama_kec`, `id_desa`,`nama_desa`, SUM(`j_keluarga`) AS target_prelist, SUM(`realisasi_clean`) AS realisasi_clean, ROUND(SUM(realisasi_clean)*100.0/SUM(j_keluarga),2) AS persentase_clean, SUM(`realisasi_error`) AS realisasi_error, ROUND(SUM(realisasi_error)*100.0/SUM(j_keluarga),2) AS persentase_error FROM `master_wilayah` WHERE `id_kec` ='.$id.' GROUP BY id_desa';

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

        $sql = 'SELECT `id_desa`,`nama_desa`, `id_sls`,`nama_sls`, CAST(`j_keluarga` AS UNSIGNED ) AS target_prelist, `realisasi_clean`, ROUND(realisasi_clean*100.0/j_keluarga,2) AS persentase_clean, `realisasi_error`, ROUND(realisasi_error*100.0/j_keluarga,2) AS persentase_error FROM `master_wilayah` WHERE `id_desa` ='.$id;

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

    /**
     * Login action.
     *
     * @return string|Response
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $this->layout = 'main-login';

        $model = new FormLogin();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            if(Yii::$app->user->identity->role == 3){
                return $this->goBack();
            }
            else{
                Yii::$app->user->logout();
            }
        }

        $model->password = '';

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    // public function actionCreatepass()
    // {
    //     $user = User::find()->all();
    //     foreach ($user as $key => $value) {
    //         $value->setPassword($value->username);
    //         $value->save();
    //     }

    // }
}
