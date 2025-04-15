@extends('layouts.app')

@section('title', 'Contact')

@section('content')
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
                              <input type="tel" id="phone" name="phone" class="form-control styled-phone"  placeholder="* Phone number"  required>
                              <div class="invalid-feedback">
                                  Please enter a valid phone number.
                              </div>
                          </div>
                          <div class="form-group mb-3">
                              <textarea name="requirements" rows="4" class="form-control" placeholder="* Describe your project requirements" required></textarea>
                          </div>

                          <div class="d-flex align-items-center mb-3">
                              <label class="btn btn-outline-danger me-2 mb-0">
                                  <i class="bi bi-upload me-1"></i> Upload File
                                  <input type="file" name="cert_upload" class="d-none" onchange="updateFileName(this)">
                              </label>
                              <span id="file-name" class="text-muted fst-italic">Max 5MB</span>
                          </div>

                          <div class="form-check mb-3">
                              <label class="form-check-label" for="nda"><input class=" custom-check" type="checkbox" name="nda" id="nda"> I want to protect my data by signing an NDA.</label>
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
@endsection
