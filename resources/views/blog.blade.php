<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>SwissAI</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{ asset('/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{ asset('/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('/css/main.css')}}" rel="stylesheet">


    <!-- =======================================================
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body class="blog-page">

<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="{{ route('index') }}" class="logo d-flex align-items-center me-auto">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img class="logo" src="{{ asset('/img/logo.png')}}" alt="Logo">
            <h1 class="sitename" style="color: #8f1313">S</h1>
            <h1 class="sitename" style="color: black">wiss</h1>
            <h1 class="sitename" style="color: #8f1313">AI</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ route('index') }}" >Home</a></li>
                <li><a href="{{ route('about') }}"><span>About Us</span></a>
                </li>
                <li><a href="{{ route('service') }}">Services</a></li>
                <li><a class="active" href="{{ route('blog') }}">Blog</a></li>
                <li><a href="{{ route('careers') }}">Careers</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
        <a class="btn-getstarted" href="{{ route('contact') }}">Contact</a>
    </div>
</header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Blog</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li class="current">Blog</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <div class="container">
      <div class="row">

        <div class="col-lg-auto" data-aos="fade-up" data-aos-delay="100">

          <!-- Blog Posts Section -->
            <section id="blog-posts" class="blog-posts section">
                <div class="container">

                    <!-- Search Widget -->
                    <div class="search-widget widget-item col-lg-4" style="margin-left: auto;">
                        <form action="{{ route('blog') }}" method="GET">
                            <input type="text" name="search" placeholder="Search..." value="{{ request('search') }}">
                            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                        </form>
                    </div>


                    <div class="row gy-4">
                        @foreach($posts as $post)
                            <div class="col-lg-auto">
                                <article>
                                    <div class="row align-items-center">

                                        <!-- Imagem à esquerda -->
                                        <div class="col-lg-6">
                                            <div class="post-img">
                                                <img src="{{ asset('storage/' . $post->image_path) }}" alt="" class="img-fluid">
                                            </div>
                                        </div>

                                        <!-- Texto à direita -->
                                        <div class="col-lg-6">
                                            <h2 class="title">
                                                <a href="{{ route('details', $post->id) }}">{{ $post->title }}</a>
                                            </h2>

                                            <div class="meta-top">
                                                <ul>
                                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#">{{ $post->author ?? 'Unknown' }}</a></li>
                                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="{{ $post->published_at }}">{{ \Carbon\Carbon::parse($post->published_at)->format('M d, Y') }}</time></a></li>
                                                </ul>
                                            </div>

                                            <div class="content">
                                                <p>{{ Str::limit($post->excerpt ?? strip_tags($post->content), 150) }}</p>
                                                <div class="read-more">
                                                    <a href="{{ route('details', $post->id) }}">Read More</a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </article>
                            </div>
                        @endforeach
                    </div>

                </div>
            </section>
            <!-- /Blog Posts Section -->

            <!-- Blog Pagination Section -->
            <section id="blog-pagination" class="blog-pagination section">
                <div class="container">
                    <div class="d-flex justify-content-center">
                        <ul>
                            {{-- Previous Page --}}
                            @if ($posts->onFirstPage())
                                <li><span><i class="bi bi-chevron-left"></i></span></li>
                            @else
                                <li><a href="{{ $posts->previousPageUrl() }}"><i class="bi bi-chevron-left"></i></a></li>
                            @endif

                            {{-- Page Numbers --}}
                            @foreach ($posts->getUrlRange(1, $posts->lastPage()) as $page => $url)
                                @if ($page == $posts->currentPage())
                                    <li><a class="active">{{ $page }}</a></li>
                                @elseif ($page == 1 || $page == $posts->lastPage() || abs($page - $posts->currentPage()) <= 1)
                                    <li><a href="{{ $url }}">{{ $page }}</a></li>
                                @elseif ($page == $posts->currentPage() - 2 || $page == $posts->currentPage() + 2)
                                    <li><span>...</span></li>
                                @endif
                            @endforeach

                            {{-- Next Page --}}
                            @if ($posts->hasMorePages())
                                <li><a href="{{ $posts->nextPageUrl() }}"><i class="bi bi-chevron-right"></i></a></li>
                            @else
                                <li><span><i class="bi bi-chevron-right"></i></span></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </section>
            <!-- /Blog Pagination Section -->

        </div>



      </div>
    </div>

  </main>

<footer id="footer" class="footer dark-background">

    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6 footer-about">
                <a href="index.html" class="logo d-flex align-items-center">
                    <span class="sitename" style="color: #8f1313">S</span>
                    <span class="sitename" style="color: black">wiss</span>
                    <span class="sitename" style="color: #8f1313">AI</span>
                </a>
                <div class="footer-contact pt-3">
                    <p>Rue de l'Innovation 12</p>
                    <p>Geneva, Switzerland</p>
                    <p class="mt-3"><strong>Phone:</strong> <span>+41 22 123 45 67</span></p>
                    <p><strong>Email:</strong> <span>contact@youraiagency.com</span></p>
                </div>
                <div class="social-links d-flex mt-4">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('service') }}">Services</a></li>
                    <li><a href="{{ route('blog') }}">Blog</a></li>
                    <li><a href="{{ route('careers') }}">Careers</a></li>
                    <li><a href="{{ route('contact') }}">Contact us</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Our Services</h4>
                <ul>
                    <li><a href="#">Custom AI Development</a></li>
                    <li><a href="#">AI Chatbots</a></li>
                    <li><a href="#">Machine Learning Consulting</a></li>
                    <li><a href="#">AI-Powered Analytics</a></li>
                    <li><a href="#">Automation Solutions</a></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-12 footer-newsletter">
                <h4>Stay Updated</h4>
                <p>Subscribe to receive the latest updates on AI innovations, ethical practices, and new service offerings.</p>
                <form action="forms/newsletter.php" method="post" class="php-email-form">
                    <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your subscription request has been sent. Thank you!</div>
                </form>
            </div>


        </div>
    </div>

    <div class="container copyright text-center mt-4">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">,</strong> <span>All Rights Reserved</span></p>

    </div>

</footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('/vendor/swiper/swiper-bundle.min.js') }}"></script>


  <!-- Main JS File -->
  <script src="{{ asset('/js/main.js')}}"></script>

</body>

</html>
