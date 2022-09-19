@extends('admin.layout.app')
@section('title', __('Email Templates'))
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
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">@lang('Email Template Edit')</h1>
                <!--end::Title-->
                <!--begin::Separator-->
                <span class="h-20px border-gray-200 border-start mx-4"></span>
                <!--end::Separator-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ url('/dashboard')}}" class="text-muted text-hover-primary">@lang('Dashboard')</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-200 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">@lang('Email Management')</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-200 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">@lang('Email Template')</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-200 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-dark">@lang('Edit')</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center py-1">
                <!--begin::Button-->
                <a href="{{ url()->previous() }}" class="btn btn-sm btn-primary" >@lang('Back')</a>
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
                <!--begin::Card-->
                <div class="card">
                    <!--begin::Card header-->
                    <div class="card-header border-0 pt-6">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <!--begin::Search-->
                            <div class="d-flex align-items-center position-relative my-1">
                                @lang('Edit Template')
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--begin::Card title-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-md-12">
                                 <div class="kt-portlet kt-portlet--mobile p-4" style="overflow-x:auto;background:white">
                                    <p>@lang('Use the BB codes, it show the data dynamically in your emails.')</p>
                                    <table class="table table-striped">
                                      <thead>
                                        <tr>
                                          <th scope="col">@lang('Meaning')</th>
                                          <th scope="col">@lang('BB Code')/th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>@lang('Name')</td>
                                          <td>{name}</td>
                                        </tr>
                                        <tr>
                                          <td>@lang('Email')</td>
                                          <td>{email}</td>
                                        </tr>
                                        <tr>
                                          <td>@lang('Snippet Code')</td>
                                          <td>{snippet_code}</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-12 ">
                                <div class="kt-portlet kt-portlet--mobile p-4" style="overflow-x:auto;background:white;margin-top:20px">
                                    <form method="post" action="{{ url('/admin/email-template/update') }}" enctype="multipart/form-data">
                                        <div class="modal-body">
                                            @csrf

                                            <div class="form-group">
                                                <label for="message-text" class="col-form-label">@lang('Email Subject')</label>
                                                <input type ="hidden" class="form-control" name="id" value="{{$data->id}}">
                                                <input type="text" class="form-control" name="email_subject" value="{{$data->email_subject}}">
                                                <div id="email-error" class="error invalid-feedback"></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="message-text" class="col-form-label">@lang('Email Body'):</label>
                                                <textarea class="form-control" name="email_body" id="email_body">
                                                    {{$data->email_body}}
                                                </textarea>
                                                <div id="email-error" class="error invalid-feedback"></div>
                                            </div>
                                            <div class="form-group mt-2">
                                                <button type="submit" class="btn btn-primary submit-btn">@lang('Update')</button>
                                            </div>


                                        </div>
                                    </form>
                                 </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>
@endsection

@push('script')
    <script>
           $(document).ready(function() {
                CKEDITOR.replace('email_body', {
                    allowedContent:true,
                });
            } );
    </script>
@endpush

