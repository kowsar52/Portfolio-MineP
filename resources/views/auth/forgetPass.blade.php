@extends('admin.layout.auth')
@section('title', __('Forget Password'))
@section('content')
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root" style="background: #4b4b4b;">
        <!--begin::Authentication - Sign-in -->
        <div 
            class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed">
            <!--begin::Content-->
            <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20" >
                <!--begin::Logo-->
                <a href="{{ url('/') }}" class="mb-12">
                    <img alt="Logo" src="{{ asset(getOption('logo')) }}" class="h-50px" />
                </a>
                <!--end::Logo-->
                <!--begin::Wrapper-->
                <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                    <!--begin::Form-->
                    

                    <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" method="POST"
                        action="{{ url('forget/password') }}">
                        @csrf
                        <!--begin::Heading-->
                        <div class="text-center mb-10">
                            <!--begin::Title-->
                            <h1 class="text-dark mb-3">@lang('Forget Password')</h1>
                            <!--end::Title-->
                            @include('includes.alerts')
                        </div>
                        <!--begin::Heading-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-10">
                            <!--begin::Label-->
                            <label class="form-label fs-6 fw-bolder text-dark">@lang('Email')</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input class="form-control form-control-lg form-control-solid" type="email" name="email" placeholder="@lang('Email')"
                                autocomplete="off" />
                            <!--end::Input-->
                            @error('email')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                            @enderror
                        </div>
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="text-center">
                            <!--begin::Submit button-->
                            <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
                                <span class="indicator-label">@lang('Continue')</span>
                                <span class="indicator-progress">@lang('Please wait...')
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                            <!--end::Submit button-->

                            <a href="{{ url('admin/login') }}"
                                    class="link-primary fs-6 fw-bolder">@lang('Have Account') ?</a>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Content-->
            <!--begin::Footer-->
            <div class="d-flex flex-center flex-column-auto p-10">
                <!--begin::Links-->
                <div class="d-flex align-items-center fw-bold fs-6">
                    <p class="text-white">@lang('Copyright All Right Reserved') | <?= date('Y') ?></p>
                </div>
                <!--end::Links-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Authentication - Sign-in-->
    </div>
    <!--end::Main-->

@endsection
