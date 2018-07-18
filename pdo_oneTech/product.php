
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

	<!-- Single Product -->

	<div class="single_product">
		<div class="container">
			<?php
				$query = "SELECT p.*, c.*  from tbl_products AS p JOIN category AS c ON p.category_id=c.category_id WHERE p.p_id=".$_GET['id'];       
							      $records_per_page=100;
							      $newquery = $crud->paging($query,$records_per_page);
							      $crud->getViewDetail($newquery);
			?>
		</div>
	</div>

	<!-- Recently Viewed -->
		<div class="viewed">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="viewed_title_container">
						<h3 class="viewed_title">Recently Viewed</h3>
						<div class="viewed_nav_container">
							<div class="viewed_nav viewed_prev"><i class="fas fa-chevron-left"></i></div>
							<div class="viewed_nav viewed_next"><i class="fas fa-chevron-right"></i></div>
						</div>
					</div>

					<div class="viewed_slider_container">

						<div class="owl-carousel owl-theme viewed_slider">
							
						<?php
							$query = "SELECT * FROM tbl_products";       
							      $records_per_page=100;
							      $newquery = $crud->paging($query,$records_per_page);
							      $crud->getRecentview($newquery);
							?>

						</div>
						
					


					</div>

					
				</div>
			</div>
		</div>
	</div>


	<!-- Brands -->
		<?php echo include_once('inc/brands.php'); ?>

	<!-- end brands -->

	<!-- Newsletter -->
		<?php echo include_once('inc/newsletter.php') ?>

	<!-- End Newsletter -->
	<!-- Footer -->
		<?php echo include_once('inc/footer.php') ?>	
	<!-- End footer -->
	<!-- Copyright -->
		<?php echo include_once('inc/copyright.php') ?>
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
<script src="plugins/easing/easing.js"></script>
<script src="js/product_custom.js"></script>
</body>

</html>