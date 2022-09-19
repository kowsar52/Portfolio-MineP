@extends('layout')
@section('title', 'Services')
@section('content')
<!-- Start Page Title Area -->
<div class="page-title-area page-title-bg2">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Services Details</h2>

                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li>Services Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="shape-img2"><img src="{{ asset('frontend/img/shape/2.svg')}}" alt="image"></div>
    <div class="shape-img3"><img src="{{ asset('frontend/img/shape/3.svg')}}" alt="image"></div>
    <div class="shape-img4"><img src="{{ asset('frontend/img/shape/4.png')}}" alt="image"></div>
    <div class="shape-img5"><img src="{{ asset('frontend/img/shape/5.png')}}" alt="image"></div>
    <div class="shape-img7"><img src="{{ asset('frontend/img/shape/7.png')}}" alt="image"></div>
    <div class="shape-img8"><img src="{{ asset('frontend/img/shape/8.png')}}" alt="image"></div>
    <div class="shape-img9"><img src="{{ asset('frontend/img/shape/9.png')}}" alt="image"></div>
    <div class="shape-img10"><img src="{{ asset('frontend/img/shape/10.png')}}" alt="image"></div>
</div>
<!-- End Page Title Area -->

<!-- Start Services Details Area -->
<section class="services-details-area ptb-100">
    <div class="container">
        <div class="services-details-overview">
            <div class="services-details-desc">
                <h3>Digital Marketing</h3>
                <p>We believe brand interaction is key in communication. Real innovations and a positive customer experience are the heart of successful communication. No fake products and services. The customer is king, their lives and needs are the inspiration.</p>

                <div class="features-text">
                    <h4><i class="flaticon-tick"></i> Core Development</h4>
                    <p>No fake products and services. The customer is king, their lives and needs are the inspiration.</p>
                </div>

                <div class="features-text">
                    <h4><i class="flaticon-tick"></i> Define Your Choices</h4>
                    <p>No fake products and services. The customer is king, their lives and needs are the inspiration.</p>
                </div>
            </div>

            <div class="services-details-image wow animate__animated animate__fadeInUp">
                <img src="{{ asset('frontend/img/about-img1.png')}}" alt="image">
            </div>
        </div>

        <div class="services-details-overview">
            <div class="services-details-image wow animate__animated animate__fadeInUp">
                <img src="{{ asset('frontend/img/why-choose-img1.png')}}" alt="image">
            </div>

            <div class="services-details-desc">
                <h3>Social Media Marketing</h3>
                <p>We believe brand interaction is key in communication. Real innovations and a positive customer experience are the heart of successful communication. No fake products and services. The customer is king, their lives and needs are the inspiration.</p>

                <div class="services-details-accordion">
                    <ul class="accordion">
                        <li class="accordion-item">
                            <a class="accordion-title active" href="javascript:void(0)">
                                <i class="fas fa-plus"></i>
                                Which material types can you work with?
                            </a>

                            <p class="accordion-content show">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </li>
                        
                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="fas fa-plus"></i>
                                Is Smart Lock required for instant apps?
                            </a>

                            <p class="accordion-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                        </li>

                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="fas fa-plus"></i>
                                Why Choose Our Services In Your Business?
                            </a>

                            <p class="accordion-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Services Details Area -->
@endsection