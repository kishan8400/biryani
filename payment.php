<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment</title>
    <meta name="description" content=" Fiesta Biryani - Order Biryani " />
    <meta name="keywords" content=" Fiesta Biryani - Order Biryani " />
    <meta name="subject" content=" Fiesta Biryani - Order Biryani " />
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <meta name="Author" content="">
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index, follow" />
    <meta name="classification" content="Fiesta Biryani - Order Biryani" />
    <meta name="distribution" content="Global" />
    <meta name="language" content="EN-US" />
    <meta name="expires" content="never" />
    <meta name="resource-type" content="Fiesta Biryani - Order Biryani" />
    <meta name="revisit-after" content="20 days" />
    <meta name="rating" content="General" />
    <meta name="copyright" content="2021" />
    <meta http-equiv="Expires" content="never" />
    <meta name="Voluntary Content Rating" content="general" />
    <meta name="ObjectType" content="HomePage" />
    <meta name="doc-class" content="Fiesta Biryani - Order Biryani" />
    <meta name="MSSmartTagsPreventParsing" content="true" />
    <meta property='og:locale' content='en_us' />
    <meta property='og:title' content='Fiesta Biryani - Order Biryani' />
    <meta property='og:url' content='' />
    <meta property='og:site_name' content='Fiesta Biryani - Order Biryani' />
    <meta property='og:type' content='article' />
    <meta name="language" content="en-us" />
    <meta name="contactstreetaddress1" content="" />
    <meta name="contactcity" content="Lucknow" />
    <meta name="contactstate" content="Uttar Pradesh" />
    <meta name="contactzipcode" content="226024" />
    <meta charset="UTF-8" />
    <link rel="icon" href="assets/images/apple-icon-60x60.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        type="text/css">
    <link href="./assets/css/owl.carousel.min2.css" rel="stylesheet" type="text/css">
    <link href="./assets/css/animate.css" rel="stylesheet" type="text/css">
    <link href="./assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="./assets/css/date-picker.css" rel="stylesheet" type="text/css">
    <link href="./assets/css/jquery.datetimepicker.min.css" rel="stylesheet" type="text/css">
    <style>
        @keyframes fadeInUp {
            from {
                transform: translate3d(0, 40px, 0)
            }

            to {
                transform: translate3d(0, 0, 0);
                opacity: 1
            }
        }

        @-webkit-keyframes fadeInUp {
            from {
                transform: translate3d(0, 40px, 0)
            }

            to {
                transform: translate3d(0, 0, 0);
                opacity: 1
            }
        }

        @media screen and (max-width:767px) {
            .animated {
                animation-duration: 1s;
                animation-fill-mode: both;
                -webkit-animation-duration: 1s;
                -webkit-animation-fill-mode: both
            }

            .animatedFadeInUp {
                opacity: 0
            }

            .fadeInUp {
                opacity: 0;
                animation-name: fadeInUp;
                -webkit-animation-name: fadeInUp;
            }

            .modal-content {
                border: 0px;
                border-radius: 0px;
            }

            .modal {
                padding: 0px;
            }

            .modal-dialog {
                padding: 0px !important;
                margin: 0px !important;
                border-radius: 0px;

            }

            .fullwidth {
                width: 100%;
                height: 100%;
            }

            #fullsearch .modal-content {
                border: 0px;
                border-radius: 0px;
                height: 100%;
                /* top: -2px; */
                /* margin-top: -2px; */
            }
        }
    </style>

</head>

