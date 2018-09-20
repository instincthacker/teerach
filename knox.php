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
    <style>
        .block-center {
            margin: 0 25%;
        }

        .block-center h1 {
            font-weight: 600;
            margin: 2%;
            padding: 0;
        }

        .block-center h5 {
            font-weight: 400;
            font-size: 18px;
        }
    </style>

    <!-- Section 1 -->

    <div class="bgwhite center">
        <div id="product" style="background: url(images/Knox/pageknox.jpg) no-repeat fixed 50% 100%; background-size: cover;">
            <div class="overlay" style="opacity: 0.5;background: #000;"></div>
            <!-- <div class="container-fluid"> -->
            <div class="row" style="display:flex; align-items: center; justify-content: center; min-height:400px; z-index:1;">
                <div class="slider-text-inner text-center box">
                        <div class="container-text">
                            <h4 class="wow fadeInUp" data-wow-delay="0.4s">Samsung Knox</h4>
                            <h1 class="wow fadeInUp strong" data-wow-delay="0.5s">Government-grade protection</h1>
                            <p class="wow fadeInUp" data-wow-delay="0.6s">Knox is a multi-layered platform built into the hardware and software of Samsung's latest devices. Knox constantly verifies the integrity of the device through a chain of security checks that begin at the hardware level and extend to the operating system, and detects any tampering to ensure your data is always secure.</p>
                            <div>
                                <br>
                            </div>
                        </div>
                </div>
            </div>
        </div>

        <style>
            .section-content {
                padding: 5%;
                display: block;
            }

            @media (min-width:1200px) {
                .section-content h1.widthgrab {
                    margin: auto;
                }

                h1 {
                    font-size: 65px;
                    padding: 0 0 30px;
                }
            }

            @media (min-width:992px) {
                .section-content h1.widthgrab {
                    width: 70%;
                    margin: auto;
                }
            }

            @media (min-width:576px) {
                .section-content h1.widthgrab {
                    width: 100%;
                    margin: auto;
                }
            }

            .section-content p {
                color: black;
                max-width: 910px;
                width: 100%;
                margin: auto auto 20px;
                font-size: 18px;
                font-weight: 400;
            }

            .section-content span.sub-title {
                font-size: 20px;
                font-weight: 500;
                margin: 0 0 22px;
                display: block;
            }

            .section-content h1.widthgrab {
                max-width: 595px;
                margin: auto;
            }

            .section-content h1.hightgrab {
                padding: 0 0 5%;
            }

            .knox-layer-detail {
                flex: 1;
            }

            .knox-layer {
                position: relative;
                flex: 1;
                background: green;
                margin: 200px auto;

            }

            .knox-layer img {
                width: 70%;
                position: absolute;
                top: 0;
                right: 10%;
                transition: 0.3s;
            }

            .knox-layer img:nth-child(1).active,
            .knox-layer img:nth-child(2).active,
            .knox-layer img:nth-child(3).active,
            .knox-layer img:nth-child(4).active {
                opacity: 1;
            }

            .knox-layer img:nth-child(1),
            .knox-layer img:nth-child(2),
            .knox-layer img:nth-child(3),
            .knox-layer img:nth-child(4) {
                opacity: 0.2;
            }

            .knox-layer img:nth-child(4) {
                z-index: 1;
                top: -10px;
            }

            .knox-layer img:nth-child(3) {
                z-index: 2;
                top: -40px;
            }

            .knox-layer img:nth-child(2) {
                z-index: 3;
                top: -80px;
            }

            .knox-layer img:nth-child(1) {
                z-index: 4;
                top: -120px;
            }

            /*            .knox-layer img:nth-child(4):hover{z-index: 1; top: 10px;}*/
            .section-knox-layer {
                display: flex;
                align-items: center;
                justify-content: center;
                width: 100%;
                position: relative;
            }

            .section-knox-layer p {
                padding: 0;
            }
        </style>
        <div class="section-content">
            <span class="sub-title">Knox Platform</span>
            <h1 class="widthgrab"><strong>A secure device is a
                    reliable device</strong></h1>
            <p>The Samsung Knox platform is built into Samsung smartphones, tablets, and wearables at the manufacturing stage, so you have it the moment you unpack your device. The Knox platform consists of overlapping defense and security mechanisms that protect against intrusion, malware, and more malicious threats.</p>

            <p>To further protect these devices for high security use cases, Samsung developed resilient and user-friendly Knox solutions.</p>


            <div class="row" style="padding: 5% 0;">
                <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1"><img src="images/Knox/home-1.jpg" style="width:100%" /></div>
            </div>
            <style>
                .ui-knox-header {
                    background: transparent;
                    border: transparent;
                    color: #6caadc;
                    font-weight: 600;
                    margin: 200px;
                    font-size: 18px;
                }

                .ui-knox-header:after .ui-knox-all {
                    opacity: 0.4;
                }

                .ui-knox-active-header {
                    background: black;
                }

                .ui-knox-content {
                    border: transparent;
                    background: transparent;
                }

                /*                .mouseover{color: blue;}*/
                .ui-knox-all {
                    background: transparent;
                    color: black;
                    border: transparent;
                    font-size: 16px;
                }
            </style>
            <div id="section-knox-security non-style">
                <div class="container-databar">
                    <h1 class="strong">Multi-layered security</h1>
                    <p>Any one security flaw in the framework could lead to complete control of a device by attackers. The Knox platform’s multiple defense layers detect any tampering and ensure data is always secure. Explore each of these layers below, or download the whitepaper for a deep dive.</p>
                    <div class="section-knox-layer">
                        <div class="knox-layer">
                            <img id="tab-one-img" class="active" src="images/Knox/layer-1.png" alt="">
                            <img id="tab-two-img" class="active" src="images/Knox/layer-2.png" alt="">
                            <img id="tab-three-img" class="active" src="images/Knox/layer-3.png" alt="">
                            <img id="tab-four-img" class="active" src="images/Knox/layer-4.png" alt="">
                        </div>
                        <div id="accordion" class="knox-layer-detail text-left">
                            <h4 id="tab-one">SECURITY ENHANCEMENTS FOR ANDROID</h4>
                            <div class="section2">

                                <p>Knox protects applications and data by strictly defining what each process is allowed to do and what data it can access. This allows Knox to separate, encrypt, and protect enterprise data within a managed container.</p>
                            </div>
                            <h4 id="tab-two">REAL-TIME KERNEL PROTECTION <br> INTEGRITY MEASUREMENT ARCHITECTURE</h4>
                            <div class="section3">
                                <p>Periodic Kernel Measurement & Real-time Kernel Protection work to constantly inspect the core software of the OS, the kernel. These checks ensure that requests to bypass device security are blocked and sensitive data is protected.</p>
                            </div>
                            <h4 id="tab-three">TRUSTZONE</h4>
                            <div class="section4">
                                <p>The Knox platform leverages a processor architecture in which highly sensitive computations are isolated from the rest of the device’s operations, protecting enterprise data.</p>
                            </div>
                            <h4 id="tab-four">SECURE / TRUSTED BOOT AND <br>HARDWARE ROOT OF TRUST</h4>
                            <div class="section5">
                                <p>To prevent security measures from being bypassed or compromised, Knox uses Boot-time Protections backed by Hardware Root of Trust to verify integrity of the device during the boot process.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section 2 -->
    <span style="color:#ffffff">
        <div class="bgblack fwhite" style="padding-top: 2% ">
            <h4>Knox Solutions</h4>
            <h1><strong>Covered every step of the way</strong></h1>
            <div class="tab">

                <strong>
                    <h3><button class="tablink" onclick="openNumb(event,'1')">IT ADMINS</button> |
                        <button class="tablink" onclick="openNumb(event,'2')">DEVELOPERS</button> |
                        <button class="tablink" onclick="openNumb(event,'3')">INDIVIDUALS</button></h3>
                </strong>
            </div>
            <!-- Tab content -->
            <div id="1" class="Numb">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
                        <img src="images/Knox/2018-05-18_13-14-07.jpg" width="100%" style="padding: 3% 0 0 0;">
                    </div>
                    <div class="col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2" style="padding: 5% 0 5% 0;">
                        <h4>Knox IT solutions leverage the Knox platform, and provide IT admins with end-to-end solutions, from configuration and deployment, to managing, securing and maintaining devices.</h4>
                        <button class="btn btn-success vad-btn-white wow fadeInUp" data-wow-delay="0.6s" style="margin: 5% 0 0;" onclick="window.location.href='products-samsung.php'">Learn More</button>
                    </div>
                </div>
            </div>
            <div id="2" class="Numb" style="display:none">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
                        <img src="images/Knox/2.jpg" width="100%" style="padding: 3% 0 0 0;">
                    </div>
                    <div class="col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2" style="padding: 5% 0 5% 0;">
                        <h4>Build and deploy your app on secure Samsung devices with Knox developer tools, a diverse set of SDKs, code libraries, and support materials available from our Samsung Enterprise Alliance Program.</h4>
                    </div>
                </div>
            </div>
            <div id="3" class="Numb" style="display:none">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
                        <img src="images/Knox/3.jpg" width="100%" style="padding: 3% 0 0 0;">
                    </div>
                    <div class="col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2" style="padding: 5% 0 5% 0;">
                        <h4>Your financial, health, and government information is always safe on Samsung consumer apps leveraging Knox. Learn more about apps that use Knox to verify system security and safeguard data.</h4>
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
    </span>
    <style>
        .knox-certi {
/*
            width: 100%;
            max-width: 900px;
            display: block;
            position: relative;
            margin: auto;
*/
            /*            display: flex;  */
        }

        .row-knox-certi {
            width: 100%;
            max-width: 900px;
            display: block;
            position: relative;
            margin: auto;
        }

        .certi-img {
            flex: 1;
        }
        .certi-img p{
            font-size: 14px; font-weight: 300;
        }

        .certi-img img {
            width: 100%;
        }
    </style>
    <section>
        <div class="section-content center">
            <div class="container-databar">
                <h1 class="strong">Knox Certifications</h1>
                <p>Government and related organizations around the world have some of the most stringent information and technology security requirements. Samsung Electronics works closely with these organizations on a continuous basis to ensure that our products and solutions meet and exceed these requirements.</p>
                <div class="knox-certi">
                    <div class="row-knox-certi">
                        <div class="certi-img col-md-offset-1 col-md-2 col-xs-4">
                            <img src="images/Knox/Common-Criteria.png" alt="">
                            <p>Common Criteria</p>
                        </div>
                        <div class="certi-img col-md-2 col-xs-4">
                            <img src="images/Knox/DISA-USA.png" alt="">
                            <p>DISA (USA)</p>
                        </div>
                        <div class="certi-img col-md-2 col-xs-4">
                            <img src="images/Knox/FIPS-140-2-USA.png" alt="">
                            <p>FIPS 140-2 (USA)</p>
                        </div>
                        <div class="certi-img col-md-2 col-xs-4">
                            <img src="images/Knox/NCSC-UK.png" alt="">
                            <p>NCSC (UK)</p>
                        </div>
                        <div class="certi-img col-md-2 col-xs-4">
                            <img src="images/Knox/ANSSI-France.png" alt="">
                            <p>ANSSI (France)</p>
                        </div>
                    </div>
                    <div class="row row-knox-certi">
                        <div class="certi-img col-md-offset-1 col-md-2 col-xs-4">
                            <img src="images/Knox/CCN-Spain.png" alt="">
                            <p>CCN (Spain)</p>
                        </div>
                        <div class="certi-img col-md-2 col-xs-4">
                            <img src="images/Knox/AIVD-Netherlands.png" alt="">
                            <p>AIVD (Netherlands)</p>
                        </div>
                        <div class="certi-img col-md-2 col-xs-4">
                            <img src="images/Knox/NCSA-Finland.png" alt="">
                            <p>NCSA (Finland)</p>
                        </div>
                        <div class="certi-img col-md-2 col-xs-4">
                            <img src="images/Knox/ISCCC-China.png" alt="">
                            <p>ISCCC (China)</p>
                        </div>
                        <div class="certi-img col-md-2 col-xs-4">
                            <img src="images/Knox/Kazakhstan.png" alt="">
                            <p>Kazakhstan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 3 -->


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

    </body> </html>