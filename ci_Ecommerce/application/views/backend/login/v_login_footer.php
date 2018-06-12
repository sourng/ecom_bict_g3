<!-- jQuery -->
<script type="text/javascript" src="<?php  echo base_url(); ?>backend/vendor/jquery/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="<?php  echo base_url(); ?>backend/vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

<!-- Bootstrap -->
<script type="text/javascript" src="<?php echo base_url();  ?>backend/assets/js/bootstrap/bootstrap.min.js"></script>

<!-- Page Plugins -->
<script type="text/javascript" src="<?php  echo base_url(); ?>backend/assets/js/pages/login/EasePack.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();  ?>backend/assets/js/pages/login/rAF.js"></script>
<script type="text/javascript" src="<?php echo base_url();  ?>backend/assets/js/pages/login/TweenLite.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();  ?>backend/assets/js/pages/login/login.js"></script>

<!-- Theme Javascript -->
<script type="text/javascript" src="<?php echo base_url();  ?>backend/assets/js/utility/utility.js"></script>
<script type="text/javascript" src="<?php echo base_url();  ?>backend/assets/js/main.js"></script>
<script type="text/javascript" src="<?php echo base_url();  ?>backend/assets/js/demo.js"></script>

<!-- Page Javascript -->
<script type="text/javascript">
    jQuery(document).ready(function() {

        "use strict";

        // Init Theme Core
        Core.init();

        // Init Demo JS
        //Demo.init();

        // Init CanvasBG and pass target starting location
        CanvasBG.init({
            Loc: {
                x: window.innerWidth / 2,
                y: window.innerHeight / 3.3
            },
        });


    });
</script>

<!-- END: PAGE SCRIPTS -->

</body>

</html>