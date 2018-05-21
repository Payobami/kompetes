
<section class="content" style="margin-top: 53px;padding: 0;">

<div class="" style="background: linear-gradient(135deg, rgba(0,0,0,0.4), rgba(0,0,0,0.7)), url('<?php echo base_url('uploads/'.$contest_picture)?>'); background-position: center; background-size: contain; min-height: 580px">

<div class="container">
    <div class="col-sm-8 col-sm-offset-">
        <div class="text- p-t-40">
            <h3 class="t-c-white f-bitter p-t-40">
                How to vote on <?php echo $contest_name ?> Contest
            </h3>
            <p class="t-c-white f-s-18 f-ubuntu" style="line-height: 45px">
                You’ll see a group of images or videos. Select your favourite two. Repeat
                <br>
                You can skip if one or no images/videos are vote-worthy
                <!--We'll show you a set of Images. Choose your favorite and your second favorite. Repeat!
                If one or no Images are vote-worthy you can skip to the next set-->
            </p>

            <div>
                <a href="<?php echo base_url('vote/start/'.$contest_id)?>" class="btn btn-lg no-border-radius" style="background: #fff;height: 60px; min-width: 180px;color: #000;padding-top: 15px">Start Voting</a>
            </div>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="p-t-40 m-t-40 pull-right" style="margin-top: 120px !important;">
            <img src="<?php echo base_url('img/icons/ballot.png')?>">
        </div>

    </div>

</div>


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
