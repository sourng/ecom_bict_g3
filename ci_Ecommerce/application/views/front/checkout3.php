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
                        <li>Checkout - Payment method</li>
                    </ul>
                </div>

                <div class="col-md-9" id="checkout">

                    <div class="box">
                        <form method="post" action="<?php echo base_url();?>home/checkout4">
                            <input type="hidden" name="f_name" value="<?php echo @$_POST['f_name'] ?>">
                            <input type="hidden" name="l_name" value="<?php echo @$_POST['l_name'] ?>">
                            <input type="hidden" name="name" value="<?php echo @$_POST['name'] ?>">
                            <input type="hidden" name="phone" value="<?php echo @$_POST['phone'] ?>">
                            <input type="hidden" name="email" value="<?php echo @$_POST['email'] ?>">


                            
                            <h1>Checkout - Payment method</h1>
                            <ul class="nav nav-pills nav-justified">
                                <li><a href="<?php echo base_url();?>home/checkout1"><i class="fa fa-map-marker"></i><br>Address</a>
                                </li>
                                <li><a href="<?php echo base_url();?>home/checkout2"><i class="fa fa-truck"></i><br>Delivery Method</a>
                                </li>
                                <li class="active"><a href="#"><i class="fa fa-money"></i><br>Payment Method</a>
                                </li>
                                <li class="disabled"><a href="<?php echo base_url();?>home/checkout4"><i class="fa fa-eye"></i><br>Order Review</a>
                                </li>
                            </ul>

                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="box payment-method">

                                            <h4>Paypal</h4>

                                            <p>We like it all.</p>

                                            <div class="box-footer text-center">

                                                <input type="radio" name="payment" value="payment1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="box payment-method">

                                            <h4>Payment gateway</h4>

                                            <p>VISA and Mastercard only.</p>

                                            <div class="box-footer text-center">

                                                <input type="radio" name="payment" value="payment2">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="box payment-method">

                                            <h4>Cash on delivery</h4>

                                            <p>You pay when you get it.</p>

                                            <div class="box-footer text-center">

                                                <input type="radio" name="payment" value="payment3">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row -->

                            </div>
                            <!-- /.content -->

                            <div class="box-footer">
                                <div class="pull-left">
                                    <a href="<?php echo site_url(); ?>home/basket" class="btn btn-default"><i class="fa fa-chevron-left"></i>Back to Shipping method</a>
                                </div>
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-primary">Continue to Order review<i class="fa fa-chevron-right"></i>
                                    </button>
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