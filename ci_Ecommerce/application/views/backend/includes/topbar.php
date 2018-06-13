<header id="topbar">

    <div class="topbar-left">

        <ol class="breadcrumb">

            <div class="btn-group">

                <a href="<?php echo site_url()."backend/". $c_name; ?>" type="button" class="btn btn-system"><i class="fa fa-home"></i>

                </a>

                <div type="button" class="btn btn-system dark"><i class="fa fa-user"></i> <?php echo $frm_name; ?>

                </div>

            </div>

        </ol>







    </div>

    <div class="topbar-right">

        <div for="topbar-multiple" class="control-label pr10 fs11 text-muted">

            <div class="btn-group">

                <a href="<?php echo site_url()."backend/". $c_name; ?>/add"  class="btn btn-info light light"><i class="glyphicons glyphicons-circle_plus"></i> Add New

                </a>

                <a href="<?php echo site_url()."backend/". $c_name; ?>/trash"  class="btn btn-danger"><i class="glyphicons glyphicons-bin"></i> Trash

                </a>

                <a href="<?php echo site_url()."backend/". $c_name; ?>/index"  class="btn btn-success dark"><i class="glyphicons glyphicons-book"></i> List

                </a>

                <a href="<?php echo site_url()."backend/". $c_name; ?>/"  class="btn btn-default light"><i class="glyphicons glyphicons-home"></i> All

                </a>

            </div>





        </div>



<!--        <div class="ib topbar-dropdown">-->

<!--            <label for="topbar-multiple" class="control-label pr10 fs11 text-muted">Reporting Period</label>-->

<!--            <select id="topbar-multiple" class="hidden" multiple="multiple">-->

<!--                <optgroup label="Filter By:">-->

<!--                    <option value="1-1">Last 30 Days</option>-->

<!--                    <option value="1-2" selected="selected">Last 60 Days</option>-->

<!--                    <option value="1-3">Last Year</option>-->

<!--                </optgroup>-->

<!--            </select>-->

<!--        </div>-->

<!--        <div class="ml15 ib va-m" id="toggle_sidemenu_r">-->

<!--            <a href="#" class="pl5"> <i class="fa fa-sign-in fs22 text-primary"></i>-->

<!--                <span class="badge badge-hero badge-danger">3</span>-->

<!--            </a>-->

<!--        </div>-->

    </div>

</header>