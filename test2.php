<?php

      include 'include/condb.php';

      $sql = "SELECT Cus_Pic,Cus_Url FROM customer Order By Cus_Name";
      $query = $conn->query($sql);
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
</head>

<body>

    <div class="bgwhite" style="height:100vh;">
        <div class="container-databar">
            <style>
                
            </style>
            <div class="content-col2">
                <div class="cont-col1">
                    <img src="ckeditor/kcfinder/upload/images/Products/Samsung%20Galaxy%20XCover%204/xcover4-5.jpg" alt="">
                </div>
                <div class="cont-col2">
                   <div class="cont-text">
                    <h1>Increased touch sensitivity</h1>
                    <p>Keep your hands warm and dry during use. The Galaxy Xcover4 features an intuitive display that lets you interact with your device even with gloves on so you can go on working outside or enjoying outdoor activities without any issue.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ###################### Start Content ############################# -->


    <!-- ###################### End Content ############################# -->

    <!-- Footer Section -->

    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
    <script src="js/slide.js"></script>
    <!-- Resource jQuery -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-dropdownhover.min.js"></script>
    <script src="js/flickity.pkgd.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>