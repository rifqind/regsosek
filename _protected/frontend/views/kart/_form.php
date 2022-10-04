<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Kart $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="kart-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_rt')->textInput() ?>

    <?= $form->field($model, 'r101')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r102')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r103')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r104')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r105')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r106')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r401')->textInput() ?>

    <?= $form->field($model, 'r402')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r403')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'r404')->textInput() ?>

    <?= $form->field($model, 'r405')->textInput() ?>

    <?= $form->field($model, 'r406tgl')->textInput() ?>

    <?= $form->field($model, 'r406bln')->textInput() ?>

    <?= $form->field($model, 'r406thn')->textInput() ?>

    <?= $form->field($model, 'r407')->textInput() ?>

    <?= $form->field($model, 'r408')->textInput() ?>

    <?= $form->field($model, 'r409')->textInput() ?>

    <?= $form->field($model, 'r410')->textInput() ?>

    <?= $form->field($model, 'r411')->textInput() ?>

    <?= $form->field($model, 'r412')->textInput() ?>

    <?= $form->field($model, 'r413')->textInput() ?>

    <?= $form->field($model, 'r414')->textInput() ?>

    <?= $form->field($model, 'r415')->textInput() ?>

    <?= $form->field($model, 'r416')->textInput() ?>

    <?= $form->field($model, 'r416a')->textInput() ?>

    <?= $form->field($model, 'r416b')->textInput() ?>

    <?= $form->field($model, 'r417')->textInput() ?>

    <?= $form->field($model, 'r418')->textInput() ?>

    <?= $form->field($model, 'r419')->textInput() ?>

    <?= $form->field($model, 'r420')->textInput() ?>

    <?= $form->field($model, 'r421')->textInput() ?>

    <?= $form->field($model, 'r422')->textInput() ?>

    <?= $form->field($model, 'r423')->textInput() ?>

    <?= $form->field($model, 'r424')->textInput() ?>

    <?= $form->field($model, 'r425')->textInput() ?>

    <?= $form->field($model, 'r426')->textInput() ?>

    <?= $form->field($model, 'r427')->textInput() ?>

    <?= $form->field($model, 'r428a')->textInput() ?>

    <?= $form->field($model, 'r428b')->textInput() ?>

    <?= $form->field($model, 'r428c')->textInput() ?>

    <?= $form->field($model, 'r428d')->textInput() ?>

    <?= $form->field($model, 'r428e')->textInput() ?>

    <?= $form->field($model, 'r428f')->textInput() ?>

    <?= $form->field($model, 'r428g')->textInput() ?>

    <?= $form->field($model, 'r428h')->textInput() ?>

    <?= $form->field($model, 'r428i')->textInput() ?>

    <?= $form->field($model, 'r428j')->textInput() ?>

    <?= $form->field($model, 'r429')->textInput() ?>

    <?= $form->field($model, 'r430')->textInput() ?>

    <?= $form->field($model, 'r431a')->textInput() ?>

    <?= $form->field($model, 'r431b')->textInput() ?>

    <?= $form->field($model, 'r431c')->textInput() ?>

    <?= $form->field($model, 'r431d')->textInput() ?>

    <?= $form->field($model, 'r431e')->textInput() ?>

    <?= $form->field($model, 'r431f')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
