<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<link rel="icon" type="image/png" href="{{ URL::asset('img/index.png') }}">
	<title>Index</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

	<!-- Flat Admin CSS -->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/flat-admin/vendor.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/flat-admin/flat-admin.css') }}">

	<!-- sweetalert2 -->
	<link type="text/css" rel="stylesheet" href="{{ URL::asset('css/sweetalert2.min.css') }}">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" />

	<!-- CDN Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="{{ URL::asset('css/owl.carousel.css') }}" />
	<link type="text/css" rel="stylesheet" href="{{ URL::asset('css/owl.theme.default.css') }}" />

	<!-- Magnific Popup -->
	<link type="text/css" rel="stylesheet" href="{{ URL::asset('css/magnific-popup.css') }}" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Header -->
	<header id="home">
		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('img/bg.jpg')">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Nav -->
		<nav id="nav" class="navbar nav-transparent">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a href="index.php">
							<img class="logo" src="{{ URL::asset('img/logo_sipu.png') }}" alt="logo">
							<img class="logo-alt" src="{{ URL::asset('img/logo_sipu.png') }}" alt="logo">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Collapse nav button -->
					<div class="nav-collapse">
						<span></span>
					</div>
					<!-- /Collapse nav button -->
				</div>

				<!--  Main navigation  -->
				<ul class="main-nav nav navbar-nav navbar-right">
					<li><a href="#home">Index</a></li>
					<!-- <li><a href="#about">About</a></li> -->
					<!-- <li><a href="#ss">Screenshot Games</a></li>
					<li><a href="#games">Games</a></li>
					<li><a href="#topscore">Top Score</a></li> -->
					<!-- <li><a href="#pricing">Prices</a></li> -->
					<!-- <li><a href="#team">Team Developer</a></li> -->
					<!-- <li class="has-dropdown"><a href="#blog">Blog</a>
						<ul class="dropdown">
							<li><a href="blog-single.html">blog post</a></li>
						</ul>
					</li> -->
					<!-- <li><a href="#contact">Contact</a></li> -->
				</ul>
				<!-- /Main navigation -->

			</div>
		</nav>
		<!-- /Nav -->

		<!-- home wrapper -->
		<div class="home-wrapper">
			<div class="container">
				<div class="row">

					<!-- home content -->
					<div class="col-md-10 col-md-offset-1">
						<div class="home-content">
							<h2 class="white-text">SIPU POLINDRA</h2>
							<p class="white-text">Selamat Datang di SIPU POLINDRA <br> Silahkan login dibawah ini.
							</p>
							<button class="btn btn-info" data-toggle="modal" data-target="#login"><span class="fas fa-sign-in-alt"></span> Login</button>
							<!-- <button class="btn btn-danger" data-toggle="modal" data-target="#register"><span class="fas fa-plus-circle"></span> Register</button> -->
							<button class="btn btn-danger" data-toggle="modal" data-target="#about"><span class="fas fa-info-circle"></span> About Us</button>
						</div>
					</div>
					<!-- /home content -->

				</div>
			</div>
		</div>
		<!-- /home wrapper -->

	</header>
	<!-- /Header -->

	<!-- Modal Login-->
	<div id="login" class="modal fade" role="dialog">
	  <div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title"><span class="fas fa-sign-in-alt"></span> Login</h4>
				</div>
				<div class="modal-body">
					<form id="modal-form-login" method="POST" role="form">
            {{ csrf_field() }}
						<div class="form-group has-success">
							<label for="id_admin" class="form-control-label">ID</label>
							<input type="text" name="id_admin" class="form-control" required/>
							<span class="text-warning" ></span>
						</div>
						<div class="form-group has-success">
							<label for="id_ukm" class="form-control-label">ID UKM</label>
							<input type="text" name="id_ukm" class="form-control" required/>
							<span class="text-warning" ></span>
						</div>
						<div class="form-group has-success">
							<label for="email" class="form-control-label">Email</label>
							<input type="email" name="email" class="form-control" required/>
							<span class="text-warning" ></span>
						</div>
						<div class="form-group has-success">
							<label for="password" class="form-control-label">Password</label>
							<input type="password" name="password" class="form-control" required/>
						</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class=" btn btn-success" name="login"><span class="fas fa-sign-in-alt"></span> Login</button>
					<button type="button" class="btn btn-info" data-dismiss="modal"><span class="fa fa-times-circle"></span> Close</button>
				</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Modal About-->
	<div id="about" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title"><span class="fa fa-info-circle"></span> About Us</h4>
	      </div>
	        <div class="modal-body">

	        </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-info" data-dismiss="modal"><span class="fa fa-times-circle"></span> Close</button>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- Footer -->
	<footer id="footer" class="sm-padding bg-dark">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<div class="col-md-12">

					<!-- footer logo -->
					<div class="footer-logo">
						<a href="index.php"><img src="{{ URL::asset('img/logo-alt.png') }}" alt="logo"></a>
					</div>
					<!-- /footer logo -->

					<!-- footer follow -->
					<ul class="footer-follow">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<!-- <li><a href="#"><i class="fa fa-twitter"></i></a></li> -->
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						<!-- <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-youtube"></i></a></li> -->
					</ul>
					<!-- /footer follow -->

					<!-- footer copyright -->
					<div class="footer-copyright">
						<p>Copyright © 2018 SIPU-POLINDRA | D4 RPL</p>
					</div>
					<!-- /footer copyright -->

				</div>

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</footer>
	<!-- /Footer -->

	<!-- Back to top -->
	<div id="back-to-top"></div>
	<!-- /Back to top -->

	<!-- Preloader -->
	<div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- /Preloader -->

	<!-- jQuery Plugins -->
	<script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/jquery.magnific-popup.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/sweetalert2.min.js') }}"></script>

	<script type="text/javascript">
			$(document).ready(function (){

					var formLogin = $('#modal-form-login');

					//login form
					formLogin.submit(function (e) {
						e.preventDefault();

						$.ajax({
								url:'/login-adminUkm',
								type:formLogin.attr('method'),
								data: formLogin.serialize(),
								dataType: "json",
								success: function( res ){
									if( res.error == 0 ){
										console.log(res);
											$('#login').modal('hide');
											swal(
												'Success',
												res.message,
												'success'
											).then(OK => {
												if(OK && res.ukm == 'UKM01'){
														window.location.href = "{{ url('dashboard-kompa') }}" + "/" + res.id_admin;
												}else if(OK && res.ukm == 'UKM02'){
														window.location.href = "{{ url('dashboard-kopen') }}" + "/" + res.id_admin;
												}else if(OK && res.ukm == 'UKM03'){
														window.location.href = "{{ url('dashboard-rpi') }}" + "/" + res.id_admin;
												}else if(OK && res.ukm == 'UKM04'){
														window.location.href = "{{ url('dashboard-popi') }}" + "/" + res.id_admin;
												}else if(OK && res.ukm == 'UKM05'){
														window.location.href = "{{ url('dashboard-folafo') }}" + "/" + res.id_admin;
												}
											});
									}else{
										$('#login').modal('hide');
										swal(
											'Failed',
											res.message,
											'error'
										).then(OK => {
												if(OK){
													location.reload();
												}
										});
									}
								}
						})
					});

			});
	</script>

</body>
</html>
