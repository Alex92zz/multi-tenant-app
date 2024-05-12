    <!-- ==================== Start Navbar ==================== -->

    <nav class="navbar nav-crev navbar-expand-lg change">
        <div class="container">

            <!-- Logo -->
            <a class="logo icon-img-100" href="/">
                <img src="{{ asset('assets/imgs/logo/FMV-Group-recreation-logo-clean.png') }}" alt="FMV Group logo">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"><i class="fas fa-bars"></i></span>
            </button>

            <!-- navbar links -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}"><span class="rolling-text">Home</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <span class="nav-link dropdown-toggle" role="button" data-toggle="collapse" aria-controls="aboutUsDropdown" data-target="#aboutUsDropdown" aria-haspopup="true" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="rolling-text">About Us</span>
                        </span>
                        <div class="dropdown-menu" id="aboutUsDropdown">
                            <a class="dropdown-item" href="../about-fmvgroup">FMV GROUP</a>
                            <a class="dropdown-item" href="../about-mld">MLD</a>
                            <a class="dropdown-item" href="../about-flowlee-meter-verification">FLOWLEE METER VERIFICATION</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <span class="nav-link dropdown-toggle" data-toggle="collapse" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="rolling-text">Services</span>
                        </span>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="../meter-verification">Meter Verification</a>
                            <a class="dropdown-item" href="../electromagnetic-metering-services">Electromagnetic Metering Services</a>
                            <a class="dropdown-item" href="../meter-xchange">Meter Exchange</a>
                            <a class="dropdown-item" href="../leak-detection-services">Leak Detection Services</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../products"><span class="rolling-text">Products</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('blog') }}"><span class="rolling-text">Blog</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}"><span class="rolling-text">Contact</span></a>
                    </li>
                    @auth
                    <li class="nav-item">
                        <a class="nav-link" href="../admin/login"><span class="rolling-text">Dashboard</span></a>
                    </li>
                    @endauth
                </ul>
            </div>

        </div>
    </nav>

    <!-- ==================== End Navbar ==================== -->
