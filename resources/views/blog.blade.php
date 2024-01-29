@extends('layouts.main')


@section('meta')
    <!-- Title  -->
    <title>Blog | FMV GROUP </title>
    <meta name="keywords" content="Blog Page FMV Group">
    <meta name="description" content="Blog Page FMV Group">
    <meta name="author" content="">
@endsection


@section('content')
    <main class="sub-bg">

        <header class="page-header section-padding bg-img pb-60"
            data-background="{{ asset('assets/imgs/background/petrol-extraction.jpg') }}" data-overlay-dark="7">
            <div class="container mt-100">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="caption">
                            <h1 class="fz-55">FMV Grop Blog Page</h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class="blog-list-half crev section-padding sub-bg">
            <div class="container">

                <div class="row lg-marg">

                    <div class="col-lg-8">


                        @foreach ($posts->take(10) as $post)
                            <div class="item mb-80" style="max-width: 80%;">
                                <div class="row rest">
                                    <div class="col-md-6">
                                        <div class="img">
                                            <img src="{{ asset($post->thumbnail) }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 valign">
                                        <div class="cont">
                                            <span
                                                class="date fz-12 ls1 text-u opacity-7 mb-15">{{ date('d F Y', strtotime($post->created_at)) }}</span>
                                            <h5>
                                                <a
                                                    href="{{ route('posts.show', ['slug' => $post->slug]) }}">{{ $post->title }}</a>
                                            </h5>
                                            <div style="max-width: 300px;">
                                                {!! \Illuminate\Support\Str::limit(strip_tags($post->content), 100) !!}
                                            </div>
                                            <div class="tags colorbg mt-15">
                                                <a href="{{ route('posts.show', ['slug' => $post->slug]) }}">Read
                                                    Article</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>



                    @include('components.blog-page-sidebar')


                </div>
            </div>
        </section>

        <!-- ==================== End First Section ==================== -->




    </main>
@endsection

@section('scripts')
@endsection
