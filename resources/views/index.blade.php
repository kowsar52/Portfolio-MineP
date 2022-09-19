@extends('layout')
@section('title','Home')
@section('content')
<style>
    .footer-container{
        margin-top: 200px;
    }
</style>
        <!-- Start Main Banner Area -->
        <div class="it-banner">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container mt-50">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="banner-content">
                                    <h1>{{ getThemeOption('home','heading_title')}}</h1>
                                    <p>{!! getThemeOption('home','heading_description') !!}</p>

                                    <div class="banner-btn">
                                        <a href="{{ url('/contact') }}" class="default-btn me-3">
                                           @lang('Contact Us') <span></span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="it-banner-image owl-carousel owl-theme">
                                    @foreach ($slider_images as $slider_image)
                                    <div class="animate-image">
                                        <img data-src="{{ asset($slider_image->image)}}" loading="lazy" alt="{{$slider_image->title}}">
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Shape Images -->
            <div class="shape-img2"><img loading="lazy" data-src="{{ asset('frontend/img/shape/2.svg')}}" alt="image"></div>
            <div class="shape-img3"><img loading="lazy" data-src="{{ asset('frontend/img/shape/3.svg')}}" alt="image"></div>
            <div class="shape-img4"><img loading="lazy" data-src="{{ asset('frontend/img/shape/4.png')}}" alt="image"></div>
            <div class="shape-img5"><img loading="lazy" data-src="{{ asset('frontend/img/shape/5.png')}}" alt="image"></div>
            <div class="shape-img6"><img loading="lazy" data-src="{{ asset('frontend/img/shape/6.png')}}" alt="image"></div>
            <div class="shape-img7"><img loading="lazy" data-src="{{ asset('frontend/img/shape/7.png')}}" alt="image"></div>
            <div class="shape-img8"><img loading="lazy" data-src="{{ asset('frontend/img/shape/8.png')}}" alt="image"></div>
            <div class="shape-img9"><img loading="lazy" data-src="{{ asset('frontend/img/shape/9.png')}}" alt="image"></div>
            <div class="shape-img10"><img loading="lazy" data-src="{{ asset('frontend/img/shape/10.png')}}" alt="image"></div>
            <div class="shape-img11"><img loading="lazy" data-src="{{ asset('frontend/img/shape/11.png')}}" alt="image"></div>
            <div class="shape-img12"><img loading="lazy" data-src="{{ asset('frontend/img/shape/12.png')}}" alt="image"></div>
        </div>
        <!-- End Main Banner Area -->

        <!-- Start Services Area -->
        <section class="pt-100 pb-70 gray-bg">
            <div class="container">
                <div class="section-title">
                    <h1>{{ getThemeOption('home','service_title')}}</h1>
                    <p>{{ getThemeOption('home','service_description')}}</p>
                </div>

                <div class="row">
                    @forelse ($services as $service)
                        <div class="col-lg-4 col-sm-6">
                            <div class="service-card-one bg-white center">
                                <div class="icon">
                                    <img data-src="{{asset($service->image)}}" loading="lazy" class="service-icon"/>
                                </div>
                                <h3>
                                    <a href="single-services.html">{{$service->title}}</a>
                                </h3>
                                <p>{{$service->description}}</p>
                            </div>
                        </div>
                    @empty
                        
                    @endforelse
                </div>
            </div>
        </section>
        <!-- End Services Area -->


        <!-- Start Fun Facts Area -->
        <section class="fun-facts-area ptb-100">
            <div class="container">
                <div class="row">
                    @foreach ($fun_facts as $fun_fact)
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-fun-facts">
                                <h3><span class="odometer" data-count="{{$fun_fact->count}}">00</span><span class="sign-icon">+</span></h3>
                                <p>@lang($fun_fact->title)</p>
                                <div class="back-text">@lang($fun_fact->back_text)</div>
                            </div>
                        </div>
                    @endforeach
                    
                </div>
            </div>
        </section>
        <!-- End Fun Facts Area -->

        <!-- Project area -->
        <div class="works-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <h2>{{getThemeOption('home','latest_work_title')}}</h2>
                    <p>{{getThemeOption('home','latest_work_description')}}</p>
                </div>
                <div class="row">
                    @forelse ($projects as $project)
                        <div class="col-lg-4 col-sm-6">
                            <div class="work-card">
                                <img data-src="{{asset($project->image)}}" loading="lazy" alt="image" >

                                <div class="content text-center">
                                    <span>
                                        <a href="#">{{$project->service->title}}</a>
                                    </span>
                                    <h3>
                                        <a href="{{ url('/project/'.$project->id)}}">{{$project->project_name}}</a>
                                    </h3>

                                    <a class="work-btn" href="{{ url('/project/'.$project->id)}}">@lang('View Details')</a>
                                </div>
                            </div>
                        </div>
                    @empty
                        
                    @endforelse
                </div>

                <div class="more-work">
                    <a href="{{ url('projects')}}" class="default-btn">
                        @lang('View More Project') <span></span>
                    </a>
                </div>
            </div>
        </div>
        <!-- End project area -->

        <!-- Start Unique Feedback Area -->
        <div class="unique-feedback-area with-linear-gradient-color pt-100">
            <div class="container">
                <div class="section-title with-line-text-with-white-color">
                    <span class="sub-title">CREATING FEEDBACK</span>
                    <h2>Check What’s Our Clients <span>Feedback</span> On Our Big Data Services</h2>
                </div>

                <div class="unique-feedback-slides owl-carousel owl-theme">
                    @forelse ($testimonials as $testimonial)
                        <div class="unique-single-feedback">
                            <ul class="rating">
                                @for ($i = 1; $i<= $testimonial->star; $i++)
                                    <li><i class='bx bxs-star'></i></li>
                                @endfor
                            </ul>
                            <p>“{{$testimonial->feedback}}”</p>
                            <div class="client-info">
                                <img data-src="{{asset($testimonial->image)}}" loading="lazy" alt="image">

                                <h3>{{$testimonial->client_name}}</h3>
                                <span>{{$testimonial->designation}}</span>
                            </div>
                            <div class="quote">
                                <img data-src="{{asset('/')}}frontend/img/quote.png" loading="lazy" alt="image">
                            </div>
                        </div>
                    @empty
                        
                    @endforelse
                   
                </div>
            </div>
        </div>
        <!-- End Unique Feedback Area -->


  

  

        <!-- Start Partner Area -->
        <div class="partner-area ptb-100 pb-0">
            <div class="container">
                <div class="section-title">
                    <h2>Our Loving Clients</h2>
                </div>

                <div class="partner-slides owl-carousel owl-theme">
                    @foreach ($clients as $client)
                        <div class="single-partner-item">
                            <a href="#">
                                <img data-src="{{ asset($client->logo)}}"loading="lazy" alt="logo">
                                <img data-src="{{ asset($client->logo)}}"loading="lazy" alt="logo">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- End Partner Area -->



@endsection
