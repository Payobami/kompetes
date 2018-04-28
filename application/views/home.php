
<section class="content" style="margin-top: 40px;padding: 0;">
    <div class="container-fluid no-margin-xs">

        <div class="mobile-rec visible-xs">
            <ul>
                <li class="active"><a>Following</a></li>
                <li class="no-border"><a>Recommended</a></li>
            </ul>
        </div>

        <div class="col-sm-7 no-padding-xs">

            <div class="photos_wall" style="min-height: 1700px;padding-top: 30px;padding-bottom: 100px">

                <?php foreach($getPost as $post):?>

                    <?php
                        $postType = $post['post_type'];
                        $postMediaID = $post['media_id'];

                    //get post information

                    $this->db->where("picture_id = '$postMediaID'");
                    $getMediaFile = $this->db->get("uploads")->result();

                    foreach($getMediaFile as $mediaFile);

                    ?>

                    <?php if($postType =='photo'): ?>
                        <!-- photorow start here -->
                        <div class="photos_row" style="margin-bottom: 50px">
                            <div class="photo_title" style="height: 60px;background: #fff;width: 100%; padding: 10px;">
                                <div class="logoPhoto" style="padding-top: 5px">
                                    <img src="<?php echo base_url()?>img/logo.png" width="30" height="30">
                                    <span> Recommend for you by <a href=""> <?php echo $post['poster_name']?></a></span>
                                </div>
                            </div>
                           <div class="likeRow">
                                <div>
                                    <ul>
                                        <li><a href="#war"><i class="fa fa-star fa-2x"></i></a></li>
                                        <li><a href="#like"><i class="fa fa-thumbs-up fa-2x"></i></a></li>
                                    </ul>
                                </div>
                           </div>
                            <div class="photos_content hidden-xs" style="">
                                <a href="<?php echo base_url("photos/check/".$postMediaID) ?>">
                                    <img src="<?php echo base_url('uploads/'.str_replace('_small','',$mediaFile->picture_small_name));?>" width="100%" style="margin-top:; z-index: -1">
                                </a>
                            </div>

                            <div class="photos_content photos_content_xs visible-xs" style="">
                                <a href="<?php base_url("photos/check/".$postMediaID)?>">
                                    <img src="<?php echo base_url('uploads/medium_thumb/'.$mediaFile->picture_medium_name);?>" width="100%" style="margin-top:; z-index: -1">
                                </a>
                            </div>
                        </div>
                        <!-- photorow Ends Here -->
                    <?php endif?>

                    <?php if($postType =='video'): ?>
                        <!-- row for video -->
                        <div class="photos_row video-col" style="margin-bottom: 50px">
                        <div class="photo_title" style="height: 60px;background: #fff;width: 100%; padding: 10px;">
                            <div class="logoPhoto" style="padding-top: 5px">
                                <img src="<?php echo base_url()?>img/logo.png" width="30" height="30">
                                <span> Recommend for you by <a href=""> Prudent2012</a></span>
                            </div>
                        </div>
                        <div class="likeRow">
                            <div>
                                <ul>
                                    <li><a><i class="fa fa-star fa-2x"></i></a></li>
                                    <li><a><i class="fa fa-heart fa-2x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="photos_content video_content" style="margin-top: -40px">

                            <video poster="" controls crossorigin style="width:100%;height: 500px">
                                <!-- Video files -->
                                <source src="<?php echo base_url()?>video/Hero%20Slideshow.MP4" type="video/mp4" style="width: 100%">
                                <!--<source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.webm" type="video/webm">-->

                                <!-- Text track file -->
                                <!--<track kind="captions" label="English" srclang="en" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.en.vtt"
                                    default>-->

                                <!-- Fallback for browsers that don't support the <video> element -->
                                <!--<a href="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.mp4" download>Download</a>-->
                            </video>
                        </div>
                    </div>
                    <!-- Video Row Ends Here -->
                    <?php endif?>

                    <?php if($postType =='contest'): ?>

                        <?php

                        $this->db->where("contest_id = '$postMediaID'");
                        $getContestFile = $this->db->get("contests")->result();

                        foreach($getContestFile as $getContest):

                        ?>
                        <!-- open contest -->
                         <div class="photos_row" style="margin-bottom: 50px;position:;">
                            <div class="photo_title" style="height: 60px;background: #fff;width: 100%; padding: 10px;">
                                <div class="logoPhoto" style="padding-top: 5px">
                                    <img src="<?php echo base_url()?>img/logo.png" width="30" height="30">
                                    <span> Recommend for you <a href="<?php echo base_url("contests/check/".$getContest->contest_id)?>"><?php echo $getContest->contest_name; ?> Contest</a></span>
                                </div>
                            </div>

                            <div class="photos_content photo_contest" style="">
                                <a href="<?php echo base_url("contests/check/".$getContest->contest_id)?>">
                                    <img src="<?php echo base_url("uploads/contests/".$getContest->contest_picture)?>" width="100%" style="">
                                </a>

                                <div class="photo_contest_info" style="">

                                    <h2 class="text-center"><?php echo $getContest->contest_name; ?> Contest</h2>
                                    <h6 class="text-center"><?php echo $getContest->contest_grand_price; ?></h6>
                                </div>

                            </div>
                        </div>


                        <?php endforeach ?>
                    <?php endif ?>

                    <?php if($postType =='challenge'): ?>

                        <?php

                        $this->db->where("challenge_id = '$postMediaID'");
                        $getChallengeFile = $this->db->get("challenges")->result();

                        foreach($getChallengeFile as $getChallenge):

                            ?>
                            <!-- open contest -->
                            <div class="photos_row" style="margin-bottom: 50px;margin-top: 30px;position: relative">
                                <div class="photo_title" style="height: 60px;background: #fff;width: 100%; padding: 10px;">
                                    <div class="logoPhoto" style="padding-top: 5px">
                                        <img src="<?php echo base_url()?>img/logo.png" width="30" height="30">
                                        <span> Recommend for you <a href="<?php echo base_url("")?>"><?php echo $getChallenge->challenge_name; ?> Contest</a></span>
                                    </div>
                                </div>

                                <div class="photos_content photo_contest" style="">
                                    <a href="<?php echo base_url('')?>">
                                        <img src="<?php echo base_url("uploads/challenges/".$getChallenge->challenge_banner)?>" width="100%" style="">
                                    </a>

                                    <div class="photo_contest_info" style="">

                                        <h2 class="text-center"><?php echo $getChallenge->challenge_name; ?> Challenge</h2>
                                        <h6 class="text-center"><?php //echo $getContest->contest_grand_price; ?></h6>
                                    </div>

                                </div>
                            </div>

                        <?php endforeach ?>
                    <?php endif ?>
                <?php endforeach ?>

            </div>


        </div>

        <div class="col-sm-4 hidden-xs" style="min-height: 650px;">
            <div class="right_var" style="z-index: -1">
                <div class="divider-horizontal"></div>
                <?php foreach($getContestAvail as $getContest):?>
                    <?php
                    $timestampStart = strtotime($getContest['contest_start_date']);
                    $formattedStartDate = date('F d', $timestampStart);

                    //vote end
                    $timestampClose = strtotime($getContest['contest_close_date']);
                    $formattedCloseDate = date('F d, Y', $timestampClose);

                    //remaining date
                    $d1=strtotime($getContest['contest_start_date']);
                    $d2=ceil(($d1-time())/60/60/24);

                    ?>
                    <div class="row_contest" style="background: #fff">
                    <a href="<?php echo base_url("contests/check/".$getContest['contest_id'])?>">
                        <div class="contest_thumb_image">
                            <img src="<?php echo base_url('uploads/contests/'.$getContest['contest_picture'])?>" class="img-circle" width="35" height="35">
                        </div>
                        <div class="contest_info_row">
                            <h5 class="contest_heading"><?php echo $getContest['contest_name']?> Contest</h5>
                            <p>
                                <?php echo $getContest['contest_grand_price']?>
                                <small class="pull-right"><?php echo $d2 ?> Days left</small>
                            </p>

                        </div>
                        <div class="clearfix"></div>
                    </a>
                </div>
                <?php endforeach ?>

                <div>
                    <div class=""  style="margin-bottom: -30px; margin-top: 40px">

                        <small>Who to Follow</small>
                    </div>
                    <div class="divider-horizontal"></div>

                    <?php foreach($getMoreFollow as $getMoreF):?>


                    <div class="follow_row">
                        <img src="<?php echo base_url()?>users_photo/avatar.png" width="30" height="30">
                        <a href="#"><?php echo $getMoreF['username']?></a>
                        <span class="right">
                            <a href="" class="btn btn-success btn-xs no-border-radius">Follow</a>
                        </span>
                    </div>
                    <?php endforeach ?>

                </div>


                <div>
                    <div class=""  style="margin-bottom: -30px; margin-top: 40px">

                        <small>Ongoing Voting</small>
                    </div>

                    <div class="divider-horizontal"></div>

                    <?php foreach ($getOngoingVoting as $votingList): ?>


                    <div class="ongoing_voting_row">
                        <a href="<?php echo base_url("vote/info/".$votingList['contest_id'])?>">
                            <img src="<?php echo base_url('uploads/contests/'.$votingList['contest_picture'])?>" width="30" height="30">
                            <?php echo $votingList['contest_name']?> contest Voting
                        </a>
                    </div>

                    <?php endforeach ?>

                </div>


                <div>
                    <div class=""  style="margin-bottom: -30px; margin-top: 40px">
                        <small>Invite more Friends</small>
                    </div>

                    <div class="divider-horizontal"></div>

                    <div class="invite_row">
                        <img src="<?php echo base_url()?>img/icons/Facebook.png">
                        Invite using Facebook
                    </div>


                    <div class="invite_row">
                        <img src="<?php echo base_url()?>img/icons/Twitter.png">
                        Invite using Twitter
                    </div>

                    <div class="invite_row">
                        <img src="<?php echo base_url()?>img/icons/Google-+.png">
                        Invite using Google+
                    </div>


                </div>
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

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>

</body>
</html>