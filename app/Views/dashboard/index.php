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
                            <p class="card-stats-title"><i class="mdi-social-group-add"></i> Total Tim</p>
                            <h4 class="card-stats-number"><?= $jumlah_tim ?></h4>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l3">
                    <div class="card">
                        <div class="card-content pink lighten-1 white-text">
                            <p class="card-stats-title"><i class="mdi-editor-insert-drive-file"></i> Total Portolio</p>
                            <h4 class="card-stats-number"><?= $jumlah_portfolio ?></h4>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l3">
                    <div class="card">
                        <div class="card-content blue lighten-1 white-text">
                            <p class="card-stats-title"><i class="mdi-editor-insert-drive-file"></i> Total Client</p>
                            <h4 class="card-stats-number"><?= $jumlah_client ?></h4>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l3">
                    <div class="card">
                        <div class="card-content orange lighten-1 white-text">
                            <p class="card-stats-title"><i class="mdi-editor-insert-drive-file"></i> Total Pesan Masuk</p>
                            <h4 class="card-stats-number"><?= $jumlah_contact_form ?></h4>
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