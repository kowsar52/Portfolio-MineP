@extends('layout')
@section('title','Contact Us')
@section('content')
<!-- Start Page Title Area -->
<div class="page-title-area page-title-bg1">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>@lang('Contact')</h2>
                    <ul>
                        <li><a href="{{ url('/')}}">@lang('Home')</a></li>
                        <li>@lang('Contact')</li>
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

<!-- Start Contact Area -->
<section class="contact-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="contact-info-box">
                    <div class="icon">
                        <i class="fas fa-envelope"></i>
                    </div>

                    <h3>@lang('Email Here')</h3>
                    <p><a href="mailto:{{getThemeOption('contact', 'email')}}">{{ getThemeOption('contact', 'email') }}</a></p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="contact-info-box">
                    <div class="icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>

                    <h3>@lang('Location Here')</h3>
                    <p><a href="#">{{getThemeOption('contact', 'location')}}</a></p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-0 offset-md-3 offset-sm-3">
                <div class="contact-info-box">
                    <div class="icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>

                    <h3>@lang('Call Here')</h3>
                    <p><a href="tel:{{getThemeOption('contact', 'phone')}}">{{getThemeOption('contact', 'phone')}}</a></p>
                    {{-- <p><a href="tel:{{getThemeOption('contact', 'whatsapp')}}">{{getThemeOption('contact', 'whatsapp')}}</a></p> --}}
                </div>
            </div>
        </div>
        
        <div class="section-title">
            {{-- <span class="sub-title">Contact Us</span> --}}
            <h2>{{getThemeOption('contact', 'title')}}</h2>
            <p>{{getThemeOption('contact', 'sub_title')}}</p>
        </div>

        <div class="row align-items-center justify-content-center">
            <div class="col-lg-8 col-md-8">
                <div class="contact-form">
                    <form id="contactForm">
                        @csrf
                       
                        <div class="success-message text-center"></div>
                        
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="@lang('Name')">
                                    <div class="help-block with-errors name-error text-danger"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="@lang('Email')">
                                    <div class="help-block with-errors email-error text-danger"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="@lang('Phone')">
                                    <div class="help-block with-errors phone_number-error text-danger"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="@lang('Subject')">
                                    <div class="help-block with-errors msg_subject-error text-danger"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="5" required data-error="Write your message" placeholder="@lang('Your Message')"></textarea>
                                    <div class="help-block with-errors message-error text-danger"></div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="form-check">
                                        <input
                                            name="gridCheck"
                                            value="I agree to the terms and privacy policy."
                                            class="form-check-input"
                                            type="checkbox"
                                            id="gridCheck"
                                            required
                                        >
                                
                                        <label class="form-check-label" for="gridCheck">
                                            @lang('I agree to the') <a href="/terms">@lang('terms')</a> @lang('and')  <a href="/privacy-policy">@lang('privacy policy')</a>
                                        </label>
                                        <div class="help-block with-errors gridCheck-error text-danger"></div>
                                    </div>
                                </div>
                            </div>         

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn">@lang('Send Message') <span></span></button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Area -->
@endsection

@push('script')
<script type="text/javascript">
    $(document).ready(function(){
        $('#contactForm').on('submit',function(e){
            e.preventDefault()
            // $('.with-errors').text('');
           
            var formData = new FormData(this);
            $.ajax({
                type:"POST",
                url: "{{ url('contact-form-data/save')}}",
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
                        $('#contactForm')[0].reset();
                        var alertBox = '<div class="alert alert-success alert-dismissable"><strong>' + data.message + '</strong></div>';
                        $('#contactForm').find('.success-message').html(alertBox).show();
                        $('#contactForm').find('.success-message').delay(3000).fadeOut('slow');
                        
                    }

                }
            });

        })
  
    })
</script>
@endpush