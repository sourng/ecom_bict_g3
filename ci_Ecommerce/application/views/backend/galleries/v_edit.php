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


        <form action="<?php echo site_url();?>backend/<?php echo $c_name; ?>/update/<?php echo $c_name; ?>" method="post" class="form" id="validate" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $this->m_ps->encrypt_decrypt('encrypt',$galleries[0]['rg_id'])?>">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <span class="panel-title" > <i class="glyphicons glyphicons-circle_plus"></i><?php echo $frm_name;  ?></span>
                </div>

                <div class="panel-body p20 pb10">
                        <div class="tab-content pn br-n admin-form">
                            <div id="tab1_1" class="tab-pane active">
                                <div class="section row mbn">
                                    <div class="col-md-9">
                                        <div class="section mb15">
                                            <label for="email" class="field prepend-icon">
                                                <input type="text" value="<?php echo $galleries[0]['title']; ?>" name="title" id="title" class="event-name gui-input br-light bg-light" placeholder="Title" required="">
                                                <label for="title" class="field-icon"><i class="fa fa-envelope-o"></i>
                                                </label>
                                            </label>
                                        </div>

                                        <div class="section mb15">

                                            <label for="email" class="field prepend-icon">

                                                <input type="text"  value="<?php echo $galleries[0]['link']; ?>"  name="link" id="link" class="event-name gui-input br-light bg-light" placeholder="Link Name(#)" required="">
                                                <label for="link" class="field-icon"><i class="fa fa-envelope-o"></i>
                                                </label>
                                            </label>
                                        </div>

                                        <div class="section mb10">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input id="tagsinput"  value="Single Room, Hotel,<?php echo $galleries[0]['tags']; ?>"  class="bg-light" name="tags" type="text">
                                                </div>
                                                <div class="col-md-6">
                                                   <label for="customer-group" class="field select">
                                                    <select id="customer-group" name="room_id">
                                                        <option value="0" disabled>Sellect Room..</option>
                                                       <?php
                                                        foreach ($galleries as $row) {
                                                        ?>
                                                        <option selected value="<?php echo $row['room_id']; ?>"><?php echo $row['room_title']; ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                    <i class="arrow double"></i>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="section  mb15">
                                            <div class="section row ">
                                            <div class="col-md-6">
                                                <label for="customer-group" class="field select">
                                                    <select id="customer-group" name="rt_id">
                                                        <option value="0" disabled>Sellect Room Type..</option>
                                                       <?php
                                                        foreach ($room_type as $row) {
                                                        ?>
                                                        <option selected value="<?php echo $row['rt_id']; ?>"><?php echo $row['type']; ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                    <i class="arrow double"></i>
                                                </label>
                                            </div>
                                                <div class="col-md-6">
                                                    <label for="customer-group" class="field select">
                                                        <select id="customer-group" name="position">
                                                            <option value="0" disabled>Sellect Positon...</option>
                                                             <?php
                                                                    foreach($position as $row){
                                                                ?>
                                                                    <option selected value="<?php echo $row['pos_id']; ?>"><?php echo $row['title']; ?></option>
                                                                <?php
                                                                }
                                                            ?>
                                                        </select>
                                                        <i class="arrow double"></i>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                                            <div class="fileupload-preview thumbnail mb15">
                                                <?php 
                                                if($galleries[0]['image'] !=''){
                                                    ?>
                                                    <img src="<?php echo base_url ()?>uploads/galleries/<?php echo $galleries[0]['image']; ?>"  alt="holder">
                                                    <input type="hidden" name="old_image" value="<?php echo $galleries[0]['image']; ?>">

                                                    <?php
                                                }
                                                else{
                                                    ?>

                                                    <img data-src="holder.js/100%x140" alt="holder">
                                                    <?php
                                                }

                                                ?>
                                                



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
                                <div class="section mb15">
                                    <label class="field prepend-icon">
                                        <textarea class="gui-textarea br-light bg-light" id="desc" name="desc" placeholder="Room Description" required=""> <?php echo $galleries[0]['desc']; ?></textarea>
                                        <label for="desc" class="field-icon"><i class="fa fa-edit"></i>
                                        </label>
                                    </label>
                                </div>
                                <div class="section mb15">
                                    <label class="field prepend-icon">
                                        <textarea class="gui-textarea br-light bg-light" id="note" name="note" placeholder="Note gallery" required=""> <?php echo $galleries[0]['note']; ?></textarea>
                                        <label for="note" class="field-icon"><i class="fa fa-edit"></i>
                                        </label>
                                    </label>
                                </div>
                            
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
                                            <input type="submit" class="btn btn-primary" name="userSubmit" data-note-style="success" value="Save <?php echo $c_name; ?>">
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </form>


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