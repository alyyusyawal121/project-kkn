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
  <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">

  <!-- CSS Files -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/main.css') }}" rel="stylesheet">

</head>

<body class="portfolio-details-page">

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
        <h1 class="mb-2 mb-lg-0">Blog Details</h1>
      </div>
    </div><!-- End Page Title -->

    <div class="container">
      <div class="row">

        <div class="col-lg-8">
          <!-- Blog Details Section -->
          <section id="blog-details" class="blog-details section">
            <div class="container">
              <article class="article">
                <div class="post-img">
                  <img src="{{ asset('assets/img/blog/blog-1.jpg') }}" alt="" class="img-fluid">
                </div>

                <h2 class="title text-center capitalize">{{ $post->title }}</h2>
                </br>
                <div class="post-img position-relative d-flex justify-content-center align-items-center overflow-hidden">
                  @if($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" style="max-width: 100%; height: auto; display: block; margin: auto;" alt="{{ $post->title }}">
                  @endif
                  <span class="post-date"></span>
                </div>                

                <div class="meta-top">
                  <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-person"></i>Administrator</li>
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i><time datetime="{{ $post->created_at->toIso8601String() }}">{{ $post->formatted_date }}</time></li>
                  </ul>
                </div>

                <div class="content justify-text">
                  {!! e($post->content) !!} 
                </div>
              
              
              </article>
            </div>
          </section><!-- /Blog Details Section -->
        </div>

        <div class="col-lg-4 sidebar">
          <div class="widgets-container">
            <!-- Blog Author Widget -->
            {{-- <div class="blog-author-widget widget-item">
              <div class="d-flex flex-column align-items-center">
                <img src="{{ asset('assets/img/blog/blog-author.jpg') }}" class="rounded-circle flex-shrink-0" alt="">
                <h4>Administrator</h4>
                <div class="social-links">
                  <a href="https://x.com/#"><i class="bi bi-twitter"></i></a>
                  <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                  <a href="https://instagram.com/#"><i class="bi bi-instagram"></i></a>
                  <a href="https://linkedin.com/#"><i class="bi bi-linkedin"></i></a>
                </div>
                <p>
                  Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde voluptas.
                </p>
              </div>
            </div><!--/Blog Author Widget --> --}}

            <!-- Recent Posts Widget -->
            <div class="recent-posts-widget widget-item">
              <h3 class="widget-title">Recent Posts</h3>
              @foreach ($recentPosts as $post)
                <div class="post-item">
                  <div class="post-content d-flex flex-column">
                    <h3 class="post-title">{{ $post->title }}</h3>
                    <div class="meta d-flex align-items-center">
                      <div class="d-flex align-items-center">
                        <li class="d-flex align-items-center">
                          <a href="{{ route('blog-detail', $post->id) }}">
                            <time datetime="{{ $post->created_at->toIso8601String() }}">{{ $post->created_at->format('d M Y') }}</time>
                          </a>
                        </li>
                      </div>
                    </div>
                    <p>{{ Str::limit($post->content, 150) }}</p> <!-- Tampilkan ringkasan konten -->
                    <hr>
                    <a href="{{ route('blog-detail', $post->id) }}" class="readmore">Read More</a>
                  </div>
                </div><!-- End recent post item-->
              @endforeach
            </div><!-- End recent-posts-widget -->
          </div>
        </div>

      </div>
    </div>
  </main>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('partials.footer')

  <!-- Scripts -->
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
