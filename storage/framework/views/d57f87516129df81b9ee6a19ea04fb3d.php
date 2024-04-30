<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>homespot</title>

    <!-- Bootstrap CSS Start -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <!-- Bootstrap CSS End -->

    <!-- Font Awesome CSS Start -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- Font Awesome CSS End -->

    <!-- CSS Start -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- CSS End -->
  </head>
  <body>
    <!-- Navbar Start -->
    <header class="sticky-top">
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand" href="/">homespot</a>
          <div class="collapse navbar-collapse justify-content-center">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle px-3"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Kota Pilihan
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Kota 1</a></li>
                  <li><a class="dropdown-item" href="#">Kota 2</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link active px-3" href="#">Beli</a>
              </li>
              <li class="nav-item">
                <a class="nav-link px-3" href="#">Tentang Kami</a>
              </li>
              <li class="nav-item">
                <a class="nav-link px-3" href="#">Daftar Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link px-3" href="#">Asuransi</a>
              </li>
            </ul>
          </div>
          <button class="btn btn-success" onclick="window.location.href = '<?php echo e(route('userprofile')); ?>';" type="button">
              Profile
          </button>

        </div>
      </nav>
    </header>
    <!-- Navbar End -->

    <!-- Main Start -->
    <main>
      <!-- Hero Start -->
      <section class="hero" id="hero-homespot">
        <div
          class="container min-vh-100 d-flex align-items-center justify-content-center"
        >
          <div class="row">
            <div class="col-12">
              <!-- Judul dengan padding tambahan -->
              <div class="text-center">
                <h2>Beli Rumah Impianmu hanya di Homespot</h2>
              </div>
              <div class="input-group py-5">
                <span class="input-group-text">
                  <i class="fa-solid fa-magnifying-glass"></i
                ></span>
                <input
                  type="text"
                  class="form-control"
                  placeholder="Cari lokasi, nama properti atau nama developer"
                />
                <button
                  class="btn btn-outline-secondary dropdown-toggle"
                  type="button"
                  data-bs-toggle="dropdown"
                >
                  Dropdown
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li><a class="dropdown-item" href="#">Tipe 1</a></li>
                  <li><a class="dropdown-item" href="#">Tipe 2</a></li>
                  <li>
                    <a class="dropdown-item" href="#">Tipe 3</a>
                  </li>
                  <li><hr class="dropdown-divider" /></li>
                  <li><a class="dropdown-item" href="#">Tipe 4</a></li>
                </ul>
                <button class="btn btn-primary" type="button">Cari</button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Hero End -->

      <!-- Card Top Start -->
      <section class="card-top">
        <div
          class="container min-vh-100 d-flex align-items-center justify-content-center carousel-homespot"
        ></div>
      </section>
      <!-- Card Top End -->

      <!-- Card Bottom Start -->
      <section class="card-bottom">
        <div
          class="container carousel-homespot min-vh-100 d-flex align-items-center justify-content-center"
        >
          <div class="row py-2 px-4">
            <div
              class="col-12 d-flex justify-content-between align-items-center py-4"
            >
              <h3 class="text-center">Jelajahi Properti dengan Virtual 360</h3>
              <button class="btn btn-primary" type="button">
                Lihat Semua
                <i class="fa-solid fa-arrow-right"></i>
              </button>
            </div>
            <div
              class="carousel slide"
              data-bs-ride="carousel"
              id="carouselHomespotBottom"
            >
              <button
                id="carousel-control-prev-index-homespot-bottom"
                class="carousel-control-prev"
                type="button"
                data-bs-target="#carouselHomespotBottom"
                data-bs-slide="prev"
              >
                <span
                  class="carousel-control-prev-icon"
                  aria-hidden="true"
                ></span>
              </button>
              <button
                id="carousel-control-next-index-homespot-bottom"
                class="carousel-control-next"
                type="button"
                data-bs-target="#carouselHomespotBottom"
                data-bs-slide="next"
              >
                <span
                  class="carousel-control-next-icon"
                  aria-hidden="true"
                ></span>
              </button>
              <div class="carousel-inner carousel-inner-homespot">
                <div class="carousel-item active">
                  <div class="row">
                  <?php
                    $cards = [
                        ['title' => 'Go Home Residence', 'provinsi' => 'Banten', 'text' => '3 KT * 2 KM * LB 29m2 * LT 60m2 * SHGB', 'harga' => 'Rp300 Jt - Rp800 Jt', 'images' => [
                            'assets/img/Card bawah/Go Home Residence.jpg',
                            'assets/img/Card bawah/Al Banjary Village.jpg'
                        ]],
                        ['title' => 'Graha Permata Estate', 'provinsi' => 'Jawa Tengah', 'text' => '3 KT * 3 KM * LB 103m2 * LT 112m2 * SHM', 'harga' => 'Rp940 Jt - Rp1.2 M', 'images' => [
                            'assets/img/Card bawah/Graha Permata Estate.jpg',
                            'assets/img/Card bawah/Astana Buwana 2.jpg'
                        ]],
                        ['title' => 'Graha Permata Wiradadi', 'provinsi' => 'Jawa Tengah', 'text' => '3 KT * 1 KM * LB 60m2 * LT 135m2 * SHM', 'harga' => 'Rp388 Jt - Rp548 Jt', 'images' => [
                            'assets/img/Card bawah/Graha Permata Wiradadi.jpg',
                            'assets/img/Card bawah/Pandaran Avenue.jpeg'
                        ]],
                        ['title' => 'Grand Trevista Residence', 'provinsi' => 'DKI Jakarta', 'text' => '3 KT * 4 KM * LB 182m2 * LT 112m2 * SHGB', 'harga' => 'Rp4.2 M - Rp5.1 M', 'images' => [
                            'assets/img/Card bawah/Grand Trevista Residence.jpg',
                            'assets/img/Card bawah/Griya Rafada 4 River View.jpeg'
                        ]],
                        ['title' => 'The Shizeb', 'provinsi' => 'Banten', 'text' => '3 KT * 2 KM * LB 29m2 * LT 60m2 * SHGB', 'harga' => 'Rp300 Jt - Rp800 Jt', 'images' => [
                             'assets/img/Card bawah/The Shizeb.jpg',
                             'assets/img/Card bawah/Villa Argomulyo.jpg',
                         ]],
                    ];

                    foreach ($cards as $index => $card) {
                        echo '<div class="col-3">';
                            echo '<div class="card card-homespot">';
                            // Carousel start
                                echo '<div id="carouselIndicators'.$index.'" class="carousel slide" data-bs-ride="carousel">';
                                    echo '<div class="carousel-inner">';
                                    foreach ($card['images'] as $i => $image) {
                                        echo '<div class="carousel-item '.($i === 0 ? 'active' : '').'">';
                                        echo '<img src="'.$image.'" class="image-thumbnail-homespot d-block w-100">';
                                        echo '</div>';
                                    }
                                    echo '</div>';
                                    echo '<button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicators'.$index.'" data-bs-slide="prev">';
                                    echo '<button class="carousel-control-next" type="button" data-bs-target="#carouselIndicators'.$index.'" data-bs-slide="next">';
                                echo '</div>';
                                // Carousel end
                                echo '<div class="card-body">';
                                echo '<h5 class="card-title">'.$card['title'].'</h5>';
                                echo '<p class="card-text mb-0">'.$card['provinsi'].'</p>';
                                echo '<p class="card-text">'.$card['text'].'</p>';
                                echo '<h5 class="card-harga">'.$card['harga'].'</h5>';
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                    }
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Card Bottom End -->

        <!-- Kota Start -->
        <section class="properti-kota">
            <div class="container min-vh-100 d-flex align-items-center justify-content-center position-relative">
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="col-3">
                        <div>
                            <h2>Cari Properti Berdasarkan Kota</h2>
                            <p>Yuk, cari properti yang sesuai dengan preferensimu di kota-kota pilihan terfavorit</p>
                            <a href="#" class="link-offset-2 link-underline link-underline-opacity-0">Lihat semuanya</a>
                        </div>
                    </div>
                    <div class="col-9 py-5">
                        <div id="carouselKota" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner carousel-inner-homespot">
                                <div class="carousel-item active">
                                    <div class="row d-flex justify-content-center align-items-center">
                                    <?php
                                        $kota = [
                                            ['nama' => 'Bandung', 'properti' => '366 Properti', 'image' => 'assets/img/bandung.png'],
                                            ['nama' => 'Surabaya', 'properti' => '169 Properti', 'image' => 'assets/img/surabaya.png'],
                                            ['nama' => 'Makassar', 'properti' => '203 Properti', 'image' => 'assets/img/makassar.png'],
                                            ['nama' => 'Jakarta', 'properti' => '52 Properti', 'image' => 'assets/img/jakarta.png'],
                                            ['nama' => 'Medan', 'properti' => '142 Properti', 'image' => 'assets/img/medan.png'],
                                        ];

                                        foreach ($kota as $index => $card) {
                                            echo '<div class="col-2 px-2">';
                                                echo '<div class="card card-homespot-kota">';
                                                    echo '<div class="card-body">';
                                                        echo '<div class="position-absolute py-1 px-2">';
                                                            echo '<h6 class="card-title mb-0">'.$card['nama'].'</h6>';
                                                            echo '<p class="card-text mb-0">'.$card['properti'].'</p>';
                                                        echo '</div>';
                                                        echo '<img src="'.$card['image'].'" class="d-block w-100">';
                                                    echo '</div>';
                                                echo '</div>';
                                            echo '</div>';
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-kota-homespot position-absolute">
                </div>
            </div>
        </section>
        <!-- Kota End -->

        <!-- Carousel Start -->
        <section class="carousel-section">
        <div class="container min-vh-100 d-flex align-items-center justify-content-center position-relative">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-12">
                    <div id="carouselKota" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner carousel-inner-homespot">
                            <div class="carousel-item active">
                                <div class="row d-flex justify-content-center align-items-center">
                                <?php
                                    $kota = [
                                        ['nama' => 'Bandung', 'properti' => '366 Properti', 'image' => 'assets/img/bandung.png'],
                                        ['nama' => 'Surabaya', 'properti' => '169 Properti', 'image' => 'assets/img/surabaya.png'],
                                        ['nama' => 'Makassar', 'properti' => '203 Properti', 'image' => 'assets/img/makassar.png'],
                                        ['nama' => 'Jakarta', 'properti' => '52 Properti', 'image' => 'assets/img/jakarta.png'],
                                        ['nama' => 'Medan', 'properti' => '142 Properti', 'image' => 'assets/img/medan.png'],
                                    ];

                                    foreach ($kota as $index => $card) {
                                        echo '<div class="col-2 px-2">';
                                            echo '<div class="card card-homespot-kota">';
                                                echo '<div class="card-body">';
                                                    echo '<div class="position-absolute py-1 px-2">';
                                                        echo '<h6 class="card-title mb-0">'.$card['nama'].'</h6>';
                                                        echo '<p class="card-text mb-0">'.$card['properti'].'</p>';
                                                    echo '</div>';
                                                    echo '<img src="'.$card['image'].'" class="d-block w-100">';
                                                echo '</div>';
                                            echo '</div>';
                                        echo '</div>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-kota-homespot position-absolute">
            </div>
        </div>
    </section>
    <!-- Carousel End -->

    <!-- Kalkulator Start -->
    <section class="calculator-section">
        <div class="container min-vh-100 d-flex align-items-center justify-content-center position-relative">
            <div class="container p-5 container-calculator-homespot">
                <div class="row d-flex align-items-center justify-content-center p-4">
                    <div class="col-4">
                        <div>
                            <h2>Kalkulator KPR</h2>
                            <img src="assets/img/Rectangle 10184.png" alt="Calculator" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="hargaProperti" class="form-label">Harga Properti</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="hargaProperti">Rp</span>
                                        <input type="number" class="form-control" placeholder="0" min="0">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="uangMuka" class="form-label">Uang Muka</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="uangMuka">Rp</span>
                                        <input type="number" class="form-control" placeholder="0" min="0">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="jumlahPinjaman" class="form-label">Jumlah Pinjaman</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="jumlahPinjaman">Rp</span>
                                        <input type="number" class="form-control" placeholder="0" min="0" disabled>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="masaKreditFix" class="form-label">Masa Kredit Fix</label>
                                    <div class="input-group mb-3">
                                        <input type="number" class="form-control" placeholder="0" min="0" disabled>
                                        <span class="input-group-text" id="masaKreditFix">Tahun</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="sukuBunga" class="form-label">Suku Bunga</label>
                                    <select class="form-select">
                                        <option selected>Program Suku Bunga</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">...</option>
                                        <option value="5">100</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="nominalSukuBunga" class="form-label">Nominal Suku Bunga</label>
                                    <div class="input-group mb-3">
                                        <input type="number" class="form-control" placeholder="0" min="0" disabled>
                                        <span class="input-group-text" id="nominalSukuBunga">%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="mb-3">
                                    <label for="lamaPinjaman" class="form-label">Lama Pinjaman</label>
                                    <div class="input-group mb-3">
                                        <input type="number" class="form-control" placeholder="0" min="0" disabled>
                                        <span class="input-group-text" id="lamaPinjaman">Tahun</span>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Kalkulator End -->
    </main>
    <!-- Main End -->

    <!-- Footer Start -->
    <div class="container-fluid container-footer">
        <div class="container">
        <footer class="py-5 text-white">
            <div class="row d-flex justify-content-center">
            <div class="col-2 mb-3">
                <h5 class="mb-4">Kantor Pusat</h5>
                <p class="mb-0">
                    PT. Bringin Inti Teknologi (BIT) Intiland Tower Lt 12A
                </p>
                <p class="mb-0">
                    Jl. Jend. Sudirman Kav. 32
                </p>
                <p class="mb-0">
                    Jakarta 10220
                </p>
                <p class="mb-0">
                    Indonesia
                </p>
            </div>

            <div class="col-6 col-md-2 mb-3">
                <h5 class="mb-4">Dukungan</h5>
                <ul class="nav flex-column">
                <li class="nav-item mb-2">
                    <a href="#" class="nav-link p-0 text-white">Kebijakan Privasi</a>
                </li>
                <li class="nav-item mb-2">
                    <a href="#" class="nav-link p-0 text-white"
                    >Syarat dan Ketentuan</a
                    >
                </li>
                </ul>
            </div>

            <div class="col-2 mb-3">
                <h5 class="mb-4">Hubungi Kami</h5>
                <ul class="nav flex-column">
                <li class="nav-item mb-2">
                    <div class="d-flex gap-2 align-items-center">
                        <i class="fa-brands fa-whatsapp"></i>
                        <a href="#" class="nav-link p-0 text-white">+62 812-3456-7890</a>
                    </div>
                </li>
                <li class="nav-item mb-2">
                    <div class="d-flex gap-2 align-items-center">
                        <i class="fa-solid fa-envelope"></i>
                        <a href="#" class="nav-link p-0 text-white"
                        >support@homespot.id</a>
                    </div>
                </li>
                </ul>
            </div>
            <div class="col-2 mb-3">
                <h5 class="mb-4">Homespot By:</h5>
                <div class="container-image-footer d-flex align-items-center justify-content-center">
                    <img class="w-100" src="<?php echo e(asset('assets/img/logo bit.png')); ?>">
                </div>
            </div>
            <div class="col-2 mb-3">
                <h5 class="mb-4">Powered By:</h5>
                <div class="container-image-footer d-flex align-items-center justify-content-center">
                    <img class="w-100" src="assets/img/bri-logo.png">
                </div>
            </div>
            </div>
        </footer>
        </div>
    </div>

    <!-- Footer End -->

    <!-- Bootstrap JS Start -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <!-- Bootstrap JS End -->

    <!-- JQuery JS Start -->
    <script
      src="https://code.jquery.com/jquery-3.7.1.min.js"
      integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
      crossorigin="anonymous"
    ></script>
    <!-- JQuery JS End -->
  </body>
</html>
<?php /**PATH C:\MAXY ACADEMY\HACKATHON2\homespot-login\resources\views/user/home_logined.blade.php ENDPATH**/ ?>