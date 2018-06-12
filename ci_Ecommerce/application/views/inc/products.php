
                        <div class="col-md-4 col-sm-6">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="">
                                                <img src="<?php echo base_url(); ?>public/img/<?php echo $get_products[0]['image'];?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                           <a href="">
                                                <img src="<?php echo base_url(); ?>public/img/<?php echo $getproducts[0]['image2'];  ?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="" class="invisible">
                                    <img src="" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href=""><?php echo $get_products[0]['name']; ?></a></h3>
                                    <p class="price"><del><?php echo $get_products[0]['price'] ?></del> <?php echo $get_products[0]['discount']; ?></p>
                                    <p class="buttons">
                                        <a href="" class="btn btn-default">View detail</a>
                                        <a href="<?php echo site_url(); ?>home/basket" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </p>
                                </div>
                                <!-- /.text -->

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

                                <div class="ribbon gift">
                                    <div class="theribbon">GIFT</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <!-- /.ribbon -->
                            </div>
                            <!-- /.product -->
                        </div>
                        <!-- /.col-md-4 -->
                   