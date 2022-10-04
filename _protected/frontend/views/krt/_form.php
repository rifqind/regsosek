<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Krt $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="krt-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_sls')->textInput()->label(false) ?>

    <?= $form->field($model, 'r101')->textInput(['maxlength' => true])->label(false) ?>

    <?= $form->field($model, 'r102')->textInput(['maxlength' => true])->label(false) ?>

    <?= $form->field($model, 'r103')->textInput(['maxlength' => true])->label(false) ?>

    <?= $form->field($model, 'r104')->textInput(['maxlength' => true])->label(false) ?>

    <?= $form->field($model, 'r105')->textInput(['maxlength' => true])->label(false) ?>

    <?= $form->field($model, 'r106')->textInput(['maxlength' => true])->label(false) ?>

    <?= $form->field($model, 'r108')->textInput(['maxlength' => true])->label(false) ?>

    <?= $form->field($model, 'r110')->textInput()->label(false) ?>

    <?= $form->field($model, 'r111')->textInput()->label(false) ?>

    <?= $form->field($model, 'r112')->textInput()->label(false) ?>

    <?= $form->field($model, 'r114')->textInput()->label(false) ?>

    <?= $form->field($model, 'r115')->textInput()->label(false) ?>

    <?= $form->field($model, 'r301a')->textInput()->label(false) ?>

    <?= $form->field($model, 'r301b')->textInput()->label(false) ?>

    <?= $form->field($model, 'r302')->textInput()->label(false) ?>

    <?= $form->field($model, 'r303')->textInput()->label(false) ?>

    <?= $form->field($model, 'r304')->textInput()->label(false) ?>

    <?= $form->field($model, 'r305')->textInput()->label(false) ?>

    <?= $form->field($model, 'r306a')->textInput()->label(false) ?>

    <?= $form->field($model, 'r306b')->textInput()->label(false) ?>

    <?= $form->field($model, 'r307a')->textInput()->label(false) ?>

    <?= $form->field($model, 'r307b1')->textInput()->label(false) ?>

    <?= $form->field($model, 'r307b2')->textInput()->label(false) ?>

    <?= $form->field($model, 'r307b3')->textInput()->label(false) ?>

    <?= $form->field($model, 'r308')->textInput()->label(false) ?>

    <?= $form->field($model, 'r309a')->textInput()->label(false) ?>

    <?= $form->field($model, 'r309b')->textInput()->label(false) ?>

    <?= $form->field($model, 'r310')->textInput()->label(false) ?>

    <?= $form->field($model, 'r501a')->textInput()->label(false) ?>

    <?= $form->field($model, 'r501a_bln')->textInput()->label(false) ?>

    <?= $form->field($model, 'r501a_thn')->textInput()->label(false) ?>

    <?= $form->field($model, 'r501b')->textInput()->label(false) ?>

    <?= $form->field($model, 'r501b_bln')->textInput()->label(false) ?>

    <?= $form->field($model, 'r501b_thn')->textInput()->label(false) ?>

    <?= $form->field($model, 'r501c')->textInput()->label(false) ?>

    <?= $form->field($model, 'r501c_bln')->textInput()->label(false) ?>

    <?= $form->field($model, 'r501c_thn')->textInput()->label(false) ?>

    <?= $form->field($model, 'r501d')->textInput()->label(false) ?>

    <?= $form->field($model, 'r501d_bln')->textInput()->label(false) ?>

    <?= $form->field($model, 'r501d_thn')->textInput()->label(false) ?>

    <?= $form->field($model, 'r501e')->textInput()->label(false) ?>

    <?= $form->field($model, 'r501e_bln')->textInput()->label(false) ?>

    <?= $form->field($model, 'r501e_thn')->textInput()->label(false) ?>

    <?= $form->field($model, 'r502a')->textInput()->label(false) ?>

    <?= $form->field($model, 'r502b')->textInput()->label(false) ?>

    <?= $form->field($model, 'r502c')->textInput()->label(false) ?>

    <?= $form->field($model, 'r502d')->textInput()->label(false) ?>

    <?= $form->field($model, 'r502e')->textInput()->label(false) ?>

    <?= $form->field($model, 'r502f')->textInput()->label(false) ?>

    <?= $form->field($model, 'r502g')->textInput()->label(false) ?>

    <?= $form->field($model, 'r502h')->textInput()->label(false) ?>

    <?= $form->field($model, 'r502i')->textInput()->label(false) ?>

    <?= $form->field($model, 'r502j')->textInput()->label(false) ?>

    <?= $form->field($model, 'r502k')->textInput()->label(false) ?>

    <?= $form->field($model, 'r502l')->textInput()->label(false) ?>

    <?= $form->field($model, 'r502m')->textInput()->label(false) ?>

    <?= $form->field($model, 'r502n')->textInput()->label(false) ?>

    <?= $form->field($model, 'r503a')->textInput()->label(false) ?>

    <?= $form->field($model, 'r503b')->textInput()->label(false) ?>

    <?= $form->field($model, 'r504a')->textInput()->label(false) ?>

    <?= $form->field($model, 'r504b')->textInput()->label(false) ?>

    <?= $form->field($model, 'r504c')->textInput()->label(false) ?>

    <?= $form->field($model, 'r504d')->textInput()->label(false) ?>

    <?= $form->field($model, 'r504e')->textInput()->label(false) ?>

    <?= $form->field($model, 'r505')->textInput()->label(false) ?>

    <?= $form->field($model, 'r506')->textInput()->label(false) ?>

    <?= $form->field($model, 'flag_error')->textInput()->label(false) ?>

    <?= $form->field($model, 'status_kirim')->textInput()->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
