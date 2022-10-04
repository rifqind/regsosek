<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
/** @var yii\web\View $this */
/** @var frontend\models\Krt $model */
/** @var yii\widgets\ActiveForm $form */
$url = Url::to(['krt/validasi', 'id' => $model->id, 'id_sls' => $model->id_sls]);
$id_ruta = $model->id;

?>

<div class="container-xl">
    <div>
        <?php echo Html::a( 'Kembali', Yii::$app->request->referrer, ['class'=>'btn btn-secondary text-white']);?>
    </div>
    <br>
    <?php $form = ActiveForm::begin(['action' => ['krt/simpan', 'id' => $model->id, 'id_sls' => $model->id_sls], 'method' => 'POST', 'id' => 'entri-form'] ); ?>
    <div class="card mb-3">
        <div class="card-header">
            <div class="text-center mb-0 p-1 h4">I. KETERANGAN TEMPAT</div>
        </div>
        <div class="float-btn" id="float-error" style="display:none;">
            <i class="bi bi-card-list" data-bs-toggle="offcanvas" data-bs-target="#error-list"></i>
        </div>
        <div class="container-fluid p-2">
        <div class="card-body">
            <div class="row">
                <div class="col-sm">
                    <!-- <div class="form-group p-1 mb-2 row">
                        <label class="form-label col-sm-6 col-form-label">101. Provinsi</label>
                        <div class="col-sm">
                            <input disabled="disabled" type="text" id="r101" class="form-control" name="r101" disabled="disabled">
                        </div>
                    </div> -->
                    <div class="form-group p-1 mb-2 row">
                        <label class="form-label col-md-6 col-form-label">102. Kabupaten/Kota</label>
                        <div class="col-sm">
                            <input disabled="disabled" type="text" id="r102" class="form-control" readonly name="r102" value="<?= $model->r102 ?>">
                        </div>
                    </div>
                    <div class="form-group p-1 mb-2 row">
                        <label class="form-label col-md-6 col-form-label">103. Kecamatan</label>
                        <div class="col-sm">
                            <input disabled="disabled" type="text" id="r103" class="form-control" readonly name="r103" value="<?= $model->r103 ?>">
                        </div>
                    </div>
                    <div class="form-group p-1 mb-2 row">
                        <label class="form-label col-md-6 col-form-label">104. Desa/Kelurahan</label>
                        <div class="col-sm">
                            <input disabled="disabled" type="text" id="r104" class="form-control" readonly name="r104" value="<?= $model->r104 ?>">
                        </div>
                    </div>
                    <div class="form-group p-1 mb-2 row">
                        <label class="form-label col-md-6 col-form-label">105. Kode SLS/Non SLS</label>
                        <div class="col-sm">
                            <input disabled="disabled" type="text" id="r105" class="form-control" readonly name="r105" value="<?= $model->r105 ?>">
                        </div>
                    </div>
                    <!-- <div class="form-group p-1 mb-2 row">
                        <label class="form-label col-md-6 col-form-label">106. Nama SLS/Non SLS</label>
                        <div class="col-sm">
                            <input disabled="disabled" type="text" id="r106" class="form-control" name="r106" disabled="disabled">
                        </div>
                    </div>
                    <div class="form-group p-1 mb-2 row">
                        <label class="form-label col-md-6 col-form-label">107. Alamat</label>
                        <div class="col-sm">
                            <textarea id="r107" class="form-control" name="r107" rows="5" disabled="disabled"></textarea>
                        </div>
                    </div> -->
                </div>
                <div class="col-sm ">
                                <div class="form-group p-1 mb-2 row">
                                    <label class="form-label col-md-6 col-form-label">108. Nama Kepala Keluarga</label>
                                    <div class="col-sm">
                                        <input disabled="disabled" type="text" id="r108" class="form-control" name="r108" style="text-transform:uppercase" value="<?= $model->r108 ?>"  >
                                    </div>
                                </div>
                                <!-- <div class="form-group p-1 mb-2 row">
                                    <label class="form-label col-md-6 col-form-label">109. Nomor Urut Bangunan Tempat Tinggal</label>
                                    <div class="col-sm">
                                        <input disabled="disabled" type="text" id="r109" class="form-control" name="r109" disabled="disabled">
                                    </div>
                                </div> -->
                                <div class="form-group p-1 mb-2 align-items-center row">
                                    <label class="form-label col-md-6 col-form-label">110. Nomor Urut Keluarga Hasil Verifikasi</label>
                                        <div class="col-sm d-flex justify-content-end">
                                            <input disabled="disabled" type="text" id="r110" class="form-control" name="r110" value="<?= $model->r110 ?>" style="width:3rem;">
                                        </div>
                                </div>
                                <div class="form-group p-1 mb-2 row">
                                    <label class="form-label col-md-6 col-form-label">111. Status Keluarga</label>
                                        <div class="col-sm d-flex justify-content-end">
                                            <input disabled="disabled" type="text" id="r111" class="form-control" name="r111" value="<?= $model->r111 ?>" style="width:3rem;">
                                        </div>
                                </div>
                                <div class="form-group p-1 mb-2 row">
                                    <label class="form-label col-md-6 col-form-label">112. Jumlah Anggota Keluarga</label>
                                        <div class="col-sm d-flex justify-content-end">
                                            <input disabled="disabled" type="text" id="r112" class="form-control" name="r112" value="<?= $model->r112 ?>" style="width:3rem;">
                                        </div>
                                </div>
                                <!-- <div class="form-group p-1 mb-2 row">
                                    <label class="form-label col-md-6 col-form-label">113. ID Landmark Wilkerstat</label>
                                        <div class="col-sm">
                                            <input disabled="disabled" type="text" id="r113" class="form-control" name="r113" disabled="disabled">
                                        </div>
                                </div> -->
                                <div class="form-group p-1 mb-2 row">
                                    <label class="form-label col-md-6 col-form-label">114. Nomor Kartu Keluarga</label>
                                        <div class="col-sm">
                                            <input disabled="disabled" type="password" id="r114" class="form-control" name="r114" value="<?= $model->r114 ?>">
                                        </div>
                                </div>
                                <div class="form-group p-1 mb-2 row">
                                    <label class="form-label col-md-6 col-form-label">115. Kode Kartu Keluarga</label>
                                        <div class="col-sm d-flex justify-content-end">
                                            <input disabled="disabled" type="text" id="r115" class="form-control" name="r115" value="<?= $model->r115 ?>" style="width:3rem;">
                                        </div>
                                </div>
                            </div>
                        </div>
                    <!-- </form> -->
                </div>
            </div>
            </div>
            <div class="card mb-3">
                <div class="card-header">
                    <div class="text-center mb-0 p-1 h4">III. KETERANGAN PERUMAHAN</div>
                </div>
                <div class="container-fluid p-2">
                    <div class="card-body">
                            <!-- number -->
                            <div class="form-group bordered-form p-2 mb-2 row align-items-center">
                                <label class="form-label col-md-3 col-form-label">302. Luas lantai bangunan tempat tinggal</label>
                                <div class="col">
                                    <input type="number" id="r302" class="form-control" name="r302" min="1" max="997" value="<?= $model->r302 ?>">
                                </div>
                                <label class="form-label col col-sm-6">m2</label>
                            </div>
                        <!-- </form> -->
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header">
                    <div class="text-center mb-0 p-1 h4">ANGGOTA KELUARGA</div>
                </div>
                <div class="card-body">
                    <div class="row p-2">
                        <!-- Button trigger modal -->
                        <?= $this->render( '_grideditart', ['dataProvider'=> $dataProvider, 'searchModel' => $searchModel] ); ?>
