<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Krt;
use frontend\models\KrtSearch;
use frontend\models\Kart;
use frontend\models\KartSearch;
use frontend\models\MasterWilayah;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Json;
use yii\filters\AccessControl;
use yii\base\DynamicModel;

/**

 * KrtController implements the CRUD actions for Krt model.
 */
class KrtController extends Controller
{
    /**
     * @inheritDoc
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
                        'actions' => ['logout', 'contact', 'pml', 'koseka', 'desa', 'sls', 'create', 'simpan', 'entrianggota', 'validasi', 'entri', 'updateart', 'submit', 'submitkoseka', 'delete', 'deleteart', 'reject', 'edit', 'editart', 'submitedit', 'statusdokumen' ],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
                'denyCallback' => function($rule, $action) {
                    Yii::$app->response->redirect(['site/index']); 
                },
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
     * Lists all Krt models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new KrtSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);


        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionKoseka()
    {   
        if (Yii::$app->user->identity->role != 1) {
            return $this->redirect(['site/index']);
        }

        $wilayah = new DynamicModel(['id_kec', 'id_desa', 'id_sls', 'nama_desa', 'nama_sls']);
        $wilayah->addRule(['id_kec', 'id_desa', 'id_sls', 'nama_desa', 'nama_sls'], 'safe');
        $searchModel = new KrtSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);
        $dataProvider->query->where(['id_sls' => 0]);
        $dataProvider->pagination  = false;
        $id_sls = "";
        if (Yii::$app->request->isAjax && $wilayah->load(Yii::$app->request->post())){
            $dataProvider->query->where(['id_sls' => $wilayah->id_sls, 'status_koseka' => 1, 'status_kirim' => 2]);
            $id_sls = $wilayah->id_sls;
            return $this->renderPartial('_kosekapartial', [
                'id_sls' => $id_sls,
                'wilayah' => $wilayah,
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]);
        }

        $this->layout = 'kuesioner';
        return $this->render('koseka',[
            'id_sls' => $id_sls,
            'wilayah' => $wilayah,
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionDesa() {
        $out = [];     
        if (isset($_POST['depdrop_parents'])) {
            $parents = $_POST['depdrop_parents'];
            if ($parents != null){
                $cat_id = $parents[0];
                $out = MasterWilayah::find()
                       ->where(['id_kec'=>$cat_id])
                       ->groupBy('id_desa')
                       ->select(['id_desa as id','CONCAT("[", kode_desa, "] ",nama_desa) as name'])->asArray()->all();
                       echo Json::encode(['output'=>$out, 'selected'=>'']);
                       return;
            }
        }
    }

    public function actionSls() {
        $out = [];     
        if (isset($_POST['depdrop_parents'])) {
            $parents = $_POST['depdrop_parents'];
            if ($parents != null){
                $cat_id = $parents[0];
                $out = MasterWilayah::find()
                       ->where(['id_desa'=>$cat_id])
                       ->select(['id','CONCAT("[", kode_sls6, "] ",nama_sls) as name'])->asArray()->all();
                       echo Json::encode(['output'=>$out, 'selected'=>'']);
                       return;
            }
        }
    }

    public function actionPml()
    {   
        if (Yii::$app->user->identity->role != 2) {
            return $this->redirect(['site/index']);
        }

        $this->layout = 'kuesioner';
        $wilayah = new DynamicModel(['id_kec', 'id_desa', 'id_sls', 'nama_desa', 'nama_sls']);
        $wilayah->addRule(['id_kec', 'id_desa', 'id_sls', 'nama_desa', 'nama_sls'], 'safe');
        $searchModel = new KrtSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);
        $dataProvider->query->where(['id_sls' => 0, 'user' => Yii::$app->user->id]);
        $dataProvider->pagination  = false;
        if (Yii::$app->request->isAjax && $wilayah->load(Yii::$app->request->post())){
            $dataProvider->query->where(['id_sls' => $wilayah->id_sls , 'user' => Yii::$app->user->id]);
            return $this->renderPartial('_gridpartial', [
                'wilayah' => $wilayah,
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]);
        }

        return $this->render('pml', [
            'wilayah' => $wilayah,
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionEntrianggota($id_ruta)
    {
        $model = new Kart(); 

        if ($model->load($this->request->post())){
            $searchModel = new KartSearch();
            $dataProvider = $searchModel->search($this->request->queryParams);

            $kk = Krt::findOne(['id' => $id_ruta]);
            $model->r101 = '71';
            $model->r102 = '01';
            $model->r103 = $kk->r103;
            $model->r104 = $kk->r104;
            $model->r105 = $kk->r105;
            $model->r106 = $kk->r106;
            $model->id_rt = $id_ruta;
            $model->save();
            $dataProvider->query->where(['id_rt' => $id_ruta]);
            return $this->renderPartial('_gridart', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]);
        }
    }

    public function actionUpdateart($id)
    {
        $model = Kart::find()->where(['id' => $id])->one(); 
        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            
        }
        // var_dump($model);
        return $this->renderAjax('updateart', [
            'model' => $model,
        ]);
    }

    public function actionEditart($id)
    {
        $model = Kart::find()->where(['id' => $id])->one(); 
        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            
        }
        // var_dump($model);
        return $this->renderAjax('editart', [
            'model' => $model,
        ]);
    }

    public function actionReject()
    {
        $selected = Yii::$app->request->post('selection');
        
        foreach($selected as $id){
            $model = $this->findModel($id);
            $model->status_koseka = 3;
            $model->save();
        }
        return $this->redirect(['krt/koseka']);
    }

    public function actionDeleteart($id)
    {
        $model = Kart::find()->where(['id' => $id])->one();
        $id_ruta = $model->id_rt;
        $model->delete();
        $searchModel = new KartSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);
        $dataProvider->query->where(['id_rt' => $id_ruta]);
        // var_dump($model);
        return $this->renderPartial('_gridart', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);    
    }

    /**
     * Displays a single Krt model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Krt model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate($id_sls)
    {
        if (Yii::$app->user->identity->role != 2) {
            return $this->redirect(['site/index']);
        }
        $model = new Krt();
        $wilayah = new MasterWilayah;
        $wilayah = MasterWilayah::find()->where(['id' => $id_sls])->one();
        $model = Krt::find()->andWhere(['user' => Yii::$app->user->id, 'flag_simpan' => 1, 'id_sls' => $id_sls])->one();
        if ($model == null) {
            $model = new Krt();
            $model->id_sls = $id_sls;
            $model->r101 = '71';
            $model->r102 = substr(Yii::$app->user->identity->kabkot, -2);
            $model->r103 = $wilayah->kode_kec;
            $model->r104 = $wilayah->kode_desa;
            $model->r105 = $wilayah->kode_sls6;
            $model->r106 = $wilayah->nama_sls;
            $model->user = Yii::$app->user->id;
            $model->save();
        }

        $searchModel = new KartSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);
        $dataProvider->query->where(['id_rt' => $model->id]);

        $this->layout = 'kuesioner';
        return $this->redirect(['entri', 'id' => $model->id]);
        // return $this->render('entriruta', [
        //     'model' => $model,
        //     'searchModel' => $searchModel,
        //     'dataProvider' => $dataProvider,
        // ]);
    }

    /**
     * Updates an existing Krt model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionSimpan($id, $id_sls)
    {
        $model = $this->findModel($id);
        $masterwilayah = MasterWilayah::find()->where(['id' => $id_sls])->one();
        $wilayah = new DynamicModel(['id_kec', 'id_desa', 'id_sls', 'nama_desa', 'nama_sls']);
        $wilayah->addRule(['id_kec', 'id_desa', 'id_sls', 'nama_desa', 'nama_sls'], 'safe');
        $wilayah->id_kec = $masterwilayah->id_kec;
        $wilayah->id_desa = $masterwilayah->id_desa;
        $wilayah->nama_desa = "[".$masterwilayah->kode_desa."] ".$masterwilayah->nama_desa;
        $wilayah->id_sls = $masterwilayah->id;
        $wilayah->nama_sls = "[".$masterwilayah->kode_sls6."] ".$masterwilayah->nama_sls;

        $searchModel = new KrtSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        if ($this->request->isPost && $model->load($this->request->post())) {
        var_dump($model->r301a);
            $this->layout = 'kuesioner';
            $model->flag_simpan = 2;
            $model->save();
            $dataProvider->query->where(['id_sls' => $id_sls]);
            return $this->render('pml', [
                'wilayah' => $wilayah,
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]);
        }
    }

    public function actionEdit($id)
    {
        $model = $this->findModel($id);

        $searchModel = new KartSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        $this->layout = 'kuesioner';
        $dataProvider->query->where(['id_rt' => $id]);
        return $this->render('editruta', [
            'model' => $model,
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionEntri($id)
    {
        $model = $this->findModel($id);

        $searchModel = new KartSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        $this->layout = 'kuesioner';
        $dataProvider->query->where(['id_rt' => $id]);
        return $this->render('entriruta', [
            'model' => $model,
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionValidasi($id, $id_sls)
    {
        $model = $this->findModel($id);

        $searchModel = new KrtSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        if ($this->request->isPost && $model->load($this->request->post())) {
            $this->layout = 'kuesioner';
            //reset flag_error
            $model->flag_error = 1;
            $model->save();
            $art = Kart::find()->where(['id_rt' => $id])->all();
            $dataProvider->query->where(['id_sls' => $id_sls]);
            $model = $model->toArray();
            //$model[] = ['blok4' => $art];
            $model['blok_4'] = $art;
            return Json::encode([
                'ruta' => $model,
            ]);
        }
    }

    public function actionStatusdokumen($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isAjax) {
            $kode = Yii::$app->request->post('kode');
            $model->flag_error = $kode;
            $model->save();
        }
    }

    /**
     * Deletes an existing Krt model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id, $id_sls)
    {
        $this->findModel($id)->delete();
        $wilayah = new DynamicModel(['id_kec', 'id_desa', 'id_sls', 'nama_desa', 'nama_sls']);
        $wilayah->addRule(['id_kec', 'id_desa', 'id_sls', 'nama_desa', 'nama_sls'], 'safe');
        $searchModel = new KrtSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);
        $dataProvider->query->where(['id_sls' => $id_sls , 'user' => Yii::$app->user->id]);
        return $this->renderPartial('_gridpartial', [
            'wilayah' => $wilayah,
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    
    public function actionSubmit($id)
    {
        $model = $this->findModel($id);
        if ($model->flag_error == 2) {
            $model->status_kirim = 2;
            $model->save();

            return $this->redirect(['pml']);
        }
        else {
            return $this->redirect(Yii::$app->request->referrer);
        }
        
    }

    public function actionSubmitedit($id)
    {
        $model = $this->findModel($id);
        $model->status_koseka = 1;
        $model->save();

        return $this->redirect(['pml']);
    }
    
    public function actionSubmitkoseka($id)
    {
        $KK = Krt::find()->where(['id_sls' => $id])->all();
        foreach ($KK as $key => $value) {
            $value->status_koseka = 2;
            $value->save();
        }

        return $this->redirect(['koseka']);
    }
    
    /**
     * Finds the Krt model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Krt the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Krt::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
