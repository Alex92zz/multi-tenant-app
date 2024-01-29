    <!-- ==================== Start Footer ==================== -->

    <footer>
        <div class="footer-container">
            <div class="sub-footer pt-40 pb-40 ontop">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="logo">
                                <img src="{{ asset('assets/imgs/logo/fmv-logo-clean.png') }}" alt="FMV GROUP Logo"
                                    style="width:auto; height:100px;">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="copyright d-flex">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container pb-20 pt-80 bord-thin-top ontop">
                <div class="row pb-20">
                    <div class="col-lg-3">
                        <div class="colum md-mb50">
                            <div class="tit mb-20">
                                <h6>Contact Us</h6>
                            </div>

                            <div class="text">

                                <p class="mb-10">
                                    <span id="obfuscatedEmailLink"></span>
                                </p>
                                <p>Unit B, 250 Coombs Road, Halesowen, B62 8AA</p>
                                <p>
                                    Andy: <a href="tel:07904337676">0790 4337 676</a>

                                </p>
                                <p>
                                    Lee: <a href="tel:07428749057">0742 8749 057</a>
                                </p>


                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="colum md-mb50">
                            <div class="tit mb-20">
                                <h6>About Us</h6>
                            </div>
                            <div class="text">
                                <p class="mb-10">
                                    <a href="about-fmvgroup">FMV Group</a>
                                </p>
                                <p class="mb-10">
                                    <a href="about-mld">MLD Services</a>
                                </p>
                                <p class="mb-10">
                                    <a href="../about-flowlee-meter-verification">Flowlee Meter Verification</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 md-mb50">
                        <div class="tit mb-20">
                            <h6>Services</h6>
                        </div>
                        <div class="text">
                            <p class="mb-10">
                                <a href="../meter-verification">Meter Verification</a>
                            </p>
                            <p class="mb-10">
                                <a href="../electromagnetic-metering-services">Electromagnetic Metering</a>
                            </p>
                            <p class="mb-10">
                                <a href="../meter-xchange">Meter Exchange</a>
                            </p>
                            <p class="mb-10">
                                <a href="../leak-detection-services">Leak Detection Services</a>
                            </p>

                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="tit mb-20">
                            <h6>Latest Articles</h6>
                        </div>
                        <div class="text">
                            @foreach ($recentBlogPosts->take(3) as $recentPost)
                            <p class="mb-10">
                                <a  href="{{ route('posts.show', ['slug' => $recentPost->slug]) }}">{{ $recentPost->title }}</a>
                            </p>
                            @endforeach
                        </div>
                            

                           
                    </div>
                </div>
                <div class="sub-footer pt-20  bord-thin-top ontop">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="logo">
                                    <p>© 2023 All Rights Reserved, FMV GROUP LTD, Company no: 14388703</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="copyright d-flex" style="float:right;">

                                    <a href="privacy-policy">Privacy Policy</a>
                                    <a href="anti-bribery-policy">Anti Bribery Policy</a>
                                    <a href="modern-slavery-act-statement">Modern Slavery Act Statement</a>
                                    <a href="#">Sitemap</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </footer>

    <!-- ==================== End Footer ==================== -->
