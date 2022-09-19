@extends('admin.layout.app')
@section('title', __('All Settings'))

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">@lang('All Settings')</h1>
                <!--end::Title-->
                <!--begin::Separator-->
                <span class="h-20px border-gray-200 border-start mx-4"></span>
                <!--end::Separator-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ url('admin/dashboard') }}" class="text-muted text-hover-primary">@lang('Dashboard')</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-200 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-200 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">@lang('Settings')</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-200 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-dark">@lang('General Settings')</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center py-1">
                <!--begin::Button-->
                <a href="{{ url()->previous() }}" class="btn btn-sm btn-primary">@lang('Back')</a>
                <!--end::Button-->
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::navbar-->
            <div class="card">
                <div class="card-body pt-0 pb-0">
                    <!--begin::Nav-->
                    @include('admin.settings.nav')
                    <!--end::Nav-->
                </div>
            </div>
            <!--end::navbar-->
            <div style="margin-bottom:35px"></div>

            <!--begin::card-->
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header">
                    <!--begin::Card title-->
                    <div class="card-title fs-3 fw-bolder">@lang('General Settings')</div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->
              
                <!--begin::Form-->
                <form action="{{ route('admin.settings.save') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!--begin::Card body-->
                    <div class="card-body p-9">
                        @include('includes.alerts')
                    @foreach ($settings as $setting)
                        @if($setting->name == 'logo' || $setting->name == 'white_logo' || $setting->name == 'favicon' || $setting->name == 'default_avatar')
                            <div class="row mb-5">
                                <!--begin::Col-->
                                <div class="col-xl-3">
                                    <div class="fs-6 fw-bold mt-2 mb-3 text-capitalize">{{str_replace('_',' ',$setting->name)}}<span class="text-danger">*</span></div>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <!--begin::Image input-->
                                    <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('{{asset('/')}}{{$setting->value}}')">
                                        <!--begin::Preview existing avatar-->
                                        <div class="image-input-wrapper w-125px h-125px bgi-position-center" style="background-size: 75%; background-image: url('{{asset('/')}}{{$setting->value}}')"></div>
                                        <!--end::Preview existing avatar-->
                                        <!--begin::Label-->
                                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="" data-bs-original-title="Change avatar">
                                            <i class="fa fa-pencil-alt fs-7"></i>
                                            <!--begin::Inputs-->
                                            <input type="file" name="setting[{{$setting->name}}]" accept=".png, .jpg, .jpeg">
                                            <input type="hidden" name="remove_setting[{{$setting->name}}]">
                                            <!--end::Inputs-->
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Cancel-->
                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="" data-bs-original-title="Cancel avatar">
                                            <i class="fa fa-times fs-2"></i>
                                        </span>
                                        <!--end::Cancel-->
                                        <!--begin::Remove-->
                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="" data-bs-original-title="Remove avatar">
                                            <i class="fa fa-times fs-2"></i>
                                        </span>
                                        <!--end::Remove-->
                                    </div>
                                    <!--end::Image input-->
                                    <!--begin::Hint-->
                                    <div class="form-text">@lang('Allowed file types'): png, jpg, jpeg.</div>
                                    <!--end::Hint-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->


                        @elseif($setting->name == 'meta_description' || $setting->name == 'about')
                        <!--begin::Row-->
                        <div class="row mb-8">
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3 text-capitalize">{{str_replace('_',' ',$setting->name)}}<span class="text-danger">*</span></div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-9 fv-row fv-plugins-icon-container">
                                <textarea name="setting[{{$setting->name}}]" class="form-control form-control-solid" rows="5" spellcheck="false">{{$setting->value}}</textarea>
                            <div class="fv-plugins-message-container invalid-feedback"></div></div>
                        </div>
                        @else
                        <!--begin::Row-->
                        <div class="row mb-8">
                            <!--begin::Col-->
                            <div class="col-xl-3">
                                <div class="fs-6 fw-bold mt-2 mb-3 text-capitalize">{{str_replace('_',' ',$setting->name)}}<span class="text-danger">*</span></div>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-9 fv-row fv-plugins-icon-container">
                                <input type="text" class="form-control form-control-solid" name="setting[{{$setting->name}}]" value="{{$setting->value}}">
                            <div class="fv-plugins-message-container invalid-feedback"></div></div>
                        </div>
                        <!--end::Row-->
                        @endif
                    @endforeach

                    </div>
                    <!--end::Card body-->
                    <!--begin::Card footer-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <button type="reset" class="btn btn-light btn-active-light-primary me-2">@lang('Discard')</button>
                        <button type="submit" class="btn btn-primary" id="kt_project_settings_submit">@lang('Save Changes')</button>
                    </div>
                    <!--end::Card footer-->
                <input type="hidden"><div></div></form>
                <!--end:Form-->
            </div>
            <!--end::card-->
        </div>
    </div>
    <!--end::Post-->
</div>
@endsection
