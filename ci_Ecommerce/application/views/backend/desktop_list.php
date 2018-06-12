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

<!DOCTYPE html>
<html>

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <title><?php echo $page_title; ?></title>
    <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
    <meta name="description" content="AdminDesigns - SHARED ON THEMELOCK.COM">
    <meta name="author" content="AdminDesigns">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800'>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300">

    <!-- Datatables CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>backend/vendor/plugins/datatables/media/css/dataTables.bootstrap.css">

    <!-- Datatables Editor CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>backend/vendor/plugins/datatables/extensions/Editor/css/dataTables.editor.css">

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

<style>

    /*demo styles*/
    body {
        min-height: 700px;
    }
    .custom-nav-animation li {
        display: none;
    }
    .custom-nav-animation li.animated {
        display: block;
    }

    /* nav fixed settings */
    ul.tray-nav.affix {
        width: 319px;
        top: 80px;
    }
</style>

<!-- BEGIN: PAGE SCRIPTS -->

<!-- jQuery -->
<script type="text/javascript" src="<?php echo base_url(); ?>backend/vendor/jquery/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>backend/vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

<!-- Bootstrap -->
<script type="text/javascript" src="<?php echo base_url(); ?>backend/assets/js/bootstrap/bootstrap.min.js"></script>

<!-- Datatables -->
<script type="text/javascript" src="<?php echo base_url(); ?>backend/vendor/plugins/datatables/media/js/jquery.dataTables.js"></script>

<!-- Datatables Tabletools addon -->
<script type="text/javascript" src="<?php echo base_url(); ?>backend/vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>

<!-- Datatables Editor addon - READ LICENSING NOT MIT  -->
<script type="text/javascript" src="<?php echo base_url(); ?>backend/vendor/plugins/datatables/extensions/Editor/js/dataTables.editor.js"></script>

