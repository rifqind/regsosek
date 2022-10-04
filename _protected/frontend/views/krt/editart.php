<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<?php $form = ActiveForm::begin(['action' => ['krt/editart', 'id' => $model->id], 'method' => 'POST', 'id' => 'updateart'] ); ?>
    <div class="container-xl">
        <div class="card mb-3">
            <div class="card-header">
                <div class="text-center mb-0 p-1 h4">A. KETERANGAN DEMOGRAFI</div>
            </div>
            <div class="container-fluid p-2">
                <div class="card-body">
                    <!-- <form> -->
                        <div class="form-group bordered-form p-2 mb-2 row">
                            <label class="form-label col-md-3 col-form-label">401. Nomor urut anggota keluarga</label>
                                    <div class="col-sm-1">
                                        <input disabled="disabled" type="number" id="r401" class="form-control" name="r401" min="1" max="20" value="<?= $model->r401 ?>">
                                    </div>
                        </div>
                        <div class="form-group bordered-form p-2 mb-2 row">
                            <label class="form-label col-md-3 col-form-label">402. Nama anggota keluarga</label>
                                    <div class="col-sm-5">
                                        <input  disabled="disabled" type="text" id="r402" class="form-control" name="r402" style="text-transform:uppercase" value="<?= $model->r402 ?>">
                                    </div>
                        </div>
                </div>
            </div>
            <div class="card-header">
                <div class="text-center mb-0 p-1 h4">C. KETENAGAKERJAAN (ANGGOTA KELUARGA USIA 5 TAHUN KE ATAS)</div>
            </div>
            <div class="container-fluid p-2">
                <div class="card-body">
                    <!-- <form> -->
                        <!-- ya tidak -->
                        <div class="form-group bordered-form p-2 mb-2 row">
                            <label class="form-label col-md-3 col-form-label">416a. Apakah (Nama) bekerja/membantu bekerja selama seminggu yang lalu?</label>
                            <div class="col d-flex align-items-center">
                                <div id="r416a" role="radiogroup" aria-required="true">
                                    <input disabled="disabled" type="hidden" id="r416[0]" name="r416" value="<?=$model->r416 ?>">
                                    <div class="col">
                                        <input disabled="disabled" type="radio" style="margin-right: 0.5rem;" id="r416a[1]" name="r416a" value="1" <?php if($model->r416a == '1') echo "checked"; ?>>
                                        <label for="r416a[1]" style="margin-right: 1rem;">1. Ya</label>
                                    </div>
                                    <div class="col">
                                        <input disabled="disabled" type="radio" style="margin-right: 0.5rem;" id="r416a[2]" name="r416a" value="2" <?php if($model->r416a == '2') echo "checked"; ?>>
                                        <label for="r416a[2]" style="margin-right: 1rem;">2. Tidak</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group bordered-form p-2 mb-2 align-items-center row">
                            <label class="form-label col-md-3 col-form-label">416b. Berapa jam (Nama) bekerja?</label>
                            <div class="col-md-5 d-flex align-items-center">
                                <input disabled="disabled" type="number" id="r416b" class="form-control" name="r416b" min="1" max="168" style="width: 4rem; margin-right: 1rem;" value="<?= $model->r416b ?>">
                                <label class="form-label col-form-label">Jam</label>
                            </div>
                        </div>
                        <!-- 417 -->
                        <div class="form-group bordered-form p-2 mb-2 align-items-center row">
                            <label class="form-label col-md-3 col-form-label">417. Lapangan usaha dari pekerjaan utama</label>
                            <div class="col-md-5 d-flex align-items-center">
                                <input type="text" id="addr417_desk" class="form-control" style="text-transform:uppercase;  margin-right: 0.5rem;" name="r417_desk" placeholder="Deskripsi" value="<?= $model->r417_desk ?>">
                                <input type="text" id="r417" class="form-control" name="r417" style="width: 4rem;" value="<?= $model->r417 ?>" placeholder="Kode">
                            </div>
                        </div>
                        <div class="form-group bordered-form p-2 mb-2 align-items-center row">
                            <label class="form-label col-md-3 col-form-label">418. Status dalam pekerjaan utama</label>
                            <div class="col-md-5">
                                <input disabled="disabled" type="text" id="r418" class="form-control" name="r418" style="width: 4rem;" value="<?= $model->r418 ?>">
                            </div>
                        </div>
                        <div class="form-group bordered-form p-2 mb-3 row">
                            <label class="form-label col-md-3 col-form-label">419. Apakah (Nama) memiliki NPWP?</label>
                            <div class="col d-flex align-items-center">
                                <div id="r419" role="radiogroup" aria-required="true">
                                    <input disabled="disabled" type="hidden" id="r419[0]" name="r419" value="<?=$model->r419 ?>">
                                    <div class="col">
                                        <input disabled="disabled" type="radio" style="margin-right: 0.5rem;" id="r419[1]" name="r419" value="1" <?php if($model->r419 == '1') echo "checked"; ?>>
                                        <label for="r419[1]">1. Ada, dapat menunjukkan</label>
                                    </div>
                                    <div class="col">
                                        <input disabled="disabled" type="radio" style="margin-right: 0.5rem;" id="r419[2]" name="r419" value="2" <?php if($model->r419 == '2') echo "checked"; ?>>
                                        <label for="r419[2]">2. Ada, tidak dapat menunjukkan</label>
                                    </div>
                                    <div class="col">
                                        <input disabled="disabled" type="radio" style="margin-right: 0.5rem;" id="r419[3]" name="r419" value="3" <?php if($model->r419 == '3') echo "checked"; ?>>
                                        <label for="r419[3]">3. Tidak ada</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- </form> -->
                </div>
            </div>
            <div class="card-header">
                <div class="text-center mb-0 p-1 h4">D. KEPEMILIKAN USAHA (ANGGOTA KELUARGA USIA 5 TAHUN KE ATAS)</div>
            </div>
            <div class="container-fluid p-2">
                <div class="card-body">
                    <!-- <form> -->
                        <!-- ya tidak -->
                        <div class="form-group bordered-form p-2 mb-2 align-items-center row">
                            <label class="form-label col-md-3 col-form-label">420. Apakah (Nama) memiliki usaha sendiri/bersama?</label>
                            <div class="col d-flex align-items-center">
                                <div id="r420" role="radiogroup" aria-required="true">
                                    <input disabled="disabled" type="hidden" id="r420[0]" name="r420" value="<?=$model->r420 ?>">
                                    <div class="col">
                                        <input disabled="disabled" type="radio" style="margin-right: 0.5rem;" id="r420[1]" name="r420" value="1" <?php if($model->r420 == '1') echo "checked"; ?>>
                                        <label for="r420[1]" style="margin-right: 1rem;">1. Ya</label>
                                   </div>
                                    <div class="col">
                                        <input disabled="disabled" type="radio" style="margin-right: 0.5rem;" id="r420[2]" name="r420" value="2" <?php if($model->r420 == '2') echo "checked"; ?>>
                                        <label for="r420[2]" style="margin-right: 1rem;">2. Tidak</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group bordered-form p-2 mb-2 align-items-center row">
                            <label class="form-label col-md-3 col-form-label">421. Apakah lapangan usaha dari usaha tersebut</label>
                            <div class="col-md-5 d-flex align-items-center">
                                <input type="text" id="addr421_desk" class="form-control" style="text-transform:uppercase;  margin-right: 0.5rem;" name="r421_desk" placeholder="Deskripsi" value="<?= $model->r421_desk ?>">
                                <input type="text" id="r421" class="form-control" name="r421" style="width: 4rem;" value="<?= $model->r421 ?>" placeholder="Kode">
                            </div>
                        </div>
                        <div class="form-group bordered-form p-2 mb-2 align-items-center row align-items-center">
                            <label class="form-label col-md-3 col-form-label">422. Jumlah pekerja yang dibayar</label>
                            <div class="col-3">
                                <input disabled="disabled" type="number" id="r422" class="form-control" name="r422" min="0" max="999" value="<?= $model->r422 ?>">
                            </div>
                        </div>
                        <div class="form-group bordered-form p-2 mb-2 align-items-center row align-items-center">
                            <label class="form-label col-md-3 col-form-label">423. Jumlah pekerja yang tidak dibayar</label>
                            <div class="col-3">
                                <input disabled="disabled" type="number" id="r423" class="form-control" name="r423" min="0" max="99" value="<?= $model->r423 ?>">
                            </div>
                        </div>
                        <div class="form-group bordered-form p-2 mb-2 align-items-center row">
                            <label class="form-label col-md-3 col-form-label">424. Kepemilikan perizinan usaha</label>
                            <div class="col-3">
                                <input disabled="disabled" type="text" id="r424" class="form-control" name="r424" value="<?= $model->r424 ?>">
                            </div>
                        </div>
                        <div class="form-group bordered-form p-2 mb-3 row">
                            <label class="form-label col-md-3 col-form-label">425. Omzet usaha perbulan (Rupiah)</label>
                            <div class="col d-flex align-items-center">
                                <div id="r425" role="radiogroup" aria-required="true">
                                    <input disabled="disabled" type="hidden" id="r425[0]" name="r425" value="<?=$model->r425 ?>">
                                    <div class="col">
                                        <input disabled="disabled" type="radio" style="margin-right: 0.5rem;" id="r425[1]" name="r425" value="1" <?php if($model->r425 == '1') echo "checked"; ?>>
                                        <label for="r425[1]">1.) < 5 Juta (ultra mikro)</label>
                                    </div>
                                    <div class="col">
                                        <input disabled="disabled" type="radio" style="margin-right: 0.5rem;" id="r425[2]" name="r425" value="2" <?php if($model->r425 == '2') echo "checked"; ?>>
                                        <label for="r425[2]">2.) 5 ─ < 15 Juta (ultra mikro)</label>
                                    </div>
                                    <div class="col">
                                        <input disabled="disabled" type="radio" style="margin-right: 0.5rem;" id="r425[3]" name="r425" value="3" <?php if($model->r425 == '3') echo "checked"; ?>>
                                        <label for="r425[3]">3.) 15 ─ < 25 Juta (ultra mikro)</label>
                                    </div>
                                    <div class="col">
                                        <input disabled="disabled" type="radio" style="margin-right: 0.5rem;" id="r425[4]" name="r425" value="4" <?php if($model->r425 == '4') echo "checked"; ?>>
                                        <label for="r425[4]">4.) 25 ─ < 167 Juta (mikro)</label>
                                    </div>
                                    <div class="col">
                                        <input disabled="disabled" type="radio" style="margin-right: 0.5rem;" id="r425[5]" name="r425" value="5" <?php if($model->r425 == '5') echo "checked"; ?>>
                                        <label for="r425[5]">5.) 167 ─ < 1.250 Juta (kecil)</label>
                                    </div>
                                    <div class="col">
                                        <input disabled="disabled" type="radio" style="margin-right: 0.5rem;" id="r425[6]" name="r425" value="6" <?php if($model->r425 == '6') echo "checked"; ?>>
                                        <label for="r425[6]">6.) 1.250 ─ < 4.167 Juta (menengah)</label>
                                    </div>
                                    <div class="col">
                                        <input disabled="disabled" type="radio" style="margin-right: 0.5rem;" id="r425[7]" name="r425" value="7" <?php if($model->r425 == '7') echo "checked"; ?>>
                                        <label for="r425[7]">7.) ≥ 4.167 Juta (besar)</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group bordered-form p-2 mb-3 row">
                            <label class="form-label col-md-3 col-form-label">426. Penggunaan internet dalam kegiatan usaha <i>(Jumlahkan Kode)</i></label>
                                        <div class="col-sm-4 d-flex align-items-center">
                                            <div class="col-sm-12 d-flex flex-column">
                                                <label>00. Tidak menggunakan internet</label>
                                                <label>01. Sebagai sarana komunikasi</label>
                                                <label>02. Untuk mencari informasi</label>
                                                <label>04. Sebagai pemasaran/iklan</label>
                                                <label>08. Sebagai sarana penjualan produk/output</label>
                                                <label>16. Sebagai pembelian dan/atau produksi</label>
                                                <label>32. Lainnya</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-1 d-flex align-items-center">
                                                <input disabled="disabled" type="number" id="r426" class="form-control" name="r426" min="0" max="63" value="<?= $model->r426 ?>">
                                        </div>
                        </div>
                    <!-- </form> -->
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-body">
                <div class="text-end">
                    <?= Html::submitButton('Simpan', ['class' => 'btn btn-secondary']) ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php ActiveForm::end(); ?>

<?php
$script = <<< JS
$('#updateart').on('beforeSubmit', function(e) {
    var form = $(this);
    //siapkan data form input untuk dipost via ajax
    var formData = form.serialize();
    //submit form via ajax
    $.ajax({
        beforeSend: function() {
             $("div.loading").addClass("show");
          },
          complete: function(){
             setTimeout(function(){
                $("div.loading").removeClass("show");
             },320);
          },
        url: form.attr("action"),
        type: form.attr("method"),
        data: formData,
        dataType: 'html',
        success: function () {
            setTimeout(function(){
                //ketika submit berhasil,modal dihidden 
                $("#modal-default").modal('hide');
                //lalu refreh gridview dg idpjax=kontak
                $.pjax.reload({container: '#art'});
                $('#modalArt').modal('hide');
                alert("Sukses menyimpan data")
            },300);
        },
    });
    return false;
}).on('submit', function(e){
  //ini mencegah halaman redirect ke url action pada form
    e.preventDefault();
});
JS;

$this->registerJs($script);
?>