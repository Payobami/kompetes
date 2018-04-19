 <div class="container" id="about" style="min-height: 300px;">

        <div class="row">

            <div class="col-sm-3">
                <div class="m-t-20" style="min-height: 200px;background: #fff;">
                    <h6 class="f-s-14 text-center" style="border-bottom: 1px solid #d2d2d2">Info</h6>
                    <div class="p-20">
                        <b>Username:</b> Prudent Ayobami <br>
                        <b>Country:</b> Nigeria <br>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="m-t-20" style="min-height: 200px;background: #fff">
                    <h6 class="f-s-14 text-center" style="border-bottom: 1px solid #d2d2d2">About</h6>


                    <p class="p-20 f-s-15 t-c-ash f-Roboto-Condensed">
                        Hi, I am a biologist who has been passionate about photography since I was 7 years old. What I like the most is to photograph nature and everything that implies in that, that is, animals and plants, mountains and valleys, in large landscapes or micro details.
                        Most of my photos were made with mobile devices - IPod Touch, IPad and Galaxy S7, and on those devices I am able to use pro (non-automatic) mode. I also use a Canon PowerShot S5 IS which I like much but I'm still clamping to use out of the automatic.
                        At this point, I think I can make some really good photos and I can start migrating from amateur to professional. This website is the beginning, I hope you like it ... and if you like it, please share it!

                        Ah - sorry, I'm still creating my logo as a photographer
                    </p>

                    <div class="socialList">

                    </div>

                </div>

            </div>

            <div class="col-sm-3">
                <div class="m-t-20" style="background: #fff; min-height: 200px">
                    <h6 class="f-s-14 text-center" style="border-bottom: 1px solid #d2d2d2">Membership</h6>
                    <h6 class="f-s-15 text-center">Joined 23 February, 2018</h6>

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

