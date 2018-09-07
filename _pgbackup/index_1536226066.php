 
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
        <link rel="stylesheet" href="css/bootstrap.css"> 
        <link rel="stylesheet" href="css/animate.css"> 
<!--        <link rel="stylesheet" href="css/font-awesome.css"> -->
        <link rel="stylesheet" href="css/magnific-popup.css"> 
        <!--        <link rel="stylesheet" href="aos/dist/aos.css" />-->         
        <link rel="stylesheet" href="css/owl.theme.css"> 
        <link rel="stylesheet" href="css/owl.carousel.css"> 
        <link href="https://fonts.googleapis.com/css?family=Oxygen:300,400" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet"> 
        <!-- Main css -->         
        <link rel="stylesheet" href="css/webstyle.css"> 
        <link rel="stylesheet" href="css/stylepages.css"> 
        <link rel="stylesheet" href="css/slideshow.css"> 
        <style type="text/css">.item-block {
    padding-top: 5%;
}

.padtop {
    padding-top: 20px;
}</style>         
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
        <!-- <div class="preloader">
     <div class="sk-spinner sk-spinner-pulse"></div>
</div> -->         
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
        <!-- Slide Section -->
                 
        <section id="slide"> 
            <section class="awSlider" style="margin: auto auto; position: relative;"> 
                <div class="carousel slide" data-ride="carousel"> 
                    <!-- Indicators -->                     
                    <ol class="carousel-indicators"> 
                        <li data-target=".carousel" data-slide-to="0" class="active"></li>                         
                        <li data-target=".carousel" data-slide-to="1"></li>                         
                        <li data-target=".carousel" data-slide-to="2"></li>                         
                        <li data-target=".carousel" data-slide-to="3"></li>                         
                        <li data-target=".carousel" data-slide-to="4"></li>                         
                        <li data-target=".carousel" data-slide-to="5"></li>                         
                        <li data-target=".carousel" data-slide-to="6"></li>                         
                    </ol>                     
                    <!-- Wrapper for slides -->                     
                    <div class="carousel-inner" role="listbox"> 
                        <div class="item active"> 
                            <img src="images/slides/GTA_14.jpg"> 
                            <div class="carousel-caption">#1</div>                             
                        </div>                         
                        <div class="item"> 
                            <img src="images/slides/GTA_1.jpg"> 
                            <div class="carousel-caption">#2</div>                             
                        </div>                         
                        <div class="item"> 
                            <img src="images/slides/GTA_3.jpg"> 
                            <div class="carousel-caption">#3</div>                             
                        </div>                         
                        <div class="item"> 
                            <img src="images/slides/GTA_8.jpg"> 
                            <div class="carousel-caption">#4</div>                             
                        </div>                         
                        <div class="item"> 
                            <img src="images/slides/GTA_9.jpg"> 
                            <div class="carousel-caption">#5</div>                             
                        </div>                         
                        <div class="item"> 
                            <img src="images/slides/GTA_11.jpg"> 
                            <div class="carousel-caption">#6</div>                             
                        </div>                         
                        <!-- <div class="item">
                       <img src="images/slides/GTA_12.jpg">
                       <div class="carousel-caption">#6</div>
                     </div> -->                         
                    </div>                     
                    <!-- Controls -->                     
                    <a class="left carousel-control" href=".carousel" role="button" data-slide="prev"> 
                    <span class="glyphicon glyphicon-chevron-left"></span> 
                      </a> 
                    <a class="right carousel-control" href=".carousel" role="button" data-slide="next"> 
                     <span class="glyphicon glyphicon-chevron-right"></span>  
                      </a> 
                </div>                 
            </section>             
        </section>         
        <style>
            .item{
                position: relative;
                width: 100%;
                height: 100%;
            }
            a>.islide-l{
                position: absolute;
                left: 10%;
                top:45%;
                font-size: 100px;
                opacity: 0.5;
                transition: 0.3s;
            }
            a:hover>.islide-l{
                 opacity: 1;
            }
            a>.islide-r{
                position: absolute;
                right: 10%;
                top:45%;
                font-size: 100px;
                opacity: 0.5;
                transition: 0.3s;
            }
             a:hover>.islide-r{
                 opacity: 1;
            }
            .f-left {
    text-align: left;
}

.f-right {
    text-align: right;
}

