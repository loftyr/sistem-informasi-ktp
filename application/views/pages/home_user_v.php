<div class="body-wrapper">
    <div class="body-header">
        <h3>Data Kartu Tanda Penduduk</h3>
        <hr>
    </div>

    <div class="article p-3">
        <div class="article grid">
            <!-- Add something -->
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="cell-2">
                            <?php if ($num_data > 0) : ?>
                                <button class="button primary" id="btnUbah" dataId="<?= isset($Ktp[0]['Id']) ? $Ktp[0]['Id'] : "" ?>"><i class="mif-pencil"></i> Ubah</button>
                            <?php else : ?>
                                <button class="button primary" id="btnTambah"><i class="mif-plus"></i> Tambah</button>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>


                <div class="card-content p-2">
                    <form action="" method="POST">
                        <input type="hidden" name="Id" id="Id" value="<?= isset($Ktp[0]['Id']) ? $Ktp[0]['Id'] : "" ?>">
                        <input type="hidden" name="method" id="method" value="">
                        <div class="row">
                            <div class="cell-sm-12 cell-lg-6">
                                <div class="row">
                                    <div class="cell-12">
                                        <p>Nama Provinsi</p>
                                        <input type="text" data-role="input" class="" id="Nama_Provinsi" data-validate="required" value="<?= isset($Ktp[0]['Nama_Provinsi']) ? $Ktp[0]['Nama_Provinsi'] : "" ?>" readonly>
                                        <span class="invalid_feedback" id="invalid-kode">
                                            Nama Provinsi Tidak Boleh Kosong !!!
                                        </span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="cell-12">
                                        <p>Nama Kabupaten/Kota</p>
                                        <input type="text" data-role="input" class="" id="Nama_Kab" data-validate="required" value="<?= isset($Ktp[0]['Nama_Kab']) ? $Ktp[0]['Nama_Kab'] : "" ?>" readonly>
                                        <span class="invalid_feedback" id="invalid-kode">
                                            Nama Kabupaten/Kota Tidak Boleh Kosong !!!
                                        </span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="cell-12">
                                        <p>Tempat Lahir</p>
                                        <input type="text" data-role="input" class="" id="Tempat_Lahir" data-validate="required" value="<?= isset($Ktp[0]['Tempat_Lahir']) ? $Ktp[0]['Tempat_Lahir'] : "" ?>" readonly>
                                        <span class="invalid_feedback" id="invalid-kode">
                                            Tempat Lahir Tidak Boleh Kosong !!!
                                        </span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="cell-12">
                                        <p>Agama</p>
                                        <input type="text" data-role="input" class="" id="Agama" value="<?= isset($Ktp[0]['Agama']) ? $Ktp[0]['Agama'] : "" ?>" data-validate="required" readonly>
                                        <span class="invalid_feedback" id="invalid-kode">
                                            Agama Tidak Boleh Kosong !!!
                                        </span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="cell-12">
                                        <p>Alamat</p>
                                        <textarea data-role="textarea" id="Alamat" rows="3" readonly><?= isset($Ktp[0]['Alamat']) ? $Ktp[0]['Alamat'] : "" ?></textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="cell-12">
                                        <p>Pekerjaan</p>
                                        <input type="text" data-role="input" class="" id="Pekerjaan" value="<?= isset($Ktp[0]['Pekerjaan']) ? $Ktp[0]['Pekerjaan'] : "" ?>" readonly>
                                    </div>
                                </div>
                            </div>

                            <div class="cell-sm-12 cell-lg-6">
                                <div class="row">
                                    <div class="cell-12">
                                        <p>NIK</p>
                                        <input type="text" data-role="input" class="" id="Nik" data-validate="required" value="<?= isset($Ktp[0]['Nik']) ? $Ktp[0]['Nik'] : "" ?>" readonly>
                                        <span class="invalid_feedback" id="invalid-kode">
                                            NIK Tidak Boleh Kosong !!!
                                        </span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="cell-12">
                                        <p>Nama Penduduk</p>
                                        <input type="text" data-role="input" class="" id="Nama" data-validate="required" value="<?= isset($Ktp[0]['Nama']) ? $Ktp[0]['Nama'] : "" ?>" readonly>
                                        <span class="invalid_feedback" id="invalid-kode">
                                            Nama Penduduk Tidak Boleh Kosong !!!
                                        </span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="cell-12">
                                        <p>Tanggal Lahir</p>
                                        <input type="text" data-role="input" class="" id="Tgl_Lahir" data-validate="required" value="<?= isset($Ktp[0]['Tgl_Lahir']) ? $Ktp[0]['Tgl_Lahir'] : "" ?>" readonly>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="cell-12">
                                        <p>Jenis Kelamin</p>
                                        <input type="text" data-role="input" class="" id="Jk" data-validate="required" value="<?= isset($Ktp[0]['Jk']) ? $Ktp[0]['Jk'] : "" ?>" readonly>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="cell-12">
                                        <p>Status Perkawinan</p>
                                        <input type="text" data-role="input" class="" id="Status_Perkawinan" data-validate="required" value="<?= isset($Ktp[0]['Status_Perkawinan']) ? $Ktp[0]['Status_Perkawinan'] : "" ?>" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </div>


