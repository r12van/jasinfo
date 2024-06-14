<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta http-equiv="x-ua-compatible" content="IE=edge">
	<meta name="author" content="Bidang Kerjasama dan Informasi">
	<!---meta name="author" content="r12van"-->
	<meta name="description" content="{{ (isset($summary)?$summary:"Dinas Penanggulangan Kebakaran dan Penyelamatan Provinsi DKI Jakarta.") }}">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Document Title
	============================================= -->
	<title>{{ config('app.name', 'Laravel') }}{{ (isset($judul)?" | $judul":'') }}</title>
    <link rel="icon" type="image/x-icon" href="{{asset('favicon.ico')}}">
    @include('layouts._styles')
    @stack('style-stack')

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper">

		<!-- Header Navigation
		============================================= -->
		@include('layouts.header')
		<!-- #header end -->


        @yield('content')

		<!-- Footer
		============================================= -->
		@include('layouts.footer')
		<!-- #footer end -->
	</div><!-- #wrapper end -->
	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="uil uil-angle-up"></div>
	<!-- JavaScripts
	============================================= -->
	@include('layouts._javascript')

    @stack('script-stack')
</body>
</html>
