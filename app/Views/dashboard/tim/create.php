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
                        <a href="<?= base_url('dashboard/tim') ?>" class="btn waves-effect waves-light "
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
                        <form class="col s12" action="<?= base_url('dashboard/tim/store') ?>" method="post" enctype="multipart/form-data">
                            <?= $this->include('components/validation_checker'); ?>
                            <div class="row">
                                <div class="file-field input-field col s12 m12">
                                    <div class="btn">
                                        <span>Pilih Foto</span>
                                        <input type="file" name="photo" required>
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text">
                                    </div>
                                </div>
                                <div class="input-field col s6 m6">
                                    <input id="nama" name="nama" type="text" class="validate">
                                    <label for="nama">Nama Lengkap</label>
                                </div>
                                <div class="input-field col s6 m6">
                                    <input id="jabatan" name="jabatan" type="text" class="validate">
                                    <label for="jabatan">Jabatan</label>
                                </div>
                                <div class="input-field col s3 m3">
                                    <input id="twitter" name="twitter" type="text" class="validate">
                                    <label for="twitter">Link Twitter</label>
                                </div>
                                <div class="input-field col s3 m3">
                                    <input id="facebook" name="facebook" type="text" class="validate">
                                    <label for="facebook">Link Facebook</label>
                                </div>
                                <div class="input-field col s3 m3">
                                    <input id="instagram" name="instagram" type="text" class="validate">
                                    <label for="instagram">Link Instagram</label>
                                </div>
                                <div class="input-field col s3 m3">
                                    <input id="linkedin" name="linkedin" type="text" class="validate">
                                    <label for="linkedin">Link LinkedIn</label>
                                </div>
                                
                            </div>
                            <button class="btn waves-effect waves-light " type="submit" name="action">Simpan
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