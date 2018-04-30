<script type="text/javascript">



    //add the product price with hosting price

    var hostingPrice = new Array();
    hostingPrice['1'] = 1;
    hostingPrice['3'] = 3;
    hostingPrice['6'] = 6;
    hostingPrice['12'] = 12;
    hostingPrice['18'] = 18;
    hostingPrice['24'] = 24;
    hostingPrice['36'] = 36;
    hostingPrice['60'] = 60;
    hostingPrice['150'] = 150;
    hostingPrice['300'] = 300;
    hostingPrice['500'] = 500;

    function getHostingPlanPrice (){

        var hosting_price = 0;
        var theForm = document.forms['upgrade'];
        var hosting_plan = theForm.elements['unit'];

        for(var i =0; i < hosting_plan.length; i++){

            if(hosting_plan[i].checked){
                hosting_price = hostingPrice[hosting_plan[i].value];
                break;
            }
        }
        return hosting_price;
    }

    function calculateTotalPrice(){
        var total = getHostingPlanPrice()+ 0
        //display result

        var divobj = document.getElementById('totalPrice');
        divobj.style.display='';
        divobj.innerHTML = ""+total;

    }



    function revealMore(){
       document.getElementById('reveal').removeAttribute('hidden');
       document.getElementById('hide').setAttribute('hidden', 'hidden');

    }

</script>


<style type="text/css">
    *{font-family: 'Roboto', sans-serif;}

    @keyframes click-wave {
        0% {
            height: 20px;
            width: 20px;
            opacity: 0.35;
            position: relative;
        }
        100% {
            height: 20px;
            width: 20px;
            margin-left: -5px;
            margin-top: -5px;
            opacity: 0;
        }
    }

    .option-input {
        -webkit-appearance: none;
        -moz-appearance: none;
        -ms-appearance: none;
        -o-appearance: none;
        appearance: none;
        position: relative;
        top: 5.5px;
        right: 0;
        bottom: 0;
        left: 0;
        height: 23px;
        width: 23px;
        transition: all 0.15s ease-out 0s;
        background: #cbd1d8;
        border: none;
        color: #fff;
        cursor: pointer;
        display: inline-block;
        margin-right: 0.5rem;
        outline: none;
        position: relative;
        z-index: 1000;
    }
    .option-input:hover {
        background: #9faab7;
    }
    .option-input:checked {
        background: #0461A7;
        padding: 2px;
    }
    .option-input:checked::before {
        height: 20px;
        width: 20px;
        position: absolute;
        content: '✔';
        display: inline-block;
        font-size: 20.66667px;
        text-align: center;
        line-height: 20px;
    }
    .option-input:checked::after {
        -webkit-animation: click-wave 0.65s;
        -moz-animation: click-wave 0.65s;
        animation: click-wave 0.65s;
        background: #40e0d0;
        content: '';
        display: block;
        position: relative;
        z-index: 100;
    }
    .option-input.radio {
        border-radius: 50%;
    }
    .option-input.radio::after {
        border-radius: 50%;
    }

</style>






