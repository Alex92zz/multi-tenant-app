@extends('layouts.main')


@section('meta')
    <title>{{ $post->title }}</title>
    <meta name="description" content="{{ $post->description }}">
    <meta name="author" content="JB Block Paving & Landscapers">
@endsection

@section('styles')
    <!-- You need jquery.fancybox.min.css to make the gallery work, if you don't have with the picture won't get big -->
    <link href="{{ asset('css/jquery.fancybox.min.css') }}" rel="stylesheet">
@endsection

@section('content')

    <!-- Banner Section -->
    <section class="page-banner">
        <div class="image-layer" style="background-image: url({{ asset('images/contact-page/low-quality-3.webp') }});"></div>
        <div class="banner-bottom-pattern"></div>

        <div class="banner-inner">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <h1>{{ $post->title }}</h1>
                    <div class="page-nav">
                        <ul class="bread-crumb clearfix">
                            <li><a href="index.html"><span class="fa fa-home"></span></a></li>
                            <li class="active">{{ $post->title }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->




    <!-- Project Single Section -->
    <div class="project-single">

        <!--Details-->
        <section class="project-details">
            <div class="auto-container">
                <div class="upper-box">
                    <div class="row clearfix">
                        <div class="title-col col-lg-4 col-md-12 col-sm-12">
                            <h3>Details About The Project</h3>
                            <p>Author: Peter Winters <br />
                                Date posted: {{ date('d F Y', strtotime($post->created_at)) }}</p>
                        </div>
                        <div class="border-left text-col col-lg-8 col-md-12 col-sm-12">
                            <div class="text">
                                {!! $post->content !!}
                            </div>
                        </div>
                    </div>
                </div>





                <div class="info">
                    <div class="row clearfix">
                        <!--Block-->
                        <div class="block col-xl-2 col-lg-4 col-md-4 col-sm-6">
                            <div class="inner">
                                <div class="icon-box"><span class="flaticon-fast"></span></div>
                                <h6>Always Ontime</h6>

                            </div>
                        </div>
                        <!--Block-->
                        <div class="block col-xl-2 col-lg-4 col-md-4 col-sm-6">
                            <div class="inner">
                                <div class="icon-box"><span class="flaticon-insurance"></span></div>
                                <h6>Upfront Pricing</h6>

                            </div>
                        </div>
                        <!--Block-->
                        <div class="block col-xl-2 col-lg-4 col-md-4 col-sm-6">
                            <div class="inner">
                                <div class="icon-box"><span class="flaticon-trees"></span></div>
                                <h6>Experienced Tree Care</h6>

                            </div>
                        </div>
                        <!--Block-->
                        <div class="block col-xl-2 col-lg-4 col-md-4 col-sm-6">
                            <div class="inner">
                                <div class="icon-box"><span class="flaticon-dog-2"></span></div>
                                <h6>Pet &amp; Kid Safe</h6>

                            </div>
                        </div>
                        <!--Block-->
                        <div class="block col-xl-2 col-lg-4 col-md-4 col-sm-6">
                            <div class="inner">
                                <div class="icon-box"><span class="flaticon-gardener-2"></span></div>
                                <h6>Expert Staff</h6>

                            </div>
                        </div>

                        <!--Block-->
                        <div class="block col-xl-2 col-lg-4 col-md-4 col-sm-6">
                            <div class="inner">
                                <div class="icon-box"><span class="flaticon-marketing"></span></div>
                                <h6>Happy Customers</h6>

                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </section>




            <!--Outline-->
            <section class="project-outline">
                <div class="auto-container">
                    <div class="title">
                        <h3>Project Photo Gallery</h3>
                    </div>

                    <div class="row clearfix">


                                <!--Outline Block-->
                                <div class="outline-block col-lg-4 col-md-6 col-sm-12">
                                    <div class="inner-box">
                                        <div class="">
                                            <a href="{{ asset($post->thumbnail) }}" class="lightbox-image"
                                                data-fancybox="gallery">
                                                <img loading="lazy" src="{{ asset($post->thumbnail) }}"
                                                    alt="{{ $post->title }}"></a>

                                        </div>
                                    </div>
                                </div>





                    </div>
                </div>
            </section>


    </div>

    
@endsection