<body class="bg_gry">
    <!---Header Page-->
    <div class="header_2 mnone">
        <?php include_once( 'header.php');?>

    </div>




    <div class="none">

        <div class="header_mobile">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        <a href="index.php"> <img src="./assets/images/logo.png" alt=""> </a>
                    </div>
                    <div class="col-6">
                        <div class="top_btn pull-right">

                            <!-- <a href="#" class="singup_btn sign" data-toggle="modal" data-target="#Login_modal1"> Login
                            </a> -->
                            <div class="dropdown1">
                                <span class="singup_btn sign">Kishan Kumar <i class="fa fa-angle-down"></i> </span>
                                <div class="dropdown-content1">
                                    <a href="orders.php"> Profile </a>
                                    <a href="orders.php"> Address </a>
                                    <a href="orders.php"> Orders </a>
                                    <a href="index.php"> Logout </a>

                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid p-0">




            <div class="modal-header bg-y">
                <h3 class="w-100 font-2"> Review Cart </h3>
            </div>


            <div class="modal-body add_txt ">
                <div class="row">
                    <div class="item_cart item_cart2 w-100">

                        <div class="text-center">
                            <p class="text-center">Payment Details</p>
                        </div>

                        <div class="item_body">

                            <!-- <div class="py_one">
                                       <input type="radio" id="radio"> <label for="radio">Pay Online </label>
                                        </div> -->
                            <div class="radio">
                                <input id="radio-1" name="radio" type="radio" checked>
                                <label for="radio-1" class="radio-label">Pay Online</label>
                            </div>

                            <div class="row">
                                <div class="col-md-4 col-4 pr-0">
                                    <div class="radio">
                                        <input id="radio-3" name="online" type="radio">
                                        <label for="radio-3" class="radio-label"></label> <img style="width: 50px;"
                                            src="./assets/images/razorpay_cc_logo.svg" alt="">
                                    </div>


                                </div>
                                <div class="col-md-8 col-8 ">
                                    <p>Debit/ Credit Cards, Netbanking, and more
                                        UPI, Debit/Credit Cards, Netbanking, Wallet and more..


                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-4 pr-0">
                                    <div class="radio">
                                        <input id="radio-4" name="online" type="radio">
                                        <label for="radio-4" class="radio-label"></label> <img style="width: 50px;"
                                            src="./assets/images/mobikwik_logo.png" alt="">
                                    </div>


                                </div>
                                <div class="col-md-8 col-8 ">
                                    <p>Get 50% CASHBACK. The minimum assured cashback is Rs.75. Use Code FB10 on
                                        Mobikwik to avail of the offer. Offer till: 31st Oct, 2021. Minimum transaction
                                        amount via MobiKwik to avail the offer is Rs 399 Offer valid once per user per
                                        month during the offer


                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 col-4 pr-0">
                                    <div class="radio">
                                        <input id="radio-5" name="online" type="radio">
                                        <label for="radio-5" class="radio-label"></label> <img style="width: 50px;"
                                            src="./assets/images/paytm_logo.png" alt="">
                                    </div>


                                </div>
                                <div class="col-md-8 col-8 ">
                                    <p>Debit/ Credit Cards, Netbanking, and more
                                        UPI, Debit/Credit Cards, Netbanking, Wallet and more..


                                    </p>
                                </div>
                            </div>


                            <div class="radio">
                                <input id="radio-2" name="radio" type="radio">
                                <label for="radio-2" class="radio-label">Pay on Pickup</label>
                            </div>


                        </div>


                    </div>
                    <div class="col-md-5 col-12 pl-0">
                        <div class="item_cart">
                            <div class="">

                             <a href="order-success.php">   <button class="item_head text-center border-0"> Place Order </button> </a>
                            </div>



                        </div>

                    </div>
                </div>


            </div>


        </div>




    </div>

    <div class="mnone">
    <div class="header_2 mnone">
        <?php include_once( 'header.php');?>
        <div class="bred_crumb">
            <img src="./assets/images/banner4.jpg" alt="">
            <h1>Payment Details </h1>

            
        </div>
    </div>

    <div class="content">


        <div class="container bg-white pt-2">




            <!-- <div class=" mt-5 bg-y">
                <h3 class="w-100 font-2">  </h3>
            </div> -->



            <div class="row">
                <div class="item_cart item_cart2 w-100 padding_t ">


                    <div class="row">

                        <div class="col-md-4 col-12 ">

                            <div class="radio">
                                <input id="radio-11" name="radio" type="radio" checked>
                                <label for="radio-11" class="radio-label">Pay Online</label>
                            </div>
                            <div class="radio">
                                <input id="radio-22" name="radio" type="radio">
                                <label for="radio-22" class="radio-label">Pay on Pickup</label>
                            </div>
                        </div>
                        <div class="col-md-8 col-12">

                            <div class="row">
                                <div class="col-md-3 col-3">
                                    <div class="radio">
                                        <input id="radio-33" name="online" type="radio">
                                        <label for="radio-33" class="radio-label"></label> <img style="width: 50px;"
                                            src="./assets/images/razorpay_cc_logo.svg" alt="">
                                    </div>


                                </div>
                                <div class="col-md-9 col-9 ">
                                    <p>Debit/ Credit Cards, Netbanking, and more
                                        UPI, Debit/Credit Cards, Netbanking, Wallet and more..


                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-3">
                                    <div class="radio">
                                        <input id="radio-44" name="online" type="radio">
                                        <label for="radio-44" class="radio-label"></label> <img style="width: 50px;"
                                            src="./assets/images/mobikwik_logo.png" alt="">
                                    </div>


                                </div>
                                <div class="col-md-9 col-9 ">
                                    <p>Get 50% CASHBACK. The minimum assured cashback is Rs.75. Use Code FB10 on
                                        Mobikwik to avail of the offer. Offer till: 31st Oct, 2021. Minimum transaction
                                        amount via MobiKwik to avail the offer is Rs 399 Offer valid once per user per
                                        month during the offer


                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-3">
                                    <div class="radio">
                                        <input id="radio-55" name="online" type="radio">
                                        <label for="radio-55" class="radio-label"></label> <img style="width: 50px;"
                                            src="./assets/images/paytm_logo.png" alt="">
                                    </div>


                                </div>
                                <div class="col-md-9 col-9 ">
                                    <p>Debit/ Credit Cards, Netbanking, and more
                                        UPI, Debit/Credit Cards, Netbanking, Wallet and more..


                                    </p>
                                </div>
                            </div>
                            <div class="item_cart">
                                <div class="">

                                    <a href="order-success.php"> <button class="item_head text-center border-0 wid1">
                                            Place Order </button> </a>
                                </div>



                            </div>

                        </div>





                    </div>


                </div>

            </div>











        </div>
    </div>
    </div>


    <div class="mnone">

    <?php include_once( 'footer.php'); ?>
