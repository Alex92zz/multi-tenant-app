@extends('layouts.main')


@section('meta')
    <title>{{ $post->title }} | JB Block Paving & Landscapers"</title>
    <meta name="description" content="{{ $post->page_description }}">
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
                <div id="image-layer-1" class="image-layer image-size image-layer-1-before" style="opacity: 0.5; ">
                </div>
                <div class="auto-container">
                    <div class="content-box">
                        <div class="content clearfix">
                            <div class="inner">
                                <div class="subtitle"><span class="icon"></span>Welcome to <br /> PW Tree Care
                                    &amp; Landscaping Services</div>

                                <h1>{{ $post->category }} services <br> in {{ $post->location }}</h1>

                                <div class="text">We are a company with 19 years of experience in landscaping
                                    services and tree care with excellent customer service.</div>

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
                <div id="image-layer-2" class="image-layer image-size image-layer-2-before" style="opacity: 0.5;">
                </div>
                <div class="auto-container">
                    <div class="content-box right-aligned">
                        <div class="content clearfix">
                            <div class="inner">
                                <div class="subtitle"><span class="icon"></span> Block Paving &amp; Graveling
                                </div>
                                <h2>Complete Solutions <br>for Your Landscaping</h2>
                                <div class="text">We ensure the right time and attention is applied to every block
                                    paving project to ensure a long-lasting and flawless finish every single time.
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
                <div id="image-layer-3" class="image-layer image-size image-layer-3-before" style="opacity: 0.5;">
                </div>
                <div class="auto-container">
                    <div class="content-box">
                        <div class="content clearfix">
                            <div class="inner">
                                <div class="subtitle"><span class="icon"></span> Jet Washing</div>
                                <h2>Jet Washing <br>Any Surface</h2>
                                <div class="text">We Provide Excellent Jet Washing Services in
                                    Stourport-on-Severn
                                    and surrounding areas</div>
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

    <!----------------------------------------Call to Action---------------------------------------->
    <section class="call-to-action">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="title-col col-xl-7 col-lg-12 col-md-12">
                    <div class="inner">
                        <h4>Do you need {{ $post->category }} services?</h4>
                    </div>
                </div>
                <div class="info-col col-xl-5 col-lg-12 col-md-12">
                    <div class="inner clearfix">
                        <ul class="info clearfix">
                            <li><a href="#contact"><span>Send Message</span> <i
                                        class="arrow flaticon-play-button-1"></i></a></li>
                            <li><a href="tel:01299888389"><span>01299 888389</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----------------------------------------END to Action---------------------------------------->

    <!--------------------------------------------------About Section-------------------------------------------------->
    <section class="about-section " id="about">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Text Column-->
                <div class="text-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="sec-title">
                            <div class="title-icon"><span class="icon"><img loading="lazy"
                                        src="{{ asset('images/icons/leaf-two.png') }}" alt="Leaf "></span></div>
                            <div class="subtitle">About Us</div>
                            <h2>PW Tree Care &amp; Landscaping Services</h2>
                        </div>
                        <div class="text">
                            <p class="bigger-text">{{ $post->about_us_green_subtitle }}</p>

                            <p>
                                {!! $post->about_us_paragraph !!}
                            </p>
                        </div>
                        <div class="quote-box">

                            <div class="quote">
                                <div class="quote-icon"><span></span></div>
                                <div class="quote-text">
                                    "Our company provides the best {{ $post->category }} services in {{ $post->location }}.
                                    With our
                                    expertise in {{ $post->category }}, we transform outdoor spaces into stunning
                                    landscapes. Contact us today to bring your dreams to life."
                                </div>
                                <div class="info"><span class="name">Peter W,</span> <span class="designation">Founder
                                        of PW Tree Care &amp; Landscaping
                                        Services</span></div>
                            </div>
                        </div>
                        <div class="lower-box clearfix">
                            <div class="link-box">
                                <a href="/gallery" class="theme-btn btn-style-four"><span class="btn-title">Views
                                        Gallery <i class="arrow flaticon-play-button-1"></i></span></a>
                            </div>

                        </div>
                    </div>
                </div>
                <!--Image Column-->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="image-box clearfix">
                            <figure class="image"><img loading="lazy" src="images/collages/about.jpg"
                                    alt="{{ $post->category }} in {{ $post->location }}"></figure>
                            <div class="caption">
                                <span class="icon flaticon-leaves"></span>
                                <span class="big-txt">19</span>
                                <span class="txt">Years in<br>{{ $post->category }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--------------------------------------------------End About Section-------------------------------------------------->

    <!-------------------------------------- Start Projects Section ---------------------------------------------------->
    @include('components/home-page/projects-section')
    <!-------------------------------------- End Projects Section ---------------------------------------------------->

    <!-------------------------------------- Start What We Do Section ---------------------------------------------------->
    @include('components/home-page/what-we-do')
    <!-------------------------------------- End What We Do Section ---------------------------------------------------->


    <!-------------------------------------- Start Why Us Section ---------------------------------------------------->
    @include('components/home-page/why-us')
    <!-------------------------------------- End Why Us Section ---------------------------------------------------->


    <!----------------------------------------Call to Action---------------------------------------->
    <section class="call-to-action">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="title-col col-xl-7 col-lg-12 col-md-12">
                    <div class="inner">
                        <h4>Do you need {{ $post->category }} services?</h4>
                    </div>
                </div>
                <div class="info-col col-xl-5 col-lg-12 col-md-12">
                    <div class="inner clearfix">
                        <ul class="info clearfix">
                            <li><a href="#contact"><span>Send Message</span> <i
                                        class="arrow flaticon-play-button-1"></i></a></li>
                            <li><a href="tel:01299888389"><span>01299 888389</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----------------------------------------END to Action---------------------------------------->


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
                            <div class="sub-text">Request Your Free {{ $post->category }} Estimate in
                                {{ $post->location }} from PW Tree Care &amp; Landscaping Services. Trusted Professionals
                                Dedicated to Transforming Your Outdoor Space with Expertise and Precision.</div>

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
                                                    <select name="service">
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
                            <figure class="image"><img loading="lazy"
                                    src="{{ asset('images/resource/artificial-lawn.jpg') }}"
                                    alt="{{ $post->category }} in {{ $post->location }}" title=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-------------------------------------- END of Contact Section -------------------------------------->

    </div>
@endsection


