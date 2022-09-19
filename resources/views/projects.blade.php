@extends('layout')
@section('title', getThemeOption('projects','title'))
@section('content')
<!-- Start Page Title Area -->
<div class="page-title-area page-title-bg2">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>{{ getThemeOption('projects','title')}}</h2>

                    <ul>
                        <li><a href="{{ url('/')}}">@lang('Home')</a></li>
                        <li>{{ getThemeOption('projects','title')}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="shape-img2"><img src="{{ asset('frontend')}}/img/shape/2.svg" alt="image"></div>
    <div class="shape-img3"><img src="{{ asset('frontend')}}/img/shape/3.svg" alt="image"></div>
    <div class="shape-img4"><img src="{{ asset('frontend')}}/img/shape/4.png" alt="image"></div>
    <div class="shape-img5"><img src="{{ asset('frontend')}}/img/shape/5.png" alt="image"></div>
    <div class="shape-img7"><img src="{{ asset('frontend')}}/img/shape/7.png" alt="image"></div>
    <div class="shape-img8"><img src="{{ asset('frontend')}}/img/shape/8.png" alt="image"></div>
    <div class="shape-img9"><img src="{{ asset('frontend')}}/img/shape/9.png" alt="image"></div>
    <div class="shape-img10"><img src="{{ asset('frontend')}}/img/shape/10.png" alt="image"></div>
</div>
<!-- End Page Title Area -->

<!-- Project area -->
<div class="works-area pt-5 pb-5">
    <div class="container">
        <div class="row">
            @forelse ($projects as $project)
                <div class="col-lg-4 col-sm-6">
                    <div class="work-card">
                        <img src="{{$project->image}}" alt="image" >

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

            {{ $projects->links('vendor.pagination.custom') }}
        </div>
    </div>
</div>
<!-- End project area -->

@endsection
