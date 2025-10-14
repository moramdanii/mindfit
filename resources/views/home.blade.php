@extends('layouts.default')

@section('title', 'MindFit - Kesehatan & Keseimbangan Diri')

@section('content')

<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container">
  <div class="row align-items-center">
    <div class="col-lg-6">
      <div class="hero-content">
        <h1>Pahami Pikiranmu <span>Rawat Tubuhmu</span></h1>
        <p>Mind Fit membantumu mengenali diri dan menjaga keseimbangan antara pikiran serta tubuh untuk hidup lebih baik.</p>
        <div class="hero-actions justify-content-center justify-content-lg-start">
          <a href="#services" class="btn-primary scrollto">Mulai Berlangganan</a>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="hero-image">
        <img src="assets/img/illustration/illustration-28.png" class="img-fluid floating" alt="">
      </div>
    </div>
  </div>
</div>


    </section><!-- /Hero Section -->

    <!-- About Section -->
   <section id="about" class="about section py-5">
  <div class="container">
    <div class="row align-items-center g-5">

      <!-- Image Column -->
      <div class="col-lg-6">
        <div class="about-image text-center">
          <img src="{{ asset('assets/img/illustration/illustration-77.png') }}"
               alt="Tentang MindFit"
               class="img-fluid rounded-4 shadow-sm"
               style="max-height: 420px; object-fit: contain;">
        </div>
      </div>

      <!-- Content Column -->
      <div class="col-lg-6 d-flex align-items-center">
        <div class="content ps-lg-4">
          <h2 class="fw-bold mb-3">Mengenal Diri dan Menjaga Kesehatan dengan <span class="text-primary">MindFit</span></h2>
          <p class="lead text-muted mb-3">
            Website ini dibuat untuk mengajak masyarakat, terutama anak muda, mulai menerapkan pola hidup sehat dan lebih mengenal diri sendiri.
          </p>

          <p class="text-muted mb-4">
            Banyak anak muda yang masih bingung memahami diri, sering mengonsumsi makanan instan, dan tertarik pada hal-hal seperti zodiak.
            Melalui website ini, kami menghadirkan fitur seperti tes MBTI, perhitungan berat dan tinggi badan ideal, tes zodiak, serta prediksi siklus haid.
            Dengan fitur-fitur ini, kami berharap pengguna dapat mengenal kepribadian dan kondisi tubuh mereka dengan cara yang menarik, menyenangkan, dan bermanfaat.
          </p>

          <!-- Stats Row -->
          <div class="row text-center g-3">
            <div class="col-4">
              <h3 class="fw-bold mb-0">
                <span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="1" class="purecounter"></span>+
              </h3>
              <p class="small text-muted mb-0">Health Tools</p>
            </div>
            <div class="col-4">
              <h3 class="fw-bold mb-0">
                <span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="1" class="purecounter"></span>%
              </h3>
              <p class="small text-muted mb-0">Focus on Well-being</p>
            </div>
            <div class="col-4">
              <h3 class="fw-bold mb-0">
                <span data-purecounter-start="0" data-purecounter-end="1000" data-purecounter-duration="1" class="purecounter"></span>+
              </h3>
              <p class="small text-muted mb-0">Users Inspired</p>
            </div>
          </div>
          <!-- End Stats Row -->
        </div>
      </div>

    </div>
  </div>
