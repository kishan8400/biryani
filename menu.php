<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu</title>
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

<body>
    <!---Header Page-->
    <div class="header_2 mnone">
        <?php include_once( 'header.php');?>

    </div>

    <div class="content menu_pd mnone">
        <div class="container-fluid">

            <div class="pickup_location">
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-6 ">
                        <h6> Pickup Location </h6>
                        <h3>H 16, DLF Phase 1</h3>
                    </div>
                    <div class="col-md-4 col-lg-4 col-6 pull-right">
                        <h6 class="text-right"> Pickup Time </h6>
                        <h3 class="text-right">10:00 AM - 11:00 AM </h3>
                        <h6 class="text-right">2 Oct 2021</h6>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <button class="change_pre" data-target="#changene" data-toggle="modal">Change
                            Preference</button>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8 col-lg-8 col-12">
                    <div class="menu_box">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-8 col-12">
                                        <input type="search" placeholder="Search" class="form-control search">
                                    </div>
                                    <div class="col-md-1 col-6 text-center pr-0 pl-0">
                                        <div class="form-group check_new">
                                            <input type="checkbox" id="veg" checked>
                                            <label for="veg">Veg</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2 col-6 text-center">
                                        <div class="form-group check_new non_veg pr-0 pl-0">
                                            <input type="checkbox" id="nonveg" checked>
                                            <label for="nonveg">Non Veg</label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3 col-12 pr-0">
                                <div id="nav-wrap">

                                    <div id="nav">
                                        <ul class="clearfix">
                                            <li class="nav-btn active" data-row-id="row1"> <i class="fa fa-gift"></i>
                                                Offers</li>
                                            <li class="nav-btn " data-row-id="row2">Lucknowi Veg Biryani</li>
                                            <li class="nav-btn" data-row-id="row3">Kolkata Biryani</li>
                                            <li class="nav-btn" data-row-id="row4">Hyderabadi Biryani</li>
                                            <li class="nav-btn" data-row-id="row5">Kebabs</li>
                                            <li class="nav-btn" data-row-id="row6">Korma Curries</li>
                                            <li class="nav-btn" data-row-id="row7">Plater</li>
                                            <li class="nav-btn" data-row-id="row8">Combos</li>
                                            <div id="nav-indicator"></div>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-9 col-12">

                                <div class="commn_heading">
                                    <h3 class="width-90">Offers</h3>
                                </div>

                                <div class="menu_sb" id="row1">

                                    <div class="offer">
                                        <div class="row">
                                            <div class="col-md-5 col-md-5 col-12 pr-0">
                                                <img src="./assets/images/offer.jpg" alt="">
                                            </div>
                                            <div class="col-md-7 col-md-7 col-12">
                                                <div class="offer_txt">
                                                    <h3> First Order: Flat Rs 200 off </h3>
                                                    <p>Get Flat Rs 200 off on your First Order on minimum sub total of
                                                        Rs 750
                                                        and above.
                                                        (excluding GST)</p>
                                                    <h4> PROMOCODE: FLAT200 </h4>
                                                    <div class="row">
                                                        <div class="col-12 col-md-8">
                                                            <a href="#" class="terms" data-toggle="tooltip"
                                                                data-placement="bottom" title="Min Order Rs. 200">
                                                                *Terms and Conditions Apply </a>
                                                        </div>
                                                        <div class="col-12 col-md-4">
                                                            <a href="#" class=" apply"> APPLY </a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="offer">
                                        <div class="row">
                                            <div class="col-md-5 col-md-5 col-12 pr-0">
                                                <img src="./assets/images/offer.jpg" alt="">
                                            </div>
                                            <div class="col-md-7 col-md-7 col-12">
                                                <div class="offer_txt">
                                                    <h3> First Order: Flat Rs 200 off </h3>
                                                    <p>Get Flat Rs 200 off on your First Order on minimum sub total of
                                                        Rs 750
                                                        and above.
                                                        (excluding GST)</p>
                                                    <h4> PROMOCODE: FLAT200 </h4>
                                                    <div class="row">
                                                        <div class="col-12 col-md-8">
                                                            <a href="#" class="terms"> *Terms and Conditions Apply </a>
                                                        </div>
                                                        <div class="col-12 col-md-4">
                                                            <a href="#" class=" apply"> APPLY </a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="offer">
                                        <div class="row">
                                            <div class="col-md-5 col-md-5 col-12 pr-0">
                                                <img src="./assets/images/offer.jpg" alt="">
                                            </div>
                                            <div class="col-md-7 col-md-7 col-12">
                                                <div class="offer_txt">
                                                    <h3> First Order: Flat Rs 200 off </h3>
                                                    <p>Get Flat Rs 200 off on your First Order on minimum sub total of
                                                        Rs 750
                                                        and above.
                                                        (excluding GST)</p>
                                                    <h4> PROMOCODE: FLAT200 </h4>
                                                    <div class="row">
                                                        <div class="col-12 col-md-8">
                                                            <a href="#" class="terms"> *Terms and Conditions Apply </a>
                                                        </div>
                                                        <div class="col-12 col-md-4">
                                                            <a href="#" class=" apply"> APPLY </a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="offer">
                                        <div class="row">
                                            <div class="col-md-5 col-md-5 col-12 pr-0">
                                                <img src="./assets/images/offer.jpg" alt="">
                                            </div>
                                            <div class="col-md-7 col-md-7 col-12">
                                                <div class="offer_txt">
                                                    <h3> First Order: Flat Rs 200 off </h3>
                                                    <p>Get Flat Rs 200 off on your First Order on minimum sub total of
                                                        Rs 750
                                                        and above.
                                                        (excluding GST)</p>
                                                    <h4> PROMOCODE: FLAT200 </h4>
                                                    <div class="row">
                                                        <div class="col-12 col-md-8">
                                                            <a href="#" class="terms"> *Terms and Conditions Apply </a>
                                                        </div>
                                                        <div class="col-12 col-md-4">
                                                            <a href="#" class=" apply"> APPLY </a>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="content-wrap">

                                    <div class="row row-nav" id="row2">
                                        <div class="col-md-12 col-12">
                                            <div class="commn_heading">
                                                <h3>Lucknowi Veg Biryani</h3>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">

                                            <div class="card">
                                                <a href="#" data-toggle="modal" data-target="#menu_details">
                                                    <h6><span></span></h6>
                                                    <img src="./assets/images/3.jpg" class="" alt="">
                                                </a>

                                                <div class="card-body">
                                                    <h5 class="card-title">Paneer Dum Biryai</h5>
                                                    <p class="para"> Home made FIESTA Mutton Biryani with tender and
                                                        melting pieces of mutton, cooked </p>
                                                    <a class="red_more " href="#">Read More..</a>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            Rs. 325
                                                        </div>
                                                        <div class="col-6 text-right">
                                                            <a href="#" data-toggle="modal" data-target="#add_biryani"
                                                                class="btn btn-primary btn-sm border-0">ADD</a>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="card">
                                                <a href="#" data-toggle="modal" data-target="#menu_details">
                                                    <h6 class="non"><span></span></h6>
                                                    <img src="./assets/images/2.jpg" class="" alt="">
                                                </a>
                                                <div class="card-body">
                                                    <h5 class="card-title">Paneer Dum Biryai</h5>
                                                    <p class="para"> Home made FIESTA Mutton Biryani with tender and
                                                        melting pieces of mutton, cooked </p>
                                                    <a class="red_more " href="#">Read More..</a>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            Rs. 325
                                                        </div>
                                                        <div class="col-6 text-right">
                                                            <a href="#" data-toggle="modal" data-target="#add_biryani"
                                                                class="btn btn-primary btn-sm border-0">ADD</a>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="card">
                                                <img src="./assets/images/1.png" class="" alt="">
                                                <div class="card-body">
                                                    <h5 class="card-title">Paneer Dum Biryai</h5>
                                                    <p class="para"> Home made FIESTA Mutton Biryani with tender and
                                                        melting pieces of mutton, cooked </p>
                                                    <a class="red_more " href="#">Read More..</a>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            Rs. 325
                                                        </div>
                                                        <div class="col-6 text-right">
                                                            <a href="#" data-toggle="modal" data-target="#add_biryani"
                                                                class="btn btn-primary btn-sm border-0">ADD</a>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div>

                                        </div>
                                    </div>

                                    <div class="row row-nav" id="row3">
                                        <div class="col-md-12 col-12">
                                            <div class="commn_heading">
                                                <h3>Kolkata Biryani</h3>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">

                                            <div class="card">
                                                <a href="#" data-toggle="modal" data-target="#menu_details">
                                                    <h6><span></span></h6>
                                                    <img src="./assets/images/3.jpg" class="" alt="">
                                                </a>

                                                <div class="card-body">
                                                    <h5 class="card-title">Paneer Dum Biryai</h5>
                                                    <p class="para"> Home made FIESTA Mutton Biryani with tender and
                                                        melting pieces of mutton, cooked </p>
                                                    <a class="red_more " href="#">Read More..</a>

                                                    <div class="row">
                                                        <div class="col-6">
                                                            Rs. 325
                                                        </div>
                                                        <div class="col-6 text-right">
                                                            <a href="#" data-toggle="modal" data-target="#add_biryani"
                                                                class="btn btn-primary btn-sm border-0">ADD</a>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="card">
                                                <a href="#" data-toggle="modal" data-target="#menu_details">
                                                    <h6 class="non"><span></span></h6>
                                                    <img src="./assets/images/2.jpg" class="" alt="">
                                                </a>
                                                <div class="card-body">
                                                    <h5 class="card-title">Paneer Dum Biryai</h5>
                                                    <p class="para"> Home made FIESTA Mutton Biryani with tender and
                                                        melting pieces of mutton, cooked </p>
                                                    <a class="red_more " href="#">Read More..</a>

                                                    <div class="row">
                                                        <div class="col-6">
                                                            Rs. 325
                                                        </div>
                                                        <div class="col-6 text-right">
                                                            <a href="#" data-toggle="modal" data-target="#add_biryani"
                                                                class="btn btn-primary btn-sm border-0">ADD</a>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="card">
                                                <img src="./assets/images/1.png" class="" alt="">
                                                <div class="card-body">
                                                    <h5 class="card-title">Paneer Dum Biryai</h5>
                                                    <p class="para"> Home made FIESTA Mutton Biryani with tender and
                                                        melting pieces of mutton, cooked </p>
                                                    <a class="red_more " href="#">Read More..</a>

                                                    <div class="row">
                                                        <div class="col-6">
                                                            Rs. 325
                                                        </div>
                                                        <div class="col-6 text-right">
                                                            <a href="#" data-toggle="modal" data-target="#add_biryani"
                                                                class="btn btn-primary btn-sm border-0">ADD</a>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                    <div class="row row-nav" id="row4">
                                        <div class="col-md-12 col-12">
                                            <div class="commn_heading">
                                                <h3>Hyderabadi Biryani</h3>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">

                                            <div class="card">
                                                <a href="#" data-toggle="modal" data-target="#menu_details">
                                                    <h6><span></span></h6>
                                                    <img src="./assets/images/3.jpg" class="" alt="">
                                                </a>

                                                <div class="card-body">
                                                    <h5 class="card-title">Paneer Dum Biryai</h5>
                                                    <p class="para"> Home made FIESTA Mutton Biryani with tender and
                                                        melting pieces of mutton, cooked </p>
                                                    <a class="red_more " href="#">Read More..</a>

                                                    <div class="row">
                                                        <div class="col-6">
                                                            Rs. 325
                                                        </div>
                                                        <div class="col-6 text-right">
                                                            <a href="#" data-toggle="modal" data-target="#add_biryani"
                                                                class="btn btn-primary btn-sm border-0">ADD</a>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="card">
                                                <a href="#" data-toggle="modal" data-target="#menu_details">
                                                    <h6 class="non"><span></span></h6>
                                                    <img src="./assets/images/2.jpg" class="" alt="">
                                                </a>
                                                <div class="card-body">
                                                    <h5 class="card-title">Paneer Dum Biryai</h5>
                                                    <p class="para"> Home made FIESTA Mutton Biryani with tender and
                                                        melting pieces of mutton, cooked </p>
                                                    <a class="red_more " href="#">Read More..</a>

                                                    <div class="row">
                                                        <div class="col-6">
                                                            Rs. 325
                                                        </div>
                                                        <div class="col-6 text-right">
                                                            <a href="#" data-toggle="modal" data-target="#add_biryani"
                                                                class="btn btn-primary btn-sm border-0">ADD</a>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="card">
                                                <img src="./assets/images/1.png" class="" alt="">
                                                <div class="card-body">
                                                    <h5 class="card-title">Paneer Dum Biryai</h5>
                                                    <p class="para"> Home made FIESTA Mutton Biryani with tender and
                                                        melting pieces of mutton, cooked </p>
                                                    <a class="red_more " href="#">Read More..</a>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            Rs. 325
                                                        </div>
                                                        <div class="col-6 text-right">
                                                            <a href="#" data-toggle="modal" data-target="#add_biryani"
                                                                class="btn btn-primary btn-sm border-0">ADD</a>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div>

                                        </div>
                                    </div>

                                    <div class="row row-nav" id="row5">
                                        <div class="col-md-12 col-12">
                                            <div class="commn_heading">
                                                <h3>Kebabs</h3>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">

                                            <div class="card">
                                                <a href="#" data-toggle="modal" data-target="#menu_details">
                                                    <h6><span></span></h6>
                                                    <img src="./assets/images/3.jpg" class="" alt="">
                                                </a>

                                                <div class="card-body">
                                                    <h5 class="card-title">Paneer Dum Biryai</h5>
                                                    <p class="para"> Home made FIESTA Mutton Biryani with tender and
                                                        melting pieces of mutton, cooked </p>
                                                    <a class="red_more " href="#">Read More..</a>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            Rs. 325
                                                        </div>
                                                        <div class="col-6 text-right">
                                                            <a href="#" data-toggle="modal" data-target="#add_biryani"
                                                                class="btn btn-primary btn-sm border-0">ADD</a>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="card">
                                                <a href="#" data-toggle="modal" data-target="#menu_details">
                                                    <h6 class="non"><span></span></h6>
                                                    <img src="./assets/images/2.jpg" class="" alt="">
                                                </a>
                                                <div class="card-body">
                                                    <h5 class="card-title">Paneer Dum Biryai</h5>
                                                    <p class="para"> Home made FIESTA Mutton Biryani with tender and
                                                        melting pieces of mutton, cooked </p>
                                                    <a class="red_more " href="#">Read More..</a>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            Rs. 325
                                                        </div>
                                                        <div class="col-6 text-right">
                                                            <a href="#" data-toggle="modal" data-target="#add_biryani"
                                                                class="btn btn-primary btn-sm border-0">ADD</a>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="card">
                                                <img src="./assets/images/1.png" class="" alt="">
                                                <div class="card-body">
                                                    <h5 class="card-title">Paneer Dum Biryai</h5>
                                                    <p class="para"> Home made FIESTA Mutton Biryani with tender and
                                                        melting pieces of mutton, cooked </p>
                                                    <a class="red_more " href="#">Read More..</a>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            Rs. 325
                                                        </div>
                                                        <div class="col-6 text-right">
                                                            <a href="#" data-toggle="modal" data-target="#add_biryani"
                                                                class="btn btn-primary btn-sm border-0">ADD</a>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row row-nav" id="row6">
                                        <div class="col-md-12 col-12">
                                            <div class="commn_heading">
                                                <h3>Korma Kadhi</h3>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">

                                            <div class="card">
                                                <a href="#" data-toggle="modal" data-target="#menu_details">
                                                    <h6><span></span></h6>
                                                    <img src="./assets/images/3.jpg" class="" alt="">
                                                </a>

                                                <div class="card-body">
                                                    <h5 class="card-title">Paneer Dum Biryai</h5>
                                                    <p class="para"> Home made FIESTA Mutton Biryani with tender and
                                                        melting pieces of mutton, cooked </p>
                                                    <a class="red_more " href="#">Read More..</a>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            Rs. 325
                                                        </div>
                                                        <div class="col-6 text-right">
                                                            <a href="#" data-toggle="modal" data-target="#add_biryani"
                                                                class="btn btn-primary btn-sm border-0">ADD</a>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="card">
                                                <a href="#" data-toggle="modal" data-target="#menu_details">
                                                    <h6 class="non"><span></span></h6>
                                                    <img src="./assets/images/2.jpg" class="" alt="">
                                                </a>
                                                <div class="card-body">
                                                    <h5 class="card-title">Paneer Dum Biryai</h5>
                                                    <p class="para"> Home made FIESTA Mutton Biryani with tender and
                                                        melting pieces of mutton, cooked </p>
                                                    <a class="red_more " href="#">Read More..</a>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            Rs. 325
                                                        </div>
                                                        <div class="col-6 text-right">
                                                            <a href="#" data-toggle="modal" data-target="#add_biryani"
                                                                class="btn btn-primary btn-sm border-0">ADD</a>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="card">
                                                <img src="./assets/images/1.png" class="" alt="">
                                                <div class="card-body">
                                                    <h5 class="card-title">Paneer Dum Biryai</h5>
                                                    <p class="para"> Home made FIESTA Mutton Biryani with tender and
                                                        melting pieces of mutton, cooked </p>
                                                    <a class="red_more " href="#">Read More..</a>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            Rs. 325
                                                        </div>
                                                        <div class="col-6 text-right">
                                                            <a href="#" data-toggle="modal" data-target="#add_biryani"
                                                                class="btn btn-primary btn-sm border-0">ADD</a>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row row-nav" id="row7">
                                        <div class="col-md-12 col-12">
                                            <div class="commn_heading">
                                                <h3>Plater</h3>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">

                                            <div class="card">
                                                <a href="#" data-toggle="modal" data-target="#menu_details">
                                                    <h6><span></span></h6>
                                                    <img src="./assets/images/3.jpg" class="" alt="">
                                                </a>

                                                <div class="card-body">
                                                    <h5 class="card-title">Paneer Dum Biryai</h5>
                                                    <p class="para"> Home made FIESTA Mutton Biryani with tender and
                                                        melting pieces of mutton, cooked </p>
                                                    <a class="red_more " href="#">Read More..</a>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            Rs. 325
                                                        </div>
                                                        <div class="col-6 text-right">
                                                            <a href="#" data-toggle="modal" data-target="#add_biryani"
                                                                class="btn btn-primary btn-sm border-0">ADD</a>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="card">
                                                <a href="#" data-toggle="modal" data-target="#menu_details">
                                                    <h6 class="non"><span></span></h6>
                                                    <img src="./assets/images/2.jpg" class="" alt="">
                                                </a>
                                                <div class="card-body">
                                                    <h5 class="card-title">Paneer Dum Biryai</h5>
                                                    <p class="para"> Home made FIESTA Mutton Biryani with tender and
                                                        melting pieces of mutton, cooked </p>
                                                    <a class="red_more " href="#">Read More..</a>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            Rs. 325
                                                        </div>
                                                        <div class="col-6 text-right">
                                                            <a href="#" data-toggle="modal" data-target="#add_biryani"
                                                                class="btn btn-primary btn-sm border-0">ADD</a>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="card">
                                                <img src="./assets/images/1.png" class="" alt="">
                                                <div class="card-body">
                                                    <h5 class="card-title">Paneer Dum Biryai</h5>
                                                    <p class="para"> Home made FIESTA Mutton Biryani with tender and
                                                        melting pieces of mutton, cooked </p>
                                                    <a class="red_more " href="#">Read More..</a>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            Rs. 325
                                                        </div>
                                                        <div class="col-6 text-right">
                                                            <a href="#" data-toggle="modal" data-target="#add_biryani"
                                                                class="btn btn-primary btn-sm border-0">ADD</a>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row row-nav" id="row8">
                                        <div class="col-md-12 col-12">
                                            <div class="commn_heading">
                                                <h3>Combose</h3>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">

                                            <div class="card">
                                                <a href="#" data-toggle="modal" data-target="#menu_details">
                                                    <h6><span></span></h6>
                                                    <img src="./assets/images/3.jpg" class="" alt="">
                                                </a>

                                                <div class="card-body">
                                                    <h5 class="card-title">Paneer Dum Biryai</h5>
                                                    <p class="para"> Home made FIESTA Mutton Biryani with tender and
                                                        melting pieces of mutton, cooked </p>
                                                    <a class="red_more " href="#">Read More..</a>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            Rs. 325
                                                        </div>
                                                        <div class="col-6 text-right">
                                                            <a href="#" data-toggle="modal" data-target="#add_biryani"
                                                                class="btn btn-primary btn-sm border-0">ADD</a>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="card">
                                                <a href="#" data-toggle="modal" data-target="#menu_details">
                                                    <h6 class="non"><span></span></h6>
                                                    <img src="./assets/images/2.jpg" class="" alt="">
                                                </a>
                                                <div class="card-body">
                                                    <h5 class="card-title">Paneer Dum Biryai</h5>
                                                    <p class="para"> Home made FIESTA Mutton Biryani with tender and
                                                        melting pieces of mutton, cooked </p>
                                                    <a class="red_more " href="#">Read More..</a>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            Rs. 325
                                                        </div>
                                                        <div class="col-6 text-right">
                                                            <a href="#" data-toggle="modal" data-target="#add_biryani"
                                                                class="btn btn-primary btn-sm border-0">ADD</a>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="card">
                                                <img src="./assets/images/1.png" class="" alt="">
                                                <div class="card-body">
                                                    <h5 class="card-title">Paneer Dum Biryai</h5>
                                                    <p class="para"> Home made FIESTA Mutton Biryani with tender and
                                                        melting pieces of mutton, cooked </p>
                                                    <a class="red_more " href="#">Read More..</a>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            Rs. 325
                                                        </div>
                                                        <div class="col-6 text-right">
                                                            <a href="#" data-toggle="modal" data-target="#add_biryani"
                                                                class="btn btn-primary btn-sm border-0">ADD</a>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                </div>
                            </div>



                        </div>
                    </div>

                </div>
                <div class="col-md-4 col-lg-4 col-12 p_sticky">

                    <div class="item_cart item_cart2">
                        <div class="item_head">
                            Your Cart: 1 Items. <span>Rs. 460</span>
                        </div>

                        <div class="item_body">
                            <div class="row">
                                <div class="col-md-9 col-9">
                                    <p> Mutton Hyderabadi Dum Biryani [1/2 Kg] Serves 1-2 </p>
                                </div>
                                <div class="col-3 col-md-3">
                                    <p class="text-right">Rs. 645</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-9 col-9">
                                    <p> Mutton Hyderabadi Dum Biryani [1/2 Kg] Serves 1-2 </p>
                                </div>
                                <div class="col-3 col-md-3">
                                    <p class="text-right">Rs. 645</p>
                                </div>
                            </div>

                            <div class="text-center ind_firs">
                                <div class="st">
                                    <span class="fa-stack fa-lg primaryColor"> <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-star fa-stack-1x fa-inverse"></i> </span>
                                </div>
                                <img src="./assets/images/Hand.svg" alt="">
                                <h4>Earn Points on every order!</h4>
                                <p> Add an item to start ordering ! </p>

                            </div>
                            <div class="row mb-4">
                                <div class="col-md-9 col-9">
                                    <p>Offer code/ Gift card code</p>
                                    <input type="text" placeholder="Coupon Code" class="form-control cupom">

                                </div>
                                <div class="col-lg-3 col-3">
                                    <button class=" border-0 apply1">APPLY</button>
                                </div>
                            </div>
                            <p class="total text"> Other <span>Rs. 145</span> </p>
                            <p class="total text"> Total <span>Rs. 645</span> </p>
                        </div>
                        <div class="item_footer">
                            <a href="cart.php"> <button>Proceed to Checkout</button> </a>
                        </div>

                    </div>

                </div>
            </div>



        </div>

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

                            <a href="#" class="singup_btn sign" data-toggle="modal" data-target="#Login_modal1"> Login
                            </a>



                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="delvery_pg">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-5">
                        <div class="dlv" data-toggle="modal" data-target="#fullsearch1">
                            <svg viewBox="0 0 24 24" style="width: 16px; height: 16px;">
                                <path fill="#000000"
                                    d="M5,20.5A3.5,3.5 0 0,1 1.5,17A3.5,3.5 0 0,1 5,13.5A3.5,3.5 0 0,1 8.5,17A3.5,3.5 0 0,1 5,20.5M5,12A5,5 0 0,0 0,17A5,5 0 0,0 5,22A5,5 0 0,0 10,17A5,5 0 0,0 5,12M14.8,10H19V8.2H15.8L13.86,4.93C13.57,4.43 13,4.1 12.4,4.1C11.93,4.1 11.5,4.29 11.2,4.6L7.5,8.29C7.19,8.6 7,9 7,9.5C7,10.13 7.33,10.66 7.85,10.97L11.2,13V18H13V11.5L10.75,9.85L13.07,7.5M19,20.5A3.5,3.5 0 0,1 15.5,17A3.5,3.5 0 0,1 19,13.5A3.5,3.5 0 0,1 22.5,17A3.5,3.5 0 0,1 19,20.5M19,12A5,5 0 0,0 14,17A5,5 0 0,0 19,22A5,5 0 0,0 24,17A5,5 0 0,0 19,12M16,4.8C17,4.8 17.8,4 17.8,3C17.8,2 17,1.2 16,1.2C15,1.2 14.2,2 14.2,3C14.2,4 15,4.8 16,4.8Z">
                                </path>
                            </svg>
                            <span class="">Delivery</span>
                        </div>
                    </div>
                    <div class="col-1">
                        <span class="to">To</span>
                    </div>
                    <div class="col-5">
                        <div class="dlv" data-toggle="modal" data-target="#fullsearch1">
                            <span class="">Select Location</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="offer_slider mt-2 mb-4">
                <div class="offer_slider-area1 owl-carousel owl-theme">
                    <div class="item">

                        <a href="#">
                            <div class="offer_slider_img">
                                <img src="./assets/images/WEB_6.jpg" alt="">

                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <div class="offer_slider_img">
                                <img src="./assets/images/WEB_7.jpg" alt="">

                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <div class="offer_slider_img">
                                <img src="./assets/images/WEB_8.jpg" alt="">

                            </div>
                        </a>
                    </div>
                    <div class="item">

                        <a href="#">
                            <div class="offer_slider_img">
                                <img src="./assets/images/WEB_6.jpg" alt="">

                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <div class="offer_slider_img">
                                <img src="./assets/images/WEB_7.jpg" alt="">

                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <div class="offer_slider_img">
                                <img src="./assets/images/WEB_8.jpg" alt="">

                            </div>
                        </a>
                    </div>
                    <div class="item">

                        <a href="#">
                            <div class="offer_slider_img">
                                <img src="./assets/images/WEB_6.jpg" alt="">

                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <div class="offer_slider_img">
                                <img src="./assets/images/WEB_7.jpg" alt="">

                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <div class="offer_slider_img">
                                <img src="./assets/images/WEB_8.jpg" alt="">

                            </div>
                        </a>
                    </div>




                </div>

            </div>
        </div>
        <div class="product_page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 hed" id="hedarbad">
                        <p>Hyderabadi Biryani</p>
                        <span>3</span>
                    </div>





                    <div class="col-6 ">


                        <div class="card mobile">
                            <a href="#" data-toggle="modal" data-target="#menu_details">

                                <img src="./assets/images/paneer-biryani.jpg" class="" alt="">
                            </a>

                            <div class="card-body">

                                <div class="row">
                                    <div class="col-10  pr-0">
                                        <h5 class="card-title">Paneer Dum Biryai 1/2 kg </h5>

                                    </div>
                                    <div class="col-1 pl-0">
                                        <h6><span></span></h6>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt non iure et
                                            minus hic consequatur quod quas inventore aperiam iusto sapiente beatae
                                            dignissimos culpa, provident sequi veritatis nemo reiciendis. Ipsam.</p>
                                        <a href="" class="read_more">Read more..</a>

                                    </div>
                                    <div class="col-5">
                                        <span class="resp"> ₹ 325 </span>
                                    </div>
                                    <div class="col-7 text-right">
                                        <a href="#" data-toggle="modal" data-target="#add_biryani"
                                            class="btn  btn-sm border-0 w-100 add_btn">ADD</a>
                                        <h5 class="cstm">Customisable</h5>
                                    </div>

                                </div>

                            </div>

                        </div>


                    </div>

                    <div class="col-6 ">


                        <div class="card mobile">
                            <a href="#" data-toggle="modal" data-target="#menu_details">

                                <img src="./assets/images/3.jpg" class="" alt="">
                            </a>

                            <div class="card-body">

                                <div class="row">
                                    <div class="col-10  pr-0">
                                        <h5 class="card-title">Paneer Dum Biryai 1/2 kg </h5>

                                    </div>
                                    <div class="col-1 pl-0 ">
                                        <h6 class="non"><span class=""></span></h6>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt non iure et
                                            minus hic consequatur quod quas inventore aperiam iusto sapiente beatae
                                            dignissimos culpa, provident sequi veritatis nemo reiciendis. Ipsam.</p>
                                        <a href="" class="read_more">Read more..</a>

                                    </div>
                                    <div class="col-5">
                                        <span class="resp"> ₹ 325 </span>
                                    </div>
                                    <div class="col-7 text-right">
                                        <a href="#" data-toggle="modal" data-target="#add_biryani"
                                            class="btn  btn-sm border-0 w-100 add_btn">ADD</a>
                                        <h5 class="cstm">Customisable</h5>
                                    </div>

                                </div>

                            </div>

                        </div>


                    </div>
                    <div class="col-6 ">


                        <div class="card mobile">
                            <a href="#" data-toggle="modal" data-target="#menu_details">

                                <img src="./assets/images/paneer-biryani.jpg" class="" alt="">
                            </a>

                            <div class="card-body">

                                <div class="row">
                                    <div class="col-10  pr-0">
                                        <h5 class="card-title">Paneer Dum Biryai 1/2 kg </h5>

                                    </div>
                                    <div class="col-1 pl-0">
                                        <h6><span></span></h6>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt non iure et
                                            minus hic consequatur quod quas inventore aperiam iusto sapiente beatae
                                            dignissimos culpa, provident sequi veritatis nemo reiciendis. Ipsam.</p>
                                        <a href="" class="read_more">Read more..</a>

                                    </div>
                                    <div class="col-5">
                                        <span class="resp"> ₹ 325 </span>
                                    </div>
                                    <div class="col-7 text-right">
                                        <a href="#" data-toggle="modal" data-target="#add_biryani"
                                            class="btn  btn-sm border-0 w-100 add_btn">ADD</a>
                                        <h5 class="cstm">Customisable</h5>
                                    </div>

                                </div>

                            </div>

                        </div>


                    </div>

                    <div class="col-6 ">


                        <div class="card mobile">
                            <a href="#" data-toggle="modal" data-target="#menu_details">

                                <img src="./assets/images/3.jpg" class="" alt="">
                            </a>

                            <div class="card-body">

                                <div class="row">
                                    <div class="col-10  pr-0">
                                        <h5 class="card-title">Paneer Dum Biryai 1/2 kg </h5>

                                    </div>
                                    <div class="col-1 pl-0 ">
                                        <h6 class="non"><span class=""></span></h6>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt non iure et
                                            minus hic consequatur quod quas inventore aperiam iusto sapiente beatae
                                            dignissimos culpa, provident sequi veritatis nemo reiciendis. Ipsam.</p>
                                        <a href="" class="read_more">Read more..</a>

                                    </div>
                                    <div class="col-5">
                                        <span class="resp"> ₹ 325 </span>
                                    </div>
                                    <div class="col-7 text-right">
                                        <a href="#" data-toggle="modal" data-target="#add_biryani"
                                            class="btn  btn-sm border-0 w-100 add_btn">ADD</a>
                                        <h5 class="cstm">Customisable</h5>
                                    </div>

                                </div>

                            </div>

                        </div>


                    </div>
                    <div class="col-12 hed" id="hedarbad">
                        <p>Lucknow Biryani</p>
                        <span>4</span>
                    </div>





                    <div class="col-6 ">


                        <div class="card mobile">
                            <a href="#" data-toggle="modal" data-target="#menu_details">

                                <img src="./assets/images/paneer-biryani.jpg" class="" alt="">
                            </a>

                            <div class="card-body">

                                <div class="row">
                                    <div class="col-10  pr-0">
                                        <h5 class="card-title">Paneer Dum Biryai 1/2 kg </h5>

                                    </div>
                                    <div class="col-1 pl-0">
                                        <h6><span></span></h6>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt non iure et
                                            minus hic consequatur quod quas inventore aperiam iusto sapiente beatae
                                            dignissimos culpa, provident sequi veritatis nemo reiciendis. Ipsam.</p>
                                        <a href="" class="read_more">Read more..</a>

                                    </div>
                                    <div class="col-5">
                                        <span class="resp"> ₹ 325 </span>
                                    </div>
                                    <div class="col-7 text-right">
                                        <a href="#" data-toggle="modal" data-target="#add_biryani"
                                            class="btn  btn-sm border-0 w-100 add_btn">ADD</a>
                                        <h5 class="cstm">Customisable</h5>
                                    </div>

                                </div>

                            </div>

                        </div>


                    </div>

                    <div class="col-6 ">


                        <div class="card mobile">
                            <a href="#" data-toggle="modal" data-target="#menu_details">

                                <img src="./assets/images/3.jpg" class="" alt="">
                            </a>

                            <div class="card-body">

                                <div class="row">
                                    <div class="col-10  pr-0">
                                        <h5 class="card-title">Paneer Dum Biryai 1/2 kg </h5>

                                    </div>
                                    <div class="col-1 pl-0 ">
                                        <h6 class="non"><span class=""></span></h6>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt non iure et
                                            minus hic consequatur quod quas inventore aperiam iusto sapiente beatae
                                            dignissimos culpa, provident sequi veritatis nemo reiciendis. Ipsam.</p>
                                        <a href="" class="read_more">Read more..</a>

                                    </div>
                                    <div class="col-5">
                                        <span class="resp"> ₹ 325 </span>
                                    </div>
                                    <div class="col-7 text-right">
                                        <a href="#" data-toggle="modal" data-target="#add_biryani"
                                            class="btn  btn-sm border-0 w-100 add_btn">ADD</a>
                                        <h5 class="cstm">Customisable</h5>
                                    </div>

                                </div>

                            </div>

                        </div>


                    </div>
                    <div class="col-6 ">


                        <div class="card mobile">
                            <a href="#" data-toggle="modal" data-target="#menu_details">

                                <img src="./assets/images/paneer-biryani.jpg" class="" alt="">
                            </a>

                            <div class="card-body">

                                <div class="row">
                                    <div class="col-10  pr-0">
                                        <h5 class="card-title">Paneer Dum Biryai 1/2 kg </h5>

                                    </div>
                                    <div class="col-1 pl-0">
                                        <h6><span></span></h6>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt non iure et
                                            minus hic consequatur quod quas inventore aperiam iusto sapiente beatae
                                            dignissimos culpa, provident sequi veritatis nemo reiciendis. Ipsam.</p>
                                        <a href="" class="read_more">Read more..</a>

                                    </div>
                                    <div class="col-5">
                                        <span class="resp"> ₹ 325 </span>
                                    </div>
                                    <div class="col-7 text-right">
                                        <a href="#" data-toggle="modal" data-target="#add_biryani"
                                            class="btn  btn-sm border-0 w-100 add_btn">ADD</a>
                                        <h5 class="cstm">Customisable</h5>
                                    </div>

                                </div>

                            </div>

                        </div>


                    </div>

                    <div class="col-6 ">


                        <div class="card mobile">
                            <a href="#" data-toggle="modal" data-target="#menu_details">

                                <img src="./assets/images/3.jpg" class="" alt="">
                            </a>

                            <div class="card-body">

                                <div class="row">
                                    <div class="col-10  pr-0">
                                        <h5 class="card-title">Paneer Dum Biryai 1/2 kg </h5>

                                    </div>
                                    <div class="col-1 pl-0 ">
                                        <h6 class="non"><span class=""></span></h6>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt non iure et
                                            minus hic consequatur quod quas inventore aperiam iusto sapiente beatae
                                            dignissimos culpa, provident sequi veritatis nemo reiciendis. Ipsam.</p>
                                        <a href="" class="read_more">Read more..</a>

                                    </div>
                                    <div class="col-5">
                                        <span class="resp"> ₹ 325 </span>
                                    </div>
                                    <div class="col-7 text-right">
                                        <a href="#" data-toggle="modal" data-target="#add_biryani"
                                            class="btn  btn-sm border-0 w-100 add_btn">ADD</a>
                                        <h5 class="cstm">Customisable</h5>
                                    </div>

                                </div>

                            </div>

                        </div>


                    </div>



                </div>
            </div>
        </div>

        <div class="searchbox">
            <div class="row">
                <div class="col-6">

                </div>
                <div class="col-6">

                </div>


            </div>
        </div>



        <footer
            class="fixed-bottom fix_foot pb-2 mb-11 bg-light shadow-lg border-top d-block d-md-none d-lg-none d_non">
            <div class="row bottom-icon  new_ico ">

                <div class="col-5">
                    <div class="row">
                        <div class="col-6">
                            <button type="button" data-toggle="modal" data-target="#fullsearch" class="btn-sr">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                        <div class="col-6">
                            <span class="filter_click" data-toggle="modal" data-target="#mysearch"> <svg
                                    viewBox="0 0 24 24" style="width: 24px; height: 24px;margin-top:12px">
                                    <path
                                        d="M3,17V19H9V17H3M3,5V7H13V5H3M13,21V19H21V17H13V15H11V21H13M7,9V11H3V13H7V15H9V9H7M21,13V11H11V13H21M15,9H17V7H21V5H17V3H15V9Z">
                                    </path>
                                </svg></span>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <a class="" href="#">
                        <div class="text-center">

                            <div class="order_area" data-toggle="modal" data-target="#menu_fil"> <i
                                    class="fa fa-spoon"></i> </div>




                        </div>
                    </a>
                </div>
                <div class="col-5">

                    <div class="row bg_r">
                        <div class="col-9 pl-0 pr-0">
                            <h6> ₹ <span>457</span> </h6>
                            <p>min. order 199</p>
                        </div>
                        <div class="col-3 pl-0  pr-0">
                            <i class="fa fa-shopping-cart icon-m"></i>
                        </div>
                    </div>
                </div>

            </div>
        </footer>
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
    <!-- The Modal -->
    <div class="modal  animated animatedFadeInUp fadeInUp" id="mysearch">
        <div class="modal-dialog  fixed-bottom">
            <div class="modal-content brs">




                <div class="modal-body pt-0">

                    <div class="row">
                        <div class="col-8">
                            <svg viewBox="0 0 24 24" style="width: 24px; height: 24px;margin-top:12px">
                                <path
                                    d="M3,17V19H9V17H3M3,5V7H13V5H3M13,21V19H21V17H13V15H11V21H13M7,9V11H3V13H7V15H9V9H7M21,13V11H11V13H21M15,9H17V7H21V5H17V3H15V9Z">
                                </path>
                            </svg>
                            <span class="fst">Filter Your choice</span>
                        </div>
                        <div class="col-4 ">
                            <span class="hde pull-right d-block" data-dismiss="modal">Hide</span>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-12">
                            <div class="form-group check_new">
                                <input type="checkbox" id="veg1">
                                <label for="veg1">Veg</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group check_new non_veg m-0">
                                <input type="checkbox" id="nonveg1">
                                <label for="nonveg1">Non Veg</label>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="modal-footer">
                    <button type="button" class="btn apply_fil">APPLY FILTERS</button>
                </div>

            </div>
        </div>
    </div>
    <div class="modal  animated animatedFadeInUp fadeInUp" id="change">
        <div class="modal-dialog  fixed-bottom">
            <div class="modal-content brs">

                <div class="">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h3>Refine Your Delivery Location</h3>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body modal-txt ">
                        <div class="form-group">
                            <input type="search" class="form-control search_control" value="Aliganj Lucknow">
                        </div>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14232.745544196818!2d80.9378280313776!3d26.897579230144014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399957cbf43233f5%3A0x3a22b7c8a77962f0!2sAliganj%2C%20Lucknow%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1632411169269!5m2!1sen!2sin"
                            width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>


                    </div>


                </div>


                <div class="modal-footer">
                    <button type="button" class="btn apply_fil">UPDATE</button>
                </div>

            </div>
        </div>
    </div>

    <div class="modal  animated animatedFadeInUp fadeInUp" id="changedesk">
        <div class="modal-dialog  fixed-bottom modal-dialog-centered">
            <div class="modal-content brs">

                <div class="">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h3>Refine Your Delivery Location</h3>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body modal-txt ">
                        <div class="form-group">
                            <input type="search" class="form-control search_control" value="Aliganj Lucknow">
                        </div>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14232.745544196818!2d80.9378280313776!3d26.897579230144014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399957cbf43233f5%3A0x3a22b7c8a77962f0!2sAliganj%2C%20Lucknow%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1632411169269!5m2!1sen!2sin"
                            width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>


                    </div>


                </div>


                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn upd">UPDATE</button>
                </div>

            </div>
        </div>
    </div>
    <div class="modal  " id="menu_fil">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content modal-content-new ">


                <h3>Menu Categories</h3>

                <div class="modal-body ">
                    <div class="row">
                        <div class="col-10">
                            <p>Hyderabadi Biryani</p>
                        </div>
                        <div class="col-2">
                            <span>3</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10">
                            <p>Lucknow Biryani</p>
                        </div>
                        <div class="col-2">
                            <span>5</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10">
                            <p>Kolkata Biryani</p>
                        </div>
                        <div class="col-2">
                            <span>3</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10">
                            <p>Brown Rice Biryani</p>
                        </div>
                        <div class="col-2">
                            <span>3</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10">
                            <p>Kabab</p>
                        </div>
                        <div class="col-2">
                            <span>3</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10">
                            <p>Platter</p>
                        </div>
                        <div class="col-2">
                            <span>3</span>
                        </div>
                    </div>

                </div>




            </div>
        </div>
    </div>


    <div class="modal  " id="fullsearch1">
        <div class="modal-dialog   fullwidth border-0">
            <div class="modal-content bg-eh p-0 ">
                <div class="set_pre px-2 ">
                    <div class="row">
                        <div class="col-1">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="col-8">
                            <h3>Set Preference</h3>


                        </div>
                        <div class="col-3">
                            <span class="close skip" data-dismiss="modal"> Skip </span>
                        </div>
                    </div>
                </div>




                <div class="modal-body p-0">
                    <ul class="nav nav-tabs nvt">
                        <li><a data-toggle="tab" class="active" href="#dl">Delivery</a></li>
                        <li><a data-toggle="tab" href="#tk">Pickup</a></li>
                        <li><a data-toggle="tab" href="#pr">Preorder</a></li>

                    </ul>

                    <div class="tab-content tb_area">
                        <div id="dl" class="tab-pane fade in active show">
                            <div class="form-group">
                                <input type="search" class="form-control" placeholder="Search Locality">
                                <i class="fa fa-search"> </i>
                            </div>

                            <div class="use_crrent">
                                <i class="fa fa-map-marker"></i>
                                <p>Use Current Location</p>
                            </div>
                            <div class="adr_con">
                                <div class="row">
                                    <div class="col-9 pr-0">
                                        <span>H-351, Block H, Sector 22, Noida, Uttar , India</span>
                                    </div>
                                    <div class="col-3">
                                        <a href="#" data-toggle="modal" data-target="#change"
                                            class="text-center change">Change</a>
                                    </div>
                                </div>
                            </div>
                            <div class="adr_c">
                                <h3>Please Select your Prefered Store</h3>
                            </div>
                            <div class="prefer_loc">
                                <div class="row br_box">
                                    <div class="col-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17.125" height="25"
                                            viewBox="0 0 28.125 25">
                                            <defs>
                                                <style>
                                                    .a {
                                                        fill: #b2b2b2
                                                    }
                                                </style>
                                            </defs>
                                            <path class="a"
                                                d="M12.118,12.83l1.236-8.2H6.926L4.24,11.659a2.465,2.465,0,0,0-.127.781c0,1.725,1.8,3.125,4.017,3.125,2.047,0,3.739-1.194,3.987-2.734Zm6.058,2.734c2.219,0,4.017-1.4,4.017-3.125,0-.064,0-.128-.008-.189l-.8-7.623H14.962l-.8,7.617c0,.064-.006.128-.006.2,0,1.725,1.8,3.125,4.017,3.125ZM25.988,17.2v6.178H10.363V17.209A6.574,6.574,0,0,1,8.13,17.6a6.442,6.442,0,0,1-.892-.077v9.92a2.192,2.192,0,0,0,2.184,2.188h17.5a2.195,2.195,0,0,0,2.188-2.187V17.521a6.713,6.713,0,0,1-.892.077A6.493,6.493,0,0,1,25.988,17.2Zm6.125-5.541L29.424,4.627H23l1.234,8.191c.241,1.547,1.933,2.747,3.989,2.747,2.219,0,4.017-1.4,4.017-3.125A2.509,2.509,0,0,0,32.113,11.659Z"
                                                transform="translate(-4.113 -4.627)"></path>
                                        </svg>
                                    </div>
                                    <div class="col-9">
                                        <p>Fiesta Biryani - Order</p>
                                        <h6> Aliganj Lucknow </h6>
                                    </div>

                                    <div class="col-2">


                                        <div class="radiobuttons">
                                            <div class="rdio rdio-primary radio-inline"> <input name="radio" value="1"
                                                    id="radio1" type="radio" checked="">
                                                <label for="radio1"></label>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="row br_box">
                                    <div class="col-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17.125" height="25"
                                            viewBox="0 0 28.125 25">
                                            <defs>
                                                <style>
                                                    .a {
                                                        fill: #b2b2b2
                                                    }
                                                </style>
                                            </defs>
                                            <path class="a"
                                                d="M12.118,12.83l1.236-8.2H6.926L4.24,11.659a2.465,2.465,0,0,0-.127.781c0,1.725,1.8,3.125,4.017,3.125,2.047,0,3.739-1.194,3.987-2.734Zm6.058,2.734c2.219,0,4.017-1.4,4.017-3.125,0-.064,0-.128-.008-.189l-.8-7.623H14.962l-.8,7.617c0,.064-.006.128-.006.2,0,1.725,1.8,3.125,4.017,3.125ZM25.988,17.2v6.178H10.363V17.209A6.574,6.574,0,0,1,8.13,17.6a6.442,6.442,0,0,1-.892-.077v9.92a2.192,2.192,0,0,0,2.184,2.188h17.5a2.195,2.195,0,0,0,2.188-2.187V17.521a6.713,6.713,0,0,1-.892.077A6.493,6.493,0,0,1,25.988,17.2Zm6.125-5.541L29.424,4.627H23l1.234,8.191c.241,1.547,1.933,2.747,3.989,2.747,2.219,0,4.017-1.4,4.017-3.125A2.509,2.509,0,0,0,32.113,11.659Z"
                                                transform="translate(-4.113 -4.627)"></path>
                                        </svg>
                                    </div>
                                    <div class="col-9">
                                        <p>Fiesta Biryani - Order</p>
                                        <h6> Aliganj Lucknow </h6>
                                    </div>

                                    <div class="col-2">


                                        <div class="radiobuttons">
                                            <div class="rdio rdio-primary radio-inline"> <input name="radio" value="1"
                                                    id="radio1" type="radio">
                                                <label for="radio1"></label>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="row br_box">
                                    <div class="col-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17.125" height="25"
                                            viewBox="0 0 28.125 25">
                                            <defs>
                                                <style>
                                                    .a {
                                                        fill: #b2b2b2
                                                    }
                                                </style>
                                            </defs>
                                            <path class="a"
                                                d="M12.118,12.83l1.236-8.2H6.926L4.24,11.659a2.465,2.465,0,0,0-.127.781c0,1.725,1.8,3.125,4.017,3.125,2.047,0,3.739-1.194,3.987-2.734Zm6.058,2.734c2.219,0,4.017-1.4,4.017-3.125,0-.064,0-.128-.008-.189l-.8-7.623H14.962l-.8,7.617c0,.064-.006.128-.006.2,0,1.725,1.8,3.125,4.017,3.125ZM25.988,17.2v6.178H10.363V17.209A6.574,6.574,0,0,1,8.13,17.6a6.442,6.442,0,0,1-.892-.077v9.92a2.192,2.192,0,0,0,2.184,2.188h17.5a2.195,2.195,0,0,0,2.188-2.187V17.521a6.713,6.713,0,0,1-.892.077A6.493,6.493,0,0,1,25.988,17.2Zm6.125-5.541L29.424,4.627H23l1.234,8.191c.241,1.547,1.933,2.747,3.989,2.747,2.219,0,4.017-1.4,4.017-3.125A2.509,2.509,0,0,0,32.113,11.659Z"
                                                transform="translate(-4.113 -4.627)"></path>
                                        </svg>
                                    </div>
                                    <div class="col-9">
                                        <p>Fiesta Biryani - Order</p>
                                        <h6> Aliganj Lucknow </h6>
                                    </div>

                                    <div class="col-2">


                                        <div class="radiobuttons">
                                            <div class="rdio rdio-primary radio-inline"> <input name="radio" value="1"
                                                    id="radio1" type="radio">
                                                <label for="radio1"></label>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="adr_c pt-3 text-center">
                                <h3>Would you like to Order Now or Later?</h3>


                            </div>
                            <div class="prefer_loc">
                                <div class="row br_box mb-2">
                                    <div class="col-1">
                                        <svg viewBox="0 0 24 24" style="width: 21px; height: 21px;">
                                            <path class="a"
                                                d="M8.1,13.34L3.91,9.16C2.35,7.59 2.35,5.06 3.91,3.5L10.93,10.5L8.1,13.34M14.88,11.53L13.41,13L20.29,19.88L18.88,21.29L12,14.41L5.12,21.29L3.71,19.88L13.47,10.12C12.76,8.59 13.26,6.44 14.85,4.85C16.76,2.93 19.5,2.57 20.96,4.03C22.43,5.5 22.07,8.24 20.15,10.15C18.56,11.74 16.41,12.24 14.88,11.53Z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="col-9">
                                        <p>Order No</p>
                                        <h6></h6>
                                    </div>

                                    <div class="col-2">


                                        <div class="radiobuttons">
                                            <div class="rdio rdio-primary radio-inline"> <input name="radio" value="1"
                                                    id="radio1" type="radio" checked="">
                                                <label for="radio1"></label>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="row br_box mb-2">
                                    <div class="col-1">

                                        <svg viewBox="0 0 24 24" style="width: 19px; height: 19px;">
                                            <path class="a"
                                                d="M12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22C6.47,22 2,17.5 2,12A10,10 0 0,1 12,2M12.5,7V12.25L17,14.92L16.25,16.15L11,13V7H12.5Z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="col-9">
                                        <p>Order Later</p>
                                        <h6></h6>
                                    </div>

                                    <div class="col-2">


                                        <div class="radiobuttons">
                                            <div class="rdio rdio-primary radio-inline"> <input name="radio" value="1"
                                                    id="radio1" type="radio">
                                                <label for="radio1"></label>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div class="view_full">
                                <a href="menu.php"> <button> View Menu</button></a>
                            </div>

                        </div>
                        <div id="tk" class="tab-pane fade">

                            <div class="form-group">
                                <input type="search" class="form-control" placeholder="Search Outlet">
                                <i class="fa fa-search"> </i>
                            </div>

                            <div class="use_crrent">
                                <i class="fa fa-map-marker"></i>
                                <p>Use Current Location</p>
                            </div>
                            <div class="adr_con">
                                <div class="row">
                                    <div class="col-9 pr-0">
                                        <span>H-351, Block H, Sector 22, Noida, Uttar , India</span>
                                    </div>
                                    <div class="col-3">
                                        <a href="#" data-toggle="modal" data-target="#change"
                                            class="text-center change">Change</a>
                                    </div>
                                </div>
                            </div>
                            <div class="adr_c">
                                <h3>Please Select your Prefered Store</h3>
                            </div>
                            <div class="prefer_loc">
                                <div class="row br_box">
                                    <div class="col-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17.125" height="25"
                                            viewBox="0 0 28.125 25">
                                            <defs>
                                                <style>
                                                    .a {
                                                        fill: #b2b2b2
                                                    }
                                                </style>
                                            </defs>
                                            <path class="a"
                                                d="M12.118,12.83l1.236-8.2H6.926L4.24,11.659a2.465,2.465,0,0,0-.127.781c0,1.725,1.8,3.125,4.017,3.125,2.047,0,3.739-1.194,3.987-2.734Zm6.058,2.734c2.219,0,4.017-1.4,4.017-3.125,0-.064,0-.128-.008-.189l-.8-7.623H14.962l-.8,7.617c0,.064-.006.128-.006.2,0,1.725,1.8,3.125,4.017,3.125ZM25.988,17.2v6.178H10.363V17.209A6.574,6.574,0,0,1,8.13,17.6a6.442,6.442,0,0,1-.892-.077v9.92a2.192,2.192,0,0,0,2.184,2.188h17.5a2.195,2.195,0,0,0,2.188-2.187V17.521a6.713,6.713,0,0,1-.892.077A6.493,6.493,0,0,1,25.988,17.2Zm6.125-5.541L29.424,4.627H23l1.234,8.191c.241,1.547,1.933,2.747,3.989,2.747,2.219,0,4.017-1.4,4.017-3.125A2.509,2.509,0,0,0,32.113,11.659Z"
                                                transform="translate(-4.113 -4.627)"></path>
                                        </svg>
                                    </div>
                                    <div class="col-9">
                                        <p>Fiesta Biryani - Order</p>
                                        <h6> Aliganj Lucknow </h6>
                                    </div>

                                    <div class="col-2">


                                        <div class="radiobuttons">
                                            <div class="rdio rdio-primary radio-inline"> <input name="radio" value="1"
                                                    id="radio1" type="radio" checked="">
                                                <label for="radio1"></label>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="row br_box">
                                    <div class="col-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17.125" height="25"
                                            viewBox="0 0 28.125 25">
                                            <defs>
                                                <style>
                                                    .a {
                                                        fill: #b2b2b2
                                                    }
                                                </style>
                                            </defs>
                                            <path class="a"
                                                d="M12.118,12.83l1.236-8.2H6.926L4.24,11.659a2.465,2.465,0,0,0-.127.781c0,1.725,1.8,3.125,4.017,3.125,2.047,0,3.739-1.194,3.987-2.734Zm6.058,2.734c2.219,0,4.017-1.4,4.017-3.125,0-.064,0-.128-.008-.189l-.8-7.623H14.962l-.8,7.617c0,.064-.006.128-.006.2,0,1.725,1.8,3.125,4.017,3.125ZM25.988,17.2v6.178H10.363V17.209A6.574,6.574,0,0,1,8.13,17.6a6.442,6.442,0,0,1-.892-.077v9.92a2.192,2.192,0,0,0,2.184,2.188h17.5a2.195,2.195,0,0,0,2.188-2.187V17.521a6.713,6.713,0,0,1-.892.077A6.493,6.493,0,0,1,25.988,17.2Zm6.125-5.541L29.424,4.627H23l1.234,8.191c.241,1.547,1.933,2.747,3.989,2.747,2.219,0,4.017-1.4,4.017-3.125A2.509,2.509,0,0,0,32.113,11.659Z"
                                                transform="translate(-4.113 -4.627)"></path>
                                        </svg>
                                    </div>
                                    <div class="col-9">
                                        <p>Fiesta Biryani - Order</p>
                                        <h6> Aliganj Lucknow </h6>
                                    </div>

                                    <div class="col-2">


                                        <div class="radiobuttons">
                                            <div class="rdio rdio-primary radio-inline"> <input name="radio" value="1"
                                                    id="radio1" type="radio">
                                                <label for="radio1"></label>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="row br_box">
                                    <div class="col-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17.125" height="25"
                                            viewBox="0 0 28.125 25">
                                            <defs>
                                                <style>
                                                    .a {
                                                        fill: #b2b2b2
                                                    }
                                                </style>
                                            </defs>
                                            <path class="a"
                                                d="M12.118,12.83l1.236-8.2H6.926L4.24,11.659a2.465,2.465,0,0,0-.127.781c0,1.725,1.8,3.125,4.017,3.125,2.047,0,3.739-1.194,3.987-2.734Zm6.058,2.734c2.219,0,4.017-1.4,4.017-3.125,0-.064,0-.128-.008-.189l-.8-7.623H14.962l-.8,7.617c0,.064-.006.128-.006.2,0,1.725,1.8,3.125,4.017,3.125ZM25.988,17.2v6.178H10.363V17.209A6.574,6.574,0,0,1,8.13,17.6a6.442,6.442,0,0,1-.892-.077v9.92a2.192,2.192,0,0,0,2.184,2.188h17.5a2.195,2.195,0,0,0,2.188-2.187V17.521a6.713,6.713,0,0,1-.892.077A6.493,6.493,0,0,1,25.988,17.2Zm6.125-5.541L29.424,4.627H23l1.234,8.191c.241,1.547,1.933,2.747,3.989,2.747,2.219,0,4.017-1.4,4.017-3.125A2.509,2.509,0,0,0,32.113,11.659Z"
                                                transform="translate(-4.113 -4.627)"></path>
                                        </svg>
                                    </div>
                                    <div class="col-9">
                                        <p>Fiesta Biryani - Order</p>
                                        <h6> Aliganj Lucknow </h6>
                                    </div>

                                    <div class="col-2">


                                        <div class="radiobuttons">
                                            <div class="rdio rdio-primary radio-inline"> <input name="radio" value="1"
                                                    id="radio1" type="radio">
                                                <label for="radio1"></label>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="adr_c pt-3 text-center">
                                <h3>Would you like to Order Now or Later?</h3>


                            </div>
                            <div class="prefer_loc">
                                <div class="row br_box mb-2">
                                    <div class="col-1">
                                        <svg viewBox="0 0 24 24" style="width: 21px; height: 21px;">
                                            <path class="a"
                                                d="M8.1,13.34L3.91,9.16C2.35,7.59 2.35,5.06 3.91,3.5L10.93,10.5L8.1,13.34M14.88,11.53L13.41,13L20.29,19.88L18.88,21.29L12,14.41L5.12,21.29L3.71,19.88L13.47,10.12C12.76,8.59 13.26,6.44 14.85,4.85C16.76,2.93 19.5,2.57 20.96,4.03C22.43,5.5 22.07,8.24 20.15,10.15C18.56,11.74 16.41,12.24 14.88,11.53Z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="col-9">
                                        <p>Order No</p>
                                        <h6></h6>
                                    </div>

                                    <div class="col-2">


                                        <div class="radiobuttons">
                                            <div class="rdio rdio-primary radio-inline"> <input name="radio" value="1"
                                                    id="radio1" type="radio" checked="">
                                                <label for="radio1"></label>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="row br_box mb-2">
                                    <div class="col-1">

                                        <svg viewBox="0 0 24 24" style="width: 19px; height: 19px;">
                                            <path class="a"
                                                d="M12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4A8,8 0 0,0 4,12A8,8 0 0,0 12,20M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22C6.47,22 2,17.5 2,12A10,10 0 0,1 12,2M12.5,7V12.25L17,14.92L16.25,16.15L11,13V7H12.5Z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="col-9">
                                        <p>Order Later</p>
                                        <h6></h6>
                                    </div>

                                    <div class="col-2">


                                        <div class="radiobuttons">
                                            <div class="rdio rdio-primary radio-inline"> <input name="radio" value="1"
                                                    id="radio1" type="radio">
                                                <label for="radio1"></label>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div class="view_full">
                                <a href="menu.php"> <button> View Menu</button></a>
                            </div>
                        </div>
                        <div id="pr" class="tab-pane fade">

                            <div class="form-group">
                                <input type="search" class="form-control" placeholder="Search Outlet">
                                <i class="fa fa-search"> </i>
                            </div>

                            <div class="use_crrent">
                                <i class="fa fa-map-marker"></i>
                                <p>Use Current Location</p>
                            </div>
                            <div class="adr_con">
                                <div class="row">
                                    <div class="col-9 pr-0">
                                        <span>H-351, Block H, Sector 22, Noida, Uttar , India</span>
                                    </div>
                                    <div class="col-3">
                                        <a href="#" data-toggle="modal" data-target="#change"
                                            class="text-center change">Change</a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group calender_ar">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-5 col-6">
                                            <input type="text" id="datetimepickernew2" class="form-control input-edit">
                                            <i class="fa fa-clock-o"></i>
                                        </div>
                                        <div class="col-md-7 col-6">
                                            <input type="text" id="datepick2" class="form-control input-edit">
                                            <i class="fa fa-calendar"></i>

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="view_full">
                                <a href="menu.php"> <button> View Menu</button></a>
                            </div>
                        </div>

                    </div>
                </div>




            </div>
        </div>
    </div>
    <div class="modal  " id="fullsearch">
        <div class="modal-dialog  fixed-bottom fullwidth">
            <div class="modal-content">


                <div class="modal-body mt-5 text-center">
                    <svg viewBox="0 0 140 140" version="1.1" style="width: 140px; height: 140px;">
                        <g id="Mobile" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Empty-Cart" transform="translate(-118.000000, -168.000000)" fill-rule="nonzero">
                                <g id="tableware" transform="translate(118.000000, 168.000000)">
                                    <path
                                        d="M119.516138,20.5209375 C106.293043,7.28792969 88.7078277,0 70.0001401,0 C51.2924525,0 33.7072373,7.28792969 20.4841418,20.5209375 C7.27477599,33.74 0,51.3121875 0,70 C0,88.6878125 7.27477599,106.26 20.4838616,119.479063 C33.7072373,132.712344 51.2924525,140 70.0001401,140 C88.7078277,140 106.293043,132.712344 119.516138,119.479063 C132.725224,106.26 140,88.6880859 140,70 C140,51.3119141 132.725504,33.74 119.516138,20.5209375 Z"
                                        id="Shape" fill="#ECEFF1"></path>
                                    <g id="Group" transform="translate(19.960938, 0.000000)" fill="#CFD8DC">
                                        <path
                                            d="M99.9554427,20.5209375 C87.0513802,7.28792969 69.8904427,0 51.6341146,0 C50.5819271,0 49.5338411,0.0270703125 48.4895833,0.0751953125 C65.5649349,0.862695312 81.5060677,8.05054688 93.6663802,20.5209375 C106.556771,33.74 113.656029,51.3121875 113.656029,70 C113.656029,88.6878125 106.556771,106.26 93.6663802,119.479062 C81.5057943,131.949453 65.5646615,139.137305 48.4895833,139.924805 C49.5338411,139.97293 50.5819271,140 51.6341146,140 C69.8904427,140 87.0513802,132.712344 99.9554427,119.479062 C112.845833,106.26 119.945091,88.6880859 119.945091,70 C119.945091,51.3119141 112.846107,33.74 99.9554427,20.5209375 Z"
                                            id="Shape"></path>
                                        <path
                                            d="M49.21875,20.78125 C22.0793897,20.78125 0,42.8607045 0,70 C0,97.1392955 22.0793897,119.21875 49.21875,119.21875 C76.3581103,119.21875 98.4375,97.1392955 98.4375,70 C98.4375,42.8607045 76.3581103,20.78125 49.21875,20.78125 Z"
                                            id="Shape"></path>
                                    </g>
                                    <path
                                        d="M70.2278646,20.78125 C69.1710286,20.78125 68.1232161,20.8199372 67.0833333,20.8885935 C92.2122396,22.5483305 112.160052,43.9393768 112.160052,70.0001362 C112.160052,96.0608957 92.2122396,117.452214 67.0833333,119.111407 C68.1232161,119.180063 69.1710286,119.21875 70.2278646,119.21875 C96.8172005,119.21875 118.449115,97.1392344 118.449115,70.0001362 C118.449115,42.8610381 96.8172005,20.78125 70.2278646,20.78125 Z"
                                        id="Shape" fill="#B0BEC5"></path>
                                    <path
                                        d="M40.6844922,63.6417578 C40.4397656,63.6417578 40.1912109,63.5977344 39.9492187,63.5047656 C38.8918359,63.0984375 38.364375,61.9119922 38.7704297,60.8548828 L44.6558984,45.5407422 C45.0622266,44.4833594 46.2483984,43.9558984 47.3057812,44.3619531 C48.3631641,44.7682812 48.890625,45.9547266 48.4845703,47.0118359 L42.5991016,62.3259766 C42.2860156,63.1413672 41.5086328,63.6417578 40.6844922,63.6417578 Z"
                                        id="Shape" fill="#B0BEC5"></path>
                                    <path
                                        d="M103.084844,91.9228516 C102.360508,91.9228516 101.658594,91.5383984 101.285352,90.8586328 L91.8763672,73.7206641 C91.3311328,72.7278125 91.6942578,71.4812109 92.6871094,70.9359766 C93.6802344,70.3907422 94.9268359,70.7538672 95.4717969,71.7467187 L104.880781,88.8846875 C105.426016,89.8775391 105.062891,91.1241406 104.070039,91.669375 C103.756953,91.8413672 103.418437,91.9228516 103.084844,91.9228516 Z"
                                        id="Shape" fill="#B0BEC5"></path>
                                    <path
                                        d="M70.4946484,17.4920703 C69.1304688,12.3481641 66.0526562,8.62121094 61.8280469,6.99753906 C57.6031641,5.37386719 52.8215625,6.08015625 48.3637109,8.98652344 C44.1128516,11.7578125 40.6355469,16.2408203 38.5719141,21.6097656 C36.5085547,26.9789844 36.0882813,32.6369531 37.38875,37.5416016 C38.7529297,42.6855078 41.8307422,46.4124609 46.0553516,48.0361328 C47.5423047,48.6073437 49.0973438,48.8903516 50.6835547,48.8903516 C53.6049609,48.8903516 56.6305469,47.9305859 59.5196875,46.0471484 C63.7702734,43.2761328 67.2475781,38.793125 69.3112109,33.4239062 C71.3751172,28.0546875 71.7948437,22.3967187 70.4946484,17.4920703 Z"
                                        id="Shape" fill="#B0BEC5"></path>
                                    <path
                                        d="M70.4946484,17.4920703 C69.1304688,12.3481641 66.0526562,8.62121094 61.8280469,6.99753906 C59.355625,6.04734375 56.6923438,5.90132812 54.0151172,6.5209375 C54.5297266,6.64808594 55.0385938,6.8053125 55.5389844,6.99753906 C59.7638672,8.62121094 62.8414062,12.3481641 64.2055859,17.4920703 C65.5060547,22.3967187 65.0860547,28.0546875 63.0226953,33.4236328 C60.9590625,38.7928516 57.4817578,43.2758594 53.2311719,46.046875 C51.3851953,47.2502734 49.4834375,48.0746875 47.5887891,48.5146484 C48.5999609,48.76375 49.6349219,48.8900781 50.6841016,48.8900781 C53.6055078,48.8900781 56.6310938,47.9303125 59.5202344,46.046875 C63.7708203,43.2758594 67.248125,38.7928516 69.3117578,33.4236328 C71.3751172,28.0546875 71.7948437,22.3967187 70.4946484,17.4920703 Z"
                                        id="Shape" fill="#90A4AE" opacity="0.715959821"></path>
                                    <path
                                        d="M46.8674609,62.5726172 C46.64625,62.0757813 46.2369141,61.6869531 45.7291406,61.4917188 L37.5880859,58.3630469 C36.5307031,57.9569922 35.3442578,58.4844531 34.9382031,59.5418359 L18.4253125,102.508438 C17.8125391,104.102578 17.8592969,105.844102 18.5565625,107.411992 C19.2538281,108.979883 20.5157422,110.18082 22.1098828,110.793594 C22.8528125,111.079063 23.6277344,111.22125 24.4021094,111.22125 C25.2894141,111.22125 26.1761719,111.034492 27.0134375,110.66207 C28.5813281,109.964805 29.7822656,108.702617 30.3950391,107.108477 L46.9082031,64.141875 C47.1028906,63.6341016 47.0883984,63.0694531 46.8674609,62.5726172 Z"
                                        id="Shape" fill="#B0BEC5"></path>
                                    <path
                                        d="M46.8674609,62.5726172 C46.64625,62.0757813 46.2369141,61.6869531 45.7291406,61.4917188 L42.6663672,60.3145703 C42.6775781,60.5912891 42.6341016,60.8701953 42.5329297,61.1337891 L26.0194922,104.100391 C25.4067187,105.694531 24.2060547,106.956445 22.6378906,107.653984 C21.800625,108.026406 20.9138672,108.213164 20.0265625,108.213164 C19.6590625,108.213164 19.2915625,108.178711 18.9273437,108.114453 C19.6596094,109.336445 20.7640234,110.275977 22.1093359,110.79332 C22.8522656,111.078789 23.6271875,111.220977 24.4015625,111.220977 C25.2888672,111.220977 26.175625,111.034219 27.0128906,110.661797 C28.5807812,109.964531 29.7817187,108.702344 30.3944922,107.108203 L46.9076563,64.1416016 C47.1028906,63.6341016 47.0883984,63.0694531 46.8674609,62.5726172 Z"
                                        id="Shape" fill="#90A4AE" opacity="0.452232143"></path>
                                    <path
                                        d="M130.971367,127.346133 L108.818828,86.9966016 C108.273867,86.00375 107.027266,85.640625 106.034141,86.1858594 L98.3891016,90.383125 C97.9122266,90.6448047 97.5589453,91.0853125 97.4069141,91.6075781 C97.2548828,92.1298437 97.3164062,92.6909375 97.5783594,93.1678125 L119.730898,133.517617 C120.552578,135.014687 121.912656,136.103242 123.560391,136.582852 C124.157578,136.756758 124.76543,136.842891 125.369453,136.842891 C126.432031,136.842891 127.482305,136.576289 128.436602,136.052109 C129.933672,135.23043 131.022227,133.870352 131.502109,132.222617 C131.981719,130.574883 131.79332,128.843203 130.971367,127.346133 Z"
                                        id="Shape" fill="#B0BEC5"></path>
                                    <path
                                        d="M130.971367,127.346133 L108.818828,86.9966016 C108.273867,86.00375 107.027266,85.640625 106.034141,86.1858594 L103.18875,87.7480078 L125.22918,127.893008 C126.051133,129.390078 126.239531,131.121758 125.759922,132.769219 C125.316406,134.292266 124.347891,135.56375 123.022539,136.397188 C123.198633,136.465273 123.377188,136.528984 123.560391,136.582578 C124.157578,136.756484 124.76543,136.842617 125.369453,136.842617 C126.432031,136.842617 127.482305,136.576016 128.436602,136.051836 C129.933672,135.230156 131.022227,133.870078 131.502109,132.222344 C131.981719,130.574883 131.79332,128.843203 130.971367,127.346133 Z"
                                        id="Shape" fill="#90A4AE" opacity="0.452232143"></path>
                                    <path
                                        d="M100.263516,58.0371094 L91.4995703,42.0746484 C90.0626563,39.4570312 86.7639062,38.4964453 84.1460156,39.9336328 C82.8663281,40.6360937 81.9828516,41.7834375 81.5817188,43.0787109 C80.2735938,42.7221484 78.8309375,42.8514844 77.5515234,43.5539453 C76.3311719,44.2241406 75.4712109,45.29875 75.0460156,46.5201953 C73.7871094,46.2235156 72.4185547,46.3719922 71.1982031,47.0419141 C69.9332813,47.7364453 69.0137109,48.8851562 68.6084766,50.2764062 C68.2035156,51.6676562 68.3629297,53.1308203 69.0571875,54.3954687 L74.6503516,64.5832031 C74.6845313,64.6739844 74.7252734,64.7628516 74.7725781,64.8489844 L77.8025391,70.3680469 C79.7756641,73.9621094 83.4996094,75.9973047 87.3362109,75.9973047 C89.1007031,75.9973047 90.8892578,75.5666406 92.5419141,74.659375 L95.9719141,72.7762109 C98.5050391,71.3855078 100.347461,69.0828906 101.159844,66.2924609 C101.972773,63.5020312 101.654219,60.5702344 100.263516,58.0371094 Z"
                                        id="Shape" fill="#B0BEC5"></path>
                                    <g id="Group" transform="translate(74.921875, 39.101563)" fill="#90A4AE"
                                        opacity="0.715959821">
                                        <path
                                            d="M25.3416406,18.9355469 L16.5776953,2.97308594 C15.1407813,0.35546875 11.8420312,-0.605117188 9.22414063,0.832070312 C8.26464844,1.35871094 7.52800781,2.13554687 7.0503125,3.03734375 C8.95945313,3.04226562 10.8108984,4.055625 11.7928125,5.84417969 L20.5567578,21.8066406 C21.9474609,24.3397656 22.2657422,27.2715625 21.4533594,30.0619922 C20.8460547,32.1475 19.6634375,33.9601172 18.0471484,35.32375 L21.0505859,33.6749219 C23.5837109,32.2842188 25.4261328,29.9816016 26.2385156,27.1911719 C27.0508984,24.4004687 26.7323438,21.4686719 25.3416406,18.9355469 Z"
                                            id="Shape"></path>
                                        <path
                                            d="M12.3973828,31.4455859 C11.9136719,31.4455859 11.4452734,31.1885547 11.1967187,30.734375 L0.350273437,10.9101562 C-0.0123046875,10.2478906 0.231054687,9.41691406 0.893320312,9.05460937 C1.55613281,8.69203125 2.3865625,8.93511719 2.74886719,9.59765625 L13.5953125,29.421875 C13.9578906,30.0841406 13.7145312,30.9151172 13.0522656,31.2774219 C12.8439062,31.3914453 12.6188672,31.4455859 12.3973828,31.4455859 Z"
                                            id="Shape"></path>
                                        <path
                                            d="M19.1890234,28.3207422 C18.7055859,28.3207422 18.2369141,28.0637109 17.9883594,27.6095312 L7.14191406,7.7853125 C6.77933594,7.12304688 7.02269531,6.29207031 7.68496094,5.92976563 C8.3475,5.5671875 9.17820312,5.81027344 9.54050781,6.4728125 L20.3869531,26.2970312 C20.7495312,26.9592969 20.5061719,27.7902734 19.8439062,28.1525781 C19.6358203,28.2666016 19.4107812,28.3207422 19.1890234,28.3207422 Z"
                                            id="Shape"></path>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                    <p>looks like your search list is empty</p>


                </div>

                <!-- Modal footer -->
                <div class="modal-ft">

                    <div class="row">
                        <div class="col-1">
                            <span class="fa fa-angle-left " data-dismiss="modal"></span>
                        </div>
                        <div class="col-9">
                            <input type="text" class="form-control border-0" placeholder="Search for menu items">
                        </div>
                        <div class="col-2">
                            <span class="fa fa-search serch"></span>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>


    <div class="modal" id="menu_details">
        <div class="modal-dialog modal-md">
            <div class="modal-content">


                <div class="modal-header">
                    <h3> Chicken Boneless Dum Biryani [1/2 Kg] Serves 1-2 </h3>

                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>


                <div class="modal-body modal-txt ">
                    <div class="img_detail">
                        <img src="./assets/images/new.jpg" alt="">
                    </div>

                    <p class="p_detl">
                        [Served with salan] Boneless Fresh & Succulent Chicken marinated in a mixture of freshly ground
                        BBK spices & layered with long grain basmati rice in the handi and slow-cooked in a sealed
                        handi. [1/2kg serves 1-2]
                    </p>



                </div>

            </div>
        </div>
    </div>


    <div class="modal" id="add_biryani">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">


                <div class="modal-header">
                    <h3> Chicken Boneless Dum Biryani [1/2 Kg] Serves 1-2 </h3>

                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>


                <div class="modal-body add_txt ">
                    <div class="row">
                        <div class="col-md-7 col-12">
                            <div class="height_con">
                                <h3 class=""> Any changes spices level? <span>Clear</span> </h3>

                                <div class="extra_pro">
                                    <div class="row">
                                        <div class="col-md-4 col-lg-4 col-6">
                                            <div class="form-group check_new1">
                                                <input type="checkbox" id="lb1">
                                                <label for="lb1"></label>
                                            </div>

                                            <img src="./assets/images/1624019657137_chili_web.png" alt="">
                                            <p> Extra spices </p>
                                        </div>
                                        <div class="col-md-4 col-lg-4 col-6">
                                            <div class="form-group check_new1">
                                                <input type="checkbox" id="lb2">
                                                <label for="lb2"></label>
                                            </div>

                                            <img src="./assets/images/1624019657137_chili_web.png" alt="">
                                            <p> Extra spices </p>
                                        </div>
                                        <div class="col-md-4 col-lg-4 col-6">
                                            <div class="form-group check_new1">
                                                <input type="checkbox" id="lb3">
                                                <label for="lb3"></label>
                                            </div>

                                            <img src="./assets/images/1624019657137_chili_web.png" alt="">
                                            <p> Extra spices </p>
                                        </div>


                                    </div>

                                </div>
                                <h3 class=""> Extra's <span>Clear</span> </h3>

                                <div class="extra_pro">
                                    <div class="row">
                                        <div class="col-md-4 col-lg-4 col-6">
                                            <div class="form-group check_new1">
                                                <input type="checkbox" id="lb">
                                                <label for="lb"></label>
                                            </div>

                                            <img src="./assets/images/raita.jpg" alt="">
                                            <p> Raita </p>
                                        </div>
                                        <div class="col-md-4 col-lg-4 col-6">
                                            <div class="form-group check_new1">
                                                <input type="checkbox" id="lb5">
                                                <label for="lb5"></label>
                                            </div>

                                            <img src="./assets/images/raita.jpg" alt="">
                                            <p> Raita </p>
                                        </div>
                                        <div class="col-md-4 col-lg-4 col-6">
                                            <div class="form-group check_new1">
                                                <input type="checkbox" id="lb6">
                                                <label for="lb6"></label>
                                            </div>

                                            <img src="./assets/images/raita.jpg" alt="">
                                            <p> Raita </p>
                                        </div>

                                    </div>

                                </div>

                                <h3 class=""> Meetha <span>Clear</span> </h3>

                                <div class="extra_pro">
                                    <div class="row">
                                        <div class="col-md-4 col-lg-4 col-6">
                                            <div class="form-group check_new1">
                                                <input type="checkbox" id="lb7">
                                                <label for="lb7"></label>
                                            </div>

                                            <img src="./assets/images/meetha.jpg" alt="">
                                            <p> Rasgulla </p>
                                        </div>
                                        <div class="col-md-4 col-lg-4 col-6">
                                            <div class="form-group check_new1">
                                                <input type="checkbox" id="lb8">
                                                <label for="lb8"></label>
                                            </div>

                                            <img src="./assets/images/meetha.jpg" alt="">
                                            <p> Rasgulla </p>
                                        </div>
                                        <div class="col-md-4 col-lg-4 col-6">
                                            <div class="form-group check_new1">
                                                <input type="checkbox" id="lb9">
                                                <label for="lb9"></label>
                                            </div>
                                            <img src="./assets/images/meetha.jpg" alt="">
                                            <p> Rasgulla </p>
                                        </div>

                                    </div>

                                </div>




                            </div>
                        </div>
                        <div class="col-md-5 col-12 pl-0">
                            <div class="item_cart">
                                <div class="item_head">
                                    Item cart <span>Rs. 460</span>
                                    <buttotn class="checkbtn" data-toggle="modal" data-target="#checkout">
                                        Checkout</button>
                                </div>

                                <div class="item_body mnone">
                                    <div class="row">
                                        <div class="col-md-9 col-9">
                                            <p> Mutton Hyderabadi Dum Biryani [1/2 Kg] Serves 1-2 </p>
                                        </div>
                                        <div class="col-3 col-md-3">
                                            <p>Rs. 645</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item_footer mnone">
                                    <button class="">ADD to cart</button>
                                </div>

                            </div>

                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>

    <div class="modal" id="changene">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">


                <div class="modal-body add_txt p-0">

                    <div class="form_fl w-100">

                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#delivery" role="tab">Delivery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#pickup" role="tab">Pickup</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#preorder" role="tab">Preorder</a>
                            </li>
                        </ul>
                        <div class="tab-content tb-con px-4 pt-4">
                            <div class="tab-pane active" id="delivery" role="tabpanel">
                                <h3>Search by Locality / Area</h3>
                                <form action="">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group icon_i">
                                                <i class="fa fa-search"></i> <input type="search"
                                                    class="form-control search_control"
                                                    placeholder="Enter Your Location">
                                            </div>
                                            <a href="#" class="find_location" data-toggle="modal"
                                                data-target="#myModal">
                                                <img src="./assets/images/locate.svg" alt=""> Find my current Location
                                            </a>

                                        </div>

                                    </div>


                                </form>
                            </div>
                            <div class="tab-pane" id="pickup" role="tabpanel">
                                <h3>Set Outlet available near your locality
                                </h3>
                                <form action="">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group icon_i">
                                                <i class="fa fa-search"></i> <input type="search"
                                                    class="form-control search_control" placeholder="Search Outlet">
                                            </div>

                                            <div class="biryani_list">

                                                <div class="row br_box">
                                                    <div class="col-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="17.125"
                                                            height="25" viewBox="0 0 28.125 25">
                                                            <defs>
                                                                <style>
                                                                    .a {
                                                                        fill: #b2b2b2
                                                                    }
                                                                </style>
                                                            </defs>
                                                            <path class="a"
                                                                d="M12.118,12.83l1.236-8.2H6.926L4.24,11.659a2.465,2.465,0,0,0-.127.781c0,1.725,1.8,3.125,4.017,3.125,2.047,0,3.739-1.194,3.987-2.734Zm6.058,2.734c2.219,0,4.017-1.4,4.017-3.125,0-.064,0-.128-.008-.189l-.8-7.623H14.962l-.8,7.617c0,.064-.006.128-.006.2,0,1.725,1.8,3.125,4.017,3.125ZM25.988,17.2v6.178H10.363V17.209A6.574,6.574,0,0,1,8.13,17.6a6.442,6.442,0,0,1-.892-.077v9.92a2.192,2.192,0,0,0,2.184,2.188h17.5a2.195,2.195,0,0,0,2.188-2.187V17.521a6.713,6.713,0,0,1-.892.077A6.493,6.493,0,0,1,25.988,17.2Zm6.125-5.541L29.424,4.627H23l1.234,8.191c.241,1.547,1.933,2.747,3.989,2.747,2.219,0,4.017-1.4,4.017-3.125A2.509,2.509,0,0,0,32.113,11.659Z"
                                                                transform="translate(-4.113 -4.627)"></path>
                                                        </svg>
                                                    </div>
                                                    <div class="col-6">
                                                        <p>Fiesta Biryani - Order</p>
                                                        <h6> Aliganj Lucknow </h6>
                                                    </div>
                                                    <div class="col-3">
                                                        <i class="fa fa-time"></i> 30 Min
                                                    </div>
                                                    <div class="col-2">


                                                        <div class="radiobuttons">
                                                            <div class="rdio rdio-primary radio-inline"> <input
                                                                    name="radio" value="1" id="radio1" type="radio"
                                                                    checked>
                                                                <label for="radio1"></label>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="row br_box">
                                                    <div class="col-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="17.125"
                                                            height="25" viewBox="0 0 28.125 25">
                                                            <defs>
                                                                <style>
                                                                    .a {
                                                                        fill: #b2b2b2
                                                                    }
                                                                </style>
                                                            </defs>
                                                            <path class="a"
                                                                d="M12.118,12.83l1.236-8.2H6.926L4.24,11.659a2.465,2.465,0,0,0-.127.781c0,1.725,1.8,3.125,4.017,3.125,2.047,0,3.739-1.194,3.987-2.734Zm6.058,2.734c2.219,0,4.017-1.4,4.017-3.125,0-.064,0-.128-.008-.189l-.8-7.623H14.962l-.8,7.617c0,.064-.006.128-.006.2,0,1.725,1.8,3.125,4.017,3.125ZM25.988,17.2v6.178H10.363V17.209A6.574,6.574,0,0,1,8.13,17.6a6.442,6.442,0,0,1-.892-.077v9.92a2.192,2.192,0,0,0,2.184,2.188h17.5a2.195,2.195,0,0,0,2.188-2.187V17.521a6.713,6.713,0,0,1-.892.077A6.493,6.493,0,0,1,25.988,17.2Zm6.125-5.541L29.424,4.627H23l1.234,8.191c.241,1.547,1.933,2.747,3.989,2.747,2.219,0,4.017-1.4,4.017-3.125A2.509,2.509,0,0,0,32.113,11.659Z"
                                                                transform="translate(-4.113 -4.627)"></path>
                                                        </svg>
                                                    </div>
                                                    <div class="col-6">
                                                        <p>Fiesta Biryani - Order</p>
                                                        <h6> Aliganj Lucknow </h6>
                                                    </div>
                                                    <div class="col-3">
                                                        <i class="fa fa-time"></i> 30 Min
                                                    </div>
                                                    <div class="col-2">

                                                        <div class="radiobuttons">
                                                            <div class="rdio rdio-primary radio-inline"> <input
                                                                    name="radio" value="1" id="radio2" type="radio"
                                                                    checked>
                                                                <label for="radio2"></label>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row br_box">
                                                    <div class="col-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="17.125"
                                                            height="25" viewBox="0 0 28.125 25">
                                                            <defs>
                                                                <style>
                                                                    .a {
                                                                        fill: #b2b2b2
                                                                    }
                                                                </style>
                                                            </defs>
                                                            <path class="a"
                                                                d="M12.118,12.83l1.236-8.2H6.926L4.24,11.659a2.465,2.465,0,0,0-.127.781c0,1.725,1.8,3.125,4.017,3.125,2.047,0,3.739-1.194,3.987-2.734Zm6.058,2.734c2.219,0,4.017-1.4,4.017-3.125,0-.064,0-.128-.008-.189l-.8-7.623H14.962l-.8,7.617c0,.064-.006.128-.006.2,0,1.725,1.8,3.125,4.017,3.125ZM25.988,17.2v6.178H10.363V17.209A6.574,6.574,0,0,1,8.13,17.6a6.442,6.442,0,0,1-.892-.077v9.92a2.192,2.192,0,0,0,2.184,2.188h17.5a2.195,2.195,0,0,0,2.188-2.187V17.521a6.713,6.713,0,0,1-.892.077A6.493,6.493,0,0,1,25.988,17.2Zm6.125-5.541L29.424,4.627H23l1.234,8.191c.241,1.547,1.933,2.747,3.989,2.747,2.219,0,4.017-1.4,4.017-3.125A2.509,2.509,0,0,0,32.113,11.659Z"
                                                                transform="translate(-4.113 -4.627)"></path>
                                                        </svg>
                                                    </div>
                                                    <div class="col-6">
                                                        <p>Fiesta Biryani - Order</p>
                                                        <h6> Aliganj Lucknow </h6>
                                                    </div>
                                                    <div class="col-3">
                                                        <i class="fa fa-time"></i> 30 Min
                                                    </div>
                                                    <div class="col-2">

                                                        <div class="radiobuttons">
                                                            <div class="rdio rdio-primary radio-inline"> <input
                                                                    name="radio" value="1" id="radio3" type="radio"
                                                                    checked>
                                                                <label for="radio3"></label>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row br_box">
                                                    <div class="col-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="17.125"
                                                            height="25" viewBox="0 0 28.125 25">
                                                            <defs>
                                                                <style>
                                                                    .a {
                                                                        fill: #b2b2b2
                                                                    }
                                                                </style>
                                                            </defs>
                                                            <path class="a"
                                                                d="M12.118,12.83l1.236-8.2H6.926L4.24,11.659a2.465,2.465,0,0,0-.127.781c0,1.725,1.8,3.125,4.017,3.125,2.047,0,3.739-1.194,3.987-2.734Zm6.058,2.734c2.219,0,4.017-1.4,4.017-3.125,0-.064,0-.128-.008-.189l-.8-7.623H14.962l-.8,7.617c0,.064-.006.128-.006.2,0,1.725,1.8,3.125,4.017,3.125ZM25.988,17.2v6.178H10.363V17.209A6.574,6.574,0,0,1,8.13,17.6a6.442,6.442,0,0,1-.892-.077v9.92a2.192,2.192,0,0,0,2.184,2.188h17.5a2.195,2.195,0,0,0,2.188-2.187V17.521a6.713,6.713,0,0,1-.892.077A6.493,6.493,0,0,1,25.988,17.2Zm6.125-5.541L29.424,4.627H23l1.234,8.191c.241,1.547,1.933,2.747,3.989,2.747,2.219,0,4.017-1.4,4.017-3.125A2.509,2.509,0,0,0,32.113,11.659Z"
                                                                transform="translate(-4.113 -4.627)"></path>
                                                        </svg>
                                                    </div>
                                                    <div class="col-6">
                                                        <p>Fiesta Biryani - Order</p>
                                                        <h6> Aliganj Lucknow </h6>
                                                    </div>
                                                    <div class="col-3">
                                                        <i class="fa fa-time"></i> 30 Min
                                                    </div>
                                                    <div class="col-2">

                                                        <div class="radiobuttons">
                                                            <div class="rdio rdio-primary radio-inline"> <input
                                                                    name="radio" value="1" id="radio4" type="radio"
                                                                    checked>
                                                                <label for="radio4"></label>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group calender_ar">
                                                <div class="row">
                                                    <div class="col-md-5 col-6">
                                                        <input type="text" id="datetimepickernew" class="form-control">
                                                        <i class="fa fa-clock-o"></i>
                                                    </div>
                                                    <div class="col-md-7 col-6">
                                                        <input type="text" id="datepick" class="form-control">
                                                        <i class="fa fa-calendar"></i>

                                                    </div>

                                                </div>
                                            </div>

                                            <div class="order_btn">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <button class="pl_order"> Place Order</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>


                                </form>
                            </div>
                            <div class="tab-pane" id="preorder" role="tabpanel">
                                <h3>SAFE DELIVERY, COVERED!
                                </h3>

                                <form action="">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group icon_i">
                                                <i class="fa fa-search"></i> <input type="search"
                                                    class="form-control search_control" placeholder="Search Outlet">
                                            </div>



                                            <div class="form-group calender_ar">
                                                <div class="row">
                                                    <div class="col-md-5 col-6">
                                                        <input type="text" id="datetimepickernew1" class="form-control">
                                                        <i class="fa fa-clock-o"></i>
                                                    </div>
                                                    <div class="col-md-7 col-6">
                                                        <input type="text" id="datepick1" class="form-control">
                                                        <i class="fa fa-calendar"></i>

                                                    </div>

                                                </div>
                                            </div>

                                            <div class="order_btn">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <button class="pl_order"> Place Order</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>


                                </form>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="modal" id="checkout">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content p_ab">


                <div class="modal-header bg-y">
                    <h3 class="w-100"> Your Cart: 1 Items. <span class="pull-right">Rs. 460</span> </h3>

                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>


                <div class="modal-body add_txt ">
                    <div class="row">
                        <div class="item_cart item_cart2">
                            <div class="item_head">
                                Your Cart: 1 Items. <span>Rs. 460</span>
                            </div>

                            <div class="item_body">
                                <div class="row">
                                    <div class="col-md-6 col-6">
                                        <p> Mutton Hyderabadi Dum Biryani [1/2 Kg] Serves 1-2 </p>
                                    </div>

                                    <div class="col-md-3 col-3 pr-0 pl-0">
                                        <div class="input-group">
                                            <input type="button" value="-" class="button-minus" data-field="quantity">
                                            <input type="number" step="1" max="" value="0" name="quantity"
                                                class="quantity-field">
                                            <input type="button" value="+" class="button-plus" data-field="quantity">
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-3 ">
                                        <p class="text-right">Rs. 645</p>
                                    </div>
                                </div>
                                <div class="row pr_m">
                                    <div class="col-md-6 col-6">
                                        <p>Salan- (Rs. 55) </p>
                                    </div>
                                    <div class="col-md-3 col-3 ">
                                        <p> [1] </p>
                                    </div>
                                </div>
                                <div class="row pr_m">
                                    <div class="col-md-6 col-6">
                                        <p>Gulab Jamun with Raita (Rs.155) </p>
                                    </div>
                                    <div class="col-md-3 col-3 ">
                                        <p> [1] </p>
                                    </div>
                                </div>
                                <div class="row pr_m">
                                    <div class="col-md-6 col-6">
                                        <p>Raita (Rs.15) </p>
                                    </div>
                                    <div class="col-md-3 col-3 ">
                                        <p> [1] </p>
                                    </div>
                                </div>
                                <div class="row pr_m">
                                    <div class="col-md-6 col-6">
                                        <p>Biryani Raita (Rs.155) </p>
                                    </div>
                                    <div class="col-md-3 col-3 ">
                                        <p> [1] </p>
                                    </div>
                                </div>


                                <div class="subtotl mb-3 mt-3 row border-top">
                                    <div class="col-md-12">


                                        <h2> Subtotal <span>Rs. 645</span> </h2>
                                        <h4> CGST @2.5% <span>Rs. 17.88</span> </h4>
                                        <h4> SGST @2.5% <span>Rs. 17.88</span> </h4>
                                    </div>
                                </div>


                                <div class="row mb-4 border-top pt-3">
                                    <div class="col-md-9 col-9">
                                        <p>Offer code/ Gift card code</p>
                                        <input type="text" placeholder="Coupon Code" class="form-control cupom">

                                    </div>
                                    <div class="col-lg-3 col-3">
                                        <button class=" border-0 apply1">APPLY</button>
                                    </div>
                                </div>

                                <p class="total text"> Total <span>Rs. 645</span> </p>
                            </div>


                        </div>
                        <div class="col-md-5 col-12 pl-0">
                            <div class="item_cart">
                                <div class="">

                                    <a href="cart.php"> <button class=" border-0 item_head text-center"> Proceed
                                            to checkout </button> </a>
                                </div>



                            </div>

                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>

    <!-- The Login -->



    <div class="men_foot">



        <?php include_once( 'footer.php'); ?>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="./assets/js/owl.carousel.min2.js"></script>
    <script src="./assets/js/wow.js"></script>
    <script src="./assets/js/jquery.datetimepicker.full.js"></script>
    <script src="./assets/js/custom.js"></script>

    <div class="modal" id="Login_modal1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content m-2">

                <div class="modal-header modal-heade border_n">

                    <button type="button" class="close close1" data-dismiss="modal">&times;</button>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-6 col-12 pr-0 mnone">
                        <div class="profile-img-area">
                            <img src="./assets/images/login.jpg" alt="">
                        </div>




                    </div>
                    <div class="col-md-6 col-lg-6 col-12">
                        <div class=" new-login-area">
                            <div id='sign-in1' class='login-setup-section'>
                                <h3 class="request-otp-header">Login via registered number</h3>
                                <div class="form-group login-label">
                                    <label for="inputnumber">Enter Your Mobile Number</label>
                                    <input type="text" maxlength="10" class="form-control input-edit"
                                        placeholder='Enter Mobile Number' id="number">

                                </div>
                                <button type="button" class="btn btn-default btn-lg btn-block request-otp"
                                    id='request-otp'>Sent OTP</button>
                                <h5> <span> New User? </span> <a href="#" class="regis"> Register </a> </span> </h5>
                            </div>
                            <div id='register1' class='login-setup-section'>
                                <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                <h3 class="request-otp-header">Register on Fiesta Biryani</h3>
                                <div class="form-group login-label">

                                    <div class="form-group">
                                        <label> Name</label>
                                        <input type="text" placeholder="Enter Your Name * "
                                            class="form-control input-edit">
                                    </div>
                                    <div class="form-group">
                                        <label>Email ID</label>
                                        <input type="email" placeholder="Enter Your Email ID * "
                                            class="form-control input-edit">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="text" placeholder="Enter Password * "
                                            class="form-control input-edit">
                                    </div>
                                    <div class="form-group">
                                        <label> Confirm Password</label>
                                        <input type="text" placeholder="Enter Confirm Password * "
                                            class="form-control input-edit">
                                    </div>

                                </div>
                                <button type="button" class="btn btn-default btn-lg btn-block request-otp"
                                    id='request-otp'>Submit</button>
                                <h5> <span> Already registered? </span> <a href="#" class="log_n"> Login </a> </span>
                                </h5>
                            </div>
                            <div id='verify-otp1' class="login-setup-section">
                                <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                <h3 class="request-otp-header">Verify OTP</h3>

                                <p class="otp_pr">We have sent an OTP <span>89898989889</span> </p>

                                <div class="form-group login-label">
                                    <label for="inputnumber">One Time Password</label>
                                    <input type="text" maxlength="6" class="form-control input-edit"
                                        placeholder='Enter OTP' id="number">
                                    <label class="text-right resend-otp w-100">Resend OTP</label>
                                </div>
                                <button type="button"
                                    class="btn btn-default btn-lg btn-block request-otp ">Verify</button>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div>
    <div class="modal" id="checkout">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">


                <div class="modal-header">
                    <h3> Chicken Boneless Dum Biryani [1/2 Kg] Serves 1-2 </h3>

                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>


                <div class="modal-body add_txt ">
                    <div class="row">
                        <div class="col-md-7 col-12">
                            <div class="height_con">
                                <h3 class=""> Any changes spices level? <span>Clear</span> </h3>

                                <div class="extra_pro">
                                    <div class="row">
                                        <div class="col-md-4 col-lg-4 col-6">
                                            <div class="form-group check_new1">
                                                <input type="checkbox" id="lb1">
                                                <label for="lb1"></label>
                                            </div>

                                            <img src="./assets/images/1624019657137_chili_web.png" alt="">
                                            <p> Extra spices </p>
                                        </div>
                                        <div class="col-md-4 col-lg-4 col-6">
                                            <div class="form-group check_new1">
                                                <input type="checkbox" id="lb2">
                                                <label for="lb2"></label>
                                            </div>

                                            <img src="./assets/images/1624019657137_chili_web.png" alt="">
                                            <p> Extra spices </p>
                                        </div>
                                        <div class="col-md-4 col-lg-4 col-6">
                                            <div class="form-group check_new1">
                                                <input type="checkbox" id="lb3">
                                                <label for="lb3"></label>
                                            </div>

                                            <img src="./assets/images/1624019657137_chili_web.png" alt="">
                                            <p> Extra spices </p>
                                        </div>


                                    </div>

                                </div>
                                <h3 class=""> Extra's <span>Clear</span> </h3>

                                <div class="extra_pro">
                                    <div class="row">
                                        <div class="col-md-4 col-lg-4 col-6">
                                            <div class="form-group check_new1">
                                                <input type="checkbox" id="lb">
                                                <label for="lb"></label>
                                            </div>

                                            <img src="./assets/images/raita.jpg" alt="">
                                            <p> Raita </p>
                                        </div>
                                        <div class="col-md-4 col-lg-4 col-6">
                                            <div class="form-group check_new1">
                                                <input type="checkbox" id="lb5">
                                                <label for="lb5"></label>
                                            </div>

                                            <img src="./assets/images/raita.jpg" alt="">
                                            <p> Raita </p>
                                        </div>
                                        <div class="col-md-4 col-lg-4 col-6">
                                            <div class="form-group check_new1">
                                                <input type="checkbox" id="lb6">
                                                <label for="lb6"></label>
                                            </div>

                                            <img src="./assets/images/raita.jpg" alt="">
                                            <p> Raita </p>
                                        </div>

                                    </div>

                                </div>

                                <h3 class=""> Meetha <span>Clear</span> </h3>

                                <div class="extra_pro">
                                    <div class="row">
                                        <div class="col-md-4 col-lg-4 col-6">
                                            <div class="form-group check_new1">
                                                <input type="checkbox" id="lb7">
                                                <label for="lb7"></label>
                                            </div>

                                            <img src="./assets/images/meetha.jpg" alt="">
                                            <p> Rasgulla </p>
                                        </div>
                                        <div class="col-md-4 col-lg-4 col-6">
                                            <div class="form-group check_new1">
                                                <input type="checkbox" id="lb8">
                                                <label for="lb8"></label>
                                            </div>

                                            <img src="./assets/images/meetha.jpg" alt="">
                                            <p> Rasgulla </p>
                                        </div>
                                        <div class="col-md-4 col-lg-4 col-6">
                                            <div class="form-group check_new1">
                                                <input type="checkbox" id="lb9">
                                                <label for="lb9"></label>
                                            </div>
                                            <img src="./assets/images/meetha.jpg" alt="">
                                            <p> Rasgulla </p>
                                        </div>

                                    </div>

                                </div>




                            </div>
                        </div>
                        <div class="col-md-5 col-12 pl-0">
                            <div class="item_cart">
                                <div class="item_head">
                                    Item cart <span>Rs. 460</span>
                                    <buttotn class="checkbtn">Checkout</button>
                                </div>

                                <div class="item_body mnone">
                                    <div class="row">
                                        <div class="col-md-9 col-9">
                                            <p> Mutton Hyderabadi Dum Biryani [1/2 Kg] Serves 1-2 </p>
                                        </div>
                                        <div class="col-3 col-md-3">
                                            <p>Rs. 645</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item_footer mnone">
                                    <button class="">ADD to cart</button>
                                </div>

                            </div>

                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>

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
            $('.input-group').on('click', '.button-plus', function (e) {
                incrementValue(e);
            });

            $('.input-group').on('click', '.button-minus', function (e) {
                decrementValue(e);
            });

        });
    </script>
</body>

</html>