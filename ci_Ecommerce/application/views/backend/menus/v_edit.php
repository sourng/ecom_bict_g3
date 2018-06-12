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

<?php 
    }
?>

<form action="<?php echo site_url();?>backend/tours/update" method="post" class="form" id="validate" enctype="multipart/form-data">

<input type="hidden" name="id" value="<?php echo $this->m_ps->encrypt_decrypt('encrypt',$tours[0]['tours_id'])?>"


<div class="panel mb25 mt5">
    <div class="panel-heading">
        <span class="panel-title"> Edit Tour</span>
        <ul class="nav panel-tabs-border panel-tabs">
            <li class="active">
                <a href="#tab1_1" data-toggle="tab">General</a>
            </li>

            <li>
                <a href="#tab1_2" data-toggle="tab">Description</a>
            </li>
        </ul>
    </div>

    <div class="panel-body p20 pb10">
        <div class="tab-content pn br-n admin-form">
            <div id="tab1_1" class="tab-pane active">
                <div class="section row mbn">
                    <div class="col-md-8 pl15">
                        <div class="section mb10">
                        <label for="product-category" class="field select">
                            <select id="tour_type_id" name="tour_type_id">
                                <option value="0" selected="selected">Select Tour Type...</option>

                                <?php
                                    foreach($tourtype as $rt){
                                ?>
                                <option value="<?php echo $rt['tour_type_id']; ?>"><?php echo $rt['tour_types']; ?></option>
                                <?php
                                    }
                                ?>

                            </select>
                            <i class="arrow double"></i>
                        </label>
                        </div>
                        <div class="section mb10">
                            <label for="name2" class="field prepend-icon">
                                <input type="text" name="tour_title"  id="tour_title" value="<?php echo $tours[0]['tour_title']; ?>" class="event-name gui-input br-light light" placeholder="Tour Title">
                                <label for="name2" class="field-icon"><i class="fa fa-tag"></i>
                                </label>
                            </label>
                        </div>                   

                        <div class="section mb10">
                            <label class="field prepend-icon">
                                <textarea style="height: 160px;" class="gui-textarea br-light bg-light" id="comment" name="tour_description" placeholder="Tour Description"><?php echo $tours[0]['tour_description']; ?></textarea>
                                <label for="comment" class="field-icon"><i class="fa fa-comments"></i>
                                </label>
                                <span class="input-footer hidden">
                                    <strong>Hint:</strong>Don't be negative or off topic! just be awesome...</span>
                            </label>
                        </div>

                        <!-- tour_detail -->

                        <div class="section mb10">
                            <label class="field prepend-icon">
                                <textarea style="height: 160px;" class="gui-textarea br-light bg-light" id="comment" name="tour_detail" placeholder="Tour Detail"><?php echo $tours[0]['tour_detail']; ?></textarea>
                                <label for="comment" class="field-icon"><i class="fa fa-comments"></i>
                                </label>
                                <span class="input-footer hidden">
                                    <strong>Hint:</strong>Don't be negative or off topic! just be awesome...</span>
                            </label>

                        </div>

                    </div>
                </div>
            </div>

            <div id="tab1_2" class="tab-pane">
                <div class="section row">                  

                    <!-- end section -->

                    <div class="section mb10">

                            <label class="field prepend-icon">

                                <textarea style="height: 160px;" class="gui-textarea br-light bg-light" id="comment" name="packages" placeholder="Tour Packages"><?php echo $tours[0]['packages']; ?></textarea>
                                <label for="comment" class="field-icon"><i class="fa fa-comments"></i>
                                </label>
                                <span class="input-footer hidden">
                                    <strong>Hint:</strong>Don't be negative or off topic! just be awesome...</span>
                            </label>
                        </div>                   

                    <!-- end section -->

                </div>

                <!-- end section row section -->
                <div class="section row">
                    <div class="col-md-3">
                        <label for="product-price" class="field prepend-icon">
                            <input type="text" name="price" id="price" class="gui-input" placeholder="Tour Price..." value="<?php echo $tours[0]['price']; ?>">
                            <label for="product-price" class="field-icon"><i class="fa fa-usd"></i>
                            </label>
                        </label>
                    </div>

                    <!-- end section -->
                    <div class="col-md-3">
                        <label class="field select">
                            <select id="public" name="public">
                                <option value="<?php echo $pub=$tours[0]['public']?'1':'0'; ?>" selected="selected"><?php echo $pub=$tours[0]['public']?'Yes':'No'; ?></option>

                                <option value="<?php echo $pub=$tours[0]['public']?'0':'1'; ?>"><?php echo $pub=$tours[0]['public']?'No':'Yes'; ?></option>  

                            </select>
                            <i class="arrow double"></i>
                        </label>
                    </div>

                    <!-- end section -->



                    <div class="col-md-3">
                        <label class="field select">
                            <select id="public" name="show_in">
                                <option value="<?php echo $tours[0]['show_in']; ?>" selected="selected"><?php echo $tours[0]['show_in']; ?></option>
                                <option value="Voyageant">Destination | Voyageant</option>
                                <option value="special offer">Special Offer</option>
                                <option value="slide">Slide Show</option>
                            </select>

                            <i class="arrow double"></i>
                        </label>
                    </div>

                    <!-- end section -->

                    <div class="col-md-3">
                        <label class="field select">
                            <select id="availability" name="availability">
                                <option value="<?php echo $tours[0]['availability']; ?>" selected="selected"><?php echo $tours[0]['availability']; ?></option>
                                <option value="Available">Available</option>
                                <option value="Unavailable">Unavailable</option>
                                <option value="Discontinued">Discontinued</option>
                                <option value="Out of Stock">Out of Stock</option>
                            </select>
                            <i class="arrow double"></i>

                        </label>
                    </div>

                </div>

                <!-- end section row section -->

                <div class="section">
                    <input id="tagsinput" type="text" name="tags" value="<?php echo $tours[0]['tags']; ?>">
                </div>

                <!-- end section row section -->

			<div class="section row">                    

                    <!-- end section -->

                    <div class="section mb10">

                            <label class="field prepend-icon">

                                <textarea style="height: 160px;" class="gui-textarea br-light bg-light" id="comment" name="other" placeholder="Other"><?php echo $tours[0]['other']; ?></textarea>

                                <label for="comment" class="field-icon"><i class="fa fa-comments"></i>
                                </label>

                                <span class="input-footer hidden">
                                    <strong>Hint:</strong>Don't be negative or off topic! just be awesome...</span>
                            </label>
                        </div>              

                    <!-- end section -->

                </div>

                <hr class="short alt">
                <div class="section row mbn">
                    <div class="col-sm-8">                       

                    </div>

                    <div class="col-sm-4">
                        <p class="text-right">
                            <input type="submit" class="btn btn-primary" type="button"  value="Update Tour">
                        </p>
                    </div>
                </div>
               <!-- end section -->
            </div>

            <!-- end section row section -->

            </div>

        </div>

    </div>