</section>





    <!-- Features Section -->
    <<section id="services" class="features section py-5">

  <!-- Section Title -->
  <div class="container section-title text-center mb-5">
    <h2 class="fw-bold">Fitur MindFit</h2>
    <p class="text-muted">Temukan berbagai fitur menarik untuk memahami diri dan menjaga kesehatanmu dengan cara yang seru dan mudah.</p>
  </div>

  <div class="container">
    <div class="row gy-5">

      <!-- MBTI Test -->
      <div class="col-md-6 col-lg-6">
        <div class="features-card text-center p-4 shadow-sm rounded-4 h-100">
          <div class="icon-wrapper mb-3 text-primary">
            <i class="bi bi-person-bounding-box fs-1"></i>
          </div>
          <h3 class="fw-semibold">Tes Kepribadian MBTI</h3>
          <p class="text-muted">
            Kenali kepribadianmu lebih dalam dengan tes MBTI kami. Temukan tipe kepribadian dan cara terbaik memahami dirimu.
          </p>
          <div class="image-container mt-3">
            <img src="{{ asset('assets/img/illustration/illustration-14.png') }}" alt="Tes MBTI" class="img-fluid rounded-3">
          </div>
        </div>
      </div>

      <!-- Ideal Body Calculator -->
      <div class="col-md-6 col-lg-6">
        <div class="features-card text-center p-4 shadow-sm rounded-4 h-100">
          <div class="icon-wrapper mb-3 text-success">
            <i class="bi bi-heart-pulse fs-1"></i>
          </div>
          <h3 class="fw-semibold">Berat & Tinggi Ideal</h3>
          <p class="text-muted">
            Hitung berat dan tinggi badan idealmu untuk menjaga keseimbangan tubuh dan pola hidup yang lebih sehat.
          </p>
          <div class="image-container mt-3">
            <img src="{{ asset('assets/img/illustration/illustration-6.png') }}" alt="Badan Ideal" class="img-fluid rounded-3">
          </div>
        </div>
      </div>

      <!-- Menstrual Prediction -->
      <div class="col-md-6 col-lg-6">
        <div class="features-card text-center p-4 shadow-sm rounded-4 h-100">
          <div class="icon-wrapper mb-3 text-danger">
            <i class="bi bi-calendar-heart fs-1"></i>
          </div>
          <h3 class="fw-semibold">Prediksi Menstruasi</h3>
          <p class="text-muted">
            Catat dan prediksi siklus menstruasimu dengan mudah. Dapatkan pengingat dan tips menjaga kesehatan reproduksi.
          </p>
          <div class="image-container mt-3">
            <img src="{{ asset('assets/img/illustration/illustration-7.png') }}" alt="Prediksi Haid" class="img-fluid rounded-3">
          </div>
        </div>
      </div>

      <!-- Zodiac Feature -->
      <div class="col-md-6 col-lg-6">
        <div class="features-card text-center p-4 shadow-sm rounded-4 h-100">
          <div class="icon-wrapper mb-3 text-warning">
            <i class="bi bi-stars fs-1"></i>
          </div>
          <h3 class="fw-semibold">Zodiak & Kepribadian</h3>
          <p class="text-muted">
            Temukan karakter unikmu berdasarkan zodiak dan pelajari bagaimana pengaruhnya terhadap hubungan dan kesehatanmu.
          </p>
          <div class="image-container mt-3">
            <img src="{{ asset('assets/img/illustration/illustration-8.png') }}" alt="Zodiak" class="img-fluid rounded-3">
          </div>
        </div>
      </div>

    </div>
  </div>

