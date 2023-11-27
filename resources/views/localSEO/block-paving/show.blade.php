@extends('layouts.main')


@section('meta')
    <title>{{ $post->title }} | JB Block Paving & Landscapers"</title>
    <meta name="description" content="{{ $post->page_description }}">
    <meta name="author" content="JB Block Paving & Landscapers">
@endsection

@section('styles')
    <!-- You need jquery.fancybox.min.css to make the gallery work, if you don't have with the picture won't get big -->
    <link href="{{ asset('css/jquery.fancybox.min.css') }}" rel="stylesheet">
@endsection


@section('content')
    <!-- Banner Section -->
    <section class="page-banner">
        <div class="image-layer" style="background-image: url({{ asset('images/services/block-paving.webp') }});"></div>
        <div class="banner-bottom-pattern"></div>

        <div class="banner-inner">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <h1>{{ $post->title }}</h1>
                    <div class="page-nav">
                        <ul class="bread-crumb clearfix">
                            <li><a href="./"><span class="fa fa-home"></span></a></li>
                            <li>Services</li>
                            <li class="active">Block Paving</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->


    <div class="sidebar-page-container services-page">

        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="service-details">
                        <div class="sec-title">
                            <div class="title-icon"><span class="icon"><img loading="lazy" src="images/icons/leaf-two.png"
                                        alt="" title=""></span></div>
                            <div class="subtitle">Service Details</div>
                            <h2>{{ $post->category }} in {{ $post->location }}</h2>
                        </div>
                        <div class="upper-content">
                            <div class="big-text">
                                
                               {{ $post->about_us_green_subtitle }}
                            
                            </div>
                            <div class="main-image">
                                <img loading="lazy" src="images/services/block-paving-2.webp" alt="Block Paving in {{ $post->location }}">
                            </div>
                            <div class="text">
                                <p>
                                    Welcome to JB Block Paving & Landscapers, your go-to specialist for
                                    paving and landscaping solutions in {{ $post->location }}. With a commitment to
                                    excellence, we bring a fresh
                                    perspective ensuring your outdoor spaces are not just paved but
                                    transformed into enduring works of art. Benefits of choosing our block paving services:
                                </p>
                                <div class="row clearfix">
                                    <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                                        <div class="inner">
                                            <div class="lower-text text">
                                                <ul>
                                                    <li>Increased House Value</li>
                                                    <li>Robust and Durable</li>
                                                    <li>Easy Maintenance</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                                        <div class="inner">
                                            <div class="lower-text text">
                                                <ul>
                                                    <li>Swift and Efficient Installation</li>
                                                    <li>Cool Surface Temperature</li>
                                                    <li>Simple and Cost-Effective Repairs</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {!! $post->about_us_paragraph !!}
                            </div>



                            <div class="process">
                                <div class="row clearfix">
                                    <div class="block col-lg-4 col-md-4 col-sm-12">
                                        <div class="inner">
                                            <h4>Initial Consultation </h4>
                                            <div class="text">Collaborate with our experts to craft a captivating block
                                                paving design.</div>
                                            <div class="count"><span>01</span></div>
                                        </div>
                                    </div>
                                    <div class="block col-lg-4 col-md-4 col-sm-12">
                                        <div class="inner">
                                            <h4>Get Your Plan </h4>
                                            <div class="text">Review and approve your final block paving plan for optimal
                                                functionality and aesthetics.</div>
                                            <div class="count"><span>02</span></div>
                                        </div>
                                    </div>
                                    <div class="block col-lg-4 col-md-4 col-sm-12">
                                        <div class="inner">
                                            <h4>Start a Project </h4>
                                            <div class="text">Initiate your block paving project with our skilled
                                                professional team.</div>
                                            <div class="count"><span>03</span></div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>

                </div>

                @include('Services.components.side-bar')

            </div>
        </div>
    </div>


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
                            <a href="images/services/block-paving-garden.webp" class="lightbox-image"
                                data-fancybox="gallery">
                                <img loading="lazy" src="images/services/block-paving-garden.webp"
                                    alt="Block Paving Garden"></a>

                        </div>
                    </div>
                </div>

                <!--Outline Block-->
                <div class="outline-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="">
                            <a href="images/services/block-paving-garden-2.webp" class="lightbox-image"
                                data-fancybox="gallery">
                                <img loading="lazy" src="images/services/block-paving-garden-2.webp"
                                    alt="Block Paving Garden photo 2"></a>

                        </div>
                    </div>
                </div>

                <!--Outline Block-->
                <div class="outline-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="">
                            <a href="images/services/block-paving-garden-3.webp" class="lightbox-image"
                                data-fancybox="gallery">
                                <img loading="lazy" src="images/services/block-paving-garden-3.webp"
                                    alt="Block Paving Garden photo 3"></a>

                        </div>
                    </div>
                </div>

                <!--Outline Block-->
                <div class="outline-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="">
                            <a href="images/services/block-paving-garden-7.webp" class="lightbox-image"
                                data-fancybox="gallery">
                                <img loading="lazy" src="images/services/block-paving-garden-7.webp"
                                    alt="Block Paving Garden photo 4"></a>

                        </div>
                    </div>
                </div>

                <!--Outline Block-->
                <div class="outline-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="">
                            <a href="images/services/block-paving-garden-5.webp" class="lightbox-image"
                                data-fancybox="gallery">
                                <img loading="lazy" src="images/services/block-paving-garden-5.webp"
                                    alt="Block Paving Garden photo 5"></a>
                        </div>
                    </div>
                </div>

                <!--Outline Block-->
                <div class="outline-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="">
                            <a href="images/services/block-paving-garden-6.webp" class="lightbox-image"
                                data-fancybox="gallery">
                                <img loading="lazy" src="images/services/block-paving-garden-6.webp"
                                    alt="Block Paving Garden photo 6"></a>

                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>


    @include('components/contact-form')
@endsection