</div>
    <!---footer---->




    <script>
        var count = 0;
        var number = 10;

        /*********************
         SET ROW'S HEIGHT
        *********************/
        $.each($('.row'), function () {
            var h = $(this).attr("data-height");
            $(this).css("height", h);
        });



        /*************************
         ON WINDOW SCROLL FUNCTION
        *************************/
        var sectionIds = {};

        $(".row-nav").each(function () {
            var $this = $(this);
            sectionIds[$this.attr("id")] = $this.first().offset().top - 120;
        });


        var count2 = 0;
        $(window).scroll(function (event) {

            var scrolled = $(this).scrollTop();

            //If it reaches the top of the row, add an active class to it
            $(".row-nav").each(function () {

                var $this = $(this);

                if (scrolled >= $this.first().offset().top - 120) {
                    $(".row-nav").removeClass("active");
                    $this.addClass("active");

                    $(".animation").removeClass('animationActive');
                    $this.find(".animation").addClass('animationActive');

                }
            });

            //when reaches the row, also add a class to the navigation
            for (key in sectionIds) {
                if (scrolled >= sectionIds[key]) {
                    $(".nav-btn").removeClass("active");
                    var c = $("[data-row-id=" + key + "]");
                    c.addClass("active");

                    var i = c.index();
                    // $('#nav-indicator').css('top', i*100 + 'px');							
                }
            }


            //Check if we've reached the top
            if (scrolled > count2) { count2++; }
            else { count2--; }

            count2 = scrolled;

            if (count2 == 0) {
                $('h1 ,h2').addClass('animationActive');
            } else {
                $('h1 ,h2').removeClass('animationActive');
            }

        });



        $(".nav-btn").click(function () {
            $(this).addClass("active");
            $(this).siblings().removeClass("active");

            var i = $(this).index();
            $('#nav-indicator').css('left', i * 100 + 'px');

            var name = $(this).attr("data-row-id");
            var id = "#" + name;
            var top = $(id).first().offset().top - 60;
            $('html, body').animate({ scrollTop: top + 'px' }, 300);

        });



        /*****
         TOP
        ******/
        $('#top').click(function () {
            $('html, body').animate({ scrollTop: '0px' }, 300);
        });
    </script>



    <!-- The Login -->




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="./assets/js/owl.carousel.min2.js"></script>
    <script src="./assets/js/wow.js"></script>
    <script src="./assets/js/jquery.datetimepicker.full.js"></script>
    <script src="./assets/js/custom.js"></script>



    <script>

        $('#datetimepickernew').datetimepicker({
            datepicker: false,
            format: 'H:i',
            step: 30,
            value: 'today'

        });
        $('#datepick').datetimepicker({
            datepicker: true,
            timepicker: false,
            format: 'd:m:Y',
            value: 'today'

        });

        $('#datetimepickernew1').datetimepicker({
            datepicker: false,
            format: 'H:i',
            step: 30,
            value: 'today'

        });
        $('#datepick1').datetimepicker({
            datepicker: true,
            timepicker: false,
            format: 'd:m:Y',
            value: 'today'

        });
        $('#datetimepickernew2').datetimepicker({
            datepicker: false,
            format: 'H:i',
            step: 30,
            value: 'today'

        });
        $('#datepick2').datetimepicker({
            datepicker: true,
            timepicker: false,
            format: 'd:m:Y',
            value: 'today'

        });


    </script>
    <script>
        var count = 0;
        var number = 10;

        /*********************
         SET ROW'S HEIGHT
        *********************/
        $.each($('.row'), function () {
            var h = $(this).attr("data-height");
            $(this).css("height", h);
        });



        /*************************
         ON WINDOW SCROLL FUNCTION
        *************************/
        var sectionIds = {};

        $(".row-nav").each(function () {
            var $this = $(this);
            sectionIds[$this.attr("id")] = $this.first().offset().top - 120;
        });


        var count2 = 0;
        $(window).scroll(function (event) {

            var scrolled = $(this).scrollTop();

            //If it reaches the top of the row, add an active class to it
            $(".row-nav").each(function () {

                var $this = $(this);

                if (scrolled >= $this.first().offset().top - 120) {
                    $(".row-nav").removeClass("active");
                    $this.addClass("active");

                    $(".animation").removeClass('animationActive');
                    $this.find(".animation").addClass('animationActive');

                }
            });

            //when reaches the row, also add a class to the navigation
            for (key in sectionIds) {
                if (scrolled >= sectionIds[key]) {
                    $(".nav-btn").removeClass("active");
                    var c = $("[data-row-id=" + key + "]");
                    c.addClass("active");

                    var i = c.index();
                    // $('#nav-indicator').css('top', i*100 + 'px');							
                }
            }


            //Check if we've reached the top
            if (scrolled > count2) { count2++; }
            else { count2--; }

            count2 = scrolled;

            if (count2 == 0) {
                $('h1 ,h2').addClass('animationActive');
            } else {
                $('h1 ,h2').removeClass('animationActive');
            }

        });



        $(".nav-btn").click(function () {
            $(this).addClass("active");
            $(this).siblings().removeClass("active");

            var i = $(this).index();
            $('#nav-indicator').css('left', i * 100 + 'px');

            var name = $(this).attr("data-row-id");
            var id = "#" + name;
            var top = $(id).first().offset().top - 60;
            $('html, body').animate({ scrollTop: top + 'px' }, 300);

        });



        /*****
         TOP
        ******/
        $('#top').click(function () {
            $('html, body').animate({ scrollTop: '0px' }, 300);
        });
    </script>

    <script>
        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</body>

</html>