</section>
<!-- /Features Section -->


    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title">
        <h2>Testimonials</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="testimonial-slider swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 4000
              },
              "slidesPerView": 1,
              "spaceBetween": 30,
              "navigation": {
                "nextEl": ".swiper-button-next",
                "prevEl": ".swiper-button-prev"
              },
              "breakpoints": {
                "768": {
                  "slidesPerView": 2
                },
                "1200": {
                  "slidesPerView": 3
                }
              }
            }
          </script>

          <div class="swiper-wrapper">

            <!-- Testimonial Slide 1 -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="testimonial-header">
                  <img src="assets/img/person/person-f-12.webp" alt="Client" class="img-fluid" loading="lazy">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                </div>
                <div class="testimonial-body">
                  <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit sed eiusmod tempor.</p>
                </div>
                <div class="testimonial-footer">
                  <h5>Jessica Martinez</h5>
                  <span>UX Designer</span>
                  <div class="quote-icon">
                    <i class="bi bi-chat-quote-fill"></i>
                  </div>
                </div>
              </div>
            </div><!-- End Testimonial Slide -->

            <!-- Testimonial Slide 2 -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="testimonial-header">
                  <img src="assets/img/person/person-m-8.webp" alt="Client" class="img-fluid" loading="lazy">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                </div>
                <div class="testimonial-body">
                  <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur sint occaecat cupidatat non proident sunt in culpa.</p>
                </div>
                <div class="testimonial-footer">
                  <h5>David Rodriguez</h5>
                  <span>Software Engineer</span>
                  <div class="quote-icon">
                    <i class="bi bi-chat-quote-fill"></i>
                  </div>
                </div>
              </div>
            </div><!-- End Testimonial Slide -->

            <!-- Testimonial Slide 3 -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="testimonial-header">
                  <img src="assets/img/person/person-f-6.webp" alt="Client" class="img-fluid" loading="lazy">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                </div>
                <div class="testimonial-body">
                  <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam quis nostrud.</p>
                </div>
                <div class="testimonial-footer">
                  <h5>Amanda Wilson</h5>
                  <span>Creative Director</span>
                  <div class="quote-icon">
                    <i class="bi bi-chat-quote-fill"></i>
                  </div>
                </div>
              </div>
            </div><!-- End Testimonial Slide -->

            <!-- Testimonial Slide 4 -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="testimonial-header">
                  <img src="assets/img/person/person-m-12.webp" alt="Client" class="img-fluid" loading="lazy">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                </div>
                <div class="testimonial-body">
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam eaque ipsa quae ab illo inventore veritatis.</p>
                </div>
                <div class="testimonial-footer">
                  <h5>Ryan Thompson</h5>
                  <span>Business Analyst</span>
                  <div class="quote-icon">
                    <i class="bi bi-chat-quote-fill"></i>
                  </div>
                </div>
              </div>
            </div><!-- End Testimonial Slide -->

            <!-- Testimonial Slide 5 -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="testimonial-header">
                  <img src="assets/img/person/person-f-10.webp" alt="Client" class="img-fluid" loading="lazy">
                  <div class="rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                </div>
                <div class="testimonial-body">
                  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi.</p>
                </div>
                <div class="testimonial-footer">
                  <h5>Rachel Chen</h5>
                  <span>Project Manager</span>
                  <div class="quote-icon">
                    <i class="bi bi-chat-quote-fill"></i>
                  </div>
                </div>
              </div>
            </div><!-- End Testimonial Slide -->

          </div>

          <div class="swiper-navigation">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>

        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Pricing Section -->
   <section id="pricing" class="pricing section">

  <!-- Section Title -->
  <div class="container section-title">
    <h2>Paket Layanan</h2>
    <p>Pilih paket yang sesuai dengan kebutuhanmu untuk menjaga keseimbangan pikiran dan tubuh.</p>
  </div>
  <!-- End Section Title -->

  <div class="container">
    <div class="row justify-content-center g-4">

      <!-- Free Plan -->
      <div class="col-lg-4 col-md-6">
        <div class="pricing-card starter">
          <div class="plan-header">
            <h3 class="plan-name">Gratis</h3>
            <p class="plan-description">Nikmati fitur dasar untuk mengenal diri dan kesehatanmu.</p>
          </div>
          <div class="pricing-display">
            <div class="price">
              <span class="currency">Rp</span>
              <span class="amount">0</span>
              <span class="period">/bulan</span>
            </div>
          </div>
          <div class="features-list">
            <div class="feature"><i class="bi bi-check2"></i> Tes MBTI</div>
            <div class="feature"><i class="bi bi-check2"></i> Tes Zodiak</div>
            <div class="feature"><i class="bi bi-check2"></i> Hitung BMI (Berat & Tinggi Badan Ideal)</div>
            <div class="feature"><i class="bi bi-check2"></i> Akses Hasil Dasar</div>
          </div>
          <a href="#" class="btn-plan">Mulai Sekarang</a>
        </div>
      </div>
      <!-- End Free Plan -->

      <!-- Premium Plan -->
      <div class="col-lg-4 col-md-6">
        <div class="pricing-card professional featured">
          <div class="plan-header">
            <div class="featured-badge">Paling Populer</div>
            <h3 class="plan-name">Premium</h3>
            <p class="plan-description">Dapatkan analisis lengkap dan fitur kesehatan tambahan hanya dengan harga terjangkau.</p>
          </div>
          <div class="pricing-display">
            <div class="price">
              <span class="currency">Rp</span>
              <span class="amount">9.000</span>
              <span class="period">/bulan</span>
            </div>
          </div>
          <div class="features-list">
            <div class="feature"><i class="bi bi-check2"></i> Semua fitur Gratis</div>
            <div class="feature"><i class="bi bi-check2"></i> Prediksi Siklus Haid</div>
            <div class="feature"><i class="bi bi-check2"></i> Rekomendasi Pola Makan Sehat</div>
            <div class="feature"><i class="bi bi-check2"></i> Riwayat Tes & Statistik Lengkap</div>
            <div class="feature"><i class="bi bi-check2"></i> Dukungan Prioritas</div>
          </div>
          <a href="#" class="btn-plan">Upgrade Sekarang</a>
        </div>
      </div>
      <!-- End Premium Plan -->

    </div>

    <div class="row justify-content-center mt-5">
      <div class="col-lg-8 text-center">
        <div class="pricing-footer">
          <p class="guarantee-text">Tanpa biaya tersembunyi • Bisa dibatalkan kapan saja</p>
          <p class="contact-text">Butuh bantuan? <a href="#">Hubungi tim kami</a></p>
        </div>
      </div>
    </div>

  </div>

