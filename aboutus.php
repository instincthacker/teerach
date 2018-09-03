<?php 
include 'include/condb.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>Databar</title>
    <link rel="shortcut icon" href="favicon.png">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link href="https://fonts.googleapis.com/css?family=Oxygen:300,400,700" rel="stylesheet">
    <!-- Main css -->
    <link rel="stylesheet" href="css/webstyle.css">
    <link rel="stylesheet" href="css/dropbtn.css">
    <link rel="stylesheet" href="css/stylepages.css">
    <link rel="stylesheet" href="css/slideshow.css">
    <style type="text/css">
        body {
            height: 100%;
        }

        .box h1,
        .box h2,
        .box h3,
        .box p {
            color: #fff;
            padding: 0;
            font-weight: lighter;
            z-index: 1;
        }

        h3 {
            font-size: 27px;

        }

        h4 {
            font-size: 22px;

        }

        p {
            font-size: 17px;
        }
    </style>
    <script type="text/javascript">
        function cutStr($str, $maxChars = '', $holder = '') {

            if (strlen($str) > $maxChars) {
                $str = iconv_substr($str, 0, $maxChars, "UTF-8").$holder;
            }
            return $str;
        }
    </script>
</head>

<body>


    <!-- PRE LOADER -->

    <div class="preloader">
        <div class="sk-spinner sk-spinner-pulse"></div>
    </div>



    <div class="visible-md visible-lg ">
        <?php
                     include 'include/navlg.inc';
               ?>
    </div>
    <div class="visible-xs visible-sm">
        <?php
                     include 'include/navsm.inc';
               ?>
    </div>


    <!-- Section 1 -->
    <div id="product" style="background: url(images/aboutus/samsung.jpg); background-size: cover; background-repeat: no-repeat;  background-position: bottom; background-attachment: fixed; ">
        <div class="overlay" style="opacity: 0.4;background: #000;  "></div>

        <!-- <div class="container-fluid"> -->
        <div class="row" style="display:flex; align-items: center; justify-content: center; min-height:400px;">
            <div class="slider-text-inner text-center box">
                <div class="row" style="display:flex;  align-items: center; justify-content: center; min-height:400px;">
                    <div class="col-md-12" style="padding: 0 10% 0 10%">
                        <h1 class="wow fadeInUp" data-wow-delay="0.3s" style="text-align: center; font-weight: 400;">
                            About Us</h1>

                        <div>
                            <p class="wow fadeInUp" data-wow-delay="0.6s" style="padding-top:2%; ">DATABAR is business-to-business (B2B) distributor and authorized services that sells, supports, repair services the comprehensive products and solutions of Samsung enterprise mobility, Samsung KNOX (EMM), 42Gears mobility solutions – SaaS/On-cloud and On-premise, barcode and complementary mobility solutions on Samsung Android, Android, iOS, Windows OS platforms.</p> <br>
                            <!--
							<p class="wow fadeInUp" data-wow-delay="0.9s">DATABAR provides a broad range of experienced sales reps, knowledgeable technical support and skilled professional services to help channel partners to achieve growth in a variety of vertical markets including field force automation, retail, services, healthcare, finance & banking, transport & logistics, manufacturing & supply chain, government and public sector.</p><br>


							<p class="wow fadeInUp" data-wow-delay="1.2s" style="padding-top:;">Our mission is to help mobile operators or carriers, independent software providers, system integrators, technology solution providers, value-added resellers (VARs), at what they do best by providing the best products, complementary solutions, proprietary tools and supports in the vertical industries. </p><br>
							
							<p class="wow fadeInUp" data-wow-delay="1.5s">We aim to enhance your business with seamless provision of Samsung enterprise mobility, non-Samsung mobility, barcode and complementary mobility solutions, and authorized repair services.</p>
