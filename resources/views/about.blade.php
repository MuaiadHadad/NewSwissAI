@extends('layouts.app')

@section('title', 'About')

@section('content')

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
@endsection
