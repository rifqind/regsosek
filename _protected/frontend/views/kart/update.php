<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Kart $model */

$this->title = 'Update Kart: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Karts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kart-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
