<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/circle.css')?>">
<style>
    .c100:after {
        background: none !important;
    }
</style>
<section class="content" style="margin-top: 50px;padding: 0;">

    <div class="">
        <div class="">
            <h4 class="text-center f-Roboto-Condensed m-0">Chose a contest, be inspired and start voting for your favourite photos</h4>
        </div>

        <?php foreach($getVote as $votelist):?>
            <?php
            $timestampStart = strtotime($votelist['contest_start_date']);
            $formattedStartDate = date('F d', $timestampStart);

            //vote end
            $timestampClose = strtotime($votelist['contest_close_date']);
            $formattedCloseDate = date('F d, Y', $timestampClose);

            //remaining date
            $d1=strtotime($votelist['contest_close_date']);
            $d2=ceil(($d1-time())/60/60/24);

            ?>
        <!-- Contest Row for voting Starts From Here -->
        <div class="contest-vote-row m-b-1 p-0 col-sm-6" style="margin: 0px 0px 1px 0px !important;">
            <div class="show-image" style="min-height: 200px">
                <a class="" href="<?php echo base_url('vote/info/'.$votelist['contest_id'])?>">
                    <div class="text-center image-gradient" style="height: 400px;background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.4)), url('uploads/contests/<?php echo $votelist['contest_picture']?>');background-size: cover;background-position: center;">
                        <!--
                            Please note that the p100 Below represent the percentage rate for the progress level
                             The maximum day left that should be showing should be 10 Days
                          -->
                        <?php

                            $countPercent = $d2*10;
                                if($countPercent >=100){
                                    $percentageLevel = 100;
                                }
                                else{
                                    $percentageLevel = $countPercent;
                                }
                        ?>

                        <div class="c100 p<?php echo $percentageLevel ?> pull-left m-l-20 m-t-20" style="background: none !important;">
                            <span class="text-center p-t-30 " style="line-height: 1em">
                                <b class="f-s-30 t-c-white"><?php echo $d2 ?></b>
                                <br>
                                <b class="f-s-12 t-c-white" style="margin-top: ">Days left</b>
                            </span>

                            <div class="slice" style="background: none !important;">
                                <div class="bar" style="background: none !important;"></div>
                                <div class="fill" style="background: none !important;"></div>
                            </div>
                        </div>
                        <h3 class="t-c-white text-center " style="">
                            <?php echo $votelist['contest_name']?>
                        </h3>
                    </div>

                    <div class="m-0" >
                        <label class="linkBorder label" style="position: relative;margin-bottom: -40px;">
                            Vote Now
                        </label>
                    </div>
                </a>
            </div>
        </div>

        <!-- Contest Row for voting Ends Here -->
        <?php endforeach ?>


    </div>



</section>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
<script src="<?php echo base_url()?>js/jquery.masonry.js"></script>

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
