<?php
class crud
{
	private $db;	
	function __construct($DB_con)
	{
		$this->db = $DB_con;
	}	
	public function create($first_name,$last_name,$email_id,$contact_no)
	{
		try
		{
			$stmt = $this->db->prepare("INSERT INTO tbl_users(first_name,last_name,email_id,contact_no) VALUES(:first_name, :last_name, :email_id, :contact_no)");
			$stmt->bindparam(":first_name",$first_name);
			$stmt->bindparam(":last_name",$last_name);
			$stmt->bindparam(":email_id",$email_id);
			$stmt->bindparam(":contact_no",$contact_no);
			$stmt->execute();
			return true;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();	
			return false;
		}		
	}	
	public function getID($id)
	{
		$stmt = $this->db->prepare("SELECT * FROM tbl_users WHERE id=:id");
		$stmt->execute(array(":id"=>$id));
		$editRow=$stmt->fetch(PDO::FETCH_ASSOC);
		return $editRow;
	}
	public function getID_Detail($id)
	{
		$stmt = $this->db->prepare("SELECT * FROM blog WHERE id=:id");
		$stmt->execute(array(":id"=>$id));
		$editRow=$stmt->fetch(PDO::FETCH_ASSOC);
		return $editRow;
	}	
	public function update($id,$first_name,$last_name,$email_id,$contact_no)
	{
		try
		{
			$stmt=$this->db->prepare("UPDATE tbl_users SET first_name=:first_name, 
		                                               last_name=:last_name, 
													   email_id=:email_id, 
													   contact_no=:contact_no
													WHERE id=:id ");
			$stmt->bindparam(":first_name",$first_name);
			$stmt->bindparam(":last_name",$last_name);
			$stmt->bindparam(":email_id",$email_id);
			$stmt->bindparam(":contact_no",$contact_no);
			$stmt->bindparam(":id",$id);
			$stmt->execute();
			
			return true;	
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();	
			return false;
		}
	}
	
	public function delete($id)
	{
		$stmt = $this->db->prepare("DELETE FROM tbl_users WHERE id=:id");
		$stmt->bindparam(":id",$id);
		$stmt->execute();
		return true;
	}

/* Get Blog Page */
	
	public function getBlogSimple($query)
	{
		$stmt = $this->db->prepare($query);
		$stmt->execute();
	
		if($stmt->rowCount()>0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				?>  
                <!-- Blog Post -->


			     <!-- Blog Code
                <?php
			}
		}
		else
		{
			?>
            
            <p>No Data..</p>
            
            <?php
		}
		
	}

	// Product ITEM



