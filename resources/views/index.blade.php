<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Surodakan</title>
  <meta name="description" content="">
  <meta name="keywords" content="">


  <!-- Favicons -->
  <link href="{{ asset('img/logo.png') }}" rel="icon">
  <link href="{{ url('public/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- CSS Files -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{ asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{ asset('css/main.css')}}" rel="stylesheet">

</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center">
      <a href="{{ route('index') }}" class="logo d-flex align-items-center me-auto">
        <h1 class="sitename">Surodakan</h1><span>.</span>
      </a>
      @include('partials.navbar')
    </div>
  </header>


  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <div class="carousel-item active">
          <img src="{{ asset('img/hero-carousel/hero-carousel-2.jpg')}}" alt="">
          <div class="container">
            <h2>Menciptakan Surodakan yang Lebih Hijau</h2>
            <p>Desa kami bersama-sama membangun taman berkelanjutan dengan memanfaatkan material daur ulang dan kompos ramah lingkungan.</p>
            {{-- <a href="" class="btn-get-started">Read More</a> --}}
          </div>
        </div>

        <div class="carousel-item">
          <img src="{{ asset('img/hero-carousel/hero-carousel-1.jpg')}}" alt="">
          <div class="container">
            <h2>Mengubah Limbah Menjadi Keindahan</h2>
            <p>Dari botol plastik hingga sampah organik, kami memanfaatkan barang-barang bekas untuk mempercantik Surodakan. Ayo kurangi sampah bersama!.</p>
            {{-- <a href="" class="btn-get-started">Read More</a>  --}}
          </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item">
          <img src="{{ asset('img/hero-carousel/hero-carousel-4.png')}}" alt="">
          <div class="container">
            <h2>Peluang Baru untuk Kerajinan Lokal</h2>
            <p>Dengan keterampilan warga, limbah dapat diubah menjadi kerajinan unik. Bersama-sama, kita mengembangkan Surodakan yang kreatif dan ramah lingkungan.</p>
            {{-- <a href="about.html" class="btn-get-started">Read More</a>  --}}
          </div>
        </div><!-- End Carousel Item -->

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators"></ol>

      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row position-relative">

          <div class="col-lg-7 about-img" data-aos="zoom-out" data-aos-delay="200"><img src="{{ asset('img/hero-carousel/peta.png')}}"></div>

          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
            <h2 class="inner-title">Kelurahan Surodakan</h2>
            <div class="our-story">
              <h4>East Java</h4>
              <h3>Detail</h3>
              <p>Desa Surodakan, terletak di Kecamatan Trenggalek, Kabupaten Trenggalek, Jawa Timur, memiliki peran strategis dalam perekonomian lokal
                dengan mayoritas penduduk bekerja di sektor pertanian dan perdagangan. Infrastruktur desa cukup baik, dengan akses transportasi yang mudah ke pusat kota.
                Budaya gotong-royong dan tradisi Jawa masih kuat di masyarakatnya. Desa ini memiliki fasilitas pendidikan, kesehatan,
                serta tempat ibadah yang memadai. Jumlah penduduk Desa Surodakan sekitar 7.825 jiwa. Pemerintah desa aktif dalam program pembangunan dan pemberdayaan masyarakat.</p>
              <ul>
                <li><i class="bi bi-check-circle"></i> <span>Warga Desa Surodakan, ayo sukseskan program "1 Rumah 1 Kompos"!</span></li>
                <li><i class="bi bi-check-circle"></i> <span>#PeduliLingkungan </span></li>
                <li><i class="bi bi-check-circle"></i> <span>#Komposmandiri</span></li>
              </ul>
              <!-- <p>Desa Surodakan berkomitmen untuk menciptakan
                lingkungan yang lebih hijau, sehat, dan berkelanjutan. Melalui kerja sama dan partisipasi aktif seluruh warga.
                desa ini diharapkan dapat menjadi contoh bagi wilayah lain dalam hal pembangunan berkelanjutan dan pemberdayaan masyarakat.</p> -->
              <!-- <div class="watch-video d-flex align-items-center position-relative">
                <i class="bi bi-play-circle"></i>
                <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox stretched-link">Watch Video</a>
              </div> -->
            </div>
          </div>

        </div>

      </div>

    </section>
    <!-- End About Section -->

    <!-- Blog Posts Section -->
    <section id="blog-posts" class="blog-posts section">
      <div class="container" >
          <div class="row gy-4">
              @foreach ($posts as $post)
              <div class="col-lg-6">
                  <article class="service-item position-relative h-100">
                      <div class="post-img position-relative overflow-hidden" style="height: 25vh">
                          @if($post->image)
                              <img src="{{ asset('storage/'.$post->image) }}" class="service-item__image img-fluid" alt="{{ $post->title }}">
                          @else
                              <img src="URL_GAMBAR_DEFAULT" alt="Default Image" class="service-item__image img-fluid">
                          @endif
                      </div>

                      <div class="post-content d-flex flex-column">
                          <h2 class="post-title">
                              <a href="{{ route('blog-detail', $post->id) }}" class="post-title">{{ $post->title }}</a>
                          </h2>

                          <div class="meta d-flex align-items-center">
                              <li class="d-flex align-items-center">
                                  <a href="blog-details.html">
                                      <time datetime="{{ $post->created_at->toIso8601String() }}">{{ $post->formatted_date }}</time>
                                  </a>
                              </li>
                          </div>

                          <p>{{ Str::limit($post->content, 150) }}</p>

                          <hr>
                          <a href="{{ route('blog-detail', $post->id) }}" class="readmore stretched-link">Read More</a>
                      </div>
                  </article>
              </div><!-- End col-lg-4 (Post card) -->
              @endforeach
          </div><!-- End row -->
      </div>
    </section><!-- End Blog Posts Section -->

  </main>


  @include('partials.footer')

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Scripts -->
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>