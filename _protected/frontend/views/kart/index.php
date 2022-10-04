<?php

use frontend\models\Kart;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var frontend\models\KartSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Karts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kart-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kart', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_rt',
            'r101',
            'r102',
            'r103',
            //'r104',
            //'r105',
            //'r106',
            //'r401',
            //'r402',
            //'r403',
            //'r404',
            //'r405',
            //'r406tgl',
            //'r406bln',
            //'r406thn',
            //'r407',
            //'r408',
            //'r409',
            //'r410',
            //'r411',
            //'r412',
            //'r413',
            //'r414',
            //'r415',
            //'r416',
            //'r416a',
            //'r416b',
            //'r417',
            //'r418',
            //'r419',
            //'r420',
            //'r421',
            //'r422',
            //'r423',
            //'r424',
            //'r425',
            //'r426',
            //'r427',
            //'r428a',
            //'r428b',
            //'r428c',
            //'r428d',
            //'r428e',
            //'r428f',
            //'r428g',
            //'r428h',
            //'r428i',
            //'r428j',
            //'r429',
            //'r430',
            //'r431a',
            //'r431b',
            //'r431c',
            //'r431d',
            //'r431e',
            //'r431f',
            //'created_at',
            //'updated_at',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Kart $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
