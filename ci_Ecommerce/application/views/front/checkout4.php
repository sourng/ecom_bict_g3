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
                        <li>Checkout - Order review</li>
                    </ul>
                </div>

                <div class="col-md-9" id="checkout">

                    <div class="box">
                        <form method="post" action="<?php echo site_url(); ?>home/save_order">
                            <input type="hidden" name="f_name" value="<?php echo @$_POST['f_name'] ?>">
                            <input type="hidden" name="l_name" value="<?php echo @$_POST['l_name'] ?>">
                            <input type="hidden" name="name" value="<?php echo @$_POST['name'] ?>">
                            <input type="hidden" name="phone" value="<?php echo @$_POST['phone'] ?>">
                            <input type="hidden" name="email" value="<?php echo @$_POST['email'] ?>">
                            


                            <h1>Checkout - Order review</h1>

                            <ul class="nav nav-pills nav-justified">
                                <li><a href="<?php echo site_url(); ?>home/checkout1"><i class="fa fa-map-marker"></i><br>Address</a>
                                </li>
                                <li><a href="<?php echo site_url(); ?>home/checkout2"><i class="fa fa-truck"></i><br>Delivery Method</a>
                                </li>
                                <li><a href="<?php echo site_url(); ?>home/checkout3"><i class="fa fa-money"></i><br>Payment Method</a>
                                </li>
                                <li class="active"><a href="#"><i class="fa fa-eye"></i><br>Order Review</a>
                                </li>
                            </ul>

                            <div class="content">
                                <div class="box">
                                <p class="text-muted">You currently have 
                                    <?php echo count($this->cart->contents());?> item(s) in your cart.</p>
                                <div class="table-responsive">
                                    <table class="table">
                                    

                                        <thead>
                                        <tr>
                                            <th colspan="2">Product</th>
                                            <th>Quantity</th>
                                            <th colspan="" rowspan="" headers="" scope=""></th>
                                            <th style="width: 120px;" >Unit price</th>
                                            <!-- <th>Discount</th> -->
                                            <th style="width: 180px;" colspan="2">Total</th>
                                        </tr>
                                    </thead>

                                        <tbody>
                                        <?php 
                  if(isset($cart) && is_array($cart) && count($cart)){
                  $i=1;
                  foreach ($cart as $data) { 
                    // $cart as $item
                  ?>                      
                    <tr class="item first rowid<?php echo $data['rowid'] ?>">
                    <td class="thumb">
                     <img style="height: 34px;" src="<?php echo base_url(); ?>public/img/<?php echo $data['image']; ?>" alt="<?php echo $data['id'];?>">
                  </td>
                    <td style="width: 350px;" class="name"><?php echo $data['name']; ?></td>  
                                               <td class="qnt-count" width="60">
                    <input onchange="javascript:updateproduct('<?php echo $data['rowid'] ?>')" class="quantity qty<?php echo $data['rowid'] ?> form-control" type="number" min="1" value="<?php echo $data['qty'] ?>">                    
                  </td>
                  <td><span class="Update btn btn-info" onclick="javascript:updateproduct('<?php echo $data['rowid'] ?>')">Update</span></td>
                                                <td  class="price">$ <span class="price<?php echo $data['rowid'] ?>"><?php echo $data['price'] ?></span></td>
                                                <td>$0.00 Discount</td>
                                                <td style="width: 120px;" class="total">$ <span class="subtotal subtotal<?php echo $data['rowid'] ?>"><?php echo $data['subtotal'] ?></span></td>
                                                <td class="delete"><i class="icon-delete btn btn-danger" onclick="javascript:deleteproduct('<?php echo $data['rowid'] ?>')"><i class="fa fa-trash-o"></i></i></td>
                                            </tr>


<?php
                  $i++;
                    } }
                ?>

                                          
                                        </tbody>
                                       <!--  <tfoot>
                                            <tr>
                                                <th colspan="5">Total</th>
                                                <th>$446.00</th>
                                            </tr>
                                        </tfoot> -->
                                         <tfoot>
                                        <tr>
                                            <th colspan="5">Total</th>
                                            <th colspan="2">$<span class="grandtotal">  
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
                                    </tfoot>
                                    </table>

                                </div>
                                <!-- /.table-responsive -->

                                </div>
                                <!-- /. Box -->
                            </div>
                            <!-- /.content -->

                             <div class="box-footer">
                                <div class="pull-left">
                                    <a href="<?php echo site_url(); ?>" class="btn btn-default"><i class="fa fa-chevron-left"></i> Continue shopping</a>
                                </div>
                                <div class="pull-right">
                                  <button type="button" class="btn btn-warning"onclick="javascript:deleteproduct('all')">Clear Cart</button>
                                    <!-- <a class="btn btn-default" class="Update" onclick="javascript:updateproduct('<?php echo $data['rowid'] ?>')"><i class="fa fa-refresh"></i> Update basket</a> -->
                                    <button type="submit" class="btn btn-primary">Proceed to checkout <i class="fa fa-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                        </form>

<script type="text/javascript">
                    function deleteproduct(rowid)
                    {
                    var answer = confirm ("Are you sure you want to delete?");
                    if (answer)
                    {
                            $.ajax({
                                    type: "POST",
                                    url: "<?php echo site_url('my_cart/remove');?>",
                                    data: "rowid="+rowid,
                                    success: function (response) {
                                        $(".rowid"+rowid).remove(".rowid"+rowid); 
                                        $(".cartcount").text(response);  
                                        var total = 0;
                                        $('.subtotal').each(function(){
                                            total += parseInt($(this).text());
                                            $('.grandtotal').text(total);
                                        });              
                                    }
                                });
                          }
                    }
                    var total = 0;
                    $('.subtotal').each(function(){
                        total += parseInt($(this).text());
                        $('.grandtotal').text(total);
                    });
                    function updateproduct(rowid)
                    {

                    var qty = $('.qty'+rowid).val();
                    var price = $('.price'+rowid).text();
                    var subtotal = $('.subtotal'+rowid).text();
                     // alert("Hello " + qty);
                        $.ajax({
                                type: "POST",
                                url: "<?php echo site_url('my_cart/update_cart');?>",
                                data: "rowid="+rowid+"&qty="+qty+"&price="+price+"&subtotal="+subtotal,
                                success: function (response) {
                                        $('.subtotal'+rowid).text(response);
                                        var total = 0;
                                        $('.subtotal').each(function(){
                                            total += parseInt($(this).text());
                                            $('.grandtotal').text(total);
                                        });     
                                }
                            });
                    }
                    </script>

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