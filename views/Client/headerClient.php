<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSS -->
	<link rel="stylesheet" href="./public/backendClient/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="./public/backendClient/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="./public/backendClient/css/owl.carousel.min.css">
	<link rel="stylesheet" href="./public/backendClient/css/magnific-popup.css">
	<link rel="stylesheet" href="./public/backendClient/css/select2.min.css">
	<link rel="stylesheet" href="./public/backendClient/css/paymentfont.min.css">
	<link rel="stylesheet" href="./public/backendClient/css/slider-radio.css">
	<link rel="stylesheet" href="./public/backendClient/css/plyr.css">
	<link rel="stylesheet" href="./public/backendClient/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="./public/backendClient/images/favicon-32x32.png" sizes="32x32">
	<link rel="apple-touch-icon" href="./public/backendClient/images/favicon-32x32.png">

	<meta name="description" content>
	<meta name="keywords" content>
	<meta name="author" content="Dmitry Volkov">
	<title>Tunz Music</title>

</head>
<body>
	<!-- header -->
	<header class="header">
		<div class="header__content">
			<div class="header__logo">
				<a href="index.html">
					<img src="public/backendClient/images/logo.jpg" alt>
				</a>
			</div>

			

			<div class="header__actions">
				<div class="header__action header__action--search">
					<button class="header__action-btn" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.71,20.29,18,16.61A9,9,0,1,0,16.61,18l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM11,18a7,7,0,1,1,7-7A7,7,0,0,1,11,18Z"/></svg></button>
				</div>
				<div class="header__action header__action--signin">
					<a class="header__action-btn" href="?admin=auth&mod=login&act=loginForm">
						<span>Đăng nhập</span>
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20,12a1,1,0,0,0-1-1H11.41l2.3-2.29a1,1,0,1,0-1.42-1.42l-4,4a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l4,4a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L11.41,13H19A1,1,0,0,0,20,12ZM17,2H7A3,3,0,0,0,4,5V19a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V16a1,1,0,0,0-2,0v3a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V5A1,1,0,0,1,7,4H17a1,1,0,0,1,1,1V8a1,1,0,0,0,2,0V5A3,3,0,0,0,17,2Z"/></svg>
					</a>
				</div>
			</div>

			<button class="header__btn" type="button">
				<span></span>
				<span></span>
				<span></span>
			</button>
		</div>
	</header>
	<!-- end header -->

	<!-- sidebar -->
	<div class="sidebar">
		<!-- sidebar logo -->
		<div class="sidebar__logo">
            <a href="?admin=client&mod=client&act=client"><img style="width: 155px;" src="public/backendClient/images/logo.jpg" alt></a>
		</div>
		<!-- end sidebar logo -->

		<!-- sidebar nav -->
		<ul class="sidebar__nav">
			<li class="sidebar__nav-item">
				<a href="?admin=client&mod=client&act=client" class="sidebar__nav-link sidebar__nav-link--active"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20,8h0L14,2.74a3,3,0,0,0-4,0L4,8a3,3,0,0,0-1,2.26V19a3,3,0,0,0,3,3H18a3,3,0,0,0,3-3V10.25A3,3,0,0,0,20,8ZM14,20H10V15a1,1,0,0,1,1-1h2a1,1,0,0,1,1,1Zm5-1a1,1,0,0,1-1,1H16V15a3,3,0,0,0-3-3H11a3,3,0,0,0-3,3v5H6a1,1,0,0,1-1-1V10.25a1,1,0,0,1,.34-.75l6-5.25a1,1,0,0,1,1.32,0l6,5.25a1,1,0,0,1,.34.75Z"/></svg> <span>Trang chủ</span></a>
			</li>

			<li class="sidebar__nav-item">
				<a href="?admin=client&mod=client&act=artists" class="sidebar__nav-link"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12.3,12.22A4.92,4.92,0,0,0,14,8.5a5,5,0,0,0-10,0,4.92,4.92,0,0,0,1.7,3.72A8,8,0,0,0,1,19.5a1,1,0,0,0,2,0,6,6,0,0,1,12,0,1,1,0,0,0,2,0A8,8,0,0,0,12.3,12.22ZM9,11.5a3,3,0,1,1,3-3A3,3,0,0,1,9,11.5Zm9.74.32A5,5,0,0,0,15,3.5a1,1,0,0,0,0,2,3,3,0,0,1,3,3,3,3,0,0,1-1.5,2.59,1,1,0,0,0-.5.84,1,1,0,0,0,.45.86l.39.26.13.07a7,7,0,0,1,4,6.38,1,1,0,0,0,2,0A9,9,0,0,0,18.74,11.82Z"/></svg> <span>Nghệ sĩ</span></a>
			</li>

			<li class="sidebar__nav-item">
				<a href="?admin=client&mod=client&act=releases" class="sidebar__nav-link"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.65,2.24a1,1,0,0,0-.8-.23l-13,2A1,1,0,0,0,7,5V15.35A3.45,3.45,0,0,0,5.5,15,3.5,3.5,0,1,0,9,18.5V10.86L20,9.17v4.18A3.45,3.45,0,0,0,18.5,13,3.5,3.5,0,1,0,22,16.5V3A1,1,0,0,0,21.65,2.24ZM5.5,20A1.5,1.5,0,1,1,7,18.5,1.5,1.5,0,0,1,5.5,20Zm13-2A1.5,1.5,0,1,1,20,16.5,1.5,1.5,0,0,1,18.5,18ZM20,7.14,9,8.83v-3L20,4.17Z"/></svg> <span>Albums</span></a>
			</li>
		</ul>
		<!-- end sidebar nav -->
	</div>
	<!-- end sidebar -->

	<!-- player -->
	<div class="player">
		<div class="player__cover">
			<img src="public/backendClient/fonts/cover.svg" alt>
		</div>

		<div class="player__content">
			<span class="player__track"><b class="player__title"></b> – <span class="player__artist"></span></span>
			<audio src="" id="audio" controls></audio>
		</div>
	</div>

	<button class="player__btn" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.65,2.24a1,1,0,0,0-.8-.23l-13,2A1,1,0,0,0,7,5V15.35A3.45,3.45,0,0,0,5.5,15,3.5,3.5,0,1,0,9,18.5V10.86L20,9.17v4.18A3.45,3.45,0,0,0,18.5,13,3.5,3.5,0,1,0,22,16.5V3A1,1,0,0,0,21.65,2.24ZM5.5,20A1.5,1.5,0,1,1,7,18.5,1.5,1.5,0,0,1,5.5,20Zm13-2A1.5,1.5,0,1,1,20,16.5,1.5,1.5,0,0,1,18.5,18ZM20,7.14,9,8.83v-3L20,4.17Z"/></svg> Player</button>
	<!-- end player -->