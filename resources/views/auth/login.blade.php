@extends('admin.layout.auth')
@section('title', __('Admin Login'))
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
                        action="{{ url('admin/login/submit') }}">
                        @csrf
                        <!--begin::Heading-->
                        <div class="text-center mb-10">
                            <!--begin::Title-->
                            <h1 class="text-dark mb-3">@lang('Sign In As Admin')</h1>
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
                            <input class="form-control form-control-lg form-control-solid" type="email" name="email"
                                autocomplete="off" />
                            <!--end::Input-->
                            @error('email')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                            @enderror
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-10">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack mb-2">
                                <!--begin::Label-->
                                <label class="form-label fw-bolder text-dark fs-6 mb-0">@lang('Password')</label>
                                <!--end::Label-->
                                <!--begin::Link-->
                                <a href="{{ url('forget/password') }}"
                                    class="link-primary fs-6 fw-bolder">@lang('Forgot Password') ?</a>
                                <!--end::Link-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Input-->
                            <input class="form-control form-control-lg form-control-solid" type="password" name="password"
                                autocomplete="off" />
                            <!--end::Input-->
                            @error('password')
                                <span class="text-danger" style="font-size: 12px;">{{ $message }}</span>
                            @enderror
                        </div>
                        <!--end::Input group-->

                        <!--start::Input group-->
                        <div class="fv-row mb-10 fv-plugins-icon-container">
                            <label class="form-check form-check-custom form-check-solid form-check-inline">
                                <input class="form-check-input" type="checkbox" name="remember_me" value="1">
                                <span class="form-check-label fw-bold text-gray-700 fs-6">@lang('Remember me')</span>
                            </label>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
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

@push('scripts')
@endpush
