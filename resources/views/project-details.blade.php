@extends('layout')
@section('title', $project->project_name)
@section('content')
<!-- Start Page Title Area -->
<div class="page-title-area page-title-bg1">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>{{$project->project_name}}</h2>

                    <ul>
                        <li><a href="{{ url('/')}}">@lang('Home')</a></li>
                        <li>{{$project->project_name}}</li>
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

<!-- Start Project Details Area -->
<section class="project-details-area ptb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="project-details-image">
                    <img src="{{ isset($project->image ) ? asset($project->image) : asset('frontend/img/projects-image/6.jpg')}}" alt="projects">

                    <a href="{{ isset($project->image ) ? asset($project->image) : asset('frontend/img/projects-image/6.jpg')}}" class="popup-btn"><i class="fas fa-search-plus"></i></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="projects-details-desc">
                    <h3>{{$project->project_name}}</h3>

                    {!! $project->description !!}
                    <div class="project-details-info">
                        <div class="single-info-box">
                            <h4>Client</h4>
                            <span>{{$project->client_name}}</span>
                        </div>

                        <div class="single-info-box">
                            <h4>Category</h4>
                            <span>{{$project->service->title}}</span>
                        </div>

                        <div class="single-info-box">
                            <h4>Date</h4>
                            <span>{{date('M d, Y',strtotime($project->created_at))}}</span>
                        </div>

                        {{-- <div class="single-info-box">
                            <h4>Share</h4>
                            <ul class="social">
                                <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div> --}}

                        <div class="single-info-box">
                            <a href="{{$project->preview_link}}" class="default-btn">Live Preview <span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Project Details Area -->
@endsection