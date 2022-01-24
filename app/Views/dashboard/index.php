<?= $this->extend('layouts/app'); ?>

<?= $this->section('content'); ?>
<!-- START CONTENT -->
<section id="content">

    <!--start container-->
    <div class="container">
        <!--card stats start-->
        <div id="card-stats">
            <div class="row">
                <br>
                <div class="col s12 m6 l3">
                    <h4>Dashboard</h4>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m6 l3">
                    <div class="card">
                        <div class="card-content  green white-text">
                            <p class="card-stats-title"><i class="mdi-social-group-add"></i> Total Pasien</p>
                            <h4 class="card-stats-number"><?= $jumlah_pasien ?></h4>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l3">
                    <div class="card">
                        <div class="card-content pink lighten-1 white-text">
                            <p class="card-stats-title"><i class="mdi-editor-insert-drive-file"></i> Jumlah Dokter</p>
                            <h4 class="card-stats-number"><?= $jumlah_dokter ?></h4>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l3">
                    <div class="card">
                        <div class="card-content blue-grey white-text">
                            <p class="card-stats-title"><i class="mdi-action-trending-up"></i> Jumlah Kamar</p>
                            <h4 class="card-stats-number"><?= $jumlah_kamar ?></h4>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l3">
                    <div class="card">
                        <div class="card-content purple white-text">
                            <p class="card-stats-title"><i class="mdi-editor-attach-money"></i>Total Pendapatan</p>
                            <h4 class="card-stats-number">Rp <?= number_format($total_pendapatan, 0, ",", "."); ?></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--card stats end-->
        <!--end container-->
</section>
<!-- END CONTENT -->
<?= $this->endSection(); ?>