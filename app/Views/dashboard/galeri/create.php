<?= $this->extend('layouts/app'); ?>

<?= $this->section('content'); ?>
<!-- START CONTENT -->
<section id="content">

    <!--breadcrumbs start-->
    <div id="breadcrumbs-wrapper">
        <!-- Search for small screen -->
        <div class="header-search-wrapper grey hide-on-large-only">
            <i class="mdi-action-search active"></i>
            <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize">
        </div>
        <div class="container">
            <div class="row">
                <div class="col s10 m10 l10">
                    <h5 class="breadcrumbs-title"><?= $title ?></h5>
                    <ol class="breadcrumbs">
                        <li><a href="index.html">Dashboard</a></li>
                        <li class="active"><?= $title ?></li>
                    </ol>
                </div>
                <div class="col s2 m2 l2">
                    <div class="right submit-button">
                        <a href="<?= base_url('dashboard/galeri') ?>" class="btn waves-effect waves-light "
                            style="margin-top: 15px;">Kembali <i class="mdi-content-reply left"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->


    <!--start container-->
    <div class="container">
        <div class="section">
            <!--DataTables example-->
            <div id="table-datatables">
                <div class="row">

                    <div class="col s12 m12 l12">
                        <form class="col s12" action="<?= base_url('dashboard/galeri/store') ?>" method="post"
                            enctype="multipart/form-data">
                            <?= $this->include('components/validation_checker'); ?>
                            <div class="row">
                                <div class="file-field input-field">
                                    <div class="btn">
                                        <span>Pilih Gambar</span>
                                        <input type="file" name="file" required>
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text">
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-sm waves-effect waves-light " type="submit" name="action">Upload
                                <i class="mdi-content-send right"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <br>
            <div class="divider"></div>
        </div>
    </div>
    <!--end container-->

</section>
<!-- END CONTENT -->
<?= $this->endSection(); ?>