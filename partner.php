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


    <!-- PRE LOADER -->

    <div class="preloader">
        <div class="sk-spinner sk-spinner-pulse"></div>
    </div>



    <div class="visible-md visible-lg visible-sm ">
        <?php
                     include 'include/navlg.inc';
               ?>
    </div>
    <div class="visible-xs">
        <?php
                     include 'include/navsm.inc';
               ?>
    </div>
    <style>
        /* external css: flickity.css */

        * {
            box-sizing: border-box;
        }

        body {
            font-family: sans-serif;
        }

        .carousel {
            background: #FAFAFA;
        }

        .carousel-cell {
            width: 66%;
            height: 200px;
            margin-right: 10px;
            background: #8C8;
            border-radius: 5px;
            counter-increment: carousel-cell;
        }

        /* cell number */
        .carousel-cell:before {
            display: block;
            text-align: center;
            content: counter(carousel-cell);
            line-height: 200px;
            font-size: 80px;
            color: white;
        }

        .button {
            font-size: 22px;
        }

        .button-group {
            margin-bottom: 20px;
        }
    </style>
    <!-- ###################### Start Content ############################# -->



    <!-- ###################### End Content ############################# -->

    <!-- Footer Section -->

    <?php
     include 'include/foot.inc';
?>



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