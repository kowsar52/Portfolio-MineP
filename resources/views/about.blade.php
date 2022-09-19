@extends('layout')
@section('title', 'About Us')
@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area page-title-bg1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>{{ getThemeOption('about','title')}}</h2>

                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li>{{ getThemeOption('about','title')}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="shape-img2"><img src="{{ asset('frontend/img/shape/2.svg') }}" alt="image"></div>
        <div class="shape-img3"><img src="{{ asset('frontend/img/shape/3.svg') }}" alt="image"></div>
        <div class="shape-img4"><img src="{{ asset('frontend/img/shape/4.png') }}" alt="image"></div>
        <div class="shape-img5"><img src="{{ asset('frontend/img/shape/5.png') }}" alt="image"></div>
        <div class="shape-img7"><img src="{{ asset('frontend/img/shape/7.png') }}" alt="image"></div>
        <div class="shape-img8"><img src="{{ asset('frontend/img/shape/8.png') }}" alt="image"></div>
        <div class="shape-img9"><img src="{{ asset('frontend/img/shape/9.png') }}" alt="image"></div>
        <div class="shape-img10"><img src="{{ asset('frontend/img/shape/10.png') }}" alt="image"></div>
    </div>
    <!-- End Page Title Area -->


    <!-- Start Why Choose Us Area -->
    <section class="why-choose-area ptb-100 ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="why-choose-content">
                        {!! getThemeOption('about','description') !!}
        
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="why-choose-image">
                        <img src="{{ asset(getThemeOption('about','image')) }}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Why Choose Us Area -->


    <!-- Start Fun Facts Area -->
    <section class="fun-facts-area ptb-100">
        <div class="container">
            <div class="row">
                @foreach ($fun_facts as $fun_fact)
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-fun-facts">
                            <h3><span class="odometer" data-count="{{ $fun_fact->count }}">00</span><span
                                    class="sign-icon">+</span></h3>
                            <p>@lang($fun_fact->title)</p>
                            <div class="back-text">@lang($fun_fact->back_text)</div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- End Fun Facts Area -->

    <!-- Start Team Area -->
    <section class="team-area ptb-100 pt-5">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">@lang('Our Team')</span>
                <h2>@lang('Meet Our Awesome Team Member')</h2>
            </div>

            <div class="row">
                @foreach ($members as $member)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-team-box">
                            <div class="image">
                                <img src="{{ asset($member->image) }}" alt="team">

                                <div class="social">
                                    <a href="{{ $member->facebook ?? '#' }}" target="_blank"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a href="{{ $member->twitter ?? '#' }}" target="_blank"><i
                                            class="fab fa-twitter"></i></a>
                                    <a href="{{ $member->instagram ?? '#' }}" target="_blank"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>

                            <div class="content">
                                <h3>@lang($member->name)</h3>
                                <span>@lang($member->designation)</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="shape-img2"><img src="{{ asset('frontend/img/shape/2.svg') }}" alt="image"></div>
        <div class="shape-img3"><img src="{{ asset('frontend/img/shape/3.svg') }}" alt="image"></div>
        <div class="shape-img4"><img src="{{ asset('frontend/img/shape/4.png') }}" alt="image"></div>
        <div class="shape-img5"><img src="{{ asset('frontend/img/shape/5.png') }}" alt="image"></div>
        <div class="shape-img6"><img src="{{ asset('frontend/img/shape/6.png') }}" alt="image"></div>
        <div class="shape-img9"><img src="{{ asset('frontend/img/shape/9.png') }}" alt="image"></div>
        <div class="shape-img10"><img src="{{ asset('frontend/img/shape/10.png') }}" alt="image"></div>
    </section>
    <!-- End Team Area -->




    <!-- Start Unique Feedback Area -->
    <div class="unique-feedback-area with-linear-gradient-color pt-100">
        <div class="container">
            <div class="section-title with-line-text-with-white-color">
                <span class="sub-title">@lang('CREATING FEEDBACK')</span>
                <h2>@lang("Check Whats Our Clients")<span>@lang('Feedback')</span> @lang('On Our Big Data Services')</h2>
            </div>

            <div class="unique-feedback-slides owl-carousel owl-theme">
                @forelse ($testimonials as $testimonial)
                    <div class="unique-single-feedback">
                        <ul class="rating">
                            @for ($i = 1; $i <= $testimonial->star; $i++)
                                <li><i class='bx bxs-star'></i></li>
                            @endfor
                        </ul>
                        <p>“{{ $testimonial->feedback }}”</p>
                        <div class="client-info">
                            <img src="{{ $testimonial->image }}" alt="image">

                            <h3>{{ $testimonial->client_name }}</h3>
                            <span>{{ $testimonial->designation }}</span>
                        </div>
                        <div class="quote">
                            <img src="{{ asset('/frontend/img/quote.png') }}" alt="image">
                        </div>
                    </div>
                @empty

                @endforelse

            </div>
        </div>
    </div>
    <!-- End Unique Feedback Area -->





    <!-- Start Partner Area -->
    <section class="partner-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">@lang('Partner')</span>
                <p>@lang('We partner with companies of all sizes, all around the world')</p>
            </div>

            <div class="row align-items-center">
                @foreach ($clients as $client)
                    <div class="single-partner-item">
                        <a href="#">
                            <img src="{{ asset($client->logo) }}" alt="logo">
                            <img src="{{ asset($client->logo) }}" alt="logo">
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="shape-img2"><img src="{{ asset('frontend/img/shape/2.svg') }}" alt="image"></div>
        <div class="shape-img3"><img src="{{ asset('frontend/img/shape/3.svg') }}" alt="image"></div>
        <div class="shape-img4"><img src="{{ asset('frontend/img/shape/4.png') }}" alt="image"></div>
        <div class="shape-img5"><img src="{{ asset('frontend/img/shape/5.png') }}" alt="image"></div>
    </section>
    <!-- End Partner Area -->
@endsection

@push('script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#newsletter').on('submit', function(e) {
                e.preventDefault()
                // $('.with-errors').text('');

                var formData = new FormData(this);
                $.ajax({
                    type: "POST",
                    url: "{{ url('newsletter') }}",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        if (data.success == false || data.success == "false") {
                            var arr = Object.keys(data.errors);
                            var arr_val = Object.values(data.errors);
                            for (var i = 0; i < arr.length; i++) {
                                $('.' + arr[i] + '-error').text(arr_val[i][0])
                            }
                        } else {
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
@endpush
