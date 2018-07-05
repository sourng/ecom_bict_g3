<?php $this->load->View('inc/head.php') ?>
<body>
    <!-- *** TOPBAR ***
     _________________________________________________________ -->
 <?php $this->load->View('inc/topbar.php') ?>

    <!-- *** TOP BAR END *** -->

    <!-- *** NAVBAR ***
 _________________________________________________________ -->
<?php $this->load->View('inc/navbar.php') ?>
    <!-- /#navbar -->
    <!-- *** NAVBAR END *** -->
    <div id="all">
        <div id="content">
            <div class="container">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li>Ladies</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <!-- *** MENUS AND FILTERS ***
 _________________________________________________________ -->
                  
                   <?php $this ->load->view('inc/category_left.php') ?>
                   <?php $this->load->view('inc/brand.php') ?>
                  <?php $this->load->view('inc/color.php') ?>                    
                    <!-- *** MENUS AND FILTERS END *** -->
                    <!-- <div class="banner">
                        <a href="#">
                            <img src="<?php echo base_url(); ?>public/img/banner.jpg" alt="sales 2014" class="img-responsive">s
                        </a>
                    </div> -->
                </div>
                <div class="col-md-9">
                    <div class="box">
                        <h1>Ladies</h1>
                        <p>In our Ladies department we offer wide selection of the best products we have found and carefully selected worldwide.</p>
                    </div>

                    <div class="box info-bar">
                        <div class="row">
                            <div class="col-sm-12 col-md-4 products-showing">
                                Showing <strong>12</strong> of <strong>25</strong> products
                            </div>                                
                            <div class="col-sm-12 col-md-8  products-number-sort">
                                <div class="row">
                                    <form class="form-inline">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="products-number">
                                                <strong>Show</strong>  <a href="#​​​​>" class="btn btn-default btn-sm btn-primary">12</a>  <a href="#" class="btn btn-default btn-sm">24</a>  <a href="#" class="btn btn-default btn-sm">All</a> products
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="products-sort-by">
                                                <strong>Sort by</strong>
                                                <select name="sort-by" class="form-control">
                                                    <option>Price</option>
                                                    <option>Name</option>
                                                    <option>Sales first</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div> 
                        </div>
                    </div>
                   <!-- ** Product -->
                    <div id="userData"> 

                       <?php //$this->load->view('inc/products.php') ?>
                     
                    




                        <?php 
                            foreach ($getcategory as $row){ 
                        ?> 
                        <div class="col-md-4 col-sm-6">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="<?php echo site_url(); ?>home/detail/<?php echo $row['id'];?>">
                                                <img src="<?php echo base_url() ?>public/img/<?php echo $row['image']; ?>" alt="" class="img-responsive">
                                            </a>
                                        </div>

                                        <div class="back">
                                            <a href="<?php echo site_url(); ?>home/detail/<?php echo $row['id'];?>">
                                                <img src="<?php echo base_url() ?>public/img/<?php echo $row['image']; ?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>


                                <a href="<?php echo site_url(); ?>home/detail/<?php echo $row['id'];?>" class="invisible">
                                    <img src="<?php echo base_url() ?>public/img/product1.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3> <a href="<?php echo site_url(); ?>home/detail/<?php echo $row['id'];?>"><?php echo $row['name'] ?></a></h3>
                                    <p class="price">$ <?php echo $row['price'] ?></p>


                                    <p class="buttons">

                                        <a href="<?php echo site_url(); ?>home/detail/<?php echo $row['id'];?>" class="btn btn-default">View detail</a>

                                        <a  href="javascript:(0)" onclick="addtocart(<?php echo $row['id'] ?>)" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>

                                      <div hidden id="for-add-cart-<?php echo $row['id'] ?>">
                                          <p id="name"><?php echo $row['name'] ?></p>
                                          <p id="price"><?php echo $row['price'] ?></p>
                                          <p id="img"><?php echo $row['image'] ?></p>
                                          <p id="des"><?php echo $row['description'] ?></p>
                                      </div>


                                    </p>



                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->


                        </div>
                        

                     <?php } ?>


                    </div>
                    <!-- /.products  end-->
                    <div class="pages panel-body">
                        <p class="loadMore">
                            <a href="#" class="btn btn-primary btn-lg"><i class="fa fa-chevron-down"></i> Load more</a>
                        </p>
                        <!-- <ul class="pagination">
                            <li><a href="#">&laquo;</a>
                            </li>
                            <li class="active"><a href="#">1</a>
                            </li>
                            <li><a href="#">2</a>
                            </li>
                            <li><a href="#">3</a>
                            </li>
                            <li><a href="#">4</a>
                            </li>
                            <li><a href="#">5</a>
                            </li>
                            <li><a href="#">&raquo;</a>
                            </li>
                        </ul> -->
                        <ul class="pagination">
                            <?php //echo $this->pagination->create_links(); ?>
                        </ul>
                    </div>


                </div>
                <!-- /.col-md-9 -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->

        <!-- *** FOOTER ***
 _________________________________________________________ -->
        <?php $this->load->View('inc/footer.php') ?>
        <!-- /#footer -->

        <!-- *** FOOTER END *** -->
        <!-- *** COPYRIGHT ***
 _________________________________________________________ -->
        <?php $this->load->View('inc/copyright.php') ?>
        <!-- *** COPYRIGHT END *** -->
    </div>
    <!-- /#all -->

    <!-- *** SCRIPTS TO INCLUDE ***
 _________________________________________________________ -->
   <?php $this->load->View('inc/footer_styl.php') ?>





       <script type="text/javascript">
            function addtocart(p_id)
            {                
                var name  = $('#for-add-cart-'+ p_id + '>#name').html();
                var price = $('#for-add-cart-'+ p_id + '>#price').html();
                var image = $('#for-add-cart-'+ p_id + '>#img').html();
               
                    $.ajax({
                            type: "POST",
                            url: "<?php echo site_url('my_cart/add');?>",
                            data: "id=" + p_id + "&image=" + image + "&name=" + name + "&price=" + price,
                            success: function (response) {
                               $(".cartcount").text(response);
                            }
                        });
            }
          function opencart()
          {
              $.ajax({
                          type: "POST",
                          url: "<?php echo site_url('my_cart/opencart');?>",
                          data: "",
                          success: function (response) {
                          $(".displaycontent").html(response);
                          }
                      });
          }
        </script>


</body>

</html>