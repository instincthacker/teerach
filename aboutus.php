<?php 
include 'include/condb.php';
?>
<!DOCTYPE html>
<html lang="en" wp-site wp-site-is-master-page>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Databar</title>
    <!-- Links All CSS -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="css/allcss.css">
    <!-- Main css -->
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
</head>

<body>
    <!-- PRE LOADER -->
    <div class="preloader">
        <div class="sk-spinner sk-spinner-pulse"></div>
    </div>

    <div class="visible-md visible-lg ">
        <div id="nav-placeholder">
            <!--Load Include/navlg.php-->
        </div>
    </div>
    <div class="visible-xs visible-sm">
        <div id="nav-placeholdersm">
            <!--Load Include/navsm.php-->
        </div>
    </div>


    <!-- Section 1 -->
    <div id="product" style="background: url(images/aboutus/samsung3.jpg) no-repeat fixed 50% 100%; background-size: cover;">
        <div class="overlay" style="opacity: 0;background: #000;  "></div>
        <!-- <div class="container-fluid"> -->
        <div class="row" style="display:flex; align-items: center; justify-content: center; min-height:400px;">
            <div class="slider-text-inner text-center box">
                <div class="row" style="display:flex;  align-items: center; justify-content: center; min-height:400px;">
                    <div class="col-md-12">
                        <!--
                        <h1 class="wow fadeInUp" data-wow-delay="0.3s" style="text-align: center; font-weight: 700;">
                            About Us</h1>
-->
                        <div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tab content -->
    <div class="bgwhite fblack">
        <div class="section-title" style="padding-top: 5%;">
            <div class="container">
                <img src="images/aboutus/LogoAuthorized.png" alt="" width="50%">
            </div>
        </div>
        <div class="skewedimg1">
            <div class="session-vad row-reverse">
                <div class="content-mobile">
                    <div class="sub-mobile">
                        <h2 class="center" style="color:white; padding:0 0 2%;">Who We Are</h2>
                        <p style="color:white;">DATABAR is the leading Value Added Distributor and Authorized Services that sell, support, repair service the comprehensive products and solutions of Samsung enterprise mobility and IT solutions, cyber and mobile security, and complementary mobility solutions on Samsung Android, Android, iOS, Windows OS platforms.</p>
                        <p style="color:white;">DATABAR provides a broad range of experienced sales reps, knowledgeable technical support and skilled professional services to help channel partners to achieve growth in a variety of vertical markets including field force automation, retail, services, healthcare, finance & banking, transport & logistics, manufacturing & supply chain, government and public sector.</p>
                    </div>
                </div>
                <!--
                <div class="mobile">
                    <img src="images/aboutus/smartphone.jpg" alt="">
                </div>
-->
            </div>
        </div>
        <div class="skewedimg2">
            <div class="session-vad">
                <div class="content-mobile">
                    <div class="sub-mobile">
                        <h2 class="center" style="color:white; padding:0 0 2%;">What We Do</h2>
                        <p style="color:white;">Our mission is to help mobile operators or carriers, independent software providers, system integrators, technology solution providers, value-added resellers (VARs), at what they do best by providing the best product solutions, complementary mobility solutions, proprietary tools and supports in the vertical industries.</p>
                        <p style="color:white;">We aim to enhance our enterprise customer’s business with seamless integration of Samsung enterprise mobility and IT solutions, cyber and mobile security, complementary mobility solutions and authorized repair.</p>
                    </div>
                </div>
                <!--
                <div class="mobile">
                    <img src="images/aboutus/business.jpg" alt="">
                </div>
-->
            </div>
        </div>
        <div class="skewedimg3">
            <div class="session-vad row-reverse">
                <div class="content-mobile">
                    <div class="sub-mobile">
                        <h2 class="center" style="color:white; padding:0 0 2%;">Our Vision</h2>
                        <p style="color:white;">Our vision is to be the preferred and best-of-breed Value Added Distributor for enterprise mobility business</p>
                    </div>
                </div>
                <!--
                <div class="mobile">
                    <img src="images/aboutus/samsung2.jpg" alt="">
                </div>
-->
            </div>
        </div>
        <!--
        <img style="position: absolute;" src="images/TabA.png" alt="" width="85%">
        <h1>DATABAR is B2B <br>(business-to-business)</h1>
        <p style="padding: 3% 5% 3% 5%;">DATABAR is business-to-business (B2B) distributor and authorized services that sells, supports, repair services the comprehensive products and solutions of Samsung enterprise mobility, Samsung KNOX (EMM), 42Gears mobility solutions – SaaS/On-cloud and On-premise, barcode and complementary mobility solutions on Samsung Android, Android, iOS, Windows OS platforms.</p>
