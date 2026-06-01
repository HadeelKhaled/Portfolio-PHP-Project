<?php
require_once('conn.php');

$resultheader = mysqli_query($conn, "select * from header");
$rowheader = mysqli_fetch_assoc($resultheader);  

$resultHome = mysqli_query($conn, "select * from home");
$rowHome = mysqli_fetch_assoc($resultHome);

$resultAbout = mysqli_query($conn, "select * from about");
$rowAbout = mysqli_fetch_assoc($resultAbout);

$resultFooter = mysqli_query($conn, "select * from footer_socailmedia");
$rowFooter = mysqli_fetch_assoc($resultFooter);
?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/logo.png" type="image/png">
	<title>Clever Mind POB</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">
</head>

<body>

	<!--================ Start Header Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html"><img src="img/<?php echo $rowheader["image"] ?? "" ?>"  alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
						aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav justify-content-end">
							<li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="#ABOUT">About</a></li>
							<li class="nav-item"><a class="nav-link" href="#SERVICE">Services</a></li>
							<li class="nav-item"><a class="nav-link" href="#PORTFOLIO">Portfolio</a></li>
							<li class="nav-item"><a class="nav-link" href="#CONTACT">Contact</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================ End Header Area =================-->

	<!--================ Start Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="banner_inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-7">
						<div class="banner_content">
							<h3 class="text-uppercase">Hell0</h3>
							<h1 class="text-uppercase">I am <?php echo $rowHome["name"] ?? "" ?></h1>
							<h5 class="text-uppercase"><?php echo $rowHome["major"] ?? "" ?></h5>
							<div class="d-flex align-items-center">
								<button class="primary_btn" onclick="togglePopup()"><span>Hire Me</span></button>
								<a class="primary_btn tr-bg" href="http://localhost/task28/satner-master/upload/#"><span>Get CV</span></a>
							</div>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="home_right_img">
							<img class="" src="img/banner/home-right.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Home Banner Area =================-->

	<!--================ Start About Us Area =================-->
	<section class="about_area section_gap" id="ABOUT">
		<div class="container">
			<div class="row justify-content-start align-items-center">
				<div class="col-lg-5">
					<div class="about_img">
						<img class="" src="img/about-us.png" alt="">
					</div>
				</div>

				<div class="offset-lg-1 col-lg-5">
					<div class="main_title text-left">
					<h2><?php echo $rowAbout["title"] ?? "" ?></h2>
						<p>
							<?php echo $rowAbout["description"] ?? "" ?>
						</p>
						<a class="primary_btn" href="#"><span>Download CV</span></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End About Us Area =================-->

	<!--================ Srart Brand Area =================-->
	<section class="brand_area section_gap_bottom">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="row">
					<?php
                		$result = mysqli_query($conn, "select * from under_about");
    					while ($row = mysqli_fetch_assoc($result)) {
                		echo "
						<div class='col-lg-4 col-md-4 col-sm-6'>
						<div class='single-brand-item d-table'>
							<div class='d-table-cell text-center'>
								<img src='img/brands/{$row['image']}' alt=''>
							</div>
						</div>
					</div>";
						}?>
					</div>
				</div>
				<div class="offset-lg-2 col-lg-4 col-md-6">
					<div class="client-info">
						<div class="d-flex mb-50">
							<span class="lage">1</span>
							<span class="smll">Years Experience Working</span>
						</div>
						<div class="call-now d-flex">
							<div>
								<span class="fa fa-phone"></span>
							</div>
							<div class="ml-15">
								<p>call us now</p>
								<h3>+000-111-222-333</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Brand Area =================-->

	<!--================ Start Features Area =================-->
	<section class="features_area" id="SERVICE">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 text-center">
					<div class="main_title">
						<h2>service offers </h2>
						<p>
							Is give may shall likeness made yielding spirit a itself togeth created 
							after sea <br> is in beast beginning signs open god you're gathering ithe
						</p>
					</div>
				</div>
			</div>
			<div class="row feature_inner">
            <?php
              $result = mysqli_query($conn, "select * from services");
            		while ($row = mysqli_fetch_assoc($result)) {
                		echo "
							<div class='col-lg-3 col-md-6'>
							<div class='feature_item'>
								<img src='img/services/{$row['image']}' alt=''>
								<h4>{$row['title']}</h4>
								<p>{$row['description']}</p>
							</div>
							</div>
							";
            				}
            ?>
			</div>
		</div>
	</section>
	<!--================ End Features Area =================-->

	<!--================Start Portfolio Area =================-->
	<section class="portfolio_area" id="PORTFOLIO">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="main_title text-left">
						<h2>quality work <br>
							Recently done project </h2>
					</div>
				</div>
			</div>
			<div class="filters-content">
				<div class="row portfolio-grid justify-content-center">
				<?php
              $result = mysqli_query($conn, "select * from portfolio");
              while ($row = mysqli_fetch_assoc($result)) {
                echo "
				<div class='col-lg-4 col-md-6 all latest'>
				<div class='portfolio_box'>
					<div class='single_portfolio'>
						<img class='img-fluid w-100' src='img/portfolio/{$row['image']}' alt=''>
						<div class='overlay'></div>
						<a href='img/portfolio/{$row['image']}' class='img-gal'>
							<div class='icon'>
								<span class='lnr lnr-cross'></span>
							</div>
						</a>
					</div>
					<div class='short_info'>
						<h4><a href='portfolio-details.html'>{$row['title']}</a></h4>
					</div>
						</div>
					</div>";
              }
              ?>
			</div>
		</div>
	</section>
	<!--================End Portfolio Area =================-->

	<!--================Footer Area =================-->
	<footer class="footer_area" id="CONTACT">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<div class="footer_top flex-column">
						<div class="footer_logo">
							<a href="#">
								<img src="img/logo.png" alt="">
							</a>
							<h4>Follow Me</h4>
						</div>
						<div class="footer_social">
							<a href="<?php echo $rowFooter["facebook"] ?? "" ?>"><i class="fa fa-facebook"></i></a>
							<a href="<?php echo $rowFooter["twitter"] ?? "" ?>"><i class="fa fa-twitter"></i></a>
							<a href="<?php echo $rowFooter["instagram"] ?? "" ?>"><i class="fa fa-instagram"></i></a>
							<a href="<?php echo $rowFooter["linkedin"] ?? "" ?>"><i class="fa fa-linkedin"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row footer_bottom justify-content-center">
				<p class="col-lg-8 col-sm-12 footer-text">
					Copyright &copy;<script>document.write(new Date().getFullYear());</script> 
					All rights reserved | This template is made with Clever Mind POB by <a href="#" target="_blank">Hadeel Alrousan</a>
				</p>
			</div>
		</div>
	</footer>
	<!--================End Footer Area =================-->


	<!--================ Popup Area =================-->
	<div class="popup" id="popup-1">
        <div class="overlay">
            <div class="content">
                <div class="close-btn" onclick="togglePopup()">&times;</div>
                <h3>My Email</h3>
				<p>harousan@yahoo.com</p>
            </div>
        </div>
    </div>
    <script>
        function togglePopup(){
            document.getElementById("popup-1").classList.toggle("active");
        }
    </script>
	<!--================End Popup Area =================-->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="vendors/isotope/isotope-min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/mail-script.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/theme.js"></script>
</body>

</html>