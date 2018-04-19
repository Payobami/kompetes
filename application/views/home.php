
<section class="content" style="margin-top: 40px;padding: 0;">
    <div class="container-fluid no-margin-xs">

        <div class="mobile-rec visible-xs">
            <ul>
                <li class="active"><a>Following</a></li>
                <li class="no-border"><a>Recommended</a></li>
            </ul>
        </div>

        <div class="col-sm-7 no-padding-xs">
            <div class="photos_wall" style="min-height: 1700px;padding-top: 30px">

                <!-- photorow start here -->
                <div class="photos_row" style="">
                    <div class="photo_title" style="height: 60px;background: #fff;width: 100%; padding: 10px;">
                        <div class="logoPhoto" style="padding-top: 5px">
                            <img src="<?php echo base_url()?>img/logo.png" width="30" height="30">
                            <span> Recommend for you by <a href=""> Prudent2012</a></span>
                        </div>
                    </div>
                   <div class="likeRow">
                        <div>
                            <ul>
                                <li><a href="#war"><i class="fa fa-star fa-2x"></i></a></li>
                                <li><a href="#like"><i class="fa fa-heart fa-2x"></i></a></li>
                            </ul>
                        </div>
                   </div>
                    <div class="photos_content hidden-xs" style="">
                        <a href="#myModal" data-toggle="modal">
                            <img src="<?php echo base_url()?>photo/war.jpg" width="100%" style="margin-top:; z-index: -1">
                        </a>
                    </div>

                    <div class="photos_content photos_content_xs visible-xs" style="">
                        <a href="photo_page.html">
                            <img src="<?php echo base_url()?>photo/war.jpg" width="100%" style="margin-top:; z-index: -1">
                        </a>
                    </div>
                </div>
                <!-- photorow Ends Here -->



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

                <!-- Row for photo -->
                <div class="photos_row" style="">
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
                    <div class="photos_content hidden-xs" style="">
                        <a href="#myModal" data-toggle="modal">
                            <img src="<?php echo base_url()?>photo/food_2.jpg" width="100%" style="margin-top:; z-index: -1">
                        </a>
                    </div>

                    <div class="photos_content photo_content_xs visible-xs" style="">
                        <a href="photo_page.html">
                            <img src="<?php echo base_url()?>photo/food_2.jpg" width="100%" style="margin-top:; z-index: -1">
                        </a>
                    </div>
                </div>

                <!-- open contest -->
                <div class="photos_row" style="">
                    <div class="photo_title" style="height: 60px;background: #fff;width: 100%; padding: 10px;">
                        <div class="logoPhoto" style="padding-top: 5px">
                            <img src="<?php echo base_url()?>img/logo.png" width="30" height="30">
                            <span> Recommend for you <a href="friendship_contests.html"> Frendship contest</a></span>
                        </div>
                    </div>

                    <div class="photos_content photo_contest" style="">
                        <a href="friendship_contests.html">
                            <img src="<?php echo base_url()?>photo/caracica.jpg" width="100%" style="">
                        </a>

                        <div class="photo_contest_info" style="">

                            <h2 class="text-center">Friendship and Relationship Contest</h2>
                            <h6 class="text-center">Win Cannon Camera Lens</h6>
                        </div>

                    </div>
                </div>

                <!-- the modal goes here -->
                <div id="myModal" class="modal" role="dialog" aria-labelledby="myModalLabel">

                    <div class="modal-dialog modal-lg" style="min-width:1200px !important;">
                        <div class="modal-content no-border-radius">

                            <div class="modal-body" style="padding: 0">

                                <div class="col-sm-9" style="padding: 0">
                                    <div class="modal-photo" style="">
                                        <img src="<?php echo base_url()?>photo/war.jpg" style="" class="">
                                    </div>

                                </div>
                                <div class="col-sm-3" style="padding: 0">
                                    <div class="modal-photo-info" style="">

                                        <div class="modal-user-photo" style="">
                                            <img src="<?php echo base_url()?>users_photo/avatar.png" width="40" height="40" class="img-circle">
                                            <span>Prudent2012</span>

                                            <a class="btn btn-danger pull-right btn-xs" data-dismiss="modal">Close</a>
                                            <a class="btn btn-warning pull-right btn-xs">Follow</a>
                                        </div>

                                        <div style="margin-bottom: 10px">
                                            <div class="modal-block" style="">
                                                <i class="fa fa-heart fa-2x"></i>
                                            </div>

                                            <div class="modal-block" style="">
                                                <i class="fa fa-star fa-2x"></i>
                                            </div>
                                        </div>

                                        <br>

                                        <div class="photo_share_row" style="margin-top: 10px">
                                            <small>Share Photo</small>

                                            <ul>
                                                <li><a href=""><i class="fa fa-star"></i></a></li>
                                                <li><a href=""><i class="fa fa-heart"></i></a></li>
                                                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                                <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                                <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href=""><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href=""><i class="fa fa-envelope"></i></a></li>
                                            </ul>
                                        </div>

                                        <div style="margin-top: 60px">
                                            <ul class="nav nav-tabs" style="">
                                                <li class="active"><a data-toggle="tab" href="#details">Details</a></li>
                                               <!-- <li><a data-toggle="tab" href="#actives">Activities</a></li>-->
                                            </ul>
                                        </div>



                                        <div class="tab-content">

                                            <div class="modal-details">

                                                <div id="details" class="tab-pane fade in active more_feature" style="padding-left: 20px">

                                                    <h6 class="text-center" style="margin: 0">War Man</h6>

                                                    <div class="comment_date" style="margin-bottom: 20px">
                                                        <div class="top-info">
                                                            <h4>13</h4>
                                                            <span class="info-title">Comments</span>
                                                        </div>

                                                        <div class="top-info">
                                                            <h4>1432</h4>
                                                            <span class="info-title">views</span>
                                                        </div>

                                                        <div class="top-info">
                                                            <h4>Jan, 2018</h4>
                                                            <span class="info-title">Uploaded</span>
                                                        </div>
                                                    </div>
                                                    <br>

                                                    <div class="sidebar" style="">
                                                        <div class="block tags">
                                                            <br><br>
                                                            <div class="block-mini">Tags</div>
                                                            <a href="<?php echo base_url()?>/search/tags/horns">#horns</a>
                                                            <a href="<?php echo base_url()?>/search/tags/drink">#drink</a>
                                                        </div>



                                                        <div class="block metadata">
                                                            <div class="block-mini"></div>
                                                            <div class="item camera">Camera: <span><a href="<?php echo base_url()?>/search/camera/canon+eos+6d">Canon EOS 6D</a></span></div>
                                                            <div class="item aperture">Aperture: <span>f/8</span></div>
                                                            <div class="item iso_film">ISO: <span>100</span></div>
                                                            <div class="item exposure_time">Shutter Speed: <span>1/250</span></div>
                                                            <div class="item exposure_time">Focal Length: <span>70/1</span></div>
                                                        </div>


                                                        <div class="photo_contest">
                                                            <h6>Photo Contest Submission</h6>
                                                            <ul class="tag-style">
                                                                <li>
                                                                    <a href="">Fashion Statement</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>



                </div>

            </div>


        </div>
        <div class="col-sm-4 hidden-xs" style="min-height: 650px;">
            <div class="right_var" style="z-index: -1">
                <div class="divider-horizontal"></div>

                <div class="row_contest">
                    <a href="#">
                        <div class="contest_thumb_image">
                            <img src="<?php echo base_url()?>photo/war.jpg" class="img-circle" width="35" height="35">
                        </div>
                        <div class="contest_info_row">
                            <h5 class="contest_heading">Male Portrait Contest</h5>
                            <p>Win GoPro Camera</p>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </div>


                <div class="row_contest">
                    <a href="">
                        <div class="contest_thumb_image">
                            <img src="<?php echo base_url()?>photo/70592508_widepreview400.jpg" class="img-circle" width="35" height="35">
                        </div>
                        <div class="contest_info_row">
                            <h5 class="contest_heading">Female Portrait Contest</h5>
                            <p>Win GoPro Camera</p>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </div>


                <div class="row_contest">
                    <a href="">
                        <div class="contest_thumb_image">
                            <img src="<?php echo base_url()?>photo/thumbnail/74223413_75x75.jpg" class="img-circle" width="35" height="35">
                        </div>
                        <div class="contest_info_row">
                            <h5 class="contest_heading">Adventure Contest</h5>
                            <p>Win GoPro Camera</p>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </div>


                <div>
                    <div class=""  style="margin-bottom: -30px; margin-top: 40px">

                        <small>Who to Follow</small>
                    </div>
                    <div class="divider-horizontal"></div>


                    <div class="follow_row">
                        <img src="<?php echo base_url()?>users_photo/avatar.png" width="30" height="30">
                        <a href="#"> Prudent2018</a>
                        <span class="right">
                        <a href="" class="btn btn-success btn-xs">Follow</a>
                    </span>
                    </div>


                    <div class="follow_row">
                        <img src="<?php echo base_url()?>users_photo/avatar.png" width="30" height="30">
                        <a href="#"> Prudent2018</a>
                        <span class="right">
                        <a href="" class="btn btn-success btn-xs">Follow</a>
                    </span>
                    </div>
                </div>


                <div>
                    <div class=""  style="margin-bottom: -30px; margin-top: 40px">

                        <small>Ongoing Voting</small>
                    </div>

                    <div class="divider-horizontal"></div>


                    <div class="ongoing_voting_row">
                        <img src="<?php echo base_url()?>users_photo/avatar.png" width="30" height="30">
                        <a href="#"> Prudent2018</a>
                    </div>

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