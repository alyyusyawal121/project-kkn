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

<body class="portfolio-page">

    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container position-relative d-flex align-items-center">
            <a href="{{ route('index') }}" class="logo d-flex align-items-center me-auto">
                <h1 class="sitename">Surodakan</h1><span>.</span>
            </a>
            @include('partials.navbar') 
        </div>
    </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title accent-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Galeri Taman Surodakan</h1>
      </div>
    </div><!-- End Page Title -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
            @foreach($galleries as $gallery) <!-- Looping untuk setiap item di galleries -->
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item">
                    <img src="{{ asset('storage/' . $gallery->image) }}" class="img-fluid" alt="{{ $gallery->title }}">
                    <div class="portfolio-info">
                        <h4>{{ $gallery->title }}</h4>
                        <a href="{{ asset('storage/' . $gallery->image) }}" title="{{ $gallery->title }}" data-gallery="portfolio-gallery-app" class="glightbox preview-link">
                            <i class="bi bi-zoom-in"></i>
                        </a>
                    </div>
                </div><!-- End Portfolio Item -->
            @endforeach
          </div><!-- End Portfolio Container -->
        

        </div>

      </div>

    </section><!-- /Portfolio Section -->

  </main>

  @include('partials.footer')

<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <!-- Scripts -->
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>