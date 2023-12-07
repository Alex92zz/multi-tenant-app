@extends('layouts.main')


@section('meta')
    <title>Tarmac Surfacing</title>
    <meta name="description" content="">
    <meta name="author" content="JB Block Paving & Landscapers">
@endsection

@section('styles')
    <!-- You need jquery.fancybox.min.css to make the gallery work, if you don't have with the picture won't get big -->
    <link href="{{ asset('css/jquery.fancybox.min.css') }}" rel="stylesheet">
@endsection


@section('content')
    <!-- Banner Section -->
    <section class="page-banner">
        <div class="image-layer" style="background-image: url({{ asset('images/services/tarmac-surfacing.webp') }});"></div>
        <div class="banner-bottom-pattern"></div>

        <div class="banner-inner">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <h1>Tarmac Surfacing</h1>
                    <div class="page-nav">
                        <ul class="bread-crumb clearfix">
                            <li><a href="./"><span class="fa fa-home"></span></a></li>
                            <li>Services</li>
                            <li class="active">Tarmac Surfacing</li>
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
                            <div class="title-icon"><span class="icon"><img src="images/icons/leaf-two.png" alt="Leaf icon"
                                        ></span></div>
                            <div class="subtitle">Service Details</div>
                            <h2>Tarmac Surfacing</h2>
                        </div>
                        <div class="upper-content">
                            <div class="big-text">
                                Affordable Tarmac Surfacing: Elevate Your Surroundings with Top-Quality Paving Services at Budget-Friendly Rates!
                            </div>
                            <div class="main-image">
                                <img src="images/services/tarmac-surfacing-driveway-uk.webp" alt="Tarmac Surfacing Driveway">
                            </div>
                            <div class="text">
                                <h5>Table of Contents</h5>
                                <div class="feature-block">
                                    <div class="inner">
                                        <div class="lower-text text">
                                            <ul>
                                                <li><a href="#introduction-to-tarmac-driveways">Introduction to Tarmac Driveways</a></li>
                                                <li><a href="#precision-paving">The Art of Precision Paving</a></li>
                                                <li><a href="#quality-materials">Quality Materials for Lasting Results</a></li>
                                                <li><a href="#affordable-tarmac-solution">Affordability Tarmac Solutions</a></li>
                                                <li><a href="#unique-curb-appeal">Custom Design for Unique Curb Appeal</a></li>
                                                <li><a href="#trusted-partner-in-tarmac-solutions">Your Trusted Partner in Tarmac Surfacing</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    Welcome to JB Block Paving & Landscapers, your newly established, go-to specialist for paving and landscaping solutions. With a commitment to excellence, we bring a fresh perspective to ensure your outdoor spaces are not just paved but transformed into enduring works of art. Our expertise extends to top-notch Tarmac Surfacing services, providing you with the following benefits:
                                </p>
                            <div class="row clearfix">
                                <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner">
                                        <div class="lower-text text">
                                            <ul>
                                                <li>Expertise in Precision Paving</li>
                                                <li>Durable and Resilient Surfaces</li>
                                                <li>Tailored Design Concepts</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner">
                                        <div class="lower-text text">
                                            <ul>
                                                <li>Cost-Effective Surfacing </li>
                                                <li>Local Expertise and Presence</li>
                                                <li>Customer Satisfaction Guarantee</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <h3>Introduction to Tarmac Driveways</h3>
                                <p id="introduction-to-tarmac-driveways">
                                    Transform your home's exterior with the enduring charm of tarmac driveways. As a leading provider of affordable driveway solutions, we understand the importance of blending quality with budget-friendly options. Discover the benefits of choosing tarmac surfacing for a lasting and appealing entrance to your property.
                                </p>
                                <h3 id="precision-paving">The Art of Precision Paving</h3>
                                <p>
                                    At JB Block Paving & Landscapers LTD, we take pride in our professional approach to driveway paving. Our expert contractors specialize in precision installations, ensuring a seamless and durable tarmac surface that not only enhances curb appeal but also stands the test of time. Explore the art of precision paving and the lasting impact it can have on your property.
                                </p>
                                <h3 id="quality-materials">Quality Materials for Lasting Results</h3>
                                <p>
                                    One of the key factors in creating durable and attractive tarmac driveways is the use of high-quality materials. Our commitment to excellence means that we source and use the best materials available, guaranteeing a driveway that not only looks impressive but also maintains its integrity in the face of everyday wear and tear. Discover the difference quality materials make in your driveway investment.
                                </p>

                                <h3 id="affordable-tarmac-solution">Affordability Tarmac Solutions</h3>
                                <p>Experience the perfect blend of affordability and excellence with our range of budget-friendly driveway solutions. We believe that a beautiful and enduring driveway should be accessible to all homeowners. Learn how we make affordability a priority without compromising on the precision and quality that define our tarmac surfacing services.</p>

                                <h3 id="unique-curb-appeal">Custom Design for Unique Curb Appeal</h3>
                                <p>
                                    Every home is unique, and so should be its driveway. Our team specializes in custom driveway design, tailoring our services to complement the style and architecture of your property. From residential projects to commercial installations, discover how our custom designs can elevate the aesthetic appeal of your surroundings.
                                </p>

                                <h3 id="trusted-partner-in-tarmac-solutions">Your Trusted Partner in Tarmac Surfacing</h3>
                                <p>
                                    Choose JB Block Paving & Landscapers LTD as your trusted partner for all your tarmac driveway needs. Our reliable and experienced contractors are dedicated to delivering top-rated driveway services that enhance property value and provide a long-lasting impact. Join countless satisfied customers who have transformed their homes with our expert tarmac surfacing solutions.
                                </p>
                                <p>
                                    Whether you're looking for precision paving, quality materials, or budget-friendly options, JB Block Paving & Landscapers LTD is here to turn your vision of a stunning tarmac driveway into reality. Contact us today to embark on the journey to a superior and affordable driveway transformation.
                                </p>
                            </div>

                            

                            <div class="process">
                                <div class="row clearfix">
                                    <div class="block col-lg-4 col-md-4 col-sm-12">
                                        <div class="inner">
                                            <h4>Initial Consultation for Tarmac Surfacing
                                            </h4>
                                            <div class="text">Collaborate with our experts to design a captivating tarmac surfacing plan that suits your preferences and requirements.</div>
                                            <div class="count"><span>01</span></div>
                                        </div>
                                    </div>
                                    <div class="block col-lg-4 col-md-4 col-sm-12">
                                        <div class="inner">
                                            <h4>Review and Approve Your Surfacing Plan </h4>
                                            <div class="text">Carefully review and approve the final plan for your tarmac surfacing project, ensuring it aligns with your vision for both functionality and aesthetics.</div>
                                            <div class="count"><span>02</span></div>
                                        </div>
                                    </div>
                                    <div class="block col-lg-4 col-md-4 col-sm-12">
                                        <div class="inner">
                                            <h4>Start Your Tarmac Surfacing Project</h4>
                                            <div class="text">Initiate your tarmac surfacing project with our skilled professional team, dedicated to delivering precision and excellence from start to finish.</div>
                                            <div class="count"><span>03</span></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            
                        </div>

                    </div>

                </div>

                @include('services.components.side-bar')

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
                            <a href="images/services/tarmac-driveway-affordable.webp" class="lightbox-image" data-fancybox="gallery">
                                <img loading="lazy" src="images/services/tarmac-driveway-affordable.webp" alt="Tarmac Surfacing Driveway"></a>

                        </div>
                    </div>
                </div>

                <!--Outline Block-->
                <div class="outline-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="">
                            <a href="images/services/tarmac-driveway-front-house.webp" class="lightbox-image" data-fancybox="gallery">
                                <img loading="lazy" src="images/services/tarmac-driveway-front-house.webp" alt="Tarmac Surfacing Driveway photo 2"></a>

                        </div>
                    </div>
                </div>

                <!--Outline Block-->
                <div class="outline-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="">
                            <a href="images/services/tarmac-resurfacing.webp" class="lightbox-image" data-fancybox="gallery">
                                <img loading="lazy" src="images/services/tarmac-resurfacing.webp" alt="Tarmac Surfacing Driveway photo 3"></a>

                        </div>
                    </div>
                </div>

                <!--Outline Block-->
                <div class="outline-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="">
                            <a href="images/services/tarmac-surfacing-driveway.webp" class="lightbox-image" data-fancybox="gallery">
                                <img loading="lazy" src="images/services/tarmac-surfacing-driveway.webp" alt="Tarmac Surfacing Driveway photo 4"></a>

                        </div>
                    </div>
                </div>

                <!--Outline Block-->
                <div class="outline-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="">
                            <a href="images/services/tarmac-surfacing-driveway-uk.webp" class="lightbox-image" data-fancybox="gallery">
                                <img loading="lazy" src="images/services/tarmac-surfacing-driveway-uk.webp" alt="Tarmac Surfacing Driveway photo 5"></a>

                        </div>
                    </div>
                </div>

                <!--Outline Block-->
                <div class="outline-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="">
                            <a href="images/services/tarmac-surfacing-driveway-uk-2.webp" class="lightbox-image" data-fancybox="gallery">
                                <img loading="lazy" src="images/services/tarmac-surfacing-driveway-uk-2.webp" alt="Tarmac Surfacing Driveway photo 6"></a>

                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>


    @include('components/contact-form')
@endsection
