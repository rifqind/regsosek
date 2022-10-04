<?php

/* @var $this yii\web\View */

use yii\helpers\Url;
use kartik\grid\GridView;
use kartik\export\ExportMenu;
use yii\helpers\Html;
Yii::$app->formatter->nullDisplay = 0;
use dosamigos\chartjs\ChartJs;
use \yii\web\JsExpression;
use yii\helpers\Json;
Url::remember(['site/index'], 'index');

$t = NULL;
$r_c = NULL;
$r_e = NULL;
foreach ($data as $key => $value) {
    $labels[] = $value['id_kab'];
    $data1[] = $value['persentase_clean'];
    $data2[] = $value['persentase_error'];
    $r_c += $value['realisasi_clean'];
    $r_e += $value['realisasi_error'];
    $t += $value['target_prelist'];
}
$p_c = round($r_c/$t*100,2);
$p_e = round($r_e/$t*100,2);

$labels = Json::encode($labels);

$data1 = Json::encode($data1);
$data2 = Json::encode($data2);
$footerValue = 100;

$is_provinsi = (Yii::$app->user->identity->kabkot==7100);

$this->title = 'Dashboard Monitoring PML';
?>
<div class="site-index">
    <div class="body-content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <?php $gridColumns = [
                        ['class' => 'yii\grid\SerialColumn',
                        'contentOptions' => ['style' => ['text-align' => 'center']],
                         'header' => '<b>No.</b>',
                        ],
                                [
                                'attribute' => 'id_kab',
                                'header' => '<b>Kode</b>',
                                'footer' => '7100',
                                ],
                                [
                                'attribute' => 'nama_kab',
                                'header' => '<b>Kabupaten/Kota</b>',
                                'contentOptions' => ['style' => ['text-align' => 'left']],
                                'footer' => 'SULAWESI UTARA',
                                'format' => 'raw',
                                   'value' => function ($model) {
                                            $url = Url::to(['site/kec', 'id' =>$model['id_kab']]);
                                            $a = Html::a($model['nama_kab'], $url);

                                            return $a;
                                        }, 
                                ],
                                [
                                'attribute' => 'target_prelist',
                                'header' => '<b>Target (Prelist)</b>',
                                'footer' => $t,
                                ],
                                [
                                'attribute' => 'realisasi_clean',
                                'header' => '<b>Clean</b>',
                                'footer' => $r_c,
                                ],
                                [
                                'attribute' => 'persentase_clean',
                                'header' => '<b>Persentase Clean (%)</b>',
                                'footer' => $p_c,
                                ],
                                [
                                'attribute' => 'realisasi_error',
                                'header' => '<b>Error</b>',
                                'footer' => $r_e,
                                ],
                                [
                                'attribute' => 'persentase_error',
                                'header' => '<b>Persentase Error (%)</b>',
                                'footer' => $p_e,
                                ],

                        ]; ?>
                        <div class="float-right">
                            <?= ExportMenu::widget([
                            'dataProvider' => $sqlProvider,
                                'columns' => $gridColumns,
                                'columnSelectorOptions'=>[
                                    'label' => 'Columns',
                                    'class' => 'btn btn-secondary text-white'
                                ],
                                'fontAwesome' => true,
                                'dropdownOptions' => [
                                    'label' => 'Export All',
                                    'class' => 'btn btn-success text-white'
                                ]
                            ]); ?>
                        </div>
                        <?php
                            if ($is_provinsi) {
                                echo GridView::widget([
                                        'responsiveWrap' => false,
                                        'options' => [
                                            'class' => 'monitoring',
                                         ],
                                        'responsive'=>true,
                                        'showFooter' => true,
                                        'dataProvider' => $sqlProvider,
                                        'columns' => $gridColumns,
                                        'showPageSummary' => false,
                                        'toolbar' => [
                                            '{export}',
                                            '{toggleData}'
                                    ]
                                ]); 
                            }
                            else {
                                echo GridView::widget([
                                        'responsiveWrap' => false,
                                        'options' => [
                                            'class' => 'monitoring',
                                         ],
                                        'responsive'=>true,
                                        'showFooter' => false,
                                        'dataProvider' => $sqlProvider,
                                        'columns' => $gridColumns,
                                        'showPageSummary' => false,
                                        'toolbar' => [
                                            '{export}',
                                            '{toggleData}'
                                    ]
                                ]); 
                            }
                            
                            ?>
                    </div>
                </div>
           
              
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="chart-container" style="position: relative; height:40vh; width:100%">
                            <canvas id="myChart" width="400" height="200"></canvas>
                        </div>
                    </div>
                </div>            
            </div>
        </div>
    </div>
</div>



<?php
$script = <<< JS
    var ctx = document.getElementById("myChart");
    var myChart = new Chart(ctx, {
        type: 'bar',
       data:{
       labels: $labels,
            datasets: [{
                label: 'Clean',
                data: $data1,
                backgroundColor:'rgba(46, 215, 46, 0.8)',
                borderColor:'rgba(6, 84, 17, 0.8)',
                borderWidth: 1
            },
            {
                label: 'Error',
                data: $data2,
                backgroundColor:'rgba(218, 57, 62, 0.8)',
                borderColor:'rgba(106, 2, 0, 0.8)',
                borderWidth: 1
            }]
    },
        options: {
            maintainAspectRatio: false,
            scales: {            
                yAxes: [{
                ticks: {
                       min: 0,
                       max: 100,
                    }
                }]
            }
        }
    });
JS;

$this->registerJs($script);
?>