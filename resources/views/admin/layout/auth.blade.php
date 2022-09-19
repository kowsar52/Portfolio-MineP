<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>
		<meta charset="utf-8" />
		<title>{{ getOption('APP_NAME')}} - @yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="Advisa | Admin Login" />
        <meta name="keywords" content="Advisa,Admin Login" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="shortcut icon" href="{{ asset(getOption('favicon')) }}" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="{{asset('admin/css/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('admin/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="bg-body">
		<!--begin::Main-->
            @yield('content')
		<!--end::Main-->
		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{ asset('admin/js/plugins.bundle.js')}}"></script>
		<script src="{{ asset('admin/js/scripts.bundle.js')}}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="{{ asset('admin/js/authentication/general.js')}}"></script>
		<!--end::Page Custom Javascript-->

        @stack('scripts')
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>