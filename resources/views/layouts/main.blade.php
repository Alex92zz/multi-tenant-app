<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('meta')
    
    <meta name="google-site-verification" content="l3nm2VnrEyQdS-USxayTwC5klDpayUWQIa7h6OKDTDg" />

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/imgs/logo/browser-logo.jpg') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins-2.css') }}">

    <!-- Core Style Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style-2.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/base-2.css') }}">

</head>

<body class="main-bg">

    @include('components/preloader-and-scroll-on-top')

    @include('components/navbar')

    <!-- main-area -->


        @yield('content')



    <!-- main-area-end -->

    @include('components/footer')




    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery-3.6.0.min-2.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-migrate-3.4.0.min-2.js') }}"></script>

    <!-- plugins -->
    <script src="{{ asset('assets/js/plugins-2.js') }}"></script>

    <script src="{{ asset('assets/js/ScrollTrigger.min-2.js') }}"></script>

    <!-- custom scripts -->
    <script src="{{ asset('assets/js/scripts-2.js') }}"></script>

    @yield('scripts')
    
    <script>
        function obfuscateEmail(email) {
            var obfuscatedEmail = email.replace(/[a-zA-Z]/g, function(c) {
                return '&#' + c.charCodeAt(0) + ';';
            });
            return obfuscatedEmail;
        }

        // Example email address
        var originalEmail = 'info@fmvgroup.co.uk';
        var obfuscatedEmail = obfuscateEmail(originalEmail);

        // Get the target element by its ID
        var emailLink = document.getElementById('obfuscatedEmailLink');

        // Set the obfuscated email address as the href and innerHTML of the <a> element
        emailLink.innerHTML = obfuscatedEmail;
    </script>

<script defer>
    
    var scriptreCAPTCHAAdded = false;
        // Function to add reCAPTCHA script
        function addRecaptchaScript() {
            var recaptchaScript = document.createElement('script');
            recaptchaScript.src = 'https://www.google.com/recaptcha/api.js';
            recaptchaScript.async = true;
            recaptchaScript.defer = true;
            document.head.appendChild(recaptchaScript);
            
            var scriptreCAPTCHAAdded = true;

            // Remove the scroll event listener after adding the script
            window.removeEventListener('scroll', onScroll);
        }

        // Function to handle the scroll event
        function onScrollreCAPTCHA() {
            // Adjust the threshold as needed
            var scrollThreshold = 100;

            // Check if the user has scrolled beyond the threshold
            if (window.scrollY > scrollThreshold) {
                addRecaptchaScript();
            }
        }

        // Add scroll event listener
        window.addEventListener('scroll', onScrollreCAPTCHA);
    </script>
</body>

</html>
