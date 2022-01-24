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
                    <div class="right">
                        <a href="<?= base_url('dashboard/pasien/new') ?>"
                            class="btn-floating btn-large waves-effect waves-light " style="margin-top: 15px;"><i
                                class="mdi-content-add"></i></a>
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
                    <?= $this->include('components/validation_checker'); ?>
                    <div class="col s12 m12 l12">
                        <div class="responsive-table">

                            <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No. Pasien</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Alamat</th>
                                        <th>Telepon</th>
                                        <th>Keluhan</th>
                                        <th>Tgl Datang/Berobat</th>
                                        <th>Harga Jasa</th>
                                        <th>Dokter Yang Menangani</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($pasien as $item): ?>
                                    <tr>
                                        <td><?= $item->no_pasien ?></td>
                                        <td><?= $item->nik ?></td>
                                        <td><?= $item->nama ?></td>
                                        <td><?= ($item->gender == 'L') ? 'Laki-laki' : 'Perempuan'; ?></td>
                                        <td><?= $item->alamat ?></td>
                                        <td><?= $item->telepon ?></td>
                                        <td><?= $item->keluhan ?></td>
                                        <td><?= $item->tanggal_datang ?></td>
                                        <td>Rp <?= number_format($item->harga_jasa, 0, ",", ".") ?> ,-</td>
                                        <td><?= $item->nama_dokter ?></td>
                                        <td>
                                            <a href="<?= base_url('dashboard/pasien/'.$item->id.'/edit') ?>" class="btn btn-sm waves-effect waves-light yellow">Edit</a>
                                            <a href="#"
                                                        data-href="<?= base_url('dashboard/pasien/'.$item->id.'/delete') ?>"
                                                        onclick="confirmToDelete(this)" class="btn btn-sm waves-effect waves-light red">Hapus</a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
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