	public function getShop($query)
	{
		$stmt = $this->db->prepare($query);
		$stmt->execute();
	
		if($stmt->rowCount()>0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				?>  
                <!--  -->
                
						<div class="product_item">
							<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images<?php echo $row['image2'] ?>" alt=""></div>
								<div class="product_content">
									<div class="product_price">$ <?php echo $row ['price'] ?></div>
									<div class="product_name"><div><a href="product.php?id=<?php echo $row['p_id'] ?>" tabindex="0"><?php echo $row ['p_name'] ?></a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">- 25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div>

						<!-- <div class="product_item">
							<div class="product_border"></div>
								<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="" alt=""></div>
								<div class="product_content">
									<div class="product_price">$ 66</div>
									<div class="product_name"><div><a href="" tabindex="0">ggg</a></div></div>
								</div>
								<div class="product_fav"><i class="fas fa-heart"></i></div>
								<ul class="product_marks">
									<li class="product_mark product_discount">- 25%</li>
									<li class="product_mark product_new">new</li>
								</ul>
							</div> -->


			     <!-- 
                <?php
			}
		}
		else
		{
			?>
            
            <p>No Data..</p>
            
            <?php
		}
		
	}


	/* Get Blog Page */
	
	public function getBlog($query)
	{
		$stmt = $this->db->prepare($query);
		$stmt->execute();
	
		if($stmt->rowCount()>0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				?>  
                <!-- Blog Post -->
               
						<div class="blog_post">
							<div class="blog_image" style="background-image:url(images/<?php echo $row['image1'] ?>)"></div>
							<div class="blog_text"><?php echo $row ['text'] ?></div>
							<div class="blog_button"><a href="product.php?id=<?php echo $row['p_id'] ?>">Continue Reading</a></div>							
						</div>	

			     <!-- Blog Code
                <?php
			}
		}
		else
		{
			?>
            
            <p>No Data..</p>
            
            <?php
		}
		
	}



	// Get Bast Rated
		public function getBastRate($query)
	{
		$stmt = $this->db->prepare($query);
		$stmt->execute();
	
		if($stmt->rowCount()>0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				?>                  

                <!-- Slider Item -->
  
									<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item discount d-flex flex-column align-items-center justify-content-center text-center">
											<a href="product.php?id=<?php echo $row['p_id'] ?>">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/<?php echo $row['image1'] ?>" alt="">
											</div>
											</a>
											<div class="product_content">
												<div class="product_price discount">$ <?php echo $row['price'] - ( $row['price']*$row['discount']/100) ?><span><strike>$ <?php echo $row['price'] ?></strike></span></div>
												<div class="product_name"><div><a href="product.php?id=<?php echo $row['p_id'] ?>"><?php echo $row ['p_name'] ?></a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"><?php echo $row['discount'] ?>%</li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>
                <?php
			}
		}
		else
		{
			?>
            
            <p>No Data..</p>
            
            <?php
		}
		
	}

	// GEt On Soul


	public function getOnsale($query)
	{
		$stmt = $this->db->prepare($query);
		$stmt->execute();
	
		if($stmt->rowCount()>0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				?>  
        <!-- Slider Item -->

        <div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
											<a href="product.php?id=<?php echo $row['p_id']?>">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/<?php echo $row['image1'] ?>" alt="">
											</div>
											</a>

											<div class="product_content">
												<div class="product_price">$ <?php echo $row['price'] ?></div>
												<div class="product_name"><div><a href="product.php?id=<?php echo $row['p_id']?>"><?php echo $row['p_name'] ?></a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button active">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>



                <?php
			}
		}
		else
		{
			?>
            
            <p>No Data..</p>
            
            <?php
		}
		
	}

	// End

	// Recent View
	public function getRecentview($query)
	{
		$stmt = $this->db->prepare($query);
		$stmt->execute();
	
		if($stmt->rowCount()>0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				?>  

							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="images/<?php echo $row['feature'] ?>" alt=""></div>
									<div class="viewed_content text-center">
										<div class="viewed_price">$<?php echo $row['price']-$row['price'] * $row['discount']/100 ?><span>$<?php echo $row['price'] ?></span></div>
										<div class="viewed_name"><a href="product.php?id=<?php echo $row['p_id']?>"><?php echo $row ['p_name'] ?></a></div>
									</div>
									<ul class="item_marks">
										<li class="item_mark item_discount">-<?php echo $row['discount']; ?>%</li>
										<li class="item_mark item_new">new</li>
									</ul>
								</div>
							</div>
        



                <?php
			}
		}
		else
		{
			?>
            
            <p>No Data..</p>
            
            <?php
		}
		
	}
	//End
