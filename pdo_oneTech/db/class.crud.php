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
			      <div class="card mb-4">
			        <div class="card-body">
			          <div class="row">
			            <div class="col-lg-6">
			              <a href="post.php?id=<?php print($row['id']); ?>">
			                <img class="img-fluid rounded" src="uploads/img/<?php print($row['image']); ?>" alt="">
			              </a>
			            </div>
			            <div class="col-lg-6">
			              <h2 class="card-title"><?php print($row['title']); ?></h2>
			              <p class="card-text"><?php print($row['description']); ?></p>
			              <a href="post.php?id=<?php print($row['id']); ?>" class="btn btn-primary">Read More &rarr;</a>
			            </div>
			          </div>
			        </div>
			        <div class="card-footer text-muted">
			          Posted on <?php print($row['create_date']); ?>
			          <a href="#"><?php print($row['user_id']); ?> SENG Sourng</a>
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

	public function getTitle_of_The_Week($query)
	{
		$stmt = $this->db->prepare($query);
		$stmt->execute();
	
		if($stmt->rowCount()>0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				?>  
               <div class="deals_title"><?php print($row['title']); ?></div>

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

	public function getDeals_of_the_week($query)
	{
		$stmt = $this->db->prepare($query);
		$stmt->execute();
	
		if($stmt->rowCount()>0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
				?>  
                
								<!-- Deals Item -->
								<div class="owl-item deals_item">
									<div class="deals_image"><img src="images/<?php print($row['dow_img']); ?>" alt=""></div>
									<div class="deals_content">
										<div class="deals_info_line d-flex flex-row justify-content-start">
											<div class="deals_item_category"><a href="#"><?php print($row['dow_name']); ?></a></div>
											<div class="deals_item_price_a ml-auto"><?php print($row['dow_old_price']); ?></div>
										</div>
										<div class="deals_info_line d-flex flex-row justify-content-start">
											<div class="deals_item_name"><?php print($row['dow_brand_name']); ?>    </div>
											<div class="deals_item_price ml-auto">$225</div>
										</div>
										<div class="available">
											<div class="available_line d-flex flex-row justify-content-start">
												<div class="available_title">Available: <span><?php print($row['dow_available']); ?></span></div>
												<div class="sold_title ml-auto">Already sold: <span><?php print($row['dow_sold']); ?></span></div>
											</div>
											<div class="available_bar"><span style="width:17%"></span></div>
										</div>
										<div class="deals_timer d-flex flex-row align-items-center justify-content-start">
											<div class="deals_timer_title_container">
												<div class="deals_timer_title">Hurry Up</div>
												<div class="deals_timer_subtitle">Offer ends in:</div>
											</div>
											<div class="deals_timer_content ml-auto">
												<div class="deals_timer_box clearfix" data-target-time="">
													<div class="deals_timer_unit">
														<div id="deals_timer1_hr" class="deals_timer_hr"></div>
														<span><?php print($row['dow_hours']); ?></span>
													</div>
													<div class="deals_timer_unit">
														<div id="deals_timer1_min" class="deals_timer_min"></div>
														<span><?php print($row['dow_mins']); ?></span>
													</div>
													<div class="deals_timer_unit">
														<div id="deals_timer1_sec" class="deals_timer_sec"></div>
														<span><?php print($row['dow_secs']); ?></span>
													</div>
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
