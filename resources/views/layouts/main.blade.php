<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- This needs to be right at the beginning -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

    @yield('meta')

    <!-- Stylesheets -->

    <link rel="preload" href="{{ asset('fonts/Flaticon.ttf') }}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset('fonts/fa-brands-400.woff2') }}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset('fonts/fa-regular-400.woff2') }}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset('fonts/fa-solid-900.woff2') }}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset('/images/main-slider/block-paving-service.webp') }}" as="image" type="image/webp">



    <!-- style.css has to be before responsive, if not the nav wont be displayed on mobile view!!! -->
    <!-- owl needs to load fast because its loading the header -->
    <link href="{{ asset('css/style-minimified.css') }}" rel="stylesheet">

    <link href="{{ asset('css/owl-minimified.css') }}" rel="stylesheet">

    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

    @yield('styles')

    <link rel="shortcut icon" href="{{ asset('images/browser-logo.jpg') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/browser-logo.jpg') }}" type="image/x-icon">

    <link href="{{ asset('fonts/google-fonts-1.woff2') }}" as="font" type="font/woff2" crossorigin>
    <link href="{{ asset('fonts/google-fonts-2.woff2') }}" as="font" type="font/woff2" crossorigin>
    <link href="{{ asset('fonts/google-fonts-3.woff2') }}" as="font" type="font/woff2" crossorigin>
    <link href="{{ asset('fonts-2/Flaticon.woff2') }}" as="font" type="font/woff2" crossorigin>

</head>



<body>
    <div class="page-wrapper">

        @include('components/navbar')




        @yield('content')


        @include('components/footer')

    </div>

    <script defer src="{{ asset('js/minimified.js') }}"></script>

    <!-- bootstrap was moved here because Stylesheet blocking rendering -->
    <!-- font-awesome top page -->
    <!-- flaticon-2 is the pressure washer  -->
    <script defer>
        window.addEventListener('DOMContentLoaded', function() {
            setTimeout(function() {
                var stylesheets = [
                    "{{ asset('css/flaticon-2.css') }}",
                ];

                stylesheets.forEach(function(href) {
                    var link = document.createElement('link');
                    link.rel = 'stylesheet';
                    link.href = href;
                    document.head.appendChild(link);
                });
            }, 2500); // Delay of 2.5 seconds (2500 milliseconds)
        });
    </script>

<script defer>
    function obfuscateEmail(email) {
        var obfuscatedEmail = email.replace(/[a-zA-Z]/g, function(c) {
            return '&#' + c.charCodeAt(0) + ';';
        });
        return obfuscatedEmail;
    }

    // Example email address
    var originalEmail = 'peter@pwtreecarelandscaping.co.uk';
    var obfuscatedEmail = obfuscateEmail(originalEmail);

    // Get the target element by its ID
    var emailLink = document.getElementById('obfuscatedEmailLinkFooter');

    // Set the obfuscated email address as the href and innerHTML of the <a> element
    emailLink.innerHTML = obfuscatedEmail;
</script>

    @yield('scripts')

    <script defer>
        let scriptAdded = false;
      
        function addScriptsForContactForm() {
          if (!scriptAdded) {
            // Add jQuery script
            const jqueryScript = document.createElement('script');
            jqueryScript.src = 'https://code.jquery.com/jquery-3.6.0.min.js';
            jqueryScript.async = true;
            document.head.appendChild(jqueryScript);

            // Add jQuery UI script
            const jqueryUIScript = document.createElement('script');
            jqueryUIScript.src = 'https://code.jquery.com/ui/1.12.1/jquery-ui.min.js';
            jqueryUIScript.async = true;
            document.head.appendChild(jqueryUIScript);

            // Add reCAPTCHA script
            const recaptchaScript = document.createElement('script');
            recaptchaScript.src = 'https://www.google.com/recaptcha/api.js';
            recaptchaScript.async = true;
            recaptchaScript.defer = true;
            document.head.appendChild(recaptchaScript);

            scriptsAdded = true;

            $(function() {
            $('form').on('submit', function(e) {
                e.preventDefault(); // Prevent the default form submission behavior

                var formData = $(this).serialize();

                $.ajax({
                    type: 'post',
                    url: '{{ route('contactForm.submit') }}',
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
                    },
                    error: function(xhr, status, error) {
                        console.error('Error logging form data:', error);
                    }
                });
            });
        });
          }
        }

        
      
        window.addEventListener('scroll', () => {
          // Add a condition here based on your scroll requirements
          // For example, you can check if the user has scrolled a certain distance down the page
          // For simplicity, the condition here is set to scroll down 200 pixels
          if (window.scrollY > 100) {
            addScriptsForContactForm();
          }
        });
      </script>



</body>

</html>
