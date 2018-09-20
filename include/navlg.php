<?php
include 'condb.php';
?>
<style>
    @media only screen and (min-width: 992px){

    .headerbar {
        background: white;
        text-align: center;
        padding: 10px 0;
    }

    /* Style the navbar */

    /* The sticky class is added to the navbar with JS when it reaches its scroll position */
    .sticky {
        position: fixed;
        top: 0;
        width: 100%;
    }

    .sticky+.bgwhite {
        padding-top: 50px;
    }

    .navdatabar {
        margin: 0 auto;
    }

    .navdatabar>li {
        font-size: 16px;
        margin: 0 auto;
        padding: 11px 0;
        font-weight: 300;
        transition: 0.1s;
        

    }
    .logoDTB{
             padding:  10px 0;
         }
    .navbar-default .navbar-nav > li > a:hover{
        color:#6caadc;
/*        font-weight: 700;*/
        background-color: transparent;
    }
    .navbar-default .navbar-nav > li > a{
        text-decoration: none;
        padding: auto 20px;
        background-color: transparent;
    }
/*
    .navbar-default .navbar-nav > li.active > a{
        color:#6caadc;
        font-weight: 700;
        background-color: transparent;
    }
    .navbar-default .navbar-nav > li.active > a:hover{
        color:#6caadc;
        font-weight: 700;
        background-color: transparent;
    }
*/
    .navbar-default .navbar-nav > .open > a{
        color:#6caadc;
/*        font-weight: 700;*/
        background-color: transparent;
    }
    .navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:focus, .navbar-default .navbar-nav > .open > a:hover{
        color:#6caadc;
/*        font-weight: 700;*/
        background-color: transparent;
    }
    .dropdown-menu li {
        font-size: 14px;
    }

    li.dropdown {
/*        position: initial;*/
        
    }

    .dropdown-menu {
       
/*        width: 30%;*/
        background-color: #fff;
/*        padding:20px;*/
        left: 50%;
        right: auto;
    }
    .dropdown-menu-center {
}

    .dropdown-menu li a {
        padding: 10px 15px;
        font-weight: 600;
    }

    .multi-column-dropdown {
        list-style: none;
        margin: 0px;
        padding: 0px;
    }

    .multi-column-dropdown li a {
        display: block;
        clear: both;
        line-height: 1.428571429;
        color: #333;
        white-space: normal;
        transition: 0.3s; 
    }

    .multi-column-dropdown li a:hover {
        text-decoration: none;
        color: #fff;
        background-color: #1d2d59;
    }
     .logoDTB{
         padding:  10px 0;
     }
     .dropdown-color{
         background-color: #fff;
     }
    .navdatabar li > a{
        color:#555;
    }
    .navdatabar li > a:hover{
            color:#fff;
        }
    #topheader .navbar-nav li.active > a {
        color:#1d2d59;
        font-weight: 700;
        background-color: transparent;
        text-decoration-line: underline;
    }
    #topheader .navbar-nav li.active.line-link::after{
        content:'';
        display: block;
        width: 100%;
        height: 2px;
        background:#1d2d59;
        transition: width .3s;
    }
    .line-link{
        
    }
    #topheader .navbar-nav li.line-link::after{
        content:'';
        display: block;
        width: 0%;
        height: 2px;
        background:#6caadc;
        transition: width .3s;
    }
    #topheader .navbar-nav li.line-link:hover::after{
        width: 100%;
        transition: width .3s;
    }
        .navbar-db{
            max-height: 500px;
        }
.close-button {
  height: 50px;
  width: 50px;
  position: relative;
  box-sizing: border-box;
  line-height: 50px;
  display: inline-block;
}
.close-button:before, .close-button:after {
  transform: rotate(-45deg);
  content: '';
  position: absolute;
  top: 50%;
  left: 50%;
  margin-top: -5px;
  margin-left: -25px;
  display: block;
  height: 5px;
  width: 50px;
  background-color: black;
  transition: all 0.25s ease-out;
}
.close-button:after {
  transform: rotate(-135deg);
}
.close-button:hover:before, .close-button:hover:after {
  transform: rotate(0deg);
}
/*        #topheader{position: sticky; top: 0;}*/
/*        .sticky{width: 100%; background: blue; position: sticky; top: 75px; z-index: 999;}*/
    }
</style>
<nav class="navbar navbar-default navbar-db">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
<!--        <a href="index.php"><img class="logoDTB" src="images/LogoOriginal.png" width="200px"></a>-->
    </div>
</nav>
<div id="topheader">
    <nav class="navbar navbar-default navbar-db navbar-fixed-top" style="z-index:999;">
        <div class="container-databar">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php"><img class="logoDTB" src="images/LogoOriginal.png" width="200px"></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <!--        data-hover="dropdown"-->
                <ul class="nav navbar-nav navbar-right navdatabar" data-hover="dropdown" data-animations="fadeInUp fadeInRight fadeInUp fadeInLeft">
                    <li class="line-link"><a href="aboutus.php">About us</a></li>
                    <li class="line-link"><a id="myProduct" href="#animatedModal">Products <b class="caret"></b></a></li>
                    <li class="line-link"><a href="service.php">Services</a></li>
                    <li class="line-link"><a href="customer.php">Customers</a></li>
                    <li class="line-link"><a href="partners.php">Partners</a></li>
                    <li class="line-link"><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<div id="animatedModal">
    <!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID  class="close-animatedModal" -->
    <div class="container-fluid">
        <div class="row">
            <a href="#" class="close-button close-animatedModal close"></a>
        </div>
    </div>

    <div class="modal-content">
        <section>
            <div class="samsung-non">
                <div class="samsung">
                    <a id="reload" href="products-samsung.php">
                        <img src="images/products/banner/Samsung.jpg" width="100%" alt="">
                        <div class="item-footer item-footer-style3">
                            <h3>Samsung</h3>
                        </div>
                    </a>
                </div>

                <div class="non-samsung">
                    <a id="reload" href="products-nonsamsung.php">
                        <img src="images/products/banner/non-samsung.jpg" width="100%" alt="">
                        <div class="item-footer item-footer-style3">
                            <h3>Non Samsung</h3>
                        </div>
                    </a>
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
                        <a id="reload" href="product-detail.php?pro_id=<?= $rs['Pro_Name'] ?>">
                            <img src="Admin/imgaes/products/<?= $rs['Pic']; ?>" width="100%" class="img-responsive">
                        </a>
                        <div class="item-footer item-footer-style2">
                            <h3>
                                <?= $rs['Pro_Name'] ?>
                            </h3>
                        </div>
                    </div>
                </div>
                <?php
                        }
                    ?>
            </div>
        </div>
    </div>
</div>
<script>
    $(function() {
        $('#topheader .navbar-nav a').each(function() {
            if ($(this).prop('href') == window.location.href) {
                $(this).addClass('active');
                $(this).parents('li').addClass('active');
            }
        });
        $("#myProduct").animatedModal({
            color: '#fff'
        });
        $('.modal-content section a').each(function() {
            if ($(this).prop('href') == window.location.href) {
                 if(!window.location.hash) {
                    window.location = window.location + '#loaded';
                    window.location.reload();
                }
            }
        });
    });
</script>