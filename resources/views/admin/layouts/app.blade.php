<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta http-equiv="x-ua-compatible" content="IE=edge">
	<meta name="author" content="SemiColonWeb">
	<meta name="description" content="Get Canvas to build powerful websites easily with the Highly Customizable &amp; Best Selling Bootstrap Template, today.">

	<!-- Font Imports -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&family=Noto+Serif:ital,wght@1,700&display=swap" rel="stylesheet">

	<!-- Core Style -->
	<link rel="stylesheet" href="{{ asset('style.css') }}">

	<!-- Font Icons -->
	<link rel="stylesheet" href="{{ asset('css/font-icons.css') }}">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="{{ asset('css/custom.css') }}">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Document Title
	============================================= -->
	<title>Header - Navigation | Canvas</title>

	<style>
		@media (min-width: 992px) {

			.block-nav-header-3.side-header.open-header #header-trigger {
				--widget-width: 260px;
				top: 0;
				left: 0;
				width: 60px;
				height: 100%;
				line-height: normal;
				border-radius: 0;
				align-items: center;
				justify-content: center;
				font-size: 24px;
				color: #111;
				background-color: #EEE;
			}

			.block-nav-header-3.side-header.open-header.side-header-open #header-trigger { left: var(--widget-width, 260px); }
			.block-nav-header-3.side-header.side-header-right.open-header #header-trigger { right: 0; }
			.block-nav-header-3.side-header.side-header-right.open-header.side-header-open #header-trigger { right: var(--widget-width, 260px); }
		}

		.block-nav-header-3 #header-trigger .svg-trigger { width: 40px; height: 40px; }

		.block-nav-header-3.side-header-open #header-trigger .svg-trigger { transform: rotate(45deg); }

		.block-nav-header-3.side-header-open #header-trigger .svg-trigger path:nth-child(1),
		.block-nav-header-3.side-header-open #header-trigger .svg-trigger path:nth-child(3) { stroke-dashoffset: -64px; }

		.block-nav-header-3.side-header-open #header-trigger .svg-trigger path:nth-child(2) { transform: rotate(90deg); }

	</style>

</head>

<body class="stretched side-header push-wrapper block-nav-header-3">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper">

		<!-- Header
		============================================= -->
		<header id="header" class="border-end-0">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row">

						<!-- Logo
						============================================= -->
						<div id="logo">
							<a href="index.html">
								<img class="logo-default" srcset="{{ asset('img/logo/logo-pemadam.png') }}, {{ asset('img/logo/logo-pemadam.png') }}" src="{{ asset('img/logo/logo-pemadam.png') }}" alt="Canvas Logo">
							</a>
						</div><!-- #logo end -->

						<div class="primary-menu-trigger">
							<button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
								<span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
							</button>
						</div>


						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu on-click">

							<ul class="menu-container">
								<li class="menu-item"><a class="menu-link" href="{{ route('dashboard') }}"><div>Dashboard</div></a></li>
								<li class="menu-item"><a class="menu-link" href="#"><div>Pages</div></a></li>
								<li class="menu-item"><a class="menu-link" href="#"><div>Articles</div></a></li>
								<li class="menu-item"><a class="menu-link" href="#"><div>Tags</div></a></li>
								<li class="menu-item"><a class="menu-link" href="#"><div>Settings</div></a>
									<ul class="sub-menu-container">
										<li class="menu-item"><a class="menu-link" href="#"><div>Profile</div></a>
											<ul class="sub-menu-container">
												<li class="menu-item"><a class="menu-link" href="blog.html"><div>View Profile</div></a></li>
												<li class="menu-item"><a class="menu-link" href="blog-left-sidebar.html"><div>Update Profile</div></a></li>
												<li class="menu-item"><a class="menu-link" href="blog-both-sidebar.html"><div>Change Password</div></a></li>
											</ul>
										</li>
                                    </ul>
								</li>
							</ul>

						</nav><!-- #primary-menu end -->

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->

		<!-- Content
		============================================= -->
		<section id="content" class="bg-dark dark">
			<div class="content-wrap py-0">
                <div class="row">
                    @yield('content')
				</div>
			</div>
		</section><!-- #content end -->

        <!-- Footer
		============================================= -->
		<footer id="footer" class="bg-light border-width-1 border-f5">

			<!-- Copyrights
			============================================= -->
			<div id="copyrights" class="bg-white">
				<div class="container">
					<div class="row">
						<div class="col-12 text-center">
							<span class="text-black-50">&copy; 2023 All Rights Reserved by Dinas Pemadam.</span>
						</div>
					</div>
				</div>
			</div><!-- #copyrights end -->
		</footer><!-- #footer end -->
	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="uil uil-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="{{ asset('js/functions.js') }}"></script>

</body>
</html>
