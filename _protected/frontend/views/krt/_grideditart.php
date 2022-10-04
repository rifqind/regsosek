<?php
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;
use yii\helpers\Html;

?>
<div id="tabel-grid" class="table-responsive">
	<?php Pjax::begin(['id'=>'art', 'timeout' => false]); ?>
	<?= GridView::widget([
	    'dataProvider' => $dataProvider,
	    // 'filterModel' => $searchModel,
	    'columns' => [
	        ['class' => 'yii\grid\SerialColumn'],
	        ['attribute' => 'r401',
	         'label' => 'No Urut Anggota Keluarga',
	         'enableSorting' => false,
	        ],
	        ['attribute' => 'r402',
	         'label' => 'Nama Anggota Keluarga',
	         'enableSorting' => false,
	        ],
	        [
            'attribute' => 'Edit',
            'contentOptions' => ['style' => ['text-align' => 'center']],
            'format' => 'raw',
               'value' => function ($model) {
                        $url = Url::to(['krt/editart', 'id' =>$model->id]);
                        $a = Html::button('Edit' ,['onclick'=>"openModal('".$url."')", 'class' => 'btn btn-primary']);

                        return $a;
                    }, 
            ],
	        // ['attribute' => 'flag_error',
	        //  'label' => 'Status Dokumen',
	        // ],
	    ],
	]); ?>
	<?php Pjax::end(); ?>
</div>