<!--                         <table class="table table-striped table-bordered table-hover table-sm" id="anggota-keluarga">
                            <thead>
                                <th>#</th>
                                <th>Nama</th>
                            </thead>
                            <tbody>
                                <tr id="row1" class="align-items-center">
                                    <td></td>
                                    <td id="name_row1"></td>
                                    <td>
                                        <div class="d-flex flex-row">
                                                <input disabled="disabled" type="button" id="save_button1" value="Save" class="save btn btn-primary btn-sm me-2" style="display:none;" onclick="save_row('1')">  
                                                <input disabled="disabled" type="button" class="btn btn-primary btn-sm entri me-2" id="entri_button1" value="Entri" onclick="entri_row('1')">
                                                <input disabled="disabled" type="button" class="btn btn-success btn-sm edit me-2" id="edit_button1" value="Edit" onclick="edit_row('1')">
                                                <input disabled="disabled" type="button" class="btn btn-danger btn-sm delete me-2" id="delete_button1" value="Delete" onclick="delete_row('1')">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><input disabled="disabled" type="text" class="form-control" id="new_name" disabled></td>
                                    <td><input disabled="disabled" type="button" class="add btn btn-secondary btn-sm" onclick="add_row();" value="Tambah"></td>
                                </tr>
                            </tbody>
                        </table> -->
                    </div>
                </div>
            </div>
    <div class="card mb-5">
        <div class="card-body">
            <div class="text-end">
                <?= Html::submitButton('Simpan', ['class' => 'btn btn-secondary']) ?>
                <span type="button" id='kirim' class="btn btn-success" data-bs-toggle="modal" data-bs-target="#kirim-modal">Kirim</span>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>


