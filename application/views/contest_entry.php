<?php foreach($getContest as $contest)?>
    <?php
$timestampStart = strtotime($contest->contest_start_date);
$formattedStartDate = date('F d', $timestampStart);

//vote end
$timestampClose = strtotime($contest->contest_close_date);
$formattedCloseDate = date('F d, Y', $timestampClose);

//voting starting date
$d1=strtotime($contest->contest_start_date);
$d2=ceil(($d1-time())/60/60/24);

//entry submission end date

$s1=strtotime($contest->contest_close_date);
$s2=ceil(($s1-time())/60/60/24);


?>

<section class="content" style="margin-top: 52px">

    <style type="text/css">
        .contest-bg{
            background: linear-gradient(60deg, rgba(100,0,0,0.5), rgba(0,0,70,.3)), url("<?php echo base_url('uploads/contests/'.$contest->contest_picture)?>");
            background-attachment: fixed;
            height: 100px;
            background-position: center;
            background-size: cover;
            font-family: 'Ubuntu', sans-serif;

        }
        .contest-foot{
            background: linear-gradient(60deg, rgba(100,0,0,0.5), rgba(0,0,70,.3)), url("<?php echo base_url('uploads/contests/'.$contest->contest_picture)?>");
            min-height: 300px;
            background-position: center;
            background-size: cover;
            padding-top: 40px;
            font-family: 'Ubuntu', sans-serif;

        }
    </style>
    <?php if(isset($_SESSION['userLogginID']) AND $contest->entry_price !=='Free' AND $contest->entry_price > $creditUnit AND $contest->contest_status !=='1'){?>
        <div class="alert alert-danger bg-red-gradient no-border-radius text-white p-5 m-b-3 m-t-0 text-center"><a class="close" data-dismiss="alert">x</a> It seems you do not have sufficient credits to enter this contest.. Please subscribe for more credits. <a href="<?php echo base_url('upgrade')?>" target="_new" class="text-black"> click to subscribe</a> </div>
    <?php } ?>

    <div class="contest-bg" style="height: 180px !important;">

        <div class="container-fluid text-center">
            <h6 class="" style="color: #fff; font-family: sans-serif;font-weight: 700;"> <?php echo $contest->contest_name ?> Photo Contest</h6>
            <!--<h5 class="text-center text-white">Share your best photos showing vegetable and fruit</h5>-->

            <div class="text-center">

                <?php
                $contestStart = strtotime($contest->contest_start_date);
                $currentDate = strtotime(date('Y-m-d'));
                $contestClose = strtotime($contest->contest_close_date);


                if($d2 >0 && isset($_SESSION['userLogginID'])){?>

                    <a href="#" data-toggle="modal" data-target="#myModal" class="btn btn-danger btn-lg no-border-radius">
                        Enter Now <?php if($contest->entry_price =="Free"){echo 'for '. $contest->entry_price;}else{echo 'with '. $contest->entry_price.' Credits';} ?>
                    </a>

                <?php }elseif(!isset($_SESSION['userLogginID']) && $d2 > 0){?>
                    <a href="<?php echo base_url('login?redirect=contests/check/'.$contest->contest_id)?>" class="btn bg-black text-white btn-lg no-border-radius">
                        Login to Enter this contest <?php if($contest->entry_price =="Free"){echo 'for '. $contest->entry_price;}else{echo 'with '. $contest->entry_price.' Unit';} ?>
                    </a>
                <?php }?>

                <?php if($d2 < 0 and $s2 > 0 || $contest->contest_status =='1'){?>

                    <a href="<?php echo base_url('vote/info/'.$contest->contest_id)?>" class="btn btn-default btn-lg no-border-radius">
                        Click to Vote
                    </a>

                <?php } elseif($s2 < 0 && $d2 < 0 || $contest->contest_status =='2'){?>

                    <a class="btn btn-default btn-lg no-border-radius">
                        Contest Closed
                    </a>
                <?php }?>
            </div>
        </div>
    </div>

    <?php echo $success ?>

    <!--<div class="" style="background-color: #fff;">
        <div class="contest-cat-line" style="border-bottom: 1px dotted #fff;padding-top: 10px">
            <strong class="p-l-20"> Entries </strong>

            &lt;!&ndash;<div class="col-sm-6 col-sm-offset-3 text-center">
                <ul class="" style="margin-left: 100px">

                    <li class="label label-warning"><a href=""> New </a> </li>
                    <li class="label label-success"><a href=""> Oldest </a> </li>

                </ul>
            </div>&ndash;&gt;
        </div>
    </div>-->


    <div class="container-fluid" style="min-height: 550px; padding: 0;margin-top: -45px">

        <div id="photo_wrapper" class="photo_wrapper">

            <?php
                if($countEntries >=1){
                foreach($getContestEntry as $contestEntry):
            ?>
            <div class="photo_row">
                <div class="show-image">
                    <a href="<?php echo base_url('photos/check/'.$contestEntry['picture_id'])?>">
                        <img src="<?php echo base_url('uploads/medium_thumb/'.$contestEntry['picture_name'])?>">
                    </a>

                    <div>
                        <label class="award label label-default">
                            <i class="fa fa-thumbs-up"></i>
                        </label>

                        <?php if(isset($_SESSION['userLogginID'])){?>
                        <label class="star label label-danger">
                            <i class="fa fa-star"></i>
                        </label>
                        <?php }?>
                    </div>
                </div>
            </div>
            <?php endforeach; }else{ ?>

                    <div class="m-t-20 p-t-20">
                        <h5 class="text-center">No picture uploaded yet for this contest</h5>
                    </div>


            <?php }?>
            <div class="clearfix"></div>
        </div>
    </div>






    <!-- begins from here -->

    <div class="footer">
        <div class="container">
            <div class="col-sm-12">

                <ul class="float-left inl">
                    <li><a>About Us</a></li>
                    <li style="width: 120px"><a>Sponsor Contest</a></li>

                    <li><a>Privacy</a></li>
                    <li><a>Terms</a></li>
                    <li><a>Support</a></li>
                    <li style="max-width: 20px !important; margin-right: -35px;padding-left: 0"><a> <i class="fa fa-facebook m-r-5 m-l-5"></i></a></li>
                    <li style="max-width: 20px !important;margin-right: -35px;padding-left: 0"><a><i class="fa fa-twitter m-r-5 m-l-5"></i></a></li>
                    <li style="width: 20px;margin-right: -35px;"><a><i class="fa fa-instagram m-r-5 m-l-5"></i></a></li>
                    <li style="width: 40px;margin-right: -35px;"><a><i class="fa fa-google-plus m-r-5 m-l-5"></i></a></li>
                    <li style=""><a>Artknews Magazine</a></li>
                </ul>

            </div>

        </div>
    </div>
