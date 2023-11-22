@extends('layouts.main')


@section('meta')
    <title>Turfing Services | Professional Turf Installation</title>
    <meta name="description" content="Transform your outdoor space with our expert Turfing Services. Experience the lush beauty of professionally installed turf as we specialize in precision and care. Elevate your landscape with our dedicated team, offering top-notch Turf Installation for a vibrant and enduring green haven.">
    <meta name="author" content="JB Block Paving & Landscapers">
@endsection

@section('styles')
    <!-- You need jquery.fancybox.min.css to make the gallery work, if you don't have with the picture won't get big -->
    <link href="{{ asset('css/jquery.fancybox.min.css') }}" rel="stylesheet">
@endsection


@section('content')
    <!-- Banner Section -->
    <section class="page-banner">
        <div class="image-layer" style="background-image: url({{ asset('images/services/turfing-garden.jpg') }});"></div>
        <div class="banner-bottom-pattern"></div>

        <div class="banner-inner">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <h1>Turfing Services </h1>
                    <div class="page-nav">
                        <ul class="bread-crumb clearfix">
                            <li><a href="./"><span class="fa fa-home"></span></a></li>
                            <li>Services</li>
                            <li class="active">Turfing Services</li>
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
                            <div class="title-icon"><span class="icon"><img loading="lazy" src="images/icons/leaf-two.png" alt=""
                                        title=""></span></div>
                            <div class="subtitle">Service Details</div>
                            <h2>Turfing Services</h2>
                        </div>
                        <div class="upper-content">
                            <div class="big-text">Lush lawns begin here! Transform your space with our expert turfing services—where green dreams become reality effortlessly.</div>
                            <div class="main-image">
                                <img loading="lazy" src="images/services/turfing-front-house.jpg" alt="Turfing front house">
                            </div>
                            <div class="text">
                                <h5>Table of Contents</h5>
                                <div class="feature-block">
                                    <div class="inner">
                                        <div class="lower-text text">
                                            <ul>
                                                <li><a href="#turfing-advantage">The Turfing Advantage: Beyond Beauty</a></li>
                                                <li><a href="#landscapers-difference">The JB Block Paving & Landscapers Difference</a></li>
                                                <li><a href="#tailoring-lawn-style-to-your-vision">Tailoring Lawn Style to Your Vision</a></li>
                                                <li><a href="#science-of-sustainability">The Science of Sustainability</a></li>
                                                <li><a href="#beyond-the-lawn">Your Outdoor Oasis: Beyond the Lawn</a></li>
                                                <li><a href="#conclusion">Conclusion</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    Welcome to JB Block Paving & Landscapers, where we bring the perfect blend of artistry and expertise to your outdoor spaces. Our commitment to excellence extends beyond aesthetics, delving into the intricate world of professional turf installation. Join us on a journey where your green dreams come to life with precision, care, and unmatched craftsmanship. Benefits of choosing our turfing services:
                                </p>
                            <div class="row clearfix">
                                <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner">
                                        <div class="lower-text text">
                                            <ul>
                                                <li>Precision and Expertise</li>
                                                <li>Swift Installation</li>
                                                <li>Evergreen Year-Round</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner">
                                        <div class="lower-text text">
                                            <ul>
                                                <li>Eco-Friendly Turfing</li>
                                                <li>Low-Turf Maintenance</li>
                                                <li>Craftsmanship Guarantee</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <h3>The Turfing Advantage: Beyond Beauty</h3>
                                <p id="turfing-advantage">At JB Block Paving & Landscapers, we believe that professional turf installation goes beyond mere aesthetics. A lush green lawn not only enhances the visual appeal of your property but also contributes to a healthier environment. Our turfing services are designed to create a harmonious balance between beauty and functionality, providing you with a space that's both inviting and sustainable.
                                </p>
                                <h3 id="landscapers-difference">The JB Block Paving & Landscapers Difference</h3>
                                <p>
                                    What sets us apart in the realm of turf installation? It's our unwavering commitment to quality and customer satisfaction. Our experienced team doesn't just install turf; they curate an experience. From the initial consultation to the final blade of grass, our experts ensure that every step is executed with precision, transforming your outdoor space into a masterpiece.
                                </p>
                                <h3 id="tailoring-lawn-style-to-your-vision">Tailoring Lawn Style to Your Vision</h3>
                                <p>
                                    We understand that every client is unique, and so is their vision for the perfect lawn. Our experts at JB Block Paving & Landscapers guide you through an array of turf varieties, styles, and patterns, ensuring your lawn is a true reflection of your taste and preferences. Whether you envision a classic, timeless look or a modern, vibrant space, we have the expertise to bring your vision to life.
                                </p>

                                <h3 id="science-of-sustainability">The Science of Sustainability</h3>
                                <p>Professional turf installation is not just about instant gratification; it's an investment in the long-term health and sustainability of your lawn. Our team employs cutting-edge techniques and eco-friendly practices to ensure that your turf not only looks stunning today but thrives for years to come. We prioritize environmentally conscious solutions, making your green oasis a responsible one.</p>

                                <h3 id="beyond-the-lawn">Your Outdoor Oasis: Beyond the Lawn</h3>
                                <p>
                                    While our expertise lies in turf installation, JB Block Paving & Landscapers offers a comprehensive range of services to elevate your entire outdoor space. From pathways and patios to landscaping and garden walls, our team is your one-stop solution for transforming every corner of your property into a cohesive and captivating landscape.
                                </p>

                                <h3 id="conclusion">Conclusion</h3>
                                <p>
                                    Embark on a journey with JB Block Paving & Landscapers, where the art and science of professional turf installation converge. Let us redefine your outdoor space with precision, style, and a touch of natural beauty. Contact us today and witness the transformation of your green dreams into a reality that stands the test of time. Your landscape journey starts here!
                                </p>
                            </div>

                            

                            <div class="process">
                                <div class="row clearfix">
                                    <div class="block col-lg-4 col-md-4 col-sm-12">
                                        <div class="inner">
                                            <h4>Initial Consultation </h4>
                                            <div class="text">Collaborate with our experts to craft a captivating block paving design.</div>
                                            <div class="count"><span>01</span></div>
                                        </div>
                                    </div>
                                    <div class="block col-lg-4 col-md-4 col-sm-12">
                                        <div class="inner">
                                            <h4>Get Your Plan </h4>
                                            <div class="text">Review and approve your final block paving plan for optimal functionality and aesthetics.</div>
                                            <div class="count"><span>02</span></div>
                                        </div>
                                    </div>
                                    <div class="block col-lg-4 col-md-4 col-sm-12">
                                        <div class="inner">
                                            <h4>Start a Project </h4>
                                            <div class="text">Initiate your block paving project with our skilled professional team.</div>
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
                            <a href="images/services/turfing-and-wood-wall.jpg" class="lightbox-image" data-fancybox="gallery">
                                <img loading="lazy" src="images/services/turfing-and-wood-wall.jpg" alt="Turfing garden"></a>

                        </div>
                    </div>
                </div>

                <!--Outline Block-->
                <div class="outline-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="">
                            <a href="images/services/turfing-garden-beautiful.jpg" class="lightbox-image" data-fancybox="gallery">
                                <img loading="lazy" src="images/services/turfing-garden-beautiful.jpg" alt="Beautiful Turfing in the garden"></a>

                        </div>
                    </div>
                </div>

                <!--Outline Block-->
                <div class="outline-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="">
                            <a href="images/services/front-house-turfing-lawn.jpg" class="lightbox-image" data-fancybox="gallery">
                                <img loading="lazy" src="images/services/front-house-turfing-lawn.jpg" alt="Turfing lawn front house"></a>

                        </div>
                    </div>
                </div>

                <!--Outline Block-->
                <div class="outline-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="">
                            <a href="images/services/front-house-turfing-lawn-2.jpg" class="lightbox-image" data-fancybox="gallery">
                                <img loading="lazy" src="images/services/front-house-turfing-lawn-2.jpg" alt="Turfing lawn front house"></a>

                        </div>
                    </div>
                </div>

                <!--Outline Block-->
                <div class="outline-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="">
                            <a href="images/services/turfing-garden-2.jpg" class="lightbox-image" data-fancybox="gallery">
                                <img loading="lazy" src="images/services/turfing-garden-2.jpg" alt="Garden Turfing "></a>
                        </div>
                    </div>
                </div>

                <!--Outline Block-->
                <div class="outline-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="">
                            <a href="images/services/turfing-big-garden.jpg" class="lightbox-image" data-fancybox="gallery">
                                <img loading="lazy" src="images/services/turfing-big-garden.jpg" alt="Turfing Big garden"></a>

                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>


    @include('components/contact-form')
@endsection
