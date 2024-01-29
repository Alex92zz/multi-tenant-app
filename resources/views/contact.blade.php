@extends('layouts.main')


@section('meta')
    <!-- Title  -->
    <title>Contact FMV GROUP | Flowlee Meter Verification</title>
    <meta name="description" content="Contact page of FMV Group. FMV Group is an established measurement company with a wealth of experience in the development of flow measurement solutions, verification techniques and instrumentation sales within the following industries: Water, Oil, Gas, Power and Manufacturing.">

    <meta name="author" content="FMV GROUP">
    <meta name="keywords" content="">
@endsection



@section('content')        
<main class="sub-bg">
<header class="page-header section-padding sub-bg valign bg-img parallaxie" data-background="assets/imgs/background/client-photo.jpg" data-overlay-dark="7">
    <div class="container mt-80">
        <div class="row">
            <div class="col-lg-7">
                <div class="caption">
                    <h6 class="sub-title">Contact Us</h6>
                    <h1 class="fz-55">Get in touch with <br> FMV Group!</h1>
                </div>
            </div>
            <div class="col-lg-5 valign">
                <div class="text">
                    <p>
                        Contact FMV Group to discuss your flow measurement needs. Our dedicated team is here to provide tailored solutions and support across various industries.</p>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- ==================== End Slider ==================== -->

@include('components.contact-form')
</main>
@endsection

@section('scripts')
    <!-- Include the jQuery UI library -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

<script>
    $(function() {
        $('form').on('submit', function(e) {
            e.preventDefault(); // Prevent the default form submission behavior

            var formData = $(this).serialize();

            $.ajax({
                type: 'post',
                url: '{{ route("contactForm.submit") }}',
                data: formData,
                success: function() {
                    $('form')[0].reset(); // Reset the form
                    $("#dialog").dialog({
                        modal: true, // Make the dialog modal
                        buttons: {
                            Ok: function() {
                                $(this).dialog("close");
                            }
                        }
                    });
                }
            });
        });
    });
</script>
@endsection
