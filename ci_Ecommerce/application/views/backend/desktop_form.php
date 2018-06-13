<?php
//check user has login or not
if($this->session->userdata('name')){
    ?>
<!DOCTYPE html>
<html>

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <title>AdminDesigns - SHARED ON THEMELOCK.COM</title>
    <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
    <meta name="description" content="AdminDesigns - SHARED ON THEMELOCK.COM">
    <meta name="author" content="AdminDesigns">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800'>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300">

    <!-- Admin Forms CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>backend/assets/admin-tools/admin-forms/css/admin-forms.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>backend/assets/skin/default_skin/css/theme.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>backend/assets/img/favicon.ico">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>

<body class="ecommerce-page">

<!-- Start: Theme Preview Pane -->
<div id="skin-toolbox" class="hidden">
    <div class="panel">
        <div class="panel-heading">
                <span class="panel-icon"><i class="fa fa-gear text-primary"></i>
                </span>
            <span class="panel-title"> Theme Options</span>
        </div>
        <div class="panel-body pn">

            <ul class="nav nav-list nav-list-sm pl15 pt10" role="tablist">
                <li class="active">
                    <a href="#toolbox-header" role="tab" data-toggle="tab">Navbar</a>
                </li>
                <li>
                    <a href="#toolbox-sidebar" role="tab" data-toggle="tab">Sidebar</a>
                </li>
                <li>
                    <a href="#toolbox-settings" role="tab" data-toggle="tab">Misc</a>
                </li>
            </ul>

            <div class="tab-content p20 ptn pb15">
                <div role="tabpanel" class="tab-pane active" id="toolbox-header">
                    <form id="toolbox-header-skin">
                        <h4 class="mv20">Header Skins</h4>

                        <div class="skin-toolbox-swatches">
                            <div class="checkbox-custom checkbox-disabled fill mb5">
                                <input type="radio" name="headerSkin" id="headerSkin8" checked value="bg-light">
                                <label for="headerSkin8">Light</label>
                            </div>
                            <div class="checkbox-custom fill checkbox-primary mb5">
                                <input type="radio" name="headerSkin" id="headerSkin1" value="bg-primary">
                                <label for="headerSkin1">Primary</label>
                            </div>
                            <div class="checkbox-custom fill checkbox-info mb5">
                                <input type="radio" name="headerSkin" id="headerSkin3" value="bg-info">
                                <label for="headerSkin3">Info</label>
                            </div>
                            <div class="checkbox-custom fill checkbox-warning mb5">
                                <input type="radio" name="headerSkin" id="headerSkin4" value="bg-warning">
                                <label for="headerSkin4">Warning</label>
                            </div>
                            <div class="checkbox-custom fill checkbox-danger mb5">
                                <input type="radio" name="headerSkin" id="headerSkin5" value="bg-danger">
                                <label for="headerSkin5">Danger</label>
                            </div>
                            <div class="checkbox-custom fill checkbox-alert mb5">
                                <input type="radio" name="headerSkin" id="headerSkin6" value="bg-alert">
                                <label for="headerSkin6">Alert</label>
                            </div>
                            <div class="checkbox-custom fill checkbox-system mb5">
                                <input type="radio" name="headerSkin" id="headerSkin7" value="bg-system">
                                <label for="headerSkin7">System</label>
                            </div>
                            <div class="checkbox-custom fill checkbox-success mb5">
                                <input type="radio" name="headerSkin" id="headerSkin2" value="bg-success">
                                <label for="headerSkin2">Success</label>
                            </div>
                            <div class="checkbox-custom fill mb5">
                                <input type="radio" name="headerSkin" id="headerSkin9" value="bg-dark">
                                <label for="headerSkin9">Dark</label>
                            </div>
                        </div>
                    </form>
                </div>
                <div role="tabpanel" class="tab-pane" id="toolbox-sidebar">
                    <form id="toolbox-sidebar-skin">

                        <h4 class="mv20">Sidebar Skins</h4>
                        <div class="skin-toolbox-swatches">
                            <div class="checkbox-custom fill mb5">
                                <input type="radio" name="sidebarSkin" checked id="sidebarSkin3" value="">
                                <label for="sidebarSkin3">Dark</label>
                            </div>
                            <div class="checkbox-custom fill checkbox-disabled mb5">
                                <input type="radio" name="sidebarSkin" id="sidebarSkin1" value="sidebar-light">
                                <label for="sidebarSkin1">Light</label>
                            </div>
                            <div class="checkbox-custom fill checkbox-light mb5">
                                <input type="radio" name="sidebarSkin" id="sidebarSkin2" value="sidebar-light light">
                                <label for="sidebarSkin2">Lighter</label>
                            </div>

                        </div>

                    </form>
                </div>
                <div role="tabpanel" class="tab-pane" id="toolbox-settings">
                    <form id="toolbox-settings-misc">
                        <h4 class="mv20 mtn">Layout Options</h4>
                        <div class="form-group">
                            <div class="checkbox-custom fill mb5">
                                <input type="checkbox" checked="" id="header-option">
                                <label for="header-option">Fixed Header</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox-custom fill mb5">
                                <input type="checkbox" id="sidebar-option">
                                <label for="sidebar-option">Fixed Sidebar</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox-custom fill mb5">
                                <input type="checkbox" id="breadcrumb-option">
                                <label for="breadcrumb-option">Fixed Breadcrumbs</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox-custom fill mb5">
                                <input type="checkbox" id="breadcrumb-hidden">
                                <label for="breadcrumb-hidden">Hide Breadcrumbs</label>
                            </div>
                        </div>
                        <h4 class="mv20">Layout Options</h4>
                        <div class="form-group">
                            <div class="radio-custom mb5">
                                <input type="radio" id="fullwidth-option" checked name="layout-option">
                                <label for="fullwidth-option">Fullwidth Layout</label>
                            </div>
                        </div>
                        <div class="form-group mb20">
                            <div class="radio-custom radio-disabled mb5">
                                <input type="radio" id="boxed-option" name="layout-option" disabled>
                                <label for="boxed-option">Boxed Layout <b class="text-muted">(Coming Soon)</b>
                                </label>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <div class="form-group mn br-t p15">
                <a href="#" id="clearLocalStorage" class="btn btn-primary btn-block pb10 pt10">Clear LocalStorage</a>
            </div>

        </div>
    </div>
</div>
<!-- End: Theme Preview Pane -->

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

<!-- BEGIN: PAGE SCRIPTS -->


<style>
    #message-table > tbody > tr.highlight > td {
        background-color: #FFFEF0;
    }
