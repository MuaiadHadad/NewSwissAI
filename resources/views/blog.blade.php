@extends('layouts.app')

@section('title', 'Blog')

@section('content')


    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Blog</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li class="current">Blog</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <div class="container">
      <div class="row">
          @if ($posts->isEmpty())
              <div class="col-12" data-aos="fade-up" data-aos-delay="100">

                  <!-- Blog Posts Section -->
                  <section id="blog-posts" class="blog-posts section d-flex align-items-center justify-content-center" style="min-height: 60vh;">
                      <div class="container text-center">
                          <h1 class="">No posts yet <i class="bi bi-emoji-frown"></i></h1>
                      </div>
                  </section>
              </div>
          @else
        <div class="col-lg-auto" data-aos="fade-up" data-aos-delay="100">

          <!-- Blog Posts Section -->
            <section id="blog-posts" class="blog-posts section">
                <div class="container">

                    <!-- Search Widget -->
                    <div class="search-widget widget-item col-lg-4" style="margin-left: auto;">
                        <form action="{{ route('blog') }}" method="GET">
                            <input type="text" name="search" placeholder="Search..." value="{{ request('search') }}">
                            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                        </form>
                    </div>


                    <div class="row gy-4">
                        @foreach($posts as $post)
                            <div class="col-lg-auto">
                                <article>
                                    <div class="row align-items-center">

                                        <!-- Imagem à esquerda -->
                                        <div class="col-lg-6">
                                            <div class="post-img">
                                                <img src="{{ asset('storage/' . $post->image_path) }}" alt="" class="img-fluid">
                                            </div>
                                        </div>

                                        <!-- Texto à direita -->
                                        <div class="col-lg-6">
                                            <h2 class="title">
                                                <a href="{{ route('details', $post->id) }}">{{ $post->title }}</a>
                                            </h2>

                                            <div class="meta-top">
                                                <ul>
                                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#">{{ $post->author ?? 'Unknown' }}</a></li>
                                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="{{ $post->published_at }}">{{ \Carbon\Carbon::parse($post->published_at)->format('M d, Y') }}</time></a></li>
                                                </ul>
                                            </div>

                                            <div class="content">
                                                <p>{{ Str::limit($post->excerpt ?? strip_tags($post->content), 150) }}</p>
                                                <div class="read-more">
                                                    <a href="{{ route('details', $post->id) }}">Read More</a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </article>
                            </div>
                        @endforeach
                    </div>

                </div>
            </section>
            <!-- /Blog Posts Section -->

            <!-- Blog Pagination Section -->
            <section id="blog-pagination" class="blog-pagination section">
                <div class="container">
                    <div class="d-flex justify-content-center">
                        <ul>
                            {{-- Previous Page --}}
                            @if ($posts->onFirstPage())
                                <li><span><i class="bi bi-chevron-left"></i></span></li>
                            @else
                                <li><a href="{{ $posts->previousPageUrl() }}"><i class="bi bi-chevron-left"></i></a></li>
                            @endif

                            {{-- Page Numbers --}}
                            @foreach ($posts->getUrlRange(1, $posts->lastPage()) as $page => $url)
                                @if ($page == $posts->currentPage())
                                    <li><a class="active">{{ $page }}</a></li>
                                @elseif ($page == 1 || $page == $posts->lastPage() || abs($page - $posts->currentPage()) <= 1)
                                    <li><a href="{{ $url }}">{{ $page }}</a></li>
                                @elseif ($page == $posts->currentPage() - 2 || $page == $posts->currentPage() + 2)
                                    <li><span>...</span></li>
                                @endif
                            @endforeach

                            {{-- Next Page --}}
                            @if ($posts->hasMorePages())
                                <li><a href="{{ $posts->nextPageUrl() }}"><i class="bi bi-chevron-right"></i></a></li>
                            @else
                                <li><span><i class="bi bi-chevron-right"></i></span></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </section>
            <!-- /Blog Pagination Section -->

        </div>
          @endif


      </div>
    </div>
@endsection