// Get View Detail


	public function getViewDetail($query)
	{
		$stmt = $this->db->prepare($query);
		$stmt->execute();	
		if($stmt->rowCount()>0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				?>
                <div class="row">
				<!-- Images -->
				<div class="col-lg-2 order-lg-1 order-2">
					<ul class="image_list">
						<li data-image="images/<?php echo $row['image1'] ?>"><img src="images/<?php echo $row['image1'] ?>" alt=""></li>
						<li data-image="images/<?php echo $row['image2'] ?>"><img src="images/<?php echo $row['image2'] ?>" alt=""></li>
						<li data-image="images/<?php echo $row['image3'] ?>"><img src="images/<?php echo $row['image3'] ?>" alt=""></li>
					</ul>
				</div>
				<!-- Selected Image -->
				<div class="col-lg-5 order-lg-2 order-1">
					<div class="image_selected"><img src="images/<?php echo $row['feature'] ?>" alt=""></div>
				</div>
				<!-- Description -->
				<div class="col-lg-5 order-3">
					<div class="product_description">
						<div class="product_category"><?php echo $row['c_name'] ?></div>
						<div class="product_name"><?php echo $row['p_name'] ?></div>
						<div class="rating_r rating_r_4 product_rating"><i></i><i></i><i></i><i></i><i></i></div>
						<div class="product_text"><p><?php echo $row['description'] ?></p></div>
						<div class="order_info d-flex flex-row">
							<form action="#">
								<div class="clearfix" style="z-index: 1000;">
									<!-- Product Quantity -->
									<div class="product_quantity clearfix">
										<span>Quantity: </span>
										<input id="quantity_input" type="text" pattern="[0-9]*" value="1">
										<div class="quantity_buttons">
											<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fas fa-chevron-up"></i></div>
											<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fas fa-chevron-down"></i></div>
										</div>
									</div>

									<!-- Product Color -->
									<ul class="product_color">
										<li>
											<span>Color: </span>
											<div class="color_mark_container"><div id="selected_color" class="color_mark"></div></div>
											<div class="color_dropdown_button"><i class="fas fa-chevron-down"></i></div>

											<ul class="color_list">
												<li><div class="color_mark" style="background: #999999;"></div></li>
												<li><div class="color_mark" style="background: #b19c83;"></div></li>
												<li><div class="color_mark" style="background: #000000;"></div></li>
											</ul>
										</li>
									</ul>

								</div>

								<div class="product_price">$<?php echo $row['price'] -$row['price']*$row['discount']/100 ?></div>
								<div class="button_container">
									<button type="button" class="button cart_button">Add to Cart</button>
									<div class="product_fav"><i class="fas fa-heart"></i></div>
								</div>
								
							</form>
						</div>
					</div>
				</div>

			</div>

                <?php
			}
		}
		else
		{
			?>
            
            <p>No Data..</p>
            
            <?php
		}
		
	}

// Get Deals of The Week


	public function getDeals($query)
	{
		$stmt = $this->db->prepare($query);
		$stmt->execute();
	
		if($stmt->rowCount()>0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				?>  
                
								<!-- Deals Item -->
				<div class="deals">
						 <div class="deals_title">Deal OFF The Week</div>
						<div class="deals_slider_container">
							
							<!-- Deals Slider -->
							<div class="owl-carousel owl-theme deals_slider">
								<div class="owl-item deals_item">
									<div class="deals_image">										
										<a href="product.php?id=<?php print($row['category_id']); ?>"><img src="images/<?php print($row['feature']); ?>" alt=""></a>
									</div>
									<div class="deals_content">
										<div class="deals_info_line d-flex flex-row justify-content-start">
											<div class="deals_item_category"><a href=" product.php?id=<?php echo $row['dow_id']?>"><?php print($row['p_name']); ?></a></div>
											<div class="deals_item_price_a ml-auto"><strike>$ <?php print($row['price']); ?></strike></div>
										</div>
										<div class="deals_info_line d-flex flex-row justify-content-start">
											<div class="deals_item_name"><?php print($row['p_name']); ?>    </div>
											<div class="deals_item_price ml-auto">$ 
											<?php print($row['price']) - (($row['price'])*($row['discount'])/100); ?>
										</div>
										</div>
										<div class="available">
											<div class="available_line d-flex flex-row justify-content-start">
												<div class="available_title">Available: <span>6</span></div>
												<div class="sold_title ml-auto">Already sold: <span>4</span></div>
											</div>
											<div class="available_bar"><span style="width:17%"></span></div>
										</div>
										<div class="deals_timer d-flex flex-row align-items-center justify-content-start">
											<div class="deals_timer_title_container">
												<div class="deals_timer_title">Hurry Up</div>
												<div class="deals_timer_subtitle">Offer ends in:</div>
											</div>
											<div class="deals_timer_content ml-auto">
												<div class="deals_timer_box clearfix" data-target-time="<?php echo $row['end_date'] ?>">
													<div class="deals_timer_unit">
														<div id="deals_timer1_hr" class="deals_timer_hr"></div>
														<span>hours></span>
													</div>
													<div class="deals_timer_unit">
														<div id="deals_timer1_min" class="deals_timer_min"></div>
														<span>mins</span>
													</div>
													<div class="deals_timer_unit">
														<div id="deals_timer1_sec" class="deals_timer_sec"></div>
														<span>sec</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>

						<div class="deals_slider_nav_container">
							<div class="deals_slider_prev deals_slider_nav"><i class="fas fa-chevron-left ml-auto"></i></div>
							<div class="deals_slider_next deals_slider_nav"><i class="fas fa-chevron-right ml-auto"></i></div>
						</div>
					</div>
						

                <?php
			}
		}
		else
		{
			?>
            
            <p>No Data..</p>
            
            <?php
		}
		
	}


