 <div class="panel panel-default sidebar-menu ">

    <div class="panel-heading">
        <h3 class="panel-title">Categories</h3>
    </div>

        <div class="panel-body">
                <ul class="nav nav-pills nav-stacked category-menu ">
                    <?php foreach ($getMaincategory as $row) { ?>
                        <li class="active">
                            <a href="<?php echo site_url(); ?>home/category/
                                <?php echo $row['category_id'] ?>" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">
                                <?php echo $row['name']; ?><b class="caret"></b>
                                <span class="badge pull-right">123</span></a>
                                    <?php foreach ($getSubcategory as $rows) {
                                        if ($row['category_id'] == $rows['category_id']) {
                                     ?>
                                        <ul>
                                            <li><a href="<?php echo site_url(); ?>home/categoryfind/<?php echo $rows['sub_id'] ?>"><?php echo $rows['title']; ?></a>
                                            </li>                                        
                                        </ul>

                                    <?php 
                                    }
                                  }
                                 ?>
                        </li>

                            <?php }

                            ?>
                             

                </ul>

    </div>
</div>

