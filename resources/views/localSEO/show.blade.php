@extends('layouts.main')


@section('meta')
    <title>{{ $post->title }}</title>
    <meta name="description" content="{{ $post->page_description }}">
    <meta name="keywords" content="{{ $post->keywords }}">
    <meta name="author" content="MINT Commercial Ltd">
@endsection

@section('content')
    <!-- banner-area -->
    <section class="banner-area-three jarallax banner-bg-three"
        data-background="{{ asset('assets/img/banner/banner_bg.webp') }}">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="overlay"></div>
                <div class="col-lg-6 col-md-10 order-0 order-lg-0 mb-20">
                    <!-- Swap order for large screens -->
                    <div class="banner-content-three">
                        <h1 class="title" data-aos="fade-right" data-aos-delay="0">{{ $post->title }}</h1>
                        <p data-aos="fade-right" data-aos-delay="300">Do your business premises need a spruce up? Make your
                            business look mint with MINT Commercial Ltd! We offer professional {{ $post->category }} in
                            {{ $post->location }}. Your business will stand out like never before!</p>
                        <div class="banner-btn" data-aos="fade-right" data-aos-delay="600">
                            <a href="{{ url('/why-us') }}" class="btn">About us</a>
                            <a href="{{ url('/commercial-cleaning-services') }}" class="btn btn-two">Our services</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10 order-2 order-lg-2">
                    <!-- Swap order for large screens -->
                    <div class="banner-form-wrap">
                        <h2 class="title">Get Your Free Estimate {{ $post->category }} Quote</h2>
                        <form action="{{ route('contactForm.submit') }}" method="post">
                            @csrf
                            <div class="form-grp">
                                <input type="text" name="first_name" pattern="[a-zA-Z]+" minlength="4" maxlength="30"
                                    placeholder="Your name" id="first_name" autocomplete="on">
                            </div>
                            <div class="form-grp">
                                <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                                    minlength="4" maxlength="35" placeholder="Email address" id="email"
                                    autocomplete="on" required>
                            </div>
                            <div class="form-grp">
                                <input type="tel" name="phone_number" pattern="[0-9]+" minlength="4" maxlength="15"
                                    placeholder="Enter your phone number" id="last_name" autocomplete="on" required>
                            </div>
                            <div class="form-grp">
                                <select id="category" name="category" class="form-select"
                                    aria-label="Default select example">
                                    <option value="Select Service">Select Service</option>
                                    <option value="window-cleaning">Window Cleaning</option>
                                    <option value="gutter-cleaning">Gutter Cleaning</option>
                                    <option value="commercial-guttering">Commercial Guttering</option>
                                    <option value="pressure-washing">Pressure Washing</option>
                                    <option value="other-cleaning-services">Other Cleaning Service</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-two">Submit Your Request</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-area-end -->






    <!-- introduction-area -->
    <section class="introduction-area pb-20">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-9">
                    <div class="introduction-img-wrap">
                        <img src="{{ asset('assets/img/8-edited.webp') }}"
                            alt="{{ $post->location }} {{ $post->category }}" loading="lazy">

                        <img src="{{ asset('assets/img/6-edited.webp') }}" data-aos="fade-right"
                            alt="{{ $post->location }} {{ $post->category }}" loading="lazy">
                        <div class="play-btn">

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <section class="introduction-content">
                        <div class="section-title-two mb-20 tg-heading-subheading animation-style2">

                            <span class="sub-title">
                                <strong>
                                    {{ $post->category }} in {{ $post->location }}
                                </strong>
                            </span>
                            <h2 class="title tg-element-title">
                                {!! $post->our_introduction_title !!}
                            </h2>
                        </div>

                        <p class="info-one">
                            {!! $post->introduction_text_blue !!}
                        </p>

                        <p style="margin-bottom: 10px">
                            {!! $post->introduction_text_grey_1 !!}
                        </p>

                        <p>
                            {!! $post->introduction_text_grey_2 !!}
                        </p>
                    </section>
                </div>
            </div>

            <div class="row align-items-center justify-content-center ">
                <div class="col-lg-6 col-md-9">
                    <p class="pt-40">
                        {!! $post->introduction_text_grey_3 !!}
                    </p>

                    <p>
                        {!! $post->introduction_text_grey_4 !!}
                    </p>
                    <p>
                        <strong>To book a professional {{ $post->category }} in {{ $post->location }} please call our
                            freephone <a href="tel:03334040973"><i class="fas fa-phone-alt"></i>
                                0333 404 0973</a>!</strong>
                    </p>
                </div>

                <div class="col-lg-6">
                    <section class="introduction-content">
                        <div class="introduction-list">
                            <ul class="list-wrap">
                                <li><i class="fas fa-check-circle"></i>Best Quality</li>
                                <li><i class="fas fa-check-circle"></i>Fully Insured</li>
                                <li><i class="fas fa-check-circle"></i>SafeContractor</li>
                                <li><i class="fas fa-check-circle"></i>ISO 9001, 14001 &amp; 45001</li>
                                <li><i class="fas fa-check-circle"></i>Environmental Initiatives</li>
                                <li><i class="fas fa-check-circle"></i>High Access</li>
                            </ul>
                        </div>
                        <div class="introduction-bottom">
                            <a href="{{ url('/contact') }}" class="btn">
                                Get a Quote!
                            </a>
                            <span class="call-now">
                                <i class="fas fa-phone-alt"></i>
                                <a href="tel:03334040973">
                                    0333 404 0973
                                </a>
                            </span>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <div class="pt-40">
            @include('components.brand-area')
        </div>
    </section>
    <!-- introduction-area-end -->

    <section class=" pb-100">
        <div class="container">
            <div class="row">
                <div class="project-details-content">
                    <h2 class="title">Residential and Commercial {{ $post->category }} In {{ $post->location }}
                    </h2>
                    <p>
                        {!! $post->residential_and_commercial_text !!}
                    </p>

                    @if (!empty($post->category_slug) && View::exists('components.localSEO-components.list-items.' . $post->category_slug))
                        @include('components.localSEO-components.list-items.' . $post->category_slug)
                    @endif

                    <h3 class="title-two">Residential {{ $post->category }}</h3>
                    <p>
                        {!! $post->residential_text !!}
                    </p>


                    <h3 class="title-two">Commercial {{ $post->category }}</h3>
                    <p>
                        {!! $post->commercial_text !!}
                    </p>
                    <p>
                        Experience the transformational power of our residential and commercial {{ $post->category }}
                        services in
                        {{ $post->location }}. Contact us today to schedule an appointment and discover how high quality
                        {{ $post->category }} can
                        elevate your surroundings, creating a more inviting, healthier, and vibrant environment for you,
                        your loved ones, and your business.
                    </p>
                    <span class="sub-title">For residential and commercial {{ $post->category }} in {{ $post->location }}
                        please get in touch with our friendly team at<strong> <a href="tel:03334040973">
                                <i class="fas fa-phone-alt"></i>
                                0333 404 0973</a>!
                        </strong></span>
                </div>
            </div>
        </div>
        </div>
    </section>





    @include('components.services-area-three')


    @if (!empty($post->category_slug) && View::exists('components.localSEO-components.FAQ.' . $post->category_slug))
        @include('components.localSEO-components.FAQ.' . $post->category_slug)
    @endif


    @include('components.home-page-blog-area')
@endsection
