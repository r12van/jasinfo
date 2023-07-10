<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="admin/images/favicon.ico">

    <title>Admin - Dashboard</title>
    
	<!-- Vendors Style-->
	<link rel="stylesheet" href="admin/main/css/vendors_css.css">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="admin/main/css/style.css">
	<link rel="stylesheet" href="admin/main/css/skin_color.css">

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
	<script src="admin/main/js/vendors.min.js"></script>
    <script src="admin/assets/icons/feather-icons/feather.min.js"></script>	
    

	{{-- <script src="admin/assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script> --}}
	<script src="admin/assets/vendor_components/progressbar.js-master/dist/progressbar.js"></script>
	<script src="admin/assets/vendor_components/raphael/raphael.min.js"></script>
	<script src="admin/assets/vendor_components/morris.js/morris.min.js"></script>
	<script src="admin/assets/vendor_components/d3/d3.min.js"></script>
	<script src="admin/assets/vendor_components/d3/d3_tooltip.js"></script>
	<script src="admin/assets/vendor_components/datatable/datatables.min.js"></script>
	<script src="admin/assets/vendor_components/Magnific-Popup-master/dist/jquery.magnific-popup.min.js"></script>
    <script src="admin/assets/vendor_components/Magnific-Popup-master/dist/jquery.magnific-popup-init.js"></script>
	
	<script src="admin/assets/vendor_components/ckeditor/ckeditor.js"></script>
	<script src="admin/main/js/pages/editor.js"></script>
	
	<!-- Elitex Admin App -->
	<script src="admin/main/js/template.js"></script>
	<script src="admin/main/js/pages/dashboard.js"></script>
	<script src="admin/main/js/demo.js"></script>
	<script src="admin/main/js/pages/data-table.js"></script>
	
	
</body>
</html>