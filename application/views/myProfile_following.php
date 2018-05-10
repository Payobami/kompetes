    <div class="container-fluid" id="following" style="min-height: 550px; margin-top:">
        <div class="row">


            <?php foreach($getFollowingx as $followerx):?>

            <?php

            $followerID = $followerx['user_id'];
            $followersName = $followerx['username'];

            //get follower's photo
            $this->db->select('picture');
            $this->db->where("user_id = '$followerID'");
            $getFollowerPic = $this->db->get('userz')->result();
            foreach($getFollowerPic as $followerPhoto);

            //get photos uploaded by followers
            $this->db->where("user_id = '$followerID'");
            $getFollowerCover = $this->db->get('uploads')->result();
            foreach ($getFollowerCover as $itemCover);

            //check if the user is following back
                if(isset($_SESSION['userLogginID']) && !empty($this->uri->segment(3))){

                    $userID = $_SESSION['userLogginID'];
                }
                else{

                    $userID = $this->uri->segment(3);

                }
            //$this->db->select("follower_id");

            $this->db->where("follower_id ='$userID'");
            $this->db->limit(1);
            $getFollowingBack = $this->db->get('followingx')->result();




            ?>



            <div class="col-sm-3">
                <div class="profile-grid-block">
                    <a href="<?php echo base_url("")?>">
                        <div class="grid-image">
                            <img src="<?php if(!empty($itemCover->picture_small_name)){echo base_url('uploads/small_thumb/'.$itemCover->picture_small_name);}else{echo base_url('users_photo/user_caption/caption.jpg'); }; ?>" style="height: 250px" width="100%">
                        </div>
                        <div class="grid-user-content">
                            <div class="grid-user-picture">
                                <img src="<?php if(!empty($followerPhoto->picture)){echo base_url('users_photo/'.$followerPhoto->picture);}else{echo base_url('users_photo/avatar.png');} ?>" class="img-circle img-thumbnail" width="100">
                            </div>
                            <h5 class="text-center f-raleway f-s-18"><?php echo $followersName ?></h5>

                            <div class="text-center">
                                <a class="btn btn-success no-border-radius">
                                    Unfollow
                                </a>
                            </div>

                        </div>
                    </a>
                </div>
            </div>
            <?php endforeach ?>




        </div>

        <div class="row" style="margin-top: 50px">
            <!-- pagination start here
            <div class="col-sm-8 col-sm-offset-2 text-center">
                <ul class="pagination pagination-centered no-border-radius">
                    <li class="no-border-radius"><a href="#">First</a></li>
                    <li><a href="#">Previous</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">6</a></li>
                    <li><a href="#">7</a></li>
                    <li><a href="#">Next</a></li>
                    <li><a href="#">Last</a></li>
                    <li class="no-border-radius"><a href="#">Goto</a></li>
                </ul>
            </div>-->

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

