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





<form action="<?php echo site_url();?>backend/<?php echo $c_name; ?>/save/<?php echo $c_name; ?>" method="post" class="form" id="validate" enctype="multipart/form-data">





<div class="panel panel-info">

    <div class="panel-heading">

        <span class="panel-title" > <i class="glyphicons glyphicons-circle_plus"></i><?php echo $frm_name;  ?></span>



    </div>

<div class="panel-body p20 pb10">



        <div class="tab-content pn br-n admin-form">

            <div id="tab1_1" class="tab-pane active">

                <div class="section row mbn">

                    <div class="col-md-9">

                        <div class="section row ">

                            <div class="col-md-6">

                                <label for="name1" class="field prepend-icon">

                                    <input type="text" name="room_code" value="<?php echo set_value('room_code'); ?>" id="name1" class="event-name gui-input br-light light" placeholder="Room Code(SLG-101)" required="">

                                    <label for="room_code" class="field-icon"><i class="fa fa-user"></i>

                                    </label>

                                </label>

                            </div>

                            <div class="col-md-6">

                                <label for="name2" class="field prepend-icon">

                                    <input type="text" name="room_title" id="name2" value="<?php echo set_value('room_title'); ?>" class="event-name gui-input br-light light" placeholder="Room Name" required="">

                                    <label for="room_title" class="field-icon"><i class="fa fa-user"></i>

                                    </label>

                                </label>

                            </div>

                        </div>

                        <div class="section  mb15">

                            <label for="email" class="field prepend-icon">

                                <input type="text" name="room_slug" id="email" class="event-name gui-input br-light bg-light" placeholder="Room Slug ( Optional)" >

                                <label for="room_slug" class="field-icon"><i class="fa fa-envelope-o"></i>

                                </label>

                            </label>
                            

                        </div>

                        <div class="section mb15">

                            <label for="email" class="field prepend-icon">

                                <input type="text" name="link" id="link" class="event-name gui-input br-light bg-light" placeholder="Link Name(#)" required="">

                                <label for="link" class="field-icon"><i class="fa fa-envelope-o"></i>

                                </label>

                            </label>

                        </div>

                        <div class="section mb10">

                            <input id="tagsinput" class="bg-light" name="tags" type="text" value="Single Room, Hotel, ">

                        </div>

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

                    <div class="col-md-6">

               <label for="customer-group" class="field select">
                            <select id="customer-group" name="rate_id">
                                <option value="0" selected="selected">Room Rate...</option>
                                <option value="1">SLG</option>
                                <option value="2">DBL</option>
                                <option value="3">TWN</option>
                            </select>
                            <i class="arrow double"></i>

                        </label>

                    </div>

                    <!-- end section -->



                    <div class="col-md-6">

                        <label for="customer-group" class="field select">
                            <select id="customer-group" name="rt_id">
                                <option value="0" selected="selected">Room Type...</option>
                                <option value="1">Signle</option>
                                <option value="2">Double</option>
                                <option value="3">Twin</option>
                            </select>

                            <i class="arrow double"></i>

                        </label>

                    </div>

                    <!-- end section -->





                    <!-- end .col8 section -->



                </div>





                <div class="section mb15">

                    <label class="field prepend-icon">

                        <textarea class="gui-textarea br-light bg-light" id="desc" name="desc" placeholder="Room Description" required=""></textarea>

                        <label for="desc" class="field-icon"><i class="fa fa-edit"></i>

                        </label>

                    </label>

                </div>
            
            <div class="section mb15">

                    <label class="field prepend-icon">

                        <textarea class="gui-textarea br-light bg-light" id="cust-note" name="amenities" placeholder="Room Amenities" required=""></textarea>

                        <label for="amenities" class="field-icon"><i class="fa fa-edit"></i>

                        </label>

                    </label>

                </div>
                <div class="section mb15">

                    <label class="field prepend-icon">

                        <textarea class="gui-textarea br-light bg-light" id="include" name="include" placeholder="Room Include" required=""></textarea>

                        <label for="include" class="field-icon"><i class="fa fa-edit"></i>

                        </label>

                    </label>

                </div>
                 <div class="section mb15">

                    <label class="field prepend-icon">

                        <textarea class="gui-textarea br-light bg-light" id="include" name="exclude" placeholder="Room Exclude" required=""></textarea>

                        <label for="exclude" class="field-icon"><i class="fa fa-edit"></i>

                        </label>

                    </label>

                </div>

              <div class="section row">

                    <div class="col-md-6">
                        <label for="customer-group" class="field select">
                            <select id="customer-group" name="over_id">
                                <option value="0" selected="selected">Over view...</option>
                                <option value="1">Signle</option>
                                <option value="2">Double</option>
                                <option value="3">Twin</option>
                            </select>

                            <i class="arrow double"></i>

                        </label>

                    </div>
                    <div class="col-md-6">
                        <label for="customer-group" class="field select">
                            <select id="customer-group" name="position">
                                <option value="0" selected="selected">Position...</option>
                                <option value="1">Guests Favorite Rooms</option>
                                <option value="2">USP section</option>
                                <option value="3">Slide</option>
                            </select>

                            <i class="arrow double"></i>

                        </label>

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



                            <input type="submit" class="btn btn-primary" name="userSubmit" data-note-style="success" value="Save <?php echo $c_name; ?>">

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