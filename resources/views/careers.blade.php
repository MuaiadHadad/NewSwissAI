@extends('layouts.app')

@section('title', 'Careers')

@section('content')

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
          <div class="text-center mt-5" data-aos="zoom-in" data-aos-delay="500">
              <a href="{{ route('apply') }}" class="btn btn-danger btn-lg px-4 shadow">
                  <i class="bi bi-send me-2"></i> Apply Now
              </a>
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


      </section>
      <!-- /Starter Section Section -->
@endsection
