<?php
//check user has login or not
if($this->session->userdata('name')){
    ?>
<?php
//$system_name        =	$this->db->get_where('settings' , array('type'=>'system_name'))->row()->description;
//$system_title       =	$this->db->get_where('settings' , array('type'=>'system_title'))->row()->description;
//$text_align         =	$this->db->get_where('settings' , array('type'=>'text_align'))->row()->description;
//$account_type       =	$this->session->userdata('login_type');
//$skin_colour        =   $this->db->get_where('settings' , array('type'=>'skin_colour'))->row()->description;
//$active_sms_service =   $this->db->get_where('settings' , array('type'=>'active_sms_service'))->row()->description;

$system_name        =	"Hotel Admin";
$system_title       =	"Hotel Admin Title";
//$text_align         =	$this->db->get_where('settings' , array('type'=>'text_align'))->row()->description;
$account_type       =	"admin";
//$skin_colour        =   $this->db->get_where('settings' , array('type'=>'skin_colour'))->row()->description;
//$active_sms_service =   $this->db->get_where('settings' , array('type'=>'active_sms_service'))->row()->description;

?>

<?php include_once ('v_header.php'); ?>
<!-- Start: Main -->
<div id="main">
    <!-- Start: Header -->
        <?php
        include_once ('includes/v_header_nav.php');
        ?>
    <!-- End: Header -->
    <!-- Start: Sidebar -->
    <aside id="sidebar_left" class="nano nano-primary">
        <?php include_once('includes/left_menu.php'); ?>
    </aside>
    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">

        <!-- Start: Topbar-Dropdown -->
        <?php include_once('includes/topbar_dropdown.php'); ?>
        <!-- End: Topbar-Dropdown -->
        <!-- Start: Topbar Brodcrum -->
    <?php include_once('includes/topbar.php');  ?>
        <!-- End: Topbar -->

        <!-- Begin: Content  Main Home-->
        <section id="content" class="animated fadeIn">
<!--            Get all Data From Views-->
            <?php $this->load->view($body);?>

        </section>
        <!-- End: Content -->
    </section>
    <!-- End: Content-Wrapper -->

    <!-- Start: Right Sidebar -->
 <?php  include_once('includes/right_sidebar.php'); ?>
    <!-- End: Right Sidebar -->

</div>
<!-- End: Main -->

<?php include_once ('v_footer.php'); ?>

    <?php
    if($this->session->userdata('message')){
        ?>
        <!--<script>
            //$(document).ready(function(){
                setTimeout(hideNotificationMessage,3000);
                function hideNotificationMessage()
                    $("#notification_message").trigger("click");
            //});
        </script>-->
    <?php }?>
    <?php
}else{
    redirect(base_url().'backend/login', 'location', 302);
}
?>
