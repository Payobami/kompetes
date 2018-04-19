<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>..:: Photo Title Goes Here - Kompetes ::..</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="css/bootstrap_3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/kompetes.css">

    <link rel="stylesheet" type="text/css" media="screen" href="css/masonry.css"/>

    <link rel="icon" href="img/ico.png">

</head>
<body>

<nav class="navbar navbar-black navbar-offcanvas">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed pull-left" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" style="margin-right: -20px">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="index.html">
                <span style="float: right" class="siteName" style="margin-right: 20px;">&ensp; Kompetes</span>
                <img src="img/logo2.png" width="35" style="margin-top: -5px;">
            </a>


            <div class="visible-xs mobile-header">
                <ul>
                    <li style="background: none"><a href="login.html">Login</a></li>
                    <li style="margin-right: 0"><a href="register.html">Register</a></li>
                </ul>

            </div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


            <ul class="nav navbar-nav navbar-right">
                <li><a href="login.html">Login</a></li>
                <li class="dropdown signUpBg">
                    <a href="register.html">Signup</a>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="contests.html">Contests</a></li>
                <li><a href="photos.html">Photos</a></li>
                <li><a href="videos.html">Videos</a></li>
                <li><a href="votes.html">Votes</a></li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<section class="content" style="margin-top: -25px;padding: 0;">

        <div class="container-fluid">

            <!-- sharing link and follow button -->
            <div class="share-follow-row">
                <div class="col-sm-6">
                    <div class="photo_share_row">
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
                </div>


                <div class="col-sm-6">
                    <div class="pull-right" style="margin-top: 20px">
                        <div class="left" style="float: left; margin-right: 10px">
                            <img src="users_photo/avatar.png" width="50" class="img-circle">
                        </div>
                        <div class="right"style="float: right">
                            <span class="userName"><b>Prudent</b></span>
                            <br>
                            <a href="#"><label class="label label-default">Follow</label></a>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="photo_display_container" style="">

                    <!--<a href="" class="left_prev">

                    </a>-->

                    <div class="photo_display">
                        <img src="photo/60722357_large1300.jpg">
                    </div>

                    <!--<a href="" class="right_next">

                    </a>-->
                </div>
            </div>
        </div>



    <div class="" style="background: #fff">
        <div class="container-fluid">
            <div class="commentAward_row" style="min-height: 300px;margin-top: 20px">
                <div class="col-sm-6">

                    <!-- text-area for commenting -->
                    <div class="reviewRow">
                        <div class="reviewerField">
                            <div class="reviwerPic">
                                <img src="users_photo/avatar.png">
                            </div>



                        </div>
                        <div class="reviewerContent">
                            <div class="innerBubble" style="">
                                <div style="padding: 10px;">
                                    <textarea class="form-control" rows="4">Write your comment here not more than 200</textarea>

                                    <input type="button" class="btn btn-primary" value="Post Comment">
                                </div>

                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    <!-- User comment area -->

                    <div class="reviewRow">
                        <div class="reviewerField">
                            <div class="reviwerPic">
                                <img src="users_photo/avatar.png">
                            </div>
                            <div class="rname">Badmus_photo</div>
                        </div>
                        <div class="reviewerContent">
                            <div class="innerBubble">
                                <h5>Badmus Akbar</h5>
                                <span><i class=" glyphicon glyphicon-clock"></i> 2 weeks ago</span>
                                <p>Harmony Hostel is very good but at the moment of writing this review we are suffering for water and its due to the problem of electricity and fuel scarcity.</p>

                                <div style="padding: 10px">
                                    <a href="#"><label class="label label-danger">Reply</label> </a>
                                </div>


                                <!-- reply comment starts from here -->

                                <div class="" style="margin-left: 5px; border-top: 1px dotted #d2d2d2;padding-top: 10px">
                                  <div class="col-sm-8">
                                      <input type="text" class="form-control" name="" style="border-radius: 0">
                                  </div>
                                  <div class="col-sm-4" style="padding-top: 5px">
                                      <button type="submit" class="btn btn-success btn-xs" value="Reply">Submit</button>
                                      <button type="submit" class="btn btn-warning btn-xs" value="Reply">Reply</button>
                                  </div>
                                </div>

                                <div class="clearfix"></div>

                            </div>

                        </div>
                        <div class="clearfix"></div>
                    </div>



                </div>
                <div class="col-sm-4 col-sm-offset-2">

                    <div id="photo-info" class="more_feature sidebar">
                        <a href="">
                            <img src="photo/thumbnail/74465466_75x75.jpg">
                        </a>
                        <a href="#">
                            <img src="photo/thumbnail/73854390_75x75.jpg">
                        </a>

                        <a href="#">
                            <img src="photo/thumbnail/74100406_75x75.jpg">
                        </a>

                        <a href="#">
                            <img src="photo/thumbnail/74223413_75x75.jpg">
                        </a>

                        <a href="#">
                            <img src="photo/thumbnail/74223413_75x75.jpg">
                        </a>

                        <div class="">
                            <small>More from PhotoOwner</small>
                        </div>

                        <div class="comment_date">
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
                        <div class="title-contain">
                            <h3>Drinking.. with bae</h3>
                        </div>


                        <div class="photo_discription">
                            <p>Photo taken with my new canon camera </p>
                        </div>

                        <div class="block tags">
                            <div class="block-mini">Tags</div>
                            <a href="/search/tags/horns">#horns</a>
                            <a href="/search/tags/drink">#drink</a>
                        </div>

                        <div class="block metadata">
                            <div class="block-mini"></div>
                            <div class="item camera">Camera: <span><a href="/search/camera/canon+eos+6d">Canon EOS 6D</a></span></div>
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


                        <div class="extra block awards overflow">
                            <h3>Awards</h3>
                            <div class="block award type-default">
                                Won People's Choice in COWS Photo Challenge<span class="award-date">June, 2017</span>
                            </div>

                            <div class="block award type-default">
                                Winner in African Animals Photo Challenge<span class="award-date">March, 2017</span>
                            </div>

                            <div class="block award type-contestf">
                                Won Contest Finalist in Visions Of Africa Photo Contest<span class="award-date">February, 2017</span>
                            </div>

                            <div class="block award type-default">
                                Won People's Choice in Life Photo Challenge<span class="award-date">August, 2016</span>
                            </div>

                            <div class="block award type-default">
                                Won People's Choice in Tell me a story Photo Challenge<span class="award-date">January, 2016</span>
                            </div>

                        </div>

                        <div class="extra sidebar overflow" style="">
                            <h3>Likes</h3>
                            <items class="block belongs" style="">
                                <item class="peer-recognition" style="">

                                    <div class="peer-users" style="">
                                        <span class="peer-user"><a href="#" target="_parent"><img src="https://photo-viewbug.s3.amazonaws.com/media/mediafiles/2014/09/12/32325871_75x75.jpg" class="delayed" width="45" data-og="45" data-ow="45" style="height: 45px; opacity: 1;"></a>                                                        </span>
                                        <span class="peer-user"><a href="#" target="_parent"><img src="https://photo-viewbug.s3.amazonaws.com/media/mediafiles/2015/11/26/60763325_75x75.jpg" class="delayed" width="45" data-og="45" data-ow="45" style="height: 45px; opacity: 1;"></a>                                                    		<a href="/member/BLPhotography" class="avatar_membership" target="_parent">PRO</a>
                                                                </span>
                                        <span class="peer-user"><a href="#" target="_parent"><img src="https://photo-viewbug.s3.amazonaws.com/media/mediafiles/2016/08/18/67939287_75x75.jpg" class="delayed" width="45" data-og="45" data-ow="45" style="height: 45px; opacity: 1;"></a>                                                        </span>
                                        <span class="peer-user"><a href="#" target="_parent"><img src="https://photo-viewbug.s3.amazonaws.com/media/mediafiles/2016/03/11/64461859_75x75.jpg" class="delayed" width="45" data-og="45" data-ow="45" style="height: 45px; opacity: 1;"></a>                                                    		<a href="/member/terrysigns13" class="avatar_membership" target="_parent">PRO</a>
                                                                </span>
                                        <span class="peer-user"><a href="#" target="_parent"><img src="https://photo-viewbug.s3.amazonaws.com/media/mediafiles/2016/04/30/65770279_75x75.jpg" class="delayed" width="45" data-og="45" data-ow="45" style="height: 45px; opacity: 1;"></a>                                                    		<a href="/member/pamelahodges" class="avatar_membership" target="_parent">PRO</a>
                                                                </span>
                                        <span class="peer-left"><a href="javascript:" data-award="likes" data-page="1" data-left="835">+835</a></span>
                                    </div>
                                </item>
                            </items>
                        </div>

                        <div class="extra overflow">
                            <h3>Peer Award</h3>
                            <items class="block belongs">
                                <item class="peer-recognition">
                                    <div class="peer-title">Peer Award</div>

                                    <div class="peer-users">
                    	                        	<span class="peer-user"><a href="/member/JoaoAscenso" target="_parent"><img src="https://photo-viewbug.s3.amazonaws.com/media/mediafiles/2017/08/30/74833973_75x75.jpg" class="delayed" width="45" data-og="45" data-ow="45" style="height: 45px; opacity: 1;"></a>                                                    		<a href="/member/JoaoAscenso" class="avatar_membership" target="_parent">PRO</a>
                                                                </span>
                                        <span class="peer-user"><a href="/member/tinamerrigan" target="_parent"><img src="https://photo-viewbug.s3.amazonaws.com/media/mediafiles/2017/12/04/76420242_75x75.jpg" class="delayed" width="45" data-og="45" data-ow="45" style="height: 45px; opacity: 1;"></a>                                                        </span>
                                        <span class="peer-user"><a href="/member/SerhiyPochatko" target="_parent"><img src="https://photo-viewbug.s3.amazonaws.com/media/mediafiles/2017/10/18/75704317_75x75.jpg" class="delayed" width="45" data-og="45" data-ow="45" style="height: 45px; opacity: 1;"></a>                                                        </span>
                                        <span class="peer-user"><a href="/member/martinisma" target="_parent"><img src="https://photo-viewbug.s3.amazonaws.com/media/mediafiles/2016/04/07/65304767_75x75.jpg" class="delayed" width="45" data-og="45" data-ow="45" style="height: 45px; opacity: 1;"></a>                                                        </span>
                                        <span class="peer-user"><a href="/member/SherrylM" target="_parent"><img src="https://photo-viewbug.s3.amazonaws.com/media/mediafiles/2017/12/09/76488899_75x75.jpg" class="delayed" width="45" data-og="45" data-ow="45" style="height: 45px; opacity: 1;"></a>                                                    		<a href="/member/SherrylM" class="avatar_membership" target="_parent">PRO</a>
                                                                </span>
                                        <span class="peer-left"><a href="javascript:" data-award="Peer Award" data-page="1" data-left="159">+159</a></span>
                                    </div>
                                </item>
                                <item class="peer-recognition">
                                    <div class="peer-title">Superb Composition</div>

                                    <div class="peer-users">
                    	                        	<span class="peer-user"><a href="/member/creative_odd_duck" target="_parent"><img src="https://photo-viewbug.s3.amazonaws.com/media/mediafiles/2017/11/29/76354777_75x75.jpg" class="delayed" width="45" data-og="45" data-ow="45" style="height: 45px; opacity: 1;"></a>                                                    		<a href="/member/creative_odd_duck" class="avatar_membership" target="_parent">PRO</a>
                                                                </span>
                                        <span class="peer-user"><a href="/member/vicgoodfellow" target="_parent"><img src="https://photo-viewbug.s3.amazonaws.com/media/mediafiles/2017/03/13/71849525_75x75.jpg" class="delayed" width="45" data-og="45" data-ow="45" style="height: 45px; opacity: 1;"></a>                                                        </span>
                                        <span class="peer-user"><a href="/member/rPerry" target="_parent"><img src="https://photo-viewbug.s3.amazonaws.com/media/mediafiles/2017/03/13/71852752_75x75.jpg" class="delayed" width="45" data-og="45" data-ow="45" style="height: 45px; opacity: 1;"></a>                                                    		<a href="/member/rPerry" class="avatar_membership" target="_parent">Premium</a>
                                                                </span>
                                        <span class="peer-user"><a href="/member/kariwatkins" target="_parent"><img src="https://photo-viewbug.s3.amazonaws.com/media/mediafiles/2013/11/02/4890501_75x75.jpg" class="delayed" width="45" data-og="45" data-ow="45" style="height: 45px; opacity: 1;"></a>                                                    		<a href="/member/kariwatkins" class="avatar_membership" target="_parent">PRO</a>
                                                                </span>
                                        <span class="peer-user"><a href="/member/efimbirenbaum" target="_parent"><img src="https://photo-viewbug.s3.amazonaws.com/media/mediafiles/2017/02/03/71206816_75x75.jpg" class="delayed" width="45" data-og="45" data-ow="45" style="height: 45px; opacity: 1;"></a>                                                    		<a href="/member/efimbirenbaum" class="avatar_membership" target="_parent">Premium</a>
                                                                </span>
                                        <span class="peer-left"><a href="javascript:" data-award="Superb Composition" data-page="1" data-left="144">+144</a></span>
                                    </div>
                                </item>

                                <item class="peer-recognition">
                                    <div class="peer-title">Magnificent Capture</div>

                                    <div class="peer-users">
                                        <span class="peer-user">
                                            <a href="#" target="_parent">
                                                <img src="https://photo-viewbug.s3.amazonaws.com/media/mediafiles/2017/11/30/76368699_75x75.jpg" class="delayed" width="45" data-og="45" data-ow="45" style="height: 45px; opacity: 1;">
                                            </a>
                                        </span>
                                        <span class="peer-user">
                                            <a href="#" target="_parent">
                                                <img src="https://photo-viewbug.s3.amazonaws.com/media/mediafiles/2017/11/08/76047879_75x75.jpg" class="delayed" width="45" data-og="45" data-ow="45" style="height: 45px; opacity: 1;"></a>                                                    		<a href="/member/brownmoyondizvo" class="avatar_membership" target="_parent">
                                            PRO
                                            </a>
                                        </span>

                                        <span class="peer-user">
                                            <a href="#" target="_parent">
                                                <img src="https://photo-viewbug.s3.amazonaws.com/media/mediafiles/2012/06/06/1892173_75x75.jpg" class="delayed" width="45" data-og="45" data-ow="45" style="height: 45px; opacity: 1;"></a>                                                    		<a href="/member/maryhale9534" class="avatar_membership" target="_parent">
                                            PRO
                                        </a>
                                        </span>

                                        <span class="peer-left">
                                            <a href="javascript:" data-award="Magnificent Capture" data-page="1" data-left="33">
                                                +33
                                            </a>
                                        </span>
                                    </div>
                                </item>
                                <div style="min-height: 100px"></div>
                            </items>
                        </div>

                        <div class="clearfix"></div>




                    </div>



                </div>
            </div>
        </div>
    </div>






</section>


<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>

</body>
</html>