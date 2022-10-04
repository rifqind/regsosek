<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\MasterWilayah;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use kartik\depdrop\DepDrop;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $wilayah frontend\models\User */
/* @var $form yii\widgets\ActiveForm */
$catList = ArrayHelper::map(MasterWilayah::find()->where(['id_kab' => Yii::$app->user->identity->kabkot])->groupBy('id_kec')->all(), 'id_kec', function($model){return '['.$model->kode_kec.'] '.$model->nama_kec;});
?>

<div class="container-xl">
    <div class="card mb-3">
        <div class="container-fluid p-3">
        <div class="card-body">
            <?php Pjax::begin(); ?>
            <?php $form = ActiveForm::begin([
                'id' => 'cari-sls',
                'action' => ['krt/koseka'],
                'method' => 'POST',
            ]); ?>
            <div class="form-group mb-2 row"><label class="form-label col-12 col-md-3 col-form-label">Kecamatan</label>
                <div class="col">
                    <div class="ui fluid search selection dropdown"><i class="dropdown icon"></i>
                        <?= $form->field($wilayah, 'id_kec')->widget(Select2::classname(), [
                                'data' => $catList,
                                'options'=>['placeholder'=>Yii::t('app','Pilih Kecamatan')],
                                'pluginOptions' => [
                                    'allowClear' => true,
                                ],
                            ])->label(false);
                        ?>
                    </div>
                </div>
            </div>  
            <div class="form-group mb-2 row"><label class="form-label col-12 col-md-3 col-form-label">Desa</label>
                <div class="col">
                    <div class="ui fluid search selection dropdown"><i class="dropdown icon"></i>
                        <?= $form->field($wilayah, 'id_desa')->widget(DepDrop::classname(), [
                                'type'=>DepDrop::TYPE_SELECT2,
                                'select2Options'=>['pluginOptions'=>['allowClear'=>true]],
                                'pluginOptions'=>[
                                    'depends'=>['dynamicmodel-id_kec'],
                                    'url'=>Url::to(['krt/desa']),
                                    'placeholder'=>Yii::t('app','Pilih Desa'),
                                ]
                            ])->label(false);
                        ?>
                    </div>
                </div>
            </div>
            <div class="form-group mb-2 row"><label class="form-label col-12 col-md-3 col-form-label">SLS</label>
                <div  class="col">
                    <?= $form->field($wilayah, 'id_sls')->widget(DepDrop::classname(), [
                            'type'=>DepDrop::TYPE_SELECT2,
                            'select2Options'=>['pluginOptions'=>['allowClear'=>true]],
                            'pluginOptions'=>[
                                'depends'=>['dynamicmodel-id_desa'],
                                'url'=>Url::to(['krt/sls']),
                                'placeholder'=>Yii::t('app','Pilih SLS/Non SLS'),
                            ]
                        ])->label(false);
                    ?>
                </div>
            </div>

        <div class="form-group mb-2 row">
            <div class="col-12 col-md-3">
            </div>
            <div class="col">
                <div class="d-grid">
                    <?= Html::submitButton('Cari', ['class' => 'btn btn-primary']) ?>
                </div>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
        <?php Pjax::end(); ?>
        </div>
    </div>
    </div>
        
            <?= $this->render( '_kosekapartial', ['dataProvider'=> $dataProvider, 'searchModel' => $searchModel, 'id_sls' => $id_sls] ); ?>
            <!-- <table class="table table-striped table-bordered table-hover table-sm">
                <thead>
                    <tr>
                        <th scope="col" class="p-2">#</th>
                        <th scope="col" class="p-2">Nama Kepala Keluarga</th>
                        <th scope="col" class="p-2">Luas Lantai</th>
                        <th scope="col" class="p-2">Lapangan Usaha (R417)</th>
                        <th scope="col" class="p-2">Lapangan Usaha (R421)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td>Agus</td>
                        <td>100</td>
                        <td>Petani</td>
                        <td>Buruh Tani</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Budi</td>
                        <td>100</td>
                        <td>Pengusaha</td>
                        <td>Manajer</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Charlie</td>
                        <td>100</td>
                        <td>Restoran</td>
                        <td>Pelayan</td>
                    </tr>
                </tbody>
            </table> -->

</div>
<!-- Navigation-->

<!-- Portfolio-->

<!-- Call to action-->

<!-- Contact-->

<!-- Footer-->

<!-- Bootstrap core JS-->


<?php
$script = <<< JS
$(document).on('click', 'input[name$="koseka-button"]', function(){
    if($(this).val() == '1'){
        $('#koseka-confirm').show()
        $('#koseka-no').hide()
        $('#reject-button').hide()
        $('#koseka-yes').show()
    } else {
        $('#koseka-confirm').show()
        $('#koseka-yes').hide()
        $('#koseka-no').show()
        $('#reject-button').show()
    }
})


$('#cari-sls').on('beforeSubmit', function(e) {
  var form = $(this);
  var search_data_tabel = form.serialize();

  var partialviewcontainer = $("#tabel-grid");

  $.ajax({
      beforeSend: function() {
         $("div.loading").addClass("show");
      },
      complete: function(){
         setTimeout(function(){
            $("div.loading").removeClass("show");
         },320);
      },
      type: 'POST',
      url: form.attr("action"),
      data: search_data_tabel,
      dataType: 'html',
      success: function(newPartialView) {
                  setTimeout(function(){
                    partialviewcontainer.html(newPartialView);
                  },300);
               },

  });

  return false;
}).on('submit', function(e){
       //ini mencegah halaman redirect ke url action pada form
        e.preventDefault();
        $("#entri").removeClass("disabled");
   }); 
JS;

$this->registerJs($script);
?>