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
    <style>
        .flickity-button {
            background: white;
            opacity: 0.7;
            transition: 0.3s;
        }

        .flickity-button:hover {
            background: #eee;
        }

        .flickity-prev-next-button {
            width: 45px;
            height: 120px;
            border-radius: 5px;
        }

        /* icon color */
        .flickity-button-icon {
            fill: white;
        }

        .flickity-prev-next-button .arrow {
            fill: #444;
        }

        .flickity-prev-next-button:hover .arrow {
            fill: #444;
        }


        /* position outside */
        .flickity-prev-next-button.previous {
            left: 0px;
        }

        .flickity-prev-next-button.next {
            right: 0px;
        }

        .flickity-page-dots {
            bottom: 10px;
        }

        .flickity-page-dots .dot {
            width: 12px;
            height: 12px;
            opacity: 1;
            background: transparent;
            border: 2px solid white;
            margin: 0 5px;
        }

        .flickity-page-dots .dot.is-selected {
            background: white;
        }

        .full-page {
            width: 100%;
            background: #eee;
        }
        .item-footer-style3 {
            width: 100%;
            background: transparent;
        }
        .item-footer-style3 p {color: white; font-weight: 300;}
        
        .news-video .col-sm-4{padding: 0 1px;}
        .title-header h3{font-size: 30px; font-weight: 900}
    </style>
    <section id="slide">
        <div class="container-databar">
            <section class="awSlider" style="margin: auto auto;">
                <div class="main-gallery js-flickity" data-flickity-options='{ "cellAlign": "left", "autoPlay": true, "wrapAround": true }'>
                    <img class="gallery-cell" src="images/slides/GTA_17.jpg">
                    <img class="gallery-cell" src="images/slides/GTA_16.jpg">
                    <img class="gallery-cell" src="images/slides/GTA_14.jpg">
                    <img class="gallery-cell" src="images/slides/GTA_1.jpg">
                    <!--                    <img class="gallery-cell" src="images/slides/GTA_3.jpg">-->
                    <img class="gallery-cell" src="images/slides/GTA_8.jpg">
                    <img class="gallery-cell" src="images/slides/GTA_11.jpg">
                    <img class="gallery-cell" src="images/slides/GTA_13.jpg">
                </div>
                <br>
                <br>
            </section>

        </div>
    </section>    
    <div class="bgwhite">
        <div class="container-databar">
            <session>
                <div class="news-video center">
                    <div class="row">
                       <div class="title-header">
                            <h3>Explore Samsung Enterprise Mobility Solutions</h3>
                        </div>
                        <div class="col-sm-12">
                        <div class="col-sm-4">
                            <div class="item-img-hover">
                                <a href="#newsvideo1" id="videolink">
                                    <img src="images/video/active2.jpg" width="100%" alt="">
                                    <span class="item-middle">
                                        <i class="fal fa-play-circle"></i>
                                    </span>
                                    <span class="item-footer item-footer-style3">
                                        <p>Samsung Galaxy Tab Active2</p>
                                    </span>
                                </a>
                                <video id="newsvideo1" class="mfp-hide" width="853" height="480" controls>
                                    <source src="videos/Active2.mp4" type="video/ogg">
                                    <source src="videos/TabS4.ogg" type="video/ogg">
                                </video>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="item-img-hover">
                                <a href="#newsvideo2" id="videolink2">
                                    <img src="images/video/Xcover4.jpg" width="100%" alt="">
                                    <span class="item-middle">
                                        <i class="fal fa-play-circle"></i>
                                    </span>
                                    <span class="item-footer item-footer-style3">
                                        <p>Samsung Galaxy XCover 4</p>
                                    </span>
                                </a>
                                <video id="newsvideo2" class="mfp-hide" width="853" height="480" controls>
                                    <source src="videos/XCover4.mp4" type="video/ogg">
                                    <source src="videos/TabS4.ogg" type="video/ogg">
                                </video>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="item-img-hover">
                                <a href="#newsvideo3" id="videolink3">
                                    <img src="images/video/KnoxManage.jpg" width="100%" alt="">
                                    <span class="item-middle">
                                        <i class="fal fa-play-circle"></i>
                                    </span>
                                    <span class="item-footer item-footer-style3">
                                        <p>Samsung Knox Manage</p>
                                    </span>
                                </a>
                                <video id="newsvideo3" class="mfp-hide" width="853" height="480" controls>
                                    <source src="videos/KnoxManage.mp4" type="video/ogg">
                                    <source src="videos/KnoxManage.ogg" type="video/ogg">
                                </video>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </session>
            <!-- Active2 Section -->
            <session>
                <div id="page-banner" class="page-active2">
                    <div class="overlay" style="opacity: 0.3; background: #000;"></div>
                    <div class="row">
                        <div class="slider-text-inner box">
                            <div class="container calpage-center">
                                <div class="page-detail">
                                    <h1 class="wow fadeInUp strong" data-wow-delay="0.3s">Samsung Galaxy Tab Active2</h1>
                                    <p class="wow fadeInUp" data-wow-delay="0.3s">Rugged tablet the U.S. Military Standard MIL-STD-810G</p>
                                    <button class="btn btn-success vad-btn wow fadeInUp" data-wow-delay="0.6s" style="margin: 5% 0 0;" onclick="window.location.href='product-detail.php?pro_id=Galaxy%20Tab%20Active2'">Learn More</button>
                                </div>
                                <div class="page-images visible-md visible-lg">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </session>
            <br>
             <!-- xcover4 Section -->
            <session>
                <div id="page-banner" class="page-xcover4">
                    <div class="overlay" style="opacity: 0.5; background: #000;"></div>
                    <div class="row">
                        <div class="slider-text-innerx box">
                            <div class="container rowpage-left calpage-center">
                                <div class="page-detail">
                                    <h1 class="wow fadeInUp strong" data-wow-delay="0.3s">Samsung Galaxy XCover4</h1>
                                    <p class="wow fadeInUp" data-wow-delay="0.3s">Designed to function wherever you go, with IP68 and MIL-STD 810G certification, the Galaxy Xcover4 is durable enough to withstand harsh conditions.</p>
                                    <button class="btn btn-success vad-btn wow fadeInUp" data-wow-delay="0.6s" style="margin: 5% 0 0;" onclick="window.location.href='product-detail.php?pro_id=Galaxy%20Xcover%204'">Learn More</button>
                                </div>
                                <div class="page-images visible-md visible-lg">

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </session>
            <br>
            <!-- Knox Section -->
            <session>
                <div id="page-banner" class="page-knox">
                    <div class="overlay" style="opacity: 0.4; background: #000;"></div>
                    <div class="row">
                        <div class="slider-text-inner text-center box">
                            <div class="container rowpage-center calpage-center">
                                <div class="page-detail">
                                    <h1 class="wow fadeInUp strong" data-wow-delay="0.3s">Knox Technology</h1>
                                    <p class="wow fadeInUp" data-wow-delay="0.3s">Knox is a new security feature that is being offered with certain Samsung handsets. It helps you to securely separate your personal and professional data. Essentially, you can have the benefits of using a 'work phone' without the need to carry, and secure, a separate device.</p>
                                    <button class="btn btn-success vad-btn wow fadeInUp" data-wow-delay="0.6s" style="margin: 5% 0 0;" onclick="window.location.href='knox.php'">Learn More</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </session>
            <br>
        </div>
        <br><br>
        <!-- service Section -->
        <session style=" margin:20%;">
            <div id="page-banner" class="page-service">
                <div class="overlay" style="opacity: 0.4; background: #000;"></div>
                <div class="row">
                    <div class="slider-text-inner text-center box">
                        <div class="container rowpage-center calpage-center">
                            <div class="page-detail">
                                <h1 class="wow fadeInUp strong" data-wow-delay="0.3s">Samsung Corporate Service Centre</h1>
                                <p class="wow fadeInUp" data-wow-delay="0.3s">Whether it's a product repair or just some help and advice. DATABAR is authorised service centre for corporate or enterprise customers that can help you. All are fully trained and use genuine parts in all repairs from Samsung and other brand’s original sources. Find your product type below to contact us to get the support you need.</p>
                                <button class="btn btn-success vad-btn wow fadeInUp" data-wow-delay="0.6s" style="margin: 5% 0 0;" onclick="window.location.href='service.php'">Learn More</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </session>
        <style>
            .opacity-box>.borderlogo {
                opacity: 1;
                filter: grayscale(100%);
                transition: 0.3s;
                height: 130px;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .opacity-box>.borderlogo:hover {
                opacity: 0.7;
                filter: grayscale(0%);
                border: 0.1px solid #444;
            }

            .borderlogo img {
                width: 70%;
            }

            .borderlogo {
                padding: 0;
                border: 0.1px solid #eee;
            }
        </style>
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
    </div>
</body>


</html>