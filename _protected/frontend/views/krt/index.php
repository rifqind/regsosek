<?php

use frontend\models\Krt;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var frontend\models\KrtSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Krts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="krt-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Krt', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_sls',
            'r101',
            'r102',
            'r103',
            //'r104',
            //'r105',
            //'r106',
            //'r108',
            //'r110',
            //'r111',
            //'r112',
            //'r114',
            //'r115',
            //'r301a',
            //'r301b',
            //'r302',
            //'r303',
            //'r304',
            //'r305',
            //'r306a',
            //'r306b',
            //'r307a',
            //'r307b1',
            //'r307b2',
            //'r307b3',
            //'r308',
            //'r309a',
            //'r309b',
            //'r310',
            //'r501a',
            //'r501a_bln',
            //'r501a_thn',
            //'r501b',
            //'r501b_bln',
            //'r501b_thn',
            //'r501c',
            //'r501c_bln',
            //'r501c_thn',
            //'r501d',
            //'r501d_bln',
            //'r501d_thn',
            //'r501e',
            //'r501e_bln',
            //'r501e_thn',
            //'r502a',
            //'r502b',
            //'r502c',
            //'r502d',
            //'r502e',
            //'r502f',
            //'r502g',
            //'r502h',
            //'r502i',
            //'r502j',
            //'r502k',
            //'r502l',
            //'r502m',
            //'r502n',
            //'r503a',
            //'r503b',
            //'r504a',
            //'r504b',
            //'r504c',
            //'r504d',
            //'r504e',
            //'r505',
            //'r506',
            //'flag_error',
            //'status_kirim',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Krt $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
