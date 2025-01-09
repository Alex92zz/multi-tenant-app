<div class="container">
    <div class="row align-items-center col-mb-50">
        <div class="col-md-6 text-center">
            <img data-animate="fadeInLeft" src="{{ asset($content['url']) }}" alt="Iphone">
        </div>

        <div class="col-md-6 text-center text-md-start">
            <div class="heading-block border-bottom-0">
                <h3>{{ $content['heading'] }}</h3>
            </div>

            <p>
                {{ $content['paragraph'] }}
            </p>

            <a href="#"
                class="button button-border button-dark button-rounded button-large ms-0 mt-4">Learn
                more</a>
        </div>
    </div>
</div>