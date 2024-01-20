<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from andit.co/projects/html/and-tour/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Dec 2023 16:44:40 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title>@yield('title') </title>
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{asset('client/css/bootstrap.min.css')}}" />
    <!-- animate css -->
    <link rel="stylesheet" href="{{asset('client/css/animate.min.css')}}" />
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="{{asset('client/css/fontawesome.all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('client/cdn.jsdelivr.net/npm/bootstrap-icons%401.8.2/font/bootstrap-icons.css')}}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{asset('client/css/owl.carousel.min.css')}}" />
    <!-- owl.theme.default css -->
    <link rel="stylesheet" href="{{asset('client/css/owl.theme.default.min.css')}}" />
    <!-- navber css -->
    <link rel="stylesheet" href="{{asset('client/css/navber.css')}}" />
    <!-- meanmenu css -->
    <link rel="stylesheet" href="{{asset('client/css/meanmenu.css')}}" />
    <!-- Style css -->
    <link rel="stylesheet" href="{{asset('client/css/style.css')}}" />
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{asset('client/css/responsive.css')}}" />
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{asset('client/img/favicon.png')}}">
</head>

<body>
    <!-- preloader Area -->
    {{-- <div class="preloader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="lds-spinner">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Header Area -->
        @include('client.pages.header')

        <!-- Navbar Bar -->
        <div class="navbar-area">
            <div class="main-responsive-nav">
                <div class="container">
                    <div class="main-responsive-menu">
                        <div class="logo">
                            <a href="index.html">
                                <img src="{{asset('client/img/logo.png')}}" alt="logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-navbar">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="index.html">
                            <img src="{{asset('client/img/logo.png')}}" alt="logo">
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="#" class="nav-link active">
                                        Home
                                        <i class="fas fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="index.html" class="nav-link active">Home One</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Categories
                                        <i class="fas fa-angle-down"></i>
                                    </a>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Pages
                                        <i class="fas fa-angle-down"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Dashboard  <i class="fas fa-angle-down"></i></a>
                                </li>
                            </ul>
                            <div class="others-options d-flex align-items-center">
                                <div class="option-item">
                                    <a href="#" class="search-box">
                                        <i class="bi bi-search"></i>
                                    </a>
                                </div>
                                <div class="option-item">
                                    <a href="{{Route('register')}}" class="btn  btn_navber">Become a partner</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="others-option-for-responsive">
                <div class="container">
                    <div class="dot-menu">
                        <div class="inner">
                            <div class="circle circle-one"></div>
                            <div class="circle circle-two"></div>
                            <div class="circle circle-three"></div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="option-inner">
                            <div class="others-options d-flex align-items-center">
                                <div class="option-item">
                                    <a href="#" class="search-box"><i class="fas fa-search"></i></a>
                                </div>
                                <div class="option-item">
                                    <a href="contact.html" class="btn  btn_navber">Get free quote</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- search -->
    <div class="search-overlay">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-close">
                    <span class="search-overlay-close-line"></span>
                    <span class="search-overlay-close-line"></span>
                </div>
                <div class="search-overlay-form">
                    <form>
                        <input type="text" class="input-search" placeholder="Search here...">
                        <button type="button"><i class="fas fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Banner Area -->
    <section id="home_one_banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="banner_one_text">
                        <h1>Explore the world together</h1>
                        <h3>Find awesome flights, hotel, tour, car and packages</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if(!isset($searchBar) || $searchBar)
        @include('client.pages.seach')
    @endif

    @yield('content')

    


    <!-- Cta Area -->
    <section id="cta_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="cta_left">
                        <div class="cta_icon">
                            <img src="{{asset('client/img/common/email.png')}}" alt="icon">
                        </div>
                        <div class="cta_content">
                            <h4>Get the latest news and offers</h4>
                            <h2>Subscribe to our newsletter</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="cat_form">
                        <form id="cta_form_wrappper">
                            <div class="input-group"><input type="text" class="form-control"
                                    placeholder="Enter your mail address"><button class="btn btn_theme btn_md"
                                    type="button">Subscribe</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer  -->
    @include('client.pages.footer')

    <script src="{{asset('client/js/jquery-3.6.0.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('client/js/bootstrap.bundle.js')}}"></script>
    <!-- Meanu js -->
    <script src="{{asset('client/js/jquery.meanmenu.js')}}"></script>
    <!-- owl carousel js -->
    <script src="{{asset('client/js/owl.carousel.min.js')}}"></script>
    <!-- wow.js -->
    <script src="{{asset('client/js/wow.min.js')}}"></script>
    <!-- Custom js -->
    <script src="{{asset('client/js/custom.js')}}"></script>
    <script src="{{asset('client/js/add-form.js')}}"></script>
    <script src="{{asset('client/js/form-dropdown.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    @yield('js-custom')
</body>


<!-- Mirrored from andit.co/projects/html/and-tour/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Dec 2023 16:45:18 GMT -->
</html>