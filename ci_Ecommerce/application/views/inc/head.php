<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Obaju e-commerce template">
    <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
    <meta name="keywords" content="">
    <title>
        Obaju : e-commerce template
    </title>
    <meta name="keywords" content="">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <!-- styles -->
    <link href="<?php echo base_url(); ?>public/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/owl.theme.css" rel="stylesheet">
    <!-- theme stylesheet -->
    <link href="<?php echo base_url(); ?>public/css/style.default.css" rel="stylesheet" id="theme-stylesheet">
    <!-- your stylesheet with modifications -->
    <link href="<?php echo base_url(); ?>public/css/custom.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>public/js/respond.min.js"></script>
    <link rel="shortcut icon" href="favicon.png">



    <link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700' rel='stylesheet' type='text/css'>
   <!--  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>public/css/style.css">
 -->

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