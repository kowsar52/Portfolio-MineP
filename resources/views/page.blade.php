@extends('layout')
@section('title', 'Services')
@section('meta-title', $page->meta_title)
@section('meta-description', $page->meta_des)
@section('meta-keywords', $page->meta_key)

@section('content')
<!-- Start Page Title Area -->
<div class="page-title-area page-title-bg2">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>{{ $page->title }}</h2>

                    <ul>
                        <li><a href="index.html">@lang('Home')</a></li>
                        <li>{{ $page->title }}</li>
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
       <p>{!! $page->details !!}</p>
    </div>
</section>
<!-- End Services Details Area -->
@endsection