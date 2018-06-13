<!-- Title area -->
<div class="titleArea">
    <div class="wrapper">
        <div class="pageTitle">
            <h1><img src="<?php echo base_url()?>application/views/admin/images/icons/control/32/plus.png" />&nbsp;&nbsp;New Product</h1>
        </div>

        <div class="clear"></div>
    </div>
</div>

<div class="line"></div>

<!-- Main content wrapper -->
<div class="wrapper">
    <!-- Form -->
    <form action="<?php echo site_url();?>admin/c_product/save_new" method="post" class="form" id="validate">
        <fieldset>

            <div class="formRow">
                <label>Category:<span class="req">*</span></label>
                <div class="formRight">
                    <div class="floatL" >
                        <div id="sub_category">
<!--                            --><?php
//                            $options_category['']	= 'Please select';
//                            foreach($categories as $category):
//                                //$options_customer_id[$customer['id']] = '('.$customer['id_customer'].')- '.$customer['company_name'];
//                                $options_category[$category['id']] = $category['name'];
//                            endforeach;
//                            $js = 'name="cat_id"  id="cat_id" class="validate[required]" ';
//                            echo form_dropdown('cat_id', $options_category, 9, $js);
//                            ?>
                        </div><!-- end sub_category -->
                    </div>
                </div>
                <div class="clear"></div>
            </div>

            <div class="formRow">
                <label>Name:<span class="req">*</span></label>
                <div class="formRight"><input type="text" name="name" id="name" class="validate[required]" value="" autocomplete="on" /></div>
                <div class="clear"></div>
            </div>

            <!--<div class="formRow">
                <label>Name (KH):<span class="req">*</span></label>
                <div class="formRight"><input type="text" name="name_kh" id="name_kh" class="" value="" autocomplete="on" /></div>
                <div class="clear"></div>
            </div>

            <div class="formRow">
                <label>Name (CH):<span class="req">*</span></label>
                <div class="formRight"><input type="text" name="name_ch" id="name_ch" class="" value="" autocomplete="on" /></div>
                <div class="clear"></div>
            </div>-->

            <div class="formRow">
                <label>Price:<span class="req">*</span></label>
                <div class="formRight"><input type="text" name="price" id="price" class="validate[required]" value="0" autocomplete="on" /></div>
                <div class="clear"></div>
            </div>
            <div class="formRow">
                <label>Stock:<span class="req">*</span></label>
                <div class="formRight"><input type="text" name="stock" id="stock" class="validate[required]" value="0" autocomplete="on" /></div>
                <div class="clear"></div>
            </div>

            <!-- WYSIWYG editor -->
            <div class="widget">
                <div class="title"><img src="<?php echo base_url()?>application/views/images/icons/dark/pencil.png" alt="" class="titleIcon" /><h6>Description</h6></div>
                <textarea id="editor" name="description" rows="" cols=""></textarea>
            </div>


            <div class="formRow">
                <label>Image<span class="req">*</span></label>
                <div class="formRight">
                    <!-- image  -->
                    <div id="view_picture_1" style="padding:2px; width="128px" height="128px" text-align:center; cursor:pointer;"></div>
                <input class="btn_upload" type="button" value="Upload" id="upload" onclick="getFile('file_1','view_picture_1','plz_upload_1','image_1');"/>
                <input class="btn_upload" type="button" value="Delete" onclick="delete_file('file_1','view_picture_1','plz_upload_1','image_1');"/>

                <input id="file_1" name="file_1"  type="file" class="display_none"  />
                <input type="hidden" name="image" id="image_1" value="no_img.jpg" />
                <label id="plz_upload_1" class="display_none" ></label>
            </div>
            <div class="clear"></div>
</div> <!-- end img one -->

