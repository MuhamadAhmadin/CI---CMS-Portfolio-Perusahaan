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
                        <a href="<?= base_url('dashboard/dokter') ?>" class="btn waves-effect waves-light "
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
                        <form class="col s12" action="<?= base_url('dashboard/dokter/'. $data->id .'/update') ?>" method="post">
                            <?= $this->include('components/validation_checker'); ?>
                            <div class="row">
                                <div class="input-field col s6 m4">
                                    <input id="kode_dokter" name="kode_dokter" value="<?= $data->kode_dokter ?>" type="text" class="validate">
                                    <label for="kode_dokter">Kode Dokter</label>
                                </div>
                                <div class="input-field col s8 m">
                                    <input id="nama" name="nama" value="<?= $data->nama ?>" type="text" class="validate">
                                    <label for="nama">Nama Lengkap Dokter</label>
                                </div>
                                <div class="input-radio-buttons col s6 m3">
                                    <label>Jenis Kelamin</label>
                                    <p>
                                    <input name="gender" value="L" type="radio" id="L" <?= $data->gender == 'L' ? 'checked' : '' ?> />
                                    <label for="L">Laki-Laki</label>
                                    </p>
                                    <p>
                                    <input name="gender" value="P" type="radio" id="P" <?= $data->gender == 'P' ? 'checked' : '' ?> />
                                    <label for="P">Perempuan</label>
                                    </p>
                                </div>
                                <div class="input-field col s9 m9">
                                    <label>Alamat</label>
                                    <textarea id="alamat" name="alamat" class="materialize-textarea"><?= $data->alamat ?></textarea>
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