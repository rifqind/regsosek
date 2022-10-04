 <?php
use frontend\models\Krt;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\widgets\Pjax;
use kartik\depdrop\DepDrop;
use frontend\models\MasterWilayah;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

$catList = ArrayHelper::map(MasterWilayah::find()->where(['id_kab' => Yii::$app->user->identity->kabkot])->groupBy('id_kec')->all(), 'id_kec', function($model){return '['.$model->kode_kec.'] '.$model->nama_kec;});

 ?> 
<div class="container-xl">
    <div class="card mb-3">
        <div class="container-fluid p-3">
            <div class="card-body table-responsive">
                <?php Pjax::begin(); ?>
                <?php $form = ActiveForm::begin([
                    'id' => 'cari-sls',
                    'action' => ['krt/pml'],
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
                                    'data' => [$wilayah->id_desa => $wilayah->nama_desa],
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
                                'data' => [$wilayah->id_sls => $wilayah->nama_sls],
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
                        <?= Html::submitButton('Proses', ['class' => 'btn btn-primary']) ?>
                    </div>
                </div>
            </div>
            <?php ActiveForm::end(); ?>
            <?php Pjax::end(); ?>
            </div>
        </div>
        </div>
    <div class="card mb-3">
        <div class="card-body">
            <?= $this->render( '_gridpartial', ['dataProvider'=> $dataProvider, 'searchModel' => $searchModel, 'wilayah' => $wilayah] ); ?>
            <!-- <table class="table table-striped table-bordered table-hover table-sm">
                <thead>
                    <tr>
                        <th scope="col" class="p-2">#</th>
                        <th scope="col" class="p-2">Nama Kepala Keluarga</th>
                        <th scope="col" class="p-2">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td>Agus</td>
                        <td>Error</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Budi</td>
                        <td>Clean</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Charlie</td>
                        <td>Clean</td>
                    </tr>
                </tbody>
            </table> -->

        </div>
    </div>
</div>
<?php
$script = <<< JS
$( document ).ready(function() {
    if($('#dynamicmodel-id_sls').val() != ""){
        $("#entri").removeClass("disabled");
    }

});

$(document).on('click', '#entri',function()
{
  e.preventDefault();
  var cek = confirm("Apakah anda yakin mengentri keluarga baru di SLS ini?");
  if(cek){
    console.log(cek);
  }
});

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
                    $("#entri").removeClass("disabled");
                  },300);
               },
       error: function () {
           alert("Something went wrong");
       }
  });

  return false;
}).on('submit', function(e){
       //ini mencegah halaman redirect ke url action pada form
        e.preventDefault();
}); 

$(document).on('click', "#deleteKK" ,function() {
  var cek = confirm("Apakah anda yakin menghapus keluarga ini?");
  var deleteUrl = $(this).attr('deleteUrl');
  var partialviewcontainer = $("#tabel-grid");
  if(cek){
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
        url: deleteUrl,
        dataType: 'html',
        success: function(newPartialView) {
                    setTimeout(function(){
                      partialviewcontainer.html(newPartialView);
                    },300);
                 },
        error: function () {
            alert("Something went wrong");
        }

    });
  }
});
JS;

$this->registerJs($script);
?>