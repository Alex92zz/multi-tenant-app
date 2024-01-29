@extends('layouts.main')


@section('meta')
<!-- Title  -->
<title>Products | FMV GROUP </title>
<meta name="keywords" content="Products Page FMV Group">
<meta name="description" content="Products Page FMV Group">
<meta name="author" content="">



@endsection


@section('content')
<main class="sub-bg">
            <!-- ==================== Start coming ==================== -->

            <section class="coming section-padding bg-img valign" data-background="assets/imgs/background/petrol-extraction.jpg" data-overlay-dark="7">>
                <div class="container ontop">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="text-center mb-50 mt-80">
                                <h2>Our Products Page is Coming Soon!</h2>
                            </div>
                           
                            <div class="text-center mt-50">
                                <p>Get ready to explore a world of innovative flow measurement solutions. Our upcoming products page will introduce a range of cutting-edge offerings tailored to your industry needs. Stay tuned for the unveiling of products that redefine precision and efficiency in flow measurement.</p>
                            </div>
                            <div class="subscribe mt-30">
                                <form method="post" action="{{ route('contactForm.submit') }}">
                                    @csrf
                                    <div class="form-group rest">
                                        <input id="email" type="email" name="email" placeholder="Enter Your Email" required="required">
                                        <button type="submit">Subscribe</button>
                                    </div>
                                </form>
                                <p class="fz-12 text-center mt-15"><i>We do not share your information with any third party and no spam.</i></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-img bg-pattern" data-background="assets/imgs/patterns/dots.png"></div>
            </section>

            <!-- ==================== End coming ==================== -->
</main>
@endsection

@section('scripts')
<script src="assets/js/countdown.js"></script>
<!-- Include the jQuery UI library -->
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

@endsection