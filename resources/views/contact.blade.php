@extends('layouts.main')


@section('meta')
    <title>Contact Page | JB Block Paving & Landscapers</title>
    <meta name="description"
        content="Connect with JB Blockpaving & Landscapers Ltd on our Contact page, where excellence meets accessibility. As trusted specialists in block paving and tarmac installation, our passionate team is ready to discuss and transform your outdoor spaces with precision and creativity. Explore top-quality solutions for durable and aesthetically pleasing driveways and pathways. Reach out to us and bring your vision to life!">
        <meta name="author" content="JB Block Paving & Landscapers">
@endsection


@section('content')
    <!-- Banner Section -->
    <section class="page-banner">
        <div class="image-layer" style="background-image:url(images/contact-page/3.jpg);"></div>
        <div class="banner-bottom-pattern"></div>

        <div class="banner-inner">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <h1>Contact</h1>
                    <div class="page-nav">
                        <ul class="bread-crumb clearfix">
                            <li><a href="{{ route('home') }}"><span class="fa fa-home">Home</span></a></li>
                            <li class="active">Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->

    <!--Contact Section-->
    <section class="contact-three">
        <div class="outer-container">
            <div class="row clearfix">
                <!--Text Col-->
                <div class="text-col col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner clearfix">
                        <div class="top-icon"><span class="flaticon-garden"></span></div>
                        <div class="content-box">
                            <div class="sec-title">
                                <div class="title-icon"><span class="icon"><img src="images/icons/leaf-two.png"
                                            alt="" title=""></span></div>
                                <div class="subtitle">Get In Touch</div>
                                <h2>Here to Help You</h2>

                            </div>

                            <div class="address">
                                <p class="mb-40">
                                    Have a question or need a quote? Contact JB Blockpaving & Landscapers LTD for top-notch
                                    block paving, tarmac, landscaping, fencing, and garden maintenance services. Contact us
                                    now for a quote and let your outdoor dreams blossom into reality!
                                </p>
                                <h5>Our Office</h5>


                                <div class="text">2 Power Station Road <br>Stourport on Severn <br>DY13 9PF, UK</div>
                                <div class="link">
                                    <a href="#map-section" class="theme-btn"><span class="btn-title">Find On Map <i
                                                class="arrow flaticon-play-button-1"></i></span></a>
                                </div>
                            </div>

                            <div class="info">
                                <div class="row clearfix">
                                    <!--Block-->
                                    <div class="info-block col-xl-8 col-lg-8 col-md-8 col-sm-12">
                                        <div class="inner-box">
                                            <div class="icon"><span class="flaticon-message-1"></span></div>
                                            <h6>Phone &amp; Email</h6>
                                            <ul>
                                                <li><a href="tel:07503441356">07503 441 356</a></li>
                                                <li><a href="tel:01562539331">01562 539 331</a></li>
                                                <li>
                                                    <div id="obfuscatedEmailLinkContactPage"></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!--Text Col-->
                <div class="form-col col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="image-layer" style="background-image:url(images/contact-page/contact-form-bg.jpg);">
                    </div>
                    <div class="image-right"><img src="images/contact-page/1.jpg" alt=""></div>
                    <div class="inner clearfix">
                        <div class="content-box">
                            <div class="sec-title">
                                <div class="title-icon"><span class="icon"><img src="images/icons/leaf-two.png"
                                            alt="" title=""></span></div>
                                <div class="subtitle">Drop a Line</div>
                                <h2>Send Message Us</h2>
                            </div>

                            <div class="contact-form default-form">
                                <form method="post" action="{{ route('contactForm.submit') }}" id="contact-form">
                                    <div class="row clearfix">
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <div class="field-inner">
                                                <input type="text" name="first_name" id="first_name" value=""
                                                    placeholder="Your Name*" required>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <div class="field-inner">
                                                <input type="email" name="email" id="email" value=""
                                                    placeholder="Email Address*" required>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <div class="field-inner">
                                                <input type="text" name="phone_number" id="phone_number" value=""
                                                    placeholder="Phone" required>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            <div class="field-inner">
                                                <select name="service" id="service">
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
                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <div class="field-inner">
                                                <textarea name="message" id="message" placeholder="Your Message ..." required></textarea>
                                            </div>
                                        </div>

                                        <div class="g-recaptcha" data-sitekey="6LefIscoAAAAAL_hgoA7mXVj9q-A23cuqsthlXCu">
                                        </div>

                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <div class="field-inner">
                                                <button type="submit" class="theme-btn btn-style-four alternate"><span
                                                        class="btn-title">Submit Now <i
                                                            class="arrow flaticon-play-button-1"></i></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div id="dialog" title="Thank you for contacting us.">
                                    <p>We have received your enquiry and will respond to you as soon as possible.
                                        For urgent enquiries please call us on one of the telephone numbers listen
                                        on the contact section.</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--Map-->
    <section class="map-section" id="map-section">
        <div class="map-outer">
            <div class="map-box">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d73568.22519213158!2d-2.209064307618295!3d52.37562156521598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4870f3542e78c96b%3A0xe0ae3a42c1da475b!2s2%20Power%20Station%20Rd%2C%20Stourport-on-Severn%20DY13%209PF!5e0!3m2!1sen!2suk!4v1699547799029!5m2!1sen!2suk"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        function obfuscateEmail(email) {
            var obfuscatedEmail = email.replace(/[a-zA-Z]/g, function(c) {
                return '&#' + c.charCodeAt(0) + ';';
            });
            return obfuscatedEmail;
        }

        // Example email address
        var originalEmail = 'peter@pwtreecarelandscaping.co.uk';
        var obfuscatedEmail = obfuscateEmail(originalEmail);

        // Get the target element by its ID
        var emailLink2 = document.getElementById('obfuscatedEmailLinkContactPage');

        // Set the obfuscated email address as the href and innerHTML of the <a> element
        emailLink2.innerHTML = obfuscatedEmail;
    </script>
    @endsection
