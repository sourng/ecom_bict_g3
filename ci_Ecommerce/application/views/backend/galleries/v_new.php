<?php

if($this->session->flashdata('success_msg')!=""){

    ?>

    <div class="alert alert-success alert-dismissable">

        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

        <i class="fa fa-check pr10"></i>

           <strong>Well done!</strong> <?php echo $this->session->flashdata('success_msg'); ?>

        <a href="#" class="alert-link">this important alert message</a>.

    </div>

<?php

}

?>

<?php

if($this->session->flashdata('error_msg')!=""){

    ?>

    <div class="alert alert-success alert-dismissable">

        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

        <i class="fa fa-check pr10"></i>

        <strong>Note well done!</strong>  <?php echo $this->session->flashdata('error_msg'); ?>

        <a href="#" class="alert-link">this important alert message</a>.

    </div>

    <?php

}

?>




<form action="<?php echo site_url();?>backend/galleries/save/<?php echo $c_name; ?>" method="post" class="form" id="validate" enctype="multipart/form-data">

<div class="panel panel-info">
    <div class="panel-heading">
        <span class="panel-title" > <i class="glyphicons glyphicons-circle_plus"></i><?php echo $frm_name;  ?></span>
    </div>
<div class="panel-body p20 pb10">

        <div class="tab-content pn br-n admin-form">
            <div id="tab1_1" class="tab-pane active">
                <div class="section row mbn">
                    <div class="col-md-9">
                
                        <div class="section  mb15">
                            <label for="email" class="field prepend-icon">
                                <input type="text" name="title" id="email" class="event-name gui-input br-light bg-light" placeholder="Title" >
                                <label for="room_slug" class="field-icon"><i class="fa fa-envelope-o"></i></label>
                            </label>        
                        </div>

                        <div class="section mb15">
                            <label for="email" class="field prepend-icon">
                                <input type="text" name="link" id="link" class="event-name gui-input br-light bg-light" placeholder="Link Name(#)" required="">
                                <label for="link" class="field-icon"><i class="fa fa-envelope-o"></i>
                                </label>
                            </label>
                        </div>
                        
                        <div class=" col-md-12">
                            <div class="col-md-6">
                                <div class="section mb15">
                                    <label for="customer-group" class="field select">
                                        <select id="customer-group" name="rt_id">
                                            <option value="0" disabled selected>Sellect Room Type..</option>
                                           <?php
                                            foreach ($room_type as $row) {
                                            ?>
                                            <option value="<?php echo $row['rt_id']; ?>"><?php echo $row['type']; ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                        <i class="arrow double"></i>
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="customer-group" class="field select">
                                    <select id="customer-group" name="position">
                                        <option value="0" disabled selected>Sellect Room....</option>
                                         <?php
                                                foreach($rooms as $row){
                                            ?>
                                                <option value="<?php echo $row['room_id']; ?>"><?php echo $row['room_title']; ?></option>
                                            <?php
                                            }
                                        ?>
                                    </select>
                                    <i class="arrow double"></i>
                                </label>
                            </div>
                        </div>
                         

                        <div class="section mb10">
                            <label for="customer-group" class="field select">
                            <select id="customer-group" name="position">
                                <option value="0" disabled selected>Sellect Positon...</option>
                                 <?php
                                        foreach($position as $row){
                                    ?>
                                        <option value="<?php echo $row['pos_id']; ?>"><?php echo $row['title']; ?></option>
                                    <?php
                                    }
                                ?>
                            </select>
                            <i class="arrow double"></i>
                        </label>
                        </div>

                        <!--<div class="section mb10">
                            <input id="tagsinput" class="bg-light" name="tags" type="text" value="Single Room, Hotel, ">
                        </div>-->

                    </div>

                    <div class="col-md-3">
                        <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                            <div class="fileupload-preview thumbnail mb15">
                                <img data-src="holder.js/100%x147" alt="holder">
                            </div>
                            <span class="button btn-system btn-file btn-block ph5">
                            <span class="fileupload-new">Change</span>
                            <span class="fileupload-exists">Change</span>
                            <input type="file" name="picture">
                            </span>
                        </div>
                    </div>

                </div>



                <hr class="short alt mtn">


                <div class="section row">
                    <div class="col-md-4">
                       
                    </div>               


                    <div class="col-md-4">
                        
                    </div>

                    <div class="col-md-4">
                        
                    </div>
                </div>
                </div>


            <div class="row">
                <div class="section col-md-6">
                    <label class="field prepend-icon">
                        <textarea class="gui-textarea br-light bg-light" id="desc" name="desc" placeholder="Description" required=""></textarea>
                        <label for="desc" class="field-icon"><i class="fa fa-edit"></i>
                        </label>
                    </label>
                </div>
            
                <div class="section col-md-6">
                    <label class="field prepend-icon">
                        <textarea class="gui-textarea br-light bg-light" id="cust-note" name="note" placeholder="Note" required=""></textarea>
                        <label for="note" class="field-icon"><i class="fa fa-edit"></i>
                        </label>
                    </label>
                </div>
                </div>
                </div>

                <!-- end section -->

                <!-- end section row section -->



                <div class="section row mbn">
                    <div class="col-sm-8">
                        <label class="field option mt10">
                            <input type="checkbox" name="accept_term" id="accept_term" checked>
                            <span class="checkbox"></span>Save  <?php echo $c_name; ?>
                            <em class="small-text text-muted">- A Random Unique ID will be generated</em>
                        </label>
                    </div>

                    <div class="col-sm-4">
                        <p class="text-right">
                            <input type="submit" class="btn btn-primary" name="userSubmit" data-note-style="success" value="Save">
                        </p>
                    </div>
                </div>

                <!-- end section row -->

            </div>
        </div>

    </div>

</div>

</form>







<!--Script for CK Editor-->

<script>



    CKEDITOR.replace('cust-note' ,{

        filebrowserImageBrowseUrl : '<?php echo base_url();?>assets/filemanager/index.html'

    });

    CKEDITOR.replace('tour_detail' ,{

        filebrowserImageBrowseUrl : '<?php echo base_url();?>assets/filemanager/index.html'

    });



    CKEDITOR.replace('packages' ,{

        filebrowserImageBrowseUrl : '<?php echo base_url();?>assets/filemanager/index.html'

    });

</script>