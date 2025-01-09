<!-- Hero Section
  ============================================= -->
<section id="slider" class="slider-element slider-parallax min-vh-100 dark">
    <div class="slider-inner"
        style="background: linear-gradient(to bottom, transparent, rgba(0,0,0,0.3)), url('{{ $heroImage['url'] }}') top center no-repeat; background-size: cover;">

        <div class="vertical-middle">
            <div class="container py-5 py-md-0">
                <div class="row parallax" data-0-start="opacity:1; transform: translateY(0px);"
                    data-0-end="opacity:0.1; transform: translateY(-30px);">
                    <div class="col-lg-7 col-md-8">
                        <h6 class="text-uppercase ls-4 fw-normal op-05">Before Headings</h6>
                        @if ($heroHeading)
                            <{{ $heroHeading['level'] }} class="display-4 fw-bold">{{ $heroHeading['content'] }}
                                </{{ $heroHeading['level'] }}>
                        @endif
                        <p class="lead text-white-50 mb-5">
                            {{ $heroParagraph }}
                        </p>
                        <a href="#" class="btn btn-light btn-lg border-width-2 px-4">Sign Up</a>
                        <a href="#" class="btn btn-outline-light btn-lg ms-2 border-width-2">View More</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>
