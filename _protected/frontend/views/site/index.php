<?php

/** @var yii\web\View $this */
use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;
$this->title = 'Meta Regsosek';
$kabkot = ['7101' => "Bolaang Mongondow",
           '7102' => "Minahasa",
           '7103' => "Kepulauan Sangihe",
           '7104' => "Kepulauan Talaud",
           '7105' => "Minahasa Selatan",
           '7106' => "Minahasa Utara",
           '7107' => "Bolaang Mongondow Utara",
           '7108' => "Siau Tagulandang Biaro",
           '7109' => "Minahasa Tenggara",
           '7110' => "Bolaang Mongondow Selatan",
           '7111' => "Bolaang Mongondow Timur",
           '7171' => "Manado",
           '7172' => "Bitung",
           '7173' => "Tomohon",
           '7174' => "Kotamobagu"
         ];
?>
<body id="page-top">
<!-- Navigation-->
<!--<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">-->
<!--    <div class="container px-4 px-lg-5">-->
<!--        <a class="navbar-brand" style="font-family: 'Arial'; font-weight:bold;" href="#page-top"><img src="assets/bg removed.png" width="75" height="40" alt="logo"></a>-->
<!--        <img src="assets/logo_crop.png" width="150" height="40" alt="logo">-->
<!--    </div>-->
<!--</nav>-->
<header class="masthead">
    <div class="container px-4 px-lg-5 h-100">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-8 align-self-end">
                <div class="text-white fw-bolder text-responsive">PEMERIKSAAN DATA</div>
                <div class="text-white fw-bolder text-responsive">REGISTRASI SOSIAL EKONOMI</div>
                <div class="text-white fw-bolder text-responsive">PROVINSI SULAWESI UTARA</div>
                <hr class="divider"/>
            </div>
            <div class="col-lg-9 align-self-baseline">
                <p class="text-white-75 mb-5"></p>
                <a class="btn btn-primary btn-xl" style="width:auto; color:#eaab25;" data-bs-toggle="modal" data-bs-target="#exampleModal">KOSEKA</a>
                <a class="btn btn-primary btn-xl" style="width:auto; color:#eaab25;" data-bs-toggle="modal" data-bs-target="#exampleModalPML">PML</a>
            </div>
            <?php if (Yii::$app->session->hasFlash('failure')): ?>
            <div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
              <div class="toast-header">
                <strong class="me-auto">Gagal</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
              </div>
              <div class="toast-body">
                <?= Yii::$app->session->getFlash('failure') ?>
              </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</header>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Login sebagai Koseka</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="form-outline mb-4">
                <?php
                    $form = ActiveForm::begin(['action' => ['site/loginkoseka'], 'id' => 'login-form']);

                    echo $form->field($model, 'kabkot')
                        ->dropDownList(
                            $kabkot,           // Flat array ('id'=>'label')
                            ['prompt'=>'Pilih Kabupaten/Kota']    // options
                        );
                    echo $form->field($model, 'username')->passwordInput(['autofocus' => true])->label('Password');
                ?>
              <!-- <select class="form-select" aria-label="Default select example">
                <option selected>Kabupaten/Kota</option>
              </select> -->
            </div>
        </div>
        <div class="modal-footer">
          <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <?php ActiveForm::end(); ?>
        </div>
      </div>
    </div>
</div>
<div class="modal fade" id="exampleModalPML" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Login sebagai PML</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="form-outline mb-4">
                <?php
                    $form = ActiveForm::begin(['action' => ['site/loginpml'], 'id' => 'login-form']);

                    echo $form->field($model, 'kabkot')
                        ->dropDownList(
                            $kabkot,           // Flat array ('id'=>'label')
                            ['prompt'=>'Pilih Kabupaten/Kota']    // options
                        );
                    echo $form->field($model, 'username')->passwordInput(['autofocus' => true])->label('Password');
                ?>
              <!-- <select class="form-select" aria-label="Default select example">
                <option selected>Kabupaten/Kota</option>
              </select> -->
            </div>
        </div>
        <div class="modal-footer">
          <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <?php ActiveForm::end(); ?>
        </div>
      </div>
    </div>
</div>
