                       <?php 
                            foreach ($getcategory as $row){ 
                        ?> 
                        <div class="col-md-4 col-sm-6">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="<?php echo site_url(); ?>home/detail/<?php echo $row['category_id'];?>">
                                                <img src="<?php echo base_url() ?>public/img/<?php echo $row['image']; ?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="<?php echo site_url(); ?>home/detail/<?php echo $row['category_id'];?>">
                                                <img src="<?php echo base_url() ?>public/img/<?php echo $row['image']; ?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="<?php echo site_url(); ?>home/detail/<?php echo $row['category_id'];?>" class="invisible">
                                    <img src="<?php echo base_url() ?>public/img/product1.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3> <a href="<?php echo site_url(); ?>home/detail/<?php echo $row['category_id'];?>">Fur coat with very but very very long name</a></h3>
                                    <p class="price">$ <?php echo $row['price']; ?></p>
                                    <p class="buttons">
                                        <a href="<?php echo site_url(); ?>home/detail/<?php echo $row['category_id'];?>" class="btn btn-default">View detail</a>
                                        <a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </p>
                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>
                        <?php } ?>