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
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
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

<body class="index-page">

<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="#Main" class="logo d-flex align-items-center me-auto">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img class="logo" src="{{ asset('/img/logo.png')}}" alt="Logo">
            <h1 class="sitename" style="color: #8f1313">S</h1>
            <h1 class="sitename" style="color: black">wiss</h1>
            <h1 class="sitename" style="color: #8f1313">AI</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="#Main" class="active">Home</a></li>
                <!--class="dropdown" <i class="bi bi-chevron-down toggle-dropdown"></i>-->
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
    <!-- Hero Section -->
    <section id="Main" class="hero section dark-background">

        <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

            <div class="carousel-item active">
                <img src="{{ asset('/img/hero-carousel/hero-carousel-4.jpg')}}" alt="">
                <div class="carousel-container">
                    <h2>Welcome to SwissAI<br></h2>
                    <p>We provide customized AI solutions with Swiss precision and ethical responsibility. Our expertise
                        ensures that your business leverages artificial intelligence effectively and securely.</p>
                    <a href="{{ route('contact') }}" class="btn-get-started">Get Started</a>
                </div>
            </div><!-- End Carousel Item -->

            <div class="carousel-item">
                <img src="{{ asset('/img/hero-carousel/hero-carousel-7.jpg')}}" alt="">
                <div class="carousel-container">
                    <h2>Tailored AI for Your Business</h2>
                    <p>We design AI solutions that align perfectly with your company’s needs, ensuring maximum
                        efficiency and value. Our team of experts guarantees the highest standards of quality and
                        innovation.</p>
                    <a href="{{ route('contact') }}" class="btn-get-started">Get Started</a>
                </div>
            </div><!-- End Carousel Item -->

            <div class="carousel-item">
                <img src="{{ asset('/img/hero-carousel/hero-carousel-5.jpg')}}" alt="">
                <div class="carousel-container">
                    <h2>Reliable & Ethical AI</h2>
                    <p>Our approach prioritizes transparency, security, and ethical AI development. We empower
                        businesses with responsible and high-performance AI technologies tailored to their specific
                        challenges.</p>
                    <a href="{{ route('contact') }}" class="btn-get-started">Get Started</a>
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
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>About</h2>
            <p>Who We Are<br></p>
        </div><!-- End Section Title -->
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                    <p>
                        We specialize in creating tailored AI solutions with Swiss precision and a strong ethical
                        foundation. Our mission is to help businesses harness the power of AI with trust and
                        transparency.
                    </p>
                    <ul>
                        <li><i class="bi bi-check2-circle"></i> <span>Cutting-edge AI solutions customized for your business needs.</span>
                        </li>
                        <li><i class="bi bi-check2-circle"></i> <span>Commitment to ethical AI and data privacy compliance.</span>
                        </li>
                        <li><i class="bi bi-check2-circle"></i> <span>Seamless integration with existing business processes.</span>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <p>Our team of AI experts and consultants ensures that every solution is designed with precision,
                        security, and innovation. We collaborate closely with clients to deliver impactful and
                        responsible AI-driven transformations.</p>
                    <a href="{{ route('about') }}" class="read-more"><span>Read More</span><i
                            class="bi bi-arrow-right"></i></a>
                </div>

            </div>

        </div>


    </section><!-- /About Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section light-background">

        <div class="container" data-aos="fade-up">

            <div class="row gy-4">

                <div class="col-xl-2 col-md-3 col-6 client-logo">
                    <img src="{{ asset('/img/clients/client-1.png')}}" class="img-fluid" alt="">
                </div><!-- End Client Item -->

                <div class="col-xl-2 col-md-3 col-6 client-logo">
                    <img src="{{ asset('/img/clients/client-2.png')}}" class="img-fluid" alt="">
                </div><!-- End Client Item -->

                <div class="col-xl-2 col-md-3 col-6 client-logo">
                    <img src="{{ asset('/img/clients/client-3.png')}}" class="img-fluid" alt="">
                </div><!-- End Client Item -->

                <div class="col-xl-2 col-md-3 col-6 client-logo">
                    <img src="{{ asset('/img/clients/client-4.png')}}" class="img-fluid" alt="">
                </div><!-- End Client Item -->

                <div class="col-xl-2 col-md-3 col-6 client-logo">
                    <img src="{{ asset('/img/clients/client-5.png')}}" class="img-fluid" alt="">
                </div><!-- End Client Item -->

                <div class="col-xl-2 col-md-3 col-6 client-logo">
                    <img src="{{ asset('/img/clients/client-6.png')}}" class="img-fluid" alt="">
                </div><!-- End Client Item -->

            </div>

        </div>

    </section><!-- /Clients Section -->

    <!-- Services Section -->
    <section id="services" class="services section">
        <div class="container">
            <div class="row gy-4">
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item d-flex position-relative h-100">
                        <i class="bi bi-cpu icon flex-shrink-0"></i>
                        <div>
                            <h4 class="title"><a href="{{ route('service') }}?service=custom-solutions"
                                                 class="stretched-link">Custom AI Solutions</a></h4>
                            <p class="description">We design and develop AI-driven software tailored to your business
                                needs, ensuring efficiency, scalability, and Swiss precision.</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item d-flex position-relative h-100">
                        <i class="bi bi-chat-square-text icon flex-shrink-0"></i>
                        <div>
                            <h4 class="title"><a href="{{ route('service') }}?service=chatbots" class="stretched-link">AI-Powered
                                    Chatbots</a></h4>
                            <p class="description">Enhance customer interactions with intelligent chatbots that provide
                                personalized, real-time support and automation.</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item d-flex position-relative h-100">
                        <i class="bi bi-shield-lock icon flex-shrink-0"></i>
                        <div>
                            <h4 class="title"><a href="{{ route('service') }}?service=security" class="stretched-link">AI
                                    Security & Compliance</a></h4>
                            <p class="description">We ensure ethical AI implementations, following strict data security
                                and regulatory compliance standards.</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item d-flex position-relative h-100">
                        <i class="bi bi-bar-chart-line icon flex-shrink-0"></i>
                        <div>
                            <h4 class="title"><a href="{{ route('service') }}?service=analytics" class="stretched-link">AI-Powered
                                    Analytics</a></h4>
                            <p class="description">Gain actionable insights through AI-driven data analysis, predictive
                                modeling, and business intelligence solutions.</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-item d-flex position-relative h-100">
                        <i class="bi bi-tools icon flex-shrink-0"></i>
                        <div>
                            <h4 class="title"><a href="{{ route('service') }}?service=fine-tuning"
                                                 class="stretched-link">AI Model Fine-Tuning</a></h4>
                            <p class="description">Optimize and fine-tune AI models to improve performance, accuracy,
                                and efficiency tailored to your specific business case.</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-item d-flex position-relative h-100">
                        <i class="bi bi-people icon flex-shrink-0"></i>
                        <div>
                            <h4 class="title"><a href="{{ route('service') }}?service=strategy" class="stretched-link">AI
                                    Consulting & Strategy</a></h4>
                            <p class="description">Leverage expert guidance to define, implement, and scale AI
                                initiatives aligned with your business objectives.</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->
            </div>
        </div>
    </section><!-- /Services Section -->
</main>

<footer id="footer" class="footer dark-background">
    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-6 col-md-6 footer-about">
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

            <div class="col-lg-4 col-md-12 footer-newsletter">
                <h4>Stay Updated</h4>
                <p>Subscribe to receive the latest updates on AI innovations, ethical practices, and new service
                    offerings.</p>
                <form action="forms/newsletter.php" method="post" class="php-email-form">
                    <div class="newsletter-form"><input type="email" name="email"><input type="submit"
                                                                                         value="Subscribe"></div>
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your subscription request has been sent. Thank you!</div>
                </form>
            </div>


        </div>
    </div>

    <div class="container copyright text-center mt-4">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">, BootStrap</strong> <span>All Rights Reserved</span>
        </p>

    </div>

</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

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
