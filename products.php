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
        .samsung-non {
            position: relative;
            display: flex;
            height: auto;
        }
        .samsung {
            flex: 1;
            width: 100%;
            overflow: hidden;
            position: relative;
            
            /*            background: blue;*/
        }
        .samsung img {max-width: 100%; -moz-transition: all 10s;  -webkit-transition: all 10s; transition: all 10s;}
        .samsung:hover img {-moz-transform: scale(1.1); -webkit-transform: scale(1.1); transform: scale(1.1);}
        .non-samsung img {max-width: 100%; -moz-transition: all 10s;  -webkit-transition: all 10s; transition: all 10s;}
        .non-samsung:hover img {-moz-transform: scale(1.1); -webkit-transform: scale(1.1); transform: scale(1.1);}
        .non-samsung {
            flex:1;
            width: 100%;
            overflow: hidden;
            position: relative;
        }
        .item-footer-style3{ padding: 10px 50px; width: 100%; background-image: linear-gradient(transparent, black); transition: all 1s}
        .samsung:hover .item-footer-style3, .non-samsung:hover .item-footer-style3{width: 100%; background-image: linear-gradient(transparent, black);}
        .item-footer-style3 h3, .item-footer-style3 h1, .item-footer-style3 h2{color: #fff;}
        .products{height: 100%; position: relative; padding-bottom: 70px; margin:0 0 100px;}
        .item-footer-style2{text-align: center; width: 100%;}
        .item-footer-style2 h3{color: black; text-align: center; font-weight: 500;}
        .section-pro h2{padding: 5% 5% 2%;}
    </style>
    <!-- ###################### Start Content ############################# -->
    <section>
        <div class="samsung-non">
            <div class="samsung">
               <img src="images/products/banner/Samsung.jpg" width="100%" alt="">
                <div class="item-footer item-footer-style3">
                    <h3>Samsung</h3>                    
                </div>
            </div>

            <div class="non-samsung">
               <img src="images/products/banner/non-samsung.jpg" width="100%" alt="">
                <div class="item-footer item-footer-style3">
                    <h3>Non-Samsung</h3>
                </div>
            </div>
        </div>
    </section>

    <div class="section-pro">
        <h2>Products</h2>
           <div class="row">
            <?php
             $sql = "SELECT * FROM products 
                    WHERE Sort <= 199
                  ORDER BY Sort ASC";
          $query = $conn->query($sql);
          while ($rs = $query->fetch_array(MYSQLI_ASSOC)) { ?>
           
            <div class="col-md-3 col-xs-4">
               <div class="products">
                <a href="product-detail.php?pro_id=<?= $rs['Pro_Name'] ?>">
                    <img src="Admin/imgaes/products/<?= $rs['Pic']; ?>" width="100%" class="img-responsive">
                </a>
                <div class="item-footer item-footer-style2">
                    <h3><?= $rs['Pro_Name'] ?></h3>
                </div>
            </div>
            </div>
            <?php
            }
        ?>
        </div>
    </div>


    <!-- ###################### End Content ############################# -->
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

</body>

</html>