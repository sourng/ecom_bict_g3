<!-- <?php
$grand_total = 0;
// Calculate grand total.
if ($cart = $this->cart->contents()):
foreach ($cart as $item):
$grand_total = $grand_total + $item['subtotal'];
endforeach;
endif;
?> -->

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
                        <li>Checkout - Address</li>
                    </ul>
                </div>

                <div class="col-md-9" id="checkout">

                    <div class="box">

                        


                        <!-- <form method="post" action="<?php echo base_url();?>home/checkout2"> -->
                        <form method="post" action="<?php echo site_url(); ?>home/login_validation"> 

                            <h1>LOG IN</h1>
                            <ul class="nav nav-pills nav-justified">
                                <li class="active"><a href="#"><i class="fa fa-map-marker"></i><br>Address</a>
                                </li>
                                <li class="disabled"><a href="#"><i class="fa fa-truck"></i><br>Delivery Method</a>
                                </li>
                                <li class="disabled"><a href="#"><i class="fa fa-money"></i><br>Payment Method</a>
                                </li>
                                <li class="disabled"><a href="#"><i class="fa fa-eye"></i><br>Order Review</a>
                                </li>
                            </ul>

                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="firstname">User Name</label>
                                            <!-- <input type="text" name="user" required="" class="form-control" id="firstname"​​ placeholder="User Name or Email"> -->
                                            
                                            <input type="text" name="username" class="form-control" placeholder="User Name or Email" />  
                     <span class="text-danger"><?php echo form_error('username'); ?></span>
                                            
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <!-- <label for="lastname">Pass Word</label>
                                            <input type="Password" name="l_name" required="" class="form-control" id="lastname"placeholder="Password">-->
 

                                            <label>Enter Password</label>  
                     <input type="password" name="password" class="form-control" placeholder="Enter Password" />  
                     <span class="text-danger"><?php echo form_error('password'); ?></span>  


                                        </div>
                                    </div>
                                </div>
                                <!-- /.row -->

                                
                            </div>
                            <?php  
                        echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>';  
                     ?>  

                            <div class="box-footer">
                                <div class="pull-left">
                                    <a href="<?php echo base_url();?>home/basket" class="btn btn-default"><i class="fa fa-chevron-left"></i>Back to basket</a>
                                </div>
                                <div class="pull-right">
                                    
                                        
                                    <button type="submit" class="btn btn-outline-primary">
                                    <a href="<?php echo base_url();?>home/checkout1"> Register <i class="fa fa-chevron-right"></i> </a>
                                    </button>
                                    
                                    <input type="submit" name="insert" value="Login" class="btn btn-info fa fa-chevron-right"/>
                     
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->


                </div>
                <!-- /.col-md-9 -->

                <div class="col-md-3">

                    <div class="box" id="order-summary">
                        <div class="box-header">
                            <h3>Order summary</h3>
                        </div>
                        <p class="text-muted">Shipping and additional costs are calculated based on the values you have entered.</p>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Order subtotal</td>
                                        <th colspan="2">$ <span class="grandtotal">  
                                                <?php $grand_total = 0;
                                                    // Calculate grand total.
                                                    if ($cart = $this->cart->contents()):
                                                    foreach ($cart as $data):
                                                    $grand_total = $grand_total + $data['subtotal'];
                                                    endforeach;
                                                    endif;
                                                    echo $grand_total;
                                                ?> </span></th>
                                    </tr>
                                    <tr>
                                       <!--  <td>Shipping and handling</td>
                                        <th>$10.00</th> -->
                                    </tr>
                                    <tr>
                                       <!--  <td>Tax</td>
                                        <th>$0.00</th> -->
                                    </tr>
                                    <tr class="total">
                                        <td>Total</td>
                                        <th colspan="2">$ <span class="grandtotal">  
                                                <?php $grand_total = 0;
                                                    // Calculate grand total.
                                                    if ($cart = $this->cart->contents()):
                                                    foreach ($cart as $data):
                                                    $grand_total = $grand_total + $data['subtotal'];
                                                    endforeach;
                                                    endif;
                                                    echo $grand_total;
                                                ?> </span></th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
                <!-- /.col-md-3 -->

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