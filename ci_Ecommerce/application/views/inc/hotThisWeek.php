                     <?php 
                            foreach ($get_products as $row){ 
                        ?>  
                        <!-- /.col-md-4 -->                       
                        <div class="item">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                             <a href="<?php echo site_url(); ?>home/detail<?php echo $row['id'] ?>">
                                                <img src="<?php echo base_url(); ?>public/img/<?php echo $row['image'] ?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                             <a href="<?php echo site_url(); ?>home/detail<?php echo $row['id'] ?>">
                                                <img src="<?php echo base_url(); ?>public/img/<?php echo $row['image'] ?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>                                 
                                <a href="<?php echo site_url(); ?>home/detail<?php echo $row['id'] ?>" class="invisible">
                                    <img src="<?php echo base_url(); ?>public/img/product3.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="<?php echo site_url(); ?>home/detail/<?php echo $row['id'];?>"><?php echo $row['name']; ?></a></h3>
                                    <p class="price">$ <del><?php echo $row['price']; ?></del> $ <?php echo $row['price']-($row['price']*$row['discount']/100) ?></p>

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

                    <?php }  ?>

