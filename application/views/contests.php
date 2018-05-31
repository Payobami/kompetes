<style type="text/css">
    .label :hover{

        background: #f00 !important;
        padding: .2em .6em .3em;
        margin: 0 !important;
        text-decoration: none;
        display: ;
        min-width: 80px !important;
        position: ;



    }





</style>




<section class="content" style="margin-top: 50px; position:relative;">

    <div class="" style="min-height: 710px;padding-top: 0px">

        <div class="p-t-0 m-b-1" style="background: #fff">
            <div class="contest-cat-line " style="border-bottom: 1px dotted #fff;padding-top: 10px">
                <div class="col-sm-8 col-sm-offset-2">
                    <ul>
                        <li class="label label- bg-black no-border-radius"><a href="<?php echo base_url('contests')?>"> Explore All</a> </li>
                        <li class="label bg-black bg-black no-border-radius"><a href="<?php echo base_url('contests/cat/art')?>"> Art</a> </li>
                        <li class="label bg-black no-border-radius"><a href="<?php echo base_url('contests/cat/photography')?>"> Photography</a> </li>
                        <li class="label label- bg-black no-border-radius"><a href="<?php echo base_url('contests/video')?>"> Video </a> </li>
                        <!--<li class="label label-success hidden-xs no-border-radius"><a href="<?php /*echo base_url('contests/cat/discover')*/?>"> Discover </a> </li>
                        <li class="label label-warning hidden-xs no-border-radius"><a href="<?php /*echo base_url('contests/cat/new')*/?>"> New </a> </li>
                        <li class="label bg-aqua-gradient hidden-xs"><a href="<?php /*echo base_url('contests/cat/action')*/?>"> Action </a> </li>
                        <li class="label bg-purple hidden-xs no-border-radius"><a href="<?php /*echo base_url('winner')*/?>"> Winner </a> </li>
                        <li class="label bg-teal-gradient hidden-xs no-border-radius"><a href="<?php /*echo base_url('contests/cat/city')*/?>"> City </a> </li>
-->

                        <li class="label bg-black pull-right no-border-radius dropdown" style="margin-right: -10px"><a href="" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Categories ▾ </a>

                            <ul class="dropdown-menu no-border-radius" role="menu" aria-labelledby="dLabel" style="width: 300px;height: 400px">

                                <div class="row">
                                    <div class="dropLinks">
                                        <ul class="" style="color: #000;">

                                            <?php foreach($getCategory as $cat):?>
                                                <li><a href="<?php echo base_url('contests/cat/').$cat['category_name']?>" class=""><?php echo $cat['category_name']?></a></li>
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

        <div>

            <?php foreach($getContest as $contests):?>

            <div class="grid-contest">
                    <div class="box-crop">
                        <img src="<?php echo base_url('uploads/contests/'.$contests['contest_picture'])?>">
                    </div>
                    <a href="<?php echo base_url('contests/check/'.$contests['contest_id'])?>">
                        <div class="contest-name">
                            <h4 class="text-center"><?php echo $contests['contest_name']?></h4>
                            <p class="text-center"><?php echo $contests['contest_grand_price']?></p>
                        </div>
                    </a>
            </div>
            <?php endforeach ?>
            <div class="clearfix"></div>
            <?php if($countContest <=0):?>
                <div class="text-center">
                   <h6>No contest available for this category</h6>
               </div>
            <?php endif ?>
        </div>
    </div>