</div>

</form>





<script type="application/javascript">

    //-----------------

    /**

     * Load window brows file

     */

    function getFile(_file,view_picture,file_name,picture)

    {

        document.getElementById(_file).click();

        upload(_file,view_picture,file_name,picture);

    }// function



    function upload(_file,view_picture,file_name,picture){



        var input = document.getElementById(_file),

            formdata = false;

        if (window.FormData) {

            formdata = new FormData();

        }



        input.addEventListener("change", function (evt) {

            document.getElementById(file_name).innerHTML = "Uploading . . ."

            var i = 0, len = this.files.length, img, reader, file;



            for ( i; i < len; i++ ) {

                file = this.files[i];



                if ( window.FileReader ) {

                    reader = new FileReader();

                    reader.onloadend = function (e) {

                        showUploadedItem(e.target.result, file.fileName);

                    };

                    reader.readAsDataURL(file);

                }

                if (formdata) {

                    formdata.append(_file, file);

                }

            }



            if (formdata) {

                jQuery.ajax({

                    url: "<?php echo site_url();?>backend/c_file/multiple_upload_file/tours/" + _file,

                    type: "POST",

                    data: formdata,

                    processData: false,

                    contentType: false,

                    success: function (res) {

                        document.getElementById(view_picture).innerHTML = '<img width="320px" height="228px" src="<?= base_url().'upload/rooms/' ?>'+res+'" />';

                        document.getElementById(file_name).innerHTML = res;

                        document.getElementById(picture).value = res;

                        formdata = new FormData();//clear the old file that remember

                    }

                });

            }

        }, false);

    }//end main fnc upload img



    //      delete file

    //

    function delete_file(file,view_picture,plz_upload,image_name){

        var result = confirm("Are you sure you want to delete?");

        if (result == true) {

            $.ajax({

                type: "POST",

                url: "<?php echo site_url();?>backend/c_file/delete_file/tours/" + document.getElementById(image_name).value,

                data: '', // paramenter & value

                cache: false,

                success: function(){

                    document.getElementById(view_picture).innerHTML = '';

                    document.getElementById(plz_upload).innerHTML = "";

                    document.getElementById(file).value = "";

                    document.getElementById(image_name).value = "";



                }



            });

        }

    }



    $(document).ready(function(){

        $('#main_cat_id').change(function(){

            msg = 'main_cat_id='+$(this).val();

            $.ajax({

                type : 'POST',

                url : '<?php echo site_url();?>backend/tours/ajax_subcategory',

                data : msg,

                success: function(categories)

                {

                    var jsonList = {"Table" : categories}

                    var listItems= "";

                    listItems+= '<div id="uniform-main_cat_id" class="selector">';

                    listItems+= '<select name="cat_id"  id="cat_id" class="validate[required]">';

                    for (var i = 0; i < jsonList.Table.length; i++){

                        listItems+= "<option value='" + jsonList.Table[i].id + "'>" + jsonList.Table[i].name + "</option>";

                    }

                    listItems+= "</select>";



                    $("#sub_category").html(listItems);



                } //end success

            });

        });



    });// end ready

	

	

	



</script>





<script>



    CKEDITOR.replace('tour_description' ,{

		filebrowserImageBrowseUrl : '<?php echo base_url();?>assets/filemanager/index.html'

	});

	CKEDITOR.replace('tour_detail' ,{

		filebrowserImageBrowseUrl : '<?php echo base_url();?>assets/filemanager/index.html'

	});

	

		CKEDITOR.replace('packages' ,{

		filebrowserImageBrowseUrl : '<?php echo base_url();?>assets/filemanager/index.html'

	});

</script>