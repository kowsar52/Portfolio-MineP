@extends('layout')
@section('title','Forget Password')

@section('content')

    <!-- Start Page Title Area -->
    <div class="page-title-bg2">

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

    <!-- Login Area -->
    <div class="container">
        <div class="form-content">
            <div class="form-header">
                <h3>Forget Password</h3>
            </div>
            @include('includes.alerts')
            <form action="{{ url('forget/password')}}" method="post">
                @csrf
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="@lang('Your email')" value="{{ old('email')}}">
                    @error('email')
                        <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                    @enderror
                </div>
                

                <button type="submit" class="default-btn">Submit</button>
            </form>

            <div class="form-footer">
                <p>Have an account? <a class="form-link" href="{{url('admin/login')}}">login</a></p>
            </div>
        </div>
    </div>
    <!-- End Login Area -->
@endsection
