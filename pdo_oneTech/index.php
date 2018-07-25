
<?php
  include_once 'db/dbconfig.php';
  include_once 'db/db.php';

  
	session_start();
	if(isset($_SESSION["uid"])){
		header("location:profile.php");
	}


?>

<?php include_once('inc/head_home.php') ?>

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
			<?php include_once('inc/menu.php') ?>

		<!-- end menu -->

	</header>
	
	<!-- Banner -->
	<div class="banner_2">
	
		<div class="banner_2_container">
			
			<div class="banner_2_dots"></div>
			<!-- Banner 2 Slider -->
			<div class="owl-carousel owl-theme banner_2_slider">	
				
				<?php
					$query = "SELECT b.* , p.* FROM tbl_banner AS b JOIN tbl_products AS p ON b.banner_id=p.banner_id ";       
					 $records_per_page=6;
					$newquery = $crud->paging($query,$records_per_page);
					$crud->getBanner($newquery);
				?>		
			</div>
		</div>
	</div>

	<!-- Characteristics -->

	<div class="characteristics">
		<div class="container">
			<div class="row">

				<!-- Char. Item -->
				<div class="col-lg-3 col-md-6 char_col">
					
					<div class="char_item d-flex flex-row align-items-center justify-content-start">
						<div class="char_icon"><img src="images/char_1.png" alt=""></div>
						<div class="char_content">
							<div class="char_title">Free Delivery</div>
							<div class="char_subtitle">from $50</div>
						</div>
					</div>
				</div>
				<!-- Char. Item -->
				<div class="col-lg-3 col-md-6 char_col">					
					<div class="char_item d-flex flex-row align-items-center justify-content-start">
						<div class="char_icon"><img src="images/char_2.png" alt=""></div>
						<div class="char_content">
							<div class="char_title">Free Delivery</div>
							<div class="char_subtitle">from $50</div>
						</div>
					</div>
				</div>

				<!-- Char. Item -->
				<div class="col-lg-3 col-md-6 char_col">
					
					<div class="char_item d-flex flex-row align-items-center justify-content-start">
						<div class="char_icon"><img src="images/char_3.png" alt=""></div>
						<div class="char_content">
							<div class="char_title">Free Delivery</div>
							<div class="char_subtitle">from $50</div>
						</div>
					</div>
				</div>

				<!-- Char. Item -->
				<div class="col-lg-3 col-md-6 char_col">					
					<div class="char_item d-flex flex-row align-items-center justify-content-start">
						<div class="char_icon"><img src="images/char_4.png" alt=""></div>
						<div class="char_content">
							<div class="char_title">Free Delivery</div>
							<div class="char_subtitle">from $50</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Deals of the week -->

	<div class="deals_featured">
		<div class="container">
			<div class="row">
				<div class="col d-flex flex-lg-row flex-column align-items-center justify-content-start">
					
					<!-- Deals -->

					<div class="deals">
						
								<?php
							      $query = "SELECT p.*, d.*  from tbl_products AS p JOIN tbl_dow AS d ON p.p_id=d.p_id where d.end_date > NOW()";       
							      $records_per_page=100;
							      $newquery = $crud->paging($query,$records_per_page);
							      $crud->getDeals($newquery);
							     ?>
					    
					</div>

					<!-- End Deals -->

					<!-- Featured -->
					<div class="featured">
						<div class="tabbed_container">
							<div class="tabs">
								<ul class="clearfix">
									<li class="active">Featured</li>
									<li>On Sale</li>
									<li>Best Rated</li>
								</ul>
								<div class="tabs_line"><span></span></div>
							</div>
							<!-- Get Featured -->
							<!-- Product Panel -->
							<div class="product_panel panel active">
								<div id="get_product" class="featured_slider slider">
									
									<?php
							      // $query = "SELECT p.*, c.*  from tbl_products AS p JOIN category AS c ON p.category_id=c.category_id where c.status  = new";       
							      // $records_per_page=100;
							      // $newquery = $crud->paging($query,$records_per_page);
							      // $crud->getFeatured($newquery);
							     ?>
									
								</div>
								<div class="featured_slider_dots_cover"></div>
							</div>

							<!-- Product Panel -->

							<div class="product_panel panel">
								<div class="featured_slider slider">
									
									<!-- Slider Item -->
										<?php
							      $query = "SELECT p.*, c.*  from tbl_products AS p JOIN category AS c ON p.category_id=c.category_id";       
							      $records_per_page=100;
							      $newquery = $crud->paging($query,$records_per_page);
							      $crud->getOnsale($newquery);
							     ?>
								</div>
								<div class="featured_slider_dots_cover"></div>
							</div>

							<!-- Product Panel -->

							<div class="product_panel panel">
								<div class="featured_slider slider">
									
									<!-- Slider Item -->
							
								<?php
							      $query = "SELECT p.*, c.*  from tbl_products AS p JOIN category AS c ON p.category_id=c.category_id ";       
							      $records_per_page=100;
							      $newquery = $crud->paging($query,$records_per_page);
							      $crud->getBastRate($newquery);
							     ?>
							

								</div>
								<div class="featured_slider_dots_cover"></div>
							</div>

						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Popular Categories -->

	<?php// include_once('inc/popular_categories.php') ?>

	<!-- Banner -->

	<?php ///include_once('inc/banner_product.php') ?>


	<!-- Hot New Arrivals -->

	<div class="new_arrivals">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="tabbed_container">
						<div class="tabs clearfix tabs-right">
							<div class="new_arrivals_title">Hot New Arrivals</div>

							

								<ul class="clearfix">
									<li class="active">Featured</li>
									<li>Audio & Video</li>
									<li>Laptops & Computers</li>
								</ul>
								
								<div class="tabs_line"><span></span></div>

							

						</div>
						<div class="row">
							<div class="col-lg-9" style="z-index:1;">

								<!-- Product Panel -->
								<div class="product_panel panel active">
									<div class="arrivals_slider slider">

										<?php
							      $query = "SELECT p.*, c.*  from tbl_products AS p JOIN category AS c ON p.category_id=c.category_id ";       
							      $records_per_page=100;
							      $newquery = $crud->paging($query,$records_per_page);
							      $crud->getNewArrivls($newquery);
							     ?>
										
									</div>
									<div class="arrivals_slider_dots_cover"></div>
								</div>

								<!-- Product Panel -->
								<div class="product_panel panel">
									<div class="arrivals_slider slider">

									

										<!-- Slider Item -->
											<?php
							      $query = "SELECT p.*, c.*  from tbl_products AS p JOIN category AS c ON p.category_id=c.category_id ";       
							      $records_per_page=100;
							      $newquery = $crud->paging($query,$records_per_page);
							      $crud->getNewArrivls($newquery);
							     ?>
										

										
									</div>
									<div class="arrivals_slider_dots_cover"></div>
								</div>

								<!-- Product Panel -->
								<div class="product_panel panel">
									<div class="arrivals_slider slider">
										
										 <!-- Slider Item -->
											<?php
							      $query = "SELECT p.*, c.*  from tbl_products AS p JOIN category AS c ON p.category_id=c.category_id ";       
							      $records_per_page=100;
							      $newquery = $crud->paging($query,$records_per_page);
							      $crud->getNewArrivls($newquery);
							     ?>

									</div>
									<div class="arrivals_slider_dots_cover"></div>
								</div>

							</div>

							<div class="col-lg-3">
								<div class="arrivals_single clearfix">
									<div class="d-flex flex-column align-items-center justify-content-center">
										<div class="arrivals_single_image"><img src="images/new_single.png" alt=""></div>
										<div class="arrivals_single_content">
											<div class="arrivals_single_category"><a href="#">Smartphones</a></div>
											<div class="arrivals_single_name_container clearfix">
												<div class="arrivals_single_name"><a href="#">LUNA Smartphone</a></div>
												<div class="arrivals_single_price text-right">$379</div>
											</div>
											<div class="rating_r rating_r_4 arrivals_single_rating"><i></i><i></i><i></i><i></i><i></i></div>
											<form action="#"><button class="arrivals_single_button">Add to Cart</button></form>
										</div>
										<div class="arrivals_single_fav product_fav active"><i class="fas fa-heart"></i></div>
										<ul class="arrivals_single_marks product_marks">
											<li class="arrivals_single_mark product_mark product_new">new</li>
										</ul>
									</div>
								</div>
							</div>

						</div>
								
					</div>
				</div>
			</div>
		</div>		
	</div>

	<!-- Best Sellers -->

	<?php //include_once('inc/best_seller.php') ?>



	<!-- Adverts -->

	<?php // include_once('inc/adverts.php') ?>

	<!-- Trends -->

	<?php // include_once('inc/trends.php') ?>

	<!-- Reviews -->

	<?php // include_once('inc/lastest_review.php') ?>


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
						
						<!-- Recently Viewed Slider -->

						<div class="owl-carousel owl-theme viewed_slider">
							
							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="images/view_1.jpg" alt=""></div>
									<div class="viewed_content text-center">
										<div class="viewed_price">$225<span>$300</span></div>
										<div class="viewed_name"><a href="#">Beoplay H7</a></div>
									</div>
									<ul class="item_marks">
										<li class="item_mark item_discount">-25%</li>
										<li class="item_mark item_new">new</li>
									</ul>
								</div>
							</div>

							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="images/view_2.jpg" alt=""></div>
									<div class="viewed_content text-center">
										<div class="viewed_price">$379</div>
										<div class="viewed_name"><a href="#">LUNA Smartphone</a></div>
									</div>
									<ul class="item_marks">
										<li class="item_mark item_discount">-25%</li>
										<li class="item_mark item_new">new</li>
									</ul>
								</div>
							</div>

							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="images/view_3.jpg" alt=""></div>
									<div class="viewed_content text-center">
										<div class="viewed_price">$225</div>
										<div class="viewed_name"><a href="#">Samsung J730F...</a></div>
									</div>
									<ul class="item_marks">
										<li class="item_mark item_discount">-25%</li>
										<li class="item_mark item_new">new</li>
									</ul>
								</div>
							</div>

							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item is_new d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="images/view_4.jpg" alt=""></div>
									<div class="viewed_content text-center">
										<div class="viewed_price">$379</div>
										<div class="viewed_name"><a href="#">Huawei MediaPad...</a></div>
									</div>
									<ul class="item_marks">
										<li class="item_mark item_discount">-25%</li>
										<li class="item_mark item_new">new</li>
									</ul>
								</div>
							</div>

							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="images/view_5.jpg" alt=""></div>
									<div class="viewed_content text-center">
										<div class="viewed_price">$225<span>$300</span></div>
										<div class="viewed_name"><a href="#">Sony PS4 Slim</a></div>
									</div>
									<ul class="item_marks">
										<li class="item_mark item_discount">-25%</li>
										<li class="item_mark item_new">new</li>
									</ul>
								</div>
							</div>

							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="images/view_6.jpg" alt=""></div>
									<div class="viewed_content text-center">
										<div class="viewed_price">$375</div>
										<div class="viewed_name"><a href="#">Speedlink...</a></div>
									</div>
									<ul class="item_marks">
										<li class="item_mark item_discount">-25%</li>
										<li class="item_mark item_new">new</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>





	   
                 

			<!-- Brands -->
				<?php  include_once('inc/newsletter.php') ?>

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
<script src="plugins/slick-1.8.0/slick.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
</body>

</html>