</style>

<!-- jQuery -->
<script type="text/javascript" src="<?php echo base_url(); ?>backend/vendor/jquery/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>backend/vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

<!-- Bootstrap -->
<script type="text/javascript" src="<?php echo base_url(); ?>backend/assets/js/bootstrap/bootstrap.min.js"></script>

<!-- FileUpload JS -->
<script type="text/javascript" src="<?php echo base_url(); ?>backend/vendor/plugins/fileupload/fileupload.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>backend/assets/js/bootstrap/holder.min.js"></script>

<!-- Tagmanager JS -->
<script type="text/javascript" src="<?php echo base_url(); ?>backend/vendor/plugins/tagsinput/tagsinput.min.js"></script>

<!-- Theme Javascript -->
<script type="text/javascript" src="<?php echo base_url(); ?>backend/assets/js/utility/utility.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>backend/assets/js/main.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>backend/assets/js/demo.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {

        "use strict";

        // Init Theme Core
        Core.init();

        // Init Theme Core
        Demo.init();

        // grant file-upload preview onclick functionality
        $('.fileupload-preview').on('click', function() {
            $('.btn-file > input').click();
        });

        // select dropdowns - placeholder like creation
        var selectList = $('.admin-form select');
        selectList.each(function(i, e) {
            $(e).on('change', function() {
                if ($(e).val() == "0") $(e).addClass("empty");
                else $(e).removeClass("empty")
            });
        });
        selectList.each(function(i, e) {
            $(e).change();
        });

        // Init tagsinput plugin
        $("input#tagsinput").tagsinput({
            tagClass: function(item) {
                return 'label bg-primary light';
            }
        });

    });
</script>
<!-- END: PAGE SCRIPTS -->

</body>

</html>
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
