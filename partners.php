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
    <!-- Links All CSS -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="css/allcss.css">
    <style type="text/css">
        .item-block {
            padding-top: 5%;
        }

        .padtop {
            padding-top: 20px;

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
        <div id="nav-placeholder">
            <!--Load Include/navlg.php-->
        </div>
    </div>
    <div class="visible-xs visible-sm">
        <div id="nav-placeholdersm">
            <!--Load Include/navsm.php-->
        </div>
    </div>

    <!-- content  -->

    <div class="bgwhite" style="">
        <div id="product" style="background: url(images/partners/homepage.jpg); background-size: cover; background-repeat: no-repeat;  background-position: 50% 25%; ">
            <div class="overlay" style="opacity: 0.1;background: #000;  "></div>

            <!-- <div class="container-fluid"> -->
            <div class="row" style="display:flex; align-items: center; justify-content: center; min-height:400px;">
                <div class="slider-text-inner text-center box">
                    <div class="row" style="display:flex; flex-wrap: wrap; align-items: center; justify-content: center; min-height:400px;">
                        <div class="col-md-12">
                            <h1 class="wow fadeInUp" data-wow-delay="0.6s" style=" margin: 0; padding : 0 0% 0 0%; font-weight: 700;">Our Partner Ecosystem </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <style>
            h2 {
                padding: 5% 0 2% 0;
                margin: 0;
            }

            p {
                padding: 0 10% 0 10%;
            }

            .border-logo {
                padding: 0;
                border: 0.1px solid #eee;
            }

            .box-logo {
                height: 130px;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .box-logo img {
                width: 60%;
            }

            .box-logosmall {
                height: 130px;
                display: flex;
                align-items: center;
                justify-content: center;


            }

            .box-logosmall img {
                width: 70%;
            }

            @media (max-width: 990px) {
                .box-logo {}

            }

            @media (max-width: 560px) {
                .box-logo img {
                    width: 80%;
                }

                .box-logosmall img {
                    width: 90%;
                }
            }

        </style>
        <div class="container-fluid fblack center">
            <h2 style="font-weight: 700;">Technology Partners</h2>


            <div class="row" style="padding:0 0 2%;">
                <div class="box-center" style="display:flex; align-items: center; justify-content: center; width: 100%;">
                    <div class="col-md-12">
                        <div class="col-md-2 col-sm-3 col-xs-4 border-logo">
                            <div class="box-logo">
                                <a href="https://www.samsung.com/us/business/"><img src="images/business-partners/samsungbusiness.jpg"></a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-4 border-logo">
                            <div class="box-logosmall">
                                <a href="#"><img src="images/business-partners/Authorized service_Non_BG.png"></a>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-3 col-xs-4 border-logo">
                            <div class="box-logo">
                                <a href="https://www.samsungknox.com/en"><img src="images/business-partners/Logo-Samsung-Knox.png"></a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-4 border-logo">
                            <div class="box-logo">
                                <a href="#"><img src="images/business-partners/Samsung_Galaxy.png"></a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-4 border-logo">
                            <div class="box-logosmall">
                                <a href="#"><img src="images/business-partners/Samsung_GalaxyTab_Active2.jpg"></a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-4 border-logo">
                            <div class="box-logosmall">
                                <a href="#"><img src="images/business-partners/Samsung_GalaxyXCover4.jpg"></a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-4 border-logo">
                            <div class="box-logo">
                                <a href="https://www.datalogic.com"><img src="images/business-partners/Datalogic-logo-large.png"></a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-4 border-logo">
                            <div class="box-logo">
                                <a href="http://www.sam4s.com"><img src="images/business-partners/sam4s.jpg"></a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-4 border-logo">
                            <div class="box-logo">
                                <a href="https://bullitt-group.com/"><img src="images/business-partners/bullitt.jpg"></a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-4 border-logo">
                            <div class="box-logo">
                                <a href="https://www.catphones.com"><img src="images/business-partners/catphone.jpg"></a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-4 border-logo">
                            <div class="box-logo">
                                <a href="http://www.ute.com"><img src="images/business-partners/unitech.png"></a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-4 border-logo">
                            <div class="box-logo">
                                <a href="https://www.bartec.de"><img src="images/business-partners/Bartec.svg.png"></a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-4 border-logo">
                            <div class="box-logo">
                                <a href="https://www.ecom-ex.com"><img src="images/business-partners/Ecom-Instruments.png"></a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-4 border-logo">
                            <div class="box-logo">
                                <a href="https://www.toshibatec.com"><img src="images/business-partners/toshiba-tec.jpg"></a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-4 border-logo">
                            <div class="box-logo">
                                <a href="http://www.bixolon.com"><img src="images/business-partners/bixolon.jpg"></a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-4 border-logo">
                            <div class="box-logo">
                                <a href="https://www.rammount.com"><img src="images/business-partners/RAM-Logo-no-logo-no-website-Black.png"></a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-4 border-logo">
                            <div class="box-logo">
                                <a href="http://www.gamberjohnson.com"><img src="images/business-partners/gamber-johnson.jpg"></a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-4 border-logo">
                            <div class="box-logo">
                                <a href="https://www.koamtac.com"><img src="images/business-partners/koamtac.jpg"></a>
                            </div>
                        </div>

                        <div class="col-md-2 col-sm-3 col-xs-4 border-logo">
                            <div class="box-logo">
                                <a href="https://www.centrify.com"><img src="images/business-partners/centrify-logo.png"></a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-4 border-logo">
                            <div class="box-logo">
                                <a href="https://koolspan.com"><img src="images/business-partners/Koolspan.jpg"></a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-4 border-logo">
                            <div class="box-logo">
                                <a href="http://www.vocal-vest.com"><img src="images/business-partners/vocal-vest.jpg"></a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3 col-xs-4 border-logo">
                            <div class="box-logo">
                                <a href="https://www.42gears.com"><img src="images/business-partners/42gear.jpg"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h2 style="font-weight: 700;">Channel Partners</h2>
            <p>DATABAR offers our channel partners; mobile operators, system integrators, technology solution providers, value-added resellers (VARs); a broad selection of comprehensive Samsung enterprise mobility; smartphones, consumer graded tablets, Samsung Galaxy Tab Active; Samsung KNOX, barcode and complementary solutions like barcode scanners, wireless handheld scanners, mobile computers, barcode printers, and mobile printers and POS printers including services, from financing, education, training and business development resources to marketing services and pre- and post-sale technical assistance. We welcome your participation in our DATABAR channel partner programs and communities.</p>
            <div class="row" style="padding:3% 0 5%;">
                <div class="col-md-10 col-md-offset-1">
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <a href=""><img alt="" width="55%" src="images/channel-partners/AIS-logo-.jpg"></a>
                        <!--					<h4>Advanced Info Services Plc. (AIS)</h4>-->
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <a href=""><img alt="" width="53%" src="images/channel-partners/dtac-logo.jpg"></a>
                        <!--					<h4>Total Access Communication Public Company Limited (DTAC)</h4>-->
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4">
                        <a href=""><img alt="" width="40%" src="images/channel-partners/true-logo.jpg"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Divider Section -->






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
</body>

</html>
