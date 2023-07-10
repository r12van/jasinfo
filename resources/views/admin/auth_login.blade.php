<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="admin/images/favicon.ico">

    <title>Admin - Log in </title>
  
	<!-- Vendors Style-->
	<link rel="stylesheet" href="admin/main/css/vendors_css.css">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="admin/main/css/style.css">
	<link rel="stylesheet" href="admin/main/css/skin_color.css">	

</head>
	
<body class="hold-transition theme-primary bg-img" style="background-image: url(admin/images/bg/bg-1.jpg)" data-overlay="5">
	
	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">	
			
			<div class="col-12">
				<div class="row justify-content-center no-gutters">
					<div class="col-lg-5 col-md-5 col-12">
						<div class="bg-white rounded shadow-lg">
							<div class="content-top-agile p-20 pb-0">
								<h2 class="text-primary">Login</h2>
								<p class="mb-0">Sign in to continue</p>							
							</div>
							<div class="p-40">
								@if (session()->has('success'))
									<div class="alert alert-success alert-dismissible fade show" role="alert">
										{{ session('success') }}
										<button type="button" class="button-close" data-bs-dismiss="alert" aria-label="Close">
										</button>
									</div>
								@endif
								@if (session()->has('loginError'))
									<div class="alert alert-success alert-dismissible fade show" role="alert">
										{{ session('loginError') }}
										<button type="button" class="button-close" data-bs-dismiss="alert" aria-label="Close">
										</button>
									</div>
								@endif

								<form action="{{ route('loginProses') }}" method="post">
									@csrf
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
											</div>
											<input type="text" class="form-control pl-15 bg-transparent" name="name" placeholder="Username" autofocus required>
										</div>
									</div>
									
									<div class="form-group">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
											</div>
											<input type="password" class="form-control pl-15 bg-transparent" name="password" placeholder="Password" required>
										</div>
									</div>
									
									  <div class="row">
										<div class="col-6">
										  <div class="checkbox">
											<input type="checkbox" id="basic_checkbox_1" >
											<label for="basic_checkbox_1">Remember Me</label>
										  </div>
										</div>
										<!-- /.col -->
										<!-- <div class="col-6">
										 <div class="fog-pwd text-right">
											<a href="javascript:void(0)" class="hover-warning"><i class="ion ion-locked"></i> Forgot pwd?</a><br>
										  </div>
										</div> -->
										<!-- /.col -->
										<div class="col-12 text-center">
										  <button class="btn btn-danger mt-10">LOGIN</button>
										</div>
										<!-- /.col -->
									  </div>
								</form>	
								<div class="text-center">
									<p class="mt-15 mb-0">Tidak punya akun? <a href="/" class="text-warning ml-5">silahkan pulang!</a></p>
								</div>	
							</div>						
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Vendor JS -->
	<script src="admin/main/js/vendors.min.js"></script>
    <script src="../admin/assets/icons/feather-icons/feather.min.js"></script>	

</body>
</html>