public function getFeatured($query)
	{
		$stmt = $this->db->prepare($query);
		$stmt->execute();
	
		if($stmt->rowCount()>0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				?>  

				<div class="featured_slider_item">
										<div class="border_active"></div>
										<div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
											<a href="product.php?id=<?php echo $row['p_id']?>">
											<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/<?php echo $row['image1'] ?>" alt="">
											</div>
											</a>
											<div class="product_content">
												<div class="product_price">$ <?php echo $row['price'] ?></div>
												<div class="product_name"><div><a href="product.php?id=<?php echo $row['p_id'] ?>"><?php echo $row['p_name'] ?></a></div></div>
												<div class="product_extras">
													<div class="product_color">
														<input type="radio" checked name="product_color" style="background:#b19c83">
														<input type="radio" name="product_color" style="background:#000000">
														<input type="radio" name="product_color" style="background:#999999">
													</div>
													<button class="product_cart_button">Add to Cart</button>
												</div>
											</div>
											<div class="product_fav"><i class="fas fa-heart"></i></div>
											<ul class="product_marks">
												<li class="product_mark product_discount"></li>
												<li class="product_mark product_new">new</li>
											</ul>
										</div>
									</div>
								
                <?php
			}
		}
		else
		{
			?>
            
            <p>No Data..</p>
            
            <?php
		}
		
	}


	public function getNewArrivls($query)
	{
		$stmt = $this->db->prepare($query);
		$stmt->execute();
	
		if($stmt->rowCount()>0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				?>                  
                <div class="arrivals_slider_item">
											<div class="border_active"></div>
											<div class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center">
												<a href="product.php?id=<?php echo $row['p_id'] ?>">
												<div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="images/<?php echo $row['image1'] ?>" alt=""></div>
											</a>
												<div class="product_content">
													<div class="product_price">$ <?php echo $row['price'] ?></div>
													<div class="product_name"><div><a href="product.php?id=<?php echo $row['p_id'] ?>"><?php echo $row['p_name'] ?></a></div></div>
													<div class="product_extras">
														<div class="product_color">
															<input type="radio" checked name="product_color" style="background:#b19c83">
															<input type="radio" name="product_color" style="background:#000000">
															<input type="radio" name="product_color" style="background:#999999">
														</div>
														<button class="product_cart_button">Add to Cart</button>
													</div>
												</div>
												<div class="product_fav"><i class="fas fa-heart"></i></div>
												<ul class="product_marks">
													<li class="product_mark product_discount">-25%</li>
													<li class="product_mark product_new">new</li>
												</ul>
											</div>
										</div>
                <?php
			}
		}
		else
		{
			?>
            
            <p>No Data..</p>
            
            <?php
		}
		
	}


	// Get Banner
		public function getBanner($query)
	{
		$stmt = $this->db->prepare($query);
		$stmt->execute();
	
		if($stmt->rowCount()>0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				?>  
                <!-- Banner -->
				<div class="banner">
					<div class="banner_background" style="background-image:url(images/<?php print($row['img_backgournd']); ?>)"></div>
					<div class="container fill_height">
						<div class="row fill_height">
							<div class="banner_product_image"><img src="images/<?php print($row['feature']); ?>" alt=""></div>
							<div class="col-lg-5 offset-lg-4 fill_height">
								<div class="banner_content">
									<h1 class="banner_text"><?php print($row['tittle']); ?></h1>
									<div class="banner_price"><span>$ <?php echo $row['price'] ?></span>$ <?php echo $row['price']-($row['price']*$row['discount']/100) ?></div>
									<div class="banner_product_name"><?php print($row['p_name']); ?></div>
									<div class="button banner_button"><a href="product.php?id=<?php echo $row['p_id'] ?>">Shop Now</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>

                <?php
			}
		}
		else
		{
			?>
            
            <p>No Data..</p>            
            <?php
		}		
	}

	/* paging */
	
	public function dataview($query)
	{
		$stmt = $this->db->prepare($query);
		$stmt->execute();
	
		if($stmt->rowCount()>0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				?>
                <tr>
                <td><?php print($row['id']); ?></td>
                <td><?php print($row['first_name']); ?></td>
                <td><?php print($row['last_name']); ?></td>
                <td><?php print($row['email_id']); ?></td>
                <td><?php print($row['contact_no']); ?></td>
                <td align="center">
                <a href="edit-data.php?edit_id=<?php print($row['id']); ?>"><i class="glyphicon glyphicon-edit"></i></a>
                </td>
                <td align="center">
                <a href="delete.php?delete_id=<?php print($row['id']); ?>"><i class="glyphicon glyphicon-remove-circle"></i></a>
                </td>
                </tr>
                <?php
			}
		}
		else
		{
			?>
            <tr>
            <td>Nothing here...</td>
            </tr>
            <?php
		}
		
	}
	
	public function paging($query,$records_per_page)
	{
		$starting_position=0;
		if(isset($_GET["page_no"]))
		{
			$starting_position=($_GET["page_no"]-1)*$records_per_page;
		}
		$query2=$query." limit $starting_position,$records_per_page";
		return $query2;
	}
	
	public function paginglink($query,$records_per_page)
	{
		
		$self = $_SERVER['PHP_SELF'];
		
		$stmt = $this->db->prepare($query);
		$stmt->execute();
		
		$total_no_of_records = $stmt->rowCount();
		
		if($total_no_of_records > 0)
		{
			?><ul class="pagination"><?php
			$total_no_of_pages=ceil($total_no_of_records/$records_per_page);
			$current_page=1;
			if(isset($_GET["page_no"]))
			{
				$current_page=$_GET["page_no"];
			}
			if($current_page!=1)
			{
				$previous =$current_page-1;
				echo "<li class='page-item'><a class='page-link' href='".$self."?page_no=1'>First</a></li>";
				echo "<li class='page-item'><a class='page-link' href='".$self."?page_no=".$previous."'>Previous</a></li>";
			}
			for($i=1;$i<=$total_no_of_pages;$i++)
			{
				if($i==$current_page)
				{
					echo "<li class='page-item active'><a class='page-link' href='".$self."?page_no=".$i."' style='color:white;'>".$i."</a></li>";
				}
				else
				{
					echo "<li class='page-item'><a class='page-link' href='".$self."?page_no=".$i."'>".$i."</a></li>";
				}
			}
			if($current_page!=$total_no_of_pages)
			{
				$next=$current_page+1;
				echo "<li class='page-item'><a class='page-link' href='".$self."?page_no=".$next."'>Next</a></li>";
				echo "<li class='page-item'><a class='page-link' href='".$self."?page_no=".$total_no_of_pages."'>Last</a></li>";
			}
			?></ul><?php
		}
	}
	
	/* paging */





	


}
