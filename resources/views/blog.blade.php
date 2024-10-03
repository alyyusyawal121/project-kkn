

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>@yield('Company Bootstrap Template')</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  
      <!-- Favicons -->
      <link href="{{ url('public/img/favicon.png')}}" rel="icon">
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
<body>
    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container position-relative d-flex align-items-center">
            <a href="{{ route('index') }}" class="logo d-flex align-items-center me-auto">
                <h1 class="sitename">Company</h1><span>.</span>
            </a>
            @include('partials.navbar') 
        </div>
    </header>
    
    <main class="main">

<!-- Page Title -->
<div class="page-title accent-background">
  <div class="container d-lg-flex justify-content-between align-items-center">
    <h1 class="mb-2 mb-lg-0">Blog</h1>
    <nav class="breadcrumbs">
      <ol>
        <li><a href="index.html">Home</a></li>
        <li class="current">Blog</li>
      </ol>
    </nav>
  </div>
</div><!-- End Page Title -->

<!-- Blog Posts Section -->
<section id="blog-posts" class="blog-posts section">

  <div class="container">
    <div class="row gy-4">

      <div class="col-lg-4">
        <article class="position-relative h-100">

          <div class="post-img position-relative overflow-hidden">
            <img src="assets/img/blog/blog-1.jpg" class="img-fluid" alt="">
            <span class="post-date">December 12</span>
          </div>

          <div class="post-content d-flex flex-column">

            <h3 class="post-title">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia</h3>

            <div class="meta d-flex align-items-center">
              <div class="d-flex align-items-center">
                <i class="bi bi-person"></i> <span class="ps-2">John Doe</span>
              </div>
              <span class="px-3 text-black-50">/</span>
              <div class="d-flex align-items-center">
                <i class="bi bi-folder2"></i> <span class="ps-2">Politics</span>
              </div>
            </div>

            <p>
              Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.
            </p>

            <hr>

            <a href="{{route('blog-detail')}}" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

          </div>

        </article>
      </div><!-- End post list item -->

      <div class="col-lg-4">
        <article class="position-relative h-100">

          <div class="post-img position-relative overflow-hidden">
            <img src="assets/img/blog/blog-2.jpg" class="img-fluid" alt="">
            <span class="post-date">March 19</span>
          </div>

          <div class="post-content d-flex flex-column">

            <h3 class="post-title">Nisi magni odit consequatur autem nulla dolorem</h3>

            <div class="meta d-flex align-items-center">
              <div class="d-flex align-items-center">
                <i class="bi bi-person"></i> <span class="ps-2">Julia Parker</span>
              </div>
              <span class="px-3 text-black-50">/</span>
              <div class="d-flex align-items-center">
                <i class="bi bi-folder2"></i> <span class="ps-2">Economics</span>
              </div>
            </div>

            <p>
              Incidunt voluptate sit temporibus aperiam. Quia vitae aut sint ullam quis illum voluptatum et. Quo libero rerum voluptatem pariatur nam.
            </p>

            <hr>

            <a href="{{route('blog-detail')}}" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

          </div>

        </article>
      </div><!-- End post list item -->

      <div class="col-lg-4">
        <article class="position-relative h-100">

          <div class="post-img position-relative overflow-hidden">
            <img src="assets/img/blog/blog-3.jpg" class="img-fluid" alt="">
            <span class="post-date">June 24</span>
          </div>

          <div class="post-content d-flex flex-column">

            <h3 class="post-title">Possimus soluta ut id suscipit ea ut. In quo quia et soluta libero sit sint.</h3>

            <div class="meta d-flex align-items-center">
              <div class="d-flex align-items-center">
                <i class="bi bi-person"></i> <span class="ps-2">Maria Doe</span>
              </div>
              <span class="px-3 text-black-50">/</span>
              <div class="d-flex align-items-center">
                <i class="bi bi-folder2"></i> <span class="ps-2">Sports</span>
              </div>
            </div>

            <p>
              Aut iste neque ut illum qui perspiciatis similique recusandae non. Fugit autem dolorem labore omnis et. Eum temporibus fugiat voluptate enim tenetur sunt omnis.
            </p>

            <hr>

            <a href="{{route('blog-detail')}}" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

          </div>

        </article>
      </div><!-- End post list item -->

      <div class="col-lg-4">
        <article class="position-relative h-100">

          <div class="post-img position-relative overflow-hidden">
            <img src="assets/img/blog/blog-4.jpg" class="img-fluid" alt="">
            <span class="post-date">August 05</span>
          </div>

          <div class="post-content d-flex flex-column">

            <h3 class="post-title">Non rem rerum nam cum quo minus. Dolor distinctio deleniti explicabo eius exercitationem.</h3>

            <div class="meta d-flex align-items-center">
              <div class="d-flex align-items-center">
                <i class="bi bi-person"></i> <span class="ps-2">Maria Doe</span>
              </div>
              <span class="px-3 text-black-50">/</span>
              <div class="d-flex align-items-center">
                <i class="bi bi-folder2"></i> <span class="ps-2">Sports</span>
              </div>
            </div>

            <p>
              Aspernatur rerum perferendis et sint. Voluptates cupiditate voluptas atque quae. Rem veritatis rerum enim et autem. Saepe atque cum eligendi eaque iste omnis a qui.
            </p>

            <hr>

            <a href="{{route('blog-detail')}}" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

          </div>

        </article>
      </div><!-- End post list item -->

      <div class="col-lg-4">
        <article class="position-relative h-100">

          <div class="post-img position-relative overflow-hidden">
            <img src="assets/img/blog/blog-5.jpg" class="img-fluid" alt="">
            <span class="post-date">September 17</span>
          </div>

          <div class="post-content d-flex flex-column">

            <h3 class="post-title">Accusamus quaerat aliquam qui debitis facilis consequatur</h3>

            <div class="meta d-flex align-items-center">
              <div class="d-flex align-items-center">
                <i class="bi bi-person"></i> <span class="ps-2">John Parker</span>
              </div>
              <span class="px-3 text-black-50">/</span>
              <div class="d-flex align-items-center">
                <i class="bi bi-folder2"></i> <span class="ps-2">Politics</span>
              </div>
            </div>

            <p>
              In itaque assumenda aliquam voluptatem qui temporibus iusto nisi quia. Autem vitae quas aperiam nesciunt mollitia tempora odio omnis. Ipsa odit sit ut amet necessitatibus. Quo ullam ut corrupti autem consequuntur totam dolorem.
            </p>

            <hr>

            <a href="{{route('blog-detail')}}" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

          </div>

        </article>
      </div><!-- End post list item -->

      <div class="col-lg-4">
        <article class="position-relative h-100">

          <div class="post-img position-relative overflow-hidden">
            <img src="assets/img/blog/blog-6.jpg" class="img-fluid" alt="">
            <span class="post-date">December 07</span>
          </div>

          <div class="post-content d-flex flex-column">

            <h3 class="post-title">Distinctio provident quibusdam numquam aperiam aut</h3>

            <div class="meta d-flex align-items-center">
              <div class="d-flex align-items-center">
                <i class="bi bi-person"></i> <span class="ps-2">Julia White</span>
              </div>
              <span class="px-3 text-black-50">/</span>
              <div class="d-flex align-items-center">
                <i class="bi bi-folder2"></i> <span class="ps-2">Economics</span>
              </div>
            </div>

            <p>
              Expedita et temporibus eligendi enim molestiae est architecto praesentium dolores. Illo laboriosam officiis quis. Labore officia quia sit voluptatem nisi est dignissimos totam. Et voluptate et consectetur voluptatem id dolor magni impedit. Omnis dolores sit.
            </p>

            <hr>

            <a href="{{route('blog-detail')}}" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

          </div>

        </article>
      </div><!-- End post list item -->

    </div>
  </div>

</section><!-- /Blog Posts Section -->

<!-- Blog Pagination Section -->
<section id="blog-pagination" class="blog-pagination section">

  <div class="container">
    <div class="d-flex justify-content-center">
      <ul>
        <li><a href="#"><i class="bi bi-chevron-left"></i></a></li>
        <li><a href="#">1</a></li>
        <li><a href="#" class="active">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li>...</li>
        <li><a href="#">10</a></li>
        <li><a href="#"><i class="bi bi-chevron-right"></i></a></li>
      </ul>
    </div>
  </div>

</section><!-- /Blog Pagination Section -->
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
</body>
</html>

 
