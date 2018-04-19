<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>..:: Votes - Kompetes ::..</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="css/bootstrap_3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/kompetes.css">
    <link rel="stylesheet" type="text/css" href="css/circle.css">

    <link rel="stylesheet" type="text/css" media="screen" href="css/masonry.css"/>

    <link rel="icon" href="img/ico.png">

    <style>
        .c100:after {
            background: none !important;
        }
    </style>

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

<section class="content" style="margin-top: -15px;padding: 0;">

<div class="" style="background: linear-gradient(135deg, rgba(0,0,0,0.4), rgba(0,0,0,0.7)), url('img/bg/1-grid-example.png'); background-position: center; background-size: contain; min-height: 580px">

<div class="container">
    <div class="col-sm-8 col-sm-offset-2">
        <div class="text-center p-t-40">
            <h3 class="t-c-white f-bitter p-t-40">
                Get ready to vote on the Beautiful Baby Girl Photo Contest
            </h3>
            <p class="t-c-white f-s-18 f-ubuntu" style="line-height: 45px">
                We'll show you a set of Images. Choose your favorite and your second favorite. Repeat!
                If one or no Images are vote-worthy you can skip to the next set
            </p>

            <div>
                <a href="vote_start.html" class="btn btn-lg no-border-radius" style="background: #fff;height: 60px; min-width: 180px;color: #000;padding-top: 15px">Start Voting</a>
            </div>
        </div>
    </div>
</div>


</div>



</section>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
<script src="js/jquery.masonry.js"></script>

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