</div>



<!-- Modal -->
<div class="ui modal x-large" id="modal-1">
    <i class="close icon"></i>
    <div class="header">
        Data Kartu Tanda Penduduk
    </div>
    <div class="content">
        <form id="form" method="POST" data-role="validator" action="javascript:" enctype="multipart/form-data">
            <input type="hidden" name="Id">

            <div class="row">
                <div class="cell-sm-12 cell-lg-6">
                    <div class="row">
                        <div class="cell-12">
                            <p>Nama Provinsi</p>
                            <input type="text" data-role="input" class="" name="Nama_Provinsi" data-validate="required">
                            <span class="invalid_feedback" id="invalid-kode">
                                Nama Provinsi Tidak Boleh Kosong !!!
                            </span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="cell-12">
                            <p>Nama Kabupaten/Kota</p>
                            <input type="text" data-role="input" class="" name="Nama_Kab" data-validate="required">
                            <span class="invalid_feedback" id="invalid-kode">
                                Nama Kabupaten/Kota Tidak Boleh Kosong !!!
                            </span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="cell-12">
                            <p>Tempat Lahir</p>
                            <input type="text" data-role="input" class="" name="Tempat_Lahir" data-validate="required">
                            <span class="invalid_feedback" id="invalid-kode">
                                Tempat Lahir Tidak Boleh Kosong !!!
                            </span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="cell-12">
                            <p>Agama</p>
                            <input type="text" data-role="input" class="" name="Agama" data-validate="required">
                            <span class="invalid_feedback" id="invalid-kode">
                                Agama Tidak Boleh Kosong !!!
                            </span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="cell-12">
                            <p>Alamat</p>
                            <textarea data-role="textarea" class="Alamat" name="Alamat" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="cell-12">
                            <p>Pekerjaan</p>
                            <input type="text" data-role="input" class="" name="Pekerjaan">
                        </div>
                    </div>
                </div>

                <div class="cell-sm-12 cell-lg-6">
                    <div class="row">
                        <div class="cell-12">
                            <p>NIK</p>
                            <input type="text" data-role="input" class="" name="Nik" data-validate="required">
                            <span class="invalid_feedback" id="invalid-kode">
                                NIK Tidak Boleh Kosong !!!
                            </span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="cell-12">
                            <p>Nama Penduduk</p>
                            <input type="text" data-role="input" class="" name="Nama" data-validate="required">
                            <span class="invalid_feedback" id="invalid-kode">
                                Nama Penduduk Tidak Boleh Kosong !!!
                            </span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="cell-12">
                            <p>Tanggal Lahir</p>
                            <input type="text" data-role="calendarpicker" data-input-format="%y-%m-%d" data-clear-button="true" data-max-date="<?= date('Y-m-d') ?>" name="Tgl_Lahir" data-validate="required">
                            <span class="invalid_feedback">
                                Tanggal Lahir Tidak Boleh Kosong !!!
                            </span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="cell-12">
                            <p>Jenis Kelamin</p>
                            <select name="Jk" data-role="select">
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="cell-12">
                            <p>Status Perkawinan</p>
                            <select name="Status_Perkawinan" data-role="select">
                                <option value="Belum Kawin">Belum Kawin</option>
                                <option value="Kawin">Kawin</option>
                                <option value="Cerai Hidup">Cerai Hidup</option>
                                <option value="Cerai Mati">Cerai Mati</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
    <div class="actions">
        <button class="ui button close-modal-1 drop-shadow warning" type="button"><i class="mif-cross"></i> Batal</button>
        <button type="submit" class="ui button primary drop-shadow btnSimpan" form="form"><i class="mif-floppy-disk"></i> Simpan</button>
    </div>
</div>
<!-- Akhir Modal -->