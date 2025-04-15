@extends('layouts.app')

@section('title', 'Services')

@section('content')

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Services</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li class="current">Services</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

      <section id="service-details" class="service-details section">
          <div class="container">
              <div class="row gy-4">
                  <!-- Sidebar with list of services -->
                  <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                      <div class="services-list">
                          <a href="javascript:void(0)" class="active" onclick="showService('custom-ai')">Custom AI Development</a>
                          <a href="javascript:void(0)" onclick="showService('analytics')">AI-Powered Analytics</a>
                          <a href="javascript:void(0)" onclick="showService('chatbots')">AI-Powered Chatbots</a>
                          <a href="javascript:void(0)" onclick="showService('fine-tuning')">AI Model Fine-Tuning</a>
                          <a href="javascript:void(0)" onclick="showService('ml-consulting')">Machine Learning Consulting</a>
                          <a href="javascript:void(0)" onclick="showService( 'security')">AI Security & Compliance</a>
                          <a href="javascript:void(0)" onclick="showService('automation')">Automation Solutions</a>
                          <a href="javascript:void(0)" onclick="showService('strategy')">AI Consulting & Strategy</a>
                          <a href="javascript:void(0)" onclick="showService('custom-solutions')">Custom AI Solutions</a>
                      </div>

                      <h4>Explore Our AI Services</h4>
                      <p>We offer a complete suite of AI-driven services tailored to your business goals, from custom solutions to secure and ethical deployment.</p>
                  </div>

                  <!-- Detailed content of the selected service -->
                  <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                      <div id="service-content" >
                          <img src="{{ asset('img/services.jpg') }}" alt="Highlighted Service" class="img-fluid services-img">
                          <h3>Custom AI Development</h3>
                          <p>We build AI systems from the ground up, tailored to your unique business processes and data, enabling automation and intelligent decision-making.</p>
                          <ul>
                              <li><i class="bi bi-check-circle"></i> End-to-end AI solution architecture.</li>
                              <li><i class="bi bi-check-circle"></i> Custom model training and deployment.</li>
                              <li><i class="bi bi-check-circle"></i> Integration with existing software ecosystems.</li>
                          </ul>
                      </div>
                  </div>

              </div>
          </div>
      </section>
@endsection
