@extends('layouts.main')


@section('meta')
    <title>{{ $category->name }} | MINT Cleaning Services</title>
    <meta name="description"
        content="Explore insightful articles and updates on commercial cleaning services at MINT Commercial Ltd's blog. Gain valuable insights into professional window cleaning, gutter cleaning, commercial guttering, and pressure washing. Stay informed about the latest industry trends and cleaning solutions. Join us on our journey of sharing expertise and knowledge in the cleaning services field.">
    <meta name="keywords"
        content="Blog page, Commercial cleaning services, Window cleaning, Gutter cleaning, Commercial guttering, Pressure washing, Industry trends, Cleaning solutions, Expertise, Knowledge sharing">
    <meta name="author" content="MINT Commercial Ltd">
@endsection


@section('content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg"
        data-background="{{ asset('assets/img/images/services/banner_img01.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h2 class="title">{{ $category->name }} Posts</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item"><a
                                        href="{{ route('category.show', ['category' => $category->slug]) }}">{{ $category->name }}</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Blog Posts</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->



    <!-- blog-area -->
    <section class="inner-blog-area-two pt-130 pb-130">
        <div class="container">
            <div class="row justify-content-center">



                <!-------------------------------------- Blog List Start ------------------------------------------->
                <div class="col-lg-8">
                    <div class="inner-blog-item-wrap">

                        <!-------------------------------------- Blog Article Start ------------------------------------------->
                        @forelse ($categoryPosts->reverse() as $post)
                            <div class="blog-item-two inner-blog-item">
                                <div class="blog-thumb-two" style="max-height: 400px;">
                                    <a href="{{ route('posts.show', ['slug' => $post->slug]) }}">
                                        @if (!empty($post->thumbnail))
                                            @php
                                                $imageUrl = asset($post->thumbnail);
                                            @endphp
                                            <img loading="lazy" src="{{ $imageUrl }}" alt="{{ $post->title }}">
                                        @else
                                            <img loading="lazy"
                                                src="{{ asset('assets/img/blog/commercial-cleaning-1.jpg') }}"
                                                alt="{{ $post->title }}">
                                        @endif
                                    </a>
                                </div>
                                <div class="blog-content-two">
                                    <a href="{{ route('category.show', ['category' => $category->id]) }}"
                                        class="tag">{{ $category->name }}</a>
                                    <div class="blog-meta">
                                        <ul class="list-wrap">
                                            <li><i class="fas fa-calendar-alt"></i>{{ $post->updated_at->diffForHumans() }}
                                            </li>
                                            <li><i class="far fa-user"></i><a
                                                    href="{{ route('posts.show', ['slug' => $post->slug]) }}">James
                                                    Gomes</a></li>
                                        </ul>
                                    </div>
                                    <h2 class="title"><a
                                            href="{{ route('posts.show', ['slug' => $post->slug]) }}">{{ $post->title }}</a>
                                    </h2>
                                    <a href="{{ route('posts.show', ['slug' => $post->slug]) }}" class="btn btn-two">Read
                                        article</a>
                                </div>
                            </div>


                        @empty
                            <p>There are no blog posts for this category.</p>
                        @endforelse
                        {{ $categoryPosts->links() }} <!-- Pagination links -->

                        <!-------------------------------------- Blog Article End ------------------------------------------->




                    </div>
                </div>
                <!-------------------------------------- Blog List End ------------------------------------------->


                <!------------------------------------------------ Blog Page Right Side Bar Section ------------------------------------------>


                @include('components.blog-side-bar')
                <!------------------------------------------------ Blog Page Right Side Bar Section ------------------------------------------>


            </div>
        </div>
    </section>
    <!-- blog-area-end -->
@endsection
