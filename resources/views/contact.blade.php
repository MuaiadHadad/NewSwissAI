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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet" />

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

<body class="contact-page">

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
        <h1 class="mb-2 mb-lg-0">Contact</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li class="current">Contact</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Contact Section -->
      <section id="contact-enhanced" class="contact section">
          <div class="container">
              <div class="toast-container position-fixed end-0 p-3" style="z-index: 1060; top:17%">
                  @if(session('success'))
                      <div id="alert-success" class="toast show align-items-center text-bg-success border-0 mb-2 animate__animated animate__fadeInDown" role="alert">
                          <div class="d-flex">
                              <div class="toast-body">
                                  {{ session('success') }}
                              </div>
                          </div>
                      </div>
                  @endif
                      @if ($errors->has('cert_upload') && str_contains($errors->first('cert_upload'), 'must not be greater'))
                          <div id="alert-cert-size" class="toast show align-items-center text-bg-warning border-0 mb-2 animate__animated animate__fadeInDown" role="alert">
                              <div class="d-flex">
                                  <div class="toast-body">
                                      <i class="bi bi-exclamation-triangle-fill me-2"></i>
                                      The uploaded file is too large. Please upload a file under 5MB.
                                  </div>
                              </div>
                          </div>
                      @endif
                  @if(session('error'))
                      <div id="alert-error" class="toast show align-items-center text-bg-danger border-0 mb-2 animate__animated animate__fadeInDown" role="alert">
                          <div class="d-flex">
                              <div class="toast-body">
                                  {{ session('error') }}
                              </div>
                          </div>
                      </div>
                  @endif
              </div>
              <div class="row align-items-center justify-content-center">

                  <!-- Left side: Contact info and steps -->
                  <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                      <h2 class="mb-4 fw-bold text-dark display-5">
                          Contact us<span class="text-danger">.</span>
                      </h2>

                      <h5 class="mb-4 text-dark">What happens next?</h5>

                      <ul class="list-unstyled steps-list ps-0 mb-5">
                          <li class="d-flex mb-3" data-aos="fade-up" data-aos-delay="150">
                              <div class="step-circle me-3">1</div>
                              <span class="text-dark">An expert contacts you after having analyzed your requirements;</span>
                          </li>
                          <li class="d-flex mb-3" data-aos="fade-up" data-aos-delay="250">
                              <div class="step-circle me-3">2</div>
                              <span class="text-dark">If needed, we sign an NDA to ensure the highest privacy level;</span>
                          </li>
                          <li class="d-flex mb-3" data-aos="fade-up" data-aos-delay="350">
                              <div class="step-circle me-3">3</div>
                              <span class="text-dark">We submit a comprehensive project proposal with estimates, timelines, CVs, etc.</span>
                          </li>
                      </ul>
                      <div class="ratings d-flex gap-5 mt-5" data-aos="fade-up" data-aos-delay="450">
                      <div class="info-item d-flex gap-5">
                          <i class="bi bi-telephone flex-shrink-0"></i>
                          <div>
                              <h3>Call Us</h3>
                              <p>+1 5589 55488 55</p>
                          </div>
                          <i class="bi bi-envelope flex-shrink-0"></i>
                          <div>
                              <h3>Email Us</h3>
                              <p>info@example.com</p>
                          </div>
                      </div><!-- End Info Item -->
                      </div>
                  </div>


                  <!-- Right side: Contact form -->
                  <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                      <form action="{{ route('contact.submit') }}" method="POST" enctype="multipart/form-data" class="php-email-form p-4 bg-white rounded shadow">
                              @csrf
                          <div class="form-group mb-3">
                              <input type="text" name="name" class="form-control" placeholder="Name">
                          </div>
                          <div class="form-group mb-3">
                              <input type="email" name="email" class="form-control" placeholder="* Corporate E-mail" required>
                          </div>
                          <div class="form-group mb-3">
                              <input type="number" name="phone" class="form-control" placeholder="* Phone number" required>
                          </div>
                          <div class="form-group mb-3">
                              <textarea name="requirements" rows="4" class="form-control" placeholder="* Describe your project requirements" required></textarea>
                          </div>

                          <div class="d-flex align-items-center mb-3">
                              <label class="btn btn-outline-danger me-2 mb-0">
                                  <i class="bi bi-upload me-1"></i> Upload File
                                  <input type="file" name="cert_upload" class="d-none" onchange="updateFileName(this)">
                              </label>
                              <span id="file-name" class="text-muted fst-italic">In Max 5M</span>
                          </div>

                          <div class="form-check mb-3">
                              <input class="form-check-input custom-check" type="checkbox" name="nda" id="nda">
                              <label class="form-check-label" for="nda">I want to protect my data by signing an NDA.</label>
                          </div>

                          <div class="d-flex align-items-center">
                              <button type="submit" class="btn btn-warning me-3">Send request</button>
                              <span class="d-flex align-items-center text-success"><i class="bi bi-shield-check me-1"></i> Your privacy is protected</span>
                          </div>
                      </form>
                  </div>

              </div>
          </div>
      </section>
      <!-- /Contact Section -->

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
