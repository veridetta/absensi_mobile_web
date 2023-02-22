<?php

	$fullurl = ($_SERVER['PHP_SELF']);
	$trimmed = trim($fullurl, ".php");
	$canonical = rtrim($trimmed, '/' . '/?');

	if (isset($_COOKIE['COOKIES_MEMBER'])) {
	    header("location:./");
	} else {

	?>

	<!DOCTYPE html>
	<html lang="id-ID" xml:lang="id-ID">

	    <head>

	    	<!--Viewport -->
	    	<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
	    	<meta content="text/html; charset=UTF-8" http-equiv="Content-Type"/>
	    	<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible"/>

	    	<!--Canonical-->
	    	<meta content="all" name="robots"/>
	    	<link href="<?php echo $site_url; ?>" rel="home"/>
	    	<link href="<?php echo $site_url; ?><?php echo $fullurl; ?>" rel="canonical"/>

	    	<!--Title-->
	    	<title><?php echo $site_name; ?></title>
	    	<meta name="description" content="<?php echo $site_description; ?>"/>
	    	<meta name="keywords" content="absensi online, aplikasi absensi, aplikasi absensi online, sistem absensi online, absensi online pemerintah, absensi online perusahaan"/>

	    	<!--OG-->
	    	<meta content="website" property="og:type"/>
	    	<meta content="<?php echo $site_name; ?>" property="og:title"/>
	    	<meta content="<?php echo $site_description; ?>" property="og:description"/>
	    	<meta content="<?php echo $site_url; ?><?php echo $fullurl; ?>" property="og:url"/>
	    	<meta content="<?php echo $site_name; ?>" property="og:site_name"/>
	    	<meta content="<?php echo $site_name; ?>" property="og:headline"/>
	    	<meta content="<?php echo $site_url; ?>/content/logo/absensionline.jpg" property="og:image"/>
	    	<meta content="1920" property="og:image:width"/>
	    	<meta content="1080" property="og:image:height"/>
	    	<meta content="id_ID" property="og:locale"/>
	    	<meta content="en_US" property="og:locale:alternate"/>
	    	<meta content="true" property="og:rich_attachment"/>
	    	<meta content="true" property="pinterest-rich-pin"/>
	    	<meta content="" property="fb:app_id"/>
	    	<meta content="" property="fb:pages"/>
	    	<meta content="" property="fb:admins"/>
	    	<meta content="" property="fb:profile_id"/>
	    	<meta content="<?php echo $site_name; ?>" property="article:author"/>
	    	<meta content="summary_large_image" name="twitter:card"/>
	    	<meta content="@mycodingxd" name="twitter:site"/>
	    	<meta content="@mycodingxd" name="twitter:creator"/>
	    	<meta content="<?php echo $site_url; ?><?php echo $fullurl; ?>" property="twitter:url"/>
	    	<meta content="<?php echo $site_name; ?>" property="twitter:title"/>
	    	<meta content="<?php echo $site_description; ?>" property="twitter:description"/>
	    	<meta content="<?php echo $site_url; ?>/content/logo/absensionline.jpg" property="twitter:image"/>

	    	<!--Webapp-->
	    	<link href="<?php echo $site_url; ?>/manifest.json" rel="manifest"/>
	    	<meta content="<?php echo $site_url; ?>" name="msapplication-starturl"/>
	    	<meta content="<?php echo $site_url; ?>" name="start_url"/>
	    	<meta content="<?php echo $site_name; ?>" name="application-name"/>
	    	<meta content="<?php echo $site_name; ?>" name="apple-mobile-web-app-title"/>
	    	<meta content="<?php echo $site_name; ?>" name="msapplication-tooltip"/>
	    	<meta content="#005CAA" name="theme_color"/>
	    	<meta content="#005CAA" name="theme-color"/>
	    	<meta content="#FFFFFF" name="background_color"/>
	    	<meta content="#005CAA" name="msapplication-navbutton-color"/>
	    	<meta content="#005CAA" name="msapplication-TileColor"/>
	    	<meta content="#005CAA" name="apple-mobile-web-app-status-bar-style"/>
	    	<meta content="true" name="mssmarttagspreventparsing"/>
	    	<meta content="yes" name="apple-mobile-web-app-capable"/>
	    	<meta content="yes" name="mobile-web-app-capable"/>
	    	<meta content="yes" name="apple-touch-fullscreen"/>
	    	<link href="<?php echo $site_url; ?>/favicon.png" rel="apple-touch-icon"/>
	    	<link href="<?php echo $site_url; ?>/favicon.png" rel="shortcut icon" type="image/x-icon"/>
	    	<link href="<?php echo $site_url; ?>/content/logo/absensionline32.png" rel="icon" sizes="32x32"/>
	    	<meta content="<?php echo $site_url; ?>/content/logo/absensionline144.png" name="msapplication-TileImage"/>
	    	<link href="<?php echo $site_url; ?>/content/logo/absensionline180.png" rel="apple-touch-icon"/>
	    	<link href="<?php echo $site_url; ?>/content/logo/absensionline48.png" rel="icon" sizes="48x48"/>
	    	<link href="<?php echo $site_url; ?>/content/logo/absensionline72.png" rel="icon" sizes="72x72"/>
	    	<link href="<?php echo $site_url; ?>/content/logo/absensionline96.png" rel="icon" sizes="96x96"/>
	    	<link href="<?php echo $site_url; ?>/content/logo/absensionline168.png" rel="icon" sizes="168x168"/>
	    	<link href="<?php echo $site_url; ?>/content/logo/absensionline192.png" rel="icon" sizes="192x192"/>
	    	<link href="<?php echo $site_url; ?>/content/logo/absensionline512.png" rel="icon" sizes="512x512"/>

	    	<!--Author-->
	    	<meta content="<?php echo $site_name; ?>" name="author" />
	    	<meta content="401XD Group" name="publisher"/>

	    	<!--verification-->
	    	<meta name="yandex-verification" content=""/>
	    	<meta name="p:domain_verify" content=""/>
	    	<meta name="msvalidate.01" content=""/>
	    	<meta name="google-site-verification" content="" />
	    	<meta name="dmca-site-verification" content=""/>
	    	<meta name="facebook-domain-verification" content=""/>

	    	<!--Location-->
	    	<meta content="ID" name="geo.region"/>
	    	<meta content="Indonesia" name="geo.country"/>
	    	<meta content="Indonesia" name="geo.placename"/>
	    	<meta content="x;x" name="geo.position"/>
	    	<meta content="x,x" name="ICBM"/>

	    	<!--resource-->
	    	<link href="//fonts.googleapis.com" rel="preconnect dns-prefetch"/>
	    	<link href="//api.github.com" rel="preconnect dns-prefetch"/>
	    	<link href="//api.mapbox.com" rel="preconnect dns-prefetch"/>
	    	<link href="//cdnjs.cloudflare.com" rel="preconnect dns-prefetch"/>
	    	<link href="//unpkg.com" rel="preconnect dns-prefetch"/>
			<link href="//kit.fontawesome.com" rel="preconnect dns-prefetch"/>
			
            <!--cssfont-->
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" rel="stylesheet"/>

            <!--css-->
            <link href="mod/assets-index/css/scroll.css" rel="stylesheet"/>
            <link href="mod/assets-index/css/bootstrap.min.css" rel="stylesheet"/>
            <link href="mod/assets-index/css/animate.css" rel="stylesheet"/>
            <link href="mod/assets-index/css/meanmenu.css" rel="stylesheet"/>
            <link href="mod/assets-index/css/magnific-popup.min.css" rel="stylesheet"/>
            <link href="mod/assets-index/css/owl.carousel.min.css" rel="stylesheet"/>
            <link href="mod/assets-index/css/odometer.css" rel="stylesheet"/>
            <link href="mod/assets-index/css/slick.css" rel="stylesheet"/>
            <link href="mod/assets-index/css/style.css" rel="stylesheet"/>
            <link href="mod/assets-index/css/responsive.css" rel="stylesheet"/>
            <link href="mod/assets-index/css/footer.css" rel="stylesheet"/>

	    </head>

	    <body>

	        <!--BERANDA-->
	        <div class="main-banner">
	        	<div class="d-table">
	        		<div class="d-table-cell c">
	        			<div class="container">
	        				<div class="row h-100 justify-content-center align-items-center">
	        					<div class="col-lg-5">
	        						<div class="hero-content text-center text-white">
	        							<p>
	        								<img src="<?php echo $site_url; ?>/content/logo/pkss.png" class="img-fluid" width="180px">
	        							</p>
	        							<h1 class="text-white"><?php echo $site_name; ?></h1>
	        							<p>
	        								<a href="<?php echo $site_url; ?>/login" class="btn btn-primary"><i aria-hidden="true" class="fa fa-sign-in-alt"></i> MASUK</a>
	        								<a href="<?php echo $site_url; ?>/registrasi" class="btn btn-primary"><i aria-hidden="true" class="fa fa-user-plus"></i> DAFTAR</a>
	        							</p>
	        							<i aria-hidden="true" class="fa fa-check-circle"></i> PKSS
	        						</div>
	        					</div>
	        				</div>
	        			</div>
	        		</div>
	        	</div>
	        	<div class="shape1"><img src="mod/assets-index/images/shape1.png" alt="shape"></div>
	        	<div class="shape2 rotateme"><img src="mod/assets-index/images/shape2.svg" alt="shape"></div>
	        	<div class="shape3"><img src="mod/assets-index/images/shape3.svg" alt="shape"></div>
	        	<div class="shape4"><img src="mod/assets-index/images/shape4.svg" alt="shape"></div>
	        	<div class="shape5"><img src="mod/assets-index/images/shape5.png" alt="shape"></div>
	        	<div class="shape6 rotateme"><img src="mod/assets-index/images/shape4.svg" alt="shape"></div>
	        	<div class="shape7"><img src="mod/assets-index/images/shape4.svg" alt="shape"></div>
	        	<div class="shape8 rotateme"><img src="mod/assets-index/images/shape2.svg" alt="shape"></div>
	        </div>

	        <!--PANEL-->

	        <!--APLIKASI-->

	        <!--FITUR-->
	        <section class="services-area ptb-50 bg-f5f5f5" id="fitur">
	        	<div class="container">
	        		<div class="row h-100 justify-content-center align-items-center">
	        			<div class="col-lg-6 col-md-12 services-content">
	        				<div class="section-title">
	        					<h2><i aria-hidden="true" class="fa fa-star"></i> Fitur Unggulan</h2>
	        					<div class="bar"></div>
	        					<p>Kami selalu meningkatkan kualitas sistem dan memberikan fitur terbaik yang bisa dengan mudah Anda gunakan.</p>
	        				</div>

	        				<div class="row">
	        					<div class="col-lg-6 col-md-6">
	        						<div class="box">
	        							<i data-feather="check"></i> Berbasis Android & Web
	        						</div>
	        					</div>
	        					<div class="col-lg-6 col-md-6">
	        						<div class="box">
	        							<i data-feather="chevrons-up"></i> Tanpa Fingerprint
	        						</div>
	        					</div>
	        					<div class="col-lg-6 col-md-6">
	        						<div class="box">
	        							<i data-feather="plus"></i> Atur Jadwal Kerja & Shift
	        						</div>
	        					</div>
	        					<div class="col-lg-6 col-md-6">
	        						<div class="box">
	        							<i data-feather="thumbs-up"></i> Kelola Jenis Pengguna 
	        						</div>
	        					</div>
	        					<div class="col-lg-6 col-md-6">
	        						<div class="box">
	        							<i data-feather="corner-right-up"></i> Fleksibel Dashboard
	        						</div>
	        					</div>
	        					<div class="col-lg-6 col-md-6">
	        						<div class="box">
	        							<i data-feather="grid"></i> Absen Foto Selfie & GPS
	        						</div>
	        					</div>
	        					<div class="col-lg-6 col-md-6">
	        						<div class="box">
	        							<i data-feather="zap"></i> Cepat & Mudah Digunakan
	        						</div>
	        					</div>
	        					<div class="col-lg-6 col-md-6">
	        						<div class="box">
	        							<i data-feather="trending-up"></i> Rekap Laporan Excel & Pdf
	        						</div>
	        					</div>
	        				</div>
	        			</div>
	        			<div class="col-lg-6 col-md-12">
	        				<br/><img style="border-radius: 30px;" src="<?php echo $site_url; ?>/content/logo/favicon.png" class="img-fluid" title="Fitur <?php echo $site_name; ?>" alt="Fitur <?php echo $site_name; ?>">
	        			</div>
	        		</div>
	        	</div>
	        </section>

	        <!--DISKRIPSI-->
	        <section class="ready-to-talk">
	        	<div class="container">
	        		<img src="<?php echo $site_url; ?>/content/<?php echo $site_logo; ?>" title="Website <?php echo $site_name; ?>" alt="Website <?php echo $site_name; ?>">
	        		<h3><?php echo $site_name; ?></h3>
	        	</div>
	        </section>

	        <!--FOOTER-->

	        <div class="go-top">
	        	<i data-feather="arrow-up"></i>
	        </div>

			<!--Scroll Indicator Load-->
			<div class='progress-container'>
				<div class='progress-bar' id='progressbar'/>
			</div>
			<script type='text/javascript'>
				//<![CDATA[
				window.addEventListener("scroll", myFunction);
				function myFunction() {
					var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
					var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
					var scrolled = (winScroll / height) * 100;
					document.getElementById("progressbar").style.width = scrolled + "%";
				}
				//]]>
			</script>

	        <!--javascript-->
	        <script src="mod/assets-index/js/jquery.min.js"></script>
	        <script src="mod/assets-index/js/jquery.meanmenu.min.js"></script>
	        <script src="mod/assets-index/js/jquery.magnific-popup.min.js"></script>
	        <script src="mod/assets-index/js/jquery.appear.js"></script>
	        <script src="mod/assets-index/js/odometer.min.js"></script>
	        <script src="mod/assets-index/js/slick.js"></script>
	        <script src="mod/assets-index/js/owl.carousel.min.js"></script>
	        <script src="mod/assets-index/js/feather.min.js"></script>
	        <script src="mod/assets-index/js/main.js"></script>

	    </body>

	</html>

<?php } ?>