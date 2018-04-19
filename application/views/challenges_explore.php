<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>..::Explore Challenges - Kompetes ::..</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="css/bootstrap_3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/kompetes.css">

    <link rel="stylesheet" type="text/css" media="screen" href="css/masonry.css"/>

    <link rel="icon" href="img/ico.png">

</head>
<body>
<nav class="navbar navbar-black navbar-offcanvas navbar-fixed-top navbar-border">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed pull-left" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" style="margin-right: -20px">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="home.html">
                <span style="float: right" class="siteName" style="margin-right: 20px;">&ensp; Kompetes</span>
                <img src="img/logo2.png" width="35" style="margin-top: -5px;">
            </a>


            <div class="visible-xs mobile-header">
                <ul>
                    <li style="background: none">


                        <a href="#" class="text-center" data-toggle="modal" data-target="#mobileSearch">
                            <i class="fa fa-search text-center"></i>
                        </a>
                    </li>



                    <li class="dropdown" style="background: none">
                        <a class="dropdown-toggle text-center" data-toggle="dropdown">
                            <i class="fa fa-bell text-center"></i>

                            <div class="notificatio_count" style="margin-top: -20px">
                                <b>2</b>
                            </div>
                        </a>


                        <ul class="dropdown-menu no-border-radius" style="min-height: 250px; margin-left: -155px">
                            <div class="notification_drop">
                                <ul>
                                    <li style="background: none">
                                        <a href="#" style="color: #2c2c2c !important;">
                                            Your notification appears here
                                        </a>
                                    </li>

                                    <li style="background: none">
                                        <a href="#" style="color: #2c2c2c !important;">
                                            Your notification appears here
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </ul>
                    </li>

                    <li style="background: none" class="dropdown">
                        <a class="dropdown-toggle text-center" data-toggle="dropdown">
                            <div class="userPhotoDP" style="">
                                <img src="users_photo/avatar.png">
                            </div>
                        </a>

                        <ul class="dropdown-menu no-border-radius" style="min-height: 300px;color: #000;margin-left: -155px">

                            <div class="userDropInfo">
                                <ul style="padding: 0;">
                                    <li class="no-bg width-100" style="min-height: 55px !important;padding-bottom: 5px!important;">
                                        <a href="myProfile.html" style="color: #333333 !important;">
                                            <img src="users_photo/avatar.png" width="40" height="40">
                                            <name>
                                                Yusuf Ayobami
                                                <br>
                                                <small class="text-center">View Profile</small>
                                            </name>
                                        </a>
                                    </li>

                                    <li class="width-100 bg bg-green"><a href="#" style="color: #333333 !important;">Upgrade</a></li>
                                    <li class="no-bg width-100" ><a href="#" style="color: #333333 !important;">My Stats</a></li>
                                    <li class="no-bg width-100"><a href="#" style="color: #333333 !important;">Inbox </a></li>
                                    <li class="no-bg width-100"><a href="#" style="color: #333333 !important;">My points </a></li>
                                    <li class="no-bg width-100"><a href="#" style="color: #333333 !important;">Meet Photographers </a></li>
                                    <li class="no-bg width-100"><a href="#" style="color: #333333 !important;">Account Settings </a></li>
                                    <li class="no-bg width-100"><a href="#" style="color: #333333 !important;">Logout </a></li>
                                </ul>
                            </div>

                        </ul>
                    </li>
                </ul>

            </div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


            <ul class="nav navbar-nav navbar-right">

                <li class="search hidden-xs">
                    <input type="search" class="" placeholder="Search">
                </li>

                <li class="dropdown hidden-xs">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell"></i>
                        <div class="notificatio_count">
                            <b>2</b>
                        </div>
                    </a>

                    <ul class="dropdown-menu" style="min-height: 300px;color: #000">
                        <div class="notification_drop">
                            <ul>
                                <li>
                                    <a href="#" style="color: #2c2c2c !important;">
                                        Your notification appears here
                                    </a>
                                </li>

                                <li>
                                    <a href="#" style="color: #2c2c2c !important;">
                                        Your notification appears here
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </ul>


                </li>


                <li class="dropdown hidden-xs">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown">
                        <div class="userPhotoDP" style="">
                            <img src="users_photo/avatar.png">

                        </div>
                    </a>

                    <ul class="dropdown-menu" style="min-height: 300px;color: #000">

                        <div class="userDropInfo">
                            <ul style="padding: 0;">
                                <li style="min-height: 55px !important;padding-bottom: 5px!important;">
                                    <a href="#" style="color: #333333 !important;">
                                        <img src="users_photo/avatar.png" width="40" height="40">
                                        <name>
                                            Yusuf Ayobami
                                            <br>
                                            <small class="text-center">View Profile</small>
                                        </name>
                                    </a>
                                </li>

                                <li class="bg bg-green"><a href="#" style="color: #333333 !important;">Upgrade</a></li>
                                <li class=""><a href="#" style="color: #333333 !important;">My Stats</a></li>
                                <li class=""><a href="#" style="color: #333333 !important;">Inbox </a></li>
                                <li class=""><a href="#" style="color: #333333 !important;">My points </a></li>
                                <li class=""><a href="#" style="color: #333333 !important;">Meet Photographers </a></li>
                                <li class=""><a href="#" style="color: #333333 !important;">Account Settings </a></li>
                                <li class=""><a href="#" style="color: #333333 !important;">Logout </a></li>
                            </ul>
                        </div>

                    </ul>
                </li>

                <li class="dropdown hidden-xs">
                    <a class=""><i class="fa fa-ellipsis-v"></i> </a>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="home.html">Timeline</a></li>
                <li class="active"><a href="contests.html">Contests</a></li>
                <li><a href="photos.html">Photos</a></li>
                <li><a href="challenges.html">Challenges</a></li>
                <li><a href="videos.html">Videos</a></li>
                <li><a href="votes.html">Votes</a></li>
                <li class="nav-active"><a href="upload.html">+ Upload</a></li>
                <li><a href="upgrade.html"> Upgrade</a></li>

                <li class="visible-xs" style="min-height: 400px"></li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<section class="content" style="margin-top: 40px;padding: 0;">

    <div class="p-t-20 m-b-15" style="background: #fff">
        <div class="contest-cat-line " style="border-bottom: 1px dotted #fff;padding-top: 10px">
            <div class="col-sm-8 col-sm-offset-2">
                <ul>
                    <li class="label label-danger no-border-radius"><a href=""> Explore All</a> </li>
                    <li class="label label-warning no-border-radius"><a href="video_challenges.html"> Video </a> </li>
                    <li class="label label-success hidden-xs no-border-radius"><a href=""> Discover </a> </li>
                    <li class="label label-warning hidden-xs no-border-radius"><a href=""> New </a> </li>
                    <li class="label bg-aqua-gradient hidden-xs no-border-radius"><a href=""> Action </a> </li>
                    <li class="label bg-purple hidden-xs no-border-radius"><a href=""> Winner </a> </li>
                    <li class="label bg-teal-gradient hidden-xs no-border-radius"><a href=""> City </a> </li>


                    <li class="label label-primary pull-right dropdown no-border-radius" style="margin-right: -10px"><a href="" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Categories ▾ </a>

                        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel" style="width: 300px;height: 400px">

                            <div class="row">
                                <div class="dropLinks">
                                    <ul class="" style="color: #000;">
                                        <li><a href="" class="default" style="color: #000;">Prize Value</a></li>
                                        <li><a href="" class="">Closing Soon</a></li>
                                        <li><a href="" class="">Winners</a></li>
                                        <li><a href="" class="">Jury</a></li>
                                        <li><a href="" class="">Abstract</a></li>
                                        <li><a href="" class="">Action</a></li>
                                        <li><a href="" class="">Animals</a></li>
                                        <li><a href="" class="">Architecture</a></li>
                                        <li><a href="" class="">Black &amp; White</a></li>
                                        <li><a href="" class="">Colors</a></li>
                                        <li><a href="" class="">City</a></li>
                                        <li><a href="" class="">Fashion</a></li>
                                        <li><a href="" class="">Fine Nudes</a></li>
                                        <li><a href="" class="">Food</a></li>
                                        <li><a href="" class="">Landscapes</a></li>
                                        <li><a href="" class="">Manipulations</a></li>
                                        <li><a href="" class="">Nature</a></li>
                                        <li><a href="" class="">Night</a></li>
                                        <li><a href="" class="">Objects</a></li>
                                        <li><a href="" class="">People</a></li>
                                        <li><a href="" class="">Transportation</a></li>
                                        <li><a href="" class="">Water</a></li>
                                    </ul>
                                </div>
                            </div>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="challenge-row-text" style="background: #fafafa">


        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3">
                    <div class="profile-grid-block">
                        <a href="challenge_page.html">
                            <div class="grid-image">
                                <img src=" photo/food_2.jpg" width="100%">
                            </div>
                        </a>
                        <div class="grid-user-content">
                            <a href="challenge_page.html">
                                <div class="grid-user-picture">
                                    <img src="users_photo/74043847_280x280.jpg" class="img-circle img-thumbnail" width="100">
                                </div>
                                <h5 class="text-center">Vegetable &amp; Fruit</h5>
                                <p class="m-0 text-center" style="color: #919191">
                                    <small>By Peter </small>
                                </p>
                                <p class="m-0 text-center" style="color: #929292">
                                    <small>Closes in 20days</small>
                                </p>
                            </a>
                            <div class="text-center">
                                <a href="challenge_page.html"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="profile-grid-block">
                        <a href="challenge_page.html">
                            <div class="grid-image">
                                <img src=" photo/action.jpg" width="100%">
                            </div>
                        </a>
                        <div class="grid-user-content">
                            <a href="challenge_page.html">
                                <div class="grid-user-picture">
                                    <img src="users_photo/1759304_280x280.jpg" class="img-circle img-thumbnail" width="100">
                                </div>
                                <h5 class="text-center">Water Action Challenge</h5>
                                <p class="m-0 text-center" style="color: #919191">
                                    <small>By Prudent </small>
                                </p>
                                <p class="m-0 text-center" style="color: #929292">
                                    <small>Closes in 20days</small>
                                </p>
                            </a>
                            <div class="text-center">
                                <a href="challenge_page.html"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="profile-grid-block">
                        <a href="challenge_page.html">
                            <div class="grid-image">
                                <img src=" photo/45533711_medium.jpg" width="100%">
                            </div>
                        </a>
                        <div class="grid-user-content">
                            <a href="challenge_page.html">
                                <div class="grid-user-picture">
                                    <img src="users_photo/60195737_280x280.jpg" class="img-circle img-thumbnail" width="100">
                                </div>
                                <h5 class="text-center">Competes Action Challenge</h5>
                                <p class="m-0 text-center" style="color: #919191">
                                    <small>By John_Doe</small>
                                </p>
                                <p class="m-0 text-center" style="color: #929292">
                                    <small>Closes in 18days</small>
                                </p>
                            </a>
                            <div class="text-center">
                                <a href="challenge_page.html"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="profile-grid-block">
                        <a href="challenge_page.html">
                            <div class="grid-image">
                                <img src=" photo/61221797_medium.jpg" width="100%">
                            </div>
                        </a>
                        <div class="grid-user-content">
                            <a href="challenge_page.html">
                                <div class="grid-user-picture">
                                    <img src="users_photo/56698805_280x280.jpg" class="img-circle img-thumbnail" width="100">
                                </div>
                                <h5 class="text-center">Kids Sittings</h5>
                                <p class="m-0 text-center" style="color: #919191">
                                    <small>By ClintonShort223 </small>
                                </p>
                                <p class="m-0 text-center" style="color: #929292">
                                    <small>Closes in 20days</small>
                                </p>
                            </a>
                            <div class="text-center">
                                <a href="challenge_page.html"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="profile-grid-block">
                    <a href="challenge_page.html">
                        <div class="grid-image">
                            <img src=" photo/food_2.jpg" width="100%">
                        </div>
                    </a>
                    <div class="grid-user-content">
                        <a href="challenge_page.html">
                            <div class="grid-user-picture">
                                <img src="users_photo/74043847_280x280.jpg" class="img-circle img-thumbnail" width="100">
                            </div>
                            <h5 class="text-center">Vegetable &amp; Fruit</h5>
                            <p class="m-0 text-center" style="color: #919191">
                                <small>By Peter </small>
                            </p>
                            <p class="m-0 text-center" style="color: #929292">
                                <small>Closes in 20days</small>
                            </p>
                        </a>
                        <div class="text-center">
                            <a href="challenge_page.html"></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="profile-grid-block">
                    <a href="challenge_page.html">
                        <div class="grid-image">
                            <img src=" photo/action.jpg" width="100%">
                        </div>
                    </a>
                    <div class="grid-user-content">
                        <a href="challenge_page.html">
                            <div class="grid-user-picture">
                                <img src="users_photo/1759304_280x280.jpg" class="img-circle img-thumbnail" width="100">
                            </div>
                            <h5 class="text-center">Water Action Challenge</h5>
                            <p class="m-0 text-center" style="color: #919191">
                                <small>By Prudent </small>
                            </p>
                            <p class="m-0 text-center" style="color: #929292">
                                <small>Closes in 20days</small>
                            </p>
                        </a>
                        <div class="text-center">
                            <a href="challenge_page.html"></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="profile-grid-block">
                    <a href="challenge_page.html">
                        <div class="grid-image">
                            <img src=" photo/45533711_medium.jpg" width="100%">
                        </div>
                    </a>
                    <div class="grid-user-content">
                        <a href="challenge_page.html">
                            <div class="grid-user-picture">
                                <img src="users_photo/60195737_280x280.jpg" class="img-circle img-thumbnail" width="100">
                            </div>
                            <h5 class="text-center">Competes Action Challenge</h5>
                            <p class="m-0 text-center" style="color: #919191">
                                <small>By John_Doe</small>
                            </p>
                            <p class="m-0 text-center" style="color: #929292">
                                <small>Closes in 18days</small>
                            </p>
                        </a>
                        <div class="text-center">
                            <a href="challenge_page.html"></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="profile-grid-block">
                    <a href="challenge_page.html">
                        <div class="grid-image">
                            <img src=" photo/61221797_medium.jpg" width="100%">
                        </div>
                    </a>
                    <div class="grid-user-content">
                        <a href="challenge_page.html">
                            <div class="grid-user-picture">
                                <img src="users_photo/56698805_280x280.jpg" class="img-circle img-thumbnail" width="100">
                            </div>
                            <h5 class="text-center">Kids Sittings</h5>
                            <p class="m-0 text-center" style="color: #919191">
                                <small>By ClintonShort223 </small>
                            </p>
                            <p class="m-0 text-center" style="color: #929292">
                                <small>Closes in 20days</small>
                            </p>
                        </a>
                        <div class="text-center">
                            <a href="challenge_page.html"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="col-sm-3">
            <div class="profile-grid-block">
                <a href="challenge_page.html">
                    <div class="grid-image">
                        <img src=" photo/food_2.jpg" width="100%">
                    </div>
                </a>
                <div class="grid-user-content">
                    <a href="challenge_page.html">
                        <div class="grid-user-picture">
                            <img src="users_photo/74043847_280x280.jpg" class="img-circle img-thumbnail" width="100">
                        </div>
                        <h5 class="text-center">Vegetable &amp; Fruit</h5>
                        <p class="m-0 text-center" style="color: #919191">
                            <small>By Peter </small>
                        </p>
                        <p class="m-0 text-center" style="color: #929292">
                            <small>Closes in 20days</small>
                        </p>
                    </a>
                    <div class="text-center">
                        <a href="challenge_page.html"></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="profile-grid-block">
                <a href="challenge_page.html">
                    <div class="grid-image">
                        <img src=" photo/action.jpg" width="100%">
                    </div>
                </a>
                <div class="grid-user-content">
                    <a href="challenge_page.html">
                        <div class="grid-user-picture">
                            <img src="users_photo/1759304_280x280.jpg" class="img-circle img-thumbnail" width="100">
                        </div>
                        <h5 class="text-center">Water Action Challenge</h5>
                        <p class="m-0 text-center" style="color: #919191">
                            <small>By Prudent </small>
                        </p>
                        <p class="m-0 text-center" style="color: #929292">
                            <small>Closes in 20days</small>
                        </p>
                    </a>
                    <div class="text-center">
                        <a href="challenge_page.html"></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="profile-grid-block">
                <a href="challenge_page.html">
                    <div class="grid-image">
                        <img src=" photo/45533711_medium.jpg" width="100%">
                    </div>
                </a>
                <div class="grid-user-content">
                    <a href="challenge_page.html">
                        <div class="grid-user-picture">
                            <img src="users_photo/60195737_280x280.jpg" class="img-circle img-thumbnail" width="100">
                        </div>
                        <h5 class="text-center">Competes Action Challenge</h5>
                        <p class="m-0 text-center" style="color: #919191">
                            <small>By John_Doe</small>
                        </p>
                        <p class="m-0 text-center" style="color: #929292">
                            <small>Closes in 18days</small>
                        </p>
                    </a>
                    <div class="text-center">
                        <a href="challenge_page.html"></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="profile-grid-block">
                <a href="challenge_page.html">
                    <div class="grid-image">
                        <img src=" photo/61221797_medium.jpg" width="100%">
                    </div>
                </a>
                <div class="grid-user-content">
                    <a href="challenge_page.html">
                        <div class="grid-user-picture">
                            <img src="users_photo/56698805_280x280.jpg" class="img-circle img-thumbnail" width="100">
                        </div>
                        <h5 class="text-center">Kids Sittings</h5>
                        <p class="m-0 text-center" style="color: #919191">
                            <small>By ClintonShort223 </small>
                        </p>
                        <p class="m-0 text-center" style="color: #929292">
                            <small>Closes in 20days</small>
                        </p>
                    </a>
                    <div class="text-center">
                        <a href="challenge_page.html"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <div class="text-center" style="margin-top: 120px;margin-bottom: 40px">

                <a href="#" class="btn btn-default btn-lg" style="width: 270px;border: 3px solid #4bd26f;border-radius: 20px">Load more</a>

            </div>
        </div>


    </div>



</section>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
</body>
</html>