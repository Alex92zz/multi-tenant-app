<div class="section parallax scroll-detect dark mb-0 py-6">
    <img src="" class="parallax-bg">

    <div class="heading-block text-center">
        <h3>What Our Clients Say?</h3>
    </div>

    <div class="fslider testimonial testimonial-full" data-animation="fade" data-arrows="true">
        <div class="flexslider">
            <div class="slider-wrap">
                @foreach ($testimonials as $testimonial)
                    <div class="slide">
                        <div class="row flex-column text-center align-items-center gy-3">
                            <div class="col-auto pt-1">
                                <img class="rounded-circle w-auto mx-auto" src="images/testimonials/default-avatar.jpg"
                                    width="56" height="56" alt="Customer Testimonails">
                            </div>
                            <div class="col-lg-5">
                                <p class="mb-3 fs-5 font-secondary">
                                    {{ $testimonial['data']['paragraph'] }}
                                </p>
                                <h4 class="h6 mb-0 fw-medium">
                                    {{ $testimonial['data']['name'] }}
                                </h4>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</div>