.session-vad {
    display: flex;
    min-height: 640px;
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

@media (min-width: 0px) {
    .f-left {
        text-align: left;
    }

    .f-right {
        text-align: right;
    }

    .session-vad {
        display: flex;
        min-height: 640px;
        max-width: 1440px;
        margin-left: auto;
        margin-right: auto;
        flex-direction: column;
    }

    .vad-gray {
        background: #f4f4f4;
        background: -moz-linear-gradient(top, #f4f4f4 0%, #e4e4e4 100%);
        background: -webkit-linear-gradient(top, #f4f4f4 0%, #e4e4e4 100%);
        background: linear-gradient(to bottom, #f4f4f4 0%, #e4e4e4 100%);
    }

    .row-reverse {
        display: flex;
    }

    .mobile {
        display: flex;
        flex: 1;
        align-items: center;
        justify-content: center;
    }

    .mobile img {
        max-height: 300px;
        max-width: 100%;
    }

    .content-mobile {
        display: flex;
        flex: 1;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    .sub-mobile {
        padding: 0 5% 0 5%;
    }

    .strong {
        font-weight: 600;
    }

    .title-header {
        display: block;
    }

    .form-VAD {
        padding-bottom: 10%;
    }
}

@media (min-width: 768px) {
    .f-left {
        text-align: left;
    }

    .f-right {
        text-align: right;
    }

    .session-vad {
        display: flex;
        min-height: 640px;
        max-width: 1440px;
        margin-left: auto;
        margin-right: auto;
        flex-direction: row;
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
    }

    .title-header {
        display: block;
    }

    .form-VAD {
        padding-bottom: 5%;
    }
}

.vad-btn {
    background-color: transparent;
    border: 1px solid #222;
    border-radius: 100px;
    color: #444;
    font-size: 16px;
    font-weight: 300;
    letter-spacing: 1px;
    padding: 8px 15px;
    margin-top: 15px;
    transition: all 0.4s ease-in-out;
}

.vad-btn:hover {
    background: #222;
    border-top-color: transparent;
    border-right-color: transparent;
    border-bottom-color: transparent;
    border-left-color: transparent;
    color: #ffffff;
}</style>         
        <div class="bgwhite"> 
            <div class="form-VAD center fblack"> 
                <div class="section-title" style="padding-top: 5%;"> 
                    <h1><strong>Valued Added</strong></h1> 
                    <p>We are Valued Added Distributor and authorized service for enterprise mobility solutions</p> 
                </div>                 
                <div class="session-vad row-reverse"> 
                    <div class="content-mobile"> 
                        <div class="sub-mobile"> 
                            <h2 class="title-header">Service</h2>
                            <br> 
                            <!--                            <h1 class="strong">DATABAR provides</h1>-->                             
                            <p>DATABAR provides a broad range of experienced sales reps, knowledgeable technical support and skilled professional services to help channel partners to achieve growth in a variety of vertical markets including field force automation, retail, services, healthcare, finance & banking, transport & logistics, manufacturing & supply chain, government and public sector.</p> 
                            <button class="btn btn-success vad-btn" style="margin-bottom: 5%;" onclick="location.href='service.php'">see more</button>                             
                        </div>                         
                    </div>                     
                    <div class="mobile"> 
                        <img src="images/galaxys8broken.png" alt=""> 
                    </div>                     
                </div>                 
                <div class="session-vad"> 
                    <div class="content-mobile"> 
                        <div class="sub-mobile"> 
                            <h2>Product</h2>
                            <br> 
                            <p>DATABAR is business-to-business (B2B) distributor of Samsung enterprise mobility, Samsung KNOX (EMM), 42Gears mobility solutions – SaaS/On-cloud and On-premise, barcode and complementary mobility solutions on Samsung Android, Android, iOS, Windows OS platforms.</p> 
                        </div>                         
                    </div>                     
                    <div class="mobile"> 
                        <img src="images/XandA.png" alt=""> 
                    </div>                     
                </div>                 
                <div class="session-vad row-reverse"> 
                    <div class="content-mobile"> 
                        <div class="sub-mobile"> 
                            <h2>Our mission</h2>
                            <br> 
                            <p>Databar enables to help mobile operators or carriers, independent software providers, system integrators, technology solution providers, value-added resellers (VARs), at what they do best by providing the best products, complementary solutions, proprietary tools and supports in the vertical industries. We aim to enhance your business with seamless provision.</p> 
                            <button class="btn btn-success vad-btn" style="margin-bottom: 5%;" onclick="window.location.href='customer.php'">see more</button>                             
                        </div>                         
                    </div>                     
                    <div class="mobile"> 
                        <img src="images/active-vertical.png" alt=""> 
                    </div>                     
                </div>                 
            </div>             
            <!-- Home Section -->             
            <section id="home" class="main"> 
                <div class="overlay"> 
                    <div class="row" style="padding-left: 10px; padding-right: 10px;margin:10%"> 
                        <div class="col-md-12 col-sm-12 col-xs-12" style="text-align: center;"> 
                            <div class="home-thumb twhite"> 
                                <h1 class="wow fadeInUp" data-wow-delay="0.6s" style="font-family: 'Oxygen';padding-bottom: 3%;">Knox Technology</h1> 
                                <p class="wow fadeInUp" data-wow-delay="0.8s">Knox is a new security feature that is being offered with certain Samsung handsets. It helps you to securely separate your personal and professional data. Essentially, you can have the benefits of using a 'work phone' without the need to carry, and secure, a separate device.</p> 
                                <a href="knox.php" class="wow fadeInUp section-btn btn btn-success smoothScroll" data-wow-delay="1s" style="font-family: 'Open Sans';">Learn more</a> 
                            </div>                             
                        </div>                         
                        <div class="wow fadeInUp" data-wow-delay="0.2s"> 
                            <!-- <img src="images/knoxp.png"  class="img-responsive" style="width: 80%; margin-right: auto; margin-left: auto;"> -->                             
                        </div>                         
                    </div>                     
                </div>                 
            </section>             
        </div>         
        <!-- Footer Section -->         
        <?php
     include 'include/foot.inc';
?> 
        <script>


            </script>         
        <!-- SCRIPTS -->         
        <!--parallax-->         
        <!--
            <script src="js/rellax.js"></script>
            <script src="js/rallaxscroll.js"></script>
-->         
        <!--animation-->         
        <!--
            <script src="aos/dist/aos.js"></script>
            <script src="js/aos.js"></script>
-->         
        <!--            <script src="js/scrollSpeed.js"></script>-->         
        <script src="js/jquery.js"></script>         
        <script src="js/main.js"></script>         
        <!-- Resource jQuery -->         
        <script src="js/bootstrap.js"></script>         
        <script src="js/jquery.magnific-popup.min.js"></script>         
        <script src="js/magnific-popup-options.js"></script>         
        <script src="js/owl.carousel.min.js"></script>         
        <script src="js/smoothscroll.js"></script>         
        <script src="js/wow.min.js"></script>         
        <script src="js/custom.js"></script>         
    </body>     
</html>
