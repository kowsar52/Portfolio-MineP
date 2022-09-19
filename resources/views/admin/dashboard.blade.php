@extends('admin.layout.app')
@section('title', __('Admin Dashboard'))
@section('content')
		<!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <!--begin::Row-->
                <div class="row gy-5 g-xl-8">
                    <!--begin::Col-->
                    <div class="col-12">
                         <!--begin::Body-->
                         <div class="card-body p-0">
                            <!--begin::Stats-->
                            <div class="card-p ">
                                <!--begin::Row-->
                                <div class="row g-0">
                                    <!--begin::Col-->
                                    <div class="bg-light-success col d-flex justify-content-between mb-7 me-7 px-6 py-8 rounded-2">
                                        <div>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                                            <span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect x="8" y="9" width="3" height="10" rx="1.5" fill="black" />
                                                    <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="black" />
                                                    <rect x="18" y="11" width="3" height="8" rx="1.5" fill="black" />
                                                    <rect x="3" y="13" width="3" height="6" rx="1.5" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <a href="{{ url('admin/services')}}" class="text-success fw-bold fs-6">@lang('Total Services')</a>
                                        </div>
                                        <div>
                                           <h4 class="py-8 text-success">
                                                {{App\Models\Service::count()}}
                                           </h4>
                                        </div>
                                    </div>
                                    <!--end::Col-->
                                    
                                    <!--begin::Col-->
                                    <div class="bg-light-dark col d-flex justify-content-between mb-7 me-7 px-6 py-8 rounded-2">
                                        <div>
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                                            <span class="svg-icon svg-icon-3x svg-icon-dark d-block my-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect x="8" y="9" width="3" height="10" rx="1.5" fill="black" />
                                                    <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="black" />
                                                    <rect x="18" y="11" width="3" height="8" rx="1.5" fill="black" />
                                                    <rect x="3" y="13" width="3" height="6" rx="1.5" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <a href="{{ url('admin/contacts')}}" class="text-dark fw-bold fs-6">@lang('Contact Messages')</a>
                                        </div>
                                        <div>
                                           <h4 class="py-8 text-dark">
                                            {{ App\Models\Contact::count() }}
                                           </h4>
                                        </div>
                                    </div>
                                    <!--end::Col-->
                                    
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Col-->

                </div>
                <!--end::Row-->
                
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
@endsection

@push('script')
<script>
   
</script>
@endpush