<!-- Datatables Bootstrap Modifications  -->
<script type="text/javascript" src="<?php echo base_url(); ?>backend/vendor/plugins/datatables/media/js/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>backend/vendor/plugins/datatables/extensions/Editor/js/editor.bootstrap.js"></script>

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

        // Init tray navigation smooth scroll
        $('.tray-nav a').smoothScroll({
            offset: -145
        });

        // Custom tray navigation animation
        setTimeout(function() {
            $('.custom-nav-animation li').each(function(i, e) {
                var This = $(this);
                var timer = setTimeout(function() {
                    This.addClass('animated zoomIn');
                }, 100 * i);
            });
        }, 600);


        // Init Datatables with Tabletools Addon
        $('#datatable').dataTable({
            "aoColumnDefs": [{
                'bSortable': false,
                'aTargets': [-1]
            }],
            "oLanguage": {
                "oPaginate": {
                    "sPrevious": "",
                    "sNext": ""
                }
            },
            "iDisplayLength": 5,
            "aLengthMenu": [
                [5, 10, 25, 50, -1],
                [5, 10, 25, 50, "All"]
            ],
            "sDom": 't<"dt-panelfooter clearfix"ip>',
            "oTableTools": {
                "sSwfPath": "vendor/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf"
            }
        });

        $('#datatable2').dataTable({
            "aoColumnDefs": [{
                'bSortable': false,
                'aTargets': [-1]
            }],
            "oLanguage": {
                "oPaginate": {
                    "sPrevious": "",
                    "sNext": ""
                }
            },
            "iDisplayLength": 5,
            "aLengthMenu": [
                [5, 10, 25, 50, -1],
                [5, 10, 25, 50, "All"]
            ],
            "sDom": '<"dt-panelmenu clearfix"lfr>t<"dt-panelfooter clearfix"ip>',
            "oTableTools": {
                "sSwfPath": "vendor/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf"
            }
        });

        $('#datatable3').dataTable({
            "aoColumnDefs": [{
                'bSortable': false,
                'aTargets': [-1]
            }],
            "oLanguage": {
                "oPaginate": {
                    "sPrevious": "",
                    "sNext": ""
                }
            },
            "iDisplayLength": 5,
            "aLengthMenu": [
                [5, 10, 25, 50, -1],
                [5, 10, 25, 50, "All"]
            ],
            "sDom": '<"dt-panelmenu clearfix"Tfr>t<"dt-panelfooter clearfix"ip>',
            "oTableTools": {
                "sSwfPath": "vendor/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf"
            }
        });

        $('#datatable4').dataTable({
            "aoColumnDefs": [{
                'bSortable': false,
                'aTargets': [-1]
            }],
            "oLanguage": {
                "oPaginate": {
                    "sPrevious": "",
                    "sNext": ""
                }
            },
            "iDisplayLength": 5,
            "aLengthMenu": [
                [5, 10, 25, 50, -1],
                [5, 10, 25, 50, "All"]
            ],
            "sDom": 'T<"panel-menu dt-panelmenu"lfr><"clearfix">tip',

            "oTableTools": {
                "sSwfPath": "vendor/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf"
            }
        });

        // Multi-Column Filtering
        $('#datatable5 thead th').each(function() {
            var title = $('#datatable5 tfoot th').eq($(this).index()).text();
            $(this).html('<input type="text" class="form-control" placeholder="Search ' + title + '" />');
        });

        // DataTable
        var table5 = $('#datatable5').DataTable({
            "sDom": 't<"dt-panelfooter clearfix"ip>',
            "ordering": false
        });

        // Apply the search
        table5.columns().eq(0).each(function(colIdx) {
            $('input', table5.column(colIdx).header()).on('keyup change', function() {
                table5
                    .column(colIdx)
                    .search(this.value)
                    .draw();
            });
        });


        // ABC FILTERING
        var table6 = $('#datatable6').DataTable({
            "sDom": 't<"dt-panelfooter clearfix"ip>',
            "ordering": false
        });

        var alphabet = $('<div class="dt-abc-filter"/>').append('<span class="abc-label">Search: </span> ');
        var columnData = table6.column(0).data();
        var bins = bin(columnData);

        $('<span class="active"/>')
            .data('letter', '')
            .data('match-count', columnData.length)
            .html('None')
            .appendTo(alphabet);

        for (var i = 0; i < 26; i++) {
            var letter = String.fromCharCode(65 + i);

            $('<span/>')
                .data('letter', letter)
                .data('match-count', bins[letter] || 0)
                .addClass(!bins[letter] ? 'empty' : '')
                .html(letter)
                .appendTo(alphabet);
        }

        $('#datatable6').parents('.panel').find('.panel-menu').addClass('dark').html(alphabet);

        alphabet.on('click', 'span', function() {
            alphabet.find('.active').removeClass('active');
            $(this).addClass('active');

            _alphabetSearch = $(this).data('letter');
            table6.draw();
        });

        var info = $('<div class="alphabetInfo"></div>')
            .appendTo(alphabet);

        var _alphabetSearch = '';

        $.fn.dataTable.ext.search.push(function(settings, searchData) {
            if (!_alphabetSearch) {
                return true;
            }
            if (searchData[0].charAt(0) === _alphabetSearch) {
                return true;
            }
            return false;
        });

        function bin(data) {
            var letter, bins = {};
            for (var i = 0, ien = data.length; i < ien; i++) {
                letter = data[i].charAt(0).toUpperCase();

                if (bins[letter]) {
                    bins[letter] ++;
                } else {
                    bins[letter] = 1;
                }
            }
            return bins;
        }

        // ROW GROUPING
        var table7 = $('#datatable7').DataTable({
            "columnDefs": [{
                "visible": false,
                "targets": 2
            }],
            "order": [
                [2, 'asc']
            ],
            "sDom": 't<"dt-panelfooter clearfix"ip>',
            "displayLength": 25,
            "drawCallback": function(settings) {
                var api = this.api();
                var rows = api.rows({
                    page: 'current'
                }).nodes();
                var last = null;

                api.column(2, {
                    page: 'current'
                }).data().each(function(group, i) {
                    if (last !== group) {
                        $(rows).eq(i).before(
                            '<tr class="row-label ' + group.replace(/ /g, '').toLowerCase() + '"><td colspan="5">' + group + '</td></tr>'
                        );
                        last = group;
                    }
                });
            }
        });

        // Order by the grouping
        $('#datatable7 tbody').on('click', 'tr.row-label', function() {
            var currentOrder = table7.order()[0];
            if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                table7.order([2, 'desc']).draw();
            } else {
                table7.order([2, 'asc']).draw();
            }
        });


        // MISC DATATABLE HELPER FUNCTIONS

        // Add Placeholder text to datatables filter bar
        $('.dataTables_filter input').attr("placeholder", "Enter Terms...");

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
