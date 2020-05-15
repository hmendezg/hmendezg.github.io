<?php 
	include_once("localization.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?=$siteTitle?></title>
		<meta name="author" content="Enablitech">
		<meta name="description" content="<?=$siteContent?>">
		<meta name="keywords" content="HTML,CSS,XML,JavaScript">
		<meta name="Distribution" content="global"/>
		<meta name="theme-color" content="#317EFB"/>
		<meta name="Robots" content="all"/>
		<link rel="shortcut icon" href="../img/favicon.ico" type="image/ico">
		<link rel="icon" href="../img/favicon.ico" type="image/ico">
		
		<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
		<link href="../vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
		<link href="../css/stylish-portfolio.css" rel="stylesheet">
		<link href="../css/half-slider.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet" type="text/css"/>
		<link href="../css/gallery.css" rel="stylesheet" type="text/css"/>
	</head>
	<body id="page-top">
		<a id="mnuMain" name="mnuMain" class="menu-toggle rounded" href="#"><i class="fas fa-bars"></i></a>
		<nav id="sidebar-wrapper">
			<ul class="sidebar-nav">
				<li class="sidebar-brand">
					<a class="js-scroll-trigger" href="#page-top"><?=$mnuTitle?></a>
				</li>
				<li class="sidebar-nav-item">
					<a class="js-scroll-trigger" href="#page-top"><?=$mnuOStart?></a>
				</li>
				<li class="sidebar-nav-item">
					<a class="js-scroll-trigger" href="#allproddesc"><?=$mnuOAbout?></a>
				</li>
				<li class="sidebar-nav-item">
					<a class="js-scroll-trigger" href="#imagegallery"><?=$mnuOImageGallery?></a>
				</li>
				<li class="sidebar-nav-item">
					<a class="js-scroll-trigger" href="#contact"><?=$mnuOContact?></a>
				</li>
			</ul>
		</nav>
		<header class="masthead itsahead">				
			<div id="lang" class="container my-auto text-right mr-4">
				<form id="frmLang" class="text-right" name="frmLang" action="../cookieLang.php" method="POST">
					<input name="lang" class="control-label invisible" value="<?=$tlang?>">
					<input type="submit" class="btn btn-sm btn-link" value="<?=$langTitle?>">
				</form>
			</div>			
			<div id="hdr" class="container text-center my-auto">
				<div id="hdrlnk" class="col-md-12 text-center">
					<div class="container my-auto p*-0">
						<a href=".." class="btn btn-xs btn-light">Enablitech</a>	
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center py-1">
						<div class="container text-center my-auto">	
							<h1 class="mb-1 hdrtitle">IT Semantic Audit</h1>
						</div>
					</div>
					<div class="col-md-3 text-right"></div>
				</div>				
				<h3 class="mb-5 hdrsubtitle">
					<em><?=$siteSubtitle?></em>
				</h3>
			</div>
			<div class="overlay"></div>
		</header>
		<section id="allproddesc" class="content-section bg-light pt-5" id="about">
			<div class="container">
				<div class="row">
					<div class="col-md-4 text-center mb-4">
						<img class="img-fluid" src="../img/itsa_info.png" alt="itsa info">
						<h4 class="about-desc py-3"><?=$prodDescTitle?></h4>
						<div class="text-justify">
							<p><?=$prodDesc?></p>
						</div>
					</div>
					<div class="col-md-4 text-center mb-4">
						<img class="img-fluid" src="../img/itsa_ont.png" alt="itsa uses">
						<h4 class="about-desc py-3"><?=$prodUseTitle?></h4>
						<div class="text-justify">
							<p><?=$prodUseDesc?></div>
					</div>
					<div class="col-md-4 text-center mb-4">
						<img class="img-fluid" src="../img/itsa_func.png" alt="itsa functionalities">
						<h4 class="about-desc py-3"><?=$prodFuncTitle?></h4>
						<div class="text-justify">
							<div id="funcs">
								<ul class="funcs">
									<li><?=$prodFuncL1?></li>
									<li><?=$prodFuncL2?></li>
									<li><?=$prodFuncL3?></li>
									<li><?=$prodFuncL4?></li>
									<li><?=$prodFuncL5?></li>
									<li><?=$prodFuncL6?></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

	<!--
    <!- - Map - ->
    <section id="contact" class="map">
      <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
      <br/>
      <small>
        <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
      </small>
    </section>
	-->	
		
	<section id="imagegallery" class="content-section py-4">				
		<div class="container" class="text-center">
			<div class="content-section-heading text-left">
				<div class="content-section-heading text-left">
					<!--<h2 class="mb-5 my-auto">Image gallery</h2>-->
				</div>
			</div>
			
			<div id="mycarousel">
				<div id="carouselIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselIndicators" data-slide-to="1"></li>
						<li data-target="#carouselIndicators" data-slide-to="2"></li>
						<li data-target="#carouselIndicators" data-slide-to="3"></li>
						<li data-target="#carouselIndicators" data-slide-to="4"></li>
						<li data-target="#carouselIndicators" data-slide-to="5"></li>
						<li data-target="#carouselIndicators" data-slide-to="6"></li>
						<li data-target="#carouselIndicators" data-slide-to="7"></li>
						<li data-target="#carouselIndicators" data-slide-to="8"></li>
						<li data-target="#carouselIndicators" data-slide-to="9"></li>
						<li data-target="#carouselIndicators" data-slide-to="10"></li>
					</ol>
					
					<div class="carousel-inner">
						<div class="carousel-item active" style="background-image: url('img/gallery/1.png')">
							<div class="carousel-caption d-md-block">
								<h4><?=$imgGal1?></h4>
							</div>
						</div>

						<div class="carousel-item" style="background-image: url('img/gallery/2.png')">
							<div class="carousel-caption d-md-block">
								<h3><?=$imgGal2?></h3>
							</div>
						</div>

						<div class="carousel-item" style="background-image: url('img/gallery/3.png')">
							<div class="carousel-caption d-md-block">
								<h3><?=$imgGal3?></h3>
							</div>
						</div>					
						
						<div class="carousel-item" style="background-image: url('img/gallery/4.png')">
							<div class="carousel-caption d-md-block">
								<h3><?=$imgGal4?></h3>
							</div>
						</div>
						
						<div class="carousel-item" style="background-image: url('img/gallery/5.png')">
							<div class="carousel-caption d-md-block">
								<h3><?=$imgGal5?></h3>
							</div>
						</div>
						
						<div class="carousel-item" style="background-image: url('img/gallery/6.png')">
							<div class="carousel-caption d-md-block">
								<h3><?=$imgGal6?></h3>
							</div>
						</div>
						
						<div class="carousel-item" style="background-image: url('img/gallery/7.png')">
							<div class="carousel-caption d-md-block">
								<h3><?=$imgGal7?></h3>
							</div>
						</div>
						
						<div class="carousel-item" style="background-image: url('img/gallery/8.png')">
							<div class="carousel-caption d-md-block">
								<h3><?=$imgGal8?></h3>
							</div>
						</div>
						
						<div class="carousel-item" style="background-image: url('img/gallery/9.png')">
							<div class="carousel-caption d-md-block">
								<h3><?=$imgGal9?></h3>
							</div>
						</div>
						
						<div class="carousel-item" style="background-image: url('img/gallery/10.png')">
							<div class="carousel-caption d-md-block">
								<h3><?=$imgGal10?></h3>
							</div>
						</div>
						
						<div class="carousel-item" style="background-image: url('img/gallery/11.png')">
							<div class="carousel-caption d-md-block">
								<h3><?=$imgGal11?></h3>
							</div>
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only"><?=$imgGalPrev?></span>
					</a>
					<a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only"><?=$imgGalNext?></span>
					</a>
				</div>
			</div>
		</div>
	</section>
	
	<section id="contact" class="content-section py-4 text-center pb-4">
		<a href="../index.php#contact" class="btn btn-lg btn-success"><?=$btnContactUs?></a>
	</section>
	
    <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
        <!--
		<ul class="list-inline mb-5">
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white mr-3" href="#">
              <i class="icon-social-facebook"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white mr-3" href="#">
              <i class="icon-social-twitter"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="social-link rounded-circle text-white" href="#">
              <i class="icon-social-github"></i>
            </a>
          </li>
        </ul>
		-->
        <h3 class="py-5">© 2018 Enablitech</h3>
      </div>
    </footer>
	
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
	
    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for this template -->
    <script src="../js/stylish-portfolio.min.js"></script>
		<script>
			window.onload = function(){
				document.getElementById("mnuMain").classList.replace("invisible","visible");
				document.getElementById("lang").classList.replace("invisible","visible");
			}
		</script>
	</body>
</html>
