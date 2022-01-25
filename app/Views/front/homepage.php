<?= $this->extend('front/front_app'); ?>
<?= $this->section('content'); ?>


<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
  <div class="container" data-aos="fade-in">
    <h1>Bengkel Web Indonesia</h1>
    <h2>sebuah usaha dimotori oleh anak-anak muda Indonesia yang bergerak dibidang Jasa Konsultasi dan Pengembang
      Teknologi Informasi</h2>
    <div class="d-flex align-items-center">
      <i class="bx bxs-right-arrow-alt get-started-icon"></i>
      <a href="#contact" class="btn-get-started scrollto">Mulai Sebuah Proyek</a>
    </div>
  </div>
</section><!-- End Hero -->

<main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about section-bg">
    <div class="container">

      <div class="row" style="margin-top: 10rem;">
        <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative"
          data-aos="fade-right">
          <a href="https://www.youtube.com/watch?v=vOiCPVIAr6c" class="glightbox play-btn mb-4"></a>
        </div>

        <div
          class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
          <h4 data-aos="fade-up">Tentang Kami</h4>
          <h3 data-aos="fade-up">Hadir Memenuhi Kebutuhan Organisasi Anda.</h3>
          <p data-aos="fade-up">Bengkel Web Indonesia adalah usaha jasa konsultan IT dan Pengembang Sistem dan
            Aplikasi yang lahir dari perkumpulan para generasi muda yang dinamis.</p>

          <div class="icon-box" data-aos="fade-up">
            <div class="icon"><i class="bx bx-fingerprint"></i></div>
            <h4 class="title"><a href="">Kualitas</a></h4>
            <p class="description">Kami akan menjaga kualitas produk kami</p>
          </div>

          <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bx bx-gift"></i></div>
            <h4 class="title"><a href="">Kecepatan</a></h4>
            <p class="description">Kecepatan dalam pengembangan menjadi prioritas kami</p>
          </div>

          <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="bx bx-atom"></i></div>
            <h4 class="title"><a href="">Kepercayaan</a></h4>
            <p class="description">Kunci utama kekuatan kami yaitu di kepercayaan</p>
          </div>

        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Clients Section ======= -->
  <section id="clients" class="clients">
    <div class="container" data-aos="fade-up">

      <div class="clients-slider swiper">
        <div class="swiper-wrapper align-items-center">
          <?php foreach($clients as $client): ?>
          <div class="swiper-slide"><img
              src="<?= base_url('').'/../'.'writable/uploads/' . $client->filename_encrypted; ?>" class="img-fluid"
              alt="">
          </div>
          <?php endforeach; ?>
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Clients Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services section-bg">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Layanan</h2>
        <p>Bengkel Web Indonesia menawarkan beberapa jasa strategi digital dan pengembangan produk digital dengan
          mengedepankan kualitas, kecepatan dan keamanan.</p>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6" data-aos="fade-up">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-briefcase"></i></div>
            <h4 class="title"><a href="">IT Consultant</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
              occaecati cupiditate non provident</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-card-checklist"></i></div>
            <h4 class="title"><a href="">Business Analyst</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
              commodo consequat tarad limino ata</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-bar-chart"></i></div>
            <h4 class="title"><a href="">UI/UX</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
              fugiat nulla pariatur</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-binoculars"></i></div>
            <h4 class="title"><a href="">Website Development</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
              mollit anim id est laborum</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-brightness-high"></i></div>
            <h4 class="title"><a href="">Android Development</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
              praesentium voluptatum deleniti atque</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-calendar4-week"></i></div>
            <h4 class="title"><a href="">Custom CMS & Wordpress</a></h4>
            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum
              soluta nobis est eligendi</p>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Services Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title">
        <h2 data-aos="fade-up">Portfolio</h2>
        <p data-aos="fade-up">Partner kerja yang memiliki keterampilan untuk mengubah ide menjadi sebuah produk jadi
        </p>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-web">Website</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
        <?php foreach($portfolios as $portfolio): ?>
        <div class="col-lg-4 col-md-6 portfolio-item filter-<?= $portfolio->category; ?>">
          <img src="<?= base_url('').'/../'.'writable/uploads/' . $portfolio->thumbnail; ?>" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4><?= $portfolio->app_name ?></h4>
            <p><?= $portfolio->client_name ?></p>
            <a href="<?= base_url('').'/../'.'writable/uploads/' . $portfolio->thumbnail; ?>"
              data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
              title="<?= $portfolio->app_name ?>"><i class="bx bx-plus"></i></a>
            <a href="<?= base_url('portfolio/' . $portfolio->slug) ?>" class="details-link" title="Selengkapnya"><i class="bx bx-link"></i></a>
          </div>
        </div>
        <?php endforeach; ?>

      </div>

    </div>
  </section><!-- End Portfolio Section -->

  <!-- ======= Team Section ======= -->
  <section id="team" class="team section-bg">
    <div class="container">

      <div class="section-title">
        <h2 data-aos="fade-up">Tim Kami</h2>
        <p data-aos="fade-up">Adalah anak muda Indonesia yang memiliki keahlian dan pengalaman dibidangnya</p>
      </div>

      <div class="row">
        <?php foreach($tims as $tim): ?>
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
          <div class="member">
            <div class="member-img">
              <img src="<?= base_url('').'/../'.'writable/uploads/' . $tim->photo; ?>" class="img-fluid" alt="">
              <div class="social">
                <a href="<?= $tim->twitter ?>"><i class="bi bi-twitter"></i></a>
                <a href="<?= $tim->facebook ?>"><i class="bi bi-facebook"></i></a>
                <a href="<?= $tim->instagram ?>"><i class="bi bi-instagram"></i></a>
                <a href="<?= $tim->linkedin ?>"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4><?= $tim->nama ?></h4>
              <span><?= $tim->jabatan ?></span>
            </div>
          </div>
        </div>
        <?php endforeach; ?>

      </div>

    </div>
  </section><!-- End Team Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2 data-aos="fade-up">Kontak Kami</h2>
        <p data-aos="fade-up">Yuk, diskusikan ide kamu agar menjadi produk jadi!.</p>
      </div>

      <div class="row justify-content-center">

        <div class="col-xl-4 col-lg-4 mt-4" data-aos="fade-up">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>Alamat</h3>
            <p>Jatiasih, Bekasi</p>
          </div>
        </div>

        <div class="col-xl-4 col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="100">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email</h3>
            <p>bengkelwebindonesia@gmail.com</p>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="200">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Telepon</h3>
            <p>+62 8529 5405 635<br>+62 8966 1030 388</p>
          </div>
        </div>
      </div>

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="300">
        <div class="col-xl-9 col-lg-12 mt-4">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Nama" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="EMail" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subjek" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Pesan" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Pesan anda berhasil terkirim. Terima kasih!</div>
            </div>
            <div class="text-center"><button type="submit">Kirim Pesan</button></div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->


<?= $this->endSection(); ?>