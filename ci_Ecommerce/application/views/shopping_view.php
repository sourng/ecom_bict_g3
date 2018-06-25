<html>
<head>
<title>Codeigniter cart class</title>
<link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/style.css">

<script type="text/javascript">
// To conform clear all data in cart.
function clear_cart() {
var result = confirm('Are you sure want to clear all bookings?');

if (result) {
window.location = "<?php echo base_url(); ?>index.php/shopping/remove/all";
} else {
return false; // cancel button
}
}
</script>
</head>
	<body>
		<a href="<?php echo base_url() ?>shopping/cart">Cart</a>
		<div id='content'>
		

		<div id="products_e" align="center">

		<h2 id="head" align="center">Products</h2>
		<?php

		// "$products" send from "shopping" controller,its stores all product which available in database.
		foreach ($products as $product) {
		$id = $product['id'];
		$name = $product['name'];
		$description = $product['description'];
		$price = $product['price'];
		?>

		<div id='product_div'>
		<div id='image_div'>
		<img src="<?php echo base_url() . $product['image'] ?>"/>
		</div>
		<div id='info_product'>
		<div id='name'><?php echo $name; ?></div>
		<div id='desc'> <?php echo $description; ?></div>
		<div id='rs'><b>Price</b>:<big>
		$<?php echo $price; ?></big></div>
		<?php



		

		// Create form and send values in 'shopping/add' function.
		echo form_open('shopping/add');
		echo form_hidden('id', $id);
		echo form_hidden('name', $name);
		echo form_hidden('price', $price);
		?> </div>
		<div id='add_button'>
		<?php
		$btn = array(
		'class' => 'fg-button teal',
		'value' => 'Add to Cart',
		'name' => 'action'
		);

		// Submit Button.
		echo form_submit($btn);
		echo form_close();
		?>
		</div>
		</div>

		<?php } ?>

		</div>
		</div>
	</body>
</html>