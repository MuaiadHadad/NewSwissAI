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

  <!-- ======================================================
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="starter-page-page">

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
                <li><a href="{{ route('blog') }}">Blog</a></li>
                <li><a class="active" href="{{ route('careers') }}">Careers</a></li>
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
        <h1 class="mb-2 mb-lg-0">Careers</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li class="current">Careers</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->
<!-- section of info -->
      <section id="blog-posts" class="blog-posts section">
          <div class="container " data-aos="fade-up" data-aos-delay="100">
              <article class="article">
                  <h2 class="title">Join SwissAI – Where AI Meets Creativity</h2>
                  <div class="content">
                      <p>
                          At SwissAI, we are redefining the boundaries between artificial intelligence, fashion, and personalization. Our mission is to deliver intelligent, immersive digital experiences that feel human — starting with hyper-personalized 3D avatars powered by generative AI.

                          We’re a team of forward-thinkers, designers, engineers, and innovators on a mission to transform the way people interact with digital fashion and identity.
                      </p>
                      <h4><i class="bi bi-rocket text-danger"></i> Why SwissAI?</h4>
                      <ul class="list-unstyled">
                          <li><i class="bi bi-check-circle text-success me-2"></i> Work with cutting-edge technologies in computer vision, 3D modeling, and AI.</li>
                          <li><i class="bi bi-check-circle text-success me-2"></i> Build an innovative solution from the ground up, used by global brands.</li>
                          <li><i class="bi bi-check-circle text-success me-2"></i> Collaborate with a passionate, agile, and international team.</li>
                          <li><i class="bi bi-check-circle text-success me-2"></i> Share your ideas in a dynamic startup environment where they matter.</li>
                          <li><i class="bi bi-check-circle text-success me-2"></i> Enjoy hybrid/remote work flexibility and autonomy.</li>
                      </ul>
                  </div><!-- End post content -->

              </article>

          </div>
      </section>
      <!-- end section of info -->
    <!-- Starter Section Section -->
      <section id="team" class="team section">
          <div class="container">
              <div class="row gy-4">
                  <h4 class="title">We’re Hiring!</h4>

                  <!-- NLP Developer -->
                  <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                      <div class="team-member d-flex align-items-start">
                          <div class="pic"><img src="{{asset('/img/NLP.jpg')}}" class="img-fluid" alt=""></div>
                          <div class="member-info">
                              <h4>NLP Developer</h4>
                              <span>Natural Language Processing</span>
                              <p>Design and implement language models for understanding user input, intent classification, and smart text generation for our AI-driven systems.</p>
                          </div>
                      </div>
                  </div>

                  <!-- LLMs Developer -->
                  <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                      <div class="team-member d-flex align-items-start">
                          <div class="pic"><img src="{{asset('/img/LLMs.png')}}" class="img-fluid" alt=""></div>
                          <div class="member-info">
                              <h4>LLMs Engineer</h4>
                              <span>Large Language Models</span>
                              <p>Fine-tune and deploy LLMs such as GPT, LLaMA or Claude for real-time applications including smart avatars and personalized chat experiences.</p>
                          </div>
                      </div>
                  </div>

                  <!-- AI Engineer -->
                  <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                      <div class="team-member d-flex align-items-start">
                          <div class="pic"><img src="{{asset('/img/aiengineer.jpg')}}" class="img-fluid" alt=""></div>
                          <div class="member-info">
                              <h4>AI Engineer</h4>
                              <span>Core AI Development</span>
                              <p>Build core AI components including 3D body modeling, avatar generation, and real-time decision systems using Python and deep learning.</p>
                          </div>
                      </div>
                  </div>

                  <!-- Data Analyst -->
                  <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                      <div class="team-member d-flex align-items-start">
                          <div class="pic"><img src="{{asset('/img/DataAnalysis.jpg')}}" class="img-fluid" alt=""></div>
                          <div class="member-info">
                              <h4>Data Analyst</h4>
                              <span>User Data & Business Insights</span>
                              <p>Analyze usage patterns, user behavior, and business KPIs to drive decisions across our AI platform. Build dashboards and actionable reports.</p>
                          </div>
                      </div>
                  </div>

              </div>
          </div>
          <div class="text-center mt-5" data-aos="zoom-in" data-aos-delay="500">
              <a href="{{ route('apply') }}" class="btn btn-danger btn-lg px-4 shadow">
                  <i class="bi bi-send me-2"></i> Apply Now
              </a>
          </div>

      </section>
      <!-- /Starter Section Section -->

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
