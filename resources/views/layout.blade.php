<!doctype html>
<html lang="en">

<head>
    <base href="{{ url('/') }}">    
    {{-- SEO META --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name=”robots” content="index, follow">
    <meta name="title" content="@yield('meta-title', getOption('META_TITLE'))">
    <meta name="description" content="@yield('meta-description', getOption('META_DESCRIPTION'))">
    <meta name="keywords" content="@yield('meta-key', getOption('META_KEYWORDS'))">


    <!--    bootstrap css-->
    <link rel="stylesheet" href="{{ asset('frontend')}}/css/bootstrap.min.css">
    <!--    style css-->
    <link rel="stylesheet" href="{{ asset('frontend')}}/css/style.css">
    <!--    responsive css-->
    <link rel="stylesheet" href="{{ asset('frontend')}}/css/responsive.css">
    <!--    common css-->
    <link rel="stylesheet" href="{{ asset('frontend')}}/css/common.css">
    <!--    font awesome-->
    <link rel="stylesheet" href="{{ asset('frontend')}}/css/all.min.css">
    {{-- <link rel="stylesheet" href="{{ asset('frontend')}}/css/owl.carousel.min.css"> --}}
    <!-- aos css link  -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
    
    <link rel="icon" type="image/png" href="{{ asset(getOption('favicon')) }}">
    <title>{{ getOption('APP_NAME') }} - @yield('title')</title>

</head>

<body>

    <!--top header start-->
    <section id="top_header" class="d-none d-lg-block">
        <div class="container">
            <div class="d-flex">
                <div class="d-flex text-light mx-4">
                    <div class="top_header_icon text-center">
                        <i class="fa fa-phone fs-21 text-light"></i>
                    </div>
                    <p class="fs-14 ms-2">
                        <span>0173 / 156 74 12</span>
                        <br>
                        <span>0441 / 970 68 43</span>
                    </p>
                </div>
                <div class="d-flex text-light mx-4">
                    <div class="top_header_icon text-center">
                        <i class=" fa-brands text-light fa-whatsapp mt-2" style="font-size: 25px;margin-top: 5px !important;"></i>
                    </div>
                    <p class="fs-14 ms-2">
                        <span>Schreiben Sie</span>
                        <br>
                        <span>uns bei Whatsapp</span>
                    </p>
                </div>
                <div class="d-flex text-light mx-4">
                    <div class="top_header_icon text-center">
                        <i class="fa-solid fa-envelope text-light fs-21"></i>
                    </div>
                    <p class="fs-14 ms-2">
                        <span>E-Mail</span>
                        <br>
                        <span>kontakt@advisa.de</span>
                    </p>
                </div>
                <div class="d-flex ms-auto text-light position-relative top-7">
                    <p class="me-2">Folgs uns</p>
                    <div>
                        <a href="#"><i class="fa-brands fa-facebook-f mx-2 fs-20"></i></a>
                        <span class="line"></span>
                        <a href="#"><i class="fa-brands fa-google mx-2 fs-20"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--top header end-->

    <!--navbar start-->
    <section id="nav_menu">
    <nav id="navbar_top" class="navbar navbar-top navbar-expand-lg">
            <div class="container">
                <button class="navbar-toggler" id="hamburger-icon" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <img src="{{ asset('frontend')}}/images/icons/bar.png" height="25px" alt="">
                    <!-- <span class="fa fa-bars text-light"></span> -->
                </button>
                <a class="navbar-brand" href="#">
                    <img src="{{ asset(getOption('logo')) }}" height="60px" alt="">
                </a>

                <div class="position-relative d-none d-lg-block">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                        <li class="nav-item navigation_menu  mt-2 mx-3">
                            <a class="nav-link text-light fs-14 fw-bold text-uppercase " aria-current="page"
                                href="#header_carousel">Home</a>
                        </li>
                        <li class="nav-item navigation_menu  mt-2 mx-3">
                            <a class="nav-link text-light fs-14 fw-bold text-uppercase" href="#section_one">Über uns</a>
                        </li>
                        <li class="nav-item navigation_menu  mt-2 mx-3">
                            <a class="nav-link text-light fs-14 fw-bold text-uppercase" href="#section_two">Leistungen &
                                Service</a>
                        </li>
                        <li class="nav-item pt-2 mx-3">
                            <a class="nav-link btn my_btn text-light fs-14 fw-bold text-uppercase" href="#contact_area">Kantakt</a>
                        </li>
                        <li class="mt-2 d-none top_nav">
                            <div class="d-flex text-light mx-4">
                                <div class="top_header_icon text-center">
                                    <i class="fa fa-phone fs-21 text-light"></i>
                                </div>
                                <p class="fs-14 ms-2">
                                    <span>0173 / 156 74 12</span>
                                    <br>
                                    <span>0441 / 970 68 43</span>
                                </p>
                            </div>
                            <div class="d-flex text-light mx-4">
                                <div class="top_header_icon text-center">
                                    <i class=" fa-brands text-light fa-whatsapp fs-28 mt-2"></i>
                                </div>
                                <p class="fs-14 ms-2">
                                    <span>Schreiben Sie</span>
                                    <br>
                                    <span>uns bei Whatsapp</span>
                                </p>
                            </div>
                            <div class="d-flex text-light mx-4">
                                <div class="top_header_icon text-center">
                                    <i class="fa-solid fa-envelope text-light fs-21"></i>
                                </div>
                                <p class="fs-14 ms-2">
                                    <span>E-Mail</span>
                                    <br>
                                    <span>kontakt@advisa.de</span>
                                </p>
                            </div>
                            <div class="d-flex ms-auto text-light position-relative top-7">
                                <p class="me-2">Folgs uns</p>
                                <div>
                                    <a href="#"><i class="fa-brands fa-facebook-f mx-2 fs-25"></i></a>
                                    <span class="line"></span>
                                    <a href="#"><i class="fa-brands fa-google mx-2 fs-25"></i></a>
                                </div>
                            </div>

                        </li>
                    </ul>


                </div>
            </div>
        </nav>
        <div class="slide-menu">
            <div class="slide-menu-overlay"></div>
            <div class="slide-header">
                <img src="{{ asset(getOption('logo')) }}" alt="">
                <div class="slide-close-button">
                    <button class="close"><i class="fa fa-close bg-light w-50"></i></button>
                </div>
            </div>
            <div class="slide-menu-here">
                <ul class="menu navbar-nav ms-auto mb-2 mb-lg-0 ps-4">
                    <li class="nav-item navigation_menu mt-3">
                        <a class="nav-link text-light fs-14 fw-bold text-uppercase " aria-current="page"
                            href="#">Home</a>
                    </li>
                    <li class="nav-item navigation_menu  mt-3">
                        <a class="nav-link text-light fs-14 fw-bold text-uppercase" href="#">Über uns</a>
                    </li>
                    <li class="nav-item navigation_menu  mt-3">
                        <a class="nav-link text-light fs-14 fw-bold text-uppercase" href="#">Leistungen &
                            Service</a>
                    </li>
                    <li class="nav-item navigation_menu my-4">
                        <a class="nav-link btn my_btn text-light fs-14 fw-bold text-uppercase" href="#">Kantakt</a>
                    </li>
                    <li class="mt-3">
                        <div class="d-flex text-light  my-2">
                            <div class="top_header_icon text-center">
                                <i class="fa fa-phone fs-21 text-light"></i>
                            </div>
                            <p class="fs-14 ms-2">
                                <span>0173 / 156 74 12</span>
                                <br>
                                <span>0441 / 970 68 43</span>
                            </p>
                        </div>
                        <div class="d-flex text-light  my-2">
                            <div class="top_header_icon text-center">
                                <i class=" fa-brands text-light fa-whatsapp fs-28 mt-2"></i>
                            </div>
                            <p class="fs-14 ms-2">
                                <span>Schreiben Sie</span>
                                <br>
                                <span>uns bei Whatsapp</span>
                            </p>
                        </div>
                        <div class="d-flex text-light  my-2">
                            <div class="top_header_icon text-center">
                                <i class="fa-solid fa-envelope text-light fs-21"></i>
                            </div>
                            <p class="fs-14 ms-2">
                                <span>E-Mail</span>
                                <br>
                                <span>kontakt@advisa.de</span>
                            </p>
                        </div>
                        <div class="d-flex mt-3 text-light position-relative top-7">
                            <p class="me-2">Folgs uns</p>
                            <div>
                                <i class="fa-brands fa-facebook-f mx-2 fs-25"></i>
                                <span class="line"></span>
                                <i class="fa-brands fa-google mx-2 fs-25"></i>
                            </div>
                        </div>

                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--navbar end-->

    <!--header carouser start-->
    <section id="header_carousel">
        <div id="sliderCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-interval="1000">

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img width="1440" height="700" src="{{ asset('frontend')}}/images/carousel-images/Pexels%20Photo%20by%20Tobi.png"
                        class="d-block w-100" alt="...">
                    <div class="overlay"></div>
                    <div class="carousel-caption ">
                        <h1 class="fs-65 fw-bold pb-2"> Finance & Commerce Services </h1>
                        
                    </div>
                </div>
                <div class="carousel-item ">
                    <img width="1440" height="700" src="{{ asset('frontend')}}/images/carousel-images/pexels-jopwell-2422280.jpg"
                        class="d-block w-100" alt="...">
                    <div class="overlay"></div>
                    <div class="carousel-caption ">
                        <h1 class="fs-65 fw-bold pb-2"> E-Commerce in the Financial Services Industry </h1>
                    </div>
                </div>
                <div class="carousel-item ">
                    <img width="1440" height="700"
                        src="{{ asset('frontend')}}/images/carousel-images/pexels-andrea-piacquadio-842554.jpg" class="d-block w-100"
                        alt="...">
                    <div class="overlay"></div>
                    <div class="carousel-caption ">
                        <h1 class="fs-65 fw-bold pb-2"> E-Commerce in the Financial Services Industry  </h1>
                    </div>
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#sliderCarousel"
                data-bs-slide="prev">
                <div class="position-relative">
                    <i class="fa-solid fa-chevron-left carousel_prev_icon text-light" title="Next"></i>
                </div>
            </button>
            <button class="carousel-control-next " type="button" data-bs-target="#sliderCarousel"
                data-bs-slide="next">
                <div class="position-relative">
                    <i class="fa-solid fa-chevron-right  carousel_next_icon text-light" title="Next"></i>
                </div>
            </button>
        </div>
    </section>
    <!--header carouser end-->

 @yield('content')
    <!-- footer start  -->
    <footer>
        <!-- big footer start  -->
        <section id="big_footer" class="py-5 bg-primary text-light">
            <div class="container">
                <div class="d-sm-block d-lg-flex justify-content-between text-center text-lg-start">
                    <div class="big_footer_title">
                        <h2 class="fs-30 fw-bold">Sie brauchen mehr Informationen?</h2>
                        <p class="fs-16 fw-light big_footer_h_text">Sie haben auf der Seite nicht alle Informationen gefunden? Kein
                            Problem, rufen Sie uns an und wir beraten Sie kostenlos.</p>
                    </div>
                    <a href="" class="btn my_second_btn text-light fs-16 fw-bold">Jetzt anrufen!</a>
                </div>
                <div class="row footer_menu_section">
                    <div class="col-md-12 col-lg-4 logo_with_text">
                        <img src="{{ asset(getOption('logo')) }}" alt="">
                        <p>Advisa to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                            classical Latin literature from 45 BC, making it over 2000 years ...</p>
                    </div>
                    <div class="col-md-6 col-lg-4 align-self-center  footer_link_menu">
                        <p><a class=" fs-16 text-light text-decoration-none " href="">Impressum</a></p>
                        <p><a class=" fs-16 text-light text-decoration-none " href="">Nutzungsbedingungen</a></p>
                        <p><a class=" fs-16 text-light text-decoration-none " href="">Datenschutzerklärung</a></p>
                       
                    </div>
                    <div class="col-md-6 col-lg-4 align-self-center address_link text-center text-sm-start">
                        <p><i class="fa fa-location-dot me-2"></i> Etzhorner Weg 11, 26125 Oldenburg</p>
                        <p><i class="fa fa-envelope me-2"></i> kontakt@advisa.de</p>
                        <p><i class="fa fa-phone me-2"></i> 0173 156 74 12</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- big footer end  -->

        <!-- small footer start  -->
        <section id="small_footer" class="py-3 bg-secondary text-light">
            <div class="container text-center">
                <div class="d-flex justify-content-center">
                    <p class="m-0 mt-2" style="position:relative">@lang('Copyright') &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script> {{ getOption('APP_NAME') }}. @lang('All rights reserved') - @lang('Website developed by') 
                        <img src="{{ asset('clevpro.png')}}" style="height: 20px;position:  padding-left: 5px;bottom: 5px;filter: brightness(0) invert(1);"/>
                    </p>

                </div>

            </div>
        </section>
        <!-- small footer end -->
    </footer>
    <!-- footer end -->



    <!--jquery js-->
    <script src="{{ asset('frontend')}}/js/jquery.min.js"></script>
    <!--bootstrap js-->
    <script src="{{ asset('frontend')}}/js/bootstrap.bundle.js"></script>
    <!-- aos js  -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!--script js-->
    {{-- <script src="{{ asset('frontend')}}/js/owl.carousel.min.js"></script> --}}

    <script src="{{ asset('frontend')}}/js/script.js"></script>

</body>

</html>