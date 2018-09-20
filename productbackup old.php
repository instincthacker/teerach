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
    <script type="text/javascript">
        function cutStr($str, $maxChars = '', $holder = '') {

            if (strlen($str) > $maxChars) {
                $str = iconv_substr($str, 0, $maxChars, "UTF-8").$holder;
            }
            return $str;
        }
    </script>
    <style type="text/css">
        h1,
        h2 {
            color: #FFF;
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

    <!-- ###################### Start Content ############################# -->
    <div class="visible-lg visible-md fblack" style=" background-color:  #fff; padding: 100px;">
        <?php
    $sql = "SELECT * FROM groups 
            WHERE Group_Name = '".$_GET['group']."'";
    $query = $conn->query($sql);
      while ($result = $query->fetch_array(MYSQLI_ASSOC)) { ?>
        <h2 style="padding-bottom: 20px;">
            <?= $result['Group_Name'];?>
        </h2>
        <div class="container-fluid">
            <div class="row">
                <?php
          $groupid = $result['Group_ID'];
          }
          $sql = "SELECT * FROM products WHERE Group_ID = '".$groupid."'
                  ORDER BY Sort ASC";
          $query = $conn->query($sql);
          while ($rs = $query->fetch_array(MYSQLI_ASSOC)) { ?>
                <div class="col-md-3 col-xs-12">
                    <div class="panel panel-default" style="min-height: 590px;">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <?= $rs["Pro_Name"]; ?>
                            </h3>
                            <h5 style="margin-top: 0px;">
                                <?= $rs["Pro_Code"]; ?>
                            </h5>
                        </div>
                        <div class="panel-body">
                            <a class="img-hover" href="product-detail.php?pro_id=<?= $rs['Pro_Name'] ?>">
                                <img  class="img-hover-view img-responsive" src="Admin/imgaes/products/<?= $rs["Pic"]; ?>">
                                <div class="item-middle">
                                    <div class="buttom-text">View</div>
                                  </div>
                            </a>
                            <hr>
                            <p>
                                <?php 
                 							if(strlen($rs['Pro_Detail']) > 100) {
                   							echo $subject = substr($rs['Pro_Detail'],0,100)."... ";
										   }
										?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php
							}
  						?>
            </div>
        </div>
    </div>
    <div class="visible-sm visible-xs" style=" background-color: #fff;padding: 50px;">
        <?php
    $sql = "SELECT * FROM groups WHERE Group_Name = '".$_GET['group']."'";
    $query = $conn->query($sql);
      while ($result = $query->fetch_array(MYSQLI_ASSOC)) { ?>
        <h2 style="color: black; padding-bottom: 20px;">
            <?= $result['Group_Name'];?>
        </h2>
        <div class="container-fluid">
            <div class="row">
                <?php
          $groupid = $result['Group_ID'];
          }
          $sql = "SELECT * FROM products WHERE Group_ID = '".$groupid."'";
          $query = $conn->query($sql);
          while ($rs = $query->fetch_array(MYSQLI_ASSOC)) { ?>
                <div class="col-sm-6 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <?= $rs["Pro_Name"]; ?>
                            </h3>
                            <h5 style="margin-top: 0px;">
                                <?= $rs["Pro_Code"]; ?>
                            </h5>
                        </div>
                        <div class="panel-body">
                            <a class="img-hover" href="product-detail.php?pro_id=<?= $rs['Pro_Name']; ?>">
                                <img class="img-hover-view img-responsive" src="Admin/imgaes/products/<?= $rs['Pic']; ?>">
                                <div class="item-middle">
                                    <div class="buttom-text">View</div>
                                  </div>
                            </a>
                        </div>
                    </div>
                </div>
               
                <?php
  						}
  					?>
            </div>
        </div>
    </div>
     <style>
         .img-hover{
             position: relative;
             display: block;
         }
         .buttom-text{
             opacity: 0;
             font-size: 18px;
             padding: 10px 30px;
             background: #1d2d59;
             transition: 0.1s;
             font-weight: 500;
         }
         .img-hover:hover .buttom-text{
             opacity: 1;
         }
                    .img-hover .img-hover-view {
                        opacity: 1;
                        transition: 0.5s;
                    }
                    .img-hover:hover .img-hover-view {
                        opacity: 0.5
                    }
                </style>
    <!-- ###################### End Content ############################# -->
    <!-- Footer Section -->
    <div id="footer-section"></div>



    <!-- SCRIPTS -->

    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
    <!-- Resource jQuery -->

    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-dropdownhover.min.js"></script>
    <script src="js/flickity-docs.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>