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
                        <a href="<?= base_url('dashboard/kamar') ?>" class="btn waves-effect waves-light "
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
                        <form class="col s12" action="<?= base_url('dashboard/kamar/'. $data->id .'/update') ?>" method="post">
                            <?= $this->include('components/validation_checker'); ?>
                            <div class="row">
                                <div class="input-field col s6 m3">
                                    <input id="no_kamar" name="no_kamar" value="<?= $data->no_kamar ?>" type="text" class="validate">
                                    <label for="no_kamar">Nomor Kamar</label>
                                </div>
                                <div class="input-field col s6 m3">
                                    <input id="lantai" name="lantai" value="<?= $data->lantai ?>" type="text" class="validate">
                                    <label for="lantai">Lantai</label>
                                </div>
                                <div class="input-field col s6 m3">
                                    <input id="max_orang" name="max_orang" value="<?= $data->max_orang ?>" type="text" class="validate">
                                    <label for="max_orang">Max Orang</label>
                                </div>
                                <div class="input-select col s6 m3">
                                    <label>Kelas</label>
                                    <select name="kelas" id="kelas">
                                        <option value="" disabled selected>Pilih Kelas</option>
                                        <option value="VVIP" <?= $data->kelas == 'VVIP' ? 'selected' : '' ?>>VVIP</option>
                                        <option value="VIP" <?= $data->kelas == 'VIP' ? 'selected' : '' ?>>VIP</option>
                                        <option value="1" <?= $data->kelas == '1' ? 'selected' : '' ?>>1</option>
                                        <option value="2" <?= $data->kelas == '2' ? 'selected' : '' ?>>2</option>
                                        <option value="3" <?= $data->kelas == '3' ? 'selected' : '' ?>>3</option>
                                        </select>
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