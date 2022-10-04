<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Krt $model */

$this->title = 'Create Krt';
$this->params['breadcrumbs'][] = ['label' => 'Krts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="krt-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