</section>



    <!-- Faq Section -->
    <section id="faq" class="faq section">

  <!-- Section Title -->
  <div class="container section-title">
    <h2>Pertanyaan yang Sering Diajukan</h2>
    <p>Beberapa pertanyaan umum seputar penggunaan dan fitur MindFit.</p>
  </div><!-- End Section Title -->

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-9">

        <div class="faq-wrapper">

          <!-- FAQ 1 -->
          <div class="faq-item faq-active">
            <div class="faq-header">
              <span class="faq-number">01</span>
              <h4>Apa itu MindFit?</h4>
              <div class="faq-toggle">
                <i class="bi bi-plus"></i>
                <i class="bi bi-dash"></i>
              </div>
            </div>
            <div class="faq-content">
              <div class="content-inner">
                <p>
                  MindFit adalah website kesehatan yang membantu kamu mengenali diri sendiri dan menjaga keseimbangan hidup melalui fitur seperti tes MBTI, perhitungan berat & tinggi badan ideal, tes zodiak, dan prediksi siklus haid.
                </p>
              </div>
            </div>
          </div><!-- End FAQ Item -->

          <!-- FAQ 2 -->
          <div class="faq-item">
            <div class="faq-header">
              <span class="faq-number">02</span>
              <h4>Apakah semua fitur di MindFit gratis digunakan?</h4>
              <div class="faq-toggle">
                <i class="bi bi-plus"></i>
                <i class="bi bi-dash"></i>
              </div>
            </div>
            <div class="faq-content">
              <div class="content-inner">
                <p>
                  Sebagian besar fitur MindFit dapat digunakan secara gratis. Namun, kami juga menyediakan paket premium seharga <strong>Rp9.000</strong> untuk akses penuh dengan fitur tambahan dan pengalaman bebas iklan.
                </p>
              </div>
            </div>
          </div><!-- End FAQ Item -->

          <!-- FAQ 3 -->
          <div class="faq-item">
            <div class="faq-header">
              <span class="faq-number">03</span>
              <h4>Bagaimana cara menghitung berat dan tinggi badan ideal?</h4>
              <div class="faq-toggle">
                <i class="bi bi-plus"></i>
                <i class="bi bi-dash"></i>
              </div>
            </div>
            <div class="faq-content">
              <div class="content-inner">
                <p>
                  Cukup masukkan tinggi dan berat badanmu pada fitur <em>Berat & Tinggi Badan Ideal</em>, lalu sistem akan otomatis menghitung menggunakan rumus BMI (Body Mass Index) untuk memberikan hasil yang akurat.
                </p>
              </div>
            </div>
          </div><!-- End FAQ Item -->

          <!-- FAQ 4 -->
          <div class="faq-item">
            <div class="faq-header">
              <span class="faq-number">04</span>
              <h4>Apakah data pribadi saya aman di MindFit?</h4>
              <div class="faq-toggle">
                <i class="bi bi-plus"></i>
                <i class="bi bi-dash"></i>
              </div>
            </div>
            <div class="faq-content">
              <div class="content-inner">
                <p>
                  Ya! MindFit menjaga privasi pengguna dengan serius. Semua data yang kamu masukkan hanya digunakan untuk perhitungan di dalam website dan tidak dibagikan ke pihak mana pun.
                </p>
              </div>
            </div>
          </div><!-- End FAQ Item -->

          <!-- FAQ 5 -->
          <div class="faq-item">
            <div class="faq-header">
              <span class="faq-number">05</span>
              <h4>Bagaimana cara memulai menggunakan MindFit?</h4>
              <div class="faq-toggle">
                <i class="bi bi-plus"></i>
                <i class="bi bi-dash"></i>
              </div>
            </div>
            <div class="faq-content">
              <div class="content-inner">
                <p>
                  Kamu bisa langsung klik tombol <strong>“Start Journey”</strong> di halaman utama untuk mulai mencoba fitur-fitur MindFit tanpa harus login. Jika ingin menyimpan hasil tes, cukup daftar akun gratis.
                </p>
              </div>
            </div>
          </div><!-- End FAQ Item -->

        </div><!-- End FAQ Wrapper -->
      </div>
    </div>
  </div>

