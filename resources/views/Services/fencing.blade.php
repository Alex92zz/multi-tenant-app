@extends('layouts.main')


@section('meta')
    <title>Fencing</title>
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
        <div class="image-layer" style="background-image: url({{ asset('images/services/garden-fencing.webp') }});"></div>
        <div class="banner-bottom-pattern"></div>

        <div class="banner-inner">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <h1>Fencing</h1>
                    <div class="page-nav">
                        <ul class="bread-crumb clearfix">
                            <li><a href="./"><span class="fa fa-home"></span></a></li>
                            <li>Services</li>
                            <li class="active">Fencing</li>
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
                            <h2>Fencing</h2>
                        </div>
                        <div class="upper-content">
                            <div class="big-text">
                                From intricate designs to durable structures, we deliver fencing services that go beyond the ordinary, ensuring your space is not just secured but also adorned with the finest details.
                            </div>
                            <div class="main-image">
                                <img src="images/services/fencing-garden.webp" alt="Fencing garden">
                            </div>
                            <div class="text">
                                <h5>Table of Contents</h5>
                                <div class="feature-block">
                                    <div class="inner">
                                        <div class="lower-text text">
                                            <ul>
                                                <li><a href="#artistry-of-fencing">Unveiling the Artistry of Fencing</a></li>
                                                <li><a href="#diverse-fencing-solutions">Diverse Fencing Solutions for Every Need</a></li>
                                                <li><a href="#security-beyond-boundaries">Security Beyond Boundaries</a></li>
                                                <li><a href="#tailored-fencing-designs">Tailored Fencing Designs for Your Lifestyle</a></li>
                                                <li><a href="#eco-friendly-fencing">Eco-Friendly Fencing Options</a></li>
                                                <li><a href="#professional-fencing-installation-and-maintenance">Professional Fencing Installation and Maintenance Services</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    Welcome to JB Block Paving & Landscapers, your premier destination for expert fencing solutions. With a dedication to excellence, we introduce a new era in fencing, where your outdoor spaces are not just enclosed but elevated into secure and stylish realms. Discover the benefits of choosing our fencing services:
                                </p>
                            <div class="row clearfix">
                                <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner">
                                        <div class="lower-text text">
                                            <ul>
                                                <li>Enhanced Security and Privacy</li>
                                                <li>Boost Property Value and Appeal</li>
                                                <li>Personalized Privacy</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="feature-block col-lg-6 col-md-6 col-sm-12">
                                    <div class="inner">
                                        <div class="lower-text text">
                                            <ul>
                                                <li>Low Maintenance, High Durability Fencing</li>
                                                <li>Eco-Friendly Fencing Options</li>
                                                <li>Comprehensive Fencing Service</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <h3>Unveiling the Artistry of Fencing</h3>
                                <p id="artistry-of-fencing">
                                    At JB Block Paving & Landscapers, we take pride in transforming mere boundaries into works of art. Our fencing services are designed to not only secure your property but also enhance its aesthetic appeal. Discover the artistry of fencing as we combine functionality with eye-catching designs to elevate your outdoor space.
                                </p>
                                <h3 id="diverse-fencing-solutions">Diverse Fencing Solutions for Every Need</h3>
                                <p>
                                    No two properties are alike, and neither should be their fences. Our company offers a diverse range of fencing solutions to cater to the unique needs and preferences of our clients. From classic wooden fences exuding warmth to modern metal structures exuding sophistication, JB Block Paving & Landscapers has the perfect fencing option for every taste.
                                </p>
                                <h3 id="security-beyond-boundaries">Security Beyond Boundaries</h3>
                                <p>
                                    Security is paramount, and our fencing services go beyond mere visual appeal. Explore our selection of robust and durable fencing materials that provide a reliable barrier against unwanted intruders. We prioritize your safety without compromising on the elegance of your property, ensuring peace of mind for you and your loved ones.
                                </p>

                                <h3 id="tailored-fencing-designs">Tailored Fencing Designs for Your Lifestyle</h3>
                                <p>Your property is a reflection of your lifestyle, and our fencing designs are tailored to complement it seamlessly. Whether you prefer a private retreat with high fencing or an open concept that seamlessly merges with the surroundings, JB Block Paving & Landscapers crafts fencing solutions that align with your lifestyle and preferences.</p>

                                <h3 id="eco-friendly-fencing">Eco-Friendly Fencing Options</h3>
                                <p>
                                    In an era of environmental consciousness, our company is committed to offering eco-friendly fencing options. Explore our range of sustainable materials and practices that contribute to a greener planet while providing the security and style you desire. At JB Block Paving & Landscapers, we believe in building a better future, one fence at a time.
                                </p>

                                <h3 id="professional-fencing-installation-and-maintenance">Professional Fencing Installation and Maintenance Services</h3>
                                <p>
                                    Our commitment to excellence extends beyond the design phase. Benefit from our professional installation services that ensure your fence stands the test of time. Additionally, we offer maintenance services to keep your fencing looking pristine year after year. Trust JB Block Paving & Landscapers for quality craftsmanship and reliable, long-lasting fencing solutions.
                                </p>
                            </div>

                            

                            <div class="process">
                                <div class="row clearfix">
                                    <div class="block col-lg-4 col-md-4 col-sm-12">
                                        <div class="inner">
                                            <h4>Initial Consultation </h4>
                                            <div class="text">Collaborate with our experts to design a captivating fencing layout tailored to your preferences.</div>
                                            <div class="count"><span>01</span></div>
                                        </div>
                                    </div>
                                    <div class="block col-lg-4 col-md-4 col-sm-12">
                                        <div class="inner">
                                            <h4>Get Your Plan </h4>
                                            <div class="text">Review and approve your final fencing plan for optimal security and visual appeal.</div>
                                            <div class="count"><span>02</span></div>
                                        </div>
                                    </div>
                                    <div class="block col-lg-4 col-md-4 col-sm-12">
                                        <div class="inner">
                                            <h4>Start a Project </h4>
                                            <div class="text">Initiate your fencing project with our skilled professional team.</div>
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
                            <a href="images/services/garden-fence.webp" class="lightbox-image" data-fancybox="gallery">
                                <img loading="lazy" src="images/services/garden-fence.webp" alt="Fencing Garden"></a>

                        </div>
                    </div>
                </div>

                <!--Outline Block-->
                <div class="outline-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="">
                            <a href="images/services/nice-design-fence-garden.webp" class="lightbox-image" data-fancybox="gallery">
                                <img loading="lazy" src="images/services/nice-design-fence-garden.webp" alt="Fencing Garden photo 2"></a>

                        </div>
                    </div>
                </div>

                <!--Outline Block-->
                <div class="outline-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="">
                            <a href="images/services/block-paving-garden-4.webp" class="lightbox-image" data-fancybox="gallery">
                                <img loading="lazy" src="images/services/block-paving-garden-4.webp" alt="Fencing Garden photo 3"></a>

                        </div>
                    </div>
                </div>

                <!--Outline Block-->
                <div class="outline-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="">
                            <a href="images/services/wooden-wall-garden.webp" class="lightbox-image" data-fancybox="gallery">
                                <img loading="lazy" src="images/services/wooden-wall-garden.webp" alt="Fencing Garden photo 4"></a>

                        </div>
                    </div>
                </div>

                <!--Outline Block-->
                <div class="outline-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="">
                            <a href="images/services/wooden-stairs-garden.webp" class="lightbox-image" data-fancybox="gallery">
                                <img loading="lazy" src="images/services/wooden-stairs-garden.webp" alt="Fencing Garden photo 5"></a>

                        </div>
                    </div>
                </div>

                <!--Outline Block-->
                <div class="outline-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="">
                            <a href="images/services/garden-new-fence.webp" class="lightbox-image" data-fancybox="gallery">
                                <img loading="lazy" src="images/services/garden-new-fence.webp" alt="Fencing Garden photo 6"></a>

                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>


    @include('components/contact-form')
@endsection
