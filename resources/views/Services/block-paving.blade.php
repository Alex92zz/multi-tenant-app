@extends('layouts.main')


@section('meta')
    <title>Block Paving | JB Block Paving & Landscapers</title>
    <meta name="description" content="Discover the perfect blend of durability and elegance with JB Block Paving & Landscapers. Our expert team transforms outdoor spaces with precision block paving, enhancing driveways and patios. Choose style tailored to you with unbeatable quality, quick turnaround times, and a 100% satisfaction guarantee. Elevate your property's curb appeal with our exceptional block paving services. Contact us for a free quote and make 'block paving' synonymous with enduring quality.">
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
                    <h1>Block Paving</h1>
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
                            <div class="title-icon"><span class="icon"><img loading="lazy" src="images/icons/leaf-two.png" alt="Leaf icon"
                                        title=""></span></div>
                            <div class="subtitle">Service Details</div>
                            <h2>Block Paving</h2>
                        </div>
                        <div class="upper-content">
                            <div class="big-text">Count on our expertise and precise workmanship to deliver exceptional
                                block paving services for your driveway and patio. </div>
                            <div class="main-image">
                                <img loading="lazy" src="images/services/block-paving-2.webp" alt="Block Paving">
                            </div>
                            <div class="text">
                                <h5>Table of Contents</h5>
                                <div class="feature-block">
                                    <div class="inner">
                                        <div class="lower-text text">
                                            <ul>
                                                <li><a href="#satisfaction-guarantee">Satisfaction Guarantee</a></li>
                                                <li><a href="#style">Style</a></li>
                                                <li><a href="#low-maintenance">Low Maintenance</a></li>
                                                <li><a href="#pathways-and-patios">Pathways and Patios</a></li>
                                                <li><a href="#paving-and-landscaping">Paving and Landscaping</a></li>
                                                <li><a href="#your-paving-partner">Your Paving Partner</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    Welcome to JB Block Paving & Landscapers, your newly established, go-to specialist for
                                    paving and landscaping solutions. With a commitment to excellence, we bring a fresh
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
                                <h3>Unparalleled Craftsmanship and Satisfaction Guarantee </h3>
                                <p id="satisfaction-guarantee">At JB Block Paving & Landscapers, we stand by our promise of
                                    unparalleled quality of
                                    workmanship. Our skilled team guarantees unbeatable prices, quick turnaround times, and
                                    a 100% satisfaction guarantee. From driveways to patios, we have the expertise to exceed
                                    your expectations and make your outdoor dreams a reality.
                                </p>
                                <h3 id="style">Style Tailored to You</h3>
                                <p>
                                    Discover a myriad of choices in styles, patterns, thicknesses, textures, and colors for
                                    your block paving. Our expert team is ready to guide you through the design stage,
                                    offering inspiration and ideas. Whether you lean towards traditional herringbone
                                    patterns or desire a contemporary or rustic look, we turn your visions into reality with
                                    precision and excellence.
                                </p>
                                <h3 id="low-maintenance">Durable and Low-Maintenance Elegance</h3>
                                <p>
                                    Block paving isn't just about aesthetics; it's a durable and low-maintenance solution
                                    for your driveway. Unlike tarmac or asphalt, block paving withstands wear and tear
                                    without cracking. It remains cool in the summer, making it an ideal choice for those who
                                    park their cars on the driveway.
                                </p>

                                <h3 id="pathways-and-patios">Pathways and Patios Redefined</h3>
                                <p>Extend the beauty of block paving to pathways and patios. Our small stones create a
                                    robust support structure, allowing for easy customization of curved pathways through
                                    gardens or connections between driveways and houses. Say goodbye to the worries of rot,
                                    insects, and maintenance associated with wood decking; block paving provides a
                                    hassle-free solution.</p>

                                <h3 id="paving-and-landscaping">Expertise in Paving and Landscaping</h3>
                                <p>
                                    Explore our paving and landscaping expertise at JB Block Paving & Landscapers, where
                                    we've quickly become a trusted name. Our comprehensive services include paths, patio
                                    design and construction, block paving, brickwork, rockeries, and garden walls. For
                                    additional services like landscaping, drainage, groundwork, and driveway asphalting, our
                                    team ensures a thorough job and a free cleanup service at the project's completion.
                                </p>

                                <h3 id="your-paving-partner">Your Paving Partner</h3>
                                <p>
                                    Take advantage of our extensive experience without worrying about sub-contractors. We
                                    provide paving and landscaping services at reasonable prices, and our professional team
                                    handles all work without compromises. Call us today to discuss your requirements, and
                                    our staff will guide you, providing advice and a free quote without any upfront
                                    deposits. Elevate your outdoor spaces with confidence - choose JB Block Paving &
                                    Landscapers for a transformation that lasts.
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
                            <a href="images/services/block-paving-garden.webp" class="lightbox-image" data-fancybox="gallery">
                                <img loading="lazy" src="images/services/block-paving-garden.webp" alt="Block Paving Garden"></a>

                        </div>
                    </div>
                </div>

                <!--Outline Block-->
                <div class="outline-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="">
                            <a href="images/services/block-paving-garden-2.webp" class="lightbox-image" data-fancybox="gallery">
                                <img loading="lazy" src="images/services/block-paving-garden-2.webp" alt="Block Paving Garden photo 2"></a>

                        </div>
                    </div>
                </div>

                <!--Outline Block-->
                <div class="outline-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="">
                            <a href="images/services/block-paving-garden-3.webp" class="lightbox-image" data-fancybox="gallery">
                                <img loading="lazy" src="images/services/block-paving-garden-3.webp" alt="Block Paving Garden photo 3"></a>

                        </div>
                    </div>
                </div>

                <!--Outline Block-->
                <div class="outline-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="">
                            <a href="images/services/block-paving-garden-7.webp" class="lightbox-image" data-fancybox="gallery">
                                <img loading="lazy" src="images/services/block-paving-garden-7.webp" alt="Block Paving Garden photo 4"></a>

                        </div>
                    </div>
                </div>

                <!--Outline Block-->
                <div class="outline-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="">
                            <a href="images/services/block-paving-garden-5.webp" class="lightbox-image" data-fancybox="gallery">
                                <img loading="lazy" src="images/services/block-paving-garden-5.webp" alt="Block Paving Garden photo 5"></a>
                        </div>
                    </div>
                </div>

                <!--Outline Block-->
                <div class="outline-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="">
                            <a href="images/services/block-paving-garden-6.webp" class="lightbox-image" data-fancybox="gallery">
                                <img loading="lazy" src="images/services/block-paving-garden-6.webp" alt="Block Paving Garden photo 6"></a>

                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>


    @include('components/contact-form')
@endsection
