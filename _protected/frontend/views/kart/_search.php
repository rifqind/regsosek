<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\KartSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="kart-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_rt') ?>

    <?= $form->field($model, 'r101') ?>

    <?= $form->field($model, 'r102') ?>

    <?= $form->field($model, 'r103') ?>

    <?php // echo $form->field($model, 'r104') ?>

    <?php // echo $form->field($model, 'r105') ?>

    <?php // echo $form->field($model, 'r106') ?>

    <?php // echo $form->field($model, 'r401') ?>

    <?php // echo $form->field($model, 'r402') ?>

    <?php // echo $form->field($model, 'r403') ?>

    <?php // echo $form->field($model, 'r404') ?>

    <?php // echo $form->field($model, 'r405') ?>

    <?php // echo $form->field($model, 'r406tgl') ?>

    <?php // echo $form->field($model, 'r406bln') ?>

    <?php // echo $form->field($model, 'r406thn') ?>

    <?php // echo $form->field($model, 'r407') ?>

    <?php // echo $form->field($model, 'r408') ?>

    <?php // echo $form->field($model, 'r409') ?>

    <?php // echo $form->field($model, 'r410') ?>

    <?php // echo $form->field($model, 'r411') ?>

    <?php // echo $form->field($model, 'r412') ?>

    <?php // echo $form->field($model, 'r413') ?>

    <?php // echo $form->field($model, 'r414') ?>

    <?php // echo $form->field($model, 'r415') ?>

    <?php // echo $form->field($model, 'r416') ?>

    <?php // echo $form->field($model, 'r416a') ?>

    <?php // echo $form->field($model, 'r416b') ?>

    <?php // echo $form->field($model, 'r417') ?>

    <?php // echo $form->field($model, 'r418') ?>

    <?php // echo $form->field($model, 'r419') ?>

    <?php // echo $form->field($model, 'r420') ?>

    <?php // echo $form->field($model, 'r421') ?>

    <?php // echo $form->field($model, 'r422') ?>

    <?php // echo $form->field($model, 'r423') ?>

    <?php // echo $form->field($model, 'r424') ?>

    <?php // echo $form->field($model, 'r425') ?>

    <?php // echo $form->field($model, 'r426') ?>

    <?php // echo $form->field($model, 'r427') ?>

    <?php // echo $form->field($model, 'r428a') ?>

    <?php // echo $form->field($model, 'r428b') ?>

    <?php // echo $form->field($model, 'r428c') ?>

    <?php // echo $form->field($model, 'r428d') ?>

    <?php // echo $form->field($model, 'r428e') ?>

    <?php // echo $form->field($model, 'r428f') ?>

    <?php // echo $form->field($model, 'r428g') ?>

    <?php // echo $form->field($model, 'r428h') ?>

    <?php // echo $form->field($model, 'r428i') ?>

    <?php // echo $form->field($model, 'r428j') ?>

    <?php // echo $form->field($model, 'r429') ?>

    <?php // echo $form->field($model, 'r430') ?>

    <?php // echo $form->field($model, 'r431a') ?>

    <?php // echo $form->field($model, 'r431b') ?>

    <?php // echo $form->field($model, 'r431c') ?>

    <?php // echo $form->field($model, 'r431d') ?>

    <?php // echo $form->field($model, 'r431e') ?>

    <?php // echo $form->field($model, 'r431f') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
