 <!--begin::Form-->
 <form action="{{ url('admin/theme/save-settings/'.$page) }}" method="POST" enctype="multipart/form-data" id="kt_project_settings_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
    @csrf
<div class="card-body p-9">
    @foreach ($data as $item)
        @if($item->slug == 'footer_text')
            <!--begin::Row-->
            <div class="row mb-8">
                <!--begin::Col-->
                <div class="col-xl-3">
                    <div class="fs-6 fw-bold mt-2 mb-3 text-capitalize">{{str_replace('_',' ',$item->slug)}}<span class="text-danger">*</span></div>
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-9 fv-row fv-plugins-icon-container">
                    <textarea name="setting[{{$item->slug}}]" class="form-control form-control-solid" rows="5" spellcheck="false">{{$item->data}}</textarea>
                <div class="fv-plugins-message-container invalid-feedback"></div></div>
            </div>
        @elseif($item->page == 'about' && ($item->slug == 'description'))
            <!--begin::Row-->
            <div class="row mb-8">
                <!--begin::Col-->
                <div class="col-xl-3">
                    <div class="fs-6 fw-bold mt-2 mb-3 text-capitalize">{{str_replace('_',' ',$item->slug)}}<span class="text-danger">*</span></div>
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-9 fv-row fv-plugins-icon-container">
                    <textarea name="setting[{{$item->slug}}]" class="form-control form-control-solid" id="{{$item->slug}}" rows="5" spellcheck="false">{{$item->data}}</textarea>
                <div class="fv-plugins-message-container invalid-feedback"></div></div>
            </div>
       @elseif($item->page == 'about' && ($item->slug == 'image'))
          <div class="row mb-5">
            <!--begin::Col-->
            <div class="col-xl-3">
                <div class="fs-6 fw-bold mt-2 mb-3 text-capitalize">{{str_replace('_',' ',$item->slug)}}<span class="text-danger">*</span></div>
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-lg-8">
                <!--begin::Image input-->
                <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('{{asset('/')}}{{$item->data}}')">
                    <!--begin::Preview existing avatar-->
                    <div class="image-input-wrapper w-125px h-125px bgi-position-center" style="background-size: 75%; background-image: url('{{asset('/')}}{{$item->data}}')"></div>
                    <!--end::Preview existing avatar-->
                    <!--begin::Label-->
                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="" data-bs-original-title="Change avatar">
                        <i class="fa fa-pencil-alt fs-7"></i>
                        <!--begin::Inputs-->
                        <input type="file" name="setting[{{$item->slug}}]" accept=".png, .jpg, .jpeg,.webp">
                        <input type="hidden" name="remove_setting[{{$item->slug}}]">
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
        @else
        <!--begin::Row-->
        <div class="row mb-8">
            <!--begin::Col-->
            <div class="col-xl-3">
                <div class="fs-6 fw-bold mt-2 mb-3 text-capitalize">{{str_replace('_',' ',$item->slug)}}<span class="text-danger">*</span></div>
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-xl-9 fv-row fv-plugins-icon-container">
                <input type="text" class="form-control form-control-solid" name="setting[{{$item->slug}}]" value="{{$item->data}}">
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
        <button type="submit" class="btn btn-primary" id="kt_project_settings_submit">@lang('Submit')</button>
    </div>
    <!--end::Card footer-->
<input type="hidden"><div></div>
</form>
<!--end:Form-->
@push('script')
    <script>
		$("textarea").each(function () {
			let id = $(this).attr('id');
			CKEDITOR.replace(id, {
				allowedContent:true,
			});
		});

    </script>
@endpush

