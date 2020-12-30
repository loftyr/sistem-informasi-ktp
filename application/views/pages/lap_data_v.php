<div class="body-wrapper">
    <div class="body-header">
        <h3>Laporan Data KTP</h3>
        <hr>
    </div>

    <div class="article p-3">
        <!-- Add something -->
        <div class="row">
            <div class="cell-md-3 cell-sm-4">
                <img class="w-100" src="<?= base_url('assets/app/icon-laporan.png') ?>" alt="">
            </div>
            <div class="cell-md-9 cell-sm-8">
                <form action="<?= base_url('Lap_Data_Ktp/Laporan') ?>" method="POST" data-role="validator" id="form-cetak" target="_blank">
                    <div class="row">
                        <div class="cell-6">
                            <p>NIK</p>
                            <input type="text" data-role="input" class="" id="Nik" name="Nik">
                        </div>

                        <div class="cell-6">
                            <p>Nama</p>
                            <input type="text" data-role="input" class="" id="Nama" name="Nama">
                        </div>

                        <div class="cell-6">
                            <p>Jenis Kelamin</p>
                            <select name="Jk" id="Jk" data-role="select">
                                <option value="">Semua</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                </form>

                <div class="actions">
                    <button type="submit" class="ui button btn-cetak primary" form="form-cetak">Print</button>
                </div>
            </div>
        </div>
    </div>
</div>