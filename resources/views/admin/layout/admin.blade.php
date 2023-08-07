<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="admin/images/favicon.ico">

    <title>Admin - Dashboard</title>
    
	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{asset('admin/main/css/vendors_css.css')}}">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="{{asset('admin/main/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('admin/main/css/skin_color.css')}}">
	<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
	@stack('stack-head')
</head>

<body class="hold-transition light-skin sidebar-mini theme-primary">
	
<div class="wrapper">
	@include('admin.navigasi.top-nav')

	@include('admin.navigasi.side-nav')
	<section>
		@yield('kontainer')
	</section>

	@include('admin.navigasi.footer')
</div>
<!-- ./wrapper -->	 
	
	<!-- Vendor JS -->
	<script src="{{asset('admin/main/js/vendors.min.js')}}"></script>
    <script src="{{asset('admin/assets/icons/feather-icons/feather.min.js')}}"></script>	
    

	{{-- <script src="admin/assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script> --}}
	<script src="{{asset('admin/assets/vendor_components/progressbar.js-master/dist/progressbar.js')}}"></script>
	<script src="{{asset('admin/assets/vendor_components/raphael/raphael.min.js')}}"></script>
	<script src="{{asset('admin/assets/vendor_components/morris.js/morris.min.js')}}"></script>
	<script src="{{asset('admin/assets/vendor_components/d3/d3.min.js')}}"></script>
	<script src="{{asset('admin/assets/vendor_components/d3/d3_tooltip.js')}}"></script>
	<script src="{{asset('admin/assets/vendor_components/datatable/datatables.min.js')}}"></script>
	<script src="{{asset('admin/assets/vendor_components/Magnific-Popup-master/dist/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendor_components/Magnific-Popup-master/dist/jquery.magnific-popup-init.js')}}"></script>
	
	<script src="{{asset('admin/assets/vendor_components/ckeditor/ckeditor.js')}}"></script>
	<script src="{{asset('admin/main/js/pages/editor.js')}}"></script>
	
	<!-- Elitex Admin App -->
	<script src="{{asset('admin/main/js/template.js')}}"></script>
	<script src="{{asset('admin/main/js/pages/dashboard.js')}}"></script>
	<script src="{{asset('admin/main/js/demo.js')}}"></script>
	<script src="{{asset('admin/main/js/pages/data-table.js')}}"></script>
	
	@stack('stack-body')
</body>
</html>