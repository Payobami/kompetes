
<section class="content" style="margin-top: 40px;padding: 0;">

    <div class="userProfileBg p-t-30" style="background: linear-gradient(80deg, rgba(0,0,0, 0.7), rgba(0,0,0,0.3)), url('<?php echo base_url()?>photo/baby.jpg')">
        <div class="userProfileBlock p-t-40">
            <div class="text-center" style="margin-top: 50px;">
                <img src="<?php if(!empty($userPhoto)){echo base_url('users_photo/'.$userPhoto);}else{ echo base_url('users_photo/avatar.png');}?>" height="120" style="height: 120px" class="img-circle img-responsive img-thumbnail">
            </div>

            <h4 class="text-center userName text-white" style="color: #49e906">
                <?php if(!empty($userFirstName)){ echo $userFirstName. ' '. $userLastname;}else{ echo $username; }?>
            </h4>

            <div class="profile-edit-link text-center" style="border-color: red">
                <a href="<?php echo base_url('profile/update')?>" class="text-center text-white" style="border-color: red">
                    Profile Settings
                </a>
            </div>
        </div>
    </div>

    <div class="userProile-row2" style="min-height: 20px">
        <div class="container-fluid">
            <div class="col-sm-8 col-sm-offset-2">


                <div class="user_profile_menu text-center no-padding-xs no-padding-sm" style="padding-top: 0;margin-top: 10px; margin-bottom: -5px">

                    <ul>
                        <li><a href="<?php echo base_url('profile') ?>" class="active"><?php echo $countUploadPicture ?> Photos</a></li>
                        <li><a href="<?php echo base_url('profile/vote') ?>?page=#award">9 Vote</a></li>
                        <li><a href="<?php echo base_url('profile/contest') ?>?page=#contest">1 Contest</a></li>
                        <li class="hidden-xs"><a href="<?php echo base_url('profile/challenges') ?>?page=#challenges">0 Challenges</a></li>
                        <li class="hidden-xs"><a href="<?php echo base_url('profile/followers') ?>?page=#followers">4 Followers</a></li>
                        <li class="hidden-xs"><a href="<?php echo base_url('profile/following') ?>?page=#following">Following 32</a></li>
                        <li class="hidden-xs"><a href="<?php echo base_url('profile/about') ?>?page=#about">About</a></li>

                        <li class="dropdown visible-xs">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-ellipsis-h fa-1x"></i></a>

                            <ul class="dropdown-menu no-border-radius" style="margin-left: -120px">
                                <li class="width-100" style=""><a class="" href="<?php echo base_url('profile/challenges') ?>?page=#challenges">0 Challenges</a></li>
                                <li class="width-100"><a href="<?php echo base_url('profile/followers') ?>?page=#followers">4 Followers</a></li>
                                <li class="width-100"><a href="<?php echo base_url('profile/following') ?>?page=#following">Following 32</a></li>
                                <li class="width-100"><a href="<?php echo base_url('profile/about') ?>?page=#about">About</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

