<!--begin:::Tabs-->
<ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-8">
    <!--begin:::Tab item-->
    <li class="nav-item">
        <a class="nav-link text-active-primary pb-4 {{ Request::is('admin/theme-settings/home') ? 'active' : '' }}"
            href="{{ url('admin/theme-settings/home') }}">
            <!--begin::Svg Icon | path: icons/duotune/general/gen001.svg-->
            <span class="svg-icon svg-icon-2 me-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path
                        d="M11 2.375L2 9.575V20.575C2 21.175 2.4 21.575 3 21.575H9C9.6 21.575 10 21.175 10 20.575V14.575C10 13.975 10.4 13.575 11 13.575H13C13.6 13.575 14 13.975 14 14.575V20.575C14 21.175 14.4 21.575 15 21.575H21C21.6 21.575 22 21.175 22 20.575V9.575L13 2.375C12.4 1.875 11.6 1.875 11 2.375Z"
                        fill="black" />
                </svg>
            </span>
            <!--end::Svg Icon-->@lang('Home Page')
        </a>
    </li>
    <!--end:::Tab item-->

    <!--begin:::Tab item-->
    <li class="nav-item">
        <a class="nav-link text-active-primary pb-4  {{ Request::is('admin/theme-settings/projects') ? 'active' : '' }}"
            href="{{ url('admin/theme-settings/projects') }}">
            <!--begin::Svg Icon | path: icons/duotune/general/gen001.svg-->
            <span class="svg-icon svg-icon-2">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.3" d="M7 20.5L2 17.6V11.8L7 8.90002L12 11.8V17.6L7 20.5ZM21 20.8V18.5L19 17.3L17 18.5V20.8L19 22L21 20.8Z" fill="currentColor"></path>
                    <path d="M22 14.1V6L15 2L8 6V14.1L15 18.2L22 14.1Z" fill="currentColor"></path>
                </svg>
            </span>
            <!--end::Svg Icon-->@lang('Projects Page')
        </a>
    </li>
    <!--end:::Tab item-->
        <!--begin:::Tab item-->
        <li class="nav-item">
            <a class="nav-link text-active-primary pb-4  {{ Request::is('admin/theme-settings/about') ? 'active' : '' }}"
                href="{{ url('admin/theme-settings/about') }}">
                <!--begin::Svg Icon | path: icons/duotune/general/gen001.svg-->
                <span class="svg-icon svg-icon-2">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="currentColor"></path>
                        <path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="currentColor"></path>
                    </svg>
                </span>
                <!--end::Svg Icon-->@lang('About Page')
            </a>
        </li>
        <!--end:::Tab item-->
        
        <!--begin:::Tab item-->
        <li class="nav-item">
            <a class="nav-link text-active-primary pb-4  {{ Request::is('admin/theme-settings/contact') ? 'active' : '' }}"
                href="{{ url('admin/theme-settings/contact') }}">
                <!--begin::Svg Icon | path: icons/duotune/general/gen001.svg-->
                <span class="svg-icon svg-icon-2">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="currentColor"></path>
                        <path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="currentColor"></path>
                    </svg>
                </span>
                <!--end::Svg Icon-->@lang('Contact Page')
            </a>
        </li>
        <!--end:::Tab item-->
            <!--begin:::Tab item-->
    <li class="nav-item">
        <a class="nav-link text-active-primary pb-4  {{ Request::is('admin/theme-settings/header_footer') ? 'active' : '' }}"
            href="{{ url('admin/theme-settings/header_footer') }}">
            <!--begin::Svg Icon | path: icons/duotune/general/gen001.svg-->
            <span class="svg-icon svg-icon-2">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 7H3C2.4 7 2 6.6 2 6V3C2 2.4 2.4 2 3 2H20C20.6 2 21 2.4 21 3V6C21 6.6 20.6 7 20 7ZM7 9H3C2.4 9 2 9.4 2 10V20C2 20.6 2.4 21 3 21H7C7.6 21 8 20.6 8 20V10C8 9.4 7.6 9 7 9Z" fill="currentColor"></path>
                    <path opacity="0.3" d="M20 21H11C10.4 21 10 20.6 10 20V10C10 9.4 10.4 9 11 9H20C20.6 9 21 9.4 21 10V20C21 20.6 20.6 21 20 21Z" fill="currentColor"></path>
                </svg>
            </span>
            <!--end::Svg Icon-->@lang('Header Footer')
        </a>
    </li>
    <!--end:::Tab item-->

</ul>
<!--end:::Tabs-->
