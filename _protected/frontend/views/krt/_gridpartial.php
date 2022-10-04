<?php
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Html;
use yii\helpers\Url;
?>
<div id="tabel-grid">
	<div class="row">
	    <div class="col">
	        <div class="text-end mb-3">
	            <?= Html::a('Entri Baru', ['krt/create', 'id_sls' => $wilayah->id_sls], ['class' => 'btn btn-primary disabled', 'id' => 'entri', "onclick" => "return confirm('Apakah anda yakin mengentri keluarga baru di SLS ini?')"]) ?>
	            <!-- <button class="btn btn-primary">Tambah</button> -->
	        </div>
	    </div>
	<div class="table-responsive"> 
	    <?php Pjax::begin(['id' => 'pjax-list', 'timeout' => false]); ?>
	    <?= GridView::widget([
	    'dataProvider' => $dataProvider,
	    // 'filterModel' => $searchModel,
	    'columns' => [
	        ['class' => 'yii\grid\SerialColumn'],
	        ['attribute' => 'r108',
	         'label' => 'Nama Kepala Keluarga',
	         'enableSorting' => false,
	        ],
	        // ['attribute' => 'flag_error',
	        //  'label' => 'Status Dokumen',
	        // ],
	        [
	        'attribute' => 'flag_error',
	        'label' => 'Status Dokumen',
	        'enableSorting' => false,
	        'format' => 'raw',
	           'value' => function ($model) {
	                if ($model->flag_error == 1) {
	                    return 'Error';
	                }                            
	                elseif ($model->flag_error == 2) {
	                    return 'Clean';
	                }
	                elseif ($model->flag_error == 3) {
	                    return 'Error';
	                }
	            },
	        ],
            [
            'attribute' => 'Edit',
            'contentOptions' => ['style' => ['text-align' => 'center']],
            'format' => 'raw',
               'value' => function ($model) {
                        $url = Url::to(['krt/update', 'id' =>$model->id]);
                        $a = "";
                        if($model->status_kirim == 1){
                            $url = Url::to(['krt/entri', 'id' =>$model->id]);
                            $a = Html::a('<span class="btn btn-primary">Edit</span>', $url);   
                        }
                        if($model->status_koseka == 3){
                            $url = Url::to(['krt/edit', 'id' =>$model->id]);
                            $a = Html::a('<span class="btn btn-warning">Edit</span>', $url);   
                        }

                        return $a;
                    }, 
            ],
            [
            'attribute' => 'Hapus',
            'contentOptions' => ['style' => ['text-align' => 'center']],
            'format' => 'raw',
               'value' => function ($model) {
                        $url = Url::to(['krt/delete', 'id' =>$model->id, 'id_sls' => $model->id_sls]);
                        $a = Html::button('Hapus' ,['id' => 'deleteKK', 'deleteUrl' => $url ,'class' => 'btn btn-danger']);
                        return $a;
                    }, 
            ],
	    ],
	]); ?>
	<?php Pjax::end(); ?>
	<div>
	    
	</div>
</div>

