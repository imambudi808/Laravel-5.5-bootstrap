<!doctype html>
<html lang="{{ app()->getLocale() }}" class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Namaku Puisi</title>
      	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
      	<link rel="shortcut icon" href="favicon.ico">
      	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
      	<!-- Animate.css -->
      	<link rel="stylesheet" href="template/css/animate.css">
      	<!-- Icomoon Icon Fonts-->
      	<link rel="stylesheet" href="template/css/icomoon.css">
      	<!-- Bootstrap  -->
      	<link rel="stylesheet" href="template/css/bootstrap.css">
      	<link href="{{ asset('css/app.css') }}" rel="stylesheet">

      	<!-- Modernizr JS -->
      	<script src="template/js/modernizr-2.6.2.min.js"></script>
      	<!-- FOR IE9 below -->
      	<!--[if lt IE 9]>
      	<script src="js/respond.min.js"></script>
      	<![endif]-->
      	</head>
      	<body>

      	<div id="fh5co-page">
      		<nav class="navbar navbar-default navbar-static-top">
      				<div class="container">
      						<div class="navbar-header">
      								<!-- Collapsed Hamburger -->
      								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
      										<span class="sr-only">Toggle Navigation</span>
      										<span class="icon-bar"></span>
      										<span class="icon-bar"></span>
      										<span class="icon-bar"></span>
      								</button>
      								<!-- Branding Image -->
      								<a class="navbar-brand" href="{{ url('/') }}">
      										<div class="col-md-6"><img src="template/images/namakupuisi.png" width="250"></div>
      								</a>
      						</div>
      						<div class="collapse navbar-collapse" id="app-navbar-collapse">
      								<!-- Left Side Of Navbar -->
      								<ul class="nav navbar-nav">
      										&nbsp;
      								</ul>
      								<!-- Right Side Of Navbar -->
      								<ul class="nav navbar-nav navbar-right">
      										<!-- Authentication Links -->
      										@guest
      												<li><a href="{{ route('login') }}"><img src="template/images/login.png" width="70"></a></li>
      												<li><a href="{{ route('register') }}"><img src="template/images/registrasi.png" width="100"></a></li>
      										@else
      												<li class="dropdown">
      														<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
      																{{ Auth::user()->name }} <span class="caret"></span>
      														</a>

      														<ul class="dropdown-menu" role="menu">
      																<li>
      																		<a href="{{ route('logout') }}"
      																				onclick="event.preventDefault();
      																								 document.getElementById('logout-form').submit();">
      																				Logout
      																		</a>

      																		<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      																				{{ csrf_field() }}
      																		</form>
      																</li>
      														</ul>
      												</li>
      										@endguest
      								</ul>
      						</div>
      				</div>
      		</nav>
      		<br>
      		<br>
      		<h6>
      			<div class="container">
      				<div>
      					<a class="fh5co-logo" href="#" style="color:black">Favorite /</a>
      					<a class="fh5co-logo" href="#">SemuaPost /</a>
      				</div>
      			</div>
      		</h6>
      		<br>

      		<div id="fh5co-portfolio-section">
      			<div class="container">
      				<ul id="filters" class="clearfix animate-box">
      					<li><span class="filter active" data-filter=".all">Semua</span></li>
      					<li><span class="filter" data-filter=".cinta">Cinta</span></li>
      					<li><span class="filter" data-filter=".curhat">Curhat</span></li>
      					<li><span class="filter" data-filter=".motivasi">Motivasi</span></li>
      					<li><span class="filter" data-filter=".foto">Foto</span></li>
      				</ul>
      				<div id="portfoliolist" class="animate-box" >
      					<div class="portfolio all cinta" data-cat="cinta">
      						<div class="portfolio-wrapper" >
      							<img src="template/images/imam_cinta1.jpg" alt="" />
      							<div class="label">
      								<div class="label-text">
      									<a class="text-title"></a>
      									<span class="text-category">@imambudi808</span>
      								</div>
      								<div class="label-bg"></div>
      							</div>
      						</div>
      					</div>
      					<div class="portfolio all cinta" data-cat="cinta">
      						<div class="portfolio-wrapper">
      							<img src="template/images/imam_cinta2.jpg" alt="" />
      							<div class="label">
      								<div class="label-text">
      									<a class="text-title"></a>
      									<span class="text-category">@imambudi808</span>
      								</div>
      								<div class="label-bg"></div>
      							</div>
      						</div>
      					</div>
      					<div class="portfolio all cinta" data-cat="cinta">
      						<div class="portfolio-wrapper">
      							<img src="template/images/imam_cinta3.jpg" alt="" />
      							<div class="label">
      								<div class="label-text">
      									<a class="text-title"></a>
      									<span class="text-category">@imambudi808</span>
      								</div>
      								<div class="label-bg"></div>
      							</div>
      						</div>
      					</div>
      					<div class="portfolio all cinta" data-cat="cinta">
      						<div class="portfolio-wrapper">
      							<img src="template/images/haekal_cinta1.jpg" alt="" />
      							<div class="label">
      								<div class="label-text">
      									<a class="text-title"></a>
      									<span class="text-category">@haekalridho</span>
      								</div>
      								<div class="label-bg"></div>
      							</div>
      						</div>
      					</div>

      					<div class="portfolio all cinta" data-cat="cinta">
      						<div class="portfolio-wrapper">
      							<img src="template/images/haekal_cinta2.jpg" alt="" />
      							<div class="label">
      								<div class="label-text">
      									<a class="text-title"></a>
      									<span class="text-category">@haekalridho</span>
      								</div>
      								<div class="label-bg"></div>
      							</div>
      						</div>
      					</div>

      					<div class="portfolio all cinta" data-cat="cinta">
      						<div class="portfolio-wrapper">
      							<img src="template/images/haekal_cinta3.jpg" alt="" />
      							<div class="label">
      								<div class="label-text">
      									<a class="text-title"></a>
      									<span class="text-category">@haekalridho</span>
      								</div>
      								<div class="label-bg"></div>
      							</div>
      						</div>
      					</div>

      					<div class="portfolio all foto" data-cat="foto">
      						<div class="portfolio-wrapper">
      							<img src="template/images/imam_gambar1.jpg" alt="" />
      							<div class="label">
      								<div class="label-text">
      									<a class="text-title"></a>
      									<span class="text-category">@imambudi808</span>
      								</div>
      								<div class="label-bg"></div>
      							</div>
      						</div>
      					</div>

      					<div class="portfolio all foto" data-cat="foto">
      						<div class="portfolio-wrapper">
      							<img src="template/images/irsat_gambar1.jpg" alt="" />
      							<div class="label">
      								<div class="label-text">
      									<a class="text-title"></a>
      									<span class="text-category">@</span>
      								</div>
      								<div class="label-bg"></div>
      							</div>
      						</div>
      					</div>

      					<div class="portfolio all foto" data-cat="foto">
      						<div class="portfolio-wrapper">
      							<img src="template/images/aufa_gambar1.jpg" alt="" />
      							<div class="label">
      								<div class="label-text">
      									<a class="text-title"></a>
      									<span class="text-category">@aufafikri</span>
      								</div>
      								<div class="label-bg"></div>
      							</div>
      						</div>
      					</div>
      				</div>
      			</div>
      		</div>

      		<!-- End: fh5co-services-section -->
      		<footer>
      			<div id="footer" class="fh5co-border-line">
      				<div class="container">
      					<div class="row">
      						<div class="col-md-6">
      						</div>
      						<div class="col-md-6 social-text-align">
      							<p class="fh5co-social-icons">
      								<a href="https://www.instagram.com/imambudi808"><i><img src="template/images/igicon.png" width="150"></i></a>
      							</p>
      						</div>
      					</div>
      				</div>
      			</div>
      		</footer>
      	</div>
      	<!-- jQuery -->
      	<script src="template/js/jquery.min.js"></script>
      	<!-- jQuery Easing -->
      	<script src="template/js/jquery.easing.1.3.js"></script>
      	<!-- Bootstrap -->
      	<script src="template/js/bootstrap.min.js"></script>
      	<!-- Waypoints -->
      	<script src="template/js/jquery.waypoints.min.js"></script>
      	<!-- Portfolio Filter Mixitup -->
      	<script type="text/javascript" src="template/js/jquery.mixitup.min.js"></script>
      	<!-- Main JS (Do not remove) -->
      	<script src="template/js/main.js"></script>
      	<script type="text/javascript">
      	$(function () {
      		var filterList = {
      			init: function () {
      				// MixItUp plugin
      				// http://mixitup.io
      				$('#portfoliolist').mixItUp({
        				selectors: {
          			  target: '.portfolio',
          			  filter: '.filter'
          		  },
          		  load: {
            		  filter: '.all'
            		}
      				});
      			}
      		};
      		// Run the show!
      		filterList.init();
      	});
      	</script>

      	</body>
      </html>
