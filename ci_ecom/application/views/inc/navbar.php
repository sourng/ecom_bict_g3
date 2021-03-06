﻿    <div class="navbar navbar-default yamm" role="navigation" id="navbar">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand home" href="<?php echo site_url(); ?>" data-animate-hover="bounce">
                    <img src="<?php echo base_url(); ?>public/img/logo.png" alt="Obaju logo" class="hidden-xs">
                    <img src="<?php echo base_url(); ?>public/img/logo-small.png" alt="Obaju logo" class="visible-xs"><span class="sr-only">Obaju - go to homepage</span>
                </a>
                <div class="navbar-buttons">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                    <a class="btn btn-default navbar-toggle" href="basket.html">
                        <i class="fa fa-shopping-cart"></i><span class="hidden-xs">3 items in cart</span>
                    </a>
                </div>
            </div>
            <!--/.navbar-header -->

            <div class="navbar-collapse collapse" id="navigation">

                <ul class="nav navbar-nav navbar-left">
                    <li class="active"><a href="<?php echo site_url(); ?>home">Home</a>
                    </li>
                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Men <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5>Clothing</h5>
                                            <ul>
    											 <li><a href="<?php echo site_url(); ?>home/category">T-shirts</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Shoes</h5>
                                            <ul>
                                                <li><a href="<?php echo site_url(); ?>home/category">Trainers</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Accessories</h5>
                                            <ul>
                                                <li><a href="<?php echo site_url(); ?>home/category">Trainers</a> </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Featured</h5>
                                            <ul>
                                                <li><a href="<?php echo site_url(); ?>home/category">Trainers</a></li>
                                            </ul>
                                            <h5>Looks and trends</h5>
                                            <ul>
                                                <li><a href="<?php echo site_url(); ?>home/category">Trainers</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.yamm-content -->
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Ladies <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5>Clothing</h5>
                                            <ul>
                                                <li><a href="<?php echo site_url(); ?>home/category">T-shirts</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Shoes</h5>
                                            <ul>
                                                <li><a href="<?php echo site_url(); ?>home/category">Trainers</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Accessories</h5>
                                            <ul>
                                                <li><a href="<?php echo site_url(); ?>home/category">Trainers</a></li>
                                            </ul>
                                            <h5>Looks and trends</h5>
                                            <ul>
                                                <li><a href="<?php echo site_url(); ?>home/category">Trainers</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="banner">
                                                <a href="#">
                                                    <img src="<?php echo base_url(); ?>public/img/banner.jpg" class="img img-responsive" alt="">
                                                </a>
                                            </div>
                                            <div class="banner">
                                                <a href="#">
                                                    <img src="<?php echo base_url(); ?>public/img/banner2.jpg" class="img img-responsive" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.yamm-content -->
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Template <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5>Shop</h5>
                                            <ul>
                                                <li><a href="<?php echo site_url(); ?>">Homepage</a></li>
                                                <li><a href="<?php echo site_url(); ?>home/category">Category - sidebar left</a></li>
                                              <!--   <li><a href="<?php echo site_url(); ?>home/category_right">Category - sidebar right</a></li>
                                                <li><a href="<?php echo site_url(); ?>home/category_full">Category - full width</a></li> -->
                                                <li><a href="<?php echo site_url(); ?>home/detail">Product detail</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>User</h5>
                                            <ul>
                                                <li><a href="<?php echo site_url(); ?>home/register">Register / login</a></li>
                                                <li><a href="<?php echo site_url(); ?>home/customer_orders">Orders history</a></li>
                                                <li><a href="<?php echo site_url(); ?>home/customer_orders">Order history detail</a></li>
                                                <li><a href="<?php echo site_url(); ?>home/customer_wishlist">Wishlist</a></li>
                                                <li><a href="<?php site_url(); ?>home/customer_account">Customer account / change password</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Order process</h5>
                                            <ul>
                                                <li><a href="<?php echo site_url(); ?>home/basket">Shopping cart</a></li>
                                                <li><a href="<?php echo site_url(); ?>home/checkout1">Checkout - step 1</a></li>
                                                <li><a href="<?php echo site_url(); ?>home/checkout2">Checkout - step 2</a></li>
                                                <li><a href="<?php echo site_url(); ?>home/checkout3">Checkout - step 3</a></li>
                                                <li><a href="<?php echo site_url(); ?>home/checkout4">Checkout - step 4</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Pages and blog</h5>
                                            <ul>
                                                <li><a href="<?php echo site_url(); ?>home/blog">Blog listing</a></li>
                                                <li><a href="<?php echo site_url(); ?>home/post">Blog Post</a></li>
                                                <li><a href="<?php echo site_url(); ?>home/faq">FAQ</a></li>
                                                <li><a href="<?php echo site_url(); ?>home/text">Text page</a></li>
                                                <!-- <li><a href="404.html">404 page</a></li> -->
                                                <li><a href="<?php echo site_url(); ?>home/contact">Contact</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.yamm-content -->
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
            <!--/.nav-collapse -->

            <div class="navbar-buttons">
                <div class="navbar-collapse collapse right" id="basket-overview">
                    <a href="<?php echo site_url(); ?>home/basket" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm">3 items in cart</span></a>
                </div>
                <!--/.nav-collapse -->

                <div class="navbar-collapse collapse right" id="search-not-mobile">
                    <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
            <div class="collapse clearfix" id="search">
                <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn">
			<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>

		    </span>
                    </div>
                </form>

            </div>
            <!--/.nav-collapse -->

        </div>
        <!-- /.container -->
    </div>

