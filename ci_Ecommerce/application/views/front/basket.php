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
                        <li>Shopping cart</li>
                    </ul>
                </div>

                <div class="col-md-9" id="basket">
                <div class="box">
                       <form method="post" action="<?php echo site_url(); ?>home/login"> 
                       
                    </li>
                            <!-- <h4>Shopping cart</h4> -->
                            <p class="text-muted">You currently have <?php echo count($this->cart->contents());  ?> item(s) in your cart.</p>
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
                    <input style="width: 64px;" onchange="javascript:updateproduct('<?php echo $data['rowid'] ?>')" class="quantity qty<?php echo $data['rowid'] ?> form-control" type="number" min="1" value="<?php echo $data['qty'] ?>">                    
                  </td>

                  <td><span class="Update btn btn-info" onclick="javascript:updateproduct('<?php echo $data['rowid'] ?>')">Update</span>
                  </td>

                  <td  class="price">$ <span class="price<?php echo $data['rowid'] ?>"><?php echo $data['price'] ?></span>
                  </td>
                    <!-- <td>$0.00</td> -->
                  <td style="width: 120px;" class="total">$ <span class="subtotal subtotal<?php echo $data['rowid'] ?>"><?php echo $data['subtotal'] ?></span>
                  </td>
                  <td class="delete"><i class="icon-delete btn btn-danger" onclick="javascript:deleteproduct('<?php echo $data['rowid'] ?>')"><i class="fa fa-trash-o"></i></i>
                  </td>
                </tr>

                <?php
                  $i++;
                    } }
                ?>


                                    </tbody>
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

                            <div class="box-footer">
                                <div class="pull-left">
                                    <a href="<?php echo site_url(); ?>" class="btn btn-default"><i class="fa fa-chevron-left"></i> Continue shopping</a>
                                </div>
                                <div class="pull-right">
                                  <button type="button" class="btn btn-warning"onclick="javascript:deleteproduct('all')">Clear Cart</button>
                                   
                                    <button type="submit" class="btn btn-primary"  data-toggle="modal">Proceed to checkout <i class="fa fa-chevron-right"></i>       
                                             
                                         </button>

                                </div>
                            </div>

                        </form>

                    </div>
                    <!-- /.box -->

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


                    <div class="row same-height-row">
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


                  <!--   <div class="box">
                        <div class="box-header">
                            <h4>Coupon code</h4>
                        </div>
                        <p class="text-muted">If you have a coupon code, please enter it in the box below.</p>
                        <form>
                            <div class="input-group">

                                <input type="text" class="form-control">

                                <span class="input-group-btn">

                              <button class="btn btn-primary" type="button"><i class="fa fa-gift"></i></button>

                                </span>
                            </div>
                            // /input-group 
                        </form>
                    </div> -->

                </div>

                    <?php 
                        foreach ($get_products as $row) {
                    ?>
                      <!--   <div class="col-md-3 col-sm-6">
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
                            / /.product 
                        </div> -->
                    <?php 
                    }
                    ?>
                    
                            <!-- /.product -->
                        </div>

                    </div>


                </div>
                <!-- /.col-md-9 -->

            
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