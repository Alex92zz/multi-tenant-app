@extends('layouts.main')


@section('meta')

<title>{{ $category->name }} | Brilliant Web Design</title>
<meta name="author" content="Brilliant Web Design">
<meta name="description" content="UK&#039;s No. 1 website design company &amp; best web designers. Stunning &amp; effective web design in Birmingham, Halesowen, Smethwick, Quinton, Dudley, Oldbury">

@endsection


@section('content')

<!-- header-social start -->
<div class="header-social after-preloader-anim js-midnight-color js-headroom">
    <ul class="list list_center list_margin-20px hidden-box">
        <li class="list__item">
            <div class="hidden-box d-inline-block">
                <a href="https://www.facebook.com/brilliantwebdesign.co.uk" class="anim-slide js-pointer-small">
                    <i class="fab fa-facebook-f"></i>
                </a>
            </div>
        </li>
        <li class="list__item">
            <div class="hidden-box d-inline-block">
                <a href="https://twitter.com/web_brilliant" class="anim-slide tr-delay-02 js-pointer-small">
                    <i class="fab fa-twitter"></i>
                </a>
            </div>
        </li>
        <li class="list__item">
            <div class="hidden-box d-inline-block">
                <a href="https://www.instagram.com/brilliant_web_design/" class="anim-slide tr-delay-04 js-pointer-small">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </li>
        <li class="list__item">
            <div class="hidden-box d-inline-block">
                <a href="https://www.linkedin.com/company/brilliantwebdesign" class="anim-slide tr-delay-08 js-pointer-small">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
        </li>

    </ul>
</div>
<!-- header-social end -->


<!-- main start -->
<main class="js-animsition-overlay" data-animsition-overlay="true">

    <!-- pos-rel start -->
    <section id="up" class="pos-rel bg-img-cover" style="background-image:url({{ asset('assets/images/our-blog/our-blog-header/blog-header-coffe-and-desk.jpg') }})">

        <!-- bg-overlay -->
        <div class="bg-overlay-black"></div>


        <!-- lines-container start -->
        <div class="lines-container pos-rel anim-lines flex-min-height-100vh">
            <div class="padding-top-bottom-120 width-100perc">
                <!-- title start -->
                <h1 class="headline-xxxxl text-center hidden-box after-preloader-anim">
                    <span class="anim-slide">{{ $category->name }}<span class="text-color-red"></span></span>
                </h1><!-- title end -->

                <div class="margin-top-60  text-center hidden-box after-preloader-anim">
                    <a href="#down" class="border-btn js-pointer-large anim-slide js-smooth-scroll _mPS2id-h">
                        <span class="border-btn__inner">See articles</span>
                        <span class="border-btn__lines-1"></span>
                        <span class="border-btn__lines-2"></span>
                    </a>
                </div>

            </div>
        </div><!-- lines-container end -->
    </section><!-- pos-rel end -->







    <!-- blog start -->
    <div id="down" class="pos-rel section-bg-light-1" data-midnight="black">
        <!-- pos-rel start -->
        <div class="pos-rel padding-top-30 padding-bottom-120">
            <!-- flex-container start -->
            <div class="container flex-container">
                <!-- blog column start -->
                <div class="eight-columns column-100-100">



                    @foreach ($categoryPosts->take(5) as $post)

                    <!-- blog-entry start -->
                    <article class="padding-top-90">
                        <div class="content-bg-light-2">
                            <a href="{{ route('posts.show', ['slug' => $post->slug]) }}" class="d-block hover-box js-pointer-large js-animsition-link">

                                <div class="hidden-box anim-overlay js-scrollanim">

                                    <picture style="max-height: 400px;
                                    width: 100%;">
                                        <source type="image/webp" srcset="{{ asset($post->thumbnail) }}">
                                        <img  loading="lazy" class="img-hover-scale" src="{{ asset($post->thumbnail) }}" alt="{{ $post->title }}">
                                    </picture>
                                </div>
                                <div class="margin-left-right-20 margin-top-20">
                                    <h3 class="headline-xxxs hover-move-right text-color-black">
                                    {{ $post->title }}    
                                    </h3><br>
                                    <p class="body-text-xs text-color-black margin-top-20 hover-move-right tr-delay-01">
                                        {!! \Illuminate\Support\Str::limit(strip_tags($post->content), 100) !!}
                                    </p>
                                </div>
                            </a>
                            <ul class="list list_row list_margin-30px padding-top-bottom-30 margin-left-right-20">
                                <li class="list__item">
                                    <span class="subhead-xxs text-color-888888 text-hover-to-red js-pointer-small">By:
                                        Alex Zelea</span>
                                </li>
                                <li class="list__item">
                                    <span class="subhead-xxs text-color-888888 text-hover-to-red js-pointer-small">In:
                                        {{ $post->category->name }}</span>
                                </li>
                                <li class="list__item">
                                    <span class="subhead-xxs text-color-888888 text-hover-to-red js-pointer-small">
                                        {{ date('d F Y', strtotime($post->created_at)) }}
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </article><!-- blog-entry end -->

                    @endforeach


                </div><!-- blog column end -->

                @include('components.blog-page-sidebar')


            </div><!-- flex-container end -->
        </div><!-- pos-rel end -->
    </div><!-- blog end -->
</main><!-- main end -->


@endsection