<div class="modal fade" id="modalArt" tabindex="-1" role="dialog">
    <!-- modal-dialog-centered -->
    <div class="modal-dialog modal-fullscreen" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Data Anggota Keluarga</h5>
                <span type="button" data-bs-dismiss="modal" aria-label="Close">
                    Tutup
                </span>
            </div>
            <div id="modalContent" class="modal-body"style="background-color: #C5C9CC;">
            </div>
        </div>
    </div>
</div>

<!-- modal validasi -->
<div class="offcanvas offcanvas-end overflow-auto h-50 border border-dark" style="margin-top: 5rem; background-color:#ffd966 ;" data-bs-scroll="true" data-bs-backdrop="false" id="error-list" tabindex="-1" role="dialog">
    <!-- modal-dialog-centered -->
    <div class="offcanvas-dialog" role="document">
        <div class="offcanvas-content">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title">Daftar Error</h5>
                <span type="button" data-bs-dismiss="offcanvas" aria-label="Close">
                    &times;
                </span>
            </div>
            <div class="offcanvas-body">
                <!-- content -->
               <ul id='error-list'>
                  
                </ul> 
            </div>
        </div>
    </div>
</div>
<!-- modal kirim -->
<div class="modal fade" id="kirim-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Konfirmasi</h5>
                <span type="button" data-bs-dismiss="modal" aria-label="Close">
                    &times;
                </span>
            </div>
            <div class="modal-body">
                <!-- content -->
                Apakah Anda yakin?
            </div>
            <div class="modal-footer">
                <?= Html::a('Ya', ['krt/submitedit', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
                <button type="button" data-bs-dismiss="modal" class="btn btn-danger">Tidak</button>
            </div>
        </div>
    </div>
</div>

<?php
$script = <<< JS
window.addEventListener('beforeunload', function (e) {
  // Cancel the event
  e.preventDefault(); // If you prevent default behavior in Mozilla Firefox prompt will always be shown
  // Chrome requires returnValue to be set
  e.returnValue = '';
});

$(document).on("click", "input[type='radio']", function() {
    var previousValue = $(this).attr('previousValue');
    var name = $(this).attr('name');

    if (previousValue == 'checked') {
      $("input[name=" + name + "]:radio").prop('checked', false);
      $("input[name=" + name + "]:hidden").val("");
      $(this).attr('previousValue', false);
    } else {
      $("input[name=" + name + "]:radio").attr('previousValue', false);
      $(this).attr('previousValue', 'checked');
    }
});

$('#entri-anggota').on('beforeSubmit', function(e) {
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
                    var modal = bootstrap.Modal.getInstance(myModal)
                    modal.hide();
                    $("#entri-anggota")[0].reset();
                    alert("Sukses menyimpan data")
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

$(document).on('click', "#deleteanggota" ,function() {
  var cek = confirm("Apakah anda yakin menghapus anggota keluarga ini?");
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

$('#entri-form').on('beforeSubmit', function(e) {
  var form = $(this);
  var search_data_tabel = form.serialize();


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
      success: function() {
                  setTimeout(function(){
                    alert("Sukses menyimpan data")
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


$("#validasi").click(function() {
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
      url: '{$url}',
      data:  $("#entri-form").serialize(),
      success: function(data) {
                  setTimeout(function(){
                    console.log(data)
                    let dataObject = JSON.parse(data);
                    let errorList = getErrorList(dataObject.ruta);
                    $('#error-list ul').empty();
                  
                    if(errorList.length > 0){
                        for (error of errorList) {             
                            $('#error-list ul').append("<li>"+error+"</li>");
                            $('#float-error').show();
                        }
                    }
                    else {
                        $("#kirim").removeClass("disabled");
                        $('#float-error').hide();
                        
                    }
                  },300);
               },
        error: function () {
            alert("Something went wrong");
        }       
  });
});
JS;

$this->registerJs($script);
?>

<script type="text/javascript">
    function openModal(url) { // Declare a function
        $('#modalArt').modal('show')
                   .find('#modalContent')
                   .load(url);
    }
</script>