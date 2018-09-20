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
    <script src="js/jquery.js"></script>
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
        .product-mobile {}

        .pro-mobile {
            width: 19%
        }

        .border-pro-mobile {
            transition: 0.5s;
            border: 1px solid #eee;
            position: relative;
            margin: 3% 1%;
        }
        .border-pro-mobile:hover {
            border: 1px solid black;
        }
        .col-box-small{
            padding: 0 2px;
        }
        .pro-mobile img {
            width: 100%;
            max-height: 500px;
        }
        .btn-product {
            background: transparent;
            border: transparent;
            font-size: 25px;
            float: right;
            transition: 1s;
            padding: 10px 15px;
            margin: 2px;
        }

        .btn-product:hover {
            background: #244293;
            color: white;
            border-radius: 10px;
        }

        .title-header-product {
            position: relative;
            display: table;
            width: 100%;
        }

        .title-header-product .active {
            background: #1d2d59;
            color: white;
            border-radius: 10px;
        }

        .box-btn {
            bottom: 0;
            right: 10px;
            display: block;
            position: absolute;
        }
        .flickity-button {
          background: #333;
        }
        .flickity-button:hover {
          background: #444;
        }
        @media (max-width: 992px) {
            .pro-mobile {
                width: 25%
            }

            .border-pro-mobile .item-footer-style1 p {
                font-size: 12px;
            }
        }

        @media (max-width: 750px) {
            .pro-mobile {
                width: 40%
            }

            .border-pro-mobile .item-footer-style1 p {
                font-size: 10px;
            }

            .btn-product {
                background: transparent;
                border: transparent;
                font-size: 20px;
                float: right;
                transition: 1s;
                padding: 5px 10px;
                margin: 2px;
            }
        }

        /*        .title-header{display: block;}*/
    </style>
    <!-- ###################### Start Content ############################# -->
    <div id="page-banner" class="page-pro-samsung">
        <div class="overlay" style="opacity: 0.4; background: #000;"></div>
        <div class="slider-text-inner text-center box">
            <div class="container rowpage-center calpage-center">
                <div class="page-detail">
                    <h1 class="wow fadeInUp strong" data-wow-delay="0.3s">Products Non Samsung</h1>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid">
        <!--Product-Mobiles-->
        <?php
                $sql = "SELECT * FROM groups WHERE MG_ID = 2";
                $query = $conn->query($sql);
                while ($rs = $query->fetch_array(MYSQLI_ASSOC)) {
            ?>
        <section style="padding:2% 0">
            <div class="title-header-product">
                <h3 style="float:left;"><?= $rs['Group_Name']?></h3>
                <div class="box-btn">
                    <button class="change-view-<?= $rs['Group_ID']?> btn-product"><i class="fas fa-th-large"></i></button>
                    <button class="change-view-<?= $rs['Group_ID']?>2 btn-product active"><i class="fal fa-outdent"></i></button>
                </div>
            </div>
            <div class="cell-pro-<?= $rs['Group_ID']?> row">
                <div class="container-fluid">
                    <div class="product-mobile">
                        <?php
                            $groupid = $rs['Group_ID'];
                            $sql1 = "SELECT * FROM products WHERE Group_ID = '".$groupid."'";
                            $query1 = $conn->query($sql1);
                            while ($rs1 = $query1->fetch_array(MYSQLI_ASSOC)) {
                        ?>
                        <div class="pro-mobile">
                            <div class="border-pro-mobile">
                                <a href="product-detail.php?pro_id=<?= $rs1['Pro_Name']?>">
                                    <img src="Admin/imgaes/products/<?= $rs1['Pic']; ?>">
                                    <div class="item-footer-style1">
                                        <p>
                                            <?= $rs1['Pro_Name']; ?>
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <?php 
            }
            ?>
                    </div>
                </div>
            </div>
            <div class="cell-pro-<?= $rs['Group_ID']?>2 row mfp-hide">
                <?php
            $query2 = $conn->query($sql1);
            while ($rs2 = $query2->fetch_array(MYSQLI_ASSOC)) {
        ?>
                <div class="col-box-small col-lg-2 col-sm-3 col-xs-6">
                    <div class="border-pro-mobile">
                        <a href="product-detail.php?pro_id=<?= $rs2['Pro_Name']?>">
                            <img src="Admin/imgaes/products/<?= $rs2['Pic']; ?>" width="100%">
                            <div class="item-footer-style1">
                                <p>
                                    <?= $rs2['Pro_Name']; ?>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <?php
            }
                ?>
            </div>
            <script>
             //        Products-Mobile
                $(".change-view-<?= $rs['Group_ID']?>").click(function() {
                    $(".cell-pro-<?= $rs['Group_ID']?>2").removeClass("mfp-hide");
                    $(".change-view-<?= $rs['Group_ID']?>2").removeClass("active");
                    $(".cell-pro-<?= $rs['Group_ID']?>").addClass("mfp-hide");
                    $(".change-view-<?= $rs['Group_ID']?>").addClass("active");
                });
                $(".change-view-<?= $rs['Group_ID']?>2").click(function() {
                    $(".cell-pro-<?= $rs['Group_ID']?>").removeClass("mfp-hide");
                    $(".change-view-<?= $rs['Group_ID']?>").removeClass("active");
                    $(".cell-pro-<?= $rs['Group_ID']?>2").addClass("mfp-hide");
                    $(".change-view-<?= $rs['Group_ID']?>2").addClass("active");
                });
            </script>
        </section>
        <?php
            }
                ?>
        </div>


    <!-- ###################### End Content ############################# -->
    <!-- Footer Section -->
    <div id="footer-section"></div>



    <!-- SCRIPTS -->

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