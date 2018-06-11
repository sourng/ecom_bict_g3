<?php $this->load->view('inc/head.php') ?>

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
                            <img src="<?php echo base_url(); ?>public/img/banner.jpg" alt="sales 2014" class="img-responsive">
                        </a>
                    </div>
                </div>

                <div class="col-md-9">

                    <div class="row" id="productMain">
                        <div class="col-sm-6">
                            <div id="mainImage">
                                <img src="<?php echo base_url(); ?>public/img/<?php echo $get_products[0]['image'] ?> alt="" class="img-responsive">
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
                                <h1 class="text-center"><?php echo $get_products[0]['name']; ?></h1>
                                <p class="goToDescription"><a href="#details" class="scroll-to">Scroll to product details, material & care and sizing</a>
                                </p>
                                <p class="price"><?php echo $get_products[0]['price']; ?></p>

                                <p class="text-center buttons">
                                    <a href="<?php echo site_url(); ?>home/basket" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to cart</a> 
                                    <a href="basket.html" class="btn btn-default"><i class="fa fa-heart"></i> Add to wishlist</a>
                                </p>


                            </div>
                        
                            <div class="row" id="thumbs">
                                
                                <div class="col-xs-4">
                                    <a href="<?php echo base_url(); ?>public/img/<?php echo $get_products[0]['image'] ;?>" class="thumb">
                                        <img src="<?php echo base_url(); ?>public/img/<?php echo $get_products[0]['image'] ?>" alt="" class="img-responsive">
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
                            <p>White lace top, woven, has a round neck, short sleeves, has knitted lining attached</p>
                            <h4>Material & care</h4>
                            <ul>
                                <li>Polyester</li>
                                <li>Machine wash</li>
                            </ul>
                            <h4>Size & Fit</h4>
                            <ul>
                                <li>Regular fit</li>
                                <li>The model (height 5'8" and chest 33") is wearing a size S</li>
                            </ul>

                            <blockquote>
                                <p><em>Define style this season with Armani's new range of trendy tops, crafted with intricate details. Create a chic statement look by teaming this lace number with skinny jeans and pumps.</em>
                                </p>
                            </blockquote>

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

                  
                          <?php foreach ($get_products as $row) {
    
                         ?>  
                           <div class="row same-height-row">

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
                                    <h3>Fur coat</h3>
                                    <p class="price">$143</p>

                                </div>
                            </div>
                            <!-- /.product -->
                        </div>
                    
                    </div>
                    <?php } ?>

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





</body>

</html>