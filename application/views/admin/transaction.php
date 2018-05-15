<style type="text/css">
    .borderNone{
        border: none !important;
    }
</style>

<div class="main_body">
    <!-- add user modal start -->
    <!-- user content section -->
    <div class="theme_wrapper">
        <div class="container-fluid">


            <?php

            ?>

            <div class="rightWhiteBlock" style="z-index: 2; margin-top: 0px;position:relative;min-height: 120px;">
                <div class="col-sm-3">
                    <div class="blockMenu">
                        <a class="borderNone" href="0">
                            <small class="text-center">
                                Total Subscriber
                                <div class="countCircle teal">
                                    <i class="fa-user fa"></i>
                                </div>
                            </small>
                            <?php //echo $active_users ?>
                        </a>
                    </div>
                </div>


                <div class="col-sm-3">
                    <div class="blockMenu">
                        <a href="1">
                            <small class="text-center">
                                Total Transaction
                                <div class="countCircle dark-magenta">
                                    <i class="fa-home fa"></i>
                                </div>
                            </small>
                            <?php //echo $pending_users ?>
                        </a>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="blockMenu">
                        <a href="2">
                            <small class="text-center">
                                Total Credit Sold
                                <div class="countCircle orange">
                                    <i class="fa-suitcase fa"></i>
                                </div>
                            </small>
                            <?php //echo $disq_users ?>
                        </a>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="blockMenu">
                        <a href="0">
                            <small class="text-center">
                                Total Credit Used
                                <div class="countCircle green">
                                    <i class="fa-save fa"></i>
                                </div>
                            </small>
                            <?php //echo $countAllUsers ?>
                        </a>
                    </div>
                </div>
            </div>

            <div class="theme_section">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="th_manage_user">
                            <h3 class="th_title">Register User List</h3>




                            <div class="table-responsive">
                                <table class="commonTable table table-striped table-bordered manage_user" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>User Name</th>
                                        <th>Email</th>
                                        <th>Location</th>
                                        <th>Status</th>
                                        <th class="action">Action</th>
                                    </tr>
                                    <thead>
                                    <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>User Name</th>
                                        <th>Email</th>
                                        <th>Location</th>
                                        <th>Status</th>
                                        <th class="action">Action</th>
                                    </tr>
                                    <tfoot>
                                    <tbody>


                                    <tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
