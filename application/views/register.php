<section class="content" style="margin-top: -16px">
    <div class="container-fluid register-bg" style="min-height: 520px">


        <div class="col-sm-4 col-sm-offset-4 col-xs-12 col-xs-offset-0">


            <div class="form-style" style="">
                <div style="z-index: 10000;">
                    <h3 style="color: #fff;margin-bottom: 20px" class="f-bitter">Create Account</h3>
                    <?php echo form_open() ?>
                    <?php echo $success ?>
                        <div class="form-group">
                            <!--<label>Username</label>-->
                            <?php echo form_error('username')?>
                            <input type="text" name="username" value="<?php echo set_value('username')?>" class="container" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <!--<label>Email</label>-->
                            <?php echo form_error('email') ?>
                            <input type="email" name="email" value="<?php echo set_value('email')?>" class="container" placeholder="Email">
                        </div>

                        <div class="form-group">
                            <!--<label>Password</label>-->
                            <?php echo form_error('password')?>
                            <input type="password" name="password" class="container" placeholder="Password">
                        </div>

                        <div class="form-group">
                            <!--<label>Re-Password</label>-->
                            <?php echo form_error('cpassword')?>
                            <input type="password" name="cpassword" class="container" placeholder="Confirm Password">
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" class="checkbox">
                                Receive email updates from your followers
                            </label>

                        </div>

                        <div class="form-group">
                            <input type="submit" value="Create Account" class="btn btn-danger btn-lg" name="submit" style="border-radius: 0; width: 100%; background:#ff5a2c">
                        </div>

                        <div class="text-center"style="color: #f00;font-weight: 700;padding-bottom: 10px">

                            <span class="text-center">OR</span>

                        </div>

                        <div>
                            <a href="#" class="btn btn-primary btn-lg" style="width: 100%;border-radius: 0">Connect with Facebook</a>
                        </div>
                    <?php echo form_close() ?>
                </div>
            </div>
            
            
            <p class="text-center" style="color: #fff;">By creating your account you agree with our <a href="#"><b>terms</b></a> of service. </p>
        </div>
    </div>