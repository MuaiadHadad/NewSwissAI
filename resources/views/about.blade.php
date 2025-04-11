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

<body class="about-page ">

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
                <li><a href="{{ route('about') }}" class="active"><span>About Us</span></a>
                </li>
                <li><a href="{{ route('service') }}">Services</a></li>
                <li><a href="{{ route('blog') }}">Blog</a></li>
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
        <h1 class="mb-2 mb-lg-0">About</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li class="current">About</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

      <!-- About Us - Section 2 -->
      <section id="about-2" class="about-2 section">

          <div class="container" data-aos="fade-up">

              <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">

                  <div class="col-lg-5">
                      <div class="about-img">
                          <img src="{{ asset('/img/about-portrait.jpg')}}" class="img-fluid" alt="Our Team">
                      </div>
                  </div>

                  <div class="col-lg-7">
                      <h3 class="pt-0 pt-lg-5">Custom and Ethical Artificial Intelligence Solutions</h3>

                      <!-- Tabs -->
                      <ul class="nav nav-pills mb-3">
                          <li><a class="nav-link active" data-bs-toggle="pill" href="#about-2-tab1">Our Approach</a></li>
                          <li><a class="nav-link" data-bs-toggle="pill" href="#about-2-tab2">Our Services</a></li>
                          <li><a class="nav-link" data-bs-toggle="pill" href="#about-2-tab3">Ethical Commitment</a></li>
                      </ul><!-- End Tabs -->

                      <!-- Tab Content -->
                      <div class="tab-content">

                          <div class="tab-pane fade show active" id="about-2-tab1">
                              <p class="fst-italic">We create tailor-made AI solutions to meet the unique needs of each client, ensuring efficiency, accuracy, and ethics in development.</p>

                              <div class="d-flex align-items-center mt-4">
                                  <i class="bi bi-check2"></i>
                                  <h4>Custom AI Models for Every Industry</h4>
                              </div>
                              <p>We develop and adjust AI models for different industries, ensuring high levels of adaptation and accuracy.</p>

                              <div class="d-flex align-items-center mt-4">
                                  <i class="bi bi-check2"></i>
                                  <h4>Seamless Integration with Your Systems</h4>
                              </div>
                              <p>Our solutions are designed to integrate seamlessly into your digital ecosystem, making implementation easy.</p>

                              <div class="d-flex align-items-center mt-4">
                                  <i class="bi bi-check2"></i>
                                  <h4>Expert Team Focused on Continuous Innovation</h4>
                              </div>
                              <p>We work with the best talents and utilize cutting-edge technology to ensure the best results for your business.</p>
                          </div><!-- End Tab 1 Content -->

                          <div class="tab-pane fade" id="about-2-tab2">
                              <p class="fst-italic">We offer a comprehensive range of AI services for companies seeking innovation and sustainable growth.</p>

                              <div class="d-flex align-items-center mt-4">
                                  <i class="bi bi-check2"></i>
                                  <h4>Development of Intelligent Chatbots</h4>
                              </div>
                              <p>We implement virtual assistants that enhance customer service and optimize internal processes.</p>

                              <div class="d-flex align-items-center mt-4">
                                  <i class="bi bi-check2"></i>
                                  <h4>Process Optimization with Intelligent Automation</h4>
                              </div>
                              <p>We automate repetitive and complex tasks with AI, increasing productivity and reducing operational costs.</p>

                              <div class="d-flex align-items-center mt-4">
                                  <i class="bi bi-check2"></i>
                                  <h4>AI Training and Consulting</h4>
                              </div>
                              <p>We help your company understand and implement AI effectively and securely, ensuring better outcomes.</p>
                          </div><!-- End Tab 2 Content -->

                          <div class="tab-pane fade" id="about-2-tab3">
                              <p class="fst-italic">We believe in responsible and transparent artificial intelligence, focused on data privacy and security.</p>

                              <div class="d-flex align-items-center mt-4">
                                  <i class="bi bi-check2"></i>
                                  <h4>Compliance with International Standards</h4>
                              </div>
                              <p>We ensure that all our solutions adhere to regulations such as GDPR, ensuring privacy and data protection.</p>

                              <div class="d-flex align-items-center mt-4">
                                  <i class="bi bi-check2"></i>
                                  <h4>Explainable and Transparent AI</h4>
                              </div>
                              <p>Our models are developed with transparency, allowing clients to understand how decisions are made.</p>

                              <div class="d-flex align-items-center mt-4">
                                  <i class="bi bi-check2"></i>
                                  <h4>Commitment to Positive Social Impact</h4>
                              </div>
                              <p>We strive to develop solutions that not only benefit businesses but also society as a whole.</p>
                          </div><!-- End Tab 3 Content -->

                      </div>

                  </div>

              </div>

          </div>

      </section><!-- /About Us - Section 2 -->



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
