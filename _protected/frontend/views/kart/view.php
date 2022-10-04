<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Kart $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Karts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="kart-view">

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
            'id_rt',
            'r101',
            'r102',
            'r103',
            'r104',
            'r105',
            'r106',
            'r401',
            'r402',
            'r403',
            'r404',
            'r405',
            'r406tgl',
            'r406bln',
            'r406thn',
            'r407',
            'r408',
            'r409',
            'r410',
            'r411',
            'r412',
            'r413',
            'r414',
            'r415',
            'r416',
            'r416a',
            'r416b',
            'r417',
            'r418',
            'r419',
            'r420',
            'r421',
            'r422',
            'r423',
            'r424',
            'r425',
            'r426',
            'r427',
            'r428a',
            'r428b',
            'r428c',
            'r428d',
            'r428e',
            'r428f',
            'r428g',
            'r428h',
            'r428i',
            'r428j',
            'r429',
            'r430',
            'r431a',
            'r431b',
            'r431c',
            'r431d',
            'r431e',
            'r431f',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
