<section id="slider" class="slider-element slider-parallax swiper_wrapper min-vh-60 min-vh-md-100 include-header">
    <div class="slider-inner">

        <div class="swiper swiper-parent">
            <div class="swiper-wrapper">
                <div class="swiper-slide dark">
                    <div class="container">
                        <div class="slider-caption slider-caption-center">
                            @if ($heroHeading)
                                <{{ $heroHeading['level'] }} data-animate="fadeInUp">{{ $heroHeading['content'] }}
                                    </{{ $heroHeading['level'] }}>
                            @endif

                            @if ($heroParagraph)
                                <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">
                                    {{ $heroParagraph }}
                                </p>
                            @endif
                        </div>
                    </div>
                    <div class="swiper-slide-bg" style="background-image: url('{{ $heroImage['url'] }}');">
                        <div
                            style="background: rgba(0, 0, 0, 0.6); position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <a href="#" data-scrollto="#content" class="one-page-arrow dark"><i
                class="bi-chevron-down infinite animated fadeInDown"></i></a>

    </div>
</section>
