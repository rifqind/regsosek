<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<?php $form = ActiveForm::begin(['action' => ['krt/updateart', 'id' => $model->id], 'method' => 'POST', 'id' => 'updateart'] ); ?>
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
                                        <input type="number" id="r401" class="form-control" name="r401" min="1" max="20" value="<?= $model->r401 ?>">
                                    </div>
                        </div>
                        <div class="form-group bordered-form p-2 mb-2 row">
                            <label class="form-label col-md-3 col-form-label">402. Nama anggota keluarga</label>
                                    <div class="col-sm-5">
                                        <input type="text" id="r402" class="form-control" name="r402" style="text-transform:uppercase" value="<?= $model->r402 ?>">
                                    </div>
                        </div>
                        <div class="form-group bordered-form p-2 mb-2 row">
                            <label class="form-label col-md-3 col-form-label">403. Nomor Induk Kependudukan (NIK)</label>
                                    <div class="col-sm-5">
                                        <input type="text" id="r403" class="form-control" name="r403" value="<?= $model->r403 ?>">
                                    </div>
                        </div>
                        <div class="form-group bordered-form p-2 mb-3 row">
                            <label class="form-label col-md-3 col-form-label">404. Keterangan keberadaan anggota keluarga</label>
                            <div class="col d-flex align-items-center">
                                <div id="r404" role="radiogroup" aria-required="true">
                                    <input type="hidden" id="r404[0]" name="r404" value="<?=$model->r404 ?>">
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r404[1]" name="r404" value="1" <?php if($model->r404 == '1') echo "checked"; ?>>
                                        <label for="r404[1]">1. Tinggal bersama keluarga</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r404[2]" name="r404" value="2" <?php if($model->r404 == '2') echo "checked"; ?>>
                                        <label for="r404[2]">2. Meninggal</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r404[3]" name="r404" value="3" <?php if($model->r404 == '3') echo "checked"; ?>>
                                        <label for="r404[3]">3. Tidak tinggal bersama keluarga/pindah</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r404[4]" name="r404" value="4" <?php if($model->r404 == '4') echo "checked"; ?>>
                                        <label for="r404[4]">4. Anggota keluarga baru</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r404[5]" name="r404" value="5" <?php if($model->r404 == '5') echo "checked"; ?>>
                                        <label for="r404[5]">5. Tidak ditemukan</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Jenis Kelamin -->
                        <div class="form-group bordered-form p-2 mb-2 row">
                            <label class="form-label col-md-3 col-form-label">405. Jenis Kelamin</label>
                            <div class="col d-flex align-items-center">
                                <div id="r405" role="radiogroup" aria-required="true">
                                    <input type="hidden" id="r405[0]" name="r405" value="<?=$model->r405 ?>">
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r405[1]" name="r405" value="1" <?php if($model->r405 == '1') echo "checked"; ?>>
                                        <label for="r405[1]" style="margin-right: 1rem;">1. Laki-laki</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r405[2]" name="r405" value="2" <?php if($model->r405 == '2') echo "checked"; ?>>
                                        <label for="r405[2]" style="margin-right: 1rem;">2. Perempuan</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tanggal lahir -->
                        <div class="form-group bordered-form p-2 mb-2 row">
                            <label class="form-label col-md-3 col-form-label">406. Tanggal lahir</label>
                                    <div class="col-md-5 d-flex align-items-center">
                                        <input type="number" id="r406tgl" class="form-control" name="r406tgl" min="1" max="31" style="width:5rem; margin-right:0.5rem;" value="<?= $model->r406tgl ?>">
                                        <input type="number" id="r406bln" class="form-control" name="r406bln" min="1" max="12" style="width:5rem; margin-right:0.5rem;" value="<?= $model->r406bln ?>">
                                        <input type="number" id="r406thn" class="form-control" name="r406thn" min="1920" max="2022" style="width:7rem; margin-right:0.5rem;" value="<?= $model->r406thn ?>">
                                    </div>
                        </div>
                        <div class="form-group bordered-form p-2 mb-2 row">
                            <label class="form-label col-md-3 col-form-label">407. Umur</label>
                            <div class="col-md-5">
                                <input type="number" id="r407" class="form-control" name="r407" min="0" max="98" style="width: 4rem;" value="<?= $model->r407 ?>">
                            </div>
                        </div>
                        <!-- 408 -->
                        <div class="form-group bordered-form p-2 mb-3 row">
                            <label class="form-label col-md-3 col-form-label">408. Status Perkawinan</label>
                            <div class="col d-flex align-items-center">
                                <div id="r408" role="radiogroup" aria-required="true">
                                    <input type="hidden" id="r408[0]" name="r408" value="<?=$model->r408 ?>">
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r408[1]" name="r408" value="1" <?php if($model->r408 == '1') echo "checked"; ?>>
                                        <label for="r408[1]" style="margin-right: 1rem;">1. Belum kawin</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r408[2]" name="r408" value="2" <?php if($model->r408 == '2') echo "checked"; ?>>
                                        <label for="r408[2]" style="margin-right: 1rem;">2. Kawin/nikah</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r408[3]" name="r408" value="3" <?php if($model->r408 == '3') echo "checked"; ?>>
                                        <label for="r408[3]" style="margin-right: 1rem;">3. Cerai hidup</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r408[4]" name="r408" value="4" <?php if($model->r408 == '4') echo "checked"; ?>>
                                        <label for="r408[4]" style="margin-right: 1rem;">4. Cerai mati</label>
                                    </div>    
                                </div>
                            </div>
                        </div>
                        <div class="form-group bordered-form p-2 mb-3 row">
                            <label class="form-label col-md-3 col-form-label">409. Status hubungan dengan kepala keluarga  </label>
                            <div class="col d-flex align-items-center">
                                <div id="r409" role="radiogroup" aria-required="true">
                                    <input type="hidden" id="r409[0]" name="r409" value="<?=$model->r409 ?>">
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r409[1]" name="r409" value="1" <?php if($model->r409 == '1') echo "checked"; ?>>
                                        <label for="r409[1]">1. Kepala keluarga</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r409[2]" name="r409" value="2" <?php if($model->r409 == '2') echo "checked"; ?>>
                                        <label for="r409[2]">2. Istri/suami</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r409[3]" name="r409" value="3" <?php if($model->r409 == '3') echo "checked"; ?>>
                                        <label for="r409[3]">3. Anak</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r409[4]" name="r409" value="4" <?php if($model->r409 == '4') echo "checked"; ?>>
                                        <label for="r409[4]">4. Menantu</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r409[5]" name="r409" value="5" <?php if($model->r409 == '5') echo "checked"; ?>>
                                        <label for="r409[5]">5. Cucu</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r409[6]" name="r409" value="6" <?php if($model->r409 == '6') echo "checked"; ?>>
                                        <label for="r409[6]">6. Orangtua/mertua</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r409[7]" name="r409" value="7" <?php if($model->r409 == '7') echo "checked"; ?>>
                                        <label for="r409[7]">7. Pembantu/sopir</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r409[8]" name="r409" value="8" <?php if($model->r409 == '8') echo "checked"; ?>>
                                        <label for="r409[8]">8. Lainnya</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group bordered-form p-2 mb-2 row">
                            <label class="form-label col-md-3 col-form-label">410. <div style="font-weight: bold; font-style:italic;">Jika (Nama) merupakan wanita berusia 10-54 tahun dan 408 berkode 2,3 atau 4, </div>Apakah saat ini (Nama) sedang hamil?</label>
                            <div class="col d-flex align-items-center">
                                <div id="r410" role="radiogroup" aria-required="true">
                                    <input type="hidden" id="r410[0]" name="r410" value="<?=$model->r410 ?>">
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r410[1]" name="r410" value="1" <?php if($model->r410 == '1') echo "checked"; ?>>
                                        <label for="r410[1]" style="margin-right: 1rem;">1. Ya</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r410[2]" name="r410" value="2" <?php if($model->r410 == '2') echo "checked"; ?>>
                                        <label for="r410[2]" style="margin-right: 1rem;">2. Tidak</label>
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
                                    <input type="number" id="r411" class="form-control" name="r411" min="0" max="8" value="<?= $model->r411 ?>">
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
                                <div id="r412" role="radiogroup" aria-required="true">
                                    <input type="hidden" id="r412[0]" name="r412" value="<?=$model->r412 ?>">
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r412[1]" name="r412" value="1" <?php if($model->r412 == '1') echo "checked"; ?> >
                                        <label for="r412[1]" style="margin-right: 1rem;">1. Tidak/belum pernah sekolah</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r412[2]" name="r412" value="2" <?php if($model->r412 == '2') echo "checked"; ?>>
                                        <label for="r412[2]" style="margin-right: 1rem;">2. Masih sekolah</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r412[3]" name="r412" value="3" <?php if($model->r412 == '3') echo "checked"; ?>>
                                        <label for="r412[3]" style="margin-right: 1rem;">3. Tidak bersekolah lagi</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 413 -->
                        <div class="form-group bordered-form p-2 mb-2 align-items-center row">
                            <label class="form-label col-md-3 col-form-label">413. Jenjang dan jenis pendidikan tertinggi yang pernah/sedang diduduki</label>
                            <div class="col-md-5">
                                <input type="text" id="r413" class="form-control" name="r413" style="width: 4rem;" value="<?= $model->r413 ?>">
                            </div>
                        </div>
                        <div class="form-group bordered-form p-2 mb-2 align-items-center row">
                            <label class="form-label col-md-3 col-form-label">414. Kelas tertinggi yang pernah/sedang diduduki <br> 1, 2, 3, 4, 5, 6, 7, 8 (Tamat & Lulus)</label>
                            <div class="col-md-5">
                                <input type="number" id="r414" class="form-control" name="r414" min="1" max="8" style="width: 4rem;" value="<?= $model->r414 ?>">
                            </div>
                        </div>
                        <div class="form-group bordered-form p-2 mb-2 row">
                            <label class="form-label col-md-3 col-form-label">415. Ijazah/STTB tertinggi yang dimiliki</label>
                            <div class="col-md-5">
                                <input type="text" id="r415" class="form-control" name="r415" style="width: 4rem;" value="<?= $model->r415 ?>">
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
                                <div id="r416a" role="radiogroup" aria-required="true">
                                    <input type="hidden" id="r416[0]" name="r416" value="<?=$model->r416 ?>">
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r416a[1]" name="r416a" value="1" <?php if($model->r416a == '1') echo "checked"; ?>>
                                        <label for="r416a[1]" style="margin-right: 1rem;">1. Ya</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r416a[2]" name="r416a" value="2" <?php if($model->r416a == '2') echo "checked"; ?>>
                                        <label for="r416a[2]" style="margin-right: 1rem;">2. Tidak</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group bordered-form p-2 mb-2 align-items-center row">
                            <label class="form-label col-md-3 col-form-label">416b. Berapa jam (Nama) bekerja?</label>
                            <div class="col-md-5 d-flex align-items-center">
                                <input type="number" id="r416b" class="form-control" name="r416b" min="1" max="168" style="width: 4rem; margin-right: 1rem;" value="<?= $model->r416b ?>">
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
                                <input type="text" id="r418" class="form-control" name="r418" style="width: 4rem;" value="<?= $model->r418 ?>">
                            </div>
                        </div>
                        <div class="form-group bordered-form p-2 mb-3 row">
                            <label class="form-label col-md-3 col-form-label">419. Apakah (Nama) memiliki NPWP?</label>
                            <div class="col d-flex align-items-center">
                                <div id="r419" role="radiogroup" aria-required="true">
                                    <input type="hidden" id="r419[0]" name="r419" value="<?=$model->r419 ?>">
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r419[1]" name="r419" value="1" <?php if($model->r419 == '1') echo "checked"; ?>>
                                        <label for="r419[1]">1. Ada, dapat menunjukkan</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r419[2]" name="r419" value="2" <?php if($model->r419 == '2') echo "checked"; ?>>
                                        <label for="r419[2]">2. Ada, tidak dapat menunjukkan</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r419[3]" name="r419" value="3" <?php if($model->r419 == '3') echo "checked"; ?>>
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
                                    <input type="hidden" id="r420[0]" name="r420" value="<?=$model->r420 ?>">
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r420[1]" name="r420" value="1" <?php if($model->r420 == '1') echo "checked"; ?>>
                                        <label for="r420[1]" style="margin-right: 1rem;">1. Ya</label>
                                   </div>
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r420[2]" name="r420" value="2" <?php if($model->r420 == '2') echo "checked"; ?>>
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
                                <input type="number" id="r422" class="form-control" name="r422" min="0" max="999" value="<?= $model->r422 ?>">
                            </div>
                        </div>
                        <div class="form-group bordered-form p-2 mb-2 align-items-center row align-items-center">
                            <label class="form-label col-md-3 col-form-label">423. Jumlah pekerja yang tidak dibayar</label>
                            <div class="col-3">
                                <input type="number" id="r423" class="form-control" name="r423" min="0" max="99" value="<?= $model->r423 ?>">
                            </div>
                        </div>
                        <div class="form-group bordered-form p-2 mb-2 align-items-center row">
                            <label class="form-label col-md-3 col-form-label">424. Kepemilikan perizinan usaha</label>
                            <div class="col-3">
                                <input type="text" id="r424" class="form-control" name="r424" value="<?= $model->r424 ?>">
                            </div>
                        </div>
                        <div class="form-group bordered-form p-2 mb-3 row">
                            <label class="form-label col-md-3 col-form-label">425. Omzet usaha perbulan (Rupiah)</label>
                            <div class="col d-flex align-items-center">
                                <div id="r425" role="radiogroup" aria-required="true">
                                    <input type="hidden" id="r425[0]" name="r425" value="<?=$model->r425 ?>">
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r425[1]" name="r425" value="1" <?php if($model->r425 == '1') echo "checked"; ?>>
                                        <label for="r425[1]">1.) < 5 Juta (ultra mikro)</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r425[2]" name="r425" value="2" <?php if($model->r425 == '2') echo "checked"; ?>>
                                        <label for="r425[2]">2.) 5 ─ < 15 Juta (ultra mikro)</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r425[3]" name="r425" value="3" <?php if($model->r425 == '3') echo "checked"; ?>>
                                        <label for="r425[3]">3.) 15 ─ < 25 Juta (ultra mikro)</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r425[4]" name="r425" value="4" <?php if($model->r425 == '4') echo "checked"; ?>>
                                        <label for="r425[4]">4.) 25 ─ < 167 Juta (mikro)</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r425[5]" name="r425" value="5" <?php if($model->r425 == '5') echo "checked"; ?>>
                                        <label for="r425[5]">5.) 167 ─ < 1.250 Juta (kecil)</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r425[6]" name="r425" value="6" <?php if($model->r425 == '6') echo "checked"; ?>>
                                        <label for="r425[6]">6.) 1.250 ─ < 4.167 Juta (menengah)</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r425[7]" name="r425" value="7" <?php if($model->r425 == '7') echo "checked"; ?>>
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
                                                <input type="number" id="r426" class="form-control" name="r426" min="0" max="63" value="<?= $model->r426 ?>">
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
                                <div id="r427" role="radiogroup" aria-required="true">
                                    <input type="hidden" id="r427[0]" name="r427" value="<?=$model->r427 ?>">
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r427[1]" name="r427" value="1" <?php if($model->r427 == '1') echo "checked"; ?>>
                                        <label for="r427[1]">1. Kurang gizi <i>(Wasting)</i></label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r427[2]" name="r427" value="2" <?php if($model->r427 == '2') echo "checked"; ?>>
                                        <label for="r427[2]">2. Kerdil <i>(Stunting)</i></label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r427[3]" name="r427" value="3" <?php if($model->r427 == '3') echo "checked"; ?>>
                                        <label for="r427[3]">3. Tidak ada catatan</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r427[4]" name="r427" value="8" <?php if($model->r427 == '8') echo "checked"; ?>>
                                        <label for="r427[4]">8. Tidak tahu</label>
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
                                <div id="r428a" role="radiogroup" aria-required="true">
                                    <input type="hidden" id="r428a[0]" name="r428a" value="<?=$model->r428a ?>">
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r428a[1]" name="r428a" value="1" <?php if($model->r428a == '1') echo "checked"; ?>>
                                        <label for="r428a[1]">1. Ya, sama sekali tidak bisa</label>
                                    </div>    
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r428a[2]" name="r428a" value="2" <?php if($model->r428a == '2') echo "checked"; ?>>
                                        <label for="r428a[2]">2. Ya, banyak kesulitan</label>
                                        dan membutuhkan bantuan
                                    </div>    
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r428a[3]" name="r428a" value="3" <?php if($model->r428a == '3') echo "checked"; ?>>
                                        <label for="r428a[3]">3. Ya, sedikit kesulitan,</label>
                                        tapi tidak membutuhkan bantuan
                                    </div>    
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r428a[4]" name="r428a" value="4" <?php if($model->r428a == '4') echo "checked"; ?>>
                                        <label for="r428a[4]">4. Tidak mengalami kesulitan</label>
                                    </div>    
                                </div>
                            </div>
                        </div>

                        <!-- 428 b -->
                        <div class="form-group bordered-form p-2 mb-3 row">
                            <label class="form-label col-md-3 col-form-label">428. b. Apakah (Nama) mengalami kesulitan/gangguan pendengaran meskipun menggunakan alat bantu dengar?</label>
                            <div class="col d-flex align-items-center">
                                <div id="r428b" role="radiogroup" aria-required="true">
                                    <input type="hidden" id="r428b[0]" name="r428b" value="<?=$model->r428b ?>">
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r428b[1]" name="r428b" value="1" <?php if($model->r428b == '1') echo "checked"; ?>>
                                        <label for="r428b[1]">1. Ya, sama sekali tidak bisa</label>
                                    </div>    
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r428b[2]" name="r428b" value="2" <?php if($model->r428b == '2') echo "checked"; ?>>
                                        <label for="r428b[2]">2. Ya, banyak kesulitan</label>
                                        dan membutuhkan bantuan
                                    </div>    
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r428b[3]" name="r428b" value="3" <?php if($model->r428b == '3') echo "checked"; ?>>
                                        <label for="r428b[3]">3. Ya, sedikit kesulitan,</label>
                                        tapi tidak membutuhkan bantuan
                                    </div>    
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r428b[4]" name="r428b" value="4" <?php if($model->r428b == '4') echo "checked"; ?>>
                                        <label for="r428b[4]">4. Tidak mengalami kesulitan</label>
                                    </div>    
                                </div>
                            </div>
                        </div>

                        <!-- 428 c -->
                        <div class="form-group bordered-form p-2 mb-3 row">
                            <label class="form-label col-md-3 col-form-label">428. c. Apakah (Nama) mengalami kesulitan/gangguan berjalan atau naik tangga?</label>
                            <div class="col d-flex align-items-center">
                                <div id="r428c" role="radiogroup" aria-required="true">
                                    <input type="hidden" id="r428c[0]" name="r428c" value="<?=$model->r428c ?>">
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r428c[1]" name="r428c" value="1" <?php if($model->r428c == '1') echo "checked"; ?>>
                                        <label for="r428c[1]">1. Ya, sama sekali tidak bisa</label>
                                    </div>    
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r428c[2]" name="r428c" value="2" <?php if($model->r428c == '2') echo "checked"; ?>>
                                        <label for="r428c[2]">2. Ya, banyak kesulitan</label>
                                        dan membutuhkan bantuan
                                    </div>    
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r428c[3]" name="r428c" value="3" <?php if($model->r428c == '3') echo "checked"; ?>>
                                        <label for="r428c[3]">3. Ya, sedikit kesulitan,</label>
                                        tapi tidak membutuhkan bantuan
                                    </div>    
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r428c[4]" name="r428c" value="4" <?php if($model->r428c == '4') echo "checked"; ?>>
                                        <label for="r428c[4]">4. Tidak mengalami kesulitan</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 428 d -->
                        <div class="form-group bordered-form p-2 mb-3 row">
                            <label class="form-label col-md-3 col-form-label">428. d. Apakah (Nama) mengalami kesulitan/gangguan menggerakkan/menggunakan tangan/jari?</label>
                            <div class="col d-flex align-items-center">
                                <div id="r428d" role="radiogroup" aria-required="true">
                                    <input type="hidden" id="r428d[0]" name="r428d" value="<?=$model->r428d ?>">
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r428d[1]" name="r428d" value="1" <?php if($model->r428d == '1') echo "checked"; ?>>
                                        <label for="r428d[1]">1. Ya, sama sekali tidak bisa</label>
                                    </div>    
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r428d[2]" name="r428d" value="2" <?php if($model->r428d == '2') echo "checked"; ?>>
                                        <label for="r428d[2]">2. Ya, banyak kesulitan</label>
                                        dan membutuhkan bantuan
                                    </div>    
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r428d[3]" name="r428d" value="3" <?php if($model->r428d == '3') echo "checked"; ?>>
                                        <label for="r428d[3]">3. Ya, sedikit kesulitan,</label>
                                        tapi tidak membutuhkan bantuan
                                    </div>    
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r428d[4]" name="r428d" value="4" <?php if($model->r428d == '4') echo "checked"; ?>>
                                        <label for="r428d[4]">4. Tidak mengalami kesulitan</label>
                                    </div>    
                                </div>
                            </div>
                        </div>

                        <!-- 428 e -->
                        <div class="form-group bordered-form p-2 mb-3 row">
                            <label class="form-label col-md-3 col-form-label">428. e. Dibandingkan dengan penduduk yang sebaya, apakah (Nama) mengalami kesulitan/gangguan dalam belajar atau kemampuan intelektual?</label>
                            <div class="col d-flex align-items-center">
                                <div id="r428e" role="radiogroup" aria-required="true">
                                    <input type="hidden" id="r428e[0]" name="r428e" value="<?=$model->r428e ?>">
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r428e[1]" name="r428e" value="1" <?php if($model->r428e == '1') echo "checked"; ?>>
                                        <label for="r428e[1]">1. Ya, sama sekali tidak bisa</label>
                                    </div>    
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r428e[2]" name="r428e" value="2" <?php if($model->r428e == '2') echo "checked"; ?>>
                                        <label for="r428e[2]">2. Ya, banyak kesulitan</label>
                                        dan membutuhkan bantuan
                                    </div>    
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r428e[3]" name="r428e" value="3" <?php if($model->r428e == '3') echo "checked"; ?>>
                                        <label for="r428e[3]">3. Ya, sedikit kesulitan,</label>
                                        tapi tidak membutuhkan bantuan
                                    </div>    
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r428e[4]" name="r428e" value="4" <?php if($model->r428e == '4') echo "checked"; ?>>
                                        <label for="r428e[4]">4. Tidak mengalami kesulitan</label>
                                    </div>    
                                </div>
                            </div>
                        </div>

                        <!-- 428 f -->
                        <div class="form-group bordered-form p-2 mb-3 row">
                            <label class="form-label col-md-3 col-form-label">428. f. Dibandingkan dengan penduduk yang sebaya, apakah (Nama) mengalami kesulitan/gangguan mengendalikan perilaku?</label>
                            <div class="col d-flex align-items-center">
                                <div id="r428f" role="radiogroup" aria-required="true">
                                    <input type="hidden" id="r428f[0]" name="r428f" value="<?=$model->r428f ?>">
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r428f[1]" name="r428f" value="1" <?php if($model->r428f == '1') echo "checked"; ?>>
                                        <label for="r428f[1]">1. Ya, sama sekali tidak bisa</label>
                                    </div>    
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r428f[2]" name="r428f" value="2" <?php if($model->r428f == '2') echo "checked"; ?>>
                                        <label for="r428f[2]">2. Ya, banyak kesulitan</label>
                                        dan membutuhkan bantuan
                                    </div>    
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r428f[3]" name="r428f" value="3" <?php if($model->r428f == '3') echo "checked"; ?>>
                                        <label for="r428f[3]">3. Ya, sedikit kesulitan,</label>
                                        tapi tidak membutuhkan bantuan
                                    </div>    
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r428f[4]" name="r428f" value="4" <?php if($model->r428f == '4') echo "checked"; ?>>
                                        <label for="r428f[4]">4. Tidak mengalami kesulitan</label>
                                    </div>    
                                </div>
                            </div>
                        </div>

                        <!-- 428 g -->
                        <div class="form-group bordered-form p-2 mb-3 row">
                            <label><b>PERTANYAAN  428g – 428j UNTUK USIA 5 TAHUN KE ATAS</b></label>
                            <label class="form-label col-md-3 col-form-label">428. g. Apakah (Nama) mengalami kesulitan/gangguan berbicara/berkomunikasi?</label>
                            <div class="col d-flex align-items-center">
                                <div id="r428g" role="radiogroup" aria-required="true">
                                    <input type="hidden" id="r428g[0]" name="r428g" value="<?=$model->r428g ?>">
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r428g[1]" name="r428g" value="1" <?php if($model->r428g == '1') echo "checked"; ?>>
                                        <label for="r428g[1]">1. Ya, sama sekali tidak bisa</label>
                                    </div>    
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r428g[2]" name="r428g" value="2" <?php if($model->r428g == '2') echo "checked"; ?>>
                                        <label for="r428g[2]">2. Ya, banyak kesulitan</label>
                                        dan membutuhkan bantuan
                                    </div>    
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r428g[3]" name="r428g" value="3" <?php if($model->r428g == '3') echo "checked"; ?>>
                                        <label for="r428g[3]">3. Ya, sedikit kesulitan,</label>
                                        tapi tidak membutuhkan bantuan
                                    </div>    
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r428g[4]" name="r428g" value="4" <?php if($model->r428g == '4') echo "checked"; ?>>
                                        <label for="r428g[4]">4. Tidak mengalami kesulitan</label>
                                    </div>    
                                </div>
                            </div>
                        </div>

                        <!-- r428 h -->
                        <div class="form-group bordered-form p-2 mb-3 row">
                            <label class="form-label col-md-3 col-form-label">428. h. Apakah (Nama) mengalami kesulitan/gangguan untuk mengurus diri sendiri? (mandi, makan, berpakaian, BAK, BAB)</label>
                            <div class="col d-flex align-items-center">
                                <div id="r428h" role="radiogroup" aria-required="true">
                                    <input type="hidden" id="r428h[0]" name="r428h" value="<?=$model->r428h ?>">
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r428h[1]" name="r428h" value="1" <?php if($model->r428h == '1') echo "checked"; ?>>
                                        <label for="r428h[1]">1. Ya, sama sekali tidak bisa</label>
                                    </div>    
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r428h[2]" name="r428h" value="2" <?php if($model->r428h == '2') echo "checked"; ?>>
                                        <label for="r428h[2]">2. Ya, banyak kesulitan</label>
                                        dan membutuhkan bantuan
                                    </div>    
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r428h[3]" name="r428h" value="3" <?php if($model->r428h == '3') echo "checked"; ?>>
                                        <label for="r428h[3]">3. Ya, sedikit kesulitan,</label>
                                        tapi tidak membutuhkan bantuan
                                    </div>    
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r428h[4]" name="r428h" value="4" <?php if($model->r428h == '4') echo "checked"; ?>>
                                        <label for="r428h[4]">4. Tidak mengalami kesulitan</label>
                                    </div>    
                                </div>
                            </div>
                        </div>

                        <!-- 428 i -->
                        <div class="form-group bordered-form p-2 mb-3 row">
                            <label class="form-label col-md-3 col-form-label">428. i. Apakah (Nama) mengalami kesulitan/gangguan mengingat/berkonsentrasi?</label>
                            <div class="col d-flex align-items-center">
                                <div id="r428i" role="radiogroup" aria-required="true">
                                    <input type="hidden" id="r428i[0]" name="r428i" value="<?=$model->r428i ?>">
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r428i[1]" name="r428i" value="1" <?php if($model->r428i == '1') echo "checked"; ?>>
                                        <label for="r428i[1]">1. Ya, sama sekali tidak bisa</label>
                                    </div>    
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r428i[2]" name="r428i" value="2" <?php if($model->r428i == '2') echo "checked"; ?>>
                                        <label for="r428i[2]">2. Ya, banyak kesulitan</label>
                                        dan membutuhkan bantuan
                                    </div>    
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r428i[3]" name="r428i" value="3" <?php if($model->r428i == '3') echo "checked"; ?>>
                                        <label for="r428i[3]">3. Ya, sedikit kesulitan,</label>
                                        tapi tidak membutuhkan bantuan
                                    </div>    
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r428i[4]" name="r428i" value="4" <?php if($model->r428i == '4') echo "checked"; ?>>
                                        <label for="r428i[4]">4. Tidak mengalami kesulitan</label>
                                    </div>    
                                </div>
                            </div>
                        </div>

                        <!-- 428 j -->
                        <div class="form-group bordered-form p-2 mb-3 row">
                            <label class="form-label col-md-3 col-form-label">428. j. Seberapa sering (Nama) mengalami gangguan kesedihan depresi?</label>
                            <div class="col d-flex align-items-center">
                                <div id="r428j" role="radiogroup" aria-required="true">
                                    <input type="hidden" id="r428j[0]" name="r428j" value="<?=$model->r428j ?>">
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r428j[1]" name="r428j" value="1" <?php if($model->r428j == '1') echo "checked"; ?>>
                                        <label for="r428j[1]">1. Sangat sering</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r428j[2]" name="r428j" value="2" <?php if($model->r428j == '2') echo "checked"; ?>>
                                        <label for="r428j[2]">2. Sering</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r428j[3]" name="r428j" value="3" <?php if($model->r428j == '3') echo "checked"; ?>>
                                        <label for="r428j[3]">3. Jarang</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r428j[4]" name="r428j" value="4" <?php if($model->r428j == '4') echo "checked"; ?>>
                                        <label for="r428j[4]">4. Tidak pernah</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 429 -->
                        <div class="form-group bordered-form p-2 mb-3 row">
                            <label class="form-label col-md-3 col-form-label">429. <b><i>Jika (Nama) berusia 60 tahun ke atas atau 428a-j ada yang berkode 1 atau 2</i></b> <br>Apakah (Nama) memiliki caregiver/pemberi rawat/pengasuh/wali?</label>
                            <div class="col d-flex align-items-center">
                                <div id="r429" role="radiogroup" aria-required="true">
                                    <input type="hidden" id="r429[0]" name="r429" value="<?=$model->r429 ?>">
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r429[1]" name="r429" value="1" <?php if($model->r429 == '1') echo "checked"; ?>>
                                        <label for="r429[1]" style="margin-right: 1rem;">1. Ya, Anggota Keluarga</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r429[2]" name="r429" value="2" <?php if($model->r429 == '2') echo "checked"; ?>>
                                        <label for="r429[2]" style="margin-right: 1rem;">2. Ya, Bukan Anggota Keluarga</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r429[3]" name="r429" value="3" <?php if($model->r429 == '3') echo "checked"; ?>>
                                        <label for="r429[3]" style="margin-right: 1rem;">3. Tinggal Sendiri</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 430 -->
                        <div class="form-group bordered-form p-2 mb-2 align-items-center row">
                            <label class="form-label col-md-3 col-form-label">430. Apakah (Nama) memiliki keluhan kesehatan kronis/menahun?</label>
                            <div class="col-sm-1">
                                <input type="text" id="r430" class="form-control" name="r430" value="<?= $model->r430 ?>">
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
                                    <input type="number" id="r431a" class="form-control" name="r431a" min="0" max="99" value="<?= $model->r431a ?>">
                                </div>
                            </div>
                        </div>
                        
                        <!-- 431 b -->
                        <div class="form-group bordered-form p-2 mb-3 row">
                            <label><b>PERTANYAAN 431b - 431d UNTUK USIA 5 TAHUN KE ATAS</b></label>
                            <label class="form-label col-md-3 col-form-label">431. b. Dalam satu tahun terakhir, apakah (Nama) ikut serta dalam Program Pra-Kerja?</label>
                            <div class="col d-flex align-items-center">
                                <div id="r431b" role="radiogroup" aria-required="true">
                                    <input type="hidden" id="r431b[0]" name="r431b" value="<?=$model->r431b ?>">
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r431b[1]" name="r431b" value="1" <?php if($model->r431b == '1') echo "checked"; ?>>
                                        <label for="r431b[1]">1. Ya</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r431b[2]" name="r431b" value="2" <?php if($model->r431b == '2') echo "checked"; ?>>
                                        <label for="r431b[2]">2. Tidak</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r431b[3]" name="r431b" value="8" <?php if($model->r431b == '8') echo "checked"; ?>>
                                        <label for="r431b[3]">8. Tidak Tahu</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 431 c -->
                        <div class="form-group bordered-form p-2 mb-3 row">
                            <label class="form-label col-md-3 col-form-label">431. c. Dalam satu tahun terakhir, apakah (Nama) ikut serta dalam Program Kredit Usaha Rakyat (KUR)?</label>
                            <div class="col d-flex align-items-center">
                                <div id="r431c" role="radiogroup" aria-required="true">
                                    <input type="hidden" id="r431c[0]" name="r431c" value="<?=$model->r431c ?>">
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r431c[1]" name="r431c" value="1" <?php if($model->r431c == '1') echo "checked"; ?>>
                                        <label for="r431c[1]">1. Ya</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r431c[2]" name="r431c" value="2" <?php if($model->r431c == '2') echo "checked"; ?>>
                                        <label for="r431c[2]">2. Tidak</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r431c[3]" name="r431c" value="8" <?php if($model->r431c == '8') echo "checked"; ?>>
                                        <label for="r431c[3]">8. Tidak Tahu</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 431 d -->
                        <div class="form-group bordered-form p-2 mb-3 row">
                            <label class="form-label col-md-3 col-form-label">431. d. Dalam satu tahun terakhir, apakah (Nama) ikut serta dalam Program Pembiayaan Ultra Mikro (UMi)?</label>
                            <div class="col d-flex align-items-center">
                                <div id="r431d" role="radiogroup" aria-required="true">
                                    <input type="hidden" id="r431d[0]" name="r431d" value="<?=$model->r431d ?>">
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r431d[1]" name="r431d" value="1" <?php if($model->r431d == '1') echo "checked"; ?>>
                                        <label for="r431d[1]">1. Ya</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r431d[2]" name="r431d" value="2" <?php if($model->r431d == '2') echo "checked"; ?>>
                                        <label for="r431d[2]">2. Tidak</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r431d[3]" name="r431d" value="8" <?php if($model->r431d == '8') echo "checked"; ?>>
                                        <label for="r431d[3]">8. Tidak Tahu</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 431 e -->
                        <div class="form-group bordered-form p-2 mb-3 row">
                            <label><b>PERTANYAAN 431e UNTUK USIA 5-30 TAHUN</b></label>
                            <label class="form-label col-md-3 col-form-label">431. e. Dalam satu tahun terakhir, apakah (Nama) ikut serta dalam Program Indonesia Pintar (PIP)?</label>
                            <div class="col d-flex align-items-center">
                                <div id="r431e" role="radiogroup" aria-required="true">
                                    <input type="hidden" id="r431e[0]" name="r431e" value="<?=$model->r431e ?>">
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r431e[1]" name="r431e" value="1" <?php if($model->r431e == '1') echo "checked"; ?>>
                                        <label for="r431e[1]">1. Ya</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r431e[2]" name="r431e" value="2" <?php if($model->r431e == '2') echo "checked"; ?>>
                                        <label for="r431e[2]">2. Tidak</label>
                                    </div>
                                    <div class="col">
                                        <input type="radio" style="margin-right: 0.5rem;" id="r431e[3]" name="r431e" value="8" <?php if($model->r431e == '8') echo "checked"; ?>>
                                        <label for="r431e[3]">8. Tidak Tahu</label>
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
                                        <input type="number" id="r431f" class="form-control" name="r431f" min="0" max="99" value="<?= $model->r431f ?>">
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