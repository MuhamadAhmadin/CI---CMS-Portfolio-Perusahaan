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
                        <a href="<?= base_url('dashboard/portfolio') ?>" class="btn waves-effect waves-light "
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
                        <form class="col s12" action="<?= base_url('dashboard/portfolio/'. $data->id .'/update') ?>" method="post" enctype="multipart/form-data">
                            <?= $this->include('components/validation_checker'); ?>
                            <div class="row">
                            <div class="input-field col s6 m4">
                                    <input id="app_name" name="app_name" value="<?= $data->app_name ?>" type="text" class="validate">
                                    <label for="app_name">Nama Portfolio/Proyek</label>
                                </div>
                                <div class="input-field col s4 m4">
                                    <input id="client_name" name="client_name" value="<?= $data->client_name ?>" type="text" class="validate">
                                    <label for="client_name">Klien</label>
                                </div>
                                <div class="input-select col s4 m4">
                                    <label>Kategori Portfolio</label>
                                    <select name="category" id="category" class="validate">
                                        <option value="web" <?= $data->category == 'web' ? 'selected' : '' ?>>Website</option>
                                        <option value="app" <?= $data->category == 'app' ? 'selected' : '' ?>>App</option>
                                    </select>
                                </div>
                                <div class="input-field col s12 m12">
                                    <label>Deskripsi Portfolio/Proyek</label>
                                    <textarea id="description" name="description" class="materialize-textarea"><?= $data->description ?></textarea>
                                </div>

                                <div class="input-date col s4 m4">
                                    <label for="project_date">Tanggal Proyek</label>
                                    <input id="project_date" name="project_date" type="date" value="<?= $data->project_date ?>" class="validate">
                                </div>
                                <div class="file-field input-field col s4 m4">
                                    <input type="hidden" name="thumbnail_path" value="<?= $data->thumbnail; ?>">
                                    <img src="<?= base_url('').'/../'.'writable/uploads/' . $data->thumbnail?>" style="width: 120px;padding:4px"/>
                                    <br>
                                    <div class="btn">
                                        <span>Pilih Gambar</span>
                                        <input type="file" name="thumbnail">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text">
                                    </div>
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