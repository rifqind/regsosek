<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Krt $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Krts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="krt-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'id_sls',
            'r101',
            'r102',
            'r103',
            'r104',
            'r105',
            'r106',
            'r108',
            'r110',
            'r111',
            'r112',
            'r114',
            'r115',
            'r301a',
            'r301b',
            'r302',
            'r303',
            'r304',
            'r305',
            'r306a',
            'r306b',
            'r307a',
            'r307b1',
            'r307b2',
            'r307b3',
            'r308',
            'r309a',
            'r309b',
            'r310',
            'r501a',
            'r501a_bln',
            'r501a_thn',
            'r501b',
            'r501b_bln',
            'r501b_thn',
            'r501c',
            'r501c_bln',
            'r501c_thn',
            'r501d',
            'r501d_bln',
            'r501d_thn',
            'r501e',
            'r501e_bln',
            'r501e_thn',
            'r502a',
            'r502b',
            'r502c',
            'r502d',
            'r502e',
            'r502f',
            'r502g',
            'r502h',
            'r502i',
            'r502j',
            'r502k',
            'r502l',
            'r502m',
            'r502n',
            'r503a',
            'r503b',
            'r504a',
            'r504b',
            'r504c',
            'r504d',
            'r504e',
            'r505',
            'r506',
            'flag_error',
            'status_kirim',
        ],
    ]) ?>

</div>
