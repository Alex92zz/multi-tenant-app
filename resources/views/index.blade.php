@extends('layouts.main')


@section('meta')
    <title>JB Block Paving Kidderminster | Tarmac Surfacing | Tree Removal</title>
    <meta name="description"
        content="Connect with JB Blockpaving & Landscapers Ltd on our Contact page, where excellence meets accessibility. As trusted specialists in block paving and tarmac installation, our passionate team is ready to discuss and transform your outdoor spaces with precision and creativity. Explore top-quality solutions for durable and aesthetically pleasing driveways and pathways. Reach out to us and bring your vision to life!.">
    <meta name="author" content="JB Block Paving & Landscapers">
@endsection

@section('content')
    <!--Form Back Drop-->
    <div class="form-back-drop"></div>


    <!-------------------------------------------------- Banner Section -------------------------------------------------->
    <!-- Banner Section -->
    <section class="banner-section banner-one">

        <div class="banner-carousel owl-theme owl-carousel">
            <!-- Slide Item -->
            <div class="slide-item">
                <div id="image-layer-1" class="image-layer image-size image-layer-1-before" style="opacity: 0.4; ">
                </div>
                <div class="auto-container">
                    <div class="content-box">
                        <div class="content clearfix">
                            <div class="inner">
                                <div class="subtitle">Welcome to <br /> JB BLOCKPAVING &amp; LANDSCAPERS LTD</div>
                                <h1>Expert Block Paving Services</h1>
                                <div class="text">
                                    We are a specialist paving and driveways company. Specializing in driveways, walkways,
                                    and patios, we blend precision design with durable materials for stunning results. Our
                                    process includes free, no-obligation quotes, quick turnarounds, and an unyielding
                                    commitment to 100% satisfaction. Transform your surroundings with our meticulous
                                    approach to block paving.

                                </div>
                                <div class="link-box clearfix">
                                    <a href="#about" class="theme-btn btn-style-one"><span class="btn-title">Read
                                            More <i class="arrow flaticon-play-button-1"></i></span></a>
                                    <a href="#contact" class="theme-btn btn-style-two"><span class="btn-title">Contact Us <i
                                                class="arrow flaticon-play-button-1"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide Item -->
            <div class="slide-item">
                <div id="image-layer-2" class="image-layer image-size image-layer-2-before" style="opacity: 0.4;">
                </div>
                <div class="auto-container">
                    <div class="content-box right-aligned">
                        <div class="content clearfix">
                            <div class="inner">
                                <div class="subtitle">Welcome to <br /> JB BLOCKPAVING &amp; LANDSCAPERS LTD</div>
                                <h2>Tarmac Paving Services</h2>
                                <div class="text">
                                    Transform your property with precision tarmac paving services. Specializing in driveways
                                    we offer durable, cost-effective asphalt solutions. Uncover reliable quality for your
                                    surfacing needs.
                                </div>
                                <div class="link-box clearfix">
                                    <a href="#services" class="theme-btn btn-style-one"><span class="btn-title">Services <i
                                                class="arrow flaticon-play-button-1"></i></span></a>
                                    <a href="#contact" class="theme-btn btn-style-three"><span class="btn-title">Contact Us
                                            <i class="arrow flaticon-play-button-1"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide Item -->
            <div class="slide-item">
                <div id="image-layer-3" class="image-layer image-size image-layer-3-before" style="opacity: 0.4;">
                </div>
                <div class="auto-container">
                    <div class="content-box">
                        <div class="content clearfix">
                            <div class="inner">
                                <div class="subtitle">Welcome to <br /> JB BLOCKPAVING &amp; LANDSCAPERS LTD</div>
                                <h2>Professional Fencing Services</h2>
                                <div class="text">
                                    We specialize in tailored solutions, offering expert installation and a variety of
                                    styles to enhance security and aesthetics. Explore our range of fencing services for
                                    residential and commercial spaces, ensuring privacy and charm. Contact us today for a
                                    personalized quote.
                                </div>
                                <div class="link-box clearfix">
                                    <a href="#services" class="theme-btn btn-style-one"><span class="btn-title">Read
                                            More <i class="arrow flaticon-play-button-1"></i></span></a>
                                    <a href="#testimonials" class="theme-btn btn-style-two"><span
                                            class="btn-title">Testimonials <i
                                                class="arrow flaticon-play-button-1"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-------------------------------------------------- End Banner Section -------------------------------------------------->
    <!-- End Banner Section -->

    @include('components.call-to-action')

    <!-------------------------------------- Start About Us Section ---------------------------------------------------->
    @include('components/home-page/about-us')
    <!-------------------------------------- End About Us Section ---------------------------------------------------->

    <!-------------------------------------- Start Projects Section ---------------------------------------------------->
    @include('components/home-page/projects-section')
    <!-------------------------------------- End Projects Section ---------------------------------------------------->

    <!-------------------------------------- Start What We Do Section ---------------------------------------------------->
    @include('components/home-page/what-we-do')
    <!-------------------------------------- End What We Do Section ---------------------------------------------------->


    <!-------------------------------------- Start Why Us Section ---------------------------------------------------->
    @include('components/home-page/why-us')
    <!-------------------------------------- End Why Us Section ---------------------------------------------------->


    @include('components.call-to-action')


    <!----------------------------------------------Work Process Section---------------------------------------------->
    <section class="work-process" id="process">
        <div class="round-pattern-layer"></div>
        <div class="right-leaf"><img loading="lazy" src="images/resource/leaf-1.png"
                alt="Stourport-on-Severn Landscaping service" title=""></div>
        <div class="auto-container">
            <div class="title-box">
                <div class="row clearfix">
                    <div class="left-col col-xl-6 col-lg-12 col-md-12">
                        <div class="sec-title alternate">
                            <div class="title-icon"><span class="icon"><img loading="lazy"
                                        src="images/icons/leaf-four.png" alt="Stourport-on-Severn Landscaping service"
                                        title=""></span></div>
                            <div class="subtitle">How It Works</div>
                            <h2>Working Process</h2>
                        </div>
                    </div>
                    <div class="right-col col-xl-6 col-lg-12 col-md-12">
                        <div class="text">We believe if we focus on the right processes, in the right way, any
                            garden transformation becomes a successs.</div>
                    </div>
                </div>
            </div>

            <div class="process">
                <div class="row clearfix">
                    <!--Process Block-->
                    <div class="process-block col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <img loading="lazy" src="images/Turfing/house-nr-2-a.jpg" alt="Turfing in Kiddeminster">

                            </div>
                            <div class="lower-box">
                                <div class="icon-box">
                                    <span class="flaticon-consulting"></span>
                                </div>
                                <div class="step">Step One</div>
                                <h5>Receive a Quote</h5>
                            </div>
                        </div>
                    </div>

                    <!--Process Block-->
                    <div class="process-block col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <img loading="lazy" src="images/Turfing/house-nr-2-b.jpg" alt="Turfing in Kiddeminster">

                            </div>
                            <div class="lower-box">
                                <div class="icon-box">
                                    <span class="flaticon-wheelbarrow"></span>
                                </div>
                                <div class="step">Step Two</div>
                                <h5>Clearing the area</h5>
                            </div>
                        </div>
                    </div>

                    <!--Process Block-->
                    <div class="process-block col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <img loading="lazy" src="images/Turfing/house-nr-2-d.jpg" alt="Turfing in Kiddeminster">
                            </div>
                            <div class="lower-box">
                                <div class="icon-box">
                                    <span class="flaticon-gardener-2"></span>
                                </div>
                                <div class="step">Step Three</div>
                                <h5>Compact Hardcore Base And Screed With Sand</h5>
                            </div>
                        </div>
                    </div>

                    <!--Process Block-->
                    <div class="process-block col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <img loading="lazy" src="images/Turfing/house-nr-2-e.jpg" alt="Turfing in Kiddeminster">
                            </div>
                            <div class="lower-box">
                                <div class="icon-box">
                                    <span class="flaticon-trees"></span>
                                </div>
                                <div class="step">Step Four</div>
                                <h5>Project finished</h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!----------------------------------------------END Work Process Section---------------------------------------------->


    <!-------------------------------------- Start Testimonials Section ---------------------------------------------------->
    @include('components/home-page/testimonials')
    <!-------------------------------------- End Testimonials Section ---------------------------------------------------->



    <!-------------------------------------- Contact Section -------------------------------------->
    <section class="contact-section" id="contact">
        <div class="pattern-layer"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <!--Text Column-->
                <div class="text-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="sec-title">
                            <div class="title-icon"><span class="icon"><img loading="lazy"
                                        src="images/icons/leaf-two.png" alt="Landscaping Services Halesowen"
                                        title=""></span></div>
                            <div class="subtitle">Get In Touch</div>
                            <h2>Request for Free Quote</h2>
                            <div class="sub-text">Receive complimentary project estimates from JB Blockpaving & Landscapers
                                Ltd. Contact us to get a personalized and obligation-free assessment for your paving and
                                landscaping needs.</div>
                        </div>
                        <div class="form-outer">
                            <div class="form-box">
                                <div class="discount">Get a Free Quote</div>
                                <!--Newsletter-->
                                <div class="quote-form default-form">





                                    <form method="post" action="{{ route('contactForm.submit') }}">
                                        @csrf
                                        <div class="row clearfix">
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <div class="field-inner">
                                                    <input type="text" name="name" pattern="[a-zA-Z\s]+"
                                                        minlength="4" maxlength="30" value=""
                                                        placeholder="Your Name *" required>
                                                    <span class="alt-icon far fa-user"></span>
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <div class="field-inner">
                                                    <input type="email" name="email"
                                                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" minlength="4"
                                                        maxlength="35" value="" placeholder="Email Address *"
                                                        required>
                                                    <span class="alt-icon far fa-envelope"></span>
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <div class="field-inner">
                                                    <input type="tel" pattern="[0-9]+" minlength="4" maxlength="15"
                                                        name="phone_number" value="" placeholder="Phone *"
                                                        required>
                                                    <span class="alt-icon fa fa-phone-alt"></span>
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <div class="field-inner">
                                                    <select name="service" aria-label="Select Service">
                                                        <option>Choose Service</option>
                                                        <option>Tree Care Services</option>
                                                        <option>Turfing</option>
                                                        <option>Decking and Fencing</option>
                                                        <option>Block Paving</option>
                                                        <option>Graveling</option>
                                                        <option>Jet Washing</option>
                                                        <option>Other Service</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <div class="field-inner">
                                                    <input type="text" name="address" maxlength="45" value=""
                                                        placeholder="Address *" required>
                                                    <span class="alt-icon fa fa-map-marker-alt"></span>
                                                </div>
                                            </div>

                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <div class="field-inner">
                                                    <div class="g-recaptcha"
                                                        data-sitekey="6LefIscoAAAAAL_hgoA7mXVj9q-A23cuqsthlXCu"></div>
                                                </div>
                                            </div>

                                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                <div class="field-inner">
                                                    <button type="submit"
                                                        class="theme-btn btn-style-three alternate"><span
                                                            class="btn-title">Get a Quote <i
                                                                class="arrow flaticon-play-button-1"></i></span></button>
                                                </div>
                                            </div>
                                        </div>

                                    </form>

                                    <div id="dialog" title="Thank you for contacting us.">
                                        <p>We have received your enquiry and will respond to you as soon as
                                            possible. For urgent enquiries please call us on one of the telephone
                                            numbers listen on the contact section.</p>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Image Column-->
                <div class="image-column col-lg-4 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="image-box clearfix">
                            <figure class="image"><img loading="lazy" src="images/turfing-and-wood-wall.webp"
                                    alt="Aritficial Lawn"></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-------------------------------------- END of Contact Section -------------------------------------->

    </div>
@endsection


@section('scripts')
@endsection
