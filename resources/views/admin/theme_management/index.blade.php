@extends('admin.layout.app')
@section('title', __('Theme Management'))

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
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">@lang('Theme Management')</h1>
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
                    <li class="breadcrumb-item text-muted">@lang('Theme Settings')</li>
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
                    <li class="breadcrumb-item text-dark">@lang('Home Page')</li>
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

                @include('admin.theme_management.tab_item')

                @include('includes.alerts')

                <!--begin:::Tab content-->
                <div class="tab-content" id="myTabContent">
                <!--begin:::Tab pane-->
                <div class="tab-pane fade show active" id="kt_ecommerce_settings_general" role="tabpanel">
                    <!--begin::Products-->
                    <!--begin::card-->
                    <div class="card">
                        <!--begin::Card header-->
                        <div class="card-header">
                            <!--begin::Card title-->
                            <div class="card-title fs-3 fw-bolder">@lang('Hero Section')</div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->

                        <!--begin::Card body-->
                        @include('admin.theme_management.pages')
                         <!--end::Card body-->
                    </div>
                    <!--end::card-->
                    <!--end::Products-->
                </div>
                <!--end:::Tab pane-->

                
            </div>
            <!--end:::Tab content-->
            </div>
    </div>
    <!--end::Post-->
</div>
@endsection

{{--
@elseif($setting->name == 'meta_description')
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
@endforeach --}}