</section>




<!-- modal for submitting photo -->
<div id="myModal" class="modal fade no-padding-xs" role="dialog">
    <div class="modal-dialog no-border-radius m-0" style="width: 100% !important;">

        <!-- Modal content-->
        <div class="modal-content no-border-radius p-t-20 no-margin-xs" style="height: 675px">
            <div class="text-right m-b-30 p-r-10" >
                <a class="" data-dismiss="modal">X</a>
            </div>
            <div class="p-l-20" style="margin-top: -40px">
                <p>Click the photo(s) you'd like to submit or <a href="<?php echo base_url('upload')?>" class="btn btn-xs btn-success">Upload</a> </p>
            </div>

            <div class="p-l-2-" style="min-height: 50px;background: #d5d5d5"></div>
            <?php echo form_open_multipart('contests/submit_entry/'.$this->uri->segment(3))?>
            <div class="p-20 ">


                <?php
                if(isset($_SESSION['userLogginID'])){

                    $userID = $_SESSION['userLogginID'];

                    $this->db->where("user_id='$userID'");
                    $countPhoto = $this->db->count_all_results('uploads');
                }

                else{

                    $countPhoto =0;
                }



                if($countPhoto >=1){

                    $this->db->where("user_id='$userID'");
                    $getUploadPicture = $this->db->get("uploads")->result_array();
                    $sn = 1; $sn2 = 1;
                    foreach($getUploadPicture as $getPhotoz):
                        ?>
                        <div class="submit-photo">
                            <input type="radio" name="photo" value="<?php echo $getPhotoz['picture_id']?>" id="cb<?php echo $sn++; ?>" />
                            <label for="cb<?php echo $sn2++; ?>"><img src="<?php echo base_url('uploads/small_thumb/'.$getPhotoz['picture_small_name'])?>" /></label>
                        </div>

                        <?php
                    endforeach;

                }
                elseif($countPhoto <=0){ ?>

                    <h6 class="text-center">No picture uploaded by you yet</h6>

                <?php }elseif(!isset($_SESSION['userLogginID'])){ ?>

                    <h6 class="text-center">Please loggin</h6>

                <?php } ?>
            </div>

            <nav class="navbar navbar-default navbar-fixed-bottom voteBottomView" style="background: #fff">
                <div class="container-fluid">
                    <div id="MobileHMenuStick" style="background: #fff">
                        <div class="m-b-10 p-l-20" style="">
                            <div class="pull-left">
                                <div class="">
                                    <input type="hidden" name="entry_type" value="contest">
                                    <input type="submit" value="Submit" class="btn btn-success btn-sm no-border-radius">Submit</input>

                                    By entering this challenge you accept ViewBug's Terms of Use
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </nav>
            <?php echo form_close();?>
        </div>
    </div>

</div>
<!-- End modal for submitting photo -->
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