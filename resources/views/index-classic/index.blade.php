@extends('layouts.main')



@section('content')
    @include('index-classic.components.nav-bar')

    @include('index-classic.components.hero-section')

    <!-- Content
              ============================================= -->
    <section id="content">


        <div class="content-wrap">

            @foreach ($aboutUs as $block)
                @if ($block['type'] === 'banner')
                    @include('index-classic.components.banner', ['content' => $block['data']])
                @elseif ($block['type'] === 'img_left_txt_right')
                    @include('index-classic.components.img-left-txt-right', ['content' => $block['data']])
                @elseif ($block['type'] === 'img_right_txt_left')
                    @include('index-classic.components.img-right-txt-left', ['content' => $block['data']])
                    @endif
            @endforeach

            @if (!empty($galleryItems))
                @include('index-classic.components.gallery', ['galleryItems' => $galleryItems])
            @endif

            @if (!empty($testimonials))
                @include('index-classic.components.testimonials', ['testimonials' => $testimonials])
            @endif

            @if (!empty($logoBrands))
                @include('index-classic.components.logo-slider', ['logoBrands' => $logoBrands])
            @endif

        </div>
    </section>
    <!-- #content end -->

    @include('index-classic.components.footer')
@endsection