<div class="formRow">
    <label>Image<span class="req">*</span></label>
    <div class="formRight">
        <!-- image  -->
        <div id="view_picture_2" style="padding:2px; width="128px" height="128px" text-align:center; cursor:pointer;"></div>
    <input class="btn_upload" type="button" value="Upload" id="upload" onclick="getFile('file_2','view_picture_2','plz_upload_2','image_2');"/>
    <input class="btn_upload" type="button" value="Delete" onclick="delete_file('file_2','view_picture_2','plz_upload_2','image_2');"/>

    <input id="file_2" name="file_2"  type="file" class="display_none"  />
    <input type="hidden" name="image_2" id="image_2" value="no_img.jpg" />
    <label id="plz_upload_2" class="display_none" ></label>
</div>
<div class="clear"></div>
</div> <!-- end img one -->

<div class="formRow">
    <label>Image<span class="req">*</span></label>
    <div class="formRight">
        <!-- image  -->
        <div id="view_picture_3" style="padding:2px; width="128px" height="128px" text-align:center; cursor:pointer;"></div>
    <input class="btn_upload" type="button" value="Upload" id="upload" onclick="getFile('file_3','view_picture_3','plz_upload_3','image_3');"/>
    <input class="btn_upload" type="button" value="Delete" onclick="delete_file('file_3','view_picture_3','plz_upload_3','image_3');"/>

    <input id="file_3" name="file_3"  type="file" class="display_none"  />
    <input type="hidden" name="image_3" id="image_3" value="no_img.jpg" />
    <label id="plz_upload_3" class="display_none" ></label>
</div>
<div class="clear"></div>
</div> <!-- end img one -->

<div class="formRow">
    <label>Image<span class="req">*</span></label>
    <div class="formRight">
        <!-- image  -->
        <div id="view_picture_4" style="padding:2px; width="128px" height="128px" text-align:center; cursor:pointer;"></div>
    <input class="btn_upload" type="button" value="Upload" id="upload" onclick="getFile('file_4','view_picture_4','plz_upload_4','image_4');"/>
    <input class="btn_upload" type="button" value="Delete" onclick="delete_file('file_4','view_picture_4','plz_upload_4','image_4');"/>

    <input id="file_4" name="file_4"  type="file" class="display_none"  />
    <input type="hidden" name="image_4" id="image_4" value="no_img.jpg" />
    <label id="plz_upload_4" class="display_none" ></label>
</div>
<div class="clear"></div>
</div> <!-- end img one -->

</fieldset>
<div class="wizButtons">
    <div class="status" id="status1"></div>
    <span class="wNavButtons">
                    <input class="basic" id="back1" value="Back" type="button" onclick="window.location = '<?php echo site_url();?>admin/c_product/';" />
                    <input class="blueB ml10" id="next1" value="Save" type="submit" />
                </span>
</div>
<div class="clear"></div>
</form>

</div>

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

            for ( ; i < len; i++ ) {
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
                    url: "<?php echo site_url();?>admin/c_file/multiple_upload_file/products/" + _file,
                    type: "POST",
                    data: formdata,
                    processData: false,
                    contentType: false,
                    success: function (res) {
                        document.getElementById(view_picture).innerHTML = '<img width="128px" height="128px" src="<?= base_url().'upload/products/' ?>'+res+'" />';
                        document.getElementById(file_name).innerHTML = res;
                        document.getElementById(picture).value = res;
                        formdata = new FormData();//clear the old file that remember
                    }
                });
            }
        }, false);
    }//end main fnc upload img

    //		delete file
    //
    function delete_file(file,view_picture,plz_upload,image_name){
        var result = confirm("Are you sure you want to delete?");
        if (result == true) {
            $.ajax({
                type: "POST",
                url: "<?php echo site_url();?>admin/c_file/delete_file/products/" + document.getElementById(image_name).value,
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
                url : '<?php echo site_url();?>admin/c_product/ajax_subcategory',
                data : msg,
                success: function(categories)
                {
                    var jsonList = {"Table" : categories}
                    var listItems= "";
                    listItems+=	'<div id="uniform-main_cat_id" class="selector">';
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