<section class="content" style="margin-top: 55px;padding: 0; background: url(<?php echo base_url('img/bg/bg3.jpg')?>) no-repeat; background-size: cover">

    <div class="container-fluid">

        <div class="col-sm-5 col-sm-offset-1 m-t-5  no-padding-xs">

            <div class="" style="min-height: 500px;background: #fff">
                <div class="bg-blue-gradient text-center" style="height: 70px;">
                    <h6 class="text-white m-b-0 p-b-0 f-s-20 f-bitter" style="margin-bottom: -10px !important;">Credits</h6>
                    <p class="text-white m-t-0 p-t-0 f-bitter"> Get access to competes for any photo contests</p>
                </div>

                <?php echo form_open("upgrade/checkout", array('id'=>'upgrade'))?>
                    <div class="p-l-10 p-r-10">

                        <div class="unit_price">
                            <label class="p-t-10">
                            <div class="col-xs-6">
                                <input type="radio" onclick="calculateTotalPrice()" class="option-input radio" name="unit" value="1">
                                1 <span> credits </span>
                            </div>
                            <div class="col-xs-6 text-right">
                                £12 <span>GBP</span>
                                <br>
                                <div style="margin-top:-13px">
                                    <small>£12/credit</small>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </label>
                        </div>


                        <div class="unit_price">
                            <label class="p-t-10">
                                <div class="col-xs-6">
                                    <input type="radio" onclick="calculateTotalPrice()" class="option-input radio" name="unit" value="3">
                                    3 <span> credits </span>
                                </div>
                                <div class="col-xs-6 text-right">
                                    £33 <span>GBP</span>
                                    <br>
                                    <div style="margin-top:-13px">
                                        <small>£11/credit</small>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </label>
                        </div>

                        <div class="unit_price">
                        <label class="p-t-10">
                            <div class="col-xs-6">
                                <input type="radio" onclick="calculateTotalPrice()" class="option-input radio" name="unit" value="6">
                                6 <span> credits </span>
                            </div>
                            <div class="col-xs-6 text-right">
                                £60 <span>GBP</span>
                                <br>
                                <div style="margin-top:-13px">
                                    <small>£10/credit</small>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </label>
                    </div>

                        <div class="unit_price">
                        <label class="p-t-10">
                            <div class="col-xs-6">
                                <input type="radio" onclick="calculateTotalPrice()" class="option-input radio" name="unit" value="12">
                                12 <span> credits </span>
                            </div>
                            <div class="col-xs-6 text-right">
                                £108 <span>GBP</span>
                                <br>
                                <div style="margin-top:-13px">
                                    <small>£9/credit</small>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </label>
                    </div>

                        <div class="unit_price">
                        <label class="p-t-10">
                            <div class="col-xs-6">
                                <input type="radio" onclick="calculateTotalPrice()" class="option-input radio" name="unit" value="18">
                                18 <span> credits </span>
                            </div>
                            <div class="col-xs-6 text-right">
                                £144 <span>GBP</span>
                                <br>
                                <div style="margin-top:-13px">
                                    <small>£8/credit</small>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </label>

                    </div>

                    <div class="unit_price">
                        <label class="p-t-10">
                            <div class="col-xs-6">
                                <input type="radio" onclick="calculateTotalPrice()" class="option-input radio" name="unit" value="24">
                                24 <span> credits </span>
                            </div>
                            <div class="col-xs-6 text-right">
                                £168 <span>GBP</span>
                                <br>
                                <div style="margin-top:-13px">
                                    <small>£7/credit</small>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </label>
                    </div>

                        <div class="text-center m-t-20" id="hide">
                            <a onclick="revealMore()" >Check for more</a>
                        </div>
                        
                        <div class="" hidden id="reveal">


                            <div class="unit_price">
                                <label class="p-t-10">
                                    <div class="col-xs-6">
                                        <input type="radio" onclick="calculateTotalPrice()" class="option-input radio" name="unit" value="36">
                                         36 <span> credits </span>
                                    </div>
                                    <div class="col-xs-6 text-right">
                                        £216 <span>GBP</span>
                                        <br>
                                        <div style="margin-top:-13px">
                                            <small>£6/credit</small>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </label>
                            </div>


                            <div class="unit_price">
                                <label class="p-t-10">
                                    <div class="col-xs-6">
                                        <input type="radio" onclick="calculateTotalPrice()" class="option-input radio" name="unit" value="60">
                                        60 <span> credits </span>
                                    </div>
                                    <div class="col-xs-6 text-right">
                                        £360 <span>GBP</span>
                                        <br>
                                        <div style="margin-top:-13px">
                                            <small>£6/credit</small>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </label>
                            </div>



                            <div class="unit_price">
                                <label class="p-t-10">
                                    <div class="col-xs-6">
                                        <input type="radio" onclick="calculateTotalPrice()" class="option-input radio" name="unit" value="150">
                                        150 <span> credits </span>
                                    </div>
                                    <div class="col-xs-6 text-right">
                                        £870 <span>GBP</span>
                                        <br>
                                        <div style="margin-top:-13px">
                                            <small>£5.8/credit</small>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </label>
                            </div>


                            <div class="unit_price">
                                <label class="p-t-10">
                                    <div class="col-xs-6">
                                        <input type="radio" onclick="calculateTotalPrice()" class="option-input radio" name="unit" value="300">
                                        300 <span> credits </span>
                                    </div>
                                    <div class="col-xs-6 text-right">
                                        £1,650 <span>GBP</span>
                                        <br>
                                        <div style="margin-top:-13px">
                                            <small>£5.5/credit</small>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </label>
                            </div>


                            <div class="unit_price">
                                <label class="p-t-10">
                                    <div class="col-xs-6">
                                        <input type="radio" onclick="calculateTotalPrice()" class="option-input radio" name="unit" value="500">
                                        500 <span> credits </span>
                                    </div>
                                    <div class="col-xs-6 text-right">
                                        £2,500 <span>GBP</span>
                                        <br>
                                        <div style="margin-top:-13px">
                                            <small>£5/credit</small>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </label>
                            </div>







                        </div>


                    <div class="form-group text-center m-t-25 p-b-20">
                        <button type="submit"   class="btn btn-default btn-lg no-border-radius" style="width: 100%; border: 3px solid #007BC4;border-radius: 20px;">  Buy <span id="totalPrice"></span>  Credits </button>
                    </div>




                </div>
                <?php echo form_close()?>


            </div>
        </div>

        <div class="col-sm-6 m-t-40 no-padding-xs text-left">
            <div style="min-height: 300px; background: rgba(223,223,233, 0.7)">
                <h3 class="text-center text-red f-bitter"> <img src="<?php echo base_url('img/icons/credit-card-red.png')?>">  Why Credits </h3>

                <p class="f-s-18 p-20 f-ubuntu"> It’s up to you how you want to use credits – buy just enough for the photo contests and challenges you want to enter – the more you buy, the less they cost.  </p>
            </div>


        </div>


    </div>
</section>