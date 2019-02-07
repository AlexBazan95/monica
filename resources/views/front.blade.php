<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="{{ __('front.fillers') }} {{ config('app.name', 'DESSINAGE') }}">
	<meta name="keywords" content="{{ __('front.fillers') }}, {{ config('app.name', 'DESSINAGE') }}">

	<title>{{ config('app.name', 'DESSINAGE') }}</title>

	<link href="./frontend/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
	<link href="./frontend/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
	<link href="./frontend/vendor/themify-font/themify-icons.css" rel="stylesheet" media="all">
	<link href="./frontend/css/poppins-font.min.css" rel="stylesheet" media="all">
	<link href="./frontend/css/opensans-font.min.css" rel="stylesheet" media="all">
	<link href="./frontend/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
	<link href="./frontend/vendor/animate.css/animate.min.css" rel="stylesheet" media="all">
	<link href="./frontend/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
	<link href="./frontend/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
	<link href="./frontend/vendor/slick/slick.css" rel="stylesheet" media="all">
	<link href="./frontend/vendor/select2/select2.min.css" rel="stylesheet" media="all">
	<link href="./frontend/vendor/revolution/css/layers.css" rel="stylesheet" />
	<link href="./frontend/vendor/revolution/css/navigation.css" rel="stylesheet" />
	<link href="./frontend/vendor/revolution/css/settings.css" rel="stylesheet" />
	<link href="./frontend/css/main.min.css" rel="stylesheet" media="all">
	<link rel="shortcut icon" href="./frontend/images/icon/favicon.jpg">
</head>

