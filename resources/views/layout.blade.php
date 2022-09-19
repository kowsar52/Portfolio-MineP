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
    <title>{{ getOption('APP_NAME') }} - @yield('title')</title>

    <!-- Bootstrap Min CSS -->
    <link rel="stylesheet" defer href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <!-- Animate Min CSS -->
    <link rel="stylesheet" defer href="{{ asset('frontend/css/animate.min.css') }}">
    <!-- FlatIcon CSS -->
    <link rel="stylesheet" defer href="{{ asset('frontend/css/flaticon.css') }}">
    <!-- Odometer Min CSS -->
    <link rel="stylesheet" defer href="{{ asset('frontend/css/odometer.min.css') }}">
    <!-- MeanMenu CSS -->
    <link rel="stylesheet" defer href="{{ asset('frontend/css/meanmenu.min.css') }}">
    <!-- Magnific Popup Min CSS -->
    <link rel="stylesheet" defer href="{{ asset('frontend/css/magnific-popup.min.css') }}">
    <!-- Nice Select Min CSS -->
    <link rel="stylesheet" defer href="{{ asset('frontend/css/nice-select.min.css') }}">
    <!-- Owl Carousel Min CSS -->
    <link rel="stylesheet" defer href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" defer href="{{ asset('frontend/css/owl.theme.default.min.css') }}">
    <!-- Font Awesome Min CSS -->
    <link rel="stylesheet" defer href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- <link rel="stylesheet" defer href="{{ asset('frontend/css/fontawesome.min.css')}}"> --}}
    <!-- Boxicons CSS -->
    <link rel="stylesheet" defer href="{{ asset('frontend/css/boxicons.min.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" defer href="{{ asset('frontend/css/style.css') }}">
    <!-- Dark CSS -->
    <!--<link rel="stylesheet" defer href="{{ asset('frontend/css/dark.css') }}">-->
    <!-- Responsive CSS -->
    <link rel="stylesheet" defer href="{{ asset('frontend/css/responsive.css') }}">

    <link rel="icon" type="image/png" href="{{ asset(getOption('favicon')) }}">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="loader">
            <div class="shadow"></div>
            <div class="box"></div>
        </div>
    </div>
    <!-- End Preloader -->

    <!-- Start Navbar Area -->
    <div class="navbar-area">
        <div class="aronix-responsive-nav">
            <div class="container">
                <div class="aronix-responsive-menu">
                    <div class="logo">
                        <a href="{{ url('/') }}">
                            <img data-src="{{ asset(getOption('logo')) }}" loading="lazy" class="main-logo " alt="logo">
                            <img data-src="{{ asset(getOption('white_logo')) }}" loading="lazy" class="white-logo" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="aronix-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img data-src="{{ asset(getOption('logo')) }}" loading="lazy" class="main-logo " alt="logo">
                        <img data-src="{{ asset(getOption('white_logo')) }}" loading="lazy" class="white-logo" alt="logo">
                    </a>

                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="{{ url('/') }}" class="nav-link">
                                    @lang('Home')
                                </a>
                            </li>
               
                            <li class="nav-item">
                                <a href="{{ url('projects') }}" class="nav-link">
                                   @lang('Projects')
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/about') }}" class="nav-link">
                                    @lang('About Us')
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ url('/contact') }}" class="nav-link">@lang('Contact')</a>
                            </li>
                            <li>
                                {{-- language menu --}}
                                <div class="woocommerce-topbar-ordering" style="padding: 5px 0px;">
                                    <select id="langSelect">
                                        <option value="en" {{ \App::getLocale() == 'en' ? 'selected' : '' }}>
                                            English</option>
                                        <option value="de" {{ \App::getLocale() == 'de' ? 'selected' : '' }}>
                                            @lang('Germany')</option>
                                    </select>
                                </div>
                                {{-- language menu --}}
                            </li>
                        </ul>

                        <div class="others-options">
                            <div class="burger-menu">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->
    <!-- Sidebar Modal -->
    <div class="sidebar-modal">
        <div class="sidebar-modal-inner">
            <div class="sidebar-about-area">
                <div class="title">
                    <h2>@lang('About Us')</h2>
                    <p>{{ getOption('about')}}</p>
                </div>
            </div>
            <div class="sidebar-contact-area">
                <div class="contact-info">
                    <div class="contact-info-content">
                        <h2>
                            <a href="tel:{{ getThemeOption('contact','phone')}}">{{ getThemeOption('contact','phone')}}</a>
                            <span>@lang('OR')</span>
                            <a href="mailto:{{ getThemeOption('contact','email')}}">{{ getThemeOption('contact','email')}}</a>
                        </h2>

                        <ul class="social">
                            <li><a href="{{getThemeOption('header_footer', 'facebook_link')}}" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                            <li><a href="{{getThemeOption('header_footer', 'twiter_link')}}" target="_blank"><i class='bx bxl-twitter'></i></a></li>
                            <li><a href="{{getThemeOption('header_footer', 'linkedin_link')}}" target="_blank"><i class='bx bxl-linkedin'></i></a></li>
                            <li><a href="{{getThemeOption('header_footer', 'instagram_link')}}" target="_blank"><i class='bx bxl-instagram'></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <span class="close-btn sidebar-modal-close-btn"><i class="fa fa-times"></i></span>
        </div>
    </div>
    <!-- End Sidebar Modal -->

    @yield('content')


        <!-- Start Subscribe Wrap Area -->
        <div class="subscribe-wrap-area mt-5">
            <div class="container">
                <div class="subscribe-wrap-inner-box">
                    <div class="subscribe-content">
                        <h2>@lang('Join Our Newsletter')</h2>
                        <form class="newsletter-form" id="newsletter" data-toggle="validator">
                            @csrf
                            <input type="email" class="input-newsletter" placeholder="@lang('Enter your email')" name="EMAIL" required autocomplete="off">
        
                            <button type="submit">@lang('Subscribe')</button>
                            <div class="help-block with-errors EMAIL-error alert text-danger"></div>
                            <div class="messages alert messages text-info"></div>
                        </form>
                    </div>
                    
                    <div class="subscribe-shape-2">
                        <img loading="lazy" data-src="{{ asset('frontend/img/shape-2.png')}}" alt="image">
                    </div>
                    <div class="subscribe-shape-3">
                        <img loading="lazy" data-src="{{ asset('frontend/img/shape-3.png')}}" alt="image">
                    </div>
                </div>
            </div>
        </div>
        <!-- End Subscribe Wrap Area -->

    <!-- Start Footer Wrap Area -->
    <section class="footer-wrap-area pt-100 pb-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-card">
                        <a href="{{ url('/')}}" class="logo">
                            <img loading="lazy" data-src="{{ url(getOption('white_logo')) }}" alt="logo">
                        </a>
                        <p>{!!getThemeOption('header_footer', 'footer_text')!!}</p>
                        <ul class="social-links">
                            <li><a href="{{getThemeOption('header_footer', 'facebook_link')}}" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                            <li><a href="{{getThemeOption('header_footer', 'twiter_link')}}" target="_blank"><i class='bx bxl-twitter'></i></a></li>
                            <li><a href="{{getThemeOption('header_footer', 'linkedin_link')}}" target="_blank"><i class='bx bxl-linkedin'></i></a></li>
                            <li><a href="{{getThemeOption('header_footer', 'instagram_link')}}" target="_blank"><i class='bx bxl-instagram'></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-card ps-5">
                        <h3>@lang('Services')</h3>
                        @php
                            $services = App\Models\Service::where('language',\App::getLocale())->select('title')->get();
                        @endphp
                        <ul class="footer-quick-links">
                            @foreach ($services as $service)
                                <li><a href="#"><i class="fa-solid fa-angles-right"></i> @lang($service->title)</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-card ps-5">
                        <h3>@lang('Pages')</h3>

                        <ul class="footer-quick-links">
                            <li><a href="/"><i class="fa-solid fa-angles-right"></i> @lang('Home')</a></li>
                            <li><a href="/about"><i class="fa-solid fa-angles-right"></i> @lang('About us')</a></li>
                            <li><a href="/projects"><i class="fa-solid fa-angles-right"></i> @lang('Projects')</a></li>
                            <li><a href="/contact"><i class="fa-solid fa-angles-right"></i> @lang('Contact')</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-card">
                        <h3>@lang('Contact Info')</h3>

                        <ul class="contact-links">
                            <li><span>@lang('Address') :</span> @lang(getThemeOption('contact', 'location'))</li>
                            <li><span>@lang('Email') :</span> <a href="mailto:{{ getThemeOption('contact', 'email') }}">
                                    @lang(getThemeOption('contact', 'email'))</a></li>
                            <li><span>@lang('Phone') :</span> <a
                                    href="tel:{{ getThemeOption('contact', 'phone') }}">@lang(getThemeOption('contact', 'phone'))</a></li>
                            <li><span>@lang('Whatsapp') :</span> <a
                                    href="tel:{{ getThemeOption('contact', 'whatsapp') }}">@lang(getThemeOption('contact', 'whatsapp'))</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <!-- End Footer Wrap Area -->

    <!-- Start Copyright Wrap Area -->
    <div class="copyright-wrap-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-6 col-md-6">
                    <p style="position:relative">@lang('Copyright') &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script> {{ getOption('APP_NAME') }}. @lang('All rights reserved') - @lang('Website developed by') 
                        <img src="{{ asset('clevpro.png')}}" style="height: 20px;
    position: absolute;
    padding-left: 5px;
    bottom: 5px;
    filter: brightness(0) invert(1);"/>
                    </p>
                </div>

                <div class="col-lg-6 col-sm-6 col-md-6">
                    <ul class="list">
                        <li><a href="/terms">@lang('Terms & Conditions')</a></li>
                        <li><a href="/privacy-policy">@lang('Privacy Policy')</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Copyright Wrap Area -->

    <div class="go-top"><i class="fas fa-chevron-up"></i></div>

    
    <!-- jQuery Min JS -->
    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <!-- Bootstrap Min JS -->
    <script defer src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <!-- MeanMenu JS  -->
    <script defer src="{{ asset('frontend/js/jquery.meanmenu.js') }}"></script>
    <!-- Appear Min JS -->
    <script defer src="{{ asset('frontend/js/jquery.appear.min.js') }}"></script>
    <!-- Odometer Min JS -->
    <script defer src="{{ asset('frontend/js/odometer.min.js') }}"></script>
    <!-- Owl Carousel Min JS -->
    <script defer src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <!-- Magnific Popup Min JS -->
    <script defer src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Parallax Min JS -->
    <script defer src="{{ asset('frontend/js/parallax.min.js') }}"></script>
    <!-- Nice Select Min JS -->
    <script defer src="{{ asset('frontend/js/jquery.nice-select.min.js') }}"></script>
    <!-- WOW Min JS -->
    <script defer src="{{ asset('frontend/js/wow.min.js') }}"></script>
    <!-- AjaxChimp Min JS -->
    <script defer src="{{ asset('frontend/js/jquery.ajaxchimp.min.js') }}"></script>
    <!-- Form Validator Min JS -->
    <script defer src="{{ asset('frontend/js/form-validator.min.js') }}"></script>
    <!-- Contact Form Min JS -->
    <script defer src="{{ asset('frontend/js/contact-form-script.js') }}"></script>
    <!-- Main JS -->
    <script defer src="{{ asset('frontend/js/main.js') }}"></script>

    <script>
        $('#langSelect').on('change', function() {
            window.location.href = "{{ url('change-language') }}" + "/" + $(this).val()
        })
    </script>

    @stack('script')


    <script type="text/javascript">
     $(document).ready(function(){
        $('#newsletter').on('submit',function(e){
            e.preventDefault()
            // $('.with-errors').text('');
            
            var formData = new FormData(this);
            $.ajax({
                type:"POST",
                url: "{{ url('newsletter')}}",
                data:formData,
                cache:false,
                contentType: false,
                processData: false,
                success:function(data){
                    if(data.success ==  false || data.success ==  "false"){
                        var arr = Object.keys(data.errors);
                        var arr_val = Object.values(data.errors);
                        for(var i= 0;i < arr.length;i++){
                        $('.'+arr[i]+'-error').text(arr_val[i][0])
                        }
                    }else{
                        // empty the form
                        $('#newsletter')[0].reset();
                        $('#newsletter').find('.messages').text(data.message);
                        $('#newsletter').find('.messages').delay(3000).fadeOut('slow');
                    }
    
                }
            });
    
        })
    })
    </script>
</body>

</html>
