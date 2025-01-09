<div class="container">
    <div id="oc-clients" class="owl-carousel image-carousel carousel-widget" data-margin="60" data-loop="false"
        data-nav="false" data-autoplay="5000" data-pagi="false" data-items-xs="2" data-items-sm="3" data-items-md="4"
        data-items-lg="5" data-items-xl="6">
        <div class="oc-item p-4 op-ts op-05 h-op-1">
            @foreach ($logoBrands as $logo)
                @if (isset($logo['data']))
                    <img src="{{ asset($logo['data']['url']) }}" alt="{{ $logo['data']['alt'] }}">
                @endif
            @endforeach
        </div>
    </div>
</div>