-->
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

        .slide-comp {}

        .core-comp h1 {
            padding: 8% 0 0%;
        }

        .detail-comp {
            width: 100%;
            min-height: 450px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        @media only screen and (min-width: 835px){
        .btn-slide {
            display: flex;
            position: relative;
            width: 35%;
            margin-left: auto;
            margin-right: auto;
            align-items: baseline;
            justify-content: center;
        }
        
        .slide-dot {
            border: 0.1em solid #888;
            border-radius: 100%;
            height: 40px;
            width: 40px;
            text-align: center;
        }

        .text-dot {
            padding-left: 5%;

        }
        }
        @media only screen and (max-width: 834px){
        .btn-slide {
            display: flex;
            position: absolute;
            width: 450px;
            margin-left: auto;
            margin-right: auto;
            align-items: baseline;
            justify-content: center;
        }
        
        .slide-dot {
            border: 0.1em solid #888;
            border-radius: 100%;
            min-height: 40px;
            min-width: 40px;
            text-align: center;
        }

        .text-dot {
            padding-left: 5%;

        }    
            
        }
        .btn-slide.active .text-dot p {
            color: black;
            text-decoration-line: underline;
        }

        .btn-slide.active .slide-dot p {
            color: white;
            font-weight: 600;
        }

        .btn-slide.active .slide-dot {
            border: 0.1em solid #fff;
            background: #1d2d59;
        }

        .text-dot p {
            color: #888;
        }

        .text-dot p:hover {
            text-decoration-line: underline;
        }

        .slide-dot p {
            margin-top: 3px;
            font-size: 1.2em;
            color: #888;
        }

        .core-comp {
            padding-top: 100px;
        }

        .core-comp>.bgblack {
            position: relative;
            clip-path: polygon(0 0, 100% 0%, 100% 90%, 0% 100%);
        }

        .button-comp {
            padding: 5% 0;
        }
    </style>
    <div class="bgwhite">
        <session>
            <div class="core-comp">
                <div class="bgblack">
                    <div class="container-databar fwhite ">
                        <h1 class="strong">Core Competencies</h1>
                        <div class="slide-comp text-left">
                            <div class="detail-comp">
                                <div class="comp-content">
                                    <h3>Authorization</h3>
                                    <li style="padding:2% 0 0 0;">B2B VAD</li>
                                    <li>Master distributor</li>
                                    <li>Authorized repair services and technical supports</li>
                                    <li>Tier 1 managed services</li>
                                </div>
                            </div>
                            <div class="detail-comp">
                                <div class="comp-content">
                                    <h3>Product Solutions</h3>
                                    <div class="col-md-6">
                                        <p style="padding:2% 0 1% 0; margin:0; font-weight: 700;">Samsung</p>
                                        <li>HHP, GTA2, XCover 4, Wearable</li>
                                        <li>KNOX</li>
                                        <li>B2B repair services</li>
                                    </div>
                                    <div class="col-md-6">
                                        <p style="padding:4% 0 1% 0; margin:0; font-weight: 700;">Non Samsung</p>
                                        <li>Other Android, Windows platform mobile devices, Printing devices, IOT</li>
                                        <li>MDM, EMM, ATP / MTP, KoolSpan, Iris Biometric, VocalVest</li>
                                        <li>Complementary products - mobility and accessories </li>
                                    </div>
                                </div>
                            </div>
                            <div class="detail-comp">
                                <div class="comp-content">
                                    <h3>Professional Services </h3>
                                    <li style="padding:2% 0 0 0;">On-site service supports</li>
                                    <li>Extended warranty for 1-2 years, 1-3 years</li>
                                    <li>Authorized repair services</li>
                                    <li>Hotline / Help Desk</li>
                                </div>
                            </div>
                            <div class="detail-comp">
                                <div class="comp-content">
                                    <h3>Partners Ecosystem</h3>
                                    <li style="padding:2% 0 0 0;">Carriers</li>
                                    <li>Solution partners</li>
                                    <li>Technology partners</li>
                                    <li>System integrators</li>
                                    <li>Value added resellers</li>
                                </div>
                            </div>
                            <div class="detail-comp">
                                <div class="comp-content">
                                    <h3>Vertical Enterprise Customers</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="container">
                    <div class="button-comp text-center">
                        <div class="btn-slide active" onclick="return false">
                            <div class="slide-dot">
                                <p>1</p>
                            </div>
                            <div class="text-dot">
                                <p>Authorization</p>
                            </div>
                        </div>
                        <div class="btn-slide" onclick="return false">
                            <div class="slide-dot">
                                <p>2</p>
                            </div>
                            <div class="text-dot">
                                <p>Product Solutions</p>
                            </div>
                        </div>
                        <div class="btn-slide" onclick="return false">
                            <div class="slide-dot">
                                <p>3</p>
                            </div>
                            <div class="text-dot">
                                <p>Professional Services</p>
                            </div>
                        </div>
                        <div class="btn-slide" onclick="return false">
                            <div class="slide-dot">
                                <p>4</p>
                            </div>
                            <div class="text-dot">
                                <p>Partners Ecosystem</p>
                            </div>
                        </div>
                        <div class="btn-slide" onclick="return false">
                            <div class="slide-dot">
                                <p>5</p>
                            </div>
                            <div class="text-dot">
                                <p>Vertical Enterprise Customers</p>
                            </div>
                        </div>
                    </div>
                    <hr style="height:5px; margin-bottom:5%;">
                </div>
            </div>

        </session>

        <!-- ======Session 3======== -->
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
    <div id="footer-section"></div>
    <!-- SCRIPTS -->
    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
    <!-- Resource jQuery -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-dropdownhover.min.js"></script>
    <script src="js/flickity.pkgd.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/animatedModal.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script>
        var $carousel = $('.slide-comp').flickity({
            // options
            cellAlign: 'left',
            contain: true,
            draggable: false,
            prevNextButtons: false,
            pageDots: false
        });

        var $carousel2 = $('.button-comp').flickity({
            // options
            asNavFor: ".slide-comp",
            cellAlign: 'center',
            contain: true,
            prevNextButtons: false,
            pageDots: false,
        });
    </script>
</body>

</html>