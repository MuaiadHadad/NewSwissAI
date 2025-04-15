@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Hero Section -->
    <section id="Main" class="hero section dark-background">

        <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

            <div class="carousel-item active">
                <img src="{{ asset('/img/hero-carousel/hero-carousel-4.jpg')}}" alt="">
                <div class="carousel-container">
                    <h2>Welcome to GlobAI<br></h2>
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

                    <div class="logo-carousel">
                @for ($i = 0; $i < 2; $i++) <!-- duplicação -->
                <div class="col-xl-2 col-md-3 col-6 client-logo">
                    <img src="{{ asset('/img/clients/client-1.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-xl-2 col-md-3 col-6 client-logo">
                    <img src="{{ asset('/img/clients/client-2.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-xl-2 col-md-3 col-6 client-logo">
                    <img src="{{ asset('/img/clients/client-3.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-xl-2 col-md-3 col-6 client-logo">
                    <img src="{{ asset('/img/clients/client-4.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-xl-2 col-md-3 col-6 client-logo">
                    <img src="{{ asset('/img/clients/client-5.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-xl-2 col-md-3 col-6 client-logo">
                    <img src="{{ asset('/img/clients/client-6.png') }}" class="img-fluid" alt="">
                </div>
                @endfor
                    </div>

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
@endsection




