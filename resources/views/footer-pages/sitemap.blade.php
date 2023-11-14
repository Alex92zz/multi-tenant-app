@extends('layouts.main')


@section('meta')
    <title>Sitemap | Boiler Installation UK</title>
    <meta name="description" content="Explore our boiler installation, repair, and plumbing services. Your trusted partner for heating solutions in the UK.">

    <meta name="keywords" content="boiler installation, boiler repair, plumbing services, radiator installation, pipe leak repair, heating solutions, UK">
    <meta name="author" content="Boiler Installation UK">
@endsection



@section('content')
    <div class="container">
        <div class="row mt-60" style="margin-top:100px;">
            <h4>Boiler Installation UK Sitemap</h4>
            <p>
                Welcome to Boiler Installation UK's sitemap! Discover our premium boiler installation, repair, plumbing,
                radiator installation, and pipe leak repair services. Navigate easily to find the heating solutions you need.
            </p>
            <p>
                Our sitemap is designed for effortless exploration, ensuring you can swiftly locate specific content on our
                website. Thank you for choosing Boiler Installation UK as your trusted heating solutions provider.
                If you have any questions or require assistance, our dedicated team is here to assist you.
            </p>            
        </div>

        <div class="row mx-auto">
            <div class="col-lg-4 col-sm-6">
                <h4>Homepage links</h4>
                <div class="sitemap-widget">
                    <ul class="list-wrap">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="/commercial-cleaning-services">Services</a></li>
                        <li><a href="{{ url('/why-us') }}">Why Us?</a></li>
                        <li><a href="{{ url('/blog') }}">Blog</a></li>
                        <li><a href="{{ url('/careers') }}">Careers</a></li>
                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row mx-auto">
            <h3 class="mx-auto text-center">Blog Posts Links</h3>
            @foreach ($blogPosts as $post)
                <div class="col-lg-4 col-sm-6">
                    <div class="sitemap-widget">
                        <ul class="list-wrap">
                            <li>
                                <a href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>


        <div class="row mx-auto">
            <h3 class="mx-auto text-center mt-60 mb-40">Areas We Serve Links</h3>
            @foreach ($localSeoPostsByCategory as $category => $localSeoPostsByCategory)
                <div class="col-lg-4 col-sm-6">
                    <h4>{{ $category }}</h4>
                    <div class="sitemap-widget">
                        <ul class="list-wrap">
                            @foreach ($localSeoPostsByCategory as $post)
                                <li><a href="{{ route('localSEO.show', $post->slug) }}">{{ $post->title }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
