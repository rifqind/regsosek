<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\KrtSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="krt-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_sls') ?>

    <?= $form->field($model, 'r101') ?>

    <?= $form->field($model, 'r102') ?>

    <?= $form->field($model, 'r103') ?>

    <?php // echo $form->field($model, 'r104') ?>

    <?php // echo $form->field($model, 'r105') ?>

    <?php // echo $form->field($model, 'r106') ?>

    <?php // echo $form->field($model, 'r108') ?>

    <?php // echo $form->field($model, 'r110') ?>

    <?php // echo $form->field($model, 'r111') ?>

    <?php // echo $form->field($model, 'r112') ?>

    <?php // echo $form->field($model, 'r114') ?>

    <?php // echo $form->field($model, 'r115') ?>

    <?php // echo $form->field($model, 'r301a') ?>

    <?php // echo $form->field($model, 'r301b') ?>

    <?php // echo $form->field($model, 'r302') ?>

    <?php // echo $form->field($model, 'r303') ?>

    <?php // echo $form->field($model, 'r304') ?>

    <?php // echo $form->field($model, 'r305') ?>

    <?php // echo $form->field($model, 'r306a') ?>

    <?php // echo $form->field($model, 'r306b') ?>

    <?php // echo $form->field($model, 'r307a') ?>

    <?php // echo $form->field($model, 'r307b1') ?>

    <?php // echo $form->field($model, 'r307b2') ?>

    <?php // echo $form->field($model, 'r307b3') ?>

    <?php // echo $form->field($model, 'r308') ?>

    <?php // echo $form->field($model, 'r309a') ?>

    <?php // echo $form->field($model, 'r309b') ?>

    <?php // echo $form->field($model, 'r310') ?>

    <?php // echo $form->field($model, 'r501a') ?>

    <?php // echo $form->field($model, 'r501a_bln') ?>

    <?php // echo $form->field($model, 'r501a_thn') ?>

    <?php // echo $form->field($model, 'r501b') ?>

    <?php // echo $form->field($model, 'r501b_bln') ?>

    <?php // echo $form->field($model, 'r501b_thn') ?>

    <?php // echo $form->field($model, 'r501c') ?>

    <?php // echo $form->field($model, 'r501c_bln') ?>

    <?php // echo $form->field($model, 'r501c_thn') ?>

    <?php // echo $form->field($model, 'r501d') ?>

    <?php // echo $form->field($model, 'r501d_bln') ?>

    <?php // echo $form->field($model, 'r501d_thn') ?>

    <?php // echo $form->field($model, 'r501e') ?>

    <?php // echo $form->field($model, 'r501e_bln') ?>

    <?php // echo $form->field($model, 'r501e_thn') ?>

    <?php // echo $form->field($model, 'r502a') ?>

    <?php // echo $form->field($model, 'r502b') ?>

    <?php // echo $form->field($model, 'r502c') ?>

    <?php // echo $form->field($model, 'r502d') ?>

    <?php // echo $form->field($model, 'r502e') ?>

    <?php // echo $form->field($model, 'r502f') ?>

    <?php // echo $form->field($model, 'r502g') ?>

    <?php // echo $form->field($model, 'r502h') ?>

    <?php // echo $form->field($model, 'r502i') ?>

    <?php // echo $form->field($model, 'r502j') ?>

    <?php // echo $form->field($model, 'r502k') ?>

    <?php // echo $form->field($model, 'r502l') ?>

    <?php // echo $form->field($model, 'r502m') ?>

    <?php // echo $form->field($model, 'r502n') ?>

    <?php // echo $form->field($model, 'r503a') ?>

    <?php // echo $form->field($model, 'r503b') ?>

    <?php // echo $form->field($model, 'r504a') ?>

    <?php // echo $form->field($model, 'r504b') ?>

    <?php // echo $form->field($model, 'r504c') ?>

    <?php // echo $form->field($model, 'r504d') ?>

    <?php // echo $form->field($model, 'r504e') ?>

    <?php // echo $form->field($model, 'r505') ?>

    <?php // echo $form->field($model, 'r506') ?>

    <?php // echo $form->field($model, 'flag_error') ?>

    <?php // echo $form->field($model, 'status_kirim') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
