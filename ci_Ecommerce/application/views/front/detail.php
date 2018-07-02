   
    <?php 
    $this->load->view('inc/head.php') ?>

    <body>
    <!-- *** TOPBAR ***
 _________________________________________________________ -->
    <?php $this->load->view('inc/topbar.php') ?>

    <!-- *** TOP BAR END *** -->

    <!-- *** NAVBAR ***
 _________________________________________________________ -->

    <?php $this->load->view('inc/navbar.php') ?>
    <!-- /#navbar -->

    <!-- *** NAVBAR END *** -->

    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li><a href="#">Ladies</a>
                        </li>
                        <li><a href="#">Tops</a>
                        </li>
                        <li>White Blouse Armani</li>
                    </ul>

                </div>

                <div class="col-md-3">
                    <!-- *** MENUS AND FILTERS ***
 _________________________________________________________ -->

                   <?php $this ->load->view('inc/category_left.php') ?>

                   <?php $this->load->view('inc/brand.php') ?>

                  <?php $this->load->view('inc/color.php') ?>
                    <!-- *** MENUS AND FILTERS END *** -->

                    <div class="banner">
                        <a href="#">
                            <img src="<?php echo base_url(); ?>public/img/<?php echo $get_products[0]['image'] ?>" alt="sales 2014" class="img-responsive">
                        </a>
                    </div>
                </div>

                <div class="col-md-9">

                    <div class="row" id="productMain">
                        <div class="col-sm-6">
                            <div id="mainImage">
                                <img style="width: 100%;" class="image<?php echo $get_products[0]['id'] ?>" rel="<?php echo $get_products[0]['image'] ?>" src="<?php echo base_url(); ?>public/img/<?php echo $get_products[0]['image'] ?>" alt="<?php echo $get_products[0]['id'] ?>">
                            </div>
                            <div class="ribbon sale">
                                <div class="theribbon">SALE</div>
                                <div class="ribbon-background"></div>
                            </div>
                            <!-- /.ribbon -->

                            <div class="ribbon new">
                                <div class="theribbon">NEW</div>
                                <div class="ribbon-background"></div>
                            </div>
                            <!-- /.ribbon -->

                        </div>
                        <div class="col-sm-6">
                            <div class="box">


                             <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="tile">
                                  <span class="tile-overlay"></span>
                                <div class="footer">

                                </div>
                              </div>
                            </div>

                                 <h2 class="name<?php echo $get_products[0]['id'] ?>" rel="<?php echo $get_products[0]['id'] ?>"><?php echo $get_products[0]['name'] ?>
                                 </h2>
                                <p class="goToDescription"><a href="#details" class="scroll-to">
                                    Scroll to product details, material & care and sizing</a>
                                </p>
                                <h2 class="price-label price<?php echo $get_products[0]['id'] ?>"rel="<?php echo $get_products[0]['price']-($get_products[0]['price']*$get_products[0]['discount']/100); ?>">USD <?php echo $get_products[0]['price']-($get_products[0]['price']*$get_products[0]['discount']/100); ?>
                                </h2>

                                <p class="text-center buttons">

                                    <button class="btn btn-primary" onclick="javascript:addtocart(<?php echo $get_products[0]['id'] ?>)"><i class="fa fa-heart">
                                     </i> Add to Cart
                                    </button>

                                    <a href="basket.html" class="btn btn-default"><i class="fa fa-heart"></i> Add to wishlist</a>
                                </p>

                            </div>
                            <div class="row" id="thumbs">
                                <div class="col-xs-4">
                                    <a href="<?php echo base_url(); ?>public/img/<?php echo $get_products[0]['image']; ?>" class="thumb">
                                        <img src="<?php echo base_url(); ?>public/img/<?php echo $get_products[0]['image2'] ?>" alt="" class="img-responsive">
                                    </a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="<?php echo base_url(); ?>public/img/<?php echo $get_products[0]['image2']; ?>" class="thumb">
                                        <img src="<?php echo base_url(); ?>public/img/<?php echo $get_products[0]['image2'] ?>" alt="" class="img-responsive">
                                    </a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="<?php echo base_url(); ?>public/img/<?php echo $get_products[0]['image3']; ?>" class="thumb">
                                        <img src="<?php echo base_url(); ?>public/img/<?php echo $get_products[0]['image3']; ?>" alt="" class="img-responsive">
                                    </a>
                                </div>
                                
                              
                            </div>
                       
                           
                        </div>

                    </div>


                    <div class="box" id="details">
                        <p>
                            <h4>Product details</h4>
                            <?php echo $get_products[0]['description'] ?>

                            <hr>
                            <div class="social">
                                <h4>Show it to your friends</h4>
                                <p>
                                    <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                                    <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                                </p>
                            </div>
                    </div>

                  
                
                    <div class="row same-height-row">
                        <?php 
                            foreach ($getOtherPro as $row) {
                        ?>  
                        <div class="col-md-3 col-sm-6">
                            <div class="product same-height">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                             <a href="<?php echo site_url('home/detail/'.$row['id']); ?>">
                                                <img src="<?php echo base_url(); ?>public/img/<?php echo $row['image'] ?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                             <a href="<?php echo site_url('home/detail/'.$row['id']); ?>">
                                                <img src="<?php echo base_url(); ?>public/img/<?php echo $row['image'] ?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>                                 
                                <a href="<?php echo site_url('home/detail/'.$row['id']); ?>" class="invisible">
                                    <img src="<?php echo base_url(); ?>public/img/product3.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="<?php echo site_url(); ?>home/detail/<?php echo $row['id'];?>"><?php echo $row['name']; ?></a></h3>
                                    <p class="price">$ <del><?php echo $row['price']; ?></del> $ <?php echo $row['price']-($row['price']*$row['discount']/100) ?></p>

                                </div>
                            </div>
                            <!-- /.product -->
                        </div>
                    <?php 
                        } 
                    ?>
                    </div>

                </div>
                <!-- /.col-md-9 -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->


        <!-- *** FOOTER ***
 _________________________________________________________ -->
 <?php $this->load->view('inc/footer.php') ?>

        <!-- /#footer -->

        <!-- *** FOOTER END *** -->

        <!-- *** COPYRIGHT ***
 _________________________________________________________ -->
       <?php $this->load->view('inc/copyright.php') ?>
        <!-- *** COPYRIGHT END *** -->

    </div>
    <!-- /#all -->

    <!-- *** SCRIPTS TO INCLUDE ***
 _________________________________________________________ -->

    <?php $this->load->view('inc/footer_styl.php') ?>



    <script type="text/javascript">
        function addtocart(p_id)
        {
            var price = $('.price'+p_id).attr('rel');
            var image = $('.image'+p_id).attr('rel');
            var name  = $('.name'+p_id).text();
            var id    = $('.name'+p_id).attr('rel');
                $.ajax({
                        type: "POST",
                        url: "<?php echo site_url('my_cart/add');?>",
                        data: "id="+id+"&image="+image+"&name="+name+"&price="+price,
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