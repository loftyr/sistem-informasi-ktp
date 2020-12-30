<div class="body-wrapper">
    <div class="body-header">
        <h3>DASHBOARD</h3>
        <hr>
    </div>

    <div class="article">
        <!-- Add something -->
        <div class="row mb-4">
            <div class="cell-12 text-center">
                <h5 class="m-0">Statistik Kartu Tanda Penduduk</h5>
            </div>
            <div class="cell-lg-4 cell-sm-6">
                <div class="icon-box border bd-default">
                    <div class="icon bg-orange fg-white">
                        <i class="fas fa-male"></i>
                        <i class="fas fa-female"></i>
                    </div>
                    <div class="content p-4">
                        <div class="text-upper">Jumlah KTP Terdaftar</div>
                        <div class="text-upper text-bold text-lead" id="counter-1" data-role="counter" data-value="<?= $TotalKtp ?>"><?= $TotalKtp ?></div>
                    </div>
                </div>
            </div>

            <div class="cell-lg-4 cell-sm-6">
                <div class="icon-box border bd-default">
                    <div class="icon bg-blue fg-white">
                        <i class="fas fa-male"></i>
                    </div>
                    <div class="content p-4">
                        <div class="text-upper">Jumlah Laki-Laki</div>
                        <div class="text-upper text-bold text-lead" id="counter-2" data-role="counter" data-step="5" data-value="<?= $TotalPria ?>"><?= $TotalPria ?></div>
                    </div>
                </div>
            </div>

            <div class="cell-lg-4 cell-sm-6">
                <div class="icon-box border bd-default">
                    <div class="icon bg-pink fg-white">
                        <i class="fas fa-female"></i>
                    </div>
                    <div class="content p-4">
                        <div class="text-upper">Jumlah Perempuan</div>
                        <div class="text-upper text-bold text-lead" id="counter-2" data-role="counter" data-step="5" data-value="<?= $TotalPerempuan ?>"><?= $TotalPerempuan ?></div>
                    </div>
                </div>
            </div>
        </div>



    </div>
</div>