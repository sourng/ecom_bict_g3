
<?php
  include_once 'db/dbconfig.php';

?>
<?php include_once('inc/header.php') ?>

<body>

<div class="super_container">
	
	<!-- Header -->
	
	<header class="header">

		<!-- Top Bar -->
		<?php include_once('inc/topbar.php'); ?>

		<!-- End Top Bar -->

		<!-- Header Main -->
			<?php include_once('inc/search.php') ?>

		<!-- end header_main -->
		
		<!-- Main Navigation -->
			<?php include_once('inc/main_navigation.php'); ?>

		<!-- End Main Navigation -->
		<!-- Menu -->
			<?php //include_once('inc/menu.php') ?>

		<!-- end menu -->

	</header>
	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/shop_background.jpg"></div>
		<div class="home_overlay"></div>
		<div class="home_content d-flex flex-column align-items-center justify-content-center">
			<h2 class="home_title">Technological Blog</h2>
		</div>
	</div>

	<!-- Blog -->

	<div class="blog">
		<div class="container">
			<div class="row">
				<div class="col">


					 <div class="blog_posts d-flex flex-row align-items-start justify-content-between">


						<?php
							$query = "SELECT * FROM  tbl_products ";       
							 $records_per_page=6;
							$newquery = $crud->paging($query,$records_per_page);
							$crud->getBlog($newquery);

						?>	
											
					</div>
				



				</div>
					
			</div>
		</div>
	</div>

	<!-- Newsletter -->
		<?php include_once('inc/newsletter.php') ?>

	<!-- End Newsletter -->
	<!-- Footer -->
		<?php include_once('inc/footer.php') ?>	
	<!-- End footer -->
	<!-- Copyright -->
		<?php include_once('inc/copyright.php') ?>
	<!--  End Copyright -->

	
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/blog_custom.js"></script>
</body>

</html>