<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Krt $model */

$this->title = 'Update Krt: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Krts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="krt-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
