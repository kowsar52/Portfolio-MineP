@extends('admin.layout.app')
@section('title', __('Pages'))
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
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">@lang('All Pages')</h1>
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
                    <li class="breadcrumb-item text-muted">@lang('Page Management')</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-200 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">@lang('Page List')</li>
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
                               @lang('Edit Page')
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--begin::Card title-->
                    </div>

                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-md-12 ">
                                @include('includes.alerts')
                                <div class="kt-portlet kt-portlet--mobile p-4" style="overflow-x:auto;background:white;margin-top:20px">
                                    <form method="post" action="{{ url('/admin/pages/update') }}" enctype="multipart/form-data">
                                        <div class="modal-body">
                                        @csrf
                                      @php
                                      $pages_name[0]['name'] = 'About Us';
                                      $pages_name[0]['slug'] = 'about-us';
                                      $pages_name[1]['name'] = 'Terms And Conditions';
                                      $pages_name[1]['slug'] = 'terms-conditions';
                                      $pages_name[2]['name'] = 'Refund Policy';
                                      $pages_name[2]['slug'] = 'refund-policy';
                                      $pages_name[3]['name'] = 'Privacy Policy';
                                      $pages_name[3]['slug'] = 'privacy-policy';
                                      $pages_name[4]['name'] = 'Academic Integrity';
                                      $pages_name[4]['slug'] = 'academic-integrity';
                                      $pages_name[5]['name'] = 'Contact Us';
                                      $pages_name[5]['slug'] = 'contact-us';
                                      $pages_name[6]['name'] = 'FAQ';
                                        $pages_name[6]['slug'] = 'faq';
                                      $pages_name[7]['name'] = 'Becoma A Writer';
                                        $pages_name[7]['slug'] = 'become-writer';
                                      $pages_name[8]['name'] = 'Recommendations';
                                        $pages_name[8]['slug'] = 'recommendations';
                                    @endphp

                                    <!--begin::Row-->
                                    <div class="row mb-8">
                                        <!--begin::Col-->
                                        <div class="col-xl-3">
                                            <div class="fs-6 fw-bold mt-2 mb-3 text-capitalize">@lang('Page Name')<span class="text-danger">*</span></div>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-xl-9 fv-row fv-plugins-icon-container">
                                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true"
                                                data-placeholder="@lang('Select status')" name="page_name">
                                                <option value="">@lang('Select Page Name')</option>
                                                @foreach($pages_name as $page_name)
                                                     <option @php echo($page->slug == $page_name['slug']) ? ' selected' : '' @endphp value="{{$page_name['slug']}}">{{$page_name['name']}}</option>
                                                @endforeach
                                            </select>
                                            <div class="help-block with-errors page_name-error"></div>
                                        <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                    </div>
                                    <!--end::Row-->
                                    <!--begin::Row-->
                                    <div class="row mb-8">
                                        <!--begin::Col-->
                                        <div class="col-xl-3">
                                            <div class="fs-6 fw-bold mt-2 mb-3 text-capitalize">@lang('Language')<span class="text-danger">*</span></div>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-xl-9 fv-row fv-plugins-icon-container">
                                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true"
                                                data-placeholder="@lang('Select status')" name="language">
                                                <option value="">@lang('Select Language')</option>
                                                @foreach($languages as $language)
                                                     <option @php echo($page->language_id == $language->id) ? ' selected' : '' @endphp value="{{$language->id}}">{{$language->title}}</option>
                                                @endforeach
                                            </select>
                                            <div class="help-block with-errors language-error"></div>
                                        <div class="fv-plugins-message-container invalid-feedback"></div></div>
                                    </div>
                                    <!--end::Row-->

                                    <!--begin::Row-->
                                    <div class="row mb-8">
                                        <!--begin::Col-->
                                        <div class="col-xl-3">
                                            <div class="fs-6 fw-bold mt-2 mb-3 text-capitalize">@lang('Page Title')<span class="text-danger">*</span></div>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-xl-9 fv-row fv-plugins-icon-container">
                                            <input type ="hidden" class="form-control" name="id" value="{{$page->id}}">
                                            <input type="text" class="form-control form-control-solid" value="{{$page->title}}" name="title" placeholder="@lang('Enter Title')">
                                            <div class="help-block with-errors title-error"></div>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                    </div>
                                    <!--end::Row-->

                                    <!--begin::Row-->
                                    <div class="row mb-8">
                                        <!--begin::Col-->
                                        <div class="col-xl-3">
                                            <div class="fs-6 fw-bold mt-2 mb-3 text-capitalize">@lang('Short Description')<span class="text-danger">*</span></div>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-xl-9 fv-row fv-plugins-icon-container">
                                            <textarea name="heading" placeholder="Enter Short Description" class="form-control form-control-solid" rows="5" spellcheck="false">{{$page->heading}}</textarea>
                                            <div class="help-block with-errors heading-error"></div>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                    </div>
                                    <!--end::Row-->
                                    <!--begin::Row-->
                                    <div class="row mb-8">
                                        <!--begin::Col-->
                                        <div class="col-xl-3">
                                            <div class="fs-6 fw-bold mt-2 mb-3 text-capitalize">@lang('Details')<span class="text-danger">*</span></div>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-xl-9 fv-row fv-plugins-icon-container">
                                            <textarea class="form-control form-control-solid" name="details" id="details">
                                                {{$page->details}}
                                            </textarea>
                                            <div class="help-block with-errors meta_key-error"></div>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                    </div>
                                    <!--end::Row-->
                                    <!--begin::Row-->
                                    <div class="row mb-8">
                                        <!--begin::Col-->
                                        <div class="col-xl-3">
                                            <div class="fs-6 fw-bold mt-2 mb-3 text-capitalize">@lang('Meta title')<span class="text-danger">*</span></div>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-xl-9 fv-row fv-plugins-icon-container">
                                            <input type="text" class="form-control form-control-solid" name="meta_title" value="{{$page->meta_title}}" placeholder="@lang('Enter meta title')">
                                            <div class="help-block with-errors meta_title-error"></div>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                    </div>
                                    <!--end::Row-->
                                    <!--begin::Row-->
                                    <div class="row mb-8">
                                        <!--begin::Col-->
                                        <div class="col-xl-3">
                                            <div class="fs-6 fw-bold mt-2 mb-3 text-capitalize">@lang('Meta key')<span class="text-danger">*</span></div>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-xl-9 fv-row fv-plugins-icon-container">
                                            <input type="text" class="form-control form-control-solid" name="meta_key" value="{{$page->meta_key}}" placeholder="@lang('Enter meta key,Separated by comma')(,)" >
                                            <div class="help-block with-errors meta_key-error"></div>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                    </div>
                                    <!--end::Row-->
                                    <!--begin::Row-->
                                    <div class="row mb-8">
                                        <!--begin::Col-->
                                        <div class="col-xl-3">
                                            <div class="fs-6 fw-bold mt-2 mb-3 text-capitalize">@lang('Meta description')<span class="text-danger">*</span></div>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-xl-9 fv-row fv-plugins-icon-container">
                                            <textarea name="meta_description" placeholder="Enter meta description" class="form-control form-control-solid" rows="5" spellcheck="false">{{$page->meta_des}}</textarea>
                                            <div class="help-block with-errors meta_description-error"></div>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>
                                    </div>
                                    <!--end::Row-->
                                    <div class="form-group row mt-2 ">
                                        <label class="col-lg-9 col-form-label"></label>
                                        <div class="col-lg-3 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary submit-btn">@lang('Update')</button>
                                        </div>
                                    </div>
                                    {{-- <div class="form-group ">

                                    </div> --}}
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
            CKEDITOR.replace('details', {
            allowedContent:true,
            });
        });
    </script>
@endpush

