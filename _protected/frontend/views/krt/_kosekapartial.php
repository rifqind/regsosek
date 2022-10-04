<?php
use kartik\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Html;
use yii\helpers\Url;
use kartik\form\ActiveForm;
?>
<div id="tabel-grid" class="card mb-3">
	<div class="card-body">
		<div class="table-responsive">
			<?php Pjax::begin(); ?>
			<?php
			$form = ActiveForm::begin([
				'action' => ['krt/reject'],
				'type' => ActiveForm::TYPE_VERTICAL,
				'method' => 'POST', 
				'id' => 'reject-form'
			]);
			?>
			<?= GridView::widget([
			    'dataProvider' => $dataProvider,
			    // 'filterModel' => $searchModel,
			    'columns' => [
			        ['class' => 'yii\grid\SerialColumn'],
			        ['attribute' => 'r110',
			         'label' => 'R110',
			         'enableSorting' => false,
			        ],
			        ['attribute' => 'r108',
			         'label' => 'Nama Kepala Keluarga',
			         'enableSorting' => false,
			        ],
			        ['attribute' => 'r302',
			         'label' => 'Luas Lantai Per Kapita (R302/R112)',
			         'enableSorting' => false,
			         'value'=>function ($model) {
			         		$r302 = $model->r302;
		                    $r112 = $model->r112;
		                    $luas_perkapita = round($r302/$r112,2);
		                    return $luas_perkapita;
		                },
			        ],
			        [
			        	'label' => 'R417 Kode',
		                'attribute'=>'kart.r417',
		                'value'=>function ($model) {
		                    $data = $model->getKarts()->all();
		                    $r417 = [];
		                    foreach ($data as $key => $value) {
		                        if($value->r417 != null){
		                    	    $r417[] = "Anggota KK ke-".$value->r401." : ".$value->r417;
		                    	    break;
		                        }
		                    }
		                    return implode('', $r417);
		                },
		            ],
		            [
			        	'label' => 'R417 Deskripsi',
		                'attribute'=>'kart.r417_desk',
		                'value'=>function ($model) {
		                    $data = $model->getKarts()->all();
		                    $r417_desk = [];
		                    foreach ($data as $key => $value) {
		                        if($value->r417 != null){
		                    	    $r417_desk[] = $value->r417_desk;
		                    	    break;
		                        }
		                    }
		                    return implode('', $r417_desk);
		                },
		            ],
		            [
			        	'label' => 'R421',
		                'attribute'=>'kart.r421',
		                'value'=>function ($model) {
		                    $data = $model->getKarts()->all();
		                    $r421 = [];
		                    foreach ($data as $key => $value) {
		                        if($value->r421 != null){
		                            $r421[] = "Anggota KK ke-".$value->r401." : ".$value->r421;
		                            break;   
		                        }
		                    }
		                    return implode('', $r421);
		                },
		            ],
		            [
			        	'label' => 'R421 Deskripsi',
		                'attribute'=>'kart.r421_desk',
		                'value'=>function ($model) {
		                    $data = $model->getKarts()->all();
		                    $r421_desk = [];
		                    foreach ($data as $key => $value) {
		                        if($value->r421 != null){
		                    	    $r421_desk[] = $value->r421_desk;
		                    	    break;
		                        }
		                    }
		                    return implode('', $r421_desk);
		                },
		            ],
		            [
		                'class' => 'kartik\grid\CheckboxColumn',
		                'header' => 'Reject',
		                'checkboxOptions' => function ($model, $key, $index, $column) {
		                    return ['checked' => false];
		                }
		            ],
			        // ['attribute' => 'flag_error',
			        //  'label' => 'Status Dokumen',
			        // ],
			    ],
			]); ?>
			<?= Html::submitButton('Reject', ['class' => 'btn btn-danger float-end', 'style' =>'display:none', 'id' => 'reject-button']) ?>
			<?php ActiveForm::end(); ?>
			<?php Pjax::end(); ?>
		</div>
	</div>
	<div class="card">
	    <div class="card-header">
	        <h5 class="text-center">Apakah semua isian data di atas sudah wajar?</h5>
	    </div>
	    <div class="card-body">
	        <div class="container-fluid">
	            <div class="text-center">
	                <div id="koseka-button" role="radiogroup" aria-required="true">
	                    <input type="radio" id="ya-koseka" name="koseka-button" style="margin-right: 0.5rem;" value="1">
	                    <label for="ya-koseka" style="margin-right: 2rem;">Ya</label>
	                    <input type="radio" id="tidak-koseka" name="koseka-button" style="margin-right: 0.5rem; margin-left: 2rem;" value="2">
	                    <label for="tidak-koseka">Tidak</label>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div id="koseka-confirm" class="card-footer" style="display:none;">
	        <div id="koseka-yes" class="text-end" >
	            <?= Html::a('Kirim', ['krt/submitkoseka', 'id' => $id_sls], ['class' => 'btn btn-success']) ?>
	            <!-- <button class="btn btn-primary">Kirim</button> -->
	        </div>
	        <div id="koseka-no" class="text-center h5" >
	            Periksa isian pada kuesioner, apabila perlu perbaikan silakan centang KK yang perlu diperbaiki lalu klik tombol reject
	        </div>
	    </div>
	</div>
</div>

