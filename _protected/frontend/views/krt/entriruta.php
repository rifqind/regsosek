<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
/** @var yii\web\View $this */
/** @var frontend\models\Krt $model */
/** @var yii\widgets\ActiveForm $form */
$url = Url::to(['krt/validasi', 'id' => $model->id, 'id_sls' => $model->id_sls]);
$url_status = Url::to(['krt/statusdokumen', 'id' => $model->id]);
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
                            <input type="text" id="r101" class="form-control" name="r101" disabled="disabled">
                        </div>
                    </div> -->
                    <div class="form-group p-1 mb-2 row">
                        <label class="form-label col-md-6 col-form-label">102. Kabupaten/Kota</label>
                        <div class="col-sm">
                            <input type="text" id="r102" class="form-control" readonly name="r102" value="<?= $model->r102 ?>">
                        </div>
                    </div>
                    <div class="form-group p-1 mb-2 row">
                        <label class="form-label col-md-6 col-form-label">103. Kecamatan</label>
                        <div class="col-sm">
                            <input type="text" id="r103" class="form-control" readonly name="r103" value="<?= $model->r103 ?>">
                        </div>
                    </div>
                    <div class="form-group p-1 mb-2 row">
                        <label class="form-label col-md-6 col-form-label">104. Desa/Kelurahan</label>
                        <div class="col-sm">
                            <input type="text" id="r104" class="form-control" readonly name="r104" value="<?= $model->r104 ?>">
                        </div>
                    </div>
                    <div class="form-group p-1 mb-2 row">
                        <label class="form-label col-md-6 col-form-label">105. Kode SLS/Non SLS</label>
                        <div class="col-sm">
                            <input type="text" id="r105" class="form-control" readonly name="r105" value="<?= $model->r105 ?>">
                        </div>
                    </div>
                    <!-- <div class="form-group p-1 mb-2 row">
                        <label class="form-label col-md-6 col-form-label">106. Nama SLS/Non SLS</label>
                        <div class="col-sm">
                            <input type="text" id="r106" class="form-control" name="r106" disabled="disabled">
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
                                        <input type="text" id="r108" class="form-control" name="r108" style="text-transform:uppercase" value="<?= $model->r108 ?>"  >
                                    </div>
                                </div>
                                <!-- <div class="form-group p-1 mb-2 row">
                                    <label class="form-label col-md-6 col-form-label">109. Nomor Urut Bangunan Tempat Tinggal</label>
                                    <div class="col-sm">
                                        <input type="text" id="r109" class="form-control" name="r109" disabled="disabled">
                                    </div>
                                </div> -->
                                <div class="form-group p-1 mb-2 align-items-center row">
                                    <label class="form-label col-md-6 col-form-label">110. Nomor Urut Keluarga Hasil Verifikasi</label>
                                        <div class="col-sm d-flex justify-content-end">
                                            <input type="text" id="r110" class="form-control" name="r110" value="<?= $model->r110 ?>" style="width:3rem;">
                                        </div>
                                </div>
                                <div class="form-group p-1 mb-2 row">
                                    <label class="form-label col-md-6 col-form-label">111. Status Keluarga</label>
                                        <div class="col-sm d-flex justify-content-end">
                                            <input type="text" id="r111" class="form-control" name="r111" value="<?= $model->r111 ?>" style="width:3rem;">
                                        </div>
                                </div>
                                <div class="form-group p-1 mb-2 row">
                                    <label class="form-label col-md-6 col-form-label">112. Jumlah Anggota Keluarga</label>
                                        <div class="col-sm d-flex justify-content-end">
                                            <input type="text" id="r112" class="form-control" name="r112" value="<?= $model->r112 ?>" style="width:3rem;">
                                        </div>
                                </div>
                                <!-- <div class="form-group p-1 mb-2 row">
                                    <label class="form-label col-md-6 col-form-label">113. ID Landmark Wilkerstat</label>
                                        <div class="col-sm">
                                            <input type="text" id="r113" class="form-control" name="r113" disabled="disabled">
                                        </div>
                                </div> -->
                                <div class="form-group p-1 mb-2 row">
                                    <label class="form-label col-md-6 col-form-label">114. Nomor Kartu Keluarga</label>
                                        <div class="col-sm">
                                            <input type="text" id="r114" class="form-control" name="r114" value="<?= $model->r114 ?>">
                                        </div>
                                </div>
                                <div class="form-group p-1 mb-2 row">
                                    <label class="form-label col-md-6 col-form-label">115. Kode Kartu Keluarga</label>
                                        <div class="col-sm d-flex justify-content-end">
                                            <input type="text" id="r115" class="form-control" name="r115" value="<?= $model->r115 ?>" style="width:3rem;">
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
                        <!-- <form> -->
                            <!-- nyamping -->
                            <div class="form-group bordered-form p-2 mb-2 row">
                                <label class="form-label col-md-3 col-form-label">301a. Status kepemilikan bangunan tempat tinggal yang ditempati  </label>
                                <div class="col-sm d-flex align-items-center">
                                    <div id="r301a" role="radiogroup" aria-required="true">
                                        <input type="hidden" id="r301a[0]" name="r301a" value="<?=$model->r301a ?>">
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r301a[1]" name="r301a" value="1" <?php if($model->r301a == '1') echo "checked"; ?>>
                                            <label for="r301a[1]">1. Milik sendiri</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r301a[2]" name="r301a" value="2"<?php if($model->r301a == '2') echo "checked"; ?>>
                                            <label for="r301a[2]">2. Kontrak/Sewa</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r301a[3]" name="r301a" value="3"<?php if($model->r301a == '3') echo "checked"; ?>>
                                            <label for="r301a[3]">3. Bebas sewa</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r301a[4]" name="r301a" value="4"<?php if($model->r301a == '4') echo "checked"; ?>>
                                            <label for="r301a[4]">4. Dinas</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r301a[5]" name="r301a" value="5"<?php if($model->r301a == '5') echo "checked"; ?>>
                                            <label for="r301a[5]">5. Lainnya</label>
                                        </div>   
                                    </div>
                                </div>
                            </div>
                            <!-- 301b -->
                            <div class="form-group bordered-form p-2 mb-3 row" id="301b-row">
                                <label class="form-label col-md-3 col-form-label">301b. <div style="font-weight: bold; font-style:italic;">Jika 301a berkode 1,</div>Apa jenis bukti kepemilikan tanah bangunan tempat tinggal ini  </label>
                                <div class="col d-flex align-items-center">
                                    <div id="r301b" role="radiogroup" aria-required="true">
                                        <input type="hidden" id="r301b[0]" name="r301b" value="<?=$model->r301b ?>">
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r301b[1]" name="r301b" value="1" <?php if($model->r301b == '1') echo "checked"; ?>>
                                            <label for="r301b[1]">1. SHM atas Nama Anggota Keluarga</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r301b[2]" name="r301b" value="2" <?php if($model->r301b == '2') echo "checked"; ?>> 
                                            <label for="r301b[2]">2. SHM bukan a.n Anggota Keluarga</label>
                                            dengan perjanjian pemanfaatan tertulis
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r301b[3]" name="r301b" value="3" <?php if($model->r301b == '3') echo "checked"; ?>>
                                            <label for="r301b[3]">3. SHM bukan a.n Anggota Keluarga</label>
                                            tanpa perjanjian pemanfaatan tertulis
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r301b[4]" name="r301b" value="4" <?php if($model->r301b == '4') echo "checked"; ?>>
                                            <label for="r301b[4]">4. Sertifikat selain SHM (SHGB, SHSRS)</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r301b[5]" name="r301b" value="5" <?php if($model->r301b == '5') echo "checked"; ?>>
                                            <label for="r301b[5]">5. Surat bukti lainnya (Girik, Letter C, dll)</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r301b[6]" name="r301b" value="6" <?php if($model->r301b == '6') echo "checked"; ?>>
                                            <label for="r301b[6]">6. Tidak Punya</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- number -->
                            <div class="form-group bordered-form p-2 mb-2 row align-items-center">
                                <label class="form-label col-md-3 col-form-label">302. Luas lantai bangunan tempat tinggal</label>
                                <div class="col">
                                    <input type="number" id="r302" class="form-control" name="r302" min="1" max="997" value="<?= $model->r302 ?>">
                                </div>
                                <label class="form-label col col-sm-6">m2</label>
                            </div>
                            <!-- #303 -->
                            <div class="form-group bordered-form p-2 mb-3 row">
                                <label class="form-label col-md-3 col-form-label">303. Jenis lantai terluas  </label>
                                <div class="col d-flex align-items-center">
                                    <div id="r303" role="radiogroup" aria-required="true">
                                        <input type="hidden" id="r303[0]" name="r303" value="<?=$model->r303 ?>">
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r303[1]" name="r303" value="1" <?php if($model->r303 == '1') echo "checked"; ?>>
                                            <label for="r303[1]">1. Marmer/granit</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r303[2]" name="r303" value="2" <?php if($model->r303 == '2') echo "checked"; ?>>
                                            <label for="r303[2]">2. Keramik</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r303[3]" name="r303" value="3" <?php if($model->r303 == '3') echo "checked"; ?>>
                                            <label for="r303[3]">3. Parket/vinil/karpet</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r303[4]" name="r303" value="4" <?php if($model->r303 == '4') echo "checked"; ?>>
                                            <label for="r303[4]">4. Ubin/tegel/teraso</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r303[5]" name="r303" value="5" <?php if($model->r303 == '5') echo "checked"; ?>>
                                            <label for="r303[5]">5. Kayu/papan</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r303[6]" name="r303" value="6" <?php if($model->r303 == '6') echo "checked"; ?>>
                                            <label for="r303[6]">6. Semen/bata merah</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r303[7]" name="r303" value="7" <?php if($model->r303 == '7') echo "checked"; ?>>
                                            <label for="r303[7]">7. Bambu</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r303[8]" name="r303" value="8" <?php if($model->r303 == '8') echo "checked"; ?>>
                                            <label for="r303[8]">8. Tanah</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r303[9]" name="r303" value="9" <?php if($model->r303 == '9') echo "checked"; ?>>
                                            <label for="r303[9]">9. Lainnya</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group bordered-form p-2 mb-3 row">
                                <label class="form-label col-md-3 col-form-label">304. Jenis dinding terluas  </label>
                                <div class="col d-flex align-items-center">
                                    <div id="r304" role="radiogroup" aria-required="true">
                                        <input type="hidden" id="r304[0]" name="r304" value="<?=$model->r304 ?>">
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r304[1]" name="r304" value="1" <?php if($model->r304 == '1') echo "checked"; ?>>
                                            <label for="r304[1]">1. Tembok</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r304[2]" name="r304" value="2" <?php if($model->r304 == '2') echo "checked"; ?>>
                                            <label for="r304[2]">2. Plesteran anyaman bambu/kawat</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r304[3]" name="r304" value="3" <?php if($model->r304 == '3') echo "checked"; ?>>
                                            <label for="r304[3]">3. Kayu/Papan/Gypsum/GRC/Calciboard</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r304[4]" name="r304" value="4" <?php if($model->r304 == '4') echo "checked"; ?>>
                                            <label for="r304[4]">4. Anyaman bambu</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r304[5]" name="r304" value="5" <?php if($model->r304 == '5') echo "checked"; ?>>
                                            <label for="r304[5]">5. Batang kayu</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r304[6]" name="r304" value="6" <?php if($model->r304 == '6') echo "checked"; ?>>
                                            <label for="r304[6]">6. Bambu</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r304[7]" name="r304" value="7" <?php if($model->r304 == '7') echo "checked"; ?>>
                                            <label for="r304[7]">7. Lainnya</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group bordered-form p-2 mb-3 row">
                                <label class="form-label col-md-3 col-form-label">305. Jenis atap terluas  </label>
                                <div class="col d-flex align-items-center">
                                    <div id="r305" role="radiogroup" aria-required="true">
                                        <input type="hidden" id="r305[0]" name="r305" value="<?=$model->r305 ?>">
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r305[1]" name="r305" value="1" <?php if($model->r305 == '1') echo "checked"; ?>>
                                            <label for="r305[1]">1. Beton</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r305[2]" name="r305" value="2" <?php if($model->r305 == '2') echo "checked"; ?>>
                                            <label for="r305[2]">2. Genteng</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r305[3]" name="r305" value="3" <?php if($model->r305 == '3') echo "checked"; ?>>
                                            <label for="r305[3]">3. Seng</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r305[4]" name="r305" value="4" <?php if($model->r305 == '4') echo "checked"; ?>>
                                            <label for="r305[4]">4. Asbes</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r305[5]" name="r305" value="5" <?php if($model->r305 == '5') echo "checked"; ?>>
                                            <label for="r305[5]">5. Bambu</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r305[6]" name="r305" value="6" <?php if($model->r305 == '6') echo "checked"; ?>>
                                            <label for="r305[6]">6. Kayu/sirap</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r305[7]" name="r305" value="7" <?php if($model->r305 == '7') echo "checked"; ?>>
                                            <label for="r305[7]">7. Jerami/ijuk/daun-daunan/rumbia</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r305[8]" name="r305" value="8" <?php if($model->r305 == '8') echo "checked"; ?>>
                                            <label for="r305[8]">8. Lainnya</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 306a -->
                            <div class="form-group bordered-form p-2 mb-3 row">
                                <label class="form-label col-md-3 col-form-label">306a. Sumber air minum utama  </label>
                                <div class="col d-flex align-items-center">
                                    <div id="r306a" role="radiogroup" aria-required="true">
                                        <input type="hidden" id="r306a[0]" name="r306a" value="<?=$model->r306a ?>">
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r306a[1]" name="r306a" value="1" <?php if($model->r306a == '1') echo "checked"; ?>>
                                            <label for="r306a[1]">1. Air kemasan bermerk</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r306a[2]" name="r306a" value="2" <?php if($model->r306a == '2') echo "checked"; ?>>
                                            <label for="r306a[2]">2. Air isi ulang</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r306a[3]" name="r306a" value="3" <?php if($model->r306a == '3') echo "checked"; ?>>
                                            <label for="r306a[3]">3. Leding</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r306a[4]" name="r306a" value="4" <?php if($model->r306a == '4') echo "checked"; ?>>
                                            <label for="r306a[4]">4. Sumur bor/pompa</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r306a[5]" name="r306a" value="5" <?php if($model->r306a == '5') echo "checked"; ?>>
                                            <label for="r306a[5]">5. Sumur terlindung</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r306a[6]" name="r306a" value="6" <?php if($model->r306a == '6') echo "checked"; ?>>
                                            <label for="r306a[6]">6. Sumur tak terlindung</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r306a[7]" name="r306a" value="7" <?php if($model->r306a == '7') echo "checked"; ?>>
                                            <label for="r306a[7]">7. Mata air terlindung</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r306a[8]" name="r306a" value="8" <?php if($model->r306a == '8') echo "checked"; ?>>
                                            <label for="r306a[8]">8. Mata air tak terlindung</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r306a[9]" name="r306a" value="9" <?php if($model->r306a == '9') echo "checked"; ?>>
                                            <label for="r306a[9]">9. Air permukaan</label>
                                            (sungai/danau/waduk/kolam/irigasi)
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r306a[10]" name="r306a" value="10" <?php if($model->r306a == '10') echo "checked"; ?>>
                                            <label for="r306a[10]">10. Air hujan</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r306a[11]" name="r306a" value="11" <?php if($model->r306a == '11') echo "checked"; ?>>
                                            <label for="r306a[11]">11. Lainnya</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group bordered-form p-2 mb-3 row" id="306b-row">
                                <label class="form-label col-md-3 col-form-label">306b. <div style="font-weight: bold; font-style:italic;">Jika 306a berkode 4, 5, 6, 7, atau 8,</div>Seberapa jauh jarak sumber air minum utama ke tempat penampungan limbah/kotoran/tinja terdekat?</label>
                                <div class="col d-flex align-items-center">
                                    <div id="r306b" role="radiogroup" aria-required="true">
                                        <input type="hidden" id="r306b[0]" name="r306b" value="<?=$model->r306b ?>">
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r306b[1]" name="r306b" value="1"<?php if($model->r306b == '1') echo "checked"; ?>>
                                            <label for="r306b[1]">1. < 10 meter</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r306b[2]" name="r306b" value="2"<?php if($model->r306b == '2') echo "checked"; ?>>
                                            <label for="r306b[2]">2. ≥ 10 meter</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r306b[8]" name="r306b" value="8"<?php if($model->r306b == '8') echo "checked"; ?>>
                                            <label for="r306b[8]">8. Tidak tahu</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 307a -->
                            <div class="form-group bordered-form p-2 mb-3 row">
                                <label class="form-label col-md-3 col-form-label">307a. Sumber penerangan utama</label>
                                <div class="col d-flex align-items-center">
                                    <div id="r307a" role="radiogroup" aria-required="true">
                                        <input type="hidden" id="r307a[0]" name="r307a" value="<?=$model->r307a ?>">
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r307a[1]" name="r307a" value="1" <?php if($model->r307a == '1') echo "checked"; ?>>
                                            <label for="r307a[1]" style="margin-right: 1rem;">1. Listrik PLN dengan meteran</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r307a[2]" name="r307a" value="2" <?php if($model->r307a == '2') echo "checked"; ?>>
                                            <label for="r307a[2]" style="margin-right: 1rem;">2. Listrik PLN tanpa meteran</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r307a[3]" name="r307a" value="3" <?php if($model->r307a == '3') echo "checked"; ?>>
                                            <label for="r307a[3]" style="margin-right: 1rem;">3. Listrik Non-PLN</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r307a[4]" name="r307a" value="4" <?php if($model->r307a == '4') echo "checked"; ?>>
                                            <label for="r307a[4]" style="margin-right: 1rem;">4. Bukan listrik</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 307b belum fix-->
                            <div class="bordered-form row mb-3 p-1">
                            <div class="form-group p-1 mb-3 row" id="307b-row">
                                <label class="form-label col-md-3 col-form-label">307b. <div style="font-weight: bold; font-style:italic;">Jika 307a berkode 1, </div>Daya yang terpasang di rumah ini</label>
                                <div class="col d-flex align-items-center">
                                    <div id="r307b" role="radiogroup" aria-required="true">
                                        <label for="r307b[1]" style="margin-right: 1rem;">1. 450 watt</label>
                                        <label for="r307b[2]" style="margin-right: 1rem;">2. 900 watt</label>
                                        <label for="r307b[3]" style="margin-right: 1rem;">3. 1300 watt</label>
                                        <label for="r307b[4]" style="margin-right: 1rem;">4. 2200 watt</label>
                                        <label for="r307b[5]" style="margin-right: 1rem;">5. > 2200 watt</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group p-1 mb-3 row" id="307b-row">
                                <div class="col-md-3"></div>
                                        <label class="form-label col-md-1 col-form-label">Met. 1</label>
                                        <div class="col-sm">
                                            <input type="text" id="r307b1" class="form-control" name="r307b1" value="<?= $model->r307b1 ?>">
                                        </div>
                                        <label class="form-label col-md-1 col-form-label">Met. 2</label>
                                        <div class="col-sm">
                                            <input type="text" id="r307b2" class="form-control" name="r307b2" value="<?= $model->r307b2 ?>">
                                        </div>
                                        <label class="form-label col-md-1 col-form-label">Met. 3</label>
                                        <div class="col-sm">
                                            <input type="text" id="r307b3" class="form-control" name="r307b3" value="<?= $model->r307b3 ?>">
                                        </div>
                            </div>
                            </div>
                            <!-- 308, ada 00 meledak-->
                            <div class="form-group bordered-form p-2 mb-3 row">
                                <label class="form-label col-md-3 col-form-label">308. Bahan bakar/energi utama untuk memasak  </label>
                                <div class="col d-flex align-items-center">
                                    <div id="r308" role="radiogroup" aria-required="true">
                                        <input type="hidden" id="r308[0]" name="r308" value="<?=$model->r308 ?>">
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r308[1]" name="r308" value="1"<?php if($model->r308 == '1') echo "checked"; ?>>
                                            <label for="r308[1]">1. Listrik</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r308[2]" name="r308" value="2"<?php if($model->r308 == '2') echo "checked"; ?>>
                                            <label for="r308[2]">2. Gas elpiji 5,5kg/blue gaz</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r308[3]" name="r308" value="3"<?php if($model->r308 == '3') echo "checked"; ?>>
                                            <label for="r308[3]">3. Gas elpiji 12kg</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r308[4]" name="r308" value="4"<?php if($model->r308 == '4') echo "checked"; ?>>
                                            <label for="r308[4]">4. Gas elpiji 3kg</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r308[6]" name="r308" value="6"<?php if($model->r308 == '6') echo "checked"; ?>>
                                            <label for="r308[6]">6. Biogas</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r308[7]" name="r308" value="7"<?php if($model->r308 == '7') echo "checked"; ?>>
                                            <label for="r308[7]">7. Minyak tanah</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r308[8]" name="r308" value="8"<?php if($model->r308 == '8') echo "checked"; ?>>
                                            <label for="r308[8]">8. Briket</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r308[9]" name="r308" value="9"<?php if($model->r308 == '9') echo "checked"; ?>>
                                            <label for="r308[9]">9. Arang</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r308[10]" name="r308" value="10" <?php if($model->r308 == '10') echo "checked"; ?>>
                                            <label for="r308[10]">10. Kayu bakar</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r308[11]" name="r308" value="11" <?php if($model->r308 == '11') echo "checked"; ?>>
                                            <label for="r308[11]">11. Lainnya</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r308[00]" name="r308" value="00" <?php if($model->r308 == '00') echo "checked"; ?>>
                                            <label for="r308[00]">00. Tidak memasak di rumah</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group bordered-form p-2 mb-3 row">
                                <label class="form-label col-md-3 col-form-label">309a. Kepemilikan dan penggunaan fasilitas tempat buang air besar</label>
                                <div class="col d-flex align-items-center">
                                    <div id="r309a" role="radiogroup" aria-required="true">
                                        <input type="hidden" id="r309a[0]" name="r309a" value="<?=$model->r309a ?>">
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r309a[1]" name="r309a" value="1" <?php if($model->r309a == '1') echo "checked"; ?>>
                                            <label for="r309a[1]">1. Ada, digunakan hanya</label>
                                            Anggota Keluarga sendiri
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r309a[2]" name="r309a" value="2" <?php if($model->r309a == '2') echo "checked"; ?>>
                                            <label for="r309a[2]">2. Ada, digunakan bersama</label>
                                            Anggota Keluarga dari keluarga tertentu
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r309a[3]" name="r309a" value="3" <?php if($model->r309a == '3') echo "checked"; ?>>
                                            <label for="r309a[3]">3. Ada, di MCK komunal</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r309a[4]" name="r309a" value="4" <?php if($model->r309a == '4') echo "checked"; ?>>
                                            <label for="r309a[4]">4. Ada, di MCK</label>
                                            umum/siapapun menggunakan
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r309a[5]" name="r309a" value="5" <?php if($model->r309a == '5') echo "checked"; ?>>
                                            <label for="r309a[5]">5. Ada, Anggota Keluarga</label>
                                            tidak menggunakan
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r309a[6]" name="r309a" value="6" <?php if($model->r309a == '6') echo "checked"; ?>>
                                            <label for="r309a[6]">6. Tidak ada fasilitas</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group bordered-form p-2 mb-3 row" id="309b-row">
                                <label class="form-label col-md-3 col-form-label">309b. <div style="font-weight: bold; font-style:italic;">Jika 309a berkode 1, 2, atau 3, </div>Jenis kloset</label>
                                <div class="col d-flex align-items-center">
                                    <div id="r309b" role="radiogroup" aria-required="true">
                                        <input type="hidden" id="r309b[0]" name="r309b" value="<?=$model->r309b ?>">
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r309b[1]" name="r309b" value="1" <?php if($model->r309b == '1') echo "checked"; ?>>
                                            <label for="r309b[1]">1. Leher angsa</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r309b[2]" name="r309b" value="2" <?php if($model->r309b == '2') echo "checked"; ?>>
                                            <label for="r309b[2]">2. Plengsengan dengan tutup</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r309b[3]" name="r309b" value="3" <?php if($model->r309b == '3') echo "checked"; ?>>
                                            <label for="r309b[3]">3. Plengsengan tanpa tutup</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r309b[4]" name="r309b" value="4" <?php if($model->r309b == '4') echo "checked"; ?>>
                                            <label for="r309b[4]">4. Cemplung/cubluk</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group bordered-form p-2 mb-3 row">
                                <label class="form-label col-md-3 col-form-label">310. Tempat pembuangan akhir tinja</label>
                                <div class="col d-flex align-items-center">
                                    <div id="r310" role="radiogroup" aria-required="true">
                                        <input type="hidden" id="r310[0]" name="r310" value="<?=$model->r310 ?>">
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r310[1]" name="r310" value="1" <?php if($model->r310 == '1') echo "checked"; ?>>
                                            <label for="r310[1]">1. Tangki septik</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r310[2]" name="r310" value="2" <?php if($model->r310 == '2') echo "checked"; ?>>
                                            <label for="r310[2]">2. IPAL</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r310[3]" name="r310" value="3" <?php if($model->r310 == '3') echo "checked"; ?>>
                                            <label for="r310[3]">3. Kolam/sawah/sungai/danau/laut</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r310[4]" name="r310" value="4" <?php if($model->r310 == '4') echo "checked"; ?>>
                                            <label for="r310[4]">4. Lubang tanah</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r310[5]" name="r310" value="5" <?php if($model->r310 == '5') echo "checked"; ?>>
                                            <label for="r310[5]">5. Pantai/tanah lapang/kebun</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r310[6]" name="r310" value="6" <?php if($model->r310 == '6') echo "checked"; ?>>
                                            <label for="r310[6]">6. Lainnya</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-end">
                                <?= Html::submitButton('Simpan', ['class' => 'btn btn-secondary']) ?>
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
                        <div class="text-end mb-3">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">Tambah</button>
                        </div>
                        <!-- Button trigger modal -->
                        <?= $this->render( '_gridart', ['dataProvider'=> $dataProvider, 'searchModel' => $searchModel] ); ?>
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
                                                <input type="button" id="save_button1" value="Save" class="save btn btn-primary btn-sm me-2" style="display:none;" onclick="save_row('1')">  
                                                <input type="button" class="btn btn-primary btn-sm entri me-2" id="entri_button1" value="Entri" onclick="entri_row('1')">
                                                <input type="button" class="btn btn-success btn-sm edit me-2" id="edit_button1" value="Edit" onclick="edit_row('1')">
                                                <input type="button" class="btn btn-danger btn-sm delete me-2" id="delete_button1" value="Delete" onclick="delete_row('1')">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><input type="text" class="form-control" id="new_name" disabled></td>
                                    <td><input type="button" class="add btn btn-secondary btn-sm" onclick="add_row();" value="Tambah"></td>
                                </tr>
                            </tbody>
                        </table> -->
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header">
                    <div class="text-center mb-0 p-1 h4">V. KEIKUTSERTAAN PROGRAM, KEPEMILIKAN ASET, DAN LAYANAN</div>
                </div>
                <div class="container-fluid p-2">
                    <div class="card-body">
                        <!-- <form -->
                            <div class="form-group bordered-form p-2 mb-3 row">
                                <label class="form-label row">501. Dalam satu tahun terakhir, apakah keluarga menerima program berikut? (Bulan/Tahun)</label>
                                <div class="row mb-4">
                                    <label class="form-label col-md-5 col-form-label">a. Program Bantuan Sosial Sembako/BPNT</label>
                                    <div class="col-md-2 d-flex align-items-center">
                                        <div id="r501a" role="radiogroup" aria-required="true">
                                            <input type="hidden" id="r501a[0]" name="r501a" value="2">
                                            <div class="col">
                                                <input type="radio"  style="margin-right: 0.5rem;" id="r501a[1]" name="r501a" value="1" <?php if($model->r501a == '1') echo "checked"; ?>>
                                                <label for="r501a[1]" style="margin-right: 1rem;">1. Ya</label>
                                            </div>
                                            <div class="col">
                                                <input type="radio" style="margin-right: 0.5rem;" id="r501a[2]" name="r501a" value="2" <?php if($model->r501a == '2') echo "checked"; ?>>
                                                <label for="r501a[2]" style="margin-right: 1rem;">2. Tidak</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md d-flex align-items-center">
                                        <div class="col-22">
                                            <input type="number" id="r501a_bln" class="form-control" name="r501a_bln" min="1" max="12" value="<?= $model->r501a_bln ?>">
                                        </div>
                                        <div class="col-md-4">
                                            <input type="number" id="r501a_thn" class="form-control" name="r501a_thn" min="1920" max="2022" style="margin-left: 2rem;" value="<?= $model->r501a_thn ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="form-label col-md-5 col-form-label">b. Program Keluarga Harapan (PKH)</label>
                                    <div class="col-md-2 d-flex align-items-center">
                                        <div id="r501b" role="radiogroup" aria-required="true">
                                            <input type="hidden" id="r501b[0]" name="r501b" value="2">
                                            <div class="col">
                                                <input type="radio"  style="margin-right: 0.5rem;" id="r501b[1]" name="r501b" value="1" <?php if($model->r501b == '1') echo "checked"; ?>>
                                                <label for="r501b[1]" style="margin-right: 1rem;">1. Ya</label>
                                            </div>
                                            <div class="col">
                                                <input type="radio" style="margin-right: 0.5rem;" id="r501b[2]" name="r501b" value="2" <?php if($model->r501b == '2') echo "checked"; ?>>
                                                <label for="r501b[2]" style="margin-right: 1rem;">2. Tidak</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md d-flex align-items-center">
                                        <div class="col-22">
                                            <input type="number" id="r501b_bln" class="form-control" name="r501b_bln" min="1" max="12" value="<?= $model->r501b_bln ?>">
                                        </div>
                                        <div class="col-md-4">
                                            <input type="number" id="r501b_thn" class="form-control" name="r501b_thn" min="1920" max="2022" style="margin-left: 2rem;" value="<?= $model->r501b_thn ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="form-label col-md-5 col-form-label">c. Program Bantuan Langsung Tunai (BLT) Desa</label>
                                    <div class="col-md-2 d-flex align-items-center">
                                        <div id="r501c" role="radiogroup" aria-required="true">
                                            <input type="hidden" id="r501c[0]" name="r501c" value="2">
                                            <div class="col">
                                                <input type="radio"  style="margin-right: 0.5rem;" id="r501c[1]" name="r501c" value="1" <?php if($model->r501c == '1') echo "checked"; ?>>
                                                <label for="r501c[1]" style="margin-right: 1rem;">1. Ya</label>
                                            </div>
                                            <div class="col">
                                                <input type="radio" style="margin-right: 0.5rem;" id="r501c[2]" name="r501c" value="2" <?php if($model->r501c == '2') echo "checked"; ?>>
                                                <label for="r501c[2]" style="margin-right: 1rem;">2. Tidak</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md d-flex align-items-center">
                                        <div class="col-22">
                                            <input type="number" id="r501c_bln" class="form-control" name="r501c_bln" min="1" max="12" value="<?= $model->r501c_bln ?>">
                                        </div>
                                        <div class="col-md-4">
                                            <input type="number" id="r501c_thn" class="form-control" name="r501c_thn" min="1920" max="2022" style="margin-left: 2rem;" value="<?= $model->r501c_thn ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="form-label col-md-5 col-form-label">d. Program Subsidi Listrik (gratis/pemotongan biaya)</label>
                                    <div class="col-md-2 d-flex align-items-center">
                                        <div id="r501d" role="radiogroup" aria-required="true">
                                            <input type="hidden" id="r501d[0]" name="r501d" value="2">
                                            <div class="col">
                                                <input type="radio"  style="margin-right: 0.5rem;" id="r501d[1]" name="r501d" value="1" <?php if($model->r501d == '1') echo "checked"; ?>>
                                                <label for="r501d[1]" style="margin-right: 1rem;">1. Ya</label>
                                            </div>
                                            <div class="col">
                                                <input type="radio" style="margin-right: 0.5rem;" id="r501d[2]" name="r501d" value="2" <?php if($model->r501d == '2') echo "checked"; ?>>
                                                <label for="r501d[2]" style="margin-right: 1rem;">2. Tidak</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md d-flex align-items-center">
                                        <div class="col-22">
                                            <input type="number" id="r501d_bln" class="form-control" name="r501d_bln" min="1" max="12" value="<?= $model->r501d_bln ?>">
                                        </div>
                                        <div class="col-md-4">
                                            <input type="number" id="r501d_thn" class="form-control" name="r501d_thn" min="1920" max="2022" style="margin-left: 2rem;" value="<?= $model->r501d_thn ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="form-label col-md-5 col-form-label">e. Program Bantuan Pemerintah Daerah</label>
                                    <div class="col-md-2 d-flex align-items-center">
                                        <div id="r501e" role="radiogroup" aria-required="true">
                                            <input type="hidden" id="r501e[0]" name="r501e" value="2">
                                            <div class="col">
                                                <input type="radio"  style="margin-right: 0.5rem;" id="r501e[1]" name="r501e" value="1" <?php if($model->r501e == '1') echo "checked"; ?>>
                                                <label for="r501e[1]" style="margin-right: 1rem;">1. Ya</label>
                                            </div>
                                            <div class="col">
                                                <input type="radio" style="margin-right: 0.5rem;" id="r501e[2]" name="r501e" value="2" <?php if($model->r501e == '2') echo "checked"; ?>>
                                                <label for="r501e[2]" style="margin-right: 1rem;">2. Tidak</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md d-flex align-items-center">
                                        <div class="col-22">
                                            <input type="number" id="r501e_bln" class="form-control" name="r501e_bln" min="1" max="12" value="<?= $model->r501e_bln ?>">
                                        </div>
                                        <div class="col-md-4">
                                            <input type="number" id="r501e_thn" class="form-control" name="r501e_thn" min="1920" max="2022" style="margin-left: 2rem;" value="<?= $model->r501e_thn ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="form-label col-md-5 col-form-label">f. Program Bantuan Subsidi Pupuk</label>
                                    <div class="col-md-2 d-flex align-items-center">
                                        <div id="r501f" role="radiogroup" aria-required="true">
                                            <input type="hidden" id="r501f[0]" name="r501f" value="2">
                                            <div class="col">
                                                <input type="radio"  style="margin-right: 0.5rem;" id="r501f[1]" name="r501f" value="1" <?php if($model->r501f == '1') echo "checked"; ?>>
                                                <label for="r501f[1]" style="margin-right: 1rem;">1. Ya</label>
                                            </div>
                                            <div class="col">
                                                <input type="radio" style="margin-right: 0.5rem;" id="r501f[2]" name="r501f" value="2" <?php if($model->r501f == '2') echo "checked"; ?>>
                                                <label for="r501f[2]" style="margin-right: 1rem;">2. Tidak</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md d-flex align-items-center">
                                        <div class="col-22">
                                            <input type="number" id="r501f_bln" class="form-control" name="r501f_bln" min="1" max="12" value="<?= $model->r501f_bln ?>">
                                        </div>
                                        <div class="col-md-4">
                                            <input type="number" id="r501f_thn" class="form-control" name="r501f_thn" min="1920" max="2022" style="margin-left: 2rem;" value="<?= $model->r501f_thn ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label class="form-label col-md-5 col-form-label">g. Program Subsidi LPG</label>
                                    <div class="col-md-2 d-flex align-items-center">
                                        <div id="r501g" role="radiogroup" aria-required="true">
                                            <input type="hidden" id="r501g[0]" name="r501g" value="2">
                                            <div class="col">
                                                <input type="radio"  style="margin-right: 0.5rem;" id="r501g[1]" name="r501g" value="1" <?php if($model->r501g == '1') echo "checked"; ?>>
                                                <label for="r501g[1]" style="margin-right: 1rem;">1. Ya</label>
                                            </div>
                                            <div class="col">
                                                <input type="radio" style="margin-right: 0.5rem;" id="r501g[2]" name="r501g" value="2" <?php if($model->r501g == '2') echo "checked"; ?>>
                                                <label for="r501g[2]" style="margin-right: 1rem;">2. Tidak</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md d-flex align-items-center">
                                        <div class="col-22">
                                            <input type="number" id="r501g_bln" class="form-control" name="r501g_bln" min="1" max="12" value="<?= $model->r501g_bln ?>">
                                        </div>
                                        <div class="col-md-4">
                                            <input type="number" id="r501g_thn" class="form-control" name="r501g_thn" min="1920" max="2022" style="margin-left: 2rem;" value="<?= $model->r501g_thn ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 502 -->
                            <div class="form-group bordered-form p-2 mb-3 row">
                                <label class="form-label col-md-3 col-form-label">502. Keluarga memiliki aset bergerak sebagai berikut: </label>
                                <div class="col d-flex align-items-center">
                                    <div id="r502" role="checkbox" aria-required="true">
                                        <div class="col">
                                            <input type="hidden" id="r502a[0]" name="r502a" value="2">
                                            <input type="checkbox" style="margin-right: 0.5rem;" id="r502a" name="r502a" value="1" <?php if($model->r502a == '1') echo "checked"; ?>>
                                            <label for="r502a">a. Tabung gas 5,5 kg atau lebih</label>
                                        </div>
                                        <div class="col">
                                            <input type="hidden" id="r502b[0]" name="r502b" value="2">
                                            <input type="checkbox" style="margin-right: 0.5rem;" id="r502b" name="r502b" value="1" <?php if($model->r502b == '1') echo "checked"; ?>>
                                            <label for="r502b">b. Lemari es/kulkas</label>
                                        </div>
                                        <div class="col">
                                            <input type="hidden" id="r502c[0]" name="r502c" value="2">
                                            <input type="checkbox" style="margin-right: 0.5rem;" id="r502c" name="r502c" value="1" <?php if($model->r502c == '1') echo "checked"; ?>>
                                            <label for="r502c">c. Air Conditioner (AC)</label>
                                        </div>
                                        <div class="col">
                                            <input type="hidden" id="r502d[0]" name="r502d" value="2">
                                            <input type="checkbox" style="margin-right: 0.5rem;" id="r502d" name="r502d" value="1" <?php if($model->r502d == '1') echo "checked"; ?>>
                                            <label for="r502d">d. Pemanas air (water heater)</label>
                                        </div>
                                        <div class="col">
                                            <input type="hidden" id="r502e[0]" name="r502e" value="2">
                                            <input type="checkbox" style="margin-right: 0.5rem;" id="r502e" name="r502e" value="1" <?php if($model->r502e == '1') echo "checked"; ?>>
                                            <label for="r502e">e. Telepon rumah (PSTN)</label>
                                        </div>
                                        <div class="col">
                                            <input type="hidden" id="r502f[0]" name="r502f" value="2">
                                            <input type="checkbox" style="margin-right: 0.5rem;" id="r502f" name="r502f" value="1" <?php if($model->r502f == '1') echo "checked"; ?>>
                                            <label for="r502f">f. Televisi layar datar (min. 30 inci)</label>
                                        </div>
                                        <div class="col">
                                            <input type="hidden" id="r502g[0]" name="r502g" value="2">
                                            <input type="checkbox" style="margin-right: 0.5rem;" id="r502g" name="r502g" value="1" <?php if($model->r502g == '1') echo "checked"; ?>>
                                            <label for="r502g">g. Emas/perhiasan (min. 10 gram)</label>
                                        </div>
                                        <div class="col">
                                            <input type="hidden" id="r502h[0]" name="r502h" value="2">
                                            <input type="checkbox" style="margin-right: 0.5rem;" id="r502h" name="r502h" value="1" <?php if($model->r502h == '1') echo "checked"; ?>>
                                            <label for="r502h">h. Komputer/Laptop/Tablet</label>
                                        </div>
                                        <div class="col">
                                            <input type="hidden" id="r502i[0]" name="r502i" value="2">
                                            <input type="checkbox" style="margin-right: 0.5rem;" id="r502i" name="r502i" value="1" <?php if($model->r502i == '1') echo "checked"; ?>>
                                            <label for="r502i">i. Sepeda Motor</label>
                                        </div>
                                        <div class="col">
                                            <input type="hidden" id="r502j[0]" name="r502j" value="2">
                                            <input type="checkbox" style="margin-right: 0.5rem;" id="r502j" name="r502j" value="1" <?php if($model->r502j == '1') echo "checked"; ?>>
                                            <label for="r502j">j. Sepeda</label>
                                        </div>
                                        <div class="col">
                                            <input type="hidden" id="r502k[0]" name="r502k" value="2">
                                            <input type="checkbox" style="margin-right: 0.5rem;" id="r502k" name="r502k" value="1" <?php if($model->r502k == '1') echo "checked"; ?>>
                                            <label for="r502k">k. Mobil</label>
                                        </div>
                                        <div class="col">
                                            <input type="hidden" id="r502l[0]" name="r502l" value="2">
                                            <input type="checkbox" style="margin-right: 0.5rem;" id="r502l" name="r502l" value="1" <?php if($model->r502l == '1') echo "checked"; ?>>
                                            <label for="r502l">l. Perahu</label>
                                        </div>
                                        <div class="col">
                                            <input type="hidden" id="r502m[0]" name="r502m" value="2">
                                            <input type="checkbox" style="margin-right: 0.5rem;" id="r502m" name="r502m" value="1" <?php if($model->r502m == '1') echo "checked"; ?>>
                                            <label for="r502m">m. Kapal/Perahu Motor</label>
                                        </div>
                                        <div class="col">
                                            <input type="hidden" id="r502n[0]" name="r502n" value="2">
                                            <input type="checkbox" style="margin-right: 0.5rem;" id="r502n" name="r502n" value="1" <?php if($model->r502n == '1') echo "checked"; ?>>
                                            <label for="r502n">n. Smartphone</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- 503 -->
                            <div class="form-group bordered-form p-2 mb-3 row">
                                <label class="form-label col-md-3 col-form-label">503. Keluarga memiliki aset tidak bergerak sebagai berikut: </label>
                                <div class="col d-flex align-items-center">
                                    <div id="r503" role="checkbox" aria-required="true">
                                        <div class="col">
                                            <input type="hidden" id="r503a[0]" name="r503a" value="2">
                                            <input type="checkbox" style="margin-right: 0.5rem;" id="r503a" name="r503a" value="1" <?php if($model->r503a == '1') echo "checked"; ?>>
                                            <label for="r503a">a. Lahan (selain yang ditempati)</label>
                                        </div>
                                        <div class="col">
                                            <input type="hidden" id="r503b[0]" name="r503b" value="2">
                                            <input type="checkbox" style="margin-right: 0.5rem;" id="r503b" name="r503b" value="1" <?php if($model->r503b == '1') echo "checked"; ?>>
                                            <label for="r503b">b. Rumah/bangunan di tempat lain</label>
                                        </div>
                                    </div>
                                </div>  
                            </div>

                            <!-- 504 -->
                            <div class="form-group bordered-form p-2 mb-2 row">
                                <label class="form-label col-md-3 col-form-label">504. Jumlah ternak yang dimiliki (ekor):</label>
                                <div class="col d-flex align-items-center">
                                    <div class="row">
                                        <label for="r504a">a. Sapi</label>
                                        <input type="number" id="r504a" class="form-control" style="width: 4rem; margin-left: 3rem;" name="r504a" value="<?= $model->r504a ?>" >
                                        <label for="r504b">b. Kerbau</label>
                                        <input type="number" id="r504b" class="form-control" style="width: 4rem; margin-left: 3rem;" name="r504b" value="<?= $model->r504b ?>">
                                        <label for="r504c">c. Kuda</label>
                                        <input type="number" id="r504c" class="form-control" style="width: 4rem; margin-left: 3rem;" name="r504c" value="<?= $model->r504c ?>">
                                    </div>
                                    <div class="row">
                                        <label for="r504d">d. Babi</label>
                                        <input type="number" id="r504d" class="form-control" style="width: 4rem; margin-left: 3rem;" name="r504d" value="<?= $model->r504d ?>">
                                        <label for="r504e">e. Kambing/Domba</label>
                                        <input type="number" id="r504e" class="form-control" style="width: 4rem; margin-left: 3rem;" name="r504e" value="<?= $model->r504e ?>">
                                    </div>
                                </div>
                            </div>

                            <!-- 505 -->
                            <div class="form-group bordered-form p-2 mb-3 row">
                                <label class="form-label col-md-3 col-form-label">505. Jenis akses internet utama yang digunakan keluarga selama sebulan terakhir?</label>
                                <div class="col d-flex align-items-center">
                                    <div id="r505" role="radiogroup" aria-required="true">
                                        <input type="hidden" id="r505[0]" name="r505" value="<?=$model->r505 ?>">
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r505[1]" name="r505" value="0" <?php if($model->r505 == '0') echo "checked"; ?>>
                                            <label for="r505[1]" style="margin-right: 1rem;">0. Tidak menggunakan internet</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r505[2]" name="r505" value="1" <?php if($model->r505 == '1') echo "checked"; ?>>
                                            <label for="r505[2]" style="margin-right: 1rem;">1. Internet dan TV digital berlangganan</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r505[3]" name="r505" value="2" <?php if($model->r505 == '2') echo "checked"; ?>>
                                            <label for="r505[3]" style="margin-right: 1rem;">2. WiFi</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r505[4]" name="r505" value="3" <?php if($model->r505 == '3') echo "checked"; ?>>
                                            <label for="r505[4]" style="margin-right: 1rem;">3. Internet Handphone</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 506 -->
                            <div class="form-group bordered-form p-2 mb-2 row">
                                <label class="form-label col-md-3 col-form-label">506. Apakah keluarga ini memiliki rekening aktif atau dompet digital?</label>
                                <div class="col d-flex align-items-center">
                                    <div id="r506" role="radiogroup" aria-required="true">
                                        <input type="hidden" id="r506[0]" name="r506" value="<?=$model->r506 ?>">
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r506[1]" name="r506" value="1" <?php if($model->r506 == '1') echo "checked"; ?>>
                                            <label for="r506[1]" style="margin-right: 1rem;">1. Ya, untuk usaha</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r506[2]" name="r506" value="2" <?php if($model->r506 == '2') echo "checked"; ?>>
                                            <label for="r506[2]" style="margin-right: 1rem;">2. Ya, untuk pribadi</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r506[3]" name="r506" value="3" <?php if($model->r506 == '3') echo "checked"; ?>>
                                            <label for="r506[3]" style="margin-right: 1rem;">3. Ya, untuk usaha dan pribadi</label>
                                        </div>
                                        <div class="col">
                                            <input type="radio" style="margin-right: 0.5rem;" id="r506[4]" name="r506" value="4" <?php if($model->r506 == '4') echo "checked"; ?>>
                                            <label for="r506[4]" style="margin-right: 1rem;">4. Tidak</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- </form> -->
                    </div>
                </div>
            </div>
    <div class="card mb-5">
        <div class="card-body">
            <div class="text-end">
                <?= Html::submitButton('Simpan', ['class' => 'btn btn-secondary']) ?>
                <!-- <span type="button" class="btn btn-secondary">Simpan</span> -->
                <span type="button" id="validasi" class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#error-list">Simpan & Validasi</span>
                <span type="button" id='kirim' class="btn btn-success disabled" data-bs-toggle="modal" data-bs-target="#kirim-modal">Kirim</span>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    <!-- modal-dialog-centered -->
    <div class="modal-dialog modal-fullscreen" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Entri Data Anggota Keluarga</h5>
                <span type="button" data-bs-dismiss="modal" aria-label="Close">
                    Tutup
                </span>
            </div>
            <div class="modal-body"style="background-color: #C5C9CC;">
                <?php $form = ActiveForm::begin(['action' => ['krt/entrianggota', 'id_ruta' => $model->id], 'method' => 'POST', 'id' => 'entri-anggota'] ); ?>
                <div class="container-xl">
                    <div class="card mb-3">
                        <div class="card-header">
                            <div class="text-center mb-0 p-1 h4">IV. KETERANGAN SOSIAL EKONOMI ANGGOTA KELUARGA</div>
                        </div>
                        <div class="card-header">
                            <div class="text-center mb-0 p-1 h4">A. KETERANGAN DEMOGRAFI</div>
                        </div>
                        <div class="container-fluid p-2">
                            <div class="card-body">
                                <!-- <form> -->
                                    <div class="form-group bordered-form p-2 mb-2 row">
                                        <label class="form-label col-md-3 col-form-label">401. Nomor urut anggota keluarga</label>
                                                <div class="col-sm-1">
                                                    <input type="number" id="addr401" class="form-control" name="r401" min="1" max="20">
                                                </div>
                                    </div>
                                    <div class="form-group bordered-form p-2 mb-2 row">
                                        <label class="form-label col-md-3 col-form-label">402. Nama anggota keluarga</label>
                                                <div class="col-sm-5">
                                                    <input type="text" id="addr402" class="form-control" style="text-transform:uppercase" name="r402">
                                                </div>
                                    </div>
                                    <div class="form-group bordered-form p-2 mb-2 row">
                                        <label class="form-label col-md-3 col-form-label">403. Nomor Induk Kependudukan (NIK)</label>
                                                <div class="col-sm-5">
                                                    <input type="text" id="addr403" class="form-control" name="r403">
                                                </div>
                                    </div>
                                    <div class="form-group bordered-form p-2 mb-3 row">
                                        <label class="form-label col-md-3 col-form-label">404. Keterangan keberadaan anggota keluarga</label>
                                        <div class="col d-flex align-items-center">
                                            <div id="addr404" role="radiogroup" aria-required="true">
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr404[1]" name="r404" value="1">
                                                    <label for="addr404[1]">1. Tinggal bersama keluarga</label>
                                                </div>
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr404[2]" name="r404" value="2">
                                                    <label for="addr404[2]">2. Meninggal</label>
                                                </div>
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr404[3]" name="r404" value="3">
                                                    <label for="addr404[3]">3. Tidak tinggal bersama keluarga/pindah</label>
                                                </div>
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr404[4]" name="r404" value="4">
                                                    <label for="addr404[4]">4. Anggota keluarga baru</label>
                                                </div>
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr404[5]" name="r404" value="5">
                                                    <label for="addr404[5]">5. Tidak ditemukan</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Jenis Kelamin -->
                                    <div class="form-group bordered-form p-2 mb-2 row">
                                        <label class="form-label col-md-3 col-form-label">405. Jenis Kelamin</label>
                                        <div class="col d-flex align-items-center">
                                            <div id="addr405" role="radiogroup" aria-required="true">
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr405[1]" name="r405" value="1">
                                                    <label for="addr405[1]" style="margin-right: 1rem;">1. Laki-laki</label>
                                                </div>
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr405[2]" name="r405" value="2">
                                                    <label for="addr405[2]" style="margin-right: 1rem;">2. Perempuan</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Tanggal lahir -->
                                    <div class="form-group bordered-form p-2 mb-2 row">
                                        <label class="form-label col-md-3 col-form-label">406. Tanggal lahir</label>
                                                <div class="col-md-5 d-flex align-items-center">
                                                    <input type="number" id="addr406tgl" class="form-control" name="r406tgl" min="1" max="31" style="width:5rem; margin-right:0.5rem;">
                                                    <input type="number" id="addr406bln" class="form-control" name="r406bln" min="1" max="12" style="width:5rem; margin-right:0.5rem;">
                                                    <input type="number" id="addr406thn" class="form-control" name="r406thn" min="1920" max="2022" style="width:7rem; margin-right:0.5rem;">
                                                </div>
                                    </div>
                                    <div class="form-group bordered-form p-2 mb-2 row">
                                        <label class="form-label col-md-3 col-form-label">407. Umur</label>
                                        <div class="col-md-5">
                                            <input type="number" id="addr407" class="form-control" name="r407" min="0" max="98" style="width: 4rem;">
                                        </div>
                                    </div>
                                    <!-- 408 -->
                                    <div class="form-group bordered-form p-2 mb-3 row">
                                        <label class="form-label col-md-3 col-form-label">408. Status Perkawinan</label>
                                        <div class="col d-flex align-items-center">
                                            <div id="addr408" role="radiogroup" aria-required="true">
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr408[1]" name="r408" value="1">
                                                    <label for="addr408[1]" style="margin-right: 1rem;">1. Belum kawin</label>
                                                </div>
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr408[2]" name="r408" value="2">
                                                    <label for="addr408[2]" style="margin-right: 1rem;">2. Kawin/nikah</label>
                                                </div>
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr408[3]" name="r408" value="3">
                                                    <label for="addr408[3]" style="margin-right: 1rem;">3. Cerai hidup</label>
                                                </div>
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr408[4]" name="r408" value="4">
                                                    <label for="addr408[4]" style="margin-right: 1rem;">4. Cerai mati</label>
                                                </div>    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group bordered-form p-2 mb-3 row">
                                        <label class="form-label col-md-3 col-form-label">409. Status hubungan dengan kepala keluarga   </label>
                                        <div class="col d-flex align-items-center">
                                            <div id="addr409" role="radiogroup" aria-required="true">
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr409[1]" name="r409" value="1">
                                                    <label for="addr409[1]">1. Kepala keluarga</label>
                                                </div>
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr409[2]" name="r409" value="2">
                                                    <label for="addr409[2]">2. Istri/suami</label>
                                                </div>
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr409[3]" name="r409" value="3">
                                                    <label for="addr409[3]">3. Anak</label>
                                                </div>
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr409[4]" name="r409" value="4">
                                                    <label for="addr409[4]">4. Menantu</label>
                                                </div>
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr409[5]" name="r409" value="5">
                                                    <label for="addr409[5]">5. Cucu</label>
                                                </div>
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr409[6]" name="r409" value="6">
                                                    <label for="addr409[6]">6. Orangtua/mertua</label>
                                                </div>
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr409[7]" name="r409" value="7">
                                                    <label for="addr409[7]">7. Pembantu/sopir</label>
                                                </div>
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr409[8]" name="r409" value="8">
                                                    <label for="addr409[8]">8. Lainnya</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group bordered-form p-2 mb-2 row">
                                        <label class="form-label col-md-3 col-form-label">410. <div style="font-weight: bold; font-style:italic;">Jika (Nama) merupakan wanita berusia 10-54 tahun dan 408 berkode 2,3 atau 4, </div>Apakah saat ini (Nama) sedang hamil?</label>
                                        <div class="col d-flex align-items-center">
                                            <div id="addr410" role="radiogroup" aria-required="true">
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr410[1]" name="r410" value="1">
                                                    <label for="addr410[1]" style="margin-right: 1rem;">1. Ya</label>
                                                </div>
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr410[2]" name="r410" value="2">
                                                    <label for="addr410[2]" style="margin-right: 1rem;">2. Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 411 -->
                                    <div class="form-group bordered-form p-2 mb-3 row">
                                        <label class="form-label col-md-3 col-form-label">411. Apakah (Nama) memiliki kartu identitas? <i>(Jumlahkan kode)</i></label>
                                        <div class="col d-flex align-items-center">
                                            <div class="col-5 d-flex flex-column">
                                                <label>0. Tidak Memiliki</label>
                                                <label>1. Akta kelahiran</label>
                                                <label>2. KIA</label>
                                                <label>4. KTP</label>
                                            </div>
                                            <div class="col-sm-1">
                                                <input type="number" id="addr411" class="form-control" name="r411" min="0" max="8">
                                            </div>
                                        </div>
                                    </div>
                                <!-- </form> -->
                            </div>
                        </div>
                        <div class="card-header">
                            <div class="text-center mb-0 p-1 h4">B. PENDIDIKAN (ANGGOTA KELUARGA USIA 5 TAHUN KE ATAS)</div>
                        </div>
                        <div class="container-fluid p-2">
                            <div class="card-body">
                                <!-- <form> -->
                                    <div class="form-group bordered-form p-2 mb-3 row">
                                        <label class="form-label col-md-3 col-form-label">412. Partisipasi sekolah</label>
                                        <div class="col d-flex align-items-center">
                                            <div id="addr412" role="radiogroup" aria-required="true">
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr412[1]" name="r412" value="1">
                                                    <label for="addr412[1]" style="margin-right: 1rem;">1. Tidak/belum pernah sekolah</label>
                                                </div>
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr412[2]" name="r412" value="2">
                                                    <label for="addr412[2]" style="margin-right: 1rem;">2. Masih sekolah</label>
                                                </div>
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr412[3]" name="r412" value="3">
                                                    <label for="addr412[3]" style="margin-right: 1rem;">3. Tidak bersekolah lagi</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 413 -->
                                    <div class="form-group bordered-form p-2 mb-2 align-items-center row">
                                        <label class="form-label col-md-3 col-form-label">413. Jenjang dan jenis pendidikan tertinggi yang pernah/sedang diduduki</label>
                                        <div class="col-md-5">
                                            <input type="text" id="addr413" class="form-control" name="r413" style="width: 4rem;">
                                        </div>
                                    </div>
                                    <div class="form-group bordered-form p-2 mb-2 align-items-center row">
                                        <label class="form-label col-md-3 col-form-label">414. Kelas tertinggi yang pernah/sedang diduduki <br> 1, 2, 3, 4, 5, 6, 7, 8 (Tamat & Lulus)</label>
                                        <div class="col-md-5">
                                            <input type="number" id="addr414" class="form-control" name="r414" min="1" max="8" style="width: 4rem;">
                                        </div>
                                    </div>
                                    <div class="form-group bordered-form p-2 mb-2 row">
                                        <label class="form-label col-md-3 col-form-label">415. Ijazah/STTB tertinggi yang dimiliki</label>
                                        <div class="col-md-5">
                                            <input type="text" id="addr415" class="form-control" name="r415" style="width: 4rem;">
                                        </div>
                                    </div>
                                    <div class="bordered-form row mb-3">
                                    <div class="form-group p-2 mb-2 row">
                                        <label class="form-label col col-form-label" style="font-weight: bold; font-style:italic;">Kode 413: Jenjang dan jenis pendidikan dan Kode 415: Ijazah/STTB</label>
                                    </div>
                                    <!-- petunjuk utk jenjang pendidikan dan ijazah -->
                                    <div class="form-group p-2 mb-2 row">
                                        <div class="col d-flex flex-column">
                                            <label>01. Paket A</label>
                                            <label>02. SDLB</label>
                                            <label>03. SD</label>
                                            <label>04. MI</label>
                                        </div>
                                        <div class="col d-flex flex-column">
                                            <label>05. SPM/PDF Ula</label>
                                            <label>06. Paket B</label>
                                            <label>07. SMPLB</label>
                                            <label>08. SMP</label>
                                        </div>
                                        <div class="col d-flex flex-column">
                                            <label>09. MTs</label>
                                            <label>10. SPM/PDF Wustha</label>
                                            <label>11. Paket C</label>
                                            <label>12. SMALB</label>
                                        </div>
                                        <div class="col d-flex flex-column">
                                            <label>13. SMA</label>
                                            <label>14. MA</label>
                                            <label>15. SMK</label>
                                            <label>16. MAK</label>
                                        </div>
                                        <div class="col d-flex flex-column">
                                            <label>17. SPM/PDF Ulya</label>
                                            <label>18. D1/D2/D3</label>
                                            <label>19. D4/S1</label>
                                            <label>20. Profesi</label>
                                        </div>
                                        <div class="col d-flex flex-column">
                                            <label>21. S2</label>
                                            <label>22. S3</label>
                                            <label>23. Tidak Punya Ijazah SD</label>
                                        </div>
                                    </div>
                                    </div>

                                <!-- </form> -->
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
                                            <div id="addr416a" role="radiogroup" aria-required="true">
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr416a[1]" name="r416a" value="1">
                                                    <label for="addr416a[1]" style="margin-right: 1rem;">1. Ya</label>
                                                </div>
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr416a[2]" name="r416a" value="2">
                                                    <label for="addr416a[2]" style="margin-right: 1rem;">2. Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group bordered-form p-2 mb-2 align-items-center row">
                                        <label class="form-label col-md-3 col-form-label">416b. Berapa jam (Nama) bekerja?</label>
                                        <div class="col-md-5 d-flex align-items-center">
                                            <input type="number" id="addr416b" class="form-control" name="r416b" min="1" max="168" style="width: 4rem; margin-right: 1rem;">
                                            <label class="form-label col-form-label">Jam</label>
                                        </div>
                                    </div>
                                    <!-- 417 -->
                                    <div class="form-group bordered-form p-2 mb-2 align-items-center row">
                                        <label class="form-label col-md-3 col-form-label">417. Lapangan usaha dari pekerjaan utama</label>
                                        <div class="col-md-5 d-flex align-items-center">
                                            <input type="text" id="addr417_desk" class="form-control" style="text-transform:uppercase;  margin-right: 0.5rem;" name="r417_desk" placeholder="Deskripsi">
                                            <input type="text" id="addr417" class="form-control" name="r417" style="width: 4rem;" placeholder="Kode">
                                        </div>
                                    </div>
                                    <div class="form-group bordered-form p-2 mb-2 align-items-center row">
                                        <label class="form-label col-md-3 col-form-label">418. Status dalam pekerjaan utama</label>
                                        <div class="col-md-5">
                                            <input type="text" id="addr418" class="form-control" name="r418" style="width: 4rem;">
                                        </div>
                                    </div>
                                    <div class="form-group bordered-form p-2 mb-3 row">
                                        <label class="form-label col-md-3 col-form-label">419. Apakah (Nama) memiliki NPWP?</label>
                                        <div class="col d-flex align-items-center">
                                            <div id="addr419" role="radiogroup" aria-required="true">
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr419[1]" name="r419" value="1">
                                                    <label for="addr419[1]">1. Ada, dapat menunjukkan</label>
                                                </div>
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr419[2]" name="r419" value="2">
                                                    <label for="addr419[2]">2. Ada, tidak dapat menunjukkan</label>
                                                </div>
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr419[3]" name="r419" value="3">
                                                    <label for="addr419[3]">3. Tidak ada</label>
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
                                            <div id="addr420" role="radiogroup" aria-required="true">
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr420[1]" name="r420" value="1">
                                                    <label for="addr420[1]" style="margin-right: 1rem;">1. Ya</label>
                                                </div>
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr420[2]" name="r420" value="2">
                                                    <label for="addr420[2]" style="margin-right: 1rem;">2. Tidak</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group bordered-form p-2 mb-2 align-items-center row">
                                        <label class="form-label col-md-3 col-form-label">421. Apakah lapangan usaha dari usaha tersebut</label>
                                        <div class="col-md-5 d-flex align-items-center">
                                            <input type="text" id="addr421_desk" class="form-control" style="text-transform:uppercase;  margin-right: 0.5rem;" name="r421_desk" placeholder="Deskripsi">
                                            <input type="text" id="addr421" class="form-control" name="r421" style="width: 4rem;" placeholder="Kode">
                                        </div>
                                    </div>
                                    <div class="form-group bordered-form p-2 mb-2 align-items-center row align-items-center">
                                        <label class="form-label col-md-3 col-form-label">422. Jumlah pekerja yang dibayar</label>
                                        <div class="col-3">
                                            <input type="number" id="addr422" class="form-control" name="r422" min="0" max="999">
                                        </div>
                                    </div>
                                    <div class="form-group bordered-form p-2 mb-2 align-items-center row align-items-center">
                                        <label class="form-label col-md-3 col-form-label">423. Jumlah pekerja yang tidak dibayar</label>
                                        <div class="col-3">
                                            <input type="number" id="addr423" class="form-control" name="r423" min="0" max="99">
                                        </div>
                                    </div>
                                    <div class="form-group bordered-form p-2 mb-2 align-items-center row">
                                        <label class="form-label col-md-3 col-form-label">424. Kepemilikan perizinan usaha</label>
                                        <div class="col-3">
                                            <input type="text" id="addr424" class="form-control" name="r424">
                                        </div>
                                    </div>
                                    <div class="form-group bordered-form p-2 mb-3 row">
                                        <label class="form-label col-md-3 col-form-label">425. Omzet usaha perbulan (Rupiah)</label>
                                        <div class="col d-flex align-items-center">
                                            <div id="addr425" role="radiogroup" aria-required="true">
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr425[1]" name="r425" value="1">
                                                    <label for="addr425[1]">1.) < 5 Juta (ultra mikro)</label>
                                                </div>
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr425[2]" name="r425" value="2">
                                                    <label for="addr425[2]">2.) 5 ─ < 15 Juta (ultra mikro)</label>
                                                </div>
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr425[3]" name="r425" value="3">
                                                    <label for="addr425[3]">3.) 15 ─ < 25 Juta (ultra mikro)</label>
                                                </div>
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr425[4]" name="r425" value="4">
                                                    <label for="addr425[4]">4.) 25 ─ < 167 Juta (mikro)</label>
                                                </div>
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr425[5]" name="r425" value="5">
                                                    <label for="addr425[5]">5.) 167 ─ < 1.250 Juta (kecil)</label>
                                                </div>
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr425[6]" name="r425" value="6">
                                                    <label for="addr425[6]">6.) 1.250 ─ < 4.167 Juta (menengah)</label>
                                                </div>
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr425[7]" name="r425" value="7">
                                                    <label for="addr425[7]">7.) ≥ 4.167 Juta (besar)</label>
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
                                                <input type="number" id="addr426" class="form-control" name="r426" min="0" max="63">
                                        </div>
                                    </div>
                                <!-- </form> -->
                            </div>
                        </div>
                        <div class="card-header">
                            <div class="text-center mb-0 p-1 h4">E. KESEHATAN</div>
                        </div>
                        <div class="container-fluid p-2">
                            <div class="card-body">
                                <!-- <form> -->
                                    <!-- 427 -->
                                    <div class="form-group bordered-form p-2 mb-3 row">
                                        <label><b>PERTANYAAN 427 UNTUK USIA 0-4 TAHUN</b></label>
                                        <label class="form-label col-md-3 col-form-label">427. Bagaimana kondisi gizi anak dari pemeriksaan 3 bulan terakhir di posyandu/puskesmas/rumah sakit dengan mengacu pada catatan/buku kontrol?</label>
                                        <div class="col d-flex align-items-center">
                                            <div id="addr427" role="radiogroup" aria-required="true">
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr427[1]" name="r427" value="1">
                                                    <label for="addr427[1]">1. Kurang gizi <i>(Wasting)</i></label>
                                                </div>
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr427[2]" name="r427" value="2">
                                                    <label for="addr427[2]">2. Kerdil <i>(Stunting)</i></label>
                                                </div>
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr427[3]" name="r427" value="3">
                                                    <label for="addr427[3]">3. Tidak ada catatan</label>
                                                </div>
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr427[4]" name="r427" value="8">
                                                    <label for="addr427[4]">8. Tidak tahu</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 428 -->
                                    <div class="form-group bordered-form p-2 mb-3 row">
                                        <label><b>PERTANYAAN 428a – 428f UNTUK USIA 2 TAHUN KE ATAS</b></label>

                                        <!-- 428 a -->
                                        <label class="form-label col-md-3 col-form-label">428. a. Apakah (Nama) mengalami kesulitan/gangguan penglihatan meskipun menggunakan alat bantu melihat?</label>
                                        <div class="col d-flex align-items-center">
                                            <div id="addr428a" role="radiogroup" aria-required="true">
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr428a[1]" name="r428a" value="1">
                                                    <label for="addr428a[1]">1. Ya, sama sekali tidak bisa</label>
                                                </div>    
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr428a[2]" name="r428a" value="2">
                                                    <label for="addr428a[2]">2. Ya, banyak kesulitan</label>
                                                    dan membutuhkan bantuan
                                                </div>    
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr428a[3]" name="r428a" value="3">
                                                    <label for="addr428a[3]">3. Ya, sedikit kesulitan,</label>
                                                    tapi tidak membutuhkan bantuan
                                                </div>    
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr428a[4]" name="r428a" value="4">
                                                    <label for="addr428a[4]">4. Tidak mengalami kesulitan</label>
                                                </div>    
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 428 b -->
                                    <div class="form-group bordered-form p-2 mb-3 row">
                                        <label class="form-label col-md-3 col-form-label">428. b. Apakah (Nama) mengalami kesulitan/gangguan pendengaran meskipun menggunakan alat bantu dengar?</label>
                                        <div class="col d-flex align-items-center">
                                            <div id="addr428b" role="radiogroup" aria-required="true">
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr428b[1]" name="r428b" value="1">
                                                    <label for="addr428b[1]">1. Ya, sama sekali tidak bisa</label>
                                                </div>    
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr428b[2]" name="r428b" value="2">
                                                    <label for="addr428b[2]">2. Ya, banyak kesulitan</label>
                                                    dan membutuhkan bantuan
                                                </div>    
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr428b[3]" name="r428b" value="3">
                                                    <label for="addr428b[3]">3. Ya, sedikit kesulitan,</label>
                                                    tapi tidak membutuhkan bantuan
                                                </div>    
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr428b[4]" name="r428b" value="4">
                                                    <label for="addr428b[4]">4. Tidak mengalami kesulitan</label>
                                                </div>    
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 428 c -->
                                    <div class="form-group bordered-form p-2 mb-3 row">
                                        <label class="form-label col-md-3 col-form-label">428. c. Apakah (Nama) mengalami kesulitan/gangguan berjalan atau naik tangga?</label>
                                        <div class="col d-flex align-items-center">
                                            <div id="addr428c" role="radiogroup" aria-required="true">
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr428c[1]" name="r428c" value="1">
                                                    <label for="addr428c[1]">1. Ya, sama sekali tidak bisa</label>
                                                </div>    
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr428c[2]" name="r428c" value="2">
                                                    <label for="addr428c[2]">2. Ya, banyak kesulitan</label>
                                                    dan membutuhkan bantuan
                                                </div>    
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr428c[3]" name="r428c" value="3">
                                                    <label for="addr428c[3]">3. Ya, sedikit kesulitan,</label>
                                                    tapi tidak membutuhkan bantuan
                                                </div>    
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr428c[4]" name="r428c" value="4">
                                                    <label for="addr428c[4]">4. Tidak mengalami kesulitan</label>
                                                </div>    
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 428 d -->
                                    <div class="form-group bordered-form p-2 mb-3 row">
                                        <label class="form-label col-md-3 col-form-label">428. d. Apakah (Nama) mengalami kesulitan/gangguan menggerakkan/menggunakan tangan/jari?</label>
                                        <div class="col d-flex align-items-center">
                                            <div id="addr428d" role="radiogroup" aria-required="true">
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr428d[1]" name="r428d" value="1">
                                                    <label for="addr428d[1]">1. Ya, sama sekali tidak bisa</label>
                                                </div>    
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr428d[2]" name="r428d" value="2">
                                                    <label for="addr428d[2]">2. Ya, banyak kesulitan</label>
                                                    dan membutuhkan bantuan
                                                </div>    
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr428d[3]" name="r428d" value="3">
                                                    <label for="addr428d[3]">3. Ya, sedikit kesulitan,</label>
                                                    tapi tidak membutuhkan bantuan
                                                </div>    
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr428d[4]" name="r428d" value="4">
                                                    <label for="addr428d[4]">4. Tidak mengalami kesulitan</label>
                                                </div>    
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 428 e -->
                                    <div class="form-group bordered-form p-2 mb-3 row">
                                        <label class="form-label col-md-3 col-form-label">428. e. Dibandingkan dengan penduduk yang sebaya, apakah (Nama) mengalami kesulitan/gangguan dalam belajar atau kemampuan intelektual?</label>
                                        <div class="col d-flex align-items-center">
                                            <div id="addr428e" role="radiogroup" aria-required="true">
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr428e[1]" name="r428e" value="1">
                                                    <label for="addr428e[1]">1. Ya, sama sekali tidak bisa</label>
                                                </div>    
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr428e[2]" name="r428e" value="2">
                                                    <label for="addr428e[2]">2. Ya, banyak kesulitan</label>
                                                    dan membutuhkan bantuan
                                                </div>    
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr428e[3]" name="r428e" value="3">
                                                    <label for="addr428e[3]">3. Ya, sedikit kesulitan,</label>
                                                    tapi tidak membutuhkan bantuan
                                                </div>    
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr428e[4]" name="r428e" value="4">
                                                    <label for="addr428e[4]">4. Tidak mengalami kesulitan</label>
                                                </div>    
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 428 f -->
                                    <div class="form-group bordered-form p-2 mb-3 row">
                                        <label class="form-label col-md-3 col-form-label">428. f. Dibandingkan dengan penduduk yang sebaya, apakah (Nama) mengalami kesulitan/gangguan mengendalikan perilaku?</label>
                                        <div class="col d-flex align-items-center">
                                            <div id="addr428f" role="radiogroup" aria-required="true">
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr428f[1]" name="r428f" value="1">
                                                    <label for="addr428f[1]">1. Ya, sama sekali tidak bisa</label>
                                                </div>    
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr428f[2]" name="r428f" value="2">
                                                    <label for="addr428f[2]">2. Ya, banyak kesulitan</label>
                                                    dan membutuhkan bantuan
                                                </div>    
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr428f[3]" name="r428f" value="3">
                                                    <label for="addr428f[3]">3. Ya, sedikit kesulitan,</label>
                                                    tapi tidak membutuhkan bantuan
                                                </div>    
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr428f[4]" name="r428f" value="4">
                                                    <label for="addr428f[4]">4. Tidak mengalami kesulitan</label>
                                                </div>    
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 428 g -->
                                    <div class="form-group bordered-form p-2 mb-3 row">
                                        <label><b>PERTANYAAN  428g – 428j UNTUK USIA 5 TAHUN KE ATAS</b></label>
                                        <label class="form-label col-md-3 col-form-label">428. g. Apakah (Nama) mengalami kesulitan/gangguan berbicara/berkomunikasi?</label>
                                        <div class="col d-flex align-items-center">
                                          <div id="addr428g" role="radiogroup" aria-required="true">
                                            <div class="col">
                                                <input type="radio" style="margin-right: 0.5rem;" id="addr428g[1]" name="r428g" value="1">
                                                <label for="addr428g[1]">1. Ya, sama sekali tidak bisa</label>
                                            </div>    
                                            <div class="col">
                                                <input type="radio" style="margin-right: 0.5rem;" id="addr428g[2]" name="r428g" value="2">
                                                <label for="addr428g[2]">2. Ya, banyak kesulitan</label>
                                                dan membutuhkan bantuan
                                            </div>    
                                            <div class="col">
                                                <input type="radio" style="margin-right: 0.5rem;" id="addr428g[3]" name="r428g" value="3">
                                                <label for="addr428g[3]">3. Ya, sedikit kesulitan,</label>
                                                tapi tidak membutuhkan bantuan
                                            </div>    
                                            <div class="col">
                                                <input type="radio" style="margin-right: 0.5rem;" id="addr428g[4]" name="r428g" value="4">
                                                <label for="addr428g[4]">4. Tidak mengalami kesulitan</label>
                                            </div>    
                                        </div>
                                        </div>
                                    </div>

                                    <!-- r428 h -->
                                    <div class="form-group bordered-form p-2 mb-3 row">
                                        <label class="form-label col-md-3 col-form-label">428. h. Apakah (Nama) mengalami kesulitan/gangguan untuk mengurus diri sendiri? (mandi, makan, berpakaian, BAK, BAB)</label>
                                        <div class="col d-flex align-items-center">
                                          <div id="addr428h" role="radiogroup" aria-required="true">
                                            <div class="col">
                                                <input type="radio" style="margin-right: 0.5rem;" id="addr428h[1]" name="r428h" value="1">
                                                <label for="addr428h[1]">1. Ya, sama sekali tidak bisa</label>
                                            </div>    
                                            <div class="col">
                                                <input type="radio" style="margin-right: 0.5rem;" id="addr428h[2]" name="r428h" value="2">
                                                <label for="addr428h[2]">2. Ya, banyak kesulitan</label>
                                                dan membutuhkan bantuan
                                            </div>    
                                            <div class="col">
                                                <input type="radio" style="margin-right: 0.5rem;" id="addr428h[3]" name="r428h" value="3">
                                                <label for="addr428h[3]">3. Ya, sedikit kesulitan,</label>
                                                tapi tidak membutuhkan bantuan
                                            </div>    
                                            <div class="col">
                                                <input type="radio" style="margin-right: 0.5rem;" id="addr428h[4]" name="r428h" value="4">
                                                <label for="addr428h[4]">4. Tidak mengalami kesulitan</label>
                                            </div>    
                                        </div>
                                        </div>
                                    </div>

                                    <!-- 428 i -->
                                    <div class="form-group bordered-form p-2 mb-3 row">
                                        <label class="form-label col-md-3 col-form-label">428. i. Apakah (Nama) mengalami kesulitan/gangguan mengingat/berkonsentrasi?</label>
                                        <div class="col d-flex align-items-center">
                                          <div id="addr428i" role="radiogroup" aria-required="true">
                                            <div class="col">
                                                <input type="radio" style="margin-right: 0.5rem;" id="addr428i[1]" name="r428i" value="1">
                                                <label for="addr428i[1]">1. Ya, sama sekali tidak bisa</label>
                                            </div>    
                                            <div class="col">
                                                <input type="radio" style="margin-right: 0.5rem;" id="addr428i[2]" name="r428i" value="2">
                                                <label for="addr428i[2]">2. Ya, banyak kesulitan</label>
                                                dan membutuhkan bantuan
                                            </div>    
                                            <div class="col">
                                                <input type="radio" style="margin-right: 0.5rem;" id="addr428i[3]" name="r428i" value="3">
                                                <label for="addr428i[3]">3. Ya, sedikit kesulitan,</label>
                                                tapi tidak membutuhkan bantuan
                                            </div>    
                                            <div class="col">
                                                <input type="radio" style="margin-right: 0.5rem;" id="addr428i[4]" name="r428i" value="4">
                                                <label for="addr428i[4]">4. Tidak mengalami kesulitan</label>
                                            </div>    
                                        </div>
                                        </div>
                                    </div>

                                    <!-- 428 j -->
                                    <div class="form-group bordered-form p-2 mb-3 row">
                                        <label class="form-label col-md-3 col-form-label">428. j. Seberapa sering (Nama) mengalami gangguan kesedihan depresi?</label>
                                        <div class="col d-flex align-items-center">
                                            <div id="addr428j" role="radiogroup" aria-required="true">
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr428j[1]" name="r428j" value="1">
                                                    <label for="addr428j[1]">1. Sangat sering</label>
                                                </div>
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr428j[2]" name="r428j" value="2">
                                                    <label for="addr428j[2]">2. Sering</label>
                                                </div>
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr428j[3]" name="r428j" value="3">
                                                    <label for="addr428j[3]">3. Jarang</label>
                                                </div>
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr428j[4]" name="r428j" value="4">
                                                    <label for="addr428j[4]">4. Tidak pernah</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 429 -->
                                    <div class="form-group bordered-form p-2 mb-3 row">
                                        <label class="form-label col-md-3 col-form-label">429. <b><i>Jika (Nama) berusia 60 tahun ke atas atau 428a-j ada yang berkode 1 atau 2</i></b> <br>Apakah (Nama) memiliki caregiver/pemberi rawat/pengasuh/wali?</label>
                                        <div class="col d-flex align-items-center">
                                            <div id="addr429" role="radiogroup" aria-required="true">
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr429[1]" name="r429" value="1">
                                                    <label for="addr429[1]" style="margin-right: 1rem;">1. Ya, Anggota Keluarga</label>
                                                </div>
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr429[2]" name="r429" value="2">
                                                    <label for="addr429[2]" style="margin-right: 1rem;">2. Ya, Bukan Anggota Keluarga</label>
                                                </div>
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr429[3]" name="r429" value="3">
                                                    <label for="addr429[3]" style="margin-right: 1rem;">3. Tinggal Sendiri</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 430 -->
                                    <div class="form-group bordered-form p-2 mb-2 align-items-center row">
                                        <label class="form-label col-md-3 col-form-label">430. Apakah (Nama) memiliki keluhan kesehatan kronis/menahun?</label>
                                        <div class="col-sm-1">
                                            <input type="text" id="addr430" class="form-control" name="r430">
                                        </div>
                                    </div>
                                    <div class="bordered-form row mb-3">
                                    <div class="form-group p-2 mb-2 row">
                                        <label class="form-label col col-form-label" style="font-weight: bold; font-style:italic;">Kode 430: Penyakit kronis/menahun</label>
                                    </div>
                                    <!-- Penyakit kronis/menahun -->
                                    <div class="form-group p-2 mb-2 row">
                                        <div class="col d-flex flex-column">
                                            <label>01. Tidak Ada</label>
                                            <label>02. Hipertensi <br>(darah tinggi)</label>
                                            <label>03. Rematik</label>
                                        </div>
                                        <div class="col d-flex flex-column">
                                            <label>04. Asma</label>
                                            <label>05. Masalah jantung</label>
                                            <label>06. Diabetes <br>(kencing manis)</label>
                                        </div>
                                        <div class="col d-flex flex-column">
                                            <label>07. Tuberculosis (TBC)</label>
                                            <label>08. Stroke</label>
                                            <label>09. Kanker atau tumor ganas</label>
                                        </div>
                                        <div class="col d-flex flex-column">
                                            <label>10. Gagal ginjal</label>
                                            <label>11. Haemophilia</label>
                                            <label>12. HIV/AIDS</label>
                                        </div>
                                        <div class="col d-flex flex-column">
                                            <label>13. Kolesterol</label>
                                            <label>14. Sirosis Hati</label>
                                            <label>15. Thalasemia</label>
                                        </div>
                                        <div class="col d-flex flex-column">
                                            <label>16. Leukimia</label>
                                            <label>17. Alzheimer</label>
                                            <label>18. Lainnya</label>
                                        </div>
                                    </div>
                                    </div>
                                <!-- </form> -->
                            </div>
                        </div>
                        <div class="card-header">
                            <div class="text-center mb-0 p-1 h4">F. PROGRAM PERLINDUNGAN SOSIAL</div>
                        </div>
                        <div class="container-fluid p-2">
                            <div class="card-body">
                                <!-- <form> -->
                                    <!-- 431 a -->
                                    <div class="form-group bordered-form p-2 mb-3 row">
                                        <label class="form-label col-md-3 col-form-label">431. a. Dalam satu tahun terakhir, apakah (Nama) memiliki jaminan kesehatan? <i>(Jumlahkan Kode)</i></label>
                                        <div class="col d-flex align-items-center">
                                            <div class="col-5 d-flex flex-column">
                                                <label>0. Tidak Memiliki</label>
                                                <label>1. PBI JKN</label>
                                                <label>2. JKN Mandiri</label>
                                                <label>4. JKN Pemberi Kerja</label>
                                                <label>8. Jamkes Lainnya</label>
                                                <label>99. Tidak Tahu</label>
                                            </div>
                                            <div class="col-sm-1">
                                                <input type="number" id="addr431a" class="form-control" name="r431a" min="0" max="99">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- 431 b -->
                                    <div class="form-group bordered-form p-2 mb-3 row">
                                        <label><b>PERTANYAAN 431b - 431d UNTUK USIA 5 TAHUN KE ATAS</b></label>
                                        <label class="form-label col-md-3 col-form-label">431. b. Dalam satu tahun terakhir, apakah (Nama) ikut serta dalam Program Pra-Kerja?</label>
                                        <div class="col d-flex align-items-center">
                                            <div id="addr431b" role="radiogroup" aria-required="true">
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr431b[1]" name="r431b" value="1">
                                                    <label for="addr431b[1]">1. Ya</label>
                                                </div>
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr431b[2]" name="r431b" value="2">
                                                    <label for="addr431b[2]">2. Tidak</label>
                                                </div>
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr431b[3]" name="r431b" value="8">
                                                    <label for="addr431b[3]">8. Tidak Tahu</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 431 c -->
                                    <div class="form-group bordered-form p-2 mb-3 row">
                                        <label class="form-label col-md-3 col-form-label">431. c. Dalam satu tahun terakhir, apakah (Nama) ikut serta dalam Program Kredit Usaha Rakyat (KUR)?</label>
                                        <div class="col d-flex align-items-center">
                                            <div id="addr431c" role="radiogroup" aria-required="true">
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr431c[1]" name="r431c" value="1">
                                                    <label for="addr431c[1]">1. Ya</label>
                                                </div>
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr431c[2]" name="r431c" value="2">
                                                    <label for="addr431c[2]">2. Tidak</label>
                                                </div>
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr431c[3]" name="r431c" value="8">
                                                    <label for="addr431c[3]">8. Tidak Tahu</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 431 d -->
                                    <div class="form-group bordered-form p-2 mb-3 row">
                                        <label class="form-label col-md-3 col-form-label">431. d. Dalam satu tahun terakhir, apakah (Nama) ikut serta dalam Program Pembiayaan Ultra Mikro (UMi)?</label>
                                        <div class="col d-flex align-items-center">
                                            <div id="addr431d" role="radiogroup" aria-required="true">
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr431d[1]" name="r431d" value="1">
                                                    <label for="addr431d[1]">1. Ya</label>
                                                </div>
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr431d[2]" name="r431d" value="2">
                                                    <label for="addr431d[2]">2. Tidak</label>
                                                </div>
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr431d[3]" name="r431d" value="8">
                                                    <label for="addr431d[3]">8. Tidak Tahu</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 431 e -->
                                    <div class="form-group bordered-form p-2 mb-3 row">
                                        <label><b>PERTANYAAN 431e UNTUK USIA 5-30 TAHUN</b></label>
                                        <label class="form-label col-md-3 col-form-label">431. e. Dalam satu tahun terakhir, apakah (Nama) ikut serta dalam Program Indonesia Pintar (PIP)?</label>
                                        <div class="col d-flex align-items-center">
                                            <div id="addr431e" role="radiogroup" aria-required="true">
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr431e[1]" name="r431e" value="1">
                                                    <label for="addr431e[1]">1. Ya</label>
                                                </div>
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr431e[2]" name="r431e" value="2">
                                                    <label for="addr431e[2]">2. Tidak</label>
                                                </div>
                                                <div class="col">
                                                    <input type="radio" style="margin-right: 0.5rem;" id="addr431e[3]" name="r431e" value="8">
                                                    <label for="addr431e[3]">8. Tidak Tahu</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 431 f -->
                                    <div class="form-group bordered-form p-2 mb-3 row">
                                        <label><b>PERTANYAAN 431f UNTUK USIA 15 TAHUN KE ATAS</b></label>
                                        
                                        <label class="form-label col-md-3 col-form-label">431. f. Dalam satu tahun terakhir, apakah (Nama) memiliki jaminan ketenagakerjaan? <i>(Jumlahkan Kode)</i></label>
                                            <div class="col d-flex align-items-center">
                                                <div class="col-5 d-flex flex-column">
                                                    <label>0. Tidak Memiliki</label>
                                                    <label>1. BPJS Jaminan Kecelakaan Kerja</label>
                                                    <label>2. BPJS Jaminan Kematian</label>
                                                    <label>4. BPJS Jaminan Hari Tua</label>
                                                    <label>8. BPJS Jaminan Pensiun</label>
                                                    <label>16. Pensiun/Jaminan hari tua lainnya (Taspen/Program Pensiun Swasta)</label>
                                                    <label>99. Tidak Tahu</label>
                                                </div>
                                                <div class="col-sm-1">
                                                    <input type="number" id="addr431f" class="form-control" name="r431f" min="0" max="99">
                                                </div>
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
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div> -->
        </div>
    </div>
