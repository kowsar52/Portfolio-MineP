@extends('admin.layout.app')
@section('title', __("Pages"))

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
                            <a href="{{ url('admin/dashboard')}}" class="text-muted text-hover-primary">@lang('Dashboard')</a>
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
                        <li class="breadcrumb-item text-muted">@lang('Page Setings')</li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-200 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-dark">@lang('Page List')</li>
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
                                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                                            transform="rotate(45 17.0365 15.1223)" fill="black"></rect>
                                        <path
                                            d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                            fill="black"></path>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <input type="text" data-kt-user-table-filter="search"
                                    class="form-control form-control-solid w-250px ps-14" placeholder="@lang('Search user')">
                            </div>
                            <!--end::Search-->

                        </div>
                        <div class="card-toolbar flex-row-fluid justify-content-end gap-5"
                        data-select2-id="select2-data-123-0tix">
                        <div class="w-100 mw-150px" data-select2-id="select2-data-122-mhmq">

                        </div>
                        <!--begin::Add product-->
                        <a href="{{url('/admin/pages/create-page/')}}" class="btn btn-sm btn-primary me-3">@lang('Add Page')</a>
                        <!--end::Add product-->
                    </div>
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Table-->
                        <div id="kt_table_Email Template_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="table-responsive">
                                <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer" style="width:100%" id="dataTable">

                                    <thead>

                                        <tr>

                                            <th>#</th>

                                            <th>@lang('Page Name')</th>

                                            <th>@lang('Title')</th>

                                            <th>@lang('Language')</th>

                                            <th>@lang('Created at')</th>

                                            <th>@lang('Action')</th>

                                        </tr>

                                    </thead>

                                    <tbody>

                                    </tbody>

                                </table>


                            </div>
                        </div>
                        <!--end::Table-->
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
<script type="text/javascript">

    $(document).ready(function(){

        var table = $('#dataTable').DataTable({
            language: {
                url: "{{asset('/datatable.de.json')}}"
            },
            processing: true,
            responsive: true,
            serverSide: true,
            ajax: "{{ url('admin/all-pages') }}",
            columns: [
                {data: 'DT_RowIndex' , name: 'DT_RowIndex',orderable: false, searchable: false },
                {data: 'slug', name: 'slug'},
                {data: 'title', name: 'title'},
                {data: 'language', name: 'language'},
                {data: 'created_at', name: 'created_at'},
                {data: 'action', name: 'action', orderable: false, searchable: false},

            ],
            "order": [[ 4, 'desc' ]]

        })

        document.querySelector('[data-kt-user-table-filter="search"]').addEventListener("keyup", (function(t) {
            table.search(t.target.value).draw()
        }))

    })
     //delete page
     function deletePage(id){
        Swal.fire({
            text: "{{__('Are you sure you want delete this')}}?",
            icon: "warning",
            showCancelButton: !0,
            buttonsStyling: !1,
            confirmButtonText: "{{__('Confirm')}}",
            cancelButtonText: "{{__('No, cancel')}}",
            customClass: {
                confirmButton: "btn fw-bold btn-danger",
                cancelButton: "btn fw-bold btn-active-light-primary"
            }
            }).then((function (o) {
                if(o.value){ //if agree
                    $.ajax({
                        type: "GET",
                        url: "{{ url('admin/pages/delete') }}"+'/'+id,
                        data: {},
                        success: function (res)
                        {
                            if(res.success){
                                Swal.fire({
                                    text: res.message,
                                    icon: "success",
                                    buttonsStyling: !1,
                                    confirmButtonText: "{{__('Ok, got it')}}!",
                                    customClass: {
                                        confirmButton: "btn fw-bold btn-primary"
                                    }
                                }).then((function () {
                                    //refresh datatable
                                    $('#dataTable').DataTable().ajax.reload();
                                }))
                            }
                        }
                    });

                }else{ //if cancel
                    Swal.fire({
                        text: "{{__('Item has not been deleted')}}",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "{{__('Ok, got it')}}!",
                        customClass: {
                            confirmButton: "btn fw-bold btn-primary"
                        }
                    })
                }

            }))
        }


</script>
@endpush
