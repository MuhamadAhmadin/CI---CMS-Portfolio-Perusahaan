<?= $this->extend('front/front_app'); ?>
<?= $this->section('content'); ?>
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="<?= base_url('/') ?>">Home</a></li>
                <li><?= $data->app_name ?></li>
            </ol>
            <h2>Detail Portfolio</h2>
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">
                            <div class="swiper-slide">
                                <img src="<?= base_url('').'/../'.'writable/uploads/' . $data->thumbnail; ?>" alt="">
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>Informasi Proyek</h3>
                        <ul>
                            <li><strong>Kategori</strong>: <?= get_category($data->category) ?></li>
                            <li><strong>Klien</strong>: <?= $data->client_name ?></li>
                            <li><strong>Tanggal Proyek</strong>: <?= date_indo($data->project_date) ?></li>
                        </ul>
                    </div>
                </div>
                <div class="portfolio-description">
                    <h2>Deskripsi</h2>
                    <p><?= $data->description ?></p>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->
<?= $this->endSection(); ?>