</div>

<div class="modal fade" id="modalArt" tabindex="-1" role="dialog">
    <!-- modal-dialog-centered -->
    <div class="modal-dialog modal-fullscreen" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Entri Data Anggota Keluarga</h5>
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
                <?= Html::a('Ya', ['krt/submit', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
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
                    let dataObject = JSON.parse(data);
                    let errorList = getErrorList(dataObject.ruta);
                    $('#error-list ul').empty();
                  
                    if(errorList.length > 0){
                        for (error of errorList) {             
                            $('#error-list ul').append("<li>"+error+"</li>");
                            $("#kirim").addClass("disabled");
                            $('#float-error').show();
                        }
                    }
                    else {
                        $("#kirim").removeClass("disabled");
                        $('#float-error').hide();
                        update_clean(2);
                    }
                  },300);
               },
        error: function () {
            alert("Something went wrong");
        }       
  });
});

function update_clean(data) {
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
      url: '{$url_status}',
      data:  {'kode' : data},
      success: function(data) {
                  setTimeout(function(){
                    alert('Dokumen Clean');
                  },300);
               },
        error: function () {
            alert("Something went wrong");
        }       
  });
}

JS;

$this->registerJs($script);
?>

<script type="text/javascript">
    function openModal(url) { // Declare a function
        if ($("#modalArt").hasClass("show")) {
            var cek = confirm("Apakah anda sudah menyimpan perubahan pada anggota keluarga ini?");
            if(cek){
                $('#modalArt').modal('show')
                       .find('#modalContent')
                       .load(url);
            }
        }
        else{
            $('#modalArt').modal('show')
                       .find('#modalContent')
                       .load(url);
        }
    }
</script>