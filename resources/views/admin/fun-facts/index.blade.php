@extends('admin.layout.app')
@section('title', __('Fun Fact'))
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
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">{{ __('Fun Fact') }}</h1>
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
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">{{ __('Fun Facts') }}</li>
                        <!--end::Item-->
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
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
                                <input type="text" data-kk-product-table-filter="search"
                                    class="form-control form-control-solid w-250px ps-14" placeholder="@lang('Search fun fact')">
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--begin::Card title-->

                        <div class="card-toolbar flex-row-fluid justify-content-end gap-5"
                            data-select2-id="select2-data-123-0tix">
                            <!--begin::Add product-->
                            <a href="javascript:;" class="btn btn-sm btn-primary me-3" onclick="addNew()">{{ __('Add New')}}</a>
                            <!--end::Add product-->
                        </div>

                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Table-->
                        <div id="kt_table_Service_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="table-responsive">
                                <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer"
                                    style="width:100%" id="dataTable">

                                    <thead>

                                        <tr>

                                            <th>#</th>

                                            <th>@lang('Title')</th>

                                            <th>@lang('Count')</th>

                                            <th>@lang('Back Text')</th>

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


    <!--begin::Modal - New Product/Service-->
    <div class="modal fade" id="kk_modal" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content rounded">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                    transform="rotate(-45 6 17.3137)" fill="black" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                    fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                    <!--begin:Form-->
                    <form id="kk_modal_form" class="form" enctype="multipart/form-data">
                        <div class="messages"></div>
                        {{-- csrf token  --}}
                        @csrf
                        <input type="hidden" name="id">

                        <!--begin::Heading-->
                        <div class="mb-13 text-center">
                            <!--begin::Title-->
                            <h1 class="mb-3" id="kk_modal_title">@lang('Fun Fact')</h1>
                            <!--end::Title-->
                            <!--begin::Description-->
                            <div class="text-muted fw-bold fs-5">@lang('Fill up the form and submit')
                            </div>
                            <!--end::Description-->
                        </div>
                        <!--end::Heading-->

                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">@lang('Title')</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" name="title" id="title" placeholder="@lang('Enter Title')">
                            <div class="help-block with-errors title-error"></div>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">@lang('Count')</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid"  name="count" id="count" placeholder="@lang('Enter Count Value')">
                            <div class="help-block with-errors count-error"></div>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                <span class="required">@lang('Back Text')</span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid"  name="back_text" id="back_text" placeholder="@lang('Enter Back Text')">
                            <div class="help-block with-errors back_text-error"></div>
                        </div>
                        <!--end::Input group-->
                  
                        

                        <!--begin::Actions-->
                        <div class="text-center">
                            <button type="reset" id="kk_modal_cancel" data-bs-dismiss="modal" class="btn btn-light me-3">@lang('Cancel')</button>
                            <button type="submit" id="kk_modal_submit" class="btn btn-primary">
                                <span class="indicator-label">@lang('Submit')</span>
                                <span class="indicator-progress">@lang('Please wait')...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                        <!--end::Actions-->

                    </form>
                    <!--end:Form-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - New Product/Service-->

@endsection

@push('script')
<script>
    $(document).ready( function () {
       let table =  $('#dataTable').DataTable({
            language: {
                    url: "{{asset('/datatable.de.json')}}"
                },
            processing: true,
            responsive: true,
            serverSide: true,
            ajax: "{{ url('admin/fun-facts') }}",
            columns: [
                {
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
              
                {
                    data : 'title', 
                    name : 'title',
                    orderable: true,
                    searchable: true
                },
                {
                    data : 'count', 
                    name : 'count',
                   
                },
                {
                    data : 'back_text', 
                    name : 'back_text',
                   
                },
                {
                    data: 'created_at',
                    name: 'created_at',
                    searchable: false
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ],
            "order" : [
                [4, 'desc']
            ]
        });
        document.querySelector('[data-kk-product-table-filter="search"]').addEventListener("keyup", (function(
            t) {
            table.search(t.target.value).draw()
        }))
    });
    // add new
    function addNew(){
        $('input[name="id"]').val('');
        $('.with-errors').text('');
        $('#kk_modal_form')[0].reset();
        $('#kk_modal').modal('show');
    }
    //save & update service
    $('#kk_modal_form').on('submit',function(e){
        e.preventDefault()
        $('.with-errors').text('');
        $('.indicator-label').hide();
        $('.indicator-progress').show();
        $('#kk_modal_submit').attr('disabled','true');

        var formData = new FormData(this);
        $.ajax({
            type:"POST",
            url: "{{ route('admin.fun-facts.save')}}",
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
                console.log(data);
                if(data.success ==  false || data.success ==  "false"){
                    var arr = Object.keys(data.errors);
                    var arr_val = Object.values(data.errors);
                    for(var i= 0;i < arr.length;i++){
                    $('.'+arr[i]+'-error').text(arr_val[i][0])
                    }
                }else if(data.error || data.error == 'true'){
                    var alertBox = '<div class="alert alert-danger" alert-dismissable">' + data.message + '</div>';
                    $('#kk_modal_form').find('.messages').html(alertBox).show();
                }else{
                    // empty the form
                    $('#kk_modal_form')[0].reset();
                    $("#kk_modal").modal('hide');

                    Swal.fire({
                            text: data.message,
                            icon: "success",
                            buttonsStyling: !1,
                            confirmButtonText: "{{__('Ok, got it!')}}",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary"
                            }
                        }).then((function () {
                            //refresh datatable
                            $('#dataTable').DataTable().ajax.reload();
                        }))
                }

            $('.indicator-label').show()
            $('.indicator-progress').hide()
            $('#kk_modal_submit').removeAttr('disabled')

            }
        });

    })
    //edit modal
    function edit(id){
        $('.with-errors').text('');
        $.ajax({
            type:"GET",
            url: "{{ url('admin/fun-facts')}}"+'/'+id,
            dataType: 'json',
            success:function(data){
                $('input[name="id"]').val(data.id);
                $('input[name="title"]').val(data.title);
                $('input[name="count"]').val(data.count);
                $('input[name="back_text"]').val(data.back_text);
                $("#kk_modal").modal('show');
            }
        });
    }
    //delete fun fact
    function deleteFunFact(id){
        Swal.fire({
            text: "{{__('Are you sure you want delete this?')}}",
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
                    url: "{{ url('admin/fun-facts/delete') }}"+'/'+id,
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
