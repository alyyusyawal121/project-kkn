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
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- CSS Files -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{ asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{ asset('css/main.css')}}" rel="stylesheet">

</head>

<body class="services-page">

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
        <h1 class="mb-2 mb-lg-0">Program Desa</h1>
      </div>
    </div><!-- End Page Title -->

    <!-- Blog Posts Section -->
    <section id="blog-posts" class="blog-posts section light-background">
      <div class="container">
        <div class="row gy-4">
          @foreach ($programs as $program) <!-- Loop through all programs -->
          <div class="col-lg-6">
            <article class="service-item position-relative h-100">
              <div class="post-img position-relative overflow-hidden" style="height: 25vh;">
                @if(isset($program->images[0])) <!-- Cek jika ada gambar -->
                  <img src="{{ asset('storage/' . json_decode($program->images)[0]) }}" 
                       class="service-item__image img-fluid" 
                       alt="{{ $program->title }}" 
                       style="object-fit: cover; width: 100%; height: 100%;">
                @else
                  <img src="URL_GAMBAR_DEFAULT" alt="Gambar Default" 
                       class="service-item__image img-fluid" 
                       style="object-fit: cover; width: 100%; height: 100%;">
                @endif
              </div>

              <div class="post-content d-flex flex-column">
                <h2 class="post-title">
                  <a href="#" class="post-title">{{ $program->title }}</a>
                </h2>

                <div class="meta d-flex align-items-center">
                  <li class="d-flex align-items-center">
                    <a href="blog-details.html">
                      <time datetime="{{ $program->created_at->toIso8601String() }}">{{ $program->formatted_date }}</time>
                    </a>
                  </li>
                </div>

                <p>{{ Str::limit($program->content, 1000) }}</p>

                <hr>
              </div>
            </article>
          </div><!-- End col-lg-6 (Post card) -->
          @endforeach
        </div><!-- End row -->
      </div>
    </section><!-- End Blog Posts Section -->

  </main>

  @include('partials.footer')
  
  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>
    
  <!-- Scripts -->
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
