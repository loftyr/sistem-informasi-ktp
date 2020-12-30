<div class="body-wrapper">
    <div class="body-header">
        <h3>Data Kartu Tanda Penduduk</h3>
        <hr>
    </div>

    <div class="article">
        <!-- Add something -->
        <!-- <button class="button primary btnTambah"><i class="mif-plus"></i> Tambah KTP</button> -->

        <table class="table table-border cell-border row-hover side-server p-0" id="table-1">
            <thead>
                <tr class="tabel">
                    <th style="min-width: 220px;">Provinsi</th>
                    <th style="min-width: 220px;">Kabupaten/Kota</th>
                    <th style="min-width: 180px;">NIK</th>
                    <th style="min-width: 220px;">Nama</th>
                    <th style="min-width: 150px;">Jenis Kelamin</th>
                    <th style="min-width: 150px;">Tempat Lahir</th>
                    <th style="min-width: 150px;">Tanggal Lahir</th>
                    <th style="min-width: 220px;">Alamat</th>
                    <th style="min-width: 150px;">Agama</th>
                    <th>Status Perkawinan</th>
                    <th style="min-width: 200px;">Pekerjaan</th>
                    <th style="min-width: 200px;">Aksi</th>
                </tr>
            </thead>

            <tbody id="body-table-1">
                <!-- add some item table -->
            </tbody>
        </table>
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
            <input type="hidden" id="Id" name="Id">

            <div class="row">
                <div class="cell-sm-12 cell-lg-6">
                    <div class="row">
                        <div class="cell-12">
                            <p>Nama Provinsi</p>
                            <input type="text" data-role="input" class="" id="Nama_Provinsi" name="Nama_Provinsi" data-validate="required">
                            <span class="invalid_feedback" id="invalid-kode">
                                Nama Provinsi Tidak Boleh Kosong !!!
                            </span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="cell-12">
                            <p>Nama Kabupaten/Kota</p>
                            <input type="text" data-role="input" class="" id="Nama_Kab" name="Nama_Kab" data-validate="required">
                            <span class="invalid_feedback" id="invalid-kode">
                                Nama Kabupaten/Kota Tidak Boleh Kosong !!!
                            </span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="cell-12">
                            <p>Tempat Lahir</p>
                            <input type="text" data-role="input" class="" id="Tempat_Lahir" name="Tempat_Lahir" data-validate="required">
                            <span class="invalid_feedback" id="invalid-kode">
                                Tempat Lahir Tidak Boleh Kosong !!!
                            </span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="cell-12">
                            <p>Agama</p>
                            <input type="text" data-role="input" class="" id="Agama" name="Agama" data-validate="required">
                            <span class="invalid_feedback" id="invalid-kode">
                                Agama Tidak Boleh Kosong !!!
                            </span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="cell-12">
                            <p>Alamat</p>
                            <textarea data-role="textarea" name="Alamat" id="Alamat" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="cell-12">
                            <p>Pekerjaan</p>
                            <input type="text" data-role="input" class="" id="Pekerjaan" name="Pekerjaan">
                        </div>
                    </div>
                </div>

                <div class="cell-sm-12 cell-lg-6">
                    <div class="row">
                        <div class="cell-12">
                            <p>NIK</p>
                            <input type="text" data-role="input" class="" id="Nik" name="Nik" data-validate="required">
                            <span class="invalid_feedback" id="invalid-kode">
                                NIK Tidak Boleh Kosong !!!
                            </span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="cell-12">
                            <p>Nama Penduduk</p>
                            <input type="text" data-role="input" class="" id="Nama" name="Nama" data-validate="required">
                            <span class="invalid_feedback" id="invalid-kode">
                                Nama Penduduk Tidak Boleh Kosong !!!
                            </span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="cell-12">
                            <p>Tanggal Lahir</p>
                            <input type="text" data-role="calendarpicker" data-input-format="%y-%m-%d" data-clear-button="true" data-max-date="<?= date('Y-m-d') ?>" id="Tgl_Lahir" name="Tgl_Lahir" data-validate="required">
                            <span class="invalid_feedback">
                                Tanggal Lahir Tidak Boleh Kosong !!!
                            </span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="cell-12">
                            <p>Jenis Kelamin</p>
                            <select name="Jk" id="Jk" data-role="select">
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="cell-12">
                            <p>Status Perkawinan</p>
                            <select name="Status_Perkawinan" id="Status_Perkawinan" data-role="select">
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