<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/dropzone.css">
<section  class="content" style="margin-top: 90px;padding: 0;">

    <div class="container-fluid no-margin-xs no-padding-xs" style="">

        <div class="col-sm-10 col-sm-offset-1 no-margin-xs no-padding-xs">
            <?php echo $success ?>
            <div class="drop-zone-upload">
                 <?php echo form_open_multipart('upload/upload_pix', array('class'=>"dropzone", 'id'=>"mydropzone"))?>
                    <div class="fallback">
                        <input name="file" type="file" multiple />
                    </div>
                <?php echo form_close()?>
            </div>




            <div class="upload-info no-padding-xs" style="margin-top: 50px; background:#fff;padding:20px;">
                <?php echo form_open()?>
                    <div class="uploaded-picture">

                    </div>

                    <div class="form-group col-sm-6">
                        <label>Title</label>
                        <input type="text" class="form-control no-border-radius" value="<?php echo set_value('title') ?>" name="title" placeholder="title">
                    </div>


                    <div class="form-group col-sm-6" style="min-height: 50px">
                        <label>Adult Content</label>
                        <div class="toggleWrapper" style="width: 100%; margin-top: 25px;position: relative">
                            <input class="dn" name="adult" value="yes" type="checkbox" id="dn"/>
                            <label class="toggle" for="dn"><span class="toggle__handler"></span></label>
                        </div>
                    </div>

                    <div class="form-group col-sm-6">
                        <label>Description</label>
                        <textarea class="form-control no-border-radius" name="discription"><?php echo set_value('discription')?></textarea>
                    </div>


                    <div class="form-group col-sm-6">

                        <label>Tags</label>
                        <input class="form-control no-border-radius" name="tags" value="<?php echo set_value('tags')?>" placeholder="Tag the picture separate by comma">
                    </div>


                    <div class="form-group col-sm-12">
                        <label>Select Category(s)</label>

                        <div class="photo-cat">
                            <?php
                                $this->db->select('*');
                                $getCat = $this->db->get('category')->result_array();
                                foreach($getCat as $cat):
                            ?>
                            <div class="select-cat">
                                <input id="active<?php echo $cat['id']?>"  name="category[]" value="<?php echo $cat['category_name']?>" type="checkbox" class="check">
                                <label for="active<?php echo $cat['id']?>" class="check"><?php echo $cat['category_name']?></label>
                            </div>

                            <?php endforeach ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>


                    <div class="col-sm-6 col-sm-offset-3">
                        <button type="submit" class="btn btn-success no-border-radius btn-lg" style="width: 100%">SUBMIT</button>
                    </div>

                    <div class="clearfix"></div>
                <?php echo form_close()?>
            </div>



        </div>
    </div>
</section>

<!-- mobile search modal begins here -->

<div id="mobileSearch" class="modal fade" role="dialog">
    <div class="modal-dialog" style="margin-top: 200px">

        <!-- Modal content-->
        <div class="modal-content no-border-radius">

            <div class="modal-body">
                <div class="searchZippr">
                    <h4>Type your search and hit enter</h4>
                    <div class="form-group no-margin-xs">
                        <input class="width-100 search-control" placeholder="Username, Competition, Photo title here" type="search">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
<script src='<?php echo base_url()?>/js/dropzone.js'></script>

<script>


    Dropzone.options.mydropzone = {
        paramName: "file", // The name that will be used to transfer the file
        acceptedFiles: ".jpeg,.jpg,.png,.gif",
        uploadMultiple: true,
    }

/*
        $("div#myDropzone").dropzone({




    });*/

    //Dropzone.options.myDropzone = false;
</script>

</body>
</html>


</body>