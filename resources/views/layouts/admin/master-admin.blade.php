<!DOCTYPE html>
<html lang="en">

<head>
    {{-- <base href="./"> --}}
    @include('components.admin.css')
    @include('components.admin.meta')
	<title>Admin</title>
	<!-- Global site tag (gtag.js) - Google Analytics-->
	<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());
		// Shared ID
		gtag('config', 'UA-118965717-3');
		// Bootstrap ID
		gtag('config', 'UA-118965717-5');

	</script>
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
	@include('partials.admin.header')
	<div class="app-body">
		<!-- ========================================================sidebar -->
		@include('partials.admin.sidebar')
		<!-- ========================================================sidebar -->
		<main class="main">
			<!-- Breadcrumb-->
			@include('partials.admin.breadcrumb')
			<div class="container-fluid">
				@yield('content')
			</div>
		</main>
	</div>
	@include('partials.admin.footer')
	<!-- CoreUI and necessary plugins-->
    @include('components.admin.js')
</body>

</html>