-->
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>

    <style>
        .session-vad {
                display: flex;
                min-height: 480px;
                max-width: 1440px;
                margin-left: auto;
                margin-right: auto;
            }

            .vad-gray {
                background: #f4f4f4;
                background: -moz-linear-gradient(top, #f4f4f4 0%, #e4e4e4 100%);
                background: -webkit-linear-gradient(top, #f4f4f4 0%, #e4e4e4 100%);
                background: linear-gradient(to bottom, #f4f4f4 0%, #e4e4e4 100%);
            }

            .row-reverse {
                display: flex;
                flex-direction: row-reverse;
            }

            .mobile {
                display: flex;
                flex: 1;
                align-items: center;
                justify-content: center;
            }

            .mobile img {
                max-height: 540px;
                max-width: 100%;
            }

            .content-mobile {
                display: flex;
                flex: 1;
                align-items: center;
                justify-content: center;
                text-align: left;
            }

            .sub-mobile {
                padding: 0 10% 0 10%;
            }

            .strong {
                font-weight: 600;
                /*                margin: 0;*/
            }

            .title-header {
                display: block;

            }

            .form-VAD {
                padding-bottom: 10%;
            }
    </style>


    <!-- Tab content -->
    <div class="bgwhite fblack">
            <div class="section-title" style="padding-top: 5%;">
                    <h1><strong>About Databar</strong></h1>
                </div>
             <div class="session-vad row-reverse">
                    <div class="content-mobile">

                        <div class="sub-mobile">
                            <h2>DATABAR Provides</h2>
                        <p>DATABAR provides a broad range of experienced sales reps, knowledgeable technical support and skilled professional services to help channel partners to achieve growth in a variety of vertical markets including field force automation, retail, services, healthcare, finance & banking, transport & logistics, manufacturing & supply chain, government and public sector.</p>
                        </div>
                    </div>
                    <div class="mobile">
                        <img src="images/aboutus/smartphone.jpg" alt="">
                    </div>
                </div>
                  <div class="session-vad">
                    <div class="content-mobile">

                        <div class="sub-mobile">
                            <h2>Our Mission</h2>
                        <p>Our mission is to help mobile operators or carriers, independent software providers, system integrators, technology solution providers, value-added resellers (VARs), at what they do best by providing the best products, complementary solutions, proprietary tools and supports in the vertical industries. </p>
                        </div>
                    </div>
                    <div class="mobile">
                        <img src="images/aboutus/business.jpg" alt="">
                    </div>
                </div>
                  <div class="session-vad row-reverse" style="padding-bottom: 10%;">
                    <div class="content-mobile">

                        <div class="sub-mobile">
                            <h2>We Aim To Enhance</h2>
                        <p>We aim to enhance your business with seamless provision of Samsung enterprise mobility, non-Samsung mobility, barcode and complementary mobility solutions, and authorized repair services.</p>
                        </div>
                    </div>
                    <div class="mobile">
                        <img src="images/aboutus/samsung2.jpg" alt="">
                    </div>
                </div>
            <!--
        <img style="position: absolute;" src="images/TabA.png" alt="" width="85%">
        <h1>DATABAR is B2B <br>(business-to-business)</h1>
        <p style="padding: 3% 5% 3% 5%;">DATABAR is business-to-business (B2B) distributor and authorized services that sells, supports, repair services the comprehensive products and solutions of Samsung enterprise mobility, Samsung KNOX (EMM), 42Gears mobility solutions – SaaS/On-cloud and On-premise, barcode and complementary mobility solutions on Samsung Android, Android, iOS, Windows OS platforms.</p>
-->
        </div>

    </div>
    <style type="text/css">
        .circle {
            border: 2px dashed #eee;
            width: 500px;
            position: relative;
            box-shadow: 0px 0px 4px 0px #000000;
            height: 500px;
            border-radius: 50%;
            margin: 5% auto 3% auto;
            text-align: center;
        }

        .warp-cen {
            /*      position: relative;
      text-align: center;*/
        }

        .icon1,
        .icon2,
        .icon3,
        .icon4,
        .icon5 {
            position: absolute;
            display: inline-block;
        }

        .icon1 {
            left: -15%;
            top: 20%;

        }

        .icon2 {
            left: 2%;
            top: -7%;
        }

        .icon3 {
            left: 40%;
            top: -20%;
        }

        .icon4 {
            left: 77%;
            top: -7%;
        }

        .icon5 {
            left: 97%;
            top: 20%;
        }

        @media (min-width: 992px) {
            .modal-lg {
                width: 65%;

            }
            .icon-size i {
                font-size: 60px;

            }

        }

        @media (max-width: 991px) {
            .modal-lg {
                width: 65%;
            }
            .icon-size i {
                font-size: 70px;
            }
            .bglack {
                height: 50vh;
            }
        }
    </style>
    <div class="bgblack">
        <div class="visible-lg visible-md">
            <div class="center fwhite text-center">
                <!--	background-color: #4a555b;-->
                <div class="row">
                    <h1 style="padding:5% 0 3%; "><strong>Core Competencies</strong></h1>
                    <div class="circle" style="margin-top:5%;">
                        <div class="tab">
                            <div class="warp-cen">
                                <div class="icon-size" style="color: #999; ">
                                    <button class="icon1 tablink active" onclick="openNumb(event,'1')"><i class="far fa-check-square " style="position: relative; text-align: center;"></i></button>
                                    <button class="icon2 tablink" onclick="openNumb(event,'2')"><i class="fab fa-product-hunt"></i></button>
                                    <button class="icon3 tablink" onclick="openNumb(event,'3')"><i class="fas fa-shipping-fast"></i></button>
                                    <button class="icon4 tablink" onclick="openNumb(event,'4')"><i class="far fa-handshake"></i></button>
                                    <button class="icon5 tablink" onclick="openNumb(event,'5')"><i class="fas fa-users"></i></button>
                                </div>
                            </div>
                        </div>
                        <div id="1" class="Numb">
                            <div class="row" style="display: flex; padding-top: 25%; align-items: center;">
                                <div class="col-md-10 col-md-offset-1 ">
                                    <div style="color: white;">
                                        <h2>Authorization</h2>
                                        <li style="padding:2% 0 0 0;">B2B VAD</li>
                                        <li>Master distributor</li>
                                        <li>Authorized repair services and technical supports</li>
                                        <li>Tier 1 managed services</li>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="2" class="Numb" style="display:none">
                            <div class="row" style="padding-top: 13%;">
                                <div class="col-md-10 col-md-offset-1">
                                    <div style="color: white;">
                                        <h2>Product solutions</h2>
                                        <p style="padding:2% 0 1% 0; margin:0; font-weight: 700;">Samsung</p>
                                        <li>HHP, GTA2, XCover 4, Wearable</li>
                                        <li>KNOX</li>
                                        <li>B2B repair services</li>
                                        <p style="padding:4% 0 1% 0; margin:0; font-weight: 700;">Non Samsung</p>
                                        <li>Other Android, Windows platform mobile devices, Printing devices, IOT</li>
                                        <li>MDM, EMM, ATP / MTP, KoolSpan, Iris Biometric, VocalVest</li>
                                        <li>Complementary products - mobility and accessories </li>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="3" class="Numb" style="display:none">
                            <div class="row" style="padding-top: 25%;">
                                <div class="col-md-10 col-md-offset-1 ">
                                    <div style="color: white;">
                                        <h2>Professional services </h2>
                                        <li style="padding:2% 0 0 0;">On-site service supports</li>
                                        <li>Extended warranty for 1-2 years, 1-3 years</li>
                                        <li>Authorized repair services</li>
                                        <li>Hotline / Help Desk</li>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="4" class="Numb" style="display:none">
                            <div class="row" style="padding-top: 25%;">
                                <div class="col-md-8 col-md-offset-2">
                                    <div style="color: white;">
                                        <h2>Partners ecosystem</h2>
                                        <li style="padding:2% 0 0 0;">Carriers</li>
                                        <li>Solution partners</li>
                                        <li>Technology partners</li>
                                        <li>System integrators</li>
                                        <li>Value added resellers</li>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="5" class="Numb" style="display:none">
                            <div class="row" style="padding-top: 30%;">
                                <div class="col-md-8 col-md-offset-2">
                                    <h1>Vertical enterprise customers</h1>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function openNumb(evt, NumbName) {
            var i, x, tablinks;
            x = document.getElementsByClassName("Numb");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < x.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(NumbName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>
    <style type="text/css">
        .display-container {
            position: relative;
        }

        .Comp {
            min-height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .display-left {
            position: absolute;
            top: 50%;
            left: 0%;
            transform: translate(0%, -50%);
            -ms-transform: translate(-0%, -50%);
        }

        .display-right {
            position: absolute;
            top: 50%;
            right: 0%;
            transform: translate(0%, -50%);
            -ms-transform: translate(-0%, -50%);
        }

        .arrow-button {
            background: transparent;
            border: transparent;
            font-size: 30px;

        }
    </style>

    <div class="visible-sm visible-xs">
        <div class="display-container" style="padding:20px; background-color: black;">
            <center>
                <h1>Core Competencies</h1>
                <div class="Comp icon-size" style="color:#999;">
                    <div class="mySlides">
                        <i class="far fa-check-square "></i>
                        <div style="color: white;">
                            <h2>Authorization</h2>

                            <li style="padding: 2% 0 0 0;">B2B VAD</li>
                            <li>Master distributor</li>
                            <li>Authorized repair services and technical supports</li>
                            <li>Tier 1 managed services</li>
                        </div>
                    </div>
                    <div class="mySlides">
                        <i class="fab fa-product-hunt"></i>
                        <div class="fwhite" style="color: white;">
                            <h2>Product solutions</h2>
                            <p style="padding:0% 0 2% 0; margin:0; font-weight: 700;">Samsung</p>
                            <li>HHP, GTA2, XCover 4, Wearable</li>
                            <li>KNOX</li>
                            <li>B2B repair services</li>

                            <p style="padding:3% 0 1% 0; margin:0; font-weight: 700;">Non Samsung</p>
                            <li>Other Android, Windows platform mobile devices, Printing devices, IOT</li>
                            <li>MDM, EMM, ATP / MTP, KoolSpan, Iris Biometric, VocalVest</li>
                            <li>Complementary products - mobility and accessories </li>
                        </div>
                    </div>
                    <div class="mySlides">
                        <i class="fas fa-shipping-fast"></i>
                        <div style="color: white;">
                            <h2>Professional services </h2>
                            <li>On-site service supports</li>
                            <li>Extended warranty for 1-2 years, 1-3 years</li>
                            <li>Authorized repair services</li>
                            <li>Hotline / Help Desk</li>
                        </div>
                    </div>
                    <div class="mySlides">
                        <i class="far fa-handshake"></i>
                        <div style="color: white;">
                            <h2>Partners ecosystem</h2>
                            <li>Carriers</li>
                            <li>Solution partners</li>
                            <li>Technology partners</li>
                            <li>System integrators</li>
                            <li>Value added resellers</li>
                        </div>
                    </div>
                    <div class="mySlides">
                        <i class="fas fa-users"></i>
                        <h2>Vertical enterprise customers</h2>
                    </div>
                    <button class="arrow-button display-left" onclick="plusDivs(-1)">&#10094;</button>
                    <button class="arrow-button display-right" onclick="plusDivs(1)">&#10095;</button></center>
            </div>
        </div>
    </div>

    <script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
            showDivs(slideIndex += n);
        }

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            if (n > x.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = x.length
            }
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            x[slideIndex - 1].style.display = "block";
        }
    </script>
    <!-- ======Session 3======== -->
    <div class="bgwhite">
        <style>
            .row-img img {
                width: 90px;
            }

            .showme h3 {
                font-weight: 600;
                padding-bottom: 3%;
            }

            .block-business {
                padding: 3% 0 2% 0;
                /*                border: solid 1px #eee;*/
            }

            .block-business .col-md-3 {
                padding-bottom: 1%;

            }
        </style>
        <div class="showme fblack" style="padding: 2% 5% 2% 5%">
            <div class="row">
                <h1 style="color: #444; font-size: 50px; padding: 0 0 1%; text-align:center;"><strong>Business Channel</strong></h1>
                <div class="block-business">

                    <div class="row row-img center" style="">
                        <h3>DATABAR</h3>
                        <div class="col-md-3 col-xs-6">
                            <img src="images/aboutus/icon-01.png" alt="">
                            <p>Sales reps for Vertical end users</p>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <img src="images/aboutus/icon-02.png" alt="">
                            <p>Sales reps for Channel partners</p>
                        </div>
                        <div class="col-md-3 col-xs-6">

                            <img src="images/aboutus/icon-07.png" alt="">
                            <p>Pre Sales supports</p>

                        </div>
                        <div class="col-md-3 col-xs-6">
                            <img src="images/aboutus/icon-08.png" alt="">
                            <p>Co-Promo & Market research</p>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <img src="images/aboutus/icon-09.png" alt="">
                            <p>Stock and Credit Term supports</p>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <img src="images/aboutus/icon-10.png" alt="">
                            <p>Post Sales supports</p>
                        </div>
                    </div>
                </div>
                <div class="block-business">

                    <div class="row row-img center">
                        <h3>Channel Partners</h3>
                        <div class="col-md-3 col-xs-6">
                            <img src="images/aboutus/icon-06.png" alt="">
                            <p>Solutions Partners</p>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <img src="images/aboutus/icon-11.png" alt="">
                            <p>System Integrators</p>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <img src="images/aboutus/icon-12.png" alt="">
                            <p>Value-Added Resellers</p>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <img src="images/aboutus/icon-04.png" alt="">
                            <p>AIS (Carrier)</p>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <img src="images/aboutus/icon-05.png" alt="">
                            <p>DTAC (Carrier)</p>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <img src="images/aboutus/icon-03.png" alt="">
                            <p>TRUE (Carrier)</p>
                        </div>
                    </div>
                </div>
                <div class="block-business">

                    <div class="row row-img center">
                        <h3>Vertical End Users</h3>
                        <div class="col-md-3 col-xs-6">
                            <img src="images/aboutus/icon-13.png" alt="">
                            <p>Manufacturing & Supply Chain</p>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <img src="images/aboutus/icon-14.png" alt="">
                            <p>Transport & Logistics</p>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <img src="images/aboutus/icon-15.png" alt="">
                            <p>Hospital</p>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <img src="images/aboutus/icon-16.png" alt="">
                            <p>Finance, Security and Insurance</p>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <img src="images/aboutus/icon-17.png" alt="">
                            <p>Retail</p>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <img src="images/aboutus/icon-18.png" alt="">
                            <p>Construction</p>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <img src="images/aboutus/icon-19.png" alt="">
                            <p>Education</p>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <img src="images/aboutus/icon-20.png" alt="">
                            <p>Government</p>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <img src="images/aboutus/icon-21.png" alt="">
                            <p>Services & Hotel</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Section -->

    <?php
     include 'include/foot.inc';
?>




        <!-- SCRIPTS -->

        <script src="js/jquery.js"></script>
        <script src="js/main.js"></script>
        <!-- Resource jQuery -->

        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/magnific-popup-options.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/smoothscroll.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/custom.js"></script>

</body>

</html>