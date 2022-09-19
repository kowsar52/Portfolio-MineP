<ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder">
    <!--begin::Nav item-->
    <li class="nav-item">
        <a class="nav-link text-active-primary py-5 me-6 {{ (Request::is('*/general') ? 'active' : '') }}" href="{{ route('admin.settings.type', ['general']) }}">@lang('General Settings')</a>
    </li>
    <!--end::Nav item-->
    <!--begin::Nav item-->
    <li class="nav-item">
        <a class="nav-link text-active-primary py-5 me-6 {{ (Request::is('*/email') ? 'active' : '') }}" href="{{ route('admin.settings.type', ['email']) }}">@lang('Email Settings')</a>
    </li>
    <!--end::Nav item-->
    <!--begin::Nav item-->
    <li class="nav-item">
        <a class="nav-link text-active-primary py-5 me-6 {{ (Request::is('*/other') ? 'active' : '') }}" href="{{ route('admin.settings.type', ['other']) }}">@lang('Other Settings')</a>
    </li>
    <!--end::Nav item-->

</ul>