<body class="animsition js-preloader" id="page-top">
	<div class="page-wrapper">
		<header id="header">
			<div class="header header-1 d-none d-lg-block js-header-1">
				<div class="header__bar">
					<div class="wrap wrap--w1790">
						<div class="container-fluid">
							<div class="header__content">
								<div class="logo">
									<a href="#page-top" class="page-scroll">
										<img src="./frontend/images/icon/logo.png" alt="{{ config('app.name', 'DESSINAGE') }}" />
									</a>
								</div>
								<div class="header__content-right">
									<nav class="header-nav-menu">
										<ul class="menu nav-menu">
											<li class="menu-item">
												<a href="#page-top" class="page-scroll">{{ __('front.main') }}</a>
											</li>
											<li class="menu-item">
												<a href="#about" class="page-scroll">{{ __('front.about') }}</a>
											</li>
											<li class="menu-item">
												<a href="#products" class="page-scroll">{{ __('front.ourprods') }}</a>
											</li>
											<li class="menu-item">
												<a href="#contacts" class="page-scroll">{{ __('front.contacts') }}</a>
											</li>
										</ul>
									</nav>
									<div class="header-social">
										<ul class="list-social">
											<li class="list-social__item">
												<a class="ic-fb" href="/">
													<i class="zmdi zmdi-facebook"></i>
												</a>
											</li>
											<li class="list-social__item">
												<a class="ic-insta" href="/">
													<i class="zmdi zmdi-instagram"></i>
												</a>
											</li>
											<li class="list-social__item">
												<a class="ic-twi" href="/">
													<i class="zmdi zmdi-twitter"></i>
												</a>
											</li>
											<!-- <li class="list-social__item">
												<a class="ic-google" href="/">
													<i class="zmdi zmdi-google"></i>
												</a>
											</li> -->
										</ul>
									</div>
									<div class="lang-switcher">
										@foreach(\App\Locale::getAllLocales() as $locale)
											<a href="/setlocale/{{$locale->lnk}}" 
												class="{{ ($locale->lnk == str_replace('_', '-', app()->getLocale()) ? '' : 'active') }}">
												<span style="text-transform: uppercase;">{{$locale->lnk}}</span>
											</a>
										@endforeach
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header-mobile d-block d-lg-none">
				<div class="header-mobile__bar">
					<div class="container-fluid">
						<div class="header-mobile__bar-inner">
							<a href="#page-top" class="logo page-scroll">
								<img src="./frontend/images/icon/logo.png" alt="{{ config('app.name', 'DESSINAGE') }}" />
							</a>
							<button class="hamburger hamburger--slider float-right" type="button">
								<span class="hamburger-box">
									<span class="hamburger-inner"></span>
								</span>
							</button>
						</div>
					</div>
				</div>
				<nav class="header-nav-menu-mobile" style="background: #fff;">
					<div class="container-fluid">
						<ul class="menu nav-menu menu-mobile">
							<li class="menu-item">
								<a href="#page-top" class="page-scroll">{{ __('front.main') }}</a>
							</li>
							<li class="menu-item">
								<a href="#about" class="page-scroll">{{ __('front.about') }}</a>
							</li>
							<li class="menu-item">
								<a href="#products" class="page-scroll">{{ __('front.ourprods') }}</a>
							</li>
							<li class="menu-item">
								<a href="#contacts" class="page-scroll">{{ __('front.contacts') }}</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>

		<main id="main">
			
			<section>
				<div class="rev_slider_wrapper">
					<div class="rev_slider fullwidthabanner js-rev" data-version="5.4.4" style="display:none;overflow:visible;" data-rev-layout="fullscreen" data-rev-stylearrow="au-rev-arrow-2" data-rev-bullets="false" data-rev-arrows="false" data-rev-stylebullet="au-rev-bullet-2" data-rev-voffbullet="40" data-rev-spacebullet="20">
						<ul>
							<li class="rev-item rev-item-1" data-transition="crossfade">
								<img class="rev-slidebg" src="./frontend/images/slide-02.jpg" alt="{{ config('app.name', 'DESSINAGE') }} {{ App\Landing::getOption('welcome') }}" />
								<h4 class="tp-caption tp-resizeme rev-text-1" data-frames="[{&quot;delay&quot;:0,&quot;speed&quot;:1800,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
								data-x="['center']" data-y="['middle']" data-hoffset="[0, 0, 0, 0, 0]" data-voffset="[-76, -76, -80, -120, -120]" data-paddingleft="[0, 0, 0, 0, 15]" data-paddingright="[0, 0, 0, 0, 15]" data-width="['auto']" data-height="[&quot;auto&quot;]"
								data-whitespace="[nowrap, nowrap, nowrap, nowrap, nowrap]" data-color="#fff" data-fontweight="400" data-fontsize="[23, 23, 28, 28, 28]" data-textalign="[center]">{{ App\Landing::getOption('welcome') }}</h4>
								<h2 class="tp-caption tp-resizeme rev-text-2" data-frames="[{&quot;delay&quot;:1200,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
								data-x="[center]" data-y="[center]" data-hoffset="[0, 0, 0, 0, 0]" data-voffset="[-20, -20, 0, 0, 0]" data-paddingleft="[0, 0, 0, 0, 15]" data-paddingright="[0, 0, 0, 0, 15]" data-width="['auto','auto','auto','576','500']"
								data-height="[&quot;auto&quot;]" data-lineheight="[70, 70, 54, 50, 52]" data-whitespace="[nowrap, nowrap, nowrap, normal, normal]" data-color="#fff" data-fontweight="700" data-fontsize="[70, 70, 58, 52, 56]" data-textalign="[center]">{{ config('app.name', 'DESSINAGE') }}</h2>

								<a class="tp-caption tp-resizeme scroll-down" href="#about" data-frames="[{&quot;delay&quot;:0,&quot;speed&quot;:1800,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:800,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;auto:auto;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]"
								data-x="[center]" data-y="[center]" data-hoffset="[0, 0, 0, 0, 15]" data-voffset="[77, 77, 70, 120, 120]" data-width="['auto']" data-height="[&quot;auto&quot;]" data-responsive_offset="on" data-responsive="off" data-textalign="[center]"
								data-whitespace="[nowrap, nowrap, nowrap, nowrap, nowrap]">
									<span><img src="././frontend/images/scroll-down__icon.png" alt="{{ __('front.scrolldown') }}"></span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</section>

			<section class="p-t-120" id="about">
				<div class="section-title m-b-70">
					<h5 class="title-sub">{{ __('front.fillers') }} {{ config('app.name', 'DESSINAGE') }}</h5>
					<h2 class="title-1" style="text-transform: uppercase;">{{ __('front.about') }}</h2>
				</div>
				<div class="container">
					<div class="media-about-2 p-b-80">
						<div class="media__img">
							<img src="./frontend/images/beauty-box.jpg" style="width: 100%" alt="{{ __('front.about') }} {{ config('app.name', 'DESSINAGE') }}">
						</div>
						<div class="media__body">
							<h5 class="title-sub">
								{{ __('front.weare') }}
								<span style="text-transform: uppercase;">{{ config('app.name', 'DESSINAGE') }}</span>
							</h5>
							<h2 class="title-1">
								{{ __('front.diveinto') }} 
								<span style="text-transform: uppercase;">{{ config('app.name', 'DESSINAGE') }}</span> 
								{{ __('front.ukraine') }}
							</h2>
							<p class="media__text">{{ App\Landing::getOption('about') }}</p>
							<a class="au-btn au-btn--arrow" href="#contacts">{{ __('front.contactus') }}
								<i class="zmdi zmdi-arrow-right ic-arrow"></i>
							</a>
						</div>
					</div>
					<div class="section-row section-row--fit" style="overflow: hidden;">
						<div class="media-statistic" style="border-left:1px solid #ebebeb">
							<span class="ti-cup media__icon wow fadeInLeft" data-wow-delay="0.2s" style="color:#555555"></span>
							<div class="media__body">
								<span class="number js-counterup">10</span>
								<h4 class="name">{{ __('front.exp') }}</h4>
							</div>
						</div>
						<div class="media-statistic" style="border-left:1px solid #ebebeb">
							<span class="ti-user media__icon wow fadeInLeft" data-wow-delay="0.2s" style="color:#555555"></span>
							<div class="media__body">
								<span class="number js-counterup">2000</span>
								<h4 class="name">{{ __('front.happyclients') }}</h4>
							</div>
						</div>
						<div class="media-statistic" style="border-left:1px solid #ebebeb">
							<span class="ti-home media__icon wow fadeInLeft" data-wow-delay="0.2s" style="color:#555555"></span>
							<div class="media__body">
								<span class="number js-counterup">85</span>
								<h4 class="name">{{ __('front.intheworld') }}</h4>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="p-t-120 pb-4" id="products">
				<div class="section-title m-b-70">
					<h5 class="title-sub">{{ __('front.indetails') }}</h5>
					<h2 class="title-1" style="text-transform: uppercase;">{{ __('front.products') }}</h2>
				</div>
			</section>

			@foreach($sections as $section) 
				@component('components.landing.frontend.' . $section['type'], [
					'desc' => __($section['desc']),
					'uident' => $section['uident'],
					'val' => $section['val'],
					'title' => $section['title'],
					'subtitle' => $section['subtitle'],
					'img' => $section['img']])
				@endcomponent
			@endforeach

			<section class="section p-t-120 p-b-135" id="contacts" style="background: #f3f3f3;">
				<div class="container">
					<div class="section-title m-b-70">
						<h5 class="title-sub">{{ __('front.contactus') }}</h5>
						<h2 class="title-1" style="text-transform: uppercase;">{{ __('front.contacts') }}</h2>
					</div>
					<div class="row no-gutters">
						<div class="col-lg-4">
							<div class="contact-info">
								<div class="contact-info__item">
									<h5 class="title--sm2" style="font-weight: 600; text-transform: uppercase;">{{ __('front.address') }}:</h5>
									<p class="value">{{ App\Landing::getOption('address') }}</p>
								</div>
								<div class="contact-info__item">
									<h5 class="title--sm2" style="font-weight: 600; text-transform: uppercase;">{{ __('front.phone') }}:</h5>
									<p class="value">{{ App\Landing::getOption('phone') }}</p>
								</div>
								<div class="contact-info__item">
									<h5 class="title--sm2" style="font-weight: 600; text-transform: uppercase;">{{ __('front.email') }}:</h5>
									<p class="value">{{ App\Landing::getOption('email') }}</p>
								</div>
							</div>
						</div>
						<div class="col-lg-8">
							<form class="form-contact js-contact-form" method="POST" action="/mail/send">
								<div class="form-row no-gutters">
									@csrf
									<div class="col-md-6">
										<input class="au-input" type="text" name="name" placeholder="{{ __('front.name') }}" required="required">
										<input class="au-input" type="email" name="email" placeholder="{{ __('front.email') }}" required="required" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
										<input class="au-input" type="text" name="phone" placeholder="{{ __('front.phone') }}" required="required">
									</div>
									<div class="col-md-6 p-r-0">
										<textarea class="au-textarea" name="message" placeholder="{{ __('front.message') }}" required="required"></textarea>
										<div class="text-right">
											<button class="au-btn au-btn--solid" type="submit">{{ __('front.send') }}</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>

			<footer class="footer-2 p-b-5 p-t-20">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="footer-col">
								<div class="widget">
									<a href="#page-top" class="page-scroll">
										<img src="./frontend/images/icon/logo.png" alt="{{ config('app.name', 'DESSINAGE') }}" />
									</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="footer-col">
								<div class="widget">
									<p class="text-center">© {{ date('Y') }} {{ config('app.name', 'DESSINAGE') }}. {{ __('front.indetails') }}</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="footer-col">
								<div class="widget">
									<p class="text-center text-md-right">{{ __('front.copy') }}</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>

		</main>
	</div>

	<script src="./frontend/vendor/jquery/jquery.min.js"></script>
	<script src="./frontend/vendor/bootstrap-4.1/bootstrap.min.js"></script>
	<script src="./frontend/vendor/animsition/animsition.min.js"></script>
	<script src="./frontend/vendor/slick/slick.min.js"></script>
	<script src="./frontend/vendor/waypoints/jquery.waypoints.min.js"></script>
	<script src="./frontend/vendor/wow/wow.min.js"></script>
	<script src="./frontend/vendor/jquery.counterup/jquery.counterup.min.js"></script>
	<script src="./frontend/vendor/isotope/isotope.pkgd.min.js"></script>
	<script src="./frontend/vendor/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="./frontend/vendor/matchHeight/jquery.matchHeight-min.js"></script>
	<script src="./frontend/vendor/select2/select2.min.js"></script>
	<script src="./frontend/vendor/sweetalert/sweetalert.min.js"></script>
	<script src="./frontend/vendor/noUiSlider/nouislider.min.js"></script>
	<script type="text/javascript" src="./frontend/vendor/revolution/js/jquery.themepunch.tools.min.js"></script>
	<script type="text/javascript" src="./frontend/vendor/revolution/js/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="./frontend/vendor/revolution/js/extensions/revolution.extension.video.min.js"></script>
	<script type="text/javascript" src="./frontend/vendor/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script type="text/javascript" src="./frontend/vendor/revolution/js/extensions/revolution.extension.actions.min.js"></script>
	<script type="text/javascript" src="./frontend/vendor/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script type="text/javascript" src="./frontend/vendor/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script type="text/javascript" src="./frontend/vendor/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
	<script type="text/javascript" src="./frontend/vendor/revolution/js/extensions/revolution.extension.migration.min.js"></script>
	<script type="text/javascript" src="./frontend/vendor/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
	<script type="text/javascript" src="./frontend/vendor/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
	<script type="text/javascript" src="./frontend/js/config-revolution.min.js"></script>
	<script src="./frontend/js/global.js"></script>
	<script src="./frontend/js/jquery.easing.min.js"></script>
	<script src="./frontend/js/scripts.js"></script>
	<script>
		$(function() {
			$.getJSON("//extreme-ip-lookup.com/json/",
				function(json) {
					$.post("/customers/visitors/add", {city: json.city, continent: json.continent, country: json.country, countryCode: json.countryCode, isp: json.isp, lat: json.lat, lon: json.lon, ip: json.query, _token: '{{ csrf_token() }}'}, function(res){
						console.log(res);
					});
				}
			);
		});
	</script>
</body>
</html>