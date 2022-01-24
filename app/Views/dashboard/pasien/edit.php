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
                        <a href="<?= base_url('dashboard/pasien') ?>" class="btn waves-effect waves-light "
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
                        <form class="col s12" action="<?= base_url('dashboard/pasien/'. $data->id .'/update') ?>" method="post">
                            <?= $this->include('components/validation_checker'); ?>
                            <div class="row">
                                <div class="input-field col s6 m4">
                                    <input id="no_pasien" name="no_pasien" value="<?= $data->no_pasien ?>" type="text" class="validate">
                                    <label for="no_pasien">No Pasien</label>
                                </div>
                                <div class="input-field col s4 m4">
                                    <input id="nik" name="nik" value="<?= $data->nik ?>" type="text" class="validate">
                                    <label for="nik">NIK</label>
                                </div>
                                <div class="input-field col s4 m4">
                                    <input id="nama" name="nama" value="<?= $data->nama ?>" type="text" class="validate">
                                    <label for="nama">Nama Lengkap pasien</label>
                                </div>
                                <div class="input-radio-buttons col s6 m3">
                                    <label>Jenis Kelamin</label>
                                    <p>
                                    <input name="gender" value="L" type="radio" id="L" checked />
                                    <label for="L">Laki-Laki</label>
                                    </p>
                                    <p>
                                    <input name="gender" value="P" type="radio" id="P" />
                                    <label for="P">Perempuan</label>
                                    </p>
                                </div>
                                <div class="input-field col s9 m9">
                                    <label>Alamat</label>
                                    <textarea id="alamat" name="alamat" class="materialize-textarea"><?= $data->alamat ?></textarea>
                                </div>

                                <div class="input-field col s6 m4">
                                    <input id="telepon" name="telepon" value="<?= $data->telepon ?>" type="number" class="validate">
                                    <label for="telepon">Nomor Telepon</label>
                                </div>
                                <div class="input-date col s4 m4">
                                    <label for="tanggal_datang">Tanggal Datang/Berobat</label>
                                    <input id="tanggal_datang" name="tanggal_datang" type="date" value="<?= $data->tanggal_datang ?>" class="validate">
                                </div>
                                <div class="input-select col s4 m4">
                                    <label>Dokter yang Menangani</label>
                                    <select name="dokter_id" id="dokter_id" class="validate">
                                        <option value="" disabled selected>Pilih Dokter</option>
                                        <?php foreach($dokter as $item): ?>
                                            <option value="<?= $item['id'] ?>" <?= $item['id'] == $data->dokter_id ? 'selected' : '' ?>><?= $item['nama'] ?></option>
                                        <?php endforeach; ?>
                                        </select>
                                </div>
                                <div class="input-field col s12 m12">
                                    <label>Keluhan</label>
                                    <textarea id="keluhan" name="keluhan" class="materialize-textarea"><?= $data->keluhan ?></textarea>
                                </div>
                                <div class="input-field col s6 m6">
                                    <label>Harga Jasa (Masukkan angka saja)</label>
                                    <input id="harga_jasa" name="harga_jasa" type="number" min="0" value="<?= $data->harga_jasa ?>" class="validate">
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