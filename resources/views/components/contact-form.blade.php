<!-- ==================== Start Contact ==================== -->

<section class="contact-crev no-crev section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="sec-head md-mb80">
                    <h6 class="sub-title wow fadeInUp">Get In Touch</h6>
                    <h2 class="fz-50 d-rotate wow">
                        <span class="rotate-text">Experts in Flow Measurement Solutions</span>
                    </h2>
                    <p class="fz-15 mt-10">FMV Group’s past is deep rooted in flow measurement for the water, gas,
                        petro/chemical and many other industries. Our experience across flow and network measurement is
                        what allows us to provide practical solutions for our clients.
                    </p>
                    <p class="fz-15 mt-10">If you would like to work with us or just want to get in
                        touch, we’d love to hear from you!</p>
                    <p class="phone fz-30 fw-600 mt-30 ">
                        Andy: <a class="main-color2" href="tel:07904337676">0790 4337 676</a>
                        <br />
                        Lee: <a class="main-color2" href="tel:07428749057">0742 8749 057</a>
                    </p>

                </div>
            </div>
            <div class="col-lg-6 offset-lg-1 valign">
                <div class="full-width">
                    <form method="post" action="{{ route('contactForm.submit') }}">
                        @csrf

                        <div class="messages"></div>

                        <div class="controls row">

                            <div class="col-lg-12">
                                <div class="form-group mb-30">
                                    <input id="first_name" type="text" name="first_name" placeholder="Name"
                                        required="required" minlength="4" maxlength="30">
                                        <input type="text" name="last_name" style="display: none;">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group mb-30">
                                    <input id="email" type="email" name="email" placeholder="Email"
                                        required="required" minlength="4" maxlength="35">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group mb-30">
                                    <input id="phone_number" type="text" name="phone_number" placeholder="Phone"
                                        required="required" minlength="4" maxlength="15">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <textarea id="message" name="message" placeholder="Message" rows="4" required="required" maxlength="800"></textarea>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mb-30">
                                        <div class="g-recaptcha"
                                            data-sitekey="6LfC_lkpAAAAAKVKmbqJBKXXN1huH5cO7BC-HBu3"></div>
                                    </div>
                                </div>

                                <div class="mt-30">
                                    <button type="submit" class="butn butn-full butn-bord radius-30">
                                        <span class="text">Let's Talk</span>
                                    </button>
                                </div>
                            </div>

                        </div>
                    </form>


                    <div id="dialog" title="Thank you for contacting us.">
                        <p>We have received your enquiry and will respond to you as soon as possible. For urgent
                            enquiries please call us on one of the telephone numbers listen on the contact section.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== End Contact ==================== -->
