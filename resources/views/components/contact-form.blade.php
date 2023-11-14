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