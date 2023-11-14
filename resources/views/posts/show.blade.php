@extends('layouts.main')


@section('meta')
    <title>{{ $post->title }}</title>
    <meta name="description" content="{{ $post->description }}">
    <meta name="author" content="JB Block Paving & Landscapers">
@endsection

@section('content')
    <div class="sidebar-page-container blog-page">

        <div class="auto-container">
            <div class="row clearfix">

                <!-- Content Side -->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="blog-content">
                        <div class="post-details">
                            <div class="inner-box">
                                <div class="text">
                                <h1>{{ $post->title }}</h1>
                                <p>By Peter Winters on {{ \Carbon\Carbon::parse($post->updated_at)->format('d M Y') }} in <a href="">{{ $post->category->name }}</a></p>
                                </div>
                                <div class="upper">
                                    <div class="image-box">
                                        <img style="max-height: 400px; width:auto; margin:0 auto;" src="{{ asset($post->thumbnail) }}"
                                            alt="{{ $post->title }}">
                                    </div>
                                </div>
                                <div class="lower">
                                    <div class="text">
                                        
                                        {!! $post->content !!}

                                    </div>


                                </div>
                                <div class="lower-info clearfix">
                                    <div class="share-post">
                                        <div class="social-links">
                                            <ul class="clearfix">
                                                <li><a
                                                        href="https://www.facebook.com/PW-Tree-Care-Landscaping-Services-102735255324744"><span
                                                            class="fab fa-facebook-f"></span></a></li>
                                                <li><a href="#"><span class="fab fa-instagram"></span></a>
                                                </li>
                                                <li><a href="https://g.page/PWTreeCareLandscapingServices?gm"><span
                                                            class="fab fa-google"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Blog Side Bar-->
                @include('components/blog-page-sidebar')




            </div>
        </div>
    </div>
@endsection