</section>
<!-- /Faq Section -->

    <!-- Contact Section -->
   <section id="contact" class="contact section">

  <!-- Section Title -->
  <div class="container section-title">
    <h2>Kontak Kami</h2>
    <p>Punya pertanyaan atau saran? Kami senang mendengarnya! Hubungi tim MindFit untuk bantuan atau kerja sama.</p>
  </div><!-- End Section Title -->

  <div class="container">
    <div class="row align-items-stretch">

      <!-- Contact Form -->
      <div class="col-lg-7 order-lg-1 order-2">
        <div class="contact-form-container">
          <div class="form-intro">
            <h2>Kirim Pesan ke Kami</h2>
            <p>
              Isi formulir di bawah ini untuk menghubungi tim MindFit. Kami akan membalas secepatnya!
            </p>
          </div>

          <form action="" method="POST" class="php-email-form contact-form">
            @csrf
            <div class="row">
              <div class="col-md-6">
                <div class="form-field">
                  <input type="text" name="name" class="form-input" id="userName" placeholder="Nama Anda" required>
                  <label for="userName" class="field-label">Nama</label>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-field">
                  <input type="email" name="email" class="form-input" id="userEmail" placeholder="Email Anda" required>
                  <label for="userEmail" class="field-label">Email</label>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-field">
                  <input type="tel" name="phone" class="form-input" id="userPhone" placeholder="Nomor Telepon">
                  <label for="userPhone" class="field-label">Telepon</label>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-field">
                  <input type="text" name="subject" class="form-input" id="messageSubject" placeholder="Subjek Pesan" required>
                  <label for="messageSubject" class="field-label">Subjek</label>
                </div>
              </div>
            </div>

            <div class="form-field message-field">
              <textarea name="message" class="form-input message-input" id="userMessage" rows="5" placeholder="Tulis pesan Anda di sini..." required></textarea>
              <label for="userMessage" class="field-label">Pesan</label>
            </div>

            <div class="my-3">
              <div class="loading">Sedang mengirim...</div>
              <div class="error-message"></div>
              <div class="sent-message">Pesan Anda telah dikirim. Terima kasih!</div>
            </div>

            <button type="submit" class="send-button">
              Kirim Pesan
              <span class="button-arrow">→</span>
            </button>
          </form>
        </div>
      </div>

      <!-- Contact Info Sidebar -->
      <div class="col-lg-5 order-lg-2 order-1">
        <div class="contact-sidebar">
          <div class="contact-header">
            <h3>Hubungi Kami</h3>
            <p>
              Tim MindFit selalu terbuka untuk saran, kerja sama, atau pertanyaan seputar fitur kami.
            </p>
          </div>

          <div class="contact-methods">
            <div class="contact-method">
              <div class="contact-icon">
                <i class="bi bi-geo-alt"></i>
              </div>
              <div class="contact-details">
                <span class="method-label">Alamat</span>
                <p>Jl. Sehat No. 9, Bandung, Jawa Barat, Indonesia</p>
              </div>
            </div>

            <div class="contact-method">
              <div class="contact-icon">
                <i class="bi bi-envelope"></i>
              </div>
              <div class="contact-details">
                <span class="method-label">Email</span>
                <p>support@mindfit.id</p>
              </div>
            </div>

            <div class="contact-method">
              <div class="contact-icon">
                <i class="bi bi-telephone"></i>
              </div>
              <div class="contact-details">
                <span class="method-label">Telepon</span>
                <p>+62 812 3456 7890</p>
              </div>
            </div>

            <div class="contact-method">
              <div class="contact-icon">
                <i class="bi bi-clock"></i>
              </div>
              <div class="contact-details">
                <span class="method-label">Jam Operasional</span>
                <p>Senin - Jumat: 08.00 - 17.00<br>Sabtu: 09.00 - 14.00</p>
              </div>
            </div>
          </div>

          <div class="connect-section">
            <span class="connect-label">Ikuti Kami</span>
            <div class="social-links">
              <a href="#" class="social-link"><i class="bi bi-instagram"></i></a>
              <a href="#" class="social-link"><i class="bi bi-tiktok"></i></a>
              <a href="#" class="social-link"><i class="bi bi-facebook"></i></a>
              <a href="#" class="social-link"><i class="bi bi-youtube"></i></a>
            </div>
          </div>
        </div>
      </div><!-- End Sidebar -->

    </div>
  </div>
</section>
<!-- /Contact Section -->

  </main>

@endsection
