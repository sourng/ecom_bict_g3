<div class="col-md-12">

    <div class="panel panel-visible" id="spy2">

        <div class="panel-heading">
                <span class="glyphicon glyphicon-tasks">   </span> iltering of<?php  echo $frm_name;  ?>
        </div>

        <div class="panel-body pn">

            <table class="table table-striped table-hover" id="datatable2" cellspacing="0" width="100%" style="width: 800px;

        margin: 0 auto;">
                    <thead>
                    <tr>
                       <th>#ID</th>
                        <th>Rooms ID</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Description</th>       
                        <th>Note</th>
                        <th>Action</th>       
                    </tr>

                    </thead>
                <tbody>

                <?php
              if(sizeof($galleries)>0){

                    foreach($galleries as $row){

                    $status = $row['status'] == 1 ? "tick.png" : "cross.png";
					$deleted = $row['status'] == 1 ? "delete.png" : "cross.png";
                ?>

                <tr>                   
					<td style="width:10px;" ><?php echo "RM-". $row['rg_id'];  ?></td>
                    <td><?php echo $row['rg_id'];  ?> </td>
                    <td style="width:100px;" ><?php echo $row['image'];  ?></td>
                    <td><?php echo $row['title'];  ?></td>
                    <td><?php echo $row['desc'];  ?></td>
                    <td><?php echo $row['note'];  ?></td>
                    
                    <td>
                        <a href="<?php echo site_url();?>backend/<?php echo $c_name;?>/set_status/<?php /* echo $ttype['tours_id']; */ echo $this->m_ps->encrypt_decrypt('encrypt',$row['rg_id']); ?>/<?php echo $row['status'];?>" title="Public"><img src="<?php echo base_url()?>icons/<?php echo $status;?>" class="tooltip-info" data-rel="tooltip" title="Public">
                        </a>

                        <a href="<?php echo site_url();?>backend/<?php echo $c_name;?>/page_edit/<?php echo $this->m_ps->encrypt_decrypt('encrypt',$row['rg_id'])?>" title="Edit"><img src="<?php echo base_url()?>icons/edit.png" class="tooltip-info" data-rel="tooltip" title="Edit">
                        </a>

                        <a href="<?php echo site_url();?>backend/<?php echo $c_name;?>/set_deleted/<?php /* echo $ttype['tours_id']; */ echo $this->m_ps->encrypt_decrypt('encrypt',$row['rg_id']); ?>/<?php echo $row['deleted'];?>" title="Public"><img src="<?php echo base_url()?>icons/<?php echo $deleted;?>" class="tooltip-info" data-rel="tooltip" title="Public">

                        </a>                   

                    </td>

                </tr>

                    <?php

                }

              }

                ?>
                </tbody>

            </table>

        </div>

    </div>

</div>

