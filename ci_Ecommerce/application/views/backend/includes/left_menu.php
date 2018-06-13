<div class="nano-content">

    <!-- Start: Sidebar Header -->

    <header class="sidebar-header">
        <div class="user-menu">
            <div class="row text-center mbn">
                <div class="col-xs-4">
                    <a href="dashboard.html" class="text-primary" data-toggle="tooltip" data-placement="top" title="Dashboard">
                        <span class="glyphicons glyphicons-home"></span>
                    </a>
                </div>
                <div class="col-xs-4">
                    <a href="pages_messages.html" class="text-info" data-toggle="tooltip" data-placement="top" title="Messages">
                        <span class="glyphicons glyphicons-inbox"></span>
                    </a>
                </div>
                <div class="col-xs-4">
                    <a href="pages_profile.html" class="text-alert" data-toggle="tooltip" data-placement="top" title="Tasks">
                        <span class="glyphicons glyphicons-bell"></span>
                    </a>
                </div>
                <div class="col-xs-4">
                    <a href="pages_timeline.html" class="text-system" data-toggle="tooltip" data-placement="top" title="Activity">
                        <span class="glyphicons glyphicons-imac"></span>
                    </a>
                </div>
                <div class="col-xs-4">
                    <a href="pages_profile.html" class="text-danger" data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicons glyphicons-settings"></span>
                    </a>

                </div>
                <div class="col-xs-4">
                    <a href="pages_gallery.html" class="text-warning" data-toggle="tooltip" data-placement="top" title="Cron Jobs">
                        <span class="glyphicons glyphicons-restart"></span>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- End: Sidebar Header -->



    <!-- sidebar menu -->

    <ul class="nav sidebar-menu">

        <li class="sidebar-label pt20">Menu <?php echo $page_name;  ?></li>



        <li class="active">

            <a href="<?php echo base_url(); ?>backend/dashboard">

                <span class="glyphicons glyphicons-home"></span>

                <span class="sidebar-title">Dashboard</span>

            </a>

        </li>

        <li>

            <a class="accordion-toggle" href="#">

                <span class="glyphicons glyphicons-fire"></span>

                <span class="sidebar-title">Room Management</span>

                <span class="caret"></span>

            </a>

            <ul class="nav sub-nav">             
                <li>
                    <a href="<?php echo site_url(); ?>backend/rooms/">
                        <span class="glyphicons glyphicons-show_big_thumbnails"></span> Room Lists </a>
                </li>
                <li>
                    <a href="<?php echo site_url(); ?>backend/rooms/promotions">
                        <span class="glyphicons glyphicons-sampler"></span> Room Promotion </a>
                </li>

                <li>
                    <a href="<?php echo site_url(); ?>backend/rooms/booked">
                        <span class="glyphicons glyphicons-sampler"></span> Room Booked </a>
                </li>

                <li>
                    <a href="<?php echo site_url(); ?>backend/rooms/canceled">
                        <span class="glyphicons glyphicons-sampler"></span> Room Cenceled </a>
                </li>

            </ul>

        </li>

        <li>

            <a class="nav" href="<?php echo site_url(); ?>backend/galleries/">

                <span class="glyphicons glyphicons-fire"></span>

                <span class="sidebar-title">Gallery</span>

                <span class=""></span>

            </a>

                 
         </li>

       

         

        <li>
            <a class="accordion-toggle" href="#">
                <span class="glyphicons glyphicons-cup"></span>
                <span class="sidebar-title">Report Management</span>
                <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
                <li>
                    <a href="<?php echo site_url(); ?>backend/rooms/booking-report">
                        <span class="glyphicons glyphicons-edit"></span> Booking Report </a>
                </li>
                <li>
                    <a href="<?php echo site_url(); ?>backend/rooms/cancel-report">
                        <span class="glyphicons glyphicons-calendar"></span> Canceled Report
                    </a>
                </li>
                <li>

                    <a href="<?php echo site_url(); ?>backend/rooms/confirmed-report">
                        <span class="glyphicons glyphicons-more_windows"></span> Confirmed Report </a>
                </li>
            </ul>
        </li>
      
        <li>
            <a class="accordion-toggle" href="#">
                <span class="glyphicons glyphicons-film"></span>
                <span class="sidebar-title">Menu Management</span>
                <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
                <li>
                    <a href="<?php echo site_url(); ?>backend/menus">
                        <span class="glyphicons glyphicons-playlist"></span>Main Menu</a>
                </li>
                <li>
                    <a href="<?php echo site_url(); ?>backend/menus/sub_menu">
                        <span class="glyphicons glyphicons-playlist"></span>Sub Menu</a>
                </li>

                <li>
                    <a href="<?php echo site_url(); ?>backend/menus/add">
                        <span class="glyphicons glyphicons-circle_plus"></span>Add New </a>
                </li>
            </ul>
        </li>
        <!--Systme Management-->
        <li class="sidebar-label pt20">Systme Management</li>
        <li>
            <a class="accordion-toggle" href="#">
                <span class="glyphicons glyphicons-shopping_cart"></span>
                <span class="sidebar-title">Manage Profiles</span>
                <span class="caret"></span>
            </a>

            <ul class="nav sub-nav">
                <li>
                    <a href="<?php echo site_url(); ?>backend/users/profile/<?php  echo $this->session->userdata('uid'); ?>">
                        <span class="glyphicons glyphicons-shopping_cart"></span> Change Profile <span class="label label-xs bg-primary">New</span></a>
                </li>
                <?php
                if( $this->session->userdata('gro_id')==1 ){
                    ?>

                    <li>

                        <a href="<?php echo site_url(); ?>backend/users/add">
                            <span class="glyphicons glyphicons-tags"></span> Add User </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url(); ?>backend/users/index">
                            <span class="glyphicons glyphicons-coins"></span> List User </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url(); ?>backend/users/lists">
                            <span class="glyphicons glyphicons-coins"></span> <?php  echo $this->session->userdata('group_name'); ?> </a>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </li>
        <li>
            <a href="<?php echo site_url(); ?>#">
                <span class="fa fa-envelope-o"></span>
                <span class="sidebar-title">Email Booking</span>
                <span class="sidebar-title-tray">
                                <span class="label label-xs bg-primary">New</span>
                            </span>
            </a>
        </li>

        <!-- sidebar resources -->
        <!-- sidebar progress bars -->
    </ul>
    <div class="sidebar-toggle-mini">
        <a href="#">

            <span class="fa fa-sign-out"></span>

        </a>

    </div>

</div>