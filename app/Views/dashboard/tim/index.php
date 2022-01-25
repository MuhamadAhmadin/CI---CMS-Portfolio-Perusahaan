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
                        <a href="<?= base_url('dashboard/tim/new') ?>"
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
                        <table id="data-table-simple" class="responsive-table display" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Photo</th>
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                    <th>Twitter</th>
                                    <th>Instagram</th>
                                    <th>Facebook</th>
                                    <th>LinkedIn</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($tim as $item): ?>
                                <tr>
                                    <td>
                                    <img
                                                src="<?= base_url('').'/../'.'writable/uploads/' . $item->photo?>" style="width: 80px;padding:4px"/>
                                    </td>
                                    <td><?= $item->nama ?></td>
                                    <td><?= $item->jabatan ?></td>
                                    <td><a href="<?= $item->twitter ?>">Link</a></td>
                                    <td><a href="<?= $item->instagram ?>">Link</a></td>
                                    <td><a href="<?= $item->facebook ?>">Link</a></td>
                                    <td><a href="<?= $item->linkedin ?>">Link</a></td>
                                    <td>
                                        <a href="<?= base_url('dashboard/tim/'.$item->id.'/edit') ?>" class="btn btn-sm waves-effect waves-light yellow">Edit</a>
                                        <a href="#"
                                                    data-href="<?= base_url('dashboard/tim/'.$item->id.'/delete') ?>"
                                                    onclick="confirmToDelete(this)" class="btn btn-sm waves-effect waves-light red">Hapus</a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
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
