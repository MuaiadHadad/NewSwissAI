@extends('layouts.app')

@section('title', 'Blog')

@section('content')
    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Blog Details</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('index') }}">Home</a></li>
              <li><a href="{{ route('blog') }}">Blog</a></li>
            <li class="current">Blog Details</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <div class="container">
      <div class="row">

        <div class="col-lg-12">

          <!-- Blog Details Section -->
            <section id="blog-details" class="blog-details section">
                <div class="container" >
                    <h2 class="title">{{ $post->title }}</h2>

                    <article class="article">
                        <!-- Imagem -->
                        <div class="post-img mb-3">
                            <img src="{{ asset('storage/' . $post->image_path) }}" alt="{{ $post->title }}" class="img-fluid w-100">
                        </div>

                        <!-- Meta -->
                        <div class="meta-top mb-3">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#">{{ $post->author ?? 'Unknown' }}</a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i>
                                    <a href="#">
                                        <time datetime="{{ $post->published_at }}">{{ \Carbon\Carbon::parse($post->published_at)->format('M d, Y') }}</time>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- Conteúdo -->
                        <div class="content">
                            {!! nl2br(e($post->content)) !!}
                        </div>
                    </article>
                </div>
            </section><!-- /Blog Details Section -->



        </div>

      </div>
    </div>
@endsection
