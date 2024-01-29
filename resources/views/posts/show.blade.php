@extends('layouts.main')


@section('meta')
    <!-- Title  -->
    <title>{{ $post->title }} </title>
    <meta name="description" content="{{ $post->description }}">
    <meta name="author" content="FMV GROUP">

    <style>

        figure {
        text-align: center;
        }

.text figure > a > img {
        max-height: 400px;
        width: auto;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
        </style>
@endsection


@section('content')
    <main class="sub-bg">


        <header class="page-header  bg-img" data-background="{{ asset('assets/imgs/background/petrol-extraction.jpg') }}"
            data-overlay-dark="7">
            <div class="container mt-60">
                <div class="row">
                    <div class="col-lg-8">

                    </div>
                </div>
            </div>
        </header>

        <!-- ==================== Start Slider ==================== -->
        <article>
            <section class="blog-header section-padding">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="caption">
                                <div class="sub-title fz-12">
                                    {{ $post->category->name }}
                                </div>
                                <h1 class="fz-55 mt-30">{{ $post->title }}</h1>
                            </div>
                            <div class="info d-flex mt-40 align-items-center">
                                <div class="left-info">
                                    <div class="d-flex">
                                        <div class="author-info">
                                            <div class="d-flex align-items-center">
                                                <div class="ml-20">
                                                    <span class="opacity-7">Author</span>
                                                    <h6 class="fz-16">Lee Woodward</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="date ml-50">
                                            @if ($post->created_at != $post->updated_at)
                                                <span class="opacity-7">Updated on</span>
                                                <h6 class="fz-16">{{ date('d F Y', strtotime($post->updated_at)) }}</h6>
                                            @else
                                                <span class="opacity-7">Published</span>
                                                <h6 class="fz-16">{{ date('d F Y', strtotime($post->created_at)) }}</h6>
                                            @endif
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="blog pb-20">
                <div class="container">
                    <div class="main-post">
                        <div class="item pb-60">
                            <div class="row justify-content-center">
                                <div class="col-lg-10">
                                    <img class="mb-20" src="{{ asset($post->thumbnail) }}"
                                        style="max-height: 300px; width:auto; display:block; margin-left:auto; margin-right:auto;">
                                    <div class="text" id="content">
                                        {!! $post->content !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        </article>

    </main>
@endsection
