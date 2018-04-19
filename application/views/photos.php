<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url()?>css/masonry.css"/>
<section class="content" style="margin-top: 40px;padding: 0;">
    <style>

        @media only screen and (max-width: 650px){
            .col-xs-6{
                width: 49.5% !important;
            }

        }

        @media (min-width: 768px) {
            .col-sm-4{
                width: 30.8% !important;
            }
        }

    </style>

   | <div class="p-t-0 m-b-15" style="background: #fff">
        <div class="contest-cat-line " style="border-bottom: 1px dotted #fff;padding-top: 10px">
            <div class="col-sm-8 col-sm-offset-2">
                <ul>
                    <li class="label label-danger no-border-radius"><a href="<?php echo base_url('photos')?>"> Explore All</a> </li>
                    <li class="label label-warning no-border-radius"><a href="<?php echo base_url('video')?>"> Video </a> </li>
                    <li class="label label-success hidden-xs no-border-radius"><a href="<?php echo base_url('photos/cat/discover')?>"> Discover </a> </li>
                    <li class="label label-warning hidden-xs no-border-radius"><a href="<?php echo base_url('photos/cat/new')?>"> New </a> </li>
                    <li class="label bg-aqua-gradient hidden-xs"><a href="<?php echo base_url('photos/cat/action')?>"> Action </a> </li>
                    <li class="label bg-purple hidden-xs no-border-radius"><a href="<?php echo base_url('photos/cat/winner')?>"> Winner </a> </li>
                    <li class="label bg-teal-gradient hidden-xs no-border-radius"><a href="<?php echo base_url('photos/cat/city')?>"> City </a> </li>


                    <li class="label label-primary pull-right no-border-radius dropdown" style="margin-right: -10px"><a href="" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Categories ▾ </a>

                        <ul class="dropdown-menu no-border-radius" role="menu" aria-labelledby="dLabel" style="width: 300px;height: 400px">

                            <div class="row">
                                <div class="dropLinks">
                                    <ul class="" style="color: #000;">

                                        <?php foreach($getCategory as $cat):?>
                                        <li><a href="<?php echo base_url('photos/cat/').$cat['category_name']?>" class=""><?php echo $cat['category_name']?></a></li>
                                        <?php endforeach?>
                                    </ul>
                                </div>
                            </div>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <div class="container-fluid" style="min-height: 550px; padding: 0;margin-top: -55px">

        <div id="photo_wrapper" class="photo_wrapper">

            <?php foreach($getPhotos as $photos):?>

                <div class="photo_row">
                    <div class="show-image">
                        <a href="<?php echo base_url('photos/check/'.$photos['picture_id'])?>">
                            <img src="<?php echo base_url('uploads/'.$photos['picture_name'])?>">
                        </a>

                        <div>
                            <label class="award label label-default">
                               <a href="" class="text-white"> <i class="fa fa-thumbs-up"></i></a>
                            </label>

                            <?php if(isset($this->session->userLogginID)):?>
                                <label class="star label label-danger">
                                    <a href="" class="text-white">
                                        <i class="fa fa-star"></i>
                                    </a>
                                </label>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>

            <?php if($countPhoto <=0):?>

                <h6 class="text-center">No Photo Uploaded for this category yet</h6>

            <?php endif?>
            <div class="clearfix"></div>

        </div>




    </div>

    <!-- begins from here -->

    <div class="footer">
        <div class="container">
            <div class="col-sm-12">

                <ul>
                    <li><a>About Us</a></li>
                    <li><a>Support</a></li>
                    <li><a>Privacy</a></li>
                    <li><a>Terms</a></li>
                    <li><a>Judges</a></li>
                    <li><a>Facebook</a></li>
                    <li><a><i class=""></i> Twitter</a></li>
                    <li><a>Instagram</a></li>
                    <li><a>Google+</a></li>
                    <li><a>Disclaimer</a></li>
                </ul>

            </div>

        </div>
    </div>
</section>


<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>

<script src="<?php echo  base_url()?>js/jquery.masonry.js"></script>
<script>
    $(function(){

        var $container = $('#photo_wrapper');

        $container.imagesLoaded( function(){
            $container.masonry({
                itemSelector : '.photo_row'
            });
        });

    });


</script>
</body>
</html>